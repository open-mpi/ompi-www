<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 12:48:25 2016" -->
<!-- isoreceived="20160427164825" -->
<!-- sent="Wed, 27 Apr 2016 18:48:23 +0200" -->
<!-- isosent="20160427164823" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.3 released" -->
<!-- id="20160427164823.GP2827_at_var.bordeaux.inria.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="571F710D.4090908_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.11.3 released<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-27 12:48:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/05/1268.php">Hugo Brunie: "[hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET"</a>
<li><strong>Previous message:</strong> <a href="1266.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, on Tue 26 Apr 2016 15:45:49 +0200, wrote:
<br>
<span class="quotelev1">&gt; The Hardware Locality (hwloc) team is pleased to announce the release
</span><br>
<span class="quotelev1">&gt; of v1.11.3:
</span><br>
<p>I'm getting one testsuite issue:
<br>
<p>FAIL: 16-2gr2gr2n2c+misc.xml
<br>
<p>(gdb) bt
<br>
#0  strlen () at ../sysdeps/x86_64/strlen.S:106
<br>
#1  0x00007ffff7346d8e in __GI___strdup (s=0x0) at strdup.c:41
<br>
#2  0x00000000004032ee in hwloc_utils_userdata_import_cb (topology=0x62a520, obj=0x639c00, name=0x639330 &quot;normal:MyName0&quot;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buffer=0x0, length=0) at ../../utils/hwloc/misc.h:312
<br>
#3  0x00007ffff7bb48e1 in hwloc__xml_import_userdata (topology=0x62a520, obj=0x639c00, state=0x7fffffffd2f0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-xml.c:624
<br>
#4  0x00007ffff7bb519e in hwloc__xml_import_object (topology=0x62a520, data=0x6399d0, obj=0x639c00, state=0x7fffffffd3e0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-xml.c:766
<br>
#5  0x00007ffff7bb5b27 in hwloc_look_xml (backend=0x6398e0) at topology-xml.c:1021
<br>
#6  0x00007ffff7b9d962 in hwloc_discover (topology=0x62a520) at topology.c:2499
<br>
#7  0x00007ffff7b9e974 in hwloc_topology_load (topology=0x62a520) at topology.c:2994
<br>
#8  0x00000000004054e7 in main (argc=0, argv=0x7fffffffd728) at lstopo.c:734
<br>
<p>312	  u-&gt;buffer = strdup(buffer);
<br>
(gdb) p buffer
<br>
$1 = (const void *) 0x0
<br>
<p>624	      topology-&gt;userdata_import_cb(topology, obj, fakename,
<br>
buffer, length);
<br>
(gdb) p buffer
<br>
$2 = 0x0
<br>
<p>so it looks like
<br>
<p>617	      ret = state-&gt;global-&gt;get_content(state, &amp;buffer, reallength);
<br>
<p>didn't actually fill buffer, but
<br>
<p>(gdb) p name
<br>
$13 = 0x64ff4c &quot;MyName0&quot;
<br>
(gdb) p encoded
<br>
$10 = 0
<br>
(gdb) p length
<br>
$11 = 0
<br>
(gdb) p reallength
<br>
$12 = 0
<br>
<p>so maybe that's &quot;expected&quot; :)
<br>
<p>I'll be using the attached patch in Debian.
<br>
<p>Samuel
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1267/test-fix">test-fix</a>
</ul>
<!-- attachment="test-fix" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/05/1268.php">Hugo Brunie: "[hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET"</a>
<li><strong>Previous message:</strong> <a href="1266.php">Rezaul Karim Raju: "Re: [hwloc-users] HWLOC_get_membind: problem in getting right(specific) NODESET where data is allocated"</a>
<!-- nextthread="start" -->
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
