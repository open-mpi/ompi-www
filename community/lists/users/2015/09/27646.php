<?
$subject_val = "Re: [OMPI users] possible GATS bug in osc/sm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 12:13:51 2015" -->
<!-- isoreceived="20150921161351" -->
<!-- sent="Mon, 21 Sep 2015 10:13:49 -0600" -->
<!-- isosent="20150921161349" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible GATS bug in osc/sm" -->
<!-- id="20150921161349.GA2859_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="55FBCC4E.9000706_at_cs.uni-potsdam.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] possible GATS bug in osc/sm<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-21 12:13:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27647.php">Glynn Hosking: "[OMPI users] Specifying nodes and cores when using mpi_comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="27645.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27622.php">Steffen Christgau: "[OMPI users] possible GATS bug in osc/sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27649.php">Nathan Hjelm: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I maintain the osc/sm component but did not write the pscw
<br>
synchronization. I agree that a counter is not sufficient. I have a fix
<br>
in mind and will probably create a PR for it later this week. The fix
<br>
will need to be applied to 1.10, 2.x, and master.
<br>
<p>-Nathan
<br>
<p>On Fri, Sep 18, 2015 at 10:33:18AM +0200, Steffen Christgau wrote:
<br>
<span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [the following discussion is based on v1.8.8]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; suppose you have a MPI one-sided program using general active target
</span><br>
<span class="quotelev1">&gt; synchronization (GATS). In that program, a single origin process
</span><br>
<span class="quotelev1">&gt; performs two rounds of communication, i.e. two access epochs, to
</span><br>
<span class="quotelev1">&gt; different target process groups. The target processes synchronizes
</span><br>
<span class="quotelev1">&gt; accordingly with the single origin process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Suppose further, that - for any reason - there is a process skew
</span><br>
<span class="quotelev1">&gt; that delays the target processes of the first group but does not affect
</span><br>
<span class="quotelev1">&gt; the second group. Thus, the processes in the second group issue a post
</span><br>
<span class="quotelev1">&gt; operation earlier than the first group.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMO, this should have no effect for the origin process. It should first
</span><br>
<span class="quotelev1">&gt; complete its access epoch to the first group of targets, then to the
</span><br>
<span class="quotelev1">&gt; other one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Things do work as expected with the osc/rdma component but do not with
</span><br>
<span class="quotelev1">&gt; osc/sm. To get osc/sm involved, compile the attached program with
</span><br>
<span class="quotelev1">&gt; -DUSE_WIN_ALLOCATE compiler flag. In detail I used
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicc -O0 -g -Wall std=c99 -DUSE_WIN_ALLOCATE  pscw_epochs.c -o pscw_epochs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Run the compiled program on a shared memory system (e.g. your
</span><br>
<span class="quotelev1">&gt; workstation) with more than 2 processes and either use --mca osc sm or
</span><br>
<span class="quotelev1">&gt; do not specify any mca parameter at all (sm component is used for
</span><br>
<span class="quotelev1">&gt; windows automatically on shared memory systems if win is created by
</span><br>
<span class="quotelev1">&gt; MPI_Win_allocate and friends).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will give a deadlock (timestamps from output removed):
</span><br>
<span class="quotelev1">&gt; mpiexec -n 3 ./pscw_epochs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [2 @ pscw_epochs.c:72]: posted, waiting for wait to return...
</span><br>
<span class="quotelev1">&gt; [0 @ pscw_epochs.c:41]: putting to 1
</span><br>
<span class="quotelev1">&gt; [0 @ pscw_epochs.c:44]: done with put/complete
</span><br>
<span class="quotelev1">&gt; [1 @ pscw_epochs.c:61]: sleeping...
</span><br>
<span class="quotelev1">&gt; [0 @ pscw_epochs.c:53]: putting value 2 to rank 2
</span><br>
<span class="quotelev1">&gt; [1 @ pscw_epochs.c:63]: woke up.
</span><br>
<span class="quotelev1">&gt; [1 @ pscw_epochs.c:66]: window buffer modified before sync'ed
</span><br>
<span class="quotelev1">&gt; [1 @ pscw_epochs.c:72]: posted, waiting for wait to return...
</span><br>
<span class="quotelev1">&gt; [2 @ pscw_epochs.c:75]: target done got 2 -&gt; success
</span><br>
<span class="quotelev1">&gt; ^C
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note, that is does not only cause a deadlock but also puts data in the
</span><br>
<span class="quotelev1">&gt; window of a process that has not synchronized already (rank 1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I run the program with more than 3 processes the effect of wrong data
</span><br>
<span class="quotelev1">&gt; in the window disappears, but the deadlock manifests:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -n 4 ./pscw_epochs
</span><br>
<span class="quotelev1">&gt; [1 @ pscw_epochs.c:61]: sleeping...
</span><br>
<span class="quotelev1">&gt; [2 @ pscw_epochs.c:72]: posted, waiting for wait to return...
</span><br>
<span class="quotelev1">&gt; [3 @ pscw_epochs.c:72]: posted, waiting for wait to return...
</span><br>
<span class="quotelev1">&gt; [1 @ pscw_epochs.c:63]: woke up.
</span><br>
<span class="quotelev1">&gt; [1 @ pscw_epochs.c:72]: posted, waiting for wait to return...
</span><br>
<span class="quotelev1">&gt; ^C
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason for this seems to be the employed implementation using a
</span><br>
<span class="quotelev1">&gt; counter to check if all processes given in START have issued according
</span><br>
<span class="quotelev1">&gt; POST operations. START only checks if the counter's value matches the
</span><br>
<span class="quotelev1">&gt; number of processes in the start group. That way, it is prone to
</span><br>
<span class="quotelev1">&gt; modifications by other target processes from &quot;future&quot; epochs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMO, the counter is simply not a good solution for implementing START as
</span><br>
<span class="quotelev1">&gt; it is not capable of tracking which process has performed POST. I
</span><br>
<span class="quotelev1">&gt; suppose a solution for this would be to have a list or bit vector as
</span><br>
<span class="quotelev1">&gt; proposed in [1].
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking forward for a discussion (may be at EuroMPI or MPI Forum next week)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards, Steffen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] Ping Lai, Sayantan Sur, and Dhabaleswar K. Panda. &#226;&#128;&#156;Designing truly
</span><br>
<span class="quotelev1">&gt; one- sided MPI-2 RMA intra-node communication on multi-core systems&#226;&#128;&#157;.
</span><br>
<span class="quotelev1">&gt; In: Computer Science - R&amp;D 25.1-2 (2010), pp. 3&#226;&#128;&#147;14, DOI:
</span><br>
<span class="quotelev1">&gt; 10.1007/s00450-010-0115-3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define WIN_BUFFER_INIT_VALUE 0xFFFFFFFF
</span><br>
<span class="quotelev1">&gt; #define DPRINT(fmt, ...) printf(&quot;[%d @ %.6f %s:%d]: &quot; fmt &quot;\n&quot;, comm_rank, MPI_Wtime(), __FILE__, __LINE__, ##__VA_ARGS__)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 	int comm_rank, comm_size, i, buffer;
</span><br>
<span class="quotelev1">&gt; 	int* win_buffer;
</span><br>
<span class="quotelev1">&gt; 	int exclude_targets[2] = { 0, 1 };
</span><br>
<span class="quotelev1">&gt; 	MPI_Win win;
</span><br>
<span class="quotelev1">&gt; 	MPI_Group world_group, start_group, post_group;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_size(MPI_COMM_WORLD, &amp;comm_size);
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_rank(MPI_COMM_WORLD, &amp;comm_rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifdef USE_WIN_ALLOCATE
</span><br>
<span class="quotelev1">&gt; 	MPI_Win_allocate(sizeof(*win_buffer), 1, MPI_INFO_NULL, MPI_COMM_WORLD, &amp;win_buffer, &amp;win);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; 	MPI_Alloc_mem(sizeof(*win_buffer), MPI_INFO_NULL, &amp;win_buffer);
</span><br>
<span class="quotelev1">&gt; 	MPI_Win_create(win_buffer, sizeof(*win_buffer), 1, MPI_INFO_NULL, MPI_COMM_WORLD, &amp;win);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 	*win_buffer = WIN_BUFFER_INIT_VALUE;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_group(MPI_COMM_WORLD, &amp;world_group);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	if (comm_rank == 0) {
</span><br>
<span class="quotelev1">&gt; 		/* origin */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		/* 1st round: access window of rank 1 */
</span><br>
<span class="quotelev1">&gt; 		MPI_Group_incl(world_group, 1, exclude_targets + 1, &amp;start_group);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		buffer = 1;
</span><br>
<span class="quotelev1">&gt; 		MPI_Win_start(start_group, 0, win);
</span><br>
<span class="quotelev1">&gt; 		DPRINT(&quot;putting to 1&quot;);
</span><br>
<span class="quotelev1">&gt; 		MPI_Put(&amp;buffer, 1, MPI_INT, 1, 0, 1, MPI_INT, win);
</span><br>
<span class="quotelev1">&gt; 		MPI_Win_complete(win);
</span><br>
<span class="quotelev1">&gt; 		DPRINT(&quot;done with put/complete&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		MPI_Group_free(&amp;start_group);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		/* 2nd round: access everyone else */
</span><br>
<span class="quotelev1">&gt; 		MPI_Group_excl(world_group, sizeof(exclude_targets) / sizeof(*exclude_targets), exclude_targets, &amp;start_group);
</span><br>
<span class="quotelev1">&gt; 		buffer = 2;
</span><br>
<span class="quotelev1">&gt; 		MPI_Win_start(start_group, 0, win);
</span><br>
<span class="quotelev1">&gt; 		for (i = 2; i &lt; comm_size; i++) {
</span><br>
<span class="quotelev1">&gt; 			DPRINT(&quot;putting value %d to rank %d&quot;, buffer, i);
</span><br>
<span class="quotelev1">&gt; 			MPI_Put(&amp;buffer, 1, MPI_INT, i, 0, 1, MPI_INT, win);
</span><br>
<span class="quotelev1">&gt; 		}
</span><br>
<span class="quotelev1">&gt; 		MPI_Win_complete(win);
</span><br>
<span class="quotelev1">&gt; 		MPI_Group_free(&amp;start_group);
</span><br>
<span class="quotelev1">&gt; 	} else {
</span><br>
<span class="quotelev1">&gt; 		/* target */
</span><br>
<span class="quotelev1">&gt; 		if (comm_rank == 1) {
</span><br>
<span class="quotelev1">&gt; 			DPRINT(&quot;sleeping...&quot;);
</span><br>
<span class="quotelev1">&gt; 			sleep(2);
</span><br>
<span class="quotelev1">&gt; 			DPRINT(&quot;woke up.&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 			if (*win_buffer != WIN_BUFFER_INIT_VALUE) {
</span><br>
<span class="quotelev1">&gt; 				DPRINT(&quot;window buffer modified before sync'ed&quot;);
</span><br>
<span class="quotelev1">&gt; 			}
</span><br>
<span class="quotelev1">&gt; 		}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		MPI_Group_incl(world_group, 1, exclude_targets, &amp;post_group);
</span><br>
<span class="quotelev1">&gt; 		MPI_Win_post(post_group, 0, win);
</span><br>
<span class="quotelev1">&gt; 		DPRINT(&quot;posted, waiting for wait to return...&quot;);
</span><br>
<span class="quotelev1">&gt; 		/* nop */
</span><br>
<span class="quotelev1">&gt; 		MPI_Win_wait(win);
</span><br>
<span class="quotelev1">&gt; 		DPRINT(&quot;target done got %d -&gt; %s&quot;, *win_buffer, (*win_buffer != (comm_rank == 1 ? 1 : 2)) ? &quot;FAILURE&quot; : &quot;success&quot;);
</span><br>
<span class="quotelev1">&gt; 		MPI_Group_free(&amp;post_group);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Win_free(&amp;win);
</span><br>
<span class="quotelev1">&gt; 	MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27622.php">http://www.open-mpi.org/community/lists/users/2015/09/27622.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27646/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27647.php">Glynn Hosking: "[OMPI users] Specifying nodes and cores when using mpi_comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="27645.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27622.php">Steffen Christgau: "[OMPI users] possible GATS bug in osc/sm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27649.php">Nathan Hjelm: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
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
