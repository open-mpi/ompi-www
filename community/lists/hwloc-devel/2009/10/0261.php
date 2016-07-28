<?
$subject_val = "Re: [hwloc-devel] automake silent-rules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 10:41:57 2009" -->
<!-- isoreceived="20091023144157" -->
<!-- sent="Fri, 23 Oct 2009 09:41:49 -0500" -->
<!-- isosent="20091023144149" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] automake silent-rules" -->
<!-- id="4AE1C0AD.1050905_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AE19894.80307_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] automake silent-rules<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-23 10:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0262.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1242)"</a>
<li><strong>Previous message:</strong> <a href="0260.php">Jeff Squyres: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>In reply to:</strong> <a href="0254.php">Brice Goglin: "[hwloc-devel] automake silent-rules"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can make it older automake safe by adding the following rule in your
<br>
configure.ac:
<br>
<p>m4_ifdef([AM_SILENT_RULES], [AM_SILENT_RULES([yes])])
<br>
<p>It doesn't matter to me (we anyway use 1.11 for MPICH2), but it might be
<br>
convenient for other users.
<br>
<p>&nbsp;-- Pavan
<br>
<p>On 10/23/2009 06:50 AM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; I'd like to require automake 1.11 for hwloc 1.0 so that we get the new
</span><br>
<span class="quotelev1">&gt; silent-rules feature. It gives you &quot;CC foo.o&quot; instead of the too-long
</span><br>
<span class="quotelev1">&gt; unreadable compile line (if you do make V=0 or configure with
</span><br>
<span class="quotelev1">&gt; --enable-silent-rules). Patch below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anybody have anything against this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- configure.ac    (revision 1231)
</span><br>
<span class="quotelev1">&gt; +++ configure.ac    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -19,7 +19,7 @@
</span><br>
<span class="quotelev1">&gt;  AC_CANONICAL_SYSTEM
</span><br>
<span class="quotelev1">&gt;  AC_CONFIG_SRCDIR([src/topology.c])
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -AM_INIT_AUTOMAKE([1.10 dist-bzip2 foreign tar-ustar -Wall -Werror])
</span><br>
<span class="quotelev1">&gt; +AM_INIT_AUTOMAKE([1.11 dist-bzip2 foreign tar-ustar silent-rules -Wall
</span><br>
<span class="quotelev1">&gt; -Werror])
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  # Make configure depend on the VERSION file, since it's used in AC_INIT
</span><br>
<span class="quotelev1">&gt;  
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
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0262.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1242)"</a>
<li><strong>Previous message:</strong> <a href="0260.php">Jeff Squyres: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>In reply to:</strong> <a href="0254.php">Brice Goglin: "[hwloc-devel] automake silent-rules"</a>
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
