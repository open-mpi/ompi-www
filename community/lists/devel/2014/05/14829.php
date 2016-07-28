<?
$subject_val = "[OMPI devel] RFC: extend the BTL interface to include atomic operations";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 17:03:30 2014" -->
<!-- isoreceived="20140519210330" -->
<!-- sent="Mon, 19 May 2014 15:03:29 -0600" -->
<!-- isosent="20140519210329" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: extend the BTL interface to include atomic operations" -->
<!-- id="20140519210329.GK25411_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: extend the BTL interface to include atomic operations<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-19 17:03:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14830.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<li><strong>Previous message:</strong> <a href="14828.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: I want to extend the BTL interface to add support for atomic
<br>
operations. The initial cut presented here includes support for the
<br>
following features:
<br>
<p>&nbsp;- Support for atomic memory operations if supported by the
<br>
&nbsp;&nbsp;&nbsp;hardware. The attached patch includes support for add, and, or, and
<br>
&nbsp;&nbsp;&nbsp;xor. Adding additional operations should be trivial.
<br>
<p>&nbsp;- Support for both fetching (btl_fop) and non-fetching (btl_op)
<br>
&nbsp;&nbsp;&nbsp;semantics.
<br>
<p>&nbsp;- Support for blocking or non-blocking operation. Admittedly, I have
<br>
&nbsp;&nbsp;&nbsp;only implemented blocking versions for ugni so I am not sure if the
<br>
&nbsp;&nbsp;&nbsp;interface is ideal. Feedback on the non-blocking support would be
<br>
&nbsp;&nbsp;&nbsp;very appreciated.
<br>
<p>&nbsp;- Support for compare-and-swap operations.
<br>
<p>For simplicity this interface only supports 64-bit operations. I have
<br>
not thought about how to extend the interface to support arbitrary
<br>
sizes. Would it be useful to look at adding support for 32-bit or
<br>
128-bit operations? How about other datatypes (float)?
<br>
<p>Additionally, I added a new prepare function btl_prepare_rdma. The reasons
<br>
for this new function are: 1) prepare a fragment with no indication of
<br>
what endpoint will use it, 2) remove the need for a convertor where a
<br>
convertor is not needed. The function is meant to do what is needed to
<br>
prepare the region for arbitrary put, get, and atomic operations.
<br>
<p>Why: To provide optimal support for one-sided operations I need access
<br>
to the following at a minimum: atomic add, atomic fetch-and-add, and
<br>
atomic compare-and-swap. This interface was designed with these
<br>
operations in mind. To give a little hint as to the performance
<br>
improvements we can realize with atomics/rdma support in osc:
<br>
<p>Result obtained from osu_put_latency on two nodes of a Cray XE6 using
<br>
the uGNI btl.
<br>
<p># OSU MPI_Put latency Test
<br>
# Window creation: MPI_Win_allocate
<br>
# Synchronization: MPI_Win_lock/unlock
<br>
# Size            Latency (us)
<br>
0                         7.07
<br>
1                         7.33
<br>
2                         7.44
<br>
4                         7.26
<br>
8                         7.29
<br>
16                        7.37
<br>
32                        7.08
<br>
64                        7.10
<br>
128                       7.22
<br>
256                       7.48
<br>
512                       7.70
<br>
<p><p><p>Same benchmark, same nodes, atomic/rdma implementation:
<br>
<p># OSU MPI_Put latency Test
<br>
# Window creation: MPI_Win_allocate
<br>
# Synchronization: MPI_Win_lock/unlock
<br>
# Size            Latency (us)
<br>
0                         1.28
<br>
1                         2.40
<br>
2                         2.41
<br>
4                         2.41
<br>
8                         2.40
<br>
16                        2.45
<br>
32                        2.47
<br>
64                        2.52
<br>
128                       2.53
<br>
256                       2.58
<br>
512                       2.65
<br>
<p><p>When: This RFC is intended to start a discussion on what the atomic
<br>
interface for the BTLs should look like. I have no reservations with
<br>
completely re-thinking the interface as long as it doesn't 1) add the
<br>
convertor into my osc critical path, and 2) require allocation of btl
<br>
fragments for atomic operations. Lets plan on discussing extending the
<br>
BTLs at the June developer meeting. All I care about is getting the
<br>
design finalized in time for the 1.9 branch.
<br>
<p>I attatched a patch with the proposed BTL extension. I am leaving out
<br>
the ugni implementation of the interface for now.
<br>
<p>-Nathan Hjelm
<br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14829/btl_extension.patch">btl_extension.patch</a>
</ul>
<!-- attachment="btl_extension.patch" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14829/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14830.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<li><strong>Previous message:</strong> <a href="14828.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
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
