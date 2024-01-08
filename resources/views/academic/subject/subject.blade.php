@extends('layouts.home')
@section('nav')

<div class="hdr2" style=" box-shadow: 10px;">
    <button class="spaces"> <label  class="subjectname">نظم موزعة </label><img src="{{Vite::image("allocation (1).png")}}" id="subject-icon-hdr2" width="40px">
    </button>
    <div class="dep-sub-name">نظم موزعة </div>
</div>
@endsection
@section("content")
<div class="content">
    <div class="responsive"></div>
    <div class="cards-child"><img src="{{Vite::image("paper-plane.png")}}" class="" width="100px" style="margin-left: -6px; margin-top:10px;">
        <div class="cards-child-child">الإشعارات</div>
    </div>
    <div class="cards-child"><img src="{{Vite::image("open-book.png")}}" class="" width="100px" style="margin-left: -6px; margin-top:10px;">
        <div class="cards-child-child">المقرر الدراسي</div>
    </div>
    <div class="cards-child"><img src="{{Vite::image("students.png")}}" class="" width="100px" style="margin-left: -6px; margin-top:10px;">
        <div class="cards-child-child">الطلاب</div>
    </div>
    <div class="cards-child"><img src="{{Vite::image("homework (3).png")}}" class="" width="100px" style="margin-left: -6px; margin-top:10px;">
        <div class="cards-child-child">التكاليف</div>
    </div>
    <a href="{{route("projects")}}">
    <div class="cards-child"><img src="{{Vite::image("project-management.png")}}" class="" width="100px" style="margin-left: -18px; margin-top:10px;">
        <div class="cards-child-child">المشاريع</div>
    </div>
    </a>

</div>


<div class="bottomNavbar">
    <button class="btn-bottomNavbar"><img src="{{Vite::image("setting (2).png")}}" class="bottombaricon" width="20px"><br><label class="bottomNavbartext">الإعدادات</label></button>
    <button class="btn-bottomNavbar"><img src="{{Vite::image("portfolio (2).png")}}" class="bottombaricon" width="20px"><br><label class="bottomNavbartext">الأرشيف</label></button>
    <button class="btn-bottomNavbar"><img src="{{Vite::image("calendar (3).png")}}" class="bottombaricon" width="20px"><br><label class="bottomNavbartext">الجدول </label></button>
    <button class="btn-bottomNavbar"><img src="{{Vite::image("home (1).png")}}" class="bottombaricon" width="20px"><br><label class="bottomNavbartext">القائمة</label></button>


</div>
@endsection