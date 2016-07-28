<?
$subject_val = "Re: [OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  3 09:20:30 2008" -->
<!-- isoreceived="20080803132030" -->
<!-- sent="Sun, 3 Aug 2008 09:20:17 -0400" -->
<!-- isosent="20080803132017" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran" -->
<!-- id="B47DCD03-B8B4-4F9D-8BFF-FF522A94E9E7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48935BC9.9070705_at_noaa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-03 09:20:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6252.php">Ralph Castain: "[OMPI users] Fwd:  Getting default hostfile on Open MPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="6250.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="6248.php">Craig Tierney: "[OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI uses GNU Libtool to build itself.  I suspect that perhaps  
<br>
Libtool doesn't know the Right Mojo to understand the Lahey compilers,  
<br>
and that's why you're seeing this issue.  As such, it might well be  
<br>
that your workaround is the best one.
<br>
<p>Ralf -- we build the OMPI 1.2 series with that same &quot;late beta&quot;  
<br>
Libtool (2.1a) that we have forever.  Do you recall offhand if Libtool  
<br>
2.x before 2.2 supported the Lahey fortran compilers?
<br>
<p><p><p>On Aug 1, 2008, at 2:54 PM, Craig Tierney wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to build OpenMPI-1.2.6 with Lahey Fortran,
</span><br>
<span class="quotelev1">&gt; and I am running into problems.  The issue is buliding
</span><br>
<span class="quotelev1">&gt; shared libraries with Lahey.  Lahey can do it, but they
</span><br>
<span class="quotelev1">&gt; don't use the construct -fPIC to specify it.  They
</span><br>
<span class="quotelev1">&gt; use --shared.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I don't include anything, then the build fails near
</span><br>
<span class="quotelev1">&gt; the end when linking with a Fortran object with an
</span><br>
<span class="quotelev1">&gt; error message like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: testcode.o: relocation R_X86_64_32S against `a local
</span><br>
<span class="quotelev1">&gt; symbol' can not be used when making a shared object; recompile with
</span><br>
<span class="quotelev1">&gt; -fPIC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I add --shared to FCFLAGS, the configure process will not finish
</span><br>
<span class="quotelev1">&gt; (configure line below).  It crashes because when it tries to build
</span><br>
<span class="quotelev1">&gt; a small test program, it will seg fault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ./configure FCFLAGS=--shared CC=gcc CXX=g++ F77=lf95 FC=lf95  
</span><br>
<span class="quotelev1">&gt; F90=lf95 --prefix=/opt/openmpi/1.2.6-lahey-8.00a --without- 
</span><br>
<span class="quotelev1">&gt; gridengine --enable-io-romio --with-io-romio-flags=--with-file- 
</span><br>
<span class="quotelev1">&gt; sys=nfs+ufs --with-openib=/opt/hjet/ofed/1.3.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Relevant config.log output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:36725: checking if Fortran compiler works
</span><br>
<span class="quotelev1">&gt; configure:36781: lf95 -o conftest --shared   conftest.f  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; Encountered 0 errors, 0 warnings in file conftest.f.
</span><br>
<span class="quotelev1">&gt; configure:36784: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:36790: ./conftest
</span><br>
<span class="quotelev1">&gt; ./configure: line 36791: 29048 Segmentation fault      ./conftest 
</span><br>
<span class="quotelev1">&gt; $ac_exeext
</span><br>
<span class="quotelev1">&gt; configure:36793: $? = 139
</span><br>
<span class="quotelev1">&gt; configure: program exited with status 139
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; |       program main
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |       end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my hack to fix this was to add --shared to the
</span><br>
<span class="quotelev1">&gt; FCFLAGS in ompi/mpi/f90/Makefile and build the
</span><br>
<span class="quotelev1">&gt; code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the correct way for the configure process
</span><br>
<span class="quotelev1">&gt; to know that if the compiler is lf95, to use
</span><br>
<span class="quotelev1">&gt; --shared when compiling objects?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Craig
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Craig Tierney (craig.tierney_at_[hidden])
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6252.php">Ralph Castain: "[OMPI users] Fwd:  Getting default hostfile on Open MPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="6250.php">Jeff Squyres: "Re: [OMPI users] Segmentation fault: Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="6248.php">Craig Tierney: "[OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran"</a>
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
