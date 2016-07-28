<?
$subject_val = "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 22:50:50 2014" -->
<!-- isoreceived="20140625025050" -->
<!-- sent="Wed, 25 Jun 2014 11:51:03 +0900" -->
<!-- isosent="20140625025103" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality" -->
<!-- id="53AA3917.5070702_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMD57oddh3FQ9StR7THD5NkcvCU=B1VJPraZN2tWEWTeHO_xng_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-24 22:51:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15053.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<li><strong>Previous message:</strong> <a href="15051.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<li><strong>In reply to:</strong> <a href="15050.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15056.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>Reply:</strong> <a href="15056.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>i pushed the change (r32079) and updated the wiki.
<br>
<p>the RFC can be now closed and the consensus is semantic of
<br>
opal_hwloc_base_get_relative_locality
<br>
will not be changed since this is not needed : the hang is a coll/ml
<br>
bug, so it will be fixed within coll/ml.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/06/25 1:12, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Yeah, we should make that change, if you wouldn't mind doing it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 24, 2014 at 9:43 AM, Gilles GOUAILLARDET &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That makes perfect sense.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What about FCA_IS_LOCAL_PROCESS ?
</span><br>
<span class="quotelev2">&gt;&gt; Shall we keep it or shall we use directly OPAL_PROC_ON_LOCAL_NODE directly
</span><br>
<span class="quotelev2">&gt;&gt; ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We discussed this at the devel conference this morning. The root cause of
</span><br>
<span class="quotelev2">&gt;&gt; the problem is a test in coll/ml that we feel is incorrect - it basically
</span><br>
<span class="quotelev2">&gt;&gt; checks to see if the proc itself is bound, and then assumes that all other
</span><br>
<span class="quotelev2">&gt;&gt; procs are similarly bound. This in fact is never guaranteed to be true as
</span><br>
<span class="quotelev2">&gt;&gt; someone could use the rank_file method to specify that some procs are to be
</span><br>
<span class="quotelev2">&gt;&gt; left unbound, while others are to be bound to specified cpus.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nathan has looked at that check before and believes it isn't necessary.
</span><br>
<span class="quotelev2">&gt;&gt; All coll/ml really needs to know is that the two procs share the same node,
</span><br>
<span class="quotelev2">&gt;&gt; and the current locality algorithm will provide that information. We have
</span><br>
<span class="quotelev2">&gt;&gt; asked him to &quot;fix&quot; the coll/ml selection logic to resolve that situation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After then discussing the various locality definitions, it was our feeling
</span><br>
<span class="quotelev2">&gt;&gt; that the current definition is probably the better one unless you have a
</span><br>
<span class="quotelev2">&gt;&gt; reason for changing it other than coll/ml. If so, we'd be happy to revisit
</span><br>
<span class="quotelev2">&gt;&gt; the proposal.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Make sense?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jun 24, 2014 at 3:24 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: semantic change of opal_hwloc_base_get_relative_locality
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY:  make is closer to what coll/ml expects.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Currently, opal_hwloc_base_get_relative_locality means &quot;at what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; level do these procs share cpus&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       however, coll/ml is using it as &quot;at what level are these procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commonly bound&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       it is important to note that if a task is bound to all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available cpus, locality should
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       be set to OPAL_PROC_ON_NODE only.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       /* e.g. on a single socket Sandy Bridge system, use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_PROC_ON_NODE instead of OPAL_PROC_ON_L3CACHE */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       This has been initially discussed in the devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15030.php">http://www.open-mpi.org/community/lists/devel/2014/06/15030.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       as advised by Ralph, i browsed the source code looking for how the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ompi_proc_t *)-&gt;proc_flags is used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       so far, it is mainly used to figure out wether the proc is on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same node or not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       notable exceptions are :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        a) ompi/mca/sbgp/basesmsocket/sbgp_basesmsocket_component.c :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_PROC_ON_LOCAL_SOCKET
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        b) ompi/mca/coll/fca/coll_fca_module.c and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oshmem/mca/scoll/fca/scoll_fca_module.c : FCA_IS_LOCAL_PROCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       about a) the new definition fixes a hang in coll/ml
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       about b) FCA_IS_LOCAL_SOCKET looks like legacy code /* i could only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found OMPI_PROC_FLAG_LOCAL in v1.3 */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       so this macro can be simply removed and replaced with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_PROC_ON_LOCAL_NODE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       at this stage, i cannot find any objection not to do the described
</span><br>
<span class="quotelev3">&gt;&gt;&gt; change.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       please report if any and/or feel free to comment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: see the two attached patches
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: June 30th, after the Open MPI developers meeting in Chicago,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; June 24-26.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          The RFC will become final only after the meeting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          /* Ralph already added this topic to the agenda */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15046.php">http://www.open-mpi.org/community/lists/devel/2014/06/15046.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15049.php">http://www.open-mpi.org/community/lists/devel/2014/06/15049.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15050.php">http://www.open-mpi.org/community/lists/devel/2014/06/15050.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15052/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15053.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<li><strong>Previous message:</strong> <a href="15051.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<li><strong>In reply to:</strong> <a href="15050.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15056.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>Reply:</strong> <a href="15056.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
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
