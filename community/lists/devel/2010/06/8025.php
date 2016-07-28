<?
$subject_val = "Re: [OMPI devel] RFC: Remove all other paffinity components";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 10:05:51 2010" -->
<!-- isoreceived="20100602140551" -->
<!-- sent="Wed, 2 Jun 2010 10:05:46 -0400" -->
<!-- isosent="20100602140546" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove all other paffinity components" -->
<!-- id="5A20649B-68BF-4FC1-BA33-DA448866BC3B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3211A5A1-9B7B-4268-BD77-5313B5F9AF45_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove all other paffinity components<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 10:05:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8026.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8024.php">Jeff Squyres: "Re: [OMPI devel] RFC: move hwloc code base to opal/hwloc"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8112.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="8112.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To follow up on this RFC...
<br>
<p>This RFC also got discussed on the weekly call (and in several other discussions).  Again, no one seemed to hate it.  That being said, hwloc still needs a bit more soak time; I just committed the 32 bit fix the other day.
<br>
<p>So this one will happen eventually (i.e., #1, below -- #2 is the other RFC).  It'll probably be off in an hg branch at first, and then I'll bring the results to the community before bringing it back into the trunk.
<br>
<p><p>On May 18, 2010, at 8:50 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 18, 2010, at 8:31 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The above sounds like you are replacing the whole paffinity framework with hwloc.  Is that true?  Or is the hwloc accessors you are talking about non-paffinity related?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good point; these have all gotten muddled in the email chain.  Let me re-state everything in one place in an attempt to be clear:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Split paffinity into two frameworks (because some OS's support one and not the other):
</span><br>
<span class="quotelev1">&gt;  - binding: just for getting and setting processor affinity
</span><br>
<span class="quotelev1">&gt;  - hwmap: just for mapping (board, socket, core, hwthread) &lt;--&gt; OS processor ID
</span><br>
<span class="quotelev1">&gt;  --&gt; Note that hwmap will be an expansion of the current paffinity capabilities
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Add hwloc to opal
</span><br>
<span class="quotelev1">&gt;  - Commit the hwloc tree to opal/util/hwloc (or somesuch)
</span><br>
<span class="quotelev1">&gt;  - Have the ability to configure hwloc out (e.g., for embedded environments)
</span><br>
<span class="quotelev1">&gt;  - Add a dozen or two hwloc wrappers in opal/util/hwloc.c|h
</span><br>
<span class="quotelev1">&gt;  - The rest of the OPAL/ORTE/OMPI trees *only call these wrapper functions* -- they do not call hwloc directly
</span><br>
<span class="quotelev1">&gt;  - These wrappers will call the back-end hwloc functions or return OPAL_ERR_NOT_SUPPORTED (or somesuch) if hwloc is not available
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="8026.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8024.php">Jeff Squyres: "Re: [OMPI devel] RFC: move hwloc code base to opal/hwloc"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8112.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="8112.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
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
