
import { createApp } from 'vue'; // Import createApp from Vue
import App from './components/App.vue'; // Import the root Vue component
import router from './router'; // Import the Vue Router instance

const app = createApp(App); // Create the Vue app

app.use(router); // Use the Vue Router instance

app.mount('#app'); // Mount the app to the element with id 'app'

export default app; // Export the app instance
