<?php

namespace App\Controllers;

use App\Core\Controller;

class Penduduk extends Controller
{
	public object $model;

	public function __construct()
	{
		parent::cekLogin();

		$this->model = new \App\Models\Penduduk();
	}

	public function index()
	{
		$data['rows'] = $this->model->show();
		$this->dashboard('penduduk/index', $data);
	}

	public function input()
	{
		$this->dashboard('penduduk/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/penduduk');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('penduduk/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/penduduk');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/peduduk');
	}
}
