<?
$subject_val = "Re: [OMPI users] Does Open MPI support manual launcher?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  5 19:30:50 2016" -->
<!-- isoreceived="20160605233050" -->
<!-- sent="Mon, 06 Jun 2016 07:30:44 +0800" -->
<!-- isosent="20160605233044" -->
<!-- name="Du, Fan" -->
<!-- email="fan.du_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does Open MPI support manual launcher?" -->
<!-- id="5754B624.1010208_at_intel.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1F8EA3F5-8A6C-440F-A23B-651F4F5CB7DB_at_open-mpi.org" -->
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
<strong>Date:</strong> 2016-06-05 19:30:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29376.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Previous message:</strong> <a href="29374.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
<li><strong>In reply to:</strong> <a href="29367.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29376.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Reply:</strong> <a href="29376.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your reply!
<br>
<p>On 2016/6/5 3:01, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; The closest thing we have to what you describe is the &#147;orte-dvm&#148; - this
</span><br>
<span class="quotelev1">&gt; allows one to launch a persistent collection of daemons. You can then
</span><br>
<span class="quotelev1">&gt; run your applications against it using &#147;mpiexec -hnp &lt;url&gt;&#148; where the
</span><br>
<span class="quotelev1">&gt; url is that of the orte-dvm &#147;head&#148; daemon.
</span><br>
<p>I tried this, maybe I miss something.
<br>
<p>On host1:
<br>
orte-dvm  --allow-run-as-root
<br>
VMURI: 2783903744.0;tcp://192.168.10.55:47325
<br>
DVM ready
<br>
<p>On host2:
<br>
mpiexec -hnp 2783903744.0;tcp://192.168.10.55:47325
<br>
OMPI_MCA_orte_hnp_uri=2783903744.0
<br>
OMPI_MCA_ess=tool
<br>
[grantleyIPDC01:03305] [[21695,0],0] ORTE_ERROR_LOG: Bad parameter in 
<br>
file base/rml_base_contact.c at line 161
<br>
-bash: tcp://192.168.10.55:47325: No such file or directory
<br>
<p>digging the code a bit deeper, the uri expects to have job id and rank id.
<br>
and how to make the subsequent orte-dvm know where the head orte-dvm is?
<br>
I checked orte-dvm help, seems no such option there.
<br>
<p><span class="quotelev1">&gt; If I understand you correctly, however, then you would want the orte-dvm
</span><br>
<span class="quotelev1">&gt; to assemble itself based on the asynchronous start of the individual
</span><br>
<span class="quotelev1">&gt; daemons. In other words, Mesos would start a daemon on each node as that
</span><br>
<span class="quotelev1">&gt; node became available. Then, once all the daemons have been started,
</span><br>
<span class="quotelev1">&gt; Mesos would execute &#147;mpiexec&#148; to start the application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that correct?
</span><br>
<p>Yes
<br>
<p><span class="quotelev1">&gt; If so, then we don&#146;t support that mode today, but it could fairly easily
</span><br>
<span class="quotelev1">&gt; be added.
</span><br>
<span class="quotelev1">&gt; However, I don&#146;t see why you couldn&#146;t just write a small
</span><br>
<span class="quotelev1">&gt; standalone tool that collects all the Mesos resources in a file until
</span><br>
<span class="quotelev1">&gt; all have been assembled, and then executes &#147;mpiexec -hostfile &lt;myfile&gt;&#148;.
</span><br>
<p>Because, mpiexec will eventually rely ssh to run mpi proxy on hosts, while
<br>
in Mesos, it works like: framework passes information about on which host
<br>
to run what commands, and pass such information to Mesos master, then Mesos
<br>
master will instruct hosts to run commands.
<br>
<p>This is where Mesos work module doesn't fit into Open MPI.
<br>
<p><span class="quotelev1">&gt; Is there some reason this won&#146;t work? It would be much simpler and would
</span><br>
<span class="quotelev1">&gt; work with any MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 3, 2016, at 5:10 PM, Du, Fan &lt;fan.du_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:fan.du_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2016/6/2 19:14, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may I ask why you need/want to launch orted manually ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good question.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The intention is to get orted commands, and run orted with Mesos.
</span><br>
<span class="quotelev2">&gt;&gt; This all comes from who Mesos works, in essence it offers
</span><br>
<span class="quotelev2">&gt;&gt; resources(cpu/memory/ports)
</span><br>
<span class="quotelev2">&gt;&gt; in a per host basis to framework, framework then builds information of
</span><br>
<span class="quotelev2">&gt;&gt; how to run
</span><br>
<span class="quotelev2">&gt;&gt; specific tasks, and pass those information to Mesos master, at last
</span><br>
<span class="quotelev2">&gt;&gt; Mesos will
</span><br>
<span class="quotelev2">&gt;&gt; instructs hosts to execute the framework tasks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Take MPICH2 as example, the framework to support MPICH2 works as above.
</span><br>
<span class="quotelev2">&gt;&gt; 1. framework gets offers from Mesos master, and tells the Mesos master
</span><br>
<span class="quotelev2">&gt;&gt; to run a wrapper
</span><br>
<span class="quotelev2">&gt;&gt; of MPICH2 proxy(hydra_pmi_proxy), at this time, the wrapper waits for
</span><br>
<span class="quotelev2">&gt;&gt; commands to
</span><br>
<span class="quotelev2">&gt;&gt; execute the proxy.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. After launch enough MPICH2 proxy wrapper on hosts as user expect,
</span><br>
<span class="quotelev2">&gt;&gt; then run the
</span><br>
<span class="quotelev2">&gt;&gt; real mpiexec program with '-launcher manual' to grab commands for the
</span><br>
<span class="quotelev2">&gt;&gt; proxy, then
</span><br>
<span class="quotelev2">&gt;&gt; pass those commands to the proxy wrapper, so finally the real MPICH2
</span><br>
<span class="quotelev2">&gt;&gt; proxy got launched,
</span><br>
<span class="quotelev2">&gt;&gt; and mpiexec will proceed on normally.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's why I'm looking for similar functionality as '-launcher manual
</span><br>
<span class="quotelev2">&gt;&gt; MPICH2.
</span><br>
<span class="quotelev2">&gt;&gt; Non native speaker, I hope I tell the story clear :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unless you are running under a batch manager, Open MPI uses the rsh pml
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to remotely start orted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; basically, it does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh host orted &lt;orted params&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the best I can suggest is you do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca orte_rsh_agent myrshagent.sh --mca orte_launch_agent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mylaunchagent.sh  ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; under the hood, mpirun will do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; myrshagent.sh host mylaunchagent.sh &lt;orted params&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thursday, June 2, 2016, Du, Fan &lt;fan.du_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:fan.du_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:fan.du_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Hi folks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Starting from Open MPI, I can launch mpi application a.out as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    following on host1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpirun --allow-run-as-root --host host1,host2 -np 4 /tmp/a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    On host2, I saw an proxy, say orted here is spawned:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    orted --hnp-topo-sig 4N:2S:4L3:20L2:20L1:20C:40H:x86_64 -mca ess env
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    -mca orte_ess_jobid 1275133952 -mca orte_ess_vpid 1 -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    orte_ess_num_procs 2 -mca orte_hnp_uri
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1275133952.0;tcp://host1_ip:40024 --tree-spawn -mca plm rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --tree-spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    It seems mpirun use ssh as launcher on my system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    What if I want to run orted things manually, not by mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    automatically,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    I mean, does mpirun has any option to produce commands for orted?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    As for MPICH2 implementation, there is &quot;-launcher manual&quot; option to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    make this works,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    for example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    # mpiexec.hydra -launcher manual -np 4 htop
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    HYDRA_LAUNCH: /usr/local/bin/hydra_pmi_proxy --control-port
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    grantleyIPDC04:34652 --rmk user --launcher manual --demux poll
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --pgid 0 --retries 10 --usize -2 --proxy-id 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    HYDRA_LAUNCH_END
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Then I can manually run hydra_pmi_proxy with commands, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpiexec.hydra will proceed on.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29346.php">http://www.open-mpi.org/community/lists/users/2016/06/29346.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29347.php">http://www.open-mpi.org/community/lists/users/2016/06/29347.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this
</span><br>
<span class="quotelev2">&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2016/06/29364.php">http://www.open-mpi.org/community/lists/users/2016/06/29364.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29367.php">http://www.open-mpi.org/community/lists/users/2016/06/29367.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29376.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Previous message:</strong> <a href="29374.php">Alexander Droste: "Re: [OMPI users] max buffer size"</a>
<li><strong>In reply to:</strong> <a href="29367.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29376.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Reply:</strong> <a href="29376.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
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
