<template>
    <section>
        <Form @submit="login" :validation-schema="loginSchema">
            <div class="username">
                <label for="username">Email</label>
                <Field name="username" type="text" id="username" />
                <ErrorMessage name="username" />
            </div>
            <div class="password">
                <label for="password">Mot de passe</label>
                <Field name="password" type="password" id="password" />
                <ErrorMessage name="password" />
            </div>
            <button class="btn btn-border-brown">Envoyer</button>
            <p v-if="errorForm">{{ errorForm }}</p>
        </Form>
    </section>
</template>
<script setup>
import { JsonRequestError } from '@fullcalendar/core';
import { Field, Form, ErrorMessage } from 'vee-validate';
import { ref } from 'vue';
import * as yup from 'yup';
import YupPassword from 'yup-password'
YupPassword(yup)

const url = "https://127.0.0.1:8000/api/login_check"
const errorForm = ref("");

const loginSchema = yup.object({
    username: yup.string().required("Votre email est requis").email("Votre email n'est pas valide"),
    password: yup.string().required("Votre mot de passe est requis"),
})

const login = async (values) => {    
    console.log(JSON.stringify(values));
    
    try {
        const response = await fetch(url, {
            method: "POST",
            body: JSON.stringify(values),
            headers: {
                "Content-Type": "application/json"
            }
        })
        const result = await response.json();
        console.log(result)
    } catch (error) {
        console.error(error);
    }
}

</script>
<style lang="scss" scoped></style>