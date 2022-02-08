<?php

# Colours
function cyan($text) {
    return "\e[0;36m$text\e[0m";
}

function cyan_bold($text) {
    return "\e[1;36m$text\e[0m";
}

function white_bold($text) {
    return "\e[1;37m$text\e[0m";
}

function black($text) {
    return "\e[1;30m$text\e[0m";
}

function slow_print($time, $line, $newline) {
    # Split the line into an array to be iterated over
    $line_arr = preg_split("//u", $line, -1, PREG_SPLIT_NO_EMPTY);
    # Iterate over each character in the line
    foreach ($line_arr as $char) {
        echo $char;
        # Sleep for the given time (for aesthetic reasons)
        usleep($time);
    }
    # If newlines enabled
    if ($newline) {
        echo "\n";
    }
}

# Time variables
$time_logo = 1100;
$time_text = 26000;
$time_text = 1000; # debug speed

function startup($time_logo) {
    slow_print($time_logo, '████████████████████████████████████████████████████████████████████████████████', true);
    slow_print($time_logo, '███████████████████████████████'.cyan('▓╫╫╫╫').'█████'.cyan('╫╫╫╫▓').'██████████████████████████████████', true);
    slow_print($time_logo, '███████████████████'.cyan('╬╬╬╬╬╬╬╬').'█████'.cyan('╬╬╬╬╬╬╬╬╬╬╬╬╣').'█████████████'.cyan('╬╬╬╬').'██████████████████', true);
    slow_print($time_logo, '█████████████████'.cyan('╬╬╬▓').'███'.cyan('▓╬╬╬╣').'████'.cyan('▓╬╬╬╬╬╬╬╬╬').'███████'.cyan('▓╬╬╬╬').'██'.cyan('▓▓╬╬╬╬╣▓▓').'██████████████', true);
    slow_print($time_logo, '██████████████'.cyan('╬╬╬╬╬╬╬╬╬╬╬╬╬╬╣').'████'.cyan('▓╬╬╬╬╬╬╬╬╬').'████████'.cyan('╬╬╬╬╬').'█████'.cyan('╬╬╬╬').'███████████████', true);
    slow_print($time_logo, '█████████████'.cyan('╬╬╬╬▓').'███████████████'.cyan('╬╬╬╬╬╬╬╬╬╬╬').'███████'.cyan('▓╬╬╬╬').'█████'.cyan('▓╬╬╬╬╬').'█████████████', true);
    slow_print($time_logo, '███████████'.cyan('▓╬╬╬╬╬').'███'.cyan('╬╬╬╬╬╣').'█████'.cyan('╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬').'██████'.cyan('╬╬╬╬╬╬').'████'.cyan('▓╬╬╬╬╣').'████████████', true);
    slow_print($time_logo, '██████████'.cyan('╬╬╬╬╬╬╬╬╬╬╬╬╬▓▓').'████'.cyan('╬╬╬╬╬╬╬▓').'██'.cyan('╬╬╬╬╬╬╬╬').'█████'.cyan('╬╬╬╬╬╬').'██████'.cyan('▓╬╬╬╬╬').'██████████', true);
    slow_print($time_logo, '█████████████'.cyan('╫╫╫╫╫╫╫').'██████'.cyan('╬╫╫╫╫╫╫╫╫').'█████'.cyan('▓╫╫╫╫╫╫╫╢').'█████'.cyan('╫╫╫╫╫').'████████'.cyan('╫╫╫╫╫╫╫╢').'█████', true);
    slow_print($time_logo, '██████████████████████████'.cyan('╬╬╬╬╬╬╬▓').'███████'.cyan('▓╬╬╬╬╬╬╬').'██████████████████████'.cyan('▓▓▓').'██████', true);
    slow_print($time_logo, '███████████████████████'.cyan('▓╬╬╬╬╬╬╬▓').'██████████'.cyan('╬╬╬╬╬╬╬╬╬╬').'████████████████████████████', true);
    slow_print($time_logo, '████████████████████████████████████████████████████████████████████████████████', true);
}

