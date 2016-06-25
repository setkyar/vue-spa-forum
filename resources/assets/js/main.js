import Vue from 'vue';
import Router from 'vue-router';
import Resource from 'vue-resource';
import App from './components/App.vue';
import HomeView from './components/HomeVue.vue';
import CategoryView from './components/CategoryView.vue';
import {fromNow, largeNumber} from './filters/index';

// Install the router
Vue.use(Router);
//Install Vue Resource
Vue.use(Resource);

Vue.filter('fromNow', fromNow);
Vue.filter('largeNumber', largeNumber);

var router = new Router({
	history: true
});

router.map({
	'/': {
		name: 'home',
		component: HomeView
	},
	'/category/:categoryId': {
	  	name: 'category',
	  	component: CategoryView
	}
});

router.redirect({
	'*': '/'
});

router.start(App, '#app');