<?php  

class UserController{
	
	private $usuario;
	public function __construct(){
		require_once "models/User.php";
	}

	public function index(){
		// $usuarios = User::latest()->paginate(5);
		// return view('usuarios.index',compact('usuarios'));

		$usuario = new User();
		$data["titulo"] = "Index usuarios | devaneolab.com";
		$data["usuarios"] = $usuario->get_users();
		echo '<br>Hi<br>';
		require_once "views/users/users_index.php";
	}

	public function create(){
		// return view('usuarios.create');
		$data["titulo"] = "Nuevo usuario | devaneolab.com";
		require_once "views/users/users_create.php";
	}

	// public function store(Request $request){
	public function store(){
		// $request->validate([
		// 	'name' => 'required'
		// ]);
		// User::create($request->all());
		// return redirect()->route('usuarios.index')->with('success','Usuario guardado correctamente');

		$name = $_POST['name'];
		$ap_father = $_POST['ap_father'];
		$ap_mother = $_POST['ap_mother'];
		$birthday = $_POST['birthday'];
		$gender = $_POST['gender'];
		$domicile = $_POST['domicile'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		$usuario = new User();
		$usuario->create($name, $ap_father, $ap_mother, $birthday, $gender, $domicile, $email, $phone);
		$data["titulo"] = "Usuario Guardado | devaneolab.com";
		$this->index();

	}

	public function show(User $user){
		// return view('usuarios.show', compact('user'));
	}

	public function edit($id){
	// public function edit(User $user){
		// return view('usuarios.edit', compact('user'));

		$usuario=new User();	
		$data["id"] = $id;
		$data["usuario"] = $usuario->get_user($id);
		$data["titulo"] = "Editar Usuario | devaneolab.com";
		require_once "views/users/users_edit.php";
	}

	public function update(){
	// public function update(Request $request, User $user){
		// $request->validate([
		// 	'name' => 'required'
		// ]);
		// $user->update($request->all());
		// return redirect()->route('usuarios.index')->with('success','Usuario actualizado correctamente');

		$id = $_POST['id'];
		$name = $_POST['name'];
		$ap_father = $_POST['ap_father'];
		$ap_mother = $_POST['ap_mother'];
		$birthday = $_POST['birthday'];
		$gender = $_POST['gender'];
		$domicile = $_POST['domicile'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];

		$usuario = new User();
		$usuario->update($id, $name, $ap_father, $ap_mother, $birthday, $gender, $domicile, $email, $phone);
		$data["titulo"] = "Usuario Actualizado | devaneolab.com";
		$this->index();

	}

	public function destroy($id){
	// public function destroy(User $user){
		// $user->delete();
		// return redirect()->route('usuarios.index')->with('success','Usuario eliminado correctamente');

		$usuario = new User();
		$usuario->delete($id);
		$data["titulo"] = "Usuario Eliminado | devaneolab.com";
		$this->index();
	}

}

?>