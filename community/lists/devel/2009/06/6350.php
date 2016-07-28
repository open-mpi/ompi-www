<?
$subject_val = "[OMPI devel] rankfile relative host claiming option patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 12:11:00 2009" -->
<!-- isoreceived="20090625161100" -->
<!-- sent="Thu, 25 Jun 2009 19:10:54 +0300" -->
<!-- isosent="20090625161054" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="[OMPI devel] rankfile relative host claiming option patch" -->
<!-- id="453d39990906250910p452e2ef5t175ec5b285c6d2fc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] rankfile relative host claiming option patch<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 12:10:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6351.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>Previous message:</strong> <a href="6349.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6356.php">Ralph Castain: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<li><strong>Reply:</strong> <a href="6356.php">Ralph Castain: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Proposed small patch to extend current rankfile syntax to be compliant with
<br>
orte_hosts syntax
<br>
making it possible to claim relative hosts from the hostfile/scheduler
<br>
by using +n# hostname, where  0 &lt;= # &lt; np
<br>
ex:
<br>
cat ~/work/svn/hpc/dev/test/Rankfile/rankfile
<br>
rank 0=+n0 slot=0
<br>
rank 1=+n0 slot=1
<br>
rank 2=+n1 slot=2
<br>
rank 3=+n1 slot=1
<br>
for your review and blessing before I commit it to the trunk.
<br>
I also ask to add it to 1.3 branch.
<br>
thanks,
<br>
Lenny.
<br>
<p><p>Index: orte/mca/rmaps/rank_file/help-rmaps_rank_file.txt
<br>
===================================================================
<br>
--- orte/mca/rmaps/rank_file/help-rmaps_rank_file.txt (revision 21529)
<br>
+++ orte/mca/rmaps/rank_file/help-rmaps_rank_file.txt (working copy)
<br>
@@ -56,6 +56,9 @@
<br>
&nbsp;Please review your rank-slot assignments and your host allocation to ensure
<br>
&nbsp;a proper match.
<br>
<p>+[bad-index]
<br>
+Rankfile claimed host %s by index that is bigger than number of allocated
<br>
hosts.
<br>
+
<br>
&nbsp;[orte-rmaps-rf:alloc-error]
<br>
&nbsp;There are not enough slots available in the system to satisfy the %d slots
<br>
&nbsp;that were requested by the application:
<br>
Index: orte/mca/rmaps/rank_file/rmaps_rank_file_lex.h
<br>
===================================================================
<br>
--- orte/mca/rmaps/rank_file/rmaps_rank_file_lex.h (revision 21529)
<br>
+++ orte/mca/rmaps/rank_file/rmaps_rank_file_lex.h (working copy)
<br>
@@ -75,6 +75,7 @@
<br>
&nbsp;#define ORTE_RANKFILE_NEWLINE 13
<br>
&nbsp;#define ORTE_RANKFILE_IPV6 14
<br>
&nbsp;#define ORTE_RANKFILE_SLOT 15
<br>
+#define ORTE_RANKFILE_RELATIVE 16
<br>
<p>&nbsp;#if defined(c_plusplus) || defined(__cplusplus)
<br>
&nbsp;}
<br>
Index: orte/mca/rmaps/rank_file/rmaps_rank_file.c
<br>
===================================================================
<br>
--- orte/mca/rmaps/rank_file/rmaps_rank_file.c (revision 21529)
<br>
+++ orte/mca/rmaps/rank_file/rmaps_rank_file.c (working copy)
<br>
@@ -273,11 +273,11 @@
<br>
&nbsp;&nbsp;orte_vpid_t total_procs;
<br>
&nbsp;&nbsp;opal_list_t node_list;
<br>
&nbsp;&nbsp;opal_list_item_t *item;
<br>
- orte_node_t *node, *nd;
<br>
+ orte_node_t *node, *nd, *root_node;
<br>
&nbsp;&nbsp;orte_vpid_t rank, vpid_start;
<br>
&nbsp;&nbsp;orte_std_cntr_t num_nodes, num_slots;
<br>
&nbsp;&nbsp;orte_rmaps_rank_file_map_t *rfmap;
<br>
- orte_std_cntr_t slots_per_node;
<br>
+ orte_std_cntr_t slots_per_node, relative_index, tmp_cnt;
<br>
&nbsp;&nbsp;int rc;
<br>
<p>&nbsp;&nbsp;/* convenience def */
<br>
@@ -411,7 +411,25 @@
<br>
&nbsp;&nbsp;0 == strcmp(nd-&gt;name, rfmap-&gt;node_name)) {
<br>
&nbsp;&nbsp;node = nd;
<br>
&nbsp;&nbsp;break;
<br>
- }
<br>
+ } else if (NULL != rfmap-&gt;node_name &amp;&amp;
<br>
+ (('+' == rfmap-&gt;node_name[0]) &amp;&amp;
<br>
+ (('n' == rfmap-&gt;node_name[1]) ||
<br>
+ ('N' == rfmap-&gt;node_name[1])))) {
<br>
+
<br>
+ relative_index=atoi(strtok(rfmap-&gt;node_name,&quot;+n&quot;));
<br>
+ if ( relative_index &gt;= opal_list_get_size (&amp;node_list) || ( 0 &gt;
<br>
relative_index)){
<br>
+ orte_show_help(&quot;help-rmaps_rank_file.txt&quot;,&quot;bad-index&quot;,
<br>
true,rfmap-&gt;node_name);
<br>
+ ORTE_ERROR_LOG(ORTE_ERR_BAD_PARAM);
<br>
+ return ORTE_ERR_BAD_PARAM;
<br>
+ }
<br>
+ root_node = (orte_node_t*) opal_list_get_first(&amp;node_list);
<br>
+ for(tmp_cnt=0; tmp_cnt&lt;relative_index; tmp_cnt++) {
<br>
+ root_node = (orte_node_t*) opal_list_get_next(root_node);
<br>
+ }
<br>
+ node = root_node;
<br>
+ break;
<br>
+ }
<br>
+
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;if (NULL == node) {
<br>
&nbsp;&nbsp;orte_show_help(&quot;help-rmaps_rank_file.txt&quot;,&quot;bad-host&quot;, true,
<br>
rfmap-&gt;node_name);
<br>
@@ -631,6 +649,7 @@
<br>
&nbsp;&nbsp;case ORTE_RANKFILE_IPV6:
<br>
&nbsp;&nbsp;case ORTE_RANKFILE_STRING:
<br>
&nbsp;&nbsp;case ORTE_RANKFILE_INT:
<br>
+ case ORTE_RANKFILE_RELATIVE:
<br>
&nbsp;&nbsp;if(ORTE_RANKFILE_INT == token) {
<br>
&nbsp;&nbsp;sprintf(buff,&quot;%d&quot;, orte_rmaps_rank_file_value.ival);
<br>
&nbsp;&nbsp;value = buff;
<br>
Index: orte/mca/rmaps/rank_file/rmaps_rank_file_lex.l
<br>
===================================================================
<br>
--- orte/mca/rmaps/rank_file/rmaps_rank_file_lex.l (revision 21529)
<br>
+++ orte/mca/rmaps/rank_file/rmaps_rank_file_lex.l (working copy)
<br>
@@ -111,6 +111,9 @@
<br>
&nbsp;&nbsp;orte_rmaps_rank_file_value.sval = yytext;
<br>
&nbsp;&nbsp;return ORTE_RANKFILE_HOSTNAME; }
<br>
<p>+\+n[0-9]+ { orte_rmaps_rank_file_value.sval = yytext;
<br>
+ return ORTE_RANKFILE_RELATIVE; }
<br>
+
<br>
&nbsp;. { orte_rmaps_rank_file_value.sval = yytext;
<br>
&nbsp;&nbsp;return ORTE_RANKFILE_ERROR; }
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6350/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6350/rankfile.patch">rankfile.patch</a>
</ul>
<!-- attachment="rankfile.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6351.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>Previous message:</strong> <a href="6349.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6356.php">Ralph Castain: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<li><strong>Reply:</strong> <a href="6356.php">Ralph Castain: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
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
