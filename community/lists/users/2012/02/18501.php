<?
$subject_val = "Re: [OMPI users] Problems with gridengine integration on RHEL 6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 18:41:47 2012" -->
<!-- isoreceived="20120215234147" -->
<!-- sent="Wed, 15 Feb 2012 23:41:30 +0000" -->
<!-- isosent="20120215234130" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with gridengine integration on RHEL 6" -->
<!-- id="87lio3fyvp.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F3C21BD.9090709_at_uw.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with gridengine integration on RHEL 6<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 18:41:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18502.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="18500.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="18496.php">Brian McNally: "[OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18502.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18502.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian McNally &lt;bmcnally_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Hello Open MPI community,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running the openmpi 1.5.3 package as provided by Redhat Enterprise
</span><br>
<span class="quotelev1">&gt; Linux 6, along with SGE 6.2u3. I've discovered that under RHEL 5 orted
</span><br>
<span class="quotelev1">&gt; gets spawned via qrsh and under RHEL 6 orted gets spanwed via
</span><br>
<span class="quotelev1">&gt; SSH. This is happening in the same cluster environment with the same
</span><br>
<span class="quotelev1">&gt; parallel environment setup. I want orted to get spawned via qrsh
</span><br>
<span class="quotelev1">&gt; because we impose memory limits if a job is spawned through SSH.
</span><br>
<p>[I'd have thought you'd want qrsh to get tight integration regardless.]
<br>
<p><span class="quotelev1">&gt; I cannot determine WHY the behavior is different from RHEL 5 to RHEL
</span><br>
<span class="quotelev1">&gt; 6. In the former I'm using the openmpi 1.4.3 package, in the latter
</span><br>
<span class="quotelev1">&gt; I'm using openmpi 1.5.3. Both are supposedly built to support the
</span><br>
<span class="quotelev1">&gt; gridengine ras.
</span><br>
<p>See the release notes for 1.5.4.  The workaround I was given is
<br>
&nbsp;&nbsp;plm = ^rshd
<br>
<p>Does &quot;the same parallel environment setup&quot; mean mixing 1.4 and 1.5?  I
<br>
thought they weren't binary compatible.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18502.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="18500.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="18496.php">Brian McNally: "[OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18502.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18502.php">Reuti: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
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
