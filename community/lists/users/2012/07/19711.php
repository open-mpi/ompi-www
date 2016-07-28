<?
$subject_val = "Re: [OMPI users] Cannot build openmpi-1.6 on";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  1 10:14:51 2012" -->
<!-- isoreceived="20120701141451" -->
<!-- sent="Sun, 01 Jul 2012 08:14:46 -0600" -->
<!-- isosent="20120701141446" -->
<!-- name="John R. Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot build openmpi-1.6 on" -->
<!-- id="4FF05B56.1080405_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A3A99CB8-DAB6-470D-ACCA-2C97D2D7793A_at_open-mpi.org" -->
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
<strong>From:</strong> John R. Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-01 10:14:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19712.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>Previous message:</strong> <a href="19710.php">George Bosilca: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>In reply to:</strong> <a href="../../2012/06/19706.php">Ralph Castain: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19713.php">Jeff Squyres: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<li><strong>Reply:</strong> <a href="19713.php">Jeff Squyres: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/30/12 8:47 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Add --disable-vt to your configure line - if you don't need VampirTrace, just bypass the problem
</span><br>
<p>Works.  Thanks.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 30, 2012, at 8:32 AM, John R. Cary wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My system:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Linux multipole.txcorp.com 2.6.32-220.17.1.el6.x86_64 #1 SMP Wed May 16 00:01:37 BST 2012 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt; $ gcc --version
</span><br>
<span class="quotelev2">&gt;&gt; gcc (GCC) 4.6.3
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 2011
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Configured with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; '/scr_multipole/cary/vorpalall/builds/openmpi-1.6/configure' \
</span><br>
<span class="quotelev2">&gt;&gt;   --prefix=/scr_multipole/cary/contrib/openmpi-1.6-nodl \
</span><br>
<span class="quotelev2">&gt;&gt;   CC='/usr/local/contrib/bin/gcc' \
</span><br>
<span class="quotelev2">&gt;&gt;   CXX='/usr/local/contrib/bin/g++' \
</span><br>
<span class="quotelev2">&gt;&gt;   FC='/usr/local/contrib/bin/gfortran' \
</span><br>
<span class="quotelev2">&gt;&gt;   F77='/usr/local/contrib/bin/gfortran' \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-static \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-pic \
</span><br>
<span class="quotelev2">&gt;&gt;   --disable-dlopen \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-ldflags='-Wl,-rpath,/scr_multipole/cary/contrib/openmpi-1.6-nodl/lib -Wl,-rpath,/usr/local/contrib/gcc-4.6.3/lib64'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; fails at
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[10]: Entering directory `/scr_multipole/cary/vorpalall/builds/openmpi-1.6/nodl/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
</span><br>
<span class="quotelev2">&gt;&gt;   CC     otfmerge_mpi-handler.o
</span><br>
<span class="quotelev2">&gt;&gt;   CC     otfmerge_mpi-otfmerge.o
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD   otfmerge-mpi
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: cannot find -lmpi
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ????
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thx....John
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19712.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>Previous message:</strong> <a href="19710.php">George Bosilca: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>In reply to:</strong> <a href="../../2012/06/19706.php">Ralph Castain: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19713.php">Jeff Squyres: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<li><strong>Reply:</strong> <a href="19713.php">Jeff Squyres: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
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
