<?
$subject_val = "Re: [OMPI users] MPI_Recv hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 09:22:51 2012" -->
<!-- isoreceived="20120509132251" -->
<!-- sent="Wed, 09 May 2012 15:24:48 +0200" -->
<!-- isosent="20120509132448" -->
<!-- name="Eduardo Morras" -->
<!-- email="nec556_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Recv hangs" -->
<!-- id="4FA882800008551A_at_" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1336146099.8607.2514.camel_at_hokuto" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Recv hangs<br>
<strong>From:</strong> Eduardo Morras (<em>nec556_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 09:24:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19230.php">Jeff Squyres: "Re: [OMPI users] Why is the eager limit set to 12K?"</a>
<li><strong>Previous message:</strong> <a href="19228.php">seshendra seshu: "[OMPI users] Regarding the execution time"</a>
<li><strong>In reply to:</strong> <a href="19196.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19232.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19232.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay, and sorry again because in last mail i had the 
<br>
wrong taste that it was some kind of homework problem.
<br>
<p>At 17:41 04/05/2012, you wrote:
<br>
<span class="quotelev2">&gt; &gt; The logic of send/recv looks ok. Now, in 5 and 7, recvSize(p2) and
</span><br>
<span class="quotelev2">&gt; &gt; recvSize(p1) function what value returns?
</span><br>
<span class="quotelev1">&gt;All the sendSizes and RecvSizes are constant between iterations and are
</span><br>
<span class="quotelev1">&gt;calculated as a setup before all the calculations start.
</span><br>
<p>&lt;snip&gt;
<br>
<p><span class="quotelev1">&gt;Do you know what could cause the program to hang with the default value
</span><br>
<span class="quotelev1">&gt;(310) and to work fine with 305? I also tested it with 311 but it hanged
</span><br>
<span class="quotelev1">&gt;so it seems that it is not enough to activate the SEND flag.
</span><br>
<p>On your code, the only point where it could fail is if one of the 
<br>
precalculated message size values is wrongly calculated and executes 
<br>
the Recieve where it shouldn't.
<br>
<p>&nbsp;From previous mails i understand that no if(ok!=MPI... line fires 
<br>
and there's no Sender waiting. The Ssend ends when the Recv starts to 
<br>
receive, not when the Recv ends the receive, so the sender may get an 
<br>
Ok but if there's an error Recv keeps the block. As you are using 
<br>
blocking communications, you can't do anything to prevent this, for 
<br>
example, check the Recv status while receiving.
<br>
<p>Try to use Send instead Ssend (it should work but it could hang too) 
<br>
or change design to a non-blocking approach.
<br>
<p>HTH
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19230.php">Jeff Squyres: "Re: [OMPI users] Why is the eager limit set to 12K?"</a>
<li><strong>Previous message:</strong> <a href="19228.php">seshendra seshu: "[OMPI users] Regarding the execution time"</a>
<li><strong>In reply to:</strong> <a href="19196.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19232.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Reply:</strong> <a href="19232.php">Jorge Chiva Segura: "Re: [OMPI users] MPI_Recv hangs"</a>
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
