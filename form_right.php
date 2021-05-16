<form action="post_new.php" enctype="multipart/form-data" method="POST" class="form_right-container">
                        <!-- Thông tin việc làm -->
                        <div class="form_right-row1">
                            <div class="frr1_container">
                                <span class="frr1_title frr_title">Thông tin việc làm <div></div></span>
                                <!-- Vị trí đăng tuyển-->
                                <div class="frr1_r1 frr1_r">
                                    <span class="input_title"><span>*</span>Vị trí đăng tuyển</span>
                                    <input class=" select_full-with" type="text" id="posted_position" name="posted_position" placeholder="VD: Nhân viên kinh doanh, nhân viên hành chính nhân sự">
                                </div>
                                <!--  Ngành nghề-->
                                <div class="frr1_r2 frr1_r">
                                    <span class="input_title"><span>*</span>Ngành nghề</span>
                                    <select class="frr1_r2-select multiple-select select_full-with" id="position" name="position" multiple="multiple">
                                        <option value="TKDH">Thiết kế đồ họa</option>
                                        <option value="QTKD">Quản trị kinh doanh</option>
                                        <option value="KTKT">Kế toán - Kiểm toán</option>
                                        <option value="KSPM">Software engineer</option>
                                        <option value="GV">Giáo viên</option>
                                    </select>
                                </div>
                                <!-- Địa điểm làm việc -->
                                <div class="frr1_r3 frr1_r">
                                    <span class="input_title"><span>*</span>Địa điểm làm việc</span>
                                    <select class="frr1_r3-select multiple-select select_full-with" id="address" name="address" multiple="multiple">
                                        <option value="HCM">Hồ Chí Minh</option>
                                        <option value="HN">Hà Nội</option>
                                        <option value="HP">Hải Phòng</option>
                                        <option value="H">Huế</option>
                                        <option value="DN">Đà Nẵng</option>
                                    </select>
                                </div>
                                <!--  -->
                                <div class="frr1_r4 frr1_r frr1_row-scope">

                                    <!-- Số lượng cần tuyển -->
                                    <div class="frr1_r4-left">
                                        <span class="input_title"><span>*</span>Số lượng cần tuyển</span>
                                        <input type="number" id="amount" name="amount" min="1" placeholder="Nhập số lượng">
                                    </div>
                                    <!--Hình thức làm việc-->
                                    <div class="frr1_r4-right">
                                        <span class="input_title"><span>*</span>Hình thức làm việc</span>
                                        <select class="frr1_r4-right-select" id="work_form" name="work_form" aria-placeholder="Chọn hình thức">
                                            <option value="fulltime">full time</option>
                                            <option value="parttime">part time</option>
                                            <option value="freetime">free time</option>
                                            <option value="remote">remote</option>
                                        </select>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="frr1_r5 frr1_r frr1_row-scope">
                                    <!-- Hoa hồng (nếu có) -->
                                    <div class="frr1_r5-left">
                                        <span class="input_title">Hoa hồng (nếu có)</span>
                                        <input type="text" id="bonus" name="bonus" placeholder="VD: Từ 12 đến 15%">
                                    </div>
                                    <!-- Cấp bậc -->
                                    <div class="frr1_r5-right">
                                        <span class="input_title"><span>*</span>Cấp bậc</span>
                                        <select class="frr1_r4-right-select" id="rank" name="rank" aria-placeholder="Chọn cấp bậc">
                                            <option value="fresher">fresher</option>
                                            <option value="jubior">junior</option>
                                            <option value="senior">senior</option>
                                        </select>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="frr1_r6 frr1_r frr1_row-scope">
                                    <!-- Thời gian thử việc -->
                                    <div class="frr1_r6-left">
                                        <span class="input_title">Thời gian thử việc</span>
                                        <input type="text" id="time_job_test" name="time_job_test" placeholder="VD: 1 tuần hoặc 1 tháng">
                                    </div>
                                    <!-- Mức lương -->
                                    <div class="frr1_r6-right">
                                        <span class="input_title"><span>*</span>Mức lương</span>
                                        <input type="number" id="salary" name="salary" min="1" placeholder="Chọn mức lương">
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                        <!-- Mô tả công việc -->
                        <div class="form_right-row2">
                            <!-- Mô tả công việc -->
                            <span class="frr_title">Mô tả công việc</span>
                            <div class="frr2_r1">
                                <span class=" input_title"><span>*</span>Mô tả công việc</span>
                                <textarea id="job_description" name="job_description"
                                placeholder="Bạn cần nhập tối thiểu 50 từ
