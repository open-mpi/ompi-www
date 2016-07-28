<?
$subject_val = "[OMPI users] Clarification about dual-rail capabilities (sharing)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 21 15:09:06 2013" -->
<!-- isoreceived="20131221200906" -->
<!-- sent="Sat, 21 Dec 2013 21:09:01 +0100" -->
<!-- isosent="20131221200901" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="[OMPI users] Clarification about dual-rail capabilities (sharing)" -->
<!-- id="86C98B11-023E-4B66-8514-BE2513613629_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Clarification about dual-rail capabilities (sharing)<br>
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-21 15:09:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23279.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to numa&quot;	of	openmpi-1.7.4rc1	dosen't	work	for our magny cours based 32	core node"</a>
<li><strong>Previous message:</strong> <a href="23277.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of	openmpi-1.7.4rc1	dosen't	work	for our magny cours based 32 core node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI users,
<br>
<p>in my institution a cluster with dual-rail IB has recently deployed. Each compute node has two physical single-port Mellanox Connect-IB MT27600 card (mlx5_0, mlx5_1). By running bandwidth tests (OSU 4.2 benchmark) using MVAPICH2, I can achieve from one node to another (1 MPI process per node) up to 12 GB/s using the rail in sharing by brokering small messages across both HCA devices. This is good.
<br>
<p>The I switched to Open MPI (1.7.3 and 1.7.4rc1). I tried to use both HCAs together but it seems to me that only one is used (because there is only one process per node?). In Open MPI it seems more complicated to set up such a test. This is what I did... 
<br>
<p>mpirun --mca coll_fca_enable 0 --mca btl_openib_verbose 1 -host HOST1,HOST2 --mca btl_openib_if_include mlx5_0,mlx5_1  -np 1 ./osu-bin/libexec/osu-micro-benchmarks/mpi/pt2pt/osu_bw : -np 1 --mca coll_fca_enable 0 --mca btl_openib_verbose 1 --mca btl_openib_if_include mlx5_0,mlx5_1 ./osu-bin/libexec/osu-micro-benchmarks/mpi/pt2pt/osu_bw
<br>
<p>Max measured bandwidth is around 6.5 GB/s, basically the same if I use a single HCA.
<br>
<p>What I do wrong? Is this the correct way to exploit a multi-rail system? 
<br>
<p>Many thanks in advance,
<br>
Regards
<br>
<p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
&#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23278/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23279.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to numa&quot;	of	openmpi-1.7.4rc1	dosen't	work	for our magny cours based 32	core node"</a>
<li><strong>Previous message:</strong> <a href="23277.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of	openmpi-1.7.4rc1	dosen't	work	for our magny cours based 32 core node"</a>
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
