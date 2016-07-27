<?
$subject_val = "[hwloc-devel] -lpicl on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 12 10:19:10 2012" -->
<!-- isoreceived="20120612141910" -->
<!-- sent="Tue, 12 Jun 2012 10:19:04 -0400" -->
<!-- isosent="20120612141904" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] -lpicl on Solaris" -->
<!-- id="7D5518B6-8501-4463-8F35-777CBC3DEC39_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] -lpicl on Solaris<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-12 10:19:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3119.php">Brice Goglin: "Re: [hwloc-devel] -lpicl on Solaris"</a>
<li><strong>Previous message:</strong> <a href="3117.php">Jeff Squyres: "Re: [hwloc-devel] Open MPI services migration: part 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3119.php">Brice Goglin: "Re: [hwloc-devel] -lpicl on Solaris"</a>
<li><strong>Reply:</strong> <a href="3119.php">Brice Goglin: "Re: [hwloc-devel] -lpicl on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recently upgraded OMPI's SVN trunk to hwloc 1.4.2, and immediately broke builds on Solaris.  After some hunting around, here's what our friends at Oracle have found:
<br>
<p>- Building hwloc 1.4.2 standalone on Solaris works fine.
<br>
- Building OMPI SVN trunk (with hwloc 1.4.2 embedded) on Solaris fails due to a missing -lpicl.
<br>
- The issue seems to be in hwloc's src/Makefile.am:
<br>
<p>&nbsp;&nbsp;&nbsp;if HWLOC_HAVE_SOLARIS
<br>
&nbsp;&nbsp;&nbsp;ldflags += -lpicl
<br>
&nbsp;&nbsp;&nbsp;endif HWLOC_HAVE_SOLARIS
<br>
<p>Specifically, -lpicl gets added to standalone builds but not embedded builds.
<br>
<p>Shouldn't the check for -lpicl be in hwloc.m4 so that it gets added to HWLOC_EMBEDDED_LIBS?  See the attached patch.
<br>
<p>Or is there a deeper reason we didn't use AC_CHECK_LIB and used HWLOC_HAVE_SOLARIS instead?  (e.g., is -lpicl Bad on other platforms?)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3118/hwloc.patch">hwloc.patch</a>
</ul>
<!-- attachment="hwloc.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3119.php">Brice Goglin: "Re: [hwloc-devel] -lpicl on Solaris"</a>
<li><strong>Previous message:</strong> <a href="3117.php">Jeff Squyres: "Re: [hwloc-devel] Open MPI services migration: part 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3119.php">Brice Goglin: "Re: [hwloc-devel] -lpicl on Solaris"</a>
<li><strong>Reply:</strong> <a href="3119.php">Brice Goglin: "Re: [hwloc-devel] -lpicl on Solaris"</a>
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
