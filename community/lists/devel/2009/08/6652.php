<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 11:19:56 2009" -->
<!-- isoreceived="20090817151956" -->
<!-- sent="Mon, 17 Aug 2009 09:19:47 -0600" -->
<!-- isosent="20090817151947" -->
<!-- name="Kenneth Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="DF8512B65F894722BC295C2B6D98A82C_at_wattp4" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2C16C3AD-EFBA-4813-A66D-D189DEA6E495_at_cisco.com" -->
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
<strong>From:</strong> Kenneth Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 11:19:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6653.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6651.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6647.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6658.php">Ashley Pittman: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In some of the experiments I've run and studied on exclusive binding to
<br>
specific cores, the performance metrics (which have yielded both excellent
<br>
gains as well as phases of reduced performance) have depended upon the
<br>
nature of the experiment being run (a task partitioning problem) and how the
<br>
experimental data was organized (a data partitioning problem).
<br>
<p>This is especially true when one considers the context in which the
<br>
experiment was run - meaning what other experiments scheduled either
<br>
concurrently or serially, the priorities of those experiments and the
<br>
configuration of the cluster / MPI network at any given point in time.
<br>
<p>The approach we used was Bayesian. In other words, performance prediction
<br>
was conditioned on patterns of structure and context from both forward in
<br>
inverse Bayesian cycles.
<br>
<p>Ken Lloyd
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Monday, August 17, 2009 7:01 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Heads up on new feature to 1.3.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 16, 2009, at 11:02 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think the problem here, Eugene, is that performance 
</span><br>
<span class="quotelev1">&gt; benchmarks are 
</span><br>
<span class="quotelev2">&gt; &gt; far from the typical application. We have repeatedly seen this - 
</span><br>
<span class="quotelev2">&gt; &gt; optimizing for benchmarks frequently makes applications run less 
</span><br>
<span class="quotelev2">&gt; &gt; efficiently. So I concur with Chris on this one - let's not 
</span><br>
<span class="quotelev1">&gt; go -too- 
</span><br>
<span class="quotelev2">&gt; &gt; benchmark happy and hurt the regular users.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, I've seen processor binding help real user codes, too.  
</span><br>
<span class="quotelev1">&gt; Indeed, on a system where an MPI job has exclusive use of the 
</span><br>
<span class="quotelev1">&gt; node, how does binding hurt you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On nodes where multiple MPI jobs are running, if a resource 
</span><br>
<span class="quotelev1">&gt; manager is being used, then we should be obeying what they 
</span><br>
<span class="quotelev1">&gt; have specified for each job to use.  We need a bit more work 
</span><br>
<span class="quotelev1">&gt; in that direction to make that work, but it's very do-able.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When resource managers are not used and multiple MPI jobs 
</span><br>
<span class="quotelev1">&gt; share the same node, then OMPI has to coordinate amongst its 
</span><br>
<span class="quotelev1">&gt; jobs to not oversubscribe cores (when possible).  As Ralph 
</span><br>
<span class="quotelev1">&gt; indicated in a later mail, we still need some work in this area, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Here at LANL, binding to-socket instead of to-core hurts 
</span><br>
<span class="quotelev1">&gt; performance 
</span><br>
<span class="quotelev2">&gt; &gt; by ~5-10%, depending on the specific application. Of course, either 
</span><br>
<span class="quotelev2">&gt; &gt; binding method is superior to no binding at all...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is probably not too surprising (i.e., allowing the OS to 
</span><br>
<span class="quotelev1">&gt; move jobs around between cores on a socket can probably 
</span><br>
<span class="quotelev1">&gt; involve a little cache thrashing, resulting in that 5-10% 
</span><br>
<span class="quotelev1">&gt; loss).  I'm hand-waving here, and I have not tried this 
</span><br>
<span class="quotelev1">&gt; myself, but it's not too surprising of a result to me.  It's 
</span><br>
<span class="quotelev1">&gt; also not too surprising that others don't see this effect at 
</span><br>
<span class="quotelev1">&gt; all (e.g., Sun didn't see any difference in bind-to-core vs.  
</span><br>
<span class="quotelev1">&gt; bind-to-socket) when they ran their tests.  YMMV.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd actually be in favor of a by-core binding (not 
</span><br>
<span class="quotelev1">&gt; by-socket), but spreading the processes out round robin by 
</span><br>
<span class="quotelev1">&gt; socket, not by core.  All of this would be the *default* 
</span><br>
<span class="quotelev1">&gt; behavior, of course -- command line params/MCA params will be 
</span><br>
<span class="quotelev1">&gt; provided to change to whatever pattern is desired.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; UNLESS you have a threaded application, in which case -any- binding 
</span><br>
<span class="quotelev2">&gt; &gt; can be highly detrimental to performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not quite sure I understand this statement.  Binding is 
</span><br>
<span class="quotelev1">&gt; not inherently contrary to multi-threaded applications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6653.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6651.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6647.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6658.php">Ashley Pittman: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
