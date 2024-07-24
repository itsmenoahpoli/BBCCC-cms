import { createApp, App } from "vue";
import { createPinia, Pinia } from "pinia";
import { VueQueryPlugin } from "@tanstack/vue-query";
import piniaPluginPersistedstate from "pinia-plugin-persistedstate";
import VueFeather from "vue-feather";

import RootApp from "~/App.vue";
import appRouter from "~/router";

const app: App = createApp(RootApp);
const pinia: Pinia = createPinia().use(piniaPluginPersistedstate);

/**
 * Components
 */
app.component(VueFeather.name!, VueFeather);

/**
 * Plugins
 */
app.use(pinia);
app.use(appRouter);
app.use(VueQueryPlugin);

app.mount("#app");
