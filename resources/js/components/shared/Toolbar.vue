<template>
   <v-toolbar>
      <v-toolbar-title>Accountant</v-toolbar-title>
      <v-spacer></v-spacer>
      <div class="hidden-sm-and-down router-links-container">
         <router-link onclick="event.preventDefault()" class="toolbar-links" v-for="(link, index) in links" :key="index"
                      :to="link.to" v-if="link.show">
            <div class="toolbar-links">
               <v-icon class="mr-2">{{ link.icon }}</v-icon>
               <span v-if="link.title">{{ link.title }}</span>
            </div>
         </router-link>
      </div>
   </v-toolbar>
</template>

<script>
    export default {
        name: "Toolbar",
        data() {
            return {
                links: [
                    {to: 'login', icon: 'fas fa-sign-in-alt', title: 'Вхід', show: ! User.isLoggedIn() },
                    {to: 'registration', icon: 'fas fa-user-plus', title: 'Реєстрація', show: ! User.isLoggedIn() },
                    {to: 'expenses', icon: 'fas fa-dollar-sign', title: 'Витрати', show: User.isLoggedIn()},
                    {to: 'expense-items', icon: 'fas fa-file-invoice-dollar', title: 'Статті витрат', show: User.isLoggedIn()},
                    {to: 'calendar', icon: 'far fa-calendar-alt', title: 'Календар', show: User.isLoggedIn()},
                    {to: 'logout', icon: 'fas fa-power-off', title: '', show: User.isLoggedIn()},
                ],
                showLoginLink: true

            }
        },
        watch : {
            '$route' (to, from) {
                if (to.path == '/registration' && !User.isLoggedIn()) {
                    this.links[0].show = true;
                    this.links[1].show = false;
                } else if (to.path == '/login' && !User.isLoggedIn()){
                    this.links[1].show = true;
                    this.links[0].show = false;
                }
            }
        },
        mounted() {
            if (this.$router.currentRoute.path == '/registration' && !User.isLoggedIn()){
                this.links[0].show = true;
                this.links[1].show = false;
            } else if (this.$router.currentRoute.path == '/login' && !User.isLoggedIn()) {
                this.links[1].show = true;
                this.links[0].show = false;
            }
        }
    }
</script>

<style scoped>
   .router-links-container {
      display: flex;
      justify-content: center;
      align-items: center;
   }

   .toolbar-links {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 10px;
      height: 100%;
      padding-right: 0;
      padding-left: 20px;
   }

   .router-links-container a:hover, .router-links-container a:visited {
      color: initial;
      text-decoration: none !important;
   }

   .toolbar-links i {
      margin-right: 0 !important;
   }

   .toolbar-links span {
      margin-left: 8px;
      color: initial;
      font-size: 17px;
      color: rgba(0, 0, 0, .54);
   }
</style>