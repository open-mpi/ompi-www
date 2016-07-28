<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 06:02:56 2009" -->
<!-- isoreceived="20090817100256" -->
<!-- sent="Mon, 17 Aug 2009 13:02:50 +0300" -->
<!-- isosent="20090817100250" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="453d39990908170302s6fe11f30y65e36f805fa48428_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="010E26B7-C286-411D-927D-B6939165A00A_at_open-mpi.org" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 06:02:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6643.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6641.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6641.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6643.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6643.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the multi job environment, can't we just start binding processes on the
<br>
first avaliable and unused socket?
<br>
I mean first job/user will start binding itself from socket 0,
<br>
the next job/user will start binding itself from socket 2, for instance .
<br>
Lenny.
<br>
<p>On Mon, Aug 17, 2009 at 6:02 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 16, 2009, at 8:16 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Chris Samuel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This is an important discussion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Indeed! My big fear is that people won't pick up the significance
</span><br>
<span class="quotelev1">&gt; of the change and will complain about performance regressions
</span><br>
<span class="quotelev1">&gt; in the middle of an OMPI stable release cycle.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  2) The proposed OMPI bind-to-socket default is less severe. In the
</span><br>
<span class="quotelev1">&gt; general case, it would allow multiple jobs to bind in the same way
</span><br>
<span class="quotelev1">&gt; without oversubscribing any core or socket. (This comment added to
</span><br>
<span class="quotelev1">&gt; the trac ticket.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  That's a nice clarification, thanks. I suspect though that the
</span><br>
<span class="quotelev1">&gt; same issue we have with MVAPICH would occur if two 4 core jobs
</span><br>
<span class="quotelev1">&gt; both bound themselves to the first socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Okay, so let me point out a second distinction from MVAPICH:  the default
</span><br>
<span class="quotelev1">&gt; policy would be to spread out over sockets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's say you have two sockets, with four cores each.  Let's say you submit
</span><br>
<span class="quotelev1">&gt; two four-core jobs.  The first job would put two processes on the first
</span><br>
<span class="quotelev1">&gt; socket and two processes on the second.  The second job would do the same.
</span><br>
<span class="quotelev1">&gt; The loading would be even.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not saying there couldn't be problems.  It's just that MVAPICH2 (at
</span><br>
<span class="quotelev1">&gt; least what I looked at) has multiple shortfalls.  The binding is to fill up
</span><br>
<span class="quotelev1">&gt; one socket after another (which decreases memory bandwidth per process and
</span><br>
<span class="quotelev1">&gt; increases chances of collisions with other jobs) and binding is to core
</span><br>
<span class="quotelev1">&gt; (increasing chances of oversubscribing cores).  The proposed OMPI behavior
</span><br>
<span class="quotelev1">&gt; distributes over sockets (improving memory bandwidth per process and
</span><br>
<span class="quotelev1">&gt; reducing collisions with other jobs) and binding is to sockets (reducing
</span><br>
<span class="quotelev1">&gt; changes of oversubscribing cores, whether due to other MPI jobs or due to
</span><br>
<span class="quotelev1">&gt; multithreaded processes).  So, the proposed OMPI behavior mitigates the
</span><br>
<span class="quotelev1">&gt; problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be even better to have binding selections adapt to other bindings
</span><br>
<span class="quotelev1">&gt; on the system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In any case, regardless of what the best behavior is, I appreciate the
</span><br>
<span class="quotelev1">&gt; point about changing behavior in the middle of a stable release.  Arguably,
</span><br>
<span class="quotelev1">&gt; leaving significant performance on the table in typical situations is a bug
</span><br>
<span class="quotelev1">&gt; that warrants fixing even in the middle of a release, but I won't try to
</span><br>
<span class="quotelev1">&gt; settle that debate here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the problem here, Eugene, is that performance benchmarks are far
</span><br>
<span class="quotelev1">&gt; from the typical application. We have repeatedly seen this - optimizing for
</span><br>
<span class="quotelev1">&gt; benchmarks frequently makes applications run less efficiently. So I concur
</span><br>
<span class="quotelev1">&gt; with Chris on this one - let's not go -too- benchmark happy and hurt the
</span><br>
<span class="quotelev1">&gt; regular users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here at LANL, binding to-socket instead of to-core hurts performance by
</span><br>
<span class="quotelev1">&gt; ~5-10%, depending on the specific application. Of course, either binding
</span><br>
<span class="quotelev1">&gt; method is superior to no binding at all...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; UNLESS you have a threaded application, in which case -any- binding can be
</span><br>
<span class="quotelev1">&gt; highly detrimental to performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So going slow on this makes sense. If we provide the capability, but leave
</span><br>
<span class="quotelev1">&gt; it off by default, then people can test it against real applications and see
</span><br>
<span class="quotelev1">&gt; the impact. Then we can better assess the right default settings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  3) Defaults (if I understand correctly) can be set differently
</span><br>
<span class="quotelev1">&gt; on each cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Yes, but the defaults should be sensible for the majority of
</span><br>
<span class="quotelev1">&gt; clusters.  If the majority do indeed share nodes between jobs
</span><br>
<span class="quotelev1">&gt; then I would suggest that the default should be off and the
</span><br>
<span class="quotelev1">&gt; minority who don't share nodes should have to enable it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  In debates on this subject, I've heard people argue that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *) Though nodes are getting fatter, most are still thin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *) Resource managers tend to space share the cluster.
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6642/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6643.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6641.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6641.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6643.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6643.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
