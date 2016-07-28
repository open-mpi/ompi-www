<?
$subject_val = "[OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  2 08:53:22 2012" -->
<!-- isoreceived="20120402125322" -->
<!-- sent="Mon, 02 Apr 2012 14:53:02 +0200" -->
<!-- isosent="20120402125302" -->
<!-- name="R&#195;&#169;mi Palancher" -->
<!-- email="remi_at_[hidden]" -->
<!-- subject="[OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)" -->
<!-- id="c494c5d38c2fca994c667592b6b6950f_at_localhost" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> R&#195;&#169;mi Palancher (<em>remi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-02 08:53:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18896.php">Prentice Bisbal: "Re: [OMPI users] redirecting output"</a>
<li><strong>Previous message:</strong> <a href="18894.php">Nico Mittenzwey: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18897.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Reply:</strong> <a href="18897.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi there,
<br>
<p>&nbsp;I'm encountering a problem when trying to run multiple mpirun in 
<br>
&nbsp;parallel inside
<br>
&nbsp;one SLURM allocation on multiple nodes using a QLogic interconnect 
<br>
&nbsp;network with
<br>
&nbsp;PSM.
<br>
<p>&nbsp;I'm using Open MPI version 1.4.5 compiled with GCC 4.4.5 on Debian 
<br>
&nbsp;Lenny.
<br>
<p>&nbsp;My cluster is composed of 12 cores nodes.
<br>
<p>&nbsp;Here is how I'm able to reproduce the problem:
<br>
<p>&nbsp;Allocate 20 CPU on 2 nodes :
<br>
<p>&nbsp;frontend $ salloc -N 2 -n 20
<br>
&nbsp;frontend $ srun hostname | sort | uniq -c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12 cn1381
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 cn1382
<br>
<p>&nbsp;My job allocates 12 CPU on node cn1381 and 8 CPU on cn1382.
<br>
<p>&nbsp;My test MPI program parse for each task the value of Cpus_allowed_list 
<br>
&nbsp;in file
<br>
&nbsp;/proc/$PID/status and print it.
<br>
<p>&nbsp;If I run it on all 20 allocated CPU, it works well:
<br>
<p>&nbsp;frontend $ mpirun get-allowed-cpu-ompi 1
<br>
&nbsp;Launch 1 Task 00 of 20 (cn1381): 0
<br>
&nbsp;Launch 1 Task 01 of 20 (cn1381): 1
<br>
&nbsp;Launch 1 Task 02 of 20 (cn1381): 2
<br>
&nbsp;Launch 1 Task 03 of 20 (cn1381): 3
<br>
&nbsp;Launch 1 Task 04 of 20 (cn1381): 4
<br>
&nbsp;Launch 1 Task 05 of 20 (cn1381): 7
<br>
&nbsp;Launch 1 Task 06 of 20 (cn1381): 5
<br>
&nbsp;Launch 1 Task 07 of 20 (cn1381): 9
<br>
&nbsp;Launch 1 Task 08 of 20 (cn1381): 8
<br>
&nbsp;Launch 1 Task 09 of 20 (cn1381): 10
<br>
&nbsp;Launch 1 Task 10 of 20 (cn1381): 6
<br>
&nbsp;Launch 1 Task 11 of 20 (cn1381): 11
<br>
&nbsp;Launch 1 Task 12 of 20 (cn1382): 4
<br>
&nbsp;Launch 1 Task 13 of 20 (cn1382): 5
<br>
&nbsp;Launch 1 Task 14 of 20 (cn1382): 6
<br>
&nbsp;Launch 1 Task 15 of 20 (cn1382): 7
<br>
&nbsp;Launch 1 Task 16 of 20 (cn1382): 8
<br>
&nbsp;Launch 1 Task 17 of 20 (cn1382): 10
<br>
&nbsp;Launch 1 Task 18 of 20 (cn1382): 9
<br>
&nbsp;Launch 1 Task 19 of 20 (cn1382): 11
<br>
<p>&nbsp;Here you can see that Slurm gave me CPU 0-11 on cn1381 and 4-11 on 
<br>
&nbsp;cn1382.
<br>
<p>&nbsp;Now I'd like to run multiple MPI runs in parallel, 4 tasks each, inside 
<br>
&nbsp;my job.
<br>
<p>&nbsp;frontend $ cat params.txt
<br>
&nbsp;1
<br>
&nbsp;2
<br>
&nbsp;3
<br>
&nbsp;4
<br>
&nbsp;5
<br>
<p>&nbsp;It works well when I launch 3 runs in parallel, where it only use the 
<br>
&nbsp;12 CPU of
<br>
&nbsp;the first node (3 runs x 4 tasks = 12 CPU):
<br>
<p>&nbsp;frontend $ xargs -P 3 -n 1 mpirun -n 4 get-allowed-cpu-ompi &lt; 
<br>
&nbsp;params.txt
<br>
&nbsp;Launch 2 Task 00 of 04 (cn1381): 1
<br>
&nbsp;Launch 2 Task 01 of 04 (cn1381): 2
<br>
&nbsp;Launch 2 Task 02 of 04 (cn1381): 4
<br>
&nbsp;Launch 2 Task 03 of 04 (cn1381): 7
<br>
&nbsp;Launch 1 Task 00 of 04 (cn1381): 0
<br>
&nbsp;Launch 1 Task 01 of 04 (cn1381): 3
<br>
&nbsp;Launch 1 Task 02 of 04 (cn1381): 5
<br>
&nbsp;Launch 1 Task 03 of 04 (cn1381): 6
<br>
&nbsp;Launch 3 Task 00 of 04 (cn1381): 9
<br>
&nbsp;Launch 3 Task 01 of 04 (cn1381): 8
<br>
&nbsp;Launch 3 Task 02 of 04 (cn1381): 10
<br>
&nbsp;Launch 3 Task 03 of 04 (cn1381): 11
<br>
&nbsp;Launch 4 Task 00 of 04 (cn1381): 0
<br>
&nbsp;Launch 4 Task 01 of 04 (cn1381): 3
<br>
&nbsp;Launch 4 Task 02 of 04 (cn1381): 1
<br>
&nbsp;Launch 4 Task 03 of 04 (cn1381): 5
<br>
&nbsp;Launch 5 Task 00 of 04 (cn1381): 2
<br>
&nbsp;Launch 5 Task 01 of 04 (cn1381): 4
<br>
&nbsp;Launch 5 Task 02 of 04 (cn1381): 7
<br>
&nbsp;Launch 5 Task 03 of 04 (cn1381): 6
<br>
<p>&nbsp;But when I try to launch 4 runs or more in parallel, where it needs to 
<br>
&nbsp;use the
<br>
&nbsp;CPU of the other node as well, it fails:
<br>
<p>&nbsp;frontend $ $ xargs -P 4 -n 1 mpirun -n 4 get-allowed-cpu-ompi &lt; 
<br>
&nbsp;params.txt
<br>
&nbsp;cn1381.23245ipath_userinit: assign_context command failed: Network is 
<br>
&nbsp;down
<br>
&nbsp;cn1381.23245can't open /dev/ipath, network down (err=26)
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;PSM was unable to open an endpoint. Please make sure that the network 
<br>
&nbsp;link is
<br>
&nbsp;active on the node and the hardware is functioning.
<br>
<p>&nbsp;&nbsp;&nbsp;Error: Could not detect network connectivity
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;cn1381.23248ipath_userinit: assign_context command failed: Network is 
<br>
&nbsp;down
<br>
&nbsp;cn1381.23248can't open /dev/ipath, network down (err=26)
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;PSM was unable to open an endpoint. Please make sure that the network 
<br>
&nbsp;link is
<br>
&nbsp;active on the node and the hardware is functioning.
<br>
<p>&nbsp;&nbsp;&nbsp;Error: Could not detect network connectivity
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;cn1381.23247ipath_userinit: assign_context command failed: Network is 
<br>
&nbsp;down
<br>
&nbsp;cn1381.23247can't open /dev/ipath, network down (err=26)
<br>
&nbsp;cn1381.23249ipath_userinit: assign_context command failed: Network is 
<br>
&nbsp;down
<br>
&nbsp;cn1381.23249can't open /dev/ipath, network down (err=26)
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;It looks like MPI_INIT failed for some reason; your parallel process is
<br>
&nbsp;likely to abort.  There are many reasons that a parallel process can
<br>
&nbsp;fail during MPI_INIT; some of which are due to configuration or 
<br>
&nbsp;environment
<br>
&nbsp;problems.  This failure appears to be an internal failure; here's some
<br>
&nbsp;additional information (which may only be relevant to an Open MPI
<br>
&nbsp;developer):
<br>
<p>&nbsp;&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
&nbsp;*** This is disallowed by the MPI standard.
<br>
&nbsp;*** Your MPI job will now abort.
<br>
&nbsp;*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
&nbsp;*** This is disallowed by the MPI standard.
<br>
&nbsp;*** Your MPI job will now abort.
<br>
&nbsp;*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
&nbsp;*** This is disallowed by the MPI standard.
<br>
&nbsp;*** Your MPI job will now abort.
<br>
&nbsp;[cn1381:23245] Abort before MPI_INIT completed successfully; not able 
<br>
&nbsp;to guarantee that all other processes were killed!
<br>
&nbsp;*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
&nbsp;*** This is disallowed by the MPI standard.
<br>
&nbsp;*** Your MPI job will now abort.
<br>
&nbsp;[cn1381:23247] Abort before MPI_INIT completed successfully; not able 
<br>
&nbsp;to guarantee that all other processes were killed!
<br>
&nbsp;[cn1381:23242] Abort before MPI_INIT completed successfully; not able 
<br>
&nbsp;to guarantee that all other processes were killed!
<br>
&nbsp;[cn1381:23243] Abort before MPI_INIT completed successfully; not able 
<br>
&nbsp;to guarantee that all other processes were killed!
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;mpirun has exited due to process rank 2 with PID 23245 on
<br>
&nbsp;node cn1381 exiting without calling &quot;finalize&quot;. This may
<br>
&nbsp;have caused other processes in the application to be
<br>
&nbsp;terminated by signals sent by mpirun (as reported here).
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;It looks like MPI_INIT failed for some reason; your parallel process is
<br>
&nbsp;likely to abort.  There are many reasons that a parallel process can
<br>
&nbsp;fail during MPI_INIT; some of which are due to configuration or 
<br>
&nbsp;environment
<br>
&nbsp;problems.  This failure appears to be an internal failure; here's some
<br>
&nbsp;additional information (which may only be relevant to an Open MPI
<br>
&nbsp;developer):
<br>
<p>&nbsp;&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
&nbsp;*** This is disallowed by the MPI standard.
<br>
&nbsp;*** Your MPI job will now abort.
<br>
&nbsp;*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
&nbsp;*** This is disallowed by the MPI standard.
<br>
&nbsp;*** Your MPI job will now abort.
<br>
&nbsp;[cn1381:23246] Abort before MPI_INIT completed successfully; not able 
<br>
&nbsp;to guarantee that all other processes were killed!
<br>
&nbsp;*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
&nbsp;*** This is disallowed by the MPI standard.
<br>
&nbsp;*** Your MPI job will now abort.
<br>
&nbsp;[cn1381:23248] Abort before MPI_INIT completed successfully; not able 
<br>
&nbsp;to guarantee that all other processes were killed!
<br>
&nbsp;*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
&nbsp;*** This is disallowed by the MPI standard.
<br>
&nbsp;*** Your MPI job will now abort.
<br>
&nbsp;[cn1381:23249] Abort before MPI_INIT completed successfully; not able 
<br>
&nbsp;to guarantee that all other processes were killed!
<br>
&nbsp;[cn1381:23244] Abort before MPI_INIT completed successfully; not able 
<br>
&nbsp;to guarantee that all other processes were killed!
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;mpirun has exited due to process rank 2 with PID 23248 on
<br>
&nbsp;node cn1381 exiting without calling &quot;finalize&quot;. This may
<br>
&nbsp;have caused other processes in the application to be
<br>
&nbsp;terminated by signals sent by mpirun (as reported here).
<br>
&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;[ivanoe1:24981] 3 more processes have sent help message 
<br>
&nbsp;help-mtl-psm.txt / unable to open endpoint
<br>
&nbsp;[ivanoe1:24981] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to 
<br>
&nbsp;see all help / error messages
<br>
&nbsp;[ivanoe1:24981] 3 more processes have sent help message 
<br>
&nbsp;help-mpi-runtime / mpi_init:startup:internal-failure
<br>
&nbsp;[ivanoe1:24983] 3 more processes have sent help message 
<br>
&nbsp;help-mtl-psm.txt / unable to open endpoint
<br>
&nbsp;[ivanoe1:24983] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to 
<br>
&nbsp;see all help / error messages
<br>
&nbsp;[ivanoe1:24983] 3 more processes have sent help message 
<br>
&nbsp;help-mpi-runtime / mpi_init:startup:internal-failure
<br>
&nbsp;Launch 3 Task 00 of 04 (cn1381): 0
<br>
&nbsp;Launch 3 Task 01 of 04 (cn1381): 1
<br>
&nbsp;Launch 3 Task 02 of 04 (cn1381): 2
<br>
&nbsp;Launch 3 Task 03 of 04 (cn1381): 3
<br>
&nbsp;Launch 1 Task 00 of 04 (cn1381): 4
<br>
&nbsp;Launch 1 Task 01 of 04 (cn1381): 5
<br>
&nbsp;Launch 1 Task 02 of 04 (cn1381): 6
<br>
&nbsp;Launch 1 Task 03 of 04 (cn1381): 8
<br>
&nbsp;Launch 5 Task 00 of 04 (cn1381): 7
<br>
&nbsp;Launch 5 Task 01 of 04 (cn1381): 9
<br>
&nbsp;Launch 5 Task 02 of 04 (cn1381): 10
<br>
&nbsp;Launch 5 Task 03 of 04 (cn1381): 11
<br>
<p>&nbsp;As far as I can understand, Open MPI tries to launch all runs on the 
<br>
&nbsp;same nodes
<br>
&nbsp;(cn1382 in my case) and it forgets about the other node. Am I right? 
<br>
&nbsp;How can I
<br>
&nbsp;avoid this behaviour?
<br>
<p>&nbsp;Here are the Open MPI variables set in my environment:
<br>
&nbsp;$ env | grep OMPI
<br>
&nbsp;OMPI_MCA_mtl=psm
<br>
&nbsp;OMPI_MCA_pml=cm
<br>
<p>&nbsp;You can find attached to this email the config.log and the output of 
<br>
&nbsp;the
<br>
&nbsp;following commands:
<br>
&nbsp;frontend $ ompi_info --all &gt; ompi_info_all.txt
<br>
&nbsp;frontend $ mpirun --bynode --npernode 1 --tag-output ompi_info -v ompi 
<br>
&nbsp;full \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--parsable &gt; ompi_nodes.txt
<br>
<p>&nbsp;Thanks in advance for any kind of help!
<br>
<p>&nbsp;Best regards,
<br>
<pre>
-- 
 R&#195;&#169;mi Palancher
 <a href="http://rezib.org">http://rezib.org</a>



</pre>
<p>
<p><p><hr>
<ul>
<li>application/x-gzip attachment: <a href="../../att-18895/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="../../att-18895/ompi_info_all.txt.gz">ompi_info_all.txt.gz</a>
</ul>
<!-- attachment="ompi_info_all.txt.gz" -->
<hr>
<ul>
<li>text/plain attachment: <a href="../../att-18895/ompi_nodes.txt">ompi_nodes.txt</a>
</ul>
<!-- attachment="ompi_nodes.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18896.php">Prentice Bisbal: "Re: [OMPI users] redirecting output"</a>
<li><strong>Previous message:</strong> <a href="18894.php">Nico Mittenzwey: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18897.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Reply:</strong> <a href="18897.php">Ralph Castain: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
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
