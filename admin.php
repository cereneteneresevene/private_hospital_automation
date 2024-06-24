<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Peran Vakıf Hastanesi</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/css/admin.css" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Peran Vakıf Hastanesi</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Yönetim Paneli</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Yönetim
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="doctor_add.php"  data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Doktor Ekle</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="departman_add.php"
                    data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Departman Ekle</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="adminupdate.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Veri Silme</span></a>
            </li>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" id="userDropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ceren Tanrıseven-Admin</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Toplam Randevu</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "hospital";

                        $conn = new mysqli($servername, $username, $password, $database);

                        if ($conn->connect_error) {
                            die("Bağlantı hatası: " . $conn->connect_error);
                        }

                        $sql = "SELECT COUNT(*) AS total FROM randevular";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo $row["total"];
                        } else {
                            echo "0";
                        }

                        $conn->close();
                        ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) AS doctor_count FROM doctors";
$result = $conn->query($sql);

$doctor_count = 0;
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $doctor_count = $row["doctor_count"];
}

$conn->close();
?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Doktor Sayısı</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $doctor_count; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-md fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) AS total_departments FROM departments";
$result = $conn->query($sql);

echo '<div class="col-xl-3 col-md-6 mb-4">';
echo '<div class="card border-left-success shadow h-100 py-2">';
echo '<div class="card-body">';
echo '<div class="row no-gutters align-items-center">';
echo '<div class="col mr-2">';
echo '<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Departman Sayısı</div>';

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">' . $row["total_departments"] . '</div>';
} else {
    echo '<div class="h5 mb-0 font-weight-bold text-gray-800">0</div>';
}

echo '</div>';
echo '<div class="col-auto">';
echo '<i class="fas fa-hospital fa-2x text-gray-300"></i>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

$conn->close();
?>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Ad</th>
                                    <th>Soyad</th>
                                    <th>Telefon</th>
                                    <th>Tarih</th>
                                    <th>Alınan Bölüm</th>
                                    <th>Doktor</th>
                                    <th>Mesaj</th>
                                </tr>
                            </thead>
                            <h3>Alınan Randevular</h3>
                            <tbody>
                                <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "hospital";

            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                die("Bağlantı hatası: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM randevular";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row["name"] . '</td>';
                    echo '<td>' . $row["email"] . '</td>';
                    echo '<td>' . $row["phone"] . '</td>';
                    echo '<td>' . $row["date"] . '</td>';
                    echo '<td>' . $row["department"] . '</td>';
                    echo '<td>' . $row["doctor"] . '</td>';
                    echo '<td>' . $row["message"] . '</td>';
                    echo '</tr>';
                }
            } else {
                echo "<tr><td colspan='7'>Kayıt bulunamadı</td></tr>";
            }

            $conn->close();
            ?>
                            </tbody>
                        </table>
                    </div>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Doktor Listesi</title>
                        <style>
                            table {
                                font-family: Arial, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                            }
                            td,
                            th {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                            }
                            th {
                                background-color: #f2f2f2;
                            }
                        </style>
                    </head>
                    <br><br><br>
                    <body>
                        <h2>Doktor Listesi</h2>
                        <table>
                            <tr>
                                <th>Ad</th>
                                <th>Soyad</th>
                                <th>Bölüm</th>
                                <th>Resim</th>
                            </tr>
                            <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "hospital";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Bağlantı hatası: " . $conn->connect_error);
        }
        $sql = "SELECT doctors.*, departments.department_name AS department_name 
                    FROM doctors 
                    LEFT JOIN departments ON doctors.department_id = departments.id";

        $result = $conn->query($sql);
                            if (!$result) {
                                die("Sorgu hatası: " . $conn->error);
                            }

                            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["surname"] . "</td>";
                echo "<td>" . $row["department_name"] . "</td>";
                echo "<td><img src='assets/img/doctors/" . $row["image"] . "' alt='" . $row["name"] . "' width='100'></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Kayıt bulunamadı</td></tr>";
        }

        $conn->close();
        ?>
                        </table>
                    </body>
                    </html>
                    <br><br><br>
                    <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$sql = "SELECT * FROM departments";
$result = $conn->query($sql);

echo '<table>';
echo '<tr>';
echo '<th>Hastanedeki Bölümler</th>';
echo '</tr>';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row["department_name"] . '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr>';
    echo '<td>Departman bulunamadı</td>';
    echo '</tr>';
}

echo '</table>';

$conn->close();
?>
                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright cereneteneresevene </span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>