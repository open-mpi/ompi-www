<?
$subject_val = "Re: [OMPI devel] OMPI 1.8.4rc1 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 11:44:41 2014" -->
<!-- isoreceived="20141104164441" -->
<!-- sent="Tue, 4 Nov 2014 08:44:36 -0800" -->
<!-- isosent="20141104164436" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.8.4rc1 issues" -->
<!-- id="DB944888-7E9E-484B-99AC-C3D332B950B6_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="545891F4.8010201_at_iferc.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 11:44:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16175.php">Alina Sklarevich: "[OMPI devel] thread-tests hang"</a>
<li><strong>Previous message:</strong> <a href="16173.php">Bert Wesarg: "[OMPI devel] Request for a Open MPI SotU BoF slot for VampirTrace"</a>
<li><strong>In reply to:</strong> <a href="16172.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI 1.8.4rc1 issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Nov 4, 2014, at 12:44 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/11/04 1:54, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Looking at the over-the-weekend MTT reports plus at least one comment on the list, we have the following issues to address:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * many-to-one continues to fail. Shall I just assume this is an unfixable problem or a bad test and ignore it?
</span><br>
<span class="quotelev1">&gt; my understanding is all the tasks send messages to task 0, task 0 cannot
</span><br>
<span class="quotelev1">&gt; process all of them in real time, store them and keep allocating memory
</span><br>
<span class="quotelev1">&gt; until an out of memory occurs.
</span><br>
<span class="quotelev1">&gt; this could be fixed with some kind of flow control but i cannot tell
</span><br>
<span class="quotelev1">&gt; this is an issue we want to get fixed.
</span><br>
<span class="quotelev1">&gt; /* this test is pretty extreme and unlikely to occur in the real world,
</span><br>
<span class="quotelev1">&gt; so solving it might require a lot of work for little value */
</span><br>
<p>Okay, I&#226;&#128;&#153;ll ignore it then
<br>
<p><span class="quotelev2">&gt;&gt; * neighbor_allgather_self segfaults in ompi_request_null or coll_base_comm_unselect or comm_activate or..., take your pick
</span><br>
<span class="quotelev1">&gt; i made PR #73 <a href="https://github.com/open-mpi/ompi-release/pull/73">https://github.com/open-mpi/ompi-release/pull/73</a> to fix this.
</span><br>
<p>Thanks!
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16172.php">http://www.open-mpi.org/community/lists/devel/2014/11/16172.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16175.php">Alina Sklarevich: "[OMPI devel] thread-tests hang"</a>
<li><strong>Previous message:</strong> <a href="16173.php">Bert Wesarg: "[OMPI devel] Request for a Open MPI SotU BoF slot for VampirTrace"</a>
<li><strong>In reply to:</strong> <a href="16172.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI 1.8.4rc1 issues"</a>
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
