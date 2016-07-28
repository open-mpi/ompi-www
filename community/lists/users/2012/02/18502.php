<?
$subject_val = "Re: [OMPI users] Problems with gridengine integration on RHEL 6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 19:08:54 2012" -->
<!-- isoreceived="20120216000854" -->
<!-- sent="Thu, 16 Feb 2012 01:08:42 +0100" -->
<!-- isosent="20120216000842" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with gridengine integration on RHEL 6" -->
<!-- id="95C83C18-FA08-4702-A1FF-60F3DFC5C22A_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87lio3fyvp.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 19:08:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18503.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="18501.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="18501.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18503.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18503.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 16.02.2012 um 00:41 schrieb Dave Love:
<br>
<p><span class="quotelev1">&gt; Brian McNally &lt;bmcnally_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello Open MPI community,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm running the openmpi 1.5.3 package as provided by Redhat Enterprise
</span><br>
<span class="quotelev2">&gt;&gt; Linux 6, along with SGE 6.2u3. I've discovered that under RHEL 5 orted
</span><br>
<span class="quotelev2">&gt;&gt; gets spawned via qrsh and under RHEL 6 orted gets spanwed via
</span><br>
<span class="quotelev2">&gt;&gt; SSH. This is happening in the same cluster environment with the same
</span><br>
<span class="quotelev2">&gt;&gt; parallel environment setup. I want orted to get spawned via qrsh
</span><br>
<span class="quotelev2">&gt;&gt; because we impose memory limits if a job is spawned through SSH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [I'd have thought you'd want qrsh to get tight integration regardless.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I cannot determine WHY the behavior is different from RHEL 5 to RHEL
</span><br>
<span class="quotelev2">&gt;&gt; 6. In the former I'm using the openmpi 1.4.3 package, in the latter
</span><br>
<span class="quotelev2">&gt;&gt; I'm using openmpi 1.5.3. Both are supposedly built to support the
</span><br>
<span class="quotelev2">&gt;&gt; gridengine ras.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See the release notes for 1.5.4.  The workaround I was given is
</span><br>
<span class="quotelev1">&gt;  plm = ^rshd
</span><br>
<p>Aha, thx for reminding me of it - so it's still broken.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Does &quot;the same parallel environment setup&quot; mean mixing 1.4 and 1.5?  I
</span><br>
<span class="quotelev1">&gt; thought they weren't binary compatible.
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
<li><strong>Next message:</strong> <a href="18503.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="18501.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="18501.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18503.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18503.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
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
