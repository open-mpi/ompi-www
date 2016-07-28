<?
$subject_val = "Re: [OMPI users] Why communication performance change with binding PEs?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 02:18:23 2016" -->
<!-- isoreceived="20160623061823" -->
<!-- sent="Thu, 23 Jun 2016 15:18:19 +0900" -->
<!-- isosent="20160623061819" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why communication performance change with binding PEs?" -->
<!-- id="2c881baf-1347-cbc4-03a5-549357a8cdb7_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CA+ssbKViuVJ8chTL3psCkhMsuZuGWSEBA-6znzyVqKg87C4yiA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why communication performance change with binding PEs?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-23 02:18:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29531.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>Previous message:</strong> <a href="29529.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>In reply to:</strong> <a href="29529.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29531.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>Reply:</strong> <a href="29531.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Java uses *many* threads, simply
<br>
<p>ls /proc/&lt;pid&gt;/tasks
<br>
<p>and you will be amazed at how many threads are used.
<br>
Here is my guess,
<br>
<p><p>from the point of view of a given MPI process :
<br>
<p>in case 1, the main thread and all the other threads do time sharing, so 
<br>
basically, when an other thread is working, the main thread is blocked.
<br>
<p>in case 2, some parallelism is possible if an other MPI task is sleeping 
<br>
: main thread is running, and an other thread is running on an other core
<br>
<p>in case 3, the main thread can move from on core to an other
<br>
=&gt; cache flush
<br>
=&gt; QPI access if used memory is no more local
<br>
so though there is more opportunity for parallelism, process migration 
<br>
can slow down everything
<br>
<p><p>bottom line, event with one thread, case 1 and case 2 are quite 
<br>
different because Java uses so many threads per process, so i am not so 
<br>
surprised with the difference in performance.
<br>
<p>if you have any chance, i suggest you write a similar program in C.
<br>
since only a few threads are use per process, i guess case 1 and case 2 
<br>
will become pretty close.
<br>
<p>i also suggest that for cases 2 and 3, you bind processes to a socket 
<br>
instead of no binding at all
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 6/23/2016 2:41 PM, Saliya Ekanayake wrote:
<br>
<span class="quotelev1">&gt; Thank you, Gilles for the quick response. The code comes from a 
</span><br>
<span class="quotelev1">&gt; clustering application, bu let me try to explain simply what the 
</span><br>
<span class="quotelev1">&gt; pattern is. It's a bit long than I expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program has the pattern BSP pattern with /compute()/ followed by 
</span><br>
<span class="quotelev1">&gt; collective /allreduce()/ And it does many iterations over these two.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each process is a Java process with just the main thread. However in 
</span><br>
<span class="quotelev1">&gt; Java the process and main thread have their own PIDs and act as two 
</span><br>
<span class="quotelev1">&gt; LWPs in Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, let's take two binding scenarios. For simplicity, I'll assume a 
</span><br>
<span class="quotelev1">&gt; node with 2 sockets each with 4-cores. The real one I ran has 2 
</span><br>
<span class="quotelev1">&gt; sockets with 12 cores each.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. *--map-by ppr:8:node:PE=1 --bind-to core* results in something like 
</span><br>
<span class="quotelev1">&gt; below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Inline image 3
</span><br>
<span class="quotelev1">&gt; where each process is bound to 1 core. The blue dots show the main 
</span><br>
<span class="quotelev1">&gt; thread in Java. It too is bound to the same core as its parent process 
</span><br>
<span class="quotelev1">&gt; by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. *--map-by ppr:8:node  --bind-to none * This is similar to 1, but 
</span><br>
<span class="quotelev1">&gt; now processes are not bound (or bound to all cores). However, from the 
</span><br>
<span class="quotelev1">&gt; program, we *explicitly bind its main thread to 1 core*. It gives 
</span><br>
<span class="quotelev1">&gt; something like below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Inline image 4
</span><br>
<span class="quotelev1">&gt; The results we got suggest approach 2 gives better communication 
</span><br>
<span class="quotelev1">&gt; performance than 1. The btl used is openib. Here's a graph showing the 
</span><br>
<span class="quotelev1">&gt; variation in timings. It shows for other cases that use more than 1 
</span><br>
<span class="quotelev1">&gt; thread to do the computation as well. In all patterns communication is 
</span><br>
<span class="quotelev1">&gt; done through the main thread only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is peculiar is the two points within the dotted circle. 
</span><br>
<span class="quotelev1">&gt; Intuitively they should overlap as it only has the main thread in each 
</span><br>
<span class="quotelev1">&gt; Java process and that main is bound to 1 core. The difference is how 
</span><br>
<span class="quotelev1">&gt; the parent process is bound with MPI. The red line is for *Case 
</span><br>
<span class="quotelev1">&gt; 1* above and the blue is for *Case 2*
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; The green line is when both parent process and threads are unbound.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Inline image 6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 23, 2016 at 12:36 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Can you please provide more details on your config, how test are
</span><br>
<span class="quotelev1">&gt;     performed and the results ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     to be fair, you should only compare cases in which mpi tasks are
</span><br>
<span class="quotelev1">&gt;     bound to the same sockets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     for example, if socket0 has core[0-7] and socket1 has core[8-15]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     it is fair to compare {task0,task1} bound on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     {0,8}, {[0-1],[8-9]}, {[0-7],[8-15]}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     but it is unfair to compare
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     {0,1} and {0,8} or {[0-7],[8-15]}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     since {0,1} does not involve traffic on the QPI, but {0,8} does.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     depending on the btl you are using, it might involve or not an
</span><br>
<span class="quotelev1">&gt;     other &quot;helper&quot; thread.
</span><br>
<span class="quotelev1">&gt;     if your task is bound on one core, and assuming there is no SMT,
</span><br>
<span class="quotelev1">&gt;     then the task and the helper do time sharing.
</span><br>
<span class="quotelev1">&gt;     but if the task is bound on more than one core, then the task and
</span><br>
<span class="quotelev1">&gt;     the helper run in parallel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 6/23/2016 1:21 PM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I am trying to understand this peculiar behavior where the
</span><br>
<span class="quotelev2">&gt;&gt;     communication time in OpenMPI changes depending on the number of
</span><br>
<span class="quotelev2">&gt;&gt;     process elements (cores) the process is bound to.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Is this expected?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;     saliya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt;&gt;     Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt;     School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt;&gt;     Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/06/29523.php">http://www.open-mpi.org/community/lists/users/2016/06/29523.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/06/29524.php">http://www.open-mpi.org/community/lists/users/2016/06/29524.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29529.php">http://www.open-mpi.org/community/lists/users/2016/06/29529.php</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29530/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-29530/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-29530/03-part" alt="picture">
<!-- attachment="03-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-29530/04-part" alt="picture">
<!-- attachment="04-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29531.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>Previous message:</strong> <a href="29529.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>In reply to:</strong> <a href="29529.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29531.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>Reply:</strong> <a href="29531.php">Saliya Ekanayake: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
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
