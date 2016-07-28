<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 20 21:20:08 2007" -->
<!-- isoreceived="20070621012008" -->
<!-- sent="Wed, 20 Jun 2007 21:28:26 -0400" -->
<!-- isosent="20070621012826" -->
<!-- name="Jeffrey L. Tilson" -->
<!-- email="jtilson_at_[hidden]" -->
<!-- subject="[OMPI users] [Fwd: Re: [MPICH2 Req #3480] MPI question/problem]" -->
<!-- id="4679D43A.4090306_at_renci.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeffrey L. Tilson (<em>jtilson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-20 21:28:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3522.php">Jeffrey L. Tilson: "[OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<li><strong>Previous message:</strong> <a href="3520.php">de Almeida, Valmor F.: "[OMPI users] mpi python recommendation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello openMPI users,
<br>
ANL suggested I post to you. BTW, the missing mpi_finalize  is not the 
<br>
problem.
<br>
--jeff
<br>
<p><p><p><p>
<br><p><strong>attached mail follows:</strong><hr>
<br><p>
<p><p>On Wed, 20 Jun 2007, Jeffrey Tilson wrote:
<br>
<p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; This will probably turn out to be my fault as I haven't used MPI in a
</span><br>
<span class="quotelev1">&gt; few years.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am attempting to use an MPI implementation of a &quot;nxtval&quot; (see the MPI
</span><br>
<span class="quotelev1">&gt; book). I am using the client-server scenario. The MPI book specifies the
</span><br>
<span class="quotelev1">&gt; three functions required. Two are collective and one is not. Only the
</span><br>
<span class="quotelev1">&gt; two collectives are tested in the supplied code. All three of the MPI
</span><br>
<span class="quotelev1">&gt; functions are reproduced in the attached code, however.  I wrote a tiny
</span><br>
<span class="quotelev1">&gt; application to create and free a counter object and it fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to know if this is a bug in the MPI book and a misunderstanding
</span><br>
<span class="quotelev1">&gt; on my part.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The complete code is attached. I was using openMPI/intel to compile and
</span><br>
<span class="quotelev1">&gt; run.
</span><br>
<p>If you are using OpenMPI (which is a different MPI implementation) to
<br>
compile your code, you may want to contact OpenMPI folks at
<br>
users_at_[hidden] or www.open-mpi.org for support.  Our current MPI
<br>
release is mpich2-1.0.5p4 at <a href="http://www.mcs.anl.gov/mpi/mpich">http://www.mcs.anl.gov/mpi/mpich</a>
<br>
<p>However, a quick look at your program, I notice your code does not have
<br>
MPI_Finalize.  Without it, your program isn't a valid MPI program.
<br>
<p>A.Chan
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error I get is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [compute-0-1.local:22637] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev2">&gt; &gt; [compute-0-1.local:22637] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [compute-0-1.local:22637] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt; &gt; [compute-0-1.local:22637] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that job rank 0 with PID 22635 on node
</span><br>
<span class="quotelev2">&gt; &gt; &quot;compute-0-1.local&quot; exited on signal 15.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attempted to google my way to understanding but with little
</span><br>
<span class="quotelev1">&gt; success. If someone could point me to
</span><br>
<span class="quotelev1">&gt; a sample application that actually uses these functions, I would
</span><br>
<span class="quotelev1">&gt; appreciate it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry if this is the wrong list, it is not an MPICH question and I
</span><br>
<span class="quotelev1">&gt; wasn't sure where to turn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; --jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3522.php">Jeffrey L. Tilson: "[OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<li><strong>Previous message:</strong> <a href="3520.php">de Almeida, Valmor F.: "[OMPI users] mpi python recommendation"</a>
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
