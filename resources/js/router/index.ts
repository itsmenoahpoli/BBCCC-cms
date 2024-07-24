import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: "/auth",
      component: () => import("~/layouts/auth-layout.vue"),
      children: [
        {
          path: "/auth/signin",
          name: "auth-signin",
          component: () => import("~/views/auth/sign-in.vue"),
        },
      ],
    },
  ],
});

export default router;
