    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn btn-dark">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="input-group w-50 ml-4">
                    <input type="search" class="form-control" placeholder="Search...">
                    <button type="submit" class="btn"><i class="fa fa-search fa-lg"></i></button>
                </div>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-bell-o fa-lg mr-5 mt-2" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item">
                        <ul class="navbar-nav bg-body-secondary ">
                            <li style="display: flex; justify-content: center;
                            align-items: center;" class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle mr-4" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="../assets/img/icon-5359553_1280.webp" width="40" height="40" class="rounded-circle">
                                <a  style="margin-right: 20px;"class="dropdown-item" href="#">Admin</a>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="../Auth/Login.php">Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>