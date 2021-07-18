<?php

require_once 'Db.php';

class CareerController extends Db
{


    public function all()
    {
        return $this->getData('job_opening');
    }


    public function saveData()
    {
        // $job_id = $_POST['job_id'];
        $job_type_id = 1;
        // $opened_on = $_POST['opened_on'];
        $job_title = $_POST['job_title'];
        $qualification = $_POST['qualification'];
        $exp = $_POST['exp'];
        $req = $_POST['req'];
        $duty = $_POST['duty'];
        $salary = $_POST['salary'];
        $extra_constrain = $_POST['extra_constrain'];
        $is_open = $_POST['is_open'];

        // insert into table() value (:test,:test1)
        $data = ['jb_type_id' => $job_type_id, 'job_title' => $job_title, 'qualification' => $qualification, 'exp' => $exp, 'req' => $req, 'duty' => $duty, 'salary' => $salary, 'extra_constrain' => $extra_constrain, 'is_open' => $is_open];
        // header('location: portfolio.php');
        $new_data=  $this->create('job_opening', $data);
        return $new_data;
        
    }

    public function updateData()
    {
        $project_title = $_POST['project_title'];
        $project_name = $_POST['project_name'];
        $client = $_POST['client'];
        $duration = $_POST['duration'];
        $budget = $_POST['budget'];
        $technology = $_POST['technology'];
        $preview = $_POST['preview'];
        $id = $_POST['id'];


        $data = ['project_title' => $project_title, 'project_name' => $project_name, 'client' => $client, 'duration' => $duration, 'budget' => $budget, 'technology' => $technology, 'preview' => $preview, 'id' => $id];

        $sql = 'UPDATE portfolio SET project_title = :project_title, project_name = :project_name, client = :client, duration = :duration, budget = :budget, technology = :technology, preview = :preview';

        if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
            $image = $this->uploadImage();
            $portfolio = $this->getWhereData('portfolio', ['id' => $id], ['image'], true);
            if ($image != 'error' && $portfolio) {
                $old_img = $portfolio->image;
                $path = '../images/portfolio/';
                if (file_exists($path . $old_img)) {
                    @unlink($path . $old_img);
                }
            }
            if ($image != 'error') {
                $sql .= ", image = :image";
                if ($image !== 'error')
                    $data['image'] = $image;
            }
        }
        $sql .= ' WHERE id = :id';

        $updated = $this->query($sql, $data);

        if ($updated == true) {
            header('location: portfolio.php');
        }
    }

    public function deleteData($id)
    {
        $portfolio = $this->getWhereData('portfolio', ['id' => $id], ['image'], true);


        $sql = 'DELETE FROM portfolio  WHERE id = :id';
        $data['id'] = $id;
        $updated = $this->query($sql, $data);

        if ($updated == true) {
            if ($portfolio) {
                $old_img = $portfolio->image;
                $path = '../images/portfolio/';
                if (file_exists($path . $old_img)) {
                    @unlink($path . $old_img);
                }
            }
            header('location: portfolio.php');
        }
    }

    private function uploadImage()
    {
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

        //   $extensions= array("jpeg","jpg","png");
        $directory = mkdir('../images/portfolio/');
        $new_name = time() . '.' . $file_ext;
        if (move_uploaded_file($file_tmp, "./../images/portfolio/" . $new_name)) {
            return $new_name;
        } else {
            return 'error';
        }
    }
}
