import React from 'react';
import ReactDOM from 'react-dom';

const Root = () => {
    return (
        <h1 className="display-3 text-center text-primary">Welcome</h1>
    );
}
 
export default Root;

if(document.getElementById('root')){
    ReactDOM.render(<Root />, document.getElementById('root'));
}