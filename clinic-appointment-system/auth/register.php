<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class register {

    private function submit_button($value){
        echo "<input type='submit' value='{$value}'>";
    }

    public function signup(){
        ?>
        <h2>Registration Form</h2>
        <form action='reg_process.php' method='post'>
            <label for='username'>Username:</label>
            <input type='text' id='username' name='username' required><br><br>

            <label for='email'>Email:</label>
            <input type='email' id='email' name='email' required><br><br>

            <label for='password'>Password:</label>
            <input type='password' id='password' name='password' required><br><br>

            <?php $this->submit_button('Sign Up'); ?>
        </form>
        <?php
    }
}

$reg = new register();
$reg->signup();