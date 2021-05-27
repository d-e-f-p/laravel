<template>
    <table>
        <caption>{{nombre_tabla}}</caption>
        <thead>
            <tr>
                <th v-for="campo in campos">
                    {{campo}}
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="fila in filas">
                <td v-for="valor in fila">
                    {{valor}}
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: "tabla",
    props: ['nombre_tabla', 'filas', 'campos'],
    created() {
        console.log("Componente creado");
    }
}
</script>

<style scoped>

</style>
