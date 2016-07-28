<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  1 21:21:31 2014" -->
<!-- isoreceived="20140102022131" -->
<!-- sent="Thu, 2 Jan 2014 02:21:13 +0000" -->
<!-- isosent="20140102022113" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10" -->
<!-- id="CEEA1A48.16992%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="73B8E730-5234-4DE4-B2E8-94F197D95DF8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-01 21:21:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23308.php">Hongyi Zhao: "[OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<li><strong>Previous message:</strong> <a href="23306.php">Oscar Vega-Gisbert: "[OMPI users]  some problems with openmpi-1.9a1r30100"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23287.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc	4.4.7 and PGI pgfortran 11.10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI unfortunately has to play some tricks with the malloc system when
<br>
using InfiniBand or the Cray interconnects.  One other option is to set
<br>
the environment variable
<br>
<p>&nbsp;&nbsp;OMPI_MCA_memory_linux_disable
<br>
<p>to some non-zero value.  That will disable the evil memory hooks, which
<br>
might help if PGI is doing something unexpected.  If not, it will also
<br>
make it a bit easier to use the standard Linux memory debugging tools.
<br>
<p>Brian
<br>
<p>On 12/24/13 4:10 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I'm *very loosely* checking email.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Agree with what Ralph said: it looks like your program called memalign,
</span><br>
<span class="quotelev1">&gt;and that ended up segv'ing.  That could be an OMPI problem, or it could
</span><br>
<span class="quotelev1">&gt;be an application problem.  Try also configuring OMPI --with-valgrind and
</span><br>
<span class="quotelev1">&gt;running your app through a memory-checking debugger (although OMPI is not
</span><br>
<span class="quotelev1">&gt;very valgrind-clean in the 1.6 series :-\ -- you'll get a bunch of false
</span><br>
<span class="quotelev1">&gt;positives about reads from unallocated and memory being left
</span><br>
<span class="quotelev1">&gt;still-allocated after MPI_FINALIZE).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Dec 23, 2013, at 7:17 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I fear that Jeff and Brian are both out for the holiday, Gus, so we are
</span><br>
<span class="quotelev2">&gt;&gt;unlikely to have much info on this until they return
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm unaware of any such problems in 1.6.5. It looks like something
</span><br>
<span class="quotelev2">&gt;&gt;isn't properly aligned in memory - could be an error on our part, but
</span><br>
<span class="quotelev2">&gt;&gt;might be in the program. You might want to build a debug version and see
</span><br>
<span class="quotelev2">&gt;&gt;if that segfaults, and then look at the core with gdb to see where it
</span><br>
<span class="quotelev2">&gt;&gt;happened.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 23, 2013, at 3:27 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear OMPI experts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have been using OMPI 1.6.5 built with gcc 4.4.7 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGI pgfortran 11.10 to successfully compile and run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a large climate modeling program (CESM) in several
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different configurations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, today I hit a segmentation fault when running a new model
</span><br>
<span class="quotelev3">&gt;&gt;&gt;configuration.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [In the climate modeling jargon, a program is called a &quot;model&quot;.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is somewhat unpleasant because that OMPI build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is a central piece of the production CESM model setup available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to all users in our two clusters at this point.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have other OMPI 1.6.5 builds, with other compilers, but that one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was working very well with CESM, until today.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unless I am misinterpreting it, the error message,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reproduced below, seems to indicate the problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happened inside the OMPI library.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or not?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Other details:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nodes are AMD Opteron 6376 x86_64, interconnect is Infiniband QDR,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OS is stock CentOS 6.4, kernel 2.6.32-358.2.1.el6.x86_64.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The program is compiled with the OMPI wrappers (mpicc and mpif90),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and somewhat conservative optimization flags:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FFLAGS       := $(CPPDEFS) -i4 -gopt -Mlist -Mextend -byteswapio
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-Minform=inform -traceback -O2 -Mvect=nosse -Kieee
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this a known issue?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any clues on how to address it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you for your help,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **************** error message *******************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,31]&lt;stderr&gt;:[node30:17008] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,31]&lt;stderr&gt;:[node30:17008] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,31]&lt;stderr&gt;:[node30:17008] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,31]&lt;stderr&gt;:[node30:17008] Failing at address: 0x17
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,31]&lt;stderr&gt;:[node30:17008] [ 0] /lib64/libpthread.so.0(+0xf500)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[0x2b788ef9f500]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,31]&lt;stderr&gt;:[node30:17008] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;/sw/openmpi/1.6.5/gnu-4.4.7-pgi-11.10/lib/libmpi.so.1(+0x100ee3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[0x2b788e200ee3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,31]&lt;stderr&gt;:[node30:17008] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;/sw/openmpi/1.6.5/gnu-4.4.7-pgi-11.10/lib/libmpi.so.1(opal_memory_ptmall
</span><br>
<span class="quotelev3">&gt;&gt;&gt;oc2_int_malloc+0x111) [0x2b788e203771]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,31]&lt;stderr&gt;:[node30:17008] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;/sw/openmpi/1.6.5/gnu-4.4.7-pgi-11.10/lib/libmpi.so.1(opal_memory_ptmall
</span><br>
<span class="quotelev3">&gt;&gt;&gt;oc2_int_memalign+0x97) [0x2b788e2046d7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,31]&lt;stderr&gt;:[node30:17008] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;/sw/openmpi/1.6.5/gnu-4.4.7-pgi-11.10/lib/libmpi.so.1(opal_memory_ptmall
</span><br>
<span class="quotelev3">&gt;&gt;&gt;oc2_memalign+0x8b) [0x2b788e2052ab]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,31]&lt;stderr&gt;:[node30:17008] [ 5] ./ccsm.exe(pgf90_auto_alloc+0x73)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;[0xe2c4c3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1,31]&lt;stderr&gt;:[node30:17008] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;--
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec noticed that process rank 31 with PID 17008 on node node30
</span><br>
<span class="quotelev3">&gt;&gt;&gt;exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;--
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23308.php">Hongyi Zhao: "[OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<li><strong>Previous message:</strong> <a href="23306.php">Oscar Vega-Gisbert: "[OMPI users]  some problems with openmpi-1.9a1r30100"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23287.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc	4.4.7 and PGI pgfortran 11.10"</a>
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
