<?
$subject_val = "[OMPI users] Failing to MPI run on my linux cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 10:29:37 2014" -->
<!-- isoreceived="20140108152937" -->
<!-- sent="Wed, 8 Jan 2014 15:29:36 +0000" -->
<!-- isosent="20140108152936" -->
<!-- name="Axel Vi&#240;arsson" -->
<!-- email="axelvinna_at_[hidden]" -->
<!-- subject="[OMPI users] Failing to MPI run on my linux cluster" -->
<!-- id="CABsFK0RKdoPdeE9_rX9-bJ5u7skgFzUkbbJgQ=YqO==wUEf-6w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Failing to MPI run on my linux cluster<br>
<strong>From:</strong> Axel Vi&#240;arsson (<em>axelvinna_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 10:29:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23335.php">Ralph Castain: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>Previous message:</strong> <a href="23333.php">Ralph Castain: "Re: [OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23335.php">Ralph Castain: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>Reply:</strong> <a href="23335.php">Ralph Castain: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey all
<br>
<p>My cluster consist of 2 workstations with hyper threaded Intel Xeon
<br>
processors and an old Dell dual core computer to control them.
<br>
I am failing to mpirun on the cluster.
<br>
<p>1.When executing as user
<br>
<p>[prufa_at_master]$ mpirun -np 16 --hostfile /home/prufa/prufa.mpi_hostfile
<br>
fds_mpi SST1SV20.fds
<br>
<p>Process   0 of  15 is running .....
<br>
<p>forrtl: Permission denied
<br>
forrtl: severe (9): permission to access file denied, unit 4, file
<br>
/share/apps/FDS/FDS6/FDS6/
<br>
Examples/Verkis/FDS6MPI_SST_1STEPVALUES_VEL_20.smv
<br>
<p>2. Executing same command
<br>
<p>forrtl: severe (47): write to READONLY file, unit 4, file
<br>
/share/apps/FDS/FDS6/FDS6/Examples/Verkis/FDS6MPI_SST_1STEPVALUES_VEL_20.smv
<br>
<p>3. When i try one of openmpi examples
<br>
<p>[prufa_at_master]$ mpirun -np 18 /share/apps/openmpi-1.6.5/
<br>
examples/hello_c.c
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it could not access
<br>
or execute an executable:
<br>
<p>Executable: /share/apps/openmpi-1.6.5/examples/hello_c.c
<br>
Node: w0094.stofa.is
<br>
<p>while attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
18 total processes failed to start
<br>
<p><p>Please could you guys help me with this problem.
<br>
<p>Thanks in advance
<br>
<p>Best regards
<br>
Axel
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23334/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23335.php">Ralph Castain: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>Previous message:</strong> <a href="23333.php">Ralph Castain: "Re: [OMPI users] btl_tcp_use_nagle is negated in openmpi-1.7.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23335.php">Ralph Castain: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
<li><strong>Reply:</strong> <a href="23335.php">Ralph Castain: "Re: [OMPI users] Failing to MPI run on my linux cluster"</a>
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
