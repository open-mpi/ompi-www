<?
$subject_val = "[hwloc-devel] embedding next step";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 14 20:35:38 2009" -->
<!-- isoreceived="20091215013538" -->
<!-- sent="Mon, 14 Dec 2009 20:35:33 -0500" -->
<!-- isosent="20091215013533" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] embedding next step" -->
<!-- id="76BB9B5D-8734-48F8-8478-BF56698483A4_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] embedding next step<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-14 20:35:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0513.php">Brice Goglin: "Re: [hwloc-devel] embedding next step"</a>
<li><strong>Previous message:</strong> <a href="0511.php">Jeff Squyres: "Re: [hwloc-devel] v1.0 features"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0513.php">Brice Goglin: "Re: [hwloc-devel] embedding next step"</a>
<li><strong>Reply:</strong> <a href="0513.php">Brice Goglin: "Re: [hwloc-devel] embedding next step"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I finished most of the embedding code tonight -- could you guys check it out?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bitbucket.org/jsquyres/hwloc-embedded/">http://bitbucket.org/jsquyres/hwloc-embedded/</a>
<br>
<p>Instead of using PLPA-style macros to rename the symbols throughout the source code, I introduced &lt;hwloc/rename.h&gt; that, if renaming is enabled, will #define hwloc_foo to &lt;NEW_PREFIX&gt;_foo.
<br>
<p>I only did a handful of names so far just to prove that it was working:
<br>
<p>#define hwloc_cpuset_alloc HWLOC_SYM_PREFIX ## cpuset_alloc
<br>
#define hwloc_cpuset_free HWLOC_SYM_PREFIX ## cpuset_free
<br>
<p>#define hwloc_topology_init HWLOC_SYM_PREFIX ## topology_init
<br>
#define hwloc_topology_load HWLOC_SYM_PREFIX ## topology_load
<br>
#define hwloc_topology_get_depth HWLOC_SYM_PREFIX ## topology_get_depth
<br>
#define hwloc_topology_destroy HWLOC_SYM_PREFIX ## topology_destroy
<br>
<p>Other changes I made were generally to cleanse the namespace: ensure that every AC_SUBST, AC_DEFINE, AC_DEFUN, and AM_CONDITIONAL all had &quot;HWLOC_&quot; (or, in a small number of cases, &quot;hwloc_&quot;) as a prefix.  I also consolidated all of hwloc's m4 into config/hwloc.m4 (no other .m4 files -- so that this *1* file can be acincluded in other packages).  
<br>
<p>I made a test in tests/embedded/ that has its own configure.ac that includes the hwloc.m4, configures it, builds it with a new prefix (&quot;mytest_&quot; instead of &quot;hwloc_&quot;) and then links against it in a trivial dummy executable.  It all seems to work.
<br>
<p>Before I finish the grunt work of the #define's for all the other symbols and macros, can you guys review it and see if there's anything you hate in there?
<br>
<p>Thanks.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0513.php">Brice Goglin: "Re: [hwloc-devel] embedding next step"</a>
<li><strong>Previous message:</strong> <a href="0511.php">Jeff Squyres: "Re: [hwloc-devel] v1.0 features"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0513.php">Brice Goglin: "Re: [hwloc-devel] embedding next step"</a>
<li><strong>Reply:</strong> <a href="0513.php">Brice Goglin: "Re: [hwloc-devel] embedding next step"</a>
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
