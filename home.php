<!DOCTYPE html>
<html>
    <head>
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lobster&display=swap');
            </style>
        <link rel="stylesheet" href="style.css">
        <title>AWS</title>

    </head>
    <body>
    <?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname="database";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if(isset($_POST['Create Stack'])) {
    $_SESSION['username'] = $_POST['username'];
    }
$sql = "INSERT INTO Database (descs, keypair, instancetype, dbname, dbuser, dbpass, dbrpass)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

        <div>
            <div class="container-inner">
            
                <h3>STACK NAME</h3>
                <input type="text" placeholder="Stack Name" id="stackName">
                <div style="margin:10px 10px;">
                    <input type="radio" id="default" name="select" value="default">
                    <label for="default">Default</label>
                    <input type="radio" id="customize" name="select" value="customize">
                    <label for="customize">Customise</label><br>
                    
                </div>
                
                <form action="home.php" method="post">
                <div id="templateDetails"  style="display: none;">
                    
                    
                    <h4
                    >CUSTOMISE YOUR STACK</h4>
                    
                    <h5 class="text-styling">Description</h5>
                    <input type="text" placeholder="Description about the instance type you are about to create." value="" name="descs">
                    <h5 class="text-styling">KeyPair</h5>
                    <input type="text" placeholder="Key Pair" value="" name="keypair">
                    <h5 class="text-styling">InstanceType</h5>
                    <input type="text" placeholder="Instance Type" value="" name="ins">
                    <h5 class="text-styling">DBname</h5>
                    <input type="text" placeholder="DB Name" value="" name="dbname">
                    <h5 class="text-styling">DBuser</h5>
                    <input type="text" placeholder="DB User" value="" name="dbuser">
                    <h5 class="text-styling">DBpassword</h5>
                    <input type="text" placeholder="DB Password" value="" name="dbpass">
                    <h5 class="text-styling">DBRootPassword</h5>
                    <input type="text" placeholder="DBRootPassword" value="" name="dbrpass">

                    <br>
                
                    <button value="Create" type="submit" name="create">Create Stack</button>
                </div>
                </form>
            </div>
        </div>

        <script src="script.js"></script>
    </body>
    
</html>1