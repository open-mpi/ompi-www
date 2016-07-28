<?
$subject_val = "[OMPI devel] Unused var in OB1 on master";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 13 13:10:56 2015" -->
<!-- isoreceived="20150613171056" -->
<!-- sent="Sat, 13 Jun 2015 10:10:43 -0700" -->
<!-- isosent="20150613171043" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Unused var in OB1 on master" -->
<!-- id="DC1499DF-40B9-4F2E-9DFA-86107F485782_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Unused var in OB1 on master<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-13 13:10:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17496.php">Ralph Castain: "[OMPI devel] 1.8.6rc2 ready for test"</a>
<li><strong>Previous message:</strong> <a href="17494.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure (Ralph Castain)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17497.php">Gilles Gouaillardet: "Re: [OMPI devel] Unused var in OB1 on master"</a>
<li><strong>Reply:</strong> <a href="17497.php">Gilles Gouaillardet: "Re: [OMPI devel] Unused var in OB1 on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
pml_ob1_recvreq.c: In function 'mca_pml_ob1_recv_request_put_frag':
<br>
pml_ob1_recvreq.c:397:18: warning: unused variable 'proc' [-Wunused-variable]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_proc_t* proc = (ompi_proc_t*)recvreq-&gt;req_recv.req_base.req_proc;
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17495/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17496.php">Ralph Castain: "[OMPI devel] 1.8.6rc2 ready for test"</a>
<li><strong>Previous message:</strong> <a href="17494.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure (Ralph Castain)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17497.php">Gilles Gouaillardet: "Re: [OMPI devel] Unused var in OB1 on master"</a>
<li><strong>Reply:</strong> <a href="17497.php">Gilles Gouaillardet: "Re: [OMPI devel] Unused var in OB1 on master"</a>
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
