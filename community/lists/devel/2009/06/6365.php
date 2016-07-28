<?
$subject_val = "[OMPI devel] Updating the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 19:57:28 2009" -->
<!-- isoreceived="20090630235728" -->
<!-- sent="Tue, 30 Jun 2009 17:57:14 -0600" -->
<!-- isosent="20090630235714" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Updating the trunk" -->
<!-- id="6DE64140-EEB1-461E-9DEF-8EF56EF84504_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Updating the trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-30 19:57:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6366.php">Brian Barrett: "Re: [OMPI devel] Updating the trunk"</a>
<li><strong>Previous message:</strong> <a href="6364.php">Eugene Loh: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6366.php">Brian Barrett: "Re: [OMPI devel] Updating the trunk"</a>
<li><strong>Reply:</strong> <a href="6366.php">Brian Barrett: "Re: [OMPI devel] Updating the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>If you are updating a prior checkout of the OMPI trunk with r21568,  
<br>
please be aware that there is an additional step required to make it  
<br>
build. Due to a quirk of the build system, you will need to do:
<br>
<p>rm ompi/tools/ompi_info/.deps/*
<br>
<p>and then re-run autogen/configure in order to build.
<br>
<p>The reason this is required is that the new ompi_info implementation  
<br>
generates .o files of the same name as the prior C++ implementation.  
<br>
As a result, the .deps files do not get updated - and therefore insist  
<br>
on looking for the old .cc files.
<br>
<p>Removing the .deps and re-running autogen/configure will resolve the  
<br>
problem.
<br>
<p>If you are doing a fresh checkout of the OMPI trunk, this will not  
<br>
affect you.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6366.php">Brian Barrett: "Re: [OMPI devel] Updating the trunk"</a>
<li><strong>Previous message:</strong> <a href="6364.php">Eugene Loh: "Re: [OMPI devel] Fwd: [OMPI svn-full] svn:open-mpi r21552"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6366.php">Brian Barrett: "Re: [OMPI devel] Updating the trunk"</a>
<li><strong>Reply:</strong> <a href="6366.php">Brian Barrett: "Re: [OMPI devel] Updating the trunk"</a>
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
