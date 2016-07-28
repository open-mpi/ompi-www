<?
$subject_val = "[OMPI users] Question about collective messages implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  2 06:21:40 2010" -->
<!-- isoreceived="20101102102140" -->
<!-- sent="Tue, 2 Nov 2010 10:21:22 +0000 (UTC)" -->
<!-- isosent="20101102102122" -->
<!-- name="Jerome Reybert" -->
<!-- email="jreybert_at_[hidden]" -->
<!-- subject="[OMPI users] Question about collective messages implementation" -->
<!-- id="loom.20101102T110423-356_at_post.gmane.org" -->
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
<strong>Subject:</strong> [OMPI users] Question about collective messages implementation<br>
<strong>From:</strong> Jerome Reybert (<em>jreybert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-02 06:21:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14678.php">Ashley Pittman: "Re: [OMPI users] Question about collective messages implementation"</a>
<li><strong>Previous message:</strong> <a href="14676.php">jody: "Re: [OMPI users] message truncated error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14678.php">Ashley Pittman: "Re: [OMPI users] Question about collective messages implementation"</a>
<li><strong>Reply:</strong> <a href="14678.php">Ashley Pittman: "Re: [OMPI users] Question about collective messages implementation"</a>
<li><strong>Reply:</strong> <a href="14681.php">Jeff Squyres: "Re: [OMPI users] Question about collective messages implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am using OpenMPI 1.4.2 and 1.5. I am working on a very large scientific
<br>
software. The source code is huge and I don't have lot of freedom in this code.
<br>
I can't even force the user to define a topology with mpirun.
<br>
<p>At the moment, the software is using MPI in a very classical way: in a cluster,
<br>
one MPI task = one core on a machine =&gt; for example, 4 machines with 8 cores on
<br>
each, we run 32 MPI tasks. An hybrid OpenMP + MPI version is currently  in
<br>
development, but we do not consider it for now.
<br>
<p>At some points in the application, each task must call a Lapack function. Each
<br>
task call the same function, for the same data, in the same time, for the same
<br>
result. The idea here is:
<br>
<p>&nbsp;&nbsp;- on each machine, only one task call a Lapack function, an efficient
<br>
multi-thread or GPU version.
<br>
&nbsp;&nbsp;- other tasks are waiting.
<br>
&nbsp;&nbsp;- each machine is used at 100%, and the Lapack function should be ~ 8 times
<br>
more efficient.
<br>
&nbsp;&nbsp;- then, the computation task should broadcast the result only for the tasks on
<br>
the local machine. In my cluster example, we should have 4 local broadcast,
<br>
without using the network at all.
<br>
<p>For the moment, here my implementation:
<br>
<p>void my_dpotrf_(char *uplo, int *len_uplo, double *a, int *lda, int *info) {
<br>
&nbsp;&nbsp;MPI_Comm host_comm;
<br>
&nbsp;&nbsp;int myrank, host_rank, size, host_id_len, color;
<br>
&nbsp;&nbsp;char host_id[MPI_MAX_PROCESSOR_NAME];
<br>
&nbsp;&nbsp;size_t n2 = *len_uplo * *len_uplo;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;myrank);
<br>
&nbsp;&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;MPI_Get_processor_name(host_id, &amp;host_id_len);
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;color = my_hash(host_id, host_id_len);
<br>
&nbsp;&nbsp;MPI_Comm_split(MPI_COMM_WORLD, color, myrank, &amp;host_comm);
<br>
&nbsp;&nbsp;MPI_Comm_rank(host_comm, &amp;host_rank);
<br>
<p>&nbsp;&nbsp;if (host_rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;efficient parallel Lapack function
<br>
&nbsp;&nbsp;} 
<br>
&nbsp;&nbsp;MPI_Bcast ( a , n2, MPI_DOUBLE, 0, host_comm );
<br>
&nbsp;&nbsp;MPI_Bcast ( info , 1, MPI_INT, 0, host_comm );
<br>
} 
<br>
<p>Each host_comm communicator is grouping tasks by machines. I ran this version,
<br>
but performances are worst than the current version (each task performing its
<br>
own Lapack function). I have several questions:
<br>
<p>&nbsp;&nbsp;- in my implementation, is MPI_Bcast aware that it should use shared memory
<br>
memory communication? Is data go through the network? It seems it is the case,
<br>
considering the first results.
<br>
&nbsp;&nbsp;- is there any other methods to group task by machine, OpenMPI being aware
<br>
that it is grouping task by shared memory?
<br>
&nbsp;&nbsp;- is it possible to assign a policy (in this case, a shared memory policy) to
<br>
a Bcast or a Barrier call?
<br>
&nbsp;&nbsp;- do you have any better idea for this problem? :)
<br>
<p>Regards,
<br>
<p><pre>
-- 
Jerome Reybert
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14678.php">Ashley Pittman: "Re: [OMPI users] Question about collective messages implementation"</a>
<li><strong>Previous message:</strong> <a href="14676.php">jody: "Re: [OMPI users] message truncated error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14678.php">Ashley Pittman: "Re: [OMPI users] Question about collective messages implementation"</a>
<li><strong>Reply:</strong> <a href="14678.php">Ashley Pittman: "Re: [OMPI users] Question about collective messages implementation"</a>
<li><strong>Reply:</strong> <a href="14681.php">Jeff Squyres: "Re: [OMPI users] Question about collective messages implementation"</a>
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
