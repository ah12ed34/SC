@extends('layouts.home')
@section('nav')
<div class="hdr2" style=" box-shadow: 10px;">
    <button class="spaces"> <label  class="subjectname"> المشاريع </label><img src="{{Vite::image("project-management.png")}}" id="subject-icon-hdr2" width="40px">
    </button>
    <div class="dep-sub-name"> نظم موزعة </div>

    <div class="btn-group">
        <!-- <button class="Addbtn-projctsNavbar"><label class="proNavbartext">إنشاء مشروع</label></button> -->
        <button class="btn-projctsNavbar2"><label class="proNavbartext">الإحصائيات</label></button>
        <button class="btn-projctsNavbar2"><label class="proNavbartext"> غير منجزة</label></button>
        <button class="btn-projctsNavbar2"><label class="proNavbartext"> منجزة </label></button>
        <button class="btn-projctsNavbar2"><label class="proNavbartext">الكل</label></button>
    </div>
    <!-- <button class="btn-bottomNavbar"><i id="bottombaricon" class="bi bi-house-fill custom-width-icon" width="30px" height="30px"></i><br>
        <label class="bottomNavbartext">القائمة</label>
        </button> -->

    <button id="button-hdr2" type="button" class="btn btn-light  dropdown-toggle" data-toggle="dropdown" >
             <div class="textdrop">  جميع المشاريع</div>
            </button>
    <div id="dropdown-menulist" class="dropdown-menu" style="width:130px; color: #0E70F2; ">
        <a id="dropdown-itemlist" class="dropdown-item" href="#" style="padding-left:40px; ">منجزة</a>
        <a id="dropdown-itemlist" class="dropdown-item" href="#" style="padding-left:30px; ">غير منجزة</a>
        <a id="dropdown-itemlist" class="dropdown-item" href="#"> الإحصائيات</a>
    </div>

</div>
@endsection
@section("content")
<div class="content">

    <div class="hr3">
        <button id="spacesbtn" class="spaces"> <img src="{{Vite::image("left-arrow.png")}}" id="spaces1"  width="30px" ></button>
        <div id="input-group" class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-append">
                <button id="form-control" class="btn btn-light" type="submit"><img src="{{Vite::image("magnifying-glass (2).png")}}" id="spaces2"  width="20px" ></button>
            </div>
        </div>
        <button class="Addbtn-projctsNavbar" data-toggle="modal" data-target="#myModal"><label class="proNavbartext">إنشاء مشروع</label><img src="{{Vite::image("plus.png")}}"  width="20px" style="float: left;"></button>

    </div>

    <div class="responsive"></div>


    <div class="container">

        <div class="table-responsive-xl">
            <table class="table" style=" width:100%;">
                <thead class="table-header" style="font-size: 12px;">
                    <tr class="table-light" id="modldetials">
                        <th>تعديل</th>
                        <th>التفاصيل</th>
                        <th>الدردشة </th>
                        <th>الوصف</th>
                        <th>الدرجة</th>
                        <th>رئيس المشروع</th>
                        <th>تاريخ التسليم</th>
                        <th>الحالة</th>
                        <th>اسم المشروع</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light" id="modldetials" style="margin-top:7px;">
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-chat-edit" data-toggle="modal" data-target="#myModal3">تعديل  <img src="{{Vite::image("edit.png")}}" id=""  width="15px" ></button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-detials" data-toggle="modal" data-target="#myModal2">التفاصيل</button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal1" id="btn-chat-edit">الدردشة <img src="{{Vite::image("conversation (3).png")}}" id=""  width="25px" ></button> </td>
                        <td>*******</td>
                        <td>30</td>
                        <td>احمد الوجيه</td>
                        <td>*******</td>
                        <td>غير مكتمل</td>
                        <td>SFMS</td>
                    </tr>
                    <tr class="table-light">
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-chat-edit" data-toggle="modal" data-target="#myModal3">تعديل  <img src="{{Vite::image("edit.png")}}" id=""  width="15px" ></button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-detials" data-toggle="modal" data-target="#myModal2">التفاصيل</button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal1" id="btn-chat-edit">الدردشة <img src="{{Vite::image("conversation (3).png")}}" id=""  width="25px" ></button> </td>
                        <td>*******</td>
                        <td>30</td>
                        <td>احمد الوجيه</td>
                        <td>*******</td>
                        <td>غير مكتمل</td>
                        <td>SFMS</td>
                    </tr>
                    <tr class="table-light">
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-chat-edit" data-toggle="modal" data-target="#myModal3">تعديل  <img src="{{Vite::image("edit.png")}}" id=""  width="15px" ></button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-detials" data-toggle="modal" data-target="#myModal2">التفاصيل</button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal1" id="btn-chat-edit">الدردشة <img src="{{Vite::image("conversation (3).png")}}" id=""  width="25px" ></button> </td>
                        <td>*******</td>
                        <td>30</td>
                        <td>احمد الوجيه</td>
                        <td>*******</td>
                        <td>غير مكتمل</td>
                        <td>SFMS</td>
                    </tr>
                    <tr class="table-light">
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-chat-edit" data-toggle="modal" data-target="#myModal3">تعديل  <img src="{{Vite::image("edit.png")}}" id=""  width="15px" ></button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-detials" data-toggle="modal" data-target="#myModal2">التفاصيل</button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal1" id="btn-chat-edit">الدردشة <img src="{{Vite::image("conversation (3).png")}}" id=""  width="25px" ></button> </td>
                        <td>*******</td>
                        <td>30</td>
                        <td>احمد الوجيه</td>
                        <td>*******</td>
                        <td>غير مكتمل</td>
                        <td>SFMS</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-content" style="background-color: #F6F7FA;">

                <!-- Modal Header -->
                <div class="modal-header" id="modheader">
                    انشاء مشروع جديد
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="/action_page.php" style="display: block;">
                        <div class="form-group">
                            <!-- <label for="usr">Name:</label> -->
                            <input type="text" class="form-control" id="inputtext" name="username" placeholder="اسم المشروع " style="height: 30px; margin-top:-6px">
                            <input type="text" class="form-control" id="inputtext" name="username" placeholder="الدرجة " style="height: 30px; margin-top:8px">
                            <textarea style="height: 80px;" class="form-control" rows="3" id="comment" placeholder=" وصف المشروع " style=" margin-top:8px"></textarea>
                            <input type="text" class="form-control" id="inputtext" name="username" placeholder=" تاريخ التسليم " style="height: 30px; margin-top:8px">
                            <input type="text" class="form-control" id="inputtext" name="username" placeholder=" الحد الأقصى للطلاب " style="height: 30px; margin-top:8px">
                            <input type="text" class="form-control" id="inputtext" name="username" placeholder="الحد الأدنى للطلاب " style="height: 30px; margin-top:8px">
                            <input type="file" class="form-control-file border" id="file" name="file" style="height: 30px; margin-top:8px">
                            <input type="text" class="form-control" id="inputtext" name="username" placeholder="ملاحظة " style="height: 30px; margin-top:8px">
                        </div>
                        <!-- <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div> -->
                    </form>
                </div>

                <!-- Modal footer -->

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btnsave" style="float: left; margin-left:30px;">حفظ</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="btncancel">إلغاء</button>
                </div>
            </div>
        </div>
    </div>
    <!-- <img src="{{Vite::image("allocation (1).png")}}" class="" width="150px">
        <div class="card-child-1"> Distributed System نظم تشغيل <br> تقنية معلومات - مستوى رابع<br>أ.منال العريقي
        </div>
    </div>
    <div class="card" style="margin-left: 22px;">
        <img src="{{Vite::image("allocation (1).png")}}" class="" width="150px">
        <div class="card-child-1"> Networks Management إدارة شبكات <br> تقنية معلومات - مستوى رابع<br>أ.منال العريقي
        </div> -->

