<template>
    <section>
        <Form @submit="register" :validation-schema="registerSchema">
            <div class="lastname">
                <label for="lastname">Nom</label>
                <Field name="lastname" type="text" id="lastname" />
                <ErrorMessage name="lastname" />
            </div>
            <div class="firstname">
                <label for="firstname">Prénom</label>
                <Field name="firstname" type="text" id="firstname" />
                <ErrorMessage name="firstname" />
            </div>
            <div class="phone">
                <label for="phone">Téléphone</label>
                <Field name="phone" type="text" id="phone" />
                <ErrorMessage name="phone" />
            </div>
            <div class="email">
                <label for="email">Email</label>
                <Field name="email" type="text" id="email" />
                <ErrorMessage name="email" />
            </div>
            <div class="plainPassword">
                <label for="plainPassword">Mot de passe</label>
                <Field name="plainPassword" type="password" id="plainPassword" />
                <ErrorMessage name="plainPassword" />
            </div>
            <button class="btn btn-border-brown">Envoyer</button>
            <p v-if="errorForm">{{ errorForm }}</p>
        </Form>
    </section>
</template>
<script setup>
import { Field, Form, ErrorMessage } from 'vee-validate';
import { ref } from 'vue';
import * as yup from 'yup';
import YupPassword from 'yup-password'
YupPassword(yup)

const url = "https://127.0.0.1:8000/api/register"
const phoneRegExp = /^((\\+[1-9]{1,4}[ \\-]*)|(\\([0-9]{2,3}\\)[ \\-]*)|([0-9]{2,4})[ \\-]*)*?[0-9]{3,4}?[ \\-]*[0-9]{3,4}?$/
const errorForm = ref("");

const registerSchema = yup.object({
    lastname: yup.string().required("Votre nom est requis").min(2, "Votre nom doit être de 2 caractères minimum"),
    firstname: yup.string().required("Votre prénom est requis").min(2, "Votre prénom doit être de 2 caractères minimum"),
    email: yup.string().required("Votre email est requis").email("Votre email n'est pas valide"),
    phone: yup.string().matches(phoneRegExp, "Votre numéro de téléphone n'est pas valide"),
    plainPassword: yup.string().minNumbers(1, "Votre mot de passe doit contenir un chiffre").minUppercase(1, "Votre mot de passe doit contenir une majuscule").required("Votre mot de passe est requis").min(8, "Votre mot de passe doit être de 8 caractères minimum"),})

const register = async (values) => {
    try {
        const response = await fetch(url, {
            method: "POST",
            body: JSON.stringify(values),
        })
        const result = await response.json();
        if (result.code == 2) {
            errorForm.value = "Cet email est déjà utilisé"
        }
    } catch (error) {
        console.error(error);
    }
}

</script>
<style lang="scss" scoped></style>