<?
$subject_val = "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 10:43:27 2014" -->
<!-- isoreceived="20140624144327" -->
<!-- sent="Tue, 24 Jun 2014 23:43:20 +0900" -->
<!-- isosent="20140624144320" -->
<!-- name="Gilles GOUAILLARDET" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality" -->
<!-- id="y1vi4c8y62u4ouby8ea4bkyh.1403621000225_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality" -->
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
<strong>From:</strong> Gilles GOUAILLARDET (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-24 10:43:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15050.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>Previous message:</strong> <a href="15048.php">Ralph Castain: "Re: [OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15050.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>Reply:</strong> <a href="15050.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>That makes perfect sense.
<br>
<p>What about FCA_IS_LOCAL_PROCESS ?
<br>
Shall we keep it or shall we use directly OPAL_PROC_ON_LOCAL_NODE directly ?
<br>
<p>Cheers
<br>
<p>Gilles
<br>
<p>Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Hi Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We discussed this at the devel conference this morning. The root cause of the problem is a test in coll/ml that we feel is incorrect - it basically checks to see if the proc itself is bound, and then assumes that all other procs are similarly bound. This in fact is never guaranteed to be true as someone could use the rank_file method to specify that some procs are to be left unbound, while others are to be bound to specified cpus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Nathan has looked at that check before and believes it isn't necessary. All coll/ml really needs to know is that the two procs share the same node, and the current locality algorithm will provide that information. We have asked him to &quot;fix&quot; the coll/ml selection logic to resolve that situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;After then discussing the various locality definitions, it was our feeling that the current definition is probably the better one unless you have a reason for changing it other than coll/ml. If so, we'd be happy to revisit the proposal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Tue, Jun 24, 2014 at 3:24 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;WHAT: semantic change of opal_hwloc_base_get_relative_locality
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;WHY: &#194;&#160;make is closer to what coll/ml expects.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; Currently, opal_hwloc_base_get_relative_locality means &quot;at what level do these procs share cpus&quot;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; however, coll/ml is using it as &quot;at what level are these procs commonly bound&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; it is important to note that if a task is bound to all the available cpus, locality should
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; be set to OPAL_PROC_ON_NODE only.
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; /* e.g. on a single socket Sandy Bridge system, use OPAL_PROC_ON_NODE instead of OPAL_PROC_ON_L3CACHE */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; This has been initially discussed in the devel mailing list
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15030.php">http://www.open-mpi.org/community/lists/devel/2014/06/15030.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; as advised by Ralph, i browsed the source code looking for how the (ompi_proc_t *)-&gt;proc_flags is used.
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; so far, it is mainly used to figure out wether the proc is on the same node or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; notable exceptions are :
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;a) ompi/mca/sbgp/basesmsocket/sbgp_basesmsocket_component.c : OPAL_PROC_ON_LOCAL_SOCKET
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;b) ompi/mca/coll/fca/coll_fca_module.c and oshmem/mca/scoll/fca/scoll_fca_module.c : FCA_IS_LOCAL_PROCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; about a) the new definition fixes a hang in coll/ml
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; about b) FCA_IS_LOCAL_SOCKET looks like legacy code /* i could only found OMPI_PROC_FLAG_LOCAL in v1.3 */
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; so this macro can be simply removed and replaced with OPAL_PROC_ON_LOCAL_NODE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; at this stage, i cannot find any objection not to do the described change.
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; please report if any and/or feel free to comment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;WHERE: see the two attached patches
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;TIMEOUT: June 30th, after the Open MPI developers meeting in Chicago, June 24-26.
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;The RFC will become final only after the meeting.
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;/* Ralph already added this topic to the agenda */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15046.php">http://www.open-mpi.org/community/lists/devel/2014/06/15046.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15049/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15050.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>Previous message:</strong> <a href="15048.php">Ralph Castain: "Re: [OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15050.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>Reply:</strong> <a href="15050.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
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
