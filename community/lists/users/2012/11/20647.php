<?
$subject_val = "[OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 07:13:55 2012" -->
<!-- isoreceived="20121107121355" -->
<!-- sent="Wed, 07 Nov 2012 13:13:45 +0100" -->
<!-- isosent="20121107121345" -->
<!-- name="Markus Wittmann" -->
<!-- email="markus.wittmann_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE" -->
<!-- id="509A5079.6040005_at_fau.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE<br>
<strong>From:</strong> Markus Wittmann (<em>markus.wittmann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 07:13:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20648.php">Iliev, Hristo: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="20646.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20648.php">Iliev, Hristo: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="20648.php">Iliev, Hristo: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I've compiled Open MPI 1.6.3 with --enable-mpi-thread-multiple -with-tm
<br>
-with-openib --enable-opal-multi-threads.
<br>
<p>When I use for example the pingpong benchmark from the Intel MPI
<br>
Benchmarks, which call MPI_Init the btl openib is used and everything
<br>
works fine.
<br>
<p>When instead the benchmark calls MPI_Thread_init with
<br>
MPI_THREAD_MULTIPLE as requested threading level the btl openib fails
<br>
to load but gives no further hints for the reason:
<br>
<p>mpirun -v -n 2 -npernode 1 -gmca btl_base_verbose 200 ./imb-
<br>
tm-openmpi-ts pingpong
<br>
<p>...
<br>
[l0519:08267] select: initializing btl component openib
<br>
[l0519:08267] select: init of component openib returned failure
<br>
[l0519:08267] select: module openib unloaded
<br>
...
<br>
<p>The question is now, is currently just the support for
<br>
MPI_THREADM_MULTIPLE missing in the openib module or are there other
<br>
errors occurring and if so, how to identify them.
<br>
<p>Attached ist the config.log from the Open MPI build, the ompi_info
<br>
output and the output of the IMB pingpong bechmarks.
<br>
<p>As system used were two nodes with:
<br>
<p>&nbsp;&nbsp;- OpenFabrics 1.5.3
<br>
&nbsp;&nbsp;- CentOS release 5.8 (Final)
<br>
&nbsp;&nbsp;- Linux Kernel 2.6.18-308.11.1.el5 x86_64
<br>
&nbsp;&nbsp;- OpenSM 3.3.3
<br>
<p>[l0519] src &gt; ibv_devinfo
<br>
hca_id: mlx4_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport:                      InfiniBand (0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         2.7.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      0030:48ff:fff6:31e4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 0030:48ff:fff6:31e7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 26428
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0xB0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       SM_2122000001000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               278
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
<p>Thanks for the help in advance.
<br>
<p>Regards,
<br>
Markus
<br>
<p><p><pre>
-- 
Markus Wittmann, HPC Services
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg
Regionales Rechenzentrum Erlangen (RRZE)
Martensstrasse 1, 91058 Erlangen, Germany
Tel.: +49 9131 85-20104
markus.wittmann_at_[hidden]
<a href="http://www.rrze.fau.de/hpc/">http://www.rrze.fau.de/hpc/</a>




</pre>
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20647/imb.txt.bz2">imb.txt.bz2</a>
</ul>
<!-- attachment="imb.txt.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20647/imb-tm.txt.bz2">imb-tm.txt.bz2</a>
</ul>
<!-- attachment="imb-tm.txt.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20647/ompi_info.txt.bz2">ompi_info.txt.bz2</a>
</ul>
<!-- attachment="ompi_info.txt.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20647/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20648.php">Iliev, Hristo: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="20646.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.7rc5 fails to build with CUDA support when CUDA is in a non-standard location"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20648.php">Iliev, Hristo: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="20648.php">Iliev, Hristo: "Re: [OMPI users] Problems with btl openib and MPI_THREAD_MULTIPLE"</a>
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
