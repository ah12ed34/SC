@extends('layouts.home')
@section('nav')
<div class="hdr2" style=" box-shadow: 10px;">
    <button class="spaces"> <label  class="subjectname"> المشاريع </label><img src="{{Vite::image("project-management.png")}}" id="subject-icon-hdr2" width="40px">
    </button>
    <div class="dep-sub-name"> نظم موزعة </div>

    <div id="btn-group-proj" class="btn-group">
        <!-- <button class="Addbtn-projctsNavbar"><label class="proNavbartext">إنشاء مشروع</label></button> -->
      <a href="{{route("projectsStastics")}}">  <button class="btn-projctsNavbarproj" ><label class="proNavbartext">الإحصائيات</label></button></a>
        <button class="btn-projctsNavbarproj"><label class="proNavbartext"> غير منجزة</label></button>
        <button class="btn-projctsNavbarproj"><label class="proNavbartext"> منجزة </label></button>
        <a href="{{route("projects")}}">  <button class="btn-projctsNavbarproj"style="background-color: #a9cbf7;text-decoration: none;border-bottom: 4px solid #2f81ec;"><label class="proNavbartext">الكل</label></button></a>
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
        <a id="dropdown-itemlist" class="dropdown-item" href="{{route("projectsStastics")}}"> الإحصائيات</a>
    </div>

</div>

<div class="hr3">
    <a href="{{route("subject.index")}}">  <button id="spacesbtn" class="spaces"> <img src="{{Vite::image("left-arrow.png")}}" id="spaces1"  width="30px" ></button></a>
    <div id="input-group-proj" class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-append">
            <button id="form-control" class="btn btn-light" type="submit"><img src="{{Vite::image("magnifying-glass (2).png")}}" id="spaces2"  width="20px" ></button>
        </div>
    </div>
    <button class="Addbtn-projctsNavbar" data-toggle="modal" data-target="#myModal"><label class="proNavbartext">إنشاء مشروع</label><img src="{{Vite::image("plus.png")}}"  width="20px" style="float: left;"></button>

</div>
@endsection
@section("content")



    
    <div class="responsive"></div>

