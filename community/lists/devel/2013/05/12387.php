<?
$subject_val = "[OMPI devel] RFC: Remove old MCA parameter system from trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 15 11:39:35 2013" -->
<!-- isoreceived="20130515153935" -->
<!-- sent="Wed, 15 May 2013 09:39:30 -0600" -->
<!-- isosent="20130515153930" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Remove old MCA parameter system from trunk" -->
<!-- id="20130515153930.GA83165_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Remove old MCA parameter system from trunk<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-15 11:39:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12388.php">Ralph Castain: "[OMPI devel] 1.7.2rc1"</a>
<li><strong>Previous message:</strong> <a href="12386.php">Ralph Castain: "Re: [OMPI devel] RFC: rewrite of ORTE OOB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: The mca_base_var_* API replaces the mca_base_var_* API. A support layer for the old API currently resides in the trunk. I will remove the layer from the trunk and replace any remaining mca_base_param_* calls with their equivalents in the new API. The support layer will remain for the 1.7/1.8 release series.
<br>
<p>When: This RFC is a heads up. I will remove the old API on Monday, May 20, 2013.
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12388.php">Ralph Castain: "[OMPI devel] 1.7.2rc1"</a>
<li><strong>Previous message:</strong> <a href="12386.php">Ralph Castain: "Re: [OMPI devel] RFC: rewrite of ORTE OOB"</a>
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
