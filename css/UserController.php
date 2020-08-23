<?php
    include '../core/Database.php';

    class UserController
    {
        protected $db;
    
        public function __construct()
        {
            $this->db = new Database;
        }
        public function all()
        {
            $query = $this->db->pdo->query('SELECT * FROM users');
    
            return $query->fetchAll();
        }

        public function store($request){

        isset($request['role']) ? $roli = 1 : $roli = 0;
        $password = password_hash($request['password'], PASSWORD_DEFAULT);

        $query = $this->db->pdo->prepare('INSERT INTO users (name, username, email, password, role) VALUES (:name, :username, :email, :password, :role)');
        $query->bindParam(':name', $request['fullName']);
        $query->bindParam(':username', $request['username']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':password', $password);
        $query->bindParam(':role', $roli);
        $query->execute();

        return header('Location: ../../admin/usersDashboard.php');
    }
    public function edit($id)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM users WHERE id = :id');
        $query->execute(['id' => $id]);

        return $query->fetch();
    }

    public function update($id, $request)
    {
        isset($request['role']) ? $roli = 1 : $roli = 0;

        $query = $this->db->pdo->prepare('UPDATE users SET name = :name, username = :username, email = :email, role = :role WHERE id = :id');
        $query->execute([
            'name' => $request['fullName'],
            'username' => $request['username'],
            'email' => $request['email'],
            'role' => $roli,
            'id' => $id
        ]);

        return header('Location: ../../admin/usersDashboard.php');
    }
    public function destroy($id)
    {
        $query = $this->db->pdo->prepare('DELETE FROM users WHERE id = :id');
        $query->execute(['id' => $id]);

        return header('Location: ../../admin/usersDashboard.php');
    }
    

}
?>