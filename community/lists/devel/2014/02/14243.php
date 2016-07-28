<?
$subject_val = "Re: [OMPI devel] compile error in v1.7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 09:48:21 2014" -->
<!-- isoreceived="20140227144821" -->
<!-- sent="Thu, 27 Feb 2014 16:48:19 +0200" -->
<!-- isosent="20140227144819" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] compile error in v1.7" -->
<!-- id="CAAO1Kya0v5hbx2dSbPxuDQtRjEJw3CGvRj0R-xBzV7GESDuOMg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ABD5FF9A-BC9B-4734-AB65-48C1FB1DC9DB_at_open-mpi.org" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 09:48:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14244.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Previous message:</strong> <a href="14242.php">Ralph Castain: "Re: [OMPI devel] compile error in v1.7"</a>
<li><strong>In reply to:</strong> <a href="14242.php">Ralph Castain: "Re: [OMPI devel] compile error in v1.7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yep, now it fine.
<br>
thx
<br>
<p><p>On Thu, Feb 27, 2014 at 4:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; you need to update your repo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 26, 2014, at 9:55 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *07:32:17* make[2]: Entering directory `/scrap/jenkins/workspace/ompi-vendor-gerrit/label/hpc/orte'*07:32:17*   CC       runtime/orte_finalize.lo*07:32:17*   CC       runtime/orte_init.lo*07:32:17*   CC       runtime/orte_locks.lo*07:32:17*   CC       runtime/orte_globals.lo*07:32:18*   CC       runtime/orte_quit.lo*07:32:18*   CC       runtime/data_type_support/orte_dt_compare_fns.lo*07:32:18*   CC       runtime/data_type_support/orte_dt_copy_fns.lo*07:32:19*   CC       runtime/data_type_support/orte_dt_print_fns.lo*07:32:19*   CC       runtime/data_type_support/orte_dt_packing_fns.lo*07:32:20*   CC       runtime/data_type_support/orte_dt_unpacking_fns.lo*07:32:20*   CC       runtime/orte_mca_params.lo*07:32:20*   CC       runtime/orte_wait.lo*07:32:21*   CC       runtime/orte_cr.lo*07:32:21*   CC       runtime/orte_data_server.lo*07:32:21*   CC       runtime/orte_info_support.lo*07:32:21*   CC       util/error_strings.lo*07:32:22*   CC       util/name_fns.lo*07:32:22*   CC       util/proc_info.lo*07:32:22*   CC       util/session_dir.lo*07:32:23*   CC       util/show_help.lo*07:32:23*   CC       util/context_fns.lo*07:32:23*   CC       util/parse_options.lo*07:32:23*   CC       util/pre_condition_transports.lo*07:32:24*   CC       util/hnp_contact.lo*07:32:24*   LEX      util/hostfile/hostfile_lex.c*07:32:24*   CC       util/hostfile/hostfile_lex.lo*07:32:24*   CC       util/hostfile/hostfile.lo*07:32:25*   CC       util/dash_host/dash_host.lo*07:32:26*   CC       util/comm/comm.lo*07:32:26*   CC       util/nidmap.lo*07:32:26* util/nidmap.c: In function 'orte_util_decode_pidmap':*07:32:26* util/nidmap.c:1033: error: 'OPAL_DB_LOCALRANK' undeclared (first use in this function)*07:32:26* util/nidmap.c:1033: error: (Each undeclared identifier is reported only once*07:32:26* util/nidmap.c:1033: error: for each function it appears in.)*07:32:26* make[2]: *** [util/nidmap.lo] Error 1*07:32:26* make[2]: Leaving directory `/scrap/jenkins/workspace/ompi-vendor-gerrit/label/hpc/orte'*07:32:26* make[1]: *** [install-recursive] Error 1*07:32:26* make[1]: Leaving directory `/scrap/jenkins/workspace/ompi-vendor-gerrit/label/hpc/orte'*07:32:26* make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14243/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14244.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
<li><strong>Previous message:</strong> <a href="14242.php">Ralph Castain: "Re: [OMPI devel] compile error in v1.7"</a>
<li><strong>In reply to:</strong> <a href="14242.php">Ralph Castain: "Re: [OMPI devel] compile error in v1.7"</a>
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
