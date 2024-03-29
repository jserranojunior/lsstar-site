import { toRefs, reactive } from "vue";
import { useHttpInstitucional } from "./useHttpInstitucional";
import imgLogo from "@/assets/imgs/logo.png"
import imgInstitucional from "@/assets/imgs/institucional/banner-home.png"
import videoLasPalmas from "/public/videos/videolaspalmas.mp4"

export const useState = () => {
  const { httpSendEmailContato } = useHttpInstitucional();
  const state = reactive({
    contato: {},
    logo: imgLogo,
    banner: imgInstitucional,

    video: videoLasPalmas,
    linkmapa:
      "https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1288.6079629238022!2d-46.274691206548184!3d-24.005178528126653!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1613755467581!5m2!1spt-BR!2sbr",
  });

  function validationEmail() {
    if (
      !state.contato.nome ||
      !state.contato.email ||
      !state.contato.mensagem
    ) {
      alert("Campos vazios");
      return false;
    } else {
      return true;
    }
  }

  async function sendContato() {
    if (validationEmail()) {
      await httpSendEmailContato(state.contato).then((res) => {
        if (res) {
          alert("E-mail enviado com sucesso");
          state.contato = {};
        } else {
          alert("Erro ao enviar e-mail");
        }
      });
    }
  }

  return { ...toRefs(state), sendContato };
};
