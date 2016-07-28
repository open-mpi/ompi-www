<?
$subject_val = "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 16 19:37:50 2014" -->
<!-- isoreceived="20140316233750" -->
<!-- sent="Sun, 16 Mar 2014 16:36:40 -0700" -->
<!-- isosent="20140316233640" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error" -->
<!-- id="B2DE00E8-DB46-444C-BD10-6EECD0EB7C2D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140317002654.37075xvjgif0k20u_at_webmail.uu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-16 19:36:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23866.php">Elias Rudberg: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>Previous message:</strong> <a href="23864.php">Elias Rudberg: "[OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>In reply to:</strong> <a href="23864.php">Elias Rudberg: "[OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23866.php">Elias Rudberg: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>Reply:</strong> <a href="23866.php">Elias Rudberg: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try running the &quot;ring&quot; program in our example directory and see if that works
<br>
<p>On Mar 16, 2014, at 4:26 PM, Elias Rudberg &lt;elias.rudberg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to report a bug in Open MPI 1.7.4 when compiled with --enable-mpi-thread-multiple.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The bug can be reproduced with the following test program (mpi-send-recv.c):
</span><br>
<span class="quotelev1">&gt; ===========================================
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; int main() {
</span><br>
<span class="quotelev1">&gt;  MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;  int rank;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;Rank %d at start\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;  if (rank)
</span><br>
<span class="quotelev1">&gt;    MPI_Send(NULL, 0, MPI_CHARACTER, 0, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt;    MPI_Recv(NULL, 0, MPI_CHARACTER, 1, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;Rank %d at end\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ===========================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With Open MPI 1.7.4 compiled with --enable-mpi-thread-multiple, the test program above fails like this:
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 ./a.out
</span><br>
<span class="quotelev1">&gt; Rank 0 at start
</span><br>
<span class="quotelev1">&gt; Rank 1 at start
</span><br>
<span class="quotelev1">&gt; [elias-p6-2022scm:2743] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev1">&gt; [elias-p6-2022scm:2743] *** reported by process [140733606985729,140256452018176]
</span><br>
<span class="quotelev1">&gt; [elias-p6-2022scm:2743] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [elias-p6-2022scm:2743] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev1">&gt; [elias-p6-2022scm:2743] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [elias-p6-2022scm:2743] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Steps I use to reproduce this in Ubuntu:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1) Download openmpi-1.7.4.tar.gz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (2) Configure like this:
</span><br>
<span class="quotelev1">&gt; ./configure --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (3) make
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (4) Compile test program like this:
</span><br>
<span class="quotelev1">&gt; mpicc mpi-send-recv.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (5) Run like this:
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./a.out
</span><br>
<span class="quotelev1">&gt; This gives the error above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, in my actual application I will want to call MPI_Init_thread with MPI_THREAD_MULTIPLE instead of just MPI_Init, but that does not seem to matter for this error; the same error comes regardless of the way I call MPI_Init/MPI_Init_thread. So I just put MPI_Init in the test code above to make it as short as possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you agree that this is a bug, or am I doing something wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas for workarounds to make things work with --enable-mpi-thread-multiple? (I do need threads, so skipping --enable-mpi-thread-multiple is probably not an option for me.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Elias
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23866.php">Elias Rudberg: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>Previous message:</strong> <a href="23864.php">Elias Rudberg: "[OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>In reply to:</strong> <a href="23864.php">Elias Rudberg: "[OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23866.php">Elias Rudberg: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>Reply:</strong> <a href="23866.php">Elias Rudberg: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
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
