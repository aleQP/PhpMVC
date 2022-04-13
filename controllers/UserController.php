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
		echo 'Hi';
		require_once "views/users/users_index.php";
	}

	public function create(){
		// return view('usuarios.create');
	}

	public function store(Request $request){
		// $request->validate([
		// 	'name' => 'required'
		// ]);
		// User::create($request->all());
		// return redirect()->route('usuarios.index')->with('success','Usuario guardado correctamente');
	}

	public function show(User $user){
		// return view('usuarios.show', compact('user'));
	}

	public function edit(User $user){
		// return view('usuarios.edit', compact('user'));
	}

	public function update(Request $request, User $user){
		// $request->validate([
		// 	'name' => 'required'
		// ]);
		// $user->update($request->all());
		// return redirect()->route('usuarios.index')->with('success','Usuario actualizado correctamente');
	}

	public function destroy(User $user){
		// $user->delete();
		// return redirect()->route('usuarios.index')->with('success','Usuario eliminado correctamente');
	}

}

?>