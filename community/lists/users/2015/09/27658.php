<?
$subject_val = "Re: [OMPI users] Problem with implementation of Foxa algorithm";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 23 20:54:06 2015" -->
<!-- isoreceived="20150924005406" -->
<!-- sent="Thu, 24 Sep 2015 09:54:01 +0900" -->
<!-- isosent="20150924005401" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with implementation of Foxa algorithm" -->
<!-- id="560349A9.6000000_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAC+Fo8FbJy07SCW0a2sSvFQdj7QCOOqDykmJOMF83Y85YAKayQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with implementation of Foxa algorithm<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-23 20:54:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27659.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27657.php">Gilles Gouaillardet: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>In reply to:</strong> <a href="27656.php">Surivinta Surivinta: "[OMPI users] Problem with implementation of Foxa algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27661.php">Surivinta Surivinta: "Re: [OMPI users] Problem with implementation of Foxa algorithm"</a>
<li><strong>Reply:</strong> <a href="27661.php">Surivinta Surivinta: "Re: [OMPI users] Problem with implementation of Foxa algorithm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>at line 171
<br>
MPI_Gather(&amp;cBufProc[i*matrixSize], blockSize, MPI_DOUBLE, 0, 
<br>
tmpVar[i*matrixSize], MPI_DOUBLE, 0, rowComm);
<br>
<p>but per the man page
<br>
<p>int MPI_Gather(const void *sendbuf, int sendcount, MPI_Datatype sendtype,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *recvbuf, int recvcount, MPI_Datatype recvtype, int root,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm comm)
<br>
<p>so you have
<br>
<p>recvbuf = 0 (!)
<br>
recvcount = tmpVar[i*matrixSize]
<br>
<p>i guess you meant to have recvcount = blockSize
<br>
that being said, tmpVar[i*matrixSize] is and int and it should likely be 
<br>
an double *
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 9/24/2015 8:13 AM, Surivinta Surivinta wrote:
<br>
<span class="quotelev1">&gt; Hi everybody!
</span><br>
<span class="quotelev1">&gt; I try implement Fox algorithm via mpi, but got some errors (see below)
</span><br>
<span class="quotelev1">&gt; Can someone explain how fix it or give a way for search.
</span><br>
<span class="quotelev1">&gt; Source code attached to letter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; errors:
</span><br>
<span class="quotelev1">&gt; [estri_mobile:6337] *** An error occurred in MPI_Gather
</span><br>
<span class="quotelev1">&gt; [estri_mobile:6337] *** reported by process [1826816001,0]
</span><br>
<span class="quotelev1">&gt; [estri_mobile:6337] *** on communicator MPI COMMUNICATOR 4 SPLIT FROM 3
</span><br>
<span class="quotelev1">&gt; [estri_mobile:6337] *** MPI_ERR_COUNT: invalid count argument
</span><br>
<span class="quotelev1">&gt; [estri_mobile:6337] *** MPI_ERRORS_ARE_FATAL (processes in this 
</span><br>
<span class="quotelev1">&gt; communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [estri_mobile:6337] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &#208;&#161; &#209;&#131;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27656.php">http://www.open-mpi.org/community/lists/users/2015/09/27656.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27658/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27659.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27657.php">Gilles Gouaillardet: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>In reply to:</strong> <a href="27656.php">Surivinta Surivinta: "[OMPI users] Problem with implementation of Foxa algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27661.php">Surivinta Surivinta: "Re: [OMPI users] Problem with implementation of Foxa algorithm"</a>
<li><strong>Reply:</strong> <a href="27661.php">Surivinta Surivinta: "Re: [OMPI users] Problem with implementation of Foxa algorithm"</a>
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
