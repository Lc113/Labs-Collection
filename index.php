<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber-Range Index</title>
</head>
<style>
    body{
        overflow: hidden;
	    align-items: center;
	    background-color: var(--white);
	    background-image: linear-gradient(125deg,#27ae5f,#2980b9,#8e44ad);
	    background-attachment: fixed;
	    background-position: center;
	    background-repeat: no-repeat;
	    background-size: cover;
	    display: grid;
	    height: 100vh;
	    place-items: center;
        background-size: 400% 400%;
        animation: gradient 15s ease-in-out infinite;
        color: white;
		align-content: center;
    }
	@keyframes gradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }
	a{
		text-decoration: none;
        color: inherit;
	}
	.page {
		font-size:18px;
		height: 50px;
		line-height: 50px;
		width: 100%;
		padding-left: 8px;
		transition: 0.5s;
		border-radius: 6px;
	}
	.page:hover{
		background: rgba(255, 255, 255, 0.1);
	}
	.contain{
		background: rgba(0, 0, 0, 0.8);
		padding: 8px 24px 24px 24px;
		border-radius: 20px;
	}
</style>
<body>

<?php
// 获取当前路径
$currentPath = __DIR__;

// 扫描当前路径下的所有文件和文件夹
$items = scandir($currentPath);

// 过滤出文件夹名称
$folders = array_filter($items, function ($item) use ($currentPath) {
    // 排除当前目录（.）和上级目录（..）
    return is_dir($currentPath . DIRECTORY_SEPARATOR . $item) && $item != '.' && $item != '..' && $item != 'error';
});
echo "<div class='contain'>";
echo "<h1 style='color:rgb(255,255,255)'>Cyber-Range Index</h1>";
// 输出文件夹名称作为相对路径超链接
foreach ($folders as $folder) {
    // 构建相对路径
    $relativePath = $folder;
    // 输出超链接
    echo "<a href=\"$relativePath\"><div class='page'>$folder</div></a>";
}
echo "</div>";
?>



</body>
</html>
