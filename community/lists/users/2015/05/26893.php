<?
$subject_val = "Re: [OMPI users] 'The MPI_Comm_rank() function was called before MPI_INIT was invoked'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 08:07:29 2015" -->
<!-- isoreceived="20150520120729" -->
<!-- sent="Wed, 20 May 2015 21:07:17 +0900" -->
<!-- isosent="20150520120717" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 'The MPI_Comm_rank() function was called before MPI_INIT was invoked'" -->
<!-- id="CAAkFZ5s9329qfsOOPNj52TzLDwwxaxS7aqR8+87D7PQBnBQfhQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1432116428707.45634_at_e.ntu.edu.sg" -->
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
<strong>Subject:</strong> Re: [OMPI users] 'The MPI_Comm_rank() function was called before MPI_INIT was invoked'<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-20 08:07:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26894.php">Patrick LeGresley: "[OMPI users] Performance differences using mpirun and SLURM"</a>
<li><strong>Previous message:</strong> <a href="26892.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>In reply to:</strong> <a href="26891.php">#MOHAMMAD ASIF KHAN#: "[OMPI users] 'The MPI_Comm_rank() function was called before MPI_INIT was invoked'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mohammad,
<br>
<p>the error message is self explanatory.
<br>
you cannot invoke MPI functions before invoking MPI_Init or after
<br>
MPI_Finalize
<br>
<p>the easiest way to solve your problem is to move the MPI_Init call to the
<br>
beginning of your program.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, May 20, 2015, #MOHAMMAD ASIF KHAN# &lt;N1400359D_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          I am using caffe-parallel toolbox for deep learning. The
</span><br>
<span class="quotelev1">&gt; framework has been parallelized using mpi. For my implementation I am using
</span><br>
<span class="quotelev1">&gt; Open mpi 1.6.5&#226;&#128;&#139;&#226;&#128;&#139;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The installation stage for openmpi goes fine but when I run the
</span><br>
<span class="quotelev1">&gt; code following error appears:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  *** The MPI_Comm_rank() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [s4:29812] Local abort before MPI_INIT completed successfully; not able to
</span><br>
<span class="quotelev1">&gt; aggregate error messages, and not able to guarantee that all other
</span><br>
<span class="quotelev1">&gt; processes were killed!
</span><br>
<span class="quotelev1">&gt; make: *** [runtest] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Please provide necessary information to resolve the issue. Your help
</span><br>
<span class="quotelev1">&gt; will be highly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks &amp; Regards,
</span><br>
<span class="quotelev1">&gt; M. Asif Khan&#226;&#128;&#139;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26893/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26894.php">Patrick LeGresley: "[OMPI users] Performance differences using mpirun and SLURM"</a>
<li><strong>Previous message:</strong> <a href="26892.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>In reply to:</strong> <a href="26891.php">#MOHAMMAD ASIF KHAN#: "[OMPI users] 'The MPI_Comm_rank() function was called before MPI_INIT was invoked'"</a>
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
