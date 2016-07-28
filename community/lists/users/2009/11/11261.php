<?
$subject_val = "Re: [OMPI users] Program hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 18:26:03 2009" -->
<!-- isoreceived="20091123232603" -->
<!-- sent="Mon, 23 Nov 2009 15:27:24 -0800" -->
<!-- isosent="20091123232724" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program hangs" -->
<!-- id="4B0B1A5C.7040106_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200911201020.02585.gkanis_at_ipta.demokritos.gr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program hangs<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-23 18:27:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11262.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<li><strong>Previous message:</strong> <a href="11260.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="11244.php">vasilis gkanis: "Re: [OMPI users] Program hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11262.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<li><strong>Reply:</strong> <a href="11262.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't tell if these problems are related to trac ticket 2043 or not.
<br>
<p>Compiler:  In my experience, trac 2043 depends on GCC 4.4.x.  It isn't 
<br>
necessarily a GCC bug... perhaps it's just exposing an OMPI problem.  
<br>
I'm confused what compiler Jiaye is using, and Vasilis is apparently 
<br>
seeing a problem when using the PGI compiler.   But, maybe other 
<br>
compilers in addition to GCC 4.4.x are exposing the problem.
<br>
<p>Severity:  In my experience, trac 2043 shows up rather dramatically:  
<br>
within dozens to hundreds of iterations of simple message patterns.  So, 
<br>
a problem that shows up only after hours of execution feels to me to be 
<br>
something different.  But maybe I misunderstand Jiaye's and Vasili's 
<br>
cases:  are the programs running well for several hours before the hang 
<br>
occurs?
<br>
<p>Shared memory:  Trac 2043 appears related to shared memory.  Jiaye seems 
<br>
to run on a single node.  Vasilis talks of running on a &quot;cluster&quot; -- so 
<br>
I don't know if that means over an interconnect or still using sm.
<br>
<p>Anyhow, it's hard to know which problems are the same or different when 
<br>
we don't yet really understand what's going on.
<br>
<p>vasilis gkanis wrote:
<br>
<p><span class="quotelev1">&gt;I also experience a similar problem with the MUMPS solver, when I run it on a 
</span><br>
<span class="quotelev1">&gt;cluster. After several hours of running the code does not produce any results, 
</span><br>
<span class="quotelev1">&gt;although the command top shows that the program occupies 100% of the CPU.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The difference here, however, is that the same program runs fine on my PC. The 
</span><br>
<span class="quotelev1">&gt;differences between my PC and the cluster are:
</span><br>
<span class="quotelev1">&gt;1) 32bit vs 64-bit(cluster)
</span><br>
<span class="quotelev1">&gt;2) intel compiler vs portland compiler(cluster)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Friday 20 November 2009 03:50:17 am Jiaye Li wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I installed openmpi-1.3.3 on my single node(cpu) intel 64bit quad-core
</span><br>
<span class="quotelev2">&gt;&gt;machine. The compiler info is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;***************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;*********************************** intel-icc101018-10.1.018-1.i386
</span><br>
<span class="quotelev2">&gt;&gt;libgcc-4.4.0-4.i586
</span><br>
<span class="quotelev2">&gt;&gt;gcc-4.4.0-4.i586
</span><br>
<span class="quotelev2">&gt;&gt;gcc-gfortran-4.4.0-4.i586
</span><br>
<span class="quotelev2">&gt;&gt;gcc-c++-4.4.0-4.i586
</span><br>
<span class="quotelev2">&gt;&gt;intel-ifort101018-10.1.018-1.i386
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;***************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;***********************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I compiled PWscf program with openmpi and tested the program. At the
</span><br>
<span class="quotelev2">&gt;&gt;beginning, the execution of  PW went on well, but after about 10 h, when
</span><br>
<span class="quotelev2">&gt;&gt; the program is going to finish. The program hang there, but the cpu time
</span><br>
<span class="quotelev2">&gt;&gt; is still occupied. (100% taken up by the program). There seems to be
</span><br>
<span class="quotelev2">&gt;&gt; something wrong, somewhere. Any ideas? Thank you in advance.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11262.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<li><strong>Previous message:</strong> <a href="11260.php">Natarajan CS: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<li><strong>In reply to:</strong> <a href="11244.php">vasilis gkanis: "Re: [OMPI users] Program hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11262.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<li><strong>Reply:</strong> <a href="11262.php">Jiaye Li: "[OMPI users] Program hangs"</a>
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
