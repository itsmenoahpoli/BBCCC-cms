<script lang="ts" setup>
import { reactive } from "vue";
import { FwbButton } from "flowbite-vue";
import ContentFormModal from "~/components/domains/contents/content-form-modal.vue";

const state = reactive({
  modalOpen: false,
});

const handleModal = (isOpen: boolean) => {
  state.modalOpen = isOpen;
};
</script>

<template>
  <ContentFormModal :is-open="state.modalOpen" />

  <div
    class="flex flex-row justify-between border-b-2 border-gray-100 pb-10 mb-10"
  >
    <div>
      <h1 class="text-xl font-medium mb-2">Manage Media Contents</h1>
      <p class="text-sm text-gray-600">
        Upload/Remove images and videos media content
      </p>
    </div>

    <div>
      <FwbButton
        class="text-xs"
        color="green"
        @click="handleModal(true)"
        outline
      >
        UPLOAD MEDIA
      </FwbButton>
    </div>
  </div>
</template>

<style lang="scss" scoped></style>
