<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  3 18:56:00 2012" -->
<!-- isoreceived="20120203235600" -->
<!-- sent="Sat, 4 Feb 2012 00:55:46 +0100" -->
<!-- isosent="20120203235546" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="A09ED9B2-5DD1-454F-8C69-A440E31E7ECB_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CB51D4C0.129E0%tombry_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-03 18:55:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18391.php">Aurélien Bouteiller: "[OMPI users] mpi_abort_delay"</a>
<li><strong>Previous message:</strong> <a href="18389.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18389.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18401.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 04.02.2012 um 00:15 schrieb Tom Bryan:
<br>
<p>A more detailed answer later, as it's late here. But one short note:
<br>
<p>-pe orte 5 =&gt; give me exactly 5 slots
<br>
<p>-pe orte 5-5 =&gt; the same
<br>
<p>-pe orte 5- =&gt; give me at least 5 slots, up to the maximum you can get right now in the cluster
<br>
<p>The output in `qstat -g t` master/slave only tells you what is granted, not was it necessarly used by you right now. It's up to the application to use the granted slots.
<br>
<p>==
<br>
<p>Requesting exactly 5, will show you either &quot;one master and four slaves&quot; or &quot;one master and five slaves&quot;. This depends on the setting of &quot;job_is_first_task&quot; in the definition of the PE.
<br>
<p>The rationale behind this is, that it will adjust the number of `qrsh -inherit ` calls (just imagine single core machines to understand the idea behind it) which are allowed. In a plain MPI application usually &quot;job_is_first_task&quot; is set to yes, as also the started executable on the machine where the `mpiexec` is issued in the jobscript is doing some work (usually the rank 0). This would result of 4 `qrsh -inherit` being allowed and have a total of 5.
<br>
<p>If your rank 0 is for any reason only collecting results and not doing any work (i.e. master/slave application like in PVM), you would like to say &quot;job_is_first_task no&quot;. This has the effect, that one additional `qrsh -inherit` is allowed - in detail: a local one plus 4 to other nodes to start 5 slaves.
<br>
<p>Nowadays, where you have many cores per node and even use only one `qrsh -inherit` per slave machine and then forks or threads for the additional processes, this setting is less meaningful and would need some new options in the PE:
<br>
<p><a href="https://arc.liv.ac.uk/trac/SGE/ticket/197">https://arc.liv.ac.uk/trac/SGE/ticket/197</a>
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; 1. I'm still surprised that the SGE behavior is so different when I
</span><br>
<span class="quotelev1">&gt; configure my SGE queue differently.  See test &quot;a&quot; in the .tgz.  When I just
</span><br>
<span class="quotelev1">&gt; run mpitest in mpi.sh and ask for exactly 5 slots (-pe orte 5-5), it works
</span><br>
<span class="quotelev1">&gt; if the queue is configured to use a single host.  I see 1 MASTER and 4
</span><br>
<span class="quotelev1">&gt; SLAVES in qstat -g t, and I get the correct output.  If the queue is set to
</span><br>
<span class="quotelev1">&gt; use multiple hosts, the jobs hang in spawn/init, and I get errors
</span><br>
<span class="quotelev1">&gt; [grid-03.cisco.com][[19159,2],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint
</span><br>
<span class="quotelev1">&gt; _complete_connect] connect() to 192.168.122.1 failed: Connection refused
</span><br>
<span class="quotelev1">&gt; (111)
</span><br>
<span class="quotelev1">&gt; [grid-10.cisco.com:05327] [[19159,0],3] routed:binomial: Connection to
</span><br>
<span class="quotelev1">&gt; lifeline [[19159,0],0] lost
</span><br>
<span class="quotelev1">&gt; [grid-16.cisco.com:25196] [[19159,0],1] routed:binomial: Connection to
</span><br>
<span class="quotelev1">&gt; lifeline [[19159,0],0] lost
</span><br>
<span class="quotelev1">&gt; [grid-11.cisco.com:63890] [[19159,0],2] routed:binomial: Connection to
</span><br>
<span class="quotelev1">&gt; lifeline [[19159,0],0] lost
</span><br>
<span class="quotelev1">&gt; So, I'll just assume that mpiexec does some magic that is needed in the
</span><br>
<span class="quotelev1">&gt; multi-machine scenario but not in the single machine scenario.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. I guess I'm not sure how SGE is supposed to behave.  Experiment &quot;a&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;b&quot; were identical except that I changed -pe orte 5-5 to -pe orte 5-.  The
</span><br>
<span class="quotelev1">&gt; single case works like before, and the multiple exec host case fails as
</span><br>
<span class="quotelev1">&gt; before.  The difference is that qstat -g t shows additional SLAVEs that
</span><br>
<span class="quotelev1">&gt; don't seem to correspond to any jobs on the exec hosts.  Are these SLAVEs
</span><br>
<span class="quotelev1">&gt; just slots that are reserved for my job but that I'm not using?  If my job
</span><br>
<span class="quotelev1">&gt; will only use 5 slots, then I should set the SGE qsub job to ask for exactly
</span><br>
<span class="quotelev1">&gt; 5 with &quot;-pe orte 5-5&quot;, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Experiment &quot;d&quot; was similar to &quot;b&quot;, but I use mpi.sh uses &quot;mpiexec -np 1
</span><br>
<span class="quotelev1">&gt; mpitest&quot; instead of running mpitest directly.  Now both the single machine
</span><br>
<span class="quotelev1">&gt; queue and multiple machine queue work.  So, mpiexec seems to make my
</span><br>
<span class="quotelev1">&gt; multi-machine configuration happier.  In this case, I'm still using &quot;-pe
</span><br>
<span class="quotelev1">&gt; orte 5-&quot;, and I'm still seeing the extra SLAVE slots granted in qstat -g t.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. Based on &quot;d&quot;, I thought that I could follow the approach in &quot;a&quot;.  That
</span><br>
<span class="quotelev1">&gt; is, for experiment &quot;e&quot;, I used mpiexec -np 1, but I also used -pe orte 5-5.
</span><br>
<span class="quotelev1">&gt; I thought that this would make the multi-machine queue reserve only the 5
</span><br>
<span class="quotelev1">&gt; slots that I needed.  The single machine queue works correctly, but now the
</span><br>
<span class="quotelev1">&gt; multi-machine case hangs with no errors.  The output from qstat and pstree
</span><br>
<span class="quotelev1">&gt; are what I'd expect, but it seems to hang in Span_multiple and Init_thread.
</span><br>
<span class="quotelev1">&gt; I really expected this to work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm really confused by experiment &quot;e&quot; with multiple machines in the queue.
</span><br>
<span class="quotelev1">&gt; Based on &quot;a&quot; and &quot;d&quot;, I thought that a combination of mpiexec -np 1 would
</span><br>
<span class="quotelev1">&gt; permit the multi-machine scheduling to work with MPI while the &quot;-pe orte
</span><br>
<span class="quotelev1">&gt; 5-5&quot; would limit the slots to exactly the number that it needed to run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---Tom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;mpiExperiments.tgz&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="18391.php">Aurélien Bouteiller: "[OMPI users] mpi_abort_delay"</a>
<li><strong>Previous message:</strong> <a href="18389.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18389.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18401.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
