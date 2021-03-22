<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"/>
	<title>Cogumelo do Mario</title>
	<style>
body{background-color: white;}

#quadro{
	color: white;
	text-align: center;
	width: 240px;
	background-color: white;
	position: absolute;}

#quadro div{
	width: 15px;
	height: 15px;
	position: relative;
	float: left;}

#h2, #i2, #h3, #i3, #d4, #g4, #h4, #i4, #j4, #m4,
#d5, #e5, #f5, #g5, #h5, #i5, #j5, #k5, #l5, #m5,
#e6, #f6, #k6, #l6, #e7, #l7, #e8, #l8, #d9, #e9, 
#l9, #m9, #b10, #c10, #d10, #e10, #f10, #k10, #l10,
#m10, #n10, #o10, #b11, #c11, #n11, #o11{
	background-color: <?php echo isset($_GET["cor"])?$_GET["cor"]:"#0A08";?>;}

#f1, #g1, #h1, #i1, #j1, #k1, #d2, #e2, #f2, #k2,
#l2, #m2, #c3, #d3, #m3, #n3, #b4, #c4, #n4, #o4,
#b5, #o5, #a6, #b6, #o6, #p6, #a7, #p7, #a8, #p8,
#a9, #p9, #a10, #p10, #a11, #d11, #e11, #f11, #g11,
#h11, #i11, #j11, #k11, #l11, #m11, #p11, #a12, #b12,
#c12, #d12, #g12, #j12, #m12, #n12, #o12, #p12, #b13,
#c13, #g13, #j13, #n13, #o13, #c14, #n14, #c15, #d15,
#m15, #n15, #d16, #e16, #f16, #g16, #h16, #i16, #j16,
#k16, #l16, #m16{
	background-color: #000;}

#a1, #b1, #c1, #d1, #e1, #l1, #m1, #n1, #o1, #p1, 
#a2, #b2, #c2, #n2, #o2, #p2, #a3, #b3, #o3, #p3,
#a4, #p4, #a5, #p5, #a13, #p13, #a14, #b14, #o14, #p14,
#a15, #b15, #o15, #p15, #a16, #b16, #c16, #n16, #o16, #p16{
	background-color: white;}
	</style>
</head>
<body>
<p>Escolha uma cor e depois clique em "mudar cor"</p>
<form method="gerar">
	<label for="icor">Cor: </label>
	<input type="color" name="cor" id="icor"/>
	<input type="submit" value="mudar cor"/>
</form></br>
<?php
$chuchu = isset($_GET["cor"])?$_GET["cor"]:"";
?>

