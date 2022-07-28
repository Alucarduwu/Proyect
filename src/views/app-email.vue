
<template>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus Admin Dashboard</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Toastr -->
    <link href="css/lib/toastr/toastr.min.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- Range Slider -->
    <link href="css/lib/rangSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="css/lib/rangSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bar Rating -->
    <link href="css/lib/barRating/barRating.css" rel="stylesheet">
    <!-- Nestable -->
    <link href="css/lib/nestable/nestable.css" rel="stylesheet">
    <!-- JsGrid -->
    <link href="css/lib/jsgrid/jsgrid-theme.min.css" rel="stylesheet" />
    <link href="css/lib/jsgrid/jsgrid.min.css" type="text/css" rel="stylesheet" />
    <!-- Datatable -->
    <link href="css/lib/datatable/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
    <!-- Calender 2 -->
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <!-- Weather Icon -->
    <link href="css/lib/weather-icons.css" rel="stylesheet" />
    <!-- Owl Carousel -->
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Select2 -->
    <link href="css/lib/select2/select2.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
    <!-- Calender -->
    <link href="css/lib/calendar/fullcalendar.css" rel="stylesheet" />

    <!-- Common -->
    <link href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="css/lib/themify-icons.css" rel="stylesheet">
    <link href="css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="css/lib/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
      <div class="nano-content">
        <div class="logo">
          <a href="index.html">
            <!-- <img src="images/logo.png" alt="" /> -->
            <span>Focus</span>
          </a>
        </div>
        <ul>
          
          

          <li class="label">Apps</li>
          <li>
            <a class="sidebar-sub-toggle">
              <i class="ti-bar-chart-alt"></i> Notas
              <span class="sidebar-collapse-icon ti-angle-down"></span>
            </a>
            <ul>
              <li>
                <a href="chart-flot.html">Papelera</a>
              </li>
             
            </ul>
          </li>
          <li>
            <a href="app-event-calender.html">
              <i class="ti-calendar"></i> Calender </a>
          </li>
          
        
          <li class="label">Features</li>
          <li>
           
            <ul>
              <li>
                <a href="page-login.html">Login</a>
              </li>
              <li>
                <a href="page-register.html">Register</a>
              </li>
              <li>
                <a href="page-reset-password.html">Forgot password</a>
              </li>
            </ul>
          </li>
          <li>
            <a>
              <i class="ti-close"></i> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /# sidebar -->






            
          

  <div class="content-wrap">
    <div class="main">
      <div class="row">
          <div class="col-lg-12 p-r-0 title-margin-right">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">{{name}}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Configuración</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../components/Atencion.vue">Atención a clientes</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="../components/Principal.vue">Cerrar sesión</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <div class="navbar-nav d-flex">
                    <li class="nav-item">
                        <i class="fa-solid fa-user"></i>
                    </li>
                </div>
            </div>
        </div>
    </nav>

          </div>
          <!-- /# column -->
          
          <!-- /# column -->
        </div>
        <!-- /# row -->
        <section id="main-content">
          <div class="row">
            <div class="col-lg-12" >
              <div class="card">
                <div class="card-title">
                  <h4>Papelera</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class>
                      
                      <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                #Id Note
                            </th>
                            <th>
                                Contact / TITLE
                            </th>
    
                            <th>
                                Status /NOTE
                            </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(row, index) in data" :key="row.id" v-bind:class="{'table-warning' : index%2 == 0}">
                            <td>
                                {{row.contactid}}
                            </td>
                            <td>
                                {{row.name}}
                            </td>
                            
                            <td>
                                {{row.status}}
                            </td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class>
            </div>
            <!-- Button trigger modal -->
            
            <div class>
                
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Info</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <div class>
                                <label for="exampleFormControlInput1" class="form-label">ID</label>
                                <input type="text" class="form-control" id="" placeholder="id" v-model="inputId">
                            </div>

                            <div class>
                                <label for="exampleFormControlInput1" class="form-label">Contact/TITLE</label>
                                <input type="text" class="form-control" id="" placeholder="Name Contact" v-model="inputContact">
                            </div>
                            
                            
          

                            <div class>
                                <label for="exampleFormControlInput1" class="form-label">Status/TEXT</label>
                                <input type="text" class="form-control" id="" placeholder="Activo/No Activo" v-model="inputStatus">
                            </div>
                        </div>
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
                      
    
                      

                      <!-- checkbox -->
                     

                    </div>
                    <div class="col-md-9">
                      <div class="card-box">
                        <div id="calendar"></div>
                      </div>
                    </div>
                    <!-- end col -->
                    <!-- BEGIN MODAL -->
                     

                    <!-- Modal Add Category -->
                   
                    <!-- END MODAL -->
                  </div>
                </div>
              </div>
              <!-- /# card -->
            </div>
            <!-- /# column -->
          </div>
          <!-- /# row -->
          <div class="row">
            <div class="col-lg-12">
              <div class="footer">
                
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>
  


