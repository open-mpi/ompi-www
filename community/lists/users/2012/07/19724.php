<?
$subject_val = "Re: [OMPI users] Cannot build openmpi-1.6 on";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  2 17:15:54 2012" -->
<!-- isoreceived="20120702211554" -->
<!-- sent="Mon, 2 Jul 2012 17:15:49 -0400" -->
<!-- isosent="20120702211549" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot build openmpi-1.6 on" -->
<!-- id="2D9878AB-3623-4810-92AB-4A707A385755_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FF05B56.1080405_at_txcorp.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-02 17:15:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19725.php">Jeff Squyres: "Re: [OMPI users] About the Open-MPI point-to-point messaging layers"</a>
<li><strong>Previous message:</strong> <a href="19723.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>In reply to:</strong> <a href="19722.php">John R. Cary: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Strange.  For whatever reason, I'm unable to duplicate your issue (with the original command line you posted).
<br>
<p>I realize it's a moot point since you now use --disable-vt, but still, it's weird.
<br>
<p><p>On Jul 1, 2012, at 10:14 AM, John R. Cary wrote:
<br>
<p><span class="quotelev1">&gt; On 6/30/12 8:47 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Add --disable-vt to your configure line - if you don't need VampirTrace, just bypass the problem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Works.  Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 30, 2012, at 8:32 AM, John R. Cary wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My system:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ uname -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux multipole.txcorp.com 2.6.32-220.17.1.el6.x86_64 #1 SMP Wed May 16 00:01:37 BST 2012 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ gcc --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc (GCC) 4.6.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Copyright (C) 2011
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configured with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/scr_multipole/cary/vorpalall/builds/openmpi-1.6/configure' \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --prefix=/scr_multipole/cary/contrib/openmpi-1.6-nodl \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CC='/usr/local/contrib/bin/gcc' \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CXX='/usr/local/contrib/bin/g++' \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FC='/usr/local/contrib/bin/gfortran' \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  F77='/usr/local/contrib/bin/gfortran' \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-static \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --with-pic \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --disable-dlopen \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-wrapper-ldflags='-Wl,-rpath,/scr_multipole/cary/contrib/openmpi-1.6-nodl/lib -Wl,-rpath,/usr/local/contrib/gcc-4.6.3/lib64'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fails at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[10]: Entering directory `/scr_multipole/cary/vorpalall/builds/openmpi-1.6/nodl/ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/mpi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CC     otfmerge_mpi-handler.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CC     otfmerge_mpi-otfmerge.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CCLD   otfmerge-mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/ld: cannot find -lmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ????
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thx....John
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19725.php">Jeff Squyres: "Re: [OMPI users] About the Open-MPI point-to-point messaging layers"</a>
<li><strong>Previous message:</strong> <a href="19723.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>In reply to:</strong> <a href="19722.php">John R. Cary: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<!-- nextthread="start" -->
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
