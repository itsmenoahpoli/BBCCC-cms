import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: "/",
      redirect: "/dashboard",
    },
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
    {
      path: "/dashboard",
      component: () => import("~/layouts/dashboard-layout.vue"),
      children: [
        {
          path: '/dashboard',
          redirect: '/dashboard/contents',
        },
        {
          path: "/dashboard/contents",
          name: "dashboard-contents-manage",
          component: () => import("~/views/dashboard/contents/manage.vue"),
        },
      ],
    },
  ],
});

export default router;
