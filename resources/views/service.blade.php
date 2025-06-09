<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Service Section Creator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background: #f4f4f4;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    form {
      max-width: 800px;
      margin: auto;
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }
    .form-group {
      margin-bottom: 15px;
    }
    label {
      font-weight: 600;
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
      resize: vertical;
    }
    .service-item {
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      margin-bottom: 15px;
      background: #fafafa;
    }
    button {
      background: #007bff;
      color: white;
      border: none;
      padding: 12px 18px;
      border-radius: 8px;
      cursor: pointer;
    }
    button:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>

  <h2>Create Your Service Section</h2>

  <form id="serviceSectionForm">
    <div class="form-group">
      <label for="sectionTitle">Section Title</label>
      <input type="text" id="sectionTitle" name="sectionTitle" placeholder="Our Services">
    </div>

    <div class="form-group">
      <label for="sectionDescription">Section Description</label>
      <textarea id="sectionDescription" name="sectionDescription" rows="3" placeholder="Brief description about your services..."></textarea>
    </div>

    <h3>Services</h3>

    <div id="servicesContainer">
      <!-- Service items will go here -->
      <div class="service-item">
        <div class="form-group">
          <label>Service Icon (FontAwesome class or image URL)</label>
          <input type="text" name="serviceIcon[]" placeholder="fa-solid fa-code or https://...">
        </div>
        <div class="form-group">
          <label>Service Title</label>
          <input type="text" name="serviceTitle[]" placeholder="Web Development">
        </div>
        <div class="form-group">
          <label>Service Description</label>
          <textarea name="serviceDescription[]" rows="2" placeholder="Describe this service..."></textarea>
        </div>
      </div>
    </div>

    <button type="button" onclick="addService()">+ Add Another Service</button>
    <br><br>
    <button type="submit">Generate Service Section</button>
  </form>

  <script>
    function addService() {
      const container = document.getElementById('servicesContainer');
      const serviceItem = document.createElement('div');
      serviceItem.classList.add('service-item');
      serviceItem.innerHTML = `
        <div class="form-group">
          <label>Service Icon (FontAwesome class or image URL)</label>
          <input type="text" name="serviceIcon[]" placeholder="fa-solid fa-code or https://...">
        </div>
        <div class="form-group">
          <label>Service Title</label>
          <input type="text" name="serviceTitle[]" placeholder="Web Development">
        </div>
        <div class="form-group">
          <label>Service Description</label>
          <textarea name="serviceDescription[]" rows="2" placeholder="Describe this service..."></textarea>
        </div>
      `;
      container.appendChild(serviceItem);
    }
  </script>

</body>
</html>
