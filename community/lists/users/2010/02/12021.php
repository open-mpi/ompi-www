<?
$subject_val = "[OMPI users] Infiniband Question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 14:32:59 2010" -->
<!-- isoreceived="20100205193259" -->
<!-- sent="Fri, 5 Feb 2010 13:32:54 -0600" -->
<!-- isosent="20100205193254" -->
<!-- name="Mike Hanby" -->
<!-- email="mhanby_at_[hidden]" -->
<!-- subject="[OMPI users] Infiniband Question" -->
<!-- id="A72C1C64C331B445A593C79DA1BE580C239ECF67BD_at_UABEXMBS3.ad.uab.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Infiniband Question<br>
<strong>From:</strong> Mike Hanby (<em>mhanby_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-05 14:32:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12022.php">Jeff Squyres: "Re: [OMPI users] Infiniband Question"</a>
<li><strong>Previous message:</strong> <a href="12020.php">Terry Dontje: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12022.php">Jeff Squyres: "Re: [OMPI users] Infiniband Question"</a>
<li><strong>Reply:</strong> <a href="12022.php">Jeff Squyres: "Re: [OMPI users] Infiniband Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howdy,
<br>
<p>When running a Gromacs job using OpenMPI 1.4.1 on Infiniband enabled nodes, I'm seeing the following process listing:
<br>
<p>\_ -bash /opt/gridengine/default/spool/compute-0-3/job_scripts/97037
<br>
&nbsp;&nbsp;&nbsp;&nbsp;\_ mpirun -np 4 mdrun_mpi -v -np 4 -s production-Npt-323K_4CPU -o production-Npt-323K_4CPU -c production-Npt-323K_4CPU -x production-Npt-323K_4CPU -g production-Npt-323K_4CPU.log
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\_ /opt/gridengine/bin/lx26-amd64/qrsh -inherit -nostdin -V compute-0-4.local  orted -mca ess env -mca orte_ess_jobid 945881088
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca orte_ess_vpid 1 -mca orte_ess_num_procs 4 --hnp-uri &quot;945881088.0;tcp://192.168.20.252:39440;tcp://192.168.21.252:39440&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\_ /opt/gridengine/bin/lx26-amd64/qrsh -inherit -nostdin -V compute-0-2.local  orted -mca ess env -mca orte_ess_jobid 945881088
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca orte_ess_vpid 2 -mca orte_ess_num_procs 4 --hnp-uri &quot;945881088.0;tcp://192.168.20.252:39440;tcp://192.168.21.252:39440&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\_ /opt/gridengine/bin/lx26-amd64/qrsh -inherit -nostdin -V compute-0-1.local  orted -mca ess env -mca orte_ess_jobid 945881088
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca orte_ess_vpid 3 -mca orte_ess_num_procs 4 --hnp-uri &quot;945881088.0;tcp://192.168.20.252:39440;tcp://192.168.21.252:39440&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\_ mdrun_mpi -v -np 4 -s production-Npt-323K_4CPU -o production-Npt-323K_4CPU -c production-Npt-323K_4CPU
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-x production-Npt-323K_4CPU -g production-Npt-323K_4CPU.log
<br>
<p>Is it normal for these tcp addresses to be listed if the job is using Infiniband?
<br>
<p>The 192.168.20.x subnet is the eth0 GigE network
<br>
And the 192.168.21.x subnet is the ib0 IPoverIB network
<br>
<p>Or is this job actually using TCPIP over Infiniband / GigE?
<br>
<p>I'm running mpirun without any special fabric includes / excludes.
<br>
<p>ompi_info lists openib as a valid fabric:
<br>
$ ompi_info |grep openib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: openib (MCA v2.0, API v2.0, Component v1.4.1)
<br>
<p>Thanks for any insight,
<br>
<p>Mike
<br>
=================================
<br>
Mike Hanby
<br>
mhanby_at_[hidden]
<br>
Information Systems Specialist II
<br>
IT HPCS / Research Computing
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12022.php">Jeff Squyres: "Re: [OMPI users] Infiniband Question"</a>
<li><strong>Previous message:</strong> <a href="12020.php">Terry Dontje: "Re: [OMPI users] Anybody built a working 1.4.1 on Solaris 8 (Sparc)?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12022.php">Jeff Squyres: "Re: [OMPI users] Infiniband Question"</a>
<li><strong>Reply:</strong> <a href="12022.php">Jeff Squyres: "Re: [OMPI users] Infiniband Question"</a>
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
