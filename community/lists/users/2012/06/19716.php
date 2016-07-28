<?
$subject_val = "[OMPI users] Cannot build openmpi-1.6 on";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 30 10:32:42 2012" -->
<!-- isoreceived="20120630143242" -->
<!-- sent="Sat, 30 Jun 2012 08:32:30 -0600" -->
<!-- isosent="20120630143230" -->
<!-- name="John R. Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="[OMPI users] Cannot build openmpi-1.6 on" -->
<!-- id="4FEF0DFE.1040300_at_txcorp.com" -->
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
<strong>Subject:</strong> [OMPI users] Cannot build openmpi-1.6 on<br>
<strong>From:</strong> John R. Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-30 10:32:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19717.php">Ralph Castain: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<li><strong>Previous message:</strong> <a href="19715.php">William Au: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19717.php">Ralph Castain: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<li><strong>Reply:</strong> <a href="19717.php">Ralph Castain: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My system:
<br>
<p>$ uname -a
<br>
Linux multipole.txcorp.com 2.6.32-220.17.1.el6.x86_64 #1 SMP Wed May 16 00:01:37 BST 2012 x86_64 x86_64 x86_64 GNU/Linux
<br>
$ gcc --version
<br>
gcc (GCC) 4.6.3
<br>
Copyright (C) 2011
<br>
<p>Configured with
<br>
<p>'/scr_multipole/cary/vorpalall/builds/openmpi-1.6/configure' \
<br>
&nbsp;&nbsp;&nbsp;--prefix=/scr_multipole/cary/contrib/openmpi-1.6-nodl \
<br>
&nbsp;&nbsp;&nbsp;CC='/usr/local/contrib/bin/gcc' \
<br>
&nbsp;&nbsp;&nbsp;CXX='/usr/local/contrib/bin/g++' \
<br>
&nbsp;&nbsp;&nbsp;FC='/usr/local/contrib/bin/gfortran' \
<br>
&nbsp;&nbsp;&nbsp;F77='/usr/local/contrib/bin/gfortran' \
<br>
&nbsp;&nbsp;&nbsp;--enable-static \
<br>
&nbsp;&nbsp;&nbsp;--with-pic \
<br>
&nbsp;&nbsp;&nbsp;--disable-dlopen \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default \
<br>
--with-wrapper-ldflags='-Wl,-rpath,/scr_multipole/cary/contrib/openmpi-1.6-nodl/lib -Wl,-rpath,/usr/local/contrib/gcc-4.6.3/lib64'
<br>
<p>fails at
<br>
<p>make[10]: Entering directory `/scr_multipole/cary/vorpalall/builds/openmpi-1.6/nodl/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
<br>
&nbsp;&nbsp;&nbsp;CC     otfmerge_mpi-handler.o
<br>
&nbsp;&nbsp;&nbsp;CC     otfmerge_mpi-otfmerge.o
<br>
&nbsp;&nbsp;&nbsp;CCLD   otfmerge-mpi
<br>
/usr/bin/ld: cannot find -lmpi
<br>
collect2: ld returned 1 exit status
<br>
<p>????
<br>
<p>Thx....John
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19717.php">Ralph Castain: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<li><strong>Previous message:</strong> <a href="19715.php">William Au: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19717.php">Ralph Castain: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<li><strong>Reply:</strong> <a href="19717.php">Ralph Castain: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
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
