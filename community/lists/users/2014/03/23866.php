<?
$subject_val = "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 16 20:04:37 2014" -->
<!-- isoreceived="20140317000437" -->
<!-- sent="Mon, 17 Mar 2014 01:04:36 +0100" -->
<!-- isosent="20140317000436" -->
<!-- name="Elias Rudberg" -->
<!-- email="elias.rudberg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error" -->
<!-- id="20140317010436.19992n8i18utgges_at_webmail.uu.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B2DE00E8-DB46-444C-BD10-6EECD0EB7C2D_at_open-mpi.org" -->
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
<strong>From:</strong> Elias Rudberg (<em>elias.rudberg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-16 20:04:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23867.php">Gustavo Correa: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>Previous message:</strong> <a href="23865.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>In reply to:</strong> <a href="23865.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23867.php">Gustavo Correa: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>Reply:</strong> <a href="23867.php">Gustavo Correa: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for the quick answer!
<br>
<p><span class="quotelev1">&gt; Try running the &quot;ring&quot; program in our example directory and see if that works
</span><br>
<p>I just did this, and it works. (I ran ring_c.c)
<br>
<p>Looking in your ring_c.c code, I see that it is quite similar to my  
<br>
test program but one thing that differs is the datatype: the ring  
<br>
program uses MPI_INT but my test uses MPI_CHARACTER.
<br>
I tried changing from MPI_INT to MPI_CHARACTER in ring_c.c (and the  
<br>
type of the variable &quot;message&quot; from int to char), and then ring_c.c  
<br>
fails in the same way as my test code. And my code works if changing  
<br>
from MPI_CHARACTER to MPI_INT.
<br>
<p>So, it looks like the there is a bug that is triggered when using  
<br>
MPI_CHARACTER, but it works with MPI_INT.
<br>
<p>/ Elias
<br>
<p><p>Quoting Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Try running the &quot;ring&quot; program in our example directory and see if that works
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 16, 2014, at 4:26 PM, Elias Rudberg &lt;elias.rudberg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would like to report a bug in Open MPI 1.7.4 when compiled with  
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-thread-multiple.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The bug can be reproduced with the following test program (mpi-send-recv.c):
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main() {
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;  int rank;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;  printf(&quot;Rank %d at start\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt;&gt;  if (rank)
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Send(NULL, 0, MPI_CHARACTER, 0, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;  else
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Recv(NULL, 0, MPI_CHARACTER, 1, 0, MPI_COMM_WORLD,  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;  printf(&quot;Rank %d at end\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;  return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; ===========================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With Open MPI 1.7.4 compiled with --enable-mpi-thread-multiple, the  
</span><br>
<span class="quotelev2">&gt;&gt; test program above fails like this:
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 2 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; Rank 0 at start
</span><br>
<span class="quotelev2">&gt;&gt; Rank 1 at start
</span><br>
<span class="quotelev2">&gt;&gt; [elias-p6-2022scm:2743] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev2">&gt;&gt; [elias-p6-2022scm:2743] *** reported by process  
</span><br>
<span class="quotelev2">&gt;&gt; [140733606985729,140256452018176]
</span><br>
<span class="quotelev2">&gt;&gt; [elias-p6-2022scm:2743] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [elias-p6-2022scm:2743] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev2">&gt;&gt; [elias-p6-2022scm:2743] *** MPI_ERRORS_ARE_FATAL (processes in this  
</span><br>
<span class="quotelev2">&gt;&gt; communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt; [elias-p6-2022scm:2743] ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Steps I use to reproduce this in Ubuntu:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (1) Download openmpi-1.7.4.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (2) Configure like this:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-mpi-thread-multiple
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (3) make
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (4) Compile test program like this:
</span><br>
<span class="quotelev2">&gt;&gt; mpicc mpi-send-recv.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (5) Run like this:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; This gives the error above.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course, in my actual application I will want to call  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init_thread with MPI_THREAD_MULTIPLE instead of just MPI_Init,  
</span><br>
<span class="quotelev2">&gt;&gt; but that does not seem to matter for this error; the same error  
</span><br>
<span class="quotelev2">&gt;&gt; comes regardless of the way I call MPI_Init/MPI_Init_thread. So I  
</span><br>
<span class="quotelev2">&gt;&gt; just put MPI_Init in the test code above to make it as short as  
</span><br>
<span class="quotelev2">&gt;&gt; possible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you agree that this is a bug, or am I doing something wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas for workarounds to make things work with  
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-thread-multiple? (I do need threads, so skipping  
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-thread-multiple is probably not an option for me.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Elias
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23867.php">Gustavo Correa: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>Previous message:</strong> <a href="23865.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>In reply to:</strong> <a href="23865.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23867.php">Gustavo Correa: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>Reply:</strong> <a href="23867.php">Gustavo Correa: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
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
