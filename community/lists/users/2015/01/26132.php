<?
$subject_val = "Re: [OMPI users] send and receive vectors + variable length";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 15:12:11 2015" -->
<!-- isoreceived="20150108201211" -->
<!-- sent="Thu, 08 Jan 2015 12:12:08 -0800" -->
<!-- isosent="20150108201208" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send and receive vectors + variable length" -->
<!-- id="1420747928.5110.2.camel_at_cedar.reachone.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAG8o1y7HChgP922H8Xco0qbQqZuXaL9Cj2td+q8OCBrBsC+iyg_at_mail.gmail.com" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-08 15:12:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26133.php">VanEss.Michael: "[OMPI users] libpsm_infinipath issues?"</a>
<li><strong>Previous message:</strong> <a href="26131.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>In reply to:</strong> <a href="26131.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26137.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26137.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With array bounds checking your program returns an out-of-bounds error
<br>
in the mpi_isend call at line 104.  Looks like 'send_request' should be
<br>
indexed with 'sendcount', not 'icount'.
<br>
<p>T. Rosmond
<br>
<p><p><p>On Thu, 2015-01-08 at 20:28 +0100, Diego Avesani wrote:
<br>
<span class="quotelev1">&gt; the attachment
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8 January 2015 at 19:44, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;         Dear all,
</span><br>
<span class="quotelev1">&gt;         I found the error. 
</span><br>
<span class="quotelev1">&gt;         There is a  Ndata2send(iCPU) instead of Ndata2recv(iCPU).
</span><br>
<span class="quotelev1">&gt;         In the attachment there is the correct version of the program.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Only one thing, could do you check if the use of MPI_WAITALL
</span><br>
<span class="quotelev1">&gt;         and MPI_BARRIER is correct?
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Thanks again
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Diego
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         On 8 January 2015 at 18:48, Diego Avesani
</span><br>
<span class="quotelev1">&gt;         &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;                 Dear all,
</span><br>
<span class="quotelev1">&gt;                 thanks thank a lot, I am learning a lot.
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 I have written a simple program that send vectors of
</span><br>
<span class="quotelev1">&gt;                 integers from a CPU to another.
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 The program is written (at least for now) for 4 CPU.
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 The program is quite simple:
</span><br>
<span class="quotelev1">&gt;                 Each CPU knows how many data has to send to the other
</span><br>
<span class="quotelev1">&gt;                 CPUs. This info is than send to the other CPUS. In
</span><br>
<span class="quotelev1">&gt;                 this way each CPU knows how may data has to receive
</span><br>
<span class="quotelev1">&gt;                 from other CPUs.
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 This part of the program works.
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 The problem is in the second part.
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 In the second part, each processor sends a vector of
</span><br>
<span class="quotelev1">&gt;                 integer to the other processor. The size is given and
</span><br>
<span class="quotelev1">&gt;                 each CPU knows the size of the incoming vector form
</span><br>
<span class="quotelev1">&gt;                 the first part of the program.
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 In this second part the program fails and I do not
</span><br>
<span class="quotelev1">&gt;                 know why.
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 In the attachment you can find the program. Could you
</span><br>
<span class="quotelev1">&gt;                 please help me. Problably I didn't understand properly
</span><br>
<span class="quotelev1">&gt;                 the ISEND and IRECV subroutine. 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 Thanks again
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 Diego
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26131.php">http://www.open-mpi.org/community/lists/users/2015/01/26131.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26133.php">VanEss.Michael: "[OMPI users] libpsm_infinipath issues?"</a>
<li><strong>Previous message:</strong> <a href="26131.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>In reply to:</strong> <a href="26131.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26137.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26137.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
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
