<?
$subject_val = "Re: [hwloc-devel] The de-C99 of hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 10:55:30 2011" -->
<!-- isoreceived="20110218155530" -->
<!-- sent="Fri, 18 Feb 2011 10:55:25 -0500" -->
<!-- isosent="20110218155525" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] The de-C99 of hwloc" -->
<!-- id="3B67442B-A186-4E6E-8C0F-81B38CEDC161_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110218091016.GA6068_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] The de-C99 of hwloc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 10:55:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1965.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1963.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>In reply to:</strong> <a href="1961.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1965.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1965.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 18, 2011, at 4:10 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; +  /* Setup ordering arrays */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +  if (!orders_initialized) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      obj_type_order[HWLOC_OBJ_SYSTEM] = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      obj_type_order[HWLOC_OBJ_MACHINE] = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      obj_type_order[HWLOC_OBJ_GROUP] = 2;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      obj_type_order[HWLOC_OBJ_NODE] = 3;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      obj_type_order[HWLOC_OBJ_SOCKET] = 4;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      obj_type_order[HWLOC_OBJ_CACHE] = 5;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      obj_type_order[HWLOC_OBJ_CORE] = 6;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      obj_type_order[HWLOC_OBJ_PU] = 7;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      obj_type_order[HWLOC_OBJ_MISC] = 8;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      orders_initialized = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is not actually thread safe. This needs a CPU write memory barrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between the last obj_type_order[] array write and the orders_initialized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; write, and a read barrier after orders_initialized is read as being
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1, to make sure that a cpu seeing orders_initialized as 1 will always
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also see the values in obj_type_order.  A simpler way is to use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pthread_once().
</span><br>
<p>Let's do pthread_once() -- we don't have any of the infrastructure mojo for memory barriers.
<br>
<p>What will we need on Windows?  Are there other OS's without pthread_once()?
<br>
<p><span class="quotelev2">&gt;&gt; Is there no portable way to define a library _init function?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not even in C99.
</span><br>
<p>Where should this functionality be, if we can't put it in an _init function, and it doesn't belong in the topology init function?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1965.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1963.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>In reply to:</strong> <a href="1961.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1965.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1965.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
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
