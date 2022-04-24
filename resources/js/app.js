import { createApp, h } from 'vue'
import { createInertiaApp,Link } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import Layout from './Shared/Layout'
createInertiaApp({
  // resolve: name => require(`./Pages/${name}`),
  resolve:async name=>{
      let page = require(`./Pages/${name}`).default;
    // let page=(await import(`./Pages/${name}`)).default

    page.layout ??= Layout;

    return page;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
    .mixin({ methods:{route}})
      // .component("Link",Link)
      .use(plugin)
      
      .mount(el)
  },
})
// InertiaProgress.init()
InertiaProgress.init({
  // The delay after which the progress bar will
  // appear during navigation, in milliseconds.
  delay: 250,

  // The color of the progress bar.
  color: 'red',

  // Whether to include the default NProgress styles.
  includeCSS: true,

  // Whether the NProgress spinner will be shown.
  showSpinner: false,
})