</body>
</template>
<script>

    export default {
        data() {
            return { /*
                data : [
                    {id: 1, contact: "ANy", phone: "4492238799", date: "07/07/2022", status: "Activo"}, 
                   
                ],*/
                data: [],
                inputId: "",
                inputContact: "",
                inputPhone: "",
                inputDate: "",
                inputStatus: "",
                action: "", 
                index: ""
            }
        }, 
        methods: {
            details(index){
                const headers ={"Content-Type": "application/json"};
               fetch("http://localhost/backend/api/read_one.php?contactid=" + parseInt(this.data[index].contactid))
                    .then(async response => { //respuesta del servidor
                        const data = await response.json(); //respuesta guardada en data

                        if (!response.ok) {
                            const error = (response);
                            return Proimise.reject(error);
                        } else {
                            console.log(response);
                        }
                    }) .catch(error => {
                        this.errorMessage = error;
                        console.error("Ocurrio un error: ", error);
                    });
            },
            select(id, index) { //splice? y push modificar info que ya esta
                console.log("RowId = " + id);
                console.log("Index = " + index);
                console.log(this.data[index].contact);

                this.data[index].contact = "Rodrigo";
            },
            remove(index) {
                const requestOptions = {
                    method: "DELETE",
                    headers: {"Content-Type": "application/json"},
                    body: JSON.stringify({contactid: parseInt(this.data[index].contactid)})
                };

                fetch("http://localhost/backend/api/delete.php", requestOptions)
                    .then(async response => { //respuesta del servidor
                        const data = await response.json(); //respuesta guardada en data

                        if (data != "oks") {
                            const error = (response);
                            return Proimise.reject(error);
                        } else {
                            console.log(response);
                        }
                    }) .catch(error => {
                        this.errorMessage = error;
                        console.error("Ocurrio un error: ", error);
                    });
            }, 
            create() { //if en el push no guardar vacio
                this.data.push({id: inputId, contact: inputContact, phone: inputPhone, date: inputDate, status: inputStatus})
            },
            
            saveChanges() {
                if (this.inputId != "" && this.inputContact != "" && this.inputPhone != "" && this.Date != "" && this.Status != "") {
                    if (this.action == 'create') {

                        const requestOptions = {
                            method: "POST",
                            headers: {"Content-Type": "application/json"},
                            body: JSON.stringify({name: this.inputContact, phone: this.inputPhone, date: this.inputDate, status: this.inputStatus})
                        };

                        fetch("http://localhost/backend/api/create.php", requestOptions)
                            .then(async response => {
                                const data = await response.json();

                                
                                if (data != "OK") {
                                    const error = (response);
                                    return Proimise.reject(error);
                                } else {
                                    console.log(response);                                    
                                }
                            }) .catch(error => {
                                this.errorMessage = error;
                                console.error("Ocurrio un error: ", error);
                            });

                        /*
                         */
                    } else if (this.action == 'update') {

                        const requestOptions = {
                            method: "PUT",
                            headers: {"Content-Type": "application/json"},
                            body: JSON.stringify({contactid: parseInt(this.inputId), name: this.inputContact, phone: this.inputPhone, date: this.inputDate, status: this.inputStatus})
                        };

                        fetch("http://localhost/backend/api/update.php", requestOptions)
                            .then(async response => {
                                const data = await response.json();

                                if (data != "ok") {
                                    const error = (response);
                                    return Proimise.reject(error);
                                } else {
                                    console.log(response);
                                }
                            }) .catch(error => {
                                this.errorMessage = error;
                                console.error("Ocurrio un error: ", error);
                            });



                        /*
                        this.inputId = this.data[index].id,
                        this.inputContact = this.data[index].contact,
                        this.inputPhone = this.data[index].phone,
                        this.inputDate = this.data[index].date,
                        this.inputStatus = this.data[index].status; */
                    } else {}
                } else {
                    alert("All fields are required");
                }
            },
            updateRow(index) {
                this.action = 'update';
                this.index = index; 
                this.inputId = this.data[index].contactid,
                this.inputContact = this.data[index].name,
               
                this.inputStatus = this.data[index].status;
            },
            setAction() {
                this.action = 'create';
            }
        }, 
        created() { //Get
            const headers = { "Content-Type": "application/json"};
            fetch("http://localhost/backend/api/read.php")
            .then(async response => {
                const res = await response.json();
                console.log(res);

                if(!response.ok) {
                    const error = (res && res.message)  || response.StatusText;
                    return Proimise.reject(error);
                } else {
                    this.data = res.body; //res = respuesta del servidor y array del php
                }
            })
            .catch(error => {
                this.errorMessage = error;
                console.error("Ocurrio un error: ", error);
            });
            
        },
        props: {
            tittle: String 
        }
    }
    //ERROR AL AGREGAR OTRO REGISTRO
</script>



