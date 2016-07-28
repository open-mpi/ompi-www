<?
$subject_val = "Re: [OMPI users] Cannot build openmpi-1.6 on";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 30 10:47:55 2012" -->
<!-- isoreceived="20120630144755" -->
<!-- sent="Sat, 30 Jun 2012 08:47:47 -0600" -->
<!-- isosent="20120630144747" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot build openmpi-1.6 on" -->
<!-- id="A3A99CB8-DAB6-470D-ACCA-2C97D2D7793A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FEF0DFE.1040300_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot build openmpi-1.6 on<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-30 10:47:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19718.php">Secretan Yves: "[OMPI users] RE : fortran program with integer kind=8 using openmpi"</a>
<li><strong>Previous message:</strong> <a href="19716.php">John R. Cary: "[OMPI users] Cannot build openmpi-1.6 on"</a>
<li><strong>In reply to:</strong> <a href="19716.php">John R. Cary: "[OMPI users] Cannot build openmpi-1.6 on"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19722.php">John R. Cary: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19722.php">John R. Cary: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Add --disable-vt to your configure line - if you don't need VampirTrace, just bypass the problem
<br>
<p>On Jun 30, 2012, at 8:32 AM, John R. Cary wrote:
<br>
<p><span class="quotelev1">&gt; My system:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; Linux multipole.txcorp.com 2.6.32-220.17.1.el6.x86_64 #1 SMP Wed May 16 00:01:37 BST 2012 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; $ gcc --version
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.6.3
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2011
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configured with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; '/scr_multipole/cary/vorpalall/builds/openmpi-1.6/configure' \
</span><br>
<span class="quotelev1">&gt;  --prefix=/scr_multipole/cary/contrib/openmpi-1.6-nodl \
</span><br>
<span class="quotelev1">&gt;  CC='/usr/local/contrib/bin/gcc' \
</span><br>
<span class="quotelev1">&gt;  CXX='/usr/local/contrib/bin/g++' \
</span><br>
<span class="quotelev1">&gt;  FC='/usr/local/contrib/bin/gfortran' \
</span><br>
<span class="quotelev1">&gt;  F77='/usr/local/contrib/bin/gfortran' \
</span><br>
<span class="quotelev1">&gt;  --enable-static \
</span><br>
<span class="quotelev1">&gt;  --with-pic \
</span><br>
<span class="quotelev1">&gt;  --disable-dlopen \
</span><br>
<span class="quotelev1">&gt;  --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt; --with-wrapper-ldflags='-Wl,-rpath,/scr_multipole/cary/contrib/openmpi-1.6-nodl/lib -Wl,-rpath,/usr/local/contrib/gcc-4.6.3/lib64'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; fails at
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[10]: Entering directory `/scr_multipole/cary/vorpalall/builds/openmpi-1.6/nodl/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
</span><br>
<span class="quotelev1">&gt;  CC     otfmerge_mpi-handler.o
</span><br>
<span class="quotelev1">&gt;  CC     otfmerge_mpi-otfmerge.o
</span><br>
<span class="quotelev1">&gt;  CCLD   otfmerge-mpi
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lmpi
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ????
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thx....John
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19718.php">Secretan Yves: "[OMPI users] RE : fortran program with integer kind=8 using openmpi"</a>
<li><strong>Previous message:</strong> <a href="19716.php">John R. Cary: "[OMPI users] Cannot build openmpi-1.6 on"</a>
<li><strong>In reply to:</strong> <a href="19716.php">John R. Cary: "[OMPI users] Cannot build openmpi-1.6 on"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19722.php">John R. Cary: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19722.php">John R. Cary: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
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
