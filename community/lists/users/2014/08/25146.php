<?
$subject_val = "[OMPI users] OMPI CUDA IPC synchronisation/fail-silent problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 02:47:20 2014" -->
<!-- isoreceived="20140826064720" -->
<!-- sent="Tue, 26 Aug 2014 08:46:24 +0200" -->
<!-- isosent="20140826064624" -->
<!-- name="Christoph Winter" -->
<!-- email="christoph.winter_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI CUDA IPC synchronisation/fail-silent problem" -->
<!-- id="53FC2D40.1010602_at_stud.hs-regensburg.de" -->
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
<strong>Subject:</strong> [OMPI users] OMPI CUDA IPC synchronisation/fail-silent problem<br>
<strong>From:</strong> Christoph Winter (<em>christoph.winter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 02:46:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25147.php">Syed Ahsan Ali: "[OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<li><strong>Previous message:</strong> <a href="25145.php">Reuti: "Re: [OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25148.php">Rolf vandeVaart: "Re: [OMPI users] OMPI CUDA IPC synchronisation/fail-silent problem"</a>
<li><strong>Reply:</strong> <a href="25148.php">Rolf vandeVaart: "Re: [OMPI users] OMPI CUDA IPC synchronisation/fail-silent problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey all,
<br>
<p>to test the performance of my application I duplicated the call to the
<br>
function that will issue the computation on two GPUs 5 times. During the
<br>
4th and 5th run of the algorithm, however, the algorithm yields
<br>
different results (9 instead of 20):
<br>
<p># datatype: double
<br>
# datapoints: 20000
<br>
# max_iterations: 1000
<br>
# conv_iterations: 1000
<br>
# damping: 0.9
<br>
# communicator.size: 2
<br>
# time elapsed [s]; iterations executed; convergent since; clusters
<br>
identified
<br>
121.* 1000 807 20
<br>
121.* 1000 807 20
<br>
121.* 1000 807 20
<br>
121.* 1000 *820* *9*
<br>
121.* 1000 *820* *9*
<br>
<p>For communication I use Open MPI 1.8 and/or Open MPI 1.8.1, both
<br>
compiled with cuda-awareness. The CUDA Toolkit version is 6.0.
<br>
Both GPUs are under the control of one single CPU, so that CUDA IPC can
<br>
be used (because no QPI link has to be traversed).
<br>
Running the application with &quot;mpirun -np 2 --mca
<br>
btl_smcuda_cuda_ipc_verbose 100&quot;, shows that IPC is used.
<br>
<p>I tracked my problem down to an MPI_Allgather, which seems not to work
<br>
since the first GPU  identifies 9 clusters, the second GPU identifies 11
<br>
clusters (makes 20 clusters total). Debugging the application shows,
<br>
that all clusters are identified correctly, however, the exchange of the
<br>
identified clusters seems not to work: Each MPI process stores its
<br>
identified clusters in an buffer, that both processes exchange using
<br>
MPI_Allgather:
<br>
<p>value_type* d_dec = thrust::raw_pointer_cast(&amp;dec[0]);
<br>
MPI_Allgather(    MPI_IN_PLACE, 0, MPI_DATATYPE_NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d_dec, columns, MPI_DOUBLE, communicator);
<br>
<p>I later discovered, that if I introduce a temporary host buffer, that
<br>
will receive the results of both GPUs, all results are computed correctly:
<br>
<p>value_type* d_dec = thrust::raw_pointer_cast(&amp;dec[0]);
<br>
thrust::host_vector&lt;value_type&gt; h_dec(dec.size());
<br>
MPI_Allgather( d_dec+columns*comm.rank(), columns, MPI_DOUBLE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h_dec, columns, MPI_DOUBLE, communicator);
<br>
dec = h_dec; //copy results back from host to device
<br>
<p>This lead me to the conclusion, that something with OMPIs CUDA IPC seems
<br>
to cause the problems (synchronisation and/or fail-silent error) and
<br>
indeed, disabling CUDA IPC :
<br>
<p>mpirun --mca btl_smcuda_use_cuda_ipc 0 --mca
<br>
btl_smcuda_use_cuda_ipc_same_gpu 0 -np 2 ./double_test
<br>
../data/similarities20000.double.-300 ex.20000.double.2.gpus 1000 1000 0.9
<br>
<p>will calculate correct results:
<br>
<p># datatype: double
<br>
# datapoints: 20000
<br>
# max_iterations: 1000
<br>
# conv_iterations: 1000
<br>
# damping: 0.9
<br>
# communicator.size: 2
<br>
# time elapsed [s]; iterations executed; convergent since; clusters
<br>
identified
<br>
121.* 1000 807 20
<br>
121.* 1000 807 20
<br>
121.* 1000 807 20
<br>
121.* 1000 *807 20*
<br>
121.* 1000 *807 20*
<br>
<p>Surprisingly, the wrong results _always_ occur during the 4th and 5th
<br>
run. Is there a way to force synchronisation (I tried MPI_Barrier()
<br>
without success), has anybody discovered similar problems?
<br>
<p>I posted some of the code to pastebin: <a href="http://pastebin.com/wCmc36k5">http://pastebin.com/wCmc36k5</a>
<br>
<p>Thanks in advance,
<br>
Christoph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25146/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25147.php">Syed Ahsan Ali: "[OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<li><strong>Previous message:</strong> <a href="25145.php">Reuti: "Re: [OMPI users] A daemon on node cl231 failed to start as expected (Pengcheng)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25148.php">Rolf vandeVaart: "Re: [OMPI users] OMPI CUDA IPC synchronisation/fail-silent problem"</a>
<li><strong>Reply:</strong> <a href="25148.php">Rolf vandeVaart: "Re: [OMPI users] OMPI CUDA IPC synchronisation/fail-silent problem"</a>
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
