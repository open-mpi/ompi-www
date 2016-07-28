<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 21:18:26 2009" -->
<!-- isoreceived="20090818011826" -->
<!-- sent="Tue, 18 Aug 2009 11:18:14 +1000 (EST)" -->
<!-- isosent="20090818011814" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="1280193263.1470421250558294085.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4A88BD7F.4090706_at_sun.com" -->
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
<strong>From:</strong> Chris Samuel (<em>csamuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 21:18:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6665.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6663.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6640.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6665.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6665.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p>Hi Eugene,
<br>
<p>[...]
<br>
<span class="quotelev1">&gt; It would be even better to have binding selections adapt to other
</span><br>
<span class="quotelev1">&gt; bindings on the system.
</span><br>
<p>Indeed!
<br>
<p>This touches on the earlier thread about making OMPI aware
<br>
of its cpuset/cgroup allocation on the node (for those sites
<br>
that are using it), it might solve this issue quite nicely as
<br>
OMPI would know precisely what cores &amp; sockets were allocated
<br>
for its use without having to worry about other HPC processes.
<br>
<p>No idea how to figure that out for processes outside of cpusets. :-(
<br>
<p><span class="quotelev1">&gt; In any case, regardless of what the best behavior is, I appreciate
</span><br>
<span class="quotelev1">&gt; the point about changing behavior in the middle of a stable release.
</span><br>
<p>Not a problem, and I take Jeff's point about 1.3 not being a
<br>
super stable release and thus not being a blocker to changes
<br>
such as this.
<br>
<p><span class="quotelev1">&gt; Arguably, leaving significant performance on the table in typical
</span><br>
<span class="quotelev1">&gt; situations is a bug that warrants fixing even in the middle of a
</span><br>
<span class="quotelev1">&gt; release, but I won't try to settle that debate here.
</span><br>
<p>I agree for those cases where there's no downside, and thinking
<br>
further on your point of balancing between sockets I can see why
<br>
that would limit the impact.
<br>
<p>Most of the cases I can think of that would be most adversely
<br>
affected are down to other jobs binding to cores naively and if
<br>
that's happening outside of cpusets then the cluster sysadmin
<br>
has more to worry about from mixing those applications than
<br>
mixing with OMPI ones which are just binding to sockets. :-)
<br>
<p>So I'll happily withdraw my objection on those grounds.
<br>
<p>*But* I would like to test this code out on a cluster with
<br>
cpuset support enabled to see whether it will behave itself.
<br>
<p>Basically if I run a 4 core MPI job on a dual socket system
<br>
which has been allocated only the cores on socket 0 what will
<br>
happen when it tries to bind to socket 1 which is outside its
<br>
cpuset ?
<br>
<p>Is there a 1.3 branch or tarball with these patches applied
<br>
that I could test out ?
<br>
<p>cheers,
<br>
Chris
<br>
<pre>
-- 
Christopher Samuel - (03) 9925 4751 - Systems Manager
 The Victorian Partnership for Advanced Computing
 P.O. Box 201, Carlton South, VIC 3053, Australia
VPAC is a not-for-profit Registered Research Agency
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6665.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6663.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6640.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6665.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6665.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
