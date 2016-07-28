<?
$subject_val = "[OMPI devel] [PATCH 4/4] opal-ps: function for printing dahsed line.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 07:29:57 2009" -->
<!-- isoreceived="20090219122957" -->
<!-- sent="Thu, 19 Feb 2009 13:29:44 +0100" -->
<!-- isosent="20090219122944" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH 4/4] opal-ps: function for printing dahsed line." -->
<!-- id="1235046585-20248-4-git-send-email-bert.wesarg_at_googlemail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH 4/4] opal-ps: function for printing dahsed line.<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 07:29:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5469.php">Bert Wesarg: "[OMPI devel] [PATCH] printf.h: fix typo"</a>
<li><strong>Previous message:</strong> <a href="5467.php">Bert Wesarg: "[OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
From: Bert Wesarg &lt;Bert.Wesarg_at_[hidden]&gt;
<br>
<p>Provide a helper funtion to print a dashed line of variable length and use this
<br>
in the pretty_print* functions.
<br>
<p>Regards,
<br>
Bert Wesarg
<br>
<p><pre>
---
 orte/tools/orte-ps/orte-ps.c |   37 ++++++++++++++++++-------------------
 1 file changed, 18 insertions(+), 19 deletions(-)
diff --quilt old/orte/tools/orte-ps/orte-ps.c new/orte/tools/orte-ps/orte-ps.c
--- old/orte/tools/orte-ps/orte-ps.c
+++ new/orte/tools/orte-ps/orte-ps.c
@@ -145,6 +145,7 @@ static int pretty_print(orte_ps_mpirun_i
 static int pretty_print_nodes(orte_node_t **nodes, orte_std_cntr_t num_nodes);
 static int pretty_print_jobs(orte_job_t **jobs, orte_std_cntr_t num_jobs);
 static int pretty_print_vpids(orte_job_t *job);
+static void pretty_print_dashed_line(int len);
 
 static char *pretty_node_state(orte_node_state_t state);
 static char *pretty_job_state(orte_job_state_t state);
@@ -390,17 +391,14 @@ static int pretty_print(orte_ps_mpirun_i
     int len_hdr, i;
     
     /*
-     * Print header
+     * Print header and remember header length
      */
     len_hdr = asprintf(&amp;header, &quot;Information from mpirun %s&quot;, ORTE_JOBID_PRINT(hnpinfo-&gt;hnp-&gt;name.jobid));
-    
     printf(&quot;\n\n%s\n&quot;, header);
     free(header);
-    for (i=0; i &lt; len_hdr; i++) {
-        printf(&quot;%c&quot;, '-');
-    }
-    printf(&quot;\n&quot;);
-    
+
+    pretty_print_dashed_line(len_hdr);
+
     /*
      * Print Node Information
      */
@@ -465,10 +463,7 @@ static int pretty_print_nodes(orte_node_
     printf(&quot;%*s | &quot;, len_slots_i, &quot;Slots In Use&quot;);
     printf(&quot;\n&quot;);
 
-    for(i = 0; i &lt; line_len; ++i) {
-        printf(&quot;-&quot;);
-    }
-    printf(&quot;\n&quot;);
+    pretty_print_dashed_line(line_len);
     
     /*
      * Print Info
@@ -565,10 +560,7 @@ static int pretty_print_jobs(orte_job_t 
 #endif
         printf(&quot;\n&quot;);
 
-        for(j = 0; j &lt; line_len; ++j) {
-            printf(&quot;-&quot;);
-        }
-        printf(&quot;\n&quot;);
+        pretty_print_dashed_line(line_len);
 
         /*
          * Print Info
@@ -719,10 +711,7 @@ static int pretty_print_vpids(orte_job_t
     printf(&quot;\n&quot;);
     
     printf(&quot;\t&quot;);
-    for(i = 0; i &lt; line_len; ++i) {
-        printf(&quot;-&quot;);
-    }
-    printf(&quot;\n&quot;);
+    pretty_print_dashed_line(line_len);
     
     /*
      * Print Info
@@ -771,6 +760,16 @@ static int pretty_print_vpids(orte_job_t
     return ORTE_SUCCESS;
 }
 
+static void pretty_print_dashed_line(int len) {
+    static const char dashes[8] = &quot;--------&quot;;
+
+    while (len &gt;= 8) {
+        printf(&quot;%8.8s&quot;, dashes);
+        len -= 8;
+    }
+    printf(&quot;%*.*s\n&quot;, len, len, dashes);
+}
+
 static int gather_information(orte_ps_mpirun_info_t *hnpinfo) {
     int ret;
     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5469.php">Bert Wesarg: "[OMPI devel] [PATCH] printf.h: fix typo"</a>
<li><strong>Previous message:</strong> <a href="5467.php">Bert Wesarg: "[OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length."</a>
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
