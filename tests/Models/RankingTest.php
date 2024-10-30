<?php

namespace SAMSPlugin\Tests\Models;

use PHPUnit\Framework\TestCase;
use SAMSPlugin\Models\Ranking;

final class RankingTest extends TestCase {

    public function testCreateAndFillTable() {
        $tableXml = new SimpleXmlElement($this->validXml);
        $table = new Ranking($tableXml);

        $this->assertEquals(2, count($table->tableEntries));
        $this->assertEquals("VV Humann Essen", $table->tableEntries[0]->teamName);
        $this->assertEquals("VTV Freier Grund", $table->tableEntries[1]->teamName);
    }

    private $validXml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<rankings>
<matchSeries>wird ignoriert</matchSeries>
<ranking>
<team>
<id>21416917</id>
<uuid>d55a7cf8-d90a-4154-9853-53ba9c51ecc3</uuid>
<name>VV Humann Essen</name>
<shortName>VVH Essen</shortName>
<clubCode>VVHE</clubCode>
<club>
<name>VV Humann Essen</name>
<shortName>VVHE</shortName>
</club>
</team>
<place>1</place>
<matchesPlayed>17</matchesPlayed>
<wins>0</wins>
<losses>0</losses>
<points>20</points>
<setPoints>0:0</setPoints>
<setWinScore>12</setWinScore>
<setLoseScore>13</setLoseScore>
<setPointDifference>0</setPointDifference>
<setQuotient>∞</setQuotient>
<ballPoints>0:0</ballPoints>
<ballWinScore>30</ballWinScore>
<ballLoseScore>20</ballLoseScore>
<ballPointDifference>0</ballPointDifference>
<ballQuotient>∞</ballQuotient>
<resultTypes>
<matchResult>
<result>3:0</result>
<count>0</count>
</matchResult>
<matchResult>
<result>3:1</result>
<count>0</count>
</matchResult>
<matchResult>
<result>3:2</result>
<count>0</count>
</matchResult>
<matchResult>
<result>2:3</result>
<count>0</count>
</matchResult>
<matchResult>
<result>1:3</result>
<count>0</count>
</matchResult>
<matchResult>
<result>0:3</result>
<count>0</count>
</matchResult>
</resultTypes>
</ranking>
<ranking>
<team>
<id>21979472</id>
<uuid>1426f6ee-6a7a-48b6-9bf8-184c6fe4851d</uuid>
<name>VTV Freier Grund</name>
<shortName>Freier Grund</shortName>
<clubCode>VTV</clubCode>
<club>
<name>VTV Freier Grund</name>
<shortName/>
</club>
</team>
<place>2</place>
<matchesPlayed>4</matchesPlayed>
<wins>0</wins>
<losses>0</losses>
<points>9</points>
<setPoints>0:0</setPoints>
<setWinScore>78</setWinScore>
<setLoseScore>17</setLoseScore>
<setPointDifference>0</setPointDifference>
<setQuotient>∞</setQuotient>
<ballPoints>0:0</ballPoints>
<ballWinScore>11</ballWinScore>
<ballLoseScore>22</ballLoseScore>
<ballPointDifference>0</ballPointDifference>
<ballQuotient>∞</ballQuotient>
<resultTypes>
<matchResult>
<result>3:0</result>
<count>0</count>
</matchResult>
<matchResult>
<result>3:1</result>
<count>0</count>
</matchResult>
<matchResult>
<result>3:2</result>
<count>0</count>
</matchResult>
<matchResult>
<result>2:3</result>
<count>0</count>
</matchResult>
<matchResult>
<result>1:3</result>
<count>0</count>
</matchResult>
<matchResult>
<result>0:3</result>
<count>0</count>
</matchResult>
</resultTypes>
</ranking>
</rankings>
XML;
}

?>