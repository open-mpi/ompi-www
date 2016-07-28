<?
$subject_val = "Re: [OMPI devel] Change in hostfile behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 02:17:44 2008" -->
<!-- isoreceived="20080729061744" -->
<!-- sent="Tue, 29 Jul 2008 09:17:38 +0300" -->
<!-- isosent="20080729061738" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in hostfile behavior" -->
<!-- id="453d39990807282317u1be4d769ydeacb653a8562743_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="94F32193-2F75-4070-9DDB-CA4FB2E72B8F_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Change in hostfile behavior<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 02:17:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4479.php">Pavel Shamis (Pasha): "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4477.php">Jeff Squyres: "[OMPI devel] MCA_BTL_BASE_VERSION_1_0_1 and MCA_BTL_BASE_VERSION_1_0_0"</a>
<li><strong>In reply to:</strong> <a href="4474.php">Ralph Castain: "Re: [OMPI devel] Change in hostfile behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4480.php">Ralph Castain: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>Reply:</strong> <a href="4480.php">Ralph Castain: "Re: [OMPI devel] Change in hostfile behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
for two separate runs we can use slot_list parameter (
<br>
opal_paffinity_base_slot_list ) to have paffinity
<br>
<p>1: mpirun -mca opal_paffinity_base_slot_list &quot;0-1&quot;
<br>
<p>2 :mpirun -mca opal_paffinity_base_slot_list &quot;2-3&quot;
<br>
<p>On 7/28/08, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, this is true today regardless of this change. If two separate
</span><br>
<span class="quotelev1">&gt; mpirun invocations share a node and attempt to use paffinity, they will
</span><br>
<span class="quotelev1">&gt; conflict with each other. The problem isn't caused by the hostfile
</span><br>
<span class="quotelev1">&gt; sub-allocation. The problem is that the two mpiruns have no knowledge of
</span><br>
<span class="quotelev1">&gt; each other's actions, and hence assign node ranks to each process
</span><br>
<span class="quotelev1">&gt; independently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thus, we would have two procs that think they are node rank=0 and should
</span><br>
<span class="quotelev1">&gt; therefore bind to the 0 processor, and so on up the line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Obviously, if you run within one mpirun and have two app_contexts, the
</span><br>
<span class="quotelev1">&gt; hostfile sub-allocation is fine - mpirun will track node rank across the
</span><br>
<span class="quotelev1">&gt; app_contexts. It is only the use of multiple mpiruns that share nodes that
</span><br>
<span class="quotelev1">&gt; causes the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Several of us have discussed this problem and have a proposed solution for
</span><br>
<span class="quotelev1">&gt; 1.4. Once we get past 1.3 (someday!), we'll bring it to the group.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2008, at 10:44 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  My only concern is how will this interact with PLPA.
</span><br>
<span class="quotelev2">&gt;&gt; Say two Open MPI jobs each use &quot;half&quot; the cores (slots) on a
</span><br>
<span class="quotelev2">&gt;&gt; particular node...  how would they be able to bind themselves to
</span><br>
<span class="quotelev2">&gt;&gt; a disjoint set of cores?  I'm not asking you to solve this Ralph, I'm
</span><br>
<span class="quotelev2">&gt;&gt; just pointing it out so we can maybe warn users that if both jobs sharing
</span><br>
<span class="quotelev2">&gt;&gt; a node try to use processor affinity, we don't make that magically work
</span><br>
<span class="quotelev2">&gt;&gt; well,
</span><br>
<span class="quotelev2">&gt;&gt; and that we would expect it to do quite poorly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I could see disabling paffinity and/or warning if it was enabled for
</span><br>
<span class="quotelev2">&gt;&gt; one of these &quot;fractional&quot; nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jul 28, 2008 at 11:43 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Per an earlier telecon, I have modified the hostfile behavior slightly to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allow hostfiles to subdivide allocations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Briefly: given an allocation, we allow users to specify --hostfile on a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; per-app_context basis. In this mode, the hostfile info is used to filter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes that will be used for that app_context. However, the prior
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation only filtered the nodes themselves - i.e., it was a binary
</span><br>
<span class="quotelev3">&gt;&gt;&gt; filter that allowed you to include or exclude an entire node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The change now allows you to include a specified #slots for a given node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opposed to -all- slots from that node. You are limited to the #slots
</span><br>
<span class="quotelev3">&gt;&gt;&gt; included in the original allocation. I just realized that I hadn't output
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning if you attempt to violate this condition - will do so shortly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rather than just abort if this happens, I set the allocation to that of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; original - please let me know if you would prefer it to abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you have interest in this behavior, please check it out and let me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if this meets needs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4478/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4479.php">Pavel Shamis (Pasha): "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4477.php">Jeff Squyres: "[OMPI devel] MCA_BTL_BASE_VERSION_1_0_1 and MCA_BTL_BASE_VERSION_1_0_0"</a>
<li><strong>In reply to:</strong> <a href="4474.php">Ralph Castain: "Re: [OMPI devel] Change in hostfile behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4480.php">Ralph Castain: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>Reply:</strong> <a href="4480.php">Ralph Castain: "Re: [OMPI devel] Change in hostfile behavior"</a>
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
