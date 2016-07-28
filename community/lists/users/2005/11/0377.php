<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 21 13:34:45 2005" -->
<!-- isoreceived="20051121183445" -->
<!-- sent="Mon, 21 Nov 2005 11:34:34 -0700 (MST)" -->
<!-- isosent="20051121183434" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] problem with overflow 1.8ab code using GM" -->
<!-- id="Pine.LNX.4.62.0511211133060.23765_at_deimos.cs.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="52B7AD4481DAB448AA2A477E44A609F20142CA79_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-21 13:34:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0378.php">Enrique Curchitser: "Re: [O-MPI users] Configuring port"</a>
<li><strong>Previous message:</strong> <a href="0376.php">Borenstein, Bernard S: "[O-MPI users] another overflow 1.8ab problem"</a>
<li><strong>In reply to:</strong> <a href="0375.php">Borenstein, Bernard S: "[O-MPI users] problem with overflow 1.8ab code using GM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bernard,
<br>
<p>This code is using MPI_Alloc_mem, which is good. Do you have an idea of 
<br>
approx. how much memory has been allocated via MPI_Alloc_mem at the time 
<br>
of failure?
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p>On Mon, 21 Nov 2005, Borenstein, Bernard S wrote:
<br>
<p><span class="quotelev1">&gt; Things have improved alot since I ran the code using the earlier betas,
</span><br>
<span class="quotelev1">&gt; but it still fails near the end of the run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;&lt;ompi-output.tar.gz&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error messages are :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       FOR GRID   4  AT STEP   466   L2NORM =  0.74601987E-09
</span><br>
<span class="quotelev1">&gt;       FOR GRID   5  AT STEP   466   L2NORM =  0.86085437E-08
</span><br>
<span class="quotelev1">&gt;       FOR GRID   6  AT STEP   466   L2NORM =  0.17810240E-07
</span><br>
<span class="quotelev1">&gt;       FOR GRID   7  AT STEP   466   L2NORM =  0.14586522E-07
</span><br>
<span class="quotelev1">&gt; [v057:31700] [mpool_gm_module.c:100] error(8) registering gm memory
</span><br>
<span class="quotelev1">&gt; [v057:31700] *** An error occurred in MPI_Alloc_mem
</span><br>
<span class="quotelev1">&gt; [v057:31700] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [v057:31700] *** MPI_ERR_NO_MEM: out of memory
</span><br>
<span class="quotelev1">&gt; [v057:31700] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [v120:05052] spawn: in job_state_callback(jobid = 1, state = 0xa)
</span><br>
<span class="quotelev1">&gt; [v120:05052] spawn: in job_state_callback(jobid = 1, state = 0x9)
</span><br>
<span class="quotelev1">&gt; 20 processes killed (possibly by Open MPI)
</span><br>
<span class="quotelev1">&gt; [v120:05052] sess_dir_finalize: found proc session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; [v120:05052] sess_dir_finalize: found job session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; [v120:05052] sess_dir_finalize: found univ session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; [v120:05052] sess_dir_finalize: found top session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; Command exited with non-zero status 9
</span><br>
<span class="quotelev1">&gt; 0.06user 0.18system 10:32.68elapsed 0%CPU (0avgtext+0avgdata
</span><br>
<span class="quotelev1">&gt; 0maxresident)k
</span><br>
<span class="quotelev1">&gt; 0inputs+0outputs (18major+782minor)pagefaults 0swaps
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope you can help me out with this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bernie Borenstein
</span><br>
<span class="quotelev1">&gt; The Boeing Company
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0378.php">Enrique Curchitser: "Re: [O-MPI users] Configuring port"</a>
<li><strong>Previous message:</strong> <a href="0376.php">Borenstein, Bernard S: "[O-MPI users] another overflow 1.8ab problem"</a>
<li><strong>In reply to:</strong> <a href="0375.php">Borenstein, Bernard S: "[O-MPI users] problem with overflow 1.8ab code using GM"</a>
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
