<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard Admin | Version 1.0</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="libraries/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="libraries/fontawesome/css/all.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link id="css-dark" rel="stylesheet" type="text/css" href="styles/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,400,700&&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet" />

</head>

<body>
    <div class="nav-container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">Brand Name</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Message</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- main  -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!-- search  -->
                <div class="search">
                    <label for="">
                        <input type="text" placeholder="Search Here" name="" id="">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="menu-right">
                    <!-- dark mode  -->
                    <div class="dark-mode">
                        <a type="checkbox" class="darks" data-id="1">
                            <ion-icon name="sunny-outline" class="icon-lamp"></ion-icon>
                        </a>
                    </div>
                    <!-- user img  -->
                    <div class="user">
                        <img src="/images/user.jpg" alt="">
                    </div>
                </div>
            </div>

            <!-- card  -->
            <div class="cardbox">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card-content">
                            <div>
                                <div class="numbers">1,504</div>
                                <div class="card-name">Views</div>
                            </div>
                            <div class="iconbx">
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card-content">
                            <div>
                                <div class="numbers">80</div>
                                <div class="card-name">Sales</div>
                            </div>
                            <div class="iconbx">
                                <ion-icon name="cart-outline"></ion-icon>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card-content">
                            <div>
                                <div class="numbers">284</div>
                                <div class="card-name">Comment</div>
                            </div>
                            <div class="iconbx">
                                <ion-icon name="chatbox-outline"></ion-icon>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card-content">
                            <div>
                                <div class="numbers">$1.294</div>
                                <div class="card-name">Earning</div>
                            </div>
                            <div class="iconbx">
                                <ion-icon name="cash-outline"></ion-icon>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- chart  -->
            <div class="grapbox">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="box">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="box">
                            <canvas id="earning"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- order data list  -->
            <div class="details">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="recent-detail">
                            <div class="card-header-detail">
                                <h2>Recent Order</h2>
                                <a href="#" class="btn">View All</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table-order">
                                    <thead class="thead-order">
                                        <tr class="tr-order">
                                            <th class="th-order">Name</th>
                                            <th class="th-order">Price</th>
                                            <th class="th-order">Payment</th>
                                            <th class="th-order">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="tbody-order">
                                        <tr class="tr-order">
                                            <td class="td-order">Dicki Prasetya</td>
                                            <td class="td-order">$1.200</td>
                                            <td class="td-order">Paid</td>
                                            <td class="td-order"><span class="status delivered">Delivered</span></td>
                                        </tr>
                                        <tr class="tr-order">
                                            <td class="td-order">Fandi Leni</td>
                                            <td class="td-order">$200</td>
                                            <td class="td-order">Due</td>
                                            <td class="td-order"><span class="status inprogress">In Progress</span></td>
                                        </tr>
                                        <tr class="tr-order">
                                            <td class="td-order">Halimatus sadiah</td>
                                            <td class="td-order">$700</td>
                                            <td class="td-order">Due</td>
                                            <td class="td-order"><span class="status pending">Pending</span></td>
                                        </tr>
                                        <tr class="tr-order">
                                            <td class="td-order">Iqbal Rasetio</td>
                                            <td class="td-order">$2.300</td>
                                            <td class="td-order">Paid</td>
                                            <td class="td-order"><span class="status delivered">Delivered</span></td>
                                        </tr>
                                        <tr class="tr-order">
                                            <td class="td-order">Bagas Nugini</td>
                                            <td class="td-order">$4.300</td>
                                            <td class="td-order">Paid</td>
                                            <td class="td-order"><span class="status delivered">Delivered</span></td>
                                        </tr>
                                        <tr class="tr-order">
                                            <td class="td-order">Via Vallen</td>
                                            <td class="td-order">$7.300</td>
                                            <td class="td-order">Due</td>
                                            <td class="td-order"><span class="status return">Return</span></td>
                                        </tr>
                                        <tr class="tr-order">
                                            <td class="td-order">Riski Aditia</td>
                                            <td class="td-order">$1.434</td>
                                            <td class="td-order">Due</td>
                                            <td class="td-order"><span class="status inprogress">In Progress</span></td>
                                        </tr>
                                        <tr class="tr-order">
                                            <td class="td-order">Meliodas</td>
                                            <td class="td-order">$310</td>
                                            <td class="td-order">Paid</td>
                                            <td class="td-order"><span class="status delivered">Delivered</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="recent-detail">
                            <div class="card-header-detail">
                                <h2>Recent Customers</h2>
                            </div>
                            <div class="table-responsive">
                                <table class="table-costumers">
                                    <tr class="tr-costomers">
                                        <td width="60px">
                                            <div class="position-img-customers">
                                                <img src="images/img (1).jpg" alt="" class="img-costomers">
                                            </div>
                                        </td>
                                        <td class="nama-customers">
                                            <h4>Ronney</h4>
                                            <span>Indonesia</span>
                                        </td>
                                    </tr>
                                    <tr class="tr-costomers">
                                        <td width="60px">
                                            <div class="position-img-customers">
                                                <img src="images/img (1).jpg" alt="" class="img-costomers">
                                            </div>
                                        </td>
                                        <td class="nama-customers">
                                            <h4>Ronney</h4>
                                            <span>Indonesia</span>
                                        </td>
                                    </tr>
                                    <tr class="tr-costomers">
                                        <td width="60px">
                                            <div class="position-img-customers">
                                                <img src="images/img (1).jpg" alt="" class="img-costomers">
                                            </div>
                                        </td>
                                        <td class="nama-customers">
                                            <h4>Ronney</h4>
                                            <span>Indonesia</span>
                                        </td>
                                    </tr>
                                    <tr class="tr-costomers">
                                        <td width="60px">
                                            <div class="position-img-customers">
                                                <img src="images/img (1).jpg" alt="" class="img-costomers">
                                            </div>
                                        </td>
                                        <td class="nama-customers">
                                            <h4>Ronney</h4>
                                            <span>Indonesia</span>
                                        </td>
                                    </tr>
                                    <tr class="tr-costomers">
                                        <td width="60px">
                                            <div class="position-img-customers">
                                                <img src="images/img (1).jpg" alt="" class="img-costomers">
                                            </div>
                                        </td>
                                        <td class="nama-customers">
                                            <h4>Ronney</h4>
                                            <span>Indonesia</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="libraries/bootstrap/js/bootstrap.js"></script>


    <!-- librari iconic -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- chart  -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script id="script-dark" src="scripts/main.js"></script>
    <script id="script-dark" src="scripts/cookie.js"></script>

    <!-- script khusus  -->
    <script>
        $(document).ready(function() {
            var data1 = $(this).data('id');
            if (getCookie('light-theme')) {
                // $('.darks').attr('checked','checked');
                deleteCookie('dark-theme');
                data1 = getCookie('light-theme');
                $("#css-dark").attr('href', 'styles/main.css');
                $("#script-dark").attr('src', 'scripts/main.js');

            } else {
                // $('.darks').removeAttr('checked','');
                deleteCookie('light-theme');
                data1 = getCookie('dark-theme');
                $("#css-dark").attr('href', 'styles/dark.css');
                $("#script-dark").attr('src', 'scripts/dark.js');
            }
            $('.darks').click(function(e) {
                if (data1 == 1) {
                    data1 = 2;
                    alert("Checked Box Selected");
                    deleteCookie('light-theme');
                    setCookie('dark-theme', '2', 7);
                    // console.log(getCookie('dark-theme'));
                    location.reload();
                    console.log(data1);
                } else {
                    data1 = 1;
                    alert("Checked Box deselect");
                    deleteCookie('dark-theme');
                    setCookie('light-theme', '1', 7);
                    // console.log(getCookie('light-theme'));
                    location.reload();
                    console.log(data1);
                }
            });

            // menuToggle 
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            let topbar = document.querySelector('.topbar');

            toggle.onclick = function() {
                navigation.classList.toggle('active');
                main.classList.toggle('active');
                topbar.classList.toggle('active');
            }
            // add hovered class in select list item 
            let list = document.querySelectorAll('.navigation li');

            function activeLink() {
                list.forEach((item) => {
                    item.classList.remove('hovered');
                    this.classList.add('hovered');
                });
            }
            list.forEach((item) => {
                item.addEventListener('mouseover', activeLink);
            });
        });
    </script>
</body>

</html>