<?
$subject_val = "[hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 21:02:42 2010" -->
<!-- isoreceived="20100306020242" -->
<!-- sent="Fri, 5 Mar 2010 21:02:41 -0500" -->
<!-- isosent="20100306020241" -->
<!-- name="MPI Team" -->
<!-- email="mpiteam_at_[hidden]" -->
<!-- subject="[hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="201003060202.o2622fta017104_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> [hwloc-devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> MPI Team (<em>mpiteam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 21:02:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0717.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1808)"</a>
<li><strong>Previous message:</strong> <a href="0715.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1806)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ERROR: Command returned a non-zero exist status (trunk):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make distcheck
<br>
<p>Start time: Fri Mar  5 21:01:04 EST 2010
<br>
End time:   Fri Mar  5 21:02:41 EST 2010
<br>
<p>=======================================================================
<br>
[... previous lines snipped ...]
<br>
+    &lt;object type=&quot;NUMANode&quot; os_level=&quot;-1&quot; os_index=&quot;1&quot; cpuset=&quot;0x0000000c&quot; complete_cpuset=&quot;0x0000000c&quot; online_cpuset=&quot;0x0000000c&quot; allowed_cpuset=&quot;0x0000000c&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; local_memory=&quot;4294967295&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;1&quot; cpuset=&quot;0x0000000c&quot; complete_cpuset=&quot;0x0000000c&quot; online_cpuset=&quot;0x0000000c&quot; allowed_cpuset=&quot;0x0000000c&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; os_level=&quot;-1&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;1048576&quot; depth=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; os_level=&quot;-1&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;65536&quot; depth=&quot;1&quot;&gt;
<br>
@@ -38,7 +38,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
-    &lt;object type=&quot;NUMANode&quot; os_level=&quot;-1&quot; os_index=&quot;2&quot; cpuset=&quot;0x00000020&quot; complete_cpuset=&quot;0x00000030&quot; online_cpuset=&quot;0x00000020&quot; allowed_cpuset=&quot;0x00000030&quot; nodeset=&quot;0x00000004&quot; complete_nodeset=&quot;0x00000004&quot; allowed_nodeset=&quot;0x00000004&quot; local_memory=&quot;8589934592&quot;&gt;
<br>
+    &lt;object type=&quot;NUMANode&quot; os_level=&quot;-1&quot; os_index=&quot;2&quot; cpuset=&quot;0x00000020&quot; complete_cpuset=&quot;0x00000030&quot; online_cpuset=&quot;0x00000020&quot; allowed_cpuset=&quot;0x00000030&quot; nodeset=&quot;0x00000004&quot; complete_nodeset=&quot;0x00000004&quot; allowed_nodeset=&quot;0x00000004&quot; local_memory=&quot;4294967295&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;2&quot; cpuset=&quot;0x00000020&quot; complete_cpuset=&quot;0x00000030&quot; online_cpuset=&quot;0x00000020&quot; allowed_cpuset=&quot;0x00000030&quot; nodeset=&quot;0x00000004&quot; complete_nodeset=&quot;0x00000004&quot; allowed_nodeset=&quot;0x00000004&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; os_level=&quot;-1&quot; cpuset=&quot;0x00000020&quot; complete_cpuset=&quot;0x00000020&quot; online_cpuset=&quot;0x00000020&quot; allowed_cpuset=&quot;0x00000020&quot; nodeset=&quot;0x00000004&quot; complete_nodeset=&quot;0x00000004&quot; allowed_nodeset=&quot;0x00000004&quot; cache_size=&quot;1048576&quot; depth=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; os_level=&quot;-1&quot; cpuset=&quot;0x00000020&quot; complete_cpuset=&quot;0x00000020&quot; online_cpuset=&quot;0x00000020&quot; allowed_cpuset=&quot;0x00000020&quot; nodeset=&quot;0x00000004&quot; complete_nodeset=&quot;0x00000004&quot; allowed_nodeset=&quot;0x00000004&quot; cache_size=&quot;65536&quot; depth=&quot;1&quot;&gt;
<br>
@@ -49,7 +49,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
-    &lt;object type=&quot;NUMANode&quot; os_level=&quot;-1&quot; os_index=&quot;3&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x000000c0&quot; online_cpuset=&quot;0x000000c0&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000008&quot; complete_nodeset=&quot;0x00000008&quot; allowed_nodeset=&quot;0x00000008&quot; local_memory=&quot;8589934592&quot;&gt;
<br>
+    &lt;object type=&quot;NUMANode&quot; os_level=&quot;-1&quot; os_index=&quot;3&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x000000c0&quot; online_cpuset=&quot;0x000000c0&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000008&quot; complete_nodeset=&quot;0x00000008&quot; allowed_nodeset=&quot;0x00000008&quot; local_memory=&quot;4294967295&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;3&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x000000c0&quot; online_cpuset=&quot;0x000000c0&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000008&quot; complete_nodeset=&quot;0x00000008&quot; allowed_nodeset=&quot;0x00000008&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; os_level=&quot;-1&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x00000040&quot; online_cpuset=&quot;0x00000040&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000008&quot; complete_nodeset=&quot;0x00000008&quot; allowed_nodeset=&quot;0x00000008&quot; cache_size=&quot;1048576&quot; depth=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; os_level=&quot;-1&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x00000040&quot; online_cpuset=&quot;0x00000040&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000008&quot; complete_nodeset=&quot;0x00000008&quot; allowed_nodeset=&quot;0x00000008&quot; cache_size=&quot;65536&quot; depth=&quot;1&quot;&gt;
<br>
@@ -60,8 +60,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
-    &lt;object type=&quot;NUMANode&quot; os_level=&quot;-1&quot; os_index=&quot;4&quot; cpuset=&quot;0x0&quot; complete_cpuset=&quot;0x00000300&quot; online_cpuset=&quot;0x00000300&quot; allowed_cpuset=&quot;0x0&quot; nodeset=&quot;0x00000010&quot; complete_nodeset=&quot;0x00000010&quot; allowed_nodeset=&quot;0x00000010&quot; local_memory=&quot;8589934592&quot;/&gt;
<br>
-    &lt;object type=&quot;NUMANode&quot; os_level=&quot;-1&quot; os_index=&quot;5&quot; cpuset=&quot;0x0&quot; complete_cpuset=&quot;0x00000c00&quot; online_cpuset=&quot;0x00000c00&quot; allowed_cpuset=&quot;0x0&quot; nodeset=&quot;0x00000020&quot; complete_nodeset=&quot;0x00000020&quot; allowed_nodeset=&quot;0x00000020&quot; local_memory=&quot;8589934592&quot;/&gt;
<br>
+    &lt;object type=&quot;NUMANode&quot; os_level=&quot;-1&quot; os_index=&quot;4&quot; cpuset=&quot;0x0&quot; complete_cpuset=&quot;0x00000300&quot; online_cpuset=&quot;0x00000300&quot; allowed_cpuset=&quot;0x0&quot; nodeset=&quot;0x00000010&quot; complete_nodeset=&quot;0x00000010&quot; allowed_nodeset=&quot;0x00000010&quot; local_memory=&quot;4294967295&quot;/&gt;
<br>
+    &lt;object type=&quot;NUMANode&quot; os_level=&quot;-1&quot; os_index=&quot;5&quot; cpuset=&quot;0x0&quot; complete_cpuset=&quot;0x00000c00&quot; online_cpuset=&quot;0x00000c00&quot; allowed_cpuset=&quot;0x0&quot; nodeset=&quot;0x00000020&quot; complete_nodeset=&quot;0x00000020&quot; allowed_nodeset=&quot;0x00000020&quot; local_memory=&quot;4294967295&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_level=&quot;-1&quot; os_index=&quot;6&quot; cpuset=&quot;0x00003000&quot; complete_cpuset=&quot;0x00003000&quot; online_cpuset=&quot;0x00003000&quot; allowed_cpuset=&quot;0x00003000&quot; nodeset=&quot;0x00000040&quot; complete_nodeset=&quot;0x00000040&quot; allowed_nodeset=&quot;0x0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_level=&quot;-1&quot; os_index=&quot;6&quot; cpuset=&quot;0x00003000&quot; complete_cpuset=&quot;0x00003000&quot; online_cpuset=&quot;0x00003000&quot; allowed_cpuset=&quot;0x00003000&quot; nodeset=&quot;0x00000040&quot; complete_nodeset=&quot;0x00000040&quot; allowed_nodeset=&quot;0x0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; os_level=&quot;-1&quot; cpuset=&quot;0x00001000&quot; complete_cpuset=&quot;0x00001000&quot; online_cpuset=&quot;0x00001000&quot; allowed_cpuset=&quot;0x00001000&quot; nodeset=&quot;0x00000040&quot; complete_nodeset=&quot;0x00000040&quot; allowed_nodeset=&quot;0x0&quot; cache_size=&quot;1048576&quot; depth=&quot;2&quot;&gt;
<br>
FAIL: 16amd64-8n2c-cpusets.xml
<br>
PASS: 16em64t-4s2c2t.xml
<br>
PASS: 16em64t-4s2c2t-offlines.xml
<br>
PASS: 8em64t-2mi2ma2c.xml
<br>
========================================================
<br>
1 of 4 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[4]: *** [check-TESTS] Error 1
<br>
make[4]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1807/hwloc/hwloc-1.0a1r1807/_build/tests/xml'
<br>
make[3]: *** [check-am] Error 2
<br>
make[3]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1807/hwloc/hwloc-1.0a1r1807/_build/tests/xml'
<br>
make[2]: *** [check-recursive] Error 1
<br>
make[2]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1807/hwloc/hwloc-1.0a1r1807/_build/tests'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory `/home/mpiteam/hwloc/nightly-tarball-build-root/trunk/create-r1807/hwloc/hwloc-1.0a1r1807/_build'
<br>
make: *** [distcheck] Error 1
<br>
=======================================================================
<br>
<p>Your friendly daemon,
<br>
Cyrador
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0717.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1808)"</a>
<li><strong>Previous message:</strong> <a href="0715.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1806)"</a>
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
