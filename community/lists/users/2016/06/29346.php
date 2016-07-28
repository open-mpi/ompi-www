<?
$subject_val = "[OMPI users] Does Open MPI support manual launcher?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 04:45:46 2016" -->
<!-- isoreceived="20160602084546" -->
<!-- sent="Thu, 02 Jun 2016 16:45:34 +0800" -->
<!-- isosent="20160602084534" -->
<!-- name="Du, Fan" -->
<!-- email="fan.du_at_[hidden]" -->
<!-- subject="[OMPI users] Does Open MPI support manual launcher?" -->
<!-- id="574FF22E.5080709_at_intel.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Does Open MPI support manual launcher?<br>
<strong>From:</strong> Du, Fan (<em>fan.du_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-02 04:45:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29347.php">Gilles Gouaillardet: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Previous message:</strong> <a href="29345.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3518, Issue 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29347.php">Gilles Gouaillardet: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Reply:</strong> <a href="29347.php">Gilles Gouaillardet: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>Starting from Open MPI, I can launch mpi application a.out as following 
<br>
on host1
<br>
mpirun --allow-run-as-root --host host1,host2 -np 4 /tmp/a.out
<br>
<p>On host2, I saw an proxy, say orted here is spawned:
<br>
orted --hnp-topo-sig 4N:2S:4L3:20L2:20L1:20C:40H:x86_64 -mca ess env 
<br>
-mca orte_ess_jobid 1275133952 -mca orte_ess_vpid 1 -mca 
<br>
orte_ess_num_procs 2 -mca orte_hnp_uri 1275133952.0;tcp://host1_ip:40024 
<br>
--tree-spawn -mca plm rsh --tree-spawn
<br>
<p>It seems mpirun use ssh as launcher on my system.
<br>
What if I want to run orted things manually, not by mpirun automatically,
<br>
I mean, does mpirun has any option to produce commands for orted?
<br>
<p>As for MPICH2 implementation, there is &quot;-launcher manual&quot; option to make 
<br>
this works,
<br>
for example:
<br>
# mpiexec.hydra -launcher manual -np 4 htop
<br>
HYDRA_LAUNCH: /usr/local/bin/hydra_pmi_proxy --control-port 
<br>
grantleyIPDC04:34652 --rmk user --launcher manual --demux poll --pgid 0 
<br>
--retries 10 --usize -2 --proxy-id 0
<br>
HYDRA_LAUNCH_END
<br>
<p>Then I can manually run hydra_pmi_proxy with commands, and mpiexec.hydra 
<br>
will proceed on.
<br>
<p>Thanks!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29347.php">Gilles Gouaillardet: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Previous message:</strong> <a href="29345.php">Jeff Squyres (jsquyres): "Re: [OMPI users] users Digest, Vol 3518, Issue 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29347.php">Gilles Gouaillardet: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Reply:</strong> <a href="29347.php">Gilles Gouaillardet: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
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