</div>

<!-- The Modal1 -->
<div class="modal fade" id="myModal1">
    <div class="modal-dialog">
        <div class="modal-content" id="modal-content" style="background-color: #F6F7FA;">

            <!-- Modal Header -->
            <div class="modal-header" id="modheader">
                <div class="projectchattitle">الدردشة <img src="{{Vite::image("conversation (3).png")}}" id="" width="25px"></div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" id="projectchating">






            </div>

            <!-- Modal footer -->
            <div class="modal-footer" style="padding-right: 120px;">
                <input type="text" class="form-control" id="sendmessa" name="username" placeholder="اكتب ...">
                <img src="{{Vite::image("send.png")}}" id="send-png" width="25px">
                <!-- <button type="button" class="btn btn-danger" data-dismiss="modal" id="btncancel">إلغاء</button> -->
            </div>

        </div>
    </div>
</div>


<!-- The Modal2 -->
<div class="modal fade" id="myModal2">
    <div class="modal-dialog">
        <div class="modal-content" id="modal-content" style="background-color: #F6F7FA; height:550px;">

            <!-- Modal Header -->
            <div class="modal-header" id="modheader">
                <div class="projectchattitle">تفاصيل المشروع <img src="{{Vite::image("routine.png")}}" id="" width="25px"></div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->

            <div class="modal-body" id="projectdetails">


                <label class="textdetailsproj" for=""> اسم المشروع</label><br>
                <label class="textdetailsproj" for=""> رئيس المشروع</label><br>
                <label class="textdetailsproj" for="">  تاريخ التسليم</label><br>
                <label class="textdetailsproj" for="">  الوصف</label><br><br><br>
                <label class="textdetailsproj" for="">  الدرجة</label><br>
                <div class=" rectanglesprojects"><label for="">  اللفات المرفقة</label></div><br>
                <div class="rectanglesprojects"><label for="">   فريق المشروع</label></div>




            </div>

            <!-- Modal footer -->
            <div class="modal-footer" style="padding-right: 120px;">

                <!-- <button type="button" class="btn btn-danger" data-dismiss="modal" id="btncancel">إلغاء</button> -->
            </div>

        </div>
    </div>
</div>

<div class="bottomNavbar">
    <button class="btn-bottomNavbar"><img src="{{Vite::image("setting (2).png")}}" class="bottombaricon" width="20px"><br><label class="bottomNavbartext">الإعدادات</label></button>
    <button class="btn-bottomNavbar"><img src="{{Vite::image("portfolio (2).png")}}" class="bottombaricon" width="20px"><br><label class="bottomNavbartext">الأرشيف</label></button>
    <button class="btn-bottomNavbar"><img src="{{Vite::image("calendar (3).png")}}" class="bottombaricon" width="20px"><br><label class="bottomNavbartext">الجدول </label></button>
    <button class="btn-bottomNavbar"><img src="{{Vite::image("home (1).png")}}" class="bottombaricon" width="20px"><br><label class="bottomNavbartext">القائمة</label></button>

    <!-- <button class="btn-bottomNavbar"><i id="bottombaricon" class="bi bi-house-fill custom-width-icon" width="30px" height="30px"></i><br>
    <label class="bottomNavbartext">القائمة</label>
    </button> -->
</div>
@endsection