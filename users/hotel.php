<?php 
include "../connection.php";

if(isset($_POST['city_id'])) {
    $city_id = $_POST['city_id'];
    $query = "SELECT * FROM hotels WHERE hcity_id='" . $city_id . "' ORDER BY hotel_name ASC";
    $result = mysqli_query($conn, $query);
    if($result) {
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['hotel_id'] ?>"><?php echo $row['hotel_name'] ?></option>
                <?php 
            }
        } else {
            echo '<option value="disabled">No hotels found</option>';
        }
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }
} else {
    echo "City ID is not set.";
}
?>