<?
$subject_val = "[OMPI users] Problem with MPI_topo_test error message";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  6 11:54:10 2014" -->
<!-- isoreceived="20141006155410" -->
<!-- sent="Mon, 06 Oct 2014 17:54:08 +0200" -->
<!-- isosent="20141006155408" -->
<!-- name="Alain Miniussi" -->
<!-- email="alain.miniussi_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with MPI_topo_test error message" -->
<!-- id="5432BB20.4040405_at_oca.eu" -->
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
<strong>Subject:</strong> [OMPI users] Problem with MPI_topo_test error message<br>
<strong>From:</strong> Alain Miniussi (<em>alain.miniussi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-06 11:54:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25467.php">Timothy Brown: "[OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Previous message:</strong> <a href="25465.php">Obed Mu&#195;&#177;oz: "[OMPI users] [Question] Hybrid implementation with OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>At line 50 of ompi/mpi/c/topo_test.c, we have:
<br>
<p>&nbsp;&nbsp;if (ompi_comm_invalid (comm)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_COMM,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FUNC_NAME);
<br>
<p>meaning that such an error will always mention MPI_COMM_WORLD in its 
<br>
error message.
<br>
I can be unfortunate if the function was called with MPI_COMM_NULL, 
<br>
specially considering that one possible error is when test the topology 
<br>
of a communicator created through MPI_Cart_create or MPI_Graph_create 
<br>
since these function returns MPI_COMM_NULL  for processes that do not 
<br>
fit in the topology.
<br>
On example is if you create a 2X2 grid from a comm_world of size 5: one 
<br>
of them will be assigned to comm_null.
<br>
<p>Would there be a point in improving the message ? if yes I can provide a 
<br>
patch if you think it's less trouble to check it than to do the fix.
<br>
<p>Thanks
<br>
<p>Alain
<br>
<p>alainm_at_dhcp1-24:~/codes/mpi$ /opt/openmpi-1.8.2/bin/mpiexec -n 5 ./a.out
<br>
--------------------------------------------------------------------------
<br>
...blah....
<br>
--------------------------------------------------------------------------
<br>
This is rank 1 (cart: 1), topology is Cart
<br>
This is rank 2 (cart: 2), topology is Cart
<br>
This is rank 3 (cart: 3), topology is Cart
<br>
This is rank 4, MPI_Cart_create assigned me to null comm!!!
<br>
This is rank 0 (cart: 0), topology is Cart
<br>
[dhcp1-24:5461] *** An error occurred in MPI_Topo_test
<br>
[dhcp1-24:5461] *** reported by process [140103509016577,140101833195524]
<br>
[dhcp1-24:5461] *** on communicator MPI_COMM_WORLD   &lt;&lt;&lt;== MPI_COMM_NULL 
<br>
actually.
<br>
[dhcp1-24:5461] *** MPI_ERR_COMM: invalid communicator
<br>
[dhcp1-24:5461] *** MPI_ERRORS_ARE_FATAL (processes in this communicator 
<br>
will now abort,
<br>
[dhcp1-24:5461] ***    and potentially your MPI job)
<br>
alainm_at_dhcp1-24:~/codes/mpi$
<br>
<p><pre>
-- 
---
Alain
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25467.php">Timothy Brown: "[OMPI users] Update/patch to check/opal_check_pmi.m4"</a>
<li><strong>Previous message:</strong> <a href="25465.php">Obed Mu&#195;&#177;oz: "[OMPI users] [Question] Hybrid implementation with OpenMPI and OpenMP"</a>
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