<div id="quadro">
		<!--linha1-->
		<div id="a1"></div>
		<div id="b1"></div>
		<div id="c1"></div>
		<div id="d1"></div>
		<div id="e1"></div>
		<div id="f1"></div>
		<div id="g1"></div>
		<div id="h1"></div>
		<div id="i1"></div>
		<div id="j1"></div>
		<div id="k1"></div>
		<div id="l1"></div>
		<div id="m1"></div>
		<div id="n1"></div>
		<div id="o1"></div>
		<div id="p1"></div>
		<!--linha2-->
		<div id="a2"></div>
		<div id="b2"></div>
		<div id="c2"></div>
		<div id="d2"></div>
		<div id="e2"></div>
		<div id="f2"></div>
		<div id="g2"></div>
		<div id="h2"></div>
		<div id="i2"></div>
		<div id="j2"></div>
		<div id="k2"></div>
		<div id="l2"></div>
		<div id="m2"></div>
		<div id="n2"></div>
		<div id="o2"></div>
		<div id="p2"></div>
		<!--linha3-->
		<div id="a3"></div>
		<div id="b3"></div>
		<div id="c3"></div>
		<div id="d3"></div>
		<div id="e3"></div>
		<div id="f3"></div>
		<div id="g3"></div>
		<div id="h3"></div>
		<div id="i3"></div>
		<div id="j3"></div>
		<div id="k3"></div>
		<div id="l3"></div>
		<div id="m3"></div>
		<div id="n3"></div>
		<div id="o3"></div>
		<div id="p3"></div>
		<!--linha4-->
		<div id="a4"></div>
		<div id="b4"></div>
		<div id="c4"></div>
		<div id="d4"></div>
		<div id="e4"></div>
		<div id="f4"></div>
		<div id="g4"></div>
		<div id="h4"></div>
		<div id="i4"></div>
		<div id="j4"></div>
		<div id="k4"></div>
		<div id="l4"></div>
		<div id="m4"></div>
		<div id="n4"></div>
		<div id="o4"></div>
		<div id="p4"></div>
		<!--linha5-->
		<div id="a5"></div>
		<div id="b5"></div>
		<div id="c5"></div>
		<div id="d5"></div>
		<div id="e5"></div>
		<div id="f5"></div>
		<div id="g5"></div>
		<div id="h5"></div>
		<div id="i5"></div>
		<div id="j5"></div>
		<div id="k5"></div>
		<div id="l5"></div>
		<div id="m5"></div>
		<div id="n5"></div>
		<div id="o5"></div>
		<div id="p5"></div>
		<!--linha6-->
		<div id="a6"></div>
		<div id="b6"></div>
		<div id="c6"></div>
		<div id="d6"></div>
		<div id="e6"></div>
		<div id="f6"></div>
		<div id="g6"></div>
		<div id="h6"></div>
		<div id="i6"></div>
		<div id="j6"></div>
		<div id="k6"></div>
		<div id="l6"></div>
		<div id="m6"></div>
		<div id="n6"></div>
		<div id="o6"></div>
		<div id="p6"></div>
		<!--linha7-->
		<div id="a7"></div>
		<div id="b7"></div>
		<div id="c7"></div>
		<div id="d7"></div>
		<div id="e7"></div>
		<div id="f7"></div>
		<div id="g7"></div>
		<div id="h7"></div>
		<div id="i7"></div>
		<div id="j7"></div>
		<div id="k7"></div>
		<div id="l7"></div>
		<div id="m7"></div>
		<div id="n7"></div>
		<div id="o7"></div>
		<div id="p7"></div>
		<!--linha8-->
		<div id="a8"></div>
		<div id="b8"></div>
		<div id="c8"></div>
		<div id="d8"></div>
		<div id="e8"></div>
		<div id="f8"></div>
		<div id="g8"></div>
		<div id="h8"></div>
		<div id="i8"></div>
		<div id="j8"></div>
		<div id="k8"></div>
		<div id="l8"></div>
		<div id="m8"></div>
		<div id="n8"></div>
		<div id="o8"></div>
		<div id="p8"></div>
		<!--linha9-->
		<div id="a9"></div>
		<div id="b9"></div>
		<div id="c9"></div>
		<div id="d9"></div>
		<div id="e9"></div>
		<div id="f9"></div>
		<div id="g9"></div>
		<div id="h9"></div>
		<div id="i9"></div>
		<div id="j9"></div>
		<div id="k9"></div>
		<div id="l9"></div>
		<div id="m9"></div>
		<div id="n9"></div>
		<div id="o9"></div>
		<div id="p9"></div>
		<!--linha10-->
		<div id="a10"></div>
		<div id="b10"></div>
		<div id="c10"></div>
		<div id="d10"></div>
		<div id="e10"></div>
		<div id="f10"></div>
		<div id="g10"></div>
		<div id="h10"></div>
		<div id="i10"></div>
		<div id="j10"></div>
		<div id="k10"></div>
		<div id="l10"></div>
		<div id="m10"></div>
		<div id="n10"></div>
		<div id="o10"></div>
		<div id="p10"></div>
		<!--linha11-->
		<div id="a11"></div>
		<div id="b11"></div>
		<div id="c11"></div>
		<div id="d11"></div>
		<div id="e11"></div>
		<div id="f11"></div>
		<div id="g11"></div>
		<div id="h11"></div>
		<div id="i11"></div>
		<div id="j11"></div>
		<div id="k11"></div>
		<div id="l11"></div>
		<div id="m11"></div>
		<div id="n11"></div>
		<div id="o11"></div>
		<div id="p11"></div>
		<!--linha12-->
		<div id="a12"></div>
		<div id="b12"></div>
		<div id="c12"></div>
		<div id="d12"></div>
		<div id="e12"></div>
		<div id="f12"></div>
		<div id="g12"></div>
		<div id="h12"></div>
		<div id="i12"></div>
		<div id="j12"></div>
		<div id="k12"></div>
		<div id="l12"></div>
		<div id="m12"></div>
		<div id="n12"></div>
		<div id="o12"></div>
		<div id="p12"></div>
		<!--linha13-->
		<div id="a13"></div>
		<div id="b13"></div>
		<div id="c13"></div>
		<div id="d13"></div>
		<div id="e13"></div>
		<div id="f13"></div>
		<div id="g13"></div>
		<div id="h13"></div>
		<div id="i13"></div>
		<div id="j13"></div>
		<div id="k13"></div>
		<div id="l13"></div>
		<div id="m13"></div>
		<div id="n13"></div>
		<div id="o13"></div>
		<div id="p13"></div>
		<!--linha14-->
		<div id="a14"></div>
		<div id="b14"></div>
		<div id="c14"></div>
		<div id="d14"></div>
		<div id="e14"></div>
		<div id="f14"></div>
		<div id="g14"></div>
		<div id="h14"></div>
		<div id="i14"></div>
		<div id="j14"></div>
		<div id="k14"></div>
		<div id="l14"></div>
		<div id="m14"></div>
		<div id="n14"></div>
		<div id="o14"></div>
		<div id="p14"></div>
		<!--linha15-->
		<div id="a15"></div>
		<div id="b15"></div>
		<div id="c15"></div>
		<div id="d15"></div>
		<div id="e15"></div>
		<div id="f15"></div>
		<div id="g15"></div>
		<div id="h15"></div>
		<div id="i15"></div>
		<div id="j15"></div>
		<div id="k15"></div>
		<div id="l15"></div>
		<div id="m15"></div>
		<div id="n15"></div>
		<div id="o15"></div>
		<div id="p15"></div>
		<!--linha16-->
		<div id="a16"></div>
		<div id="b16"></div>
		<div id="c16"></div>
		<div id="d16"></div>
		<div id="e16"></div>
		<div id="f16"></div>
		<div id="g16"></div>
		<div id="h16"></div>
		<div id="i16"></div>
		<div id="j16"></div>
		<div id="k16"></div>
		<div id="l16"></div>
		<div id="m16"></div>
		<div id="n16"></div>
		<div id="o16"></div>
		<div id="p16"></div>
</div>
</body>
</html>