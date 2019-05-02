class User {

    register(data){
        axios.post(
            '/api/register',
            data
        ).then(response => {
            if(response.data.deleted && response.data.deleted == 'true'){
                setTimeout(() => {
                    this.$store.commit('deleteCostDirection', this.directionForDel);
                    this.$refs.delCostDirectionButton.removeAttribute('disabled');
                    this.$refs.preloader.style.display = 'none';
                    this.toggleModal();
                }, 500);
            }

            /*notification with toastr*/

        }).catch(error => {
            console.log(error);
        });
    }

    isLoggedIn(){
        return false;
    }

}

export default User = new User();