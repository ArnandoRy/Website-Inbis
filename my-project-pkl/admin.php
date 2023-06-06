<!DOCTYPE html>
<html>
  <head>
    <title>MyAdmin Dashboard</title>
    <link rel="stylesheet" href="admin.css" />
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <h1>Admin</h1>
        <p>Selamat Datang ,  Admin! </p>
        <ul>
          <li><a href="../roy/koneksi.php">Dashboard</a></li>
          <li><a href="/koneksi.php">Data Pengguna</a></li>
          <li><a href="/koneksi.php">Laporan</a></li>
          <li><a href="/koneksi.php">Pengaturan</a></li>
          <li><a href="koneksi.php">Keluar</a></li>
        </ul>
       
        <!-- Sidebar content here -->
      </div>
      <div class="content">
        <h1>MyAdmin Dashboard</h1>

        <h2>Create</h2>
        <form id="createForm">
          <label for="image">Image:</label>
          <input type="file" id="image" name="image" />
          <label for="title">Title:</label>
          <input type="text" id="title" name="title" />
          <label for="content">Content:</label>
          <textarea id="content" name="content" rows="4"></textarea>
          <label for="date">Date:</label>
          <input type="date" id="date" name="date" />
          <br />
          <button class="creat-button" type="submit">Create</button>
        </form>

        <h2>Read</h2>
        <table id="table">
          <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Content</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </table>

        <!-- Main content here -->
      </div>
    </div>

    <script>
      // Array to store card data
      var cardsData = [];

      // Function to create a new row in the table
      function createRow(image, title, content, date) {
        var table = document.getElementById("table");
        var row = table.insertRow(-1);
        var imageCell = row.insertCell(0);
        var titleCell = row.insertCell(1);
        var contentCell = row.insertCell(2);
        var dateCell = row.insertCell(3);
        var actionCell = row.insertCell(4);

        imageCell.innerHTML = `<img src="${image}" alt="Card Image" width="100">`;
        titleCell.innerHTML = title;
        contentCell.innerHTML = content;
        dateCell.innerHTML = date;
        actionCell.innerHTML = `
                <button class="edit-button" onclick="editRow(this)">Edit</button>
                <button class="delete-button" onclick="deleteRow(this)">Delete</button>
            `;

        // Store card data in the array
        cardsData.push({
          image: image,
          title: title,
          content: content,
          date: date,
        });
      }

      // Function to add a new row using the create form
      document
        .getElementById("createForm")
        .addEventListener("submit", function (event) {
          event.preventDefault();

          var imageFile = document.getElementById("image").files[0];
          var title = document.getElementById("title").value;
          var content = document.getElementById("content").value;
          var date = document.getElementById("date").value;

          if (imageFile && title && content && date) {
            var reader = new FileReader();
            reader.onload = function () {
              var image = reader.result;
              createRow(image, title, content, date);
            };
            reader.readAsDataURL(imageFile);

            document.getElementById("image").value = "";
            document.getElementById("title").value = "";
            document.getElementById("content").value = "";
            document.getElementById("date").value = "";
          }
        });

      // Function to edit a row
      function editRow(button) {
        var row = button.parentNode.parentNode;
        var image = row.cells[0].querySelector("img").getAttribute("src");
        var title = row.cells[1].innerHTML;
        var content = row.cells[2].innerHTML;
        var date = row.cells[3].innerHTML;

        row.cells[0].innerHTML = `<input type="file" onchange="handleFileChange(this)">`;
        row.cells[1].innerHTML = `<input type="text" value="${title}">`;
        row.cells[2].innerHTML = `<textarea>${content}</textarea>`;
        row.cells[3].innerHTML = `<input type="date" value="${date}">`;
        row.cells[4].innerHTML = `
                <button class="edit-button" onclick="updateRow(this)">Update</button>
                <button class="delete-button" onclick="deleteRow(this)">Delete</button>
            `;
      }

      // Function to handle file change in edit mode
      function handleFileChange(input) {
        var file = input.files[0];
        var reader = new FileReader();
        reader.onload = function () {
          var image = reader.result;
          var imgElement = document.createElement("img");
          imgElement.src = image;
          imgElement.setAttribute("width", "100");
          input.parentNode.replaceChild(imgElement, input);
        };
        reader.readAsDataURL(file);
      }

      // Function to update a row
      function updateRow(button) {
        var row = button.parentNode.parentNode;
        var image = row.cells[0].querySelector("img").getAttribute("src");
        var title = row.cells[1].querySelector("input").value;
        var content = row.cells[2].querySelector("textarea").value;
        var date = row.cells[3].querySelector("input").value;

        row.cells[0].innerHTML = `<img src="${image}" alt="Card Image" width="100">`;
        row.cells[1].innerHTML = title;
        row.cells[2].innerHTML = content;
        row.cells[3].innerHTML = date;
        row.cells[4].innerHTML = `
                <button class="edit-button" onclick="editRow(this)">Edit</button>
                <button class="delete-button" onclick="deleteRow(this)">Delete</button>
            `;

        var rowIndex = row.rowIndex - 1;
        cardsData[rowIndex].image = image;
        cardsData[rowIndex].title = title;
        cardsData[rowIndex].content = content;
        cardsData[rowIndex].date = date;
      }

      // Function to delete a row
      function deleteRow(button) {
        var row = button.parentNode.parentNode;
        var rowIndex = row.rowIndex - 1;
        cardsData.splice(rowIndex, 1);
        row.parentNode.removeChild(row);
      }

      // Function to render all rows
      function renderRows() {
        for (var i = 0; i < cardsData.length; i++) {
          var cardData = cardsData[i];
          createRow(
            cardData.image,
            cardData.title,
            cardData.content,
            cardData.date
          );
        }
      }

      // Initial rendering
      renderRows();
    </script>
  </body>
</html>
