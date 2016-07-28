<?
$subject_val = "Re: [OMPI users] send and receive vectors + variable length";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 17:06:53 2015" -->
<!-- isoreceived="20150108220653" -->
<!-- sent="Thu, 8 Jan 2015 23:06:52 +0100" -->
<!-- isosent="20150108220652" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send and receive vectors + variable length" -->
<!-- id="CAG8o1y4HVAJQH5DPQDXzzh=rNuMd5TaYDBf6TFpEN_WSfXiGKg_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1420747928.5110.2.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] send and receive vectors + variable length<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-08 17:06:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26138.php">George Bosilca: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26136.php">Gus Correa: "Re: [OMPI users] libpsm_infinipath issues?"</a>
<li><strong>In reply to:</strong> <a href="26132.php">Tom Rosmond: "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26138.php">George Bosilca: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26138.php">George Bosilca: "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Tom, Dear Jeff, Dear all,
<br>
Thanks again
<br>
<p>for Tom:
<br>
you are right, I fixed it.
<br>
<p>for Jeff:
<br>
if I do not insert the CALL MPI_BARRIER(MPI_COMM_WORLD, MPIdata%iErr)
<br>
in the line 112, the program does not stop.
<br>
<p>Am I right?
<br>
Here the new version
<br>
<p><p><p>Diego
<br>
<p><p>On 8 January 2015 at 21:12, Tom Rosmond &lt;rosmond_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; With array bounds checking your program returns an out-of-bounds error
</span><br>
<span class="quotelev1">&gt; in the mpi_isend call at line 104.  Looks like 'send_request' should be
</span><br>
<span class="quotelev1">&gt; indexed with 'sendcount', not 'icount'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; T. Rosmond
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 2015-01-08 at 20:28 +0100, Diego Avesani wrote:
</span><br>
<span class="quotelev2">&gt; &gt; the attachment
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Diego
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 8 January 2015 at 19:44, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;         Dear all,
</span><br>
<span class="quotelev2">&gt; &gt;         I found the error.
</span><br>
<span class="quotelev2">&gt; &gt;         There is a  Ndata2send(iCPU) instead of Ndata2recv(iCPU).
</span><br>
<span class="quotelev2">&gt; &gt;         In the attachment there is the correct version of the program.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Only one thing, could do you check if the use of MPI_WAITALL
</span><br>
<span class="quotelev2">&gt; &gt;         and MPI_BARRIER is correct?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Thanks again
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Diego
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         On 8 January 2015 at 18:48, Diego Avesani
</span><br>
<span class="quotelev2">&gt; &gt;         &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;                 Dear all,
</span><br>
<span class="quotelev2">&gt; &gt;                 thanks thank a lot, I am learning a lot.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 I have written a simple program that send vectors of
</span><br>
<span class="quotelev2">&gt; &gt;                 integers from a CPU to another.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 The program is written (at least for now) for 4 CPU.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 The program is quite simple:
</span><br>
<span class="quotelev2">&gt; &gt;                 Each CPU knows how many data has to send to the other
</span><br>
<span class="quotelev2">&gt; &gt;                 CPUs. This info is than send to the other CPUS. In
</span><br>
<span class="quotelev2">&gt; &gt;                 this way each CPU knows how may data has to receive
</span><br>
<span class="quotelev2">&gt; &gt;                 from other CPUs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 This part of the program works.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 The problem is in the second part.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 In the second part, each processor sends a vector of
</span><br>
<span class="quotelev2">&gt; &gt;                 integer to the other processor. The size is given and
</span><br>
<span class="quotelev2">&gt; &gt;                 each CPU knows the size of the incoming vector form
</span><br>
<span class="quotelev2">&gt; &gt;                 the first part of the program.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 In this second part the program fails and I do not
</span><br>
<span class="quotelev2">&gt; &gt;                 know why.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 In the attachment you can find the program. Could you
</span><br>
<span class="quotelev2">&gt; &gt;                 please help me. Problably I didn't understand properly
</span><br>
<span class="quotelev2">&gt; &gt;                 the ISEND and IRECV subroutine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 Thanks again
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 Diego
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26131.php">http://www.open-mpi.org/community/lists/users/2015/01/26131.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26132.php">http://www.open-mpi.org/community/lists/users/2015/01/26132.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26137/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26137/test_isend_irecv_vector.f90">test_isend_irecv_vector.f90</a>
</ul>
<!-- attachment="test_isend_irecv_vector.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26138.php">George Bosilca: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26136.php">Gus Correa: "Re: [OMPI users] libpsm_infinipath issues?"</a>
<li><strong>In reply to:</strong> <a href="26132.php">Tom Rosmond: "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26138.php">George Bosilca: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26138.php">George Bosilca: "Re: [OMPI users] send and receive vectors + variable length"</a>
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
