<?
$subject_val = "Re: [OMPI users] errors testing openmpi1.6.5 ----";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 28 23:34:36 2013" -->
<!-- isoreceived="20130729033436" -->
<!-- sent="Mon, 29 Jul 2013 03:34:21 +0000" -->
<!-- isosent="20130729033421" -->
<!-- name="Yuping Sun" -->
<!-- email="ysun_at_[hidden]" -->
<!-- subject="Re: [OMPI users] errors testing openmpi1.6.5 ----" -->
<!-- id="D26659322AE6E9448EE9F7E692F133BF0B1FC40A_at_EXCHANGE2010.fdwt.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48A69166-3ED8-49E4-90AB-0D0659C8F33A_at_open-mpi.org" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] errors testing openmpi1.6.5 ----<br>
<strong>From:</strong> Yuping Sun (<em>ysun_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-28 23:34:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22404.php">dani: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Previous message:</strong> <a href="22402.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>In reply to:</strong> <a href="22380.php">Ralph Castain: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22407.php">Jeff Squyres (jsquyres): "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Reply:</strong> <a href="22407.php">Jeff Squyres (jsquyres): "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All:
<br>
<p>I was able to make and build openmpi-1.6.5 using gfortran. However, I was not able to compile using intel ifort. Would anyone tell me how to modify configure options to use ifort? Please give me the instruction if you can. Here is what I used:
<br>
$ ./configure --prefix=/usr/local/openmpi165 FC=`which ifort ` F77=`which ifort` --disable-shared
<br>
$ make -j8 all
<br>
$ make install
<br>
<p>It does not work out.
<br>
<p>Thank you.
<br>
<p>Yuping
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22403/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22404.php">dani: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Previous message:</strong> <a href="22402.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>In reply to:</strong> <a href="22380.php">Ralph Castain: "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22407.php">Jeff Squyres (jsquyres): "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Reply:</strong> <a href="22407.php">Jeff Squyres (jsquyres): "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
