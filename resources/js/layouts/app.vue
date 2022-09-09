<template>
    <div>
        <h1 class="text-center">{{title}}</h1>
        <div class="container">
            <div class="mb-3">
            <label for="clientes" class="mb-2">Seleccione una empresa:</label>
            <select name="clientes" id="clientes" v-model="cliente" v-on:change="getUnidades" placeholder="Seleccione..." class="form-select" style="width: 250px;">
                <option v-for="cliente in clientes" :key="cliente.id" :value="cliente.id">{{cliente.empresa}}</option>
            </select>
        </div>
        

        <table  class="table table-striped">
            <thead>
                <th>Código</th>
                <th>Tipo UA</th>
                <th>Marca</th>
                <th>Procesador</th>
                <th>Generación</th>
                <th>empresa</th>
                <th>Asesor</th>
            </thead>
            <tbody>
                <tr v-for="unidad in unidades" :key="unidad.id">
                    <td>{{unidad.codigo}}</td>
                    <td>{{unidad.tipo_ua}}</td>
                    <td>{{unidad.marca}}</td>
                    <td>{{unidad.procesador}}</td>
                    <td>{{unidad.generacion}}</td>
                    <td>{{unidad.empresa}}</td>
                    <td>{{unidad.asesor}}</td>
                </tr>
            </tbody>
        </table>

        </div>
        
    </div>
</template>
<script setup>
    const title = 'Sistema de Unidades'
</script>
<script>
export default {
        data() {
            return {
                cliente:'',
                clientes: {},
                unidades: {}
            }
        },
        mounted(){
            this.getClientes();
        },
        methods:{
            getClientes() {
                let instance = this;
                axios.get('/clientes').then(function(response){
                    instance.clientes = response.data;
                })          
            },
            getUnidades() {
                let instance = this;
                axios.get('/clientes/unidades/' + this.cliente).then(function(response){
                    instance.unidades = response.data;
                })          
            }

        }
    }
</script>

