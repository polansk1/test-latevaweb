<template>
  <div class="row justify-content-center">
      <div class="col-8">
          <table class="table table-striped" id="tablePatients">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="patient in patients">
                <th scope="row">{{ patient.id }}</th>
                <td>{{ patient.first_name}}</td>
                <td >{{ patient.last_name }}</td>
                <td >{{ patient.date_of_birth }}</td>
                <td>      
                    <button @click="confirmDelete( patient.id )" class="btn btn-dark btn-sm actionsBtn" role="button"><i class="fas fa-trash-alt"></i></button>
                    <a :href="editurl.replace('#', patient.id)" class="btn btn-dark btn-sm actionsBtn" role="button"><i class="fas fa-user-edit"></i></a>
                    <a :href="showtreatment.replace('#', patient.id)" class="btn btn-outline-dark btn-sm" role="button">Tratamientos</a>
                </td>
              </tr>
            </tbody>
          </table>
      </div>
      <delete-modal :patient_id="patient_id"></delete-modal>
  </div>    
</template>
<script>

export default {
    props:['editurl', 'showtreatment'],
    data(){
        return{
            'patients':[],
            'patient_id': ''
        }
    },
    mounted(){
        this.getPatients()
    },
    methods:{
        getPatients(){
            axios.get('api/patients').then(response => {
                this.patients = response.data
                this.tablePatients()
            })
            .catch(e => {
                console.log(e)
            })
        },
        tablePatients(){
            $(function(){
                $('#tablePatients').DataTable();
            });
        },
        confirmDelete(id){
          this.patient_id = id
          $('#deleteModal').modal('show')
        }
    }
}
</script>
<style scoped>
.actionsBtn{
    width: 31px;
    color: #fff;
}
</style>