function shutdown($time_logo) {
    slow_print($time_logo, black('████████████████████████████████████████████████████████████████████████████████'), true);
    slow_print($time_logo, black('███████████████████████████████').'▓╫╫╫╫'.black('█████').'╫╫╫╫▓'.black('██████████████████████████████████'), true);
    slow_print($time_logo, black('███████████████████').'╬╬╬╬╬╬╬╬'.black('█████').'╬╬╬╬╬╬╬╬╬╬╬╬╣'.black('█████████████').'╬╬╬╬'.black('██████████████████'), true);
    slow_print($time_logo, black('█████████████████').'╬╬╬▓'.black('███').'▓╬╬╬╣'.black('████').'▓╬╬╬╬╬╬╬╬╬'.black('███████').'▓╬╬╬╬'.black('██').'▓▓╬╬╬╬╣▓▓'.black('██████████████'), true);
    slow_print($time_logo, black('██████████████').'╬╬╬╬╬╬╬╬╬╬╬╬╬╬╣'.black('████').'▓╬╬╬╬╬╬╬╬╬'.black('████████').'╬╬╬╬╬'.black('█████').'╬╬╬╬'.black('███████████████'), true);
    slow_print($time_logo, black('█████████████').'╬╬╬╬▓'.black('███████████████').'╬╬╬╬╬╬╬╬╬╬╬'.black('███████').'▓╬╬╬╬'.black('█████').'▓╬╬╬╬╬'.black('█████████████'), true);
    slow_print($time_logo, black('███████████').'▓╬╬╬╬╬'.black('███').'╬╬╬╬╬╣'.black('█████').'╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬'.black('██████').'╬╬╬╬╬╬'.black('████').'▓╬╬╬╬╣'.black('████████████'), true);
    slow_print($time_logo, black('██████████').'╬╬╬╬╬╬╬╬╬╬╬╬╬▓▓'.black('████').'╬╬╬╬╬╬╬▓'.black('██').'╬╬╬╬╬╬╬╬'.black('█████').'╬╬╬╬╬╬'.black('██████').'▓╬╬╬╬╬'.black('██████████'), true);
    slow_print($time_logo, black('█████████████').'╫╫╫╫╫╫╫'.black('██████').'╬╫╫╫╫╫╫╫╫'.black('█████').'▓╫╫╫╫╫╫╫╢'.black('█████').'╫╫╫╫╫'.black('████████').'╫╫╫╫╫╫╫╢'.black('█████'), true);
    slow_print($time_logo, black('██████████████████████████').'╬╬╬╬╬╬╬▓'.black('███████').'▓╬╬╬╬╬╬╬'.black('██████████████████████').'▓▓▓'.black('██████'), true);
    slow_print($time_logo, black('███████████████████████').'▓╬╬╬╬╬╬╬▓'.black('██████████').'╬╬╬╬╬╬╬╬╬╬'.black('████████████████████████████'), true);
    slow_print($time_logo, black('████████████████████████████████████████████████████████████████████████████████'), true);
}

function logo_space($time_logo) {
    slow_print($time_logo, '                                                                                ', true);
    slow_print($time_logo, '                               ▓╫╫╫╫     ╫╫╫╫▓                                  ', true);
    slow_print($time_logo, '                   ╬╬╬╬╬╬╬╬     ╬╬╬╬╬╬╬╬╬╬╬╬╣             ╬╬╬╬                  ', true);
    slow_print($time_logo, '                 ╬╬╬▓   ▓╬╬╬╣    ▓╬╬╬╬╬╬╬╬╬       ▓╬╬╬╬  ▓▓╬╬╬╬╣▓▓              ', true);
    slow_print($time_logo, '              ╬╬╬╬╬╬╬╬╬╬╬╬╬╬╣    ▓╬╬╬╬╬╬╬╬╬        ╬╬╬╬╬     ╬╬╬╬               ', true);
    slow_print($time_logo, '             ╬╬╬╬▓               ╬╬╬╬╬╬╬╬╬╬╬       ▓╬╬╬╬     ▓╬╬╬╬╬             ', true);
    slow_print($time_logo, '           ▓╬╬╬╬╬   ╬╬╬╬╬╣     ╬╬╬╬╬╬╬╬╬╬╬╬╬╬╬      ╬╬╬╬╬╬    ▓╬╬╬╬╣            ', true);
    slow_print($time_logo, '          ╬╬╬╬╬╬╬╬╬╬╬╬╬▓▓    ╬╬╬╬╬╬╬▓  ╬╬╬╬╬╬╬╬     ╬╬╬╬╬╬      ▓╬╬╬╬╬          ', true);
    slow_print($time_logo, '             ╫╫╫╫╫╫╫      ╬╫╫╫╫╫╫╫╫     ▓╫╫╫╫╫╫╫╢     ╫╫╫╫╫        ╫╫╫╫╫╫╫╢     ', true);
    slow_print($time_logo, '                          ╬╬╬╬╬╬╬▓       ▓╬╬╬╬╬╬╬                      ▓▓▓      ', true);
    slow_print($time_logo, '                       ▓╬╬╬╬╬╬╬▓          ╬╬╬╬╬╬╬╬╬╬                            ', true);
    slow_print($time_logo, '                                                                                ', true);
}


