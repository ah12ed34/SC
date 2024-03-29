@extends('layouts.home')
@section('nav')

<div  class="hdr2" style=" box-shadow: 10px;">
    <button class="spaces"> <label  class="subjectname"> الطلاب </label><img src="{{Vite::image("students.png")}}" id="subject-icon-hdr2" width="40px">
    </button>
    <div class="dep-sub-name"> نظم موزعة </div>

    <div id="btn-group-students" class="btn-group">
        <!-- <button class="Addbtn-projctsNavbar"><label class="proNavbartext">إنشاء مشروع</label></button> -->
        <button id="btn-studentsNavbar" class="btn btn-light"  onclick="location.href='{{route('studentsworksStastics')}}'"><label class="proNavbartext">الإحصائيات</label></button>
        <button id="btn-studentsNavbar" class="btn btn-light" onclick="location.href='{{route('projectsgrades-stu')}}'"><label class="proNavbartext">   المشاريع</label></button>
            <button id="btn-studentsNavbar" class="btn btn-light" onclick="location.href='{{route('assignmentsgrdes-stu')}}'"><label class="proNavbartext">   التكاليف</label></button>
              <button id="btn-studentsNavbar" class="btn btn-light" onclick="location.href='{{route('midexam')}}'"><label class="proNavbartext">   النصفي</label></button>
                  <button id="btn-studentsNavbar" class="btn btn-light" onclick="location.href='{{route('students-persents')}}'"><label class="proNavbartext"> الحضور والغياب </label></button>
        <button id="btn-studentsNavbar" class="btn btn-light"  style="background-color: #a9cbf7;text-decoration: none;border-bottom: 4px solid #2f81ec;"onclick="location.href='{{route('students')}}'"><label class="proNavbartext"> قائمة الطلاب</label></button>
    </div>
    <!-- <button class="btn-bottomNavbar"><i id="bottombaricon" class="bi bi-house-fill custom-width-icon" width="30px" height="30px"></i><br>
        <label class="bottomNavbartext">القائمة</label>
        </button> -->

    <button id="btn-studentsdropdown" type="button" class="btn btn-light  dropdown-toggle" data-toggle="dropdown">
    
        <div class="textstudentsdrop">    قائمة الطلاب</div>
    </button>
<div id="dropdown-menulist" class="dropdown-menu" style="width:100px;  ">
<a  href="{{route("students-persents")}}" id="dropdown-students-itemlist" class="dropdown-item" style="padding-left:40px; ">  الحضور والغياب</a>
<a  href="{{route("midexam")}}" id="dropdown-students-itemlist" class="dropdown-item"  style="padding-left:40px; ">  الاختبار النصفي</a>
<a   href="{{route("assignmentsgrdes-stu")}}" id="dropdown-students-itemlist" class="dropdown-item"  style="padding-left:47px; ">التكاليف</a>
<a   href="{{route("projectsgrades-stu")}}" id="dropdown-students-itemlist" class="dropdown-item"  style="padding-left:47px; "> المشاريع</a>
<a  href="{{route("studentsworksStastics")}}"   id="dropdown-students-itemlist" class="dropdown-item"  style="padding-left:45px; "> الإحصائيات</a>
</div>

    <div class="dropdown">
    <button id="btn-groups-student2" type="button" class="btn btn-light  dropdown-toggle" data-toggle="dropdown">
        <div class="textdrop2">  جميع المجموعات</div>
       </button>
    <div id="dropdown-menulist" class="dropdown-menu">
        <a id="dropdown-students-itemlist" class="dropdown-item" href="#" style="padding-left:40px;">(1)المجموعة</a>
        <a id="dropdown-students-itemlist" class="dropdown-item" href="#" style="padding-left:40px;"> المجموعة(2)</a>
        <a id="dropdown-students-itemlist" class="dropdown-item" href="#" style="padding-left:40px;"> المجموعة(3)</a>
    </div>
</div>
</div>





