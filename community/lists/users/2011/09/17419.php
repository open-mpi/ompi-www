<?
$subject_val = "Re: [OMPI users] Fault Tolerant with openib";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 15:34:28 2011" -->
<!-- isoreceived="20110923193428" -->
<!-- sent="Fri, 23 Sep 2011 13:34:19 -0600" -->
<!-- isosent="20110923193419" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerant with openib" -->
<!-- id="F88D7157-5A99-4D3E-9164-E717B32BCADE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAB-q1Ys0WwF+FzWEoU28iVsiUg95ktwFsShg60dR3piVyriODQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fault Tolerant with openib<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 15:34:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17420.php">Vassenkov, Phillip: "[OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17418.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
<li><strong>In reply to:</strong> <a href="17417.php">Guilherme V: "Re: [OMPI users] Fault Tolerant with openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17444.php">Guilherme V: "Re: [OMPI users] Fault Tolerant with openib"</a>
<li><strong>Reply:</strong> <a href="17444.php">Guilherme V: "Re: [OMPI users] Fault Tolerant with openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 23, 2011, at 1:21 PM, Guilherme V wrote:
<br>
<p><span class="quotelev1">&gt; I'm using version 1.4.3 and I forgot to tell that I have made a change in the orterun.c line 792:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (ORTE_JOB_STATE_TERMINATED != exit_state) {
</span><br>
<span class="quotelev1">&gt;                     exit(0); /* patch*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I don't see how that change can keep your job running - we should still have terminated it. All this does is suppress the error reporting.
<br>
<p>Regardless, openib will cause the process to fail under the described circumstances, which should cause OMPI to terminate all running procs. I'm not sure what you are doing with tcp, but it could be that there are alternative paths available - e.g., you have multiple NICs and remove one cable, but the other paths remain viable.
<br>
<p><span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What version of OMPI are you using? The job should terminate in either case - what did you do to keep it running after node failure with tcp? 
</span><br>
<span class="quotelev2">&gt; &gt;On Sep 23, 2011, at 12:34 PM, Guilherme V wrote: 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi, 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I want to know if anybody is having problems with fault tolerant job using infiniband. When I run my job with tcp if anything happens with one node, my job keeps running, but if I change my job to use infiniband if anything happens with the infiniband (i.e cable problems) my job fails. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Anybody knows if there is something different that need to be done when using openib instead tcp? 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Bellow a example of the message I'm receiving from the mpi. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards, 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Guilherme 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17419/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17420.php">Vassenkov, Phillip: "[OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17418.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
<li><strong>In reply to:</strong> <a href="17417.php">Guilherme V: "Re: [OMPI users] Fault Tolerant with openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17444.php">Guilherme V: "Re: [OMPI users] Fault Tolerant with openib"</a>
<li><strong>Reply:</strong> <a href="17444.php">Guilherme V: "Re: [OMPI users] Fault Tolerant with openib"</a>
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
