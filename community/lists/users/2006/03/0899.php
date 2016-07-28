<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 23 21:49:04 2006" -->
<!-- isoreceived="20060324024904" -->
<!-- sent="Thu, 23 Mar 2006 21:48:56 -0500" -->
<!-- isosent="20060324024856" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error message about libopal.so" -->
<!-- id="EDFF7FC0-5BE4-469E-ACE8-97FC63AA7CFA_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="09F49549-E0B2-47E6-A741-9E27FC8059EE_at_ieee.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-23 21:48:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0900.php">Ali Eghlima: "[OMPI users] How to establish communication between two separate COM WORLD"</a>
<li><strong>Previous message:</strong> <a href="0898.php">Brian Barrett: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>In reply to:</strong> <a href="0894.php">Michael Kluskens: "[OMPI users] Error message about libopal.so"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 22, 2006, at 1:47 PM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; Trying to find the cause of one or more errors, might involve  
</span><br>
<span class="quotelev1">&gt; libopal.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Built openmpi-1.1a1r9351 on Debian Linux on Operton with PGI 6.1-3
</span><br>
<span class="quotelev1">&gt; using &quot;./configure --with-gnu-ld F77=pgf77 FFLAGS=-fastsse FC=pgf90
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-fastsse&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My program generates the following error which I do not understand:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x4
</span><br>
<span class="quotelev1">&gt; [0] func:/usr/local/lib/libopal.so.0 [0x2a959927dd]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible I'm over running the OpenMPI buffers, my test program
</span><br>
<span class="quotelev1">&gt; works fine other than the &quot;GPR data corruption&quot; errors (uses
</span><br>
<span class="quotelev1">&gt; MPI_SPAWN and posted previously); the basic MPI difference between my
</span><br>
<span class="quotelev1">&gt; test program and the real program is massive amount of data being
</span><br>
<span class="quotelev1">&gt; distributed via BCAST and SEND/RECV.
</span><br>
<p>It worries me that the call stack only goes that deep - there should  
<br>
be more functions listed there (if nothing else, the main()  
<br>
function).  Can you run your application in a debugger and try to get  
<br>
a full stack trace?  Typically, segmentation faults point to  
<br>
overwriting user buffers, but without more detail, it's hard to pin- 
<br>
point the issue.
<br>
<p><p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0900.php">Ali Eghlima: "[OMPI users] How to establish communication between two separate COM WORLD"</a>
<li><strong>Previous message:</strong> <a href="0898.php">Brian Barrett: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>In reply to:</strong> <a href="0894.php">Michael Kluskens: "[OMPI users] Error message about libopal.so"</a>
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
