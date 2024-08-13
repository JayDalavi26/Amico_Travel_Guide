
document.addEventListener('DOMContentLoaded', function () {
    const storedPosts = localStorage.getItem('posts');
    if (storedPosts) {
      const posts = JSON.parse(storedPosts);
      posts.forEach(post => {
        createPostContainer(post.imageUrl, post.title, post.description);
      });
    }
  });
  
  document.getElementById('postForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent default form submission
  
    const fileInput = document.getElementById('image');
    const title = document.getElementById('title').value;
    const description = document.getElementById('description').value;
  
    if (fileInput.files.length > 0) {
      const reader = new FileReader();
  
      reader.onload = function (event) {
        const imageUrl = event.target.result;
        createPostContainer(imageUrl, title, description);
  
        // Store the new post data in local storage
        const storedPosts = localStorage.getItem('posts');
        const posts = storedPosts ? JSON.parse(storedPosts) : [];
        posts.push({ imageUrl, title, description });
        localStorage.setItem('posts', JSON.stringify(posts));
      };
  
      reader.readAsDataURL(fileInput.files[0]);
    }
  });
  
  function createPostContainer(imageUrl, title, description) {
    const postContainer = document.createElement('div');
    postContainer.classList.add('post-container');
  
    const imageElement = document.createElement('img');
    imageElement.src = imageUrl;
    imageElement.alt = 'Uploaded Image';
    postContainer.appendChild(imageElement);
  
    const textContainer = document.createElement('div');
    textContainer.classList.add('text-container');
  
    const titleElement = document.createElement('h2');
    titleElement.textContent = title;
    textContainer.appendChild(titleElement);
  
    const descriptionElement = document.createElement('p');
    descriptionElement.textContent = description;
    textContainer.appendChild(descriptionElement);
  
    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.addEventListener('click', function () {
      postContainer.remove();
      // Remove the corresponding post data from local storage
      const storedPosts = localStorage.getItem('posts');
      if (storedPosts) {
        const posts = JSON.parse(storedPosts);
        const updatedPosts = posts.filter(post => post.imageUrl !== imageUrl);
        localStorage.setItem('posts', JSON.stringify(updatedPosts));
      }
    });
    textContainer.appendChild(deleteButton);
  
    postContainer.appendChild(textContainer);
  
    document.getElementById('imageContainer').appendChild(postContainer);
  }