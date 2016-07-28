<?
$subject_val = "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  2 11:42:40 2012" -->
<!-- isoreceived="20120402154240" -->
<!-- sent="Mon, 2 Apr 2012 09:40:06 -0600" -->
<!-- isosent="20120402154006" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)" -->
<!-- id="2FA72711-5233-417A-A0F9-A872D1474D72_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="c494c5d38c2fca994c667592b6b6950f_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-02 11:40:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18909.php">Gutierrez, Samuel K: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm	allocation (with QLogic PSM)"</a>
<li><strong>Previous message:</strong> <a href="18907.php">Prentice Bisbal: "Re: [OMPI users] redirecting output"</a>
<li><strong>In reply to:</strong> <a href="18906.php">R&#195;&#169;mi Palancher: "[OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18909.php">Gutierrez, Samuel K: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm	allocation (with QLogic PSM)"</a>
<li><strong>Reply:</strong> <a href="18909.php">Gutierrez, Samuel K: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm	allocation (with QLogic PSM)"</a>
<li><strong>Reply:</strong> <a href="18910.php">Reuti: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure the 1.4 series can support that behavior. Each mpirun only knows about itself - it has no idea something else is going on.
<br>
<p>If you attempted to bind, all procs of same rank from each run would bind on the same CPU.
<br>
<p>All you can really do is use -host to tell the fourth run not to use the first node. Or use the devel trunk, which has more ability to separate runs.
<br>
<p>Sent from my iPad
<br>
<p>On Apr 2, 2012, at 6:53 AM, R&#195;&#169;mi Palancher &lt;remi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm encountering a problem when trying to run multiple mpirun in parallel inside
</span><br>
<span class="quotelev1">&gt; one SLURM allocation on multiple nodes using a QLogic interconnect network with
</span><br>
<span class="quotelev1">&gt; PSM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using Open MPI version 1.4.5 compiled with GCC 4.4.5 on Debian Lenny.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My cluster is composed of 12 cores nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is how I'm able to reproduce the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Allocate 20 CPU on 2 nodes :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; frontend $ salloc -N 2 -n 20
</span><br>
<span class="quotelev1">&gt; frontend $ srun hostname | sort | uniq -c
</span><br>
<span class="quotelev1">&gt;     12 cn1381
</span><br>
<span class="quotelev1">&gt;      8 cn1382
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My job allocates 12 CPU on node cn1381 and 8 CPU on cn1382.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My test MPI program parse for each task the value of Cpus_allowed_list in file
</span><br>
<span class="quotelev1">&gt; /proc/$PID/status and print it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I run it on all 20 allocated CPU, it works well:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; frontend $ mpirun get-allowed-cpu-ompi 1
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 20 (cn1381): 0
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 01 of 20 (cn1381): 1
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 02 of 20 (cn1381): 2
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 03 of 20 (cn1381): 3
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 04 of 20 (cn1381): 4
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 05 of 20 (cn1381): 7
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 06 of 20 (cn1381): 5
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 07 of 20 (cn1381): 9
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 08 of 20 (cn1381): 8
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 09 of 20 (cn1381): 10
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 10 of 20 (cn1381): 6
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 11 of 20 (cn1381): 11
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 12 of 20 (cn1382): 4
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 13 of 20 (cn1382): 5
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 14 of 20 (cn1382): 6
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 15 of 20 (cn1382): 7
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 16 of 20 (cn1382): 8
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 17 of 20 (cn1382): 10
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 18 of 20 (cn1382): 9
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 19 of 20 (cn1382): 11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here you can see that Slurm gave me CPU 0-11 on cn1381 and 4-11 on cn1382.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I'd like to run multiple MPI runs in parallel, 4 tasks each, inside my job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; frontend $ cat params.txt
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev1">&gt; 3
</span><br>
<span class="quotelev1">&gt; 4
</span><br>
<span class="quotelev1">&gt; 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It works well when I launch 3 runs in parallel, where it only use the 12 CPU of
</span><br>
<span class="quotelev1">&gt; the first node (3 runs x 4 tasks = 12 CPU):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; frontend $ xargs -P 3 -n 1 mpirun -n 4 get-allowed-cpu-ompi &lt; params.txt
</span><br>
<span class="quotelev1">&gt; Launch 2 Task 00 of 04 (cn1381): 1
</span><br>
<span class="quotelev1">&gt; Launch 2 Task 01 of 04 (cn1381): 2
</span><br>
<span class="quotelev1">&gt; Launch 2 Task 02 of 04 (cn1381): 4
</span><br>
<span class="quotelev1">&gt; Launch 2 Task 03 of 04 (cn1381): 7
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 04 (cn1381): 0
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 01 of 04 (cn1381): 3
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 02 of 04 (cn1381): 5
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 03 of 04 (cn1381): 6
</span><br>
<span class="quotelev1">&gt; Launch 3 Task 00 of 04 (cn1381): 9
</span><br>
<span class="quotelev1">&gt; Launch 3 Task 01 of 04 (cn1381): 8
</span><br>
<span class="quotelev1">&gt; Launch 3 Task 02 of 04 (cn1381): 10
</span><br>
<span class="quotelev1">&gt; Launch 3 Task 03 of 04 (cn1381): 11
</span><br>
<span class="quotelev1">&gt; Launch 4 Task 00 of 04 (cn1381): 0
</span><br>
<span class="quotelev1">&gt; Launch 4 Task 01 of 04 (cn1381): 3
</span><br>
<span class="quotelev1">&gt; Launch 4 Task 02 of 04 (cn1381): 1
</span><br>
<span class="quotelev1">&gt; Launch 4 Task 03 of 04 (cn1381): 5
</span><br>
<span class="quotelev1">&gt; Launch 5 Task 00 of 04 (cn1381): 2
</span><br>
<span class="quotelev1">&gt; Launch 5 Task 01 of 04 (cn1381): 4
</span><br>
<span class="quotelev1">&gt; Launch 5 Task 02 of 04 (cn1381): 7
</span><br>
<span class="quotelev1">&gt; Launch 5 Task 03 of 04 (cn1381): 6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when I try to launch 4 runs or more in parallel, where it needs to use the
</span><br>
<span class="quotelev1">&gt; CPU of the other node as well, it fails:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; frontend $ $ xargs -P 4 -n 1 mpirun -n 4 get-allowed-cpu-ompi &lt; params.txt
</span><br>
<span class="quotelev1">&gt; cn1381.23245ipath_userinit: assign_context command failed: Network is down
</span><br>
<span class="quotelev1">&gt; cn1381.23245can't open /dev/ipath, network down (err=26)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; PSM was unable to open an endpoint. Please make sure that the network link is
</span><br>
<span class="quotelev1">&gt; active on the node and the hardware is functioning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Error: Could not detect network connectivity
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; cn1381.23248ipath_userinit: assign_context command failed: Network is down
</span><br>
<span class="quotelev1">&gt; cn1381.23248can't open /dev/ipath, network down (err=26)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; PSM was unable to open an endpoint. Please make sure that the network link is
</span><br>
<span class="quotelev1">&gt; active on the node and the hardware is functioning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Error: Could not detect network connectivity
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; cn1381.23247ipath_userinit: assign_context command failed: Network is down
</span><br>
<span class="quotelev1">&gt; cn1381.23247can't open /dev/ipath, network down (err=26)
</span><br>
<span class="quotelev1">&gt; cn1381.23249ipath_userinit: assign_context command failed: Network is down
</span><br>
<span class="quotelev1">&gt; cn1381.23249can't open /dev/ipath, network down (err=26)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [cn1381:23245] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [cn1381:23247] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; [cn1381:23242] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; [cn1381:23243] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 2 with PID 23245 on
</span><br>
<span class="quotelev1">&gt; node cn1381 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [cn1381:23246] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [cn1381:23248] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [cn1381:23249] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; [cn1381:23244] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 2 with PID 23248 on
</span><br>
<span class="quotelev1">&gt; node cn1381 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [ivanoe1:24981] 3 more processes have sent help message help-mtl-psm.txt / unable to open endpoint
</span><br>
<span class="quotelev1">&gt; [ivanoe1:24981] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [ivanoe1:24981] 3 more processes have sent help message help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; [ivanoe1:24983] 3 more processes have sent help message help-mtl-psm.txt / unable to open endpoint
</span><br>
<span class="quotelev1">&gt; [ivanoe1:24983] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [ivanoe1:24983] 3 more processes have sent help message help-mpi-runtime / mpi_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; Launch 3 Task 00 of 04 (cn1381): 0
</span><br>
<span class="quotelev1">&gt; Launch 3 Task 01 of 04 (cn1381): 1
</span><br>
<span class="quotelev1">&gt; Launch 3 Task 02 of 04 (cn1381): 2
</span><br>
<span class="quotelev1">&gt; Launch 3 Task 03 of 04 (cn1381): 3
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 00 of 04 (cn1381): 4
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 01 of 04 (cn1381): 5
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 02 of 04 (cn1381): 6
</span><br>
<span class="quotelev1">&gt; Launch 1 Task 03 of 04 (cn1381): 8
</span><br>
<span class="quotelev1">&gt; Launch 5 Task 00 of 04 (cn1381): 7
</span><br>
<span class="quotelev1">&gt; Launch 5 Task 01 of 04 (cn1381): 9
</span><br>
<span class="quotelev1">&gt; Launch 5 Task 02 of 04 (cn1381): 10
</span><br>
<span class="quotelev1">&gt; Launch 5 Task 03 of 04 (cn1381): 11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I can understand, Open MPI tries to launch all runs on the same nodes
</span><br>
<span class="quotelev1">&gt; (cn1382 in my case) and it forgets about the other node. Am I right? How can I
</span><br>
<span class="quotelev1">&gt; avoid this behaviour?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are the Open MPI variables set in my environment:
</span><br>
<span class="quotelev1">&gt; $ env | grep OMPI
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_mtl=psm
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_pml=cm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can find attached to this email the config.log and the output of the
</span><br>
<span class="quotelev1">&gt; following commands:
</span><br>
<span class="quotelev1">&gt; frontend $ ompi_info --all &gt; ompi_info_all.txt
</span><br>
<span class="quotelev1">&gt; frontend $ mpirun --bynode --npernode 1 --tag-output ompi_info -v ompi full \
</span><br>
<span class="quotelev1">&gt;           --parsable &gt; ompi_nodes.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any kind of help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; R&#195;&#169;mi Palancher
</span><br>
<span class="quotelev1">&gt; <a href="http://rezib.org">http://rezib.org</a>
</span><br>
<span class="quotelev1">&gt; &lt;config.log.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info_all.txt.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi_nodes.txt&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18909.php">Gutierrez, Samuel K: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm	allocation (with QLogic PSM)"</a>
<li><strong>Previous message:</strong> <a href="18907.php">Prentice Bisbal: "Re: [OMPI users] redirecting output"</a>
<li><strong>In reply to:</strong> <a href="18906.php">R&#195;&#169;mi Palancher: "[OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18909.php">Gutierrez, Samuel K: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm	allocation (with QLogic PSM)"</a>
<li><strong>Reply:</strong> <a href="18909.php">Gutierrez, Samuel K: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm	allocation (with QLogic PSM)"</a>
<li><strong>Reply:</strong> <a href="18910.php">Reuti: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
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
