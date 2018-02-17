<?php
/**
 *  Copyright 2014 Taxamo, Ltd.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * $model.description$
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */
class Evidence_schema {

  static $swaggerTypes = array(
      'used' => 'bool',
      'resolved_country_code' => 'string',
      'evidence_type' => 'string',
      'evidence_value' => 'string'

    );

  /**
  * If the evidence was used to match the actual country.
  */
  public $used; // bool
  /**
  * Country code that was resolved using this evidence.
  */
  public $resolved_country_code; // string
  /**
  * Type of evidence.
  */
  public $evidence_type; // string
  /**
  * Value provided as evidence - for example IP address.
  */
  public $evidence_value; // string
  }
