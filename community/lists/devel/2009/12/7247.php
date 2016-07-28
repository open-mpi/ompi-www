<?
$subject_val = "Re: [OMPI devel] carto vs. hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 07:00:44 2009" -->
<!-- isoreceived="20091216120044" -->
<!-- sent="Wed, 16 Dec 2009 05:00:41 -0700" -->
<!-- isosent="20091216120041" -->
<!-- name="Kenneth Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] carto vs. hwloc" -->
<!-- id="18409C52B55D400989E9D8FC52412AAD_at_wattp4" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7D08D236-54DB-412D-B1D6-8E4840C56412_at_cisco.com" -->
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
<strong>From:</strong> Kenneth Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 07:00:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7248.php">Joshua Hursey: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Previous message:</strong> <a href="7246.php">Vasily Philipov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<li><strong>In reply to:</strong> <a href="7237.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, December 15, 2009 6:32 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] carto vs. hwloc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2009, at 2:20 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It probably should be done at a lower level, but it begs a 
</span><br>
<span class="quotelev1">&gt; different question. For example, I've created the capability  
</span><br>
<span class="quotelev1">&gt; in the new cluster manager to detect interfaces that are 
</span><br>
<span class="quotelev1">&gt; lost, ride through the problem by moving affected procs to 
</span><br>
<span class="quotelev1">&gt; other nodes (reconnecting ORTE-level comm), and move procs 
</span><br>
<span class="quotelev1">&gt; back if/when nodes reappear. So someone can remove a node 
</span><br>
<span class="quotelev1">&gt; &quot;on-the-fly&quot; and replace that hardware with another node 
</span><br>
<span class="quotelev1">&gt; without having to stop and restart the job, etc. A lot of 
</span><br>
<span class="quotelev1">&gt; that infrastructure is now down inside ORTE, though a few key 
</span><br>
<span class="quotelev1">&gt; pieces remain in the ORCM code base (and most likely will stay there).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Works great - unless it is an MPI job. If we can figure out 
</span><br>
<span class="quotelev1">&gt; a way for the MPI procs to (a) be properly restarted on the 
</span><br>
<span class="quotelev1">&gt; &quot;new&quot; node, and (b) update the BTL connection info on the 
</span><br>
<span class="quotelev1">&gt; other MPI procs in the job, then we would be good to go...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Trivial problem, I am sure :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...actually, the groundwork is there with Josh's work, isn't 
</span><br>
<span class="quotelev1">&gt; it?  I think the real issue is handling un-graceful BTL 
</span><br>
<span class="quotelev1">&gt; failures properly.  I'm guessing that's the biggest piece 
</span><br>
<span class="quotelev1">&gt; that isn't done...?
</span><br>
<p>Precisely.  Why the BTL, or why not at the PTL? (Where these issues rightly
<br>
belong, IMO).
<br>
<p>Ken Lloyd
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<li><strong>Next message:</strong> <a href="7248.php">Joshua Hursey: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Previous message:</strong> <a href="7246.php">Vasily Philipov: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<li><strong>In reply to:</strong> <a href="7237.php">Jeff Squyres: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- nextthread="start" -->
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
