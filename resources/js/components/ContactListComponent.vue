<template>
  <div class="mx-0 px-0">
    <form action="" class="my-2 mx-3">
      <input
        type="text"
        class="form-control text-center form-control"
        placeholder="Buscar contacto"
      />
    </form>

    <ul class="list-group">
      <contact-component
        v-for="conversation in conversations"
        :key="conversation.id"
        :conversation="conversation"
        @click.native="selectConversation(conversation)"
      >
      </contact-component>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      conversations: [],
    };
  },
  mounted() {
    this.getConversation();
  },
  methods: {
    getConversation() {
      axios.get("conversations").then((response) => {
        this.conversations = response.data;
      });
    },
    selectConversation(conversation){
        // console.log(conversation);
        this.$emit('conversationSelected',conversation);
    },
  },
};
</script>