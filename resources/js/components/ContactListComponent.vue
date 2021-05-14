<template>
    <div class="mx-0 px-0">
    
    
    
        <form action="" class="my-2 mx-3">
    
            <input type="text" class="form-control text-center form-control" placeholder="Buscar contacto">
    
        </form>
    
    
    
        <ul class="list-group">
    
            <contact-component estado="dark"> </contact-component>
    
            <contact-component estado=""> </contact-component>
    
            <contact-component estado="secondary"></contact-component>
    
        </ul>
    
    </div>
</template>

<script>
export default {
    data() {
        return {

        };
    },
}
</script>