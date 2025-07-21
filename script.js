let users = [];

const userTable = document.getElementById("userTable");
const searchInput = document.getElementById("searchInput");
const addUserForm = document.getElementById("addUserForm");
const activeUsersCount = document.getElementById("activeUsers");

// Get users from backend
async function fetchUsers() {
  const res = await fetch("get_users.php");
  users = await res.json();
  renderUsers();
}

// Show users
function renderUsers(userList = users) {
  userTable.innerHTML = "";
  userList.forEach((user, index) => {
    const row = document.createElement("tr");
    row.innerHTML = `
      <td>${user.name}</td>
      <td>${user.email}</td>
      <td>${user.role}</td>
      <td>${user.status}</td>
      <td>
        <button class="edit-btn" onclick="editUser(${index})">Edit</button>
        <button onclick="deleteUser(${user.id})">Delete</button>
      </td>
    `;
    userTable.appendChild(row);
  });

  const activeCount = users.filter(u => u.status.toLowerCase() === "active").length;
  activeUsersCount.textContent = activeCount;
}

// Add user
addUserForm.addEventListener("submit", async (e) => {
  e.preventDefault();
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const role = document.getElementById("role").value;
  const status = document.getElementById("status").value;

  await fetch("add_user.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ name, email, role, status }),
  });

  addUserForm.reset();
  fetchUsers();
});

//Edit user
window.editUser = function (index) {
  const user = users[index];
  const newName = prompt("Edit Name", user.name);
  const newEmail = prompt("Edit Email", user.email);
  const newRole = prompt("Edit Role", user.role);
  const newStatus = prompt("Edit Status", user.status);

  if (newName && newEmail && newRole && newStatus) {
    fetch("edit_user.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({
        id: user.id,
        name: newName,
        email: newEmail,
        role: newRole,
        status: newStatus
      })
    }).then(() => {
      fetchUsers(); // refresh the table
    });
  }
};

// Delete user
window.deleteUser = async function (id) {
  if (confirm("Delete this user?")) {
    await fetch("delete_user.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ id }),
    });
    fetchUsers();
  }
};

// Search
searchInput.addEventListener("input", () => {
  const keyword = searchInput.value.toLowerCase();
  const filtered = users.filter((u) =>
    Object.values(u).some((val) =>
      String(val).toLowerCase().includes(keyword)
    )
  );
  renderUsers(filtered);
});

document.addEventListener("DOMContentLoaded", () => {
  const logoutBtn = document.getElementById("logoutBtn");
  if (logoutBtn) {
    logoutBtn.addEventListener("click", () => {
      localStorage.removeItem("isAdmin");
      window.location.href = "login.html";
    });
  }
});

// Load users on start
fetchUsers();
