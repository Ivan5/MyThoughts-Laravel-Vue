<template>
  <div class="card mt-4">
                <div class="card-header">Publicado en {{thought.created_at}}</div>

                <div class="card-body">
                    <p v-if="!this.editMode">{{ thought.description}}</p>
                    <input type="text" class="form-control" v-else v-model="thought.description">
                </div>
                <div class="card-footer">
                    <button class="btn btn-default" v-on:click="onClickEdit()" v-if="!this.editMode">Editar</button>
                    <button class="btn btn-success" v-on:click="onClickUpdate()" v-else>Guardar</button>
                    <button class="btn btn-danger" v-on:click="onClickDelete()">Eliminar</button>
                </div>
            </div>
</template>
<script>
export default {
  props:['thought'],
  data(){
    return {
      editMode : false
    }
  },
  methods:{
    onClickDelete(){
      this.$emit('delete');
    },
    onClickEdit(){
      this.editMode = true;
    },
    onClickUpdate(){
      this.editMode = false;
      this.$emit('updated',thought);
    }
  }
}
</script>
