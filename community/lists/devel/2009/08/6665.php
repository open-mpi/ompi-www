<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 22:05:40 2009" -->
<!-- isoreceived="20090818020540" -->
<!-- sent="Mon, 17 Aug 2009 20:05:25 -0600" -->
<!-- isosent="20090818020525" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="877D83B1-8C58-4898-B9A8-3348F4A01778_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1280193263.1470421250558294085.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heads up on new feature to 1.3.4<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 22:05:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6666.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6664.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6664.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6667.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Chris
<br>
<p>The devel trunk has all of this in it - you can get that tarball from  
<br>
the OMPI web site (take the nightly snapshot).
<br>
<p>I plan to work on cpuset support beginning Tues morning.
<br>
<p>Ralph
<br>
<p>On Aug 17, 2009, at 7:18 PM, Chris Samuel wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Eugene,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; It would be even better to have binding selections adapt to other
</span><br>
<span class="quotelev2">&gt;&gt; bindings on the system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This touches on the earlier thread about making OMPI aware
</span><br>
<span class="quotelev1">&gt; of its cpuset/cgroup allocation on the node (for those sites
</span><br>
<span class="quotelev1">&gt; that are using it), it might solve this issue quite nicely as
</span><br>
<span class="quotelev1">&gt; OMPI would know precisely what cores &amp; sockets were allocated
</span><br>
<span class="quotelev1">&gt; for its use without having to worry about other HPC processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No idea how to figure that out for processes outside of cpusets. :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In any case, regardless of what the best behavior is, I appreciate
</span><br>
<span class="quotelev2">&gt;&gt; the point about changing behavior in the middle of a stable release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not a problem, and I take Jeff's point about 1.3 not being a
</span><br>
<span class="quotelev1">&gt; super stable release and thus not being a blocker to changes
</span><br>
<span class="quotelev1">&gt; such as this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Arguably, leaving significant performance on the table in typical
</span><br>
<span class="quotelev2">&gt;&gt; situations is a bug that warrants fixing even in the middle of a
</span><br>
<span class="quotelev2">&gt;&gt; release, but I won't try to settle that debate here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree for those cases where there's no downside, and thinking
</span><br>
<span class="quotelev1">&gt; further on your point of balancing between sockets I can see why
</span><br>
<span class="quotelev1">&gt; that would limit the impact.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most of the cases I can think of that would be most adversely
</span><br>
<span class="quotelev1">&gt; affected are down to other jobs binding to cores naively and if
</span><br>
<span class="quotelev1">&gt; that's happening outside of cpusets then the cluster sysadmin
</span><br>
<span class="quotelev1">&gt; has more to worry about from mixing those applications than
</span><br>
<span class="quotelev1">&gt; mixing with OMPI ones which are just binding to sockets. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I'll happily withdraw my objection on those grounds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *But* I would like to test this code out on a cluster with
</span><br>
<span class="quotelev1">&gt; cpuset support enabled to see whether it will behave itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Basically if I run a 4 core MPI job on a dual socket system
</span><br>
<span class="quotelev1">&gt; which has been allocated only the cores on socket 0 what will
</span><br>
<span class="quotelev1">&gt; happen when it tries to bind to socket 1 which is outside its
</span><br>
<span class="quotelev1">&gt; cpuset ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a 1.3 branch or tarball with these patches applied
</span><br>
<span class="quotelev1">&gt; that I could test out ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel - (03) 9925 4751 - Systems Manager
</span><br>
<span class="quotelev1">&gt; The Victorian Partnership for Advanced Computing
</span><br>
<span class="quotelev1">&gt; P.O. Box 201, Carlton South, VIC 3053, Australia
</span><br>
<span class="quotelev1">&gt; VPAC is a not-for-profit Registered Research Agency
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
<li><strong>Next message:</strong> <a href="6666.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6664.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6664.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6667.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
