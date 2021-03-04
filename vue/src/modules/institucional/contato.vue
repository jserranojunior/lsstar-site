<template>
  <div>
    <div class="flex flex-wrap justify-center shadow-lg my-2">
      <div class="w-full p-2 mx-2">
        <h2 class="text-center text-blue-800 font-bold">
          Informações de Contato
        </h2>

        <div class="flex flex-wrap">
          <div class="w-full">
            <ul class="list-unstyled">
              <li>
                <span class="text-blue-800">Vendas</span>
                <ul class="style-none ml-3">
                  <li>Paulo Rogerio dos Santos - CRECI 163 496 F</li>
                  <li>Av .General Rondon,179 - Lj 24 - CEP: 11420-030</li>
                  <li>Asturias - Guarujá - SP</li>
                  <li>Telefone: (13) 99779-1954</li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="w-full mt-1">
            <ul class="list-unstyled">
              <li>
                <span class="text-blue-800">Adm</span>
                <ul class="style-none ml-3">
                  <li>Paulo Rogerio dos Santos - CRECI 163 496 F</li>
                  <li>Av. dos Caiçaras, 31 - CEP: 11420-440</li>
                  <li>Jardim Guaiúba - Guarujá - SP</li>
                  <li>Tel: (13) 3354-2278</li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="w-full mt-1">
            <ul class="list-unstyled">
              <li>
                <span class="text-blue-800">E-mail</span>
                <ul class="style-none ml-3">
                  <li>lsstar@lsstar.com.br</li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div class="flex mt-2">
          <div class="w-full">
            <div class="mt-1">
              <input
                type="text"
                class="form-tail"
                placeholder="Seu nome *"
                name="nome"
                v-model="contato.nome"
              />
            </div>

            <div class="mt-1">
              <input
                type="text"
                class="form-tail"
                id="telefone"
                placeholder="Seu telefone"
                name="telefone"
                v-model="contato.telefone"
              />
            </div>

            <div class="mt-1">
              <input
                type="text"
                class="form-tail"
                placeholder="Seu e-mail *"
                name="email"
                v-model="contato.email"
              />
            </div>

            <div class="mt-1">
              <textarea
                name="mensagem"
                cols="40"
                rows="2"
                placeholder="Sua mensagem *"
                class="form-tail"
                v-model="contato.mensagem"
              ></textarea>
            </div>
            <button class="btn btn-primary-tail" @click="sendContato()">
              ENVIAR
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { useState } from "./use/useState";
export default {
  setup() {
    const { contato, sendContato } = useState();
    return { contato, sendContato };
  }
};
</script>

