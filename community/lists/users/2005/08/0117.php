<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 23 13:40:17 2005" -->
<!-- isoreceived="20050823184017" -->
<!-- sent="Tue, 23 Aug 2005 12:40:08 -0600" -->
<!-- isosent="20050823184008" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] how do you select which network/trasport to use at run-time?" -->
<!-- id="130C69DD-CA38-4007-8D33-23103CA4B1D7_at_cs.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200508231922.15932.cap_at_nsc.liu.se" -->
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
<strong>Date:</strong> 2005-08-23 13:40:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0118.php">Jonathan Day: "[O-MPI users] MIPS64 question"</a>
<li><strong>Previous message:</strong> <a href="0116.php">Peter Kjellstr&#246;m: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>In reply to:</strong> <a href="0116.php">Peter Kjellstr&#246;m: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0120.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>Reply:</strong> <a href="0120.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Peter,
<br>
<span class="quotelev2">&gt;&gt; I'm a little surprised that tcp was used -- OMPI should &quot;prefer&quot; the
</span><br>
<span class="quotelev2">&gt;&gt; low latency interconnects (such as mvapi) to tcp and automatically  
</span><br>
<span class="quotelev2">&gt;&gt; use
</span><br>
<span class="quotelev2">&gt;&gt; them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><p>This is a small issue and should be fixed in the next day or two. In  
<br>
the meantime to run using mvapi only use:
<br>
<p>mpirun -np 2 -mca btl-base-include self,mvapi       (etc...)
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0118.php">Jonathan Day: "[O-MPI users] MIPS64 question"</a>
<li><strong>Previous message:</strong> <a href="0116.php">Peter Kjellstr&#246;m: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>In reply to:</strong> <a href="0116.php">Peter Kjellstr&#246;m: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0120.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>Reply:</strong> <a href="0120.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
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
