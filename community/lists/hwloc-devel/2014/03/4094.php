<?
$subject_val = "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 29 11:04:50 2014" -->
<!-- isoreceived="20140329150450" -->
<!-- sent="Sat, 29 Mar 2014 08:04:42 -0700" -->
<!-- isosent="20140329150442" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec" -->
<!-- id="92D0102E-E2DC-465F-83EF-B8321DD5C145_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5336DFC7.2030602_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-29 11:04:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4095.php">Christopher Samuel: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4093.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4093.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4095.php">Christopher Samuel: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4095.php">Christopher Samuel: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff just left today for a 1-week vacation. However, this came up on the OMPI mailing list - turns out that some linux distro's automatically set LS_COLORS in your environment when running old versions of csh/tcsh via their default dot files, and it can cause problems with the script. So just ensuring it isn't set solves the problem.
<br>
<p><p>On Mar 29, 2014, at 7:59 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; Where does this LS_COLORS variable come from? Who is setting it?
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 27/03/2014 11:45, MPI Team a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; The branch, master has been updated
</span><br>
<span class="quotelev2">&gt;&gt;       via  0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec (commit)
</span><br>
<span class="quotelev2">&gt;&gt;      from  00f85033d269e2c312370bb24043f92a92dff7e3 (commit)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev2">&gt;&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev2">&gt;&gt; revisions in full, below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/hwloc/commit/0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec">https://github.com/open-mpi/hwloc/commit/0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; commit 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec
</span><br>
<span class="quotelev2">&gt;&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date:   Thu Mar 27 06:28:45 2014 -0400
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    BUILD: fix &quot;make dist&quot; failure on some linux distro with old csh/tcsh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    On some linux distro (sles11sp2) csh fails to parse $LS_COLORS and
</span><br>
<span class="quotelev2">&gt;&gt;    borks with error: Unknown colorls variable `mh'.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    The workaround is to unset LS_COLORS before calling to csh script.
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Makefile.am | 4 ++--
</span><br>
<span class="quotelev2">&gt;&gt; 1 file changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/Makefile.am b/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; index ca9c00c..34d0aa2 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1,6 +1,6 @@
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright &#169; 2009-2014 Inria.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # Copyright &#169; 2009      Universit&#233; Bordeaux 1
</span><br>
<span class="quotelev2">&gt;&gt; -# Copyright &#169; 2009-2010 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright &#169; 2009-2014 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; # See COPYING in top-level directory.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # Note that the -I directory must *exactly* match what was specified
</span><br>
<span class="quotelev2">&gt;&gt; @@ -48,7 +48,7 @@ endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if HWLOC_BUILD_STANDALONE
</span><br>
<span class="quotelev2">&gt;&gt; dist-hook:
</span><br>
<span class="quotelev2">&gt;&gt; -	csh &quot;$(top_srcdir)/config/distscript.csh&quot; &quot;$(top_srcdir)&quot; &quot;$(distdir)&quot; &quot;$(HWLOC_VERSION)&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +	env LS_COLORS= csh &quot;$(top_srcdir)/config/distscript.csh&quot; &quot;$(top_srcdir)&quot; &quot;$(distdir)&quot; &quot;$(HWLOC_VERSION)&quot;
</span><br>
<span class="quotelev2">&gt;&gt; endif HWLOC_BUILD_STANDALONE
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Summary of changes:
</span><br>
<span class="quotelev2">&gt;&gt; Makefile.am | 4 ++--
</span><br>
<span class="quotelev2">&gt;&gt; 1 file changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hooks/post-receive
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4095.php">Christopher Samuel: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4093.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4093.php">Brice Goglin: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4095.php">Christopher Samuel: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4095.php">Christopher Samuel: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
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