function congrats($time_text) {
    echo "\n";
    slow_print($time_text, 'Congratulations. You have passed the test.', true);
    $key = 'xxxet-xi--ee--tteitxxeeetiteitxe-ixxii--ee--ieeetetxitextxexx-ii-ti-xi--t-i-e--t-iiit--etxeiex-xixit-xt-iett-xxex-xtetieix--ti-e-xxxxeixt--xxeieixeitee-eiee-xt-x-i-te-txxititxeexxte-titixi-tei-xieexx-xitittx-etitx--ie--ii-exit-iixt-ei---xxitx-itiexeitxeetxtetxiitxi-e--i-x-ixtexex---e-ttttxiietitiieeixixtiexx--exexetxxeei--xi-ixitte-tei-ttiexee-xtiitixxe-tti-e-xiiieix-ex-teeixex-xieix-eiie-exx--etex-etiittett--teii-tie-extixetiexi-xit-e-tei-i-tte-tetxtiix-ieix-ttexxieiiiet--xtietieiietxx-xexeit-xt-ttexii-tei-itxi-t-t-ixxix-ei-i-txixitetei-i-xeeexixte-xxitxittti-tte--te-xetiittxxiexeteixxx';
    slow_print($time_text, 'Here is your key:', true);
    echo "\n";
    # Randomise the key so it is different (nearly) every time
    slow_print(2500, str_shuffle($key), true);
    echo "\n";
    slow_print($time_text, 'Use it wisely.', true);
    echo "\n";
    exit;
}

# Display the current inventory
function show_inventory($time_text, $inventory) {
    echo "\n";
    slow_print($time_text, "        INVENTORY", true);
    # For each item in the inventory
    foreach ($inventory as $item => $has) {
        # If the user has the item
        if ($has == 1) {
            slow_print($time_text, "| $item", true);
        }
    }
}

function word_rand($word) {
    $output = '';
    $cap_combo = '';
    # Get the length of the word
    $length = strlen($word);
    # Choose a random letter to be capital
    $random = mt_rand(0, $length - 1);
    # For the length of the word
    for ($i = 0; $i < $length; $i++) {
        # If chosen to be capital
        if ($random == $i) {
            # Add capital to full output
            $output .= strtoupper(substr($word, $i, 1));
            # Add capital to combo
            $cap_combo .= strtoupper(substr($word, $i, 1));
        } else {
            # Add lowercase to full output
            $output .= substr($word, $i, 1);
        }
    }
    # Return the letter for the combo and full output
    return ['combo' => $cap_combo, 'full' => $output];
}

function full_rand($sentence, $end) {
    $output = '';
    $combo = '';
    $sentence = strtolower($sentence);
    # Make an array of the words in the sentence
    $words = explode(' ', $sentence);
    # For each word in the sentence
    foreach ($words as $word) {
        # Randomise it using the above function
        $rand = word_rand($word);
        # Assign the combo to a variable
        $combo .= $rand['combo'];
        # Assign the full word to a variable
        $output .= $rand['full'];
        # If this is the last word in the sentence
        if (end($words) == $word) {
            # Add the 'end' to the sentence
            $output .= $end;
            # If this isn't the last word in the sentence
        } else {
            # Add a space to the end
            $output .= ' ';
        }
    }
    # return the combo and full output
    return ['combo' => $combo, 'full' => $output];
}


