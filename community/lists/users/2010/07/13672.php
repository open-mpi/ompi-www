<?
$subject_val = "Re: [OMPI users] Question on checkpoint overhead in Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 16 17:25:24 2010" -->
<!-- isoreceived="20100716212524" -->
<!-- sent="Fri, 16 Jul 2010 17:25:22 -0400" -->
<!-- isosent="20100716212522" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on checkpoint overhead in Open MPI" -->
<!-- id="B35081B4-89A3-4345-9552-75BB6CA77D16_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTilthgFkDIHRbMnAG_UEeUSPrpa0LB9s8ucPC98L_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on checkpoint overhead in Open MPI<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-16 17:25:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13673.php">Josh Hursey: "Re: [OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="13671.php">Prentice Bisbal: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="13505.php">Nguyen Toan: "[OMPI users] Question on checkpoint overhead in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13745.php">Nguyen Toan: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>Reply:</strong> <a href="13745.php">Nguyen Toan: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The amount of checkpoint overhead is application and system configuration specific. So it is impossible to give you a good answer to how much checkpoint overhead to expect for your application and system setup.
<br>
<p>BLCR is only used to capture the single process image. The coordination of the distributed checkpoint includes:
<br>
&nbsp;- the time to initiate the checkpoint,
<br>
&nbsp;- the time to marshall the network (we currently use an all-to-all bookmark exchange, similar to to what LAM/MPI used),
<br>
&nbsp;- Store the local checkpoints to stable storage,
<br>
&nbsp;- Verify that all of the local checkpoints have been stored successfully, and
<br>
&nbsp;- Return the handle to the end user.
<br>
<p>The bulk of the time is spent saving the local checkpoints (a.k.a. snapshots) to stable storage. By default Open MPI saves directly to a globally mounted storage device. So the application is stalled until the checkpoint is complete (checkpoint overhead = checkpoint latency). You can also enable checkpoint staging in which the application saves the checkpoint to a local disk. After which the local daemon stages the file back to stable storage while the application continues execution (checkpoint overhead &lt;&lt; checkpoint latency).
<br>
<p>If you are concerned with scaling, definitely look at the staging technique.
<br>
<p>Does that help?
<br>
<p>-- Josh
<br>
<p>On Jul 7, 2010, at 12:25 PM, Nguyen Toan wrote:
<br>
<p><span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt; I have a question concerning the checkpoint overhead in Open MPI, which is the difference taken from the runtime of application execution with and without checkpoint.
</span><br>
<span class="quotelev1">&gt; I observe that when the data size and the number of processes increases, the runtime of BLCR is very small compared to the overall checkpoint overhead in Open MPI. Is it because of the increase of coordination time for checkpoint? And what is included in the overall checkpoint overhead besides the BLCR's checkpoint overhead and coordination time?
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Nguyen Toan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13673.php">Josh Hursey: "Re: [OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="13671.php">Prentice Bisbal: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="13505.php">Nguyen Toan: "[OMPI users] Question on checkpoint overhead in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13745.php">Nguyen Toan: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>Reply:</strong> <a href="13745.php">Nguyen Toan: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
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
