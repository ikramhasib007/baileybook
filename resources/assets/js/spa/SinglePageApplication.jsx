import React from 'react';
import ReactDOM from 'react-dom';
import {Provider} from 'react-redux';
import configureStore from './store/configureStore';
import {startSetPosts} from './actions/posts';
import {startSetCategories} from './actions/categories';
import Posts from './components/Posts/Posts';


const store = configureStore();


const jsx = (
  <Provider store={store}>
    <Posts />
  </Provider>
);

store.dispatch(startSetPosts()).then(() => {
  store.dispatch(startSetCategories()).then(() => {
    if (document.getElementById("spa")) {
      ReactDOM.render(jsx, document.getElementById("spa"));
    }
  })
});
