<?
$subject_val = "Re: [OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 03:52:33 2015" -->
<!-- isoreceived="20150928075233" -->
<!-- sent="Mon, 28 Sep 2015 16:52:29 +0900" -->
<!-- isosent="20150928075229" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0" -->
<!-- id="5608F1BD.8070801_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5608F111.9050605_at_bsc.es" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-28 03:52:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27694.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27692.php">Harald Servat: "Re: [OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0"</a>
<li><strong>In reply to:</strong> <a href="27692.php">Harald Servat: "Re: [OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Harald,
<br>
<p>thanks for the clarification, i clearly missed that !
<br>
<p>i will fix it from now
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 9/28/2015 4:49 PM, Harald Servat wrote:
<br>
<span class="quotelev1">&gt; Hello Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   the webpages I pointed in the original mail and which are the 
</span><br>
<span class="quotelev1">&gt; official open-mpi.org, miss the * in the declaration of MPI_Ibarrier, 
</span><br>
<span class="quotelev1">&gt; aren't they?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C Syntax
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int MPI_Barrier(MPI_Comm comm)
</span><br>
<span class="quotelev1">&gt; int MPI_Ibarrier(MPI_Comm comm, MPI_Request request)
</span><br>
<span class="quotelev1">&gt;                                            ^-&gt; shouldn't be a * there?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 09/28/2015 02:21 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Harald,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; could you be more specific ?
</span><br>
<span class="quotelev2">&gt;&gt; btw, do you check the www.open-mpi.org main site or a mirror ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the man pages looks good to me, and the issue you described was fixed
</span><br>
<span class="quotelev2">&gt;&gt; one month ago.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 9/25/2015 8:07 PM, Harald Servat wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I'd like to note you that the manual pages for the C-syntax
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Ibarrier in OpenMPI v1.10.0 misses the pointer in the MPI_Request.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="https://www.open-mpi.org/doc/v1.10/man3/MPI_Ibarrier.3.php">https://www.open-mpi.org/doc/v1.10/man3/MPI_Ibarrier.3.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="https://www.open-mpi.org/doc/v1.10/man3/MPI_Barrier.3.php">https://www.open-mpi.org/doc/v1.10/man3/MPI_Barrier.3.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING / LEGAL TEXT: This message is intended only for the use of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; individual or entity to which it is addressed and may contain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information which is privileged, confidential, proprietary, or exempt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from disclosure under applicable law. If you are not the intended
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recipient or the person responsible for delivering the message to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intended recipient, you are strictly prohibited from disclosing,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distributing, copying, or in any way using this message. If you have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; received this communication in error, please notify the sender and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; destroy and delete any copies you may have received.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27677.php">http://www.open-mpi.org/community/lists/users/2015/09/27677.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27689.php">http://www.open-mpi.org/community/lists/users/2015/09/27689.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING / LEGAL TEXT: This message is intended only for the use of the
</span><br>
<span class="quotelev1">&gt; individual or entity to which it is addressed and may contain
</span><br>
<span class="quotelev1">&gt; information which is privileged, confidential, proprietary, or exempt
</span><br>
<span class="quotelev1">&gt; from disclosure under applicable law. If you are not the intended
</span><br>
<span class="quotelev1">&gt; recipient or the person responsible for delivering the message to the
</span><br>
<span class="quotelev1">&gt; intended recipient, you are strictly prohibited from disclosing,
</span><br>
<span class="quotelev1">&gt; distributing, copying, or in any way using this message. If you have
</span><br>
<span class="quotelev1">&gt; received this communication in error, please notify the sender and
</span><br>
<span class="quotelev1">&gt; destroy and delete any copies you may have received.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27692.php">http://www.open-mpi.org/community/lists/users/2015/09/27692.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27694.php">Schlottke-Lakemper, Michael: "Re: [OMPI users] Invalid read of size 4 (Valgrind error)	with	OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27692.php">Harald Servat: "Re: [OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0"</a>
<li><strong>In reply to:</strong> <a href="27692.php">Harald Servat: "Re: [OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0"</a>
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
