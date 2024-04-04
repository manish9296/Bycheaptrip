<?php include "../connection.php";
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
        <h1>General Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">General</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
          
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Thailand Package Datails</h5>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Reff#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Pax</th>
                                    <th scope="col">Package INR</th>
                                    <th scope="col">Travel Date</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>BCT152340</td>
                                    <td>Brandon Jacob</td>
                                    <td>dW3pN@example.com</td>
                                    <td>1234567890</td>
                                    <td>2</td>
                                    <td>2000</td>
                                    <td>25-05-2024</td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>BCT152340</td>
                                    <td>Brandon Jacob</td>
                                    <td>dW3pN@example.com</td>
                                    <td>1234567890</td>
                                    <td>2</td>
                                    <td>2000</td>
                                    <td>25-05-2024</td>
                                    
                                </tr>
                                    
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

                

            </div>
        </div>
    </section>

</main><!-- End #main -->

<?php include('footer.php'); ?>