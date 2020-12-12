<template>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <table class="table">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Visible</th>
                  <th>Aciones</th>
                </tr>
              </thead>

              <tbody>
                <tr v-for="curso in cursos" :key="curso.id">
                  <td>{{ curso.name }}</td>
                  <td>{{ curso.description }}</td>
                  <td v-if="curso.visible ==1" >si</td>
                  <td v-if="curso.visible ==0" >no</td>

                  <td>
                    <a class="btn btn-info btn-xs" @click="VerCursos(curso)"  data-target="#exampleModalCenter" data-toggle="modal">
                      Ver Asignatura Asociadas
                    </a>
                  </td>
                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
              <div class="modal-content ">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle"> {{name}} </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                    <h1 v-if="cursosc.length == 0">No Tiene cursos</h1>
                        <table v-if="cursosc.length > 0" class="table">
                            <thead>
                                <tr>
                                <th>Nombre</th>
                                <th>Nombre Corto</th>
                                <th>Descripcion</th>
                                <th>Visible</th>
                                <th>Mostrar Calificaciones</th>
                                <th>Aciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="c in cursosc" :key="c.id">
                                <td>{{ c.fullname }}</td>
                                <td>{{ c.shortname }}</td>
                                <td>{{ c.description }}</td>
                                <td v-if="c.visible ==1" >si</td>
                                <td v-if="c.visible ==0" >no</td>
                                <td v-if="c.showgrades ==1" >si</td>
                                <td v-if="c.showgrades ==0" >no</td>
                                </tr>
                            </tbody>

            </table>

                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
              </div>
            </div>
          </div>
                </tr>
              </tbody>

            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      cursos: [],
      cursosc: [],
      idcurso:"",
      name:''
    };
  },
  methods: {
    getCursos() {
      axios.get("Administracion/cursocategoria").then((res) => {
        console.log(res);
        this.cursos = res.data;
      });
    },
    VerCursos(curso){
        this.idcurso= curso.id;
          this.name= curso.name;
        axios.post("Administracion/cursocategoria/"+this.idcurso+"/edit").then((res) => {
        this.cursosc = res.data;
      });
    }

  },
  created() {
    this.getCursos();
  },
};
</script>
