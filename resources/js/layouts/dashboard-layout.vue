<script lang="ts" setup>
import { FwbButton } from "flowbite-vue";
</script>

<template>
  <div class="h-full w-screen bg-slate-100 pb-10">
    <div
      class="w-screen flex flex-row justify-between bg-white shadow-sm py-3 px-[100px] mb-[50px]"
    >
      <img src="/brand-logo.png" class="h-16 w-16" />

      <div class="flex flex-row justify-end items-center gap-x-10 text-sm">
        <RouterLink to="/dashboard" class="text-gray-600 hover:text-gray-900">
          Manage Contents
        </RouterLink>
        <a href="#" class="text-red-700">Log Out</a>
      </div>
    </div>

    <div
      class="min-h-screen w-3/4 border bg-white rounded-xl shadow-lg mx-auto p-10"
    >
      <RouterView />
    </div>
  </div>
</template>

<style lang="scss" scoped></style>
