<template>
    <div class="card">
        <div class="card-header">Publicado en {{ thought.created_at }}</div>

        <div class="card-body">
            <input v-if="editMode" type="text" class="form-control" v-model="thought.description">
            <p v-else>{{ thought.description }}</p>
        </div>

        <div class="panel-footer">
            <button v-if="editMode" class="btn btn-success" v-on:click="clickSave()">
                Guardar
            </button>
            <button v-else class="btn btn-default" v-on:click="clickEdit()">
                Editar
            </button>
            <button class="btn btn-danger" v-on:click="clickDelete()">
                Eliminar
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['thought'],
        data() {
            return {
                editMode: false
            };
        },
        mounted() {
            console.log('Component mounted');
        },
        methods: {
           clickDelete: function() {
                this.$emit('delete');
            },

            clickEdit() {
                this.editMode = true;
                //this.$emit('edit');
            },
            clickSave() {
                this.editMode = false;
                this.$emit('update',thought);
            }
        }
    }
</script>
