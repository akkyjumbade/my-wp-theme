import EventBus from './EventBus.js'

const app = new Vue({
   el: '#rootEl',
   data() {
      return {

      }
   },
   mounted() {
      EventBus.$emit('app.ready', {
         msg: 'Application is ready to rock :)',
      })
   }
})