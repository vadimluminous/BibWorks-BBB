<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace GPBMetadata\Google\Cloud\Datacatalog\V1;

class Datacatalog
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Common::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\GcsFilesetSpec::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Schema::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Search::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\TableSpec::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Tags::initOnce();
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Timestamps::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac15d0a2d676f6f676c652f636c6f75642f64617461636174616c6f672f76312f64617461636174616c6f672e70726f746f121b676f6f676c652e636c6f75642e64617461636174616c6f672e76311a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a28676f6f676c652f636c6f75642f64617461636174616c6f672f76312f636f6d6d6f6e2e70726f746f1a32676f6f676c652f636c6f75642f64617461636174616c6f672f76312f6763735f66696c657365745f737065632e70726f746f1a28676f6f676c652f636c6f75642f64617461636174616c6f672f76312f736368656d612e70726f746f1a28676f6f676c652f636c6f75642f64617461636174616c6f672f76312f7365617263682e70726f746f1a2c676f6f676c652f636c6f75642f64617461636174616c6f672f76312f7461626c655f737065632e70726f746f1a26676f6f676c652f636c6f75642f64617461636174616c6f672f76312f746167732e70726f746f1a2c676f6f676c652f636c6f75642f64617461636174616c6f672f76312f74696d657374616d70732e70726f746f1a1e676f6f676c652f69616d2f76312f69616d5f706f6c6963792e70726f746f1a1a676f6f676c652f69616d2f76312f706f6c6963792e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f22bd020a14536561726368436174616c6f6752657175657374124b0a0573636f706518062001280b32372e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e536561726368436174616c6f67526571756573742e53636f70654203e0410212120a0571756572791801200128094203e0410212110a09706167655f73697a6518022001280512170a0a706167655f746f6b656e1803200128094203e0410112100a086f726465725f62791805200128091a85010a0553636f706512170a0f696e636c7564655f6f72675f696473180220032809121b0a13696e636c7564655f70726f6a6563745f69647318032003280912230a1b696e636c7564655f6763705f7075626c69635f646174617365747318072001280812210a14726573747269637465645f6c6f636174696f6e731810200328094203e041012288010a15536561726368436174616c6f67526573706f6e736512410a07726573756c747318012003280b32302e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e536561726368436174616c6f67526573756c7412170a0f6e6578745f706167655f746f6b656e18032001280912130a0b756e726561636861626c6518062003280922b3010a17437265617465456e74727947726f757052657175657374123d0a06706172656e74180120012809422de04102fa4127122564617461636174616c6f672e676f6f676c65617069732e636f6d2f456e74727947726f7570121b0a0e656e7472795f67726f75705f69641803200128094203e04102123c0a0b656e7472795f67726f757018022001280b32272e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e456e74727947726f7570228d010a17557064617465456e74727947726f75705265717565737412410a0b656e7472795f67726f757018012001280b32272e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e456e74727947726f75704203e04102122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b2282010a14476574456e74727947726f757052657175657374123b0a046e616d65180120012809422de04102fa41270a2564617461636174616c6f672e676f6f676c65617069732e636f6d2f456e74727947726f7570122d0a09726561645f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b226a0a1744656c657465456e74727947726f757052657175657374123b0a046e616d65180120012809422de04102fa41270a2564617461636174616c6f672e676f6f676c65617069732e636f6d2f456e74727947726f757012120a05666f7263651802200128084203e041012288010a164c697374456e74727947726f75707352657175657374123d0a06706172656e74180120012809422de04102fa41270a2564617461636174616c6f672e676f6f676c65617069732e636f6d2f456e74727947726f757012160a09706167655f73697a651802200128054203e0410112170a0a706167655f746f6b656e1803200128094203e0410122710a174c697374456e74727947726f757073526573706f6e7365123d0a0c656e7472795f67726f75707318012003280b32272e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e456e74727947726f757012170a0f6e6578745f706167655f746f6b656e18022001280922a2010a12437265617465456e74727952657175657374123d0a06706172656e74180120012809422de04102fa41270a2564617461636174616c6f672e676f6f676c65617069732e636f6d2f456e74727947726f757012150a08656e7472795f69641803200128094203e0410212360a05656e74727918022001280b32222e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e456e7472794203e04102227d0a12557064617465456e7472795265717565737412360a05656e74727918012001280b32222e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e456e7472794203e04102122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b224c0a1244656c657465456e7472795265717565737412360a046e616d651801200128094228e04102fa41220a2064617461636174616c6f672e676f6f676c65617069732e636f6d2f456e74727922490a0f476574456e7472795265717565737412360a046e616d651801200128094228e04102fa41220a2064617461636174616c6f672e676f6f676c65617069732e636f6d2f456e74727922560a124c6f6f6b7570456e7472795265717565737412190a0f6c696e6b65645f7265736f75726365180120012809480012160a0c73716c5f7265736f757263651803200128094800420d0a0b7461726765745f6e616d6522e7060a05456e74727912380a046e616d65180120012809422afa41270a2564617461636174616c6f672e676f6f676c65617069732e636f6d2f456e74727947726f757012170a0f6c696e6b65645f7265736f7572636518092001280912360a047479706518022001280e32262e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e456e747279547970654800121d0a13757365725f7370656369666965645f747970651810200128094800124f0a11696e74656772617465645f73797374656d18112001280e322d2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e496e746567726174656453797374656d4203e041034801121f0a15757365725f7370656369666965645f73797374656d181220012809480112470a106763735f66696c657365745f7370656318062001280b322b2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e47637346696c65736574537065634802124d0a1362696771756572795f7461626c655f73706563180c2001280b322e2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e42696751756572795461626c65537065634802125a0a1a62696771756572795f646174655f736861726465645f73706563180f2001280b32342e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e4269675175657279446174655368617264656453706563480212140a0c646973706c61795f6e616d6518032001280912130a0b6465736372697074696f6e18042001280912330a06736368656d6118052001280b32232e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e536368656d61124f0a18736f757263655f73797374656d5f74696d657374616d707318072001280b322d2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e53797374656d54696d657374616d70733a78ea41750a2064617461636174616c6f672e676f6f676c65617069732e636f6d2f456e747279125170726f6a656374732f7b70726f6a6563747d2f6c6f636174696f6e732f7b6c6f636174696f6e7d2f656e74727947726f7570732f7b656e7472795f67726f75707d2f656e74726965732f7b656e7472797d420c0a0a656e7472795f7479706542080a0673797374656d420b0a09747970655f737065632289020a0a456e74727947726f7570120c0a046e616d6518012001280912140a0c646973706c61795f6e616d6518022001280912130a0b6465736372697074696f6e18032001280912530a17646174615f636174616c6f675f74696d657374616d707318042001280b322d2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e53797374656d54696d657374616d70734203e041033a6dea416a0a2564617461636174616c6f672e676f6f676c65617069732e636f6d2f456e74727947726f7570124170726f6a656374732f7b70726f6a6563747d2f6c6f636174696f6e732f7b6c6f636174696f6e7d2f656e74727947726f7570732f7b656e7472795f67726f75707d22bd010a1843726561746554616754656d706c61746552657175657374123e0a06706172656e74180120012809422ee04102fa4128122664617461636174616c6f672e676f6f676c65617069732e636f6d2f54616754656d706c617465121c0a0f7461675f74656d706c6174655f69641803200128094203e0410212430a0c7461675f74656d706c61746518022001280b32282e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e54616754656d706c6174654203e0410222550a1547657454616754656d706c61746552657175657374123c0a046e616d65180120012809422ee04102fa41280a2664617461636174616c6f672e676f6f676c65617069732e636f6d2f54616754656d706c6174652290010a1855706461746554616754656d706c6174655265717565737412430a0c7461675f74656d706c61746518012001280b32282e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e54616754656d706c6174654203e04102122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b226c0a1844656c65746554616754656d706c61746552657175657374123c0a046e616d65180120012809422ee04102fa41280a2664617461636174616c6f672e676f6f676c65617069732e636f6d2f54616754656d706c61746512120a05666f7263651802200128084203e04102227e0a104372656174655461675265717565737412360a06706172656e741801200128094226e04102fa41200a1e64617461636174616c6f672e676f6f676c65617069732e636f6d2f54616712320a0374616718022001280b32202e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e5461674203e0410222770a105570646174655461675265717565737412320a0374616718012001280b32202e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e5461674203e04102122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b22480a1044656c6574655461675265717565737412340a046e616d651801200128094226e04102fa4120121e64617461636174616c6f672e676f6f676c65617069732e636f6d2f54616722d3010a1d43726561746554616754656d706c6174654669656c6452657175657374123e0a06706172656e74180120012809422ee04102fa41280a2664617461636174616c6f672e676f6f676c65617069732e636f6d2f54616754656d706c61746512220a157461675f74656d706c6174655f6669656c645f69641802200128094203e04102124e0a127461675f74656d706c6174655f6669656c6418032001280b322d2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e54616754656d706c6174654669656c644203e0410222e8010a1d55706461746554616754656d706c6174654669656c645265717565737412410a046e616d651801200128094233e04102fa412d0a2b64617461636174616c6f672e676f6f676c65617069732e636f6d2f54616754656d706c6174654669656c64124e0a127461675f74656d706c6174655f6669656c6418022001280b322d2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e54616754656d706c6174654669656c644203e0410212340a0b7570646174655f6d61736b18032001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b4203e04101228a010a1d52656e616d6554616754656d706c6174654669656c645265717565737412410a046e616d651801200128094233e04102fa412d0a2b64617461636174616c6f672e676f6f676c65617069732e636f6d2f54616754656d706c6174654669656c6412260a196e65775f7461675f74656d706c6174655f6669656c645f69641802200128094203e0410222760a1d44656c65746554616754656d706c6174654669656c645265717565737412410a046e616d651801200128094233e04102fa412d0a2b64617461636174616c6f672e676f6f676c65617069732e636f6d2f54616754656d706c6174654669656c6412120a05666f7263651802200128084203e0410222700a0f4c697374546167735265717565737412360a06706172656e741801200128094226e04102fa4120121e64617461636174616c6f672e676f6f676c65617069732e636f6d2f54616712110a09706167655f73697a6518022001280512120a0a706167655f746f6b656e180320012809225b0a104c69737454616773526573706f6e7365122e0a047461677318012003280b32202e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e54616712170a0f6e6578745f706167655f746f6b656e18022001280922a9010a124c697374456e747269657352657175657374123d0a06706172656e74180120012809422de04102fa41270a2564617461636174616c6f672e676f6f676c65617069732e636f6d2f456e74727947726f757012110a09706167655f73697a6518022001280512120a0a706167655f746f6b656e180320012809122d0a09726561645f6d61736b18042001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b22630a134c697374456e7472696573526573706f6e736512330a07656e747269657318012003280b32222e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e456e74727912170a0f6e6578745f706167655f746f6b656e1802200128092a5b0a09456e74727954797065121a0a16454e5452595f545950455f554e535045434946494544100012090a055441424c45100212090a054d4f44454c1005120f0a0b444154415f53545245414d1003120b0a0746494c45534554100432ad2f0a0b44617461436174616c6f6712a3010a0d536561726368436174616c6f6712312e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e536561726368436174616c6f67526571756573741a322e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e536561726368436174616c6f67526573706f6e7365222b82d3e493021722122f76312f636174616c6f673a7365617263683a012ada410b73636f70652c717565727912db010a10437265617465456e74727947726f757012342e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e437265617465456e74727947726f7570526571756573741a272e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e456e74727947726f7570226882d3e493023e222f2f76312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f656e74727947726f7570733a0b656e7472795f67726f7570da4121706172656e742c656e7472795f67726f75705f69642c656e7472795f67726f757012bc010a0d476574456e74727947726f757012312e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e476574456e74727947726f7570526571756573741a272e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e456e74727947726f7570224f82d3e4930231122f2f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a7dda41046e616d65da410e6e616d652c726561645f6d61736b12eb010a10557064617465456e74727947726f757012342e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e557064617465456e74727947726f7570526571756573741a272e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e456e74727947726f7570227882d3e493024a323b2f76312f7b656e7472795f67726f75702e6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a7d3a0b656e7472795f67726f7570da410b656e7472795f67726f7570da4117656e7472795f67726f75702c7570646174655f6d61736b12a0010a1044656c657465456e74727947726f757012342e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e44656c657465456e74727947726f7570526571756573741a162e676f6f676c652e70726f746f6275662e456d707479223e82d3e49302312a2f2f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a7dda41046e616d6512be010a0f4c697374456e74727947726f75707312332e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e4c697374456e74727947726f757073526571756573741a342e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e4c697374456e74727947726f757073526573706f6e7365224082d3e4930231122f2f76312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f656e74727947726f757073da4106706172656e7412c4010a0b437265617465456e747279122f2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e437265617465456e747279526571756573741a222e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e456e747279226082d3e493024222392f76312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a7d2f656e74726965733a05656e747279da4115706172656e742c656e7472795f69642c656e74727912ce010a0b557064617465456e747279122f2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e557064617465456e747279526571756573741a222e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e456e747279226a82d3e4930248323f2f76312f7b656e7472792e6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a2f656e74726965732f2a7d3a05656e747279da4105656e747279da4111656e7472792c7570646174655f6d61736b12a0010a0b44656c657465456e747279122f2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e44656c657465456e747279526571756573741a162e676f6f676c652e70726f746f6275662e456d707479224882d3e493023b2a392f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a2f656e74726965732f2a7dda41046e616d6512a6010a08476574456e747279122c2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e476574456e747279526571756573741a222e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e456e747279224882d3e493023b12392f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a2f656e74726965732f2a7dda41046e616d65127e0a0b4c6f6f6b7570456e747279122f2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e4c6f6f6b7570456e747279526571756573741a222e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e456e747279221a82d3e493021412122f76312f656e74726965733a6c6f6f6b757012bc010a0b4c697374456e7472696573122f2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e4c697374456e7472696573526571756573741a302e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e4c697374456e7472696573526573706f6e7365224a82d3e493023b12392f76312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a7d2f656e7472696573da4106706172656e7412e2010a1143726561746554616754656d706c61746512352e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e43726561746554616754656d706c617465526571756573741a282e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e54616754656d706c617465226c82d3e493024022302f76312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a7d2f74616754656d706c617465733a0c7461675f74656d706c617465da4123706172656e742c7461675f74656d706c6174655f69642c7461675f74656d706c61746512af010a0e47657454616754656d706c61746512322e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e47657454616754656d706c617465526571756573741a282e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e54616754656d706c617465223f82d3e493023212302f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f74616754656d706c617465732f2a7dda41046e616d6512f3010a1155706461746554616754656d706c61746512352e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e55706461746554616754656d706c617465526571756573741a282e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e54616754656d706c617465227d82d3e493024d323d2f76312f7b7461675f74656d706c6174652e6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f74616754656d706c617465732f2a7d3a0c7461675f74656d706c617465da410c7461675f74656d706c617465da41187461675f74656d706c6174652c7570646174655f6d61736b12a9010a1144656c65746554616754656d706c61746512352e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e44656c65746554616754656d706c617465526571756573741a162e676f6f676c652e70726f746f6275662e456d707479224582d3e49302322a302f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f74616754656d706c617465732f2a7dda410a6e616d652c666f726365128d020a1643726561746554616754656d706c6174654669656c64123a2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e43726561746554616754656d706c6174654669656c64526571756573741a2d2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e54616754656d706c6174654669656c6422870182d3e493024f22392f76312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f74616754656d706c617465732f2a7d2f6669656c64733a127461675f74656d706c6174655f6669656c64da412f706172656e742c7461675f74656d706c6174655f6669656c645f69642c7461675f74656d706c6174655f6669656c64129b020a1655706461746554616754656d706c6174654669656c64123a2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e55706461746554616754656d706c6174654669656c64526571756573741a2d2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e54616754656d706c6174654669656c6422950182d3e493024f32392f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f74616754656d706c617465732f2a2f6669656c64732f2a7d3a127461675f74656d706c6174655f6669656c64da41176e616d652c7461675f74656d706c6174655f6669656c64da41236e616d652c7461675f74656d706c6174655f6669656c642c7570646174655f6d61736b12f1010a1652656e616d6554616754656d706c6174654669656c64123a2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e52656e616d6554616754656d706c6174654669656c64526571756573741a2d2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e54616754656d706c6174654669656c64226c82d3e493024522402f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f74616754656d706c617465732f2a2f6669656c64732f2a7d3a72656e616d653a012ada411e6e616d652c6e65775f7461675f74656d706c6174655f6669656c645f696412bc010a1644656c65746554616754656d706c6174654669656c64123a2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e44656c65746554616754656d706c6174654669656c64526571756573741a162e676f6f676c652e70726f746f6275662e456d707479224e82d3e493023b2a392f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f74616754656d706c617465732f2a2f6669656c64732f2a7dda410a6e616d652c666f72636512f9010a09437265617465546167122d2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e437265617465546167526571756573741a202e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e546167229a0182d3e49302860122402f76312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a2f656e74726965732f2a7d2f746167733a037461675a3d22362f76312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a7d2f746167733a03746167da410a706172656e742c746167128c020a09557064617465546167122d2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e557064617465546167526571756573741a202e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e54616722ad0182d3e493028e0132442f76312f7b7461672e6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a2f656e74726965732f2a2f746167732f2a7d3a037461675a41323a2f76312f7b7461672e6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a2f746167732f2a7d3a03746167da4103746167da410f7461672c7570646174655f6d61736b12de010a0944656c657465546167122d2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e44656c657465546167526571756573741a162e676f6f676c652e70726f746f6275662e456d70747922890182d3e493027c2a402f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a2f656e74726965732f2a2f746167732f2a7d5a382a362f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a2f746167732f2a7dda41046e616d6512f5010a084c69737454616773122c2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e4c69737454616773526571756573741a2d2e676f6f676c652e636c6f75642e64617461636174616c6f672e76312e4c69737454616773526573706f6e7365228b0182d3e493027c12402f76312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a2f656e74726965732f2a7d2f746167735a3812362f76312f7b706172656e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a7d2f74616773da4106706172656e7412f2010a0c53657449616d506f6c69637912222e676f6f676c652e69616d2e76312e53657449616d506f6c696379526571756573741a152e676f6f676c652e69616d2e76312e506f6c69637922a60182d3e493028d0122412f76312f7b7265736f757263653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f74616754656d706c617465732f2a7d3a73657449616d506f6c6963793a012a5a4522402f76312f7b7265736f757263653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a7d3a73657449616d506f6c6963793a012ada410f7265736f757263652c706f6c69637912bc020a0c47657449616d506f6c69637912222e676f6f676c652e69616d2e76312e47657449616d506f6c696379526571756573741a152e676f6f676c652e69616d2e76312e506f6c69637922f00182d3e49302de0122412f76312f7b7265736f757263653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f74616754656d706c617465732f2a7d3a67657449616d506f6c6963793a012a5a4522402f76312f7b7265736f757263653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a7d3a67657449616d506f6c6963793a012a5a4f224a2f76312f7b7265736f757263653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a2f656e74726965732f2a7d3a67657449616d506f6c6963793a012ada41087265736f7572636512e3020a125465737449616d5065726d697373696f6e7312282e676f6f676c652e69616d2e76312e5465737449616d5065726d697373696f6e73526571756573741a292e676f6f676c652e69616d2e76312e5465737449616d5065726d697373696f6e73526573706f6e736522f70182d3e49302f00122472f76312f7b7265736f757263653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f74616754656d706c617465732f2a7d3a7465737449616d5065726d697373696f6e733a012a5a4b22462f76312f7b7265736f757263653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a7d3a7465737449616d5065726d697373696f6e733a012a5a5522502f76312f7b7265736f757263653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f656e74727947726f7570732f2a2f656e74726965732f2a7d3a7465737449616d5065726d697373696f6e733a012a1a4eca411a64617461636174616c6f672e676f6f676c65617069732e636f6dd2412e68747470733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f636c6f75642d706c6174666f726d42cb010a1f636f6d2e676f6f676c652e636c6f75642e64617461636174616c6f672e763150015a46676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f636c6f75642f64617461636174616c6f672f76313b64617461636174616c6f67f80101aa021b476f6f676c652e436c6f75642e44617461436174616c6f672e5631ca021b476f6f676c655c436c6f75645c44617461436174616c6f675c5631ea021e476f6f676c653a3a436c6f75643a3a44617461436174616c6f673a3a5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
