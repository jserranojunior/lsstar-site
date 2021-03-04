export const useHttpInstitucional = () => {
  async function httpSendEmailContato(contato) {
    if (contato) {
      console.log(contato);
      return true;
    }
    return false;
  }
  return { httpSendEmailContato };
};
