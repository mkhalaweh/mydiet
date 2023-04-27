
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valuetosearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `Accounts` WHERE CONCAT(`user_id`, `user_first`, `user_last`, `user_email`, `user_usrname`) LIKE '%".$valueToSearch."%'";
    $result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `Accounts`";
    $result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "EasyDiet");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
}