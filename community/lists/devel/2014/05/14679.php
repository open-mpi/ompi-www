<?
$subject_val = "Re: [OMPI devel] RFC: continue cleanup of build system abstractions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  1 12:09:31 2014" -->
<!-- isoreceived="20140501160931" -->
<!-- sent="Thu, 1 May 2014 09:09:20 -0700" -->
<!-- isosent="20140501160920" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: continue cleanup of build system abstractions" -->
<!-- id="81404D6E-ED00-49F9-88B6-A3F50ED3379D_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-05-01 12:09:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14680.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn]	svn:open-mpi	r31577	-	trunk/ompi/mca/rte/base"</a>
<li><strong>Previous message:</strong> <a href="14678.php">George Bosilca: "Re: [OMPI devel] [OMPI svn]	svn:open-mpi	r31577	- trunk/ompi/mca/rte/base"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14621.php">Ralph Castain: "[OMPI devel] RFC: continue cleanup of build system abstractions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14762.php">Ralph Castain: "Re: [OMPI devel] RFC: continue cleanup of build system abstractions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Next step:
<br>
<p>OMPI_INSTALL_BINARIES  -&gt; OPAL_INSTALL_BINARIES
<br>
OMPI_ENSURE_CONTAINS_OPTFLAGS  -&gt; OPAL_ENSURE_CONTAINS_OPTFLAGS
<br>
OMPI_CFLAGS_BEFORE_PICKY  -&gt; OPAL_CFLAGS_BEFORE_PICKY
<br>
<p>Most of the rest of the changes are in the config area and configure.ac - we'll start with the following:
<br>
config/opal_setup_cc.m4 -&gt; move all OMPI/ompi to OPAL/opal
<br>
ompi_show_title  -&gt; opal_show_title
<br>
ompi_show_subtitle -&gt; opal_show_subtitle
<br>
<p>Timeout:  minus objection, end-of-week
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14679/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14680.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn]	svn:open-mpi	r31577	-	trunk/ompi/mca/rte/base"</a>
<li><strong>Previous message:</strong> <a href="14678.php">George Bosilca: "Re: [OMPI devel] [OMPI svn]	svn:open-mpi	r31577	- trunk/ompi/mca/rte/base"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14621.php">Ralph Castain: "[OMPI devel] RFC: continue cleanup of build system abstractions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14762.php">Ralph Castain: "Re: [OMPI devel] RFC: continue cleanup of build system abstractions"</a>
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
