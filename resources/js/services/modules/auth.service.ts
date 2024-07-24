import { BaseService } from "~/services/base.service";
import { useAuthStore } from "~/store";
import type { Credentials } from "~/types/auth";

export const AuthService = {
  ...BaseService,

  authenticateCredentials: async function (
    credentials: Credentials
  ): Promise<void> {
    return this.http
      .post("/auth/login", credentials)
      .then((response) => {
        const { token, user } = response.data;
        const { SET_AUTH } = useAuthStore();

        SET_AUTH(user, token);
        this.showDialog("success", "Authenticated, redirecting to dashboard");

        window.location.href = "/dashboard";
      })
      .catch((error) => {
        this.showDialog("error", "Invalid credentials provided", error);
      });
  },
};
