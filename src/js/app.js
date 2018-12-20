import EventBus from './EventBus.js'

const app = new Vue({
   _scopeId: 'h-app',
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
export default app;
