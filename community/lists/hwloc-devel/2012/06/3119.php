<?
$subject_val = "Re: [hwloc-devel] -lpicl on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 12 10:28:52 2012" -->
<!-- isoreceived="20120612142852" -->
<!-- sent="Tue, 12 Jun 2012 16:28:23 +0200" -->
<!-- isosent="20120612142823" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lpicl on Solaris" -->
<!-- id="4FD75207.4070908_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7D5518B6-8501-4463-8F35-777CBC3DEC39_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-12 10:28:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3120.php">Jeff Squyres: "Re: [hwloc-devel] -lpicl on Solaris"</a>
<li><strong>Previous message:</strong> <a href="3118.php">Jeff Squyres: "[hwloc-devel] -lpicl on Solaris"</a>
<li><strong>In reply to:</strong> <a href="3118.php">Jeff Squyres: "[hwloc-devel] -lpicl on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3120.php">Jeff Squyres: "Re: [hwloc-devel] -lpicl on Solaris"</a>
<li><strong>Reply:</strong> <a href="3120.php">Jeff Squyres: "Re: [hwloc-devel] -lpicl on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The current -lpicl in src/Makefile.am comes from Terry's initial Solaris
<br>
CPUModel detection patch. If Terry is ok, I am fine with your change as
<br>
well.
<br>
<p>Brice
<br>
<p><p><p>Le 12/06/2012 16:19, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; I recently upgraded OMPI's SVN trunk to hwloc 1.4.2, and immediately broke builds on Solaris.  After some hunting around, here's what our friends at Oracle have found:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Building hwloc 1.4.2 standalone on Solaris works fine.
</span><br>
<span class="quotelev1">&gt; - Building OMPI SVN trunk (with hwloc 1.4.2 embedded) on Solaris fails due to a missing -lpicl.
</span><br>
<span class="quotelev1">&gt; - The issue seems to be in hwloc's src/Makefile.am:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if HWLOC_HAVE_SOLARIS
</span><br>
<span class="quotelev1">&gt;    ldflags += -lpicl
</span><br>
<span class="quotelev1">&gt;    endif HWLOC_HAVE_SOLARIS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, -lpicl gets added to standalone builds but not embedded builds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shouldn't the check for -lpicl be in hwloc.m4 so that it gets added to HWLOC_EMBEDDED_LIBS?  See the attached patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or is there a deeper reason we didn't use AC_CHECK_LIB and used HWLOC_HAVE_SOLARIS instead?  (e.g., is -lpicl Bad on other platforms?)
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3119/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3120.php">Jeff Squyres: "Re: [hwloc-devel] -lpicl on Solaris"</a>
<li><strong>Previous message:</strong> <a href="3118.php">Jeff Squyres: "[hwloc-devel] -lpicl on Solaris"</a>
<li><strong>In reply to:</strong> <a href="3118.php">Jeff Squyres: "[hwloc-devel] -lpicl on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3120.php">Jeff Squyres: "Re: [hwloc-devel] -lpicl on Solaris"</a>
<li><strong>Reply:</strong> <a href="3120.php">Jeff Squyres: "Re: [hwloc-devel] -lpicl on Solaris"</a>
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
