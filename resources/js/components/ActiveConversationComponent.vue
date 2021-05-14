<template>
  <div class="row">
    <div class="col col-8 vh-100 p-0">
      <div class="card vh-100">
        <div class="card-body h-100">
          <h5 class="card-title">Converación activa</h5>
          <div class="h-75">
            <div class="media">
              <img
                src="https://picsum.photos/60/60?random=5"
                class="p-1 rounded-circle mx-auto d-block"
                alt="Cinque Terre"
              />
              <div class="media-body">
                <div class="card mb-2">
                  <p class="p-4">
                    She'll turn cold as a freezer. At the eh-end of it all.
                    Stinging like a bee I earned my stripes. Bikinis, zucchinis,
                    Martinis, no weenies. I hope you got a healthy appetite. We
                    can dance, until we die, you and I, will be young forever.
                    We're living the life. We're doing it right. Word on the
                    street, you got somethin' to show me, me.
                  </p>
                </div>
              </div>
            </div>

            <div class="media">
              <div class="media-body">
                <div class="card mb-2">
                  <p class="p-4">
                    She'll turn cold as a freezer. At the eh-end of it all.
                    Stinging like a bee I earned my stripes. Bikinis, zucchinis,
                    Martinis, no weenies. I hope you got a healthy appetite. We
                    can dance, until we die, you and I, will be young forever.
                    We're living the life. We're doing it right. Word on the
                    street, you got somethin' to show me, me.
                  </p>
                </div>
              </div>
              <img
                src="https://picsum.photos/60/60?random=4"
                class="p-1 rounded-circle mx-auto d-block"
                alt="Cinque Terre"
              />
            </div>
          </div>
          <div class="card-footer">
            <div class="input-group mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Escribe un mensaje"
                aria-label="Recipient's username"
                aria-describedby="basic-addon2"
              />
              <div class="input-group-append">
                <button class="input-group-text" id="basic-addon2">
                  @example.com
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col col-4">
      <img
        src="https://picsum.photos/60/60?random=3"
        class="p-1 rounded-circle mx-auto d-block"
      />

      <p>Usuario seleccionado</p>

      <hr />

      <input
        type="checkbox"
        name=""
        id="desactivarNotificaciones"
        class="form-control"
      />

      <label for="desactivarNotificaciones">Desactivar notificaciones</label>
      div
    </div>
  </div>
</template>

<script>
export default {
  props: ["estado"],
  data() {
    return {};
  },
};
</script>
