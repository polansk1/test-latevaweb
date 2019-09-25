<template>
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Eliminar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Está seguro de que quiere eliminar este paciente?
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary" id="btnDelete" @click="deletePatient()">Eliminar</button>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default{
	props:['patient_id'],
	methods:{
		deletePatient(){		
			const url = `patient/${this.patient_id}`
			axios.delete(url)
			.then(response => {
            	this.$parent.getPatients();
            	$('#deleteModal').modal('hide')
            }).catch(e =>{
            	console.log(e)
            	$('#deleteModal').modal('hide')
            })
		}
	}
}
</script>