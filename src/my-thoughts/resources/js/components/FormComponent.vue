<template>
    <div class="card">
        <div class="card-header">En que estas pensando ahora</div>

        <div class="card-body">
 
            <form action="">
                <div class="form-group">
                    <label for="thought">Ahora estoy pensando en: </label>
                    <input type="text" class="form-control" name="thought">
                </div>
                <button type="submit" class="btn btn-primary">
                    Enviar pensamiento
                </button>                        
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
