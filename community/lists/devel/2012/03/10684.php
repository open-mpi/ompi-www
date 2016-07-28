<?
$subject_val = "[OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 07:08:04 2012" -->
<!-- isoreceived="20120306120804" -->
<!-- sent="Tue, 06 Mar 2012 13:18:14 +0100" -->
<!-- isosent="20120306121814" -->
<!-- name="nadia.derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks" -->
<!-- id="1331036294.11863.45.camel_at_B014522" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks<br>
<strong>From:</strong> nadia.derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 07:18:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10685.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10683.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10687.php">Ralph Castain: "Re: [OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks"</a>
<li><strong>Reply:</strong> <a href="10687.php">Ralph Castain: "Re: [OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>When forwarding stdin to all ranks in the job (mpirun --stdin all), the
<br>
following error message is output:
<br>
<p>------------------
<br>
[berlin73:02223] [[56600,0],0] ORTE_ERROR_LOG: A message is attempting
<br>
to be sent to a process whose contact information is unknown in
<br>
file ../../../../../orte/mca/rml/oob/rml_oob_send.c at line 316
<br>
[berlin73:02223] [[56600,0],0] unable to find address for
<br>
[[INVALID],INVALID]
<br>
[berlin73:02223] [[56600,0],0] ORTE_ERROR_LOG: A message is attempting
<br>
to be sent to a process whose contact information is unknown in
<br>
file ../../../../../orte/mca/iof/hnp/iof_hnp_send.c at line 116
<br>
------------------
<br>
<p>This is due to the daemon part of the sink structure not beeing
<br>
initialized in hnp_push() when the destination vpid is
<br>
ORTE_VPID_WILDCARD.
<br>
And then, when orte_iof_hnp_read_local_handler() is called, it calls
<br>
orte_iof_hnp_send_data_to_endpoint() with a sink-&gt;daemon that is not
<br>
set.
<br>
orte_iof_hnp_send_data_to_endpoint() in turn doesn't call
<br>
orte_grpcomm.xcast() but orte_rml.send_buffer_nb() with an invalid host.
<br>
<p>The attached patch applied on the trunk solves the issue. This patch is
<br>
trivial, but since it's the first time I have to look at iof code, I'm
<br>
not sure of all its impacts...
<br>
<p>Regards,
<br>
Nadia
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10684/iof_hnp_push.patch">iof_hnp_push.patch</a>
</ul>
<!-- attachment="iof_hnp_push.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10685.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10683.php">N.M. Maclaren: "Re: [OMPI devel] Collective communications may be abend when it use over 2GiB buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10687.php">Ralph Castain: "Re: [OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks"</a>
<li><strong>Reply:</strong> <a href="10687.php">Ralph Castain: "Re: [OMPI devel] [PATCH] iof/hnp: daemon part of the sink structure is not initialized when forwarding stdin to all ranks"</a>
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
