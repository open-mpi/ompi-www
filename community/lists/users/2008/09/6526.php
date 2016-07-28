<?
$subject_val = "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 13 11:38:16 2008" -->
<!-- isoreceived="20080913153816" -->
<!-- sent="Sat, 13 Sep 2008 11:38:12 -0400" -->
<!-- isosent="20080913153812" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?" -->
<!-- id="48CBDE64.1080900_at_neuralbs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="845f51b10809130550l194e798bx4a3031f6f978f794_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?<br>
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-13 11:38:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6527.php">rahmani: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Previous message:</strong> <a href="6525.php">Enrico Barausse: "[OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>In reply to:</strong> <a href="6525.php">Enrico Barausse: "[OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6527.php">rahmani: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Enrico Barausse wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I apologize in advance if my question is naive, but I started to use
</span><br>
<span class="quotelev1">&gt; open-mpi only one week ago.
</span><br>
<span class="quotelev1">&gt; I have a complicated fortran 90 code which is giving me a segmentation
</span><br>
<span class="quotelev1">&gt; fault (address not mapped). I tracked down the problem to the
</span><br>
<span class="quotelev1">&gt; following lines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                      call
</span><br>
<span class="quotelev1">&gt; MPI_Send(toroot,3,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;                                      call
</span><br>
<span class="quotelev1">&gt; MPI_RECV(tonode,4,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Well, for starters, your receive count doesn't match the send count. (4 
<br>
Vs 3). Is this a typo?
<br>
<span class="quotelev1">&gt; the MPI_send is executed by a process (say 1) which sends the array
</span><br>
<span class="quotelev1">&gt; toroot to another process (say 0). Process 0 successfully receives the
</span><br>
<span class="quotelev1">&gt; array toroot (I print out its components and they are correct), does
</span><br>
<span class="quotelev1">&gt; some calculations on it and sends back an array tonode to process 1.
</span><br>
<span class="quotelev1">&gt; Nevertheless, the MPI_Send routine above never returns controls to
</span><br>
<span class="quotelev1">&gt; process 1 (although the array toroot seems to have been transmitted
</span><br>
<span class="quotelev1">&gt; alright) and gives a segmentation fault (Signal code: Address not
</span><br>
<span class="quotelev1">&gt; mapped (1))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, if replace the two lines above with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                 call
</span><br>
<span class="quotelev1">&gt; MPI_sendrecv(toroot,3,MPI_DOUBLE_PRECISION,root,n,tonode,4,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get no errors and the code works perfectly (I tested it vs the
</span><br>
<span class="quotelev1">&gt; serial version from which I started). But, and here is my question,
</span><br>
<span class="quotelev1">&gt; shouldn't MPI_sendrecv be equivalent to MPI_Send followed by MPI_RECV?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thank you in advance for helping with this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; enrico
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6527.php">rahmani: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Previous message:</strong> <a href="6525.php">Enrico Barausse: "[OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>In reply to:</strong> <a href="6525.php">Enrico Barausse: "[OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6527.php">rahmani: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
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
