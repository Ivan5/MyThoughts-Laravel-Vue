<template>
  <div class="card mt-4">
                <div class="card-header">Publicado en {{thought.created_at}}</div>

                <div class="card-body">
                    <p>{{ thought.description}}</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-default">Editar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </div>
            </div>
</template>
<script>
export default {
  props:['thought'],
  data(){
    return {
      
    }
  }
}
</script>
