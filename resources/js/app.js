import { createApp, h } from 'vue'
import { createInertiaApp, Link, Head } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'


createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      //component link ed head
      .component("Link", Link)
      .component("Head", Head)
      .mount(el)
  },
})

InertiaProgress.init(
    {
        color: 'green',
    }
);
