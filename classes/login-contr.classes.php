<?php
class SignupContr extends signup
{
    private $student_id;
    private $username;
    private $password;
    private $email;
    private $description;

    public function __construct($student_id, $username, $password, $email, $description)
    {
        $this->student_id = $student_id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->description = $description;
    }

    public function signupstudent()
    {
        if ($this->emptyInput() == false) {
            header("location: ../signup.php?error=emptyInput");
            exit();
        }
        if ($this->invalidUserName() == false) {
            header("location: ../signup.php?error=invalidUserName");
            exit();
        }
        if ($this->invalidEmail() == false) {
            header("location: ../signup.php?error=invalidEmail");
            exit();
        }
        if ($this->SIdcheck() == false) {
            header("location: ../signup.php?error=SIdcheck");
            exit();
        }
        $this->setstudent($this->student_id, $this->username, $this->password, $this->email, $this->description);
    }

    private function emptyInput()
    {

        if (
            empty($this->student_id) || empty($this->username) || empty($this->password) || empty($this->email)
            || empty($this->description)
        ) {
            $result = false;

        } else {
            $result = true;
        }
        return $result;
    }

    private function invalidUserName()
    {


        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }
    private function invalidEmail()
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {

            $result = false;

        } else {

            $result = true;

        }
        return $result;
    }
    private function SIdcheck()
    {
        if (!$this->checkstudent($this->username, $this->email)) {

            $result = false;

        } else {

            $result = true;

        }
        return $result;
    }
}