<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col col-4">
        <contact-list-component
          v-on:conversationSelected="changeActiveConversation($event)"
        ></contact-list-component>
      </div>
      <div class="col col-8">
        <active-conversation-component
          v-if="selectedConversation"
          :contact_id="selectedConversation.contact_id"
          :contact_name="selectedConversation.contact_name"
          :messages="messages"
        ></active-conversation-component>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props:{
    userId:Number,
  },
  data() {
    return {
      selectedConversation: null,
      messages: [],
    };
  },
  mounted() {
    Echo.channel("example").listen("MessageSent", (data) => {
      const message=data.message;
      message.written_by_me=(this.userId==message.from_id);
      this.messages.push(data.message);
    });
  },
  methods: {
    changeActiveConversation(conversation) {
      this.selectedConversation = conversation;
      this.getMessages();
    },
    getMessages() {
      axios.get(`message?contact_id=${this.selectedConversation.contact_id}`).then((response) => {
        this.messages = response.data;
      });
    },
  },
};
</script>