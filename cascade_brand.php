<?php
$constraint= "ALTER TABLE brand ADD CONSTRAINT fk_brand_id FOREIGN KEY (brand_id) REFERENCES brand(id)
    ON DELETE CASCADE
    ON UPDATE CASCADE;
