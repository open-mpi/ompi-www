<?
$subject_val = "Re: [OMPI users] OMPI CUDA IPC synchronisation/fail-silent problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 09:14:19 2014" -->
<!-- isoreceived="20140826131419" -->
<!-- sent="Tue, 26 Aug 2014 06:14:16 -0700" -->
<!-- isosent="20140826131416" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI CUDA IPC synchronisation/fail-silent problem" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36047B94D7E_at_HQMAIL02.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="53FC2D40.1010602_at_stud.hs-regensburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI CUDA IPC synchronisation/fail-silent problem<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 09:14:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25149.php">Timur Ismagilov: "Re: [OMPI users] long initialization"</a>
<li><strong>Previous message:</strong> <a href="25147.php">Syed Ahsan Ali: "[OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<li><strong>In reply to:</strong> <a href="25146.php">Christoph Winter: "[OMPI users] OMPI CUDA IPC synchronisation/fail-silent problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Christoph:
<br>
I will try and reproduce this issue and will let you know what I find.  There may be an issue with CUDA IPC support with certain traffic patterns.
<br>
Rolf
<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Christoph Winter
<br>
Sent: Tuesday, August 26, 2014 2:46 AM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] OMPI CUDA IPC synchronisation/fail-silent problem
<br>

<br>
Hey all,
<br>

<br>
to test the performance of my application I duplicated the call to the function that will issue the computation on two GPUs 5 times. During the 4th and 5th run of the algorithm, however, the algorithm yields different results (9 instead of 20):
<br>

<br>
# datatype: double
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
# time elapsed [s]; iterations executed; convergent since; clusters identified
<br>
121.* 1000 807 20
<br>
121.* 1000 807 20
<br>
121.* 1000 807 20
<br>
121.* 1000 820 9
<br>
121.* 1000 820 9
<br>

<br>
For communication I use Open MPI 1.8 and/or Open MPI 1.8.1, both compiled with cuda-awareness. The CUDA Toolkit version is 6.0.
<br>
Both GPUs are under the control of one single CPU, so that CUDA IPC can be used (because no QPI link has to be traversed).
<br>
Running the application with &quot;mpirun -np 2 --mca btl_smcuda_cuda_ipc_verbose 100&quot;, shows that IPC is used.
<br>

<br>
I tracked my problem down to an MPI_Allgather, which seems not to work since the first GPU  identifies 9 clusters, the second GPU identifies 11 clusters (makes 20 clusters total). Debugging the application shows, that all clusters are identified correctly, however, the exchange of the identified clusters seems not to work: Each MPI process stores its identified clusters in an buffer, that both processes exchange using MPI_Allgather:
<br>

<br>
value_type* d_dec = thrust::raw_pointer_cast(&amp;dec[0]);
<br>
MPI_Allgather(    MPI_IN_PLACE, 0, MPI_DATATYPE_NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d_dec, columns, MPI_DOUBLE, communicator);
<br>

<br>
I later discovered, that if I introduce a temporary host buffer, that will receive the results of both GPUs, all results are computed correctly:
<br>

<br>
value_type* d_dec = thrust::raw_pointer_cast(&amp;dec[0]);
<br>
thrust::host_vector&lt;value_type&gt; h_dec(dec.size());
<br>
MPI_Allgather( d_dec+columns*comm.rank(), columns, MPI_DOUBLE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h_dec, columns, MPI_DOUBLE, communicator);
<br>
dec = h_dec; //copy results back from host to device
<br>

<br>
This lead me to the conclusion, that something with OMPIs CUDA IPC seems to cause the problems (synchronisation and/or fail-silent error) and indeed, disabling CUDA IPC :
<br>

<br>
mpirun --mca btl_smcuda_use_cuda_ipc 0 --mca btl_smcuda_use_cuda_ipc_same_gpu 0 -np 2 ./double_test ../data/similarities20000.double.-300 ex.20000.double.2.gpus 1000 1000 0.9
<br>

<br>
will calculate correct results:
<br>

<br>
# datatype: double
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
# time elapsed [s]; iterations executed; convergent since; clusters identified
<br>
121.* 1000 807 20
<br>
121.* 1000 807 20
<br>
121.* 1000 807 20
<br>
121.* 1000 807 20
<br>
121.* 1000 807 20
<br>

<br>
Surprisingly, the wrong results _always_ occur during the 4th and 5th run. Is there a way to force synchronisation (I tried MPI_Barrier() without success), has anybody discovered similar problems?
<br>

<br>
I posted some of the code to pastebin: <a href="http://pastebin.com/wCmc36k5">http://pastebin.com/wCmc36k5</a>
<br>

<br>
Thanks in advance,
<br>
Christoph
<br>

<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25148/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25149.php">Timur Ismagilov: "Re: [OMPI users] long initialization"</a>
<li><strong>Previous message:</strong> <a href="25147.php">Syed Ahsan Ali: "[OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<li><strong>In reply to:</strong> <a href="25146.php">Christoph Winter: "[OMPI users] OMPI CUDA IPC synchronisation/fail-silent problem"</a>
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
