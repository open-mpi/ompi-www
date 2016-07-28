<?
$subject_val = "Re: [OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 03:49:40 2015" -->
<!-- isoreceived="20150928074940" -->
<!-- sent="Mon, 28 Sep 2015 09:49:37 +0200" -->
<!-- isosent="20150928074937" -->
<!-- name="Harald Servat" -->
<!-- email="harald.servat_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0" -->
<!-- id="5608F111.9050605_at_bsc.es" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="560887ED.1030403_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0<br>
<strong>From:</strong> Harald Servat (<em>harald.servat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-28 03:49:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27693.php">Gilles Gouaillardet: "Re: [OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0"</a>
<li><strong>Previous message:</strong> <a href="27691.php">Saliya Ekanayake: "Re: [OMPI users] Binding to hardware thread"</a>
<li><strong>In reply to:</strong> <a href="27689.php">Gilles Gouaillardet: "Re: [OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27693.php">Gilles Gouaillardet: "Re: [OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0"</a>
<li><strong>Reply:</strong> <a href="27693.php">Gilles Gouaillardet: "Re: [OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gilles,
<br>
<p>&nbsp;&nbsp;&nbsp;the webpages I pointed in the original mail and which are the 
<br>
official open-mpi.org, miss the * in the declaration of MPI_Ibarrier, 
<br>
aren't they?
<br>
<p>See:
<br>
<p>C Syntax
<br>
<p>#include &lt;mpi.h&gt;
<br>
int MPI_Barrier(MPI_Comm comm)
<br>
int MPI_Ibarrier(MPI_Comm comm, MPI_Request request)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^-&gt; shouldn't be a * there?
<br>
<p>Best,
<br>
<p>On 09/28/2015 02:21 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Harald,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could you be more specific ?
</span><br>
<span class="quotelev1">&gt; btw, do you check the www.open-mpi.org main site or a mirror ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the man pages looks good to me, and the issue you described was fixed
</span><br>
<span class="quotelev1">&gt; one month ago.
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
<span class="quotelev1">&gt; On 9/25/2015 8:07 PM, Harald Servat wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   I'd like to note you that the manual pages for the C-syntax
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Ibarrier in OpenMPI v1.10.0 misses the pointer in the MPI_Request.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="https://www.open-mpi.org/doc/v1.10/man3/MPI_Ibarrier.3.php">https://www.open-mpi.org/doc/v1.10/man3/MPI_Ibarrier.3.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="https://www.open-mpi.org/doc/v1.10/man3/MPI_Barrier.3.php">https://www.open-mpi.org/doc/v1.10/man3/MPI_Barrier.3.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WARNING / LEGAL TEXT: This message is intended only for the use of the
</span><br>
<span class="quotelev2">&gt;&gt; individual or entity to which it is addressed and may contain
</span><br>
<span class="quotelev2">&gt;&gt; information which is privileged, confidential, proprietary, or exempt
</span><br>
<span class="quotelev2">&gt;&gt; from disclosure under applicable law. If you are not the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient or the person responsible for delivering the message to the
</span><br>
<span class="quotelev2">&gt;&gt; intended recipient, you are strictly prohibited from disclosing,
</span><br>
<span class="quotelev2">&gt;&gt; distributing, copying, or in any way using this message. If you have
</span><br>
<span class="quotelev2">&gt;&gt; received this communication in error, please notify the sender and
</span><br>
<span class="quotelev2">&gt;&gt; destroy and delete any copies you may have received.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27677.php">http://www.open-mpi.org/community/lists/users/2015/09/27677.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27689.php">http://www.open-mpi.org/community/lists/users/2015/09/27689.php</a>
</span><br>
<p>WARNING / LEGAL TEXT: This message is intended only for the use of the
<br>
individual or entity to which it is addressed and may contain
<br>
information which is privileged, confidential, proprietary, or exempt
<br>
from disclosure under applicable law. If you are not the intended
<br>
recipient or the person responsible for delivering the message to the
<br>
intended recipient, you are strictly prohibited from disclosing,
<br>
distributing, copying, or in any way using this message. If you have
<br>
received this communication in error, please notify the sender and
<br>
destroy and delete any copies you may have received.
<br>
<p><a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27693.php">Gilles Gouaillardet: "Re: [OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0"</a>
<li><strong>Previous message:</strong> <a href="27691.php">Saliya Ekanayake: "Re: [OMPI users] Binding to hardware thread"</a>
<li><strong>In reply to:</strong> <a href="27689.php">Gilles Gouaillardet: "Re: [OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27693.php">Gilles Gouaillardet: "Re: [OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0"</a>
<li><strong>Reply:</strong> <a href="27693.php">Gilles Gouaillardet: "Re: [OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0"</a>
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
