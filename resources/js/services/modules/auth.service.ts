import { toast } from "vue3-toastify";
import { BaseService } from "~/services/base.service";
import type { Credentials } from "~/types/auth";

export const AuthService = {
  ...BaseService,

  authenticateCredentials: async function (
    credentials: Credentials
  ): Promise<void> {
    return this.http
      .post("/auth/login", credentials)
      .then((response) => {
        console.log(credentials);
        console.log(response);
      })
      .catch((error) => {
        toast.error("Invalid credentials provided");
        console.log(error);
      });
  },
};
