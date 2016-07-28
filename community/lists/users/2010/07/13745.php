<?
$subject_val = "Re: [OMPI users] Question on checkpoint overhead in Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 22 13:07:15 2010" -->
<!-- isoreceived="20100722170715" -->
<!-- sent="Fri, 23 Jul 2010 02:07:10 +0900" -->
<!-- isosent="20100722170710" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on checkpoint overhead in Open MPI" -->
<!-- id="AANLkTilWUaPLer2Mn_hY5O0dgJ9lUcKnFJI6Tje7RhTG_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B35081B4-89A3-4345-9552-75BB6CA77D16_at_open-mpi.org" -->
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
<strong>From:</strong> Nguyen Toan (<em>nguyentoan1508_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-22 13:07:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13746.php">Nguyen Toan: "Re: [OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="13744.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>In reply to:</strong> <a href="13672.php">Josh Hursey: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Josh,
<br>
Thank you very much for the reply. I am sorry if my question was unclear, so
<br>
please let me organize my question again.
<br>
Currently I am applying the staging technique with the mca-params.conf
<br>
setting as follows:
<br>
snapc_base_store_in_place=0  # enable remote file transfer to global storage
<br>
crs_base_snapshot_dir=/ssd/tmp/ckpt/local
<br>
snapc_base_global_snapshot_dir=/ssd/tmp/ckpt/global
<br>
<p>and I am concerned with the amount &quot;Others&quot; = checkpoint latency -
<br>
checkpoint overhead.
<br>
According to your answer, remote file transfer is done asynchronously while
<br>
the application continues execution.
<br>
<span class="quotelev1">&gt;From my observation the overhead of &quot;Others&quot; increases greatly when the data
</span><br>
size and the number of processes increases. So is the time of scp for file
<br>
transferring to stable storage included mainly in &quot;Others&quot;?
<br>
As you said the amount of checkpoint overhead is application and system
<br>
configuration specific but in general is there any relationship between
<br>
&quot;Others&quot; and the number of processes or data size?
<br>
Thank you.
<br>
<p>Best Regards,
<br>
Nguyen Toan
<br>
<p>On Sat, Jul 17, 2010 at 6:25 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The amount of checkpoint overhead is application and system configuration
</span><br>
<span class="quotelev1">&gt; specific. So it is impossible to give you a good answer to how much
</span><br>
<span class="quotelev1">&gt; checkpoint overhead to expect for your application and system setup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BLCR is only used to capture the single process image. The coordination of
</span><br>
<span class="quotelev1">&gt; the distributed checkpoint includes:
</span><br>
<span class="quotelev1">&gt;  - the time to initiate the checkpoint,
</span><br>
<span class="quotelev1">&gt;  - the time to marshall the network (we currently use an all-to-all
</span><br>
<span class="quotelev1">&gt; bookmark exchange, similar to to what LAM/MPI used),
</span><br>
<span class="quotelev1">&gt;  - Store the local checkpoints to stable storage,
</span><br>
<span class="quotelev1">&gt;  - Verify that all of the local checkpoints have been stored successfully,
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;  - Return the handle to the end user.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bulk of the time is spent saving the local checkpoints (a.k.a.
</span><br>
<span class="quotelev1">&gt; snapshots) to stable storage. By default Open MPI saves directly to a
</span><br>
<span class="quotelev1">&gt; globally mounted storage device. So the application is stalled until the
</span><br>
<span class="quotelev1">&gt; checkpoint is complete (checkpoint overhead = checkpoint latency). You can
</span><br>
<span class="quotelev1">&gt; also enable checkpoint staging in which the application saves the checkpoint
</span><br>
<span class="quotelev1">&gt; to a local disk. After which the local daemon stages the file back to stable
</span><br>
<span class="quotelev1">&gt; storage while the application continues execution (checkpoint overhead &lt;&lt;
</span><br>
<span class="quotelev1">&gt; checkpoint latency).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are concerned with scaling, definitely look at the staging
</span><br>
<span class="quotelev1">&gt; technique.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 7, 2010, at 12:25 PM, Nguyen Toan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt; &gt; I have a question concerning the checkpoint overhead in Open MPI, which
</span><br>
<span class="quotelev1">&gt; is the difference taken from the runtime of application execution with and
</span><br>
<span class="quotelev1">&gt; without checkpoint.
</span><br>
<span class="quotelev2">&gt; &gt; I observe that when the data size and the number of processes increases,
</span><br>
<span class="quotelev1">&gt; the runtime of BLCR is very small compared to the overall checkpoint
</span><br>
<span class="quotelev1">&gt; overhead in Open MPI. Is it because of the increase of coordination time for
</span><br>
<span class="quotelev1">&gt; checkpoint? And what is included in the overall checkpoint overhead besides
</span><br>
<span class="quotelev1">&gt; the BLCR's checkpoint overhead and coordination time?
</span><br>
<span class="quotelev2">&gt; &gt; Thank you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Nguyen Toan
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13745/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13746.php">Nguyen Toan: "Re: [OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="13744.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>In reply to:</strong> <a href="13672.php">Josh Hursey: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
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
