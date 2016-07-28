<?
$subject_val = "[OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 28 11:38:26 2012" -->
<!-- isoreceived="20120928153826" -->
<!-- sent="Fri, 28 Sep 2012 16:38:19 +0100 (BST)" -->
<!-- isosent="20120928153819" -->
<!-- name="Mark Dixon" -->
<!-- email="m.c.dixon_at_[hidden]" -->
<!-- subject="[OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages" -->
<!-- id="alpine.SOC.2.00.1209281629180.10128_at_sunserv3" -->
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
<strong>Subject:</strong> [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages<br>
<strong>From:</strong> Mark Dixon (<em>m.c.dixon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-28 11:38:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20358.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>Previous message:</strong> <a href="20356.php">S&#233;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20412.php">Dave Love: "Re: [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20412.php">Dave Love: "Re: [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We've been putting a new Mellanox QDR Intel Sandy Bridge cluster, based on 
<br>
CentOS 6.3, through its paces and we're getting repeated kernel messages 
<br>
we never used to get on CentOS 5. An example on one node:
<br>
<p>Sep 28 09:58:20 g8s1n2 kernel: mlx4_core 0000:01:00.0: mlx4_eq_int: MLX4_EVENT_TYPE_SRQ_LIMIT
<br>
Sep 28 09:58:27 g8s1n2 kernel: mlx4_core 0000:01:00.0: mlx4_eq_int: MLX4_EVENT_TYPE_SRQ_LIMIT
<br>
Sep 28 09:58:27 g8s1n2 kernel: mlx4_core 0000:01:00.0: mlx4_eq_int: MLX4_EVENT_TYPE_SRQ_LIMIT
<br>
Sep 28 09:58:29 g8s1n2 kernel: mlx4_core 0000:01:00.0: mlx4_eq_int: MLX4_EVENT_TYPE_SRQ_LIMIT
<br>
Sep 28 09:58:29 g8s1n2 kernel: mlx4_core 0000:01:00.0: mlx4_eq_int: MLX4_EVENT_TYPE_SRQ_LIMIT
<br>
Sep 28 09:58:31 g8s1n2 kernel: mlx4_core 0000:01:00.0: mlx4_eq_int: MLX4_EVENT_TYPE_SRQ_LIMIT
<br>
Sep 28 09:58:31 g8s1n2 kernel: mlx4_core 0000:01:00.0: mlx4_eq_int: MLX4_EVENT_TYPE_SRQ_LIMIT
<br>
Sep 28 09:58:32 g8s1n2 kernel: mlx4_core 0000:01:00.0: mlx4_eq_int: MLX4_EVENT_TYPE_SRQ_LIMIT
<br>
Sep 28 09:58:45 g8s1n2 kernel: mlx4_core 0000:01:00.0: mlx4_eq_int: MLX4_EVENT_TYPE_SRQ_LIMIT
<br>
Sep 28 09:58:45 g8s1n2 kernel: mlx4_core 0000:01:00.0: mlx4_eq_int: MLX4_EVENT_TYPE_SRQ_LIMIT
<br>
Sep 28 10:08:23 g8s1n2 kernel: mlx4_core 0000:01:00.0: mlx4_eq_int: MLX4_EVENT_TYPE_SRQ_LIMIT
<br>
<p>These messages appeared when running IMB compiled with openmpi 1.6.1 
<br>
across 256 cores (16 nodes, 16 cores per node). The job ran from 
<br>
09:56:54 to 10:08:46 and failed with no obvious error messages.
<br>
<p>Now, I'm used to IMB running into trouble at larger core counts, but I'm 
<br>
wondering if anyone has seen these messages before and know if they 
<br>
indicate a problem?
<br>
<p>We're running with an increased log_num_mtt mlx4_core option as 
<br>
recommended by the openmpi FAQ and increased log_num_srq to its maximum 
<br>
value in a failed attempt to get rid of the messages:
<br>
<p>$ cat /etc/modprobe.d/libmlx4_local.conf
<br>
options mlx4_core log_num_mtt=24 log_mtts_per_seg=3 log_num_srq=20
<br>
<p>Any thoughts?
<br>
<p>Thanks,
<br>
<p>Mark
<br>
<pre>
-- 
-----------------------------------------------------------------
Mark Dixon                       Email    : m.c.dixon_at_[hidden]
HPC/Grid Systems Support         Tel (int): 35429
Information Systems Services     Tel (ext): +44(0)113 343 5429
University of Leeds, LS2 9JT, UK
-----------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20358.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>Previous message:</strong> <a href="20356.php">S&#233;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20412.php">Dave Love: "Re: [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20412.php">Dave Love: "Re: [OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
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
