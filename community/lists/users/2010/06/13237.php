<?
$subject_val = "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  7 03:50:50 2010" -->
<!-- isoreceived="20100607075050" -->
<!-- sent="Mon, 7 Jun 2010 09:50:26 +0200" -->
<!-- isosent="20100607075026" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling" -->
<!-- id="201006070950.26323.eg_at_fft.be" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="053649B5-F2B2-4B5F-B13E-64350D99D815_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-07 03:50:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13238.php">Nguyen Kim Son: "[OMPI users] ompi-restart, ompi-ps problem"</a>
<li><strong>Previous message:</strong> <a href="13236.php">Gijsbert Wiesenekker: "[OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13157.php">Reuti: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti,
<br>
<p>I've been unable to reproduce the issue so far.
<br>
<p>Sorry for the convenience,
<br>
Eloi
<br>
<p>On Tuesday 25 May 2010 11:32:44 Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 25.05.2010 um 09:14 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev2">&gt; &gt; I do no reset any environment variable during job submission or job
</span><br>
<span class="quotelev2">&gt; &gt; handling. Is there a simple way to check that openmpi is working as
</span><br>
<span class="quotelev2">&gt; &gt; expected with SGE tight integration (as displaying environment
</span><br>
<span class="quotelev2">&gt; &gt; variables, setting options on the command line, etc. ) ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) put a command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; env
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in the jobscript and check the output for $JOB_ID and various $SGE_*
</span><br>
<span class="quotelev1">&gt; variables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; b) to confirm the misbehavior: are the tasks on the slave nodes kids of
</span><br>
<span class="quotelev1">&gt; sge_shepherd or any system sshd/rshd?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Eloi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Friday 21 May 2010 17:35:24 Reuti wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Am 21.05.2010 um 17:19 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Reuti,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Yes, the openmpi binaries used were build after having used the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --with-sge during configure, and we only use those binaries on our
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cluster.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [eg_at_moe:~]$ /opt/openmpi-1.3.3/bin/ompi_info
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                MCA ras: gridengine (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                v1.3.3)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ok. As you have a Tight Integration as goal and set in your PE
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;control_slaves TRUE&quot;, SGE wouldn't allow `qrsh -inherit ...` to nodes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which are not in the list of granted nodes. So it looks, like your job
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is running outside of this Tight Integration with its own `rsh`or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; `ssh`.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Do you reset $JOB_ID or other environment variables in your jobscript,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which could trigger Open MPI to assume that it's not running inside SGE?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Friday 21 May 2010 16:01:54 Reuti wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Am 21.05.2010 um 14:11 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I'm observing something strange on our cluster managed by SGE6.2u4
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; when launching a parallel computation on several nodes, using
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; OpenMPI/SGE tight- integration mode (OpenMPI-1.3.3). It seems that
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the SGE allocated slots are not used by OpenMPI, as if OpenMPI was
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; doing is own
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; round-robin allocation based on the allocated node hostnames.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; you compiled Open MPI with --with-sge (and recompiled your
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; applications)? You are using the correct mpiexec?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Here is what I'm doing:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; - launch a parallel computation involving 8 processors, using for
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; each of them 14GB of memory. I'm using a qsub command where i
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; request memory_free resource and use tight integration with openmpi
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; - 3 servers are available:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; . barney with 4 cores (4 slots) and 32GB
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; . carl with 4 cores (4 slots) and 32GB
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; . charlie with 8 cores (8 slots) and 64GB
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Here is the output of the allocated nodes (OpenMPI output):
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Data for node: Name: charlie   Launch id: -1 Arch: ffc91200  State: 2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Daemon: [[44332,0],0] Daemon launched: True
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Num slots: 4  Slots in use: 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Num slots allocated: 4  Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Username on node: NULL
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Num procs: 0  Next node_rank: 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Data for node: Name: carl.fft    Launch id: -1 Arch: 0 State: 2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Daemon: Not defined Daemon launched: False
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Num slots: 2  Slots in use: 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Num slots allocated: 2  Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Username on node: NULL
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Num procs: 0  Next node_rank: 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Data for node: Name: barney.fft    Launch id: -1 Arch: 0 State: 2
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Daemon: Not defined Daemon launched: False
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Num slots: 2  Slots in use: 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Num slots allocated: 2  Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Username on node: NULL
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Num procs: 0  Next node_rank: 0
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Here is what I see when my computation is running on the cluster:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; #     rank       pid          hostname
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       0     28112          charlie
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       1     11417          carl
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       2     11808          barney
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       3     28113          charlie
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       4     11418          carl
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       5     11809          barney
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       6     28114          charlie
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;       7     11419          carl
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Note that -the parallel environment used under SGE is defined as:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [eg_at_moe:~]$ qconf -sp round_robin
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; pe_name            round_robin
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; slots              32
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; user_lists         NONE
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; xuser_lists        NONE
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; allocation_rule    $round_robin
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; control_slaves     TRUE
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; urgency_slots      min
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; accounting_summary FALSE
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I'm wondering why OpenMPI didn't use the allocated nodes chosen by
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; SGE (cf. &quot;ALLOCATED NODES&quot; report) but instead allocate each job of
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the parallel computation at a time, using a round-robin method.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Note that I'm using the '--bynode' option in the orterun command
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; line. If the behavior I'm observing is simply the consequence of
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; using this option, please let me know. This would eventually mean
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; that one need to state that SGE tight- integration has a lower
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; priority on orterun behavior than the different command line
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; options.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Any help would be appreciated,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Eloi Gaudry
Free Field Technologies
Axis Park Louvain-la-Neuve
Rue Emile Francqui, 1
B-1435 Mont-Saint Guibert
BELGIUM
Company Phone: +32 10 487 959
Company Fax:   +32 10 454 626
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13238.php">Nguyen Kim Son: "[OMPI users] ompi-restart, ompi-ps problem"</a>
<li><strong>Previous message:</strong> <a href="13236.php">Gijsbert Wiesenekker: "[OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/05/13157.php">Reuti: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<!-- nextthread="start" -->
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
