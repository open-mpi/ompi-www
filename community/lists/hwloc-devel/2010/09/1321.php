<?
$subject_val = "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 20 12:01:26 2010" -->
<!-- isoreceived="20100920160126" -->
<!-- sent="Mon, 20 Sep 2010 18:01:20 +0200" -->
<!-- isosent="20100920160120" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch" -->
<!-- id="20100920160120.GA6040_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C933C8A.7090706_at_au1.ibm.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-20 12:01:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1322.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1320.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>In reply to:</strong> <a href="1305.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1325.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1325.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Closer look on the patch:
<br>
<p>Alexey Kardashevskiy, le Fri 17 Sep 2010 20:01:46 +1000, a &#233;crit :
<br>
<span class="quotelev1">&gt; Index: src/topology-linux.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- src/topology-linux.c	(revision 2443)
</span><br>
<span class="quotelev1">&gt; +++ src/topology-linux.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -1391,6 +1391,238 @@
</span><br>
<span class="quotelev1">&gt;    *found = nbnodes;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +static int
</span><br>
<span class="quotelev1">&gt; +hwloc_read_str(const char *p, const char *p1, char *buf, size_t nbuf, int root_fd)
</span><br>
<p>Same as read_uint32: callers will have the tendency to do things like
<br>
<p>char device_type[64];
<br>
<p>which will break sooner or later.  Rather allocate data according to
<br>
the file size (extending the allocation if the stat-provided size is
<br>
actually bogus) and free it in callers.  It's less simple to write
<br>
hwloc_read_str, but it makes life way easier for later.
<br>
<p><span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +  char fname[256];
</span><br>
<span class="quotelev1">&gt; +  int ret = -1;
</span><br>
<span class="quotelev1">&gt; +  sprintf(fname, &quot;%s/%s&quot;, p, p1);
</span><br>
<p>Again, never use arbitrary numbers :) And never use sprintf but
<br>
snprintf.
<br>
<p>&nbsp;&nbsp;char fname[strlen(p) + 1 + strlen(p1) + 1];
<br>
&nbsp;&nbsp;snprintf(fname, sizeof(fname), &quot;%s/%s&quot;, p, p1);
<br>
<p>really puts us on the safe side.
<br>
<p><span class="quotelev1">&gt; +  FILE *file = hwloc_fopen(fname, &quot;r&quot;, root_fd);
</span><br>
<span class="quotelev1">&gt; +  if (NULL == file)
</span><br>
<span class="quotelev1">&gt; +    return ret;
</span><br>
<span class="quotelev1">&gt; +  if (NULL != fgets(buf, nbuf, file))
</span><br>
<span class="quotelev1">&gt; +    ret = 0;
</span><br>
<span class="quotelev1">&gt; +  fclose(file);
</span><br>
<span class="quotelev1">&gt; +  buf[nbuf-1] = 0;
</span><br>
<p>Then you can pass nbuf-1 to fgets. Right, that's really nitpicking :)
<br>
<p><span class="quotelev1">&gt; +static size_t 
</span><br>
<span class="quotelev1">&gt; +hwloc_read_raw(const char *p, const char *p1, void *buf, size_t nbuf,
</span><br>
<span class="quotelev1">&gt; +    int root_fd)
</span><br>
<p>Same for this one, actually.
<br>
<p>All these could indeed go to src/misc.c.
<br>
<p><span class="quotelev1">&gt; +typedef struct {
</span><br>
<span class="quotelev1">&gt; +  unsigned int n, allocated;
</span><br>
<span class="quotelev1">&gt; +  struct {
</span><br>
<span class="quotelev1">&gt; +    hwloc_cpuset_t cpuset;
</span><br>
<span class="quotelev1">&gt; +    uint32_t ibm_phandle;
</span><br>
<span class="quotelev1">&gt; +    uint32_t l2_cache;
</span><br>
<span class="quotelev1">&gt; +    char name[64];
</span><br>
<p>Again, this could just be a pointer to a strdup of the dirent-&gt;d_name,
<br>
to avoid any surprise in the future.
<br>
<p><span class="quotelev1">&gt; +  } *p;
</span><br>
<span class="quotelev1">&gt; +} device_tree_cpus_t;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +static void
</span><br>
<span class="quotelev1">&gt; +add_device_tree_cpus_node(device_tree_cpus_t *cpus, hwloc_cpuset_t cpuset,
</span><br>
<span class="quotelev1">&gt; +    uint32_t l2_cache, uint32_t ibm_phandle, const char *name)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +  if (cpus-&gt;n == cpus-&gt;allocated) {
</span><br>
<span class="quotelev1">&gt; +    cpus-&gt;allocated += 64;
</span><br>
<span class="quotelev1">&gt; +    cpus-&gt;p = realloc(cpus-&gt;p, cpus-&gt;allocated * sizeof(cpus-&gt;p[0]));
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +  cpus-&gt;p[cpus-&gt;n].ibm_phandle = ibm_phandle;
</span><br>
<span class="quotelev1">&gt; +  cpus-&gt;p[cpus-&gt;n].cpuset = (NULL == cpuset)?NULL:hwloc_cpuset_dup(cpuset);
</span><br>
<span class="quotelev1">&gt; +  cpus-&gt;p[cpus-&gt;n].l2_cache = l2_cache;
</span><br>
<span class="quotelev1">&gt; +  strncpy(cpus-&gt;p[cpus-&gt;n].name, name, sizeof(cpus-&gt;p[0].name)-1);
</span><br>
<p>strdup being here of course.
<br>
<p><span class="quotelev1">&gt; +static int
</span><br>
<span class="quotelev1">&gt; +look_powerpc_device_tree_discover_cache(device_tree_cpus_t *cpus,
</span><br>
<span class="quotelev1">&gt; +    uint32_t ibm_phandle, unsigned int *level, hwloc_cpuset_t cpuset)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +  int ret = -1;
</span><br>
<span class="quotelev1">&gt; +  if ((NULL == level) || (NULL == cpuset))
</span><br>
<span class="quotelev1">&gt; +    return ret;
</span><br>
<span class="quotelev1">&gt; +  for (unsigned int i = 0; i &lt; cpus-&gt;n; ++i) {
</span><br>
<span class="quotelev1">&gt; +    if (ibm_phandle != cpus-&gt;p[i].l2_cache)
</span><br>
<p>Oh, it's odd that it's still called &quot;l2_cache&quot; for L3 caches above L2,
<br>
too :)
<br>
<p><span class="quotelev1">&gt; +      continue;
</span><br>
<span class="quotelev1">&gt; +    if (NULL != cpus-&gt;p[i].cpuset) {
</span><br>
<span class="quotelev1">&gt; +      hwloc_cpuset_or(cpuset, cpuset, cpus-&gt;p[i].cpuset);
</span><br>
<span class="quotelev1">&gt; +      ret = 0;
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +      ++(*level);
</span><br>
<span class="quotelev1">&gt; +      if (0 == look_powerpc_device_tree_discover_cache(cpus,
</span><br>
<span class="quotelev1">&gt; +            cpus-&gt;p[i].ibm_phandle, level, cpuset))
</span><br>
<span class="quotelev1">&gt; +        ret = 0;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +  return ret;
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<span class="quotelev1">&gt; +  
</span><br>
<span class="quotelev1">&gt; +static void
</span><br>
<span class="quotelev1">&gt; +look_powerpc_device_tree(struct hwloc_topology *topology)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +  device_tree_cpus_t cpus = { 0 };
</span><br>
<p>We assume that the compiler can understand
<br>
<p>&nbsp;&nbsp;device_tree_cpus_t cpus = { .n = 0 };
<br>
<p>which is much clearer, please use that :)
<br>
<p><span class="quotelev1">&gt; +  const char ofroot[] = &quot;/proc/device-tree/cpus&quot;;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  int root_fd = topology-&gt;backend_params.sysfs.root_fd;
</span><br>
<span class="quotelev1">&gt; +  DIR *dt = hwloc_opendir(ofroot, root_fd);
</span><br>
<span class="quotelev1">&gt; +  if (NULL == dt)
</span><br>
<span class="quotelev1">&gt; +    return;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  struct dirent *dirent;
</span><br>
<span class="quotelev1">&gt; +  while (NULL != (dirent = readdir(dt))) {
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    char cpu[256];
</span><br>
<span class="quotelev1">&gt; +    sprintf(cpu, &quot;%s/%s&quot;, ofroot, dirent-&gt;d_name);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    char device_type[64];
</span><br>
<span class="quotelev1">&gt; +    if (0 &gt; hwloc_read_str(cpu, &quot;device_type&quot;, device_type, sizeof(device_type), root_fd))
</span><br>
<span class="quotelev1">&gt; +      continue;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    uint32_t reg = -1, l2_cache = -1, ibm_phandle = -1;
</span><br>
<span class="quotelev1">&gt; +    hwloc_read_uint32(cpu, &quot;reg&quot;, &amp;reg, root_fd);
</span><br>
<span class="quotelev1">&gt; +    hwloc_read_uint32(cpu, &quot;l2-cache&quot;, &amp;l2_cache, root_fd);
</span><br>
<span class="quotelev1">&gt; +    hwloc_read_uint32(cpu, &quot;ibm,phandle&quot;, &amp;ibm_phandle, root_fd);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    if (0 == strcmp(device_type, &quot;cache&quot;)) {
</span><br>
<span class="quotelev1">&gt; +      add_device_tree_cpus_node(&amp;cpus, NULL, l2_cache, ibm_phandle, dirent-&gt;d_name); 
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +    else if (0 == strcmp(device_type, &quot;cpu&quot;)) {
</span><br>
<span class="quotelev1">&gt; +      /* Found CPU */
</span><br>
<span class="quotelev1">&gt; +      hwloc_cpuset_t cpuset = NULL;
</span><br>
<span class="quotelev1">&gt; +      uint32_t threads[128], nthreads = 0;
</span><br>
<span class="quotelev1">&gt; +      nthreads = hwloc_read_raw(cpu, &quot;ibm,ppc-interrupt-server#s&quot;,
</span><br>
<span class="quotelev1">&gt; +          threads, sizeof(threads), root_fd) / sizeof(threads[0]);
</span><br>
<span class="quotelev1">&gt; +      if (0 != nthreads) {
</span><br>
<span class="quotelev1">&gt; +        cpuset = hwloc_cpuset_alloc();
</span><br>
<span class="quotelev1">&gt; +        for (unsigned int i = 0; i &lt; nthreads; ++i) {
</span><br>
<span class="quotelev1">&gt; +          hwloc_cpuset_set(cpuset, threads[i]);
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +      } else if ((unsigned int)-1 != reg) {
</span><br>
<span class="quotelev1">&gt; +        cpuset = hwloc_cpuset_alloc();
</span><br>
<span class="quotelev1">&gt; +        hwloc_cpuset_set(cpuset, reg);
</span><br>
<span class="quotelev1">&gt; +      }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +      if (NULL == cpuset) {
</span><br>
<span class="quotelev1">&gt; +        hwloc_debug(&quot;%s has no \&quot;reg\&quot; property, skipping\n&quot;, cpu);
</span><br>
<span class="quotelev1">&gt; +        continue;
</span><br>
<span class="quotelev1">&gt; +      }
</span><br>
<span class="quotelev1">&gt; +      add_device_tree_cpus_node(&amp;cpus, cpuset, l2_cache, ibm_phandle, dirent-&gt;d_name); 
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +      /* Add core */
</span><br>
<span class="quotelev1">&gt; +      struct hwloc_obj *core = hwloc_alloc_setup_object(HWLOC_OBJ_CORE, reg);
</span><br>
<span class="quotelev1">&gt; +      core-&gt;cpuset = hwloc_cpuset_dup(cpuset);
</span><br>
<span class="quotelev1">&gt; +      hwloc_insert_object_by_cpuset(topology, core);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +      /* Add socket */
</span><br>
<span class="quotelev1">&gt; +      /* -1 - to discuss */
</span><br>
<span class="quotelev1">&gt; +      struct hwloc_obj *socket = hwloc_alloc_setup_object(HWLOC_OBJ_SOCKET, -1);
</span><br>
<span class="quotelev1">&gt; +      socket-&gt;cpuset = hwloc_cpuset_dup(cpuset);
</span><br>
<span class="quotelev1">&gt; +      hwloc_insert_object_by_cpuset(topology, socket);
</span><br>
<p>Mmm, are we really sure that this describes sockets?  How would a multicore
<br>
socket look like here?  We should not insert sockets if we are not sure
<br>
which cpuset they really have (the principle of hwloc is &quot;never lie, at
<br>
worse don't say anything&quot;).
<br>
<p><span class="quotelev1">&gt; +      /* Add L1 cache */
</span><br>
<span class="quotelev1">&gt; +      /* Ignore Instruction caches */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +      /* d-cache-block-size - ignore */
</span><br>
<span class="quotelev1">&gt; +      /* d-cache-line-size - to read, in bytes */
</span><br>
<span class="quotelev1">&gt; +      /* d-cache-sets - ignore */
</span><br>
<span class="quotelev1">&gt; +      /* d-cache-size - to read, in bytes */ 
</span><br>
<span class="quotelev1">&gt; +      /* d-tlb-sets - ignore */
</span><br>
<span class="quotelev1">&gt; +      /* d-tlb-size - ignore, always 0 on power6 */
</span><br>
<span class="quotelev1">&gt; +      /* i-cache-* and i-tlb-* represent instruction cache, ignore */
</span><br>
<span class="quotelev1">&gt; +      uint32_t d_cache_line_size = 0, d_cache_size = 0;
</span><br>
<span class="quotelev1">&gt; +      if ( (0 != hwloc_read_uint32(cpu, &quot;d-cache-line-size&quot;, &amp;d_cache_line_size, root_fd)) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +          (0 != hwloc_read_uint32(cpu, &quot;d-cache-size&quot;, &amp;d_cache_size, root_fd))  ) {
</span><br>
<span class="quotelev1">&gt; +        struct hwloc_obj *cache =
</span><br>
<span class="quotelev1">&gt; +            hwloc_alloc_setup_object(HWLOC_OBJ_CACHE, -1);
</span><br>
<span class="quotelev1">&gt; +        cache-&gt;attr-&gt;cache.size = d_cache_size;
</span><br>
<span class="quotelev1">&gt; +        cache-&gt;attr-&gt;cache.depth = 1;
</span><br>
<span class="quotelev1">&gt; +        cache-&gt;attr-&gt;cache.linesize = d_cache_line_size;
</span><br>
<p>I would rather create an L1 cache object as soon as any of the cache
<br>
properties is there, and then fill the properties with what is actually
<br>
available.
<br>
<p><span class="quotelev1">&gt; +        cache-&gt;cpuset = hwloc_cpuset_dup(cpuset);
</span><br>
<span class="quotelev1">&gt; +        hwloc_debug_cpuset(&quot;cache depth 1 has cpuset %s\n&quot;, cache-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt; +        hwloc_insert_object_by_cpuset(topology, cache);
</span><br>
<span class="quotelev1">&gt; +      }
</span><br>
<span class="quotelev1">&gt; +      hwloc_cpuset_free(cpuset);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +  closedir(dt);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  /* No cores and L2 cache were found, exiting */
</span><br>
<span class="quotelev1">&gt; +  if (0 == cpus.n) {
</span><br>
<span class="quotelev1">&gt; +    hwloc_debug(&quot;No cores and L2 cache were found in %s, exiting\n&quot;, ofroot);
</span><br>
<span class="quotelev1">&gt; +    return;
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#ifdef HWLOC_DEBUG
</span><br>
<span class="quotelev1">&gt; +  for (unsigned int i = 0; i &lt; cpus.n; ++i) {
</span><br>
<span class="quotelev1">&gt; +    hwloc_debug(&quot;%i: %s  ibm,phandle=%08X l2_cache=%08X &quot;,
</span><br>
<span class="quotelev1">&gt; +      i, cpus.p[i].name, cpus.p[i].ibm_phandle, cpus.p[i].l2_cache);
</span><br>
<span class="quotelev1">&gt; +    if (NULL == cpus.p[i].cpuset) {
</span><br>
<span class="quotelev1">&gt; +      hwloc_debug(&quot;%s\n&quot;, &quot;no cpuset&quot;);
</span><br>
<span class="quotelev1">&gt; +    } else {
</span><br>
<span class="quotelev1">&gt; +      hwloc_debug_cpuset(&quot;cpuset %s\n&quot;, cpus.p[i].cpuset);
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  /* Scan L2/L3/... caches */
</span><br>
<span class="quotelev1">&gt; +  for (unsigned int i = 0; i &lt; cpus.n; ++i) {
</span><br>
<span class="quotelev1">&gt; +    /* Skip real CPUs */
</span><br>
<span class="quotelev1">&gt; +    if (NULL != cpus.p[i].cpuset)
</span><br>
<span class="quotelev1">&gt; +      continue;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    /* Calculate cache level and CPU mask */
</span><br>
<span class="quotelev1">&gt; +    unsigned int level = 2;
</span><br>
<span class="quotelev1">&gt; +    hwloc_cpuset_t cpuset = hwloc_cpuset_alloc();
</span><br>
<span class="quotelev1">&gt; +    if (0 == look_powerpc_device_tree_discover_cache(&amp;cpus,
</span><br>
<span class="quotelev1">&gt; +          cpus.p[i].ibm_phandle, &amp;level, cpuset)) {
</span><br>
<span class="quotelev1">&gt; +      /* Check for &quot;cache-unified&quot; - if it is present, CPU has unified L1 cache */
</span><br>
<span class="quotelev1">&gt; +      /* d-cache-line-size - to read, in bytes */
</span><br>
<span class="quotelev1">&gt; +      /* d-cache-sets - ignore */
</span><br>
<span class="quotelev1">&gt; +      /* d-cache-size - to read, in bytes */ 
</span><br>
<span class="quotelev1">&gt; +      /* i-cache-* represent instruction cache, ignore */
</span><br>
<span class="quotelev1">&gt; +      uint32_t d_cache_line_size = 0, d_cache_size = 0;
</span><br>
<span class="quotelev1">&gt; +      char cpu[256];
</span><br>
<span class="quotelev1">&gt; +      sprintf(cpu, &quot;%s/%s&quot;, ofroot, cpus.p[i].name);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +      if ( (0 != hwloc_read_uint32(cpu, &quot;d-cache-line-size&quot;, &amp;d_cache_line_size, root_fd)) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +          (0 != hwloc_read_uint32(cpu, &quot;d-cache-size&quot;, &amp;d_cache_size, root_fd)) ) {
</span><br>
<p>Same here.
<br>
<p>Else the principle seems fine to me and the code as it is now should not
<br>
be too hard to make more generalized for other backends.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1322.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1320.php">Jeff Squyres: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>In reply to:</strong> <a href="1305.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1325.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1325.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
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
