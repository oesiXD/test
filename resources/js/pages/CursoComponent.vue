<template>
      <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
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
                                <td>{{curso.name}}</td>
                                <td>{{curso.description}}</td>
                                <td>{{curso.visible}} </td>
                                <td>  <a class="btn btn-info btn-xs"  data-toggle="modal"   >
                                    VER Cursos Asociados
                                </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                        </div>
                        <!-- end page title -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
            </div>
</template>
<script>
export default {
    data() {
        return {
            cursos:[]
        }
    },
    methods: {
        getCursos(){
            axios.get("Administracion/cursocategoria").then((res)=>{
                    console.log(res);
                    this.cursos = res.data;
            });
        }
    },
    created() {
        this.getCursos();
    },
}
</script>
