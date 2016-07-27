<?
$subject_val = "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 29 10:59:23 2014" -->
<!-- isoreceived="20140329145923" -->
<!-- sent="Sat, 29 Mar 2014 15:59:19 +0100" -->
<!-- isosent="20140329145919" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec" -->
<!-- id="5336DFC7.2030602_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20140327104505.3C8F225F072_at_jaguar.crest.iu.edu" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-29 10:59:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4094.php">Ralph Castain: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4092.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9-2-g9eec020)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4094.php">Ralph Castain: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4094.php">Ralph Castain: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
Where does this LS_COLORS variable come from? Who is setting it?
<br>
Brice
<br>
<p><p><p>Le 27/03/2014 11:45, MPI Team a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;        via  0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec (commit)
</span><br>
<span class="quotelev1">&gt;       from  00f85033d269e2c312370bb24043f92a92dff7e3 (commit)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/hwloc/commit/0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec">https://github.com/open-mpi/hwloc/commit/0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; commit 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec
</span><br>
<span class="quotelev1">&gt; Author: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Thu Mar 27 06:28:45 2014 -0400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     BUILD: fix &quot;make dist&quot; failure on some linux distro with old csh/tcsh
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     On some linux distro (sles11sp2) csh fails to parse $LS_COLORS and
</span><br>
<span class="quotelev1">&gt;     borks with error: Unknown colorls variable `mh'.
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;     The workaround is to unset LS_COLORS before calling to csh script.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;  Makefile.am | 4 ++--
</span><br>
<span class="quotelev1">&gt;  1 file changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/Makefile.am b/Makefile.am
</span><br>
<span class="quotelev1">&gt; index ca9c00c..34d0aa2 100644
</span><br>
<span class="quotelev1">&gt; --- a/Makefile.am
</span><br>
<span class="quotelev1">&gt; +++ b/Makefile.am
</span><br>
<span class="quotelev1">&gt; @@ -1,6 +1,6 @@
</span><br>
<span class="quotelev1">&gt;  # Copyright &#194;&#169; 2009-2014 Inria.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  # Copyright &#194;&#169; 2009      Universit&#195;&#169; Bordeaux 1
</span><br>
<span class="quotelev1">&gt; -# Copyright &#194;&#169; 2009-2010 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright &#194;&#169; 2009-2014 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  # See COPYING in top-level directory.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  # Note that the -I directory must *exactly* match what was specified
</span><br>
<span class="quotelev1">&gt; @@ -48,7 +48,7 @@ endif
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  if HWLOC_BUILD_STANDALONE
</span><br>
<span class="quotelev1">&gt;  dist-hook:
</span><br>
<span class="quotelev1">&gt; -	csh &quot;$(top_srcdir)/config/distscript.csh&quot; &quot;$(top_srcdir)&quot; &quot;$(distdir)&quot; &quot;$(HWLOC_VERSION)&quot;
</span><br>
<span class="quotelev1">&gt; +	env LS_COLORS= csh &quot;$(top_srcdir)/config/distscript.csh&quot; &quot;$(top_srcdir)&quot; &quot;$(distdir)&quot; &quot;$(HWLOC_VERSION)&quot;
</span><br>
<span class="quotelev1">&gt;  endif HWLOC_BUILD_STANDALONE
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Summary of changes:
</span><br>
<span class="quotelev1">&gt;  Makefile.am | 4 ++--
</span><br>
<span class="quotelev1">&gt;  1 file changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hooks/post-receive
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4094.php">Ralph Castain: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4092.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9-2-g9eec020)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4094.php">Ralph Castain: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4094.php">Ralph Castain: "Re: [hwloc-devel] GIT: hwloc branch master updated. 0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
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
