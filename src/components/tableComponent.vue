<template>
    <h1>Welcome {{tittle}}!!</h1>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                #Id Contact
                            </th>
                            <th>
                                Contact
                            </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                Date Added
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                Actions
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
                                {{row.phone}}
                            </td>
                            <td>
                                {{row.date}}
                            </td>
                            <td>
                                {{row.status}}
                            </td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" @click="updateRow(index, 'update')">
                                    Update
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" @click="remove(index)">
                                    Delete
                                </button>
                                <button type="button" class="btn btn-primary btn-sm" @click="details(index)">
                                    Ver más
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
            </div>
            <!-- Button trigger modal -->
            
            <div class="col-md-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" @click="setAction()">
                    Insertar registro   
                </button>
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
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">ID</label>
                                <input type="text" class="form-control" id="" placeholder="id" v-model="inputId">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Contact</label>
                                <input type="text" class="form-control" id="" placeholder="Name Contact" v-model="inputContact">
                            </div>
                            
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="" placeholder="Phone" v-model="inputPhone">
                            </div>
                            
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Date</label>
                                <input type="date" class="form-control" id="" placeholder="Date" v-model="inputDate">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Status</label>
                                <input type="text" class="form-control" id="" placeholder="Activo/No Activo" v-model="inputStatus">
                            </div>
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" @click="saveChanges">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                this.inputPhone = this.data[index].phone,
                this.inputDate = this.data[index].date,
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
