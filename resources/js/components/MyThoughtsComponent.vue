<template>
  <div class="row justify-content-center">
        <div class="col-md-8">
            <form-component @new="addThought"></form-component>

           <thought-component v-for="thought in thoughts" :key="thought.id" :thought="thought"></thought-component>
        </div>
    </div>
</template>
<script>
export default {
  data(){
    return {
      thoughts:[
        {
          'id' : 1,
          'description' : 'abc',
          'created_at' : '12/25/2018'
        },
        {
          'id' : 2,
          'description' : 'abcde',
          'created_at' : '12/25/2018'
        }
      ]
    }
  },
  methods:{
    addThought(thought){
      this.thoughts.push(thought);
    }
  }
}
</script>
