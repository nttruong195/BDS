<div class="uk-grid uk-grid-divider uk-grid-medium">
	<div class="uk-width-large-2-2">
        <p>
        	<div class="uk-accordion uk-width-large-2-2" data-uk-accordion>
        		<h3 class="uk-accordion-title">Chọn tháng/năm (Lấy mẫu thống kê các tháng trong một năm bất kỳ)</h3>
                <div class="uk-accordion-content">
        			<div class="uk-grid uk-grid-divider uk-grid-medium">
                    	<div class="uk-width-large-1-2">
                        	<select id="kUI_multiselect_basic_1" multiple="multiple" data-placeholder="Chọn tháng">
                                <option selected>Tháng 1</option>
                                <option>Tháng 2</option>
                                <option>Tháng 3</option>
                                <option>Tháng 4</option>
                                <option>Tháng 5</option>
                                <option>Tháng 6</option>
                                <option>Tháng 7</option>
                                <option>Tháng 8</option>
                                <option>Tháng 9</option>
                                <option>Tháng 10</option>
                                <option>Tháng 11</option>
                                <option>Tháng 12</option>
                            </select>
                            <div class="md-card-content">
		                        <!-- <h4 class="heading_c uk-margin-bottom">Doanh thu tháng này</h4> -->
		                        <div id="doanhthu_hopdong_thang" class="c3chart"></div>
		                    </div>
                    	</div>
                    	<div class="uk-width-large-1-2">
                        	<select id="select_demo_1" data-md-selectize data-placeholder="Chọn năm">
                                <option value="a">2015</option>
                                <option value="b">2016</option>
                                <option value="c">2017</option>
                            </select>
		                    <div class="md-card-content">
		                        <div class="md-card-content">
		                            <!-- <h4 class="heading_c uk-margin-bottom">Tỷ lệ doanh thu</h4> -->
		                            <div id="soluong_hopdong_thang" class="c3chart"></div>
		                        </div>
		                    </div>
                    	</div>
        			</div>
            	</div>
        	</div>
        </p>
        <p>
        	<div class="uk-accordion uk-width-large-2-2" data-uk-accordion>
    			<h3 class="uk-accordion-title">Chọn năm (Lấy mẫu thống kê qua các năm)</h3>
            	<div class="uk-accordion-content">
                	<div class="uk-grid uk-grid-divider uk-grid-medium">
                    	<div class="uk-width-large-1-2">
                        	<select id="kUI_multiselect_basic_1" multiple="multiple" data-placeholder="Chọn năm">
                                <option selected>2015</option>
                                <option selected>2016</option>
                                <option selected>2017</option>
                            </select>
                    	</div>
                	</div>
                	<div class="uk-grid uk-grid-divider uk-grid-medium">
                        <div class="uk-width-large-1-2">
                            <div class="md-card-content">
                                <!-- <h4 class="heading_c uk-margin-bottom">Doanh thu tháng này</h4> -->
                                <div id="doanhthu_hopdong_nam" class="c3chart"></div>
                            </div>
                        </div>
                        <div class="uk-width-large-1-2">
                            <div class="md-card-content">
                                <div class="md-card-content">
                                    <!-- <h4 class="heading_c uk-margin-bottom">Tỷ lệ doanh thu</h4> -->
                                    <div id="soluong_hopdong_nam" class="c3chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
        		</div>
        	</div>
        </p>
	</div>
</div>
