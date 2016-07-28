<?
$subject_val = "Re: [OMPI users] Infiniband Question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 17:40:08 2010" -->
<!-- isoreceived="20100205224008" -->
<!-- sent="Fri, 5 Feb 2010 17:40:00 -0500" -->
<!-- isosent="20100205224000" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband Question" -->
<!-- id="75BBB0EA-394D-42DA-A690-8252BBCB4C04_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A72C1C64C331B445A593C79DA1BE580C239ECF67BD_at_UABEXMBS3.ad.uab.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infiniband Question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-05 17:40:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12023.php">Jeff Squyres: "Re: [OMPI users] hostfiles"</a>
<li><strong>Previous message:</strong> <a href="12021.php">Mike Hanby: "[OMPI users] Infiniband Question"</a>
<li><strong>In reply to:</strong> <a href="12021.php">Mike Hanby: "[OMPI users] Infiniband Question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep -- it's normal.
<br>
<p>Those IP addresses are used for bootstrapping/startup, not for MPI traffic.  In particular, that &quot;HNP URI&quot; stuff is used by Open MPI's underlying run-time environment.  It's not used by the MPI layer at all.
<br>
<p><p>On Feb 5, 2010, at 2:32 PM, Mike Hanby wrote:
<br>
<p><span class="quotelev1">&gt; Howdy,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When running a Gromacs job using OpenMPI 1.4.1 on Infiniband enabled nodes, I'm seeing the following process listing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; \_ -bash /opt/gridengine/default/spool/compute-0-3/job_scripts/97037
</span><br>
<span class="quotelev1">&gt;     \_ mpirun -np 4 mdrun_mpi -v -np 4 -s production-Npt-323K_4CPU -o production-Npt-323K_4CPU -c production-Npt-323K_4CPU -x production-Npt-323K_4CPU -g production-Npt-323K_4CPU.log
</span><br>
<span class="quotelev1">&gt;         \_ /opt/gridengine/bin/lx26-amd64/qrsh -inherit -nostdin -V compute-0-4.local  orted -mca ess env -mca orte_ess_jobid 945881088
</span><br>
<span class="quotelev1">&gt;             -mca orte_ess_vpid 1 -mca orte_ess_num_procs 4 --hnp-uri &quot;945881088.0;tcp://192.168.20.252:39440;tcp://192.168.21.252:39440&quot;
</span><br>
<span class="quotelev1">&gt;         \_ /opt/gridengine/bin/lx26-amd64/qrsh -inherit -nostdin -V compute-0-2.local  orted -mca ess env -mca orte_ess_jobid 945881088
</span><br>
<span class="quotelev1">&gt;             -mca orte_ess_vpid 2 -mca orte_ess_num_procs 4 --hnp-uri &quot;945881088.0;tcp://192.168.20.252:39440;tcp://192.168.21.252:39440&quot;
</span><br>
<span class="quotelev1">&gt;         \_ /opt/gridengine/bin/lx26-amd64/qrsh -inherit -nostdin -V compute-0-1.local  orted -mca ess env -mca orte_ess_jobid 945881088
</span><br>
<span class="quotelev1">&gt;             -mca orte_ess_vpid 3 -mca orte_ess_num_procs 4 --hnp-uri &quot;945881088.0;tcp://192.168.20.252:39440;tcp://192.168.21.252:39440&quot;
</span><br>
<span class="quotelev1">&gt;         \_ mdrun_mpi -v -np 4 -s production-Npt-323K_4CPU -o production-Npt-323K_4CPU -c production-Npt-323K_4CPU
</span><br>
<span class="quotelev1">&gt;             -x production-Npt-323K_4CPU -g production-Npt-323K_4CPU.log
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it normal for these tcp addresses to be listed if the job is using Infiniband?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The 192.168.20.x subnet is the eth0 GigE network
</span><br>
<span class="quotelev1">&gt; And the 192.168.21.x subnet is the ib0 IPoverIB network
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or is this job actually using TCPIP over Infiniband / GigE?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running mpirun without any special fabric includes / excludes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info lists openib as a valid fabric:
</span><br>
<span class="quotelev1">&gt; $ ompi_info |grep openib
</span><br>
<span class="quotelev1">&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.4.1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any insight,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt; =================================
</span><br>
<span class="quotelev1">&gt; Mike Hanby
</span><br>
<span class="quotelev1">&gt; mhanby_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Information Systems Specialist II
</span><br>
<span class="quotelev1">&gt; IT HPCS / Research Computing
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12023.php">Jeff Squyres: "Re: [OMPI users] hostfiles"</a>
<li><strong>Previous message:</strong> <a href="12021.php">Mike Hanby: "[OMPI users] Infiniband Question"</a>
<li><strong>In reply to:</strong> <a href="12021.php">Mike Hanby: "[OMPI users] Infiniband Question"</a>
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
