<?
$subject_val = "Re: [OMPI users] SGE and openMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  4 09:14:53 2014" -->
<!-- isoreceived="20140904131453" -->
<!-- sent="Thu, 4 Sep 2014 15:14:39 +0200" -->
<!-- isosent="20140904131439" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE and openMPI" -->
<!-- id="3F959A10-AA04-4FF0-BF70-BE96D57DD6C9_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54085E54.6020004_at_dm.univaq.it" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-04 09:14:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25267.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Previous message:</strong> <a href="25265.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>In reply to:</strong> <a href="25265.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25267.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Reply:</strong> <a href="25267.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 04.09.2014 um 14:43 schrieb Donato Pera:
<br>
<p><span class="quotelev1">&gt; using this script :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -pe orte 64
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -o ./file.out
</span><br>
<span class="quotelev1">&gt; #$ -e ./file.err
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/home/SWcbbc/openmpi-1.6.5/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CPMD_PATH=/home/tanzi/myroot/X86_66intel-mpi/
</span><br>
<span class="quotelev1">&gt; PP_PATH=/home/tanzi
</span><br>
<span class="quotelev1">&gt; /home/SWcbbc/openmpi-1.6.5/bin/mpirun ${CPMD_PATH}cpmd.x  input
</span><br>
<span class="quotelev1">&gt; ${PP_PATH}/PP/ &gt; out
</span><br>
<p>Is this text below in out, file.out or file.err - any hint in the other files?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program run for about 2 minutes and after I get this error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: compute-2-2.local
</span><br>
<span class="quotelev1">&gt; PID:  24897
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-2-2.local:24889] 25 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-odls-default.txt / odls-default:could-not-kill
</span><br>
<span class="quotelev1">&gt; [compute-2-2.local:24889] Set MCA parameter &quot;orte_base_help_aggregate&quot;
</span><br>
<span class="quotelev1">&gt; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [compute-2-2.local:24889] 27 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-odls-default.txt / odls-default:could-not-kill
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 24896 on
</span><br>
<span class="quotelev1">&gt; node compute-2-2.local exiting improperly. There are two reasons this
</span><br>
<span class="quotelev1">&gt; could occur:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-2-2.local:24889] 1 more process has sent help message
</span><br>
<span class="quotelev1">&gt; help-odls-default.txt / odls-default:could-not-kill
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks and Regards Donato
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 03/09/2014 13:19, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 03.09.2014 um 13:11 schrieb Donato Pera:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info | grep grid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<span class="quotelev2">&gt;&gt; Good.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and using this script
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -pe orte 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -o ./file.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -e ./file.err
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export LD_LIBRARY_PATH=/home/SWcbbc/openmpi-1.6.5/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPMD_PATH=/home/tanzi/myroot/X86_66intel-mpi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PP_PATH=/home/tanzi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/SWcbbc/openmpi-1.6.5/bin/mpirun -mca btl openib -np 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -machinefile $TMPDIR/machines  ${CPMD_PATH}cpmd.x  input ${PP_PATH}/PP/
</span><br>
<span class="quotelev2">&gt;&gt; In the PE &quot;orte&quot; is no &quot;start_proc_args&quot; defined which could generate the machinefile. Please try to start the application with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/SWcbbc/openmpi-1.6.5/bin/mpirun -mca btl openib ${CPMD_PATH}cpmd.x  input ${PP_PATH}/PP/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get this error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open RTE was unable to open the hostfile:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   /tmp/21213.1.debug.q/machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Check to make sure the path and filename are correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/rmaps_base_support_fns.c at line 207
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_rr.c at line 82
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/rmaps_base_map_job.c at line 88
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; base/plm_base_launch_support.c at line 105
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm_rsh_module.c at line 1173
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Instead using this script
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -pe orte 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -o ./file.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -e ./file.err
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export LD_LIBRARY_PATH=/home/SWcbbc/openmpi-1.6.5/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPMD_PATH=/home/tanzi/myroot/X86_66intel-mpi/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PP_PATH=/home/tanzi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/SWcbbc/openmpi-1.6.5/bin/mpirun -mca btl openib -np 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $TMPDIR/machines  ${CPMD_PATH}cpmd.x  input ${PP_PATH}/PP/ &gt; out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Executable: /tmp/21214.1.debug.q/machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node: compute-2-0.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can you help me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks and Regards Donato
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 03/09/2014 12:28, Reuti wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_info | grep grid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25240.php">http://www.open-mpi.org/community/lists/users/2014/09/25240.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25242.php">http://www.open-mpi.org/community/lists/users/2014/09/25242.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25265.php">http://www.open-mpi.org/community/lists/users/2014/09/25265.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25267.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Previous message:</strong> <a href="25265.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>In reply to:</strong> <a href="25265.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25267.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Reply:</strong> <a href="25267.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
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
