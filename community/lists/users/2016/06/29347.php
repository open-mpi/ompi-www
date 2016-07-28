<?
$subject_val = "Re: [OMPI users] Does Open MPI support manual launcher?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 07:15:00 2016" -->
<!-- isoreceived="20160602111500" -->
<!-- sent="Thu, 2 Jun 2016 20:14:59 +0900" -->
<!-- isosent="20160602111459" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does Open MPI support manual launcher?" -->
<!-- id="CAAkFZ5v_nPMgApTA_EDryyhRJEnUUVe-Xz6J+Lw9SiUAjb35SA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="574FF22E.5080709_at_intel.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-02 07:14:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29348.php">Edgar Gabriel: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Previous message:</strong> <a href="29346.php">Du, Fan: "[OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>In reply to:</strong> <a href="29346.php">Du, Fan: "[OMPI users] Does Open MPI support manual launcher?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29364.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Reply:</strong> <a href="29364.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>may I ask why you need/want to launch orted manually ?
<br>
<p>unless you are running under a batch manager, Open MPI uses the rsh pml to
<br>
remotely start orted.
<br>
basically, it does
<br>
ssh host orted &lt;orted params&gt;
<br>
<p>the best I can suggest is you do
<br>
<p>mpirun --mca orte_rsh_agent myrshagent.sh --mca orte_launch_agent
<br>
mylaunchagent.sh  ...
<br>
under the hood, mpirun will do
<br>
myrshagent.sh host mylaunchagent.sh &lt;orted params&gt;
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, June 2, 2016, Du, Fan &lt;fan.du_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Starting from Open MPI, I can launch mpi application a.out as following on
</span><br>
<span class="quotelev1">&gt; host1
</span><br>
<span class="quotelev1">&gt; mpirun --allow-run-as-root --host host1,host2 -np 4 /tmp/a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On host2, I saw an proxy, say orted here is spawned:
</span><br>
<span class="quotelev1">&gt; orted --hnp-topo-sig 4N:2S:4L3:20L2:20L1:20C:40H:x86_64 -mca ess env -mca
</span><br>
<span class="quotelev1">&gt; orte_ess_jobid 1275133952 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2
</span><br>
<span class="quotelev1">&gt; -mca orte_hnp_uri 1275133952.0;tcp://host1_ip:40024 --tree-spawn -mca plm
</span><br>
<span class="quotelev1">&gt; rsh --tree-spawn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems mpirun use ssh as launcher on my system.
</span><br>
<span class="quotelev1">&gt; What if I want to run orted things manually, not by mpirun automatically,
</span><br>
<span class="quotelev1">&gt; I mean, does mpirun has any option to produce commands for orted?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for MPICH2 implementation, there is &quot;-launcher manual&quot; option to make
</span><br>
<span class="quotelev1">&gt; this works,
</span><br>
<span class="quotelev1">&gt; for example:
</span><br>
<span class="quotelev1">&gt; # mpiexec.hydra -launcher manual -np 4 htop
</span><br>
<span class="quotelev1">&gt; HYDRA_LAUNCH: /usr/local/bin/hydra_pmi_proxy --control-port
</span><br>
<span class="quotelev1">&gt; grantleyIPDC04:34652 --rmk user --launcher manual --demux poll --pgid 0
</span><br>
<span class="quotelev1">&gt; --retries 10 --usize -2 --proxy-id 0
</span><br>
<span class="quotelev1">&gt; HYDRA_LAUNCH_END
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I can manually run hydra_pmi_proxy with commands, and mpiexec.hydra
</span><br>
<span class="quotelev1">&gt; will proceed on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29346.php">http://www.open-mpi.org/community/lists/users/2016/06/29346.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29347/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29348.php">Edgar Gabriel: "Re: [OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Previous message:</strong> <a href="29346.php">Du, Fan: "[OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>In reply to:</strong> <a href="29346.php">Du, Fan: "[OMPI users] Does Open MPI support manual launcher?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29364.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Reply:</strong> <a href="29364.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
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
