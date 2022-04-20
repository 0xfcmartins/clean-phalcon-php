<?php /*
 *  Copyright © 2022. Porto Editora S.A.
 *  All Rights Reserved. This software is the proprietary information of Porto Editora Group.
 */

/** @noinspection SpellCheckingInspection */

declare(strict_types=1);

namespace units;

use Exception;
use PHPUnit\Framework\TestCase;
use Sipe\Utils\Encryption;

/**
 *
 *
 * @author Francisco Martins {@link <mailto:fcmartins@portoeditora.pt>}
 * @version 1.000.000, 2022-01-20 20:56
 */
class EncryptionTests extends TestCase
{

    private const TEST_CASE = "This is a test phrase example!";
    private const TEST_HASH = "ZVhaeU1GWmxPWEU0VFZGWWNFRkJPR042WW5KTFVYZFJlazFSSzNWU2RrWkxiakZvVm10Q2JWTm5hejA9OnI0MDha"
    . "QjVaZnFuc0FXQmlxSGhDRnc9PQ";

    public function testEncryption(): void
    {
        try {
            $encrypted = Encryption::encrypt(self::TEST_CASE);
            $this->assertNotEquals(self::TEST_CASE, $encrypted, "The decoded text dont match the initial test case!");
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }
    }

    public function testDecoding(): void
    {
        try {
            $decoded = Encryption::decrypt(self::TEST_HASH);
            $this->assertEquals(self::TEST_CASE, $decoded, "The decoded text dont match the initial test case!");
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }
    }

    public function testEncryptionAndSequentialDescription(): void
    {
        try {
            $encrypted = Encryption::encrypt(self::TEST_CASE);
            $decoded = Encryption::decrypt($encrypted);
            $this->assertEquals(self::TEST_CASE, $decoded, "The decoded text dont match the initial test case!");
        } catch (Exception $e) {
            $this->fail($e->getMessage());
        }
    }

}