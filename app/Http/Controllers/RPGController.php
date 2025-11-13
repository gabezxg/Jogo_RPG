<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\classes\RPG\Player;
use App\Http\classes\RPG\Weapon;
use App\Http\classes\RPG\Villain;

class RPGController extends Controller
{
    public function simulateCombat(): View
    {
        $hero = new Player('Gandalf, 200, 30');
        $staff = new Arma(nome: 'Magic Staff', weight: 5.0,additionalDamage: 50);
        $orc = new Villain('Evil Orc', 60, 10, 'Orc', 25 );

        $hero->equipItem($staff);
        $result = $hero->attack();
        $monster_damage = 70;
        $damage_result = $orc->receiveDamage($monster_damage);
        $dropItem = $orc->dropItems();

        return view(view: 'combat', date: [
            'hero_name' => $hero->getName(),
            'attack_status' => $result,
            'orc_status' => $damage_result,
            'loot_stats' => $dropItem
        ]);
    }
}