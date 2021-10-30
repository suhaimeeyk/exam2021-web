<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>SAM - PRODUCT</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">
<script src="js/modernizr.js"></script> <!-- Modernizr -->
<!-- 
table -->
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
/* #ไม่ให้รันขึ้นตัวแปร */
[v-cloak] {
    display: none;
}
</style>

</head>

<body id="page-top" class="politics_version">
    <!-- <body> -->

    <!-- Navigation  -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="rounded mx-auto d-block">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <img class="img-fluid" src="images/logo1.png" alt="center" />
            </a>
        </div>
    </nav>

    <!-- <div id="content">
        <div id="slider">
            <img src="uploads/banner-01.jpg" alt="Web Developer" data-url="#1">
            <img src="uploads/banner-02.jpg" alt="Graphic Design" data-url="#2">
            <img src="uploads/banner-03.jpg" alt="Creative Design" data-url="#3">
            <img src="uploads/banner-04.jpg" alt="Web Design" data-url="#4">
        </div>
    </div> -->

    <div>
        <div class="limiter">
            <div class="container-table100">
                <div id="app" class="wrap-table100" v-cloak>
                    <br><br><br>
                    <div class="text-center">
                        <h3 class="text-center"> {{ title }} </h3>
                        <h3 class="text-center"> ตาราง read_paging.php </h3>
                    </div>
                    <div align="center">
                        <input type="button" class="btn btn-success btn-xs" data-bs-toggle="modal"
                            data-bs-target="#myModal" @click="openModal" value="Add">
                    </div>
                    <br>
                    <div class="table100 ver6 m-b-110">
                        <table data-vertable="ver6">
                            <thead>
                                <tr class="row100 head">
                                    <th class="column100 column2" data-column="column2">
                                        <p class="text-center">id</p>
                                    </th>
                                    <th class="column100 column2" data-column="column2">
                                        <p class="text-center">name
                                    </th>
                                    <th class="column100 column3" data-column="column3">
                                        <p class="text-center">description
                                    </th>
                                    <th class="column100 column4" data-column="column4">
                                        <p class="text-center">price
                                    </th>
                                    <th class="column100 column5" data-column="column5">
                                        <p class="text-center">category_id
                                    </th>
                                    <th class="column100 column6" data-column="column6">
                                        <p class="text-center">category_name
                                    </th>
                                    <th class="column100 column6" data-column="column6">
                                        <p class="text-center">update
                                    </th>
                                    <th class="column100 column6" data-column="column6">
                                        <p class="text-center">delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="customer in allData">
                                    <td class="column100 column2" data-column="column2">
                                        <p class="text-center">{{ customer.id }}</p>
                                    </td>
                                    <td class="column100 column3" data-column="column3">
                                        <p class="text-center">{{ customer.name }}</p>
                                    </td>
                                    <td class="column100 column4" data-column="column4">
                                        <p class="text-center">{{ customer.description }}</p>
                                    </td>
                                    <td class="column100 column5" data-column="column5">
                                        <p class="text-center">{{ customer.price }} bath</p>
                                    </td>
                                    <td class="column100 column6" data-column="column6">
                                        <p class="text-center">{{ customer.category_id }}</p>
                                    </td>
                                    <td class="column100 column6" data-column="column6">
                                        <p class="text-center">{{ customer.category_name }}</p>
                                        <!-- <p class="text-center">{{ customer.created }}</p> -->
                                    </td>
                                    <td class="column100 column8" data-column="column8">
                                        <p class="text-center">
                                            <button type="button" name="edit" class="btn btn-primary btn-xs edit"
                                                data-bs-toggle="modal" data-bs-target="#myModal"
                                                @click="fetchData(customer.id)">
                                                Edit
                                            </button>
                                        </p>
                                    </td>
                                    <td class="column100 column8" data-column="column8">
                                        <p class="text-center">
                                            <button type="button" name="delete" class="btn btn-danger btn-xs delete"
                                                data-bs-toggle="modal" data-bs-target="#myModal"
                                                @click="deleteData(customer.id)">
                                                Delete
                                            </button>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <h3 class="text-center"> ตาราง search.php </h3>
                    <div class="table100 ver6 m-b-110">
                        <table data-vertable="ver6">
                            <thead>
                                <tr class="row100 head">
                                    <th class="column100 column2" data-column="column2">
                                        <p class="text-center">id</p>
                                    </th>
                                    <th class="column100 column2" data-column="column2">
                                        <p class="text-center">name
                                    </th>
                                    <th class="column100 column3" data-column="column3">
                                        <p class="text-center">description
                                    </th>
                                    <th class="column100 column4" data-column="column4">
                                        <p class="text-center">price
                                    </th>
                                    <th class="column100 column5" data-column="column5">
                                        <p class="text-center">category_id
                                    </th>
                                    <th class="column100 column6" data-column="column6">
                                        <p class="text-center">category_name
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="search in searchs">
                                    <td class="column100 column2" data-column="column2">
                                        <p class="text-center">{{ search.id }}</p>
                                    </td>
                                    <td class="column100 column3" data-column="column3">
                                        <p class="text-center">{{ search.name }}</p>
                                    </td>
                                    <td class="column100 column4" data-column="column4">
                                        <p class="text-center">{{ search.description }}</p>
                                    </td>
                                    <td class="column100 column5" data-column="column5">
                                        <p class="text-center">{{ search.price }} bath</p>
                                    </td>
                                    <td class="column100 column6" data-column="column6">
                                        <p class="text-center">{{ search.category_id }}</p>
                                    </td>
                                    <td class="column100 column6" data-column="column6">
                                        <p class="text-center">{{ search.category_name }}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>



                    <h3 class="text-center"> ตาราง read.php </h3>
                    <div class="table100 ver6 m-b-110">
                        <table data-vertable="ver6">
                            <thead>
                                <tr class="row100 head">
                                    <th class="column100 column2" data-column="column2">
                                        <p class="text-center">id</p>
                                    </th>
                                    <th class="column100 column2" data-column="column2">
                                        <p class="text-center">name
                                    </th>
                                    <th class="column100 column3" data-column="column3">
                                        <p class="text-center">description
                                    </th>
                                    <th class="column100 column4" data-column="column4">
                                        <p class="text-center">price
                                    </th>
                                    <th class="column100 column5" data-column="column5">
                                        <p class="text-center">category_id
                                    </th>
                                    <th class="column100 column6" data-column="column6">
                                        <p class="text-center">category_name
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="read in reads">
                                    <td class="column100 column2" data-column="column2">
                                        <p class="text-center">{{ read.id }}</p>
                                    </td>
                                    <td class="column100 column3" data-column="column3">
                                        <p class="text-center">{{ read.name }}</p>
                                    </td>
                                    <td class="column100 column4" data-column="column4">
                                        <p class="text-center">{{ read.description }}</p>
                                    </td>
                                    <td class="column100 column5" data-column="column5">
                                        <p class="text-center">{{ read.price }} bath</p>
                                    </td>
                                    <td class="column100 column6" data-column="column6">
                                        <p class="text-center">{{ read.category_id }}</p>
                                    </td>
                                    <td class="column100 column6" data-column="column6">
                                        <p class="text-center">{{ read.category_name }}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>



                    <div v-if="myModal" class="modal fade" id="myModal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">{{ dyynamicTitle }}</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        @click="myModal=false"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">name</label>
                                        <input type="text" class="form-control" v-model="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">description</label>
                                        <input type="text" class="form-control" v-model="description">
                                    </div>
                                    <div class="form-group">
                                        <label for="price">price</label>
                                        <input type="text" class="form-control" v-model="price">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">category_id</label>
                                        <input type="text" class="form-control" v-model="category_id">
                                    </div>
                                    <div class="form-group">
                                        <label for="created">created</label>
                                        <input class="form-control" type="date" v-model="created">
                                    </div>
                                    <br>
                                    <div class="modal-footer">
                                        <input type="hidden" v-model="hiddenId">
                                        <input type="button" v-model="actionButton" @click="submitData"
                                            class="btn btn-success btn-xs">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- end title -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">Pricing</a>
                        <a href="#">About</a>
                        <a href="#">Faq</a>
                        <a href="#">Contact</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Jimmy</a> Design By :
                        <a href="https://html.design/">html design</a>
                    </p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>


    <!-- Axios and vue.js-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- Camera Slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="js/headline.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/slider-top.js"></script>
    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.vide.js"></script>
    <!-- 
        
