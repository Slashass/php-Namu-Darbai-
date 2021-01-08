<?php

class App
{

    public static function setSession()
    {
        if (!isset($_SESSION['darzoves'])) {
            $_SESSION['darzoves'] = [];
            $_SESSION['darzoviu id'] = 0;
        }
    }

    public static function save($value, $index)
    {
        $value = serialize($value);
        $_SESSION['darzoves'][$index] = $value;
    }


    public static function plantAgurkas()
    {
        $agurkasObj = new Agurkas($_SESSION['darzoviu id']);
        $_SESSION['darzoviu id']++;
        $_SESSION['darzoves'][] = serialize($agurkasObj);
    }

    public static function plantPaprika()
    {
        $zirnisObj = new Paprika($_SESSION['darzoviu id']);
        $_SESSION['darzoviu id']++;
        $_SESSION['darzoves'][] = serialize($zirnisObj);
    }

    public static function remove()
    {
        foreach ($_SESSION['darzoves'] as $index => $value) {
            $value = unserialize($value);
            if ($_POST['israuti'] == $value->id) {
                unset($_SESSION['darzoves'][$index]);
            }
        }
    }

    public static function grow()
    {
        foreach ($_SESSION['darzoves'] as $index => $value) {
            $value = unserialize($value);
            $value->augintiDarzove($_POST['kiekis'][$value->id]);
            self::save($value, $index);
        }
    }

    public static function harvest()
    {
        foreach ($_SESSION['darzoves'] as $index => $value) {
            $value = unserialize($value);
            if ($_POST['skinti'] == $value->id) {

                $kiek = (int) $_POST['kiek'];
                if ($value->count < $kiek || $kiek < 0) {
                    $_SESSION['error'] = 1;
                    break;
                }
                $value->count -= $kiek;
                self::save($value, $index);
            }
        }
    }

    public static function harvestOne()
    {
        foreach ($_SESSION['darzoves'] as $index => $value) {
            $value = unserialize($value);
            if ($_POST['skinti-visus'] == $value->id) {
                $value->nuskintiVisus();
                self::save($value, $index);
            }
        }
    }

    public static function harvestAll()
    {
        foreach ($_SESSION['darzoves'] as $index => $value) {
            $value = unserialize($value);
            $value->nuskintiVisus();
            self::save($value, $index);
        }
    }

    public static function redirect($fileName)
    {
        header("Location: http://localhost/1stlesson/folder/agurkai/$fileName.php");
        exit;
    }
}