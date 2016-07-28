<?
$subject_val = "Re: [OMPI users] mpirun error in OpenMPI 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  8 10:30:51 2010" -->
<!-- isoreceived="20101208153051" -->
<!-- sent="Wed, 8 Dec 2010 08:30:42 -0700" -->
<!-- isosent="20101208153042" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun error in OpenMPI 1.5" -->
<!-- id="9C7EC765-A9FB-45CD-B82A-2D8979ABB38A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTin6c3EUj9pZ5K6KiROBPE+GROYTa4a3hXSjp5X4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun error in OpenMPI 1.5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-08 10:30:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15038.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Previous message:</strong> <a href="15036.php">Hicham Mouline: "[OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>In reply to:</strong> <a href="15035.php">Nguyen Toan: "[OMPI users]  mpirun error in OpenMPI 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15045.php">Nguyen Toan: "Re: [OMPI users] mpirun error in OpenMPI 1.5"</a>
<li><strong>Reply:</strong> <a href="15045.php">Nguyen Toan: "Re: [OMPI users] mpirun error in OpenMPI 1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That could mean you didn't recompile the code using the new version of OMPI. The 1.4 and 1.5 series are not binary compatible - you have to recompile your code.
<br>
<p>If you did recompile, you may be getting version confusion on the backend nodes - you should check your ld_library_path and ensure it is pointing to the 1.5 series install.
<br>
<p>On Dec 8, 2010, at 8:02 AM, Nguyen Toan wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am having a problem while running mpirun in OpenMPI 1.5 version. I compiled OpenMPI 1.5 with BLCR 0.8.2 and OFED 1.4.1 as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure \
</span><br>
<span class="quotelev1">&gt; --with-ft=cr \
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads \
</span><br>
<span class="quotelev1">&gt; --with-blcr=/home/nguyen/opt/blcr \
</span><br>
<span class="quotelev1">&gt; --with-blcr-libdir=/home/nguyen/opt/blcr/lib \
</span><br>
<span class="quotelev1">&gt; --prefix=/home/nguyen/opt/openmpi-1.5 \
</span><br>
<span class="quotelev1">&gt; --with-openib \
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For programs under &quot;openmpi-1.5/examples&quot; folder, mpirun tests were successful. But mpirun aborted immediately when running a program in MPI CUDA code, which was tested successfully with OpenMPI 1.4.3. Below is the error message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone give me an idea about this error?
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Toan
</span><br>
<span class="quotelev1">&gt; ----------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [rc002.local:17727] [[56831,1],1] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file util/nidmap.c at line 371
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   orte_ess_base_build_nidmap failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Data unpack would read past end of buffer (-26) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [rc002.local:17727] [[56831,1],1] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file base/ess_base_nidmap.c at line 62
</span><br>
<span class="quotelev1">&gt; [rc002.local:17727] [[56831,1],1] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ess_env_module.c at line 173
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Data unpack would read past end of buffer (-26) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [rc002.local:17727] [[56831,1],1] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [rc002.local:17727] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 17727 on
</span><br>
<span class="quotelev1">&gt; node rc002 exiting improperly. There are two reasons this could occur:
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
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15038.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Previous message:</strong> <a href="15036.php">Hicham Mouline: "[OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>In reply to:</strong> <a href="15035.php">Nguyen Toan: "[OMPI users]  mpirun error in OpenMPI 1.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15045.php">Nguyen Toan: "Re: [OMPI users] mpirun error in OpenMPI 1.5"</a>
<li><strong>Reply:</strong> <a href="15045.php">Nguyen Toan: "Re: [OMPI users] mpirun error in OpenMPI 1.5"</a>
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
