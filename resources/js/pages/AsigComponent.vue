<template>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Nombre Corto</th>
                  <th>Descripcion</th>
                  <th>Visible</th>
                  <th>Mostrar Calificaciones</th>
                  <th>Aciones</th>
                </tr>
              </thead>

              <tbody>
                <tr v-for="curso in cursos" :key="curso.id">
                  <td>{{ curso.id }}</td>
                  <td>{{ curso.fullname }}</td>
                  <td>{{ curso.shortname }}</td>
                  <td>{{ curso.description }}</td>
                  <td v-if="curso.visible == 1">si</td>
                  <td v-if="curso.visible == 0">no</td>
                  <td v-if="curso.showgrades == 1">si</td>
                  <td v-if="curso.showgrades == 0">no</td>
                  <td>
                    <a
                      class="btn btn-secondary"
                      @click="VerStudiantesCurso(curso)"
                      data-target="#example"
                      data-toggle="modal"
                    >
                      Todos Estudiantes
                    </a>
                  </td>
                  <td
                    v-show="curso.id == g.courseid"
                    v-for="g in grupo"
                    :key="g.id"
                  >
                    <a
                      v-show="curso.id == g.courseid"
                      class="btn btn-info btn-xs"
                      @click="VerStudiantes(g)"
                      data-target="#exampleModalCenter"
                      data-toggle="modal"
                    >
                      Estudiantes {{ g.name }}
                    </a>
                  </td>
                  <div
                    class="modal fade"
                    id="exampleModalCenter"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true"
                  >
                    <div
                      class="modal-dialog modal-xl modal-dialog-centered"
                      role="document"
                    >
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">
                            {{ name }}
                          </h5>
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <h1 v-if="student.length == 0">No Tiene studiantes</h1>
                        <table v-if="student.length > 0" class="table">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Nombre Corto</th>
                              <th>Email</th>
                              <th>telefono</th>
                              <th>Direcion</th>
                              <th>Ciudad</th>
                              <th>Nota</th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr v-for="c in student" :key="c.id">
                              <td>{{ c.firstname }}</td>
                              <td>{{ c.lastname }}</td>
                              <td>{{ c.email }}</td>
                              <td v-if="c.phone1 == ''">No telefono</td>
                              <td v-if="c.phone1 != ''">{{ c.phone1 }}</td>
                              <td v-if="c.address == ''">
                                No notiene una direcion asociada
                              </td>
                              <td v-if="c.address != ''">{{ c.address }}</td>
                              <td v-if="c.city == ''">
                                No notiene una ciudad asociada
                              </td>
                              <td v-if="c.city != ''">{{ c.city }}</td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="modal-footer">
                          <button
                            type="button"
                            class="btn btn-primary"
                            data-dismiss="modal"
                          >
                            Cerrar
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div
                    class="modal fade"
                    id="example"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true"
                  >
                    <div
                      class="modal-dialog modal-xl modal-dialog-centered"
                      role="document"
                    >
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">
                            {{ namec }}
                          </h5>
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <h1 v-if="studentc.length == 0">No Tiene studiantes</h1>
                        <table v-if="studentc.length > 0" class="table">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Nombre</th>
                              <th>Nombre Corto</th>
                              <th>Email</th>
                              <th>telefono</th>
                              <th>Direcion</th>
                              <th>Ciudad</th>
                              <th
                                v-show="studentn.length > 0"
                                v-for="c in studentnt"
                                :key="c.id"
                              >
                                {{ c.itemname }}
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="c in studentc" :key="c.id">
                              <td>{{ c.id }}</td>
                              <td>{{ c.firstname }}</td>
                              <td>{{ c.lastname }}</td>
                              <td>{{ c.email }}</td>
                              <td v-if="c.phone1 == ''">No telefono</td>
                              <td v-if="c.phone1 != ''">{{ c.phone1 }}</td>
                              <td v-if="c.address == ''">
                                No notiene una direcion asociada
                              </td>
                              <td v-if="c.address != ''">{{ c.address }}</td>
                              <td v-if="c.city == ''">
                                No notiene una ciudad asociada
                              </td>
                              <td v-if="c.city != ''">{{ c.city }}</td>
                              <td
                                v-show="c.id == n.userid"
                                v-for="n in studentn"
                                :key="n.id"
                              >
                                {{ n.rawgrade }}
                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <div class="modal-footer">
                          <button
                            type="button"
                            class="btn btn-primary"
                            data-dismiss="modal"
                          >
                            Cerrar
                          </button>
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
      student: [],
      studentc: [],
      studentn: [],
      studentnt: [],
      grupo: [],
      idgrup: "",
      name: "",
      idgrupc: "",
      namec: "",
    };
  },
  methods: {
    getCursos() {
      axios.get("Administracion/curso").then((res) => {
        console.log(res);
        this.cursos = res.data;
      });
    },
    getGrupos() {
      axios.get("Administracion/nivel").then((res) => {
        console.log(res);
        this.grupo = res.data;
      });
    },

    VerStudiantes(g) {
      this.idgrup = g.id;
      this.name = g.name;
      axios
        .post("Administracion/student/" + this.idgrup + "/edit")
        .then((res) => {
          this.student = res.data;
        });
    },
    VerStudiantesCurso(curso) {
      //traer estudiantes, traer notas estudiantes, trae los nombre de los campos
      this.idgrupc = curso.id;
      this.namec = curso.fullname;
      axios
        .post("Administracion/studentcurso/" + this.idgrupc + "/edit")
        .then((res) => {
          this.studentc = res.data;
        });

      axios
        .post("Administracion/studentnotas/" + this.idgrupc + "/edit")
        .then((res) => {
          this.studentn = res.data;
          console.log(this.studentn);
        });

      axios
        .post("Administracion/studentnotast/" + this.idgrupc + "/edit")
        .then((res) => {
          this.studentnt = res.data;
          console.log(this.studentnt);
        });
    },
  },
  created() {
    this.getCursos();
    this.getGrupos();
  },
};
</script>
