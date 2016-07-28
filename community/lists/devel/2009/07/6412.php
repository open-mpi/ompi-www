<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 08:11:45 2009" -->
<!-- isoreceived="20090715121145" -->
<!-- sent="Wed, 15 Jul 2009 22:11:32 +1000 (EST)" -->
<!-- isosent="20090715121132" -->
<!-- name="Chris Samuel" -->
<!-- email="csamuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="1523424056.597351247659892155.JavaMail.root_at_mail.vpac.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2095828427.597331247659496744.JavaMail.root_at_mail.vpac.org" -->
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
<strong>From:</strong> Chris Samuel (<em>csamuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 08:11:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6413.php">Ashley Pittman: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Previous message:</strong> <a href="6411.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Maybe in reply to:</strong> <a href="6406.php">Chris Samuel: "[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6416.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6416.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p>Hi Ralph,
<br>
<p><span class="quotelev1">&gt; Interesting. No, we don't take PLPA cpu sets into account when  
</span><br>
<span class="quotelev1">&gt; retrieving the allocation.
</span><br>
<p>Understood.
<br>
<p><span class="quotelev1">&gt; Just to be clear: from an OMPI perspective, I don't think this is an 
</span><br>
<span class="quotelev1">&gt; issue of binding, but rather an issue of allocation. If we knew we had
</span><br>
<span class="quotelev1">&gt; been allocated only a certain number of cores on a node, then we would
</span><br>
<span class="quotelev1">&gt; only map that many procs to the node. When we subsequently &quot;bind&quot;, we 
</span><br>
<span class="quotelev1">&gt; should then bind those procs to the correct cores (I think).
</span><br>
<p>Hmm, OpenMPI should already know this from the PBS TM API when
<br>
launching the job, we've never had to get our users to specify
<br>
how many procs per node to start (and they will generally have
<br>
no idea how many to ask for in advance as they are at the mercy
<br>
of the scheduler, unless they select a whole nodes with ppn=8).
<br>
<p><span class="quotelev1">&gt; Could you check this? You can run a trivial job using the
</span><br>
<span class="quotelev1">&gt; -npernode x option, where x matched the #cores you were
</span><br>
<span class="quotelev1">&gt; allocated on the nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you do this, do we bind to the correct cores?
</span><br>
<p>I'll give this a shot tomorrow when I'm back in the office
<br>
(just checking email late at night here), I'll try it under
<br>
strace to to see what it tries to sched_setaffinity() to.
<br>
<p><span class="quotelev1">&gt; If we do, then that would confirm that we just aren't
</span><br>
<span class="quotelev1">&gt; picking up the right number of cores allocated to us.
</span><br>
<span class="quotelev1">&gt; If it is wrong, then this is a PLPA issue where it
</span><br>
<span class="quotelev1">&gt; isn't binding to the right core.
</span><br>
<p>Interesting, will let you know the test results tomorrow!
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
<li><strong>Next message:</strong> <a href="6413.php">Ashley Pittman: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Previous message:</strong> <a href="6411.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Maybe in reply to:</strong> <a href="6406.php">Chris Samuel: "[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6416.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<li><strong>Reply:</strong> <a href="6416.php">Ralph Castain: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
