<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Loại 1',
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li><li>Ceramic Shield, chất liệu kính bền chắc nhất từng có trên điện thoại thông minh</li><li>Mạng 5G cho tốc độ tải xuống siêu nhanh, xem video và nghe nhạc trực tuyến chất lượng cao<sup>1</sup></li><li>A15 Bionic cho hiệu năng mạnh hơn 20% so với thế hệ iPhone 12.</li><li>Hệ thống camera trang bị cảm biến nâng cao, điều mà chỉ xuất hiện trên iPhone 12 pro Max.</li><li>Cụm camera được trang bị tính năng ổn định hình ảnh quang học cùng cảm biến mới</li><li>Khả năng chống nước đạt chuẩn IP68 đứng đầu thị trường<sup>4</sup></li><li>iOS 15 với các tiện ích được thiết kế lại trên Màn Hình Chính, Thư Viện Ứng Dụng hoàn toàn mới, App Clips cùng nhiều tính năng khác</li></ul><h5>Pháp lý</h5><p><sup>1</sup>Cần có gói cước dữ liệu. Mạng 5G chỉ khả dụng ở một số thị trường và được cung cấp qua một số nhà mạng. Tốc độ có thể thay đổi tùy địa điểm và nhà mạng. .</p><p><sup>2</sup>Màn hình có các góc bo tròn. Khi tính theo hình chữ nhật, kích thước màn hình là 6.1 inch theo đường chéo. Diện tích hiển thị thực tế nhỏ hơn.</p><p><sup>3</sup>Xác nhận dựa vào mặt trước có Ceramic Shield của iPhone 13 mini so với iPhone thế hệ trước.</p><p><sup>4</sup>iPhone 13 có khả năng chống tia nước, chống nước và chống bụi. Sản phẩm đã qua kiểm nghiệm trong điều kiện phòng thí nghiệm có kiểm soát đạt mức IP68 theo tiêu chuẩn IEC 60529 (chống nước ở độ sâu tối đa 6 mét trong vòng tối đa 30 phút). Khả năng chống tia nước, chống nước và chống bụi không phải là các điều kiện vĩnh viễn. Khả năng này có thể giảm do hao mòn thông thường. Không sạc pin khi iPhone đang bị ướt. Vui lòng tham khảo hướng dẫn sử dụng để biết cách lau sạch và làm khô máy. Không bảo hành sản phẩm bị hỏng do thấm chất lỏng.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p>',
                'image_url' => 'https://images.unsplash.com/photo-1644982653424-1bfed7f972a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=789&q=80'
            ],
            [
                'name' => 'Loại 2',
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li><li>Ceramic Shield, chất liệu kính bền chắc nhất từng có trên điện thoại thông minh</li><li>Mạng 5G cho tốc độ tải xuống siêu nhanh, xem video và nghe nhạc trực tuyến chất lượng cao<sup>1</sup></li><li>A15 Bionic cho hiệu năng mạnh hơn 20% so với thế hệ iPhone 12.</li><li>Hệ thống camera trang bị cảm biến nâng cao, điều mà chỉ xuất hiện trên iPhone 12 pro Max.</li><li>Cụm camera được trang bị tính năng ổn định hình ảnh quang học cùng cảm biến mới</li><li>Khả năng chống nước đạt chuẩn IP68 đứng đầu thị trường<sup>4</sup></li><li>iOS 15 với các tiện ích được thiết kế lại trên Màn Hình Chính, Thư Viện Ứng Dụng hoàn toàn mới, App Clips cùng nhiều tính năng khác</li></ul><h5>Pháp lý</h5><p><sup>1</sup>Cần có gói cước dữ liệu. Mạng 5G chỉ khả dụng ở một số thị trường và được cung cấp qua một số nhà mạng. Tốc độ có thể thay đổi tùy địa điểm và nhà mạng. .</p><p><sup>2</sup>Màn hình có các góc bo tròn. Khi tính theo hình chữ nhật, kích thước màn hình là 6.1 inch theo đường chéo. Diện tích hiển thị thực tế nhỏ hơn.</p><p><sup>3</sup>Xác nhận dựa vào mặt trước có Ceramic Shield của iPhone 13 mini so với iPhone thế hệ trước.</p><p><sup>4</sup>iPhone 13 có khả năng chống tia nước, chống nước và chống bụi. Sản phẩm đã qua kiểm nghiệm trong điều kiện phòng thí nghiệm có kiểm soát đạt mức IP68 theo tiêu chuẩn IEC 60529 (chống nước ở độ sâu tối đa 6 mét trong vòng tối đa 30 phút). Khả năng chống tia nước, chống nước và chống bụi không phải là các điều kiện vĩnh viễn. Khả năng này có thể giảm do hao mòn thông thường. Không sạc pin khi iPhone đang bị ướt. Vui lòng tham khảo hướng dẫn sử dụng để biết cách lau sạch và làm khô máy. Không bảo hành sản phẩm bị hỏng do thấm chất lỏng.</p><p>Giá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Bên cạnh đó, tuỳ vào loại sản phẩm, hình thức và địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, thuế nhập khẩu (đối với đơn hàng giao từ nước ngoài có giá trị trên 1 triệu đồng).....</p>',
                'image_url' => 'https://images.unsplash.com/photo-1644982653424-1bfed7f972a2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=789&q=80'
            ],
            [
                'name' => "NGON",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/category/a6/9f/45/460fdecbbe0f81da09c7da37aa08f680.png'
            ],
