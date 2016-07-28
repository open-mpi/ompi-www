<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 09:03:16 2009" -->
<!-- isoreceived="20090817130316" -->
<!-- sent="Mon, 17 Aug 2009 09:00:50 -0400" -->
<!-- isosent="20090817130050" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="2C16C3AD-EFBA-4813-A66D-D189DEA6E495_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 09:00:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6648.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6646.php">Jeff Squyres: "Re: [OMPI devel] Library dependencies"</a>
<li><strong>In reply to:</strong> <a href="6641.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6649.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6649.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6650.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6652.php">Kenneth Lloyd: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6658.php">Ashley Pittman: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 16, 2009, at 11:02 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I think the problem here, Eugene, is that performance benchmarks are  
</span><br>
<span class="quotelev1">&gt; far from the typical application. We have repeatedly seen this -  
</span><br>
<span class="quotelev1">&gt; optimizing for benchmarks frequently makes applications run less  
</span><br>
<span class="quotelev1">&gt; efficiently. So I concur with Chris on this one - let's not go -too-  
</span><br>
<span class="quotelev1">&gt; benchmark happy and hurt the regular users.
</span><br>
<p>FWIW, I've seen processor binding help real user codes, too.  Indeed,  
<br>
on a system where an MPI job has exclusive use of the node, how does  
<br>
binding hurt you?
<br>
<p>On nodes where multiple MPI jobs are running, if a resource manager is  
<br>
being used, then we should be obeying what they have specified for  
<br>
each job to use.  We need a bit more work in that direction to make  
<br>
that work, but it's very do-able.
<br>
<p>When resource managers are not used and multiple MPI jobs share the  
<br>
same node, then OMPI has to coordinate amongst its jobs to not  
<br>
oversubscribe cores (when possible).  As Ralph indicated in a later  
<br>
mail, we still need some work in this area, too.
<br>
<p><span class="quotelev1">&gt; Here at LANL, binding to-socket instead of to-core hurts performance  
</span><br>
<span class="quotelev1">&gt; by ~5-10%, depending on the specific application. Of course, either  
</span><br>
<span class="quotelev1">&gt; binding method is superior to no binding at all...
</span><br>
<p>This is probably not too surprising (i.e., allowing the OS to move  
<br>
jobs around between cores on a socket can probably involve a little  
<br>
cache thrashing, resulting in that 5-10% loss).  I'm hand-waving here,  
<br>
and I have not tried this myself, but it's not too surprising of a  
<br>
result to me.  It's also not too surprising that others don't see this  
<br>
effect at all (e.g., Sun didn't see any difference in bind-to-core vs.  
<br>
bind-to-socket) when they ran their tests.  YMMV.
<br>
<p>I'd actually be in favor of a by-core binding (not by-socket), but  
<br>
spreading the processes out round robin by socket, not by core.  All  
<br>
of this would be the *default* behavior, of course -- command line  
<br>
params/MCA params will be provided to change to whatever pattern is  
<br>
desired.
<br>
<p><span class="quotelev1">&gt; UNLESS you have a threaded application, in which case -any- binding  
</span><br>
<span class="quotelev1">&gt; can be highly detrimental to performance.
</span><br>
<p>I'm not quite sure I understand this statement.  Binding is not  
<br>
inherently contrary to multi-threaded applications.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6648.php">Jeff Squyres: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6646.php">Jeff Squyres: "Re: [OMPI devel] Library dependencies"</a>
<li><strong>In reply to:</strong> <a href="6641.php">Ralph Castain: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6649.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6649.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6650.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6652.php">Kenneth Lloyd: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6658.php">Ashley Pittman: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
