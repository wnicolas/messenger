<template>
  <div class="media">
    <img
      src="https://picsum.photos/60/60?random=5"
      class="p-1 rounded-circle mx-auto d-block"
      alt="Cinque Terre"
      v-if="writenByMe == 'false' ? true : false"
    />
    <div class="media-body">
      <div class="card mb-2">
        <p class="p-4">
          <slot></slot>
        </p>
      </div>
    </div>
    <img
      src="https://picsum.photos/60/60?random=5"
      class="p-1 rounded-circle mx-auto d-block"
      alt="Cinque Terre"
      v-if="writenByMe == 'true' ? true : false"
    />
  </div>
</template>

<script>
export default {
  props: ["writenByMe"],
  data() {
    return {
      content: "abc123",
    };
  },
};
</script>
