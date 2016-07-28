<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 28 08:00:28 2007" -->
<!-- isoreceived="20070528120028" -->
<!-- sent="Mon, 28 May 2007 15:00:32 +0300" -->
<!-- isosent="20070528120032" -->
<!-- name="Tahir Malas" -->
<!-- email="tmalas_at_[hidden]" -->
<!-- subject="[OMPI users] Sharing an array in an MPI program?" -->
<!-- id="009301c7a11f$cad60430$d80cb38b_at_bs" -->
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
<strong>From:</strong> Tahir Malas (<em>tmalas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-28 08:00:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3333.php">Brian Barrett: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<li><strong>Previous message:</strong> <a href="3331.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3334.php">Richard Graham: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>Reply:</strong> <a href="3334.php">Richard Graham: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
We have an 8-node cluster of SMP nodes, which have dual-quad core
<br>
processors. The network is Infiniband. Each process in our parallel FORTRAN
<br>
90 program holds an identical array that is used in all parts of the
<br>
program. However, when the size of the problem gets larger and larger, this
<br>
memory cost has started to become a memory bottleneck for us.
<br>
If all 8 processes in the same node could just read from the same memory
<br>
instead of holding their arrays, we would have significant memory gain. This
<br>
would be natural in a node if were to use OpenMP, but I wonder whether this
<br>
is somehow possible with only MPI? We know that passing to hybrid
<br>
programming (MPI + OpenMP) is a choice, but we look for simpler choices for
<br>
the time being.
<br>
In another post I have seen something like &quot;you could share the memory
<br>
between processes using the shm_xxx system calls of unix&quot;, but this isn't
<br>
clear to me. 
<br>
Thanks in advance,
<br>
<p>Tahir Malas
<br>
Bilkent University 
<br>
Electrical and Electronics Engineering Department
<br>
Phone: +90 312 290 1385 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3333.php">Brian Barrett: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<li><strong>Previous message:</strong> <a href="3331.php">smairal_at_[hidden]: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3334.php">Richard Graham: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>Reply:</strong> <a href="3334.php">Richard Graham: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
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
