<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 16 23:03:02 2009" -->
<!-- isoreceived="20090817030302" -->
<!-- sent="Sun, 16 Aug 2009 21:02:47 -0600" -->
<!-- isosent="20090817030247" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="010E26B7-C286-411D-927D-B6939165A00A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-16 23:02:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6642.php">Lenny Verkhovsky: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6640.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6640.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6642.php">Lenny Verkhovsky: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6642.php">Lenny Verkhovsky: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6647.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 16, 2009, at 8:16 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Chris Samuel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----- &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is an important discussion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Indeed! My big fear is that people won't pick up the significance
</span><br>
<span class="quotelev2">&gt;&gt; of the change and will complain about performance regressions
</span><br>
<span class="quotelev2">&gt;&gt; in the middle of an OMPI stable release cycle.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) The proposed OMPI bind-to-socket default is less severe. In the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; general case, it would allow multiple jobs to bind in the same way
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without oversubscribing any core or socket. (This comment added to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the trac ticket.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's a nice clarification, thanks. I suspect though that the
</span><br>
<span class="quotelev2">&gt;&gt; same issue we have with MVAPICH would occur if two 4 core jobs
</span><br>
<span class="quotelev2">&gt;&gt; both bound themselves to the first socket.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Okay, so let me point out a second distinction from MVAPICH:  the  
</span><br>
<span class="quotelev1">&gt; default policy would be to spread out over sockets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's say you have two sockets, with four cores each.  Let's say you  
</span><br>
<span class="quotelev1">&gt; submit two four-core jobs.  The first job would put two processes on  
</span><br>
<span class="quotelev1">&gt; the first socket and two processes on the second.  The second job  
</span><br>
<span class="quotelev1">&gt; would do the same.  The loading would be even.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not saying there couldn't be problems.  It's just that MVAPICH2  
</span><br>
<span class="quotelev1">&gt; (at least what I looked at) has multiple shortfalls.  The binding is  
</span><br>
<span class="quotelev1">&gt; to fill up one socket after another (which decreases memory  
</span><br>
<span class="quotelev1">&gt; bandwidth per process and increases chances of collisions with other  
</span><br>
<span class="quotelev1">&gt; jobs) and binding is to core (increasing chances of oversubscribing  
</span><br>
<span class="quotelev1">&gt; cores).  The proposed OMPI behavior distributes over sockets  
</span><br>
<span class="quotelev1">&gt; (improving memory bandwidth per process and reducing collisions with  
</span><br>
<span class="quotelev1">&gt; other jobs) and binding is to sockets (reducing changes of  
</span><br>
<span class="quotelev1">&gt; oversubscribing cores, whether due to other MPI jobs or due to  
</span><br>
<span class="quotelev1">&gt; multithreaded processes).  So, the proposed OMPI behavior mitigates  
</span><br>
<span class="quotelev1">&gt; the problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be even better to have binding selections adapt to other  
</span><br>
<span class="quotelev1">&gt; bindings on the system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In any case, regardless of what the best behavior is, I appreciate  
</span><br>
<span class="quotelev1">&gt; the point about changing behavior in the middle of a stable  
</span><br>
<span class="quotelev1">&gt; release.  Arguably, leaving significant performance on the table in  
</span><br>
<span class="quotelev1">&gt; typical situations is a bug that warrants fixing even in the middle  
</span><br>
<span class="quotelev1">&gt; of a release, but I won't try to settle that debate here.
</span><br>
<p>I think the problem here, Eugene, is that performance benchmarks are  
<br>
far from the typical application. We have repeatedly seen this -  
<br>
optimizing for benchmarks frequently makes applications run less  
<br>
efficiently. So I concur with Chris on this one - let's not go -too-  
<br>
benchmark happy and hurt the regular users.
<br>
<p>Here at LANL, binding to-socket instead of to-core hurts performance  
<br>
by ~5-10%, depending on the specific application. Of course, either  
<br>
binding method is superior to no binding at all...
<br>
<p>UNLESS you have a threaded application, in which case -any- binding  
<br>
can be highly detrimental to performance.
<br>
<p>So going slow on this makes sense. If we provide the capability, but  
<br>
leave it off by default, then people can test it against real  
<br>
applications and see the impact. Then we can better assess the right  
<br>
default settings.
<br>
<p>Ralph
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt; 3) Defaults (if I understand correctly) can be set differently
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on each cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, but the defaults should be sensible for the majority of
</span><br>
<span class="quotelev2">&gt;&gt; clusters.  If the majority do indeed share nodes between jobs
</span><br>
<span class="quotelev2">&gt;&gt; then I would suggest that the default should be off and the
</span><br>
<span class="quotelev2">&gt;&gt; minority who don't share nodes should have to enable it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; In debates on this subject, I've heard people argue that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *) Though nodes are getting fatter, most are still thin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *) Resource managers tend to space share the cluster.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6641/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6642.php">Lenny Verkhovsky: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6640.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6640.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6642.php">Lenny Verkhovsky: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6642.php">Lenny Verkhovsky: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6647.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