<div class="container" id="container-project" style="padding-top: 30px;" >

        <div class="table-responsive-xl">
            <table class="table" id="table" style=" margin-right: -30px; " >
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
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-chat-edit" data-toggle="modal" data-target="#myModalEdite">تعديل  <img src="{{Vite::image("edit.png")}}" id=""  width="15px" ></button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-detials" data-toggle="modal" data-target="#myModaldetails">التفاصيل</button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalchatting" id="btn-chat-edit">الدردشة <img src="{{Vite::image("conversation (3).png")}}" id=""  width="25px" ></button></td>
                        <td>*******</td>
                        <td>30</td>
                        <td>احمد الوجيه</td>
                        <td>*******</td>
                        <td>غير مكتمل</td>
                        <td>SFMS</td>
                    </tr>
                    <tr class="table-light">
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-chat-edit" data-toggle="modal" data-target="#myModalEdite">تعديل  <img src="{{Vite::image("edit.png")}}" id=""  width="15px" ></button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-detials" data-toggle="modal" data-target="#myModaldetails">التفاصيل</button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalchatting" id="btn-chat-edit">الدردشة <img src="{{Vite::image("conversation (3).png")}}" id=""  width="25px" ></button> </td>
                        <td>*******</td>
                        <td>30</td>
                        <td>احمد الوجيه</td>
                        <td>*******</td>
                        <td>غير مكتمل</td>
                        <td>SFMS</td>
                    </tr>
                    <tr class="table-light">
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-chat-edit" data-toggle="modal" data-target="#myModalEdite">تعديل  <img src="{{Vite::image("edit.png")}}" id=""  width="15px" ></button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-detials" data-toggle="modal" data-target="#myModaldetails">التفاصيل</button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalchatting" id="btn-chat-edit">الدردشة <img src="{{Vite::image("conversation (3).png")}}" id=""  width="25px" ></button> </td>
                        <td>*******</td>
                        <td>30</td>
                        <td>احمد الوجيه</td>
                        <td>*******</td>
                        <td>غير مكتمل</td>
                        <td>SFMS</td>
                    </tr>
                    <tr class="table-light">
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-chat-edit" data-toggle="modal" data-target="#myModalEdite">تعديل  <img src="{{Vite::image("edit.png")}}" id=""  width="15px" ></button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" id="btn-detials" data-toggle="modal" data-target="#myModaldetails">التفاصيل</button> </td>
                        <td><button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModalchatting" id="btn-chat-edit">الدردشة <img src="{{Vite::image("conversation (3).png")}}" id=""  width="25px" ></button> </td>
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
            <div class="modal-content" id="modal-content" style="background-color: #F6F7FA; height:550px;">

                <!-- Modal Header -->
                <div class="modal-header" id="modheader" style="text-align: center;padding-left:42%;">
                  {{-- <div id="titlemodel">  انشاء مشروع جديد</div> --}}
                   انشاء مشروع جديد

                    <button type="button"  class="close"  data-dismiss="modal" ><img src="{{Vite::image("cancelbtn.png")}}"   width="20px" style="position: static;" ></button>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="/action_page.php" style="display: block;">
                        <div class="form-group">
                            <!-- <label for="usr">Name:</label> -->
                            <input type="text" class="form-control" id="inputtext" name="projectname" placeholder="اسم المشروع " style="height: 30px; margin-top:-6px">
                            <input type="text" class="form-control" id="inputtext" name="grades" placeholder="الدرجة " style="height: 30px; margin-top:10px">
                            <textarea style="height: 80px;" class="form-control" rows="3" id="comment" placeholder=" وصف المشروع " style=" margin-top:10px"></textarea>
                            <input type="date" class="form-control" id="inputtext" name="date" placeholder=" تاريخ التسليم " style="height: 30px; margin-top:10px;color:black;">
                            <input type="text" class="form-control" id="inputtext" name="max-numerStudents" placeholder=" الحد الأقصى للطلاب " style="height: 30px; margin-top:10px">
                            <input type="text" class="form-control" id="inputtext" name="min-numerStudents" placeholder="الحد الأدنى للطلاب " style="height: 30px; margin-top:10px">
                            <input type="file" class="form-control-file border" id="file" name="uploadefile" style="height: 30px; margin-top:10px">
                            <input type="text" class="form-control" id="inputtext" name="note" placeholder="ملاحظة " style="height: 30px; margin-top:10px">
                        </div>
                        <!-- <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div> -->
                    </form>
                </div>

                <!-- Modal footer -->

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="btnsave" style="float: left; ">حفظ</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="btncancel">إلغاء</button>
                </div>
            </div>
        </div>
    </div>




