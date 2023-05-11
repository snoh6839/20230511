<?php
// 토큰 삭제를 위해 쿠키에 저장된 토큰값을 가져옵니다.
$token = $_COOKIE["token"];


try {
    // 쿠키에서 토큰 삭제
    unset($_COOKIE["token"]);
    setcookie("token", null, -1, "/");
    // 세션 변수 삭제 
    unset($_SESSION['mem_ID']);
    // 세션 파괴
    session_destroy();
    // 로그아웃 성공 메시지 출력
?>
    <div class='success'>You have successfully logged out.</div>
    <a href='/login/login.php'>Return to Login</a>
<?php
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>