<?
$subject_val = "Re: [OMPI users] sge tight intregration leads to bad allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  9 19:06:33 2012" -->
<!-- isoreceived="20120409230633" -->
<!-- sent="Tue, 10 Apr 2012 01:05:57 +0200" -->
<!-- isosent="20120409230557" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge tight intregration leads to bad allocation" -->
<!-- id="D97E3572-87D1-4133-8B62-7CF7140C7B5A_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="zarafa.4f7ec2d6.5d7d.69d4dfe87bef77c4_at_mail.fft" -->
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
<strong>Subject:</strong> Re: [OMPI users] sge tight intregration leads to bad allocation<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-09 19:05:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18976.php">Shiqing Fan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>Previous message:</strong> <a href="18974.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18962.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18977.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18977.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 06.04.2012 um 12:17 schrieb Eloi Gaudry:
<br>
<p><span class="quotelev2">&gt; &gt; - Can you please post while it's running the relevant lines from:
</span><br>
<span class="quotelev2">&gt; &gt; ps -e f --cols=500
</span><br>
<span class="quotelev2">&gt; &gt; (f w/o -) from both machines.
</span><br>
<span class="quotelev2">&gt; &gt; It's allocated between the nodes more like in a round-robin fashion.
</span><br>
<span class="quotelev2">&gt; &gt; [eg: ] I'll try to do this tomorrow, as soon as some slots become free. Thanks for your feedback Reuti, I appreciate.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; hi reuti, here is the information related to another run that is failing in the same way:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; qstat -g t:
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; smp4.q_at_barney.fft              BIP   0/3/4          3.37     lx-amd64
</span><br>
<span class="quotelev1">&gt;   hc:mem_available=1.715G
</span><br>
<span class="quotelev1">&gt;   hc:proc_available=1
</span><br>
<span class="quotelev1">&gt;    1416 0.60500 semi_green jj           r     04/06/2012 11:57:34 SLAVE
</span><br>
<span class="quotelev1">&gt;                                                                   SLAVE
</span><br>
<span class="quotelev1">&gt;                                                                   SLAVE
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; smp4.q_at_carl.fft                BIP   0/3/4          3.44     lx-amd64
</span><br>
<span class="quotelev1">&gt;   hc:mem_available=1.715G
</span><br>
<span class="quotelev1">&gt;   hc:proc_available=1
</span><br>
<span class="quotelev1">&gt;    1416 0.60500 semi_green jj           r     04/06/2012 11:57:34 SLAVE
</span><br>
<span class="quotelev1">&gt;                                                                   SLAVE
</span><br>
<span class="quotelev1">&gt;                                                                   SLAVE
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; smp8.q_at_charlie.fft             BIP   0/6/8          3.46     lx-amd64
</span><br>
<span class="quotelev1">&gt;   hc:mem_available=4.018G
</span><br>
<span class="quotelev1">&gt;   hc:proc_available=2
</span><br>
<span class="quotelev1">&gt;    1416 0.60500 semi_green jj           r     04/06/2012 11:57:34 MASTER
</span><br>
<span class="quotelev1">&gt;                                                                   SLAVE
</span><br>
<span class="quotelev1">&gt;                                                                   SLAVE
</span><br>
<span class="quotelev1">&gt;                                                                   SLAVE
</span><br>
<span class="quotelev1">&gt;                                                                   SLAVE
</span><br>
<span class="quotelev1">&gt;                                                                   SLAVE
</span><br>
<span class="quotelev1">&gt;                                                                   SLAVE
</span><br>
<p>Thx. This is the allocation which is also confirmed by the Open MPI output.
<br>
<p>- The application was compiled with the same version of Open MPI?
<br>
- Does the application start something on its own besides the tasks granted by mpiexec/orterun?
<br>
<p>You want 12 ranks in total, and to barney.fft and carl.fft there are also &quot;-mca orte_ess_num_procs 3 &quot; given in to the qrsh_starter. In total I count only 10 ranks in this example given - 4+4+2 - do you observe the same?
<br>
<p>It looks like Open MPI is doing the right thing, but the applications decided to start in a different allocation.
<br>
<p>Does the application use OpenMP in addition or other kinds of threads? The suffix &quot;_mp&quot; in the name &quot;actranpy_mp&quot; makes me suspicious about it.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; barney: ps -e f --cols=500:
</span><br>
<span class="quotelev1">&gt; -----------------------------------
</span><br>
<span class="quotelev1">&gt;  2048 ?        Sl     3:33 /opt/sge/bin/lx-amd64/sge_execd
</span><br>
<span class="quotelev1">&gt; 27502 ?        Sl     0:00  \_ sge_shepherd-1416 -bg
</span><br>
<span class="quotelev1">&gt; 27503 ?        Ss     0:00      \_ /opt/sge/utilbin/lx-amd64/qrsh_starter /opt/sge/default/spool/barney/active_jobs/1416.1/1.barney
</span><br>
<span class="quotelev1">&gt; 27510 ?        S      0:00          \_ bash -c  PATH=/opt/openmpi-1.4.4/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/opt/openmpi-1.4.4/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ;  /opt/openmpi-1.4.4/bin/orted -mca ess e
</span><br>
<span class="quotelev1">&gt; nv -mca orte_ess_jobid 3800367104 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri &quot;3800367104.0;tcp://192.168.0.20:57233&quot; --mca pls_gridengine_verbose 1 --mca ras_gridengine_show_jobid 1 --mca ras_gridengine_verbose 1 
</span><br>
<span class="quotelev1">&gt; 27511 ?        S      0:00              \_ /opt/openmpi-1.4.4/bin/orted -mca ess env -mca orte_ess_jobid 3800367104 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri 3800367104.0;tcp://192.168.0.20:57233 --mca pls_gridengine_verbose 1 --mca ras_gridengine_show_jobid 1 --mca ras_gridengine_verbose 1
</span><br>
<span class="quotelev1">&gt; 27512 ?        Rl    12:54                  \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev1">&gt; 27513 ?        Rl    12:54                  \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; carl: ps -e f --cols=500:
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt;  1928 ?        Sl     3:10 /opt/sge/bin/lx-amd64/sge_execd
</span><br>
<span class="quotelev1">&gt; 29022 ?        Sl     0:00  \_ sge_shepherd-1416 -bg
</span><br>
<span class="quotelev1">&gt; 29023 ?        Ss     0:00      \_ /opt/sge/utilbin/lx-amd64/qrsh_starter /opt/sge/default/spool/carl/active_jobs/1416.1/1.carl
</span><br>
<span class="quotelev1">&gt; 29030 ?        S      0:00          \_ bash -c  PATH=/opt/openmpi-1.4.4/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/opt/openmpi-1.4.4/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ;  /opt/openmpi-1.4.4/bin/orted -mca ess e
</span><br>
<span class="quotelev1">&gt; nv -mca orte_ess_jobid 3800367104 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 3 --hnp-uri &quot;3800367104.0;tcp://192.168.0.20:57233&quot; --mca pls_gridengine_verbose 1 --mca ras_gridengine_show_jobid 1 --mca ras_gridengine_verbose 1 
</span><br>
<span class="quotelev1">&gt; 29031 ?        S      0:00              \_ /opt/openmpi-1.4.4/bin/orted -mca ess env -mca orte_ess_jobid 3800367104 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 3 --hnp-uri 3800367104.0;tcp://192.168.0.20:57233 --mca pls_gridengine_verbose 1 --mca ras_gridengine_show_jobid 1 --mca ras_gridengine_verbose 1
</span><br>
<span class="quotelev1">&gt; 29032 ?        Rl    13:49                  \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev1">&gt; 29033 ?        Rl    13:50                  \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev1">&gt; 29034 ?        Rl    13:49                  \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev1">&gt; 29035 ?        Rl    13:49                  \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; charlie: ps -e f --cols=500:
</span><br>
<span class="quotelev1">&gt; -----------------------------------
</span><br>
<span class="quotelev1">&gt;  1591 ?        Sl     3:13 /opt/sge/bin/lx-amd64/sge_execd
</span><br>
<span class="quotelev1">&gt;  8793 ?        S      0:00  \_ sge_shepherd-1416 -bg
</span><br>
<span class="quotelev1">&gt;  8795 ?        Ss     0:00      \_ -bash /opt/sge/default/spool/charlie/job_scripts/1416
</span><br>
<span class="quotelev1">&gt;  8800 ?        S      0:00          \_ /opt/openmpi-1.4.4/bin/orterun --mca pls_gridengine_verbose 1 --mca ras_gridengine_show_jobid 1 --mca ras_gridengine_verbose 1 --bynode -report-bindings -display-map -display-devel-map -display-allocation -display-devel-allocation -np 12 -x ACTRAN_LICENSE -x ACTRAN_PRODUCTLINE -x LD_LIBRARY_PATH -x PATH -x ACTRAN_DEBUG /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parall
</span><br>
<span class="quotelev1">&gt;  8801 ?        Sl     0:00              \_ /opt/sge/bin/lx-amd64/qrsh -inherit -nostdin -V barney.fft  PATH=/opt/openmpi-1.4.4/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/opt/openmpi-1.4.4/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ;  /opt/openmpi-1.4.4/bin/orted -mca ess env -mca orte_ess_jobid 3800367104 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri &quot;3800367104.0;tcp://192.168.0.20:57233&quot; --mca pls_gridengine_verbose 1 --mca ras_gridengine_show_jobid 1 --mca ras_gridengine_verbose
</span><br>
<span class="quotelev1">&gt;  8802 ?        Sl     0:00              \_ /opt/sge/bin/lx-amd64/qrsh -inherit -nostdin -V carl.fft  PATH=/opt/openmpi-1.4.4/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/opt/openmpi-1.4.4/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH ;  /opt/openmpi-1.4.4/bin/orted -mca ess env -mca orte_ess_jobid 3800367104 -mca orte_ess_vpid 2 -mca orte_ess_num_procs 3 --hnp-uri &quot;3800367104.0;tcp://192.168.0.20:57233&quot; --mca pls_gridengine_verbose 1 --mca ras_gridengine_show_jobid 1 --mca ras_gridengine_verbose 1
</span><br>
<span class="quotelev1">&gt;  8807 ?        Rl    14:23              \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev1">&gt;  8808 ?        Rl    14:23              \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev1">&gt;  8809 ?        Rl    14:23              \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev1">&gt;  8810 ?        Rl    14:23              \_ /opt/fft/actran_product/Actran_13.0.b.57333/bin/actranpy_mp --apl=/opt/fft/actran_product/Actran_13.0.b.57333 -e radiation -m 10000 --parallel=frequency --scratch=/scratch/cluster/1416 --inputfile=/home/jj/Projects/Toyota/REFERENCE_JPC/semi_green_PML_06/semi_green_coarse.edat
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; oretrun information:
</span><br>
<span class="quotelev1">&gt; --------------------------
</span><br>
<span class="quotelev1">&gt; [charlie:08800] ras:gridengine: JOB_ID: 1416
</span><br>
<span class="quotelev1">&gt; [charlie:08800] ras:gridengine: PE_HOSTFILE: /opt/sge/default/spool/charlie/active_jobs/1416.1/pe_hostfile
</span><br>
<span class="quotelev1">&gt; [charlie:08800] ras:gridengine: charlie.fft: PE_HOSTFILE shows slots=6
</span><br>
<span class="quotelev1">&gt; [charlie:08800] ras:gridengine: barney.fft: PE_HOSTFILE shows slots=3
</span><br>
<span class="quotelev1">&gt; [charlie:08800] ras:gridengine: carl.fft: PE_HOSTFILE shows slots=3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: charlie   Launch id: -1 Arch: ffc91200  State: 2
</span><br>
<span class="quotelev1">&gt;   Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;   Daemon: [[57989,0],0] Daemon launched: True
</span><br>
<span class="quotelev1">&gt;   Num slots: 6  Slots in use: 0
</span><br>
<span class="quotelev1">&gt;   Num slots allocated: 6  Max slots: 0
</span><br>
<span class="quotelev1">&gt;   Username on node: NULL
</span><br>
<span class="quotelev1">&gt;   Num procs: 0  Next node_rank: 0
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: barney.fft    Launch id: -1 Arch: 0 State: 2
</span><br>
<span class="quotelev1">&gt;   Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;   Daemon: Not defined Daemon launched: False
</span><br>
<span class="quotelev1">&gt;   Num slots: 3  Slots in use: 0
</span><br>
<span class="quotelev1">&gt;   Num slots allocated: 3  Max slots: 0
</span><br>
<span class="quotelev1">&gt;   Username on node: NULL
</span><br>
<span class="quotelev1">&gt;   Num procs: 0  Next node_rank: 0
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: carl.fft    Launch id: -1 Arch: 0 State: 2
</span><br>
<span class="quotelev1">&gt;   Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;   Daemon: Not defined Daemon launched: False
</span><br>
<span class="quotelev1">&gt;   Num slots: 3  Slots in use: 0
</span><br>
<span class="quotelev1">&gt;   Num slots allocated: 3  Max slots: 0
</span><br>
<span class="quotelev1">&gt;   Username on node: NULL
</span><br>
<span class="quotelev1">&gt;   Num procs: 0  Next node_rank: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Map generated by mapping policy: 0200
</span><br>
<span class="quotelev1">&gt;   Npernode: 0 Oversubscribe allowed: TRUE CPU Lists: FALSE
</span><br>
<span class="quotelev1">&gt;   Num new daemons: 2  New daemon starting vpid 1
</span><br>
<span class="quotelev1">&gt;   Num nodes: 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: charlie   Launch id: -1 Arch: ffc91200  State: 2
</span><br>
<span class="quotelev1">&gt;   Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;   Daemon: [[57989,0],0] Daemon launched: True
</span><br>
<span class="quotelev1">&gt;   Num slots: 6  Slots in use: 4
</span><br>
<span class="quotelev1">&gt;   Num slots allocated: 6  Max slots: 0
</span><br>
<span class="quotelev1">&gt;   Username on node: NULL
</span><br>
<span class="quotelev1">&gt;   Num procs: 4  Next node_rank: 4
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57989,1],0]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 0 Node rank: 0
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57989,1],3]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 1 Node rank: 1
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57989,1],6]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 2 Node rank: 2
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57989,1],9]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 3 Node rank: 3
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: barney.fft    Launch id: -1 Arch: 0 State: 2
</span><br>
<span class="quotelev1">&gt;   Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;   Daemon: [[57989,0],1] Daemon launched: False
</span><br>
<span class="quotelev1">&gt;   Num slots: 3  Slots in use: 4
</span><br>
<span class="quotelev1">&gt;   Num slots allocated: 3  Max slots: 0
</span><br>
<span class="quotelev1">&gt;   Username on node: NULL
</span><br>
<span class="quotelev1">&gt;   Num procs: 4  Next node_rank: 4
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57989,1],1]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 0 Node rank: 0
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57989,1],4]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 1 Node rank: 1
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57989,1],7]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 2 Node rank: 2
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57989,1],10]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 3 Node rank: 3
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: carl.fft    Launch id: -1 Arch: 0 State: 2
</span><br>
<span class="quotelev1">&gt;   Num boards: 1 Num sockets/board: 2  Num cores/socket: 4
</span><br>
<span class="quotelev1">&gt;   Daemon: [[57989,0],2] Daemon launched: False
</span><br>
<span class="quotelev1">&gt;   Num slots: 3  Slots in use: 4
</span><br>
<span class="quotelev1">&gt;   Num slots allocated: 3  Max slots: 0
</span><br>
<span class="quotelev1">&gt;   Username on node: NULL
</span><br>
<span class="quotelev1">&gt;   Num procs: 4  Next node_rank: 4
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57989,1],2]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 0 Node rank: 0
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57989,1],5]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 1 Node rank: 1
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57989,1],8]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 2 Node rank: 2
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;   Data for proc: [[57989,1],11]
</span><br>
<span class="quotelev1">&gt;     Pid: 0  Local rank: 3 Node rank: 3
</span><br>
<span class="quotelev1">&gt;     State: 0  App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
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
<li><strong>Next message:</strong> <a href="18976.php">Shiqing Fan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>Previous message:</strong> <a href="18974.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18962.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18977.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18977.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
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
