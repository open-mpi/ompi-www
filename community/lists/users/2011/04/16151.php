<?
$subject_val = "Re: [OMPI users] openmpi self checkpointing - error while running	example";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 08:13:31 2011" -->
<!-- isoreceived="20110406121331" -->
<!-- sent="Wed, 6 Apr 2011 12:13:25 +0000" -->
<!-- isosent="20110406121325" -->
<!-- name="Hellm&#252;ller  Roman" -->
<!-- email="hroman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi self checkpointing - error while running	example" -->
<!-- id="41409C086371124DB9E054F9B1A8506F9363_at_MBX10.d.ethz.ch" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BANLkTi=T0hoBmpaS5Az9C47JSEfd7qfPug_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi self checkpointing - error while running	example<br>
<strong>From:</strong> Hellm&#252;ller  Roman (<em>hroman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 08:13:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16152.php">Nguyen Toan: "Re: [OMPI users] openmpi self checkpointing - error while running example"</a>
<li><strong>Previous message:</strong> <a href="16150.php">nicolas cordier: "[OMPI users] g95 + open-mpi"</a>
<li><strong>In reply to:</strong> <a href="16149.php">Nguyen Toan: "Re: [OMPI users] openmpi self checkpointing - error while running example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16152.php">Nguyen Toan: "Re: [OMPI users] openmpi self checkpointing - error while running example"</a>
<li><strong>Reply:</strong> <a href="16152.php">Nguyen Toan: "Re: [OMPI users] openmpi self checkpointing - error while running example"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Toan
<br>
<p>Thx for your suggestion. It gives me the following result, which does not tell anything more.
<br>
<p>hroman_at_cbl1 ~/checkpoints $ ompi-restart -v  -machinefile ../semesterthesis/code/code2_self_example/my-hroman-cr-file.ckpt   om
<br>
pi_global_snapshot_28952.ckpt/
<br>
[cbl1:28974] Checking for the existence of (/home/hroman/checkpoints/ompi_global_snapshot_28952.ckpt)
<br>
[cbl1:28974] Restarting from file (ompi_global_snapshot_28952.ckpt/)
<br>
[cbl1:28974]      Exec in self
<br>
ssh: connect to host 15 port 22: Invalid argument
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 28975) died unexpectedly with status 255 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
hroman_at_cbl1 ~/checkpoints $ echo $LD_LIBRARY_PATH
<br>
/cluster/sw/blcr/0.8.2/x86_64/gcc//lib:/cluster/sw/openmpi/1.5.3_ft/x86_64/gcc/lib:/opt/intel/Compiler/11.1/056/lib/intel64
<br>
<p>The library path seems to be ok or should it look different? do you have another idea?
<br>
cheers
<br>
roman
<br>
<p>________________________________
<br>
Von: users-bounces_at_[hidden] [users-bounces_at_[hidden]]&quot; im Auftrag von &quot;Nguyen Toan [nguyentoan1508_at_[hidden]]
<br>
Gesendet: Mittwoch, 6. April 2011 13:20
<br>
Bis: Open MPI Users
<br>
Betreff: Re: [OMPI users] openmpi self checkpointing - error while running example
<br>
<p>Hi Roman,
<br>
<p>Did you try to checkpoint and restart with the parameter &quot;-machinefile&quot;. It may work.
<br>
<p>Regards,
<br>
Nguyen Toan
<br>
<p>On Wed, Apr 6, 2011 at 7:05 PM, Hellm&#252;ller Roman &lt;hroman_at_[hidden]&lt;mailto:hroman_at_[hidden]&gt;&gt; wrote:
<br>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checkpoint file (opal_snapshot_0.ckpt). Returned -1.
<br>
<p>--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
Error: Unable to obtain the proper restart command to restart from the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checkpoint file (opal_snapshot_1.ckpt). Returned -1.
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16152.php">Nguyen Toan: "Re: [OMPI users] openmpi self checkpointing - error while running example"</a>
<li><strong>Previous message:</strong> <a href="16150.php">nicolas cordier: "[OMPI users] g95 + open-mpi"</a>
<li><strong>In reply to:</strong> <a href="16149.php">Nguyen Toan: "Re: [OMPI users] openmpi self checkpointing - error while running example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16152.php">Nguyen Toan: "Re: [OMPI users] openmpi self checkpointing - error while running example"</a>
<li><strong>Reply:</strong> <a href="16152.php">Nguyen Toan: "Re: [OMPI users] openmpi self checkpointing - error while running example"</a>
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
