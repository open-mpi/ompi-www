<?
$subject_val = "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 04:53:56 2010" -->
<!-- isoreceived="20100921085356" -->
<!-- sent="Tue, 21 Sep 2010 18:53:58 +1000" -->
<!-- isosent="20100921085358" -->
<!-- name="Alexey Kardashevskiy" -->
<!-- email="aik_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch" -->
<!-- id="4C9872A6.1020707_at_au1.ibm.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100920160120.GA6040_at_const.bordeaux.inria.fr" -->
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
<strong>From:</strong> Alexey Kardashevskiy (<em>aik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-21 04:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1326.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1324.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2486)"</a>
<li><strong>In reply to:</strong> <a href="1321.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1323.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 21/09/10 02:01, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +static int
</span><br>
<span class="quotelev2">&gt;&gt; +look_powerpc_device_tree_discover_cache(device_tree_cpus_t *cpus,
</span><br>
<span class="quotelev2">&gt;&gt; +    uint32_t ibm_phandle, unsigned int *level, hwloc_cpuset_t cpuset)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +  int ret = -1;
</span><br>
<span class="quotelev2">&gt;&gt; +  if ((NULL == level) || (NULL == cpuset))
</span><br>
<span class="quotelev2">&gt;&gt; +    return ret;
</span><br>
<span class="quotelev2">&gt;&gt; +  for (unsigned int i = 0; i&lt;  cpus-&gt;n; ++i) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if (ibm_phandle != cpus-&gt;p[i].l2_cache)
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; Oh, it's odd that it's still called &quot;l2_cache&quot; for L3 caches above L2,
</span><br>
<span class="quotelev1">&gt; too :)
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>&quot;2&quot; here has the meaning &quot;one level higher&quot; :-)
<br>
<p><span class="quotelev2">&gt;&gt; +      continue;
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL != cpus-&gt;p[i].cpuset) {
</span><br>
<span class="quotelev2">&gt;&gt; +      hwloc_cpuset_or(cpuset, cpuset, cpus-&gt;p[i].cpuset);
</span><br>
<span class="quotelev2">&gt;&gt; +      ret = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +    } else {
</span><br>
<span class="quotelev2">&gt;&gt; +      ++(*level);
</span><br>
<span class="quotelev2">&gt;&gt; +      if (0 == look_powerpc_device_tree_discover_cache(cpus,
</span><br>
<span class="quotelev2">&gt;&gt; +            cpus-&gt;p[i].ibm_phandle, level, cpuset))
</span><br>
<span class="quotelev2">&gt;&gt; +        ret = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +  }
</span><br>
<span class="quotelev2">&gt;&gt; +  return ret;
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +static void
</span><br>
<span class="quotelev2">&gt;&gt; +look_powerpc_device_tree(struct hwloc_topology *topology)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +  device_tree_cpus_t cpus = { 0 };
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; We assume that the compiler can understand
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    device_tree_cpus_t cpus = { .n = 0 };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which is much clearer, please use that :)
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>If the compiler can understand { 0 }, I would keep it as having whole 
<br>
structure filled with zeroes is safer :-)
<br>
<p><span class="quotelev2">&gt;&gt; +  const char ofroot[] = &quot;/proc/device-tree/cpus&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +  int root_fd = topology-&gt;backend_params.sysfs.root_fd;
</span><br>
<span class="quotelev2">&gt;&gt; +  DIR *dt = hwloc_opendir(ofroot, root_fd);
</span><br>
<span class="quotelev2">&gt;&gt; +  if (NULL == dt)
</span><br>
<span class="quotelev2">&gt;&gt; +    return;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +  struct dirent *dirent;
</span><br>
<span class="quotelev2">&gt;&gt; +  while (NULL != (dirent = readdir(dt))) {
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    char cpu[256];
</span><br>
<span class="quotelev2">&gt;&gt; +    sprintf(cpu, &quot;%s/%s&quot;, ofroot, dirent-&gt;d_name);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    char device_type[64];
</span><br>
<span class="quotelev2">&gt;&gt; +    if (0&gt;  hwloc_read_str(cpu, &quot;device_type&quot;, device_type, sizeof(device_type), root_fd))
</span><br>
<span class="quotelev2">&gt;&gt; +      continue;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    uint32_t reg = -1, l2_cache = -1, ibm_phandle = -1;
</span><br>
<span class="quotelev2">&gt;&gt; +    hwloc_read_uint32(cpu, &quot;reg&quot;,&amp;reg, root_fd);
</span><br>
<span class="quotelev2">&gt;&gt; +    hwloc_read_uint32(cpu, &quot;l2-cache&quot;,&amp;l2_cache, root_fd);
</span><br>
<span class="quotelev2">&gt;&gt; +    hwloc_read_uint32(cpu, &quot;ibm,phandle&quot;,&amp;ibm_phandle, root_fd);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    if (0 == strcmp(device_type, &quot;cache&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt; +      add_device_tree_cpus_node(&amp;cpus, NULL, l2_cache, ibm_phandle, dirent-&gt;d_name);
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    else if (0 == strcmp(device_type, &quot;cpu&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt; +      /* Found CPU */
</span><br>
<span class="quotelev2">&gt;&gt; +      hwloc_cpuset_t cpuset = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +      uint32_t threads[128], nthreads = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +      nthreads = hwloc_read_raw(cpu, &quot;ibm,ppc-interrupt-server#s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +          threads, sizeof(threads), root_fd) / sizeof(threads[0]);
</span><br>
<span class="quotelev2">&gt;&gt; +      if (0 != nthreads) {
</span><br>
<span class="quotelev2">&gt;&gt; +        cpuset = hwloc_cpuset_alloc();
</span><br>
<span class="quotelev2">&gt;&gt; +        for (unsigned int i = 0; i&lt;  nthreads; ++i) {
</span><br>
<span class="quotelev2">&gt;&gt; +          hwloc_cpuset_set(cpuset, threads[i]);
</span><br>
<span class="quotelev2">&gt;&gt; +        }
</span><br>
<span class="quotelev2">&gt;&gt; +      } else if ((unsigned int)-1 != reg) {
</span><br>
<span class="quotelev2">&gt;&gt; +        cpuset = hwloc_cpuset_alloc();
</span><br>
<span class="quotelev2">&gt;&gt; +        hwloc_cpuset_set(cpuset, reg);
</span><br>
<span class="quotelev2">&gt;&gt; +      }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +      if (NULL == cpuset) {
</span><br>
<span class="quotelev2">&gt;&gt; +        hwloc_debug(&quot;%s has no \&quot;reg\&quot; property, skipping\n&quot;, cpu);
</span><br>
<span class="quotelev2">&gt;&gt; +        continue;
</span><br>
<span class="quotelev2">&gt;&gt; +      }
</span><br>
<span class="quotelev2">&gt;&gt; +      add_device_tree_cpus_node(&amp;cpus, cpuset, l2_cache, ibm_phandle, dirent-&gt;d_name);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +      /* Add core */
</span><br>
<span class="quotelev2">&gt;&gt; +      struct hwloc_obj *core = hwloc_alloc_setup_object(HWLOC_OBJ_CORE, reg);
</span><br>
<span class="quotelev2">&gt;&gt; +      core-&gt;cpuset = hwloc_cpuset_dup(cpuset);
</span><br>
<span class="quotelev2">&gt;&gt; +      hwloc_insert_object_by_cpuset(topology, core);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +      /* Add socket */
</span><br>
<span class="quotelev2">&gt;&gt; +      /* -1 - to discuss */
</span><br>
<span class="quotelev2">&gt;&gt; +      struct hwloc_obj *socket = hwloc_alloc_setup_object(HWLOC_OBJ_SOCKET, -1);
</span><br>
<span class="quotelev2">&gt;&gt; +      socket-&gt;cpuset = hwloc_cpuset_dup(cpuset);
</span><br>
<span class="quotelev2">&gt;&gt; +      hwloc_insert_object_by_cpuset(topology, socket);
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; Mmm, are we really sure that this describes sockets?  How would a multicore
</span><br>
<span class="quotelev1">&gt; socket look like here?  We should not insert sockets if we are not sure
</span><br>
<span class="quotelev1">&gt; which cpuset they really have (the principle of hwloc is &quot;never lie, at
</span><br>
<span class="quotelev1">&gt; worse don't say anything&quot;).
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>My idea was to do as hwloc on RHEL6 and the same hardware does:
<br>
<p>&nbsp;&nbsp;&nbsp;Group0 cpuset 0xffffffff,0xffffffff
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NUMANode#0(local=0KB total=58458112KB) cpuset 0xffffffff nodeset 
<br>
0x00000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket cpuset 0x0000000f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3Cache(4096KB line=128) cpuset 0x0000000f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache(256KB line=128) cpuset 0x0000000f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache(32KB line=128) cpuset 0x0000000f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core#0 cpuset 0x0000000f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU#0 cpuset 0x00000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU#1 cpuset 0x00000002
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU#2 cpuset 0x00000004
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU#3 cpuset 0x00000008
<br>
<p>Is that ok if there is numa node, L*cache nodes and no &quot;socket&quot; in between?
<br>
<p><span class="quotelev2">&gt;&gt; +      /* Add L1 cache */
</span><br>
<span class="quotelev2">&gt;&gt; +      /* Ignore Instruction caches */
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +      /* d-cache-block-size - ignore */
</span><br>
<span class="quotelev2">&gt;&gt; +      /* d-cache-line-size - to read, in bytes */
</span><br>
<span class="quotelev2">&gt;&gt; +      /* d-cache-sets - ignore */
</span><br>
<span class="quotelev2">&gt;&gt; +      /* d-cache-size - to read, in bytes */
</span><br>
<span class="quotelev2">&gt;&gt; +      /* d-tlb-sets - ignore */
</span><br>
<span class="quotelev2">&gt;&gt; +      /* d-tlb-size - ignore, always 0 on power6 */
</span><br>
<span class="quotelev2">&gt;&gt; +      /* i-cache-* and i-tlb-* represent instruction cache, ignore */
</span><br>
<span class="quotelev2">&gt;&gt; +      uint32_t d_cache_line_size = 0, d_cache_size = 0;
</span><br>
<span class="quotelev2">&gt;&gt; +      if ( (0 != hwloc_read_uint32(cpu, &quot;d-cache-line-size&quot;,&amp;d_cache_line_size, root_fd))&amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; +          (0 != hwloc_read_uint32(cpu, &quot;d-cache-size&quot;,&amp;d_cache_size, root_fd))  ) {
</span><br>
<span class="quotelev2">&gt;&gt; +        struct hwloc_obj *cache =
</span><br>
<span class="quotelev2">&gt;&gt; +            hwloc_alloc_setup_object(HWLOC_OBJ_CACHE, -1);
</span><br>
<span class="quotelev2">&gt;&gt; +        cache-&gt;attr-&gt;cache.size = d_cache_size;.
</span><br>
<span class="quotelev2">&gt;&gt; +        cache-&gt;attr-&gt;cache.depth = 1;
</span><br>
<span class="quotelev2">&gt;&gt; +        cache-&gt;attr-&gt;cache.linesize = d_cache_line_size;
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; I would rather create an L1 cache object as soon as any of the cache
</span><br>
<span class="quotelev1">&gt; properties is there, and then fill the properties with what is actually
</span><br>
<span class="quotelev1">&gt; available.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>Please explain, I did not get the point. L1 cache properties beside in a 
<br>
CPU folder while other levels cache properties are stored in their own 
<br>
folders. And I add L1 cache as soon as I find a CPU which has such 
<br>
properties.
<br>
<p>and I am attaching a new patch :-)
<br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1325/hwloc.device-tree.7.patch">hwloc.device-tree.7.patch</a>
</ul>
<!-- attachment="hwloc.device-tree.7.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1326.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1324.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2486)"</a>
<li><strong>In reply to:</strong> <a href="1321.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1323.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
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
