<?
$subject_val = "Re: [OMPI users] Why communication performance change with binding PEs?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 08:20:17 2016" -->
<!-- isoreceived="20160623122017" -->
<!-- sent="Thu, 23 Jun 2016 08:20:14 -0400" -->
<!-- isosent="20160623122014" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why communication performance change with binding PEs?" -->
<!-- id="CA+ssbKUH9Jbm12WtQFe5tfpTUjSqG-Qc=Bk5G7UjKV3fyePrFw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2c881baf-1347-cbc4-03a5-549357a8cdb7_at_rist.or.jp" -->
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
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-23 08:20:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29532.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why communication performance change with binding	PEs?"</a>
<li><strong>Previous message:</strong> <a href="29530.php">Gilles Gouaillardet: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>In reply to:</strong> <a href="29530.php">Gilles Gouaillardet: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29532.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why communication performance change with binding	PEs?"</a>
<li><strong>Reply:</strong> <a href="29532.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why communication performance change with binding	PEs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, this is really helpful. Yes, the other bookkeeping threads of
<br>
Java were what I worried too.
<br>
<p>I think I can extract a part to make a  c program to check.
<br>
<p>I've got a quick question. Besides theses time sharing constraints, does
<br>
number of cores has any significance to MPI's communication decisions?
<br>
On Jun 23, 2016 2:18 AM, &quot;Gilles Gouaillardet&quot; &lt;gilles_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Java uses *many* threads, simply
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ls /proc/&lt;pid&gt;/tasks
</span><br>
<span class="quotelev1">&gt; and you will be amazed at how many threads are used.
</span><br>
<span class="quotelev1">&gt; Here is my guess,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from the point of view of a given MPI process :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in case 1, the main thread and all the other threads do time sharing, so
</span><br>
<span class="quotelev1">&gt; basically, when an other thread is working, the main thread is blocked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in case 2, some parallelism is possible if an other MPI task is sleeping :
</span><br>
<span class="quotelev1">&gt; main thread is running, and an other thread is running on an other core
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in case 3, the main thread can move from on core to an other
</span><br>
<span class="quotelev1">&gt; =&gt; cache flush
</span><br>
<span class="quotelev1">&gt; =&gt; QPI access if used memory is no more local
</span><br>
<span class="quotelev1">&gt; so though there is more opportunity for parallelism, process migration can
</span><br>
<span class="quotelev1">&gt; slow down everything
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bottom line, event with one thread, case 1 and case 2 are quite different
</span><br>
<span class="quotelev1">&gt; because Java uses so many threads per process, so i am not so surprised
</span><br>
<span class="quotelev1">&gt; with the difference in performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if you have any chance, i suggest you write a similar program in C.
</span><br>
<span class="quotelev1">&gt; since only a few threads are use per process, i guess case 1 and case 2
</span><br>
<span class="quotelev1">&gt; will become pretty close.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i also suggest that for cases 2 and 3, you bind processes to a socket
</span><br>
<span class="quotelev1">&gt; instead of no binding at all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/23/2016 2:41 PM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you, Gilles for the quick response. The code comes from a clustering
</span><br>
<span class="quotelev1">&gt; application, bu let me try to explain simply what the pattern is. It's a
</span><br>
<span class="quotelev1">&gt; bit long than I expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program has the pattern BSP pattern with *compute()* followed by
</span><br>
<span class="quotelev1">&gt; collective *allreduce()* And it does many iterations over these two.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each process is a Java process with just the main thread. However in Java
</span><br>
<span class="quotelev1">&gt; the process and main thread have their own PIDs and act as two LWPs in
</span><br>
<span class="quotelev1">&gt; Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, let's take two binding scenarios. For simplicity, I'll assume a node
</span><br>
<span class="quotelev1">&gt; with 2 sockets each with 4-cores. The real one I ran has 2 sockets with 12
</span><br>
<span class="quotelev1">&gt; cores each.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. *--map-by ppr:8:node:PE=1 --bind-to core* results in something like
</span><br>
<span class="quotelev1">&gt; below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [image: Inline image 3]
</span><br>
<span class="quotelev1">&gt; where each process is bound to 1 core. The blue dots show the main thread
</span><br>
<span class="quotelev1">&gt; in Java. It too is bound to the same core as its parent process by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. *--map-by ppr:8:node  --bind-to none * This is similar to 1, but now
</span><br>
<span class="quotelev1">&gt; processes are not bound (or bound to all cores). However, from the program,
</span><br>
<span class="quotelev1">&gt; we *explicitly bind its main thread to 1 core*. It gives something like
</span><br>
<span class="quotelev1">&gt; below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [image: Inline image 4]
</span><br>
<span class="quotelev1">&gt; The results we got suggest approach 2 gives better communication
</span><br>
<span class="quotelev1">&gt; performance than 1. The btl used is openib. Here's a graph showing the
</span><br>
<span class="quotelev1">&gt; variation in timings. It shows for other cases that use more than 1 thread
</span><br>
<span class="quotelev1">&gt; to do the computation as well. In all patterns communication is done
</span><br>
<span class="quotelev1">&gt; through the main thread only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is peculiar is the two points within the dotted circle. Intuitively
</span><br>
<span class="quotelev1">&gt; they should overlap as it only has the main thread in each Java process and
</span><br>
<span class="quotelev1">&gt; that main is bound to 1 core. The difference is how the parent process is
</span><br>
<span class="quotelev1">&gt; bound with MPI. The red line is for *Case 1* above and the blue is for *Case
</span><br>
<span class="quotelev1">&gt; 2*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The green line is when both parent process and threads are unbound.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [image: Inline image 6]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 23, 2016 at 12:36 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you please provide more details on your config, how test are
</span><br>
<span class="quotelev2">&gt;&gt; performed and the results ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to be fair, you should only compare cases in which mpi tasks are bound to
</span><br>
<span class="quotelev2">&gt;&gt; the same sockets.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for example, if socket0 has core[0-7] and socket1 has core[8-15]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it is fair to compare {task0,task1} bound on
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {0,8}, {[0-1],[8-9]}, {[0-7],[8-15]}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but it is unfair to compare
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {0,1} and {0,8} or {[0-7],[8-15]}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; since {0,1} does not involve traffic on the QPI, but {0,8} does.
</span><br>
<span class="quotelev2">&gt;&gt; depending on the btl you are using, it might involve or not an other
</span><br>
<span class="quotelev2">&gt;&gt; &quot;helper&quot; thread.
</span><br>
<span class="quotelev2">&gt;&gt; if your task is bound on one core, and assuming there is no SMT, then the
</span><br>
<span class="quotelev2">&gt;&gt; task and the helper do time sharing.
</span><br>
<span class="quotelev2">&gt;&gt; but if the task is bound on more than one core, then the task and the
</span><br>
<span class="quotelev2">&gt;&gt; helper run in parallel.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 6/23/2016 1:21 PM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to understand this peculiar behavior where the communication
</span><br>
<span class="quotelev2">&gt;&gt; time in OpenMPI changes depending on the number of process elements (cores)
</span><br>
<span class="quotelev2">&gt;&gt; the process is bound to.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this expected?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; saliya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29523.php">http://www.open-mpi.org/community/lists/users/2016/06/29523.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29524.php">http://www.open-mpi.org/community/lists/users/2016/06/29524.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29529.php">http://www.open-mpi.org/community/lists/users/2016/06/29529.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29530.php">http://www.open-mpi.org/community/lists/users/2016/06/29530.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29531/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-29531/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-29531/03-part" alt="picture">
<!-- attachment="03-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-29531/04-part" alt="picture">
<!-- attachment="04-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29532.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why communication performance change with binding	PEs?"</a>
<li><strong>Previous message:</strong> <a href="29530.php">Gilles Gouaillardet: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>In reply to:</strong> <a href="29530.php">Gilles Gouaillardet: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29532.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why communication performance change with binding	PEs?"</a>
<li><strong>Reply:</strong> <a href="29532.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why communication performance change with binding	PEs?"</a>
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
