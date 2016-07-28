<?
$subject_val = "[OMPI users] MPI_ERR_TRUNCATE: On Broadcast";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 09:42:29 2012" -->
<!-- isoreceived="20121108144229" -->
<!-- sent="Thu, 8 Nov 2012 22:42:25 +0800" -->
<!-- isosent="20121108144225" -->
<!-- name="Lim Jiew Meng" -->
<!-- email="jiewmeng_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_ERR_TRUNCATE: On Broadcast" -->
<!-- id="CAOzCuSffYXaWUEDsHR-Muq40eVg7dS6dahJb2G+5U7RDdE7m5Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_ERR_TRUNCATE: On Broadcast<br>
<strong>From:</strong> Lim Jiew Meng (<em>jiewmeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-08 09:42:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20668.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20666.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20686.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
<li><strong>Reply:</strong> <a href="20686.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have an int I intend to broadcast from root (rank==(FIELD=0)).
<br>
<p>int winner
<br>
if (rank == FIELD) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;winner = something;}
<br>
<p>MPI_Barrier(MPI_COMM_WORLD);
<br>
MPI_Bcast(&amp;winner, 1, MPI_INT, FIELD, MPI_COMM_WORLD);
<br>
MPI_Barrier(MPI_COMM_WORLD);if (rank != FIELD) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; rank &lt;&lt; &quot; informed that winner is &quot; &lt;&lt; winner &lt;&lt; endl;}
<br>
<p>But it appears I get
<br>
<p>[JM:6892] *** An error occurred in MPI_Bcast[JM:6892] *** on
<br>
communicator MPI_COMM_WORLD[JM:6892] *** MPI_ERR_TRUNCATE: message
<br>
truncated[JM:6892] *** MPI_ERRORS_ARE_FATAL: your MPI job will now
<br>
abort
<br>
<p>Found that I can increase the buffer size in Bcast
<br>
<p>MPI_Bcast(&amp;winner, NUMPROCS, MPI_INT, FIELD, MPI_COMM_WORLD);
<br>
<p>Where NUMPROCS is number of running processes. (actually seems like I just
<br>
need it to be 2). Then it runs, but gives unexpected output ...
<br>
<p>1 informed that winner is 1032 informed that winner is 1033 informed
<br>
that winner is 1035 informed that winner is 1034 informed that winner
<br>
is 103
<br>
<p>When I cout the winner, it should be -1
<br>
<p>Whats wrong? In a simple try, it appears to work:
<br>
<p>MPI_Init(NULL, NULL);
<br>
<p>MPI_Comm_size(MPI_COMM_WORLD, &amp;numProcs);
<br>
<p>MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p><p>if (rank == 0) {
<br>
<p>srand(time(NULL));
<br>
<p>tmp = (rand() % 100) + 1;
<br>
<p>cout &lt;&lt; &quot;generated &quot; &lt;&lt; tmp &lt;&lt; endl;
<br>
<p>}
<br>
<p><p>MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>MPI_Bcast(&amp;tmp, 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
<p>MPI_Barrier(MPI_COMM_WORLD);
<br>
<p><p>if (rank != 0) {
<br>
<p>cout &lt;&lt; rank &lt;&lt; &quot; received &quot; &lt;&lt; tmp &lt;&lt; endl;
<br>
<p>}
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20667/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20668.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20666.php">Shamis, Pavel: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20686.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
<li><strong>Reply:</strong> <a href="20686.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
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
