import "./bootstrap";
import { createApp } from "vue";
import HeaderApp from "./components/AppHeader.vue";
const app = createApp(HeaderApp);
app.mount("#VueHeader");
