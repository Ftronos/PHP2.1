<?
	// ����� ���� �����
	class menu {
		// �������� ������� � id, �� ��������� ������
		var $classes = '';
		public $id = '';

		// ������� ����������� �������
		public function setClasses($classes) {
			$this->classes = $classes;
		}
		// ������� ����������� id
		public function setId($id) {
			$this->id = $id;
		}

		public function createMenu($classes, $id) {
			$this->setClasses($classes);
			$this->setId($id);

			echo "<ul class='".$this->classes."' id='".$this->id."'></ul>";
		}
	}

	// ����� �������
	class submenu extends menu {
		// ����� �������� ��������, id ������ ���� ���� ������������
		public $parent = null;

		public function createMenu($classes) {
			$this->setClasses($classes);

			echo "<ul class='".$this->classes."'></ul>";
		}
	}

	$menu = new menu();
	$submenu = new submenu();

	$menu->createMenu('menu nav', 'menu');
	$submenu->createMenu('submenu');