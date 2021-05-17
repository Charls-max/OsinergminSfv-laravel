<template>
<div>
  <h3>Seleccionar Empresa</h3>

  <select class="form-control">
    <slot>olo</slot>
    <select2 :options="empresa" v-model="empresas" @input="getEmpresas">    
    </select2>
  </select>

  <!-- <div class="form-group row">
    <label for="faculty" class="col-md-4 col-form-label text-md-right">Facultad</label>

    <div class="col-md-6">
        <select id="faculty" name="faculty_id" class="form-control{{ $errors->has('faculty_id') ? ' is-invalid' : '' }}">
            @foreach($faculties->get() as $index => $faculty)
                <option value="{{ $index }}" {{ old('id') == $index ? 'selected' : '' }}>
                    {{ $faculty }}
                </option>
            @endforeach
        </select>

        @if ($errors->has('faculty_id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('faculty_id') }}</strong>
            </span>
        @endif
    </div>
  </div> -->

  <!-- <div class="form-group">
    <select2 :options="empresa" v-model="empresas" @input="getEmpresas">    
    </select2>
  </div> -->

  

  <hr class="mt-3">
  <h3>Listado de Fichas de la Empresa: <strong>{{ select }}</strong></h3>

  <ul class="list-group">
    <li class="list-group-item" 
        v-for="(item, index) in empresas" :key="index">          
      
      <!-- <span class="badge badge-primary float-right"> <i>Fecha de actualizacion:</i>     
      <span class="text-dark">        
        {{item.updated_at}}
      </span></span> -->

      <!-- <p>{{item.nombre}}</p>
      <p>{{item.descripcion}}</p>
      <p>{{item.ruc}}</p> -->
      <p>
      <span class="float-right">
        <button class="btn btn-success btn-sm">Visualizar</button>
        <button class="btn btn-warning btn-sm">Editar</button>
        <button class="btn btn-danger btn-sm">Eliminar</button>
      </span>
      </p>
    </li>
  </ul>

</div>
</template>

<script>
// import Select2 from 'select2';
export default{
props: ['options', 'value'],
data: function () {
  return{
    empresa: '0',
    empresas:[],
  }
},

mounted(){
  Vue.axios.get('getEmpresas')
  .then((response)=>{
    this.empresas=response.data;
  })
},

mounted: function () {
  var vm = this
  $(this.$el)
    .select2({ data: this.options })
    .val(this.value)
    .trigger('change')
    //Evento al cambiar
    .on('change', function () {
      vm.$emit('input', this.value)
    })
},
watch: {
  value: function (value) {
    //Actualizar valor
    $(this.$el).val(value).trigger('change');
  },
  options: function (options) {
    //Actualizar opciones
    $(this.$el).empty().trigger('change').select2({ data:options })    
  }
},
detroyed: function () {
  $(this.$el).off().select2('destroy')
},

// created(){
//     axios.get('/empresas')
//       .then(res => {
//         this.empresas=res.data;
//       })

// },

computed:{
  comprobar(){
    return this.texto.length > 2 ? true : false
  }
}

}


</script>