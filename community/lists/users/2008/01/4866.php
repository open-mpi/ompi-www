<?
$subject_val = "[OMPI users] Fwd: Announcing the release of BLCR 0.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 09:28:38 2008" -->
<!-- isoreceived="20080123142838" -->
<!-- sent="Wed, 23 Jan 2008 09:28:34 -0500" -->
<!-- isosent="20080123142834" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: Announcing the release of BLCR 0.6.3" -->
<!-- id="D8DEA0AA-B766-42F7-B0E6-CB170F35F82B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47964EA7.907_at_hpcrd.lbl.gov" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: Announcing the release of BLCR 0.6.3<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-23 09:28:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4867.php">David Gunter: "[OMPI users] Need explanation for the following ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="4865.php">Backlund, Daniel: "[OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code: Address not mapped (1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attention anyone using BLCR for checkpoint/restart functionality, you  
<br>
are encouraged to upgrade to the latest release of BLCR, 0.6.3. This  
<br>
fixes a data corruption problem seen my a number of users.
<br>
<p>The release announcement is enclosed, and below is a link to the  
<br>
resolved bug if you are interested in more details.
<br>
<a href="http://upc-bugs.lbl.gov/bugzilla/show_bug.cgi?id=2001">http://upc-bugs.lbl.gov/bugzilla/show_bug.cgi?id=2001</a>
<br>
<p>-- Josh
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &quot;Paul H. Hargrove&quot; &lt;hargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: January 22, 2008 3:14:31 PM GMT-05:00
</span><br>
<span class="quotelev1">&gt; To: checkpoint_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Announcing the release of BLCR 0.6.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, let me apologize for the download problems many of you  
</span><br>
<span class="quotelev1">&gt; encountered with the 0.6.2 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second, only a week after releasing 0.6.2, there is a 0.6.3 release  
</span><br>
<span class="quotelev1">&gt; to fix a floating-point corruption problem on the x86-64  
</span><br>
<span class="quotelev1">&gt; architecture (present in 0.6.2 and all previous releases for the  
</span><br>
<span class="quotelev1">&gt; x86-64 architecture).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 0.6.3 release is now available from the BLCR Downloads page:
</span><br>
<span class="quotelev1">&gt; <a href="http://ftg.lbl.gov/CheckpointRestart/CheckpointDownloads.shtml">http://ftg.lbl.gov/CheckpointRestart/CheckpointDownloads.shtml</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From the NEWS file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0.6.3
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt; January 22, 2008
</span><br>
<span class="quotelev1">&gt; Bug-fix release.
</span><br>
<span class="quotelev1">&gt; - This release fixes bug 2001 which was causing intermittent floating-
</span><br>
<span class="quotelev1">&gt;   point register corruption on x86-64, even after BLCR was unloaded.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS
</span><br>
<span class="quotelev1">&gt; You are receiving this either because you are on the  
</span><br>
<span class="quotelev1">&gt; checkpoint_at_[hidden]
</span><br>
<span class="quotelev1">&gt; list, or because you've recently sent email to the list (or me  
</span><br>
<span class="quotelev1">&gt; directly)
</span><br>
<span class="quotelev1">&gt; asking about BLCR status.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4867.php">David Gunter: "[OMPI users] Need explanation for the following ORTE error message"</a>
<li><strong>Previous message:</strong> <a href="4865.php">Backlund, Daniel: "[OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code: Address not mapped (1)"</a>
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
