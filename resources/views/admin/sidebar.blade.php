<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          
        </div>
        <ul class="list-unstyled">
                <li><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i><b>Home</b> </a></li> 

                <li>
                    <a href="{{url('view_category')}}"> <i class="icon-grid"></i><b>Category</b> 
                </a>
                </li>
                
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i><b>Products</b> </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('add_product')}}"><b>Add Product</b></a></li>
                    <li><a href="{{url('view_product')}}"><b>View Product</b></a></li>
                  </ul>
                </li>

                <li>
                    <a href="{{url('view_orders')}}"> <i class="icon-grid"></i><b>Orders</b> 
                </a>
                </li>
               
        </ul>
      </nav>