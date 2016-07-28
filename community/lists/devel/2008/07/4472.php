<?
$subject_val = "Re: [OMPI devel] Change in hostfile behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 12:45:03 2008" -->
<!-- isoreceived="20080728164503" -->
<!-- sent="Mon, 28 Jul 2008 12:44:57 -0400" -->
<!-- isosent="20080728164457" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in hostfile behavior" -->
<!-- id="ea86ce220807280944y2691d785y66ede3480943e6f7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CDD368DC-1C9C-4CB5-8BA9-C9FBA3D2A2A5_at_lanl.gov" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 12:44:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4473.php">Terry Dontje: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4471.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4465.php">Ralph Castain: "[OMPI devel] Change in hostfile behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4474.php">Ralph Castain: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>Reply:</strong> <a href="4474.php">Ralph Castain: "Re: [OMPI devel] Change in hostfile behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My only concern is how will this interact with PLPA.
<br>
Say two Open MPI jobs each use &quot;half&quot; the cores (slots) on a
<br>
particular node...  how would they be able to bind themselves to
<br>
a disjoint set of cores?  I'm not asking you to solve this Ralph, I'm
<br>
just pointing it out so we can maybe warn users that if both jobs sharing
<br>
a node try to use processor affinity, we don't make that magically work well,
<br>
and that we would expect it to do quite poorly.
<br>
<p>I could see disabling paffinity and/or warning if it was enabled for
<br>
one of these &quot;fractional&quot; nodes.
<br>
<p>On Mon, Jul 28, 2008 at 11:43 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Per an earlier telecon, I have modified the hostfile behavior slightly to
</span><br>
<span class="quotelev1">&gt; allow hostfiles to subdivide allocations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Briefly: given an allocation, we allow users to specify --hostfile on a
</span><br>
<span class="quotelev1">&gt; per-app_context basis. In this mode, the hostfile info is used to filter the
</span><br>
<span class="quotelev1">&gt; nodes that will be used for that app_context. However, the prior
</span><br>
<span class="quotelev1">&gt; implementation only filtered the nodes themselves - i.e., it was a binary
</span><br>
<span class="quotelev1">&gt; filter that allowed you to include or exclude an entire node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The change now allows you to include a specified #slots for a given node as
</span><br>
<span class="quotelev1">&gt; opposed to -all- slots from that node. You are limited to the #slots
</span><br>
<span class="quotelev1">&gt; included in the original allocation. I just realized that I hadn't output a
</span><br>
<span class="quotelev1">&gt; warning if you attempt to violate this condition - will do so shortly.
</span><br>
<span class="quotelev1">&gt; Rather than just abort if this happens, I set the allocation to that of the
</span><br>
<span class="quotelev1">&gt; original - please let me know if you would prefer it to abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have interest in this behavior, please check it out and let me know
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
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
 I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4473.php">Terry Dontje: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4471.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4465.php">Ralph Castain: "[OMPI devel] Change in hostfile behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4474.php">Ralph Castain: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>Reply:</strong> <a href="4474.php">Ralph Castain: "Re: [OMPI devel] Change in hostfile behavior"</a>
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
