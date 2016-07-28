<?
$subject_val = "Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 31 11:00:34 2011" -->
<!-- isoreceived="20110331150034" -->
<!-- sent="Thu, 31 Mar 2011 15:00:27 +0000" -->
<!-- isosent="20110331150027" -->
<!-- name="Hellm&#252;ller  Roman" -->
<!-- email="hroman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine." -->
<!-- id="41409C086371124DB9E054F9B1A8506F90A3_at_MBX10.d.ethz.ch" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="41409C086371124DB9E054F9B1A8506F905E_at_MBX10.d.ethz.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine.<br>
<strong>From:</strong> Hellm&#252;ller  Roman (<em>hroman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-31 11:00:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16065.php">fah10_at_[hidden]: "[OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Previous message:</strong> <a href="16063.php">Jeff Squyres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16062.php">Hellm&#252;ller  Roman: "Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
solved
<br>
<p>don't know exactly how. just work on it, set some other parameters/directorys. 
<br>
<p>cheers
<br>
roman
<br>
________________________________________
<br>
Von: users-bounces_at_[hidden] [users-bounces_at_[hidden]]&amp;quot; im Auftrag von &amp;quot;Hellm&#252;ller  Roman [hroman_at_[hidden]]
<br>
Gesendet: Donnerstag, 31. M&#228;rz 2011 11:10
<br>
Bis: Open MPI Users
<br>
Betreff: Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine.
<br>
<p>Hi
<br>
<p>I noticed that the directory  /tmp/openmpi-sessions-hroman_at_cbl1_0 is created on the login nodes but not on the compute nodes. By setting orte_tmpdir_base=/tmp in \$prefix/ect/openmpi-mca-params.conf i could make sure that the session directory is created.
<br>
<p>But when i now try to checkpoint an application i'll get:
<br>
<p>shell1:
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 11175 on node node7 exited on signal 10 (User defined signal 1).
<br>
--------------------------------------------------------------------------
<br>
<p>shell2:
<br>
hroman_at_node7 ~/semesterthesis/code/code1_heat1d $ ps -a
<br>
&nbsp;&nbsp;PID TTY          TIME CMD
<br>
&nbsp;9713 pts/0    00:00:02 pbs_mom
<br>
&nbsp;9761 pts/0    00:00:00 bash
<br>
11170 pts/0    00:00:00 mpirun
<br>
11175 pts/0    00:00:06 heatft_mpi
<br>
11178 pts/1    00:00:00 ps
<br>
hroman_at_node7 ~/semesterthesis/code/code1_heat1d $ ompi-checkpoint -v 11170
<br>
[node7:11184] [  0.00 /   0.01]                 Requested - ...
<br>
[node7:11184] [  0.00 /   0.01]                   Pending - ...
<br>
<p>which never returns. and does not seem to do anything.
<br>
<p>do you have an idea what to try or do, to make it work?
<br>
<p>cheers
<br>
roman
<br>
<p><p>________________________________________
<br>
Von: users-bounces_at_[hidden] [users-bounces_at_[hidden]]&amp;quot; im Auftrag von &amp;quot;Hellm&#252;ller  Roman [hroman_at_[hidden]]
<br>
Gesendet: Mittwoch, 30. M&#228;rz 2011 16:33
<br>
Bis: users_at_[hidden]
<br>
Betreff: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine.
<br>
<p>Hi
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16065.php">fah10_at_[hidden]: "[OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Previous message:</strong> <a href="16063.php">Jeff Squyres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16062.php">Hellm&#252;ller  Roman: "Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
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
