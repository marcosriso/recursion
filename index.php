<?php
    
    $example = Array
                    (
                        [0] => Array
                            (
                                [id] => 73
                                [parent_id] => 0
                                [title] => MENU_73
                            )

                        [1] => Array
                            (
                                [id] => 74
                                [parent_id] => 73
                                [title] => MENU_73_74
                            )

                        [2] => Array
                            (
                                [id] => 75
                                [parent_id] => 74
                                [title] => MENU_73_74_75
                            )

                        [3] => Array
                            (
                                [id] => 76
                                [parent_id] => 74
                                [title] => MENU_73_74_76
                            )

                        [4] => Array
                            (
                                [id] => 77
                                [parent_id] => 74
                                [title] => MENU_73_74_77
                            )

                        [5] => Array
                            (
                                [id] => 78
                                [parent_id] => 73
                                [title] => MENU_73_78
                            )

                        [6] => Array
                            (
                                [id] => 79
                                [parent_id] => 78
                                [title] => MENU_73_78_79
                            )

                        [7] => Array
                            (
                                [id] => 80
                                [parent_id] => 73
                                [title] => MENU_73_80
                            )

                        [8] => Array
                            (
                                [id] => 84
                                [parent_id] => 80
                                [title] => MENU_73_80_84
                            )

                        [9] => Array
                            (
                                [id] => 85
                                [parent_id] => 80
                                [title] => MENU_73_80_85
                            )

                        [10] => Array
                            (
                                [id] => 81
                                [parent_id] => 0
                                [title] => MENU_81
                            )

                        [11] => Array
                            (
                                [id] => 82
                                [parent_id] => 81
                                [title] => MENU_81_82
                            )

                        [12] => Array
                            (
                                [id] => 83
                                [parent_id] => 81
                                [title] => MENU_81_83
                            )

                    );


    // remember to order the array by parent_id asc

    function formatTree($tree, $parent){
        $tree2 = array();
        foreach($tree as $i => $item){
            if($item['parent_id'] == $parent){
                $tree2[$item['id']] = $item;
                $tree2[$item['id']]['submenu'] = formatTree($tree, $item['id']);
            }
        }

        return $tree2;
    }