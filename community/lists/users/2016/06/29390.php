<?
$subject_val = "Re: [OMPI users] Does Open MPI support manual launcher?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 10:55:12 2016" -->
<!-- isoreceived="20160607145512" -->
<!-- sent="Tue, 7 Jun 2016 07:55:07 -0700" -->
<!-- isosent="20160607145507" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does Open MPI support manual launcher?" -->
<!-- id="865E650F-AEAC-48D6-8DDB-0B246170F550_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5756D778.4010504_at_intel.com" -->
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
<strong>Date:</strong> 2016-06-07 10:55:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29391.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29389.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>In reply to:</strong> <a href="29389.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29393.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Reply:</strong> <a href="29393.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Jun 7, 2016, at 7:17 AM, Du, Fan &lt;fan.du_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2016/6/6 18:00, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps it would help if you could give us some idea of the interest
</span><br>
<span class="quotelev2">&gt;&gt; here? The prior Mesos integration was done as an academic project, which
</span><br>
<span class="quotelev2">&gt;&gt; is why it died once the student graduated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you point me the repo of previous work?
</span><br>
<p>Unfortunately, it was never committed and has long since disappeared
<br>
<p><span class="quotelev1">&gt; The intention is simple, to provide a framework, which can run Open MPI application
</span><br>
<span class="quotelev1">&gt; on top of cluster, and it's not an academic project. One of my customer use OpenMPI,
</span><br>
<span class="quotelev1">&gt; and they want to deploy Mesos cluster, and move OpenMPI stuff on it, now it's early
</span><br>
<span class="quotelev1">&gt; stage of evaluation phase.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A sample to Mesos framework to support MPICH can be found here:
</span><br>
<span class="quotelev1">&gt; [1]: <a href="https://github.com/apache/mesos/tree/master/mpi">https://github.com/apache/mesos/tree/master/mpi</a>   &lt;- mpd ring version
</span><br>
<span class="quotelev1">&gt; [2]&#239;&#188;&#154;<a href="https://github.com/mesosphere/mesos-hydra">https://github.com/mesosphere/mesos-hydra</a>         &lt;- hydra version
</span><br>
<p>I can take a look, but cannot promise how soon I can do this - do you have a timeline?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another question here:
</span><br>
<span class="quotelev1">&gt; Application compiled with Open MPI should run ok with MPICH mpirun, because API
</span><br>
<span class="quotelev1">&gt; compatible with each MPI implementation, right? IOW, Is application based on Open MPI
</span><br>
<span class="quotelev1">&gt; able to run on MPICH environment?
</span><br>
<p>I&#226;&#128;&#153;m afraid not - while the MPI-level functions are standard, the underlying implementation is not compatible
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there some long-term interest here? Or is this part of an academic
</span><br>
<span class="quotelev2">&gt;&gt; effort?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 5, 2016, at 7:22 PM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 5, 2016, at 4:30 PM, Du, Fan &lt;fan.du_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:fan.du_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for your reply!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2016/6/5 3:01, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The closest thing we have to what you describe is the &#226;&#128;&#156;orte-dvm&#226;&#128;&#157; - this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allows one to launch a persistent collection of daemons. You can then
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; run your applications against it using &#226;&#128;&#156;mpiexec -hnp &lt;url&gt;&#226;&#128;&#157; where the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; url is that of the orte-dvm &#226;&#128;&#156;head&#226;&#128;&#157; daemon.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried this, maybe I miss something.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On host1:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte-dvm  --allow-run-as-root
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; VMURI: 2783903744.0;tcp://192.168.10.55:47325
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DVM ready
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On host2:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec -hnp 2783903744.0;tcp://192.168.10.55:47325
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your shell will take the semi-colon to mean the end of the line - you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have to enclose it all in quotes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_orte_hnp_uri=2783903744.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_MCA_ess=tool
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [grantleyIPDC01:03305] [[21695,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -bash:tcp://192.168.10.55:47325:No such file or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; digging the code a bit deeper, the uri expects to have job id and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank id.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and how to make the subsequent orte-dvm know where the head orte-dvm is?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I checked orte-dvm help, seems no such option there.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If I understand you correctly, however, then you would want the orte-dvm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to assemble itself based on the asynchronous start of the individual
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; daemons. In other words, Mesos would start a daemon on each node as that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node became available. Then, once all the daemons have been started,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mesos would execute &#226;&#128;&#156;mpiexec&#226;&#128;&#157; to start the application.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is that correct?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If so, then we don&#226;&#128;&#153;t support that mode today, but it could fairly easily
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be added.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, I don&#226;&#128;&#153;t see why you couldn&#226;&#128;&#153;t just write a small
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; standalone tool that collects all the Mesos resources in a file until
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all have been assembled, and then executes &#226;&#128;&#156;mpiexec -hostfile &lt;myfile&gt;&#226;&#128;&#157;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Because, mpiexec will eventually rely ssh to run mpi proxy on hosts,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What&#226;&#128;&#153;s the problem with that? It&#226;&#128;&#153;s how many HPC clusters work. Is ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not enabled?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; while
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in Mesos, it works like: framework passes information about on which host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to run what commands, and pass such information to Mesos master, then
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mesos
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; master will instruct hosts to run commands.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is where Mesos work module doesn't fit into Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Easiest thing would be to add a Mesos PLM plugin to OMPI - IIRC,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; someone once did that, but nobody was interested and so it died
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there some reason this won&#226;&#128;&#153;t work? It would be much simpler and would
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; work with any MPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jun 3, 2016, at 5:10 PM, Du, Fan &lt;fan.du_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:fan.du_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:fan.du_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 2016/6/2 19:14, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; may I ask why you need/want to launch orted manually ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Good question.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The intention is to get orted commands, and run orted with Mesos.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This all comes from who Mesos works, in essence it offers
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; resources(cpu/memory/ports)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in a per host basis to framework, framework then builds information of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; how to run
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; specific tasks, and pass those information to Mesos master, at last
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Mesos will
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; instructs hosts to execute the framework tasks.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Take MPICH2 as example, the framework to support MPICH2 works as above.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1. framework gets offers from Mesos master, and tells the Mesos master
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to run a wrapper
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of MPICH2 proxy(hydra_pmi_proxy), at this time, the wrapper waits for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; commands to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; execute the proxy.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2. After launch enough MPICH2 proxy wrapper on hosts as user expect,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; then run the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; real mpiexec program with '-launcher manual' to grab commands for the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; proxy, then
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pass those commands to the proxy wrapper, so finally the real MPICH2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; proxy got launched,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and mpiexec will proceed on normally.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; That's why I'm looking for similar functionality as '-launcher manual
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPICH2.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Non native speaker, I hope I tell the story clear :)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; unless you are running under a batch manager, Open MPI uses the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rsh pml
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to remotely start orted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; basically, it does
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ssh host orted &lt;orted params&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the best I can suggest is you do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun --mca orte_rsh_agent myrshagent.sh --mca orte_launch_agent
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mylaunchagent.sh  ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; under the hood, mpirun will do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; myrshagent.sh host mylaunchagent.sh &lt;orted params&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thursday, June 2, 2016, Du, Fan &lt;fan.du_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:fan.du_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:fan.du_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:fan.du_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Hi folks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Starting from Open MPI, I can launch mpi application a.out as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  following on host1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  mpirun --allow-run-as-root --host host1,host2 -np 4 /tmp/a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  On host2, I saw an proxy, say orted here is spawned:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  orted --hnp-topo-sig 4N:2S:4L3:20L2:20L1:20C:40H:x86_64 -mca ess env
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  -mca orte_ess_jobid 1275133952 -mca orte_ess_vpid 1 -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  orte_ess_num_procs 2 -mca orte_hnp_uri
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  1275133952.0;tcp://host1_ip:40024--tree-spawn -mca plm rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --tree-spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  It seems mpirun use ssh as launcher on my system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  What if I want to run orted things manually, not by mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  automatically,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  I mean, does mpirun has any option to produce commands for orted?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  As for MPICH2 implementation, there is &quot;-launcher manual&quot; option to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  make this works,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  for example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  # mpiexec.hydra -launcher manual -np 4 htop
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  HYDRA_LAUNCH: /usr/local/bin/hydra_pmi_proxy --control-port
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  grantleyIPDC04:34652 --rmk user --launcher manual --demux poll
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  --pgid 0 --retries 10 --usize -2 --proxy-id 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  HYDRA_LAUNCH_END
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Then I can manually run hydra_pmi_proxy with commands, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  mpiexec.hydra will proceed on.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29346.php">http://www.open-mpi.org/community/lists/users/2016/06/29346.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29347.php">http://www.open-mpi.org/community/lists/users/2016/06/29347.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2016/06/29364.php">http://www.open-mpi.org/community/lists/users/2016/06/29364.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29364.php">http://www.open-mpi.org/community/lists/users/2016/06/29364.php</a>&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29367.php">http://www.open-mpi.org/community/lists/users/2016/06/29367.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29375.php">http://www.open-mpi.org/community/lists/users/2016/06/29375.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29379.php">http://www.open-mpi.org/community/lists/users/2016/06/29379.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29389.php">http://www.open-mpi.org/community/lists/users/2016/06/29389.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29391.php">Daniel Letai: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29389.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>In reply to:</strong> <a href="29389.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29393.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Reply:</strong> <a href="29393.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
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
