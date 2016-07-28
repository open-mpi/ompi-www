<?
$subject_val = "Re: [OMPI devel] OMPI 1.8.4rc1 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 03:44:30 2014" -->
<!-- isoreceived="20141104084430" -->
<!-- sent="Tue, 04 Nov 2014 17:44:36 +0900" -->
<!-- isosent="20141104084436" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.8.4rc1 issues" -->
<!-- id="545891F4.8010201_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C78AD916-0A7D-4A67-A548-D965A42E6990_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.8.4rc1 issues<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 03:44:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16173.php">Bert Wesarg: "[OMPI devel] Request for a Open MPI SotU BoF slot for VampirTrace"</a>
<li><strong>Previous message:</strong> <a href="16171.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>In reply to:</strong> <a href="16151.php">Ralph Castain: "[OMPI devel] OMPI 1.8.4rc1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16174.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.8.4rc1 issues"</a>
<li><strong>Reply:</strong> <a href="16174.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.8.4rc1 issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>On 2014/11/04 1:54, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the over-the-weekend MTT reports plus at least one comment on the list, we have the following issues to address:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * many-to-one continues to fail. Shall I just assume this is an unfixable problem or a bad test and ignore it?
</span><br>
my understanding is all the tasks send messages to task 0, task 0 cannot
<br>
process all of them in real time, store them and keep allocating memory
<br>
until an out of memory occurs.
<br>
this could be fixed with some kind of flow control but i cannot tell
<br>
this is an issue we want to get fixed.
<br>
/* this test is pretty extreme and unlikely to occur in the real world,
<br>
so solving it might require a lot of work for little value */
<br>
<span class="quotelev1">&gt; * neighbor_allgather_self segfaults in ompi_request_null or coll_base_comm_unselect or comm_activate or..., take your pick
</span><br>
i made PR #73 <a href="https://github.com/open-mpi/ompi-release/pull/73">https://github.com/open-mpi/ompi-release/pull/73</a> to fix this.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16173.php">Bert Wesarg: "[OMPI devel] Request for a Open MPI SotU BoF slot for VampirTrace"</a>
<li><strong>Previous message:</strong> <a href="16171.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>In reply to:</strong> <a href="16151.php">Ralph Castain: "[OMPI devel] OMPI 1.8.4rc1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16174.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.8.4rc1 issues"</a>
<li><strong>Reply:</strong> <a href="16174.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.8.4rc1 issues"</a>
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
