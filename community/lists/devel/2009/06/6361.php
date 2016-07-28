<?
$subject_val = "Re: [OMPI devel] rankfile relative host claiming option patch";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 14:29:50 2009" -->
<!-- isoreceived="20090626182950" -->
<!-- sent="Fri, 26 Jun 2009 21:29:44 +0300" -->
<!-- isosent="20090626182944" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] rankfile relative host claiming option patch" -->
<!-- id="453d39990906261129m15daee34v6082678eb8e88e35_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1814895D-962B-4E7A-B7BB-F45881D432DD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] rankfile relative host claiming option patch<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-26 14:29:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6362.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21543"</a>
<li><strong>Previous message:</strong> <a href="6360.php">George Bosilca: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6357.php">Ralph Castain: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Ralph,
<br>
<p>So, if there are no other comments,
<br>
I will commit it on Sunday.
<br>
<p>Thanks,
<br>
Lenny.
<br>
<p>On Fri, Jun 26, 2009 at 6:37 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Forget that comment, Lenny - I think this actually looks fine. The relative
</span><br>
<span class="quotelev1">&gt; notation currently is only used in the allocators, not the mappers, so this
</span><br>
<span class="quotelev1">&gt; is fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the confusion.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 25, 2009, at 2:50 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question: for all other mappers, the relative rank is given with respect to
</span><br>
<span class="quotelev2">&gt;&gt; the allocation. It looks here like you are doing it relative to the list of
</span><br>
<span class="quotelev2">&gt;&gt; nodes, which is compiled from the allocation passed through hostfile and
</span><br>
<span class="quotelev2">&gt;&gt; -host options.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you want to conform to the behavior of the other mappers? Or do
</span><br>
<span class="quotelev2">&gt;&gt; something different here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 25, 2009, at 10:10 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Proposed small patch to extend current rankfile syntax to be compliant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with orte_hosts syntax
</span><br>
<span class="quotelev3">&gt;&gt;&gt; making it possible to claim relative hosts from the hostfile/scheduler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by using +n# hostname, where  0 &lt;= # &lt; np
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ex:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cat ~/work/svn/hpc/dev/test/Rankfile/rankfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=+n0 slot=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=+n0 slot=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 2=+n1 slot=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 3=+n1 slot=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for your review and blessing before I commit it to the trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also ask to add it to 1.3 branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Index: orte/mca/rmaps/rank_file/help-rmaps_rank_file.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- orte/mca/rmaps/rank_file/help-rmaps_rank_file.txt (revision 21529)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ orte/mca/rmaps/rank_file/help-rmaps_rank_file.txt (working copy)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -56,6 +56,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please review your rank-slot assignments and your host allocation to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ensure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a proper match.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +[bad-index]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +Rankfile claimed host %s by index that is bigger than number of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocated hosts.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [orte-rmaps-rf:alloc-error]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are not enough slots available in the system to satisfy the %d
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slots
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Index: orte/mca/rmaps/rank_file/rmaps_rank_file_lex.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- orte/mca/rmaps/rank_file/rmaps_rank_file_lex.h (revision 21529)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ orte/mca/rmaps/rank_file/rmaps_rank_file_lex.h (working copy)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -75,6 +75,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define ORTE_RANKFILE_NEWLINE 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define ORTE_RANKFILE_IPV6 14
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define ORTE_RANKFILE_SLOT 15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define ORTE_RANKFILE_RELATIVE 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Index: orte/mca/rmaps/rank_file/rmaps_rank_file.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- orte/mca/rmaps/rank_file/rmaps_rank_file.c (revision 21529)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ orte/mca/rmaps/rank_file/rmaps_rank_file.c (working copy)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -273,11 +273,11 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orte_vpid_t total_procs;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  opal_list_t node_list;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  opal_list_item_t *item;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - orte_node_t *node, *nd;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + orte_node_t *node, *nd, *root_node;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orte_vpid_t rank, vpid_start;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orte_std_cntr_t num_nodes, num_slots;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orte_rmaps_rank_file_map_t *rfmap;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - orte_std_cntr_t slots_per_node;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + orte_std_cntr_t slots_per_node, relative_index, tmp_cnt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int rc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /* convenience def */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -411,7 +411,25 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  0 == strcmp(nd-&gt;name, rfmap-&gt;node_name)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  node = nd;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + } else if (NULL != rfmap-&gt;node_name &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + (('+' == rfmap-&gt;node_name[0]) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + (('n' == rfmap-&gt;node_name[1]) ||
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + ('N' == rfmap-&gt;node_name[1])))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + relative_index=atoi(strtok(rfmap-&gt;node_name,&quot;+n&quot;));
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + if ( relative_index &gt;= opal_list_get_size (&amp;node_list) || ( 0 &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; relative_index)){
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + orte_show_help(&quot;help-rmaps_rank_file.txt&quot;,&quot;bad-index&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; true,rfmap-&gt;node_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + ORTE_ERROR_LOG(ORTE_ERR_BAD_PARAM);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + return ORTE_ERR_BAD_PARAM;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + root_node = (orte_node_t*) opal_list_get_first(&amp;node_list);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + for(tmp_cnt=0; tmp_cnt&lt;relative_index; tmp_cnt++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + root_node = (orte_node_t*) opal_list_get_next(root_node);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + node = root_node;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  if (NULL == node) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orte_show_help(&quot;help-rmaps_rank_file.txt&quot;,&quot;bad-host&quot;, true,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rfmap-&gt;node_name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -631,6 +649,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  case ORTE_RANKFILE_IPV6:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  case ORTE_RANKFILE_STRING:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  case ORTE_RANKFILE_INT:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + case ORTE_RANKFILE_RELATIVE:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  if(ORTE_RANKFILE_INT == token) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  sprintf(buff,&quot;%d&quot;, orte_rmaps_rank_file_value.ival);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  value = buff;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Index: orte/mca/rmaps/rank_file/rmaps_rank_file_lex.l
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- orte/mca/rmaps/rank_file/rmaps_rank_file_lex.l (revision 21529)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ orte/mca/rmaps/rank_file/rmaps_rank_file_lex.l (working copy)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -111,6 +111,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orte_rmaps_rank_file_value.sval = yytext;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  return ORTE_RANKFILE_HOSTNAME; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +\+n[0-9]+ { orte_rmaps_rank_file_value.sval = yytext;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + return ORTE_RANKFILE_RELATIVE; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; . { orte_rmaps_rank_file_value.sval = yytext;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  return ORTE_RANKFILE_ERROR; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;rankfile.patch&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6361/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6362.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21543"</a>
<li><strong>Previous message:</strong> <a href="6360.php">George Bosilca: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6357.php">Ralph Castain: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
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
