<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 22 17:30:39 2006" -->
<!-- isoreceived="20060322223039" -->
<!-- sent="Thu, 23 Mar 2006 16:41:27 -0700" -->
<!-- isosent="20060323234127" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error message about libopal.so" -->
<!-- id="44233227.1000407_at_cs.uh.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-23 18:41:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0896.php">Michael Kluskens: "[OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>Previous message:</strong> <a href="0894.php">Michael Kluskens: "[OMPI users] Error message about libopal.so"</a>
<li><strong>In reply to:</strong> <a href="0894.php">Michael Kluskens: "[OMPI users] Error message about libopal.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0899.php">Brian Barrett: "Re: [OMPI users] Error message about libopal.so"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael Kluskens wrote:
<br>
<span class="quotelev1">&gt; Trying to find the cause of one or more errors, might involve libopal.so
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
<p>I think I forgot to comment on the last issue with the data corruption. 
<br>
I have started looking into that, but we have to fix another serious bug 
<br>
before I can continue on this thing. Should hopefully be however fixed 
<br>
within the next couple of days.
<br>
<p>Thanks
<br>
Edgar
<br>
<p><span class="quotelev1">&gt; Michael
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
<li><strong>Next message:</strong> <a href="0896.php">Michael Kluskens: "[OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>Previous message:</strong> <a href="0894.php">Michael Kluskens: "[OMPI users] Error message about libopal.so"</a>
<li><strong>In reply to:</strong> <a href="0894.php">Michael Kluskens: "[OMPI users] Error message about libopal.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0899.php">Brian Barrett: "Re: [OMPI users] Error message about libopal.so"</a>
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
