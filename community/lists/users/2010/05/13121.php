<?
$subject_val = "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 21 10:02:09 2010" -->
<!-- isoreceived="20100521140209" -->
<!-- sent="Fri, 21 May 2010 16:01:54 +0200" -->
<!-- isosent="20100521140154" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling" -->
<!-- id="FBBCDD97-A8A9-4639-8A21-69550180E0B9_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201005211411.41374.eg_at_fft.be" -->
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
<strong>Subject:</strong> Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-21 10:01:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13122.php">Eugene Loh: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<li><strong>Previous message:</strong> <a href="13120.php">Fernando Lemos: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="13119.php">Eloi Gaudry: "[OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13124.php">Eloi Gaudry: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>Reply:</strong> <a href="13124.php">Eloi Gaudry: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 21.05.2010 um 14:11 schrieb Eloi Gaudry:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm observing something strange on our cluster managed by SGE6.2u4 when 
</span><br>
<span class="quotelev1">&gt; launching a parallel computation on several nodes, using OpenMPI/SGE tight-
</span><br>
<span class="quotelev1">&gt; integration mode (OpenMPI-1.3.3). It seems that the SGE allocated slots are 
</span><br>
<span class="quotelev1">&gt; not used by OpenMPI, as if OpenMPI was doing is own round-robin allocation 
</span><br>
<span class="quotelev1">&gt; based on the allocated node hostnames.
</span><br>
<p>you compiled Open MPI with --with-sge (and recompiled your applications)? You are using the correct mpiexec?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Here is what I'm doing:
</span><br>
<span class="quotelev1">&gt; - launch a parallel computation involving 8 processors, using for each of them 
</span><br>
<span class="quotelev1">&gt; 14GB of memory. I'm using a qsub command where i request memory_free resource 
</span><br>
<span class="quotelev1">&gt; and use tight integration with openmpi
</span><br>
<span class="quotelev1">&gt; - 3 servers are available:
</span><br>
<span class="quotelev1">&gt; . barney with 4 cores (4 slots) and 32GB
</span><br>
<span class="quotelev1">&gt; . carl with 4 cores (4 slots) and 32GB
</span><br>
<span class="quotelev1">&gt; . charlie with 8 cores (8 slots) and 64GB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the output of the allocated nodes (OpenMPI output):
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: Name: charlie   Launch id: -1 Arch: ffc91200  State: 2
</span><br>
<span class="quotelev1">&gt;  Daemon: [[44332,0],0] Daemon launched: True
</span><br>
<span class="quotelev1">&gt;  Num slots: 4  Slots in use: 0
</span><br>
<span class="quotelev1">&gt;  Num slots allocated: 4  Max slots: 0
</span><br>
<span class="quotelev1">&gt;  Username on node: NULL
</span><br>
<span class="quotelev1">&gt;  Num procs: 0  Next node_rank: 0
</span><br>
<span class="quotelev1">&gt; Data for node: Name: carl.fft    Launch id: -1 Arch: 0 State: 2
</span><br>
<span class="quotelev1">&gt;  Daemon: Not defined Daemon launched: False
</span><br>
<span class="quotelev1">&gt;  Num slots: 2  Slots in use: 0
</span><br>
<span class="quotelev1">&gt;  Num slots allocated: 2  Max slots: 0
</span><br>
<span class="quotelev1">&gt;  Username on node: NULL
</span><br>
<span class="quotelev1">&gt;  Num procs: 0  Next node_rank: 0
</span><br>
<span class="quotelev1">&gt; Data for node: Name: barney.fft    Launch id: -1 Arch: 0 State: 2
</span><br>
<span class="quotelev1">&gt;  Daemon: Not defined Daemon launched: False
</span><br>
<span class="quotelev1">&gt;  Num slots: 2  Slots in use: 0
</span><br>
<span class="quotelev1">&gt;  Num slots allocated: 2  Max slots: 0
</span><br>
<span class="quotelev1">&gt;  Username on node: NULL
</span><br>
<span class="quotelev1">&gt;  Num procs: 0  Next node_rank: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is what I see when my computation is running on the cluster:
</span><br>
<span class="quotelev1">&gt; #     rank       pid          hostname
</span><br>
<span class="quotelev1">&gt;         0     28112          charlie
</span><br>
<span class="quotelev1">&gt;         1     11417          carl
</span><br>
<span class="quotelev1">&gt;         2     11808          barney
</span><br>
<span class="quotelev1">&gt;         3     28113          charlie
</span><br>
<span class="quotelev1">&gt;         4     11418          carl
</span><br>
<span class="quotelev1">&gt;         5     11809          barney
</span><br>
<span class="quotelev1">&gt;         6     28114          charlie
</span><br>
<span class="quotelev1">&gt;         7     11419          carl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that -the parallel environment used under SGE is defined as:
</span><br>
<span class="quotelev1">&gt; [eg_at_moe:~]$ qconf -sp round_robin
</span><br>
<span class="quotelev1">&gt; pe_name            round_robin
</span><br>
<span class="quotelev1">&gt; slots              32
</span><br>
<span class="quotelev1">&gt; user_lists         NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists        NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev1">&gt; allocation_rule    $round_robin
</span><br>
<span class="quotelev1">&gt; control_slaves     TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots      min
</span><br>
<span class="quotelev1">&gt; accounting_summary FALSE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm wondering why OpenMPI didn't use the allocated nodes chosen by SGE (cf. 
</span><br>
<span class="quotelev1">&gt; &quot;ALLOCATED NODES&quot; report) but instead allocate each job of the parallel 
</span><br>
<span class="quotelev1">&gt; computation at a time, using a round-robin method.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that I'm using the '--bynode' option in the orterun command line. If the 
</span><br>
<span class="quotelev1">&gt; behavior I'm observing is simply the consequence of using this option, please 
</span><br>
<span class="quotelev1">&gt; let me know. This would eventually mean that one need to state that SGE tight-
</span><br>
<span class="quotelev1">&gt; integration has a lower priority on orterun behavior than the different command 
</span><br>
<span class="quotelev1">&gt; line options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated,
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eloi Gaudry
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Free Field Technologies
</span><br>
<span class="quotelev1">&gt; Axis Park Louvain-la-Neuve
</span><br>
<span class="quotelev1">&gt; Rue Emile Francqui, 1
</span><br>
<span class="quotelev1">&gt; B-1435 Mont-Saint Guibert
</span><br>
<span class="quotelev1">&gt; BELGIUM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Company Phone: +32 10 487 959
</span><br>
<span class="quotelev1">&gt; Company Fax:   +32 10 454 626
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
<li><strong>Next message:</strong> <a href="13122.php">Eugene Loh: "Re: [OMPI users] An error occured in MPI_Bcast; MPI_ERR_TYPE: invalid datatype"</a>
<li><strong>Previous message:</strong> <a href="13120.php">Fernando Lemos: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
<li><strong>In reply to:</strong> <a href="13119.php">Eloi Gaudry: "[OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13124.php">Eloi Gaudry: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>Reply:</strong> <a href="13124.php">Eloi Gaudry: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
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
