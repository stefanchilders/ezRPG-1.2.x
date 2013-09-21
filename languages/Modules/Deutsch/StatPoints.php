<?php
//////////////////////////////////////////////////////////////////////////////////////TPL///////////////////////////////////////////////////////////////////////////////////////////
$tpl->assign('LANGUAGE_Stat_Points',         'Statuspunkte');
$tpl->assign('LANGUAGE_Here_you_can_use_your_stat_points_to_increase_your_stats_You_have',         'Hier können Sie Ihre Statuspunkte nutzen um ihre Statistiken zu erhöhen! Sie haben noch');
$tpl->assign('LANGUAGE_points_to_use',         'Punkte zum verteilen!');
$tpl->assign('LANGUAGE_You_receive_stat_points_when_you_first_sign_up_to_the_game_and_also_each_time_when_you_level_up',         'Sie erhalten StatusPunkte beim erstellen des Accounts und weitere beim Stufen aufstieg!');
$tpl->assign('LANGUAGE_Strength',         'Stärke');
$tpl->assign('LANGUAGE_This_increases_the_damage_you_do_in_battle_and_increases_your_weight_limit_so_you_can_carry_more_items',         'Dies erhöht den Schaden in der Schlacht und erhöht Ihre Gewichtsgrenze, so dass Sie mehr Einzelteile tragen können.');
$tpl->assign('LANGUAGE_Vitality',         'Vitalität');
$tpl->assign('LANGUAGE_This_increases_the_amount_of_health_you_have_and_decreases_the_amount_of_damage_you_receive_in_battle',         'Dadurch erhöht sich die Menge an Gesundheit die sie haben und verringert die Menge an Schadenden sie erhalten in der Schlacht');
$tpl->assign('LANGUAGE_Agility',         'Beweglichkeit');
$tpl->assign('LANGUAGE_This_increases_your_chance_to_completely_dodge_and_attack_and_take_no_damage_in_battle',         'Dies erhöht Ihre Chance, komplett ausweichen und keinen Schaden in der Schlacht zu nehmen!');
$tpl->assign('LANGUAGE_Dexterity',         'Geschicklichkeit');
$tpl->assign('LANGUAGE_This_helps_you_aim_better_so_you_are_less_likely_to_miss_your_opponent',         'Dies hilft Ihnen, besser zu zielen, so dass Sie weniger wahrscheinlich den Gegner verpassen.');
//////////////////////////////////////////////////////////////////////////////////////PHP///////////////////////////////////////////////////////////////////////////////////////////
$_SESSION['You_don_t_have_any_stat_points_left']   =   'Sie haben keine Statuspunkte übrig!';
$_SESSION['You_have_increased_your_strength']   =   'Sie haben die Särke erhöht!';
$_SESSION['You_have_increased_your_vitality']   =   'Sie haben die Vitalität erhöht!';
$_SESSION['You_have_increased_your_agility']   =   'Sie haben die Beweglichkeit erhöht!';
$_SESSION['You_have_increased_your_dexterity']   =   'Sie haben die Geschicklichkeit erhöht!';
$_SESSION['You_have_no_more_stat_points']   =   'Sie haben keine Statuspunkte übrig!';
?>