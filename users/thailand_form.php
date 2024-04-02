<?php
include "../connection.php";
session_start();
if (($_SESSION["usersID"] == "")) {
    header("Location:../index");
}
?>
<style>
    .d-flex {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .form-row {
        margin: 5px;
    }
</style>

<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Thailand Package Form</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Layouts</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Thailand Trip Package</h5>
                        <form class="row g-3">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" placeholder="Phone" required>
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control date-input" placeholder="Date" required>
                            </div>
                            <div class="col-md-6">
                                <input type="number" class="form-control" placeholder="PAX" required>
                            </div>
                            <!-- <div class="col-12">
                                <input type="text" class="form-control" placeholder="Address" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="City" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" placeholder="State">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Pincode">
                            </div> -->
                            <br>
                            <br>
                            <h1 class="text-center text-info">THAILAND</h1>
                            <div class="main bg-info">
                                <div id="formContainer" class="d-flex justify-content-center">
                                    <div class="form-rows-container d-flex">
                                        <div class="form-row mx-1">
                                            <?php
                                            $query = "SELECT *
                                                     FROM cities";
                                            $result = mysqli_query($conn, $query);
                                            ?>
                                            <label for="city">City:</label>
                                            <select class="form-control select2" name="city" id="city">
                                                <option value="disabled">Select City</option>
                                                <?php
                                                if ($result && mysqli_num_rows($result) > 0) {
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                        <option value="<?php echo $row['city_id']; ?>"><?php echo $row['city_name']; ?></option>
                                                <?php
                                                    }
                                                } else {
                                                    echo '<option disabled>No cities found</option>';
                                                }
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Hotel:</label>
                                            <select class="form-control" name="hotel" id="hotel">
                                                <option value="disabled">Select Hotel</option>
                                            </select>
                                            <?php
                                            // $cityId = $_POST['city_id']; 
                                            // $query = "SELECT * FROM hotels WHERE hcity_id = $cityId";
                                            // $result = mysqli_query($conn, $query);
                                            // $options = '<option value="disabled">Select Hotel</option>';
                                            // while ($row = mysqli_fetch_assoc($result)) {
                                            //     $options .= '<option value="' . $row['hotel_id'] . '">' . $row['hotel_name'] . '</option>';
                                            // }
                                            ?>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="category">Category:</label>
                                            <select class="form-control" name="category" id="category">
                                                <option value="disabled">Select Category</option>
                                                <option value="deluxe">Deluxe</option>
                                                <option value="premium">Premium</option>
                                                <option value="superior">Superior</option>
                                                <option value="suite">Suite</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">Rooms:</label>
                                            <select class="form-control" name="rooms">
                                                <option value="disabled">Select Rooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="nights">Nights:</label>
                                            <select class="form-control" name="nights">
                                                <option value="disabled">Select Nights</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="adults">Adults:</label>
                                            <select class="form-control" name="adults">
                                                <option value="disabled">Select Adults</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="checkinDate">
                                        </div>
                                    </div>
                                </div>

                                <button type="button" id="addButton" class="btn btn-primary">Add</button>
                                <!-- city transport -->
                                <div id="formContainer1" class="d-flex justify-content-center">
                                    <div class="form-rows-container-1 d-flex">
                                        <div class="form-row mx-1">
                                            <label for="city">City:</label>
                                            <select class="form-control" name="city">
                                                <option value="disabled">Select City</option>
                                                <option value="newyork">New York</option>
                                                <option value="london">London</option>
                                                <option value="paris">Paris</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Transport:</label>
                                            <select class="form-control" name="hotel">
                                                <option value="disabled">Select Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="rooms">
                                                <option value="disabled">Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="checkinDate">
                                        </div>

                                    </div>
                                </div>
                                <button type="button" id="addButton1" class="btn btn-primary">Add</button>

                                <!-- end transport -->
                                <div id="formContainer2" class="d-flex justify-content-center">
                                    <div class="form-rows-container-2 d-flex">
                                        <div class="form-row mx-1">
                                            <label for="city">City:</label>
                                            <select class="form-control" name="city">
                                                <option value="disabled">Select City</option>
                                                <option value="newyork">New York</option>
                                                <option value="london">London</option>
                                                <option value="paris">Paris</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="hotel">Sightseeing:</label>
                                            <select class="form-control" name="hotel">
                                                <option value="disabled">Select Sightseeing</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="rooms">No of Persion:</label>
                                            <select class="form-control" name="rooms">
                                                <option value="disabled">Select Persion</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                        <div class="form-row mx-1">
                                            <label for="checkinDate">Check-in Date:</label>
                                            <input type="date" class="form-control checkin-date" name="checkinDate">
                                        </div>

                                    </div>
                                </div>
                                <button type="button" id="addButton2" class="btn btn-primary">Add</button>
                            </div>
                            <!-- main div close -->
                            <table>
                                <tr class="">
                                    <th>Remarks:</th>
                                    <td><input type="text" name="remarks"><br></td>
                                </tr>
                                <tr class="p-3">
                                    <th>Total THB:
                                    <th>
                                        <!-- <td>12334</td> -->

                                </tr>
                                <tr>
                                    <th>THB TO INR Rate:</th>
                                    <!-- <td>15</td> -->
                                </tr>
                                <tr>
                                    <th>Srvice per person INR Rate:</th>
                                    <!-- <td>1522</td> -->
                                </tr>
                                <tr>
                                    <th>Total INR:</th>
                                    <!-- <td>1522</td> -->
                                </tr>
                            </table>
                            <button type="submit" class="btn btn-sm btn-block btn-primary" name="submit">Calculate</button>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- End No Labels Form -->

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->


