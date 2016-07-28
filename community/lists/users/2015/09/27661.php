<?
$subject_val = "Re: [OMPI users] Problem with implementation of Foxa algorithm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 08:56:52 2015" -->
<!-- isoreceived="20150924125652" -->
<!-- sent="Thu, 24 Sep 2015 15:56:48 +0300" -->
<!-- isosent="20150924125648" -->
<!-- name="Surivinta Surivinta" -->
<!-- email="surivinta_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with implementation of Foxa algorithm" -->
<!-- id="CAC+Fo8EWLAr57_Nd+4hQhOFtr+-RsRwsHDR0Ep8cSUB=++VHwQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="560349A9.6000000_at_rist.or.jp" -->
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
<strong>From:</strong> Surivinta Surivinta (<em>surivinta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-24 08:56:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27662.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27660.php">Fabrice Roy: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>In reply to:</strong> <a href="27658.php">Gilles Gouaillardet: "Re: [OMPI users] Problem with implementation of Foxa algorithm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh... Thanks for fast answer! Now I understand where error.
<br>
At least now code is work! But matrix calculated wrong... Now I need to
<br>
think about  my Fox algorithm implementation.
<br>
<p>2015-09-24 3:54 GMT+03:00 Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at line 171
</span><br>
<span class="quotelev1">&gt; MPI_Gather(&amp;cBufProc[i*matrixSize], blockSize, MPI_DOUBLE, 0,
</span><br>
<span class="quotelev1">&gt; tmpVar[i*matrixSize], MPI_DOUBLE, 0, rowComm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but per the man page
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int MPI_Gather(const void *sendbuf, int sendcount, MPI_Datatype sendtype,
</span><br>
<span class="quotelev1">&gt;             void *recvbuf, int recvcount, MPI_Datatype recvtype, int root,
</span><br>
<span class="quotelev1">&gt;             MPI_Comm comm)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so you have
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; recvbuf = 0 (!)
</span><br>
<span class="quotelev1">&gt; recvcount = tmpVar[i*matrixSize]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i guess you meant to have recvcount = blockSize
</span><br>
<span class="quotelev1">&gt; that being said, tmpVar[i*matrixSize] is and int and it should likely be
</span><br>
<span class="quotelev1">&gt; an double *
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
<span class="quotelev1">&gt; On 9/24/2015 8:13 AM, Surivinta Surivinta wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27656.php">http://www.open-mpi.org/community/lists/users/2015/09/27656.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27658.php">http://www.open-mpi.org/community/lists/users/2015/09/27658.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
-- 
&#208;&#161; &#209;&#131;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;.


</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27661/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-chdr attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27661/somehead.h">somehead.h</a>
</ul>
<!-- attachment="somehead.h" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27661/main.c">main.c</a>
</ul>
<!-- attachment="main.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27662.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27660.php">Fabrice Roy: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>In reply to:</strong> <a href="27658.php">Gilles Gouaillardet: "Re: [OMPI users] Problem with implementation of Foxa algorithm"</a>
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