- Tiêu đề cho vị trí công việc cần tuyển dụng là gì?( Phần này nêu tên chính xác của vị trí công việc cần tuyển dụng)
- Mục tiêu của vị trí công việc: “vị trí này tồn tại để làm gì cho công ty?”
- Các nhiệm vụ chính của vị trí công việc là gì?
- Địa chỉ nơi làm việc
- Nội dung công việc cần thực hiện: ... "></textarea>
                            </div>
                        </div>
                        <!-- Yêu cầu công việc -->
                        <div class="form_right-row3">
                            <span class="frr3_title frr_title">Yêu cầu công việc</span>
                            <!-- Kinh nghiệm -->
                            <div class="frr3_r1 frr3_r">
                                <span class="frr3_r1-title input_title"><span>*</span>Kinh nghiệm</span>
                                <input type="number" id="express_number" name="express_number" placeholder="Chọn số năm kinh nghiệm">
                            </div>
                            <!--  -->
                            <div class="frr3_r2 frr3_r">
                                
                                <!-- Yêu cầu bằng cấp -->
                                
                                <div class="frr3_r2-left frr3_r2-item">
                                    <span class="frr3_r2-left-title input_title"><span>*</span>Yêu cầu bằng cấp</span>
                                    <select class="frr3_r2-left-select select_full-with" id="degree" name="degree">
                                        <option value="cunhan">Cử nhân</option>
                                        <option value="kysu">Kỹ sư</option>
                                        <option value="thacsi">Thạc sĩ</option>
                                        <option value="tiensi">Tiến sĩ </option>
                                        <option value="khongyeucau">Không yêu cầu</option>
                                    </select>
                                </div>
                                <!-- Yêu cầu giới tính -->
                                <div class="frr3_r2-right frr3_r2-item">
                                    <span class="frr3_r2-right-title input_title"><span>*</span>Yêu cầu giới tính</span>
                                    <select class="frr3_r2-right-select select_full-with" id="gender" name="gender">
                                        <option value="nam">Nam</option>
                                        <option value="nu">Nữ</option>
                                        <option value="gt3">Giới tính thứ 3</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Yêu cầu công việc -->
                            <div class="frr3_r3 frr3_r">
                                <span class="frr3_r3-title input_title"><span>*</span>Yêu cầu công việc</span>
                                <textarea id="job_required" id="job_required" name="job_required"
                                placeholder="Bạn cần nhập tối thiểu 50 từ
- Trách nhiệm của nhân viên cần làm là gì?
- Nhiệm vụ công việc cần thực hiện hàng ngày là gì?
- Những kỹ năng nào cần có để thực hiện công việc tốt nhất?
+ Những kỹ năng bắt buộc (Những kỹ năng cần có là gì?)
+ Những kỹ năng mang tính khuyến khích (Ngoài ra ứng viên có thể đáp ứng những kỹ năng nào để phát triển công việc tốt nhất?)
- Bằng cấp, chứng chỉ phù hợp với công việc
- Yêu cầu về kinh nghiệm, thái độ, phẩm chất/thái
- Ngoài ra tùy vào đặc thù công việc tuyển dụng để nêu ra các yêu cầu khác như giới tính, ngoại hình,..."></textarea>
                            </div>

                            
                            
                        </div>
                        <!-- Quyền lợi được hưởng -->
                        <div class="form_right-row4">
                            <span class="frr_title">Quyền lợi được hưởng</span>
                            <div class="frr4_r1">
                                <span class=" input_title"><span>*</span>Quyền lợi được hưởng</span>
                                <textarea id="benefit" name="benefit"
                                placeholder="Bạn cần nhập tối thiểu 50 từ
- Chế độ về mức lương, thưởng, chế độ đãi ngộ.
- Các chế độ đóng bảo hiểm xã hội và phúc lợi khác của nhân viên cụ thể là gì?
- Môi trường làm việc của công ty hấp dẫn như thế nào? Có thể mang đến những cơ hội học tập, huấn luyện cho ứng viên ra sao?
- Cơ hội thăng tiến của nhân viên là như thế nào?"></textarea>
                            </div>
                            
                        </div>
                        <!-- Yêu cầu hồ sơ -->
                        <div class="form_right-row5">
                            <span class="frr_title">Yêu cầu hồ sơ</span>
                            <!-- Hồ sơ bao gồm -->
                            <div class="frr5_r1">
                                <span class=" input_title">Hồ sơ bao gồm</span>
                                <textarea id="file" name="file"
                                placeholder="- Đơn xin việc.
- Sơ yếu lý lịch.
- Hộ khẩu, chứng minh nhân dân và giấy khám sức khoẻ.
- Các bằng cấp có liên quan.
                                "></textarea>
                            </div>
                            
                            <!-- Hạn nộp hồ sơ -->
                            <div class="frr5_r2 frr5_r">
                                <span class="input_title"><span>*</span>Hạn nộp hồ sơ</span>
                                <input  type="date" id="post_file_dateline" name="post_file_dateline">
                            </div>
                        </div>
                        <!-- Thông tin liên hệ -->
                        <div class="form_right-row6">
                            <span class="frr_title">Thông tin liên hệ</span>
                            <!--  -->
                            <div class="frr6_r1 frr6_r">

                                <!-- Tên người liên hệ -->
                                <div class="frr6_r1-left frr6_r-item-left">
                                    <span class="input_title"><span>*</span>Tên người liên hệ</span>
                                    <input type="text" id="name_hr" name="name_hr">
                                </div>
                                <!-- Địa chỉ liên hệ -->
                                <div class="frr6_r1-right frr6_r-item-right">
                                    <span class="input_title"><span>*</span>Địa chỉ liên hệ</span>
                                    <input type="text" id="address_hr" name="address_hr">
                                </div>
                            </div>
                            <!--  -->
                            <div class="frr6_r2 frr6_r">

                                <!-- Số điện thoại liên hệ -->
                                <div class="frr6_r2-left frr6_r-item-left">
                                    <span class="input_title"><span>*</span>Số điện thoại liên hệ</span>
                                    <input type="text" id="phone_number" name="phone_number">
                                </div>
                                <!-- Email liên hệ -->
                                <div class="frr6_r2-right frr6_r-item-right">
                                    <span class="input_title"><span>*</span>Email liên hệ</span>
                                    <input type="text" id="email_hr" name="email_hr">
                                </div>
                            </div>
                        </div>
                        <div class="form_right-btn">
                            <div class="right_btn-container">
                                <button type="submit" class="submit" name="submit">Đăng tin</button>
                                <button class="btn_cancel" formnovalidate>hủy tạo tin</button>
                            </div>
                        </div>
                    </form>