@if (session('user_role') == 'student')
    <x-studentDashboard>
    </x-studentDashboard>
@elseif (session('user_role') == 'faculty')
    <x-faculty-dashboard>
    </x-faculty-dashboard>
@else
    <x-admin-dashboard>
    </x-admin-dashboard>
@endif
