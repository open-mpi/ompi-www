<?
$subject_val = "Re: [OMPI users] Does Open MPI support manual launcher?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  4 15:01:15 2016" -->
<!-- isoreceived="20160604190115" -->
<!-- sent="Sat, 4 Jun 2016 12:01:07 -0700" -->
<!-- isosent="20160604190107" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does Open MPI support manual launcher?" -->
<!-- id="1F8EA3F5-8A6C-440F-A23B-651F4F5CB7DB_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="57521C7C.5040208_at_intel.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-04 15:01:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29368.php">dani: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29366.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29364.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29375.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Reply:</strong> <a href="29375.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The closest thing we have to what you describe is the &#226;&#128;&#156;orte-dvm&#226;&#128;&#157; - this allows one to launch a persistent collection of daemons. You can then run your applications against it using &#226;&#128;&#156;mpiexec -hnp &lt;url&gt;&#226;&#128;&#157; where the url is that of the orte-dvm &#226;&#128;&#156;head&#226;&#128;&#157; daemon.
<br>
<p>If I understand you correctly, however, then you would want the orte-dvm to assemble itself based on the asynchronous start of the individual daemons. In other words, Mesos would start a daemon on each node as that node became available. Then, once all the daemons have been started, Mesos would execute &#226;&#128;&#156;mpiexec&#226;&#128;&#157; to start the application.
<br>
<p>Is that correct?
<br>
<p>If so, then we don&#226;&#128;&#153;t support that mode today, but it could fairly easily be added. However, I don&#226;&#128;&#153;t see why you couldn&#226;&#128;&#153;t just write a small standalone tool that collects all the Mesos resources in a file until all have been assembled, and then executes &#226;&#128;&#156;mpiexec -hostfile &lt;myfile&gt;&#226;&#128;&#157;.
<br>
<p>Is there some reason this won&#226;&#128;&#153;t work? It would be much simpler and would work with any MPI.
<br>
<p>Ralph
<br>
<p><p><span class="quotelev1">&gt; On Jun 3, 2016, at 5:10 PM, Du, Fan &lt;fan.du_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2016/6/2 19:14, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; may I ask why you need/want to launch orted manually ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The intention is to get orted commands, and run orted with Mesos.
</span><br>
<span class="quotelev1">&gt; This all comes from who Mesos works, in essence it offers resources(cpu/memory/ports)
</span><br>
<span class="quotelev1">&gt; in a per host basis to framework, framework then builds information of how to run
</span><br>
<span class="quotelev1">&gt; specific tasks, and pass those information to Mesos master, at last Mesos will
</span><br>
<span class="quotelev1">&gt; instructs hosts to execute the framework tasks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Take MPICH2 as example, the framework to support MPICH2 works as above.
</span><br>
<span class="quotelev1">&gt; 1. framework gets offers from Mesos master, and tells the Mesos master to run a wrapper
</span><br>
<span class="quotelev1">&gt; of MPICH2 proxy(hydra_pmi_proxy), at this time, the wrapper waits for commands to
</span><br>
<span class="quotelev1">&gt; execute the proxy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. After launch enough MPICH2 proxy wrapper on hosts as user expect, then run the
</span><br>
<span class="quotelev1">&gt; real mpiexec program with '-launcher manual' to grab commands for the proxy, then
</span><br>
<span class="quotelev1">&gt; pass those commands to the proxy wrapper, so finally the real MPICH2 proxy got launched,
</span><br>
<span class="quotelev1">&gt; and mpiexec will proceed on normally.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's why I'm looking for similar functionality as '-launcher manual MPICH2.
</span><br>
<span class="quotelev1">&gt; Non native speaker, I hope I tell the story clear :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; unless you are running under a batch manager, Open MPI uses the rsh pml
</span><br>
<span class="quotelev2">&gt;&gt; to remotely start orted.
</span><br>
<span class="quotelev2">&gt;&gt; basically, it does
</span><br>
<span class="quotelev2">&gt;&gt; ssh host orted &lt;orted params&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the best I can suggest is you do
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca orte_rsh_agent myrshagent.sh --mca orte_launch_agent
</span><br>
<span class="quotelev2">&gt;&gt; mylaunchagent.sh  ...
</span><br>
<span class="quotelev2">&gt;&gt; under the hood, mpirun will do
</span><br>
<span class="quotelev2">&gt;&gt; myrshagent.sh host mylaunchagent.sh &lt;orted params&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thursday, June 2, 2016, Du, Fan &lt;fan.du_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:fan.du_at_[hidden] &lt;mailto:fan.du_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Hi folks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Starting from Open MPI, I can launch mpi application a.out as
</span><br>
<span class="quotelev2">&gt;&gt;    following on host1
</span><br>
<span class="quotelev2">&gt;&gt;    mpirun --allow-run-as-root --host host1,host2 -np 4 /tmp/a.out
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    On host2, I saw an proxy, say orted here is spawned:
</span><br>
<span class="quotelev2">&gt;&gt;    orted --hnp-topo-sig 4N:2S:4L3:20L2:20L1:20C:40H:x86_64 -mca ess env
</span><br>
<span class="quotelev2">&gt;&gt;    -mca orte_ess_jobid 1275133952 -mca orte_ess_vpid 1 -mca
</span><br>
<span class="quotelev2">&gt;&gt;    orte_ess_num_procs 2 -mca orte_hnp_uri
</span><br>
<span class="quotelev2">&gt;&gt;    1275133952.0;tcp://host1_ip:40024 --tree-spawn -mca plm rsh --tree-spawn
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    It seems mpirun use ssh as launcher on my system.
</span><br>
<span class="quotelev2">&gt;&gt;    What if I want to run orted things manually, not by mpirun
</span><br>
<span class="quotelev2">&gt;&gt;    automatically,
</span><br>
<span class="quotelev2">&gt;&gt;    I mean, does mpirun has any option to produce commands for orted?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    As for MPICH2 implementation, there is &quot;-launcher manual&quot; option to
</span><br>
<span class="quotelev2">&gt;&gt;    make this works,
</span><br>
<span class="quotelev2">&gt;&gt;    for example:
</span><br>
<span class="quotelev2">&gt;&gt;    # mpiexec.hydra -launcher manual -np 4 htop
</span><br>
<span class="quotelev2">&gt;&gt;    HYDRA_LAUNCH: /usr/local/bin/hydra_pmi_proxy --control-port
</span><br>
<span class="quotelev2">&gt;&gt;    grantleyIPDC04:34652 --rmk user --launcher manual --demux poll
</span><br>
<span class="quotelev2">&gt;&gt;    --pgid 0 --retries 10 --usize -2 --proxy-id 0
</span><br>
<span class="quotelev2">&gt;&gt;    HYDRA_LAUNCH_END
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Then I can manually run hydra_pmi_proxy with commands, and
</span><br>
<span class="quotelev2">&gt;&gt;    mpiexec.hydra will proceed on.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;    Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/community/lists/users/2016/06/29346.php">http://www.open-mpi.org/community/lists/users/2016/06/29346.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29347.php">http://www.open-mpi.org/community/lists/users/2016/06/29347.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29364.php">http://www.open-mpi.org/community/lists/users/2016/06/29364.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29364.php">http://www.open-mpi.org/community/lists/users/2016/06/29364.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29367/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29368.php">dani: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29366.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29364.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29375.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Reply:</strong> <a href="29375.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
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
