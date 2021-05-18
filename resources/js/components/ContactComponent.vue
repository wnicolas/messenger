<template>
    <li class="list-group-item" v-bind:class="['list-group-item-'+estado,active]">
        <div class="row">
            <div class="col col-12 col-lg-3">
                <img :src="urlFoto+conversation.id" class="p-1 rounded-circle mx-auto d-block" alt="Cinque Terre">
            </div>
            <div class="col col-6  d-none d-lg-block">
                <div class="align-self-center">
                    <p class="mb-1 pt-3">{{conversation.contact_name}}</p>
                    <p class="text-muted small">{{conversation.last_message}}</p>
                </div>
            </div>
            <div class="col col-3  d-none d-lg-block">
                <p class="text-muted small align-self-center">{{conversation.last_Time}}</p>
    
            </div>
        </div>
    </li>
</template>

<script>
export default {
    props:{
        estado: String,
        conversation:Object,
    }
    ,
    data() {
        return {
            active:'',
            urlFoto:'https://picsum.photos/60/60?random=',
        };
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
