<?
$subject_val = "Re: [OMPI users] SGE and openMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  4 08:43:01 2014" -->
<!-- isoreceived="20140904124301" -->
<!-- sent="Thu, 04 Sep 2014 14:43:00 +0200" -->
<!-- isosent="20140904124300" -->
<!-- name="Donato Pera" -->
<!-- email="donato.pera_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE and openMPI" -->
<!-- id="54085E54.6020004_at_dm.univaq.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="32EE8032-9633-4D45-AAB8-A815AA31D66E_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] SGE and openMPI<br>
<strong>From:</strong> Donato Pera (<em>donato.pera_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-04 08:43:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25266.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Previous message:</strong> <a href="25264.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>In reply to:</strong> <a href="25242.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25266.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Reply:</strong> <a href="25266.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>using this script :
<br>
<p>#!/bin/bash
<br>
#$ -S /bin/bash
<br>
#$ -pe orte 64
<br>
#$ -cwd
<br>
#$ -o ./file.out
<br>
#$ -e ./file.err
<br>
<p>export LD_LIBRARY_PATH=/home/SWcbbc/openmpi-1.6.5/lib:$LD_LIBRARY_PATH
<br>
export OMP_NUM_THREADS=1
<br>
<p>CPMD_PATH=/home/tanzi/myroot/X86_66intel-mpi/
<br>
PP_PATH=/home/tanzi
<br>
/home/SWcbbc/openmpi-1.6.5/bin/mpirun ${CPMD_PATH}cpmd.x  input
<br>
${PP_PATH}/PP/ &gt; out
<br>
<p><p><p>The program run for about 2 minutes and after I get this error
<br>
<p>WARNING: A process refused to die!
<br>
<p>Host: compute-2-2.local
<br>
PID:  24897
<br>
<p>This process may still be running and/or consuming resources.
<br>
<p>--------------------------------------------------------------------------
<br>
[compute-2-2.local:24889] 25 more processes have sent help message
<br>
help-odls-default.txt / odls-default:could-not-kill
<br>
[compute-2-2.local:24889] Set MCA parameter &quot;orte_base_help_aggregate&quot;
<br>
to 0 to see all help / error messages
<br>
[compute-2-2.local:24889] 27 more processes have sent help message
<br>
help-odls-default.txt / odls-default:could-not-kill
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 24896 on
<br>
node compute-2-2.local exiting improperly. There are two reasons this
<br>
could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[compute-2-2.local:24889] 1 more process has sent help message
<br>
help-odls-default.txt / odls-default:could-not-kill
<br>
<p><p>Thanks and Regards Donato
<br>
<p><p><p><p>On 03/09/2014 13:19, Reuti wrote:
<br>
<span class="quotelev1">&gt; Am 03.09.2014 um 13:11 schrieb Donato Pera:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info | grep grid
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev1">&gt; Good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and using this script
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -pe orte 64
</span><br>
<span class="quotelev2">&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt; #$ -o ./file.out
</span><br>
<span class="quotelev2">&gt;&gt; #$ -e ./file.err
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=/home/SWcbbc/openmpi-1.6.5/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CPMD_PATH=/home/tanzi/myroot/X86_66intel-mpi/
</span><br>
<span class="quotelev2">&gt;&gt; PP_PATH=/home/tanzi
</span><br>
<span class="quotelev2">&gt;&gt; /home/SWcbbc/openmpi-1.6.5/bin/mpirun -mca btl openib -np 64
</span><br>
<span class="quotelev2">&gt;&gt; -machinefile $TMPDIR/machines  ${CPMD_PATH}cpmd.x  input ${PP_PATH}/PP/
</span><br>
<span class="quotelev1">&gt; In the PE &quot;orte&quot; is no &quot;start_proc_args&quot; defined which could generate the machinefile. Please try to start the application with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/SWcbbc/openmpi-1.6.5/bin/mpirun -mca btl openib ${CPMD_PATH}cpmd.x  input ${PP_PATH}/PP/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get this error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open RTE was unable to open the hostfile:
</span><br>
<span class="quotelev2">&gt;&gt;    /tmp/21213.1.debug.q/machines
</span><br>
<span class="quotelev2">&gt;&gt; Check to make sure the path and filename are correct.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; base/rmaps_base_support_fns.c at line 207
</span><br>
<span class="quotelev2">&gt;&gt; [compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; rmaps_rr.c at line 82
</span><br>
<span class="quotelev2">&gt;&gt; [compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; base/rmaps_base_map_job.c at line 88
</span><br>
<span class="quotelev2">&gt;&gt; [compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; base/plm_base_launch_support.c at line 105
</span><br>
<span class="quotelev2">&gt;&gt; [compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; plm_rsh_module.c at line 1173
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Instead using this script
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -pe orte 64
</span><br>
<span class="quotelev2">&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt; #$ -o ./file.out
</span><br>
<span class="quotelev2">&gt;&gt; #$ -e ./file.err
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=/home/SWcbbc/openmpi-1.6.5/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CPMD_PATH=/home/tanzi/myroot/X86_66intel-mpi/
</span><br>
<span class="quotelev2">&gt;&gt; PP_PATH=/home/tanzi
</span><br>
<span class="quotelev2">&gt;&gt; /home/SWcbbc/openmpi-1.6.5/bin/mpirun -mca btl openib -np 64
</span><br>
<span class="quotelev2">&gt;&gt; $TMPDIR/machines  ${CPMD_PATH}cpmd.x  input ${PP_PATH}/PP/ &gt; out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get
</span><br>
<span class="quotelev2">&gt;&gt; Executable: /tmp/21214.1.debug.q/machines
</span><br>
<span class="quotelev2">&gt;&gt; Node: compute-2-0.local
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; can you help me
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks and Regards Donato
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 03/09/2014 12:28, Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info | grep grid
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25240.php">http://www.open-mpi.org/community/lists/users/2014/09/25240.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25242.php">http://www.open-mpi.org/community/lists/users/2014/09/25242.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25266.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Previous message:</strong> <a href="25264.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>In reply to:</strong> <a href="25242.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25266.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Reply:</strong> <a href="25266.php">Reuti: "Re: [OMPI users] SGE and openMPI"</a>
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
