<?php
class signup extends Dbh
{
    protected function setStudent($student_id, $username, $password, $email, $description)
    {
        $stmt = $this->connect()->prepare("INSERT INTO students (student_id,email,password,username,description) VALUE (?,?,?,?,?) ");
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($student_id, $username, $hashed_password, $email, $description))) {
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        $stmt = null;

    }

    protected function checkstudent($student_id, $email)
    {
        $stmt = $this->connect()->prepare("SELECT student_id FROM students WHERE student_id = ? OR email = ?;' ");

        if (!$stmt->execute(array($student_id, $email))) {
            $stmt = null;
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        if ($stmt->rowCount() > 0) {
            $resultcheck = false;
        } else {
            $resultcheck = true;
        }
        return $resultcheck;
    }
}