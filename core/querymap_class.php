<?php

/**
 * Created by PhpStorm.
 * User: Tolya
 * Date: 22.04.2018
 * Time: 19:24
 */
class QueryMap {

    const DB_PREFIX = 'zf_';

    const SELECT_AUX_PHRASES  = "SELECT subst_name,phrase FROM ".QueryMap::DB_PREFIX."auxiliary_phrases WHERE page_name=? AND lang_id=?;";
    const SELECT_LANGUAGES    = "SELECT id,title FROM ".QueryMap::DB_PREFIX."langs WHERE active=1;";
    const SELECT_PAGE_DATA    = "SELECT * FROM ".QueryMap::DB_PREFIX."pages WHERE page_name=? AND lang_id=? AND active=1;";
    const SELECT_PAGES        = "SELECT id,page_name,announcement FROM ".QueryMap::DB_PREFIX."pages WHERE sort_id > 0 AND lang_id=? AND active=1 ORDER BY sort_id;";
    const SELECT_FAMOUS       = "SELECT * FROM ".QueryMap::DB_PREFIX."famous WHERE lang_id=? ORDER BY RAND() LIMIT ?;";
    const SELECT_FAMOUS_BY_ID = "SELECT * FROM ".QueryMap::DB_PREFIX."famous WHERE id=?";

    const INSERT_ORDER   = "INSERT INTO ".QueryMap::DB_PREFIX."orders (`id`,`name`,`email`,`phone`,`message`,`add_date`) values (NULL,?,?,?,?,UNIX_TIMESTAMP());";
    const INSERT_VISITOR = "INSERT INTO ".QueryMap::DB_PREFIX."stats (`id`,`ip`,`uri`,`agent`,`ref`,`query`,`user`,`geoloc`,`add_date`) values (NULL,?,?,?,?,?,?,?,UNIX_TIMESTAMP());";



}


