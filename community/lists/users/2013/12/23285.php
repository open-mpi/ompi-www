<?
$subject_val = "Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 23 19:18:43 2013" -->
<!-- isoreceived="20131224001843" -->
<!-- sent="Mon, 23 Dec 2013 16:17:57 -0800" -->
<!-- isosent="20131224001757" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10" -->
<!-- id="AEF577D7-BA8B-4C4F-B1EF-5E466C132E64_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="52B8C6F8.9020509_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-23 19:17:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23286.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to	numa&quot;	of	openmpi-1.7.4rc1	dosen't	work	for our	magny cours	based 32	core node"</a>
<li><strong>Previous message:</strong> <a href="23284.php">Gus Correa: "[OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10"</a>
<li><strong>In reply to:</strong> <a href="23284.php">Gus Correa: "[OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23287.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc	4.4.7 and PGI pgfortran 11.10"</a>
<li><strong>Reply:</strong> <a href="23287.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc	4.4.7 and PGI pgfortran 11.10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fear that Jeff and Brian are both out for the holiday, Gus, so we are unlikely to have much info on this until they return
<br>
<p>I'm unaware of any such problems in 1.6.5. It looks like something isn't properly aligned in memory - could be an error on our part, but might be in the program. You might want to build a debug version and see if that segfaults, and then look at the core with gdb to see where it happened.
<br>
<p><p>On Dec 23, 2013, at 3:27 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear OMPI experts
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been using OMPI 1.6.5 built with gcc 4.4.7 and
</span><br>
<span class="quotelev1">&gt; PGI pgfortran 11.10 to successfully compile and run
</span><br>
<span class="quotelev1">&gt; a large climate modeling program (CESM) in several
</span><br>
<span class="quotelev1">&gt; different configurations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, today I hit a segmentation fault when running a new model configuration.
</span><br>
<span class="quotelev1">&gt; [In the climate modeling jargon, a program is called a &quot;model&quot;.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is somewhat unpleasant because that OMPI build
</span><br>
<span class="quotelev1">&gt; is a central piece of the production CESM model setup available
</span><br>
<span class="quotelev1">&gt; to all users in our two clusters at this point.
</span><br>
<span class="quotelev1">&gt; I have other OMPI 1.6.5 builds, with other compilers, but that one
</span><br>
<span class="quotelev1">&gt; was working very well with CESM, until today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unless I am misinterpreting it, the error message,
</span><br>
<span class="quotelev1">&gt; reproduced below, seems to indicate the problem
</span><br>
<span class="quotelev1">&gt; happened inside the OMPI library.
</span><br>
<span class="quotelev1">&gt; Or not?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other details:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nodes are AMD Opteron 6376 x86_64, interconnect is Infiniband QDR,
</span><br>
<span class="quotelev1">&gt; OS is stock CentOS 6.4, kernel 2.6.32-358.2.1.el6.x86_64.
</span><br>
<span class="quotelev1">&gt; The program is compiled with the OMPI wrappers (mpicc and mpif90),
</span><br>
<span class="quotelev1">&gt; and somewhat conservative optimization flags:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FFLAGS       := $(CPPDEFS) -i4 -gopt -Mlist -Mextend -byteswapio -Minform=inform -traceback -O2 -Mvect=nosse -Kieee
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a known issue?
</span><br>
<span class="quotelev1">&gt; Any clues on how to address it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your help,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **************** error message *******************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1,31]&lt;stderr&gt;:[node30:17008] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [1,31]&lt;stderr&gt;:[node30:17008] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [1,31]&lt;stderr&gt;:[node30:17008] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [1,31]&lt;stderr&gt;:[node30:17008] Failing at address: 0x17
</span><br>
<span class="quotelev1">&gt; [1,31]&lt;stderr&gt;:[node30:17008] [ 0] /lib64/libpthread.so.0(+0xf500) [0x2b788ef9f500]
</span><br>
<span class="quotelev1">&gt; [1,31]&lt;stderr&gt;:[node30:17008] [ 1] /sw/openmpi/1.6.5/gnu-4.4.7-pgi-11.10/lib/libmpi.so.1(+0x100ee3) [0x2b788e200ee3]
</span><br>
<span class="quotelev1">&gt; [1,31]&lt;stderr&gt;:[node30:17008] [ 2] /sw/openmpi/1.6.5/gnu-4.4.7-pgi-11.10/lib/libmpi.so.1(opal_memory_ptmalloc2_int_malloc+0x111) [0x2b788e203771]
</span><br>
<span class="quotelev1">&gt; [1,31]&lt;stderr&gt;:[node30:17008] [ 3] /sw/openmpi/1.6.5/gnu-4.4.7-pgi-11.10/lib/libmpi.so.1(opal_memory_ptmalloc2_int_memalign+0x97) [0x2b788e2046d7]
</span><br>
<span class="quotelev1">&gt; [1,31]&lt;stderr&gt;:[node30:17008] [ 4] /sw/openmpi/1.6.5/gnu-4.4.7-pgi-11.10/lib/libmpi.so.1(opal_memory_ptmalloc2_memalign+0x8b) [0x2b788e2052ab]
</span><br>
<span class="quotelev1">&gt; [1,31]&lt;stderr&gt;:[node30:17008] [ 5] ./ccsm.exe(pgf90_auto_alloc+0x73) [0xe2c4c3]
</span><br>
<span class="quotelev1">&gt; [1,31]&lt;stderr&gt;:[node30:17008] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 31 with PID 17008 on node node30 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="23286.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to	numa&quot;	of	openmpi-1.7.4rc1	dosen't	work	for our	magny cours	based 32	core node"</a>
<li><strong>Previous message:</strong> <a href="23284.php">Gus Correa: "[OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10"</a>
<li><strong>In reply to:</strong> <a href="23284.php">Gus Correa: "[OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23287.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc	4.4.7 and PGI pgfortran 11.10"</a>
<li><strong>Reply:</strong> <a href="23287.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc	4.4.7 and PGI pgfortran 11.10"</a>
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