<?php include("footer.php") ?>
<script>
    $(document).ready(function() {
        $("#addButton").click(function() {
            var clone = $("#formContainer").find(".form-rows-container").first().clone();
            clone.find('input, select').val('');
            clone.find("select").val("disabled");
            clone.find('.removeButton').remove();
            clone.find('.form-row').last().append('<button type="button" class="btn btn-danger removeButton">Remove</button>');
            $("#formContainer").append(clone);
        });

        $(document).on("click", ".removeButton", function() {
            $(this).closest(".form-rows-container").remove();
        });
    });
    $(document).ready(function() {
        $("#addButton1").click(function() {
            var clone = $("#formContainer1").find(".form-rows-container-1").first().clone();
            clone.find('input, select').val('');
            clone.find("select").val("disabled");
            clone.find('.removeButton').remove();
            clone.find('.form-row').last().append('<button type="button" class="btn btn-danger removeButton">Remove</button>');
            $("#formContainer1").append(clone);
        });

        $(document).on("click", ".removeButton", function() {
            $(this).closest(".form-rows-container-1").remove();
        });
    });
    $(document).ready(function() {
        $("#addButton2").click(function() {
            var clone = $("#formContainer2").find(".form-rows-container-2").first().clone();
            clone.find('input, select').val('');
            clone.find("select").val("disabled");
            clone.find('.removeButton').remove();
            clone.find('.form-row').last().append('<button type="button" class="btn btn-danger removeButton">Remove</button>');
            $("#formContainer2").append(clone);
        });

        $(document).on("click", ".removeButton", function() {
            $(this).closest(".form-rows-container-2").remove();
        });
    });
</script>
<script>
    //date
    $(document).ready(function() {
        $('.date-input').change(function() {
            var selectedDate = $(this).val();
            $('.checkin-date').val(selectedDate);
        });
    });
</script>

<script>
document.getElementById('city').addEventListener('change', function() {
    var cityId = this.value;

    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
  
    // Configure it: GET-request for the URL /fetch_data.php
    xhr.open('POST', 'hotel.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    
    // Send the request over the network
    xhr.send('city_id=' + encodeURIComponent(cityId));
    
    // Define a callback function
    xhr.onload = function() {
        if (xhr.status == 200) {
           
    
            // Update the data container with the received response
            document.getElementById('data-container').innerHTML = xhr.responseText;
             alert(cityId);
        }
        else {
            // Error handling
            console.error('Request failed.  Returned status of ' + xhr.status);
        }
    };
});
</script>