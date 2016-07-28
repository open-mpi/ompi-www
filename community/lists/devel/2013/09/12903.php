<?
$subject_val = "[OMPI devel] 1.7.3 warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 15 14:14:27 2013" -->
<!-- isoreceived="20130915181427" -->
<!-- sent="Sun, 15 Sep 2013 11:14:23 -0700" -->
<!-- isosent="20130915181423" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.3 warnings" -->
<!-- id="659E7B4D-0AF5-4F19-85C6-1391EDDFF0D4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.3 warnings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-15 14:14:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12904.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor"</a>
<li><strong>Previous message:</strong> <a href="12902.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I'm admittedly using a very picky compiler, but the warnings I've checked so far are all correct - there are a *lot* of set-but-unused variables in the 1.7.3 code base (and in the trunk as well). I'll tackle the opal and orte ones - can folks please help with the ompi layer?
<br>
<p>cmd_line.c: In function 'opal_cmd_line_parse':
<br>
cmd_line.c:269:10: warning: variable 'has_unknowns' set but not used [-Wunused-but-set-variable]
<br>
printf.c: In function 'guess_strlen':
<br>
printf.c:43:17: warning: variable 'carg' set but not used [-Wunused-but-set-variable]
<br>
show_help_lex.c:1181:16: warning: 'input' defined but not used [-Wunused-function]
<br>
mca_base_var.c: In function 'mca_base_var_dump':
<br>
mca_base_var.c:1757:17: warning: variable 'project' set but not used [-Wunused-but-set-variable]
<br>
mca_base_var_enum.c: In function 'enum_dump':
<br>
mca_base_var_enum.c:133:12: warning: variable 'len' set but not used [-Wunused-but-set-variable]
<br>
base/hwloc_base_util.c: In function 'opal_hwloc_base_get_obj_by_type':
<br>
base/hwloc_base_util.c:872:18: warning: variable 'num_objs' set but not used [-Wunused-but-set-variable]
<br>
evutil_rand.c: In function 'ev_arc4random_buf':
<br>
evutil_rand.c:73:21: warning: the comparison will always evaluate as 'true' for the address of 'arc4random_buf' will never be NULL [-Waddress]
<br>
if_posix.c: In function 'if_posix_open':
<br>
if_posix.c:69:18: warning: variable 'num' set but not used [-Wunused-but-set-variable]
<br>
class/opal_tree.c: In function 'opal_tree_dup_item':
<br>
class/opal_tree.c:569:9: warning: variable 'ret' set but not used [-Wunused-but-set-variable]
<br>
class/opal_tree.c: In function 'opal_tree_find_with':
<br>
class/opal_tree.c:673:23: warning: variable 'root' set but not used [-Wunused-but-set-variable]
<br>
class/opal_graph.c: In function 'opal_graph_add_edge':
<br>
class/opal_graph.c:281:60: warning: variable 'end_aj_list' set but not used [-Wunused-but-set-variable]
<br>
runtime/opal_cr.c: In function 'opal_cr_refresh_environ':
<br>
runtime/opal_cr.c:920:9: warning: variable 'val' set but not used [-Wunused-but-set-variable]
<br>
base/odls_base_default_fns.c: In function 'orte_odls_base_default_launch_local':
<br>
base/odls_base_default_fns.c:1044:20: warning: variable 'alert' set but not used [-Wunused-but-set-variable]
<br>
base/rmaps_base_ranking.c: In function 'rank_span':
<br>
base/rmaps_base_ranking.c:57:21: warning: variable 'map' set but not used [-Wunused-but-set-variable]
<br>
base/rmaps_base_ranking.c: In function 'rank_fill':
<br>
base/rmaps_base_ranking.c:175:21: warning: variable 'map' set but not used [-Wunused-but-set-variable]
<br>
base/rmaps_base_ranking.c: In function 'rank_by':
<br>
base/rmaps_base_ranking.c:281:21: warning: variable 'map' set but not used [-Wunused-but-set-variable]
<br>
base/rml_base_frame.c: In function 'orte_rml_base_select':
<br>
base/rml_base_frame.c:112:24: warning: variable 'wrapper_module' set but not used [-Wunused-but-set-variable]
<br>
base/rml_base_frame.c:110:9: warning: variable 'wrapper_priority' set but not used [-Wunused-but-set-variable]
<br>
base/snapc_base_fns.c: In function 'snapc_none_global_cmdline_request':
<br>
base/snapc_base_fns.c:360:14: warning: variable 'exit_status' set but not used [-Wunused-but-set-variable]
<br>
runtime/orte_quit.c: In function 'dump_aborted_procs':
<br>
runtime/orte_quit.c:151:25: warning: variable 'app' set but not used [-Wunused-but-set-variable]
<br>
util/hostfile/hostfile_lex.c:1653:16: warning: 'input' defined but not used [-Wunused-function]
<br>
util/dash_host/dash_host.c: In function 'orte_util_filter_dash_host_nodes':
<br>
util/dash_host/dash_host.c:238:10: warning: variable 'found' set but not used [-Wunused-but-set-variable]
<br>
util/regex.c: In function 'regex_parse_node_range':
<br>
util/regex.c:521:23: warning: variable 'str_end' set but not used [-Wunused-but-set-variable]
<br>
util/regex.c:521:12: warning: variable 'str_start' set but not used [-Wunused-but-set-variable]
<br>
orted/orted_main.c: In function 'orte_daemon':
<br>
orted/orted_main.c:244:11: warning: variable 'tmp_env_var' set but not used [-Wunused-but-set-variable]
<br>
errmgr_default_orted.c: In function 'proc_errors':
<br>
errmgr_default_orted.c:216:18: warning: variable 'pptr' set but not used [-Wunused-but-set-variable]
<br>
odls_default_module.c: In function 'send_error_show_help':
<br>
odls_default_module.c:369:9: warning: variable 'ret' set but not used [-Wunused-but-set-variable]
<br>
oob_tcp.c: In function 'mca_oob_tcp_init':
<br>
oob_tcp.c:1800:18: warning: variable 'jobid' set but not used [-Wunused-but-set-variable]
<br>
oob_tcp_peer.c: In function 'mca_oob_tcp_peer_lookup':
<br>
oob_tcp_peer.c:225:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
oob_tcp_peer.c: In function 'mca_oob_tcp_peer_recv_handler':
<br>
oob_tcp_peer.c:910:21: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
rmaps_resilient.c: In function 'map_to_ftgrps':
<br>
rmaps_resilient.c:691:18: warning: variable 'proc' set but not used [-Wunused-but-set-variable]
<br>
rmaps_lama_module.c: In function 'orte_rmaps_lama_map_core':
<br>
rmaps_lama_module.c:585:20: warning: variable 'num_nodes' set but not used [-Wunused-but-set-variable]
<br>
rmaps_lama_max_tree.c: In function 'rmaps_lama_find_nth_subtree_match':
<br>
rmaps_lama_max_tree.c:866:9: warning: variable 'ret' set but not used [-Wunused-but-set-variable]
<br>
rmaps_rank_file.c: In function 'orte_rmaps_rf_map':
<br>
rmaps_rank_file.c:75:21: warning: variable 'num_nodes' set but not used [-Wunused-but-set-variable]
<br>
rmaps_rank_file.c: In function 'orte_rmaps_rank_file_parse':
<br>
rmaps_rank_file.c:358:11: warning: variable 'username' set but not used [-Wunused-but-set-variable]
<br>
rmaps_rank_file_lex.c:1408:16: warning: 'input' defined but not used [-Wunused-function]
<br>
rmaps_rr.c: In function 'orte_rmaps_rr_map':
<br>
rmaps_rr.c:51:21: warning: variable 'num_nodes' set but not used [-Wunused-but-set-variable]
<br>
rmaps_rr_mappers.c: In function 'orte_rmaps_rr_byobj':
<br>
rmaps_rr_mappers.c:428:10: warning: variable 'oversubscribed' set but not used [-Wunused-but-set-variable]
<br>
routed_binomial.c: In function 'binomial_tree':
<br>
routed_binomial.c:843:25: warning: variable 'proc_name' set but not used [-Wunused-but-set-variable]
<br>
orte-clean.c: In function 'main':
<br>
orte-clean.c:128:11: warning: variable 'tmp_env_var' set but not used [-Wunused-but-set-variable]
<br>
orte-ps.c: In function 'orte_ps_init':
<br>
orte-ps.c:370:12: warning: variable 'tmp_env_var' set but not used [-Wunused-but-set-variable]
<br>
orte-ps.c: In function 'pretty_print_jobs':
<br>
orte-ps.c:536:12: warning: variable 'state_str' set but not used [-Wunused-but-set-variable]
<br>
orte-ps.c: In function 'pretty_print_vpids':
<br>
orte-ps.c:645:11: warning: variable 'state_str' set but not used [-Wunused-but-set-variable]
<br>
orterun.c: In function 'orterun':
<br>
orterun.c:551:11: warning: variable 'tmp_env_var' set but not used [-Wunused-but-set-variable]
<br>
orte-server.c: In function 'main':
<br>
orte-server.c:111:12: warning: variable 'tmp_env_var' set but not used [-Wunused-but-set-variable]
<br>
In file included from pimprobe.c:18:0:
<br>
../../../../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../../../../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pimrecv.c:18:0:
<br>
../../../../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../../../../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pmessage_f2c.c:26:0:
<br>
../../../../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../../../../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pmessage_c2f.c:27:0:
<br>
../../../../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../../../../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pmprobe.c:19:0:
<br>
../../../../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../../../../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pmrecv.c:18:0:
<br>
../../../../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../../../../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from improbe.c:18:0:
<br>
../../../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../../../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from imrecv.c:18:0:
<br>
../../../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../../../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from message_f2c.c:26:0:
<br>
../../../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../../../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from message_c2f.c:27:0:
<br>
../../../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../../../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from mprobe.c:19:0:
<br>
../../../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../../../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from mrecv.c:18:0:
<br>
../../../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../../../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
base/bcol_base_frame.c: In function 'mca_bcol_base_fn_table_destroy':
<br>
base/bcol_base_frame.c:272:22: warning: variable 'tmp_list' set but not used [-Wunused-but-set-variable]
<br>
In file included from message/message.c:16:0:
<br>
../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from runtime/ompi_mpi_init.c:61:0:
<br>
../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from runtime/ompi_mpi_finalize.c:55:0:
<br>
../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
runtime/ompi_cr.c: In function 'notify_collectives':
<br>
runtime/ompi_cr.c:119:17: warning: variable 'ret' set but not used [-Wunused-but-set-variable]
<br>
bcol_basesmuma_rd_nb_barrier.c: In function 'bcol_basesmuma_rd_nb_barrier_init_admin':
<br>
bcol_basesmuma_rd_nb_barrier.c:39:30: warning: variable 'pow_2' set but not used [-Wunused-but-set-variable]
<br>
bcol_basesmuma_rd_nb_barrier.c: In function 'bcol_basesmuma_rd_nb_barrier_progress_admin':
<br>
bcol_basesmuma_rd_nb_barrier.c:209:30: warning: variable 'pow_2' set but not used [-Wunused-but-set-variable]
<br>
bcol_basesmuma_bcast_prime.c: In function 'bcol_basesmuma_bcast_k_nomial_anyroot':
<br>
bcol_basesmuma_bcast_prime.c:267:20: warning: variable 'my_data_pointer' set but not used [-Wunused-but-set-variable]
<br>
bcol_basesmuma_bcast_prime.c:257:9: warning: variable 'pow_k_levels' set but not used [-Wunused-but-set-variable]
<br>
btl_self.c: In function 'mca_btl_self_alloc':
<br>
btl_self.c:129:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
btl_self.c: In function 'mca_btl_self_prepare_dst':
<br>
btl_self.c:259:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
btl_sm.c: In function 'mca_btl_sm_alloc':
<br>
btl_sm.c:626:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
btl_sm_component.c: In function 'mca_btl_sm_component_progress':
<br>
btl_sm_component.c:619:27: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
btl_tcp.c: In function 'mca_btl_tcp_alloc':
<br>
btl_tcp.c:177:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
btl_tcp.c: In function 'mca_btl_tcp_prepare_dst':
<br>
btl_tcp.c:329:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
btl_tcp_endpoint.c: In function 'mca_btl_tcp_endpoint_recv_handler':
<br>
btl_tcp_endpoint.c:709:21: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
coll_inter.c: In function 'mca_coll_inter_module_enable':
<br>
coll_inter_allreduce.c: In function 'mca_coll_inter_allreduce_inter':coll_inter.c:147:15: warning: variable 'rank' set but not used [-Wunused-but-set-variable]
<br>
<p>coll_inter.c:147:9: warning: variable 'size' set but not used [-Wunused-but-set-variable]
<br>
coll_inter_allreduce.c:47:30: warning: variable 'rsize' set but not used [-Wunused-but-set-variable]
<br>
coll_inter_bcast.c: In function 'mca_coll_inter_bcast_inter':
<br>
coll_inter_bcast.c:44:9: warning: variable 'rsize' set but not used [-Wunused-but-set-variable]
<br>
coll_inter_reduce.c: In function 'mca_coll_inter_reduce_inter':
<br>
coll_inter_reduce.c:46:20: warning: variable 'size' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_allocation.c:18:0:
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_module.c:43:0:
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
coll_ml_module.c: In function 'ml_init_k_nomial_trees':
<br>
coll_ml_module.c:627:10: warning: variable 'list' set but not used [-Wunused-but-set-variable]
<br>
coll_ml_module.c: In function 'mca_coll_ml_tree_hierarchy_discovery':
<br>
coll_ml_module.c:1942:44: warning: variable 'bcol_component' set but not used [-Wunused-but-set-variable]
<br>
coll_ml_module.c: In function 'mca_coll_ml_fill_in_route_tab':
<br>
coll_ml_module.c:2705:26: warning: variable 'ompi_procs' set but not used [-Wunused-but-set-variable]
<br>
coll_ml_module.c: In function 'mca_coll_ml_comm_query':
<br>
coll_ml_module.c:3263:24: warning: variable 'tic' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_barrier.c:21:0:
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
coll_ml_barrier.c: In function 'mca_coll_ml_barrier_launch':
<br>
coll_ml_barrier.c:35:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_bcast.c:26:0:
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_component.c:33:0:
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_copy_fns.c:21:0:
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_descriptors.c:12:0:
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_hier_algorithms.c:13:0:
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_hier_algorithms_setup.c:14:0:
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_hier_algorithms_bcast_setup.c:14:0:
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_hier_algorithms_common_setup.c:14:0:
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_hier_algorithm_memsync_setup.c:14:0:
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_custom_utils.c:32:0:
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_mca.c:25:0:
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_lmngr.c:15:0:
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_hier_algorithms_barrier_setup.c:14:0:
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_select.h:12:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from coll_ml_select.c:14:
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from coll_ml_memsync.c:21:0:
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
../../../../ompi/mca/coll/ml/coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
coll_ml_lex.c:1365:16: warning: 'input' defined but not used [-Wunused-function]
<br>
In file included from coll_ml_config.c:25:0:
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_dag':
<br>
coll_ml_inlines.h:470:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
coll_ml_inlines.h: In function 'mca_coll_ml_alloc_op_prog_single_frag_seq':
<br>
coll_ml_inlines.h:533:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
coll_sm_reduce.c: In function 'reduce_inorder':
<br>
coll_sm_reduce.c:235:14: warning: variable 'sbuf_copied_to_rbuf' set but not used [-Wunused-but-set-variable]
<br>
osc_pt2pt_data_move.c: In function 'ompi_osc_pt2pt_sendreq_recv_accum_long_cb':
<br>
osc_pt2pt_data_move.c:643:9: warning: variable 'ret' set but not used [-Wunused-but-set-variable]
<br>
osc_pt2pt_sync.c: In function 'ompi_osc_pt2pt_passive_lock':
<br>
osc_pt2pt_sync.c:528:9: warning: variable 'ret' set but not used [-Wunused-but-set-variable]
<br>
osc_rdma_data_move.c: In function 'ompi_osc_rdma_sendreq_recv_accum_long_cb':
<br>
osc_rdma_data_move.c:945:9: warning: variable 'ret' set but not used [-Wunused-but-set-variable]
<br>
osc_rdma_data_move.c: In function 'ompi_osc_rdma_control_send_cb':
<br>
osc_rdma_data_move.c:1313:37: warning: variable 'header' set but not used [-Wunused-but-set-variable]
<br>
osc_rdma_sync.c: In function 'ompi_osc_rdma_passive_lock':
<br>
osc_rdma_sync.c:632:9: warning: variable 'ret' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_cm_recv.c:21:0:
<br>
../../../../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../../../../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_bfo.c:49:0:
<br>
pml_bfo_recvreq.h: In function 'mca_pml_bfo_recv_request_ack_send':
<br>
pml_bfo_recvreq.h:432:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
pml_bfo.c: In function 'mca_pml_bfo_send_fin':
<br>
pml_bfo.c:509:9: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
pml_bfo.c:542:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_bfo_component.c:31:0:
<br>
pml_bfo_recvreq.h: In function 'mca_pml_bfo_recv_request_ack_send':
<br>
pml_bfo_recvreq.h:432:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_bfo_failover.c:42:0:
<br>
pml_bfo_recvreq.h: In function 'mca_pml_bfo_recv_request_ack_send':
<br>
pml_bfo_recvreq.h:432:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_bfo_iprobe.c:22:0:
<br>
../../../../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../../../../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_bfo_iprobe.c:23:0:
<br>
pml_bfo_recvreq.h: In function 'mca_pml_bfo_recv_request_ack_send':
<br>
pml_bfo_recvreq.h:432:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_bfo_irecv.c:24:0:
<br>
pml_bfo_recvreq.h: In function 'mca_pml_bfo_recv_request_ack_send':
<br>
pml_bfo_recvreq.h:432:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_bfo_irecv.c:27:0:
<br>
../../../../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../../../../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_bfo_isend.c:26:0:
<br>
pml_bfo_recvreq.h: In function 'mca_pml_bfo_recv_request_ack_send':
<br>
pml_bfo_recvreq.h:432:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_bfo_recvfrag.c:41:0:
<br>
pml_bfo_recvreq.h: In function 'mca_pml_bfo_recv_request_ack_send':
<br>
pml_bfo_recvreq.h:432:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
pml_bfo_recvfrag.c: In function 'append_frag_to_list':
<br>
pml_bfo_recvfrag.c:72:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
pml_bfo_recvfrag.c: In function 'match_one':
<br>
pml_bfo_recvfrag.c:493:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_bfo_recvreq.c:31:0:
<br>
pml_bfo_recvreq.h: In function 'mca_pml_bfo_recv_request_ack_send':
<br>
pml_bfo_recvreq.h:432:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_bfo_sendreq.c:35:0:
<br>
pml_bfo_recvreq.h: In function 'mca_pml_bfo_recv_request_ack_send':
<br>
pml_bfo_recvreq.h:432:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
pml_bfo_sendreq.c: In function 'mca_pml_bfo_send_request_copy_in_out':
<br>
pml_bfo_sendreq.c:966:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_bfo_start.c:24:0:
<br>
pml_bfo_recvreq.h: In function 'mca_pml_bfo_recv_request_ack_send':
<br>
pml_bfo_recvreq.h:432:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_ob1.c:49:0:
<br>
pml_ob1_recvreq.h: In function 'mca_pml_ob1_recv_request_ack_send':
<br>
pml_ob1_recvreq.h:424:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
pml_ob1.c: In function 'mca_pml_ob1_send_fin':
<br>
pml_ob1.c:488:9: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
pml_ob1.c:514:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_ob1_component.c:33:0:
<br>
pml_ob1_recvreq.h: In function 'mca_pml_ob1_recv_request_ack_send':
<br>
pml_ob1_recvreq.h:424:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_ob1_iprobe.c:23:0:
<br>
../../../../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../../../../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_ob1_iprobe.c:24:0:
<br>
pml_ob1_recvreq.h: In function 'mca_pml_ob1_recv_request_ack_send':
<br>
pml_ob1_recvreq.h:424:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_ob1_irecv.c:25:0:
<br>
pml_ob1_recvreq.h: In function 'mca_pml_ob1_recv_request_ack_send':
<br>
pml_ob1_recvreq.h:424:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_ob1_irecv.c:28:0:
<br>
../../../../ompi/message/message.h: In function 'ompi_message_alloc':
<br>
../../../../ompi/message/message.h:59:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_ob1_isend.c:25:0:
<br>
pml_ob1_recvreq.h: In function 'mca_pml_ob1_recv_request_ack_send':
<br>
pml_ob1_recvreq.h:424:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_ob1_recvfrag.c:44:0:
<br>
pml_ob1_recvreq.h: In function 'mca_pml_ob1_recv_request_ack_send':
<br>
pml_ob1_recvreq.h:424:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
pml_ob1_recvfrag.c: In function 'append_frag_to_list':
<br>
pml_ob1_recvfrag.c:76:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
pml_ob1_recvfrag.c: In function 'match_one':
<br>
pml_ob1_recvfrag.c:512:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_ob1_recvreq.c:33:0:
<br>
pml_ob1_recvreq.h: In function 'mca_pml_ob1_recv_request_ack_send':
<br>
pml_ob1_recvreq.h:424:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_ob1_sendreq.c:36:0:
<br>
pml_ob1_recvreq.h: In function 'mca_pml_ob1_recv_request_ack_send':
<br>
pml_ob1_recvreq.h:424:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
pml_ob1_sendreq.c: In function 'mca_pml_ob1_send_request_copy_in_out':
<br>
pml_ob1_sendreq.c:871:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from pml_ob1_start.c:24:0:
<br>
pml_ob1_recvreq.h: In function 'mca_pml_ob1_recv_request_ack_send':
<br>
pml_ob1_recvreq.h:424:5: warning: variable '_rc' set but not used [-Wunused-but-set-variable]
<br>
rcache_vma_tree.c: In function 'mca_rcache_vma_new':
<br>
rcache_vma_tree.c:111:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
sbgp_basesmsocket_component.c: In function 'mca_sbgp_basesmsocket_select_procs':
<br>
sbgp_basesmsocket_component.c:262:42: warning: variable 'my_index' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_component.c:14:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_matching_log_prepare':
<br>
vprotocol_pessimist_eventlog.h:46:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_component.c:14:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_delivery_log':
<br>
vprotocol_pessimist_eventlog.h:205:13: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
vprotocol_pessimist_eventlog.h:217:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist.c:11:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_matching_log_prepare':
<br>
vprotocol_pessimist_eventlog.h:46:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist.c:11:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_delivery_log':
<br>
vprotocol_pessimist_eventlog.h:205:13: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
vprotocol_pessimist_eventlog.h:217:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist_request.c:13:0:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_matching_log_prepare':
<br>
vprotocol_pessimist_eventlog.h:46:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist_request.c:13:0:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_delivery_log':
<br>
vprotocol_pessimist_eventlog.h:205:13: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
vprotocol_pessimist_eventlog.h:217:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_proc.c:12:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_matching_log_prepare':
<br>
vprotocol_pessimist_eventlog.h:46:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_proc.c:12:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_delivery_log':
<br>
vprotocol_pessimist_eventlog.h:205:13: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
vprotocol_pessimist_eventlog.h:217:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_comm.c:12:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_matching_log_prepare':
<br>
vprotocol_pessimist_eventlog.h:46:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_comm.c:12:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_delivery_log':
<br>
vprotocol_pessimist_eventlog.h:205:13: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
vprotocol_pessimist_eventlog.h:217:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_sender_based.h:19,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_progress.c:12:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_matching_log_prepare':
<br>
vprotocol_pessimist_eventlog.h:46:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_sender_based.h:19,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_progress.c:12:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_delivery_log':
<br>
vprotocol_pessimist_eventlog.h:205:13: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
vprotocol_pessimist_eventlog.h:217:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_start.c:12:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_matching_log_prepare':
<br>
vprotocol_pessimist_eventlog.h:46:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_recv.c:14:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_matching_log_prepare':
<br>
vprotocol_pessimist_eventlog.h:46:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_start.c:12:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_delivery_log':
<br>
vprotocol_pessimist_eventlog.h:205:13: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
vprotocol_pessimist_eventlog.h:217:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_recv.c:14:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_delivery_log':
<br>
vprotocol_pessimist_eventlog.h:205:13: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
vprotocol_pessimist_eventlog.h:217:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_send.c:12:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_matching_log_prepare':
<br>
vprotocol_pessimist_eventlog.h:46:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_send.c:12:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_delivery_log':
<br>
vprotocol_pessimist_eventlog.h:205:13: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
vprotocol_pessimist_eventlog.h:217:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_probe.c:12:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_matching_log_prepare':
<br>
vprotocol_pessimist_eventlog.h:46:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_probe.c:12:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_delivery_log':
<br>
vprotocol_pessimist_eventlog.h:205:13: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
vprotocol_pessimist_eventlog.h:217:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_wait.c:12:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_matching_log_prepare':
<br>
vprotocol_pessimist_eventlog.h:46:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_wait.c:12:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_delivery_log':
<br>
vprotocol_pessimist_eventlog.h:205:13: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
vprotocol_pessimist_eventlog.h:217:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist_eventlog.c:14:0:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_matching_log_prepare':
<br>
vprotocol_pessimist_eventlog.h:46:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist_eventlog.c:14:0:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_delivery_log':
<br>
vprotocol_pessimist_eventlog.h:205:13: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
vprotocol_pessimist_eventlog.h:217:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_sender_based.h:19,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_sender_based.c:12:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_matching_log_prepare':
<br>
vprotocol_pessimist_eventlog.h:46:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
In file included from vprotocol_pessimist.h:107:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_sender_based.h:19,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from vprotocol_pessimist_sender_based.c:12:
<br>
vprotocol_pessimist_eventlog.h: In function 'vprotocol_pessimist_delivery_log':
<br>
vprotocol_pessimist_eventlog.h:205:13: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
vprotocol_pessimist_eventlog.h:217:9: warning: variable 'rc' set but not used [-Wunused-but-set-variable]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12904.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor"</a>
<li><strong>Previous message:</strong> <a href="12902.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
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
