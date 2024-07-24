<script lang="ts" setup>
import { useForm } from "vue-hooks-form";
import { FwbCard, FwbInput, FwbButton } from "flowbite-vue";
import { AuthService } from "~/services";
import type { Credentials } from "~/types/auth";

const { useField, handleSubmit } = useForm({
  defaultValues: {
    email: "admin@domain.com",
    password: "password",
  },
});

const email = useField("email", {
  rule: {
    required: true,
  },
});

const password = useField("password", {
  rule: {
    required: true,
  },
});

const onFormSubmit = handleSubmit(async (formData: any) => {
  return AuthService.authenticateCredentials(formData as Credentials);
});
</script>

<template>
  <FwbCard class="min-w-[400px] hover:bg-white p-5">
    <h1 class="text-center font-bold mb-3">SIGN IN TO DASHBOARD</h1>

    <form @submit.prevent="onFormSubmit" class="flex flex-col gap-y-3">
      <FwbInput
        v-model="email.value"
        :ref="email.ref"
        class="text-xs"
        placeholder="Enter e-mail"
      />
      <FwbInput
        v-model="password.value"
        :ref="password.ref"
        class="text-xs"
        placeholder="Enter password"
      />
      <FwbButton type="submit">SIGN IN</FwbButton>
    </form>
  </FwbCard>
</template>

<style lang="scss" scoped></style>
