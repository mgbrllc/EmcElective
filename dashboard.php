<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .dashboard-container {
      display: flex;
    }

    .side-panel {
      width: 250px;
      background-color: #f2f2f2;
      padding: 20px;
    }

    .dashboard-buttons {
      display: flex;
      flex-direction: column;
    }

    .dashboard-buttons a {
      text-decoration: none;
      margin-bottom: 10px;
    }

    .dashboard-buttons button {
      width: 100%;
      padding: 10px;
      border: none;
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    }

    .dashboard-buttons button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="dashboard-container">
    <div class="side-panel">
      <h1>Welcome to the Restaurant Dashboard</h1>
      <div class="dashboard-buttons">
        <a href="employeeLog.html"><button>Employee</button></a>
        <a href="ingredientInventory.html"><button>Ingredient Inventory</button></a>
        <a href="packagingInventory.html"><button>Packaging Inventory</button></a>
        <a href="supplierInformation.html"><button>Supplier Information</button></a>
        <a href="adminMenu.html"><button>Admin Menu</button></a>
      </div>
    </div>
    <!-- Main content goes here -->
  </div>

  <script>
    // Simulated login functionality
    const isAdmin = true; // Change to true for admin access

    // Function to navigate to different pages
    function navigate(page) {
      // You can implement actual page navigation logic here
      if (page === 'employee_log') {
        window.location.href = 'employeeLog.html';
      } else {
        console.log(`Navigating to ${page}`);
      }
    }

    // Show admin menu button if the user is admin
    if (isAdmin) {
      document.getElementById('adminMenuBtn').style.display = 'block';
    }
  </script>
</body>
</html>
