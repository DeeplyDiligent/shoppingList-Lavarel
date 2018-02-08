<div id="sidebar" class="well">
    <h3>Sidebar</h3>
    <p>Normal Sidebar Content</p>
    @if(Request::is('about'))
        <p>This is the sidebar contact form:</p>
        @include('inc.form')
    @endif
    
</div>
        