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
        console.log(error);
      });
  },
};
