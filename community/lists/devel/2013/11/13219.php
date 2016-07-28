<?
$subject_val = "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  7 09:59:54 2013" -->
<!-- isoreceived="20131107145954" -->
<!-- sent="Thu, 7 Nov 2013 06:59:45 -0800" -->
<!-- isosent="20131107145945" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..." -->
<!-- id="5BB2B8F5-7E95-40B4-AA2E-E3B6B6C90659_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36008162C4E_at_HQMAIL02.nvidia.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-07 09:59:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13220.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>Previous message:</strong> <a href="13218.php">Rolf vandeVaart: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..."</a>
<li><strong>In reply to:</strong> <a href="13218.php">Rolf vandeVaart: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13221.php">Rolf vandeVaart: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo	make	all install..."</a>
<li><strong>Reply:</strong> <a href="13221.php">Rolf vandeVaart: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo	make	all install..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I can never recall seeing someone use --enable-mca-dso...though I don't know if that is the source of the problem.
<br>
<p>On Nov 7, 2013, at 6:00 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Solibakke:
</span><br>
<span class="quotelev1">&gt; Let me try and reproduce with your configure options.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Rolf 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Solibakke Per Bjarte
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 07, 2013 8:40 AM
</span><br>
<span class="quotelev1">&gt; To: 'devel_at_[hidden]'
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] MPIRUN error message after ./configure and sudo make all install...
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; System with:
</span><br>
<span class="quotelev1">&gt; Cuda 5.5 and OpenMPI-1.7.3 with system: quadro K5000 and 8 CPUs each with 192 GPUs =1536 cores)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ./configure &#150;with-cuda &#150;with-hwloc &#150;enable-dlopen &#150;enable-mca-dso &#150;enable-shared &#150;enable-vt &#150;with-threads=posix &#150;enable-mpi-thread-multiple &#150;prefix=/usr/local
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Works fine under installation:  ./configure and make, make install
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Error message during mpirun &#150;hostfile&#133;. ./snp_mpi:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; /home/solibakk/econometrics/snp_applik/npmarkets/elreprorun/snp_mpi: symbol lookup error: /usr/local/lib/openmpi/mca_pml_ob1.so: undefined symbol: progress_one_cuda_htod_event
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 2 with PID 18385 on
</span><br>
<span class="quotelev1">&gt; node PBS-GPU1 exiting improperly. There are three reasons this could occur:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
</span><br>
<span class="quotelev1">&gt; orte_create_session_dirs is set to false. In this case, the run-time cannot
</span><br>
<span class="quotelev1">&gt; detect that the abort call was an abnormal termination. Hence, the only
</span><br>
<span class="quotelev1">&gt; error message you will receive is this one.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; You can avoid this message by specifying -quiet on the mpirun command line.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Some suggestions for configure options or mpirun  options?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The options: enable-mca-no-build=pml-bfo removes the message. However, I cannot reach any of my GPUs only the CPUs.
</span><br>
<span class="quotelev1">&gt; In configure I assume: &#150;enable-mca-dso must be effective.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any suggestions for the CUDA (GPU support) for massive parallel running?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; PBSolibakke
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13219/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13220.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>Previous message:</strong> <a href="13218.php">Rolf vandeVaart: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..."</a>
<li><strong>In reply to:</strong> <a href="13218.php">Rolf vandeVaart: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo make	all install..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13221.php">Rolf vandeVaart: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo	make	all install..."</a>
<li><strong>Reply:</strong> <a href="13221.php">Rolf vandeVaart: "Re: [OMPI devel] MPIRUN error message after ./configure and sudo	make	all install..."</a>
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
