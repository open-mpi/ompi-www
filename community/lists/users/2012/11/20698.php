<?
$subject_val = "Re: [OMPI users] MPI_ERR_TRUNCATE: On Broadcast";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 10 00:58:38 2012" -->
<!-- isoreceived="20121110055838" -->
<!-- sent="Sat, 10 Nov 2012 13:58:33 +0800" -->
<!-- isosent="20121110055833" -->
<!-- name="Lim Jiew Meng" -->
<!-- email="jiewmeng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_TRUNCATE: On Broadcast" -->
<!-- id="CAOzCuSfB7tRguxDNoQyYGmEYe0=XGGzy5wjYLh0OZMaUYP3NeQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="23F694FB-0F63-423C-ABEC-18DCAA797805_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ERR_TRUNCATE: On Broadcast<br>
<strong>From:</strong> Lim Jiew Meng (<em>jiewmeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-10 00:58:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20699.php">Jeff Squyres: "[OMPI users] Fwd: [Mpi-forum] New MPI-3.0 standard in hardcover - the green book"</a>
<li><strong>Previous message:</strong> <a href="20697.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>In reply to:</strong> <a href="20686.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, it turns out, this was caused by an error earlier in the code,
<br>
resolved on StackOverflow
<br>
<a href="http://stackoverflow.com/questions/13290608/mpi-err-truncate-on-broadcast">http://stackoverflow.com/questions/13290608/mpi-err-truncate-on-broadcast</a>
<br>
<p><p>On Fri, Nov 9, 2012 at 9:20 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Offhand, your code looks fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send a small, self-contained example?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 8, 2012, at 9:42 AM, Lim Jiew Meng wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have an int I intend to broadcast from root (rank==(FIELD=0)).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int
</span><br>
<span class="quotelev2">&gt; &gt;  winner
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; if (rank == FIELD) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     winner
</span><br>
<span class="quotelev2">&gt; &gt; = something;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Barrier
</span><br>
<span class="quotelev2">&gt; &gt; (MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Bcast
</span><br>
<span class="quotelev2">&gt; &gt; (&amp;winner, 1, MPI_INT, FIELD, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Barrier
</span><br>
<span class="quotelev2">&gt; &gt; (MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt; if (rank != FIELD) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     cout
</span><br>
<span class="quotelev2">&gt; &gt; &lt;&lt; rank &lt;&lt; &quot; informed that winner is &quot; &lt;&lt; winner &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; But it appears I get
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [JM:6892] *** An
</span><br>
<span class="quotelev2">&gt; &gt;  error occurred in MPI_Bcast
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [JM:6892] ***
</span><br>
<span class="quotelev2">&gt; &gt;  on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [JM:6892] *** MPI_ERR_TRUNCATE:
</span><br>
<span class="quotelev2">&gt; &gt;  message truncated
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [JM:6892] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev2">&gt; &gt; Found that I can increase the buffer size in Bcast
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Bcast(&amp;winner, NUMPROCS, MPI_INT, FIELD, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt; Where NUMPROCS is number of running processes. (actually seems like I
</span><br>
<span class="quotelev1">&gt; just need it to be 2). Then it runs, but gives unexpected output ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1 informed that winner is 103
</span><br>
<span class="quotelev2">&gt; &gt; 2 informed that winner is 103
</span><br>
<span class="quotelev2">&gt; &gt; 3 informed that winner is 103
</span><br>
<span class="quotelev2">&gt; &gt; 5 informed that winner is 103
</span><br>
<span class="quotelev2">&gt; &gt; 4 informed that winner is 103
</span><br>
<span class="quotelev2">&gt; &gt; When I cout the winner, it should be -1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Whats wrong? In a simple try, it appears to work:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Comm_size(MPI_COMM_WORLD, &amp;numProcs);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       if (rank == 0) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               srand(time(NULL));
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               tmp = (rand() % 100) + 1;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               cout &lt;&lt; &quot;generated &quot; &lt;&lt; tmp &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Bcast(&amp;tmp, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       if (rank != 0) {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               cout &lt;&lt; rank &lt;&lt; &quot; received &quot; &lt;&lt; tmp &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20698/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20699.php">Jeff Squyres: "[OMPI users] Fwd: [Mpi-forum] New MPI-3.0 standard in hardcover - the green book"</a>
<li><strong>Previous message:</strong> <a href="20697.php">shiny knight: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>In reply to:</strong> <a href="20686.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
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
