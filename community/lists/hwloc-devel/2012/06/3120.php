<?
$subject_val = "Re: [hwloc-devel] -lpicl on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 12 10:30:22 2012" -->
<!-- isoreceived="20120612143022" -->
<!-- sent="Tue, 12 Jun 2012 10:30:17 -0400" -->
<!-- isosent="20120612143017" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lpicl on Solaris" -->
<!-- id="2FBA36FA-C7E6-4662-B2EB-DA9EAE3382D3_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FD75207.4070908_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] -lpicl on Solaris<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-12 10:30:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3121.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4541)"</a>
<li><strong>Previous message:</strong> <a href="3119.php">Brice Goglin: "Re: [hwloc-devel] -lpicl on Solaris"</a>
<li><strong>In reply to:</strong> <a href="3119.php">Brice Goglin: "Re: [hwloc-devel] -lpicl on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cool, we'll do that, then.  I'll commit it to OMPI and to hwloc.
<br>
<p>...and still remember that Terry is the root of all evil.  Got it.
<br>
<p>;-)
<br>
<p><p><p>On Jun 12, 2012, at 10:28 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; The current -lpicl in src/Makefile.am comes from Terry's initial Solaris CPUModel detection patch. If Terry is ok, I am fine with your change as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 12/06/2012 16:19, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I recently upgraded OMPI's SVN trunk to hwloc 1.4.2, and immediately broke builds on Solaris.  After some hunting around, here's what our friends at Oracle have found:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Building hwloc 1.4.2 standalone on Solaris works fine.
</span><br>
<span class="quotelev2">&gt;&gt; - Building OMPI SVN trunk (with hwloc 1.4.2 embedded) on Solaris fails due to a missing -lpicl.
</span><br>
<span class="quotelev2">&gt;&gt; - The issue seems to be in hwloc's src/Makefile.am:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if HWLOC_HAVE_SOLARIS
</span><br>
<span class="quotelev2">&gt;&gt;    ldflags += -lpicl
</span><br>
<span class="quotelev2">&gt;&gt;    endif HWLOC_HAVE_SOLARIS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Specifically, -lpicl gets added to standalone builds but not embedded builds.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Shouldn't the check for -lpicl be in hwloc.m4 so that it gets added to HWLOC_EMBEDDED_LIBS?  See the attached patch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Or is there a deeper reason we didn't use AC_CHECK_LIB and used HWLOC_HAVE_SOLARIS instead?  (e.g., is -lpicl Bad on other platforms?)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3121.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4541)"</a>
<li><strong>Previous message:</strong> <a href="3119.php">Brice Goglin: "Re: [hwloc-devel] -lpicl on Solaris"</a>
<li><strong>In reply to:</strong> <a href="3119.php">Brice Goglin: "Re: [hwloc-devel] -lpicl on Solaris"</a>
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
