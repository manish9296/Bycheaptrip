<?php 
include "../connection.php";

// Check if city_id is set in the POST data
if(isset($_POST['hotel_id'])) {
    $hotel_id = $_POST['hotel_id'];

    // Query to select hotels for the given city_id
    $query = "SELECT hcategory_id, category_name, prices FROM hotel_categories WHERE hc_id='" . $hotel_id . "' ORDER BY category_name ASC";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if query executed successfully
    if($result) {
        // Check if any hotels are found
        if(mysqli_num_rows($result) > 0) {
            // Loop through the results and create options
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['prices'] ?>"><?php echo $row['category_name'] . " - $" . $row['prices'] ?></option>
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