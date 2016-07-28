<?
$subject_val = "[OMPI devel] compile error in v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 00:55:03 2014" -->
<!-- isoreceived="20140227055503" -->
<!-- sent="Thu, 27 Feb 2014 07:55:01 +0200" -->
<!-- isosent="20140227055501" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] compile error in v1.7" -->
<!-- id="CAAO1KyZpDyv_jO+PdGEcZWYjte2r9CFuJYGX2Yk5ceTpAmgNdw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] compile error in v1.7<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 00:55:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14241.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Previous message:</strong> <a href="14239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14242.php">Ralph Castain: "Re: [OMPI devel] compile error in v1.7"</a>
<li><strong>Reply:</strong> <a href="14242.php">Ralph Castain: "Re: [OMPI devel] compile error in v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*07:32:17* make[2]: Entering directory
<br>
`/scrap/jenkins/workspace/ompi-vendor-gerrit/label/hpc/orte'*07:32:17*
<br>
&nbsp;&nbsp;CC       runtime/orte_finalize.lo*07:32:17*   CC
<br>
runtime/orte_init.lo*07:32:17*   CC
<br>
runtime/orte_locks.lo*07:32:17*   CC
<br>
runtime/orte_globals.lo*07:32:18*   CC
<br>
runtime/orte_quit.lo*07:32:18*   CC
<br>
runtime/data_type_support/orte_dt_compare_fns.lo*07:32:18*   CC
<br>
runtime/data_type_support/orte_dt_copy_fns.lo*07:32:19*   CC
<br>
runtime/data_type_support/orte_dt_print_fns.lo*07:32:19*   CC
<br>
runtime/data_type_support/orte_dt_packing_fns.lo*07:32:20*   CC
<br>
runtime/data_type_support/orte_dt_unpacking_fns.lo*07:32:20*   CC
<br>
&nbsp;runtime/orte_mca_params.lo*07:32:20*   CC
<br>
runtime/orte_wait.lo*07:32:21*   CC       runtime/orte_cr.lo*07:32:21*
<br>
&nbsp;&nbsp;CC       runtime/orte_data_server.lo*07:32:21*   CC
<br>
runtime/orte_info_support.lo*07:32:21*   CC
<br>
util/error_strings.lo*07:32:22*   CC       util/name_fns.lo*07:32:22*
<br>
&nbsp;CC       util/proc_info.lo*07:32:22*   CC
<br>
util/session_dir.lo*07:32:23*   CC       util/show_help.lo*07:32:23*
<br>
CC       util/context_fns.lo*07:32:23*   CC
<br>
util/parse_options.lo*07:32:23*   CC
<br>
util/pre_condition_transports.lo*07:32:24*   CC
<br>
util/hnp_contact.lo*07:32:24*   LEX
<br>
util/hostfile/hostfile_lex.c*07:32:24*   CC
<br>
util/hostfile/hostfile_lex.lo*07:32:24*   CC
<br>
util/hostfile/hostfile.lo*07:32:25*   CC
<br>
util/dash_host/dash_host.lo*07:32:26*   CC
<br>
util/comm/comm.lo*07:32:26*   CC       util/nidmap.lo*07:32:26*
<br>
util/nidmap.c: In function 'orte_util_decode_pidmap':*07:32:26*
<br>
util/nidmap.c:1033: error: 'OPAL_DB_LOCALRANK' undeclared (first use
<br>
in this function)*07:32:26* util/nidmap.c:1033: error: (Each
<br>
undeclared identifier is reported only once*07:32:26*
<br>
util/nidmap.c:1033: error: for each function it appears in.)*07:32:26*
<br>
make[2]: *** [util/nidmap.lo] Error 1*07:32:26* make[2]: Leaving
<br>
directory `/scrap/jenkins/workspace/ompi-vendor-gerrit/label/hpc/orte'*07:32:26*
<br>
make[1]: *** [install-recursive] Error 1*07:32:26* make[1]: Leaving
<br>
directory `/scrap/jenkins/workspace/ompi-vendor-gerrit/label/hpc/orte'*07:32:26*
<br>
make: *** [install-recursive] Error 1
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14240/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14241.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Previous message:</strong> <a href="14239.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] oshmem warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14242.php">Ralph Castain: "Re: [OMPI devel] compile error in v1.7"</a>
<li><strong>Reply:</strong> <a href="14242.php">Ralph Castain: "Re: [OMPI devel] compile error in v1.7"</a>
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
