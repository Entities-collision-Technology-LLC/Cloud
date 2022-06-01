<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\User;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Controllers\AdminController;

class UserController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new User(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('email');
            $grid->column('password');
            $grid->column('address');
            $grid->column('phone');
            $grid->column('status');
            $grid->column('level');
            $grid->column('avatar');
            $grid->column('creatd_ip');
            $grid->column('created_at');
            $grid->column('other');
            $grid->column('self_introduction');
            $grid->column('money');
            $grid->column('api_token');
            $grid->column('late_log_ip');
            $grid->column('alias');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new User(), function (Show $show) {
            $show->field('id');
            $show->field('id');
            $show->field('name');
            $show->field('email');
            $show->field('password');
            $show->field('address');
            $show->field('phone');
            $show->field('status');
            $show->field('level');
            $show->field('avatar');
            $show->field('creatd_ip');
            $show->field('created_at');
            $show->field('other');
            $show->field('self_introduction');
            $show->field('money');
            $show->field('api_token');
            $show->field('late_log_ip');
            $show->field('alias');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new User(), function (Form $form) {
            $form->display('id');
            $form->text('name');
            $form->text('email');
            $form->text('password');
            $form->text('address');
            $form->text('phone');
            $form->text('status');
            $form->text('level');
            $form->text('avatar');
            $form->text('creatd_ip');
            $form->text('created_at');
            $form->text('other');
            $form->text('self_introduction');
            $form->text('money');
            $form->text('api_token');
            $form->text('late_log_ip');
            $form->text('alias');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
