<?php

function applyModsToSpells()
{
    say("\n\nExecuting Mod: Gold-less Spell Training\n", 1);

    // todo this doesn't seem to be working.
    $removeProfessionSupportItemsQuery="UPDATE ".SPELL_TEMPLATE_TABLE." SET Totem1=0, Totem2=0 WHERE Totem1 > 0;";

    $conjureBetterQuery = 'UPDATE '.SPELL_TEMPLATE_TABLE.' SET 
'.CASTING_TIME_INDEX_FIELD.' = '.CAST_TIME_FOR_MISC/*.',
'.MANA_COST_FIELD.' = '.MANA_COST_FIELD.' * '.CONJURED_ITEM_BUFFRATE*/.
        ' WHERE id IN ('.implode(',',CONJURE_ITEM_SPELLS).','.GATHER_HERBS_SPELL.');';



    $queries = [
        'Skills are now FREE at trainers.' => 'UPDATE ' . NPC_TRAINER_TEMPLATE_TABLE . ' SET ' . SPELLCOST_FIELD_NAME . ' = 0 WHERE ' . SPELLCOST_FIELD_NAME . ' > 0;',
        'Skills are now FREE at trainers..' => 'UPDATE ' . NPC_TRAINER_TABLE . ' SET ' . SPELLCOST_FIELD_NAME . ' = 0 WHERE ' . SPELLCOST_FIELD_NAME . ' > 0;',
        'Conjuring & Herbing is Faster' => $conjureBetterQuery,
        //'Professions dont need "Mining Picks", etc' => $removeProfessionSupportItemsQuery, //todo: not working
    ];
    executeQueryBatch($queries);
    return true;
}
applyModsToSpells();