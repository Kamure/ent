
<?php
class register {

    private function submit_button($value){
        echo "<input type = 'submit' value = '{$value}'>";
    }

    public function signup(){
        ?>
        <h2>registration form</h2>
        <form action='submit_signup.php' method='post'>

            <label for='username'>Username:</label>
            <input type='text' id='username' name='username' required><br><br>
            <label for='email'>Email:</label>
            <input type='email' id='email' name='email' required><br><br>
            <label for='password'>password:</label>
            <input type='password'id='password' name='password' required><br><br>

            <?php $this->submit_button('sign Up'); ?> 
    </form>
    <?php
    }
    
}
