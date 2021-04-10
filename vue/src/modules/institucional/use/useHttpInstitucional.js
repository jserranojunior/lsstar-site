import { useApiConnect } from "@/modules/api/use/useApiConnect";

export const useHttpInstitucional = () => {
  async function httpSendEmailContato(data) {
    const urlApi = `/site/contato`;
    return useApiConnect()
      .postWithoutToken(urlApi, data)
      .then((response) => {
        if (response.data) {
          return response.data;
        }
      })
      .catch((err) => {
        console.log(data);
        // eslint-disable-next-line
        console.log(err.response);
      });
  }

  return { httpSendEmailContato };
};
