<?
$subject_val = "Re: [OMPI users] Running a hybrid MPI+openMP program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 05:51:16 2014" -->
<!-- isoreceived="20140821095116" -->
<!-- sent="Thu, 21 Aug 2014 11:51:02 +0200" -->
<!-- isosent="20140821095102" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running a hybrid MPI+openMP program" -->
<!-- id="173BE729-AB4A-4AAD-99FA-21F708492DEE_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49609BDC-58E6-4128-82EE-16DF3B18BA25_at_open-mpi.org" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-21 05:51:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25107.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25105.php">Timur Ismagilov: "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>In reply to:</strong> <a href="25098.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25111.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25111.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 20.08.2014 um 23:16 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 20, 2014, at 11:16 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 20.08.2014 um 19:05 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Aha, this is quite interesting - how do you do this: scanning the /proc/&lt;pid&gt;/status or alike? What happens if you don't find enough free cores as they are used up by other applications already?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Remember, when you use mpirun to launch, we launch our own daemons using the native launcher (e.g., qsub). So the external RM will bind our daemons to the specified cores on each node. We use hwloc to determine what cores our daemons are bound to, and then bind our own child processes to cores within that range.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thx for reminding me of this. Indeed, I mixed up two different aspects in this discussion.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; a) What will happen in case no binding was done by the RM (hence Open MPI could use all cores) and two Open MPI jobs (or something completely different besides one Open MPI job) are running on the same node (due to the Tight Integration with two different Open MPI directories in /tmp and two `orted`, unique for each job)? Will the second Open MPI job know what the first Open MPI job used up already? Or will both use the same set of cores as &quot;-bind-to none&quot; can't be set in the given `mpiexec` command because of &quot;-map-by slot:pe=$OMP_NUM_THREADS&quot; was used - which triggers &quot;-bind-to core&quot; indispensable and can't be switched off? I see the same cores being used for both jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, each mpirun executes completely independently of the other, so they have no idea what the other is doing. So the cores will be overloaded. Multi-pe's requires bind-to-core otherwise there is no way to implement the request
</span><br>
<p>Yep, and so it's no option in a mixed cluster. Why would it hurt to allow &quot;-bind-to none&quot; here?
<br>
<p><p><span class="quotelev2">&gt;&gt; Altering the machinefile instead: the processes are not bound to any core, and the OS takes care of a proper assignment.
</span><br>
<p>Here the ordinary user has to mangle the hostfile, this is not good (but allows several jobs per node as the OS shift the processes around). Could/should it be put into the &quot;gridengine&quot; module in OpenMPI, to divide the slot count per node automatically when $OMP_NUM_THREADS is found, or generate an error if it's not divisible?
<br>
<p>===
<br>
<p><span class="quotelev3">&gt;&gt;&gt; If the cores we are bound to are the same on each node, then we will do this with no further instruction. However, if the cores are different on the individual nodes, then you need to add --hetero-nodes to your command line (as the nodes appear to be heterogeneous to us).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; b) Aha, it's not about different type CPU types, but also same CPU type but different allocations between the nodes? It's not in the `mpiexec` man-page of 1.8.1 though. I'll have a look at it.
</span><br>
<p>I tried:
<br>
<p>$ qsub -binding linear:2:0 -pe smp2 8 -masterq parallel_at_node01 -q parallel_at_node0[1-4] test_openmpi.sh 
<br>
Your job 247109 (&quot;test_openmpi.sh&quot;) has been submitted
<br>
$ qsub -binding linear:2:1 -pe smp2 8 -masterq parallel_at_node01 -q parallel_at_node0[1-4] test_openmpi.sh 
<br>
Your job 247110 (&quot;test_openmpi.sh&quot;) has been submitted
<br>
<p><p>Getting on node03:
<br>
<p><p>&nbsp;6733 ?        Sl     0:00  \_ sge_shepherd-247109 -bg
<br>
&nbsp;6734 ?        SNs    0:00  |   \_ /usr/sge/utilbin/lx24-amd64/qrsh_starter /var/spool/sge/node03/active_jobs/247109.1/1.node03
<br>
&nbsp;6741 ?        SN     0:00  |       \_ orted -mca orte_hetero_nodes 1 -mca ess env -mca orte_ess_jobid 1493303296 -mca orte_ess_vpid
<br>
&nbsp;6742 ?        RNl    0:31  |           \_ ./mpihello
<br>
&nbsp;6745 ?        Sl     0:00  \_ sge_shepherd-247110 -bg
<br>
&nbsp;6746 ?        SNs    0:00      \_ /usr/sge/utilbin/lx24-amd64/qrsh_starter /var/spool/sge/node03/active_jobs/247110.1/1.node03
<br>
&nbsp;6753 ?        SN     0:00          \_ orted -mca orte_hetero_nodes 1 -mca ess env -mca orte_ess_jobid 1506607104 -mca orte_ess_vpid
<br>
&nbsp;6754 ?        RNl    0:25              \_ ./mpihello
<br>
<p><p>reuti_at_node03:~&gt; cat /proc/6741/status | grep Cpus_
<br>
Cpus_allowed:	00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000003
<br>
Cpus_allowed_list:	0-1
<br>
reuti_at_node03:~&gt; cat /proc/6753/status | grep Cpus_
<br>
Cpus_allowed:	00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000030
<br>
Cpus_allowed_list:	4-5
<br>
<p>Hence, &quot;orted&quot; got two cores assigned for each of them. But:
<br>
<p><p>reuti_at_node03:~&gt; cat /proc/6742/status | grep Cpus_
<br>
Cpus_allowed:	00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000003
<br>
Cpus_allowed_list:	0-1
<br>
reuti_at_node03:~&gt; cat /proc/6754/status | grep Cpus_
<br>
Cpus_allowed:	00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000000,00000003
<br>
Cpus_allowed_list:	0-1
<br>
<p>What I see here (and in `top` + pressing &quot;1&quot;) that only two cores are used, and Open MPI assigns 0-1 to both jobs. The information in &quot;status&quot; is not the one OpenMPI gets from hwloc?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; The man page is probably a little out-of-date in this area - but yes, --hetero-nodes is required for *any* difference in the way the nodes appear to us (cpus, slot assignments, etc.). The 1.9 series may remove that requirement - still looking at it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So it is up to the RM to set the constraint - we just live within it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25097.php">http://www.open-mpi.org/community/lists/users/2014/08/25097.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25098.php">http://www.open-mpi.org/community/lists/users/2014/08/25098.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25107.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25105.php">Timur Ismagilov: "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>In reply to:</strong> <a href="25098.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25111.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Reply:</strong> <a href="25111.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
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
