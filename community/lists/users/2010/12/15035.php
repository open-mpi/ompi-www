<?
$subject_val = "[OMPI users]  mpirun error in OpenMPI 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  8 10:02:57 2010" -->
<!-- isoreceived="20101208150257" -->
<!-- sent="Thu, 9 Dec 2010 00:02:50 +0900" -->
<!-- isosent="20101208150250" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="[OMPI users]  mpirun error in OpenMPI 1.5" -->
<!-- id="AANLkTin6c3EUj9pZ5K6KiROBPE+GROYTa4a3hXSjp5X4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users]  mpirun error in OpenMPI 1.5<br>
<strong>From:</strong> Nguyen Toan (<em>nguyentoan1508_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-08 10:02:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15036.php">Hicham Mouline: "[OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Previous message:</strong> <a href="15034.php">&#195;&#207;&#207;&#220;&#190;&#252;: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15037.php">Ralph Castain: "Re: [OMPI users] mpirun error in OpenMPI 1.5"</a>
<li><strong>Reply:</strong> <a href="15037.php">Ralph Castain: "Re: [OMPI users] mpirun error in OpenMPI 1.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am having a problem while running mpirun in OpenMPI 1.5 version. I
<br>
compiled OpenMPI 1.5 with BLCR 0.8.2 and OFED 1.4.1 as follows:
<br>
<p>./configure \
<br>
--with-ft=cr \
<br>
--enable-mpi-threads \
<br>
--with-blcr=/home/nguyen/opt/blcr \
<br>
--with-blcr-libdir=/home/nguyen/opt/blcr/lib \
<br>
--prefix=/home/nguyen/opt/openmpi-1.5 \
<br>
--with-openib \
<br>
--enable-mpirun-prefix-by-default
<br>
<p>For programs under &quot;openmpi-1.5/examples&quot; folder, mpirun tests were
<br>
successful. But mpirun aborted immediately when running a program in MPI
<br>
CUDA code, which was tested successfully with OpenMPI 1.4.3. Below is the
<br>
error message.
<br>
<p>Can anyone give me an idea about this error?
<br>
Thank you.
<br>
<p>Best Regards,
<br>
Toan
<br>
----------------------
<br>
<p><p>[rc002.local:17727] [[56831,1],1] ORTE_ERROR_LOG: Data unpack would read
<br>
past end of buffer in file util/nidmap.c at line 371
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_base_build_nidmap failed
<br>
&nbsp;&nbsp;--&gt; Returned value Data unpack would read past end of buffer (-26) instead
<br>
of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[rc002.local:17727] [[56831,1],1] ORTE_ERROR_LOG: Data unpack would read
<br>
past end of buffer in file base/ess_base_nidmap.c at line 62
<br>
[rc002.local:17727] [[56831,1],1] ORTE_ERROR_LOG: Data unpack would read
<br>
past end of buffer in file ess_env_module.c at line 173
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Data unpack would read past end of buffer (-26) instead
<br>
of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[rc002.local:17727] [[56831,1],1] ORTE_ERROR_LOG: Data unpack would read
<br>
past end of buffer in file runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead of
<br>
&quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[rc002.local:17727] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 17727 on
<br>
node rc002 exiting improperly. There are two reasons this could occur:
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
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15035/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15036.php">Hicham Mouline: "[OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Previous message:</strong> <a href="15034.php">&#195;&#207;&#207;&#220;&#190;&#252;: "Re: [OMPI users] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15037.php">Ralph Castain: "Re: [OMPI users] mpirun error in OpenMPI 1.5"</a>
<li><strong>Reply:</strong> <a href="15037.php">Ralph Castain: "Re: [OMPI users] mpirun error in OpenMPI 1.5"</a>
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
