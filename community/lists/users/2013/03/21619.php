<?
$subject_val = "Re: [OMPI users] &quot;Error setting file view&quot; NPB BTIO";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 26 17:55:27 2013" -->
<!-- isoreceived="20130326215527" -->
<!-- sent="Tue, 26 Mar 2013 21:55:09 +0000" -->
<!-- isosent="20130326215509" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Error setting file view&amp;quot; NPB BTIO" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FC7F1A_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50764.129.7.242.24.1363813696.squirrel_at_mail.cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;Error setting file view&quot; NPB BTIO<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-26 17:55:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21620.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>Previous message:</strong> <a href="21618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA	parameter cause internal error"</a>
<li><strong>In reply to:</strong> <a href="21570.php">kmehta_at_[hidden]: "[OMPI users] &quot;Error setting file view&quot; NPB BTIO"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying.
<br>
<p>I see that there's an NPB 3.3.1 available these days -- did that fix the bug, perchance?
<br>
<p><p>On Mar 20, 2013, at 5:08 PM, kmehta_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hello ,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running NAS parallel benchmark's BTIO benchmark (NPB v 3.3) for class
</span><br>
<span class="quotelev1">&gt; D and 1 process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; `make bt CLASS=D SUBTYPE=full NPROCS=1`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have provided gcc's `mcmodel=medium` flag alongwith -O3 during
</span><br>
<span class="quotelev1">&gt; compilation. This is on an x86_64 machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tested with openmpi 1.4.3, 1.7, but I get &quot;Error setting file view&quot;
</span><br>
<span class="quotelev1">&gt; when I run the benchmark. It works fine for 4,16 processes. Can someone
</span><br>
<span class="quotelev1">&gt; point out what is going wrong? Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________________________________________
</span><br>
<span class="quotelev1">&gt; NAS Parallel Benchmarks 3.3 -- BT Benchmark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No input file inputbt.data. Using compiled defaults
</span><br>
<span class="quotelev1">&gt; Size:  408x 408x 408
</span><br>
<span class="quotelev1">&gt; Iterations:  250    dt:   0.0000200
</span><br>
<span class="quotelev1">&gt; Number of active processes:     1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTIO -- FULL MPI-IO write interval:   5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error setting file view
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 6663 on
</span><br>
<span class="quotelev1">&gt; node crill-003 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ________________________________________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Kshitij Mehta
</span><br>
<span class="quotelev1">&gt; PhD student
</span><br>
<span class="quotelev1">&gt; University of Houston
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
<li><strong>Next message:</strong> <a href="21620.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>Previous message:</strong> <a href="21618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA	parameter cause internal error"</a>
<li><strong>In reply to:</strong> <a href="21570.php">kmehta_at_[hidden]: "[OMPI users] &quot;Error setting file view&quot; NPB BTIO"</a>
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
