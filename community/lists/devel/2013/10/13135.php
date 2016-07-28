<?
$subject_val = "[OMPI devel] openmpi with FT enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 28 11:47:47 2013" -->
<!-- isoreceived="20131028154747" -->
<!-- sent="Mon, 28 Oct 2013 16:47:46 +0100" -->
<!-- isosent="20131028154746" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi with FT enabled" -->
<!-- id="20131028154746.GB18035_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi with FT enabled<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-28 11:47:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13136.php">Ralph Castain: "Re: [OMPI devel] openmpi with FT enabled"</a>
<li><strong>Previous message:</strong> <a href="13134.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  shmem vs. oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13136.php">Ralph Castain: "Re: [OMPI devel] openmpi with FT enabled"</a>
<li><strong>Reply:</strong> <a href="13136.php">Ralph Castain: "Re: [OMPI devel] openmpi with FT enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to compile openmpi (Revision: 29539) from svn
<br>
with '--with-ft=cr'.  I get a compilation error and I am
<br>
lost how to solve it:
<br>
<p>../../../../opal/mca/base/mca_base_components_open.c: In function 'open_components':
<br>
../../../../opal/mca/base/mca_base_components_open.c:144:9: error: 'mca_base_component_distill_checkpoint_ready' undeclared (first use in this function)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (mca_base_component_distill_checkpoint_ready) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../opal/mca/base/mca_base_components_open.c:144:9: note: each undeclared identifier is reported only once for each function it appears in
<br>
<p>mca_base_component_distill_checkpoint_ready exists in 
<br>
<p>contrib/amca-param-sets/ft-enable-cr
<br>
<p>but I am not sure if contents from this file can be used in the code or
<br>
not. Any pointers on how to solve this error would be welcome.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13136.php">Ralph Castain: "Re: [OMPI devel] openmpi with FT enabled"</a>
<li><strong>Previous message:</strong> <a href="13134.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  shmem vs. oshmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13136.php">Ralph Castain: "Re: [OMPI devel] openmpi with FT enabled"</a>
<li><strong>Reply:</strong> <a href="13136.php">Ralph Castain: "Re: [OMPI devel] openmpi with FT enabled"</a>
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
