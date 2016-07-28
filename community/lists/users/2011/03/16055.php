<?
$subject_val = "[OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 30 10:34:02 2011" -->
<!-- isoreceived="20110330143402" -->
<!-- sent="Wed, 30 Mar 2011 14:33:56 +0000" -->
<!-- isosent="20110330143356" -->
<!-- name="Hellm&#252;ller  Roman" -->
<!-- email="hroman_at_[hidden]" -->
<!-- subject="[OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine." -->
<!-- id="41409C086371124DB9E054F9B1A8506F8FE3_at_MBX10.d.ethz.ch" -->
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
<strong>Subject:</strong> [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine.<br>
<strong>From:</strong> Hellm&#252;ller  Roman (<em>hroman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-30 10:33:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16056.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Previous message:</strong> <a href="16054.php">Jeff Squyres: "Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16062.php">Hellmüller  Roman: "Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
<li><strong>Reply:</strong> <a href="16062.php">Hellmüller  Roman: "Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I'm trying to get fault tolerant ompi running on our cluster for my semesterthesis.
<br>
<p>On the login node i was successful, checkpointing works.
<br>
Since the compute nodes have different kernels, i had to compile blcr on the compute nodes again.  blcr on the compute nodes works. after that i installed openmpi (1.5.3) on the compute nodes. Letting a normal mpi program run works. also letting it run with -am ft-enable-cr  works, but as soon as i would like to take a checkpoint it crashes:
<br>
<p>hroman_at_node15 ~/semesterthesis/code/code1_heat1d $ mpirun -np 4 -am ft-enable-cr ./heatft_mpi
<br>
<p>hroman_at_node15 ~ $ ps -a
<br>
&nbsp;&nbsp;PID TTY          TIME CMD
<br>
22488 pts/0    00:00:00 pbs_mom
<br>
22536 pts/0    00:00:00 bash
<br>
22631 pts/0    00:00:00 mpirun
<br>
22633 pts/0    00:00:03 heatft_mpi
<br>
22634 pts/0    00:00:03 heatft_mpi
<br>
22635 pts/0    00:00:03 heatft_mpi
<br>
22636 pts/0    00:00:03 heatft_mpi
<br>
22743 pts/1    00:00:00 ps
<br>
<p>hroman_at_node15 ~ $ ompi-checkpoint 22631
<br>
--------------------------------------------------------------------------
<br>
Error: Unable to find a list of active MPIRUN processes on this machine.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This could be due to one of the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- The PID specified (22631) is not that of an active MPIRUN.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- The session directory location could not be found/parsed.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi-checkpoint attempted to find the session directory:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/tmp//openmpi-sessions-hroman_at_node15_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Check to make sure that this directory exists while the MPIRUN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;process is running.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Return Code: -13 (Not found)
<br>
<p>--------------------------------------------------------------------------
<br>
<p>I've tried it with an other application, that doesn't change anything. I also tried to set the checkpoint directorys in $prefix/ect/openmpi-mca-params.conf but that didn't seem to have any effect. however if i write errors in this file (smth that is no parameter eg. &quot;hello world&quot;) it will complain, so it seems to read the file.
<br>
I also checked the environement variables but they seem to be ok, as far as i can tell.
<br>
<p>do you have an idea where the error could be?
<br>
<p>here <a href="http://n.ethz.ch/~hroman/downloads/ompi_mailinglist.tar.gz<http://n.ethz.ch/%7Ehroman/downloads/ompi_mailinglist.tar.gz">http://n.ethz.ch/~hroman/downloads/ompi_mailinglist.tar.gz<http://n.ethz.ch/%7Ehroman/downloads/ompi_mailinglist.tar.gz</a>&gt; (40MB) you'll find the library and the build of openmpi &amp; blcr as well as the env variables and the output of ompi_info. please let me know if more outputs are needed.
<br>
<p>cheers
<br>
roman
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16056.php">Michele Marena: "Re: [OMPI users] Shared Memory Performance Problem."</a>
<li><strong>Previous message:</strong> <a href="16054.php">Jeff Squyres: "Re: [OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16062.php">Hellmüller  Roman: "Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
<li><strong>Reply:</strong> <a href="16062.php">Hellmüller  Roman: "Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
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
