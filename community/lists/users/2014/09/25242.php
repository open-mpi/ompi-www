<?
$subject_val = "Re: [OMPI users] SGE and openMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 07:19:17 2014" -->
<!-- isoreceived="20140903111917" -->
<!-- sent="Wed, 3 Sep 2014 13:19:07 +0200" -->
<!-- isosent="20140903111907" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE and openMPI" -->
<!-- id="32EE8032-9633-4D45-AAB8-A815AA31D66E_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5406F753.7030709_at_dm.univaq.it" -->
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
<strong>Date:</strong> 2014-09-03 07:19:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25243.php">Siegmar Gross: "[OMPI users] interrupted system call in openmpi-1.9a1r32664 on Soalris x86_64"</a>
<li><strong>Previous message:</strong> <a href="25241.php">Siegmar Gross: "[OMPI users] internal-failure in openmpi-1.9a1r32664 on Linux with Sun C"</a>
<li><strong>In reply to:</strong> <a href="25240.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25265.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Reply:</strong> <a href="25265.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 03.09.2014 um 13:11 schrieb Donato Pera:
<br>
<p><span class="quotelev1">&gt; I get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info | grep grid
</span><br>
<span class="quotelev1">&gt;                 MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.5)
</span><br>
<p>Good.
<br>
<p><p><span class="quotelev1">&gt; and using this script
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
<span class="quotelev1">&gt; /home/SWcbbc/openmpi-1.6.5/bin/mpirun -mca btl openib -np 64
</span><br>
<span class="quotelev1">&gt; -machinefile $TMPDIR/machines  ${CPMD_PATH}cpmd.x  input ${PP_PATH}/PP/
</span><br>
<p>In the PE &quot;orte&quot; is no &quot;start_proc_args&quot; defined which could generate the machinefile. Please try to start the application with:
<br>
<p>/home/SWcbbc/openmpi-1.6.5/bin/mpirun -mca btl openib ${CPMD_PATH}cpmd.x  input ${PP_PATH}/PP/
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt; out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get this error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to open the hostfile:
</span><br>
<span class="quotelev1">&gt;    /tmp/21213.1.debug.q/machines
</span><br>
<span class="quotelev1">&gt; Check to make sure the path and filename are correct.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_support_fns.c at line 207
</span><br>
<span class="quotelev1">&gt; [compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; rmaps_rr.c at line 82
</span><br>
<span class="quotelev1">&gt; [compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_map_job.c at line 88
</span><br>
<span class="quotelev1">&gt; [compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; base/plm_base_launch_support.c at line 105
</span><br>
<span class="quotelev1">&gt; [compute-2-6.local:22452] [[5218,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; plm_rsh_module.c at line 1173
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Instead using this script
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; /home/SWcbbc/openmpi-1.6.5/bin/mpirun -mca btl openib -np 64
</span><br>
<span class="quotelev1">&gt; $TMPDIR/machines  ${CPMD_PATH}cpmd.x  input ${PP_PATH}/PP/ &gt; out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get
</span><br>
<span class="quotelev1">&gt; Executable: /tmp/21214.1.debug.q/machines
</span><br>
<span class="quotelev1">&gt; Node: compute-2-0.local
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can you help me
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
<span class="quotelev1">&gt; On 03/09/2014 12:28, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info | grep grid
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25240.php">http://www.open-mpi.org/community/lists/users/2014/09/25240.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25243.php">Siegmar Gross: "[OMPI users] interrupted system call in openmpi-1.9a1r32664 on Soalris x86_64"</a>
<li><strong>Previous message:</strong> <a href="25241.php">Siegmar Gross: "[OMPI users] internal-failure in openmpi-1.9a1r32664 on Linux with Sun C"</a>
<li><strong>In reply to:</strong> <a href="25240.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25265.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Reply:</strong> <a href="25265.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
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
