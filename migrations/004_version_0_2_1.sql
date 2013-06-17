ALTER TABLE `nos_rwblog_post`
  ADD `post_publication_start` DATETIME NULL DEFAULT NULL AFTER `post_published` ,
  ADD `post_publication_end` DATETIME NULL DEFAULT NULL AFTER `post_publication_start`;
