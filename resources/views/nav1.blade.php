<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Custom Navbar Builder</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f9fc;
      padding: 20px;
    }
    h1, h2 {
      color: #333;
    }
    form {
      max-width: 800px;
      margin: auto;
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }
    fieldset {
      margin-bottom: 20px;
      border: 1px solid #ddd;
      padding: 15px;
      border-radius: 8px;
    }
    legend {
      font-weight: bold;
      padding: 0 10px;
    }
    label {
      display: block;
      margin-top: 10px;
      font-weight: 500;
    }
    input[type="text"],
    input[type="number"],
    input[type="file"],
    select,
    textarea {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    input[type="color"] {
      padding: 2px;
    }
    input[type="checkbox"] {
      margin-right: 5px;
    }
    .nav-link-item {
      border: 1px solid #eee;
      padding: 10px;
      margin: 10px 0;
      border-radius: 6px;
      background: #f9f9f9;
    }
    button {
      padding: 8px 12px;
      margin-top: 10px;
      background: #007bff;
      color: #fff;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
    button:hover {
      background: #0056b3;
    }
    textarea {
      height: 100px;
    }
  </style>
</head>
<body>

  <h1>Custom Navbar Builder</h1>

  <form id="navbar-builder">
    <h2>Navbar Customization</h2>

    <!-- Logo Settings -->
    <fieldset>
      <legend>Logo Settings</legend>

      <label>Logo Type:</label>
      <select id="logo_type">
        <option value="text">Text</option>
        <option value="image">Image</option>
        <option value="none">None</option>
      </select>

      <div id="logo_text_group">
        <label>Logo Text:</label>
        <input type="text" id="logo_text">
      </div>

      <div id="logo_image_group" style="display:none;">
        <label>Upload Logo Image:</label>
        <input type="file" id="logo_image">
      </div>

      <label>Logo Position:</label>
      <select id="logo_position">
        <option value="left">Left</option>
        <option value="center">Center</option>
        <option value="right">Right</option>
      </select>
    </fieldset>

    <!-- Navigation Links -->
    <fieldset>
      <legend>Navigation Links</legend>
      <div id="nav_links_container">
        <div class="nav-link-item">
          <label>Link Text:</label>
          <input type="text" class="link_text">

          <label>Link URL:</label>
          <input type="text" class="link_url">

          <label><input type="checkbox" class="link_new_tab"> Open in New Tab</label>
        </div>
      </div>
      <button type="button" onclick="addNavLink()">+ Add Link</button>
    </fieldset>

    <!-- Layout & Position -->
    <fieldset>
      <legend>Navbar Layout</legend>

      <label>Position:</label>
      <select id="navbar_position">
        <option value="top">Top</option>
        <option value="left">Left-side</option>
        <option value="right">Right-side</option>
        <option value="bottom">Bottom</option>
      </select>

      <label><input type="checkbox" id="sticky_navbar"> Sticky Navbar</label>
    </fieldset>

    <!-- Colors & Styling -->
    <fieldset>
      <legend>Colors & Styling</legend>

      <label>Background Color:</label>
      <input type="color" id="background_color">

      <label>Text Color:</label>
      <input type="color" id="text_color">

      <label>Hover Color:</label>
      <input type="color" id="hover_color">

      <label>Active Link Color:</label>
      <input type="color" id="active_link_color">

      <label>Font Family:</label>
      <input type="text" id="font_family" placeholder="e.g. Arial, Poppins">

      <label>Font Size (px):</label>
      <input type="number" id="font_size" min="10" max="36" value="16">
    </fieldset>

    <!-- Extra Features -->
    <fieldset>
      <legend>Extra Features</legend>

      <label><input type="checkbox" id="add_search"> Add Search Bar</label>

      <label><input type="checkbox" id="add_cta" onchange="toggleCTA()"> Add Call-to-Action Button</label>

      <div id="cta_fields" style="display:none;">
        <label>Button Text:</label>
        <input type="text" id="cta_text">

        <label>Button URL:</label>
        <input type="text" id="cta_url">

        <label>Button Color:</label>
        <input type="color" id="cta_color">

        <label>Button Position:</label>
        <select id="cta_position">
          <option value="left">Left</option>
          <option value="right">Right</option>
        </select>
      </div>
    </fieldset>

    <!-- Submit -->
    <button type="submit">Save Navbar</button>
  </form>

  <script>
    // Show/Hide Logo Options
    document.getElementById("logo_type").addEventListener("change", function() {
      const type = this.value;
      document.getElementById("logo_text_group").style.display = type === "text" ? "block" : "none";
      document.getElementById("logo_image_group").style.display = type === "image" ? "block" : "none";
    });

    // Show/Hide CTA Fields
    function toggleCTA() {
      document.getElementById("cta_fields").style.display = document.getElementById("add_cta").checked ? "block" : "none";
    }

    // Add New Nav Link
    function addNavLink() {
      const container = document.getElementById("nav_links_container");
      const linkItem = document.createElement("div");
      linkItem.className = "nav-link-item";
      linkItem.innerHTML = `
        <label>Link Text:</label>
        <input type="text" class="link_text">

        <label>Link URL:</label>
        <input type="text" class="link_url">

        <label><input type="checkbox" class="link_new_tab"> Open in New Tab</label>

        <button type="button" onclick="this.parentElement.remove()">Remove</button>
      `;
      container.appendChild(linkItem);
    }
  </script>

</body>
</html>
