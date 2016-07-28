<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 07:35:18 2009" -->
<!-- isoreceived="20090817113518" -->
<!-- sent="Mon, 17 Aug 2009 05:35:03 -0600" -->
<!-- isosent="20090817113503" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="FEFD8CC7-85AD-4477-9B90-2AEAF0BFB29C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990908170302s6fe11f30y65e36f805fa48428_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-08-17 07:35:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6644.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6642.php">Lenny Verkhovsky: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6642.php">Lenny Verkhovsky: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6651.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6651.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem is that the two mpiruns don't know about each other, and  
<br>
therefore the second mpirun doesn't know that another mpirun has  
<br>
already used socket 0.
<br>
<p>We hope to change that at some point in the future.
<br>
<p>Ralph
<br>
<p><p>On Aug 17, 2009, at 4:02 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; In the multi job environment, can't we just start binding processes  
</span><br>
<span class="quotelev1">&gt; on the first avaliable and unused socket?
</span><br>
<span class="quotelev1">&gt; I mean first job/user will start binding itself from socket 0,
</span><br>
<span class="quotelev1">&gt; the next job/user will start binding itself from socket 2, for  
</span><br>
<span class="quotelev1">&gt; instance .
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 17, 2009 at 6:02 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 16, 2009, at 8:16 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Chris Samuel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----- &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is an important discussion.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indeed! My big fear is that people won't pick up the significance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the change and will complain about performance regressions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the middle of an OMPI stable release cycle.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) The proposed OMPI bind-to-socket default is less severe. In the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; general case, it would allow multiple jobs to bind in the same way
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; without oversubscribing any core or socket. (This comment added to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the trac ticket.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That's a nice clarification, thanks. I suspect though that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same issue we have with MVAPICH would occur if two 4 core jobs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; both bound themselves to the first socket.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Okay, so let me point out a second distinction from MVAPICH:  the  
</span><br>
<span class="quotelev2">&gt;&gt; default policy would be to spread out over sockets.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let's say you have two sockets, with four cores each.  Let's say  
</span><br>
<span class="quotelev2">&gt;&gt; you submit two four-core jobs.  The first job would put two  
</span><br>
<span class="quotelev2">&gt;&gt; processes on the first socket and two processes on the second.  The  
</span><br>
<span class="quotelev2">&gt;&gt; second job would do the same.  The loading would be even.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not saying there couldn't be problems.  It's just that MVAPICH2  
</span><br>
<span class="quotelev2">&gt;&gt; (at least what I looked at) has multiple shortfalls.  The binding  
</span><br>
<span class="quotelev2">&gt;&gt; is to fill up one socket after another (which decreases memory  
</span><br>
<span class="quotelev2">&gt;&gt; bandwidth per process and increases chances of collisions with  
</span><br>
<span class="quotelev2">&gt;&gt; other jobs) and binding is to core (increasing chances of  
</span><br>
<span class="quotelev2">&gt;&gt; oversubscribing cores).  The proposed OMPI behavior distributes  
</span><br>
<span class="quotelev2">&gt;&gt; over sockets (improving memory bandwidth per process and reducing  
</span><br>
<span class="quotelev2">&gt;&gt; collisions with other jobs) and binding is to sockets (reducing  
</span><br>
<span class="quotelev2">&gt;&gt; changes of oversubscribing cores, whether due to other MPI jobs or  
</span><br>
<span class="quotelev2">&gt;&gt; due to multithreaded processes).  So, the proposed OMPI behavior  
</span><br>
<span class="quotelev2">&gt;&gt; mitigates the problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It would be even better to have binding selections adapt to other  
</span><br>
<span class="quotelev2">&gt;&gt; bindings on the system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In any case, regardless of what the best behavior is, I appreciate  
</span><br>
<span class="quotelev2">&gt;&gt; the point about changing behavior in the middle of a stable  
</span><br>
<span class="quotelev2">&gt;&gt; release.  Arguably, leaving significant performance on the table in  
</span><br>
<span class="quotelev2">&gt;&gt; typical situations is a bug that warrants fixing even in the middle  
</span><br>
<span class="quotelev2">&gt;&gt; of a release, but I won't try to settle that debate here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the problem here, Eugene, is that performance benchmarks are  
</span><br>
<span class="quotelev1">&gt; far from the typical application. We have repeatedly seen this -  
</span><br>
<span class="quotelev1">&gt; optimizing for benchmarks frequently makes applications run less  
</span><br>
<span class="quotelev1">&gt; efficiently. So I concur with Chris on this one - let's not go -too-  
</span><br>
<span class="quotelev1">&gt; benchmark happy and hurt the regular users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here at LANL, binding to-socket instead of to-core hurts performance  
</span><br>
<span class="quotelev1">&gt; by ~5-10%, depending on the specific application. Of course, either  
</span><br>
<span class="quotelev1">&gt; binding method is superior to no binding at all...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; UNLESS you have a threaded application, in which case -any- binding  
</span><br>
<span class="quotelev1">&gt; can be highly detrimental to performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So going slow on this makes sense. If we provide the capability, but  
</span><br>
<span class="quotelev1">&gt; leave it off by default, then people can test it against real  
</span><br>
<span class="quotelev1">&gt; applications and see the impact. Then we can better assess the right  
</span><br>
<span class="quotelev1">&gt; default settings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3) Defaults (if I understand correctly) can be set differently
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on each cluster.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, but the defaults should be sensible for the majority of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clusters.  If the majority do indeed share nodes between jobs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then I would suggest that the default should be off and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; minority who don't share nodes should have to enable it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In debates on this subject, I've heard people argue that:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *) Though nodes are getting fatter, most are still thin.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *) Resource managers tend to space share the cluster.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6643/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6644.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6642.php">Lenny Verkhovsky: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6642.php">Lenny Verkhovsky: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6651.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6651.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
