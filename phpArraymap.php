<?php
$a =
[
	[
		'post_title' => 'After Schools Club',
		'start_date' => 01-02-2010,
		'teacher_support' => 'Support',
		'contracted_hours' => 15.50,
		'working_weeks' => 38.00000,
		'annual_salary' => 3332.85,
		'scale_point' => 18,
		'end_date' => '',
		'holiday_weeks' => '',
		'pay_rate' => '',
		'salary_multiplier' => '',
		'years_service' => '',
		'rolestatus' => 'Active'
	]
];

$b =
[
	[
		'source' => 'object',
		'id' => 36,
		'custom' => '' ,
		'custom_component' => '',
		'name' => 'contract_type',
		'type' => 'string',
		'display_name' => 'Contract type',
		'value' => 'Casual',
		'effective_from' => '2020-08-09 00:00:00',
	],
	[
		'source' => 'object',
		'id' => 37,
		'custom' => '',
		'custom_component' => '',
		'name' => 'post_title',
		'type' => 'autocomplete_string',
		'display_name' => 'Post title',
		'value' => 'Additional Support Needs Assistant',
		'effective_from' => '2020-08-09 00:00:00',
	],
	[
		'source' => 'object',
		'id' => '38',
		'custom' => '',
		'custom_component' => '',
		'name' => 'start_date',
		'type' => 'datetime',
		'display_name' => 'Start date',
		'value' => '01-02-2010',
		'effective_from' => '2020-08-09 00:00:00',
	],
	[
		'source' => 'object',
		'id' => 43,
		'custom' => '',
		'custom_component' => '',
		'name' => 'teacher_support',
		'type' => 'string',
		'display_name' => 'Teacher or support',
		'value' => 'Support',
		'effective_from' => '2020-08-09 00:00:00',
	],
	[
		'source' => 'object',
		'id' => 47,
		'custom' => '',
		'custom_component' => '',
		'name' => 'contracted_hours',
		'type' => 'double',
		'display_name' => 'Contracted hours',
		'value' => 11.00,
		'effective_from' => '2020-08-09 00:00:00',
	],
	[
		'source' => 'object',
		'id' => 49,
		'custom' => '',
		'custom_component' => '',
		'name' => 'scale_point',
		'type' => 'autocomplete_string',
		'display_name' => 'Scale point',
		'value' => 22,
		'effective_from' => '2020-08-09 00:00:00',
	],
	[
		'source' => 'object',
		'id' => 50,
		'custom' => '',
		'custom_component' => '',
		'name' => 'working_weeks',
		'type' => 'double',
		'display_name' => 'Working weeks',
		'value' => 38.00000,
		'effective_from' => '2020-08-09 00:00:00',
	],
	[
		'source' => 'object',
		'id' => 62,
		'custom' => '',
		'custom_component' => '',
		'name' => 'annual_salary',
		'type' => 'double',
		'display_name' => 'Annual salary',
		'value' => 3332.85,
	]

];

$formula = '=[payroll:scale_point_salary] * ([contracted_hours] / 32.5)';
$strsplit = explode (" * ", $formula);
$hours_str = str_split($formula, strpos( $formula, '/'));
$hours = str_replace(['/', ']','[',')','(','='], '',$hours_str[1]);
$contracted = explode('*', str_replace(['/', ']','[',')','(','='], '',$hours_str[0]));
$pos = strpos( $formula, '/');


	

		//print_r(array_values($b));
		/*print_r(array_map(function ($role){
			return([$role['display_name'] => $role['value']]);
		}, $b));*/
		/*$b_mapped = array_map(function ($role){
			return([$role['display_name'] => $role['value']]);
		}, $b);*/

//		print_r($b_mapped);
		$role = 
			[
				'post_title' => '',
				'start_date' => '',
				'teacher_support' => '',
				'contracted_hours' => '',
				'working_weeks' => '',
				'annual_salary' => '',
				'scale_point' => '',
				'end_date' => '',
				'holiday_weeks' => '',
				'pay_rate' => '',




			];
		/*foreach ($b_mapped as $key => $value) {
			foreach($value as $id => $val){
				switch ($id) {
					case('Post title'):
						$role['post_title'] = $val;
					break;
					case('Start date'):
						$role['start_date'] = $val;
					break;
					case('Teacher or support'):
						$role['teacher_support'] = $val;
					break;
					case('Contracted hours'):
						$role['contracted_hours'] = $val;
					break;
					case('Scale point'):
						$role['scale_point'] = $val;
					break;
					case('Working weeks'):
						$role['working_weeks'] = $val;
					break;
					case('Annual salary'):
						$role['annual_salary'] = $val;
					break;
					default:
					break;
				}
			};
		}*/
		/*foreach($b as $val){
			$role[$val['name']] = $val['value'];
			/*switch ($val['name']) {
				case('Post title'):
					$role['post_title'] = $val;
				break;
				case('Start date'):
					$role['start_date'] = $val;
				break;
				case('Teacher or support'):
					$role['teacher_support'] = $val;
				break;
				case('Contracted hours'):
					$role['contracted_hours'] = $val;
				break;
				case('Scale point'):
					$role['scale_point'] = $val;
				break;
				case('Working weeks'):
					$role['working_weeks'] = $val;
				break;
				case('Annual salary'):
					$role['annual_salary'] = $val;
				break;
				default:
				break;
			}
		}*/
print_r($hours);
print_r($contracted[1]);
//print_r(array_column($b, 'value'));
//print_r(array_combine(array_column($b,'name'), array_column($b, 'value')));




//print_r($role);
//print_r($b);
?>