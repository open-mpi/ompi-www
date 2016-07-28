<?
$subject_val = "Re: [OMPI devel] RFC: enable the use of source in platform files";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  9 17:26:01 2012" -->
<!-- isoreceived="20120709212601" -->
<!-- sent="Mon, 9 Jul 2012 15:25:57 -0600" -->
<!-- isosent="20120709212557" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: enable the use of source in platform files" -->
<!-- id="20120709212556.GF81027_at_panthera.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1FAF8973-6736-453C-AED5-5A9837BC22AE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: enable the use of source in platform files<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-09 17:25:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11264.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11262.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>In reply to:</strong> <a href="11262.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11264.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Reply:</strong> <a href="11264.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
LANL's platform file's (for a particular platform) are 90% the same. By allowing a source directive those settings can be kept in a common file then sourced by the platform file. When something changes I wouldn't have to change a dozen files only a couple.
<br>
<p>-Nathan
<br>
<p>On Mon, Jul 09, 2012 at 02:21:28PM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I'm confused - how does this help maintain a platform file???
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 9, 2012, at 2:09 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When: Thurs, Jul 12, 5 PM MDT
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Why: Useful feature. Enabling source may cut down on the maintenance required to keep platform files up to date.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; How: Change directories to the platform file's directory before sourcing it (not after).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/config/ompi_load_platform.m4 b/config/ompi_load_platform.m4
</span><br>
<span class="quotelev2">&gt; &gt; index 7231f83..250e7d8 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/config/ompi_load_platform.m4
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/config/ompi_load_platform.m4
</span><br>
<span class="quotelev2">&gt; &gt; @@ -50,7 +50,18 @@ AC_DEFUN([OMPI_LOAD_PLATFORM], [
</span><br>
<span class="quotelev2">&gt; &gt;         # eval into environment
</span><br>
<span class="quotelev2">&gt; &gt;         OPAL_LOG_MSG([Loading environment file $with_platform, with contents below])
</span><br>
<span class="quotelev2">&gt; &gt;         OPAL_LOG_FILE([$with_platform])
</span><br>
<span class="quotelev2">&gt; &gt; -        . &quot;$with_platform&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        # setup by getting full pathname for the platform directories
</span><br>
<span class="quotelev2">&gt; &gt; +        platform_base=&quot;`dirname $with_platform`&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +        platform_file=&quot;`basename $with_platform`&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +        # get full pathname of where we are so we can return
</span><br>
<span class="quotelev2">&gt; &gt; +        platform_savedir=&quot;`pwd`&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +        # go to where the platform file is located
</span><br>
<span class="quotelev2">&gt; &gt; +        cd &quot;$platform_base&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +        # get the full path to this location
</span><br>
<span class="quotelev2">&gt; &gt; +        platform_file_dir=`pwd`
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        . &quot;$platform_file&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;         # see if they left us a name
</span><br>
<span class="quotelev2">&gt; &gt;         if test &quot;$OMPI_PLATFORM_LOADED&quot; != &quot;&quot; ; then
</span><br>
<span class="quotelev2">&gt; &gt; @@ -63,14 +74,6 @@ AC_DEFUN([OMPI_LOAD_PLATFORM], [
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;         # look for default mca param file
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -        # setup by getting full pathname for the platform directories
</span><br>
<span class="quotelev2">&gt; &gt; -        platform_base=&quot;`dirname $with_platform`&quot;
</span><br>
<span class="quotelev2">&gt; &gt; -        # get full pathname of where we are so we can return
</span><br>
<span class="quotelev2">&gt; &gt; -        platform_savedir=&quot;`pwd`&quot;
</span><br>
<span class="quotelev2">&gt; &gt; -        # go to where the platform file is located
</span><br>
<span class="quotelev2">&gt; &gt; -        cd &quot;$platform_base&quot;
</span><br>
<span class="quotelev2">&gt; &gt; -        # get the full path to this location
</span><br>
<span class="quotelev2">&gt; &gt; -        platform_file_dir=`pwd`
</span><br>
<span class="quotelev2">&gt; &gt;         # return to where we started
</span><br>
<span class="quotelev2">&gt; &gt;         cd &quot;$platform_savedir&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="11264.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11262.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>In reply to:</strong> <a href="11262.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11264.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Reply:</strong> <a href="11264.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
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
