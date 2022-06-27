# Elan Formation Exercise

## OOP Cinema

### What I learned:

- To Use the standard string date in "DateTime(yyyy-mm-dd)"

- To create a casting of films and to store it in an array. I have a "Casting" class where I add linked(by casting instantiation) objects of "film", "acteur" and "role"(instantiated in "index.php") in each of three cast arrays created in objects's class.

- "spl_autoload_register()" to automatize class loading in "index.php" 

- Associate array(add a value in two array in the same time)

    Class method:                           

        public function addActorToRole($acteur) {
        $this -> _actorsOfRole[] = $acteur;
        $acteur -> addRoleToActor($this); // role class's method
        }

    Index declaration:

        $role1 -> addActorToRole($acteur7); 