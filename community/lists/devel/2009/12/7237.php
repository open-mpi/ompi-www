<?
$subject_val = "Re: [OMPI devel] carto vs. hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 20:31:38 2009" -->
<!-- isoreceived="20091216013138" -->
<!-- sent="Tue, 15 Dec 2009 20:31:34 -0500" -->
<!-- isosent="20091216013134" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] carto vs. hwloc" -->
<!-- id="7D08D236-54DB-412D-B1D6-8E4840C56412_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EA1C61AF-47BE-4374-A6C8-5C7319E803B6_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-15 20:31:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7238.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<li><strong>Previous message:</strong> <a href="7236.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22317"</a>
<li><strong>In reply to:</strong> <a href="7235.php">Ralph Castain: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7240.php">Ralph Castain: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Reply:</strong> <a href="7240.php">Ralph Castain: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Reply:</strong> <a href="7247.php">Kenneth Lloyd: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 15, 2009, at 2:20 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; It probably should be done at a lower level, but it begs a different question. For example, I've created the capability  in the new cluster manager to detect interfaces that are lost, ride through the problem by moving affected procs to other nodes (reconnecting ORTE-level comm), and move procs back if/when nodes reappear. So someone can remove a node &quot;on-the-fly&quot; and replace that hardware with another node without having to stop and restart the job, etc. A lot of that infrastructure is now down inside ORTE, though a few key pieces remain in the ORCM code base (and most likely will stay there).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Works great - unless it is an MPI job. If we can figure out a way for the MPI procs to (a) be properly restarted on the &quot;new&quot; node, and (b) update the BTL connection info on the other MPI procs in the job, then we would be good to go...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Trivial problem, I am sure :-)
</span><br>
<p>...actually, the groundwork is there with Josh's work, isn't it?  I think the real issue is handling un-graceful BTL failures properly.  I'm guessing that's the biggest piece that isn't done...?
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
<li><strong>Next message:</strong> <a href="7238.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22313"</a>
<li><strong>Previous message:</strong> <a href="7236.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22317"</a>
<li><strong>In reply to:</strong> <a href="7235.php">Ralph Castain: "Re: [OMPI devel] carto vs. hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7240.php">Ralph Castain: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Reply:</strong> <a href="7240.php">Ralph Castain: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>Reply:</strong> <a href="7247.php">Kenneth Lloyd: "Re: [OMPI devel] carto vs. hwloc"</a>
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
