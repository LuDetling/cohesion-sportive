<template>
    <section>
        <div class="container">
            <div class="on-background">
                <h2>Me contacter</h2>
                <Form @submit="sendEmail" :validation-schema="contactSchema">
                    <div>
                        <div class="lastname">
                            <label for="lastname">Nom</label>
                            <Field name="lastname" type="text" />
                            <ErrorMessage name="lastname" />
                        </div>
                        <div class="firstname">
                            <label for="firstname">Prénom</label>
                            <Field name="firstname" type="text" />
                            <ErrorMessage name="firstname" />
                        </div>
                    </div>
                    <div>
                        <div class="email">
                            <label for="email">Email</label>
                            <Field name="email" type="text" />
                            <ErrorMessage name="email" />
                        </div>
                        <div class="phone">
                            <label for="phone">Téléphone</label>
                            <Field name="phone" type="text" />
                            <ErrorMessage name="phone" />
                        </div>
                    </div>
                    <div>
                        <div class="message">
                            <label for="message">Message</label>
                            <Field as="textarea" name="message" id="message" v-model="message" />
                            <ErrorMessage name="message" />
                        </div>
                    </div>
                    <button class="btn btn-border-brown">Envoyer</button>
                </Form>
                <p v-if="valideForm || errorForm">{{ valideForm || errorForm }}</p>
            </div>
        </div>
    </section>
</template>
<script setup>
import { Field, Form, ErrorMessage } from 'vee-validate';
import { ref } from 'vue';
import * as yup from 'yup';

// const siteKey = "6Le4apoqAAAAACdoP3jYQVz15EqVVkLWWdJ1Cjku"
// const script = document.createElement("script");
// script.src = "https://www.google.com/recaptcha/api.js?render=" + siteKey;
// document.body.appendChild(script);
let url = "https://127.0.0.1:8000/api/contact"

const valideForm = ref('');
const errorForm = ref('');
const message = ref('');
const phoneRegExp = /^((\\+[1-9]{1,4}[ \\-]*)|(\\([0-9]{2,3}\\)[ \\-]*)|([0-9]{2,4})[ \\-]*)*?[0-9]{3,4}?[ \\-]*[0-9]{3,4}?$/

const contactSchema = yup.object({
    lastname: yup.string().required("Votre nom est requis"),
    firstname: yup.string().required("Votre prénom est requis"),
    email: yup.string().required("Votre email est requis").email("Votre email n'est pas valide"),
    phone: yup.string().matches(phoneRegExp, "Votre numéro de téléphone n'est pas valide"),
    message: yup.string().required("Votre message est requis").min(5, "Votre message doit être de 5 caractères minimum"),
})

const sendEmail = async (values) => {

    // const token = await new Promise((resolve) => {
    //     grecaptcha.ready(function () {
    //         grecaptcha.execute(siteKey, {
    //             action: 'homepage'
    //         })
    //             .then(resolve);
    //     })
    // });
    // values.captcha = token
    // console.log(values);

    try {
        const response = await fetch(url, {
            method: "POST",
            body: JSON.stringify(values)
        })
        const result = await response.json();
        console.log(result);
        valideForm.value = "Votre message a bien été envoyé"
        message.value = ""
    } catch (error) {
        console.log(error)
        errorForm.value = "Il y a eu une erreur"
    }

}


</script>
<style lang="scss" scoped>
#contact {
    background-image: url("@/assets/images/contact.jpg");
    background-attachment: fixed;

    .container {
        max-width: 1400px;
        margin: auto;
    }

    .on-background {
        margin-left: auto;
        width: fit-content;
        background-color: #f8f6f6;
        padding: 3rem;

        h2 {
            color: #C17C45;
            margin-bottom: 4rem;
        }

        form {
            >div {
                display: flex;
                gap: 2rem;
                margin-bottom: 2rem;

                div {
                    min-width: 350px;
                }

                label {
                    display: block;
                    margin-bottom: 1rem;
                }

                input,
                textarea {
                    background-color: transparent;
                    border: none;
                    border-bottom: 1px solid #cad3d0;
                    display: block;
                    padding: .5rem;
                    width: 100%;
                }

                span {
                    margin-top: .5rem;
                    display: block;
                }

                textarea {
                    min-width: 100%;
                    max-width: 700px;
                }

                .message {
                    width: 100%;
                    max-width: 100%
                }
            }

            button {
                margin-left: auto;
            }
        }
    }
}
</style>