<?
$subject_val = "[OMPI users] stuck after IMB calling MPI_Finalize in Open MPI trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 22 11:21:21 2011" -->
<!-- isoreceived="20110722152121" -->
<!-- sent="Fri, 22 Jul 2011 11:21:17 -0400" -->
<!-- isosent="20110722152117" -->
<!-- name="tma_at_[hidden]" -->
<!-- email="tma_at_[hidden]" -->
<!-- subject="[OMPI users] stuck after IMB calling MPI_Finalize in Open MPI trunk" -->
<!-- id="4ac77b89942de980d233a241ec13dfda.squirrel_at_webmail.eecs.utk.edu" -->
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
<strong>Subject:</strong> [OMPI users] stuck after IMB calling MPI_Finalize in Open MPI trunk<br>
<strong>From:</strong> <a href="mailto:tma_at_[hidden]?Subject=Re:%20[OMPI%20users]%20stuck%20after%20IMB%20calling%20MPI_Finalize%20in%20Open%20MPI%20trunk"><em>tma_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-07-22 11:21:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16969.php">Paul Kapinos: "[OMPI users] Usage of PGI compilers (Libtool or OpenMPI issue?)"</a>
<li><strong>Previous message:</strong> <a href="16967.php">Paul Kapinos: "[OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I tried to run IMB's Bcast test with 144 processes on 6
<br>
nodes(24cores/node) with Open MPI trunk like:
<br>
mpirun --hostfile ~/host --bynode -np 144  ./IMB-MPI1 Bcast -npmin 144
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Most time, it's stuck there after IMB's calling MPI_finalize.  When I
<br>
quit by ctrl+c, it throws the complain like:
<br>
[frennes.rennes.grid5000.fr:32047] [[38098,0],0,0]:route_callback trying
<br>
to get message from [[38098,0],0,0] to [[38098,0],4,0]:1, routing loop
<br>
[0]
<br>
func:/home/tma/opt/ompitrunk/lib/libopen-rte.so.0(opal_backtrace_print+0x1f)
<br>
[0x7fb46a06d06f]
<br>
[1] func:/home/tma/opt/ompitrunk/lib/openmpi/mca_rml_oob.so [0x7fb467d69e41]
<br>
[2] func:/home/tma/opt/ompitrunk/lib/openmpi/mca_oob_tcp.so [0x7fb467b606de]
<br>
[3] func:/home/tma/opt/ompitrunk/lib/openmpi/mca_oob_tcp.so [0x7fb467b641a7]
<br>
[4] func:/home/tma/opt/ompitrunk/lib/openmpi/mca_rml_oob.so [0x7fb467d6c23a]
<br>
[5]
<br>
func:/home/tma/opt/ompitrunk/lib/libopen-rte.so.0(orte_plm_base_orted_exit+0x182)
<br>
[0x7fb46a02a472]
<br>
[6] func:/home/tma/opt/ompitrunk/lib/openmpi/mca_plm_rsh.so [0x7fb467f7124b]
<br>
[7] func:/home/tma/opt/ompitrunk/lib/openmpi/mca_errmgr_hnp.so
<br>
[0x7fb46693abf7]
<br>
[8] func:/home/tma/opt/ompitrunk/lib/openmpi/mca_errmgr_hnp.so
<br>
[0x7fb46693c531]
<br>
[9] func:/home/tma/opt/ompitrunk/lib/libopen-rte.so.0 [0x7fb46a026b3f]
<br>
[10]
<br>
func:/home/tma/opt/ompitrunk/lib/libopen-rte.so.0(opal_libevent207_event_base_loop+0x3f5)
<br>
[0x7fb46a07b7f5]
<br>
[11] func:/home/tma/opt/mpi/bin/mpirun [0x403b45]
<br>
[12] func:/home/tma/opt/mpi/bin/mpirun [0x402fd7]
<br>
[13] func:/lib/libc.so.6(__libc_start_main+0xe6) [0x7fb468fc81a6]
<br>
[14] func:/home/tma/opt/mpi/bin/mpirun [0x402ef9]
<br>
<p><p><p>Thanks for help
<br>
Teng Ma
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16969.php">Paul Kapinos: "[OMPI users] Usage of PGI compilers (Libtool or OpenMPI issue?)"</a>
<li><strong>Previous message:</strong> <a href="16967.php">Paul Kapinos: "[OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
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
