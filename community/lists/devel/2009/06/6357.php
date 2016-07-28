<?
$subject_val = "Re: [OMPI devel] rankfile relative host claiming option patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 23:37:34 2009" -->
<!-- isoreceived="20090626033734" -->
<!-- sent="Thu, 25 Jun 2009 21:37:17 -0600" -->
<!-- isosent="20090626033717" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] rankfile relative host claiming option patch" -->
<!-- id="1814895D-962B-4E7A-B7BB-F45881D432DD_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="913E1092-0834-475F-BC4F-5F4227500132_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 23:37:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6358.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6356.php">Ralph Castain: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<li><strong>In reply to:</strong> <a href="6356.php">Ralph Castain: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6361.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<li><strong>Reply:</strong> <a href="6361.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Forget that comment, Lenny - I think this actually looks fine. The  
<br>
relative notation currently is only used in the allocators, not the  
<br>
mappers, so this is fine.
<br>
<p>Sorry for the confusion.
<br>
Ralph
<br>
<p>On Jun 25, 2009, at 2:50 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Question: for all other mappers, the relative rank is given with  
</span><br>
<span class="quotelev1">&gt; respect to the allocation. It looks here like you are doing it  
</span><br>
<span class="quotelev1">&gt; relative to the list of nodes, which is compiled from the allocation  
</span><br>
<span class="quotelev1">&gt; passed through hostfile and -host options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you want to conform to the behavior of the other mappers? Or do  
</span><br>
<span class="quotelev1">&gt; something different here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 25, 2009, at 10:10 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; Proposed small patch to extend current rankfile syntax to be  
</span><br>
<span class="quotelev2">&gt;&gt; compliant with orte_hosts syntax
</span><br>
<span class="quotelev2">&gt;&gt; making it possible to claim relative hosts from the hostfile/ 
</span><br>
<span class="quotelev2">&gt;&gt; scheduler
</span><br>
<span class="quotelev2">&gt;&gt; by using +n# hostname, where  0 &lt;= # &lt; np
</span><br>
<span class="quotelev2">&gt;&gt; ex:
</span><br>
<span class="quotelev2">&gt;&gt; cat ~/work/svn/hpc/dev/test/Rankfile/rankfile
</span><br>
<span class="quotelev2">&gt;&gt; rank 0=+n0 slot=0
</span><br>
<span class="quotelev2">&gt;&gt; rank 1=+n0 slot=1
</span><br>
<span class="quotelev2">&gt;&gt; rank 2=+n1 slot=2
</span><br>
<span class="quotelev2">&gt;&gt; rank 3=+n1 slot=1
</span><br>
<span class="quotelev2">&gt;&gt; for your review and blessing before I commit it to the trunk.
</span><br>
<span class="quotelev2">&gt;&gt; I also ask to add it to 1.3 branch.
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: orte/mca/rmaps/rank_file/help-rmaps_rank_file.txt
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- orte/mca/rmaps/rank_file/help-rmaps_rank_file.txt (revision  
</span><br>
<span class="quotelev2">&gt;&gt; 21529)
</span><br>
<span class="quotelev2">&gt;&gt; +++ orte/mca/rmaps/rank_file/help-rmaps_rank_file.txt (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -56,6 +56,9 @@
</span><br>
<span class="quotelev2">&gt;&gt; Please review your rank-slot assignments and your host allocation  
</span><br>
<span class="quotelev2">&gt;&gt; to ensure
</span><br>
<span class="quotelev2">&gt;&gt; a proper match.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +[bad-index]
</span><br>
<span class="quotelev2">&gt;&gt; +Rankfile claimed host %s by index that is bigger than number of  
</span><br>
<span class="quotelev2">&gt;&gt; allocated hosts.
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; [orte-rmaps-rf:alloc-error]
</span><br>
<span class="quotelev2">&gt;&gt; There are not enough slots available in the system to satisfy the  
</span><br>
<span class="quotelev2">&gt;&gt; %d slots
</span><br>
<span class="quotelev2">&gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev2">&gt;&gt; Index: orte/mca/rmaps/rank_file/rmaps_rank_file_lex.h
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- orte/mca/rmaps/rank_file/rmaps_rank_file_lex.h (revision 21529)
</span><br>
<span class="quotelev2">&gt;&gt; +++ orte/mca/rmaps/rank_file/rmaps_rank_file_lex.h (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -75,6 +75,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_RANKFILE_NEWLINE 13
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_RANKFILE_IPV6 14
</span><br>
<span class="quotelev2">&gt;&gt; #define ORTE_RANKFILE_SLOT 15
</span><br>
<span class="quotelev2">&gt;&gt; +#define ORTE_RANKFILE_RELATIVE 16
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #if defined(c_plusplus) || defined(__cplusplus)
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; Index: orte/mca/rmaps/rank_file/rmaps_rank_file.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- orte/mca/rmaps/rank_file/rmaps_rank_file.c (revision 21529)
</span><br>
<span class="quotelev2">&gt;&gt; +++ orte/mca/rmaps/rank_file/rmaps_rank_file.c (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -273,11 +273,11 @@
</span><br>
<span class="quotelev2">&gt;&gt;  orte_vpid_t total_procs;
</span><br>
<span class="quotelev2">&gt;&gt;  opal_list_t node_list;
</span><br>
<span class="quotelev2">&gt;&gt;  opal_list_item_t *item;
</span><br>
<span class="quotelev2">&gt;&gt; - orte_node_t *node, *nd;
</span><br>
<span class="quotelev2">&gt;&gt; + orte_node_t *node, *nd, *root_node;
</span><br>
<span class="quotelev2">&gt;&gt;  orte_vpid_t rank, vpid_start;
</span><br>
<span class="quotelev2">&gt;&gt;  orte_std_cntr_t num_nodes, num_slots;
</span><br>
<span class="quotelev2">&gt;&gt;  orte_rmaps_rank_file_map_t *rfmap;
</span><br>
<span class="quotelev2">&gt;&gt; - orte_std_cntr_t slots_per_node;
</span><br>
<span class="quotelev2">&gt;&gt; + orte_std_cntr_t slots_per_node, relative_index, tmp_cnt;
</span><br>
<span class="quotelev2">&gt;&gt;  int rc;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  /* convenience def */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -411,7 +411,25 @@
</span><br>
<span class="quotelev2">&gt;&gt;  0 == strcmp(nd-&gt;name, rfmap-&gt;node_name)) {
</span><br>
<span class="quotelev2">&gt;&gt;  node = nd;
</span><br>
<span class="quotelev2">&gt;&gt;  break;
</span><br>
<span class="quotelev2">&gt;&gt; - }
</span><br>
<span class="quotelev2">&gt;&gt; + } else if (NULL != rfmap-&gt;node_name &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; + (('+' == rfmap-&gt;node_name[0]) &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt; + (('n' == rfmap-&gt;node_name[1]) ||
</span><br>
<span class="quotelev2">&gt;&gt; + ('N' == rfmap-&gt;node_name[1])))) {
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; + relative_index=atoi(strtok(rfmap-&gt;node_name,&quot;+n&quot;));
</span><br>
<span class="quotelev2">&gt;&gt; + if ( relative_index &gt;= opal_list_get_size (&amp;node_list) || ( 0 &gt;  
</span><br>
<span class="quotelev2">&gt;&gt; relative_index)){
</span><br>
<span class="quotelev2">&gt;&gt; + orte_show_help(&quot;help-rmaps_rank_file.txt&quot;,&quot;bad-index&quot;, true,rfmap- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;node_name);
</span><br>
<span class="quotelev2">&gt;&gt; + ORTE_ERROR_LOG(ORTE_ERR_BAD_PARAM);
</span><br>
<span class="quotelev2">&gt;&gt; + return ORTE_ERR_BAD_PARAM;
</span><br>
<span class="quotelev2">&gt;&gt; + }
</span><br>
<span class="quotelev2">&gt;&gt; + root_node = (orte_node_t*) opal_list_get_first(&amp;node_list);
</span><br>
<span class="quotelev2">&gt;&gt; + for(tmp_cnt=0; tmp_cnt&lt;relative_index; tmp_cnt++) {
</span><br>
<span class="quotelev2">&gt;&gt; + root_node = (orte_node_t*) opal_list_get_next(root_node);
</span><br>
<span class="quotelev2">&gt;&gt; + }
</span><br>
<span class="quotelev2">&gt;&gt; + node = root_node;
</span><br>
<span class="quotelev2">&gt;&gt; + break;
</span><br>
<span class="quotelev2">&gt;&gt; + }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;  if (NULL == node) {
</span><br>
<span class="quotelev2">&gt;&gt;  orte_show_help(&quot;help-rmaps_rank_file.txt&quot;,&quot;bad-host&quot;, true, rfmap- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;node_name);
</span><br>
<span class="quotelev2">&gt;&gt; @@ -631,6 +649,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  case ORTE_RANKFILE_IPV6:
</span><br>
<span class="quotelev2">&gt;&gt;  case ORTE_RANKFILE_STRING:
</span><br>
<span class="quotelev2">&gt;&gt;  case ORTE_RANKFILE_INT:
</span><br>
<span class="quotelev2">&gt;&gt; + case ORTE_RANKFILE_RELATIVE:
</span><br>
<span class="quotelev2">&gt;&gt;  if(ORTE_RANKFILE_INT == token) {
</span><br>
<span class="quotelev2">&gt;&gt;  sprintf(buff,&quot;%d&quot;, orte_rmaps_rank_file_value.ival);
</span><br>
<span class="quotelev2">&gt;&gt;  value = buff;
</span><br>
<span class="quotelev2">&gt;&gt; Index: orte/mca/rmaps/rank_file/rmaps_rank_file_lex.l
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- orte/mca/rmaps/rank_file/rmaps_rank_file_lex.l (revision 21529)
</span><br>
<span class="quotelev2">&gt;&gt; +++ orte/mca/rmaps/rank_file/rmaps_rank_file_lex.l (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -111,6 +111,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;  orte_rmaps_rank_file_value.sval = yytext;
</span><br>
<span class="quotelev2">&gt;&gt;  return ORTE_RANKFILE_HOSTNAME; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +\+n[0-9]+ { orte_rmaps_rank_file_value.sval = yytext;
</span><br>
<span class="quotelev2">&gt;&gt; + return ORTE_RANKFILE_RELATIVE; }
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; . { orte_rmaps_rank_file_value.sval = yytext;
</span><br>
<span class="quotelev2">&gt;&gt;  return ORTE_RANKFILE_ERROR; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;rankfile.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6358.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6356.php">Ralph Castain: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<li><strong>In reply to:</strong> <a href="6356.php">Ralph Castain: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6361.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
<li><strong>Reply:</strong> <a href="6361.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile relative host claiming option patch"</a>
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
