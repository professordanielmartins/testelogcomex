<template>
  <div>
    <h2>Gráficos</h2>
    <chart-media-materia></chart-media-materia>
    <chart-media-aluno></chart-media-aluno>
    <chart-media-bimestre></chart-media-bimestre>
  </div>
</template>

<script>
import ChartMediaMateria from './ChartMediaMateria.vue';
import ChartMediaAluno from './ChartMediaAluno.vue';
import ChartMediaBimestre from './ChartMediaBimestre.vue';

export default {
  components: {
    ChartMediaMateria,
    ChartMediaAluno,
    ChartMediaBimestre,
  },
};
</script>

