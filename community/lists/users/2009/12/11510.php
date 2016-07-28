<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 17:20:17 2009" -->
<!-- isoreceived="20091210222017" -->
<!-- sent="Thu, 10 Dec 2009 17:20:12 -0500" -->
<!-- isosent="20091210222012" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4 (Gus Correa)" -->
<!-- id="3902A721-94D6-491C-9D8A-F91CCE56A2BB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B216FA0.60505_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 17:20:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11511.php">Jonathan Dursi: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11509.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)	RESOLVED FOR NOW"</a>
<li><strong>In reply to:</strong> <a href="11504.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11516.php">Mark Bolstad: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11516.php">Mark Bolstad: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 10, 2009, at 5:01 PM, Gus Correa wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Just a quick interjection, I also have a dual-quad Nehalem system, HT
</span><br>
<span class="quotelev2">&gt; &gt; on, 24GB ram, hand compiled 1.3.4 with options: --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpi-f77=no --with-openib=no
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With v1.3.4 I see roughly the same behavior, hello, ring work,
</span><br>
<span class="quotelev2">&gt; &gt; connectivity fails randomly with np &gt;= 8. Turning on -v increased the
</span><br>
<span class="quotelev2">&gt; &gt; success, but still hangs. np = 16 fails more often, and the hang is
</span><br>
<span class="quotelev2">&gt; &gt; random in which pair of processes are communicating.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, it seems to be related to the shared memory layer problem.
</span><br>
<span class="quotelev2">&gt; &gt; Running with -mca btl ^sm works consistently through np = 128.
</span><br>
<p>Note, too, that --enable-mpi-threads &quot;works&quot; but I would not say that it is production-quality hardened yet.  IBM is looking into thread safety issues to harden up this code.  If the same hangs can be observed without --enable-mpi-threads, that would be a good data point.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11511.php">Jonathan Dursi: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11509.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)	RESOLVED FOR NOW"</a>
<li><strong>In reply to:</strong> <a href="11504.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11516.php">Mark Bolstad: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Reply:</strong> <a href="11516.php">Mark Bolstad: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
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
