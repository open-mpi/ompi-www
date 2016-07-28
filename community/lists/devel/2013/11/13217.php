<?
$subject_val = "[OMPI devel] MPIRUN error message after ./configure and sudo make all install...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  7 08:41:08 2013" -->
<!-- isoreceived="20131107134108" -->
<!-- sent="Thu, 7 Nov 2013 13:40:10 +0000" -->
<!-- isosent="20131107134010" -->
<!-- name="Solibakke Per Bjarte" -->
<!-- email="Per.B.Solibakke_at_[hidden]" -->
<!-- subject="[OMPI devel] MPIRUN error message after ./configure and sudo make all install..." -->
<!-- id="812F22F5D75FE946B6D9883F4D3ECEA1040511DE_at_Piggulke.himolde.no" -->
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
<strong>Subject:</strong> [OMPI devel] MPIRUN error message after ./configure and sudo make all install...<br>
<strong>From:</strong> Solibakke Per Bjarte (<em>Per.B.Solibakke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-07 08:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13218.php">Rolf vandeVaart: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..."</a>
<li><strong>Previous message:</strong> <a href="13216.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13218.php">Rolf vandeVaart: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..."</a>
<li><strong>Reply:</strong> <a href="13218.php">Rolf vandeVaart: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
System with:
<br>
Cuda 5.5 and OpenMPI-1.7.3 with system: quadro K5000 and 8 CPUs each with 192 GPUs =1536 cores)
<br>
<p>./configure -with-cuda -with-hwloc -enable-dlopen -enable-mca-dso -enable-shared -enable-vt -with-threads=posix -enable-mpi-thread-multiple -prefix=/usr/local
<br>
<p>Works fine under installation:  ./configure and make, make install
<br>
<p>Error message during mpirun -hostfile.... ./snp_mpi:
<br>
<p>/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
/home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 2 with PID 18385 on
<br>
node PBS-GPU1 exiting improperly. There are three reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
<br>
orte_create_session_dirs is set to false. In this case, the run-time cannot
<br>
detect that the abort call was an abnormal termination. Hence, the only
<br>
error message you will receive is this one.
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
<p>You can avoid this message by specifying -quiet on the mpirun command line.
<br>
<p><p>Some suggestions for configure options or mpirun  options?
<br>
<p>The options: enable-mca-no-build=pml-bfo removes the message. However, I cannot reach any of my GPUs only the CPUs.
<br>
In configure I assume: -enable-mca-dso must be effective.
<br>
<p>Any suggestions for the CUDA (GPU support) for massive parallel running?
<br>
<p>Regards
<br>
PBSolibakke
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13217/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13218.php">Rolf vandeVaart: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..."</a>
<li><strong>Previous message:</strong> <a href="13216.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn-full] svn:open-mpi r29615 - in trunk: . contrib contrib/dist/linux debian debian/source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13218.php">Rolf vandeVaart: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..."</a>
<li><strong>Reply:</strong> <a href="13218.php">Rolf vandeVaart: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..."</a>
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