<div  class="hr3-students">
    <a href="{{route("subject.index")}}">    <button id="spacesbtn" class="spaces"> <img src="{{Vite::image("left-arrow.png")}}" id="spaces1"  width="30px" ></button></a>
    <button id="btn-groups-students" type="button" class="btn btn-light  dropdown-toggle" data-toggle="dropdown">
        <div class="textdrop2">  جميع المجموعات</div>
       </button>
    <div id="dropdown-menulist" class="dropdown-menu">
        <a id="dropdown-students-itemlist" class="dropdown-item" href="#" style="padding-left:40px; ">(1)المجموعة</a>
        <a id="dropdown-students-itemlist" class="dropdown-item" href="#" style="padding-left:40px; "> المجموعة(2)</a>
        <a id="dropdown-students-itemlist" class="dropdown-item" href="#" style="padding-left:40px;"> المجموعة(3)</a>
    </div>
    <div id="input-groupstudent" class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-append">
            <button id="form-control" class="btn btn-light" type="submit"><img src="{{Vite::image("magnifying-glass (2).png")}}" id="spaces2"  width="20px" ></button>
        </div>
    </div>
    <td><button type="submit" class="btn btn-primary btn-sm" id="btn-uploade-grades" data-toggle="modal" data-target="#myModal"> رفع الدرجات<img src="{{Vite::image("plus.png")}}"  width="20px" style="float: left;"></button> </td>

</div>


