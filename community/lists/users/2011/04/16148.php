<?
$subject_val = "[OMPI users] openmpi self checkpointing - error while running example";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 06:05:52 2011" -->
<!-- isoreceived="20110406100552" -->
<!-- sent="Wed, 6 Apr 2011 10:05:45 +0000" -->
<!-- isosent="20110406100545" -->
<!-- name="Hellm&#252;ller  Roman" -->
<!-- email="hroman_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi self checkpointing - error while running example" -->
<!-- id="41409C086371124DB9E054F9B1A8506F9345_at_MBX10.d.ethz.ch" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] openmpi self checkpointing - error while running example<br>
<strong>From:</strong> Hellm&#252;ller  Roman (<em>hroman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 06:05:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16149.php">Nguyen Toan: "Re: [OMPI users] openmpi self checkpointing - error while running example"</a>
<li><strong>Previous message:</strong> <a href="16147.php">David Zhang: "Re: [OMPI users] deny permission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16149.php">Nguyen Toan: "Re: [OMPI users] openmpi self checkpointing - error while running example"</a>
<li><strong>Reply:</strong> <a href="16149.php">Nguyen Toan: "Re: [OMPI users] openmpi self checkpointing - error while running example"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16618.php">Faisal: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I'm trying to get fault tolerant ompi running on our cluster for my semesterthesis.
<br>
<p>Build &amp; compile were successful, blcr checkpointing works. openmpi 1.5.3, blcr 0.8.2
<br>
<p>Now i'm trying to set up the SELF checkpointing. the example from <a href="http://osl.iu.edu/research/ft/ompi-cr/examples.php">http://osl.iu.edu/research/ft/ompi-cr/examples.php</a> does not work. I can run the application and also do checkpoints, but restarting won't work.  I got the following error by doning as sugested:
<br>
<p>mpicc my-app.c -export -export-dynamic -o my-app
<br>
<p>mpirun -np 2 -am ft-enable-cr -mca crs_self_prefix my_personal my-app
<br>
<p>hroman_at_cbl1 ~ $ ompi-restart ompi_global_snapshot_27167.ckpt/
<br>
--------------------------------------------------------------------------
<br>
Error: Unable to obtain the proper restart command to restart from the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checkpoint file (opal_snapshot_0.ckpt). Returned -1.
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
Error: Unable to obtain the proper restart command to restart from the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checkpoint file (opal_snapshot_1.ckpt). Returned -1.
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
<p>i also tryed around with setting the path in the example file (restart_path variable), changing the checkpoint directorys, and running the application in different directorys...
<br>
<p>do you have an idea where the error could be?
<br>
<p>here <a href="http://n.ethz.ch/~hroman/downloads/ompi_mailinglist.tar.gz<http://n.ethz.ch/%7Ehroman/downloads/ompi_mailinglist.tar.gz">http://n.ethz.ch/~hroman/downloads/ompi_mailinglist.tar.gz<http://n.ethz.ch/%7Ehroman/downloads/ompi_mailinglist.tar.gz</a>&gt; (40MB) you'll find the library and the build of openmpi &amp; blcr as well as the env variables and the output of ompi_info. there is one for the login and the other for the compute nodes due to different kernels.  and here <a href="http://n.ethz.ch/~hroman/downloads/ompi_global_snapshot_27167.ckpt.tar.gz<http://n.ethz.ch/%7Ehroman/downloads/ompi_global_snapshot_27167.ckpt.tar.gz">http://n.ethz.ch/~hroman/downloads/ompi_global_snapshot_27167.ckpt.tar.gz<http://n.ethz.ch/%7Ehroman/downloads/ompi_global_snapshot_27167.ckpt.tar.gz</a>&gt; there is the produced checkpoint. please let me know if more outputs are needed.
<br>
<p>cheers
<br>
roman
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16149.php">Nguyen Toan: "Re: [OMPI users] openmpi self checkpointing - error while running example"</a>
<li><strong>Previous message:</strong> <a href="16147.php">David Zhang: "Re: [OMPI users] deny permission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16149.php">Nguyen Toan: "Re: [OMPI users] openmpi self checkpointing - error while running example"</a>
<li><strong>Reply:</strong> <a href="16149.php">Nguyen Toan: "Re: [OMPI users] openmpi self checkpointing - error while running example"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16618.php">Faisal: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
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
