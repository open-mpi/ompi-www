<?
$subject_val = "Re: [OMPI users] Why communication performance change with binding PEs?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 01:41:09 2016" -->
<!-- isoreceived="20160623054109" -->
<!-- sent="Thu, 23 Jun 2016 01:41:06 -0400" -->
<!-- isosent="20160623054106" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why communication performance change with binding PEs?" -->
<!-- id="CA+ssbKViuVJ8chTL3psCkhMsuZuGWSEBA-6znzyVqKg87C4yiA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9a80c3a2-3b51-e3eb-ae69-9a99e30719a4_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-06-23 01:41:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29530.php">Gilles Gouaillardet: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>Previous message:</strong> <a href="29528.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Libraries"</a>
<li><strong>In reply to:</strong> <a href="29524.php">Gilles Gouaillardet: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29530.php">Gilles Gouaillardet: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>Reply:</strong> <a href="29530.php">Gilles Gouaillardet: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Gilles for the quick response. The code comes from a clustering
<br>
application, bu let me try to explain simply what the pattern is. It's a
<br>
bit long than I expected.
<br>
<p><p><p>The program has the pattern BSP pattern with *compute()* followed by
<br>
collective *allreduce()* And it does many iterations over these two.
<br>
<p>Each process is a Java process with just the main thread. However in Java
<br>
the process and main thread have their own PIDs and act as two LWPs in
<br>
Linux.
<br>
<p>Now, let's take two binding scenarios. For simplicity, I'll assume a node
<br>
with 2 sockets each with 4-cores. The real one I ran has 2 sockets with 12
<br>
cores each.
<br>
<p>1. *--map-by ppr:8:node:PE=1 --bind-to core* results in something like
<br>
below.
<br>
<p>[image: Inline image 3]
<br>
where each process is bound to 1 core. The blue dots show the main thread
<br>
in Java. It too is bound to the same core as its parent process by default.
<br>
<p>2. *--map-by ppr:8:node  --bind-to none * This is similar to 1, but now
<br>
processes are not bound (or bound to all cores). However, from the program,
<br>
we *explicitly bind its main thread to 1 core*. It gives something like
<br>
below.
<br>
<p>[image: Inline image 4]
<br>
The results we got suggest approach 2 gives better communication
<br>
performance than 1. The btl used is openib. Here's a graph showing the
<br>
variation in timings. It shows for other cases that use more than 1 thread
<br>
to do the computation as well. In all patterns communication is done
<br>
through the main thread only.
<br>
<p>What is peculiar is the two points within the dotted circle. Intuitively
<br>
they should overlap as it only has the main thread in each Java process and
<br>
that main is bound to 1 core. The difference is how the parent process is
<br>
bound with MPI. The red line is for *Case 1* above and the blue is for *Case
<br>
2*
<br>
<p>The green line is when both parent process and threads are unbound.
<br>
<p><p>[image: Inline image 6]
<br>
<p><p><p><p><p><p><p>On Thu, Jun 23, 2016 at 12:36 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Can you please provide more details on your config, how test are performed
</span><br>
<span class="quotelev1">&gt; and the results ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to be fair, you should only compare cases in which mpi tasks are bound to
</span><br>
<span class="quotelev1">&gt; the same sockets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for example, if socket0 has core[0-7] and socket1 has core[8-15]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it is fair to compare {task0,task1} bound on
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {0,8}, {[0-1],[8-9]}, {[0-7],[8-15]}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but it is unfair to compare
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {0,1} and {0,8} or {[0-7],[8-15]}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; since {0,1} does not involve traffic on the QPI, but {0,8} does.
</span><br>
<span class="quotelev1">&gt; depending on the btl you are using, it might involve or not an other
</span><br>
<span class="quotelev1">&gt; &quot;helper&quot; thread.
</span><br>
<span class="quotelev1">&gt; if your task is bound on one core, and assuming there is no SMT, then the
</span><br>
<span class="quotelev1">&gt; task and the helper do time sharing.
</span><br>
<span class="quotelev1">&gt; but if the task is bound on more than one core, then the task and the
</span><br>
<span class="quotelev1">&gt; helper run in parallel.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; On 6/23/2016 1:21 PM, Saliya Ekanayake wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to understand this peculiar behavior where the communication
</span><br>
<span class="quotelev1">&gt; time in OpenMPI changes depending on the number of process elements (cores)
</span><br>
<span class="quotelev1">&gt; the process is bound to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this expected?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; saliya
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29523.php">http://www.open-mpi.org/community/lists/users/2016/06/29523.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29524.php">http://www.open-mpi.org/community/lists/users/2016/06/29524.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington



</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29529/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-29529/image.png" alt="image.png">
<!-- attachment="image.png" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-29529/03-image.png" alt="image.png">
<!-- attachment="03-image.png" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-29529/04-image.png" alt="image.png">
<!-- attachment="04-image.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29530.php">Gilles Gouaillardet: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>Previous message:</strong> <a href="29528.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared Libraries"</a>
<li><strong>In reply to:</strong> <a href="29524.php">Gilles Gouaillardet: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29530.php">Gilles Gouaillardet: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
<li><strong>Reply:</strong> <a href="29530.php">Gilles Gouaillardet: "Re: [OMPI users] Why communication performance change with binding PEs?"</a>
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
