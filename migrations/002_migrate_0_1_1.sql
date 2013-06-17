ALTER TABLE `nos_rwblog_tag_post` DROP INDEX `post_id`;
ALTER TABLE `nos_rwblog_tag_post` ADD PRIMARY KEY ( `post_id` , `tag_id` );