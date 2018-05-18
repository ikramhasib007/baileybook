import React from 'react';
import ReactDOM from 'react-dom';
import {connect, Provider} from 'react-redux';
import configureStore from './store/configureStore';
import Developers from './components/searches/Developers';
import {startSetDevelopers} from './actions/developers';
import {startSetLanguages} from './actions/languages';
import {startSetProgrammingLanguages} from './actions/programmingLanguages';

const store = configureStore();

const jsx = (
    <Provider store={store}>
        <Developers />
    </Provider>
);

store.dispatch(startSetDevelopers()).then(() => {
    store.dispatch(startSetLanguages()).then(() => {
        store.dispatch(startSetProgrammingLanguages()).then(() => {
            if (document.getElementById('search')) {
                ReactDOM.render(jsx, document.getElementById('search'));
            }
        })
    })
})