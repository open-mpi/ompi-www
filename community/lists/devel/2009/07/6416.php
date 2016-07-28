<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 09:18:08 2009" -->
<!-- isoreceived="20090715131808" -->
<!-- sent="Wed, 15 Jul 2009 07:18:03 -0600" -->
<!-- isosent="20090715131803" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="71d2d8cc0907150618y1e148d87g2640ad5ead2e1899_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1523424056.597351247659892155.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 09:18:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6417.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Previous message:</strong> <a href="6415.php">neeraj_at_[hidden]: "[OMPI devel] selectively bind MPI to one HCA out of available ones"</a>
<li><strong>In reply to:</strong> <a href="6412.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6439.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...I believe I made a mis-statement. Shocking to those who know me, I am
<br>
sure! :-)
<br>
<p>Just to correct my comments: OMPI knows how many &quot;slots&quot; have been allocated
<br>
to us, but not which &quot;cores&quot;. So I'll assign the correct number of procs to
<br>
each node, but they won't know that we were allocated cores 2 and 4 (for
<br>
example), as opposed to some other combination.
<br>
<p>When we subsequently bind, we bind to logical cpus based on our node rank -
<br>
i.e., what rank I am relative to my local peers on this node. PLPA then
<br>
translates that into a physical core.
<br>
<p>My guess is that you are correct and PLPA isn't looking to see specifically
<br>
-which- cores were allocated to the job, but instead is simply translating
<br>
logical cpu=0 to the first physical core in the node.
<br>
<p>The test I asked you to run, though, will confirm this. Please do let us
<br>
know as this is definitely something we should fix.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p><p>On Wed, Jul 15, 2009 at 6:11 AM, Chris Samuel &lt;csamuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Interesting. No, we don't take PLPA cpu sets into account when
</span><br>
<span class="quotelev2">&gt; &gt; retrieving the allocation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Understood.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just to be clear: from an OMPI perspective, I don't think this is an
</span><br>
<span class="quotelev2">&gt; &gt; issue of binding, but rather an issue of allocation. If we knew we had
</span><br>
<span class="quotelev2">&gt; &gt; been allocated only a certain number of cores on a node, then we would
</span><br>
<span class="quotelev2">&gt; &gt; only map that many procs to the node. When we subsequently &quot;bind&quot;, we
</span><br>
<span class="quotelev2">&gt; &gt; should then bind those procs to the correct cores (I think).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm, OpenMPI should already know this from the PBS TM API when
</span><br>
<span class="quotelev1">&gt; launching the job, we've never had to get our users to specify
</span><br>
<span class="quotelev1">&gt; how many procs per node to start (and they will generally have
</span><br>
<span class="quotelev1">&gt; no idea how many to ask for in advance as they are at the mercy
</span><br>
<span class="quotelev1">&gt; of the scheduler, unless they select a whole nodes with ppn=8).
</span><br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could you check this? You can run a trivial job using the
</span><br>
<span class="quotelev2">&gt; &gt; -npernode x option, where x matched the #cores you were
</span><br>
<span class="quotelev2">&gt; &gt; allocated on the nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you do this, do we bind to the correct cores?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll give this a shot tomorrow when I'm back in the office
</span><br>
<span class="quotelev1">&gt; (just checking email late at night here), I'll try it under
</span><br>
<span class="quotelev1">&gt; strace to to see what it tries to sched_setaffinity() to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If we do, then that would confirm that we just aren't
</span><br>
<span class="quotelev2">&gt; &gt; picking up the right number of cores allocated to us.
</span><br>
<span class="quotelev2">&gt; &gt; If it is wrong, then this is a PLPA issue where it
</span><br>
<span class="quotelev2">&gt; &gt; isn't binding to the right core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting, will let you know the test results tomorrow!
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
<span class="quotelev1">&gt;  The Victorian Partnership for Advanced Computing
</span><br>
<span class="quotelev1">&gt;  P.O. Box 201, Carlton South, VIC 3053, Australia
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6416/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6417.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Previous message:</strong> <a href="6415.php">neeraj_at_[hidden]: "[OMPI devel] selectively bind MPI to one HCA out of available ones"</a>
<li><strong>In reply to:</strong> <a href="6412.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6439.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
