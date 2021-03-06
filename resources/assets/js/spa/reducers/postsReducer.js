// Posts Reducer
const postsReducerDefaultState = [];
const postsReducer = (state=postsReducerDefaultState, action) => {
  switch(action.type) {
    case 'ADD_POST':
      return [action.post, ...state];
    case 'REMOVE_POST':
      return state.filter(post => post.id !== action.id)
    case 'EDIT_POST': 
      return state.map(post => {
        if(post.id === action.id){
          return {
            ...post,
            ...action.updates
          }
        } else {
          return post;
        }
      });
    case 'SET_POSTS':
      return action.posts;
    default:
      return state;
  }
};

export default postsReducer;