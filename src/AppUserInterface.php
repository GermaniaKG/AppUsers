<?php
namespace Germania\AppUsers;

use Germania\Users\UserInterface;
use Germania\Authentication\AuthUserInterface;
use Germania\PermanentAuth\AuthUserInterface as PermanentAuthUserInterface;

interface AppUserInterface extends UserInterface, AuthUserInterface, PermanentAuthUserInterface
{

}
