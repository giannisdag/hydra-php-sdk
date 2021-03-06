<?php
/**
 * JsonWebKey
 *
 * PHP version 5
 *
 * @category Class
 * @package  Hydra\SDK
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Hydra OAuth2 & OpenID Connect Server
 *
 * Please refer to the user guide for in-depth documentation: https://ory.gitbooks.io/hydra/content/   Hydra offers OAuth 2.0 and OpenID Connect Core 1.0 capabilities as a service. Hydra is different, because it works with any existing authentication infrastructure, not just LDAP or SAML. By implementing a consent app (works with any programming language) you build a bridge between Hydra and your authentication infrastructure. Hydra is able to securely manage JSON Web Keys, and has a sophisticated policy-based access control you can use if you want to. Hydra is suitable for green- (new) and brownfield (existing) projects. If you are not familiar with OAuth 2.0 and are working on a greenfield project, we recommend evaluating if OAuth 2.0 really serves your purpose. Knowledge of OAuth 2.0 is imperative in understanding what Hydra does and how it works.   The official repository is located at https://github.com/ory/hydra   ### Important REST API Documentation Notes  The swagger generator used to create this documentation does currently not support example responses. To see request and response payloads click on **\"Show JSON schema\"**: ![Enable JSON Schema on Apiary](https://storage.googleapis.com/ory.am/hydra/json-schema.png)   The API documentation always refers to the latest tagged version of ORY Hydra. For previous API documentations, please refer to https://github.com/ory/hydra/blob/<tag-id>/docs/api.swagger.yaml - for example:  0.9.13: https://github.com/ory/hydra/blob/v0.9.13/docs/api.swagger.yaml 0.8.1: https://github.com/ory/hydra/blob/v0.8.1/docs/api.swagger.yaml
 *
 * OpenAPI spec version: Latest
 * Contact: hi@ory.am
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Hydra\SDK\Model;

use \ArrayAccess;

/**
 * JsonWebKey Class Doc Comment
 *
 * @category    Class
 * @package     Hydra\SDK
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class JsonWebKey implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'jsonWebKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alg' => 'string',
        'crv' => 'string',
        'd' => 'string',
        'dp' => 'string',
        'dq' => 'string',
        'e' => 'string',
        'k' => 'string',
        'kid' => 'string',
        'kty' => 'string',
        'n' => 'string',
        'p' => 'string',
        'q' => 'string',
        'qi' => 'string',
        'use' => 'string',
        'x' => 'string',
        'x5c' => 'string[]',
        'y' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alg' => null,
        'crv' => null,
        'd' => null,
        'dp' => null,
        'dq' => null,
        'e' => null,
        'k' => null,
        'kid' => null,
        'kty' => null,
        'n' => null,
        'p' => null,
        'q' => null,
        'qi' => null,
        'use' => null,
        'x' => null,
        'x5c' => null,
        'y' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'alg' => 'alg',
        'crv' => 'crv',
        'd' => 'd',
        'dp' => 'dp',
        'dq' => 'dq',
        'e' => 'e',
        'k' => 'k',
        'kid' => 'kid',
        'kty' => 'kty',
        'n' => 'n',
        'p' => 'p',
        'q' => 'q',
        'qi' => 'qi',
        'use' => 'use',
        'x' => 'x',
        'x5c' => 'x5c',
        'y' => 'y'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'alg' => 'setAlg',
        'crv' => 'setCrv',
        'd' => 'setD',
        'dp' => 'setDp',
        'dq' => 'setDq',
        'e' => 'setE',
        'k' => 'setK',
        'kid' => 'setKid',
        'kty' => 'setKty',
        'n' => 'setN',
        'p' => 'setP',
        'q' => 'setQ',
        'qi' => 'setQi',
        'use' => 'setUse',
        'x' => 'setX',
        'x5c' => 'setX5c',
        'y' => 'setY'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'alg' => 'getAlg',
        'crv' => 'getCrv',
        'd' => 'getD',
        'dp' => 'getDp',
        'dq' => 'getDq',
        'e' => 'getE',
        'k' => 'getK',
        'kid' => 'getKid',
        'kty' => 'getKty',
        'n' => 'getN',
        'p' => 'getP',
        'q' => 'getQ',
        'qi' => 'getQi',
        'use' => 'getUse',
        'x' => 'getX',
        'x5c' => 'getX5c',
        'y' => 'getY'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['alg'] = isset($data['alg']) ? $data['alg'] : null;
        $this->container['crv'] = isset($data['crv']) ? $data['crv'] : null;
        $this->container['d'] = isset($data['d']) ? $data['d'] : null;
        $this->container['dp'] = isset($data['dp']) ? $data['dp'] : null;
        $this->container['dq'] = isset($data['dq']) ? $data['dq'] : null;
        $this->container['e'] = isset($data['e']) ? $data['e'] : null;
        $this->container['k'] = isset($data['k']) ? $data['k'] : null;
        $this->container['kid'] = isset($data['kid']) ? $data['kid'] : null;
        $this->container['kty'] = isset($data['kty']) ? $data['kty'] : null;
        $this->container['n'] = isset($data['n']) ? $data['n'] : null;
        $this->container['p'] = isset($data['p']) ? $data['p'] : null;
        $this->container['q'] = isset($data['q']) ? $data['q'] : null;
        $this->container['qi'] = isset($data['qi']) ? $data['qi'] : null;
        $this->container['use'] = isset($data['use']) ? $data['use'] : null;
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['x5c'] = isset($data['x5c']) ? $data['x5c'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets alg
     * @return string
     */
    public function getAlg()
    {
        return $this->container['alg'];
    }

    /**
     * Sets alg
     * @param string $alg The \"alg\" (algorithm) parameter identifies the algorithm intended for use with the key.  The values used should either be registered in the IANA \"JSON Web Signature and Encryption Algorithms\" registry established by [JWA] or be a value that contains a Collision- Resistant Name.
     * @return $this
     */
    public function setAlg($alg)
    {
        $this->container['alg'] = $alg;

        return $this;
    }

    /**
     * Gets crv
     * @return string
     */
    public function getCrv()
    {
        return $this->container['crv'];
    }

    /**
     * Sets crv
     * @param string $crv
     * @return $this
     */
    public function setCrv($crv)
    {
        $this->container['crv'] = $crv;

        return $this;
    }

    /**
     * Gets d
     * @return string
     */
    public function getD()
    {
        return $this->container['d'];
    }

    /**
     * Sets d
     * @param string $d
     * @return $this
     */
    public function setD($d)
    {
        $this->container['d'] = $d;

        return $this;
    }

    /**
     * Gets dp
     * @return string
     */
    public function getDp()
    {
        return $this->container['dp'];
    }

    /**
     * Sets dp
     * @param string $dp
     * @return $this
     */
    public function setDp($dp)
    {
        $this->container['dp'] = $dp;

        return $this;
    }

    /**
     * Gets dq
     * @return string
     */
    public function getDq()
    {
        return $this->container['dq'];
    }

    /**
     * Sets dq
     * @param string $dq
     * @return $this
     */
    public function setDq($dq)
    {
        $this->container['dq'] = $dq;

        return $this;
    }

    /**
     * Gets e
     * @return string
     */
    public function getE()
    {
        return $this->container['e'];
    }

    /**
     * Sets e
     * @param string $e
     * @return $this
     */
    public function setE($e)
    {
        $this->container['e'] = $e;

        return $this;
    }

    /**
     * Gets k
     * @return string
     */
    public function getK()
    {
        return $this->container['k'];
    }

    /**
     * Sets k
     * @param string $k
     * @return $this
     */
    public function setK($k)
    {
        $this->container['k'] = $k;

        return $this;
    }

    /**
     * Gets kid
     * @return string
     */
    public function getKid()
    {
        return $this->container['kid'];
    }

    /**
     * Sets kid
     * @param string $kid The \"kid\" (key ID) parameter is used to match a specific key.  This is used, for instance, to choose among a set of keys within a JWK Set during key rollover.  The structure of the \"kid\" value is unspecified.  When \"kid\" values are used within a JWK Set, different keys within the JWK Set SHOULD use distinct \"kid\" values.  (One example in which different keys might use the same \"kid\" value is if they have different \"kty\" (key type) values but are considered to be equivalent alternatives by the application using them.)  The \"kid\" value is a case-sensitive string.
     * @return $this
     */
    public function setKid($kid)
    {
        $this->container['kid'] = $kid;

        return $this;
    }

    /**
     * Gets kty
     * @return string
     */
    public function getKty()
    {
        return $this->container['kty'];
    }

    /**
     * Sets kty
     * @param string $kty The \"kty\" (key type) parameter identifies the cryptographic algorithm family used with the key, such as \"RSA\" or \"EC\". \"kty\" values should either be registered in the IANA \"JSON Web Key Types\" registry established by [JWA] or be a value that contains a Collision- Resistant Name.  The \"kty\" value is a case-sensitive string.
     * @return $this
     */
    public function setKty($kty)
    {
        $this->container['kty'] = $kty;

        return $this;
    }

    /**
     * Gets n
     * @return string
     */
    public function getN()
    {
        return $this->container['n'];
    }

    /**
     * Sets n
     * @param string $n
     * @return $this
     */
    public function setN($n)
    {
        $this->container['n'] = $n;

        return $this;
    }

    /**
     * Gets p
     * @return string
     */
    public function getP()
    {
        return $this->container['p'];
    }

    /**
     * Sets p
     * @param string $p
     * @return $this
     */
    public function setP($p)
    {
        $this->container['p'] = $p;

        return $this;
    }

    /**
     * Gets q
     * @return string
     */
    public function getQ()
    {
        return $this->container['q'];
    }

    /**
     * Sets q
     * @param string $q
     * @return $this
     */
    public function setQ($q)
    {
        $this->container['q'] = $q;

        return $this;
    }

    /**
     * Gets qi
     * @return string
     */
    public function getQi()
    {
        return $this->container['qi'];
    }

    /**
     * Sets qi
     * @param string $qi
     * @return $this
     */
    public function setQi($qi)
    {
        $this->container['qi'] = $qi;

        return $this;
    }

    /**
     * Gets use
     * @return string
     */
    public function getUse()
    {
        return $this->container['use'];
    }

    /**
     * Sets use
     * @param string $use The \"use\" (public key use) parameter identifies the intended use of the public key. The \"use\" parameter is employed to indicate whether a public key is used for encrypting data or verifying the signature on data. Values are commonly \"sig\" (signature) or \"enc\" (encryption).
     * @return $this
     */
    public function setUse($use)
    {
        $this->container['use'] = $use;

        return $this;
    }

    /**
     * Gets x
     * @return string
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     * @param string $x
     * @return $this
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets x5c
     * @return string[]
     */
    public function getX5c()
    {
        return $this->container['x5c'];
    }

    /**
     * Sets x5c
     * @param string[] $x5c The \"x5c\" (X.509 certificate chain) parameter contains a chain of one or more PKIX certificates [RFC5280].  The certificate chain is represented as a JSON array of certificate value strings.  Each string in the array is a base64-encoded (Section 4 of [RFC4648] -- not base64url-encoded) DER [ITU.X690.1994] PKIX certificate value. The PKIX certificate containing the key value MUST be the first certificate.
     * @return $this
     */
    public function setX5c($x5c)
    {
        $this->container['x5c'] = $x5c;

        return $this;
    }

    /**
     * Gets y
     * @return string
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     * @param string $y
     * @return $this
     */
    public function setY($y)
    {
        $this->container['y'] = $y;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Hydra\SDK\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Hydra\SDK\ObjectSerializer::sanitizeForSerialization($this));
    }
}


