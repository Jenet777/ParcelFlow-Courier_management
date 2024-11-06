<?php
include('head.php');
?>

<style>
    body {
        background-image: url('../images/5551.jpg');
        background-size: cover;
    }
    .search-container {
        text-align: right;
        margin-top: 20px;
        margin-right: 20px; /* Adjust margin as needed */
    }
    .search-container input[type=text] {
        padding: 10px;
        margin-right: 10px; /* Adjust margin as needed */
        border-radius: 5px;
        border: 3px solid blue;
        font-size: 16px;
        width: 200px; /* Adjust width as needed */
    }
    .search-container button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: blue;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }
    .search-container button:hover {
        background-color: #45a049;
    }
</style>

<div class="admintitle">
    <div>
        <h5><a href="dashboard.php" style="float: left; margin-left:20px; color:blue;">BackToDashboard</a></h5>
        <h5><a href="logout.php" style="float: right; margin-right:20px; color:blue;">LogOut</a></h5>
    </div>
    <h1 align='center' style="text-shadow: 0.1em 0.1em 0.15em #f9829b;">Showing All Users</h1>
</div>

<div class="search-container">
    <form method="POST" action="">
        <input type="text" name="search" placeholder="Search by name">
        <button type="submit" name="submit">Search</button>
    </form>
</div>

<div style="overflow-x:auto;">
    <table width='80%' border="1px solid" style="margin-left: auto; margin-right:auto; margin-top:30px; font-weight:bold;font-size: 30px;border-collapse: collapse;">
        <tr style="background-color: yellow;">
            <th>No.</th>
            <th>Users Name</th>
            <th>Email Id</th>
            <th>Action</th>
        </tr>
        <?php

        include('../dbconnection.php');

        // Check if the search form is submitted
        if (isset($_POST['submit'])) {
            $search = $_POST['search'];
            $qry = "SELECT * FROM `users` WHERE `name` LIKE '%$search%'"; // Filter by name
        } else {
            $qry = "SELECT * FROM `users`";
        }

        $run = mysqli_query($dbcon, $qry);

        if (mysqli_num_rows($run) < 1) {
            echo "<tr><td colspan='6'>There is no Data in Database</td></tr>";
        } else {
            $count = 0;
            while ($data = mysqli_fetch_assoc($run)) {
                $count++;
        ?>
                <tr align="center">
                    <td><?php echo $count; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><a href="usersdeleted.php?emm=<?php echo $data['email']; ?>">DeleteUser</a></td>
                </tr>
        <?php
            }
        }

        ?>

    </table>
</div>
