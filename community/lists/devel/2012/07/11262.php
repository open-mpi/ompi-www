<?
$subject_val = "Re: [OMPI devel] RFC: enable the use of source in platform files";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  9 17:21:40 2012" -->
<!-- isoreceived="20120709212140" -->
<!-- sent="Mon, 9 Jul 2012 14:21:28 -0700" -->
<!-- isosent="20120709212128" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: enable the use of source in platform files" -->
<!-- id="1FAF8973-6736-453C-AED5-5A9837BC22AE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120709210925.GD81027_at_panthera.lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-09 17:21:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11263.php">Nathan Hjelm: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11261.php">Jeff Squyres: "Re: [OMPI devel] ibm/collective/bcast_f08.f90"</a>
<li><strong>In reply to:</strong> <a href="11260.php">Nathan Hjelm: "[OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11263.php">Nathan Hjelm: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Reply:</strong> <a href="11263.php">Nathan Hjelm: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm confused - how does this help maintain a platform file???
<br>
<p><p>On Jul 9, 2012, at 2:09 PM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; When: Thurs, Jul 12, 5 PM MDT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: Useful feature. Enabling source may cut down on the maintenance required to keep platform files up to date.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How: Change directories to the platform file's directory before sourcing it (not after).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/config/ompi_load_platform.m4 b/config/ompi_load_platform.m4
</span><br>
<span class="quotelev1">&gt; index 7231f83..250e7d8 100644
</span><br>
<span class="quotelev1">&gt; --- a/config/ompi_load_platform.m4
</span><br>
<span class="quotelev1">&gt; +++ b/config/ompi_load_platform.m4
</span><br>
<span class="quotelev1">&gt; @@ -50,7 +50,18 @@ AC_DEFUN([OMPI_LOAD_PLATFORM], [
</span><br>
<span class="quotelev1">&gt;         # eval into environment
</span><br>
<span class="quotelev1">&gt;         OPAL_LOG_MSG([Loading environment file $with_platform, with contents below])
</span><br>
<span class="quotelev1">&gt;         OPAL_LOG_FILE([$with_platform])
</span><br>
<span class="quotelev1">&gt; -        . &quot;$with_platform&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # setup by getting full pathname for the platform directories
</span><br>
<span class="quotelev1">&gt; +        platform_base=&quot;`dirname $with_platform`&quot;
</span><br>
<span class="quotelev1">&gt; +        platform_file=&quot;`basename $with_platform`&quot;
</span><br>
<span class="quotelev1">&gt; +        # get full pathname of where we are so we can return
</span><br>
<span class="quotelev1">&gt; +        platform_savedir=&quot;`pwd`&quot;
</span><br>
<span class="quotelev1">&gt; +        # go to where the platform file is located
</span><br>
<span class="quotelev1">&gt; +        cd &quot;$platform_base&quot;
</span><br>
<span class="quotelev1">&gt; +        # get the full path to this location
</span><br>
<span class="quotelev1">&gt; +        platform_file_dir=`pwd`
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        . &quot;$platform_file&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         # see if they left us a name
</span><br>
<span class="quotelev1">&gt;         if test &quot;$OMPI_PLATFORM_LOADED&quot; != &quot;&quot; ; then
</span><br>
<span class="quotelev1">&gt; @@ -63,14 +74,6 @@ AC_DEFUN([OMPI_LOAD_PLATFORM], [
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         # look for default mca param file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -        # setup by getting full pathname for the platform directories
</span><br>
<span class="quotelev1">&gt; -        platform_base=&quot;`dirname $with_platform`&quot;
</span><br>
<span class="quotelev1">&gt; -        # get full pathname of where we are so we can return
</span><br>
<span class="quotelev1">&gt; -        platform_savedir=&quot;`pwd`&quot;
</span><br>
<span class="quotelev1">&gt; -        # go to where the platform file is located
</span><br>
<span class="quotelev1">&gt; -        cd &quot;$platform_base&quot;
</span><br>
<span class="quotelev1">&gt; -        # get the full path to this location
</span><br>
<span class="quotelev1">&gt; -        platform_file_dir=`pwd`
</span><br>
<span class="quotelev1">&gt;         # return to where we started
</span><br>
<span class="quotelev1">&gt;         cd &quot;$platform_savedir&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<li><strong>Next message:</strong> <a href="11263.php">Nathan Hjelm: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11261.php">Jeff Squyres: "Re: [OMPI devel] ibm/collective/bcast_f08.f90"</a>
<li><strong>In reply to:</strong> <a href="11260.php">Nathan Hjelm: "[OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11263.php">Nathan Hjelm: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Reply:</strong> <a href="11263.php">Nathan Hjelm: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
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
