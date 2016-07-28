<?
$subject_val = "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  3 19:38:18 2012" -->
<!-- isoreceived="20120903233818" -->
<!-- sent="Mon, 3 Sep 2012 16:38:09 -0700" -->
<!-- isosent="20120903233809" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken" -->
<!-- id="94E6D1A1-84FC-45B9-882A-03CA3AD4479F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CB1194FC-FE9D-461A-B26B-2B21B65F2D2F_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-03 19:38:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20116.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="20114.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>In reply to:</strong> <a href="20114.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20118.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>Reply:</strong> <a href="20118.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 3, 2012, at 3:50 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 04.09.2012 um 00:07 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm leaning towards fixing it - it came due to discussions on how to handle hostfile when there is an allocation. For now, though, that should work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oh, did I miss this on the list? If there is a hostfile given as argument, it should override the default hostfile IMO. 
</span><br>
<p>This was several years ago now - first showed up in the 1.5 series. Unless someone objects, I'll change it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ==
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SGE issue
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I usually don't install new versions instantly, so I only noticed right now, that in 1.4.5 I get a wrong allocation inside SGE (always one process less than requested with `qsub -pe orted N ...`. This I tried only, as with 1.6.1 I get:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There are no nodes allocated to this job.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all the time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Weird - I'm not sure I understand what you are saying. Is this happening with 1.6.1 as well? Or just with 1.4.5?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.6.1 = no nodes allocated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.4.5 = one process less than requested
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.4.1 = works as it should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well that seems strange! Can you run 1.6.1 with the following on the mpirun cmd line:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -mca ras_gridengine_debug 1 -mca ras_gridengine_verbose 10 -mca ras_base_verbose 10
</span><br>
<p>I'll take a look at this and see what's going on - have to get back to you on it.
<br>
<p>Thx!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: components_open: Looking for ras components
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: components_open: opening ras components
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: components_open: found loaded component cm
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: components_open: component cm has no register function
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: components_open: component cm open function successful
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: components_open: found loaded component gridengine
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: components_open: component gridengine has no register function
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: components_open: component gridengine open function successful
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: components_open: found loaded component loadleveler
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: components_open: component loadleveler has no register function
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: components_open: component loadleveler open function successful
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: components_open: component slurm has no register function
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca:base:select: Auto-selecting ras components
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca:base:select:(  ras) Querying component [cm]
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca:base:select:(  ras) Skipping component [cm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca:base:select:(  ras) Querying component [gridengine]
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca:base:select:(  ras) Query of component [gridengine] set priority to 100
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca:base:select:(  ras) Querying component [loadleveler]
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca:base:select:(  ras) Skipping component [loadleveler]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca:base:select:(  ras) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca:base:select:(  ras) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca:base:select:(  ras) Selected component [gridengine]
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: close: unloading component cm
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: close: unloading component loadleveler
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] ras:gridengine: JOB_ID: 4636
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] ras:gridengine: PE_HOSTFILE: /var/spool/sge/pc15381/active_jobs/4636.1/pe_hostfile
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] ras:gridengine: pc15381: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] ras:gridengine: pc15370: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are no nodes allocated to this job.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: close: component gridengine closed
</span><br>
<span class="quotelev1">&gt; [pc15381:06250] mca: base: close: unloading component gridengine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The actual hostfile contains:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pc15381 1 all.q_at_pc15381 UNDEFINED
</span><br>
<span class="quotelev1">&gt; pc15370 2 extra.q_at_pc15370 UNDEFINED
</span><br>
<span class="quotelev1">&gt; pc15381 1 extra.q_at_pc15381 UNDEFINED
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and it was submitted with `qsub -pe orted 4 ...`.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aha, I remember an issue on the list, if a job gets slots from several queues that they weren't added. This was the issue in 1.4.5, ok. Wasn't it fixed lateron? But here it's getting no allocation at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I force it to get jobs only from one queue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca: base: components_open: Looking for ras components
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca: base: components_open: opening ras components
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca: base: components_open: found loaded component cm
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca: base: components_open: component cm has no register function
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca: base: components_open: component cm open function successful
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca: base: components_open: found loaded component gridengine
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca: base: components_open: component gridengine has no register function
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca: base: components_open: component gridengine open function successful
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca: base: components_open: found loaded component loadleveler
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca: base: components_open: component loadleveler has no register function
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca: base: components_open: component loadleveler open function successful
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca: base: components_open: component slurm has no register function
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca:base:select: Auto-selecting ras components
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca:base:select:(  ras) Querying component [cm]
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca:base:select:(  ras) Skipping component [cm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca:base:select:(  ras) Querying component [gridengine]
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca:base:select:(  ras) Query of component [gridengine] set priority to 100
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca:base:select:(  ras) Querying component [loadleveler]
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca:base:select:(  ras) Skipping component [loadleveler]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca:base:select:(  ras) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca:base:select:(  ras) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca:base:select:(  ras) Selected component [gridengine]
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca: base: close: unloading component cm
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca: base: close: unloading component loadleveler
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] ras:gridengine: JOB_ID: 4638
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] ras:gridengine: PE_HOSTFILE: /var/spool/sge/pc15370/active_jobs/4638.1/pe_hostfile
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] ras:gridengine: pc15370: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev1">&gt; [pc15370:30447] ras:gridengine: pc15381: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But: it starts only 2 processes instead of 4:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Total: 2
</span><br>
<span class="quotelev1">&gt; Universe: 4
</span><br>
<span class="quotelev1">&gt; Hello World from Rank 0.
</span><br>
<span class="quotelev1">&gt; Hello World from Rank 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I can add `mpiexec -np $NSLOTS ..` to get 4, but all will be on pc15370, the pc15381 is ignored completely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I go back to 1.4.1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] mca: base: components_open: Looking for ras components
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] mca: base: components_open: opening ras components
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] mca: base: components_open: found loaded component gridengine
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] mca: base: components_open: component gridengine has no register function
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] mca: base: components_open: component gridengine open function successful
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] mca: base: components_open: component slurm has no register function
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] mca:base:select: Auto-selecting ras components
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] mca:base:select:(  ras) Querying component [gridengine]
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] mca:base:select:(  ras) Query of component [gridengine] set priority to 100
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] mca:base:select:(  ras) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] mca:base:select:(  ras) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] mca:base:select:(  ras) Selected component [gridengine]
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] ras:gridengine: JOB_ID: 4640
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] ras:gridengine: PE_HOSTFILE: /var/spool/sge/pc15370/active_jobs/4640.1/pe_hostfile
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] ras:gridengine: pc15370: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev1">&gt; [pc15370:31052] ras:gridengine: pc15381: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Total: 4
</span><br>
<span class="quotelev1">&gt; Universe: 4
</span><br>
<span class="quotelev1">&gt; Hello World from Rank 0.
</span><br>
<span class="quotelev1">&gt; Hello World from Rank 1.
</span><br>
<span class="quotelev1">&gt; Hello World from Rank 2.
</span><br>
<span class="quotelev1">&gt; Hello World from Rank 3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And no &quot;-np $NSLOTS&quot; in the command, just a plain `mpiexec ./mpihello`.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My guess is that something in the pe_hostfile syntax may have changed and we didn't pick up on it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ==
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I configured with:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure --prefix=$HOME/local/... --enable-static --disable-shared --with-sge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and adjusted my PATHs accordingly (at least: I hope so).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="20116.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="20114.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>In reply to:</strong> <a href="20114.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20118.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>Reply:</strong> <a href="20118.php">Reuti: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
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
