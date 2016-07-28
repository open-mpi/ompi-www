<?
$subject_val = "Re: [OMPI devel] Unused var in OB1 on master";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 13 21:43:57 2015" -->
<!-- isoreceived="20150614014357" -->
<!-- sent="Sun, 14 Jun 2015 10:43:55 +0900" -->
<!-- isosent="20150614014355" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unused var in OB1 on master" -->
<!-- id="CAAkFZ5tCcHXVEx19ns4J61AxKfUo9COPC0gaW7APhDj2pNiQ=w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DC1499DF-40B9-4F2E-9DFA-86107F485782_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Unused var in OB1 on master<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-13 21:43:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17498.php">Gilles Gouaillardet: "Re: [OMPI devel] Unused var in OB1 on master"</a>
<li><strong>Previous message:</strong> <a href="17496.php">Ralph Castain: "[OMPI devel] 1.8.6rc2 ready for test"</a>
<li><strong>In reply to:</strong> <a href="17495.php">Ralph Castain: "[OMPI devel] Unused var in OB1 on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17498.php">Gilles Gouaillardet: "Re: [OMPI devel] Unused var in OB1 on master"</a>
<li><strong>Reply:</strong> <a href="17498.php">Gilles Gouaillardet: "Re: [OMPI devel] Unused var in OB1 on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Will do tomorrow.
<br>
proc is only used in heterogeneous mode, hence the warning
<br>
<p>On Sunday, June 14, 2015, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; *pml_ob1_recvreq.c:* In function '*mca_pml_ob1_recv_request_put_frag*':
</span><br>
<span class="quotelev1">&gt; *pml_ob1_recvreq.c:397:18:* *warning: *unused variable '*proc*'
</span><br>
<span class="quotelev1">&gt; [-Wunused-variable]
</span><br>
<span class="quotelev1">&gt;      ompi_proc_t* proc = (ompi_proc_t*)recvreq-&gt;req_recv.req_base.req_proc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17497/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17498.php">Gilles Gouaillardet: "Re: [OMPI devel] Unused var in OB1 on master"</a>
<li><strong>Previous message:</strong> <a href="17496.php">Ralph Castain: "[OMPI devel] 1.8.6rc2 ready for test"</a>
<li><strong>In reply to:</strong> <a href="17495.php">Ralph Castain: "[OMPI devel] Unused var in OB1 on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17498.php">Gilles Gouaillardet: "Re: [OMPI devel] Unused var in OB1 on master"</a>
<li><strong>Reply:</strong> <a href="17498.php">Gilles Gouaillardet: "Re: [OMPI devel] Unused var in OB1 on master"</a>
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
