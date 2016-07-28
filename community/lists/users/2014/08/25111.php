<?
$subject_val = "Re: [OMPI users] Running a hybrid MPI+openMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 09:46:11 2014" -->
<!-- isoreceived="20140821134611" -->
<!-- sent="Thu, 21 Aug 2014 06:45:52 -0700" -->
<!-- isosent="20140821134552" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running a hybrid MPI+openMP program" -->
<!-- id="4C0AEF16-1BA7-4B11-BA26-92B70391DE84_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="173BE729-AB4A-4AAD-99FA-21F708492DEE_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running a hybrid MPI+openMP program<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-21 09:45:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25112.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25110.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>In reply to:</strong> <a href="25106.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25112.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25112.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 21, 2014, at 2:51 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 20.08.2014 um 23:16 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 20, 2014, at 11:16 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 20.08.2014 um 19:05 schrieb Ralph Castain:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Aha, this is quite interesting - how do you do this: scanning the /proc/&lt;pid&gt;/status or alike? What happens if you don't find enough free cores as they are used up by other applications already?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Remember, when you use mpirun to launch, we launch our own daemons using the native launcher (e.g., qsub). So the external RM will bind our daemons to the specified cores on each node. We use hwloc to determine what cores our daemons are bound to, and then bind our own child processes to cores within that range.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thx for reminding me of this. Indeed, I mixed up two different aspects in this discussion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a) What will happen in case no binding was done by the RM (hence Open MPI could use all cores) and two Open MPI jobs (or something completely different besides one Open MPI job) are running on the same node (due to the Tight Integration with two different Open MPI directories in /tmp and two `orted`, unique for each job)? Will the second Open MPI job know what the first Open MPI job used up already? Or will both use the same set of cores as &quot;-bind-to none&quot; can't be set in the given `mpiexec` command because of &quot;-map-by slot:pe=$OMP_NUM_THREADS&quot; was used - which triggers &quot;-bind-to core&quot; indispensable and can't be switched off? I see the same cores being used for both jobs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, each mpirun executes completely independently of the other, so they have no idea what the other is doing. So the cores will be overloaded. Multi-pe's requires bind-to-core otherwise there is no way to implement the request
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yep, and so it's no option in a mixed cluster. Why would it hurt to allow &quot;-bind-to none&quot; here?
</span><br>
<p>Guess I'm confused here - what does pe=N mean if we bind-to none?? If you are running on a mixed cluster and don't want binding, then just say bind-to none and leave the pe argument out entirely as it wouldn't mean anything unless you are bound
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Altering the machinefile instead: the processes are not bound to any core, and the OS takes care of a proper assignment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here the ordinary user has to mangle the hostfile, this is not good (but allows several jobs per node as the OS shift the processes around). Could/should it be put into the &quot;gridengine&quot; module in OpenMPI, to divide the slot count per node automatically when $OMP_NUM_THREADS is found, or generate an error if it's not divisible?
</span><br>
<p>Sure, that could be done - but it will only have if OMP_NUM_THREADS is set when someone spins off threads. So far as I know, that's only used for OpenMP - so we'd get a little help, but it wouldn't be full coverage.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If the cores we are bound to are the same on each node, then we will do this with no further instruction. However, if the cores are different on the individual nodes, then you need to add --hetero-nodes to your command line (as the nodes appear to be heterogeneous to us).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b) Aha, it's not about different type CPU types, but also same CPU type but different allocations between the nodes? It's not in the `mpiexec` man-page of 1.8.1 though. I'll have a look at it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ qsub -binding linear:2:0 -pe smp2 8 -masterq parallel_at_node01 -q parallel_at_node0[1-4] test_openmpi.sh 
</span><br>
<span class="quotelev1">&gt; Your job 247109 (&quot;test_openmpi.sh&quot;) has been submitted
</span><br>
<span class="quotelev1">&gt; $ qsub -binding linear:2:1 -pe smp2 8 -masterq parallel_at_node01 -q parallel_at_node0[1-4] test_openmpi.sh 
</span><br>
<span class="quotelev1">&gt; Your job 247110 (&quot;test_openmpi.sh&quot;) has been submitted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Getting on node03:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6733 ?        Sl     0:00  \_ sge_shepherd-247109 -bg
</span><br>
<span class="quotelev1">&gt; 6734 ?        SNs    0:00  |   \_ /usr/sge/utilbin/lx24-amd64/qrsh_starter /var/spool/sge/node03/active_jobs/247109.1/1.node03
</span><br>
<span class="quotelev1">&gt; 6741 ?        SN     0:00  |       \_ orted -mca orte_hetero_nodes 1 -mca ess env -mca orte_ess_jobid 1493303296 -mca orte_ess_vpid
</span><br>
<span class="quotelev1">&gt; 6742 ?        RNl    0:31  |           \_ ./mpihello
</span><br>
<span class="quotelev1">&gt; 6745 ?        Sl     0:00  \_ sge_shepherd-247110 -bg
</span><br>
<span class="quotelev1">&gt; 6746 ?        SNs    0:00      \_ /usr/sge/utilbin/lx24-amd64/qrsh_starter /var/spool/sge/node03/active_jobs/247110.1/1.node03
</span><br>
<span class="quotelev1">&gt; 6753 ?        SN     0:00          \_ orted -mca orte_hetero_nodes 1 -mca ess env -mca orte_ess_jobid 1506607104 -mca orte_ess_vpid
</span><br>
<span class="quotelev1">&gt; 6754 ?        RNl    0:25              \_ ./mpihello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; reuti_at_node03:~&gt; cat /proc/6741/status | grep Cpus_
</span><br>
<span class="quotelev1">&gt; Cpus_allowed:	00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000003
</span><br>
<span class="quotelev1">&gt; Cpus_allowed_list:	0-1
</span><br>
<span class="quotelev1">&gt; reuti_at_node03:~&gt; cat /proc/6753/status | grep Cpus_
</span><br>
<span class="quotelev1">&gt; Cpus_allowed:	00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000030
</span><br>
<span class="quotelev1">&gt; Cpus_allowed_list:	4-5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, &quot;orted&quot; got two cores assigned for each of them. But:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; reuti_at_node03:~&gt; cat /proc/6742/status | grep Cpus_
</span><br>
<span class="quotelev1">&gt; Cpus_allowed:	00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000003
</span><br>
<span class="quotelev1">&gt; Cpus_allowed_list:	0-1
</span><br>
<span class="quotelev1">&gt; reuti_at_node03:~&gt; cat /proc/6754/status | grep Cpus_
</span><br>
<span class="quotelev1">&gt; Cpus_allowed:	00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000003
</span><br>
<span class="quotelev1">&gt; Cpus_allowed_list:	0-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I see here (and in `top` + pressing &quot;1&quot;) that only two cores are used, and Open MPI assigns 0-1 to both jobs. The information in &quot;status&quot; is not the one OpenMPI gets from hwloc?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The man page is probably a little out-of-date in this area - but yes, --hetero-nodes is required for *any* difference in the way the nodes appear to us (cpus, slot assignments, etc.). The 1.9 series may remove that requirement - still looking at it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So it is up to the RM to set the constraint - we just live within it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25097.php">http://www.open-mpi.org/community/lists/users/2014/08/25097.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25098.php">http://www.open-mpi.org/community/lists/users/2014/08/25098.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25106.php">http://www.open-mpi.org/community/lists/users/2014/08/25106.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25111/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25112.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25110.php">Ralph Castain: "Re: [OMPI users] Clarification about OpenMPI, slurm and PMI interface"</a>
<li><strong>In reply to:</strong> <a href="25106.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25112.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25112.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
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
