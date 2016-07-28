<?
$subject_val = "[OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 16 19:26:57 2014" -->
<!-- isoreceived="20140316232657" -->
<!-- sent="Mon, 17 Mar 2014 00:26:54 +0100" -->
<!-- isosent="20140316232654" -->
<!-- name="Elias Rudberg" -->
<!-- email="elias.rudberg_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error" -->
<!-- id="20140317002654.37075xvjgif0k20u_at_webmail.uu.se" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error<br>
<strong>From:</strong> Elias Rudberg (<em>elias.rudberg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-16 19:26:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23865.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>Previous message:</strong> <a href="23863.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23865.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>Reply:</strong> <a href="23865.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>I would like to report a bug in Open MPI 1.7.4 when compiled with  
<br>
--enable-mpi-thread-multiple.
<br>
<p>The bug can be reproduced with the following test program (mpi-send-recv.c):
<br>
===========================================
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
int main() {
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Rank %d at start\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;if (rank)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(NULL, 0, MPI_CHARACTER, 0, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(NULL, 0, MPI_CHARACTER, 1, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Rank %d at end\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
===========================================
<br>
<p>With Open MPI 1.7.4 compiled with --enable-mpi-thread-multiple, the  
<br>
test program above fails like this:
<br>
$ mpirun -np 2 ./a.out
<br>
Rank 0 at start
<br>
Rank 1 at start
<br>
[elias-p6-2022scm:2743] *** An error occurred in MPI_Recv
<br>
[elias-p6-2022scm:2743] *** reported by process  
<br>
[140733606985729,140256452018176]
<br>
[elias-p6-2022scm:2743] *** on communicator MPI_COMM_WORLD
<br>
[elias-p6-2022scm:2743] *** MPI_ERR_TYPE: invalid datatype
<br>
[elias-p6-2022scm:2743] *** MPI_ERRORS_ARE_FATAL (processes in this  
<br>
communicator will now abort,
<br>
[elias-p6-2022scm:2743] ***    and potentially your MPI job)
<br>
<p>Steps I use to reproduce this in Ubuntu:
<br>
<p>(1) Download openmpi-1.7.4.tar.gz
<br>
<p>(2) Configure like this:
<br>
./configure --enable-mpi-thread-multiple
<br>
<p>(3) make
<br>
<p>(4) Compile test program like this:
<br>
mpicc mpi-send-recv.c
<br>
<p>(5) Run like this:
<br>
mpirun -np 2 ./a.out
<br>
This gives the error above.
<br>
<p>Of course, in my actual application I will want to call  
<br>
MPI_Init_thread with MPI_THREAD_MULTIPLE instead of just MPI_Init, but  
<br>
that does not seem to matter for this error; the same error comes  
<br>
regardless of the way I call MPI_Init/MPI_Init_thread. So I just put  
<br>
MPI_Init in the test code above to make it as short as possible.
<br>
<p>Do you agree that this is a bug, or am I doing something wrong?
<br>
<p>Any ideas for workarounds to make things work with  
<br>
--enable-mpi-thread-multiple? (I do need threads, so skipping  
<br>
--enable-mpi-thread-multiple is probably not an option for me.)
<br>
<p>Best regards,
<br>
Elias
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23865.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>Previous message:</strong> <a href="23863.php">Ralph Castain: "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23865.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<li><strong>Reply:</strong> <a href="23865.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
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
