<?
$subject_val = "Re: [OMPI users] send and receive vectors + variable length";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 18:58:05 2015" -->
<!-- isoreceived="20150108235805" -->
<!-- sent="Thu, 8 Jan 2015 18:58:03 -0500" -->
<!-- isosent="20150108235803" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send and receive vectors + variable length" -->
<!-- id="CAMJJpkWZrLBAvZ0rVt2z3kpAhJtTmyj6MLhJNuXBkY=2Lu05Gw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F995B928-4B28-4917-A1A7-C9924EBB5F4B_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-08 18:58:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26146.php">Gus Correa: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26144.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>In reply to:</strong> <a href="26139.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26149.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26149.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26150.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm confused by this statement. The examples pointed to are handling
<br>
blocking sends and receives, while this example is purely based on
<br>
non-blocking communications. In this particular case I see no hard of
<br>
waiting on the requests in any random order as long as all of them are
<br>
posted before the first wait.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Thu, Jan 8, 2015 at 5:24 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Also, you are calling WAITALL on all your sends and then WAITALL on all
</span><br>
<span class="quotelev1">&gt; your receives.  This is also incorrect and may deadlock.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WAITALL on *all* your pending requests (sends and receives -- put them all
</span><br>
<span class="quotelev1">&gt; in a single array).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Look at examples 3.8 and 3.9 in the MPI-3.0 document.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 8, 2015, at 5:15 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Diego,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Non-blocking communications only indicate a communication will happen,
</span><br>
<span class="quotelev1">&gt; it does not force them to happen. They will only complete on the
</span><br>
<span class="quotelev1">&gt; corresponding MPI_Wait, which also marks the moment starting from where the
</span><br>
<span class="quotelev1">&gt; data can be safely altered or accessed (in the case of the MPI_Irecv). Thus
</span><br>
<span class="quotelev1">&gt; deallocating your buffer after the MPI_Isend and MPI_Irecv is incorrect.
</span><br>
<span class="quotelev1">&gt; Also printing the supposedly received values (line 127) is incorrect as
</span><br>
<span class="quotelev1">&gt; there is no reason to have the non-blocking receive completed at that
</span><br>
<span class="quotelev1">&gt; moment.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   George.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Jan 8, 2015 at 5:06 PM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear Tom, Dear Jeff, Dear all,
</span><br>
<span class="quotelev2">&gt; &gt; Thanks again
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; for Tom:
</span><br>
<span class="quotelev2">&gt; &gt; you are right, I fixed it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; for Jeff:
</span><br>
<span class="quotelev2">&gt; &gt; if I do not insert the CALL MPI_BARRIER(MPI_COMM_WORLD, MPIdata%iErr)
</span><br>
<span class="quotelev2">&gt; &gt; in the line 112, the program does not stop.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Am I right?
</span><br>
<span class="quotelev2">&gt; &gt; Here the new version
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Diego
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 8 January 2015 at 21:12, Tom Rosmond &lt;rosmond_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; With array bounds checking your program returns an out-of-bounds error
</span><br>
<span class="quotelev2">&gt; &gt; in the mpi_isend call at line 104.  Looks like 'send_request' should be
</span><br>
<span class="quotelev2">&gt; &gt; indexed with 'sendcount', not 'icount'.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; T. Rosmond
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, 2015-01-08 at 20:28 +0100, Diego Avesani wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the attachment
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Diego
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On 8 January 2015 at 19:44, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         Dear all,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         I found the error.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         There is a  Ndata2send(iCPU) instead of Ndata2recv(iCPU).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         In the attachment there is the correct version of the program.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         Only one thing, could do you check if the use of MPI_WAITALL
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         and MPI_BARRIER is correct?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         Thanks again
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         Diego
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         On 8 January 2015 at 18:48, Diego Avesani
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 Dear all,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 thanks thank a lot, I am learning a lot.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 I have written a simple program that send vectors of
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 integers from a CPU to another.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 The program is written (at least for now) for 4 CPU.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 The program is quite simple:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 Each CPU knows how many data has to send to the other
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 CPUs. This info is than send to the other CPUS. In
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 this way each CPU knows how may data has to receive
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 from other CPUs.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 This part of the program works.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 The problem is in the second part.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 In the second part, each processor sends a vector of
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 integer to the other processor. The size is given and
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 each CPU knows the size of the incoming vector form
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 the first part of the program.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 In this second part the program fails and I do not
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 know why.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 In the attachment you can find the program. Could you
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 please help me. Problably I didn't understand properly
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 the ISEND and IRECV subroutine.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 Thanks again
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 Diego
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26131.php">http://www.open-mpi.org/community/lists/users/2015/01/26131.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26132.php">http://www.open-mpi.org/community/lists/users/2015/01/26132.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26137.php">http://www.open-mpi.org/community/lists/users/2015/01/26137.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26138.php">http://www.open-mpi.org/community/lists/users/2015/01/26138.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26139.php">http://www.open-mpi.org/community/lists/users/2015/01/26139.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26145/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26146.php">Gus Correa: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26144.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>In reply to:</strong> <a href="26139.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26149.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26149.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26150.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send and receive vectors + variable length"</a>
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
