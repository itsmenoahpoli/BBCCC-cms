import { toast, type ToastOptions } from "vue3-toastify";
import httpClient from "~/api";

export const BaseService = {
  http: httpClient,

  showDialog: function (
    type: ToastOptions["type"] = "info",
    message: string = "Error occured!",
    args?: any
  ) {
    console.log(args);

    // @ts-ignore
    return toast[type](message);
  },
};
