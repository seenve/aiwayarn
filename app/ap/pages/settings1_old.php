        <?php
            /*function menu_showNested($arr, $name, $dap) {
                foreach ($arr as $key => $value) {

                    if($value['id']) {
                        if($key == 0) {
                            $dap = $dap-0.1;
                        }
                        echo '<ul class="nestable-list">';
                        if(empty($value['children'])) {
                            $url = $name.'/'.$value['name'];
                            echo '<li class="nestable-item">';
                            echo '<div class="nestable-handle">'.$value['title'].' <span>'.$url.' '.str_replace(',', '.', $dap).'</span></div>';
                            echo '</li>';
                        } else {
                            $url = $name.'/'.$value['name'];
                            echo '<li class="nestable-item">';
                            echo '<div class="nestable-handle">'.$value['title'].' <span>'.$url.' '.str_replace(',', '.', $dap).'</span></div>';
                            
                            menu_showNested($value['children'], $url, $dap);
                            
                            echo '</li>';
                        }
                        echo '</ul>';
                    }
                }
            }
            

            echo '<div class="nestable">';
                echo '<ul class="nestable-list">';

                    foreach (pagesArr() as $key => $value) {
                        $dap = '1.0';
                        if($value['id']) {
                            if(empty($value['children'])) {
                                $url = '/'.$value['name'];
                                echo '<li class="nestable-item">';
                                echo '<div class="nestable-handle">'.$value['title'].' <span>'.$url.' '.$dap.'</span></div>';
                                echo '</li>';
                            } else {
                                $url = '/'.$value['name'];
                                echo '<li class="nestable-item">';
                                echo '<div class="nestable-handle">'.$value['title'].' <span>'.$url.' '.$dap.'</span></div>';
                                
                                menu_showNested($value['children'], $url, 1.0);
                                
                                echo '</li>';
                            }
                        }
                    }
                    
                echo '</ul>';
            echo '</div>';*/
        ?>

<?php 
        //echo json_encode($array);
?>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/" data-pjax="content">??????????????</a></li>
    <li class="breadcrumb-item active">?????????????????? ??????????</li>
</ol>
<h1 class="h2">????????????????????</h1>
<div class="card card-body">
    <div class="row">
        <div class="col-lg-12 d-flex">
            <form class="flex ajax" method="POST">
            	<input type="hidden" name="edit-site" value="1">
                <div class="form-group">
                    <label class="form-label">???????????????? ??????????</label>
                    <input type="text" class="form-control" name="title" placeholder="?????????????? ???????????????? ??????????" value="<?php echo settings()['0']['title']; ?>">
                </div>
                <div class="form-group">
                    <label class="form-label" for="input2">???????????????? ??????????</label>
                    <textarea class="form-control" name="description" placeholder="?????????????? ???????????????? ??????????"><?php echo settings()['0']['description']; ?></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label" for="input1">???????????????? ??????????</label>
                    <textarea class="form-control" name="keywords" placeholder="?????????????? ???????????????? ?????????? ?????????? ??????????????"><?php echo settings()['0']['keywords']; ?></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label" for="input1">?????????? ????????????????</label>
                    <textarea class="form-control" name="address" placeholder="?????????????? ?????????? ????????????????"><?php echo settings()['0']['address']; ?></textarea>
                </div>
                <div class="form-group">
                    <label class="form-label" for="input1">?????????? ???????????? ????????????????</label>
                    <input class="form-control" name="job_time" value="<?php echo settings()['0']['job_time']; ?>" type="text" placeholder="?????????????? ?????????? ????????????">
                </div>
                <div class="form-group">
                    <label class="form-label" for="input1">??????????????</label>
                    <input class="form-control" name="phone" value="<?php echo settings()['0']['phone']; ?>" type="text" placeholder="+7 (9__) ___-__-__">
                </div>
                <div class="form-group">
                    <label class="form-label" for="input1">?????????????? (??????????????????????)</label>
                    <input class="form-control" name="phone_messanger" value="<?php echo settings()['0']['phone_messanger']; ?>" type="text" placeholder="+7 (9__) ___-__-__">
                </div>
                <div class="form-group">
                    <label class="form-label" for="input1">????.??????????</label>
                    <input class="form-control" name="email" value="<?php echo settings()['0']['email']; ?>" type="text" placeholder="?????????????? ????.??????????">
                </div>
				<div class="result alert alert-dismissible bg-light border-0 fade show" role="alert"></div>
				<div class="result_error alert bg-danger text-white border-0" role="alert"></div>
				<div class="result_success alert bg-success text-white border-0" role="alert"></div>
                <button type="submit" class="btn btn-success">??????????????????</button>
            </form>
        </div>
    </div>
</div>