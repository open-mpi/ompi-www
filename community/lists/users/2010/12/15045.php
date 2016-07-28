<?
$subject_val = "Re: [OMPI users] mpirun error in OpenMPI 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  8 15:05:27 2010" -->
<!-- isoreceived="20101208200527" -->
<!-- sent="Thu, 9 Dec 2010 05:05:21 +0900" -->
<!-- isosent="20101208200521" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun error in OpenMPI 1.5" -->
<!-- id="AANLkTinZo+oo3PJQXs1bpHYP7ucpj64fVOj6Jqg1LNm3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9C7EC765-A9FB-45CD-B82A-2D8979ABB38A_at_open-mpi.org" -->
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
<strong>From:</strong> Nguyen Toan (<em>nguyentoan1508_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-08 15:05:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15046.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Previous message:</strong> <a href="15044.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>In reply to:</strong> <a href="15037.php">Ralph Castain: "Re: [OMPI users] mpirun error in OpenMPI 1.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph,
<br>
<p>Thank you for your reply. I did check the ld_library_path and recompile with
<br>
the new version and it worked perfectly.
<br>
Thank you again.
<br>
<p>Best Regards,
<br>
Toan
<br>
<p>On Thu, Dec 9, 2010 at 12:30 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That could mean you didn't recompile the code using the new version of
</span><br>
<span class="quotelev1">&gt; OMPI. The 1.4 and 1.5 series are not binary compatible - you have to
</span><br>
<span class="quotelev1">&gt; recompile your code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you did recompile, you may be getting version confusion on the backend
</span><br>
<span class="quotelev1">&gt; nodes - you should check your ld_library_path and ensure it is pointing to
</span><br>
<span class="quotelev1">&gt; the 1.5 series install.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 8, 2010, at 8:02 AM, Nguyen Toan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am having a problem while running mpirun in OpenMPI 1.5 version. I
</span><br>
<span class="quotelev1">&gt; compiled OpenMPI 1.5 with BLCR 0.8.2 and OFED 1.4.1 as follows:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure \
</span><br>
<span class="quotelev2">&gt; &gt; --with-ft=cr \
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpi-threads \
</span><br>
<span class="quotelev2">&gt; &gt; --with-blcr=/home/nguyen/opt/blcr \
</span><br>
<span class="quotelev2">&gt; &gt; --with-blcr-libdir=/home/nguyen/opt/blcr/lib \
</span><br>
<span class="quotelev2">&gt; &gt; --prefix=/home/nguyen/opt/openmpi-1.5 \
</span><br>
<span class="quotelev2">&gt; &gt; --with-openib \
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For programs under &quot;openmpi-1.5/examples&quot; folder, mpirun tests were
</span><br>
<span class="quotelev1">&gt; successful. But mpirun aborted immediately when running a program in MPI
</span><br>
<span class="quotelev1">&gt; CUDA code, which was tested successfully with OpenMPI 1.4.3. Below is the
</span><br>
<span class="quotelev1">&gt; error message.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can anyone give me an idea about this error?
</span><br>
<span class="quotelev2">&gt; &gt; Thank you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Toan
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [rc002.local:17727] [[56831,1],1] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev1">&gt; past end of buffer in file util/nidmap.c at line 371
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   orte_ess_base_build_nidmap failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned value Data unpack would read past end of buffer (-26)
</span><br>
<span class="quotelev1">&gt; instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [rc002.local:17727] [[56831,1],1] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev1">&gt; past end of buffer in file base/ess_base_nidmap.c at line 62
</span><br>
<span class="quotelev2">&gt; &gt; [rc002.local:17727] [[56831,1],1] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev1">&gt; past end of buffer in file ess_env_module.c at line 173
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   orte_ess_set_name failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned value Data unpack would read past end of buffer (-26)
</span><br>
<span class="quotelev1">&gt; instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [rc002.local:17727] [[56831,1],1] ORTE_ERROR_LOG: Data unpack would read
</span><br>
<span class="quotelev1">&gt; past end of buffer in file runtime/orte_init.c at line 132
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev2">&gt; &gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt; &gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead
</span><br>
<span class="quotelev1">&gt; of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt; &gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt; &gt; [rc002.local:17727] Abort before MPI_INIT completed successfully; not
</span><br>
<span class="quotelev1">&gt; able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun has exited due to process rank 1 with PID 17727 on
</span><br>
<span class="quotelev2">&gt; &gt; node rc002 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev2">&gt; &gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev2">&gt; &gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev2">&gt; &gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt; &gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15045/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15046.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>Previous message:</strong> <a href="15044.php">brad baker: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<li><strong>In reply to:</strong> <a href="15037.php">Ralph Castain: "Re: [OMPI users] mpirun error in OpenMPI 1.5"</a>
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
