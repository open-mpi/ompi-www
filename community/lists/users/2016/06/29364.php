<?
$subject_val = "Re: [OMPI users] Does Open MPI support manual launcher?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  3 20:10:42 2016" -->
<!-- isoreceived="20160604001042" -->
<!-- sent="Sat, 04 Jun 2016 08:10:36 +0800" -->
<!-- isosent="20160604001036" -->
<!-- name="Du, Fan" -->
<!-- email="fan.du_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does Open MPI support manual launcher?" -->
<!-- id="57521C7C.5040208_at_intel.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5v_nPMgApTA_EDryyhRJEnUUVe-Xz6J+Lw9SiUAjb35SA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Does Open MPI support manual launcher?<br>
<strong>From:</strong> Du, Fan (<em>fan.du_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-03 20:10:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29365.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29363.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="29347.php">Gilles Gouaillardet: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29367.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Reply:</strong> <a href="29367.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2016/6/2 19:14, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; may I ask why you need/want to launch orted manually ?
</span><br>
<p>Good question.
<br>
<p>The intention is to get orted commands, and run orted with Mesos.
<br>
This all comes from who Mesos works, in essence it offers 
<br>
resources(cpu/memory/ports)
<br>
in a per host basis to framework, framework then builds information of 
<br>
how to run
<br>
specific tasks, and pass those information to Mesos master, at last 
<br>
Mesos will
<br>
instructs hosts to execute the framework tasks.
<br>
<p>Take MPICH2 as example, the framework to support MPICH2 works as above.
<br>
1. framework gets offers from Mesos master, and tells the Mesos master 
<br>
to run a wrapper
<br>
of MPICH2 proxy(hydra_pmi_proxy), at this time, the wrapper waits for 
<br>
commands to
<br>
execute the proxy.
<br>
<p>2. After launch enough MPICH2 proxy wrapper on hosts as user expect, 
<br>
then run the
<br>
real mpiexec program with '-launcher manual' to grab commands for the 
<br>
proxy, then
<br>
pass those commands to the proxy wrapper, so finally the real MPICH2 
<br>
proxy got launched,
<br>
and mpiexec will proceed on normally.
<br>
<p>That's why I'm looking for similar functionality as '-launcher manual 
<br>
MPICH2.
<br>
Non native speaker, I hope I tell the story clear :)
<br>
<p><p><p><span class="quotelev1">&gt; unless you are running under a batch manager, Open MPI uses the rsh pml
</span><br>
<span class="quotelev1">&gt; to remotely start orted.
</span><br>
<span class="quotelev1">&gt; basically, it does
</span><br>
<span class="quotelev1">&gt; ssh host orted &lt;orted params&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the best I can suggest is you do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca orte_rsh_agent myrshagent.sh --mca orte_launch_agent
</span><br>
<span class="quotelev1">&gt; mylaunchagent.sh  ...
</span><br>
<span class="quotelev1">&gt; under the hood, mpirun will do
</span><br>
<span class="quotelev1">&gt; myrshagent.sh host mylaunchagent.sh &lt;orted params&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, June 2, 2016, Du, Fan &lt;fan.du_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:fan.du_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Starting from Open MPI, I can launch mpi application a.out as
</span><br>
<span class="quotelev1">&gt;     following on host1
</span><br>
<span class="quotelev1">&gt;     mpirun --allow-run-as-root --host host1,host2 -np 4 /tmp/a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On host2, I saw an proxy, say orted here is spawned:
</span><br>
<span class="quotelev1">&gt;     orted --hnp-topo-sig 4N:2S:4L3:20L2:20L1:20C:40H:x86_64 -mca ess env
</span><br>
<span class="quotelev1">&gt;     -mca orte_ess_jobid 1275133952 -mca orte_ess_vpid 1 -mca
</span><br>
<span class="quotelev1">&gt;     orte_ess_num_procs 2 -mca orte_hnp_uri
</span><br>
<span class="quotelev1">&gt;     1275133952.0;tcp://host1_ip:40024 --tree-spawn -mca plm rsh --tree-spawn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It seems mpirun use ssh as launcher on my system.
</span><br>
<span class="quotelev1">&gt;     What if I want to run orted things manually, not by mpirun
</span><br>
<span class="quotelev1">&gt;     automatically,
</span><br>
<span class="quotelev1">&gt;     I mean, does mpirun has any option to produce commands for orted?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     As for MPICH2 implementation, there is &quot;-launcher manual&quot; option to
</span><br>
<span class="quotelev1">&gt;     make this works,
</span><br>
<span class="quotelev1">&gt;     for example:
</span><br>
<span class="quotelev1">&gt;     # mpiexec.hydra -launcher manual -np 4 htop
</span><br>
<span class="quotelev1">&gt;     HYDRA_LAUNCH: /usr/local/bin/hydra_pmi_proxy --control-port
</span><br>
<span class="quotelev1">&gt;     grantleyIPDC04:34652 --rmk user --launcher manual --demux poll
</span><br>
<span class="quotelev1">&gt;     --pgid 0 --retries 10 --usize -2 --proxy-id 0
</span><br>
<span class="quotelev1">&gt;     HYDRA_LAUNCH_END
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Then I can manually run hydra_pmi_proxy with commands, and
</span><br>
<span class="quotelev1">&gt;     mpiexec.hydra will proceed on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks!
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/06/29346.php">http://www.open-mpi.org/community/lists/users/2016/06/29346.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29347.php">http://www.open-mpi.org/community/lists/users/2016/06/29347.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29365.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29363.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="29347.php">Gilles Gouaillardet: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29367.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Reply:</strong> <a href="29367.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
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
