<?
$subject_val = "Re: [OMPI devel] RFC: continue cleanup of build system abstractions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 10:42:27 2014" -->
<!-- isoreceived="20140508144227" -->
<!-- sent="Thu, 8 May 2014 07:41:30 -0700" -->
<!-- isosent="20140508144130" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: continue cleanup of build system abstractions" -->
<!-- id="C5654C7E-527C-4B88-A4CE-AFBD9705CCDA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1B6AA396-0A3F-481E-AEE7-DEE2833D6016_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: continue cleanup of build system abstractions<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 10:41:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14763.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14761.php">Ashley Pittman: "Re: [OMPI devel] VPATH builds broken?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14621.php">Ralph Castain: "[OMPI devel] RFC: continue cleanup of build system abstractions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This RFC is now complete - the renaming exercise is done. My apologies to all for the churn, and my deepest thanks for your patience.
<br>
<p>I know it will take awhile to get used to using the revised names and to avoid breaking the abstractions going forward. We have a &quot;canary&quot; for most of the abstraction breaks, so we can deal with them rather quickly when they occur.
<br>
<p>Please let me know if/when you hit issues and we'll fix them as quickly as possible. I think the system is pretty close to right, but (as usual) there may be things in areas we can't compile that are broken.
<br>
<p>Thanks again for your patience during this transition.
<br>
Ralph
<br>
<p><p>On Apr 27, 2014, at 4:39 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT:   continue the cleanup of build system abstractions that was started
</span><br>
<span class="quotelev1">&gt;              a couple of years ago by Brian, Jeff, and I. The objective is to fix
</span><br>
<span class="quotelev1">&gt;              all the naming conventions for things like OMPI_CHECK_PACKAGE
</span><br>
<span class="quotelev1">&gt;              so they accurately reflect their targeted level in the code base - e.g.,
</span><br>
<span class="quotelev1">&gt;              OMPI_foo gets used for things in the MPI layer. This basically just
</span><br>
<span class="quotelev1">&gt;              corrects some historical decisions made before we cared as much
</span><br>
<span class="quotelev1">&gt;              about abstractions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN:  to be done in a series of commits over the next two months
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HOW:    a simple search_replace.pl across the repo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First step:
</span><br>
<span class="quotelev1">&gt;    OMPI_CHECK_PACKAGE                    -&gt;  OPAL_CHECK_PACKAGE
</span><br>
<span class="quotelev1">&gt;    OMPI_CHECK_FUNC_LIB                    -&gt;  OPAL_CHECK_FUNC_LIB
</span><br>
<span class="quotelev1">&gt;    OMPI_CHECK_COMPILER_WORKS   -&gt;  OPAL_CHECK_COMPILER_WORKS
</span><br>
<span class="quotelev1">&gt;    OMPI_CHECK_WITHDIR                      -&gt;  OPAL_CHECK_WITHDIR
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT:  if nobody raises an objection, sometime after the Tues telecon
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14763.php">Christopher Samuel: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<li><strong>Previous message:</strong> <a href="14761.php">Ashley Pittman: "Re: [OMPI devel] VPATH builds broken?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14621.php">Ralph Castain: "[OMPI devel] RFC: continue cleanup of build system abstractions"</a>
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
