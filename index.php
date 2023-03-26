 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESESE CONFESSIONS</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
   
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css">
    <script src="js/sweetalert.js"></script>
 </head>
 <body>
<?php
    include("config.php"); 
    session_start();
    include("post.php");   
?>
    <!-- Navbar-->

    <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <!-- Container wrapper -->
            <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="">
                <img
                src="img/logo2.png"
                height="50"
                alt="MDB Logo"
                loading="lazy"
                style="margin-top: -1px;"
                />
            </a>
        
            <!-- Toggle button -->
            <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarButtonsExample"
                aria-controls="navbarButtonsExample"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>
        
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
          
                </li>
                </ul>
                <!-- Left links -->
        
                <div class="d-flex align-items-center">
                <button type="button" class="btn btn-success px-3 me-2">
                    Login
                </button>
                <button type="button" class="btn btn-success me-3">
                    Sign up for free
                </button>
                <a
                    class="btn btn-dark px-3"
                    href="https://github.com/Mharc2000"
                    role="button"
                    ><i class="fab fa-github"></i
                ></a>
                </div>
            </div>
            <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>
  <!-- Navbar -->

    <!-- MainShit-->
    <main>
    <!-- POST CARD-->
    <div class="container">

        <div class="card bg-dark mt-4">
            <div class="card-body">

             
                <input
                    class="form-control"
                    id="formControlReadonly"
                    type="button"
                    value="Write a message or confession here.."
                    aria-label="Write-message"
                    readonly

                    data-mdb-toggle="modal"
                    data-mdb-target="#exampleModal"
                />


                          <!-- Modal -->
                  
            </div>
        </div>


        <!--Posted Message-->



        <?php
            $query = "SELECT * FROM users ORDER BY id DESC";  
            $result = mysqli_query($connect, $query);
            while($row = mysqli_fetch_array($result)):?>

            <div class="card bg-dark mt-4">

            <div class="d-flex justify-content-between mt-3">
                <h5 class="text-light mx-3"><?php echo $row['Name']; ?></h5>
                <small class="text-light mx-3"><?php echo date('F d, Y | g:i A',strtotime($row['Date'])); ?></small>
                <small class="text-light mx-3"><?php
                    if (!function_exists('time_elapsed_string')) {
                        function time_elapsed_string($datetime, $timezone = null, $full = false) {
                            $now = new DateTime('now', new DateTimeZone($timezone ?: date_default_timezone_get()));
                            $ago = new DateTime($datetime, new DateTimeZone($timezone ?: date_default_timezone_get()));
                            $diff = $now->diff($ago);
                            
                            $intervals = array(
                                'year' => $diff->y,
                                'month' => $diff->m,
                                'week' => floor($diff->d / 7),
                                'day' => $diff->d % 7,
                                'hour' => $diff->h,
                                'minute' => $diff->i,
                                'second' => $diff->s
                            );
                            
                            foreach ($intervals as $interval => $value) {
                                if ($value > 0) {
                                    return "$value $interval" . ($value === 1 ? '' : 's') . " ago";
                                }
                            }
                            
                            return "just now";
                        }
                        
                        
                    }
                    
                    echo time_elapsed_string($row['Date'], 'Asia/Manila'); // example usage    
                

      
            
                 ?></small>
            </div>

            <hr class="bg-light">

            <div class="mt-3 mx-4 my-4 text-light">
                <h4><?php echo $row['Message']; ?></h4>
            </div>

            <hr>

            <div class="card-footer bg-transparent border-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex">
                        <a href="#" class="text-light mx-3"><i class="fas fa-heart"></i></a>
                        <a href="#" class="text-light mx-3"><i class="fas fa-comment"></i></a>
                        <a href="#" class="text-light mx-3"><i class="fas fa-share"></i></a>
                    </div>
                    <div class="dropdown">
                        <a 
                        href="#" 
                        class="text-light mx-3"
                        id="dropdownMenuLink"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false"
                        
                        ><i class="fas fa-ellipsis-h"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Report</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>

            </div>

                                               
        <?php endwhile; ?>





    </div>


    </main>




    <!-- Footer-->

    <footer class="bg-dark text-center text-lg-start sticky-bottom mt-3">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2023 Copyright:
          <a class="text-light" href="">ITE DROPBOX TEAM</a>
        </div>
        <!-- Copyright -->
    </footer>

       <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark d-flex justify-content-center">
            <div class="modal-header bg-dark">
            <h5 class="modal-title text-light" id="exampleModalLabel">Create Post</h5>
          
            </div>
            <form action="" method="POST">
                <div class="modal-body">

                    <div class="form-outline">
                        <input type="text" id="typeName" name="Name" value="<?php
                            $prefix = "Anonymous";
                            $randomNumber = rand(100000, 999999);
                            $username = $prefix . $randomNumber;
                            echo $username;?>" class="form-control text-light" />
        
                        <label class="form-label text-light" for="typeEmail">Name</label>
                    </div>
                    <div class="form-outline mt-3">
                        <textarea class="form-control text-light" name="Message" id="textAreaExample" rows="4"></textarea>
                        <label class="form-label text-light" for="textAreaExample" required>Message</label>
                    </div>
                    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-light" data-mdb-dismiss="modal">Close</button>
                <button  type="submit" name="POSTED" class="btn btn-success">POST</button>
            </div>

            </form>
              
        </div>
        </div>
    </div>

    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
    ></script>

 </body>

 
 </html>