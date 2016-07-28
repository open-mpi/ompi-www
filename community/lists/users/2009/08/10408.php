<?
$subject_val = "Re: [OMPI users] How to make a job abort when one host dies?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 10:59:48 2009" -->
<!-- isoreceived="20090818145948" -->
<!-- sent="Tue, 18 Aug 2009 16:59:25 +0200" -->
<!-- isosent="20090818145925" -->
<!-- name="Oskar Enoksson" -->
<!-- email="enok_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to make a job abort when one host dies?" -->
<!-- id="4A8AC1CD.3010904_at_lysator.liu.se" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="mailman.13563.1250599206.6040.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to make a job abort when one host dies?<br>
<strong>From:</strong> Oskar Enoksson (<em>enok_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 10:59:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10409.php">Scott Atchley: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Previous message:</strong> <a href="10407.php">Ralph Castain: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Maybe in reply to:</strong> <a href="10289.php">Oskar Enoksson: "[OMPI users] How to make a job abort when one host dies?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10409.php">Scott Atchley: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Reply:</strong> <a href="10409.php">Scott Atchley: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Reply:</strong> <a href="10417.php">Patrick Geoffray: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Scott Atchley &lt;atchley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Long answer:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The messages below indicate that these processes were all trying to  
</span><br>
<span class="quotelev1">&gt; send to cl120. It did not ack their messages after 1000 resend  
</span><br>
<span class="quotelev1">&gt; attempts (each retry is attempted with a 0.5 second interval) which is  
</span><br>
<span class="quotelev1">&gt; about 8.3 minutes (500 seconds).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The messages also indicate that the message was a send_small which  
</span><br>
<span class="quotelev1">&gt; means it was 128 bytes or less. MX has MPI like semantics and allow  
</span><br>
<span class="quotelev1">&gt; for completion after the message has been either buffered or  
</span><br>
<span class="quotelev1">&gt; delivered. In this case, it was buffered and OMPI was most likely able  
</span><br>
<span class="quotelev1">&gt; to complete it successfully. The message was not able to be delivered,  
</span><br>
<span class="quotelev1">&gt; however, and its timeout caused MX to fail all future sends to that  
</span><br>
<span class="quotelev1">&gt; host. On the next mx_isend(), OMPI will detect a failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since it does not detect failure, my guess is that the process has not  
</span><br>
<span class="quotelev1">&gt; tried to send again to that host. They then end up waiting forever.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They can change MX's behavior so that it does not complete a send  
</span><br>
<span class="quotelev1">&gt; until the receiver has acked it by exporting:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MX_ZOMBIE_SEND=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will hurt benchmark performance, but real application performance  
</span><br>
<span class="quotelev1">&gt; should not be affected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The question is, however, why is cl120 not acking messages? What is  
</span><br>
<span class="quotelev1">&gt; the application? What MPI calls does this application use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt;   
</span><br>
The reason in this case was that cl120 had some kind of hardware 
<br>
problem, perhaps memory error or myrinet NIC hardware error. The system 
<br>
hung.
<br>
<p>I will try MX_ZOMBIE_SEND=0, thanks for the hint!
<br>
<p>But still I'm curious, is there no way to have some kind of time out 
<br>
time limit on the waiting hosts? E.g. one hour?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10409.php">Scott Atchley: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Previous message:</strong> <a href="10407.php">Ralph Castain: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Maybe in reply to:</strong> <a href="10289.php">Oskar Enoksson: "[OMPI users] How to make a job abort when one host dies?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10409.php">Scott Atchley: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Reply:</strong> <a href="10409.php">Scott Atchley: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Reply:</strong> <a href="10417.php">Patrick Geoffray: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
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
