<template>
    <div class="flex justify-center items-center">
        <form @submit.prevent="register">
            <div class="mb-4">
                <label for=""> Name </label>
                <input v-model="name" type="text" id="name" placeholder="Nombre">
            </div>

            <div class="mb-4">
                <label for=""> Email </label>
                <input v-model="email" type="email" id="email" placeholder="Correo electronico">
            </div>

            <div class="mb-4">
                <label for=""> Password </label>
                <input v-model="password" type="password" id="password" placeholder="Contraseña">
            </div>

            <button type="submit" class="bg-blue-500 text-white">
                Register
            </button>
        </form>
    </div>
</template>