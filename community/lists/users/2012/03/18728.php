<?
$subject_val = "Re: [OMPI users] Scatter+Group Communicator Issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  9 12:00:03 2012" -->
<!-- isoreceived="20120309170003" -->
<!-- sent="Fri, 9 Mar 2012 11:59:50 -0500" -->
<!-- isosent="20120309165950" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scatter+Group Communicator Issue" -->
<!-- id="41B96725-8B08-482A-8C63-83AC69F79DFC_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF910D7905.8DEB3D7D-ONC12579B9.0053C556-C12579B9.00546390_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Scatter+Group Communicator Issue<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-09 11:59:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18729.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Previous message:</strong> <a href="18727.php">Jeffrey Squyres: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>In reply to:</strong> <a href="18694.php">nadia.derbey_at_[hidden]: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 6, 2012, at 10:17 AM, nadia.derbey_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Since MPI_Comm_create sets the created communicator to MPI_COMM_NULL for the processes that are not in the group , may be preceding your collectives by a: 
</span><br>
<span class="quotelev1">&gt; if (MPI_COMM_NULL != new_comm) { 
</span><br>
<span class="quotelev1">&gt;    &lt;your collective&gt; 
</span><br>
<span class="quotelev1">&gt; } 
</span><br>
<span class="quotelev1">&gt; could be enough. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But may be I'm wrong...
</span><br>
<p>You're not.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18729.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>Previous message:</strong> <a href="18727.php">Jeffrey Squyres: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>In reply to:</strong> <a href="18694.php">nadia.derbey_at_[hidden]: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
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
