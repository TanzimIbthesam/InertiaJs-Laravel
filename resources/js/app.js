import { createApp, h } from 'vue'
import { createInertiaApp,Link,Head } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import Layout from './Shared/Layout'
createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
    
       .component("Link",Link)
       .component("Head",Head)
      .use(plugin)
      .mixin({ methods:{route}})
      .mount(el)
  },
})
// InertiaProgress.init()
// InertiaProgress.init({
//   // The delay after which the progress bar will
//   // appear during navigation, in milliseconds.
//   delay: 250,

//   // The color of the progress bar.
//   color: 'red',

//   // Whether to include the default NProgress styles.
//   includeCSS: true,

//   // Whether the NProgress spinner will be shown.
//   showSpinner: false,
// })
