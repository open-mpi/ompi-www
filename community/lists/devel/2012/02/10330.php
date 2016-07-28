<?
$subject_val = "Re: [OMPI devel] RFC: Java MPI bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  7 15:58:01 2012" -->
<!-- isoreceived="20120207205801" -->
<!-- sent="Tue, 7 Feb 2012 15:57:55 -0500" -->
<!-- isosent="20120207205755" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Java MPI bindings" -->
<!-- id="D7302A76-C0F3-4E5F-A56E-E8F523CE2662_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F318AB4.1070700_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Java MPI bindings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-07 15:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10331.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10329.php">Ralph Castain: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10325.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10328.php">Jeff Squyres: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 7, 2012, at 3:33 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; So I'd propose that the work be done on a branch and the RFC can be reissued when there is both
</span><br>
<span class="quotelev1">&gt; a) a standard to which the bindings can claim to conform
</span><br>
<p>I don't really agree with this statement; see my prior email.
<br>
<p><span class="quotelev1">&gt; b) an implementation which has been shown to be stable
</span><br>
<p>That's fair enough.
<br>
<p>The implementation has zero performance impact on the rest of the code base (E.g., latency of C's MPI_Send).  But the rest of the code stability does need to be proven, and definitely benefits from having others test it.
<br>
<p>This is not an unusual pattern for the OMPI SVN trunk.  People develop stuff on branches all the time and bring them in to the trunk.  And sometimes it makes the trunk a little unstable for a while, despite the best of intentions and the best attempts at pre-testing before committing to the trunk (I know; I've been the cause of trunk instability before, too).
<br>
<p>Case in point: some new MPI-3 functions were recently brought to the trunk.  They had several mistakes in them that were not evident until others tried to compile / use them.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10331.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10329.php">Ralph Castain: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>In reply to:</strong> <a href="10325.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10328.php">Jeff Squyres: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
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
