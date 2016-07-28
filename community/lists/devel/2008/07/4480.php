<?
$subject_val = "Re: [OMPI devel] Change in hostfile behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 08:43:50 2008" -->
<!-- isoreceived="20080729124350" -->
<!-- sent="Tue, 29 Jul 2008 06:43:40 -0600" -->
<!-- isosent="20080729124340" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in hostfile behavior" -->
<!-- id="968FF408-7BE8-4E7B-B249-359E82D271CB_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990807282317u1be4d769ydeacb653a8562743_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 08:43:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4481.php">Jeff Squyres: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>Previous message:</strong> <a href="4479.php">Pavel Shamis (Pasha): "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4478.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in hostfile behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4481.php">Jeff Squyres: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>Reply:</strong> <a href="4481.php">Jeff Squyres: "Re: [OMPI devel] Change in hostfile behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lenny's point is true - except for the danger of setting that mca  
<br>
param and its possible impact on ORTE daemons+mpirun - see other note  
<br>
in that regard. However, it would only be useful if the same user was  
<br>
doing it.
<br>
<p>I believe Tim was concerned about the case where two users are sharing  
<br>
nodes. There is no good solution for that case. Two mpiruns done by  
<br>
different users that share a node and who have no knowledge of the  
<br>
other's actions will cause collision.
<br>
<p>We should probably warn about that in our FAQ or something since that  
<br>
is a fairly common use-case - only thing I can think of is to  
<br>
recommend people default to running without affinity and only set it  
<br>
when they -know- they have sole use of their nodes.
<br>
<p><p>On Jul 29, 2008, at 12:17 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; for two separate runs we can use slot_list parameter  
</span><br>
<span class="quotelev1">&gt; ( opal_paffinity_base_slot_list ) to have paffinity
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1: mpirun -mca opal_paffinity_base_slot_list &quot;0-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 :mpirun -mca opal_paffinity_base_slot_list &quot;2-3&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/28/08, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Actually, this is true today regardless of this change. If two  
</span><br>
<span class="quotelev1">&gt; separate mpirun invocations share a node and attempt to use  
</span><br>
<span class="quotelev1">&gt; paffinity, they will conflict with each other. The problem isn't  
</span><br>
<span class="quotelev1">&gt; caused by the hostfile sub-allocation. The problem is that the two  
</span><br>
<span class="quotelev1">&gt; mpiruns have no knowledge of each other's actions, and hence assign  
</span><br>
<span class="quotelev1">&gt; node ranks to each process independently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thus, we would have two procs that think they are node rank=0 and  
</span><br>
<span class="quotelev1">&gt; should therefore bind to the 0 processor, and so on up the line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Obviously, if you run within one mpirun and have two app_contexts,  
</span><br>
<span class="quotelev1">&gt; the hostfile sub-allocation is fine - mpirun will track node rank  
</span><br>
<span class="quotelev1">&gt; across the app_contexts. It is only the use of multiple mpiruns that  
</span><br>
<span class="quotelev1">&gt; share nodes that causes the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Several of us have discussed this problem and have a proposed  
</span><br>
<span class="quotelev1">&gt; solution for 1.4. Once we get past 1.3 (someday!), we'll bring it to  
</span><br>
<span class="quotelev1">&gt; the group.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2008, at 10:44 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My only concern is how will this interact with PLPA.
</span><br>
<span class="quotelev1">&gt; Say two Open MPI jobs each use &quot;half&quot; the cores (slots) on a
</span><br>
<span class="quotelev1">&gt; particular node...  how would they be able to bind themselves to
</span><br>
<span class="quotelev1">&gt; a disjoint set of cores?  I'm not asking you to solve this Ralph, I'm
</span><br>
<span class="quotelev1">&gt; just pointing it out so we can maybe warn users that if both jobs  
</span><br>
<span class="quotelev1">&gt; sharing
</span><br>
<span class="quotelev1">&gt; a node try to use processor affinity, we don't make that magically  
</span><br>
<span class="quotelev1">&gt; work well,
</span><br>
<span class="quotelev1">&gt; and that we would expect it to do quite poorly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could see disabling paffinity and/or warning if it was enabled for
</span><br>
<span class="quotelev1">&gt; one of these &quot;fractional&quot; nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 28, 2008 at 11:43 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Per an earlier telecon, I have modified the hostfile behavior  
</span><br>
<span class="quotelev1">&gt; slightly to
</span><br>
<span class="quotelev1">&gt; allow hostfiles to subdivide allocations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Briefly: given an allocation, we allow users to specify --hostfile  
</span><br>
<span class="quotelev1">&gt; on a
</span><br>
<span class="quotelev1">&gt; per-app_context basis. In this mode, the hostfile info is used to  
</span><br>
<span class="quotelev1">&gt; filter the
</span><br>
<span class="quotelev1">&gt; nodes that will be used for that app_context. However, the prior
</span><br>
<span class="quotelev1">&gt; implementation only filtered the nodes themselves - i.e., it was a  
</span><br>
<span class="quotelev1">&gt; binary
</span><br>
<span class="quotelev1">&gt; filter that allowed you to include or exclude an entire node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The change now allows you to include a specified #slots for a given  
</span><br>
<span class="quotelev1">&gt; node as
</span><br>
<span class="quotelev1">&gt; opposed to -all- slots from that node. You are limited to the #slots
</span><br>
<span class="quotelev1">&gt; included in the original allocation. I just realized that I hadn't  
</span><br>
<span class="quotelev1">&gt; output a
</span><br>
<span class="quotelev1">&gt; warning if you attempt to violate this condition - will do so shortly.
</span><br>
<span class="quotelev1">&gt; Rather than just abort if this happens, I set the allocation to that  
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev1">&gt; original - please let me know if you would prefer it to abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have interest in this behavior, please check it out and let  
</span><br>
<span class="quotelev1">&gt; me know
</span><br>
<span class="quotelev1">&gt; if this meets needs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt; I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4480/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4481.php">Jeff Squyres: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>Previous message:</strong> <a href="4479.php">Pavel Shamis (Pasha): "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4478.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in hostfile behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4481.php">Jeff Squyres: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>Reply:</strong> <a href="4481.php">Jeff Squyres: "Re: [OMPI devel] Change in hostfile behavior"</a>
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
