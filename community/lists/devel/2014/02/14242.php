<?
$subject_val = "Re: [OMPI devel] compile error in v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 09:45:05 2014" -->
<!-- isoreceived="20140227144505" -->
<!-- sent="Thu, 27 Feb 2014 06:43:14 -0800" -->
<!-- isosent="20140227144314" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] compile error in v1.7" -->
<!-- id="ABD5FF9A-BC9B-4734-AB65-48C1FB1DC9DB_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KyZpDyv_jO+PdGEcZWYjte2r9CFuJYGX2Yk5ceTpAmgNdw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] compile error in v1.7<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 09:43:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14243.php">Mike Dubman: "Re: [OMPI devel] compile error in v1.7"</a>
<li><strong>Previous message:</strong> <a href="14241.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>In reply to:</strong> <a href="14240.php">Mike Dubman: "[OMPI devel] compile error in v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14243.php">Mike Dubman: "Re: [OMPI devel] compile error in v1.7"</a>
<li><strong>Reply:</strong> <a href="14243.php">Mike Dubman: "Re: [OMPI devel] compile error in v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
you need to update your repo
<br>
<p>On Feb 26, 2014, at 9:55 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 07:32:17 make[2]: Entering directory `/scrap/jenkins/workspace/ompi-vendor-gerrit/label/hpc/orte'
</span><br>
<span class="quotelev1">&gt; 07:32:17   CC       runtime/orte_finalize.lo
</span><br>
<span class="quotelev1">&gt; 07:32:17   CC       runtime/orte_init.lo
</span><br>
<span class="quotelev1">&gt; 07:32:17   CC       runtime/orte_locks.lo
</span><br>
<span class="quotelev1">&gt; 07:32:17   CC       runtime/orte_globals.lo
</span><br>
<span class="quotelev1">&gt; 07:32:18   CC       runtime/orte_quit.lo
</span><br>
<span class="quotelev1">&gt; 07:32:18   CC       runtime/data_type_support/orte_dt_compare_fns.lo
</span><br>
<span class="quotelev1">&gt; 07:32:18   CC       runtime/data_type_support/orte_dt_copy_fns.lo
</span><br>
<span class="quotelev1">&gt; 07:32:19   CC       runtime/data_type_support/orte_dt_print_fns.lo
</span><br>
<span class="quotelev1">&gt; 07:32:19   CC       runtime/data_type_support/orte_dt_packing_fns.lo
</span><br>
<span class="quotelev1">&gt; 07:32:20   CC       runtime/data_type_support/orte_dt_unpacking_fns.lo
</span><br>
<span class="quotelev1">&gt; 07:32:20   CC       runtime/orte_mca_params.lo
</span><br>
<span class="quotelev1">&gt; 07:32:20   CC       runtime/orte_wait.lo
</span><br>
<span class="quotelev1">&gt; 07:32:21   CC       runtime/orte_cr.lo
</span><br>
<span class="quotelev1">&gt; 07:32:21   CC       runtime/orte_data_server.lo
</span><br>
<span class="quotelev1">&gt; 07:32:21   CC       runtime/orte_info_support.lo
</span><br>
<span class="quotelev1">&gt; 07:32:21   CC       util/error_strings.lo
</span><br>
<span class="quotelev1">&gt; 07:32:22   CC       util/name_fns.lo
</span><br>
<span class="quotelev1">&gt; 07:32:22   CC       util/proc_info.lo
</span><br>
<span class="quotelev1">&gt; 07:32:22   CC       util/session_dir.lo
</span><br>
<span class="quotelev1">&gt; 07:32:23   CC       util/show_help.lo
</span><br>
<span class="quotelev1">&gt; 07:32:23   CC       util/context_fns.lo
</span><br>
<span class="quotelev1">&gt; 07:32:23   CC       util/parse_options.lo
</span><br>
<span class="quotelev1">&gt; 07:32:23   CC       util/pre_condition_transports.lo
</span><br>
<span class="quotelev1">&gt; 07:32:24   CC       util/hnp_contact.lo
</span><br>
<span class="quotelev1">&gt; 07:32:24   LEX      util/hostfile/hostfile_lex.c
</span><br>
<span class="quotelev1">&gt; 07:32:24   CC       util/hostfile/hostfile_lex.lo
</span><br>
<span class="quotelev1">&gt; 07:32:24   CC       util/hostfile/hostfile.lo
</span><br>
<span class="quotelev1">&gt; 07:32:25   CC       util/dash_host/dash_host.lo
</span><br>
<span class="quotelev1">&gt; 07:32:26   CC       util/comm/comm.lo
</span><br>
<span class="quotelev1">&gt; 07:32:26   CC       util/nidmap.lo
</span><br>
<span class="quotelev1">&gt; 07:32:26 util/nidmap.c: In function 'orte_util_decode_pidmap':
</span><br>
<span class="quotelev1">&gt; 07:32:26 util/nidmap.c:1033: error: 'OPAL_DB_LOCALRANK' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; 07:32:26 util/nidmap.c:1033: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; 07:32:26 util/nidmap.c:1033: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; 07:32:26 make[2]: *** [util/nidmap.lo] Error 1
</span><br>
<span class="quotelev1">&gt; 07:32:26 make[2]: Leaving directory `/scrap/jenkins/workspace/ompi-vendor-gerrit/label/hpc/orte'
</span><br>
<span class="quotelev1">&gt; 07:32:26 make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 07:32:26 make[1]: Leaving directory `/scrap/jenkins/workspace/ompi-vendor-gerrit/label/hpc/orte'
</span><br>
<span class="quotelev1">&gt; 07:32:26 make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14242/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14243.php">Mike Dubman: "Re: [OMPI devel] compile error in v1.7"</a>
<li><strong>Previous message:</strong> <a href="14241.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>In reply to:</strong> <a href="14240.php">Mike Dubman: "[OMPI devel] compile error in v1.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14243.php">Mike Dubman: "Re: [OMPI devel] compile error in v1.7"</a>
<li><strong>Reply:</strong> <a href="14243.php">Mike Dubman: "Re: [OMPI devel] compile error in v1.7"</a>
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
