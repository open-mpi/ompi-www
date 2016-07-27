<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4569 - branches/v1.4";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  7 02:01:12 2012" -->
<!-- isoreceived="20120707060112" -->
<!-- sent="Sat, 07 Jul 2012 08:01:06 +0200" -->
<!-- isosent="20120707060106" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4569 - branches/v1.4" -->
<!-- id="4FF7D0A2.4060607_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3209AE5B-6C3A-48F3-838E-1A55E4B63A33_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4569 - branches/v1.4<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-07 02:01:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3154.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4582)"</a>
<li><strong>Previous message:</strong> <a href="3152.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.3a1r4573)"</a>
<li><strong>In reply to:</strong> <a href="3150.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4569 - branches/v1.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Trunk still looks good, and backporting to v1.4 makes the warning go
<br>
away, so I am backporting.
<br>
<p>Brice
<br>
<p><p><p>Le 06/07/2012 23:58, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Can you try trunk r4574?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ifdef vs m4_ifdef -- I'm not actually sure, so I went with m4_ifdef.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 6, 2012, at 4:39 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This causes this warning during autogen (only in the v1.4 branch, but I
</span><br>
<span class="quotelev2">&gt;&gt; don't see why):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac:141: warning: AC_COMPILE_IFELSE was called before AC_USE_SYSTEM_EXTENSIONS
</span><br>
<span class="quotelev2">&gt;&gt; config/hwloc.m4:24: HWLOC_SETUP_CORE is expanded from...
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac:141: the top level
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Moving the line after SETUP_CORE removes the warning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; By the way, are ifdef and m4_ifdef identical? We used m4_ifdef in other
</span><br>
<span class="quotelev2">&gt;&gt; similar cases.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 06/07/2012 21:56, svn-commit-mailer_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: jsquyres (Jeff Squyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2012-07-06 15:56:37 EDT (Fri, 06 Jul 2012)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 4569
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/4569">https://svn.open-mpi.org/trac/hwloc/changeset/4569</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Merge r4568 from trunk: accomodate Automake 1.12.x
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Properties modified: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   branches/v1.4/   (props changed)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   branches/v1.4/configure.ac |     3 +++                                     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   1 files changed, 3 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: branches/v1.4/configure.ac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- branches/v1.4/configure.ac	Fri Jul  6 15:55:31 2012	(r4568)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ branches/v1.4/configure.ac	2012-07-06 15:56:37 EDT (Fri, 06 Jul 2012)	(r4569)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -110,6 +110,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_PROG_CC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AM_PROG_CC_C_O
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS=&quot;$CFLAGS_save&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# This did not exist pre AM 1.11.x (where x is somewhere &gt;0 and &lt;3),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +# but it is necessary in AM 1.12.x.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +ifdef([AM_PROG_AR], [AM_PROG_AR])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Define hwloc's configure arguments
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HWLOC_DEFINE_ARGS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3154.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4582)"</a>
<li><strong>Previous message:</strong> <a href="3152.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.3a1r4573)"</a>
<li><strong>In reply to:</strong> <a href="3150.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4569 - branches/v1.4"</a>
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
