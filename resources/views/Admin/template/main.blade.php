@include('Admin.template.head')
@include('Admin.template.sidebar')
<div class="main-panel">
@include('Admin.template.navbar')
@yield('content') 
@include('Admin.template.footer')
