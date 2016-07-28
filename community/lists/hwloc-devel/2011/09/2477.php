<?
$subject_val = "Re: [hwloc-devel] Some practical hwloc API feedback";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 25 17:34:46 2011" -->
<!-- isoreceived="20110925213446" -->
<!-- sent="Sun, 25 Sep 2011 23:34:39 +0200" -->
<!-- isosent="20110925213439" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Some practical hwloc API feedback" -->
<!-- id="20110925213439.GJ30247_at_type" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="556291552.283894.1316723133542.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Some practical hwloc API feedback<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-25 17:34:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2478.php">Samuel Thibault: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Previous message:</strong> <a href="2476.php">Igor Gali&#196;&#135;: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Maybe in reply to:</strong> <a href="2433.php">Jeff Squyres: "[hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2478.php">Samuel Thibault: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Sorry for coming late in the thread, I've been busy at conference,
<br>
traveling, teaching, moving between flats :)
<br>
<p>Brice Goglin, le Thu 22 Sep 2011 22:25:33 +0200, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt; (2d) more specifically: since all caches are of type HWLOC_OBJ_CACHE, we find ourselves putting in special case logic for caches all over our code.  Ick.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note: I'm not sure how to add new HWLOC_OBJ_CACHE_Lx types and preserve backwards compatibility.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Long standing problem, yes. Not only about caches unfortunately. Also
</span><br>
<span class="quotelev1">&gt; about groups, and maybe other one day.
</span><br>
<p>Introducing CACHE_Lx is a way to not be generic: when an L4 gets
<br>
introducted, applications will not automatically know that it's simply a
<br>
newer cache level and simply use the cache size etc. automatically, so
<br>
I've rather keep with CACHE objects and a depth parameter.
<br>
<p>That being said, maybe hwloc_get_obj_by_type should have a
<br>
hwloc_get_obj_by_type_and_depth sibling, so we can call
<br>
<p>hwloc_get_obj_by_type_and_depth(topology, HWLOC_OBJ_CACHE, 3, 0);
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2478.php">Samuel Thibault: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Previous message:</strong> <a href="2476.php">Igor Gali&#196;&#135;: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Maybe in reply to:</strong> <a href="2433.php">Jeff Squyres: "[hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2478.php">Samuel Thibault: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
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
