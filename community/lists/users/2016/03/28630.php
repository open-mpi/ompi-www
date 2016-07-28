<?
$subject_val = "[OMPI users] Pass RoCE flags to srun under SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 17:40:58 2016" -->
<!-- isoreceived="20160303224058" -->
<!-- sent="Thu, 03 Mar 2016 16:40:56 -0600" -->
<!-- isosent="20160303224056" -->
<!-- name="Davide Vanzo" -->
<!-- email="vanzod_at_[hidden]" -->
<!-- subject="[OMPI users] Pass RoCE flags to srun under SLURM" -->
<!-- id="1457044856.12102.11.camel_at_accre.vanderbilt.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Pass RoCE flags to srun under SLURM<br>
<strong>From:</strong> Davide Vanzo (<em>vanzod_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-03 17:40:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28631.php">Mark Santcroos: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>Previous message:</strong> <a href="28629.php">Davide Vanzo: "[OMPI users] Orted path with module manager on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28637.php">Davide Vanzo: "Re: [OMPI users] Pass RoCE flags to srun under SLURM"</a>
<li><strong>Reply:</strong> <a href="28637.php">Davide Vanzo: "Re: [OMPI users] Pass RoCE flags to srun under SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
In our cluster the nodes are interconnected with RoCE and I want to set
<br>
up OpenMPI to run on it via SLURM.
<br>
I initially compiled OpenMPI 1.10.2 only with IB verbs support and I
<br>
have no problem making it run over RoCE.
<br>
Then I have successfully built it with SLURM support as follows:
<br>
<p>./configure&#194;&#160;--with-slurm&#194;&#160;--with-pmi=/usr/scheduler/slurm&#194;&#160;--with-verbs&#194;&#160;-
<br>
-with-hwloc
<br>
<p>The problem is that I cannot let it use the RoCE network when I'm using
<br>
srun. I also tried to export the OpenMPI runtime options but still I
<br>
cannot correctly initialize the network:
<br>
<p>$ echo $OMPI_MCA_btl
<br>
openib,self,sm
<br>
$ echo $OMPI_MCA_btl_openib_cpc_include&#194;&#160;
<br>
rdmacm
<br>
$ srun -n 2 --mpi=pmi2 ./osu_latency
<br>
---------------------------------------------------------------------
<br>
-----
<br>
No OpenFabrics connection schemes reported that they were able to be
<br>
used on a specific port.&#194;&#160;&#194;&#160;As such, the openib BTL (OpenFabrics
<br>
support) will be disabled for this port.
<br>
<p>&#194;&#160; Local host:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;test-vmp1245
<br>
&#194;&#160; Local device:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;mlx4_0
<br>
&#194;&#160; Local port:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;2
<br>
&#194;&#160; CPCs attempted:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;udcm
<br>
---------------------------------------------------------------------
<br>
-----
<br>
---------------------------------------------------------------------
<br>
-----
<br>
No OpenFabrics connection schemes reported that they were able to be
<br>
used on a specific port.&#194;&#160;&#194;&#160;As such, the openib BTL (OpenFabrics
<br>
support) will be disabled for this port.
<br>
<p>&#194;&#160; Local host:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;test-vmp1244
<br>
&#194;&#160; Local device:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;mlx4_0
<br>
&#194;&#160; Local port:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;2
<br>
&#194;&#160; CPCs attempted:&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;udcm
<br>
---------------------------------------------------------------------
<br>
-----
<br>
---------------------------------------------------------------------
<br>
-----
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.&#194;&#160;&#194;&#160;This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.&#194;&#160;&#194;&#160;This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.&#194;&#160;&#194;&#160;This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&#194;&#160; Process 1 ([[27,4],0]) is on host: test-vmp1244
<br>
&#194;&#160; Process 2 ([[27,4],1]) is on host: test-vmp1245
<br>
&#194;&#160; BTLs attempted: self
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
---------------------------------------------------------------------
<br>
-----
<br>
---------------------------------------------------------------------
<br>
-----
<br>
MPI_INIT has failed because at least one MPI process is unreachable
<br>
from another.&#194;&#160;&#194;&#160;This *usually* means that an underlying communication
<br>
plugin -- such as a BTL or an MTL -- has either not loaded or not
<br>
allowed itself to be used.&#194;&#160;&#194;&#160;Your MPI job will now abort.
<br>
<p>You may wish to try to narrow down the problem;
<br>
<p>&#194;&#160;* Check the output of ompi_info to see which BTL/MTL plugins are
<br>
&#194;&#160;&#194;&#160;&#194;&#160;available.
<br>
&#194;&#160;* Run your application with MPI_THREAD_SINGLE.
<br>
&#194;&#160;* Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
<br>
&#194;&#160;&#194;&#160;&#194;&#160;if using MTL-based communications) to see exactly which
<br>
&#194;&#160;&#194;&#160;&#194;&#160;communication plugins were considered and/or discarded.
<br>
---------------------------------------------------------------------
<br>
-----
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now
<br>
abort,
<br>
***&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;and potentially your MPI job)
<br>
[test-vmp1245:3603] Local abort before MPI_INIT completed successfully;
<br>
not able to aggregate error messages, and not able to guarantee that
<br>
all other processes were killed!
<br>
srun: error: test-vmp1244: task 0: Exited with exit code 1
<br>
srun: error: test-vmp1245: task 1: Exited with exit code 1
<br>
<p>Any suggestion?
<br>
Thanks!
<br>
<p>Davide
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28630/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28631.php">Mark Santcroos: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>Previous message:</strong> <a href="28629.php">Davide Vanzo: "[OMPI users] Orted path with module manager on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28637.php">Davide Vanzo: "Re: [OMPI users] Pass RoCE flags to srun under SLURM"</a>
<li><strong>Reply:</strong> <a href="28637.php">Davide Vanzo: "Re: [OMPI users] Pass RoCE flags to srun under SLURM"</a>
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
