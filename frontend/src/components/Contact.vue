<template>
    <section>
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
                        <Field as="textarea" name="message" id="message" />
                        <ErrorMessage name="message" />
                    </div>
                </div>
                <button class="btn btn-border-brown">Envoyer</button>
            </Form>
        </div>
    </section>
</template>
<script setup>
import { Field, Form, ErrorMessage } from 'vee-validate';
import * as yup from 'yup';

const phoneRegExp = /^((\\+[1-9]{1,4}[ \\-]*)|(\\([0-9]{2,3}\\)[ \\-]*)|([0-9]{2,4})[ \\-]*)*?[0-9]{3,4}?[ \\-]*[0-9]{3,4}?$/


const contactSchema = yup.object({
    lastname: yup.string().required("Votre nom est requis"),
    firstname: yup.string().required("Votre prénom est requis"),
    email: yup.string().required("Votre email est requis").email(),
    phone: yup.string().matches(phoneRegExp, "Le numéro de téléphone n'est pas valide"),
    message: yup.string().required("Votre message est requis").min(10, "Message de 10 caractères minimum"),
})

const sendEmail = async (values) => {
    try {
        const response = await fetch("https://127.0.0.1:8000/api/contact", {
            method: "POST",
            body: JSON.stringify(values)
        })
        console.log(response);
    } catch (error) {
        console.log(error)
    }
}

</script>
<style lang="scss" scoped>
#contact {
    background-image: url("@/assets/images/contact.jpg");
    background-attachment: fixed;

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