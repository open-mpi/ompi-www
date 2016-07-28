<?
$subject_val = "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  4 06:16:49 2012" -->
<!-- isoreceived="20120904101649" -->
<!-- sent="Tue, 4 Sep 2012 12:16:41 +0200" -->
<!-- isosent="20120904101641" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken" -->
<!-- id="25A4E0F9-695F-4B2B-A771-FC8CB8B5A1CC_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="94E6D1A1-84FC-45B9-882A-03CA3AD4479F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-09-04 06:16:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20119.php">Yevgeny Kliteynik: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Previous message:</strong> <a href="20117.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>In reply to:</strong> <a href="20115.php">Ralph Castain: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 04.09.2012 um 01:38 schrieb Ralph Castain:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; &lt;snip&gt;W
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well that seems strange! Can you run 1.6.1 with the following on the mpirun cmd line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca ras_gridengine_debug 1 -mca ras_gridengine_verbose 10 -mca ras_base_verbose 10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll take a look at this and see what's going on - have to get back to you on it.
</span><br>
<p>In &quot;ras_gridengine_module.c&quot; I added between the found = true / break:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(mca_ras_gridengine_component.verbose,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;ras:gridengine: %s: PE_HOSTFILE increased to slots=%d&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-&gt;name, node-&gt;slots);
<br>
<p>Then I get:
<br>
<p>[pc15370:13630] ras:gridengine: JOB_ID: 4644
<br>
[pc15370:13630] ras:gridengine: PE_HOSTFILE: /var/spool/sge/pc15370/active_jobs/4644.1/pe_hostfile
<br>
[pc15370:13630] ras:gridengine: pc15370: PE_HOSTFILE shows slots=1
<br>
[pc15370:13630] ras:gridengine: pc15381: PE_HOSTFILE shows slots=2
<br>
[pc15370:13630] ras:gridengine: pc15370: PE_HOSTFILE increased to slots=2
<br>
<p>And the allocation is correct. I'll continue to investigate what is different today.
<br>
<p>-- Reuti
<br>
<p><p><p><span class="quotelev1">&gt; Thx!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: components_open: Looking for ras components
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: components_open: opening ras components
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: components_open: found loaded component cm
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: components_open: component cm has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: components_open: component cm open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: components_open: found loaded component gridengine
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: components_open: component gridengine has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: components_open: component gridengine open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: components_open: found loaded component loadleveler
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: components_open: component loadleveler has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: components_open: component loadleveler open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: components_open: component slurm has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca:base:select: Auto-selecting ras components
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca:base:select:(  ras) Querying component [cm]
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca:base:select:(  ras) Skipping component [cm]. Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca:base:select:(  ras) Querying component [gridengine]
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca:base:select:(  ras) Query of component [gridengine] set priority to 100
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca:base:select:(  ras) Querying component [loadleveler]
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca:base:select:(  ras) Skipping component [loadleveler]. Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca:base:select:(  ras) Querying component [slurm]
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca:base:select:(  ras) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca:base:select:(  ras) Selected component [gridengine]
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: close: unloading component cm
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: close: unloading component loadleveler
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] ras:gridengine: JOB_ID: 4636
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] ras:gridengine: PE_HOSTFILE: /var/spool/sge/pc15381/active_jobs/4636.1/pe_hostfile
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] ras:gridengine: pc15381: PE_HOSTFILE shows slots=1
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] ras:gridengine: pc15370: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; There are no nodes allocated to this job.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: close: component gridengine closed
</span><br>
<span class="quotelev2">&gt;&gt; [pc15381:06250] mca: base: close: unloading component gridengine
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The actual hostfile contains:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; pc15381 1 all.q_at_pc15381 UNDEFINED
</span><br>
<span class="quotelev2">&gt;&gt; pc15370 2 extra.q_at_pc15370 UNDEFINED
</span><br>
<span class="quotelev2">&gt;&gt; pc15381 1 extra.q_at_pc15381 UNDEFINED
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and it was submitted with `qsub -pe orted 4 ...`.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Aha, I remember an issue on the list, if a job gets slots from several queues that they weren't added. This was the issue in 1.4.5, ok. Wasn't it fixed lateron? But here it's getting no allocation at all.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ==
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I force it to get jobs only from one queue:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca: base: components_open: Looking for ras components
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca: base: components_open: opening ras components
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca: base: components_open: found loaded component cm
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca: base: components_open: component cm has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca: base: components_open: component cm open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca: base: components_open: found loaded component gridengine
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca: base: components_open: component gridengine has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca: base: components_open: component gridengine open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca: base: components_open: found loaded component loadleveler
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca: base: components_open: component loadleveler has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca: base: components_open: component loadleveler open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca: base: components_open: component slurm has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca:base:select: Auto-selecting ras components
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca:base:select:(  ras) Querying component [cm]
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca:base:select:(  ras) Skipping component [cm]. Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca:base:select:(  ras) Querying component [gridengine]
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca:base:select:(  ras) Query of component [gridengine] set priority to 100
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca:base:select:(  ras) Querying component [loadleveler]
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca:base:select:(  ras) Skipping component [loadleveler]. Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca:base:select:(  ras) Querying component [slurm]
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca:base:select:(  ras) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca:base:select:(  ras) Selected component [gridengine]
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca: base: close: unloading component cm
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca: base: close: unloading component loadleveler
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] ras:gridengine: JOB_ID: 4638
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] ras:gridengine: PE_HOSTFILE: /var/spool/sge/pc15370/active_jobs/4638.1/pe_hostfile
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] ras:gridengine: pc15370: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:30447] ras:gridengine: pc15381: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But: it starts only 2 processes instead of 4:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Total: 2
</span><br>
<span class="quotelev2">&gt;&gt; Universe: 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello World from Rank 0.
</span><br>
<span class="quotelev2">&gt;&gt; Hello World from Rank 1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I can add `mpiexec -np $NSLOTS ..` to get 4, but all will be on pc15370, the pc15381 is ignored completely.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ==
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I go back to 1.4.1:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] mca: base: components_open: Looking for ras components
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] mca: base: components_open: opening ras components
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] mca: base: components_open: found loaded component gridengine
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] mca: base: components_open: component gridengine has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] mca: base: components_open: component gridengine open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] mca: base: components_open: component slurm has no register function
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] mca:base:select: Auto-selecting ras components
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] mca:base:select:(  ras) Querying component [gridengine]
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] mca:base:select:(  ras) Query of component [gridengine] set priority to 100
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] mca:base:select:(  ras) Querying component [slurm]
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] mca:base:select:(  ras) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] mca:base:select:(  ras) Selected component [gridengine]
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] ras:gridengine: JOB_ID: 4640
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] ras:gridengine: PE_HOSTFILE: /var/spool/sge/pc15370/active_jobs/4640.1/pe_hostfile
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] ras:gridengine: pc15370: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev2">&gt;&gt; [pc15370:31052] ras:gridengine: pc15381: PE_HOSTFILE shows slots=2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Total: 4
</span><br>
<span class="quotelev2">&gt;&gt; Universe: 4
</span><br>
<span class="quotelev2">&gt;&gt; Hello World from Rank 0.
</span><br>
<span class="quotelev2">&gt;&gt; Hello World from Rank 1.
</span><br>
<span class="quotelev2">&gt;&gt; Hello World from Rank 2.
</span><br>
<span class="quotelev2">&gt;&gt; Hello World from Rank 3.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And no &quot;-np $NSLOTS&quot; in the command, just a plain `mpiexec ./mpihello`.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My guess is that something in the pe_hostfile syntax may have changed and we didn't pick up on it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ==
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I configured with:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./configure --prefix=$HOME/local/... --enable-static --disable-shared --with-sge
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and adjusted my PATHs accordingly (at least: I hope so).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="20119.php">Yevgeny Kliteynik: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Previous message:</strong> <a href="20117.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>In reply to:</strong> <a href="20115.php">Ralph Castain: "Re: [OMPI users] -hostfile ignored in 1.6.1 / SGE integration broken"</a>
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
