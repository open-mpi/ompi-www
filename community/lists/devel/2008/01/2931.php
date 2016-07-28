<?
$subject_val = "Re: [OMPI devel] patch for building gm btl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 16:01:14 2008" -->
<!-- isoreceived="20080103210114" -->
<!-- sent="Thu, 03 Jan 2008 16:00:57 -0500" -->
<!-- isosent="20080103210057" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] patch for building gm btl" -->
<!-- id="477D4D09.4060403_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4779C4BC.5010102_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] patch for building gm btl<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-03 16:00:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2932.php">Paul H. Hargrove: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Previous message:</strong> <a href="2930.php">George Bosilca: "Re: [OMPI devel] Fixing SPARC bus errors"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2915.php">Paul H. Hargrove: "[OMPI devel] patch for building gm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2932.php">Paul H. Hargrove: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Reply:</strong> <a href="2932.php">Paul H. Hargrove: "Re: [OMPI devel] patch for building gm btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul,
<br>
<p>Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; The fact that this has gone unfixed for 2 months suggests to me that 
</span><br>
<span class="quotelev1">&gt; nobody is building the GM BTL.  So, how would I go about checking ...
</span><br>
<p><span class="quotelev1">&gt; a) ...if there exists any periodic build of the GM BTL via MTT?
</span><br>
<p>We are deploying MTT on all our clusters. Right now, we use our own MTT 
<br>
server, but we will report a subset of the test to the OpenMPI server 
<br>
once everything is working.
<br>
<p><span class="quotelev1">&gt; c) ...which GM library versions such builds, if any, compile against
</span><br>
<p>There is no GM tests currently under our still-evolving MTT setup. Once 
<br>
we have a working setup, we will run a single Pallas test on 32 nodes 
<br>
with GM-2.1.28, two 2G NICs per node (single and dual port). There is no 
<br>
active development on GM, just kernel updates, so the GM version does 
<br>
not matter much.
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2932.php">Paul H. Hargrove: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Previous message:</strong> <a href="2930.php">George Bosilca: "Re: [OMPI devel] Fixing SPARC bus errors"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2915.php">Paul H. Hargrove: "[OMPI devel] patch for building gm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2932.php">Paul H. Hargrove: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Reply:</strong> <a href="2932.php">Paul H. Hargrove: "Re: [OMPI devel] patch for building gm btl"</a>
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
