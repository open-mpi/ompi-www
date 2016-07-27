<?
$subject_val = "Re: [hwloc-devel] automake silent-rules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 07:56:55 2009" -->
<!-- isoreceived="20091023115655" -->
<!-- sent="Fri, 23 Oct 2009 07:56:47 -0400" -->
<!-- isosent="20091023115647" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] automake silent-rules" -->
<!-- id="5832E0FA-B92B-42D5-BB95-3BB8A55201D2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-23 07:56:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0256.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Previous message:</strong> <a href="0254.php">Brice Goglin: "[hwloc-devel] automake silent-rules"</a>
<li><strong>In reply to:</strong> <a href="0254.php">Brice Goglin: "[hwloc-devel] automake silent-rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0261.php">Pavan Balaji: "Re: [hwloc-devel] automake silent-rules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ohh... that's nifty.  I didn't even know about silent-rules!
<br>
<p>No objections here.
<br>
<p><p>On Oct 23, 2009, at 7:50 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I'd like to require automake 1.11 for hwloc 1.0 so that we get the new
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
<span class="quotelev1">&gt; +AM_INIT_AUTOMAKE([1.11 dist-bzip2 foreign tar-ustar silent-rules - 
</span><br>
<span class="quotelev1">&gt; Wall
</span><br>
<span class="quotelev1">&gt; -Werror])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # Make configure depend on the VERSION file, since it's used in  
</span><br>
<span class="quotelev1">&gt; AC_INIT
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0256.php">Samuel Thibault: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Previous message:</strong> <a href="0254.php">Brice Goglin: "[hwloc-devel] automake silent-rules"</a>
<li><strong>In reply to:</strong> <a href="0254.php">Brice Goglin: "[hwloc-devel] automake silent-rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0261.php">Pavan Balaji: "Re: [hwloc-devel] automake silent-rules"</a>
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
