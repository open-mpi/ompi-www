<?
$subject_val = "[OMPI users] openmpi-1.7.3 still not accept cpus-per-proc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 31 03:17:43 2013" -->
<!-- isoreceived="20131031071743" -->
<!-- sent="Thu, 31 Oct 2013 16:17:30 +0900" -->
<!-- isosent="20131031071730" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.7.3 still not accept cpus-per-proc" -->
<!-- id="OF72D5193A.F296041D-ON49257C15.0027ACA4-49257C15.002812E4_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20openmpi-1.7.3%20still%20not%20accept%20cpus-per-proc"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-10-31 03:17:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22884.php">MM: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="22882.php">Jim Parker: "[OMPI users] Fwd: Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22885.php">Nathan Hjelm: "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
<li><strong>Reply:</strong> <a href="22885.php">Nathan Hjelm: "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hollo, I asked Ralph to re-enable cpus-per-proc of openmpi-1.7.x one year
<br>
ago.
<br>
<p>According to Ticket #3350, it shows &quot;(closed defect: fixed)&quot;.
<br>
So I tried latest openmpi-1.7.3, but I find that -cpus-per-proc is still
<br>
not accepted like bellow.
<br>
<p>mpirun -np 4 -x OMP_NUM_THREADS=2 -cpus-per-proc 2 -report-bindings MyProg
<br>
mpirun: Error: unknown option &quot;-p&quot;
<br>
Type 'mpirun --help' for usage.
<br>
<p>Do you really fix it?
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22884.php">MM: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="22882.php">Jim Parker: "[OMPI users] Fwd: Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22885.php">Nathan Hjelm: "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
<li><strong>Reply:</strong> <a href="22885.php">Nathan Hjelm: "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
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
