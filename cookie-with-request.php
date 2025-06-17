<?php
$cookieMessage = "";

if (isset($_REQUEST["button"])) {
    if ($_REQUEST["button"] == "set") {
        $val = $_REQUEST["username"];
        setcookie("username", $val, time() + 3600); // set cookie for 1 hour
        $cookieMessage = "cookie is set to " . htmlspecialchars($val);
    }

    if ($_REQUEST["button"] == "delete") {
        setcookie("username", "", time() - 3600); // delete cookie
        $cookieMessage = "cookie is deleted";
    }
}
?>

<form action="" method="post">
    <input type="text" name="username" placeholder="enter username">
    <br><br>
    <button name="button" value="set">set cookies</button>
    <br><br>
    <button name="button" value="display">display cookies</button>
    <br><br>
    <button name="button" value="delete">delete cookies</button>
</form>

<?php
if (!empty($cookieMessage)) {
    echo $cookieMessage;
}

if (isset($_REQUEST["button"]) && $_REQUEST["button"] == "display") {
    if (isset($_COOKIE["username"])) {
        echo "Cookie value: " . htmlspecialchars($_COOKIE["username"]);
    } else {
        echo "No cookie found.";
    }
}
?>
