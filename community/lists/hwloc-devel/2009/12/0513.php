<?
$subject_val = "Re: [hwloc-devel] embedding next step";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 01:41:48 2009" -->
<!-- isoreceived="20091215064148" -->
<!-- sent="Tue, 15 Dec 2009 07:41:42 +0100" -->
<!-- isosent="20091215064142" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] embedding next step" -->
<!-- id="4B272FA6.4090706_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="76BB9B5D-8734-48F8-8478-BF56698483A4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] embedding next step<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-15 01:41:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0514.php">Jeff Squyres: "Re: [hwloc-devel] embedding next step"</a>
<li><strong>Previous message:</strong> <a href="0512.php">Jeff Squyres: "[hwloc-devel] embedding next step"</a>
<li><strong>In reply to:</strong> <a href="0512.php">Jeff Squyres: "[hwloc-devel] embedding next step"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0514.php">Jeff Squyres: "Re: [hwloc-devel] embedding next step"</a>
<li><strong>Reply:</strong> <a href="0514.php">Jeff Squyres: "Re: [hwloc-devel] embedding next step"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Instead of using PLPA-style macros to rename the symbols throughout the source code, I introduced &lt;hwloc/rename.h&gt; that, if renaming is enabled, will #define hwloc_foo to &lt;NEW_PREFIX&gt;_foo.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I only did a handful of names so far just to prove that it was working:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define hwloc_cpuset_alloc HWLOC_SYM_PREFIX ## cpuset_alloc
</span><br>
<span class="quotelev1">&gt; #define hwloc_cpuset_free HWLOC_SYM_PREFIX ## cpuset_free
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define hwloc_topology_init HWLOC_SYM_PREFIX ## topology_init
</span><br>
<span class="quotelev1">&gt; #define hwloc_topology_load HWLOC_SYM_PREFIX ## topology_load
</span><br>
<span class="quotelev1">&gt; #define hwloc_topology_get_depth HWLOC_SYM_PREFIX ## topology_get_depth
</span><br>
<span class="quotelev1">&gt; #define hwloc_topology_destroy HWLOC_SYM_PREFIX ## topology_destroy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other changes I made were generally to cleanse the namespace: ensure that every AC_SUBST, AC_DEFINE, AC_DEFUN, and AM_CONDITIONAL all had &quot;HWLOC_&quot; (or, in a small number of cases, &quot;hwloc_&quot;) as a prefix.  I also consolidated all of hwloc's m4 into config/hwloc.m4 (no other .m4 files -- so that this *1* file can be acincluded in other packages).  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I made a test in tests/embedded/ that has its own configure.ac that includes the hwloc.m4, configures it, builds it with a new prefix (&quot;mytest_&quot; instead of &quot;hwloc_&quot;) and then links against it in a trivial dummy executable.  It all seems to work.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>You probably want to use your renaming stuff in tests/embedded/ , right ?
<br>
<p><span class="quotelev1">&gt; Before I finish the grunt work of the #define's for all the other symbols and macros, can you guys review it and see if there's anything you hate in there?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I am not fully comfortable with having our own copy of PKG_CHECK_MODULES
<br>
or any other standard macro, but I am going to assume they are stable
<br>
enough and they won't change a lot anymore in the future.
<br>
<p>Apart from that, I am ok.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0514.php">Jeff Squyres: "Re: [hwloc-devel] embedding next step"</a>
<li><strong>Previous message:</strong> <a href="0512.php">Jeff Squyres: "[hwloc-devel] embedding next step"</a>
<li><strong>In reply to:</strong> <a href="0512.php">Jeff Squyres: "[hwloc-devel] embedding next step"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0514.php">Jeff Squyres: "Re: [hwloc-devel] embedding next step"</a>
<li><strong>Reply:</strong> <a href="0514.php">Jeff Squyres: "Re: [hwloc-devel] embedding next step"</a>
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
