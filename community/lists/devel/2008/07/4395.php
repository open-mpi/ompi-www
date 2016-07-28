<?
$subject_val = "[OMPI devel] LSF &amp; ompi r18978";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 22 12:38:34 2008" -->
<!-- isoreceived="20080722163834" -->
<!-- sent="Tue, 22 Jul 2008 18:38:27 +0200" -->
<!-- isosent="20080722163827" -->
<!-- name="Thomas Herault" -->
<!-- email="thomas.herault_at_[hidden]" -->
<!-- subject="[OMPI devel] LSF &amp;amp; ompi r18978" -->
<!-- id="013D03A6-E3E2-454B-BD8D-644604CF7B96_at_lri.fr" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> [OMPI devel] LSF &amp; ompi r18978<br>
<strong>From:</strong> Thomas Herault (<em>thomas.herault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-22 12:38:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4396.php">Jeff Squyres: "Re: [OMPI devel] ibcm private header file"</a>
<li><strong>Previous message:</strong> <a href="4394.php">Roland Dreier: "Re: [OMPI devel] ibcm private header file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4397.php">Ralph Castain: "Re: [OMPI devel] LSF &amp; ompi r18978"</a>
<li><strong>Reply:</strong> <a href="4397.php">Ralph Castain: "Re: [OMPI devel] LSF &amp; ompi r18978"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just tested compiling ompi on a LSF cluster (LSF 7.0.2) (see ticket  
<br>
1356).
<br>
I could solve a few trivial bugs myself (see svn diff below), however  
<br>
I hit compile errors beyond my knowledge of ORTE internal structures  
<br>
in orte/mca/ras/lsf/ras_lsf_module.c and orte/mca/ras/lsf/ 
<br>
ras_lsf_component.c :
<br>
<p>orte/mca/ras/lsf/ras_lsf_module.c:49: warning: initialization from  
<br>
incompatible pointer type
<br>
orte/mca/ras/lsf/ras_lsf_module.c: In function &#145;allocate&#146;:
<br>
orte/mca/ras/lsf/ras_lsf_module.c:73: error: &#145;orte_node_t&#146; has no  
<br>
member named &#145;node_slots&#146;
<br>
<p>orte/mca/ras/lsf/ras_lsf_component.c: In function  
<br>
&#145;orte_ras_lsf_component_query&#146;:
<br>
orte/mca/ras/lsf/ras_lsf_component.c:94: error: &#145;orte_proc_info_t&#146;  
<br>
has no member named &#145;seed&#146;
<br>
<p>This needs fixing before I can try a run.
<br>
<p>Bests,
<br>
Thomas
<br>
INRIA - Grand-Large Project/Team
<br>
<p>===================================================================
<br>
--- orte/mca/ras/lsf/ras_lsf_module.c   (revision 18978)
<br>
+++ orte/mca/ras/lsf/ras_lsf_module.c   (working copy)
<br>
@@ -17,7 +17,7 @@
<br>
&nbsp;&nbsp;&nbsp;* $HEADER$
<br>
&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;#include &quot;orte_config.h&quot;
<br>
-#include &quot;orte/orte_constants.h&quot;
<br>
+#include &quot;orte/constants.h&quot;
<br>
<p>&nbsp;&nbsp;#include &lt;errno.h&gt;
<br>
&nbsp;&nbsp;#include &lt;unistd.h&gt;
<br>
Index: orte/mca/ras/lsf/ras_lsf_component.c
<br>
===================================================================
<br>
--- orte/mca/ras/lsf/ras_lsf_component.c        (revision 18978)
<br>
+++ orte/mca/ras/lsf/ras_lsf_component.c        (working copy)
<br>
@@ -21,7 +21,7 @@
<br>
<p>&nbsp;&nbsp;#include &lt;lsf/lsbatch.h&gt;
<br>
<p>-#include &quot;orte/orte_constants.h&quot;
<br>
+#include &quot;orte/constants.h&quot;
<br>
&nbsp;&nbsp;#include &quot;opal/mca/base/base.h&quot;
<br>
&nbsp;&nbsp;#include &quot;opal/mca/base/mca_base_param.h&quot;
<br>
&nbsp;&nbsp;#include &quot;orte/util/proc_info.h&quot;
<br>
Index: orte/mca/plm/lsf/plm_lsf_component.c
<br>
===================================================================
<br>
--- orte/mca/plm/lsf/plm_lsf_component.c        (revision 18978)
<br>
+++ orte/mca/plm/lsf/plm_lsf_component.c        (working copy)
<br>
@@ -124,7 +124,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output_verbose(10, orte_plm_globals.output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;plm:lsf: NOT available for selection&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*module = NULL;
<br>
-        return ORTE_ERROR:
<br>
+        return ORTE_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*priority = mca_plm_lsf_component.priority;
<br>
Index: orte/mca/ess/lsf/Makefile.am
<br>
===================================================================
<br>
--- orte/mca/ess/lsf/Makefile.am        (revision 18978)
<br>
+++ orte/mca/ess/lsf/Makefile.am        (working copy)
<br>
@@ -17,7 +17,7 @@
<br>
&nbsp;&nbsp;# $HEADER$
<br>
&nbsp;&nbsp;#
<br>
<p>-AM_CPPFLAGS = $(pls_lsf_CPPFLAGS)
<br>
+AM_CPPFLAGS = $(ess_lsf_CPPFLAGS)
<br>
<p>&nbsp;&nbsp;sources = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ess_lsf.h \
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4396.php">Jeff Squyres: "Re: [OMPI devel] ibcm private header file"</a>
<li><strong>Previous message:</strong> <a href="4394.php">Roland Dreier: "Re: [OMPI devel] ibcm private header file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4397.php">Ralph Castain: "Re: [OMPI devel] LSF &amp; ompi r18978"</a>
<li><strong>Reply:</strong> <a href="4397.php">Ralph Castain: "Re: [OMPI devel] LSF &amp; ompi r18978"</a>
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
