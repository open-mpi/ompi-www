<?
$subject_val = "[OMPI users] MPI_Irecv does not receive all sends?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 16 20:34:39 2012" -->
<!-- isoreceived="20121117013439" -->
<!-- sent="Sat, 17 Nov 2012 09:34:34 +0800" -->
<!-- isosent="20121117013434" -->
<!-- name="Lim Jiew Meng" -->
<!-- email="jiewmeng_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Irecv does not receive all sends?" -->
<!-- id="CAOzCuScZ9dg=HPkJUhRXd_r8mX6mOCM+wg8hT+iVOWWMcr8GKw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Irecv does not receive all sends?<br>
<strong>From:</strong> Lim Jiew Meng (<em>jiewmeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-16 20:34:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20733.php">Ralph Castain: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>Previous message:</strong> <a href="20731.php">Brian Budge: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20737.php">George Bosilca: "Re: [OMPI users] MPI_Irecv does not receive all sends?"</a>
<li><strong>Reply:</strong> <a href="20737.php">George Bosilca: "Re: [OMPI users] MPI_Irecv does not receive all sends?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What I am trying to acheive in this simplified code is:
<br>
<p>&nbsp;&nbsp;&nbsp;- 2 types of processes (root, and children, ids/rank = 10 and 0-9
<br>
&nbsp;&nbsp;&nbsp;respectively)
<br>
&nbsp;&nbsp;&nbsp;- init:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- root will listen to children &quot;completed&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- children will listen to root notification when all has completed
<br>
&nbsp;&nbsp;&nbsp;- while there is no winner (not all done yet):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- children will have 20% chance they will be done (and notify root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;they are done)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- root will check that all are done
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- if all done: send notification to children of &quot;winner&quot;
<br>
<p>I have code like:
<br>
<p>int numprocs, id, arr[10], winner = -1;bool stop = false;
<br>
MPI_Request reqs[10], winnerNotification;
<br>
<p>MPI_Init(NULL, NULL);
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
<br>
MPI_Comm_rank(MPI_COMM_WORLD, &amp;id);
<br>
for (int half = 0; half &lt; 1; half++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (int round = 0; round &lt; 1; round++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (id == 10) { // root
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// keeps track of who has &quot;completed&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fill_n(arr, 10, -1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i &lt; 10; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;arr[i], 1, MPI_INT, i, 0, MPI_COMM_WORLD, &amp;reqs[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (id &lt; 10) { // children
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// listen to root of winner notification/indication to stop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;winner, 1, MPI_INT, 10, 1, MPI_COMM_WORLD,
<br>
&amp;winnerNotification);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (winner == -1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//cout &lt;&lt; id &lt;&lt; &quot; is in loop&quot; &lt;&lt; endl;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (id &lt; 10 &amp;&amp; !stop &amp;&amp; ((rand() % 10) + 1) &lt; 3) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// children has 20% chance to stop (finish work)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;id, 1, MPI_INT, 10, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; id &lt;&lt; &quot; sending to root&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stop = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (id == 10) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// root checks number of children completed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int numDone = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i &lt; 10; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (arr[i] &gt;= 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//cout &lt;&lt; &quot;root knows that &quot; &lt;&lt; i &lt;&lt; &quot; has
<br>
completed&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numDone++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;numDone = &quot; &lt;&lt; numDone &lt;&lt; endl;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// if all done, send notification to players to stop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (numDone == 10) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;winner = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i &lt; 10; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;winner, 1, MPI_INT, i, 1, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;root sent notification of winner&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}}
<br>
<p>MPI_Finalize();
<br>
<p>Output from debugging couts look like: problem seems to be root is not
<br>
receiving all childrens notification that they are completed?
<br>
<p>2 sending to root3 sending to root0 sending to root4 sending to root1
<br>
sending to root8 sending to root9 sending to root
<br>
numDone = 1
<br>
numDone = 1... // many numDone = 1, but why 1 only?7 sending to root...
<br>
<p>I thought perhaps I can't receive into an array: but I tried
<br>
<p>if (id == 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int x = 60;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;x, 1, MPI_INT, 0, 0, MPI_COMM_WORLD);} else if (id == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;arr[1], 1, MPI_INT, 1, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; id &lt;&lt; &quot; recieved &quot; &lt;&lt; arr[1] &lt;&lt; endl;}
<br>
<p>Which works.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20732/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20733.php">Ralph Castain: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<li><strong>Previous message:</strong> <a href="20731.php">Brian Budge: "Re: [OMPI users] valgrind slaves in singleton mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20737.php">George Bosilca: "Re: [OMPI users] MPI_Irecv does not receive all sends?"</a>
<li><strong>Reply:</strong> <a href="20737.php">George Bosilca: "Re: [OMPI users] MPI_Irecv does not receive all sends?"</a>
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