@endsection
@section("content")



    <div class="responsive"></div>


    <div class="container" id="container-project" style="  padding-top: 30px;" >

        <div class="table-responsive-xl">
            <table class="table" style=" width:100%;">
                <thead class="table-header" style="font-size: 12px;">
                    <tr class="table-light" id="modldetials">
                        <th>تعديل</th>
                        <th>عرض</th>
                        <th>ملاحظة</th>
                        <th>التقدير</th>
                        <th>المجموع</th>
                        <th>المشاريع </th>
                        <th>التكاليف</th>
                        <th>النصفي</th>
                        <th>المشاركة </th>
                        <th>الحضور </th>
                        <th>اسم الطالب</th>
                        <th>الرقم الأكاديمي </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light" id="modldetials" style="margin-top:7px;">
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-edit" data-toggle="modal" data-target="#myModalEdite">تعديل  <img src="{{Vite::image("edit.png")}}" id=""  width="15px" ></button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-detials" data-toggle="modal" data-target="#myModalDisplay">عرض</button> </td>
                        <td>*******</td>
                        <td>*****</td>
                        <td> ****</td>
                        <td>*******</td>
                        <td>*******</td>
                        <td>******</td>
                        <td> ******</td>
                        <td>*******</td>
                        <td>احمد الوجيه</td>
                        <td>2164093</td>
                    </tr>

                    <tr class="table-light" id="modldetials" style="margin-top:7px;">
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-edit" data-toggle="modal" data-target="#myModalEdite">تعديل  <img src="{{Vite::image("edit.png")}}" id=""  width="15px" ></button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-detials" data-toggle="modal" data-target="#myModalDisplay">عرض</button> </td>
                        <td>*******</td>
                        <td>*****</td>
                        <td> ****</td>
                        <td>*******</td>
                        <td>*******</td>
                        <td>******</td>
                        <td> ******</td>
                        <td>*******</td>
                        <td>احمد الوجيه</td>
                        <td>2164093</td>
                    </tr>
                    <tr class="table-light" id="modldetials" style="margin-top:7px;">
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-edit" data-toggle="modal" data-target="#myModalEdite">تعديل  <img src="{{Vite::image("edit.png")}}" id=""  width="15px" ></button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-detials" data-toggle="modal" data-target="#myModalDisplay">عرض</button> </td>
                        <td>*******</td>
                        <td>*****</td>
                        <td> ****</td>
                        <td>*******</td>
                        <td>*******</td>
                        <td>******</td>
                        <td> ******</td>
                        <td>*******</td>
                        <td>احمد الوجيه</td>
                        <td>2164093</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content" id="modal-content2">

                <!-- Modal Header -->
                <div class="modal-header" id="modheader">
                    رفع الدرجات
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="" style="display: block;">
                        <div class="form-group">
                            <!-- <label for="usr">Name:</label> -->

                            <input type="file" class="form-control-file border" id="file" name="file" style="height: 30px; margin-top:8px">
                        </div>
                        <!-- <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div> -->
                    </form>
                </div>

                <!-- Modal footer -->

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btnsave-file" >حفظ</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="btncancel-file">إلغاء</button>
                </div>
            </div>
        </div>
    </div>
    

        <!-- The ModalDisplaydata -->
        <div class="modal fade" id="myModalDisplay">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="background-color: #F6F7FA;height:30%;" >

                    <!-- Modal Header -->
                    <div class="modal-header" id="modheader" style="text-align: center;">
                        <!-- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  -->
                        بيان الدرجات<button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form action="/action_page.php" style="display: block;">
                            <div class="form-group">
                                <label for="usr" style="font-size: 14px;">الرقم الأكاديمي: 21164093</label>
                                <br> <label for="usr" style="font-size: 14px;">اسم الطالب: احمدالوجيه</label>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="table-header" style="font-size: 11px;">
                                            <tr class="table-primary" id="modldetials">
                                                <th>ملاحظة</th>
                                                <th>التقدير</th>
                                                <th>المجموع</th>
                                                <th>المشاريع </th>
                                                <th>التكاليف</th>
                                                <th>النصفي</th>
                                                <th>المشاركة </th>
                                                <th>الحضور </th>
                                                <th>المادة </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-light" id="modldetials" style="margin-top:7px;">
                                                <td>*******</td>
                                                <td>*****</td>
                                                <td> ****</td>
                                                <td>*******</td>
                                                <td>*******</td>
                                                <td>******</td>
                                                <td> ******</td>
                                                <td>*******</td>
                                                <td>*******</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <!-- <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div> -->
                        </form>
                    </div>

                    <!-- Modal footer -->

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-light" id="print">طباعة  <img src="{{Vite::image("printing.png")}}" id=""  width="15px"  ></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- The ModalEdite -->
        <div class="modal fade" id="myModalEdite">
            <div class="modal-dialog modal-lg">
                <div class="modal-content"  style="background-color: #F6F7FA;height:40%;">

                    <!-- Modal Header -->
                    <div class=" modal-header" id="modheader" style="padding-left: 47%;">
                        تعديل
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <form action="/action_page.php" style="display: block;">
                            <div class="form-group">
                                <label for="usr" style="font-size: 14px;">الرقم الأكاديمي: 21164093</label>
                                <br> <label for="usr" style="font-size: 14px;">اسم الطالب: احمدالوجيه</label>

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="table-header" style="font-size: 12px;">
                                            <tr class="table-light" id="modldetials">
                                                <th colspan="2" style="width:200px">ملاحظة</th>
                                                <th>التقدير</th>
                                                <th>المجموع</th>
                                                <th>المشاريع </th>
                                                <th>التكاليف</th>
                                                <th>النصفي</th>
                                                <th>المشاركة </th>
                                                <th>الحضور </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-light" id="modldetials" style="margin-top:7px;">
                                                <td colspan="2" style="width:200px;"> <input type="text" class="form-control" id="inputtext" name="notes" placeholder="" style="height: 30px; margin-top:-6px;width:200px;box-shadow:none;border:none;"></td>
                                                <td> <input type="text" class="form-control" id="inputtext" name="estimated" placeholder="" style="height: 30px; margin-top:-6px;box-shadow:none;border:none;"></td>
                                                <td> <input type="text" class="form-control" id="inputtext" name="total" placeholder="" style="height: 30px; margin-top:-6px;box-shadow:none;border:none;text-align:center;"></td>
                                                <td> <input type="text" class="form-control" id="inputtext" name="projects" placeholder="" style="height: 30px; margin-top:-6px;box-shadow:none;border:none;text-align:center;"></td>
                                                <td> <input type="text" class="form-control" id="inputtext" name="assignements" placeholder="" style="height: 30px; margin-top:-6px;box-shadow:none;border:none;text-align:center;"></td>
                                                <td> <input type="text" class="form-control" id="inputtext" name="midexam" placeholder="" style="height: 30px; margin-top:-6px;box-shadow:none;border:none;text-align:center;"></td>
                                                <td> <input type="text" class="form-control" id="inputtext" name="working" placeholder="" style="height: 30px; margin-top:-6px;box-shadow:none;border:none;text-align:center;"></td>
                                                <td> <input type="text" class="form-control" id="inputtext" name="persents" placeholder="" style="height: 30px; margin-top:-6px;box-shadow:none;border:none;text-align:center;"></td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <!-- <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div> -->
                        </form>
                    </div>

                    <!-- Modal footer -->

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="bt-edite" >حفظ</button>
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





@endsection