[
                'name' => "Giày thể thao nam",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/ab/f6/da/84622c4610e7d2fd8f70851ab7c948be.jpg'
            ],
[
                'name' => "Balo",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/15/c6/6d/4387e015b20cefd0111a6a34f7e285e8.jpg'
            ],
[
                'name' => "Giày chạy bộ nam",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/09/76/b9/8e1d826ad19dad2d41f1ad44fc0f8b3c.jpg'
            ],
[
                'name' => "Găng tay nam",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/38/76/b2/0f2065ba5fd51ac2cfc32112e0fd0f38.jpg'
            ],
[
                'name' => "Sách tư duy - Kỹ năng sống",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/e4/a3/52/4845a31ebb7c0b75766ef9272506f236.jpg'
            ],
[
                'name' => "Điện thoại Smartphone",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/a5/95/f6/3ef75834b43dc4608e72f67e526f6070.jpg'
            ],
[
                'name' => "Truyện Tranh, Manga, Comic",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/f6/31/92/989371cd53ac84a1baa221c7932b6b6e.png'
            ],
[
                'name' => "Truyện ngắn - Tản văn - Tạp Văn",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/7c/e8/34/4d3636aadb471cad0bf2f45d681e4f23.jpg'
            ],
[
                'name' => "Tiểu Thuyết",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/5e/18/24/2a6154ba08df6ce6161c13f4303fa19e.jpg'
            ],
[
                'name' => "Bàn ghế làm việc",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/2f/1b/0b/d371a87715a93fdbb877c62f9ee08741.jpg'
            ],
[
                'name' => "Tác phẩm kinh điển",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/45/3b/fc/aa81d0a534b45706ae1eee1e344e80d9.jpg'
            ],
[
                'name' => "Tủ",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/c0/3b/68/d1a7cd903d0bbdfa40e4344225ce39d2.jpg'
            ],
[
                'name' => "Phụ kiện nhà bếp khác",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/34/90/d2/95675c22554f8fb0c017892dd5a3c44a.jpg'
            ],
[
                'name' => "Xe tay ga",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/d2/0a/4e/ca47a5d9e80df793c222fd84d474866f.jpg'
            ],
[
                'name' => "Khác",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/4e/18/1e/aa90c76a8066d751b77deb17422ba1e0.jpg'
            ],
[
                'name' => "Sách Học Tiếng Anh",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/e1/04/31/7763d9035552760f627c34acfec0e12f.jpg'
            ],
[
                'name' => "Kem và sữa dưỡng da",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/66/91/61/9eae79155cf9ffe2fabaeee1e35cd411.png'
            ],
[
                'name' => "Đồng Hồ Thông Minh",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/d6/fb/d6/4ae554767ec36fd1468fc1c2879ac604.jpg'
            ],
[
                'name' => "Khẩu trang y tế",
                'description' => '<h5>Nội dung về tính năng</h5><p>iPhone 13 gói gọn nhiều tính năng cực đỉnh trong một thiết kế 6.1 inch.<sup>2</sup> Mạng 5G giúp tải xuống các bộ phim một cách nhanh chóng và xem trực tuyến video chất lượng cao.<sup>1</sup> Màn hình Super Retina XDR nhỏ gọn và sáng đẹp ấn tượng. Ceramic Shield với khả năng chịu va đập khi rơi tốt hơn gấp 4 lần.<sup>3</sup> Ảnh chụp tuyệt đẹp trong điều kiện ánh sáng yếu với chế độ Ban Đêm ở tất cả các camera. Quay phim, biên tập và phát video Dolby Vision đẳng cấp điện ảnh. Chip A15 Bionic mạnh mẽ. Đó thực sự là tin khủng của dòng mini.</p><h5>Tính năng nổi bật</h5><ul><li>Màn hình Super Retina XDR 6.1 inch<sup>2</sup></li>',
                'image_url' => 'https://salt.tikicdn.com/cache/w100/ts/product/cc/ea/a4/6858c731526834013c23d3fb5ea7a78c.jpg'
            ]
        ]);
    }
}
