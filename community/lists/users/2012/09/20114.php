<?
$subject_val = "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  3 18:50:24 2012" -->
<!-- isoreceived="20120903225024" -->
<!-- sent="Tue, 4 Sep 2012 00:50:16 +0200" -->
<!-- isosent="20120903225016" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken" -->
<!-- id="CB1194FC-FE9D-461A-B26B-2B21B65F2D2F_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F2FBC17E-2D88-44DB-BABB-E6310DBB8F6C_at_open-mpi.org" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-03 18:50:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20115.php">Ralph Castain: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>Previous message:</strong> <a href="20113.php">Ralph Castain: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20112.php">Ralph Castain: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20115.php">Ralph Castain: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>Reply:</strong> <a href="20115.php">Ralph Castain: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 04.09.2012 um 00:07 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; I'm leaning towards fixing it - it came due to discussions on how to handle hostfile when there is an allocation. For now, though, that should work.
</span><br>
<p>Oh, did I miss this on the list? If there is a hostfile given as argument, it should override the default hostfile IMO. 
<br>
<p><p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SGE issue
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I usually don't install new versions instantly, so I only noticed right now, that in 1.4.5 I get a wrong allocation inside SGE (always one process less than requested with `qsub -pe orted N ...`. This I tried only, as with 1.6.1 I get:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There are no nodes allocated to this job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all the time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Weird - I'm not sure I understand what you are saying. Is this happening with 1.6.1 as well? Or just with 1.4.5?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1.6.1 = no nodes allocated
</span><br>
<span class="quotelev2">&gt;&gt; 1.4.5 = one process less than requested
</span><br>
<span class="quotelev2">&gt;&gt; 1.4.1 = works as it should
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well that seems strange! Can you run 1.6.1 with the following on the mpirun cmd line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca ras_gridengine_debug 1 -mca ras_gridengine_verbose 10 -mca ras_base_verbose 10
</span><br>
<p>[pc15381:06250] mca: base: components_open: Looking for ras components
<br>
[pc15381:06250] mca: base: components_open: opening ras components
<br>
[pc15381:06250] mca: base: components_open: found loaded component cm
<br>
[pc15381:06250] mca: base: components_open: component cm has no register function
<br>
[pc15381:06250] mca: base: components_open: component cm open function successful
<br>
[pc15381:06250] mca: base: components_open: found loaded component gridengine
<br>
[pc15381:06250] mca: base: components_open: component gridengine has no register function
<br>
[pc15381:06250] mca: base: components_open: component gridengine open function successful
<br>
[pc15381:06250] mca: base: components_open: found loaded component loadleveler
<br>
[pc15381:06250] mca: base: components_open: component loadleveler has no register function
<br>
[pc15381:06250] mca: base: components_open: component loadleveler open function successful
<br>
[pc15381:06250] mca: base: components_open: found loaded component slurm
<br>
[pc15381:06250] mca: base: components_open: component slurm has no register function
<br>
[pc15381:06250] mca: base: components_open: component slurm open function successful
<br>
[pc15381:06250] mca:base:select: Auto-selecting ras components
<br>
[pc15381:06250] mca:base:select:(  ras) Querying component [cm]
<br>
[pc15381:06250] mca:base:select:(  ras) Skipping component [cm]. Query failed to return a module
<br>
[pc15381:06250] mca:base:select:(  ras) Querying component [gridengine]
<br>
[pc15381:06250] mca:base:select:(  ras) Query of component [gridengine] set priority to 100
<br>
[pc15381:06250] mca:base:select:(  ras) Querying component [loadleveler]
<br>
[pc15381:06250] mca:base:select:(  ras) Skipping component [loadleveler]. Query failed to return a module
<br>
[pc15381:06250] mca:base:select:(  ras) Querying component [slurm]
<br>
[pc15381:06250] mca:base:select:(  ras) Skipping component [slurm]. Query failed to return a module
<br>
[pc15381:06250] mca:base:select:(  ras) Selected component [gridengine]
<br>
[pc15381:06250] mca: base: close: unloading component cm
<br>
[pc15381:06250] mca: base: close: unloading component loadleveler
<br>
[pc15381:06250] mca: base: close: unloading component slurm
<br>
[pc15381:06250] ras:gridengine: JOB_ID: 4636
<br>
[pc15381:06250] ras:gridengine: PE_HOSTFILE: /var/spool/sge/pc15381/active_jobs/4636.1/pe_hostfile
<br>
[pc15381:06250] ras:gridengine: pc15381: PE_HOSTFILE shows slots=1
<br>
[pc15381:06250] ras:gridengine: pc15370: PE_HOSTFILE shows slots=2
<br>
--------------------------------------------------------------------------
<br>
There are no nodes allocated to this job.
<br>
--------------------------------------------------------------------------
<br>
[pc15381:06250] mca: base: close: component gridengine closed
<br>
[pc15381:06250] mca: base: close: unloading component gridengine
<br>
<p>The actual hostfile contains:
<br>
<p>pc15381 1 all.q_at_pc15381 UNDEFINED
<br>
pc15370 2 extra.q_at_pc15370 UNDEFINED
<br>
pc15381 1 extra.q_at_pc15381 UNDEFINED
<br>
<p>and it was submitted with `qsub -pe orted 4 ...`.
<br>
<p><p>Aha, I remember an issue on the list, if a job gets slots from several queues that they weren't added. This was the issue in 1.4.5, ok. Wasn't it fixed lateron? But here it's getting no allocation at all.
<br>
<p>==
<br>
<p>If I force it to get jobs only from one queue:
<br>
<p>[pc15370:30447] mca: base: components_open: Looking for ras components
<br>
[pc15370:30447] mca: base: components_open: opening ras components
<br>
[pc15370:30447] mca: base: components_open: found loaded component cm
<br>
[pc15370:30447] mca: base: components_open: component cm has no register function
<br>
[pc15370:30447] mca: base: components_open: component cm open function successful
<br>
[pc15370:30447] mca: base: components_open: found loaded component gridengine
<br>
[pc15370:30447] mca: base: components_open: component gridengine has no register function
<br>
[pc15370:30447] mca: base: components_open: component gridengine open function successful
<br>
[pc15370:30447] mca: base: components_open: found loaded component loadleveler
<br>
[pc15370:30447] mca: base: components_open: component loadleveler has no register function
<br>
[pc15370:30447] mca: base: components_open: component loadleveler open function successful
<br>
[pc15370:30447] mca: base: components_open: found loaded component slurm
<br>
[pc15370:30447] mca: base: components_open: component slurm has no register function
<br>
[pc15370:30447] mca: base: components_open: component slurm open function successful
<br>
[pc15370:30447] mca:base:select: Auto-selecting ras components
<br>
[pc15370:30447] mca:base:select:(  ras) Querying component [cm]
<br>
[pc15370:30447] mca:base:select:(  ras) Skipping component [cm]. Query failed to return a module
<br>
[pc15370:30447] mca:base:select:(  ras) Querying component [gridengine]
<br>
[pc15370:30447] mca:base:select:(  ras) Query of component [gridengine] set priority to 100
<br>
[pc15370:30447] mca:base:select:(  ras) Querying component [loadleveler]
<br>
[pc15370:30447] mca:base:select:(  ras) Skipping component [loadleveler]. Query failed to return a module
<br>
[pc15370:30447] mca:base:select:(  ras) Querying component [slurm]
<br>
[pc15370:30447] mca:base:select:(  ras) Skipping component [slurm]. Query failed to return a module
<br>
[pc15370:30447] mca:base:select:(  ras) Selected component [gridengine]
<br>
[pc15370:30447] mca: base: close: unloading component cm
<br>
[pc15370:30447] mca: base: close: unloading component loadleveler
<br>
[pc15370:30447] mca: base: close: unloading component slurm
<br>
[pc15370:30447] ras:gridengine: JOB_ID: 4638
<br>
[pc15370:30447] ras:gridengine: PE_HOSTFILE: /var/spool/sge/pc15370/active_jobs/4638.1/pe_hostfile
<br>
[pc15370:30447] ras:gridengine: pc15370: PE_HOSTFILE shows slots=2
<br>
[pc15370:30447] ras:gridengine: pc15381: PE_HOSTFILE shows slots=2
<br>
<p>But: it starts only 2 processes instead of 4:
<br>
<p>Total: 2
<br>
Universe: 4
<br>
Hello World from Rank 0.
<br>
Hello World from Rank 1.
<br>
<p>Yes, I can add `mpiexec -np $NSLOTS ..` to get 4, but all will be on pc15370, the pc15381 is ignored completely.
<br>
<p>==
<br>
<p>If I go back to 1.4.1:
<br>
<p>[pc15370:31052] mca: base: components_open: Looking for ras components
<br>
[pc15370:31052] mca: base: components_open: opening ras components
<br>
[pc15370:31052] mca: base: components_open: found loaded component gridengine
<br>
[pc15370:31052] mca: base: components_open: component gridengine has no register function
<br>
[pc15370:31052] mca: base: components_open: component gridengine open function successful
<br>
[pc15370:31052] mca: base: components_open: found loaded component slurm
<br>
[pc15370:31052] mca: base: components_open: component slurm has no register function
<br>
[pc15370:31052] mca: base: components_open: component slurm open function successful
<br>
[pc15370:31052] mca:base:select: Auto-selecting ras components
<br>
[pc15370:31052] mca:base:select:(  ras) Querying component [gridengine]
<br>
[pc15370:31052] mca:base:select:(  ras) Query of component [gridengine] set priority to 100
<br>
[pc15370:31052] mca:base:select:(  ras) Querying component [slurm]
<br>
[pc15370:31052] mca:base:select:(  ras) Skipping component [slurm]. Query failed to return a module
<br>
[pc15370:31052] mca:base:select:(  ras) Selected component [gridengine]
<br>
[pc15370:31052] mca: base: close: unloading component slurm
<br>
[pc15370:31052] ras:gridengine: JOB_ID: 4640
<br>
[pc15370:31052] ras:gridengine: PE_HOSTFILE: /var/spool/sge/pc15370/active_jobs/4640.1/pe_hostfile
<br>
[pc15370:31052] ras:gridengine: pc15370: PE_HOSTFILE shows slots=2
<br>
[pc15370:31052] ras:gridengine: pc15381: PE_HOSTFILE shows slots=2
<br>
<p>Total: 4
<br>
Universe: 4
<br>
Hello World from Rank 0.
<br>
Hello World from Rank 1.
<br>
Hello World from Rank 2.
<br>
Hello World from Rank 3.
<br>
<p>And no &quot;-np $NSLOTS&quot; in the command, just a plain `mpiexec ./mpihello`.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; My guess is that something in the pe_hostfile syntax may have changed and we didn't pick up on it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I configured with:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --prefix=$HOME/local/... --enable-static --disable-shared --with-sge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and adjusted my PATHs accordingly (at least: I hope so).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
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
<li><strong>Next message:</strong> <a href="20115.php">Ralph Castain: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>Previous message:</strong> <a href="20113.php">Ralph Castain: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>In reply to:</strong> <a href="20112.php">Ralph Castain: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20115.php">Ralph Castain: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<li><strong>Reply:</strong> <a href="20115.php">Ralph Castain: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
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
