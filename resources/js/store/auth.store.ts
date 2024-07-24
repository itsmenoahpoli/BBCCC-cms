import { defineStore } from "pinia";
import { User } from "~/types/auth";

type AuthStore = {
  state: {
    user?: User;
    token?: string;
  };
};

export const useAuthStore = defineStore("auth-store", {
  state: (): AuthStore["state"] => {
    return {
      user: undefined,
      token: undefined,
    };
  },
  getters: {
    //
  },
  actions: {
    SET_AUTH(user: User, token: string) {
      this.user = user;
      this.token = token;
    },
  },
  persist: true,
});
