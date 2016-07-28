<?
$subject_val = "[OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 13:10:54 2010" -->
<!-- isoreceived="20100416171054" -->
<!-- sent="Fri, 16 Apr 2010 19:10:48 +0200" -->
<!-- isosent="20100416171048" -->
<!-- name="Mario Ogrizek" -->
<!-- email="mario.guardian_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile" -->
<!-- id="p2hfc029d6c1004161010jbdcd01e4t317145fe69ab57dd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="v2xfc029d6c1004161008lc0e92cdav9ef3d85ab8ebe1c9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile<br>
<strong>From:</strong> Mario Ogrizek (<em>mario.guardian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-16 13:10:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12657.php">Timur Magomedov: "Re: [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12655.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12657.php">Timur Magomedov: "Re: [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Reply:</strong> <a href="12657.php">Timur Magomedov: "Re: [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Reply:</strong> <a href="12659.php">Ralph Castain: "Re: [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, im not sure why should i name it /openmpi-default-hostfile
<br>
Especially, because mpirun v1.2 executes without any errors.
<br>
But, i made a copy named /openmpi-default-hostfile, and still, the same
<br>
result.
<br>
<p>This is the whole error message for a simple hello world program:
<br>
<p>Open RTE was unable to open the hostfile:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;usr/local/etc/openmpi-default-hostfile
<br>
Check to make sure the path and filename are correct.
<br>
--------------------------------------------------------------------------
<br>
[Mario.local:04300] [[114,0],0] ORTE_ERROR_LOG: Not found in file
<br>
base/ras_base_allocate.c at line 186
<br>
[Mario.local:04300] [[114,0],0] ORTE_ERROR_LOG: Not found in file
<br>
base/plm_base_launch_support.c at line 72
<br>
[Mario.local:04300] [[114,0],0] ORTE_ERROR_LOG: Not found in file
<br>
plm_rsh_module.c at line 990
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
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
mpirun: clean termination accomplished
<br>
<p><p>ps. PTP is a parallel tools platform plugin for eclipse
<br>
<p>Regards,
<br>
<p>Mario
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12656/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12657.php">Timur Magomedov: "Re: [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12655.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12657.php">Timur Magomedov: "Re: [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Reply:</strong> <a href="12657.php">Timur Magomedov: "Re: [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Reply:</strong> <a href="12659.php">Ralph Castain: "Re: [OMPI users] Fwd:  Open MPI v1.4 cant find default hostfile"</a>
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
