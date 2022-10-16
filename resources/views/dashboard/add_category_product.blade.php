@extends('admin_layout')
@section('admin_content')
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm danh mục bệnh viện
                        </header>
                        <?php
	   $message= Session::get('message');
	   if($message){
		 echo '<span class="text-alert">',$message,'</span>' ;
		 Session::put('message',null);
	   }
	 ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-category-hospital')}}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name_hospital">Nhập tên bệnh viện:</label>
                                    <input type="text" class="form-control" id="name_hospital" name="name_hospital" placeholder="Enter Hospital Name">
                                </div>
                                <div class="form-group">
                                    <label for="address_hospital">Nhập địa chỉ bệnh viện:</label>
                                    <input type="text" class="form-control" id="address_hospital" name="address_hospital" placeholder="Enter Hospital Address">
                                </div>
                                <div class="form-group">
                                    <label for="NumberOfRegistrations">Số lượt đăng kí:</label>
                                    <input type="text" class="form-control" id="NumberOfRegistrations" name="NumberOfRegistrations" placeholder="Enter Number of Registrations">
                                </div>
                                <div class="form-group">
                                    <label for="img_hospital">Chọn file ảnh bệnh viện</label>
                                    <input type="file" id="img_hospital" name="img_hospital" >
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div>
                                <button onclick="return alert('Thêm danh mục Bệnh viện thành công!')" type="submit" class="btn btn-info">Thêm danh mục</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
           
                 
            </div>
        </div>
  
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm danh mục bác sĩ
                        </header>
                        <?php
	   $message= Session::get('message');
	   if($message){
		 echo '<span class="text-alert">',$message,'</span>' ;
		 Session::put('message',null);
	   }
	 ?>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-category-doctor')}}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}
                               <div class="form-group">
                                    <label for="name_doctor">Tên bác sĩ:</label>
                                    <input type="text"  class="form-control" id="name_doctor" name="name_doctor" placeholder="Enter Doctor Name">
                                </div>
                                <div class="form-group">
                                    <label for="hospital_doctor">Nơi làm việc:</label>
                                    <input type="text"  class="form-control" id="hospital_doctor" name="hospital_doctor" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="specialist_doctor">Chuyên khoa:</label>
                                    <input type="text"  class="form-control" id="specialist_doctor" name="specialist_doctor" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="star_doctor">Đánh giá:</label>
                                    <input type="text"  class="form-control" id="star_doctor" name="star_doctor" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="price_book">Giá đặt khám:</label>
                                    <input type="text"  class="form-control" id="price_book" name="price_book" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="book_doctor">Số lượng đặt khám:</label>
                                    <input type="text"  class="form-control" id="book_doctor" name="book_doctor" placeholder="Enter Number of Registrations">
                                </div>
                                <div class="form-group">
                                    <label for="img_doctor">Chọn file ảnh bác sĩ</label>
                                    <input type="file"  id="img_doctor" name="img_doctor">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div>
                                <button onclick="return alert('Thêm danh mục bác sĩ thành công!')" type="submit" class="btn btn-info">Thêm danh mục</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
           
                 
            </div>
        </div>

@endsection
