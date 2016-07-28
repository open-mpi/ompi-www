<?
$subject_val = "Re: [OMPI users] MPI_ERR_TRUNCATE: On Broadcast";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 08:20:05 2012" -->
<!-- isoreceived="20121109132005" -->
<!-- sent="Fri, 9 Nov 2012 08:20:00 -0500" -->
<!-- isosent="20121109132000" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_TRUNCATE: On Broadcast" -->
<!-- id="23F694FB-0F63-423C-ABEC-18DCAA797805_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOzCuSffYXaWUEDsHR-Muq40eVg7dS6dahJb2G+5U7RDdE7m5Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-09 08:20:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20687.php">Jeff Squyres: "[OMPI users] Open MPI @SC next week"</a>
<li><strong>Previous message:</strong> <a href="20685.php">Jeff Squyres: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>In reply to:</strong> <a href="20667.php">Lim Jiew Meng: "[OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20698.php">Lim Jiew Meng: "Re: [OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
<li><strong>Reply:</strong> <a href="20698.php">Lim Jiew Meng: "Re: [OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Offhand, your code looks fine.
<br>
<p>Can you send a small, self-contained example?
<br>
<p><p>On Nov 8, 2012, at 9:42 AM, Lim Jiew Meng wrote:
<br>
<p><span class="quotelev1">&gt; I have an int I intend to broadcast from root (rank==(FIELD=0)).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt;  winner
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if (rank == FIELD) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     winner 
</span><br>
<span class="quotelev1">&gt; = something;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Barrier
</span><br>
<span class="quotelev1">&gt; (MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Bcast
</span><br>
<span class="quotelev1">&gt; (&amp;winner, 1, MPI_INT, FIELD, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Barrier
</span><br>
<span class="quotelev1">&gt; (MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; if (rank != FIELD) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     cout 
</span><br>
<span class="quotelev1">&gt; &lt;&lt; rank &lt;&lt; &quot; informed that winner is &quot; &lt;&lt; winner &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; But it appears I get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [JM:6892] *** An
</span><br>
<span class="quotelev1">&gt;  error occurred in MPI_Bcast
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [JM:6892] ***
</span><br>
<span class="quotelev1">&gt;  on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [JM:6892] *** MPI_ERR_TRUNCATE:
</span><br>
<span class="quotelev1">&gt;  message truncated
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [JM:6892] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; Found that I can increase the buffer size in Bcast
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Bcast(&amp;winner, NUMPROCS, MPI_INT, FIELD, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; Where NUMPROCS is number of running processes. (actually seems like I just need it to be 2). Then it runs, but gives unexpected output ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1 informed that winner is 103
</span><br>
<span class="quotelev1">&gt; 2 informed that winner is 103
</span><br>
<span class="quotelev1">&gt; 3 informed that winner is 103
</span><br>
<span class="quotelev1">&gt; 5 informed that winner is 103
</span><br>
<span class="quotelev1">&gt; 4 informed that winner is 103
</span><br>
<span class="quotelev1">&gt; When I cout the winner, it should be -1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Whats wrong? In a simple try, it appears to work: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_size(MPI_COMM_WORLD, &amp;numProcs);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	if (rank == 0) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		srand(time(NULL));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		tmp = (rand() % 100) + 1;	
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		cout &lt;&lt; &quot;generated &quot; &lt;&lt; tmp &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Bcast(&amp;tmp, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	if (rank != 0) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		cout &lt;&lt; rank &lt;&lt; &quot; received &quot; &lt;&lt; tmp &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	}
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20687.php">Jeff Squyres: "[OMPI users] Open MPI @SC next week"</a>
<li><strong>Previous message:</strong> <a href="20685.php">Jeff Squyres: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>In reply to:</strong> <a href="20667.php">Lim Jiew Meng: "[OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20698.php">Lim Jiew Meng: "Re: [OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
<li><strong>Reply:</strong> <a href="20698.php">Lim Jiew Meng: "Re: [OMPI users] MPI_ERR_TRUNCATE: On Broadcast"</a>
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
