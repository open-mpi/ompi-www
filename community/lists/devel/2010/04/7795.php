<?
$subject_val = "[OMPI devel] Errmgr update";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 23 00:51:58 2010" -->
<!-- isoreceived="20100423045158" -->
<!-- sent="Thu, 22 Apr 2010 22:51:49 -0600" -->
<!-- isosent="20100423045149" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Errmgr update" -->
<!-- id="BD10EBA6-1555-4EED-8E55-09519B77E750_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Errmgr update<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-23 00:51:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7796.php">George Bosilca: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="7794.php">Jeff Squyres: "Re: [OMPI devel] New OMPI MPI extension"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>Per the last telecon and some email threads, I have updated the errmgr framework to allow a greater range of response options and remove several loopback messages. See the commit message for more description of what was done:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset/23023">https://svn.open-mpi.org/trac/ompi/changeset/23023</a>
<br>
<p>Please note that I had to touch all the PLM modules to change their function call to report a failed launch. I'm pretty sure I got those changes right, but I cannot verify it for all environments. So please give it a try when you can and let me know if you encounter a problem.
<br>
<p>I tested this change with both threaded and non-threaded OPAL configurations, and it worked just fine (including for comm_spawn). However, I would not claim that the testing was exhaustive, and it obviously only covered a couple of environments (ssh and slurm). So again, give it a try and let me know if you encounter a problem.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7796.php">George Bosilca: "Re: [OMPI devel] Segmentation fault on x86_64 on heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="7794.php">Jeff Squyres: "Re: [OMPI devel] New OMPI MPI extension"</a>
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