<!-- The Modal1 -->
<div class="modal fade" id="myModalchatting">
    <div class="modal-dialog">
        <div class="modal-content" id="modal-content" style="background-color: #F6F7FA;height:600px;">

            <!-- Modal Header -->
            <div class="modal-header" id="modheader-proj" style="padding-left: 45%">
                <div class="">الدردشة <img src="{{Vite::image("conversation (3).png")}}" id="" width="25px"></div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" id="projectchating">

                <div class="senders">

                    <div class="card" id="sendersMessages"> السلام عليكم ورحمة الله وبركاته
                        <div class="sendingdate">
                            pm.10:24
                        </div>
                    </div>

                </div>
                <div class="recivers">

                    <div class="card" id="reciversMessages">وعليكم السلام ورحمة الله وبركاته
                        <div class="recivinggdate">
                            pm.10:24
                        </div>
                    </div>

                </div>
                <div class="recivers">

                    <div class="card" id="reciversMessages"> وعليكم السلام ورحمة الله وبركاته قد يسوق الله لك أمانيك من أمر لم تكن تتوقعه ولم يكن في بالك بالحسبان، قد تتوقع منفذ واسع يأتيك منه قطار محمل بما تتمنى ويُسيّر الله لك أمانيك، قلبك ذاك يملك أملًا وثقة بالله لا تتنازل عن هذه الثقة
                        <div class="recivinggdate">
                            pm.10:24
                        </div>
                    </div>

                </div>

                <div class="senders">

                    <div class="card" id="sendersMessages"> السلام عليكم ورحمة الله وبركاته
                        <div class="sendingdate">
                            pm.10:24
                        </div>
                    </div>

                </div>
                <div class="recivers">

                    <div class="card" id="reciversMessages">وعليكم السلام ورحمة الله وبركاته
                        <div class="recivinggdate">
                            pm.10:24
                        </div>
                    </div>

                </div>

                <div class="senders">

                    <div class="card" id="sendersMessages"> السلام عليكم ورحمة الله وبركاته
                        <div class="sendingdate">
                            pm.10:24
                        </div>
                    </div>

                </div>

                <div class="recivers">

                    <div class="card" id="reciversMessages">وعليكم السلام ورحمة الله وبركاته
                        <div class="recivinggdate">
                            pm.10:24
                        </div>
                    </div>

                </div>

                <div class="senders">

                    <div class="card" id="sendersMessages"> السلام عليكم ورحمة الله وبركاته
                        <div class="sendingdate">
                            pm.10:24
                        </div>
                    </div>

                </div>
                <div class="recivers">

                    <div class="card" id="reciversMessages">وعليكم السلام ورحمة الله وبركاته
                        <div class="recivinggdate">
                            pm.10:24
                        </div>
                    </div>

                </div>

                <div class="senders">

                    <div class="card" id="sendersMessages"> السلام عليكم ورحمة الله وبركاته
                        <div class="sendingdate">
                            pm.10:24
                        </div>
                    </div>

                </div>

                <div class="recivers">

                    <div class="card" id="reciversMessages">وعليكم السلام ورحمة الله وبركاته
                        <div class="recivinggdate">
                            pm.10:24
                        </div>
                    </div>

                </div>


            </div>

            <!-- Modal footer -->
            <div class="modal-footer" >
                {{-- <input type="text" class="form-control" id="sendmessa" name="username" placeholder="اكتب ...">
                <img src="{{Vite::image("send.png")}}" id="send-png" width="25px"> --}}
                <div  class="input-group mb-3">
                    <textarea id="send-input"  class="form-control" placeholder="اكتب..." style="height: 35px;margin-top: -10px;"></textarea>
                    <div class="input-group-append">
                        <button  class="btn btn-light" type="submit"  style="margin-top: -10px;height: 35px;margin-left:5px"><img src="{{Vite::image("send.png")}}"   width="24px" ></button>
                    </div>
                </div>
                <!-- <button type="button" class="btn btn-danger" data-dismiss="modal" id="btncancel">إلغاء</button> -->
            </div>

        </div>
    </div>
</div>


<!-- The Modaldetails -->
<div class="modal fade" id="myModaldetails">
    <div class="modal-dialog">
        <div class="modal-content" id="modal-content" style="background-color: #F6F7FA; height:550px;">

            <!-- Modal Header -->
            <div class="modal-header" id="modheader-proj" style="padding-left: 40%">
                <div class="">تفاصيل المشروع <img src="{{Vite::image("routine.png")}}" id="" width="25px"></div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->

            <div class="modal-body" id="projectdetails" style="overflow: auto;">

                <div class="detils-name">
                    <label class="textdetailsproj" for=""> اسم المشروع </label>
                    <div class="projetselements">
                        <div class="card" id="projetselements-name">
                            ****************
                        </div>
                    </div>
                </div>

                <div class="detils-name">
                    <label class="textdetailsproj" for=""> رئيس المشروع</label>
                    <div class="projetselements">
                        <div class="card" id="projetselements-name">
                                    ****************                        
                        </div>
                    </div>
                </div>

                <div class="detils-name">
                    <label class="textdetailsproj" for="">  تاريخ التسليم</label>
                    <div class="projetselements">
                        <div class="card" id="projetselements-name">
                            **********
                        </div>
                    </div>
                </div>

                <div class="detils-name">
                    <label class="textdetailsproj" for="">  الوصف</label>
                    <div class="projetselements">
                        <div class="card" id="projetselements-name">
                            ********************************************************************************************************************************                     
                        </div>
                    </div>
                </div>

                <div class="detils-name">
                    <label class="textdetailsproj" for="">  الدرجة</label>
                    <div class="projetselements">
                        <div class="card" id="projetselements-name">
                            ****************
                        </div>
                    </div>
                </div>

                <div class="detils-name">
                    <label class="textdetailsproj" for="">  ملاحظة</label>
                    <div class="projetselements">
                        <div class="card" id="projetselements-name">
                            **************
                        </div>
                    </div>
                </div>
                <br>

                <div class="detils-name">
                    <label for="" class="textdetailsproj">  الملفات المرفقة   </label>
                    <div class="attchementfile">
                        <div class="card" id="attchementfiles-name">
                            ********************************************************************************************************************************
                        </div>
                    </div>
                </div>


                <div class="">
                    <label for="" class="textdetailsproj">   فريق المشروع</label>
                    <div class="projectsmembers">
                        <div class="card" id="projectsmembers-name">
                            ****************                       
                            <br> ****************
                            <br> ****************
                            <br> ****************
                            <br>**************** 
                            <br> ****************
                            <br>  ****************
                        </div>
                    </div>
                </div>


            </div>

            <!-- Modal footer -->
            <div class="modal-footer" style="padding-right: 120px;">

                <!-- <button type="button" class="btn btn-danger" data-dismiss="modal" id="btncancel">إلغاء</button> -->
            </div>

        </div>
    </div>
