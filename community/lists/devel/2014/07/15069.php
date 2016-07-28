<?
$subject_val = "[OMPI devel] RFC: BTL Interface Change (1 of 5)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  2 17:46:39 2014" -->
<!-- isoreceived="20140702214639" -->
<!-- sent="Wed, 2 Jul 2014 15:46:38 -0600" -->
<!-- isosent="20140702214638" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: BTL Interface Change (1 of 5)" -->
<!-- id="20140702214638.GB64418_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: BTL Interface Change (1 of 5)<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-02 17:46:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15070.php">Ralph Castain: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Previous message:</strong> <a href="15068.php">Greg Thomsen: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is the first of several BTL interface changes I am proposing for
<br>
the 1.9/2.0 release series.
<br>
<p>What: Change naming of btl descriptor members. I propose we change
<br>
des_src and des_dst (and their associated counts) to be des_local and
<br>
des_remote. For receive callbacks the des_local member will be used to
<br>
communicate the segment information to the callback. The proposed change
<br>
will include updating all of the doxygen in btl.h as well as updating
<br>
all BTLs and BTL users to use the new naming scheme.
<br>
<p>Why: My btl usage makes use of both put and get operations on the same
<br>
descriptor. With the current naming scheme I need to ensure that there
<br>
is consistency beteen the segments described in des_src and des_dst
<br>
depending on whether a put or get operation is executed. Additionally,
<br>
the current naming prevents BTLs that do not require prepare/RMA matched
<br>
operations (do not set MCA_BTL_FLAGS_RDMA_MATCHED) from executing
<br>
multiple simultaneous put AND get operations. At the moment the
<br>
descriptor can only be used with one or the other. The naming change
<br>
makes it easier for BTL users to setup/modify descriptors for RMA
<br>
operations as the local segment and remote segment are always in the
<br>
same member field. The only issue I forsee with this change is that it
<br>
will require a little more work to move BTL fixes to the 1.8 release
<br>
series.
<br>
<p>When: I received feedback on this change last week at the developer's
<br>
meeting. I want to keep the timeout short as I intend to move the
<br>
enhance one-sided into the trunk by mid-August. Timeout set for a week
<br>
from today.
<br>
<p>Feedback on this proposal is greatly appreciated.
<br>
<p>-Nathan Hjelm
<br>
Application Readiness, HPC-5, LANL
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15069/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15070.php">Ralph Castain: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Previous message:</strong> <a href="15068.php">Greg Thomsen: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
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
