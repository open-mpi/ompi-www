<?
$subject_val = "Re: [OMPI devel] Issue with MPI_Put in version 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 15:01:09 2014" -->
<!-- isoreceived="20141007190109" -->
<!-- sent="Tue, 7 Oct 2014 19:01:07 +0000" -->
<!-- isosent="20141007190107" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Issue with MPI_Put in version 1.8.3" -->
<!-- id="C94E33EC-C5FA-44EF-9548-8A840B4AC9BA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20141007181104.GS1319_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Issue with MPI_Put in version 1.8.3<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-07 15:01:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16028.php">Artem Polyakov: "Re: [OMPI devel] OPAL timing framework"</a>
<li><strong>Previous message:</strong> <a href="16026.php">Nathan Hjelm: "Re: [OMPI devel] Issue with MPI_Put in version 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="16026.php">Nathan Hjelm: "Re: [OMPI devel] Issue with MPI_Put in version 1.8.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be fixed on *master* now... :)
<br>
<p>Sent from my phone. No type good. 
<br>
<p><span class="quotelev1">&gt; On Oct 7, 2014, at 2:11 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should be fixed on trunk now. There were a couple of minor issues in the
</span><br>
<span class="quotelev1">&gt; PSCW path. CMR'd to 1.8.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Oct 07, 2014 at 01:09:33PM +0200, Berk Hess wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   I am implementing RMA in the Gromacs molecular simulation package and ran
</span><br>
<span class="quotelev2">&gt;&gt;   into an issue while using a relatively simple setup with MPI_Put with Open
</span><br>
<span class="quotelev2">&gt;&gt;   MPI version 1.8.3. I made a small test program, see attachment, which
</span><br>
<span class="quotelev2">&gt;&gt;   reproduces the issue. The issue is that the data passed to MPI_Put arrives
</span><br>
<span class="quotelev2">&gt;&gt;   incompletely at the receiver end.
</span><br>
<span class="quotelev2">&gt;&gt;   I have been unable to reproduce the issue with version 1.7.2/4 or MPICH
</span><br>
<span class="quotelev2">&gt;&gt;   3.1.2.
</span><br>
<span class="quotelev2">&gt;&gt;   Note that I have only ran it on a single processor, i.e. using shared
</span><br>
<span class="quotelev2">&gt;&gt;   memory.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Berk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;stdio.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;unistd.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /* Tests MPI_Win_put with post+start+complete+wait.
</span><br>
<span class="quotelev2">&gt;&gt; * It puts to one rank count backward and receives from one rank count forward,
</span><br>
<span class="quotelev2">&gt;&gt; * rank 0 sends to rank nranks-1 (note: issue not affect by cyclic setup).
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * With OpenMPI 1.8.3, Linux, gcc 4.7.2 on a single Intel i7-2600
</span><br>
<span class="quotelev2">&gt;&gt; * thousands of transfer errors appear with 3 or more ranks.
</span><br>
<span class="quotelev2">&gt;&gt; * I would expect this issue is present (at least) any shared memory setup.
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * Up till now the problem has not been reproduced with OpenMPI 1.7.2/4
</span><br>
<span class="quotelev2">&gt;&gt; * and MPICH 3.1.2.
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #define SIZE     5000
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #define NSTEPS 100000
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    int rank, rank_bw, rank_fw, nranks, *a, *b, prev, i, step;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Group comm_group, group_bw, group_fw;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Win win;
</span><br>
<span class="quotelev2">&gt;&gt;    int nerrors = 0;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;nranks);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    i = MPI_Alloc_mem(SIZE*sizeof(int), MPI_INFO_NULL, &amp;a);
</span><br>
<span class="quotelev2">&gt;&gt;    if (i) {
</span><br>
<span class="quotelev2">&gt;&gt;        printf(&quot;Can't allocate memory in test program\n&quot;);fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Abort(MPI_COMM_WORLD, 1);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Alloc_mem(SIZE*sizeof(int), MPI_INFO_NULL, &amp;b);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_group(MPI_COMM_WORLD, &amp;comm_group);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    rank_bw = (rank - 1 + nranks) % nranks;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Group_incl(comm_group, 1, &amp;rank_bw, &amp;group_bw);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    rank_fw = (rank + 1) % nranks;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Group_incl(comm_group, 1, &amp;rank_fw, &amp;group_fw);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Win_create(b, SIZE*sizeof(int), sizeof(int), MPI_INFO_NULL,
</span><br>
<span class="quotelev2">&gt;&gt;                   MPI_COMM_WORLD, &amp;win);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    for (step = 0; step &lt; NSTEPS; step++) {
</span><br>
<span class="quotelev2">&gt;&gt;        if (rank == 0 &amp;&amp; step % 1000 == 0)
</span><br>
<span class="quotelev2">&gt;&gt;            printf(&quot;step %d\n&quot;,step);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        for (i = 0; i &lt; SIZE; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;            a[i] = step + 1;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Win_post(group_fw, 0,win);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Win_start(group_bw, 0, win);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Put(a, SIZE, MPI_INT, rank_bw, 0, SIZE, MPI_INT, win);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Win_complete(win);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Win_wait(win);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        /* Check if the last element is not transferred/updated yet */
</span><br>
<span class="quotelev2">&gt;&gt;        if (b[SIZE-1] != step + 1) {
</span><br>
<span class="quotelev2">&gt;&gt;            printf(&quot;step %d, rank %d last element not updated\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                   step, rank);
</span><br>
<span class="quotelev2">&gt;&gt;            nerrors++;
</span><br>
<span class="quotelev2">&gt;&gt; #if 0
</span><br>
<span class="quotelev2">&gt;&gt;            /* Test if data arrived after one second (is never the case) */
</span><br>
<span class="quotelev2">&gt;&gt;            sleep(1);
</span><br>
<span class="quotelev2">&gt;&gt;            printf(&quot;step %d, rank %d last element updated after 1 second: %d\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                   step, rank, (b[SIZE-1] == step + 1));
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot;There were %d transfer errors\n&quot;, nerrors);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Group_free(&amp;group_bw);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Group_free(&amp;group_fw);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Group_free(&amp;comm_group);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Win_free(&amp;win);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Free_mem(a);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Free_mem(b);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    return nerrors;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16016.php">http://www.open-mpi.org/community/lists/devel/2014/10/16016.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16026.php">http://www.open-mpi.org/community/lists/devel/2014/10/16026.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16028.php">Artem Polyakov: "Re: [OMPI devel] OPAL timing framework"</a>
<li><strong>Previous message:</strong> <a href="16026.php">Nathan Hjelm: "Re: [OMPI devel] Issue with MPI_Put in version 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="16026.php">Nathan Hjelm: "Re: [OMPI devel] Issue with MPI_Put in version 1.8.3"</a>
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
