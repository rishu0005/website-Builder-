@extends('main-layout')
@section('title', 'FAQ Customization')
@section('style')
  <style>
    /* :root {
      --primary-dark: #1e293b;
      --primary-medium: #334155;
      --primary-light: #64748b;
      --primary-accent: #3b82f6;
      --primary-hover: #2563eb;

      --secondary-dark: #581c87;
      --secondary-medium: #7c3aed;
      --secondary-light: #a855f7;
      --secondary-accent: #ec4899;

      --bg-primary: #f8fafc;
      --bg-secondary: #ffffff;
      --bg-card: #ffffff;
      --text-primary: #1e293b;
      --text-secondary: #64748b;
      --text-muted: #94a3b8;
      --border-color: #e2e8f0;
      --border-light: #f1f5f9;

      --success: #10b981;
      --success-light: #d1fae5;
      --warning: #f59e0b;
      --warning-light: #fef3c7;
      --error: #ef4444;
      --error-light: #fee2e2;

      --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
      --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
      --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);

      --radius: 12px;
    } */

    body {
      /* font-family: 'Segoe UI', sans-serif; */
      background: var(--bg-primary);
      /* color: var(--text-primary); */
      /* margin: 0; */
      /* padding: 40px; */
    }

    .faq-container {
      max-width: 800px;
      margin: auto;
      background: var(--bg-card);
      padding: 30px;
      border-radius: var(--radius);
      box-shadow: var(--shadow-lg);
      border: 1px solid var(--border-color);
    }

    h2 {
      text-align: center;
      color: var(--primary-dark);
      margin-bottom: 30px;
    }

    .faq-item {
      background: var(--bg-secondary);
      padding: 20px;
      border: 1px solid var(--border-color);
      border-radius: var(--radius);
      box-shadow: var(--shadow-sm);
      margin-bottom: 20px;
      position: relative;
      transition: all 0.3s ease;
    }

    .form-group {
      margin-bottom: 16px;
    }

    label {
      font-weight: 600;
      margin-bottom: 8px;
      display: block;
      color: var(--primary-medium);
    }

    input[type="text"],
    textarea,
    select {
      width: 100%;
      padding: 12px;
      border: 1px solid var(--border-color);
      border-radius: var(--radius);
      background: var(--bg-secondary);
      color: var(--text-primary);
      font-size: 1rem;
      transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    textarea:focus,
    select:focus {
      border-color: var(--primary-accent);
      outline: none;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    /* .btn {
      padding: 12px 20px;
      border: none;
      border-radius: var(--radius);
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .btn-primary {
      background: var(--primary-accent);
      color: #fff;
    } */

    .btn-primary:hover {
      background: var(--primary-hover);
    }

    .btn-add {
      margin-bottom: 20px;
      display: inline-block;
    }

    .btn-remove {
      background: var(--error);
      color: #fff;
      position: absolute;
      top: 12px;
      right: 12px;
      padding: 8px 14px;
      font-size: 0.85rem;
    }

    .btn-remove:hover {
      background: #dc2626;
    }

    .btn-submit {
      width: 100%;
    }

  </style>

@endsection
@section('content')
<div class="faq-container mt-5">
    <h2>Customize FAQs</h2>

    <button type="button" class="btn btn-primary btn-add" onclick="addFaqItem()">+ Add FAQ</button>

    <form id="faq-form" action="#" method="POST">
      <div id="faq-items">
        <!-- Default FAQ Item -->
        <div class="faq-item">
          <button type="button" class="btn float-right  mb-2 btn-danger " onclick="removeFaqItem(this)">Remove</button>
          <div class="form-group">
            <label>Question</label>
            <input type="text" name="question[]" placeholder="Enter FAQ question" required>
          </div>
          <div class="form-group">
            <label>Answer</label>
            <textarea name="answer[]" class="p-3" placeholder="Enter FAQ answer" required></textarea>
          </div>
          <div class="form-group">
            <label>Status</label>
            <select name="status[]" class="p-2">
              <option value="active" selected>Active</option>
              <option value="inactive">Inactive</option>
            </select>
          </div>
        </div>
      </div>

      <button type="submit" class="button w-100">Save FAQs</button>
    </form>
  </div>
@endsection

@section('script')
  <script>
    function addFaqItem() {
      const container = document.getElementById('faq-items');
      const newItem = document.createElement('div');
      newItem.classList.add('faq-item');
      newItem.innerHTML = `
        <button type="button" class="btn btn-remove" onclick="removeFaqItem(this)">Remove</button>
        <div class="form-group">
          <label>Question</label>
          <input type="text" name="question[]" placeholder="Enter FAQ question" required>
        </div>
        <div class="form-group">
          <label>Answer</label>
          <textarea name="answer[]" placeholder="Enter FAQ answer" required></textarea>
        </div>
        <div class="form-group">
          <label>Status</label>
          <select name="status[]">
            <option value="active" selected>Active</option>
            <option value="inactive">Inactive</option>
          </select>
        </div>
      `;
      container.appendChild(newItem);
    }

    function removeFaqItem(button) {
      const faqItem = button.closest('.faq-item');
      faqItem.remove();
    }
  </script>
@endsection