</div>


<!-- The ModalEdite -->
<div class="modal fade" id="myModalEdite">
    <div class="modal-dialog">
        <div class="modal-content" id="modal-content" style="background-color: #F6F7FA;height: 630px;">

            <!-- Modal Header -->
            <div class="modal-header" id="modheader" style="padding-left: 50%">
                 تعديل
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" style="overflow: auto;">
                <form action="/action_page.php" style="display: block;">
                    <div class="form-group">
                        <!-- <label for="usr">Name:</label> -->
                        <div><input type="text" class="form-control" id="inputtext" name="username" placeholder="اسم المشروع" style="height: 30px; margin-top:-6px;"></div>
                        <div> <input type="text" class="form-control" id="inputtext" name="username" placeholder=" رئيس المشروع" style="height: 30px; margin-top:8px;"></div>
                        <div> <input type="text" class="form-control" id="inputtext" name="username" placeholder="الدرجة" style="height: 30px; margin-top:8px;"></div>
                        <div> <input type="date" class="form-control" id="inputtext" name="username" placeholder=" تاريخ التسليم" style="height: 30px; margin-top:8px;"></div>
                        <div> <textarea style="height: 100px;" class="form-control" rows="5" id="comment" placeholder=" وصف المشروع" style=" margin-top:8px"></textarea></div>
                        <!-- <input type="text" class="form-control" id="inputtext" name="username" placeholder=" الحد الأقصى للطلاب" style="height: 30px; margin-top:8px"> -->
                        <!-- <input type="text" class="form-control" id="inputtext" name="username" placeholder="الحد الأدنى للطلاب" style="height: 30px; margin-top:8px"> -->
                        <div> <input type="file" class="form-control-file border" id="file" name="file" style="height: 30px; margin-top:8px;"></div>
                        <div> <input type="text" class="form-control" id="inputtext" name="username" placeholder="ملاحظة" style="height: 30px; margin-top:8px;"></div>


                        <div class="card mb-3" style="width: 95%;height:10%; box-shadow:none;">
                            <div class="card-header" style="height: 45px;">
                                <div> <input type="text" class="form-control" id="inputtext" name="username" placeholder="إضافة طالب" style="height: 30px; margin-top:0px;width:70%;margin-left:30%;"></div>
                                <button type="submit" class="btn btn-primary" id="btn-add-stu" >إضافة</button>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                                <p class="card-text"></p>
                            </div>
                        </div>



                    </div>
                    <!-- <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div> -->
                </form>
            </div>

            <!-- Modal footer -->

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" id="btnsave">حفظ</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="btncancel">إلغاء</button>
            </div>
        </div>
    </div>
</div>


@endsection