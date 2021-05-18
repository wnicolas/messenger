<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col col-4">
        <contact-list-component v-on:conversationSelected="changeActiveConversation($event)"></contact-list-component>
      </div>
      <div class="col col-8">
        <active-conversation-component></active-conversation-component>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
     
    };
  },
  mounted() {
    
  },
  methods: {
    changeActiveConversation(conversation){
        console.log('nuevo conversación seleccionada',conversation);
    }
  },
};
</script>