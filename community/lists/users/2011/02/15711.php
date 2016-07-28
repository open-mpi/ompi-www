<?
$subject_val = "Re: [OMPI users] Beginner's question: why multiple sends or	receives don't work?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 17:22:54 2011" -->
<!-- isoreceived="20110223222254" -->
<!-- sent="Wed, 23 Feb 2011 22:22:46 +0000" -->
<!-- isosent="20110223222246" -->
<!-- name="Bill Rankin" -->
<!-- email="Bill.Rankin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Beginner's question: why multiple sends or	receives don't work?" -->
<!-- id="76097BB0C025054786EFAB631C4A2E3C0950C03F_at_MERCMBX02D.na.SAS.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EA38F0D7-2D6F-4FBF-880E-C683C7741911_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Beginner's question: why multiple sends or	receives don't work?<br>
<strong>From:</strong> Bill Rankin (<em>Bill.Rankin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 17:22:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15712.php">Ahsan Ali: "Re: [OMPI users] WRF Problem running in Parallel (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="15710.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15684.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15745.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Reply:</strong> <a href="15745.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff:
<br>
<p><span class="quotelev1">&gt; FWIW: I have rarely seen this to be the issue.
</span><br>
<p>Been bitten by similar situations before.  But it may not have been OpenMPI.  In any case it was a while back.
<br>
<p><span class="quotelev1">&gt; In short, programs are erroneous that do not guarantee that all their
</span><br>
<span class="quotelev1">&gt; outstanding requests have completed before calling finalize.
</span><br>
<p>Agreed 100%.  The barrier won't prevent the case of unmatched sends/receives or outstanding request handles, but if the logic is correct it does make sure that everyone completes before anyone leaves.
<br>
<p>In any case, I also tried code #2 and it completed w/o issue on our cluster.  I guess the next thing to ask Kong is regarding what version he is running and what is the platform.
<br>
<p>-b
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15712.php">Ahsan Ali: "Re: [OMPI users] WRF Problem running in Parallel (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="15710.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="15684.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15745.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<li><strong>Reply:</strong> <a href="15745.php">Xianglong Kong: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
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
