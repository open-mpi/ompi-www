<?
$subject_val = "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 01:21:35 2015" -->
<!-- isoreceived="20151215062135" -->
<!-- sent="Tue, 15 Dec 2015 07:21:29 +0100" -->
<!-- isosent="20151215062129" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated" -->
<!-- id="566FB169.8070208_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAOQ1qzvVPT+n3Qv_fAr7+3z_AXzOBtbxyDJnroU2jLqyD2q42A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-15 01:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1226.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Previous message:</strong> <a href="1224.php">Rezaul Karim Raju: "[hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>In reply to:</strong> <a href="1224.php">Rezaul Karim Raju: "[hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1226.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Reply:</strong> <a href="1226.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 15/12/2015 05:57, Rezaul Karim Raju a &#233;crit :
<br>
<span class="quotelev1">&gt; *OUTPUT: *
</span><br>
<span class="quotelev1">&gt; *Policy--&gt;* buffer(Array: A) *membind [default OS binding] Policy is:=
</span><br>
<span class="quotelev1">&gt; 1 [1 refers to *HWLOC_MEMBIND_FIRSTTOUCH
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://www.open-mpi.org/projects/hwloc/doc/v1.11.1/a00083.php#ggac9764f79505775d06407b40f5e4661e8a979c7aa78dd32780858f30f47a72cca0">https://www.open-mpi.org/projects/hwloc/doc/v1.11.1/a00083.php#ggac9764f79505775d06407b40f5e4661e8a979c7aa78dd32780858f30f47a72cca0</a>&gt;*]*
</span><br>
<span class="quotelev1">&gt; *Nodeset --&gt; *buffer(Array: A) bound to nodeset*0x000000ff *with
</span><br>
<span class="quotelev1">&gt; contains*:*
</span><br>
<span class="quotelev1">&gt; * *node #0 (OS index 0) with 8387047424 bytes of memory
</span><br>
<span class="quotelev1">&gt;  node #1 (OS index 1) with 8471617536 bytes of memory
</span><br>
<span class="quotelev1">&gt;  node #2 (OS index 2) with 8471621632 bytes of memory
</span><br>
<span class="quotelev1">&gt;  node #3 (OS index 3) with 8471617536 bytes of memory
</span><br>
<span class="quotelev1">&gt;  node #4 (OS index 4) with 8471621632 bytes of memory
</span><br>
<span class="quotelev1">&gt;  node #5 (OS index 5) with 8471617536 bytes of memory
</span><br>
<span class="quotelev1">&gt;  node #6 (OS index 6) with 8471621632 bytes of memory
</span><br>
<span class="quotelev1">&gt;  node #7 (OS index 7) with 8471564288 bytes of memory
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *why it shows allocated memory is bound to all available nodeset..?
</span><br>
<span class="quotelev1">&gt; should it not be allocated to a specific nodeset one ..?*
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<p>Hello
<br>
<p>You are confusing the &quot;binding&quot; and the &quot;actual location&quot;. Your memory
<br>
buffer isn't bound to a specific location by default. But Linux has to
<br>
allocate it somewhere. So your buffer is &quot;located&quot; in some node after
<br>
the allocation, but it is not &quot;bound&quot; there (what get_area_membind
<br>
returns) which means Linux could have allocated it somewhere else.
<br>
<p>hwloc cannot currently return the &quot;location&quot; of a memory buffer. I have
<br>
been thinking about adding this feature in the past, but it looks like
<br>
you are the first actual user requesting this. We could add something like
<br>
hwloc_get_last_memory_location(topology, input buffer, outputnodeset)
<br>
At least on Linux that's possible.
<br>
<p>For clarity, this is similar to the difference between
<br>
hwloc_get_cpubind() and hwloc_get_last_cpu_location(): A task always
<br>
runs on a specific PU, even if it is not bound to anything specific PU.
<br>
<p>Brice
<br>
<p><p><p><p><span class="quotelev1">&gt; *If I write as below: *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Get last node. */
</span><br>
<span class="quotelev1">&gt;     n = hwloc_get_nbobjs_by_type(topology, HWLOC_OBJ_NODE);
</span><br>
<span class="quotelev1">&gt;     if (n) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         void *m;
</span><br>
<span class="quotelev1">&gt; int prev_val, next_val;
</span><br>
<span class="quotelev1">&gt;         size = sizeof(int); //1024*1024;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         obj = hwloc_get_obj_by_type(topology, HWLOC_OBJ_NODE, n - 1);
</span><br>
<span class="quotelev1">&gt;         m = *hwloc_alloc_membind_nodeset(*topology, size,
</span><br>
<span class="quotelev1">&gt; *obj-&gt;nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_PROCESS*);
</span><br>
<span class="quotelev1">&gt;         hwloc_free(topology, m, size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         m = malloc(size);
</span><br>
<span class="quotelev1">&gt;         // touch the m memory 
</span><br>
<span class="quotelev1">&gt; m = &amp;prev_val;
</span><br>
<span class="quotelev1">&gt; *(int*)m = 1010;
</span><br>
<span class="quotelev1">&gt;         *hwloc_set_area_membind_nodeset(*topology, m, size,
</span><br>
<span class="quotelev1">&gt; *obj-&gt;nodeset, HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_STRICT*);
</span><br>
<span class="quotelev1">&gt; //HWLOC_MEMBIND_DEFAULT:= Reset the memory allocation policy to the
</span><br>
<span class="quotelev1">&gt; system default(HWLOC_MEMBIND_FIRSTTOUCH (Linux)).
</span><br>
<span class="quotelev1">&gt; */* check where buffer(m) is allocated */*
</span><br>
<span class="quotelev1">&gt; nodeset = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt; *hwloc_get_area_membind_nodeset(topology, m, size, nodeset,
</span><br>
<span class="quotelev1">&gt; &amp;nodepolicy, 0); *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* check the binding policy */
</span><br>
<span class="quotelev1">&gt; printf(&quot;buffer(m) membind-ed policy is %d \n&quot;, nodepolicy);
</span><br>
<span class="quotelev1">&gt; /* print the corresponding NUMA nodes */
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_asprintf(&amp;s, nodeset);
</span><br>
<span class="quotelev1">&gt; printf(&quot;buffer bound to nodeset %s with contains:\n&quot;, s);
</span><br>
<span class="quotelev1">&gt; free(s);
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_foreach_begin(i, nodeset) {
</span><br>
<span class="quotelev1">&gt; obj = hwloc_get_numanode_obj_by_os_index(topology, i);
</span><br>
<span class="quotelev1">&gt; printf(&quot;  node #%u (OS index %u) with %lld bytes of memory\n&quot;,
</span><br>
<span class="quotelev1">&gt; obj-&gt;logical_index, i, (unsigned long long) obj-&gt;memory.local_memory);
</span><br>
<span class="quotelev1">&gt; } hwloc_bitmap_foreach_end();
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_free(nodeset);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *OUTPUT: *
</span><br>
<span class="quotelev1">&gt; *Policy:* buffer(Array: A) membind *[default OS binding] Policy is:= 2*
</span><br>
<span class="quotelev1">&gt; *Nodeset: *	 buffer(Array: A) *bound to nodeset 0x00000080* with contains:
</span><br>
<span class="quotelev1">&gt;   *node #7 (OS index 7) *with 8471564288 bytes of memory
</span><br>
<span class="quotelev1">&gt; In this case it shows the specific nodeset one where the memory is
</span><br>
<span class="quotelev1">&gt; allocated. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Can you please comment and explain what is happening underneath ..?
</span><br>
<span class="quotelev1">&gt; Thanking you in advance.* 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------
</span><br>
<span class="quotelev1">&gt; RaJu, Rezaul Karim
</span><br>
<span class="quotelev1">&gt; Graduate Student (PhD) | Computer Science | University of Houston
</span><br>
<span class="quotelev1">&gt; Research in High Performance Computing Tools  
</span><br>
<span class="quotelev1">&gt; Houston, Texas-77004
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/12/1225.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/12/1225.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1225/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1226.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Previous message:</strong> <a href="1224.php">Rezaul Karim Raju: "[hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>In reply to:</strong> <a href="1224.php">Rezaul Karim Raju: "[hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1226.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Reply:</strong> <a href="1226.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
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
