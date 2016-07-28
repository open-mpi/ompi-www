<?
$subject_val = "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 11:24:31 2016" -->
<!-- isoreceived="20160516152431" -->
<!-- sent="Mon, 16 May 2016 08:24:28 -0700" -->
<!-- isosent="20160516152428" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error." -->
<!-- id="73E5C30A-CDD8-45F7-B80C-9DEE8720F7F8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5u--McButmRa9htDndNtG31KNUNuSwr1N3Wv0Wb10akDQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 11:24:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29218.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Previous message:</strong> <a href="29216.php">Gilles Gouaillardet: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>In reply to:</strong> <a href="29216.php">Gilles Gouaillardet: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29167.php">lzfneu: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We already do that as a check, but it came after the 1.6 series - and so you get the old error message if you mix with the 1.6 series or older versions.
<br>
<p><span class="quotelev1">&gt; On May 16, 2016, at 8:22 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or this could be caused by a firewall ...
</span><br>
<span class="quotelev1">&gt; v1.10 and earlier uses tcp for  oob,
</span><br>
<span class="quotelev1">&gt; from v2.x, unix sockets are used
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; detecting consistent version is a good idea,
</span><br>
<span class="quotelev1">&gt; printing them (mpirun, orted and a.out) can be a first step.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my idea is
</span><br>
<span class="quotelev1">&gt; mpirun invokes orted with '--ompi_version=x.y.z'
</span><br>
<span class="quotelev1">&gt; orted checks it is running version x.y.z, and sets the OMPI_VERSION environment variable.
</span><br>
<span class="quotelev1">&gt; a.out checks it is running version x.y.z
</span><br>
<span class="quotelev1">&gt; /* we might have to check opal, orte and ompi versions, except orted that should not require MPI */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any thoughts ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tuesday, May 17, 2016, Dave Love &lt;d.love_at_[hidden] &lt;mailto:d.love_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden] &lt;javascript:;&gt;&gt; writes:
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29215.php">http://www.open-mpi.org/community/lists/users/2016/05/29215.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/05/29215.php">http://www.open-mpi.org/community/lists/users/2016/05/29215.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29216.php">http://www.open-mpi.org/community/lists/users/2016/05/29216.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29217/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29218.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Previous message:</strong> <a href="29216.php">Gilles Gouaillardet: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>In reply to:</strong> <a href="29216.php">Gilles Gouaillardet: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29167.php">lzfneu: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
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
