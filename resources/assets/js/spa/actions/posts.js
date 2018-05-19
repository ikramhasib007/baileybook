// Add Post
export const addPost = (post) => ({
  type: 'ADD_POST',
  post
});
// Start Add Post
export const startAddPost = (postData = {}) => {
  const {
    title = 'post title',
    category_id = 0,
    body = 'post body'
  } = postData;
  const post = {title, category_id, body};
  return (dispatch) => {
    return axios.post('/testposts', post).then((response) => {
      dispatch(addPost(response.data));
    }).catch((error) => {
      //console.log(error.message);
    });
  };
};
// Remove Post
export const removePost = (id) => ({
    type: 'REMOVE_POST',
    id
});
// Start remove post
export const startRemovePost = (id) => {
  return (dispatch) => {
    return axios.delete(`/testposts/${id}`).then(() => {
      dispatch(removePost(id));
    }).catch((error) => {
      //console.log(error.message);
    });
  };
};
// Edit Post
export const editPost = (id, updates) => ({
    type: 'EDIT_POST',
    id,
    updates
});
// Start edit post
export const startEditPost = (id, post) => {
  return (dispatch) => {
    return axios.put(`/testposts/${id}`, post).then((response) => {
      dispatch(editPost(id, response.data));
    }).catch((error) => {
      //console.log(error.message);
    });
  };
};
// Set Posts
export const setPosts = (posts) => ({
  type: 'SET_POSTS',
  posts
});
// Start Set Posts
export const startSetPosts = () => {
  return (dispatch) => {
    return axios.get('/testposts').then((response) => {
      dispatch(setPosts(response.data));
    }).catch(error => {
      //console.log(error.message);
    });
  }
};