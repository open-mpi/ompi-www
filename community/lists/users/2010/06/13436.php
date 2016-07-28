<?
$subject_val = "[OMPI users] dimension mapping of MPI_Cart_create";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 29 04:51:05 2010" -->
<!-- isoreceived="20100629085105" -->
<!-- sent="Tue, 29 Jun 2010 17:50:50 +0900" -->
<!-- isosent="20100629085050" -->
<!-- name="Paul Hilscher" -->
<!-- email="pphilscher.ml_at_[hidden]" -->
<!-- subject="[OMPI users] dimension mapping of MPI_Cart_create" -->
<!-- id="AANLkTin69R8aQT1v8o7eqxX0ignfrOiil_wfL872iTg5_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] dimension mapping of MPI_Cart_create<br>
<strong>From:</strong> Paul Hilscher (<em>pphilscher.ml_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-29 04:50:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13437.php">Jeff Squyres: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>Previous message:</strong> <a href="13435.php">Changsheng Jiang: "Re: [OMPI users] about MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13440.php">Jeff Squyres: "Re: [OMPI users] dimension mapping of MPI_Cart_create"</a>
<li><strong>Reply:</strong> <a href="13440.php">Jeff Squyres: "Re: [OMPI users] dimension mapping of MPI_Cart_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI list,
<br>
<p>I am using  a MPI-parallelized simulation program,  with a
<br>
domain-decomposition in 6-Dimensions.
<br>
In order to improve the scalability of my program I would like to know
<br>
according to what preferences
<br>
is MPI distributing the ranks when using MPI_Cart_create( reorder allowed).
<br>
<p>To explain my inquiry, imagine a 3-dimensional solver in  X-Y-M and 4
<br>
computing
<br>
nodes, each nodes consist of 4 Quad-Core CPUs (4(Node)x[ 4(CPUs) x
<br>
4(Cores))] CPUs=64CPUs).
<br>
<p>Now I decompose  all 3 dimensions by 4 (4x4x4 = 64) using  MPI_Cart_create.
<br>
MPI has now several  possibilities to map the problem e.g. X-M (locally) on
<br>
a node and
<br>
Y across the nodes, or Y-M (locally) and X across the nodes.
<br>
<p>Now my question is, how can I tell MPI that I want to distribute X-Y locally
<br>
while
<br>
M is distributed across nodes. The reason is that X-Y
<br>
communication ratio is much large (FFT) compared to M where we have only
<br>
2 communications per time-step via an Allreduce.
<br>
An MPI implementation for the BlueGENE for example has an option
<br>
called mapfile where on can tell MPI how to map the dimensions onto
<br>
the Nodes. I did not found somethings similar for openmpi.
<br>
<p>Does anybody know how to achieve this mapping or could anybody
<br>
tell me where I could find some examples or tutorials ?
<br>
<p>Thank you very much for your help and best wishes
<br>
<p>Paul Hilscher
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13436/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13437.php">Jeff Squyres: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>Previous message:</strong> <a href="13435.php">Changsheng Jiang: "Re: [OMPI users] about MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13440.php">Jeff Squyres: "Re: [OMPI users] dimension mapping of MPI_Cart_create"</a>
<li><strong>Reply:</strong> <a href="13440.php">Jeff Squyres: "Re: [OMPI users] dimension mapping of MPI_Cart_create"</a>
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
