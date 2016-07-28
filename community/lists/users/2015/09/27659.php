<?
$subject_val = "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 04:12:22 2015" -->
<!-- isoreceived="20150924081222" -->
<!-- sent="Thu, 24 Sep 2015 10:12:16 +0200" -->
<!-- isosent="20150924081216" -->
<!-- name="Patrick Begou" -->
<!-- email="Patrick.Begou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.10.0 bind-to core error" -->
<!-- id="5603B060.1070409_at_legi.grenoble-inp.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="36186CD1-5547-46C3-9886-52D5CDB49E00_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-1.10.0 bind-to core error<br>
<strong>From:</strong> Patrick Begou (<em>Patrick.Begou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-24 04:12:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27660.php">Fabrice Roy: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Previous message:</strong> <a href="27658.php">Gilles Gouaillardet: "Re: [OMPI users] Problem with implementation of Foxa algorithm"</a>
<li><strong>In reply to:</strong> <a href="27650.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27662.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27662.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay. Runing mpirun whith wrong OMPI_MCA_plm_rsh_agent doesn't 
<br>
give any explicit message in OpenMPI-1.10.0.
<br>
<p>How I can show the problem:
<br>
<p>I request 2 nodes, 1cpu on each node, 4 cores on each cpu (so 8 cores availables 
<br>
with cpusets). Node file is:
<br>
<p>[begou_at_frog7 MPI_TESTS]$ cat $OAR_NODEFILE
<br>
frog7
<br>
frog7
<br>
frog7
<br>
frog7
<br>
frog8
<br>
frog8
<br>
frog8
<br>
frog8
<br>
<p>I launch the application (I've added a grep here to limit the output on stdout 
<br>
and juste check processes location):
<br>
<p>[begou_at_frog7 MPI_TESTS]$ mpirun -np 8 --hostfile $OAR_NODEFILE --bind-to core 
<br>
./location.exe |grep 'thread is now running on PU'
<br>
(process 2) thread is now running on PU logical index 2 (OS/physical index 6) on 
<br>
system frog7
<br>
(process 3) thread is now running on PU logical index 3 (OS/physical index 7) on 
<br>
system frog7
<br>
(process 0) thread is now running on PU logical index 0 (OS/physical index 0) on 
<br>
system frog7
<br>
(process 1) thread is now running on PU logical index 1 (OS/physical index 5) on 
<br>
system frog7
<br>
(process 6) thread is now running on PU logical index 2 (OS/physical index 2) on 
<br>
system frog8
<br>
(process 7) thread is now running on PU logical index 3 (OS/physical index 3) on 
<br>
system frog8
<br>
(process 4) thread is now running on PU logical index 0 (OS/physical index 0) on 
<br>
system frog8
<br>
(process 5) thread is now running on PU logical index 1 (OS/physical index 1) on 
<br>
system frog8
<br>
<p>So one process on each core, no oversubscribing allowed with the patch applied 
<br>
in OpenMPI.
<br>
<p>Now I set OMPI_MCA_plm_rsh_agent so something wrong and launch agin the job 
<br>
(without the final grep to have all informations):
<br>
<p>[begou_at_frog7 MPI_TESTS]$ export OMPI_MCA_plm_rsh_agent=do-not-exist
<br>
[begou_at_frog7 MPI_TESTS]$ mpirun -np 8 --hostfile $OAR_NODEFILE --bind-to core 
<br>
./location.exe
<br>
--------------------------------------------------------------------------
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bind to:     CORE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Node:        frog7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#cpus:       1
<br>
<p>You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
--------------------------------------------------------------------------
<br>
<p>The message only show only that OpenMPI try to allocate all processes on the 
<br>
local node.
<br>
<p>Of course:
<br>
[begou_at_frog7 MPI_TESTS]$ which do-not-exist
<br>
/usr/bin/which: no do-not-exist in (/home/PROJECTS/...............
<br>
<p><p>Patrick
<br>
<p><pre>
-- 
===================================================================
|  Equipe M.O.S.T.         |                                      |
|  Patrick BEGOU           | mailto:Patrick.Begou_at_[hidden] |
|  LEGI                    |                                      |
|  BP 53 X                 | Tel 04 76 82 51 35                   |
|  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71                   |
===================================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27660.php">Fabrice Roy: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Previous message:</strong> <a href="27658.php">Gilles Gouaillardet: "Re: [OMPI users] Problem with implementation of Foxa algorithm"</a>
<li><strong>In reply to:</strong> <a href="27650.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27662.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Reply:</strong> <a href="27662.php">Ralph Castain: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
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
