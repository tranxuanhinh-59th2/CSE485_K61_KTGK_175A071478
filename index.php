<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duan</title>
    <link rel="stylesheet" href="asses/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="duan">
        <div class="header">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Chương trình dự án KTTV BDKH</a>
                    <form class="d-flex">
                        <a class="btn btn-primary" href="#" role="button">Thêm</a>
                        <a class="btn btn-primary" href="#" role="button">Sửa</a>
                        <a class="btn btn-primary" href="#" role="button">Xóa</a>
                        <a class="btn btn-primary" href="#" role="button">Copy</a>
                    </form>
                </div>
            </nav>

            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Chọn lĩnh vực...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Chọn loại nhiệm vụ</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col">
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Từ khóa..." aria-label="Từ khóa...">
                                    <button class="btn btn-outline-success" type="submit">Tìm kiếm</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
        <div class="center">
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên dự án</th>
                        <th scope="col">Thời gian</th>
                        <th scope="col">lĩnh Vực</th>
                        <th scope="col">Nhiệm Vụ</th>
                        <th scope="col">Cơ quan thực hiện</th>
                        <th scope="col">Tổng đầu tư</th>
                        <th scope="col">Người ký</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Tập tin</th>
                   </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Cong vien nuoc</td>
                        <td>2019</td>
                        <td>Giai Trí</td>
                        <td>Khao sat</td>
                        <td>Cong ty TNHH T3H</td>
                        <td>cong ty T3H</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="footer">
            <nav aria-label="Page navigation example">
                <span class ="sum-number">Tổng số bản ghi:8</span>
            </nav>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>