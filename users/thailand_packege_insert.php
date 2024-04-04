<?php
include "../connection.php";

// Start a transaction
mysqli_begin_transaction($conn);

try {
    // Insert data into thailand_customer table
    $random_number = "BCT" . str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
    $customer_name = mysqli_real_escape_string($conn, $_POST['customer_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $travel_date = mysqli_real_escape_string($conn, $_POST['travel_date']);
    $pax = mysqli_real_escape_string($conn, $_POST['pax']);
    $package_inr = mysqli_real_escape_string($conn, $_POST['package_inr']);
    

    $sql_customer = "INSERT INTO thailand_customers (customer_name, email, phone, travel_date, pax,reff_id,package_inr) 
                     VALUES ('$customer_name', '$email', '$phone', '$travel_date', '$pax', '$random_number','$package_inr')";
    
    mysqli_query($conn, $sql_customer);

    // Insert data into thailand_hotel table
    $hotelcity_name = mysqli_real_escape_string($conn, $_POST['hotelcity_name']);
    $hotels = mysqli_real_escape_string($conn, $_POST['hotels']);
    $category_name = mysqli_real_escape_string($conn, $_POST['category_name']);
    $rooms = mysqli_real_escape_string($conn, $_POST['rooms']);
    $nights = mysqli_real_escape_string($conn, $_POST['nights']);
    $ex_adult = mysqli_real_escape_string($conn, $_POST['ex_adults']);
    $hotel_date = mysqli_real_escape_string($conn, $_POST['hotel_date']);

    $sql_hotel = "INSERT INTO thailand_hotel (hotelcity_name, hotels, category_name, rooms, nights, ex_adults, hotel_date, reff_id) 
                  VALUES ('$hotelcity_name', '$hotels', '$category_name', '$rooms', '$nights', '$ex_adult', '$hotel_date', '$random_number')";
    
    mysqli_query($conn, $sql_hotel);

    // Insert data into thailand_transport table
    $transcity_name = mysqli_real_escape_string($conn, $_POST['transcity_name']);
    $transports = mysqli_real_escape_string($conn, $_POST['transports']);
    $trans_pax = mysqli_real_escape_string($conn, $_POST['trans_pax']);
    $transport_date = mysqli_real_escape_string($conn, $_POST['transport_date']);

    $sql_transport = "INSERT INTO thailand_transports (transcity_name, transports, trans_pax, transport_date, reff_id) 
                      VALUES ('$transcity_name', '$transports', '$trans_pax', '$transport_date', '$random_number')";
    
    mysqli_query($conn, $sql_transport);

    // Insert data into thailand_sightseeing table
    $sightcity = mysqli_real_escape_string($conn, $_POST['sightcity']);
    $sightseeing = mysqli_real_escape_string($conn, $_POST['sightseeing']);
    $sight_pax = mysqli_real_escape_string($conn, $_POST['sight_pax']);
    $sight_date = mysqli_real_escape_string($conn, $_POST['sight_date']);

    $sql_sightseeing = "INSERT INTO thailand_sightseeing (sightcity, sightseeing, sight_pax, sight_date, reff_id) 
                        VALUES ('$sightcity', '$sightseeing', '$sight_pax', '$sight_date', '$random_number')";

    mysqli_query($conn, $sql_sightseeing);

    // Commit the transaction
    mysqli_commit($conn);
    // echo  "All data inserted successfully";
    echo "<script>alert('All data inserted successfully'); window.location='thailand_form.php';</script>";


} catch (Exception $e) {
    // Rollback the transaction if any of the queries fail
    mysqli_rollback($conn);
    echo "Error: " . $e->getMessage();
}

// Close database connection
mysqli_close($conn);
?>
