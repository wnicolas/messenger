<template>
    <li class="list-group-item" v-bind:class="['list-group-item-'+estado,active]">
        <div class="row">
            <div class="col col-12 col-lg-3">
                <img src="https://picsum.photos/60/60?random=1" class="p-1 rounded-circle mx-auto d-block" alt="Cinque Terre">
            </div>
            <div class="col col-6  d-none d-lg-block">
                <div class="align-self-center">
                    <p class="mb-1 pt-3">{{name}}</p>
                    <p class="text-muted small">{{lastMessage}}</p>
                </div>
            </div>
            <div class="col col-3  d-none d-lg-block">
                <p class="text-muted small align-self-center">{{lastTime}}</p>
    
            </div>
        </div>
    </li>
</template>

<script>
export default {
    props:[
        'estado'
    ],
    data() {
        return {
            name: 'Juan Ramos',
            lastMessage: 'Tú: Hasta luego',
            lastTime: '1:37 pm',
            active:'',
        };
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
