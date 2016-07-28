<?
$subject_val = "[hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in hwloc_cpuset_foreach";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 20:10:11 2010" -->
<!-- isoreceived="20100312011011" -->
<!-- sent="Fri, 12 Mar 2010 02:10:01 +0100" -->
<!-- isosent="20100312011001" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="[hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in hwloc_cpuset_foreach" -->
<!-- id="1268356201-31034-2-git-send-email-bert.wesarg_at_googlemail.com" -->
<!-- inreplyto="1268356201-31034-1-git-send-email-bert.wesarg_at_googlemail.com" -->
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
<strong>Subject:</strong> [hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in hwloc_cpuset_foreach<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 20:10:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0742.php">Jeff Squyres: "[hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0740.php">Bert Wesarg: "[hwloc-devel] [PATCH 1/2] semi-colon safe hwloc_cpuset_foreach_{begin, end}()"</a>
<li><strong>In reply to:</strong> <a href="0740.php">Bert Wesarg: "[hwloc-devel] [PATCH 1/2] semi-colon safe hwloc_cpuset_foreach_{begin, end}()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0748.php">Brice Goglin: "Re: [hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in	hwloc_cpuset_foreach"</a>
<li><strong>Reply:</strong> <a href="0748.php">Brice Goglin: "Re: [hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in	hwloc_cpuset_foreach"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The hwloc_cpuset_next() will calculate the next cpu behind a given one.
<br>
<p>Use hwloc_cpuset_first() and hwloc_cpuset_next() in hwloc_cpuset_foreach()
<br>
to sparsely iterate over a cpuset.
<br>
<p>Regards,
<br>
Bert
<br>
<p><pre>
---
 doc/Makefile.am                        |    1 +
 include/hwloc/cpuset.h                 |    9 ++++++---
 include/hwloc/rename.h                 |    1 +
 src/cpuset.c                           |   24 ++++++++++++++++++++++++
 tests/hwloc_cpuset_first_last_weight.c |   28 +++++++++++++++++++++++++++-
 5 files changed, 59 insertions(+), 4 deletions(-)
diff --git a/doc/Makefile.am b/doc/Makefile.am
index 9c7bcf7..6fed82c 100644
--- a/doc/Makefile.am
+++ b/doc/Makefile.am
@@ -266,6 +266,7 @@ man3_MANS = \
         $(DOX_MAN_DIR)/man3/hwloc_cpuset_isset.3 \
         $(DOX_MAN_DIR)/man3/hwloc_cpuset_iszero.3 \
         $(DOX_MAN_DIR)/man3/hwloc_cpuset_last.3 \
+        $(DOX_MAN_DIR)/man3/hwloc_cpuset_next.3 \
         $(DOX_MAN_DIR)/man3/hwloc_cpuset_notset.3 \
         $(DOX_MAN_DIR)/man3/hwloc_cpuset_orset.3 \
         $(DOX_MAN_DIR)/man3/hwloc_cpuset_set.3 \
diff --git a/include/hwloc/cpuset.h b/include/hwloc/cpuset.h
index ad2dab4..5a629e9 100644
--- a/include/hwloc/cpuset.h
+++ b/include/hwloc/cpuset.h
@@ -156,6 +156,9 @@ HWLOC_DECLSPEC int hwloc_cpuset_first(hwloc_const_cpuset_t set) __hwloc_attribut
 /** \brief Compute the last CPU (most significant bit) in CPU set \p set */
 HWLOC_DECLSPEC int hwloc_cpuset_last(hwloc_const_cpuset_t set) __hwloc_attribute_pure;
 
+/** \brief Compute the next CPU in CPU set \p set which is after CPU \p prev_cpu */
+HWLOC_DECLSPEC int hwloc_cpuset_next(hwloc_const_cpuset_t set, unsigned prev_cpu) __hwloc_attribute_pure;
+
 /** \brief Keep a single CPU among those set in CPU set \p set
  *
  * Might be used before binding so that the process does not
@@ -188,13 +191,13 @@ HWLOC_DECLSPEC int hwloc_cpuset_weight(hwloc_const_cpuset_t set) __hwloc_attribu
  */
 #define hwloc_cpuset_foreach_begin(cpu, set) \
 do { \
-        for (cpu = 0; cpu &lt; HWLOC_NBMAXCPUS; cpu++) { \
-                if (hwloc_cpuset_isset(set, cpu)) {
+        for (cpu = hwloc_cpuset_first(set); \
+             cpu != -1; \
+             cpu = hwloc_cpuset_next(set, cpu)) { \
 /** \brief End of loop. Needs a terminating ';'.
  *
  * \sa hwloc_cpuset_foreach_begin */
 #define hwloc_cpuset_foreach_end() \
-                } \
         } \
 } while (0)
 
diff --git a/include/hwloc/rename.h b/include/hwloc/rename.h
index 6ebb454..bf1b600 100644
--- a/include/hwloc/rename.h
+++ b/include/hwloc/rename.h
@@ -165,6 +165,7 @@
 #define hwloc_cpuset_notset HWLOC_NAME(cpuset_notset)
 #define hwloc_cpuset_first HWLOC_NAME(cpuset_first)
 #define hwloc_cpuset_last HWLOC_NAME(cpuset_last)
+#define hwloc_cpuset_next HWLOC_NAME(cpuset_next)
 #define hwloc_cpuset_singlify HWLOC_NAME(cpuset_singlify)
 #define hwloc_cpuset_compare_first HWLOC_NAME(cpuset_compare_first)
 #define hwloc_cpuset_compare HWLOC_NAME(cpuset_compare)
diff --git a/src/cpuset.c b/src/cpuset.c
index 1787489..e2f9b16 100644
--- a/src/cpuset.c
+++ b/src/cpuset.c
@@ -510,6 +510,30 @@ int hwloc_cpuset_last(const struct hwloc_cpuset_s * set)
 	return -1;
 }
 
+int hwloc_cpuset_next(const struct hwloc_cpuset_s * set, unsigned prev_cpu)
+{
+	int i = HWLOC_CPUSUBSET_INDEX(prev_cpu + 1);
+
+	HWLOC__CPUSET_CHECK(set);
+
+	for(; i&lt;HWLOC_CPUSUBSET_COUNT; i++) {
+		unsigned long w = HWLOC_CPUSUBSET_SUBSET(*set,i);
+
+		/* if the prev cpu is in the same word as the possible next one,
+		   we need to mask out previous cpus */
+		if (HWLOC_CPUSUBSET_INDEX(prev_cpu) == i) {
+			w &amp;= ~((HWLOC_CPUSUBSET_VAL(prev_cpu) &lt;&lt; 1) - 1);
+		}
+
+		/* subsets are unsigned longs, use ffsl */
+		int _ffs = hwloc_ffsl(w);
+		if (_ffs&gt;0)
+			return _ffs - 1 + HWLOC_CPUSUBSET_SIZE*i;
+	}
+
+	return -1;
+}
+
 void hwloc_cpuset_singlify(struct hwloc_cpuset_s * set)
 {
 	int i,found = 0;
diff --git a/tests/hwloc_cpuset_first_last_weight.c b/tests/hwloc_cpuset_first_last_weight.c
index 093aea1..8a65d8e 100644
--- a/tests/hwloc_cpuset_first_last_weight.c
+++ b/tests/hwloc_cpuset_first_last_weight.c
@@ -8,22 +8,27 @@
 
 #include &lt;assert.h&gt;
 
-/* check hwloc_cpuset_first(), _last() and _weight() */
+/* check hwloc_cpuset_first(), _last(), _next() and _weight() */
 
 int main(void)
 {
   hwloc_cpuset_t set;
+  int i, cpu, expected_cpu;
 
   /* empty set */
   set = hwloc_cpuset_alloc();
   assert(hwloc_cpuset_first(set) == -1);
   assert(hwloc_cpuset_last(set) == -1);
+  assert(hwloc_cpuset_next(set, 0) == -1);
   assert(hwloc_cpuset_weight(set) == 0);
 
   /* full set */
   hwloc_cpuset_fill(set);
   assert(hwloc_cpuset_first(set) == 0);
   assert(hwloc_cpuset_last(set) == HWLOC_NBMAXCPUS-1);
+  assert(hwloc_cpuset_next(set, 0) == 1);
+  assert(hwloc_cpuset_next(set, HWLOC_NBMAXCPUS-2) == HWLOC_NBMAXCPUS-1);
+  assert(hwloc_cpuset_next(set, HWLOC_NBMAXCPUS-1) == -1);
   assert(hwloc_cpuset_weight(set) == HWLOC_NBMAXCPUS);
 
   /* custom sets */
@@ -31,16 +36,37 @@ int main(void)
   hwloc_cpuset_set_range(set, 36, 59);
   assert(hwloc_cpuset_first(set) == 36);
   assert(hwloc_cpuset_last(set) == 59);
+  assert(hwloc_cpuset_next(set, 0) == 36);
+  assert(hwloc_cpuset_next(set, 36) == 37);
+  assert(hwloc_cpuset_next(set, 59) == -1);
   assert(hwloc_cpuset_weight(set) == 24);
   hwloc_cpuset_set_range(set, 136, 259);
   assert(hwloc_cpuset_first(set) == 36);
   assert(hwloc_cpuset_last(set) == 259);
+  assert(hwloc_cpuset_next(set, 59) == 136);
+  assert(hwloc_cpuset_next(set, 259) == -1);
   assert(hwloc_cpuset_weight(set) == 148);
   hwloc_cpuset_clr(set, 199);
   assert(hwloc_cpuset_first(set) == 36);
   assert(hwloc_cpuset_last(set) == 259);
+  assert(hwloc_cpuset_next(set, 198) == 200);
+  assert(hwloc_cpuset_next(set, 199) == 200);
   assert(hwloc_cpuset_weight(set) == 147);
 
+  i = 0;
+  hwloc_cpuset_foreach_begin(cpu, set) {
+    if (0 &lt;= i &amp;&amp; i &lt; 24)
+      expected_cpu = i + 36;
+    else if (24 &lt;= i &amp;&amp; i &lt; 87)
+      expected_cpu = i + 112;
+    else if (87 &lt;= i &amp;&amp; i &lt; 147)
+      expected_cpu = i + 113;
+
+    assert(expected_cpu == cpu);
+
+    i++;
+  } hwloc_cpuset_foreach_end();
+
   hwloc_cpuset_free(set);
 
   return 0;
-- 
tg: (1926bee..) bw/sparse-cpuset-foreach (depends on: bw/semi-colon-safe-foreach)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0742.php">Jeff Squyres: "[hwloc-devel] thread safety"</a>
<li><strong>Previous message:</strong> <a href="0740.php">Bert Wesarg: "[hwloc-devel] [PATCH 1/2] semi-colon safe hwloc_cpuset_foreach_{begin, end}()"</a>
<li><strong>In reply to:</strong> <a href="0740.php">Bert Wesarg: "[hwloc-devel] [PATCH 1/2] semi-colon safe hwloc_cpuset_foreach_{begin, end}()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0748.php">Brice Goglin: "Re: [hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in	hwloc_cpuset_foreach"</a>
<li><strong>Reply:</strong> <a href="0748.php">Brice Goglin: "Re: [hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in	hwloc_cpuset_foreach"</a>
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
