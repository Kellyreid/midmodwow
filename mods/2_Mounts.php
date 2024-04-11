<?php

function applyModsToMounts()
{
    say("\n\nExecuting Mod: Mounts for Everyone\n", 1);
    $queries = [
        'Setting Up Mount Mod Configs.' => 'DROP TABLE if exists ' . MOUNT_ITEM_IDS_TABLE . ';',
        'Setting Up Mount Mod Configs..' => 'CREATE TABLE ' . MOUNT_ITEM_IDS_TABLE . ' AS ( SELECT ' . SPELL_NAME_FIELD_NAME . ', ' . ID_FIELD_NAME . ' FROM ' . SPELL_TEMPLATE_TABLE . ' WHERE ' . ID_FIELD_NAME . ' IN  (SELECT ' . SPELLID_ONE_FIELD . ' FROM ' . ITEM_TEMPLATE_TABLE . ' WHERE ' . SPELLCATEGORY_ONE_FIELD . ' = ' . MOUNT_SPELL_CATEGORY . '));',
        'Mount casting time now Instant.' => 'UPDATE ' . SPELL_TEMPLATE_TABLE . ' SET ' . CASTING_TIME_INDEX_FIELD . ' = 1 WHERE ' . ID_FIELD_NAME . ' IN (SELECT ' . ID_FIELD_NAME . ' FROM ' . MOUNT_ITEM_IDS_TABLE . ');',
        'Requirements Removed.' => 'UPDATE ' . ITEM_TEMPLATE_TABLE . ' SET ' . REQUIRED_LEVEL_FIELD . ' = 1 WHERE ' . SPELLCATEGORY_ONE_FIELD . '= ' . MOUNT_SPELL_CATEGORY . ';',
        'Requirements Removed..' => 'UPDATE ' . ITEM_TEMPLATE_TABLE . ' SET ' . REQUIRED_SKILL_FIELD . ' = 0 WHERE ' . SPELLCATEGORY_ONE_FIELD . '= ' . MOUNT_SPELL_CATEGORY . ';',
        'Requirements Removed...' => 'UPDATE ' . ITEM_TEMPLATE_TABLE . ' SET ' . REQUIRED_SKILL_RANK_FIELD . ' = 0 WHERE ' . SPELLCATEGORY_ONE_FIELD . '= ' . MOUNT_SPELL_CATEGORY . ';',
        'Faction/Honor/Rep Not Required.' => 'UPDATE ' . ITEM_TEMPLATE_TABLE . ' SET ' . REQUIRED_HONOR_RANK_FIELD . ' = 0 WHERE ' . SPELLCATEGORY_ONE_FIELD . '= ' . MOUNT_SPELL_CATEGORY . ';',
        'Faction/Honor/Rep Not Required..' => 'UPDATE ' . ITEM_TEMPLATE_TABLE . ' SET ' . REQUIRED_CITY_RANK_FIELD . ' = 0 WHERE ' . SPELLCATEGORY_ONE_FIELD . '= ' . MOUNT_SPELL_CATEGORY . ';',
        'Faction/Honor/Rep Not Required...' => 'UPDATE ' . ITEM_TEMPLATE_TABLE . ' SET ' . REQUIRED_REPUTATION_RANK_FIELD . ' = 0 WHERE ' . SPELLCATEGORY_ONE_FIELD . '= ' . MOUNT_SPELL_CATEGORY . ';',
        'Faction/Honor/Rep Not Required....' => 'UPDATE ' . ITEM_TEMPLATE_TABLE . ' SET ' . REQUIRED_REPUTATION_FACTION_FIELD . ' = 0 WHERE ' . SPELLCATEGORY_ONE_FIELD . '= ' . MOUNT_SPELL_CATEGORY . ';',
    ];
    executeQueryBatch($queries);
    return true;
}
applyModsToMounts();