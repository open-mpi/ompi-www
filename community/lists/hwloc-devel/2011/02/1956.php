<?
$subject_val = "Re: [hwloc-devel] The de-C99 of hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 17 18:53:19 2011" -->
<!-- isoreceived="20110217235319" -->
<!-- sent="Fri, 18 Feb 2011 00:53:07 +0100" -->
<!-- isosent="20110217235307" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] The de-C99 of hwloc" -->
<!-- id="20110217235307.GW5461_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="643684008.119092.1297980926680.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-02-17 18:53:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1957.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3177)"</a>
<li><strong>Previous message:</strong> <a href="1955.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Maybe in reply to:</strong> <a href="1948.php">Jeff Squyres: "[hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1959.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1959.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1963.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Thu 17 Feb 2011 23:15:26 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; -    uint64_t cacheconfig[n];
</span><br>
<span class="quotelev1">&gt; -    uint32_t cacheconfig32[n];
</span><br>
<span class="quotelev1">&gt; -    uint64_t cachesize[n];
</span><br>
<span class="quotelev1">&gt; +    uint64_t *cacheconfig = NULL;
</span><br>
<span class="quotelev1">&gt; +    uint64_t *cachesize = NULL;
</span><br>
<span class="quotelev1">&gt; +    uint32_t *cacheconfig32 = NULL;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +    cacheconfig = malloc(sizeof(uint64_t) * n * 2);
</span><br>
<span class="quotelev1">&gt; +    if (NULL == cacheconfig) {
</span><br>
<span class="quotelev1">&gt; +        goto out;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    cachesize = cacheconfig + n;
</span><br>
<p>I'm not really fond of allocating for two pointers like this.
<br>
<p><span class="quotelev1">&gt;  hwloc_linux_get_pid_cpubind(hwloc_topology_t topology, pid_t pid, hwloc_bitmap_t hwloc_set, int flags)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    hwloc_bitmap_t tidset = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt; -  hwloc_bitmap_t cpusets[2] = { hwloc_set, tidset };
</span><br>
<p>Ow, even that is not allowed before C99?!
<br>
<p><span class="quotelev1">&gt; +  /* Setup ordering arrays */
</span><br>
<span class="quotelev1">&gt; +  if (!orders_initialized) {
</span><br>
<span class="quotelev1">&gt; +      obj_type_order[HWLOC_OBJ_SYSTEM] = 0;
</span><br>
<span class="quotelev1">&gt; +      obj_type_order[HWLOC_OBJ_MACHINE] = 1;
</span><br>
<span class="quotelev1">&gt; +      obj_type_order[HWLOC_OBJ_GROUP] = 2;
</span><br>
<span class="quotelev1">&gt; +      obj_type_order[HWLOC_OBJ_NODE] = 3;
</span><br>
<span class="quotelev1">&gt; +      obj_type_order[HWLOC_OBJ_SOCKET] = 4;
</span><br>
<span class="quotelev1">&gt; +      obj_type_order[HWLOC_OBJ_CACHE] = 5;
</span><br>
<span class="quotelev1">&gt; +      obj_type_order[HWLOC_OBJ_CORE] = 6;
</span><br>
<span class="quotelev1">&gt; +      obj_type_order[HWLOC_OBJ_PU] = 7;
</span><br>
<span class="quotelev1">&gt; +      obj_type_order[HWLOC_OBJ_MISC] = 8;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +      orders_initialized = 1;
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<p>This is not actually thread safe. This needs a CPU write memory barrier
<br>
between the last obj_type_order[] array write and the orders_initialized
<br>
write, and a read barrier after orders_initialized is read as being
<br>
1, to make sure that a cpu seeing orders_initialized as 1 will always
<br>
also see the values in obj_type_order.  A simpler way is to use
<br>
pthread_once().
<br>
<p>I'll have to have a closer look on the changes, just reading the diff is
<br>
not really safe enough without more context around&#160;:)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1957.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3177)"</a>
<li><strong>Previous message:</strong> <a href="1955.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Maybe in reply to:</strong> <a href="1948.php">Jeff Squyres: "[hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1959.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1959.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Reply:</strong> <a href="1963.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
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
