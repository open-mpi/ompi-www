<?
$subject_val = "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  7 09:00:43 2013" -->
<!-- isoreceived="20131107140043" -->
<!-- sent="Thu, 7 Nov 2013 06:00:41 -0800" -->
<!-- isosent="20131107140041" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..." -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36008162C4E_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="812F22F5D75FE946B6D9883F4D3ECEA1040511DE_at_Piggulke.himolde.no" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install...<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-07 09:00:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13219.php">Ralph Castain: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..."</a>
<li><strong>Previous message:</strong> <a href="13217.php">Solibakke Per Bjarte: "[OMPI devel] MPIRUN error message after ./configure and sudo make all install..."</a>
<li><strong>In reply to:</strong> <a href="13217.php">Solibakke Per Bjarte: "[OMPI devel] MPIRUN error message after ./configure and sudo make all install..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13219.php">Ralph Castain: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..."</a>
<li><strong>Reply:</strong> <a href="13219.php">Ralph Castain: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Solibakke:
<br>
Let me try and reproduce with your configure options.
<br>
<p>Rolf
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Solibakke Per Bjarte
<br>
Sent: Thursday, November 07, 2013 8:40 AM
<br>
To: 'devel_at_[hidden]'
<br>
Subject: [OMPI devel] MPIRUN error message after ./configure and sudo make all install...
<br>
<p>Hello
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
<p>-----------------------------------------------------------------------------------
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13218/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13219.php">Ralph Castain: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..."</a>
<li><strong>Previous message:</strong> <a href="13217.php">Solibakke Per Bjarte: "[OMPI devel] MPIRUN error message after ./configure and sudo make all install..."</a>
<li><strong>In reply to:</strong> <a href="13217.php">Solibakke Per Bjarte: "[OMPI devel] MPIRUN error message after ./configure and sudo make all install..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13219.php">Ralph Castain: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..."</a>
<li><strong>Reply:</strong> <a href="13219.php">Ralph Castain: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..."</a>
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
