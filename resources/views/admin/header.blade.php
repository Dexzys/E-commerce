<style>
  .logout-button {
    background-color: red;
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 5px;
    cursor: pointer;
}

.logout-button:hover {
    background-color: darkred;
}
</style>
<header class="header">   
    <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
            <div class="search-inner d-flex align-items-center justify-content-center">
                <div class="close-btn">Close <i class="fa fa-close"></i></div>
                <form id="searchForm" action="#">
                    <div class="form-group">
                        <input type="search" name="search" placeholder="What are you searching for...">
                        <button type="submit" class="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbar-header">
                <!-- Navbar Header--><a href="index.html" class="navbar-brand">
                    <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary"></strong><strong></strong></div>
                    <div class="brand-text brand-sm"><strong class="text-primary"></strong><strong></strong></div></a>
                <!-- Sidebar Toggle Btn-->
                <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
            </div>
            <!-- Log out -->
            <div class="list-inline-item logout">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input type="submit" value="Logout" class="logout-button">
                </form>
            </div>
        </div>
    </nav>
</header>
