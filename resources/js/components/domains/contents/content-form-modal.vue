<script lang="ts" setup>
import { useForm } from "vue-hooks-form";
import { FwbModal, FwbInput, FwbButton } from "flowbite-vue";
import { ContentsService } from "~/services";

const $props = defineProps<{
  isOpen: boolean;
}>();

const { useField, handleSubmit } = useForm();

const onFormSubmit = handleSubmit(async (formData: any) => {
  console.log(ContentsService);
});
</script>

<template>
  <FwbModal v-if="$props.isOpen" class="mt-[80px]">
    <template #header>
      <h2>Upload Media Content</h2>

      <form
        @submit.prevent.once="onFormSubmit"
        class="flex flex-col gap-y-4"
      ></form>
    </template>
  </FwbModal>
</template>

<style lang="scss" scoped></style>
