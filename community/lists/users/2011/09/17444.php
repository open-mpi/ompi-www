<?
$subject_val = "Re: [OMPI users] Fault Tolerant with openib";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 09:39:47 2011" -->
<!-- isoreceived="20110927133947" -->
<!-- sent="Tue, 27 Sep 2011 10:39:41 -0300" -->
<!-- isosent="20110927133941" -->
<!-- name="Guilherme V" -->
<!-- email="list.vilela_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerant with openib" -->
<!-- id="CAB-q1YtVkBX9fgBawpbXXRh9PkRz1UpU2RdF3PxVpQmcUB8Rag_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F88D7157-5A99-4D3E-9164-E717B32BCADE_at_open-mpi.org" -->
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
<strong>From:</strong> Guilherme V (<em>list.vilela_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 09:39:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17445.php">Henderson, Brent: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17443.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>In reply to:</strong> <a href="17419.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant with openib"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you know if is there another patch available so my application treats the
<br>
fail of one node instead of mpi kill the job? This is very important for me,
<br>
I have a big cluster and I can't stop my job every time I have some problem
<br>
with just one node.
<br>
<p>Regards
<br>
<p>On Fri, Sep 23, 2011 at 4:34 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 23, 2011, at 1:21 PM, Guilherme V wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using version 1.4.3 and I forgot to tell that I have made a change in
</span><br>
<span class="quotelev1">&gt; the orterun.c line 792:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (ORTE_JOB_STATE_TERMINATED != exit_state) {
</span><br>
<span class="quotelev1">&gt;                     exit(0); /* patch*/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see how that change can keep your job running - we should still
</span><br>
<span class="quotelev1">&gt; have terminated it. All this does is suppress the error reporting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regardless, openib will cause the process to fail under the described
</span><br>
<span class="quotelev1">&gt; circumstances, which should cause OMPI to terminate all running procs. I'm
</span><br>
<span class="quotelev1">&gt; not sure what you are doing with tcp, but it could be that there are
</span><br>
<span class="quotelev1">&gt; alternative paths available - e.g., you have multiple NICs and remove one
</span><br>
<span class="quotelev1">&gt; cable, but the other paths remain viable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; What version of OMPI are you using? The job should terminate in either
</span><br>
<span class="quotelev1">&gt; case - what did you do to keep it running after node failure with tcp?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Sep 23, 2011, at 12:34 PM, Guilherme V wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I want to know if anybody is having problems with fault tolerant job
</span><br>
<span class="quotelev1">&gt; using infiniband. When I run my job with tcp if anything happens with one
</span><br>
<span class="quotelev1">&gt; node, my job keeps running, but if I change my job to use infiniband if
</span><br>
<span class="quotelev1">&gt; anything happens with the infiniband (i.e cable problems) my job fails.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Anybody knows if there is something different that need to be done when
</span><br>
<span class="quotelev1">&gt; using openib instead tcp?
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
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17444/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17445.php">Henderson, Brent: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17443.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>In reply to:</strong> <a href="17419.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant with openib"</a>
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
