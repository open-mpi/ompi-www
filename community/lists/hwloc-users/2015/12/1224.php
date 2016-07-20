<?
$subject_val = "[hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 14 23:57:58 2015" -->
<!-- isoreceived="20151215045758" -->
<!-- sent="Mon, 14 Dec 2015 22:57:54 -0600" -->
<!-- isosent="20151215045754" -->
<!-- name="Rezaul Karim Raju" -->
<!-- email="raju.cse.buet_at_[hidden]" -->
<!-- subject="[hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated" -->
<!-- id="CAOQ1qzvVPT+n3Qv_fAr7+3z_AXzOBtbxyDJnroU2jLqyD2q42A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated<br>
<strong>From:</strong> Rezaul Karim Raju (<em>raju.cse.buet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-14 23:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/11/1223.php">Brice Goglin: "[hwloc-users] hwloc @ SC15"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Reply:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/04/1260.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/04/1266.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear concern,
<br>
<p>I am using hwloc library to find the node where my data is allocated. My
<br>
machine(*OS: LINUX*) topology is like below:
<br>
<p>*** Objects at level 2 (node level): total node=8
<br>
Index 0: NUMANode#0(7999MB)
<br>
Index 1: NUMANode#1(8079MB)
<br>
Index 2: NUMANode#2(8079MB)
<br>
Index 3: NUMANode#3(8079MB)
<br>
Index 4: NUMANode#4(8079MB)
<br>
Index 5: NUMANode#5(8079MB)
<br>
Index 6: NUMANode#6(8079MB)
<br>
Index 7: NUMANode#7(8079MB)
<br>
<p>My code is as below:
<br>
------------------ code snippet-----------
<br>
*/* declaration */*
<br>
int *p1, *p2;
<br>
int a1, b1, c1, N;
<br>
N=10;
<br>
double* A; A = (double*) malloc(N * sizeof(double));
<br>
*// touch the variable*
<br>
/* default allocation of *p1 which refers to int a1 variable address */
<br>
&nbsp;&nbsp;p1 = &amp; a1;
<br>
// touch the memory reference of *p1
<br>
&nbsp;&nbsp;*p1 = a1 +2;
<br>
*//touch the array [A] first * for (int i = 0; i &lt; N; i++) { A[i] = 0.0; }
<br>
<p>*//------ call hwloc functions----- *
<br>
*/* check where buffer(array: A) is allocated */*
<br>
set = hwloc_bitmap_alloc();
<br>
err = hwloc_get_area_membind_nodeset(topology, *A, N * sizeof(double)*,
<br>
set, &amp;policy, *HWLOC_MEMBIND_STRICT*);
<br>
if (err &lt; 0) {
<br>
fprintf(stderr, &quot;failed to retrieve the buffer binding and policy\n&quot;);
<br>
hwloc_topology_destroy(topology);
<br>
hwloc_bitmap_free(set);
<br>
return EXIT_FAILURE;
<br>
}
<br>
<p>*/* check the binding policy: is identical for the current operating
<br>
system. */*
<br>
printf(&quot;---&gt;buffer(Array: A) membind [default OS binding] Policy is:= %d
<br>
\n&quot;, policy);
<br>
<p>*/* print the corresponding NUMA nodes */*
<br>
hwloc_bitmap_asprintf(&amp;s, set);
<br>
printf(&quot;buffer(Array: A) bound to nodeset %s with contains:\n&quot;, s);
<br>
free(s);
<br>
hwloc_bitmap_foreach_begin(i, set) {
<br>
obj = hwloc_get_numanode_obj_by_os_index(topology, i);
<br>
printf(&quot;  --&gt;node #%u (OS index %u) with %lld bytes of memory\n&quot;,
<br>
obj-&gt;logical_index, i, (unsigned long long) obj-&gt;memory.local_memory);
<br>
} hwloc_bitmap_foreach_end();
<br>
hwloc_bitmap_free(set);
<br>
<p>*OUTPUT: *
<br>
*Policy--&gt;* buffer(Array: A) *membind [default OS binding] Policy is:= 1 [1
<br>
refers to *HWLOC_MEMBIND_FIRSTTOUCH
<br>
&lt;<a href="https://www.open-mpi.org/projects/hwloc/doc/v1.11.1/a00083.php#ggac9764f79505775d06407b40f5e4661e8a979c7aa78dd32780858f30f47a72cca0">https://www.open-mpi.org/projects/hwloc/doc/v1.11.1/a00083.php#ggac9764f79505775d06407b40f5e4661e8a979c7aa78dd32780858f30f47a72cca0</a>&gt;
<br>
*]*
<br>
*Nodeset --&gt; *buffer(Array: A) bound to nodeset* 0x000000ff *with contains
<br>
*:*
<br>
&nbsp;node #0 (OS index 0) with 8387047424 bytes of memory
<br>
&nbsp;node #1 (OS index 1) with 8471617536 bytes of memory
<br>
&nbsp;node #2 (OS index 2) with 8471621632 bytes of memory
<br>
&nbsp;node #3 (OS index 3) with 8471617536 bytes of memory
<br>
&nbsp;node #4 (OS index 4) with 8471621632 bytes of memory
<br>
&nbsp;node #5 (OS index 5) with 8471617536 bytes of memory
<br>
&nbsp;node #6 (OS index 6) with 8471621632 bytes of memory
<br>
&nbsp;node #7 (OS index 7) with 8471564288 bytes of memory
<br>
<p>*why it shows allocated memory is bound to all available nodeset..? should
<br>
it not be allocated to a specific nodeset one ..?*
<br>
<p>*If I write as below: *
<br>
<p>/* Get last node. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;n = hwloc_get_nbobjs_by_type(topology, HWLOC_OBJ_NODE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (n) {
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *m;
<br>
int prev_val, next_val;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = sizeof(int); //1024*1024;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj = hwloc_get_obj_by_type(topology, HWLOC_OBJ_NODE, n - 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m = *hwloc_alloc_membind_nodeset(*topology, size, *obj-&gt;nodeset,
<br>
HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_PROCESS*);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_free(topology, m, size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m = malloc(size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// touch the m memory
<br>
m = &amp;prev_val;
<br>
*(int*)m = 1010;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*hwloc_set_area_membind_nodeset(*topology, m, size, *obj-&gt;nodeset,
<br>
HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_STRICT*); //HWLOC_MEMBIND_DEFAULT:= Reset
<br>
the memory allocation policy to the system default(HWLOC_MEMBIND_FIRSTTOUCH
<br>
(Linux)).
<br>
*/* check where buffer(m) is allocated */*
<br>
nodeset = hwloc_bitmap_alloc();
<br>
*hwloc_get_area_membind_nodeset(topology, m, size, nodeset, &amp;nodepolicy,
<br>
0); *
<br>
<p>/* check the binding policy */
<br>
printf(&quot;buffer(m) membind-ed policy is %d \n&quot;, nodepolicy);
<br>
/* print the corresponding NUMA nodes */
<br>
hwloc_bitmap_asprintf(&amp;s, nodeset);
<br>
printf(&quot;buffer bound to nodeset %s with contains:\n&quot;, s);
<br>
free(s);
<br>
hwloc_bitmap_foreach_begin(i, nodeset) {
<br>
obj = hwloc_get_numanode_obj_by_os_index(topology, i);
<br>
printf(&quot;  node #%u (OS index %u) with %lld bytes of memory\n&quot;,
<br>
obj-&gt;logical_index, i, (unsigned long long) obj-&gt;memory.local_memory);
<br>
} hwloc_bitmap_foreach_end();
<br>
hwloc_bitmap_free(nodeset);
<br>
<p>*OUTPUT: *
<br>
*Policy:* buffer(Array: A) membind *[default OS binding] Policy is:= 2*
<br>
*Nodeset: *  buffer(Array: A) *bound to nodeset 0x00000080* with contains:
<br>
&nbsp;&nbsp;*node #7 (OS index 7) *with 8471564288 bytes of memory
<br>
In this case it shows the specific nodeset one where the memory is
<br>
allocated.
<br>
<p>*Can you please comment and explain what is happening underneath ..?
<br>
Thanking you in advance.*
<br>
<p>------------------------
<br>
RaJu, Rezaul Karim
<br>
Graduate Student (PhD) | Computer Science | University of Houston
<br>
Research in High Performance Computing Tools
<br>
Houston, Texas-77004
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1224/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/11/1223.php">Brice Goglin: "[hwloc-users] hwloc @ SC15"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Reply:</strong> <a href="1225.php">Brice Goglin: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/04/1260.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/04/1266.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
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
