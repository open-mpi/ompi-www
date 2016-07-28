<?
$subject_val = "Re: [OMPI devel] carto vs. hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 01:32:34 2009" -->
<!-- isoreceived="20091216063234" -->
<!-- sent="Wed, 16 Dec 2009 01:32:25 -0500" -->
<!-- isosent="20091216063225" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] carto vs. hwloc" -->
<!-- id="68C0E87C-3B95-4A0F-BA06-F6FE76EC4957_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="734D11F1-33F9-4424-B81D-5CDF74A8CE0A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] carto vs. hwloc<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 01:32:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7246.php">Vasily Philipov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<li><strong>Previous message:</strong> <a href="7244.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22317"</a>
<li><strong>In reply to:</strong> <a href="7240.php">Ralph Castain: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7248.php">Joshua Hursey: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Reply:</strong> <a href="7248.php">Joshua Hursey: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As far as I know what Josh did is slightly different. In the case of a complete restart (where all processes are restarted from a checkpoint), he setup and rewire a new set of BTLs.
<br>
<p>However, it happens that we do have some code to rewire the MPI processes in case of failure(s) in one of UTK projects. I'll have to talk with the team here, to see if at this point there is something we can contribute regarding this matter.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Dec 15, 2009, at 21:08 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2009, at 6:31 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 15, 2009, at 2:20 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It probably should be done at a lower level, but it begs a different question. For example, I've created the capability  in the new cluster manager to detect interfaces that are lost, ride through the problem by moving affected procs to other nodes (reconnecting ORTE-level comm), and move procs back if/when nodes reappear. So someone can remove a node &quot;on-the-fly&quot; and replace that hardware with another node without having to stop and restart the job, etc. A lot of that infrastructure is now down inside ORTE, though a few key pieces remain in the ORCM code base (and most likely will stay there).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Works great - unless it is an MPI job. If we can figure out a way for the MPI procs to (a) be properly restarted on the &quot;new&quot; node, and (b) update the BTL connection info on the other MPI procs in the job, then we would be good to go...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Trivial problem, I am sure :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ...actually, the groundwork is there with Josh's work, isn't it?  I think the real issue is handling un-graceful BTL failures properly.  I'm guessing that's the biggest piece that isn't done...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Think so....not sure how to update the BTL's with the new info, but perhaps Josh has already done that problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7246.php">Vasily Philipov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<li><strong>Previous message:</strong> <a href="7244.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22317"</a>
<li><strong>In reply to:</strong> <a href="7240.php">Ralph Castain: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7248.php">Joshua Hursey: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Reply:</strong> <a href="7248.php">Joshua Hursey: "Re: [OMPI devel] carto vs. hwloc"</a>
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
