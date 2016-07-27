<?
$subject_val = "[hwloc-devel] [PATCH 1/2] semi-colon safe hwloc_cpuset_foreach_{begin, end}()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 20:10:09 2010" -->
<!-- isoreceived="20100312011009" -->
<!-- sent="Fri, 12 Mar 2010 02:10:00 +0100" -->
<!-- isosent="20100312011000" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="[hwloc-devel] [PATCH 1/2] semi-colon safe hwloc_cpuset_foreach_{begin, end}()" -->
<!-- id="1268356201-31034-1-git-send-email-bert.wesarg_at_googlemail.com" -->
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
<strong>Subject:</strong> [hwloc-devel] [PATCH 1/2] semi-colon safe hwloc_cpuset_foreach_{begin, end}()<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 20:10:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0741.php">Bert Wesarg: "[hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in hwloc_cpuset_foreach"</a>
<li><strong>Previous message:</strong> <a href="0739.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mountslines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0741.php">Bert Wesarg: "[hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in hwloc_cpuset_foreach"</a>
<li><strong>Reply:</strong> <a href="0741.php">Bert Wesarg: "[hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in hwloc_cpuset_foreach"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It was not clear whether hwloc_cpuset_foreach_end() needs a terminating ';'
<br>
or not. And hwloc itself had both cases.
<br>
<p>This converts hwloc_cpuset_foreach_{begin,end}() to use the do-while-(0)
<br>
idiom to enforce a terminating semi-colon.
<br>
<p>Note: it is still possible to break and continue this loop.
<br>
<p>Regards,
<br>
Bert
<br>
<p><pre>
---
 include/hwloc/cpuset.h |    9 ++++++---
 src/topology-osf.c     |    2 +-
 2 files changed, 7 insertions(+), 4 deletions(-)
diff --git a/include/hwloc/cpuset.h b/include/hwloc/cpuset.h
index bacaf92..ad2dab4 100644
--- a/include/hwloc/cpuset.h
+++ b/include/hwloc/cpuset.h
@@ -187,13 +187,16 @@ HWLOC_DECLSPEC int hwloc_cpuset_weight(hwloc_const_cpuset_t set) __hwloc_attribu
  * (the cpu set) and \p cpu (the loop variable)
  */
 #define hwloc_cpuset_foreach_begin(cpu, set) \
-        for (cpu = 0; cpu &lt; HWLOC_NBMAXCPUS; cpu++) \
+do { \
+        for (cpu = 0; cpu &lt; HWLOC_NBMAXCPUS; cpu++) { \
                 if (hwloc_cpuset_isset(set, cpu)) {
-/** \brief End of loop
+/** \brief End of loop. Needs a terminating ';'.
  *
  * \sa hwloc_cpuset_foreach_begin */
 #define hwloc_cpuset_foreach_end() \
-                }
+                } \
+        } \
+} while (0)
 
 /** @} */
 
diff --git a/src/topology-osf.c b/src/topology-osf.c
index 750cb28..711107b 100644
--- a/src/topology-osf.c
+++ b/src/topology-osf.c
@@ -37,7 +37,7 @@ prepare_radset(hwloc_topology_t topology, radset_t *radset, hwloc_const_cpuset_t
   cpuemptyset(target_cpuset);
   hwloc_cpuset_foreach_begin(cpu, hwloc_set)
     cpuaddset(target_cpuset, cpu);
-  hwloc_cpuset_foreach_end()
+  hwloc_cpuset_foreach_end();
 
   cpusetcreate(&amp;cpuset);
   cpusetcreate(&amp;xor_cpuset);
-- 
tg: (e66476e..) bw/semi-colon-safe-foreach (depends on: master)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0741.php">Bert Wesarg: "[hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in hwloc_cpuset_foreach"</a>
<li><strong>Previous message:</strong> <a href="0739.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mountslines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0741.php">Bert Wesarg: "[hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in hwloc_cpuset_foreach"</a>
<li><strong>Reply:</strong> <a href="0741.php">Bert Wesarg: "[hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in hwloc_cpuset_foreach"</a>
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