# start
logo_space($time_logo);
slow_print($time_text, 'Press the enter button to continue..', false);

# Allow the user to input something other than enter
$startup_input = readline('. ');

# Hidden demo
if ($startup_input == 'eXit') {
    # Define inventory
    $inventory = [
        'Ruler' => 'false'
    ];
    slow_print($time_text, "\nYou wake in a cold room. The walls are bare and the carpet is worn.\nThe only light is provided by a dim bulb, which hangs loosely from the ceiling.\nEven the air feels unwelcoming and hostile. The bed you lie on is uncomfortable.\nA rickety wooden desk leans against the wall.", true);
    $wake_input = readline('> ');
    # Define boolean that will let the code progress
    $wake_switch = false;
    while (!$wake_switch) {
        # Look for one of the inputs in the array
        if (in_array($wake_input, ['look at desk', 'look desk', 'inspect desk', 'go to desk', 'go desk'])) {
            # Set the boolean to true to end the while loop
            $wake_switch = true;
        } elseif (in_array($wake_input, ['look at bed', 'inspect bed', 'look bed'])) {
            slow_print($time_text, "\nThe sheets are dusty and coarse. It is obvious that no part of the bed has been cleaned for months.", true);
            # Allow the user to input again
            $wake_input = readline('> ');
        } else {
            slow_print($time_text, "\nI'm sorry, I don't know what you mean.", true);
            $wake_input = readline('> ');
        }
    }
    slow_print($time_text, "\nYou approach the desk. The paint is off-white and flaky.\nIt seems to be clinging to the wood for dear life.\nA single sheet of paper and a wooden ruler lay on the desk.\nThe drawer of the desk is slightly open.", true);
    $desk_input = readline('> ');
    $desk_switch = false;
    $drawer_tried_switch = false;
    $drawer_open_switch = false;
    # Generate a randomly capitalised sentence and corresponding combination from the given sentence
    $note =  full_rand('exit while you still can', '.');
    while (!$desk_switch) {
        if (in_array($desk_input, ['look at drawer', 'inspect drawer', 'look drawer', 'open drawer'])) {
            if ($drawer_open_switch == false) {
                # If user hasn't tried the drawer and doesn't have the ruler
                if ($drawer_tried_switch == false && $inventory['Ruler'] != 1) {
                    slow_print($time_text, "\nThe drawer lies ajar, but something seems to be jamming it from opening fully.\nYou attempt to clear the blockage, but it is just out of reach.", true);
                    # User has tried the drawer
                    $drawer_tried_switch = true;
                # If user has tried the drawer and doesn't have the ruler
                } elseif ($drawer_tried_switch == true && $inventory['Ruler'] != 1) {
                    slow_print($time_text, "\nThe drawer still won't budge. Perhaps there's some sort of instrument that could clear the blockage?", true);
                # If user hasn't tried drawer and has the ruler
                } elseif ($drawer_tried_switch == false && $inventory['Ruler'] == 1) {
                    slow_print($time_text, "\nThe drawer lies ajar, but something seems to be jamming it from opening fully.\nAfter a few tries, you use the ruler to pry the obstruction free.\nThe drawer is empty, but you discover that the blockage was caused by a small black box.\nIt has a lock on the side that requires 5 letters.\n(Say 'lock [combination]' to unlock.)", true);
                    $drawer_tried_switch = true;
                    # User has opened the drawer
                    $drawer_open_switch = true;
                # If user has tried the drawer and has the ruler
                } elseif ($drawer_tried_switch == true && $inventory['Ruler'] == 1) {
                    slow_print($time_text, "\nAfter a few tries, you use the ruler to pry the obstruction free.\nThe drawer is empty, but you discover that the blockage was caused by a small black box.\nIt has a lock on the side that requires 5 letters.\n(Say 'lock [combination]' to unlock.)", true);
                    $drawer_open_switch = true;
                }
            # If user has opened the drawer
            } else {
                slow_print($time_text, "\nThe lock in the drawer requires 5 letters.\n(Say 'lock [combination]' to unlock.)", true);
            }
            $desk_input = readline('> ');
        # If user has entered 'lock'
        } elseif (substr_count($desk_input, 'lock') == 1) {
            # Find the code the user entered
            $combo = substr($desk_input, 5, 5);
            # If the combination matches the user's code
            if (strtolower($combo) == strtolower($note['combo'])) {
                slow_print($time_text, "\nThe lock clicks open. Peering inside the box, you see a small brass key.\nYou use it to open the door to the room, and eXit.", true);
                $desk_switch = true;
                congrats($time_text);
            } else {
                slow_print($time_text, "\nIncorrect combination.\n(Say 'lock [combination]' to unlock.)", true);
                $desk_input = readline('> ');
            }
        } elseif (in_array($desk_input, ['look paper', 'look at paper', 'inspect paper', 'look ruler', 'look at ruler', 'inspect ruler'])) {
            # If user has ruler
            if ($inventory['Ruler'] == 1) {
                slow_print($time_text, "\nThe paper reads:\n".$note['full'], true);
            # If user doesn't have the ruler
            } else {
                slow_print($time_text, "\nThe ruler and the paper on the desk are less dusty than the rest of the room.\nYou pick up the ruler.", true);
                # Add the ruler to the inventory
                $inventory['Ruler'] = true;
                show_inventory($time_text, $inventory);
                slow_print($time_text, "\nYou look at the paper more closely. It reads:\n".$note['full'], true);
            }
            $desk_input = readline('> ');
        } elseif (in_array($desk_input, ['look', 'look desk', 'inspect desk', 'look at desk'])) {
            if ($drawer_open_switch) {
                slow_print($time_text, "\nThe paint of the desk is off-white and flaky.\nIt seems to be clinging to the wood for dear life.\nA single sheet of paper lies on the desk.\nOne of the drawers is open.", true);
            } else {
                if ($inventory['Ruler'] == 1) {
                    slow_print($time_text, "\nThe paint of the desk is off-white and flaky.\nIt seems to be clinging to the wood for dear life.\nA single sheet of paper lies on the desk.\nOne of the drawers is slightly open.", true);
                } else {
                    slow_print($time_text, "\nThe paint of the desk is off-white and flaky.\nIt seems to be clinging to the wood for dear life.\nA single sheet of paper and a wooden ruler lay on the desk.\nOne of the drawers is slightly open.", true);
                }
            }
            $desk_input = readline('> ');
        } else {
            slow_print($time_text, "\nI'm sorry, I don't know what you mean.", true);
            $desk_input = readline('> ');
        }
    }
# Show-accurate version
} elseif ($startup_input == 'og') {
    slow_print($time_text, "\nYou're trapped in a dungeon with your friend. You see a barrel.\nWhat do you do?", true);
    $barrel_input = readline('> ');
    $barrel_switch = false;
    while (!$barrel_switch) {
        if (in_array($barrel_input, ['move barrel'])) {
            $barrel_switch = true;
        } else {
            slow_print($time_text, "\nYou can't do that here.", true);
            $barrel_input = readline('> ');
        }
    }

    slow_print($time_text, "\nThe barrel rolls aside and you find a secret tunnel.", true);
    $tunnel_input = readline('> ');
    $tunnel_switch = false;
    while (!$tunnel_switch) {
        if (in_array($tunnel_input, ['enter tunnel'])) {
            $tunnel_switch = true;
        } else {
            slow_print($time_text, "\nYou can't do that here.", true);
            $tunnel_input = readline('> ');
        }
    }

    slow_print($time_text, "\nYou start to escape but your friend is too weak to go with you.\nThey hand you a note.", true);
    $hand_input = readline('> ');
    $hand_switch = false;
    while (!$hand_switch) {
        if (in_array($hand_input, ['read note'])) {
            slow_print($time_text, "\nIt is too dark to read the note.", true);
            $hand_input = readline('> ');
        } elseif (in_array($hand_input, ['light a match'])) {
            slow_print($time_text, "\nThe note says, \"Don't leave me here.\"\nDo you leave your friend or stay?", true);
            $hand_input = readline('> ');
        } elseif (in_array($hand_input, ['stay'])) {
            logo_space($time_logo);
            exit;
        } elseif (in_array($hand_input, ['leave'])) {
            $hand_switch = true;
        } else {
            slow_print($time_text, "\nYou can't do that here.", true);
            $hand_input = readline('> ');
        }
    }

    slow_print($time_text, "\nYou crawl through the tunnel and the tunnel leads to a beach.", true);
    $beach_input = readline('> ');
    $beach_switch = false;
    while (!$beach_switch) {
        if (in_array($beach_input, ['look'])) {
            $beach_switch = true;
        } else {
            slow_print($time_text, "\nYou can't do that here.", true);
            $beach_input = readline('> ');
        }
    }

    slow_print($time_text, "\nIn the water you see a boat.", true);
    $boat_input = readline('> ');
    $boat_switch = false;
    while (!$boat_switch) {
        if (in_array($boat_input, ['get on boat'])) {
            slow_print($time_text, "Congratulations, you're heading to a new world!", true);
            $boat_switch = true;
        } else {
            slow_print($time_text, "\nYou can't do that here.", true);
            $boat_input = readline('> ');
        }
    }
# More detailed version
} else {
    slow_print($time_text, "\nYou're trapped in a dungeon with your friend.\nThey are injured, and sit slumped against a wall.\nThere is a barrel in front of you.", true);
    $barrel_input = readline('> ');
    $barrel_switch = false;
    $sit_switch = false;
    $left_switch = false;
    $note_switch = false;
    while (!$barrel_switch) {
        if (in_array($barrel_input, ['look at barrel', 'look barrel', 'inspect barrel', 'move barrel'])) {
            $barrel_switch = true;
        } elseif (in_array($barrel_input, ['sit', 'sit down', 'sit with friend', 'sit down with friend', 'sit with my friend', 'sit down with my friend'])) {
            slow_print($time_text, "\nAs you sit down next to your friend, they hand you a note.", true);
            $sit_switch = true;
            $barrel_input = readline('> ');
        } elseif (in_array($barrel_input, ['read note', 'read', 'look note', 'look at note']) && $sit_switch) {
            slow_print($time_text, "\nIt is too dark to read the note.\nYou remember the box of matches in your pocket, empty but for one.", true);
            $barrel_input = readline('> ');
        } elseif (in_array($barrel_input, ['light a match', 'light match']) && $sit_switch) {
            slow_print($time_text, "\nThe match flickers to life, and illuminates the note.\nThe note says, \"Don't leave me here.\"\nDo you leave your friend or stay?", true);
            $note_switch = true;
            $barrel_input = readline('> ');
        } elseif (in_array($barrel_input, ['stay']) && $note_switch && $sit_switch) {
            slow_print($time_text, "\nYou stay seated next to your friend.\nAs the match's flame wavers, your friend turns to you and smiles.", true);
            logo_space($time_logo);
            exit;
        } elseif (in_array($barrel_input, ['leave']) && $sit_switch) {
            slow_print($time_text, "\nYou stand up and look for a way out.\nThe barrel looks light enough to move.", true);
            $left_switch = true;
            $barrel_input = readline('> ');
        } elseif (in_array($barrel_input, ['look around', 'look'])) {
            slow_print($time_text, "\nThe walls of the dungeon are damp. Your friend is still sitting.", true);
            $barrel_input = readline('> ');
        } else {
            slow_print($time_text, "\nI'm sorry, I don't know what you mean.", true);
            $barrel_input = readline('> ');
        }
    }

    slow_print($time_text, "\nFlecks of paint fall from the barrel when you touch it.\nIts metal frame, rusted and worn, creaks as you roll it aside.\nIn its place lies the entrance to a secret tunnel.", true);
    $tunnel_input = readline('> ');
    $tunnel_switch = false;
    while (!$tunnel_switch) {
        if (in_array($tunnel_input, ['leave', 'go to tunnel', 'go tunnel', 'enter tunnel'])) {
            $tunnel_switch = true;
        } elseif (in_array($tunnel_input, ['look', 'look around'])) {
            slow_print($time_text, "\nThe walls of the dungeon are damp.\nThe only way forward is through the tunnel.\nThe light on the other side is blinding.", true);
            $tunnel_input = readline('> ');
        } else {
            slow_print($time_text, "\nI'm sorry, I don't know what you mean.", true);
            $tunnel_input = readline('> ');
        }
    }
    # If the user has already chosen to leave
    if ($left_switch) {
        slow_print($time_text, "\nYou take one last look at your friend, then walk towards the exit.", false);
    } else {
        slow_print($time_text, "\nYou start to enter the tunnel, but your friend is too weak to go with you.\nWith shaking hands, they give you a note.", true);
        $hand_input = readline('> ');
        $hand_switch = false;
        $note_switch = false;
        $leave_switch = false;
        while (!$hand_switch) {
            if (in_array($hand_input, ['read note', 'read', 'look note', 'look at note'])) {
                slow_print($time_text, "\nIt is too dark to read the note.\nYou remember the box of matches in your pocket, empty but for one.", true);
                $hand_input = readline('> ');
            } elseif (in_array($hand_input, ['light a match', 'light match'])) {
                slow_print($time_text, "\nThe match flickers to life, and illuminates the note.\nThe note says, \"Don't leave me here.\"\nDo you leave your friend or stay?", true);
                $note_switch = true;
                $hand_input = readline('> ');
            } elseif (in_array($hand_input, ['stay']) && $note_switch || in_array($hand_input, ['stay']) && $leave_switch && !$left_switch) {
                slow_print($time_text, "\nYou sit down next to your friend.\nAs the match's flame wavers, your friend turns to you and smiles.", true);
                logo_space($time_logo);
                exit;
            } elseif (in_array($hand_input, ['leave', 'enter tunnel', 'go tunnel', 'go to tunnel'])) {
                if ($leave_switch || $left_switch) {
                    slow_print($time_text, "\nYou take one last look at your friend, then walk towards the exit.", false);
                    $hand_switch = true;
                } else {
                    slow_print($time_text, "\nThe tunnel looks unstable.\nIf you leave you may never see your friend again.\nAre you sure you want to leave your friend?", true);
                    $leave_switch = true;
                    $hand_input = readline('> ');
                }
            } elseif (in_array($hand_input, ['look', 'look around'])) {
                slow_print($time_text, "\nThe walls of the dungeon are damp.\nThe only way forward is through the tunnel.\nThe light on the other side is blinding.", true);
                $hand_input = readline('> ');
            } else {
                slow_print($time_text, "\nI'm sorry, I don't know what you mean.", true);
                $hand_input = readline('> ');
            }
        }
    }

    slow_print($time_text, "\nIn your haste to escape, you dislodge part of the tunnel.\nYou narrowly avoid being crushed to death, and find yourself on a beach.", true);
    slow_print($time_text, "\nIn the water you see a majestic ship. Its sails are as white as pearls.\nIt floats in a calm, inviting manner.", true);
    $beach_input = readline('> ');
    $beach_switch = false;
    while (!$beach_switch) {
        if (in_array($beach_input, ['read note', 'read', 'look note', 'look at note'])) {
            slow_print($time_text, "\nThe note says, \"Don't leave me here.\"\nIt is too late.", true);
            $beach_input = readline('> ');
        } elseif (in_array($beach_input, ['get on boat', 'look at boat', 'get on ship', 'look at ship'])) {
            slow_print($time_text, "\nAs you board the ship, you can't help but look back at the\ncollapsed remains of the tunnel.\nYou're heading to a new world, whether you like it or not.", false);
            $beach_switch = true;
        } else {
            slow_print($time_text, "\nI'm sorry, I don't know what you mean.", true);
            $beach_input = readline('> ');
        }
    }
    logo_space($time_logo);
}
echo "\n";




?>