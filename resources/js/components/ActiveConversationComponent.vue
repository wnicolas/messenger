<template>
  <div class="row">
    <div class="col col-8 vh-100 p-0">
      <div class="card vh-100">
        <div class="card-body h-100">
          <h5 class="card-title">Converación activa</h5>
          <div class="h-75">
            <div v-for="message in messages" :key="message.id">
              <message-conversation-component
                v-if="message.writenByMe === 1"
                writenByMe="true"
              >
                {{ message.content }}
              </message-conversation-component>
              <message-conversation-component v-else writenByMe="false">
                {{ message.content }}
              </message-conversation-component>
            </div>

            <div class="card-footer">
              <form
                action=""
                @submit.prevent="postMessage()"
                autocomplete="off"
              >
                <div class="input-group mb-3">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Escribe un mensaje"
                    aria-label="Recipient's username"
                    aria-describedby="basic-addon2"
                    v-model="newMessage"
                  />
                  <div class="input-group-append">
                    <button class="input-group-text" id="basic-addon2">
                      Enviar
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col col-4">
      <img
        :src="urlFoto"
        class="p-1 rounded-circle mx-auto d-block"
      />

      <p>{{contact_name}}</p>

      <hr />

      <input
        type="checkbox"
        name=""
        id="desactivarNotificaciones"
        class="form-control"
      />

      <label for="desactivarNotificaciones">Desactivar notificaciones</label>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    estado: String,
    contact_id: Number,
    contact_name:String,
    messages: Array,
  },
  data() {
    return {
      
      newMessage: "",
      urlFoto:''
    };
  },
  mounted() {
  },
  methods: {
    
    postMessage() {
      const params = {
        to_id: this.contact_id,
        content: this.newMessage,
      };
      axios.post("message", params).then((response) => {
        if (response.data.success) {
          this.newMessage = "";
        }
      });
    },
  }, 
 
};
</script>
