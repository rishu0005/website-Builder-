@extends('main-layout')
@section('title', 'gallery form')
@section('style')
<style>
     .gallery-form {
    background: var(--bg-card);
    padding: 2rem;
    border: 1px solid var(--border-color);
    border-radius: 1rem;
    box-shadow: var(--shadow-md);
    max-width: 600px;
    margin: 2rem auto;
    color: var(--text-primary);
  }

  .gallery-form h2 {
    font-size: 1.8rem;
    margin-bottom: 1.5rem;
    background: var(--gradient-primary);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .gallery-form label {
    display: block;
    margin-bottom: 0.5rem;
    color: var(--text-primary);
    font-weight: 600;
  }

  .gallery-form input[type="text"],
  .gallery-form input[type="file"],
  .gallery-form textarea {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 1px solid var(--border-color);
    border-radius: 0.5rem;
    background: var(--bg-secondary);
    color: var(--text-primary);
    margin-bottom: 1.25rem;
    font-size: 1rem;
    box-shadow: var(--shadow-sm);
    transition: border 0.3s;
  }

  .gallery-form input:focus,
  .gallery-form textarea:focus {
    border-color: var(--primary-accent);
    outline: none;
  }

  .gallery-form textarea {
    resize: vertical;
  }

  .gallery-form button {
    background: var(--gradient-primary);
    color: #fff;
    padding: 0.85rem 1.5rem;
    font-size: 1rem;
    border: none;
    border-radius: 0.5rem;
    cursor: pointer;
    transition: all 0.3s, transform 0.2s;
    box-shadow: var(--shadow-md);
  }

  .gallery-form button:hover {
    background: var(--primary-hover);
    transform: translateY(-1px);
  }
</style>

@endsection

@section('content')
<form class="gallery-form" action="/submit_gallery.php" method="POST" enctype="multipart/form-data">
    <button type="button" class="remove-btn float-right" onclick="removeCard(this)">X</button>

  <h2>Upload Gallery Image</h2>

  <label for="image">Select Image *</label>
  <input type="file" id="image" name="image" accept="image/*" required>

  <label for="title">Image Title</label>
  <input type="text" id="title" name="title" placeholder="Enter image title">

  <label for="description">Image Description</label>
  <textarea id="description" name="description" rows="3" placeholder="Write a short description"></textarea>

  <label for="category">Category</label>
  <input type="text" id="category" name="category" placeholder="Eg: Events, Products, Office">

  {{-- <button type="submit">Upload Image</button> --}}
    <button type="button" class="add-btn" onclick="addGalleryCard()">+ Add Image Card</button>
    <button type="submit" class="submit-btn">Submit </button>
</form>
@endsection

@section('script')

  <script>
    let cardCount = 0;

    function addGalleryCard() {
      cardCount++;
      const container = document.getElementById('formContainer');

      const card = document.createElement('div');
      card.className = 'gallery-form-card';
      card.innerHTML = `
        <button type="button" class="remove-btn" onclick="removeCard(this)">X</button>

        <label for="image${cardCount}">Select Image *</label>
        <input type="file" id="image${cardCount}" name="image[]" accept="image/*" required>

        <label for="title${cardCount}">Image Title</label>
        <input type="text" id="title${cardCount}" name="title[]" placeholder="Enter image title">

        <label for="description${cardCount}">Image Description</label>
        <textarea id="description${cardCount}" name="description[]" rows="3" placeholder="Write a short description"></textarea>

        <label for="category${cardCount}">Category</label>
        <input type="text" id="category${cardCount}" name="category[]" placeholder="Eg: Events, Products, Office">
      `;

      container.appendChild(card);
    }

    function removeCard(button) {
      const card = button.parentElement;
      card.remove();
    }

    // Add one card initially
    addGalleryCard();
  </script>
@endsection


 {{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dynamic Gallery Form</title>
  <style>
    :root {
      --primary-dark: #1e293b;
      --primary-medium: #334155;
      --primary-light: #64748b;
      --primary-accent: #3b82f6;
      --primary-hover: #2563eb;
      --bg-card: #f1f5f9;
      --bg-secondary: #e2e8f0;
      --border-color: #cbd5e1;
      --text-primary: #1e293b;
      --gradient-primary: linear-gradient(90deg, #3b82f6, #2563eb);
      --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.1);
      --shadow-md: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    body {
      font-family: sans-serif;
      background: #f8fafc;
      padding: 2rem;
    }

    .gallery-form-card {
      background: var(--bg-card);
      padding: 1.5rem;
      border: 1px solid var(--border-color);
      border-radius: 1rem;
      box-shadow: var(--shadow-sm);
      margin-bottom: 1.5rem;
      position: relative;
    }

    .gallery-form-card label {
      display: block;
      margin-bottom: 0.5rem;
      color: var(--text-primary);
      font-weight: 600;
    }

    .gallery-form-card input[type="text"],
    .gallery-form-card input[type="file"],
    .gallery-form-card textarea {
      width: 100%;
      padding: 0.75rem 1rem;
      border: 1px solid var(--border-color);
      border-radius: 0.5rem;
      background: var(--bg-secondary);
      margin-bottom: 1.25rem;
      font-size: 1rem;
    }

    .gallery-form-card textarea {
      resize: vertical;
    }

    .remove-btn {
      position: absolute;
      top: 1rem;
      right: 1rem;
      background: #ef4444;
      color: #fff;
      padding: 0.3rem 0.8rem;
      border: none;
      border-radius: 0.4rem;
      cursor: pointer;
    }

    .add-btn,
    .submit-btn {
      background: var(--gradient-primary);
      color: #fff;
      padding: 0.85rem 1.5rem;
      font-size: 1rem;
      border: none;
      border-radius: 0.5rem;
      cursor: pointer;
      margin-top: 1rem;
      margin-right: 1rem;
      box-shadow: var(--shadow-md);
    }

    .add-btn:hover,
    .submit-btn:hover {
      background: var(--primary-hover);
    }
  </style>
</head>
<body>

  <h2 style="font-size:2rem; color: var(--primary-dark); margin-bottom:1.5rem;">Upload Gallery Images</h2>

  <form id="galleryForm" action="/submit_gallery.php" method="POST" enctype="multipart/form-data">

    <div id="formContainer">
      <!-- Forms will appear here -->
    </div>

    <button type="button" class="add-btn" onclick="addGalleryCard()">+ Add Image Card</button>
    <button type="submit" class="submit-btn">Submit All Images</button>

  </form>

  <script>
    let cardCount = 0;

    function addGalleryCard() {
      cardCount++;
      const container = document.getElementById('formContainer');

      const card = document.createElement('div');
      card.className = 'gallery-form-card';
      card.innerHTML = `
        <button type="button" class="remove-btn" onclick="removeCard(this)">X</button>

        <label for="image${cardCount}">Select Image *</label>
        <input type="file" id="image${cardCount}" name="image[]" accept="image/*" required>

        <label for="title${cardCount}">Image Title</label>
        <input type="text" id="title${cardCount}" name="title[]" placeholder="Enter image title">

        <label for="description${cardCount}">Image Description</label>
        <textarea id="description${cardCount}" name="description[]" rows="3" placeholder="Write a short description"></textarea>

        <label for="category${cardCount}">Category</label>
        <input type="text" id="category${cardCount}" name="category[]" placeholder="Eg: Events, Products, Office">
      `;

      container.appendChild(card);
    }

    function removeCard(button) {
      const card = button.parentElement;
      card.remove();
    }

    // Add one card initially
    addGalleryCard();
  </script>

</body>
</html> --}}
