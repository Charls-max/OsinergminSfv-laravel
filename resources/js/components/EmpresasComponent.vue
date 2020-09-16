<template>
<div>
  <form @submit.prevent="editarEmpresa(empresa)" v-if="modoEditar">
      <h3>Editar Empresa</h3>
      <input type="text" class="form-control mb-2" 
        placeholder="Nombre de la empresa" v-model="empresa.nombre">
      <input type="text" class="form-control mb-2" 
        placeholder="Descripción de la empresa" v-model="empresa.descripcion">
        <input type="text" class="form-control mb-2" 
        placeholder="RUC de la empresa" v-model="empresa.ruc">        

      <button class="btn btn-success" type="submit" >Guardar</button>
      <button class="btn btn-danger" type="submit" 
        @click="cancelarEdicion">Cancelar</button>
  </form>

  <form @submit.prevent="agregar" v-else>
    <h3>Agregar Empresas</h3>
    <input type="text" placeholder="Nombre" class="form-control mb-2" v-model="empresa.nombre">
    <input type="text" placeholder="Descripcion" class="form-control mb-2" v-model="empresa.descripcion">
    <input type="text" placeholder="RUC" class="form-control mb-2" v-model="empresa.ruc">

    <button class="btn btn-primary" type="submit">Agregar</button>
  </form>

  <hr class="mt-3">
  <h3>Listado de Empresas</h3>
    <ul class="list-group">
         <li class="list-group-item" 
            v-for="(item, index) in empresas" :key="index">          
          
          <span class="badge badge-primary float-right"> <i>Fecha de actualizacion:</i>     
          <span class="text-dark">        
            {{item.updated_at}}
          </span></span>

          <p>{{item.nombre}}</p>
          <p>{{item.descripcion}}</p>
          <p>{{item.ruc}}</p>
          <p>
            <button class="btn btn-warning btn-sm" 
                @click="editarFormulario(item)">Editar</button>
            <button class="btn btn-danger btn-sm" 
                @click="eliminarEmpresa(item, index)">Eliminar</button>
          </p>
        </li>
    </ul>
        
</div>
</template>

<script>
export default{
  data(){
    return{
      empresas: [],
      modoEditar: false,
      empresa: {nombre: '', descripcion: '', ruc: ''}
    }
  },
  created(){
    axios.get('/empresas')
      .then(res => {
        this.empresas=res.data;
      })

  },
  methods:{
    agregar(){
      if(this.empresa.nombre.trim() === '' || this.empresa.descripcion.trim() === '' || this.empresa.ruc.trim() === ''){
        alert('Debes completar todos los campos antes de guardar');
        return;
      }
      console.log(this.empresa.nombre, this.empresa.descripcion, this.empresa.ruc);
      const params={
        nombre: this.empresa.nombre,
        descripcion: this.empresa.descripcion,
        ruc: this.empresa.ruc
        }
      this.empresa.nombre='';
      this.empresa.descripcion='';
      this.empresa.ruc='';
      axios.post('/empresas', params)
        .then(res => {
          this.empresas.push(res.data)
        })
    },
    editarFormulario(item){
      this.empresa.nombre = item.nombre;
      this.empresa.descripcion = item.descripcion;
      this.empresa.ruc = item.ruc;
      this.empresa.id = item.id;
      this.modoEditar = true;
    },
    editarEmpresa(empresa){
      const params = {nombre: empresa.nombre, descripcion: empresa.descripcion, ruc: empresa.ruc};
      axios.put(`/empresas/${empresa.id}`, params)
        .then(res=>{
          this.modoEditar = false;
          const index = this.empresas.findIndex(item => item.id === empresa.id);
          this.empresas[index] = res.data;
          this.empresa = {nombre: '', descripcion: '', ruc: ''};
        })
    },
    eliminarEmpresa(empresa, index){
      const confirmacion = confirm(`Eliminar empresa ${empresa.nombre}`);
      if(confirmacion){
        axios.delete(`/empresas/${empresa.id}`)
          .then(()=>{
            this.empresas.splice(index, 1);
          })
      }
    },
    cancelarEdicion(){
    this.modoEditar = false;
    this.empresa = {nombre: '', descripcion: '', ruc: ''};
    }  

  }

}


</script>