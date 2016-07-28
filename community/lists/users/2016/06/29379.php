<?
$subject_val = "Re: [OMPI users] Does Open MPI support manual launcher?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 06:00:40 2016" -->
<!-- isoreceived="20160606100040" -->
<!-- sent="Mon, 6 Jun 2016 03:00:36 -0700" -->
<!-- isosent="20160606100036" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does Open MPI support manual launcher?" -->
<!-- id="3AB32B82-DC26-4822-9E6B-51B9E2C7558C_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="066E90D8-4E93-49D0-9B23-10E26AE69F70_at_open-mpi.org" -->
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
<strong>Date:</strong> 2016-06-06 06:00:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29380.php">Gilles Gouaillardet: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29378.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29376.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29389.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Reply:</strong> <a href="29389.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps it would help if you could give us some idea of the interest here? The prior Mesos integration was done as an academic project, which is why it died once the student graduated.
<br>
<p>Is there some long-term interest here? Or is this part of an academic effort?
<br>
<p><p><span class="quotelev1">&gt; On Jun 5, 2016, at 7:22 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 5, 2016, at 4:30 PM, Du, Fan &lt;fan.du_at_[hidden] &lt;mailto:fan.du_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your reply!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2016/6/5 3:01, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The closest thing we have to what you describe is the &#147;orte-dvm&#148; - this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allows one to launch a persistent collection of daemons. You can then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run your applications against it using &#147;mpiexec -hnp &lt;url&gt;&#148; where the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; url is that of the orte-dvm &#147;head&#148; daemon.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried this, maybe I miss something.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On host1:
</span><br>
<span class="quotelev2">&gt;&gt; orte-dvm  --allow-run-as-root
</span><br>
<span class="quotelev2">&gt;&gt; VMURI: 2783903744.0;tcp://192.168.10.55:47325 &lt;tcp://192.168.10.55:47325&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DVM ready
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On host2:
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -hnp 2783903744.0;tcp://192.168.10.55:47325 &lt;tcp://192.168.10.55:47325&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your shell will take the semi-colon to mean the end of the line - you have to enclose it all in quotes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_hnp_uri=2783903744.0
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_ess=tool
</span><br>
<span class="quotelev2">&gt;&gt; [grantleyIPDC01:03305] [[21695,0],0] ORTE_ERROR_LOG: Bad parameter in file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev2">&gt;&gt; -bash: tcp://192.168.10.55:47325: &lt;tcp://192.168.10.55:47325:&gt; No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; digging the code a bit deeper, the uri expects to have job id and rank id.
</span><br>
<span class="quotelev2">&gt;&gt; and how to make the subsequent orte-dvm know where the head orte-dvm is?
</span><br>
<span class="quotelev2">&gt;&gt; I checked orte-dvm help, seems no such option there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I understand you correctly, however, then you would want the orte-dvm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to assemble itself based on the asynchronous start of the individual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemons. In other words, Mesos would start a daemon on each node as that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node became available. Then, once all the daemons have been started,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mesos would execute &#147;mpiexec&#148; to start the application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is that correct?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If so, then we don&#146;t support that mode today, but it could fairly easily
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be added.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I don&#146;t see why you couldn&#146;t just write a small
</span><br>
<span class="quotelev3">&gt;&gt;&gt; standalone tool that collects all the Mesos resources in a file until
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all have been assembled, and then executes &#147;mpiexec -hostfile &lt;myfile&gt;&#148;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Because, mpiexec will eventually rely ssh to run mpi proxy on hosts,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What&#146;s the problem with that? It&#146;s how many HPC clusters work. Is ssh not enabled?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; while
</span><br>
<span class="quotelev2">&gt;&gt; in Mesos, it works like: framework passes information about on which host
</span><br>
<span class="quotelev2">&gt;&gt; to run what commands, and pass such information to Mesos master, then Mesos
</span><br>
<span class="quotelev2">&gt;&gt; master will instruct hosts to run commands.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is where Mesos work module doesn't fit into Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Easiest thing would be to add a Mesos PLM plugin to OMPI - IIRC, someone once did that, but nobody was interested and so it died
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there some reason this won&#146;t work? It would be much simpler and would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work with any MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 3, 2016, at 5:10 PM, Du, Fan &lt;fan.du_at_[hidden] &lt;mailto:fan.du_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:fan.du_at_[hidden] &lt;mailto:fan.du_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2016/6/2 19:14, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; may I ask why you need/want to launch orted manually ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Good question.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The intention is to get orted commands, and run orted with Mesos.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This all comes from who Mesos works, in essence it offers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; resources(cpu/memory/ports)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in a per host basis to framework, framework then builds information of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; how to run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specific tasks, and pass those information to Mesos master, at last
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mesos will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; instructs hosts to execute the framework tasks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Take MPICH2 as example, the framework to support MPICH2 works as above.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. framework gets offers from Mesos master, and tells the Mesos master
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to run a wrapper
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of MPICH2 proxy(hydra_pmi_proxy), at this time, the wrapper waits for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; commands to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; execute the proxy.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. After launch enough MPICH2 proxy wrapper on hosts as user expect,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then run the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; real mpiexec program with '-launcher manual' to grab commands for the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; proxy, then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pass those commands to the proxy wrapper, so finally the real MPICH2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; proxy got launched,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and mpiexec will proceed on normally.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That's why I'm looking for similar functionality as '-launcher manual
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPICH2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Non native speaker, I hope I tell the story clear :)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; unless you are running under a batch manager, Open MPI uses the rsh pml
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to remotely start orted.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; basically, it does
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ssh host orted &lt;orted params&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the best I can suggest is you do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun --mca orte_rsh_agent myrshagent.sh --mca orte_launch_agent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mylaunchagent.sh  ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; under the hood, mpirun will do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; myrshagent.sh host mylaunchagent.sh &lt;orted params&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Thursday, June 2, 2016, Du, Fan &lt;fan.du_at_[hidden] &lt;mailto:fan.du_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;mailto:fan.du_at_[hidden] &lt;mailto:fan.du_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;mailto:fan.du_at_[hidden] &lt;mailto:fan.du_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Hi folks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Starting from Open MPI, I can launch mpi application a.out as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   following on host1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   mpirun --allow-run-as-root --host host1,host2 -np 4 /tmp/a.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   On host2, I saw an proxy, say orted here is spawned:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   orted --hnp-topo-sig 4N:2S:4L3:20L2:20L1:20C:40H:x86_64 -mca ess env
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   -mca orte_ess_jobid 1275133952 -mca orte_ess_vpid 1 -mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   orte_ess_num_procs 2 -mca orte_hnp_uri
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   1275133952.0;tcp://host1_ip:40024 &lt;tcp://host1_ip:40024&gt; --tree-spawn -mca plm rsh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --tree-spawn
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   It seems mpirun use ssh as launcher on my system.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   What if I want to run orted things manually, not by mpirun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   automatically,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   I mean, does mpirun has any option to produce commands for orted?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   As for MPICH2 implementation, there is &quot;-launcher manual&quot; option to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   make this works,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   for example:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   # mpiexec.hydra -launcher manual -np 4 htop
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   HYDRA_LAUNCH: /usr/local/bin/hydra_pmi_proxy --control-port
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   grantleyIPDC04:34652 --rmk user --launcher manual --demux poll
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   --pgid 0 --retries 10 --usize -2 --proxy-id 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   HYDRA_LAUNCH_END
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Then I can manually run hydra_pmi_proxy with commands, and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   mpiexec.hydra will proceed on.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Thanks!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29346.php">http://www.open-mpi.org/community/lists/users/2016/06/29346.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29346.php">http://www.open-mpi.org/community/lists/users/2016/06/29346.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29347.php">http://www.open-mpi.org/community/lists/users/2016/06/29347.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2016/06/29364.php">http://www.open-mpi.org/community/lists/users/2016/06/29364.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29364.php">http://www.open-mpi.org/community/lists/users/2016/06/29364.php</a>&gt;
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
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29367.php">http://www.open-mpi.org/community/lists/users/2016/06/29367.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29375.php">http://www.open-mpi.org/community/lists/users/2016/06/29375.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29379/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29380.php">Gilles Gouaillardet: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29378.php">Ralph Castain: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>In reply to:</strong> <a href="29376.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29389.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Reply:</strong> <a href="29389.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
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
