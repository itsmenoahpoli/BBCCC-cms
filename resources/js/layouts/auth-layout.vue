<script lang="ts" setup>
import { FwbCard, FwbButton } from "flowbite-vue";
</script>

<template>
  <div
    class="h-screen w-screen bg-slate-100 flex flex-col justify-center items-center gap-y-5"
  >
    <FwbCard class="min-w-[400px] flex flex-col gap-y-4 p-5 hover:bg-white">
      <div class="flex justify-center items-center mb-5">
        <img src="/brand-logo.png" class="h-[180px] w-[180px]" />
      </div>
      <RouterView />
    </FwbCard>

    <p>OR</p>

    <FwbButton color="green">Open Content Viewer</FwbButton>
  </div>
</template>

<style lang="scss" scoped></style>
