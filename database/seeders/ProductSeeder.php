<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Điện Thoại iPhone 13 128GB  - Hàng  Chính Hãng',
                'brand' => 'Apple',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1644982653424-1bfed7f972a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=789&q=80',
                'quantity' => 100000,
                'sold' => 9000,
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li><li>Ceramic Shield, chất liệu kính bền chắc nhất từng có trên điện thoại thông minh</li><li>Mạng 5G cho tốc độ tải xuống siêu nhanh, xem video và nghe nhạc trực tuyến chất lượng cao<sup>1</sup></li><li>A15 Bionic cho hiệu năng mạnh hơn 20% so với thế hệ iPhone 12.</li><li>Hệ thống camera trang bị cảm biến nâng cao, điều mà chỉ xuất hiện trên iPhone 12 pro Max.</li><li>Cụm camera được trang bị tính năng ổn định hình ảnh quang học cùng cảm biến mới</li><li>Khả năng chống nước đạt chuẩn IP68 đứng đầu thị trường<sup>4</sup></li><li>iOS 15 với các tiện ích được thiết kế lại trên Màn Hình Chính, Thư Viện Ứng Dụng hoàn toàn mới, App Clips cùng nhiều tính năng khác</li></ul><h5>Pháp lý</h5><p><sup>1</sup>Cần có gói cước dữ liệu. Mạng 5G chỉ khả dụng ở một số thị trường và được cung cấp qua một số nhà mạng. Tốc độ có thể thay đổi tùy địa điểm và nhà mạng. .</p><p><sup>2</sup>Màn hình có các góc bo tròn. Khi tính theo hình chữ nhật, kích thước màn hình là 6.1 inch theo đường chéo. Diện tích hiển thị thực tế nhỏ hơn.</p><p><sup>3</sup>Xác nhận dựa vào mặt trước có Ceramic Shield của iPhone 13 mini so với iPhone thế hệ trước.</p><p><sup>4</sup>iPhone 13 có khả năng chống tia nước, chống nước và chống bụi. Sản phẩm đã qua kiểm nghiệm trong điều kiện phòng thí nghiệm có kiểm soát đạt mức IP68 theo tiêu chuẩn IEC 60529 (chống nước ở độ sâu tối đa 6 mét trong vòng tối đa 30 phút). Khả năng chống tia nước, chống nước và chống bụi không phải là các điều kiện vĩnh viễn. Khả năng này có thể giảm do hao mòn thông thường. Không sạc pin khi iPhone đang bị ướt. Vui lòng tham khảo hướng dẫn sử dụng để biết cách lau sạch và làm khô máy. Không bảo hành sản phẩm bị hỏng do thấm chất lỏng.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p>',
                'sale_percent' => 20,
                'price' => 20490000,
                'category_id' => 1,
                'created_at' => '2022-07-10',
                'updated_at' => '2022-07-10',
            ],
            [
                'name' => 'Điện Thoại iPhone 13 128GB  - Hàng  Chính Hãng',
                'brand' => 'Apple',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1644982653424-1bfed7f972a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=789&q=80',
                'quantity' => 100000,
                'sold' => 9000,
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li><li>Ceramic Shield, chất liệu kính bền chắc nhất từng có trên điện thoại thông minh</li><li>Mạng 5G cho tốc độ tải xuống siêu nhanh, xem video và nghe nhạc trực tuyến chất lượng cao<sup>1</sup></li><li>A15 Bionic cho hiệu năng mạnh hơn 20% so với thế hệ iPhone 12.</li><li>Hệ thống camera trang bị cảm biến nâng cao, điều mà chỉ xuất hiện trên iPhone 12 pro Max.</li><li>Cụm camera được trang bị tính năng ổn định hình ảnh quang học cùng cảm biến mới</li><li>Khả năng chống nước đạt chuẩn IP68 đứng đầu thị trường<sup>4</sup></li><li>iOS 15 với các tiện ích được thiết kế lại trên Màn Hình Chính, Thư Viện Ứng Dụng hoàn toàn mới, App Clips cùng nhiều tính năng khác</li></ul><h5>Pháp lý</h5><p><sup>1</sup>Cần có gói cước dữ liệu. Mạng 5G chỉ khả dụng ở một số thị trường và được cung cấp qua một số nhà mạng. Tốc độ có thể thay đổi tùy địa điểm và nhà mạng. .</p><p><sup>2</sup>Màn hình có các góc bo tròn. Khi tính theo hình chữ nhật, kích thước màn hình là 6.1 inch theo đường chéo. Diện tích hiển thị thực tế nhỏ hơn.</p><p><sup>3</sup>Xác nhận dựa vào mặt trước có Ceramic Shield của iPhone 13 mini so với iPhone thế hệ trước.</p><p><sup>4</sup>iPhone 13 có khả năng chống tia nước, chống nước và chống bụi. Sản phẩm đã qua kiểm nghiệm trong điều kiện phòng thí nghiệm có kiểm soát đạt mức IP68 theo tiêu chuẩn IEC 60529 (chống nước ở độ sâu tối đa 6 mét trong vòng tối đa 30 phút). Khả năng chống tia nước, chống nước và chống bụi không phải là các điều kiện vĩnh viễn. Khả năng này có thể giảm do hao mòn thông thường. Không sạc pin khi iPhone đang bị ướt. Vui lòng tham khảo hướng dẫn sử dụng để biết cách lau sạch và làm khô máy. Không bảo hành sản phẩm bị hỏng do thấm chất lỏng.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p>',
                'sale_percent' => 20,
                'price' => 20490000,
                'category_id' => 2,
                'created_at' => '2022-05-10',
                'updated_at' => '2022-05-10',
            ],
            [
                'name' => 'lorem',
                'brand' => 'Apple',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1644982653424-1bfed7f972a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=789&q=80',
                'quantity' => 100000,
                'sold' => 9000,
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li><li>Ceramic Shield, chất liệu kính bền chắc nhất từng có trên điện thoại thông minh</li><li>Mạng 5G cho tốc độ tải xuống siêu nhanh, xem video và nghe nhạc trực tuyến chất lượng cao<sup>1</sup></li><li>A15 Bionic cho hiệu năng mạnh hơn 20% so với thế hệ iPhone 12.</li><li>Hệ thống camera trang bị cảm biến nâng cao, điều mà chỉ xuất hiện trên iPhone 12 pro Max.</li><li>Cụm camera được trang bị tính năng ổn định hình ảnh quang học cùng cảm biến mới</li><li>Khả năng chống nước đạt chuẩn IP68 đứng đầu thị trường<sup>4</sup></li><li>iOS 15 với các tiện ích được thiết kế lại trên Màn Hình Chính, Thư Viện Ứng Dụng hoàn toàn mới, App Clips cùng nhiều tính năng khác</li></ul><h5>Pháp lý</h5><p><sup>1</sup>Cần có gói cước dữ liệu. Mạng 5G chỉ khả dụng ở một số thị trường và được cung cấp qua một số nhà mạng. Tốc độ có thể thay đổi tùy địa điểm và nhà mạng. .</p><p><sup>2</sup>Màn hình có các góc bo tròn. Khi tính theo hình chữ nhật, kích thước màn hình là 6.1 inch theo đường chéo. Diện tích hiển thị thực tế nhỏ hơn.</p><p><sup>3</sup>Xác nhận dựa vào mặt trước có Ceramic Shield của iPhone 13 mini so với iPhone thế hệ trước.</p><p><sup>4</sup>iPhone 13 có khả năng chống tia nước, chống nước và chống bụi. Sản phẩm đã qua kiểm nghiệm trong điều kiện phòng thí nghiệm có kiểm soát đạt mức IP68 theo tiêu chuẩn IEC 60529 (chống nước ở độ sâu tối đa 6 mét trong vòng tối đa 30 phút). Khả năng chống tia nước, chống nước và chống bụi không phải là các điều kiện vĩnh viễn. Khả năng này có thể giảm do hao mòn thông thường. Không sạc pin khi iPhone đang bị ướt. Vui lòng tham khảo hướng dẫn sử dụng để biết cách lau sạch và làm khô máy. Không bảo hành sản phẩm bị hỏng do thấm chất lỏng.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p>',
                'sale_percent' => 20,
                'price' => 200,
                'category_id' => 2,
                'created_at' => '2022-04-10',
                'updated_at' => '2022-04-10',
            ],
            [
                'name' => 'test',
                'brand' => 'Apple',
                'thumbnail_url' => 'https://images.unsplash.com/photo-1644982653424-1bfed7f972a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=789&q=80',
                'quantity' => 100000,
                'sold' => 9000,
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li><li>Ceramic Shield, chất liệu kính bền chắc nhất từng có trên điện thoại thông minh</li><li>Mạng 5G cho tốc độ tải xuống siêu nhanh, xem video và nghe nhạc trực tuyến chất lượng cao<sup>1</sup></li><li>A15 Bionic cho hiệu năng mạnh hơn 20% so với thế hệ iPhone 12.</li><li>Hệ thống camera trang bị cảm biến nâng cao, điều mà chỉ xuất hiện trên iPhone 12 pro Max.</li><li>Cụm camera được trang bị tính năng ổn định hình ảnh quang học cùng cảm biến mới</li><li>Khả năng chống nước đạt chuẩn IP68 đứng đầu thị trường<sup>4</sup></li><li>iOS 15 với các tiện ích được thiết kế lại trên Màn Hình Chính, Thư Viện Ứng Dụng hoàn toàn mới, App Clips cùng nhiều tính năng khác</li></ul><h5>Pháp lý</h5><p><sup>1</sup>Cần có gói cước dữ liệu. Mạng 5G chỉ khả dụng ở một số thị trường và được cung cấp qua một số nhà mạng. Tốc độ có thể thay đổi tùy địa điểm và nhà mạng. .</p><p><sup>2</sup>Màn hình có các góc bo tròn. Khi tính theo hình chữ nhật, kích thước màn hình là 6.1 inch theo đường chéo. Diện tích hiển thị thực tế nhỏ hơn.</p><p><sup>3</sup>Xác nhận dựa vào mặt trước có Ceramic Shield của iPhone 13 mini so với iPhone thế hệ trước.</p><p><sup>4</sup>iPhone 13 có khả năng chống tia nước, chống nước và chống bụi. Sản phẩm đã qua kiểm nghiệm trong điều kiện phòng thí nghiệm có kiểm soát đạt mức IP68 theo tiêu chuẩn IEC 60529 (chống nước ở độ sâu tối đa 6 mét trong vòng tối đa 30 phút). Khả năng chống tia nước, chống nước và chống bụi không phải là các điều kiện vĩnh viễn. Khả năng này có thể giảm do hao mòn thông thường. Không sạc pin khi iPhone đang bị ướt. Vui lòng tham khảo hướng dẫn sử dụng để biết cách lau sạch và làm khô máy. Không bảo hành sản phẩm bị hỏng do thấm chất lỏng.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p>',
                'sale_percent' => 20,
                'price' => 20490000,
                'category_id' => 2,
                'created_at' => '2022-03-10',
                'updated_at' => '2022-03-10',
            ]
        ]);
    }
}
