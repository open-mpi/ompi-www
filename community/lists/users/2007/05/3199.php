<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  7 08:11:16 2007" -->
<!-- isoreceived="20070507121116" -->
<!-- sent="Mon, 07 May 2007 14:10:39 +0200" -->
<!-- isosent="20070507121039" -->
<!-- name="livelfs" -->
<!-- email="livelfs_at_[hidden]" -->
<!-- subject="[OMPI users] 1.2.1 configure bug report: set CC variable may produce broken *wrapper-data.txt" -->
<!-- id="463F173F.9020902_at_free.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> livelfs (<em>livelfs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-07 08:10:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3200.php">Brock Palen: "[OMPI users] Allenia message queues."</a>
<li><strong>Previous message:</strong> <a href="3198.php">Jeff Squyres: "Re: [OMPI users] Using TotalView's Message Queue graphing features with OMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3202.php">Brian Barrett: "Re: [OMPI users] 1.2.1 configure bug report: set CC variable may produce broken *wrapper-data.txt"</a>
<li><strong>Reply:</strong> <a href="3202.php">Brian Barrett: "Re: [OMPI users] 1.2.1 configure bug report: set CC variable may produce broken *wrapper-data.txt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>I have observed a regression between 1.2 and 1.2.1
<br>
<p>if CC is assigned an absolute path (i.e. export
<br>
CC=/opt/gcc/gcc-3.4.4/bin/gcc like in attached logs),
<br>
the */tools/wrappers/*-wrapper-data.txt files
<br>
produced by configure script have then a broken libs macro definition:
<br>
<p>libs=-lmpi -lopen-rte -lopen-pal   -ldl   dummy ranlib
<br>
<p>instead of
<br>
libs=-lmpi -lopen-rte -lopen-pal   -ldl   -Wl,--export-dynamic -lnsl
<br>
-lutil -lm -ldl
<br>
<p>Regards,
<br>
Stephane Rouberol
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3199/ompi-output.tar.gz">ompi-output.tar.gz</a>
</ul>
<!-- attachment="ompi-output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3200.php">Brock Palen: "[OMPI users] Allenia message queues."</a>
<li><strong>Previous message:</strong> <a href="3198.php">Jeff Squyres: "Re: [OMPI users] Using TotalView's Message Queue graphing features with OMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3202.php">Brian Barrett: "Re: [OMPI users] 1.2.1 configure bug report: set CC variable may produce broken *wrapper-data.txt"</a>
<li><strong>Reply:</strong> <a href="3202.php">Brian Barrett: "Re: [OMPI users] 1.2.1 configure bug report: set CC variable may produce broken *wrapper-data.txt"</a>
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
