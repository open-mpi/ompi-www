<?
$subject_val = "[OMPI devel] MCA revamp phase 1 in place. SVN quiet time over now";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 27 17:35:33 2013" -->
<!-- isoreceived="20130327213533" -->
<!-- sent="Wed, 27 Mar 2013 15:35:29 -0600" -->
<!-- isosent="20130327213529" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] MCA revamp phase 1 in place. SVN quiet time over now" -->
<!-- id="20130327213529.GA73218_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] MCA revamp phase 1 in place. SVN quiet time over now<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-27 17:35:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12229.php">Barrett, Brian W: "[OMPI devel] Open MPI 1.7rc9 tarballs up"</a>
<li><strong>Previous message:</strong> <a href="12227.php">Nathan Hjelm: "[OMPI devel] SVN quiet time starting now"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Phase 1 of the MCA revamp is now in the trunk. Changes:
<br>
<p>&nbsp;&nbsp;- New variable system interface (mca_base_var) replaces mca_base_param.
<br>
&nbsp;&nbsp;- &quot;Shim&quot; layer for mca_base_param implemented on top of mca_base_var. This layer will be removed around June 1, 2013.
<br>
&nbsp;&nbsp;- Support for an &quot;override&quot; MCA variable file (openmpi-mca-param-override.conf). Variables in this file can not be overridden by either the environment or another file.
<br>
&nbsp;&nbsp;- Support for more variable types: bool, unsigned, unsigned long long.
<br>
&nbsp;&nbsp;- Support for enumerated integer variables.
<br>
&nbsp;&nbsp;- Support for the k, m, and g suffix for integers. Ex. 1k = 1024.
<br>
&nbsp;&nbsp;- New framework system. All frameworks have been updated to use the new system.
<br>
&nbsp;&nbsp;- Cleaner ompi_info implementation.
<br>
&nbsp;&nbsp;- Etc. See individual commit messages for more details.
<br>
<p>MPI_T_* support will follow in a week or so.
<br>
<p><p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12229.php">Barrett, Brian W: "[OMPI devel] Open MPI 1.7rc9 tarballs up"</a>
<li><strong>Previous message:</strong> <a href="12227.php">Nathan Hjelm: "[OMPI devel] SVN quiet time starting now"</a>
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
