<?php
namespace common\modules\user;
use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules(
            [
                '<module:user>/<action:login|logout|signup|request-password-reset|reset-password|verify-email|resend-verification-email>' => 'user/default/<action>',
            ]
        );
    }
}
