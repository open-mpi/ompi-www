<?
$subject_val = "Re: [OMPI devel] Unused var in OB1 on master";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 14 21:03:42 2015" -->
<!-- isoreceived="20150615010342" -->
<!-- sent="Mon, 15 Jun 2015 10:03:34 +0900" -->
<!-- isosent="20150615010334" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unused var in OB1 on master" -->
<!-- id="557E2466.7040604_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5tCcHXVEx19ns4J61AxKfUo9COPC0gaW7APhDj2pNiQ=w_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-14 21:03:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17499.php">Howard Pritchard: "[OMPI devel] ompi forking tomorrow"</a>
<li><strong>Previous message:</strong> <a href="17497.php">Gilles Gouaillardet: "Re: [OMPI devel] Unused var in OB1 on master"</a>
<li><strong>In reply to:</strong> <a href="17497.php">Gilles Gouaillardet: "Re: [OMPI devel] Unused var in OB1 on master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and all,
<br>
<p>this is fixed at 
<br>
<a href="https://github.com/open-mpi/ompi/commit/ee3a1da28a3c018115bad82e0a9e7d1e04d35148">https://github.com/open-mpi/ompi/commit/ee3a1da28a3c018115bad82e0a9e7d1e04d35148</a>
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 6/14/2015 10:43 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Will do tomorrow.
</span><br>
<span class="quotelev1">&gt; proc is only used in heterogeneous mode, hence the warning
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sunday, June 14, 2015, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *pml_ob1_recvreq.c:* In function
</span><br>
<span class="quotelev1">&gt;     '*mca_pml_ob1_recv_request_put_frag*':
</span><br>
<span class="quotelev1">&gt;     *pml_ob1_recvreq.c:397:18:* *warning: *unused variable '*proc*'
</span><br>
<span class="quotelev1">&gt;     [-Wunused-variable]
</span><br>
<span class="quotelev1">&gt;       ompi_proc_t* proc =
</span><br>
<span class="quotelev1">&gt;     (ompi_proc_t*)recvreq-&gt;req_recv.req_base.req_proc;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17497.php">http://www.open-mpi.org/community/lists/devel/2015/06/17497.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17498/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17499.php">Howard Pritchard: "[OMPI devel] ompi forking tomorrow"</a>
<li><strong>Previous message:</strong> <a href="17497.php">Gilles Gouaillardet: "Re: [OMPI devel] Unused var in OB1 on master"</a>
<li><strong>In reply to:</strong> <a href="17497.php">Gilles Gouaillardet: "Re: [OMPI devel] Unused var in OB1 on master"</a>
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
