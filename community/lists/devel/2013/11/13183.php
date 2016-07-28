<?
$subject_val = "[OMPI devel] v1.7 is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 01:27:20 2013" -->
<!-- isoreceived="20131105062720" -->
<!-- sent="Tue, 5 Nov 2013 08:27:18 +0200" -->
<!-- isosent="20131105062718" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.7 is broken" -->
<!-- id="CAAO1KyYQs=gyH_0zezc6fKxjUs9g41-wrv4nvBei1XY6kPzung_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] v1.7 is broken<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-05 01:27:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13184.php">Ralph Castain: "Re: [OMPI devel] v1.7 is broken"</a>
<li><strong>Previous message:</strong> <a href="13182.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13184.php">Ralph Castain: "Re: [OMPI devel] v1.7 is broken"</a>
<li><strong>Reply:</strong> <a href="13184.php">Ralph Castain: "Re: [OMPI devel] v1.7 is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
The latest merges from trunk to v1.7 broke v1.7  for openib:
<br>
<p>*08:08:36* btl_openib_xrc.c:80: warning: 'ibv_close_xrc_domain' is
<br>
deprecated (declared at
<br>
/usr/include/infiniband/ofa_verbs.h:102)*08:08:36*   CC
<br>
btl_openib_fd.lo*08:08:36*   CC       btl_openib_ip.lo*08:08:36*   CC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;connect/btl_openib_connect_base.lo*08:08:36*   CC
<br>
connect/btl_openib_connect_oob.lo*08:08:37*   CC
<br>
connect/btl_openib_connect_empty.lo*08:08:37*   CC
<br>
connect/btl_openib_connect_xoob.lo*08:08:37*
<br>
connect/btl_openib_connect_xoob.c:359:35: error: macro
<br>
&quot;ompi_rte_send_buffer_nb&quot; passed 6 arguments, but takes just
<br>
5*08:08:37* connect/btl_openib_connect_xoob.c: In function
<br>
'xoob_send_connect_data':*08:08:37*
<br>
connect/btl_openib_connect_xoob.c:357: error:
<br>
'ompi_rte_send_buffer_nb' undeclared (first use in this
<br>
function)*08:08:37* connect/btl_openib_connect_xoob.c:357: error:
<br>
(Each undeclared identifier is reported only once*08:08:37*
<br>
connect/btl_openib_connect_xoob.c:357: error: for each function it
<br>
appears in.)*08:08:37* connect/btl_openib_connect_xoob.c: In function
<br>
'xoob_recv_qp_create':*08:08:37*
<br>
connect/btl_openib_connect_xoob.c:560: warning:
<br>
'ibv_create_xrc_rcv_qp' is deprecated (declared at
<br>
/usr/include/infiniband/ofa_verbs.h:126)*08:08:37*
<br>
connect/btl_openib_connect_xoob.c:572: warning:
<br>
'ibv_modify_xrc_rcv_qp' is deprecated (declared at
<br>
/usr/include/infiniband/ofa_verbs.h:152)*08:08:37*
<br>
connect/btl_openib_connect_xoob.c:616: warning:
<br>
'ibv_modify_xrc_rcv_qp' is deprecated (declared at
<br>
/usr/include/infiniband/ofa_verbs.h:152)*08:08:37*
<br>
connect/btl_openib_connect_xoob.c: In function
<br>
'xoob_recv_qp_connect':*08:08:37*
<br>
connect/btl_openib_connect_xoob.c:649: warning: 'ibv_reg_xrc_rcv_qp'
<br>
is deprecated (declared at
<br>
/usr/include/infiniband/ofa_verbs.h:185)*08:08:37*
<br>
connect/btl_openib_connect_xoob.c: In function
<br>
'xoob_component_query':*08:08:37*
<br>
connect/btl_openib_connect_xoob.c:1027: error: void value not ignored
<br>
as it ought to be*08:08:37* make[2]: ***
<br>
[connect/btl_openib_connect_xoob.lo] Error 1*08:08:37* make[2]:
<br>
Leaving directory
<br>
`/scrap/jenkins/scrap/workspace/hpc-ompi-shmem_at_3/label/hpc-test-node/ompi/mca/btl/openib'
<br>
<p><p><p>M
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13183/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13184.php">Ralph Castain: "Re: [OMPI devel] v1.7 is broken"</a>
<li><strong>Previous message:</strong> <a href="13182.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13184.php">Ralph Castain: "Re: [OMPI devel] v1.7 is broken"</a>
<li><strong>Reply:</strong> <a href="13184.php">Ralph Castain: "Re: [OMPI devel] v1.7 is broken"</a>
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
