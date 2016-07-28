<?
$subject_val = "Re: [OMPI users] ORTE has lost communication";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 11:39:00 2016" -->
<!-- isoreceived="20160516153900" -->
<!-- sent="Mon, 16 May 2016 12:38:58 -0300" -->
<!-- isosent="20160516153858" -->
<!-- name="Zabiziz Zaz" -->
<!-- email="zabiziz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ORTE has lost communication" -->
<!-- id="CAJfyiotPYueFM0XAMg5QP_73ZGowtccZKga4KnF38AfUEN0T2w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5uz0Nohk9o7aSk3+zuKWdN0LcuENjZ2rDioizbAJCTpBA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ORTE has lost communication<br>
<strong>From:</strong> Zabiziz Zaz (<em>zabiziz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 11:38:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29222.php">Thomas Jahns: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>Previous message:</strong> <a href="29220.php">Ralph Castain: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>In reply to:</strong> <a href="29219.php">Gilles Gouaillardet: "[OMPI users]  ORTE has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29220.php">Ralph Castain: "Re: [OMPI users] ORTE has lost communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My application have a heartbeat that checks if a node is alive and can
<br>
redistribute a task to another node if the master lost communication with
<br>
it. The application also have a checkpoint/restart, but since I usually
<br>
have hundreds of nodes for one job and usually takes a long time to restart
<br>
the job, in this case I would prefer to go on with the job and not
<br>
terminate it. It's possible?
<br>
<p>Regards,
<br>
Guilherme.
<br>
<p>On Mon, May 16, 2016 at 12:28 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What do you mean by fault tolerant application ?
</span><br>
<span class="quotelev1">&gt; from an OpenMPI point of view, if such a connection is lost, your
</span><br>
<span class="quotelev1">&gt; application will no more be able to communicate, so killing it is the best
</span><br>
<span class="quotelev1">&gt; option.
</span><br>
<span class="quotelev1">&gt; if your application has built in checkpoint/restart, then you have to
</span><br>
<span class="quotelev1">&gt; restart it with mpirun after the first mpirun aborts and your environment
</span><br>
<span class="quotelev1">&gt; is fixed.
</span><br>
<span class="quotelev1">&gt; or your batch manager should restart/resubmit the job, possibly on a
</span><br>
<span class="quotelev1">&gt; different set of nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; makes sense ?
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
<span class="quotelev1">&gt; On Monday, May 16, 2016, Zabiziz Zaz &lt;zabiziz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I'm using openmpi-1.10.2 and sometimes I'm receiving the message below:
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ORTE has lost communication with its daemon located on node:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   hostname:  xxxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is usually due to either a failure of the TCP network
</span><br>
<span class="quotelev2">&gt;&gt; connection to the node, or possibly an internal failure of
</span><br>
<span class="quotelev2">&gt;&gt; the daemon itself. We cannot recover from this failure, and
</span><br>
<span class="quotelev2">&gt;&gt; therefore will terminate the job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My applications are fault tolerant and the jobs usually takes weeks to
</span><br>
<span class="quotelev2">&gt;&gt; finish. Sometimes a hardware problem occurs with one node, for example, the
</span><br>
<span class="quotelev2">&gt;&gt; node shutdown. I don't want mpi to terminate the job, my jobs usually have
</span><br>
<span class="quotelev2">&gt;&gt; hundreds of nodes and I don't care if 1 node lost communication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's possible to change this behavior of openmpi? I tried to
</span><br>
<span class="quotelev2">&gt;&gt; set orte_abort_on_non_zero_status to 0 but it didn't work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Guilherme.
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29219.php">http://www.open-mpi.org/community/lists/users/2016/05/29219.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29221/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29222.php">Thomas Jahns: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>Previous message:</strong> <a href="29220.php">Ralph Castain: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>In reply to:</strong> <a href="29219.php">Gilles Gouaillardet: "[OMPI users]  ORTE has lost communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29220.php">Ralph Castain: "Re: [OMPI users] ORTE has lost communication"</a>
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
