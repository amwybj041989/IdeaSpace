<?php

namespace App\Content; 

use App\Field;

class FieldTypeAudio {


    private $template = 'admin.space.content.field_audio';
    private $storage_path;


    /**
     * Create a new field type instance.
     *
     * @param String $storage_path
     *
     * @return void
     */
    public function __construct($storage_path) {

        $this->storagePath = $storage_path;
    }

  
    /**
     * Process.
     *
     * @param String $field_id
     * @param Array $properties
     *
     * @return Array
     */
    public function process($field_id, $properties) {

        $field = [];
        $field = $properties;
        $field['#template'] = $this->template;

        return $field;
    }


    /**
     * Get validation rules and messages.
     *
     * @param Array $validation_rules_messages
     * @param String $field_id
     * @param Array $properties
     *
     * @return Array
     */
    public function get_validation_rules_messages($validation_rules_messages, $field_id, $properties) {

        return $validation_rules_messages;
    }


    /**
     * Create entry.
     *
     * @param String $content_id
     * @param String $field_id
     * @param String $type
     * @param String $value
     *
     * @return True
     */
    public function create($content_id, $field_id, $type, $value) {

        $field = new Field;
        $field->content_id = $content_id;
        $field->key = $field_id;
        $field->type = $type;
        $field->value = $value;
        $field->save();

        return true;
    }


}