table -->
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script src="server.js"></script>

    <!-- หลัก -->
    <!-- <script>
    let app = new Vue({
        el: '#app',
        data: {
            title: 'REST API',
            allData: '',
            searchs: '',
            reads: '',
            myModal: false,
            hiddenId: null,
            actionButton: 'Insert',
            dyynamicTitle: 'Add data'
        },
        methods: {
            fetchAllData() {
                axios.get('http://localhost/api_code/fontend/product/read_paging.php', {
                    action: 'fetchall'
                }).then(res => {
                    app.allData = res.data.records
                })
            },
            fetchSearchs() {
                axios.get('http://localhost/api_code/fontend/product/search.php', {
                    action: 'fetchsearchs'
                }).then(res => {
                    app.searchs = res.data.records
                })
            },
            fetchRead() {
                axios.get('http://localhost/api_code/fontend/product/read.php', {
                    action: 'fetchread'
                }).then(res => {
                    app.reads = res.data.records
                })
            },
            openModal() {
                app.name = '';
                app.description = '';
                app.price = '';
                app.category_id = '';
                app.created = '';
                app.actionButton = 'Insert';
                app.dyynamicTitle = 'Add Data';
                app.myModal = true;
            },
            submitData() {
                if (app.name != '' && app.description != '' && app.price != '' && app.category_id != '' &&
                    app.created != '') {
                    if (app.actionButton == 'Insert') {
                        axios.post('http://localhost/api_code/fontend/product/create.php', {
                            action: 'insert',
                            name: app.name,
                            description: app.description,
                            price: app.price,
                            category_id: app.category_id,
                            created: app.created
                        }).then(res => {
                            app.myModal = false;
                            app.fetchAllData();
                            app.name = '';
                            app.description = '';
                            app.price = '';
                            app.category_id = '';
                            app.created = '';
                            // alert(res.data.message);
                            window.location.reload();
                        });
                    }
                    if (app.actionButton == 'Update') {
                        axios.post('http://localhost/api_code/fontend/product/update.php', {
                            action: 'update',
                            name: app.name,
                            description: app.description,
                            price: app.price,
                            category_id: app.category_id,
                            created: app.created,
                            hiddenId: app.hiddenId
                        }).then(res => {
                            app.myModal = false;
                            app.fetchAllData();
                            app.name = '';
                            app.description = '';
                            app.price = '';
                            app.category_id = '';
                            app.created = '';
                            app.hiddenId = '';
                            // alert(res.data.message);
                            window.location.reload();
                        })
                    }
                }
            },
            fetchData(id) {
                axios.post('http://localhost/api_code/fontend/product/read_one.php', {
                    id: id,
                    action: 'fetchSingle'

                }).then(res => {
                    app.name = res.data.name;
                    app.description = res.data.description;
                    app.price = res.data.price;
                    app.category_id = res.data.category_id;
                    app.created = res.data.created;
                    app.hiddenId = res.data.id;
                    app.myModal = true;
                    app.actionButton = 'Update';
                    app.dyynamicTitle = 'Edit';
                });
            },
            deleteData(id) {
                if (confirm("Are you Sure")) {
                    axios.post('http://localhost/api_code/fontend/product/detete.php', {
                        action: 'delete',
                        id: id
                    }).then(res => {
                        app.fetchAllData();
                        alert(res.data.massage);
                    });
                }
            }
        },
        created() {
            this.fetchAllData();
            this.fetchSearchs();
            this.fetchRead();
        }
    })
    </script> -->


    <!-- <script>
    let app = new Vue({
        el: '#app',
        data: {
            title: 'REST API',
            allData: '',
            searchs: '',
            reads: '',
            myModal: false,
            hiddenId: null,
            actionButton: 'Insert',
            dyynamicTitle: 'Add data'
        },
        methods: {
            fetchAllData() {
                axios.post('action.php', {
                    action: 'fetchall'
                }).then(res => {
                    app.allData = res.data;
                })
            },
            openModal() {
                app.name = '';
                app.description = '';
                app.price = '';
                app.category_id = '';
                app.created = '';
                app.actionButton = 'Insert';
                app.dyynamicTitle = 'Add Data';
                app.myModal = true;
            },
            submitData() {
                if (app.name != '' && app.description != '' && app.price != '' && app.category_id != '' &&
                    app.created != '') {
                    if (app.actionButton == 'Insert') {
                        axios.post('action.php', {
                            action: 'insert',
                            name: app.name,
                            description: app.description,
                            price: app.price,
                            category_id: app.category_id,
                            created: app.created
                        }).then(res => {
                            app.myModal = false;
                            app.fetchAllData();
                            app.name = '';
                            app.description = '';
                            app.price = '';
                            app.category_id = '';
                            app.created = '';
                            alert(res.data.message);
                            window.location.reload();
                        });
                    }
                    if (app.actionButton == 'Update') {
                        axios.post('action.php', {
                            action: 'update',
                            name: app.name,
                            description: app.description,
                            price: app.price,
                            category_id: app.category_id,
                            created: app.created,
                            hiddenId: app.hiddenId
                        }).then(res => {
                            app.myModal = false;
                            app.fetchAllData();
                            app.name = '';
                            app.description = '';
                            app.price = '';
                            app.category_id = '';
                            app.created = '';
                            app.hiddenId = '';
                            alert(res.data.message);
                            window.location.reload();
                        })
                    }
                }
            },
            fetchData(id) {
                axios.post('action.php', {
                    id: id,
                    action: 'fetchSingle'

                }).then(res => {
                    app.name = res.data.name;
                    app.description = res.data.description;
                    app.price = res.data.price;
                    app.category_id = res.data.category_id;
                    app.created = res.data.created;
                    app.hiddenId = res.data.id;
                    app.myModal = true;
                    app.actionButton = 'Update';
                    app.dyynamicTitle = 'Edit Data';
                });
            },
            deleteData(id) {
                if (confirm("Are you Sure ?")) {
                    axios.post('action.php', {
                        action: 'delete',
                        id: id
                    }).then(res => {
                        app.fetchAllData();
                        alert(res.data.massage);
                    });
                }
            }
        },
        created() {
            this.fetchAllData();
            this.fetchSearchs();
            this.fetchRead();
        }
    })
    </script> -->

</body>

</html>