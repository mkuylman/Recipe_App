<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Recipes extends CI_Controller {
	
	public function index()
	{
		//listing all recipes
		$new_recipes = $this->recipe->get_new();
		$liked_recipes = $this->recipe->liked_recipes();
		//var_dump($recipes);
		//die();
		$this->load->view("recipes", array(
				"new_recipes" => $new_recipes,
				"liked_recipes" => $liked_recipes
			));
	}

	public function add()
	{
		$this->load->view("add");
	}

	public function create(){
		//var_dump($this->input->post());
		//die();
		$this->recipe->create($this->input->post());
		redirect("/recipes");
	}

	public function show($recipe_id){
		$recipe = $this->recipe->get_one($recipe_id);
		//var_dump($recipe);
		//die();
		$liked = $this->recipe->is_liked($recipe_id);
		$this->load->view("show", array(
				"recipe" => $recipe,
				"liked" => $liked
			));
	}

	public function like($recipe_id){
		$this->recipe->like($recipe_id);
		redirect('/recipes/'.$recipe_id);
	}

	public function unlike($like_id){
		$this->recipe->unlike($like_id);
		redirect('/recipes');
	}	
}