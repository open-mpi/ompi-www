<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct  3 19:38:13 2007" -->
<!-- isoreceived="20071003233813" -->
<!-- sent="Wed, 03 Oct 2007 19:38:18 -0400" -->
<!-- isosent="20071003233818" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Gatherv on One Process" -->
<!-- id="470427EA.8000301_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="41f7be510710021138l2ff95f6cv19339263b1f9162e_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-03 19:38:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4149.php">Tim Prins: "Re: [OMPI users] Bug in MPI_Reduce/MPI_Comm_split?"</a>
<li><strong>Previous message:</strong> <a href="4147.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>In reply to:</strong> <a href="4135.php">Chris Johnson: "[OMPI users] MPI_Gatherv on One Process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the report!
<br>
<p>I have reproduced this bug and have filed a ticket on this 
<br>
(<a href="https://svn.open-mpi.org/trac/ompi/ticket/1157">https://svn.open-mpi.org/trac/ompi/ticket/1157</a>). You should receive 
<br>
updates as this bug is worked on.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>Chris Johnson wrote:
<br>
<span class="quotelev1">&gt; Hi, I'm trying to run an MPI program of mine under OpenMPI 1.2 using
</span><br>
<span class="quotelev1">&gt; just one process (mpirun -np 1 ./a.out) and I'm getting some
</span><br>
<span class="quotelev1">&gt; unexpected results.  The problem is that I'm getting unexpected
</span><br>
<span class="quotelev1">&gt; results from an MPI_Gatherv call when the offset for rank is nonzero.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've worked up a small sample that can reproduce the problem on the
</span><br>
<span class="quotelev1">&gt; several machines I've tried.  Here, each process creates a tmp array
</span><br>
<span class="quotelev1">&gt; of five ints.  These tmp arrays are then gathered by rank into a
</span><br>
<span class="quotelev1">&gt; buffer, but offset by 10 places.  (These 10 places are initialized
</span><br>
<span class="quotelev1">&gt; with -1.)  When I run with multiple processes, I see the 10 -1s and
</span><br>
<span class="quotelev1">&gt; each process's tmp array in the buffer.  But when I run with one
</span><br>
<span class="quotelev1">&gt; process, the buffer contains funny values.  When I run with one
</span><br>
<span class="quotelev1">&gt; process under MPICH, the buffer contains the 10 -1s and the rank's
</span><br>
<span class="quotelev1">&gt; array, as expected.  When the offset is 0, OpenMPI behaves just fine
</span><br>
<span class="quotelev1">&gt; with one process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the sample:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define COUNT 5
</span><br>
<span class="quotelev1">&gt; #define OFFSET 10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    int i;
</span><br>
<span class="quotelev1">&gt;    int *nitems;
</span><br>
<span class="quotelev1">&gt;    int *offsets;
</span><br>
<span class="quotelev1">&gt;    int *buffer;
</span><br>
<span class="quotelev1">&gt;    int tmp[COUNT];
</span><br>
<span class="quotelev1">&gt;    int rank;
</span><br>
<span class="quotelev1">&gt;    int nprocs;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;nprocs);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    for (i = 0; i &lt; COUNT; i++) {
</span><br>
<span class="quotelev1">&gt;       tmp[i] = i + rank * 100;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;       buffer = malloc(sizeof(int) * (nprocs * COUNT + OFFSET));
</span><br>
<span class="quotelev1">&gt;       nitems = malloc(sizeof(int) * nprocs);
</span><br>
<span class="quotelev1">&gt;       offsets = malloc(sizeof(int) * nprocs);
</span><br>
<span class="quotelev1">&gt;       nitems[0] = COUNT;
</span><br>
<span class="quotelev1">&gt;       offsets[0] = OFFSET;
</span><br>
<span class="quotelev1">&gt;       for (i = 1; i &lt; nprocs; i++) {
</span><br>
<span class="quotelev1">&gt;          nitems[i] = COUNT;
</span><br>
<span class="quotelev1">&gt;          offsets[i] = offsets[i - 1] + nitems[i - 1];
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       for (i = 0; i &lt; OFFSET; i++) {
</span><br>
<span class="quotelev1">&gt;          buffer[i] = -1;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    MPI_Gatherv(tmp, COUNT, MPI_INT, buffer, nitems, offsets, MPI_INT, 0,
</span><br>
<span class="quotelev1">&gt;                MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;       for (i = 0; i &lt; nprocs * COUNT + OFFSET; i++) {
</span><br>
<span class="quotelev1">&gt;          printf(&quot;buffer[%d]: %d\n&quot;, i, buffer[i]);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       free(buffer);
</span><br>
<span class="quotelev1">&gt;       free(nitems);
</span><br>
<span class="quotelev1">&gt;       free(offsets);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For what it's worth, I've started using MPI_IN_PLACE instead of the
</span><br>
<span class="quotelev1">&gt; above method.  This works around the problem for now, but I'd
</span><br>
<span class="quotelev1">&gt; appreciate any insight on how to fix this or confirmation of bug.
</span><br>
<span class="quotelev1">&gt; Thanks for your help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Chris
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
<li><strong>Next message:</strong> <a href="4149.php">Tim Prins: "Re: [OMPI users] Bug in MPI_Reduce/MPI_Comm_split?"</a>
<li><strong>Previous message:</strong> <a href="4147.php">Tim Prins: "Re: [OMPI users] mpirun ERROR: The daemon exited unexpectedly with status 255."</a>
<li><strong>In reply to:</strong> <a href="4135.php">Chris Johnson: "[OMPI users] MPI_Gatherv on One Process"</a>
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
