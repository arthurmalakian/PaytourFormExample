<template>
  <div class="form grid grid-cols-2 gap-2 content-center px-10 py-10">
    <form class="w-full max-w-lg">
      <div class="flex flex-wrap -mx-3">
        <div class="w-full px-3">
          <label
            class="
              block
              uppercase
              tracking-wide
              text-gray-700 text-xs
              font-bold
              mb-2
            "
            for="name"
          >
            Nome
          </label>
          <input
            class="
              appearance-none
              block
              w-full
              bg-gray-200
              text-gray-700
              border border-gray-200
              rounded
              py-3
              mb-3
              px-4
              leading-tight
              focus:outline-none focus:bg-white focus:border-gray-500
            "
            id="name"
            type="text"
            placeholder="João da Silva"
          />
        </div>
      </div>
      <div class="flex flex-wrap -mx-3">
        <div class="w-full px-3">
          <label
            class="
              block
              uppercase
              tracking-wide
              text-gray-700 text-xs
              font-bold
              mb-2
            "
            for="email"
          >
            Email
          </label>
          <input
            class="
              appearance-none
              block
              w-full
              bg-gray-200
              text-gray-700
              border border-gray-200
              rounded
              py-3
              px-4
              mb-3
              leading-tight
              focus:outline-none focus:bg-white focus:border-gray-500
            "
            id="email"
            type="email"
            placeholder="joaodasilva@email.com"
          />
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full md:w-1/2 px-3 mb-3 md:mb-0">
          <label
            class="
              block
              uppercase
              tracking-wide
              text-gray-700 text-xs
              font-bold
              mb-2
            "
            for="target_job"
          >
            Cargo desejado
          </label>
          <input
            class="
              appearance-none
              block
              w-full
              bg-gray-200
              text-gray-700
              rounded
              py-3
              px-4
              mb-3
              leading-tight
              focus:outline-none focus:bg-white
            "
            id="target_job"
            type="text"
            placeholder="Desenvolvedor Fullstack"
          />
        </div>
        <div class="w-full md:w-1/2 px-3 mb-3 md:mb-0">
          <label
            class="
              block
              uppercase
              tracking-wide
              text-gray-700 text-xs
              font-bold
              mb-2
            "
            for="education_level"
          >
            Nível de escolaridade
          </label>
          <div class="relative">
            <select
              class="
                block
                appearance-none
                w-full
                bg-gray-200
                border border-gray-200
                text-gray-700
                py-3
                px-4
                pr-8
                rounded
                leading-tight
                focus:outline-none focus:bg-white focus:border-gray-500
              "
              id="education_level"
            >
              <option selected disabled>Selecione uma opção</option>
              <option value="1">Analfabeto</option>
              <option value="2">Até 5º Ano Incompleto</option>
              <option value="3">5º Ano Completo</option>
              <option value="4">6º ao 9º Ano do Fundamental</option>
              <option value="5">Fundamental Completo</option>
              <option value="6">Médio Incompleto</option>
              <option value="7">Médio Completo</option>
              <option value="8">Superior Incompleto</option>
              <option value="9">Superior Completo</option>
              <option value="10">Mestrado</option>
              <option value="11">Doutorado</option>
            </select>
            <div
              class="
                pointer-events-none
                absolute
                inset-y-0
                right-0
                flex
                items-center
                px-2
                text-gray-700
              "
            >
              <svg
                class="fill-current h-4 w-4"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                />
              </svg>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-3">
        <div class="w-full px-3">
          <label
            class="
              block
              uppercase
              tracking-wide
              text-gray-700 text-xs
              font-bold
              mb-2
            "
            for="grid-password"
          >
            Observações
          </label>
          <textarea
            class="
              appearance-none
              block
              w-full
              bg-gray-200
              text-gray-700
              border border-gray-200
              rounded
              py-3
              px-4
              mb-3
              leading-tight
              focus:outline-none focus:bg-white focus:border-gray-500
            "
            id="grid-password"
            type="password"
            rows="5"
            cols="10"
            style="resize: none"
            placeholder="Sou um ótimo profissional e procuro sempre estar atualizado!"
          />
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label
            class="
              block
              uppercase
              tracking-wide
              text-gray-700 text-xs
              font-bold
              mb-2
            "
            for="target_job"
          >
            Data de envio
          </label>
          <Datepicker v-model="date" />
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label
            class="
              block
              uppercase
              tracking-wide
              text-gray-700 text-xs
              font-bold
              mb-2
            "
            for="target_job"
          >
            Currículo
          </label>
          <input
            class="
              form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700
              focus:bg-white
              focus:border-blue-600
              focus:outline-none
            "
            type="file"
            id="formFile"
          />
        </div>
      </div>
      <div class="md:flex md:items-center">
          <button
            class="
              shadow
              bg-indigo-600
              hover:bg-indigo-400
              focus:shadow-outline focus:outline-none
              text-white
              font-bold
              py-2
              px-4
              rounded
              w-full
            "
            type="button"
          >
            Enviar
          </button>
      </div>
    </form>
    <div class="md:flex">
      <div class="md:flex-shrink-0">
        <img
          class="rounded-lg md:w-56"
          src="./assets/curriculos.jpg"
          width="448"
          height="299"
          alt="Woman paying for a purchase"
        />
      </div>
      <div class="mt-4 md:mt-0 md:ml-6">
        <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">
          BASE DE TALENTOS
        </div>
        <a
          href="#"
          class="
            block
            mt-1
            text-lg
            leading-tight
            font-semibold
            text-gray-900
            hover:underline
          "
          >Cadastre seu currículo!</a
        >
        <p class="mt-2 text-gray-600">
          Empresas de todo o país tem acesso a essa base, seu currículo será
          entregue diretamente a todas elas.
        </p>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from "vue";
import Datepicker from "@vuepic/vue-datepicker";

const date = ref();
</script>

<style>
</style>
