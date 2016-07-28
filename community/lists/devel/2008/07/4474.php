<?
$subject_val = "Re: [OMPI devel] Change in hostfile behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 14:00:27 2008" -->
<!-- isoreceived="20080728180027" -->
<!-- sent="Mon, 28 Jul 2008 12:00:06 -0600" -->
<!-- isosent="20080728180006" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in hostfile behavior" -->
<!-- id="94F32193-2F75-4070-9DDB-CA4FB2E72B8F_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220807280944y2691d785y66ede3480943e6f7_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-07-28 14:00:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4475.php">Jeff Squyres: "[OMPI devel] parallel debugger attach"</a>
<li><strong>Previous message:</strong> <a href="4473.php">Terry Dontje: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4472.php">Tim Mattox: "Re: [OMPI devel] Change in hostfile behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4478.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>Reply:</strong> <a href="4478.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in hostfile behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, this is true today regardless of this change. If two  
<br>
separate mpirun invocations share a node and attempt to use paffinity,  
<br>
they will conflict with each other. The problem isn't caused by the  
<br>
hostfile sub-allocation. The problem is that the two mpiruns have no  
<br>
knowledge of each other's actions, and hence assign node ranks to each  
<br>
process independently.
<br>
<p>Thus, we would have two procs that think they are node rank=0 and  
<br>
should therefore bind to the 0 processor, and so on up the line.
<br>
<p>Obviously, if you run within one mpirun and have two app_contexts, the  
<br>
hostfile sub-allocation is fine - mpirun will track node rank across  
<br>
the app_contexts. It is only the use of multiple mpiruns that share  
<br>
nodes that causes the problem.
<br>
<p>Several of us have discussed this problem and have a proposed solution  
<br>
for 1.4. Once we get past 1.3 (someday!), we'll bring it to the group.
<br>
<p><p>On Jul 28, 2008, at 10:44 AM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; My only concern is how will this interact with PLPA.
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
<span class="quotelev2">&gt;&gt; Per an earlier telecon, I have modified the hostfile behavior  
</span><br>
<span class="quotelev2">&gt;&gt; slightly to
</span><br>
<span class="quotelev2">&gt;&gt; allow hostfiles to subdivide allocations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Briefly: given an allocation, we allow users to specify --hostfile  
</span><br>
<span class="quotelev2">&gt;&gt; on a
</span><br>
<span class="quotelev2">&gt;&gt; per-app_context basis. In this mode, the hostfile info is used to  
</span><br>
<span class="quotelev2">&gt;&gt; filter the
</span><br>
<span class="quotelev2">&gt;&gt; nodes that will be used for that app_context. However, the prior
</span><br>
<span class="quotelev2">&gt;&gt; implementation only filtered the nodes themselves - i.e., it was a  
</span><br>
<span class="quotelev2">&gt;&gt; binary
</span><br>
<span class="quotelev2">&gt;&gt; filter that allowed you to include or exclude an entire node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The change now allows you to include a specified #slots for a given  
</span><br>
<span class="quotelev2">&gt;&gt; node as
</span><br>
<span class="quotelev2">&gt;&gt; opposed to -all- slots from that node. You are limited to the #slots
</span><br>
<span class="quotelev2">&gt;&gt; included in the original allocation. I just realized that I hadn't  
</span><br>
<span class="quotelev2">&gt;&gt; output a
</span><br>
<span class="quotelev2">&gt;&gt; warning if you attempt to violate this condition - will do so  
</span><br>
<span class="quotelev2">&gt;&gt; shortly.
</span><br>
<span class="quotelev2">&gt;&gt; Rather than just abort if this happens, I set the allocation to  
</span><br>
<span class="quotelev2">&gt;&gt; that of the
</span><br>
<span class="quotelev2">&gt;&gt; original - please let me know if you would prefer it to abort.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you have interest in this behavior, please check it out and let  
</span><br>
<span class="quotelev2">&gt;&gt; me know
</span><br>
<span class="quotelev2">&gt;&gt; if this meets needs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4475.php">Jeff Squyres: "[OMPI devel] parallel debugger attach"</a>
<li><strong>Previous message:</strong> <a href="4473.php">Terry Dontje: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4472.php">Tim Mattox: "Re: [OMPI devel] Change in hostfile behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4478.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>Reply:</strong> <a href="4478.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in hostfile behavior"</a>
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
