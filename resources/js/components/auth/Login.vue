<template>
   <v-container fluid fill-height>
      <v-layout align-center justify-center>
         <v-flex xs12 sm8 md6 lg4 xl3>
            <v-card>
               <v-toolbar dark color="primary">
                  <v-toolbar-title class="white--text toolbar-title">Вхід</v-toolbar-title>
               </v-toolbar>
               <v-container fluid grid-list-md>
                  <v-layout row wrap justify-center>
                     <v-flex xs10>
                        <v-form>
                           <v-text-field prepend-inner-icon="far fa-user" type="text" v-model="form.login" label="Логін" required></v-text-field>
                           <v-text-field prepend-inner-icon="fas fa-key" type="password" v-model="form.password" label="Пароль" required></v-text-field>

                           <v-layout justify-space-between class="registration-form-buttons-container">
                              <v-btn ref="loginButton" color="info">Вхід</v-btn>
                              <v-btn @click.prevent="resetForm" color="error">Очистити</v-btn>
                           </v-layout>
                        </v-form>
                     </v-flex>
                  </v-layout>
               </v-container>
            </v-card>
         </v-flex>
      </v-layout>
   </v-container>
</template>

<script>
    export default {
        name: "Registration",
        data(){
            return {
                form: {
                    login: null,
                    password: null,
                }
            }
        },
        methods: {
            resetForm() {
                for(let key in this.form){
                    this.form[key] = null;
                }
            }
        }
    }
</script>

<style scoped>
   .toolbar-title {
      width: 100%;
      text-align: center;
   }
   .registration-form-buttons-container {
      margin: 20px 0px !important;
   }
   .registration-form-buttons-container button {
      padding: 10px 25px;
      margin: 0;
   }
</style>