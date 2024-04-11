<?php

function increaseLootChance()
{
    /* MODLIST:
        CRAFTING RECIPE DROP RATE INCREASE
        MONSTERS DROP LEVEL-APPROPRIATE POTIONS
        TIER 0 POTIONS USABLE AT LEVEL 1
        ALL POTIONS STACK TO 100
    */

    say("\n\nExecuting Mod: Increase Relevant Drops\n", 1);

    /*  CRAFTING RECIPE DROP RATE INCREASE   */
    say("Increasing drop rate of crafting recipes", 2);
    $RECIPE_IDS_SERIALIZED  = implode(",",RECIPE_ID_NUMBERS);
    $recipeDropRateQuery = 'update '.CREATURE_LOOT_TEMPLATE_TABLE.
        ' set '.CHANCE_FIELD_NAME.' = '.CHANCE_FIELD_NAME.' * '.LOOT_MULTIPLIER.
        ' where item in ('.$RECIPE_IDS_SERIALIZED.');';


    /*  GRAY ITEM DROPS COMPLETELY REMOVED */
    $grayItemDropRemovalQuery =
        'DELETE FROM '.CREATURE_LOOT_TEMPLATE_TABLE.' where '.ITEM_FIELD_NAME.' IN (SELECT '.ENTRY_FIELD_NAME
        .' FROM '.ITEM_TEMPLATE_TABLE.' WHERE quality = '.LOOT_QUALITY_LEVEL['POOR'].');
        
        DELETE FROM '.CREATURE_LOOT_TEMPLATE_TABLE.' where '.ITEM_FIELD_NAME.' IN ('.implode(',',GRAY_WORLD_DROP_PROXY_ITEMS).'); 
        ';

    /*  MONSTERS DROP LEVEL-APPROPRIATE POTIONS */
    // todo: refactor into batch queries
    say("Adding Tier 0 basic potions to Tier 0 creatures", 2);
    foreach (TIER_0_CREATURE_LIST as $creatureId) {
        if (in_array($creatureId,LOOTLESS_CREATURE_IDS)){continue;}
        foreach (TIER_0_POTIONS as $potionName => $potionData) {
            if ($potionData['id'] < 1 OR !isset($potionData['id'])){
                say("!! Potion has no ID, skipping. !!", 0);
            }
            else {
                say("Adding $potionName to $creatureId", 2);

                $tier_0_potion_drop_query .=
                    "delete from " . CREATURE_LOOT_TEMPLATE_TABLE . " where " . ITEM_FIELD_NAME . " = " . $potionData['id'] . " and " . ENTRY_FIELD_NAME . " = $creatureId;
                    
                    insert into " . CREATURE_LOOT_TEMPLATE_TABLE . "(" . ENTRY_FIELD_NAME . ", " . ITEM_FIELD_NAME . "," . CHANCE_FIELD_NAME . ", " . MINCOUNT_FIELD_NAME . ", " . MAXCOUNT_FIELD_NAME . ", " . CONDITION_ID_FIELD_NAME . ")
                    values (" . $creatureId . ", " . $potionData['id'] . "," . $potionData['droprate'] . ",1,1,0);";
            }
        }
        foreach (LOW_TIER_UTILITY_POTIONS as $potionName => $potionData) {
            if ($potionData['id'] < 1 OR !isset($potionData['id'])){
                say("!! Potion has no ID, skipping. !!", 0);
            }
            else {
                say("Adding $potionName to $creatureId", 2);
                $tier_0_potion_drop_query .=
                    "delete from " . CREATURE_LOOT_TEMPLATE_TABLE . " where " . ITEM_FIELD_NAME . " = " . $potionData['id'] . " and " . ENTRY_FIELD_NAME . " = $creatureId;
                    insert into " . CREATURE_LOOT_TEMPLATE_TABLE . "(" . ENTRY_FIELD_NAME . ", " . ITEM_FIELD_NAME . "," . CHANCE_FIELD_NAME . ", " . MINCOUNT_FIELD_NAME . ", " . MAXCOUNT_FIELD_NAME . ", " . CONDITION_ID_FIELD_NAME . ")
                    values (" . $creatureId . ", " . $potionData['id'] . "," . $potionData['droprate'] . ",1,1,0);";
            }
        }
    }

    say("Adding Tier 1 basic potions to Tier 1 creatures", 2);
    foreach (TIER_1_CREATURE_LIST as $creatureId) {
        if (in_array($creatureId,LOOTLESS_CREATURE_IDS)){continue;}

        foreach (TIER_1_POTIONS as $potionName => $potionData) {
            if ($potionData['id'] < 1 OR !isset($potionData['id'])){
                say("!! Potion has no ID, skipping. !!", 0);
            }
            else {
                say("Adding $potionName to $creatureId", 2);
                $tier_1_potion_drop_query .=
                    "delete from " . CREATURE_LOOT_TEMPLATE_TABLE . " where " . ITEM_FIELD_NAME . " = " . $potionData['id'] . " and " . ENTRY_FIELD_NAME . " = $creatureId;
                insert into " . CREATURE_LOOT_TEMPLATE_TABLE . "(" . ENTRY_FIELD_NAME . ", " . ITEM_FIELD_NAME . "," . CHANCE_FIELD_NAME . ", " . MINCOUNT_FIELD_NAME . ", " . MAXCOUNT_FIELD_NAME . ", " . CONDITION_ID_FIELD_NAME . ")
                values ($creatureId, " . $potionData['id'] . "," . $potionData['droprate'] . ",1,1,0);";
            }
        }
        foreach (LOW_TIER_UTILITY_POTIONS as $potionName => $potionData) {
            if (in_array($creatureId,LOOTLESS_CREATURE_IDS)){continue;}

            if ($potionData['id'] < 1 OR !isset($potionData['id'])){
                say("!! Potion has no ID, skipping. !!", 0);
            }
            else {
                say("Adding $potionName to $creatureId", 2);
                $tier_0_potion_drop_query .=
                    "delete from " . CREATURE_LOOT_TEMPLATE_TABLE . " where " . ITEM_FIELD_NAME . " = " . $potionData['id'] . " and " . ENTRY_FIELD_NAME . " = $creatureId;
                    insert into " . CREATURE_LOOT_TEMPLATE_TABLE . "(" . ENTRY_FIELD_NAME . ", " . ITEM_FIELD_NAME . "," . CHANCE_FIELD_NAME . ", " . MINCOUNT_FIELD_NAME . ", " . MAXCOUNT_FIELD_NAME . ", " . CONDITION_ID_FIELD_NAME . ")
                    values (" . $creatureId . ", " . $potionData['id'] . "," . $potionData['droprate'] . ",1,1,0);";
            }
        }

    }

    say("Adding Tier 2 basic potions to Tier 2 creatures", 2);
    foreach (TIER_2_CREATURE_LIST as $creatureId) {
        if (in_array($creatureId,LOOTLESS_CREATURE_IDS)){continue;}

        foreach (TIER_2_POTIONS as $potionName => $potionData) {
            if ($potionData['id'] < 1 OR !isset($potionData['id'])){
                say("!! Potion has no ID, skipping. !!", 0);
            }
            else {
                say("Adding $potionName to $creatureId", 2);
                $tier_2_potion_drop_query .=
                    "delete from " . CREATURE_LOOT_TEMPLATE_TABLE . " where " . ITEM_FIELD_NAME . " = " . $potionData['id'] . " and " . ENTRY_FIELD_NAME . " = $creatureId;
                insert into " . CREATURE_LOOT_TEMPLATE_TABLE . "(" . ENTRY_FIELD_NAME . ", " . ITEM_FIELD_NAME . "," . CHANCE_FIELD_NAME . ", " . MINCOUNT_FIELD_NAME . ", " . MAXCOUNT_FIELD_NAME . ", " . CONDITION_ID_FIELD_NAME . ")
               values ($creatureId, " . $potionData['id'] . "," . $potionData['droprate'] . ",1,1,0);";
            }
        }
        foreach (LOW_TIER_UTILITY_POTIONS as $potionName => $potionData) {
            if ($potionData['id'] < 1 OR !isset($potionData['id'])){
                say("!! Potion has no ID, skipping. !!", 0);
            }
            else {
                say("Adding $potionName to $creatureId", 2);
                $tier_0_potion_drop_query .=
                    "delete from " . CREATURE_LOOT_TEMPLATE_TABLE . " where " . ITEM_FIELD_NAME . " = " . $potionData['id'] . " and " . ENTRY_FIELD_NAME . " = $creatureId;
                    insert into " . CREATURE_LOOT_TEMPLATE_TABLE . "(" . ENTRY_FIELD_NAME . ", " . ITEM_FIELD_NAME . "," . CHANCE_FIELD_NAME . ", " . MINCOUNT_FIELD_NAME . ", " . MAXCOUNT_FIELD_NAME . ", " . CONDITION_ID_FIELD_NAME . ")
                    values (" . $creatureId . ", " . $potionData['id'] . "," . $potionData['droprate'] . ",1,1,0);";
            }
        }

    }

    say("Adding Tier 3 basic potions to Tier 3 creatures", 2);
    foreach (TIER_3_CREATURE_LIST as $creatureId) {
        if (in_array($creatureId,LOOTLESS_CREATURE_IDS)){continue;}

        foreach (TIER_3_POTIONS as $potionName => $potionData) {
            if ($potionData['id'] < 1 OR !isset($potionData['id'])){
                say("!! Potion has no ID, skipping. !!", 0);
            }
            else {
                say("Adding $potionName to $creatureId", 2);
                $tier_3_potion_drop_query .=
                    "delete from " . CREATURE_LOOT_TEMPLATE_TABLE . " where " . ITEM_FIELD_NAME . " = " . $potionData['id'] . " and " . ENTRY_FIELD_NAME . " = $creatureId;
                insert into " . CREATURE_LOOT_TEMPLATE_TABLE . "(" . ENTRY_FIELD_NAME . ", " . ITEM_FIELD_NAME . "," . CHANCE_FIELD_NAME . ", " . MINCOUNT_FIELD_NAME . ", " . MAXCOUNT_FIELD_NAME . ", " . CONDITION_ID_FIELD_NAME . ")
                values ($creatureId, " . $potionData['id'] . "," . $potionData['droprate'] . " ,1,1,0);";
            }
        }
        foreach (LOW_TIER_UTILITY_POTIONS as $potionName => $potionData) {
            if ($potionData['id'] < 1 OR !isset($potionData['id'])){
                say("!! Potion has no ID, skipping. !!", 0);
            }
            else {
                say("Adding $potionName to $creatureId", 2);
                $tier_0_potion_drop_query .=
                    "delete from " . CREATURE_LOOT_TEMPLATE_TABLE . " where " . ITEM_FIELD_NAME . " = " . $potionData['id'] . " and " . ENTRY_FIELD_NAME . " = $creatureId;
                    insert into " . CREATURE_LOOT_TEMPLATE_TABLE . "(" . ENTRY_FIELD_NAME . ", " . ITEM_FIELD_NAME . "," . CHANCE_FIELD_NAME . ", " . MINCOUNT_FIELD_NAME . ", " . MAXCOUNT_FIELD_NAME . ", " . CONDITION_ID_FIELD_NAME . ")
                    values (" . $creatureId . ", " . $potionData['id'] . "," . $potionData['droprate'] . ",1,1,0);";
            }
        }
    }

    say("Adding Tier 4 basic potions to Tier 4 creatures", 2);
    foreach (TIER_4_CREATURE_LIST as $creatureId) {
        if (in_array($creatureId,LOOTLESS_CREATURE_IDS)){continue;}

        foreach (TIER_4_POTIONS as $potionName => $potionData) {
            if ($potionData['id'] < 1 OR !isset($potionData['id'])){
                say("!! Potion has no ID, skipping. !!", 0);
            }
            else {
                say("Adding $potionName to $creatureId", 2);
                $tier_4_potion_drop_query .=
                    "delete from " . CREATURE_LOOT_TEMPLATE_TABLE . " where " . ITEM_FIELD_NAME . " = " . $potionData['id'] . " and " . ENTRY_FIELD_NAME . " = $creatureId;
                insert into " . CREATURE_LOOT_TEMPLATE_TABLE . "(" . ENTRY_FIELD_NAME . ", " . ITEM_FIELD_NAME . "," . CHANCE_FIELD_NAME . ", " . MINCOUNT_FIELD_NAME . ", " . MAXCOUNT_FIELD_NAME . ", " . CONDITION_ID_FIELD_NAME . ")
                values ($creatureId, " . $potionData['id'] . "," . $potionData['droprate'] . " ,1,1,0);";
            }
        }
        foreach (LOW_TIER_UTILITY_POTIONS as $potionName => $potionData) {
            if ($potionData['id'] < 1 OR !isset($potionData['id'])){
                say("!! Potion has no ID, skipping. !!", 0);
            }
            else {
                say("Adding $potionName to $creatureId", 2);
                $tier_0_potion_drop_query .=
                    "delete from " . CREATURE_LOOT_TEMPLATE_TABLE . " where " . ITEM_FIELD_NAME . " = " . $potionData['id'] . " and " . ENTRY_FIELD_NAME . " = $creatureId;
                    insert into " . CREATURE_LOOT_TEMPLATE_TABLE . "(" . ENTRY_FIELD_NAME . ", " . ITEM_FIELD_NAME . "," . CHANCE_FIELD_NAME . ", " . MINCOUNT_FIELD_NAME . ", " . MAXCOUNT_FIELD_NAME . ", " . CONDITION_ID_FIELD_NAME . ")
                    values (" . $creatureId . ", " . $potionData['id'] . "," . $potionData['droprate'] . ",1,1,0);";
            }
        }
    }

    say("Adding Tier 5 basic potions to Tier 5 creatures", 2);
    foreach (TIER_5_CREATURE_LIST as $creatureId) {
        if (in_array($creatureId,LOOTLESS_CREATURE_IDS)){continue;}

        foreach (TIER_5_POTIONS as $potionName => $potionData) {
            if ($potionData['id'] < 1 OR !isset($potionData['id'])){
                say("!! Potion has no ID, skipping. !!", 0);
            }
            else {
                say("Adding $potionName to $creatureId", 2);
                $tier_5_potion_drop_query .=
                    "delete from " . CREATURE_LOOT_TEMPLATE_TABLE . " where " . ITEM_FIELD_NAME . " = " . $potionData['id'] . " and " . ENTRY_FIELD_NAME . " = $creatureId;
                insert into " . CREATURE_LOOT_TEMPLATE_TABLE . "(" . ENTRY_FIELD_NAME . ", " . ITEM_FIELD_NAME . "," . CHANCE_FIELD_NAME . ", " . MINCOUNT_FIELD_NAME . ", " . MAXCOUNT_FIELD_NAME . ", " . CONDITION_ID_FIELD_NAME . ")
                values ($creatureId, " . $potionData['id'] . "," . $potionData['droprate'] . " ,1,1,0);";
            }
        }
    }

    say("Adding Tier 5 basic potions to Tier **6** creatures", 2);
    foreach (TIER_6_CREATURE_LIST as $creatureId) {
        if (in_array($creatureId,LOOTLESS_CREATURE_IDS)){continue;}

        foreach (TIER_5_POTIONS as $potionName => $potionData) {
            if ($potionData['id'] < 1 OR !isset($potionData['id'])){
                say("!! Potion has no ID, skipping. !!", 0);
            }
            else {
                say("Adding $potionName to $creatureId", 2);
                $tier_6_potion_drop_query .=
                    "delete from " . CREATURE_LOOT_TEMPLATE_TABLE . " where " . ITEM_FIELD_NAME . " = " . $potionData['id'] . " and " . ENTRY_FIELD_NAME . " = $creatureId;
                insert into " . CREATURE_LOOT_TEMPLATE_TABLE . "(" . ENTRY_FIELD_NAME . ", " . ITEM_FIELD_NAME . "," . CHANCE_FIELD_NAME . ", " . MINCOUNT_FIELD_NAME . ", " . MAXCOUNT_FIELD_NAME . ", " . CONDITION_ID_FIELD_NAME . ")
                values ($creatureId, " . $potionData['id'] . "," . $potionData['droprate'] . " ,1,1,0);";
            }
        }
    }

    say("Adding Tier 5 basic potions to Tier **7** creatures", 2);
    foreach (TIER_7_CREATURE_LIST as $creatureId) {
        if (in_array($creatureId,LOOTLESS_CREATURE_IDS)){continue;}

        foreach (TIER_5_POTIONS as $potionName => $potionData) {
            if ($potionData['id'] < 1 OR !isset($potionData['id'])){
                say("!! Potion has no ID, skipping. !!", 0);
            }
            else {
                say("Adding $potionName to $creatureId", 2);
                $tier_7_potion_drop_query .=
                    "delete from " . CREATURE_LOOT_TEMPLATE_TABLE . " where " . ITEM_FIELD_NAME . " = " . $potionData['id'] . " and " . ENTRY_FIELD_NAME . " = $creatureId;
                insert into " . CREATURE_LOOT_TEMPLATE_TABLE . "(" . ENTRY_FIELD_NAME . ", " . ITEM_FIELD_NAME . "," . CHANCE_FIELD_NAME . ", " . MINCOUNT_FIELD_NAME . ", " . MAXCOUNT_FIELD_NAME . ", " . CONDITION_ID_FIELD_NAME . ")
                values ($creatureId, " . $potionData['id'] . "," . $potionData['droprate'] . " ,1,1,0);";
            }
        }
    }
/*
    say("Adding Tier 0 protection potions to Tier 0 creatures", 2);
    foreach (TIER_0_CREATURE_LIST as $creatureId) {
        foreach (TIER_0_PROTECTION_POTIONS as $potionName => $potionData) {
            if ($potionData['id'] < 1 OR !isset($potionData['id'])){
                say("!! Potion has no ID, skipping. !!", 0);
            }
            else {
                say("Adding $potionName to $creatureId", 2);
                say("Potion ID: ".$potionData['id'],2);

                $tier_0_potion_drop_query .=
                    "delete from " . CREATURE_LOOT_TEMPLATE_TABLE . " where " . ITEM_FIELD_NAME . " = " . $potionData['id'] . " and " . ENTRY_FIELD_NAME . " = $creatureId;
insert into " . CREATURE_LOOT_TEMPLATE_TABLE . "(" . ENTRY_FIELD_NAME . ", " . ITEM_FIELD_NAME . "," . CHANCE_FIELD_NAME . ", " . MINCOUNT_FIELD_NAME . ", " . MAXCOUNT_FIELD_NAME . ", " . CONDITION_ID_FIELD_NAME . ")
values ($creatureId, " . $potionData['id'] . "," . $potionData['droprate'] . ", 1, 1, 0);";
            }
        }
    }
*/
    /*
    say("Adding Tier 5 protection potions to Tier 5 creatures", 2);
    foreach (TIER_5_PROTECTION_POTIONS as $potionName => $potionData) {
        if ($potionData['id'] < 1 OR !isset($potionData['id'])){
            say("!! Potion has no ID, skipping. !!", 0);
        }
        else {
            say("Removing Level Requirements from $potionName", 2);
            $tier_5_potion_level_query .=
                'UPDATE ' . ITEM_TEMPLATE_TABLE . ' SET ' . REQUIRED_LEVEL_FIELD . ' = 1 WHERE ' . ENTRY_FIELD_NAME . '= ' . $potionData['id'] . ';';
        }
    }

*/


    /* Tier 0 Potions Usable at Level 1 */
    /* Tier 1 Potions Usable at Level 10, etc */

    say("removing level requirements from Tier 0 Potions", 2);
    foreach (array_merge(TIER_0_POTIONS,LOW_TIER_UTILITY_POTIONS) as $potionName => $potionData) {
        if ($potionData['id'] < 1 OR !isset($potionData['id'])){
            say("!! Potion has no ID, skipping. !!", 0);
        }
        else {
            say("Removing Level Requirements from $potionName", 2);
            $potion_level_query .='
            UPDATE ' . ITEM_TEMPLATE_TABLE . ' SET ' . REQUIRED_LEVEL_FIELD . ' = 1 WHERE ' . ENTRY_FIELD_NAME . '= ' . $potionData['id'] . ';
            ';
        }
    }

    //TODO:  Test L10 > L50 LOCALLY
/*
    say("setting requirements to L10 for Tier 1 Potions", 2);
    foreach (TIER_1_POTIONS as $potionName => $potionData) {
        if ($potionData['id'] < 1 OR !isset($potionData['id'])){
            say("!! Potion has no ID, skipping. !!", 0);
        }
        else {
            say("Removing Level Requirements from $potionName", 2);
            $potion_level_query .=
                'UPDATE ' . ITEM_TEMPLATE_TABLE . ' SET ' . REQUIRED_LEVEL_FIELD . ' = 10 WHERE ' . ENTRY_FIELD_NAME . '= ' . $potionData['id'] . ';';
        }
    }

    say("setting requirements to L20 for Tier 2 Potions", 2);
    foreach (TIER_2_POTIONS as $potionName => $potionData) {
        if ($potionData['id'] < 1 OR !isset($potionData['id'])){
            say("!! Potion has no ID, skipping. !!", 0);
        }
        else {
            say("Removing Level Requirements from $potionName", 2);
            $potion_level_query .=
                'UPDATE ' . ITEM_TEMPLATE_TABLE . ' SET ' . REQUIRED_LEVEL_FIELD . ' = 20 WHERE ' . ENTRY_FIELD_NAME . '= ' . $potionData['id'] . ';';
        }
    }

    say("setting requirements to L30 for Tier 3 Potions", 2);
    foreach (TIER_3_POTIONS as $potionName => $potionData) {
        if ($potionData['id'] < 1 OR !isset($potionData['id'])){
            say("!! Potion has no ID, skipping. !!", 0);
        }
        else {
            say("Removing Level Requirements from $potionName", 2);
            $potion_level_query .=
                'UPDATE ' . ITEM_TEMPLATE_TABLE . ' SET ' . REQUIRED_LEVEL_FIELD . ' = 30 WHERE ' .
                ENTRY_FIELD_NAME . '= ' . $potionData['id'] . ';';
        }
    }

    say("setting requirements to L40 for Tier 4 Potions", 2);
    foreach (TIER_4_POTIONS as $potionName => $potionData) {
        if ($potionData['id'] < 1 OR !isset($potionData['id'])){
            say("!! Potion has no ID, skipping. !!", 0);
        }
        else {
            say("Removing Level Requirements from $potionName", 2);
            $potion_level_query .=
                'UPDATE ' . ITEM_TEMPLATE_TABLE . ' SET ' . REQUIRED_LEVEL_FIELD . ' = 40 WHERE ' .
                ENTRY_FIELD_NAME . '= ' . $potionData['id'] . ';';
        }
    }

    say("setting requirements to L50 for Tier 5 Potions", 2);
    foreach (TIER_5_POTIONS as $potionName => $potionData) {
        if ($potionData['id'] < 1 OR !isset($potionData['id'])){
            say("!! Potion has no ID, skipping. !!", 0);
        }
        else {
            say("Removing Level Requirements from $potionName", 2);
            $potion_level_query .=
                'UPDATE ' . ITEM_TEMPLATE_TABLE . ' SET ' . REQUIRED_LEVEL_FIELD . ' = 50 WHERE ' .
                ENTRY_FIELD_NAME . '= ' . $potionData['id'] . ';';
        }
    }
*/

    /* All Potions stack to 100  */

    say("Setting Potions to Stack to 100", 2);
    $stackTo100Query = 'UPDATE ' . ITEM_TEMPLATE_TABLE . ' SET ' .
        STACKABLE_FIELD_NAME . ' = ' . POTION_STACKABLE_LIMIT . ' WHERE ' .
        SUBCLASS_FIELD_NAME . ' = 3 AND ' .
        CLASS_FIELD_NAME . ' = 0;';


    /*  QUERY SEQUENCER */

    $queries = [
        'Tier 0 Potion Level Requirements Removed' => $potion_level_query,
        'Gray items removed from ALL loot tables.'=>$grayItemDropRemovalQuery,
        'All Potions Stack to 100' => $stackTo100Query,
        'Tier 0 Monsters Drop Potions.' => $tier_0_potion_drop_query,
        'Tier 1 Monsters Drop Potions.'=>$tier_1_potion_drop_query,
        'Tier 2 Monsters Drop Potions.'=>$tier_2_potion_drop_query,
        'Tier 3 Monsters Drop Potions.'=>$tier_3_potion_drop_query,
        'Tier 4 Monsters Drop Potions.'=>$tier_4_potion_drop_query,
        'Tier 5 Monsters Drop Potions.'=>$tier_5_potion_drop_query,
        'Tier 6 Monsters Drop Potions.'=>$tier_6_potion_drop_query,
        'Tier 7 Monsters Drop Potions.'=>$tier_7_potion_drop_query,
        'Crafting Recipe Drop Rate x'.LOOT_MULTIPLIER=>$recipeDropRateQuery,
    ];
    executeQueryBatch($queries);
    return true;
}
increaseLootChance();