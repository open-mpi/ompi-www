<?
$subject_val = "Re: [hwloc-devel] The de-C99 of hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 04:10:23 2011" -->
<!-- isoreceived="20110218091023" -->
<!-- sent="Fri, 18 Feb 2011 10:10:16 +0100" -->
<!-- isosent="20110218091016" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] The de-C99 of hwloc" -->
<!-- id="20110218091016.GA6068_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="343350278.119913.1298010260526.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 04:10:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1962.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1960.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Maybe in reply to:</strong> <a href="1948.php">Jeff Squyres: "[hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1964.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1964.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Fri 18 Feb 2011 07:24:20 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 18/02/2011 00:53, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +  /* Setup ordering arrays */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +  if (!orders_initialized) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +      obj_type_order[HWLOC_OBJ_SYSTEM] = 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +      obj_type_order[HWLOC_OBJ_MACHINE] = 1;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +      obj_type_order[HWLOC_OBJ_GROUP] = 2;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +      obj_type_order[HWLOC_OBJ_NODE] = 3;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +      obj_type_order[HWLOC_OBJ_SOCKET] = 4;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +      obj_type_order[HWLOC_OBJ_CACHE] = 5;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +      obj_type_order[HWLOC_OBJ_CORE] = 6;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +      obj_type_order[HWLOC_OBJ_PU] = 7;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +      obj_type_order[HWLOC_OBJ_MISC] = 8;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +      orders_initialized = 1;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +  }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt; This is not actually thread safe. This needs a CPU write memory barrier
</span><br>
<span class="quotelev2">&gt; &gt; between the last obj_type_order[] array write and the orders_initialized
</span><br>
<span class="quotelev2">&gt; &gt; write, and a read barrier after orders_initialized is read as being
</span><br>
<span class="quotelev2">&gt; &gt; 1, to make sure that a cpu seeing orders_initialized as 1 will always
</span><br>
<span class="quotelev2">&gt; &gt; also see the values in obj_type_order.  A simpler way is to use
</span><br>
<span class="quotelev2">&gt; &gt; pthread_once().
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there no portable way to define a library _init function?
</span><br>
<p>Not even in C99.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1962.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1960.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Maybe in reply to:</strong> <a href="1948.php">Jeff Squyres: "[hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1964.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1964.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
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
