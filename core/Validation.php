<?php

require_once __DIR__ . "/Database.php";

class Validation
{
    private array $data;

    private array $rules;

    private array $errors = [];

    public function __construct(array $data, array $rules)
    {
        $this->data = $data;
        $this->rules = $rules;
    }

    public function validate(): array
    {
        foreach ($this->rules as $fieled => $rules) {

            $value = $this->data[$fieled] ?? null;

            foreach ($rules as $rule) {

                if (is_string($rule)) {

                    if ($rule === 'required') {
                        $this->validateRequired($fieled, $value);
                    } elseif ($rule === 'email') {
                        $this->validateEmail($fieled, $value);
                    }
                } else if (is_array($rule)) {
                    if ($rule[0] == 'min') {
                        $this->validateMin($fieled, $value, $rule[1]);
                    } elseif ($rule[0] === 'unique') {
                        $this->validateUnique($fieled, $value, $rule[1]);
                    }elseif ($rule[0] === 'exists') {
                        $this->validateExists($fieled, $value, $rule[1], $rule[2]);
                    }
                }
            }
        }


        return $this->errors;
    }


    private function validateRequired(string $fieled, mixed $value): void
    {
        if ($value === null || trim((string)$value) === "") {
            $this->addError($fieled, "{$fieled} is required");
        }
    }

    private function addError(string $fieled, string $msg): void
    {
        $this->errors[$fieled][] = $msg;
    }

    private function validateEmail(string $fieled, mixed $value): void
    {

        if (empty($value)) {
            return;
        }

        $regex = "/^[A-Za-z_][A-Za-z_0-9\.\-]+@(gmail|yahoo)\.(com|org)$/";

        if (!preg_match($regex, $value)) {
            $this->addError($fieled, "{$fieled} must be valid email");
        }
    }

    private function validateMin(string $fieled, mixed $value, int $min = 8): void
    {

        if (empty($value)) {
            return;
        }

        if (strlen($value) < $min) {
            $this->addError($fieled, "{$fieled} must be at least {$min} characters");
        }
    }

    private function validateUnique(string $fieled, mixed $value, string $tableName): void
    {
        $DB = Database::getConnection();

        $stmt = $DB->query("SELECT * FROM {$tableName} WHERE {$fieled} = '{$value}';");

        $result = $stmt->fetchAll();

        if (!empty($result)) {
            $this->addError($fieled, "{$fieled} is alredy exists");
        }
    }

    private function validateExists(string $fieled, mixed $value, string $tableName, string $columnName): void
    {
        $DB = Database::getConnection();

        $stmt = $DB->query("SELECT * FROM {$tableName} WHERE {$columnName} = '{$value}';");

        $result = $stmt->fetchAll();

        if (empty($result)) {
            $this->addError($fieled, "{$fieled} is not exists");
        }
    }
}
