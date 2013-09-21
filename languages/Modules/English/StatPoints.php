<?php
//////////////////////////////////////////////////////////////////////////////////////TPL///////////////////////////////////////////////////////////////////////////////////////////
$tpl->assign('LANGUAGE_Stat_Points',         'Stat Points');
$tpl->assign('LANGUAGE_Here_you_can_use_your_stat_points_to_increase_your_stats_You_have',         'Here you can use your stat points to increase your stats! You have');
$tpl->assign('LANGUAGE_points_to_use',         'points to use!');
$tpl->assign('LANGUAGE_You_receive_stat_points_when_you_first_sign_up_to_the_game_and_also_each_time_when_you_level_up',         'You receive stat points when you first sign up to the game, and also each time when you level up!');
$tpl->assign('LANGUAGE_Strength',         'Strength');
$tpl->assign('LANGUAGE_This_increases_the_damage_you_do_in_battle_and_increases_your_weight_limit_so_you_can_carry_more_items',         'This increases the damage you do in battle, and increases your weight limit so you can carry more items.');
$tpl->assign('LANGUAGE_Vitality',         'Vitality');
$tpl->assign('LANGUAGE_This_increases_the_amount_of_health_you_have_and_decreases_the_amount_of_damage_you_receive_in_battle',         'This increases the amount of health you have and decreases the amount of damage you receive in battle');
$tpl->assign('LANGUAGE_Agility',         'Agility');
$tpl->assign('LANGUAGE_This_increases_your_chance_to_completely_dodge_and_attack_and_take_no_damage_in_battle',         'This increases your chance to completely dodge and attack and take no damage in battle!');
$tpl->assign('LANGUAGE_Dexterity',         'Dexterity');
$tpl->assign('LANGUAGE_This_helps_you_aim_better_so_you_are_less_likely_to_miss_your_opponent',         'This helps you aim better so you are less likely to miss your opponent.');
//////////////////////////////////////////////////////////////////////////////////////PHP///////////////////////////////////////////////////////////////////////////////////////////
$_SESSION['You_don_t_have_any_stat_points_left']   =   'You don\'t have any stat points left!';
$_SESSION['You_have_increased_your_strength']   =   'You have increased your strength!';
$_SESSION['You_have_increased_your_vitality']   =   'You have increased your vitality!';
$_SESSION['You_have_increased_your_agility']   =   'You have increased your agility!';
$_SESSION['You_have_increased_your_dexterity']   =   'You have increased your dexterity!';
$_SESSION['You_have_no_more_stat_points']   =   'You have no more stat points!';
?>