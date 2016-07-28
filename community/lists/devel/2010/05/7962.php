<?
$subject_val = "Re: [OMPI devel] RFC: Remove all other paffinity components";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 08:50:48 2010" -->
<!-- isoreceived="20100518125048" -->
<!-- sent="Tue, 18 May 2010 08:50:43 -0400" -->
<!-- isosent="20100518125043" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove all other paffinity components" -->
<!-- id="3211A5A1-9B7B-4268-BD77-5313B5F9AF45_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BF2889D.4000402_at_oracle.com" -->
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
<strong>Date:</strong> 2010-05-18 08:50:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7963.php">Josh Hursey: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7961.php">Jeff Squyres: "[OMPI devel] /dev/shm usage (was: Very poor performance with btl sm...)"</a>
<li><strong>In reply to:</strong> <a href="7960.php">Terry Dontje: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8025.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8025.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 18, 2010, at 8:31 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; The above sounds like you are replacing the whole paffinity framework with hwloc.  Is that true?  Or is the hwloc accessors you are talking about non-paffinity related?
</span><br>
<p>Good point; these have all gotten muddled in the email chain.  Let me re-state everything in one place in an attempt to be clear:
<br>
<p>1. Split paffinity into two frameworks (because some OS's support one and not the other):
<br>
&nbsp;&nbsp;- binding: just for getting and setting processor affinity
<br>
&nbsp;&nbsp;- hwmap: just for mapping (board, socket, core, hwthread) &lt;--&gt; OS processor ID
<br>
&nbsp;&nbsp;--&gt; Note that hwmap will be an expansion of the current paffinity capabilities
<br>
<p>2. Add hwloc to opal
<br>
&nbsp;&nbsp;- Commit the hwloc tree to opal/util/hwloc (or somesuch)
<br>
&nbsp;&nbsp;- Have the ability to configure hwloc out (e.g., for embedded environments)
<br>
&nbsp;&nbsp;- Add a dozen or two hwloc wrappers in opal/util/hwloc.c|h
<br>
&nbsp;&nbsp;- The rest of the OPAL/ORTE/OMPI trees *only call these wrapper functions* -- they do not call hwloc directly
<br>
&nbsp;&nbsp;- These wrappers will call the back-end hwloc functions or return OPAL_ERR_NOT_SUPPORTED (or somesuch) if hwloc is not available
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
<li><strong>Next message:</strong> <a href="7963.php">Josh Hursey: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7961.php">Jeff Squyres: "[OMPI devel] /dev/shm usage (was: Very poor performance with btl sm...)"</a>
<li><strong>In reply to:</strong> <a href="7960.php">Terry Dontje: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8025.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8025.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
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
