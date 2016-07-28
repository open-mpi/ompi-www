<?
$subject_val = "Re: [OMPI users] MPI_Irecv does not receive all sends?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 17 12:47:41 2012" -->
<!-- isoreceived="20121117174741" -->
<!-- sent="Sat, 17 Nov 2012 12:47:15 -0500" -->
<!-- isosent="20121117174715" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Irecv does not receive all sends?" -->
<!-- id="2F88B7C0-DFF2-4B4A-B896-9B1500218D5F_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOzCuScZ9dg=HPkJUhRXd_r8mX6mOCM+wg8hT+iVOWWMcr8GKw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Irecv does not receive all sends?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-17 12:47:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20738.php">sri pramoda: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="20736.php">Brian Budge: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>In reply to:</strong> <a href="20732.php">Lim Jiew Meng: "[OMPI users] MPI_Irecv does not receive all sends?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Wait will do miracles in your example.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Nov 16, 2012, at 20:34 , Lim Jiew Meng &lt;jiewmeng_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What I am trying to acheive in this simplified code is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2 types of processes (root, and children, ids/rank = 10 and 0-9 respectively)
</span><br>
<span class="quotelev1">&gt; init:
</span><br>
<span class="quotelev1">&gt; root will listen to children &quot;completed&quot;
</span><br>
<span class="quotelev1">&gt; children will listen to root notification when all has completed
</span><br>
<span class="quotelev1">&gt; while there is no winner (not all done yet):
</span><br>
<span class="quotelev1">&gt; children will have 20% chance they will be done (and notify root they are done)
</span><br>
<span class="quotelev1">&gt; root will check that all are done
</span><br>
<span class="quotelev1">&gt; if all done: send notification to children of &quot;winner&quot;
</span><br>
<span class="quotelev1">&gt; I have code like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int numprocs, id, arr[10], winner = -1;
</span><br>
<span class="quotelev1">&gt; bool stop = false;
</span><br>
<span class="quotelev1">&gt; MPI_Request reqs[10], winnerNotification;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;id);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for (int half = 0; half &lt; 1; half++) {
</span><br>
<span class="quotelev1">&gt;     for (int round = 0; round &lt; 1; round++) {
</span><br>
<span class="quotelev1">&gt;         if (id == 10) { // root
</span><br>
<span class="quotelev1">&gt;             // keeps track of who has &quot;completed&quot;
</span><br>
<span class="quotelev1">&gt;             fill_n(arr, 10, -1);
</span><br>
<span class="quotelev1">&gt;             for (int i = 0; i &lt; 10; i++) {
</span><br>
<span class="quotelev1">&gt;                 MPI_Irecv(&amp;arr[i], 1, MPI_INT, i, 0, MPI_COMM_WORLD, &amp;reqs[i]);
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         } else if (id &lt; 10) { // children
</span><br>
<span class="quotelev1">&gt;             // listen to root of winner notification/indication to stop
</span><br>
<span class="quotelev1">&gt;             MPI_Irecv(&amp;winner, 1, MPI_INT, 10, 1, MPI_COMM_WORLD, &amp;winnerNotification);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         while (winner == -1) {
</span><br>
<span class="quotelev1">&gt;             //cout &lt;&lt; id &lt;&lt; &quot; is in loop&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             if (id &lt; 10 &amp;&amp; !stop &amp;&amp; ((rand() % 10) + 1) &lt; 3) { 
</span><br>
<span class="quotelev1">&gt;                 // children has 20% chance to stop (finish work)
</span><br>
<span class="quotelev1">&gt;                 MPI_Send(&amp;id, 1, MPI_INT, 10, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;                 cout &lt;&lt; id &lt;&lt; &quot; sending to root&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;                 stop = true;
</span><br>
<span class="quotelev1">&gt;             } else if (id == 10) {
</span><br>
<span class="quotelev1">&gt;                 // root checks number of children completed
</span><br>
<span class="quotelev1">&gt;                 int numDone = 0;
</span><br>
<span class="quotelev1">&gt;                 for (int i = 0; i &lt; 10; i++) {
</span><br>
<span class="quotelev1">&gt;                     if (arr[i] &gt;= 0) {
</span><br>
<span class="quotelev1">&gt;                         //cout &lt;&lt; &quot;root knows that &quot; &lt;&lt; i &lt;&lt; &quot; has completed&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;                         numDone++;
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;                 cout &lt;&lt; &quot;numDone = &quot; &lt;&lt; numDone &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 // if all done, send notification to players to stop
</span><br>
<span class="quotelev1">&gt;                 if (numDone == 10) {
</span><br>
<span class="quotelev1">&gt;                     winner = 1;
</span><br>
<span class="quotelev1">&gt;                     for (int i = 0; i &lt; 10; i++) {
</span><br>
<span class="quotelev1">&gt;                         MPI_Send(&amp;winner, 1, MPI_INT, i, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt;                     cout &lt;&lt; &quot;root sent notification of winner&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; Output from debugging couts look like: problem seems to be root is not receiving all childrens notification that they are completed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2 sending to root
</span><br>
<span class="quotelev1">&gt; 3 sending to root
</span><br>
<span class="quotelev1">&gt; 0 sending to root
</span><br>
<span class="quotelev1">&gt; 4 sending to root
</span><br>
<span class="quotelev1">&gt; 1 sending to root
</span><br>
<span class="quotelev1">&gt; 8 sending to root
</span><br>
<span class="quotelev1">&gt; 9 sending to root
</span><br>
<span class="quotelev1">&gt; numDone = 1
</span><br>
<span class="quotelev1">&gt; numDone = 1
</span><br>
<span class="quotelev1">&gt; ... // many numDone = 1, but why 1 only?
</span><br>
<span class="quotelev1">&gt; 7 sending to root
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; I thought perhaps I can't receive into an array: but I tried
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if (id == 1) {
</span><br>
<span class="quotelev1">&gt;     int x = 60;
</span><br>
<span class="quotelev1">&gt;     MPI_Send(&amp;x, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; } else if (id == 0) {
</span><br>
<span class="quotelev1">&gt;     MPI_Recv(&amp;arr[1], 1, MPI_INT, 1, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;     cout &lt;&lt; id &lt;&lt; &quot; recieved &quot; &lt;&lt; arr[1] &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; Which works.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20737/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20738.php">sri pramoda: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="20736.php">Brian Budge: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>In reply to:</strong> <a href="20732.php">Lim Jiew Meng: "[OMPI users] MPI_Irecv does not receive all sends?"</a>
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
