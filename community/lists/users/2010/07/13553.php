<?
$subject_val = "Re: [OMPI users] mpirun hang up randomly";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 05:20:41 2010" -->
<!-- isoreceived="20100709092041" -->
<!-- sent="Fri, 9 Jul 2010 03:20:29 -0600" -->
<!-- isosent="20100709092029" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hang up randomly" -->
<!-- id="06D1ABC3-5E5D-4A9A-97CF-5835BE63B56A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTil7EHiNZqz1DhZoUpBowxrc8mYaWTEGPh93B2tu_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hang up randomly<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 05:20:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13554.php">Ralph Castain: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Previous message:</strong> <a href="13552.php">Andreas Sch&#228;fer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>In reply to:</strong> <a href="13550.php">Harichand M V: "[OMPI users] mpirun hang up randomly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13575.php">Harchand M V: "Re: [OMPI users] mpirun hang up randomly"</a>
<li><strong>Reply:</strong> <a href="13575.php">Harchand M V: "Re: [OMPI users] mpirun hang up randomly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While your method starts mpirun itself nohup, the mpi processes themselves are not launched that way and therefore run in the foreground. This message indicates that at least one of those mpi processes received a hangup signal and aborted. Even though mpirun won't get the signal itself, it does detect that the mpi processes abnormally terminated and shuts down the job.
<br>
<p>Afraid you'll have to figure out why your mpi processes are getting hangup signals.
<br>
<p><p>On Jul 8, 2010, at 11:25 PM, Harichand M V wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am getting hang ups in mpi job randomly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ..............
</span><br>
<span class="quotelev1">&gt; ...........
</span><br>
<span class="quotelev1">&gt;   IT:20760 CF:   0.7743 Time:  1540.0 MaxMin:20.69/5  :20.12/12 
</span><br>
<span class="quotelev1">&gt;   IT:20770 CF:   0.7734 Time:  1560.2 MaxMin:20.50/1  :19.31/5  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 9399 on node node1 exited on signal 1 (Hangup).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node1:09356] filem:rsh: close()
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: component rsh closed
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: component default closed
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: unloading component default
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: component hnp closed
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: unloading component hnp
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: component round_robin closed
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: unloading component round_robin
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: component rsh closed
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: component default closed
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: unloading component default
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: component bad closed
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: unloading component bad
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: unloading component binomial
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: component tcp closed
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: component oob closed
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: unloading component oob
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: unloading component auto_detect
</span><br>
<span class="quotelev1">&gt; [node1:09356] mca: base: close: unloading component linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using open mpi version 1.2.7 over infiniband.
</span><br>
<span class="quotelev1">&gt; I was running the application over 15 nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; job is started using nohup to run it in back ground.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Harichand M V
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
<li><strong>Next message:</strong> <a href="13554.php">Ralph Castain: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Previous message:</strong> <a href="13552.php">Andreas Sch&#228;fer: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>In reply to:</strong> <a href="13550.php">Harichand M V: "[OMPI users] mpirun hang up randomly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13575.php">Harchand M V: "Re: [OMPI users] mpirun hang up randomly"</a>
<li><strong>Reply:</strong> <a href="13575.php">Harchand M V: "Re: [OMPI users] mpirun hang up randomly"</a>
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
