<?
$subject_val = "Re: [OMPI users] openmpi self checkpointing - error while running example";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 07:20:52 2011" -->
<!-- isoreceived="20110406112052" -->
<!-- sent="Wed, 6 Apr 2011 20:20:46 +0900" -->
<!-- isosent="20110406112046" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi self checkpointing - error while running example" -->
<!-- id="BANLkTi=T0hoBmpaS5Az9C47JSEfd7qfPug_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="41409C086371124DB9E054F9B1A8506F9345_at_MBX10.d.ethz.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi self checkpointing - error while running example<br>
<strong>From:</strong> Nguyen Toan (<em>nguyentoan1508_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 07:20:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16150.php">nicolas cordier: "[OMPI users] g95 + open-mpi"</a>
<li><strong>Previous message:</strong> <a href="16148.php">Hellm&#252;ller  Roman: "[OMPI users] openmpi self checkpointing - error while running example"</a>
<li><strong>In reply to:</strong> <a href="16148.php">Hellm&#252;ller  Roman: "[OMPI users] openmpi self checkpointing - error while running example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16151.php">Hellmüller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<li><strong>Reply:</strong> <a href="16151.php">Hellmüller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Roman,
<br>
<p>Did you try to checkpoint and restart with the parameter &quot;-machinefile&quot;. It
<br>
may work.
<br>
<p>Regards,
<br>
Nguyen Toan
<br>
<p>On Wed, Apr 6, 2011 at 7:05 PM, Hellm&#252;ller Roman &lt;hroman_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to get fault tolerant ompi running on our cluster for my
</span><br>
<span class="quotelev1">&gt; semesterthesis.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Build &amp; compile were successful, blcr checkpointing works. openmpi 1.5.3,
</span><br>
<span class="quotelev1">&gt; blcr 0.8.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now i'm trying to set up the SELF checkpointing. the example from
</span><br>
<span class="quotelev1">&gt; <a href="http://osl.iu.edu/research/ft/ompi-cr/examples.php">http://osl.iu.edu/research/ft/ompi-cr/examples.php</a> does not work. I can
</span><br>
<span class="quotelev1">&gt; run the application and also do checkpoints, but restarting won't work.  I
</span><br>
<span class="quotelev1">&gt; got the following error by doning as sugested:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc my-app.c -export -export-dynamic -o my-app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -am ft-enable-cr -mca crs_self_prefix my_personal my-app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hroman_at_cbl1 ~ $ ompi-restart ompi_global_snapshot_27167.ckpt/
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: Unable to obtain the proper restart command to restart from the
</span><br>
<span class="quotelev1">&gt;       checkpoint file (opal_snapshot_0.ckpt). Returned -1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: Unable to obtain the proper restart command to restart from the
</span><br>
<span class="quotelev1">&gt;       checkpoint file (opal_snapshot_1.ckpt). Returned -1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i also tryed around with setting the path in the example file (restart_path
</span><br>
<span class="quotelev1">&gt; variable), changing the checkpoint directorys, and running the application
</span><br>
<span class="quotelev1">&gt; in different directorys...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do you have an idea where the error could be?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here <a href="http://n.ethz.ch/~hroman/downloads/ompi_mailinglist.tar.gz">http://n.ethz.ch/~hroman/downloads/ompi_mailinglist.tar.gz</a>&lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://n.ethz.ch/%7Ehroman/downloads/ompi_mailinglist.tar.gz">http://n.ethz.ch/%7Ehroman/downloads/ompi_mailinglist.tar.gz</a>&gt; (40MB)
</span><br>
<span class="quotelev1">&gt; you'll find the library and the build of openmpi &amp; blcr as well as the env
</span><br>
<span class="quotelev1">&gt; variables and the output of ompi_info. there is one for the login and the
</span><br>
<span class="quotelev1">&gt; other for the compute nodes due to different kernels.  and here
</span><br>
<span class="quotelev1">&gt; <a href="http://n.ethz.ch/~hroman/downloads/ompi_global_snapshot_27167.ckpt.tar.gz">http://n.ethz.ch/~hroman/downloads/ompi_global_snapshot_27167.ckpt.tar.gz</a>&lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://n.ethz.ch/%7Ehroman/downloads/ompi_global_snapshot_27167.ckpt.tar.gz">http://n.ethz.ch/%7Ehroman/downloads/ompi_global_snapshot_27167.ckpt.tar.gz</a>&gt;
</span><br>
<span class="quotelev1">&gt; there is the produced checkpoint. please let me know if more outputs are
</span><br>
<span class="quotelev1">&gt; needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers
</span><br>
<span class="quotelev1">&gt; roman
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16149/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16150.php">nicolas cordier: "[OMPI users] g95 + open-mpi"</a>
<li><strong>Previous message:</strong> <a href="16148.php">Hellm&#252;ller  Roman: "[OMPI users] openmpi self checkpointing - error while running example"</a>
<li><strong>In reply to:</strong> <a href="16148.php">Hellm&#252;ller  Roman: "[OMPI users] openmpi self checkpointing - error while running example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16151.php">Hellmüller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<li><strong>Reply:</strong> <a href="16151.php">Hellmüller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
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
