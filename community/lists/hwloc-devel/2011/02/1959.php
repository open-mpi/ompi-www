<?
$subject_val = "Re: [hwloc-devel] The de-C99 of hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 01:24:03 2011" -->
<!-- isoreceived="20110218062403" -->
<!-- sent="Fri, 18 Feb 2011 07:24:03 +0100" -->
<!-- isosent="20110218062403" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] The de-C99 of hwloc" -->
<!-- id="4D5E1083.1060406_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110217235307.GW5461_at_const.famille.thibault.fr" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 01:24:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1960.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1958.php">Brice Goglin: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>In reply to:</strong> <a href="1956.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1963.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 18/02/2011 00:53, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev2">&gt;&gt; +  /* Setup ordering arrays */
</span><br>
<span class="quotelev2">&gt;&gt; +  if (!orders_initialized) {
</span><br>
<span class="quotelev2">&gt;&gt; +      obj_type_order[HWLOC_OBJ_SYSTEM] = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +      obj_type_order[HWLOC_OBJ_MACHINE] = 1;
</span><br>
<span class="quotelev2">&gt;&gt; +      obj_type_order[HWLOC_OBJ_GROUP] = 2;
</span><br>
<span class="quotelev2">&gt;&gt; +      obj_type_order[HWLOC_OBJ_NODE] = 3;
</span><br>
<span class="quotelev2">&gt;&gt; +      obj_type_order[HWLOC_OBJ_SOCKET] = 4;
</span><br>
<span class="quotelev2">&gt;&gt; +      obj_type_order[HWLOC_OBJ_CACHE] = 5;
</span><br>
<span class="quotelev2">&gt;&gt; +      obj_type_order[HWLOC_OBJ_CORE] = 6;
</span><br>
<span class="quotelev2">&gt;&gt; +      obj_type_order[HWLOC_OBJ_PU] = 7;
</span><br>
<span class="quotelev2">&gt;&gt; +      obj_type_order[HWLOC_OBJ_MISC] = 8;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +      orders_initialized = 1;
</span><br>
<span class="quotelev2">&gt;&gt; +  }
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; This is not actually thread safe. This needs a CPU write memory barrier
</span><br>
<span class="quotelev1">&gt; between the last obj_type_order[] array write and the orders_initialized
</span><br>
<span class="quotelev1">&gt; write, and a read barrier after orders_initialized is read as being
</span><br>
<span class="quotelev1">&gt; 1, to make sure that a cpu seeing orders_initialized as 1 will always
</span><br>
<span class="quotelev1">&gt; also see the values in obj_type_order.  A simpler way is to use
</span><br>
<span class="quotelev1">&gt; pthread_once().
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Is there no portable way to define a library _init function? The above
<br>
should not be in the topology init routine.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1960.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1958.php">Brice Goglin: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>In reply to:</strong> <a href="1956.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1963.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
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
