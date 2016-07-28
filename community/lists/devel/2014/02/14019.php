<?
$subject_val = "[OMPI devel] Bcol/mcol violations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  6 23:43:42 2014" -->
<!-- isoreceived="20140207044342" -->
<!-- sent="Thu, 6 Feb 2014 20:42:27 -0800" -->
<!-- isosent="20140207044227" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Bcol/mcol violations" -->
<!-- id="17FE1A17-6834-4AAA-8715-7EA20FFCE59C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Bcol/mcol violations<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-06 23:42:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14020.php">Ralph Castain: "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>Previous message:</strong> <a href="14018.php">Ralph Castain: "Re: [OMPI devel] singleton appears to be broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14023.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Reply:</strong> <a href="14023.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As many of you will have noticed, I have been struggling most of the evening with breakage on the trunk. This was initiated by adding .ompi_ignore to the coll/ml component, but the root cause of the problem is a blatant disregard for OMPI design rules in the bcol framework. Component-level headers from the coll/ml area have been included in multiple places throughout the bcol framework, making it impossible to separate these two areas.
<br>
<p>Unfortunately, this problem has now been propagated to the 1.7 branch. As release manager, I'm afraid that places me in a difficult position, and I'm going to have to insist that this either is fixed immediately (i.e., in next 24 hours), or I have to rescind/delete that area from the 1.7 branch and release an immediate 1.7.5 (with attendant apologies to the community for the screwup). We will then proceed with our intended plan, minus the bcol code.
<br>
<p>I'd appreciate someone letting me know if this problem (a) can even be fixed, given the degree of cross-connection I see in the bcol code, and (b) if it can, then by when.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14020.php">Ralph Castain: "Re: [OMPI devel] singleton appears to be broken"</a>
<li><strong>Previous message:</strong> <a href="14018.php">Ralph Castain: "Re: [OMPI devel] singleton appears to be broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14023.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
<li><strong>Reply:</strong> <a href="14023.php">Nathan Hjelm: "Re: [OMPI devel] Bcol/mcol violations"</a>
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
