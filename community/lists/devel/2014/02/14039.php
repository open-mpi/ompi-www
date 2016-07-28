<?
$subject_val = "[OMPI devel] RFC: optimize probe in ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 17:01:26 2014" -->
<!-- isoreceived="20140207220126" -->
<!-- sent="Fri, 7 Feb 2014 15:01:25 -0700" -->
<!-- isosent="20140207220125" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: optimize probe in ob1" -->
<!-- id="20140207220125.GG97640_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: optimize probe in ob1<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 17:01:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Previous message:</strong> <a href="14038.php">Ralph Castain: "[OMPI devel] Update on 1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14081.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Reply:</strong> <a href="14081.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: The current probe algorithm in ob1 is linear with respect to the
<br>
number or processes in the job. I wish to change the algorithm to be
<br>
linear in the number of processes with unexpected messages. To do this I
<br>
added an additional opal_list_t to the ob1 communicator and made the ob1
<br>
process a list_item_t. When an unexpected message comes in on a proc it
<br>
is added to that proc's unexpected message queue and the proc is added
<br>
to the communicator's list of procs with unexpected messages
<br>
(unexpected_procs) if it isn't already on that list. When matching a
<br>
probe request this list is used to determine which procs to look at to
<br>
find an unexpected message. The new list is protected by the matching
<br>
lock so no extra locking is needed.
<br>
<p>Why: I have a benchmark that makes heavy use of MPI_Iprobe in one if its
<br>
phases. I discovered that the primary reason this benchmark was running
<br>
slow with Open MPI is the probe algorithm.
<br>
<p>When: This is another simple optimization. It only affects the
<br>
unexpected message path and will speed up probe requests. This is
<br>
intended to go into 1.7.5. Setting the timeout to next Tuesday (which
<br>
gives me time to verify the improvment at scale-- 131,000 PEs).
<br>
<p>See the attached patch.
<br>
<p>-Nathan
<br>
<p><p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14039/iprobe_patch.patch">iprobe_patch.patch</a>
</ul>
<!-- attachment="iprobe_patch.patch" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14039/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Previous message:</strong> <a href="14038.php">Ralph Castain: "[OMPI devel] Update on 1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14081.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Reply:</strong> <a href="14081.php">George Bosilca: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
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
