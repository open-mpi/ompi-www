<?
$subject_val = "[OMPI devel] Possible bug: rdma OSC does not progress RMA operations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 12 13:01:57 2013" -->
<!-- isoreceived="20130912170157" -->
<!-- sent="Thu, 12 Sep 2013 17:01:53 +0000" -->
<!-- isosent="20130912170153" -->
<!-- name="Iliev, Hristo" -->
<!-- email="Iliev_at_[hidden]" -->
<!-- subject="[OMPI devel] Possible bug: rdma OSC does not progress RMA operations" -->
<!-- id="5A5117ABD18DE547BB3D3FE3D0CB31883E8AD5_at_MBX4.rwth-ad.de" -->
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
<strong>Subject:</strong> [OMPI devel] Possible bug: rdma OSC does not progress RMA operations<br>
<strong>From:</strong> Iliev, Hristo (<em>Iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-12 13:01:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12886.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="12884.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>It looks like the rmda OSC component does not progress passive RMA
<br>
operations at the target during calls to MPI_WIN_(UN)LOCK. As a sample case
<br>
take a master-worker program where each worker writes to an entry in an
<br>
array exposed in the master's window:
<br>
<p>&nbsp;
<br>
<p>MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;
<br>
<p>If (rank == 0)
<br>
<p>{
<br>
<p>&nbsp;&nbsp;&nbsp;// Master code
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Alloc_mem(size * sizeof(int), MPI_INFO_NULL, &amp;array);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Win_create(array, size * sizeof(int), sizeof(int), MPI_INFO_NULL,
<br>
MPI_COMM_WORLD, &amp;win);
<br>
<p>&nbsp;&nbsp;&nbsp;do
<br>
<p>&nbsp;&nbsp;&nbsp;{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_lock(MPI_LOCK_EXCLUSIVE, 0, 0, win);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nonzeros = count non-zero elements of array
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_unlock(0, win);
<br>
<p>&nbsp;&nbsp;&nbsp;} while(nonzeros &lt; size-1);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Win_free(&amp;win);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Free_mem(array);
<br>
<p>}
<br>
<p>else
<br>
<p>{
<br>
<p>&nbsp;&nbsp;&nbsp;// Worker code
<br>
<p>&nbsp;&nbsp;&nbsp;int one = 1;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Win_create(NULL, 0, 1, MPI_INFO_NULL, MPI_COMM_WORLD, &amp;win);
<br>
<p>&nbsp;&nbsp;&nbsp;// Postpone the RMA with a rank-specific time
<br>
<p>&nbsp;&nbsp;&nbsp;sleep(rank);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Win_lock(MPI_LOCK_EXCLUSIVE, 0, 0, win);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Put(&amp;one, 1, MPI_INT, 0, rank, 1, MPI_INT, win);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Win_unlock(0, win);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Win_free(&amp;win);
<br>
<p>}
<br>
<p>&nbsp;
<br>
<p>Attached is a complete sample program. The program hangs when run with the
<br>
default MCA settings:
<br>
<p>&nbsp;
<br>
<p>$ mpirun -n 3 ./rma.x
<br>
<p>[1379003818.571960] 0 workers checked in
<br>
<p>[1379003819.571317] Worker 1 acquired lock
<br>
<p>[1379003819.571374] Worker 1 unlocking the window
<br>
<p>[1379003820.571342] Worker 2 acquired lock
<br>
<p>[1379003820.571384] Worker 2 unlocking the window
<br>
<p>&lt;hangs&gt;
<br>
<p>On the other hand, it works as expected if pt2pt is forced:
<br>
<p>&nbsp;
<br>
<p>$ mpirun --mca osc pt2pt -n 3 ./rma.x | sort
<br>
<p>[1379003926.000442] 0 workers checked in
<br>
<p>[1379003926.998981] Worker 1 acquired lock
<br>
<p>[1379003926.999027] Worker 1 unlocking the window
<br>
<p>[1379003926.999076] Worker 1 synched
<br>
<p>[1379003926.999078] 1 workers checked in
<br>
<p>[1379003927.998917] Worker 2 acquired lock
<br>
<p>[1379003927.998940] Worker 2 unlocking the window
<br>
<p>[1379003927.998962] Worker 2 synched
<br>
<p>[1379003927.998964] 2 workers checked in
<br>
<p>[1379003927.998973] All workers checked in
<br>
<p>[1379003927.998996] Worker 1 done
<br>
<p>[1379003927.998996] Worker 2 done
<br>
<p>[1379003927.999099] Master finished
<br>
<p>&nbsp;
<br>
<p>All processes are started on the same host. Open MPI is 1.6.4 without
<br>
progression thread. The output from ompi_info is attached. The same
<br>
behaviour (hang with rdma, success with pt2pt) is observed when the tcp BTL
<br>
is used and when all processes run on separate cluster nodes and talk via
<br>
the openib BTL.
<br>
<p>&nbsp;
<br>
<p>Is this a bug in the rdma OSC component or does the sample program violate
<br>
the MPI correctness requirements for RMA operations?
<br>
<p>&nbsp;
<br>
<p>Kind regards,
<br>
<p>Hristo
<br>
<p>&nbsp;
<br>
<p><pre>
--
Hristo Iliev, PhD - High Performance Computing Team
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23, D 52074 Aachen (Germany)
</pre>
<p>
<p>

<br><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12885/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12885/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12885/rma.c">rma.c</a>
</ul>
<!-- attachment="rma.c" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12885/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12886.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="12884.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
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
