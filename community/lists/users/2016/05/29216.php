<?
$subject_val = "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 11:22:11 2016" -->
<!-- isoreceived="20160516152211" -->
<!-- sent="Tue, 17 May 2016 00:22:10 +0900" -->
<!-- isosent="20160516152210" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error." -->
<!-- id="CAAkFZ5u--McButmRa9htDndNtG31KNUNuSwr1N3Wv0Wb10akDQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87twhy595d.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error.<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 11:22:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29217.php">Ralph Castain: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Previous message:</strong> <a href="29215.php">Dave Love: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>In reply to:</strong> <a href="29215.php">Dave Love: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29217.php">Ralph Castain: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Reply:</strong> <a href="29217.php">Ralph Castain: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
or this could be caused by a firewall ...
<br>
v1.10 and earlier uses tcp for  oob,
<br>
from v2.x, unix sockets are used
<br>
<p>detecting consistent version is a good idea,
<br>
printing them (mpirun, orted and a.out) can be a first step.
<br>
<p>my idea is
<br>
mpirun invokes orted with '--ompi_version=x.y.z'
<br>
orted checks it is running version x.y.z, and sets the OMPI_VERSION
<br>
environment variable.
<br>
a.out checks it is running version x.y.z
<br>
/* we might have to check opal, orte and ompi versions, except orted that
<br>
should not require MPI */
<br>
<p>any thoughts ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p>On Tuesday, May 17, 2016, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden] &lt;javascript:;&gt;&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; This usually indicates that the remote process is using a different OMPI
</span><br>
<span class="quotelev2">&gt; &gt; version. You might check to ensure that the paths on the remote nodes are
</span><br>
<span class="quotelev2">&gt; &gt; correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That seems quite a common problem with non-obvious failure modes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it not possible to have a mechanism that checks the consistency of
</span><br>
<span class="quotelev1">&gt; the components and aborts in a clear way?  I've never thought it out,
</span><br>
<span class="quotelev1">&gt; but it seems that some combination of OOB messages, library versioning
</span><br>
<span class="quotelev1">&gt; (at least with ELF) and environment variables might do it.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29215.php">http://www.open-mpi.org/community/lists/users/2016/05/29215.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29216/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29217.php">Ralph Castain: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Previous message:</strong> <a href="29215.php">Dave Love: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>In reply to:</strong> <a href="29215.php">Dave Love: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29217.php">Ralph Castain: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Reply:</strong> <a href="29217.php">Ralph Castain: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
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
