<?
$subject_val = "[hwloc-devel] [PATCH] Avoid expensive ffsl/flsl calls in cpuset operations";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 13 15:10:02 2010" -->
<!-- isoreceived="20100313201002" -->
<!-- sent="Sat, 13 Mar 2010 21:09:52 +0100" -->
<!-- isosent="20100313200952" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="[hwloc-devel] [PATCH] Avoid expensive ffsl/flsl calls in cpuset operations" -->
<!-- id="1268510992-20358-1-git-send-email-bert.wesarg_at_googlemail.com" -->
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
<strong>Subject:</strong> [hwloc-devel] [PATCH] Avoid expensive ffsl/flsl calls in cpuset operations<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-13 15:09:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0761.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1835)"</a>
<li><strong>Previous message:</strong> <a href="0759.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1828)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0762.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Avoid expensive ffsl/flsl calls in cpuset operations"</a>
<li><strong>Reply:</strong> <a href="0762.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Avoid expensive ffsl/flsl calls in cpuset operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Testing if a word does have any bit set should be considered less expansive
<br>
than calling ffsl/flsl first and than test this.
<br>
<p>Regards,
<br>
Bert
<br>
<p><pre>
---
 src/cpuset.c |   44 +++++++++++++++++++++++---------------------
 1 files changed, 23 insertions(+), 21 deletions(-)
diff --git a/src/cpuset.c b/src/cpuset.c
index bb23b47..f963c39 100644
--- a/src/cpuset.c
+++ b/src/cpuset.c
@@ -486,9 +486,9 @@ int hwloc_cpuset_first(const struct hwloc_cpuset_s * set)
 
 	for(i=0; i&lt;HWLOC_CPUSUBSET_COUNT; i++) {
 		/* subsets are unsigned longs, use ffsl */
-		int _ffs = hwloc_ffsl(HWLOC_CPUSUBSET_SUBSET(*set,i));
-		if (_ffs&gt;0)
-			return _ffs - 1 + HWLOC_CPUSUBSET_SIZE*i;
+		unsigned long w = HWLOC_CPUSUBSET_SUBSET(*set,i);
+		if (w)
+			return hwloc_ffsl(w) - 1 + HWLOC_CPUSUBSET_SIZE*i;
 	}
 
 	return -1;
@@ -502,9 +502,9 @@ int hwloc_cpuset_last(const struct hwloc_cpuset_s * set)
 
 	for(i=HWLOC_CPUSUBSET_COUNT-1; i&gt;=0; i--) {
 		/* subsets are unsigned longs, use flsl */
-		int _fls = hwloc_flsl(HWLOC_CPUSUBSET_SUBSET(*set,i));
-		if (_fls&gt;0)
-			return _fls - 1 + HWLOC_CPUSUBSET_SIZE*i;
+		unsigned long w = HWLOC_CPUSUBSET_SUBSET(*set,i);
+		if (w)
+			return hwloc_flsl(w) - 1 + HWLOC_CPUSUBSET_SIZE*i;
 	}
 
 	return -1;
@@ -517,6 +517,7 @@ int hwloc_cpuset_next(const struct hwloc_cpuset_s * set, unsigned prev_cpu)
 	HWLOC__CPUSET_CHECK(set);
 
 	for(; i&lt;HWLOC_CPUSUBSET_COUNT; i++) {
+		/* subsets are unsigned longs, use ffsl */
 		unsigned long w = HWLOC_CPUSUBSET_SUBSET(*set,i);
 
 		/* if the prev cpu is in the same word as the possible next one,
@@ -524,10 +525,8 @@ int hwloc_cpuset_next(const struct hwloc_cpuset_s * set, unsigned prev_cpu)
 		if (HWLOC_CPUSUBSET_INDEX(prev_cpu) == i)
 			w &amp;= ~((HWLOC_CPUSUBSET_VAL(prev_cpu) &lt;&lt; 1) - 1);
 
-		/* subsets are unsigned longs, use ffsl */
-		int _ffs = hwloc_ffsl(w);
-		if (_ffs&gt;0)
-			return _ffs - 1 + HWLOC_CPUSUBSET_SIZE*i;
+		if (w)
+			return hwloc_ffsl(w) - 1 + HWLOC_CPUSUBSET_SIZE*i;
 	}
 
 	return -1;
@@ -545,8 +544,9 @@ void hwloc_cpuset_singlify(struct hwloc_cpuset_s * set)
 			continue;
 		} else {
 			/* subsets are unsigned longs, use ffsl */
-			int _ffs = hwloc_ffsl(HWLOC_CPUSUBSET_SUBSET(*set,i));
-			if (_ffs&gt;0) {
+			unsigned long w = HWLOC_CPUSUBSET_SUBSET(*set,i);
+			if (w) {
+				int _ffs = hwloc_ffsl(w);
 				HWLOC_CPUSUBSET_SUBSET(*set,i) = HWLOC_CPUSUBSET_VAL(_ffs-1);
 				found = 1;
 			}
@@ -562,15 +562,17 @@ int hwloc_cpuset_compare_first(const struct hwloc_cpuset_s * set1, const struct
 	HWLOC__CPUSET_CHECK(set2);
 
 	for(i=0; i&lt;HWLOC_CPUSUBSET_COUNT; i++) {
-		int _ffs1 = hwloc_ffsl(HWLOC_CPUSUBSET_SUBSET(*set1,i));
-		int _ffs2 = hwloc_ffsl(HWLOC_CPUSUBSET_SUBSET(*set2,i));
-		if (!_ffs1 &amp;&amp; !_ffs2)
-			continue;
-		/* if both have a bit set, compare for real */
-		if (_ffs1 &amp;&amp; _ffs2)
-			return _ffs1-_ffs2;
-		/* one is empty, and it is considered higher, so reverse-compare them */
-		return _ffs2-_ffs1;
+		unsigned long w1 = HWLOC_CPUSUBSET_SUBSET(*set1,i);
+		unsigned long w2 = HWLOC_CPUSUBSET_SUBSET(*set2,i);
+		if (w1 || w2) {
+			int _ffs1 = hwloc_ffsl(HWLOC_CPUSUBSET_SUBSET(*set1,i));
+			int _ffs2 = hwloc_ffsl(HWLOC_CPUSUBSET_SUBSET(*set2,i));
+			/* if both have a bit set, compare for real */
+			if (_ffs1 &amp;&amp; _ffs2)
+				return _ffs1-_ffs2;
+			/* one is empty, and it is considered higher, so reverse-compare them */
+			return _ffs2-_ffs1;
+		}
 	}
 	return 0;
 }
-- 
tg: (5b4ea2a..) bw/branch-for-ffsl (depends on: master)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0761.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1835)"</a>
<li><strong>Previous message:</strong> <a href="0759.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1828)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0762.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Avoid expensive ffsl/flsl calls in cpuset operations"</a>
<li><strong>Reply:</strong> <a href="0762.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Avoid expensive ffsl/flsl calls in cpuset operations"</a>
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
