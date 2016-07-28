<?
$subject_val = "Re: [OMPI users] Programming Help needed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 18:34:17 2009" -->
<!-- isoreceived="20091106233417" -->
<!-- sent="Fri, 6 Nov 2009 18:34:07 -0500" -->
<!-- isosent="20091106233407" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Programming Help needed" -->
<!-- id="428810f20911061534k39446f15hbe11e9e6ffaceb45_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1257549436.6444.75.camel_at_alder.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Programming Help needed<br>
<strong>From:</strong> amjad ali (<em>amjad11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 18:34:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11099.php">Ralph Castain: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<li><strong>Previous message:</strong> <a href="11097.php">Tom Rosmond: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>In reply to:</strong> <a href="11097.php">Tom Rosmond: "Re: [OMPI users] Programming Help needed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Dear,
<br>
<p>Jonathan seems almost perfect; I percieve the same.
<br>
<p>On Fri, Nov 6, 2009 at 6:17 PM, Tom Rosmond &lt;rosmond_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; AMJAD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On your first question, the answer is probably, if everything else is
</span><br>
<span class="quotelev1">&gt; done correctly.  The first test is to not try to do the overlapping
</span><br>
<span class="quotelev1">&gt; communication and computation, but do them sequentially and make sure
</span><br>
<span class="quotelev1">&gt; the answers are correct. Have you done this test?  Debugging your
</span><br>
<span class="quotelev1">&gt; original approach will be challenging, and having a control solution
</span><br>
<span class="quotelev1">&gt; will be a big help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I followed the path of sequentional---then--parallel blocking----and then
<br>
parallel non-blocking.
<br>
My serial solution is the control solution.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On your second question, if I  understand it correctly, is that it is
</span><br>
<span class="quotelev1">&gt; always better to minimize the number of messages.  In problems like this
</span><br>
<span class="quotelev1">&gt; communication costs are dominated by latency, so bundling the data into
</span><br>
<span class="quotelev1">&gt; the fewest possible messages will ALWAYS be better.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Thats good.
<br>
But what pointed out by Jonathan:
<br>
<p>If you really do hide most of the communications cost with your non-blocking
<br>
communications, then it may not matter too much.
<br>
<p>is the point I want to be sure about.
<br>
<p><p><span class="quotelev1">&gt; T. Rosmond
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, 2009-11-06 at 17:44 -0500, amjad ali wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I need/request some help from those who have some experience in
</span><br>
<span class="quotelev2">&gt; &gt; debugging/profiling/tuning parallel scientific codes, specially for
</span><br>
<span class="quotelev2">&gt; &gt; PDEs/CFD.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have parallelized a Fortran CFD code to run on
</span><br>
<span class="quotelev2">&gt; &gt; Ethernet-based-Linux-Cluster. Regarding MPI communication what I do is
</span><br>
<span class="quotelev2">&gt; &gt; that:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Suppose that the grid/mesh is decomposed for n number of processors,
</span><br>
<span class="quotelev2">&gt; &gt; such that each processors has a number of elements that share their
</span><br>
<span class="quotelev2">&gt; &gt; side/face with different processors. What I do is that I start non
</span><br>
<span class="quotelev2">&gt; &gt; blocking MPI communication at the partition boundary faces (faces
</span><br>
<span class="quotelev2">&gt; &gt; shared between any two processors) , and then start computing values
</span><br>
<span class="quotelev2">&gt; &gt; on the internal/non-shared faces. When I complete this computation, I
</span><br>
<span class="quotelev2">&gt; &gt; put WAITALL to ensure MPI communication completion. Then I do
</span><br>
<span class="quotelev2">&gt; &gt; computation on the partition boundary faces (shared-ones). This way I
</span><br>
<span class="quotelev2">&gt; &gt; try to hide the communication behind computation. Is it correct?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; IMPORTANT: Secondly, if processor A shares 50 faces (on 50 or less
</span><br>
<span class="quotelev2">&gt; &gt; elements) with an another processor B then it sends/recvs 50 different
</span><br>
<span class="quotelev2">&gt; &gt; messages. So in general if a processors has X number of faces sharing
</span><br>
<span class="quotelev2">&gt; &gt; with any number of other processors it sends/recvs that much messages.
</span><br>
<span class="quotelev2">&gt; &gt; Is this way has &quot;very much reduced&quot; performance in comparison to the
</span><br>
<span class="quotelev2">&gt; &gt; possibility that processor A will send/recv a single-bundle message
</span><br>
<span class="quotelev2">&gt; &gt; (containg all 50-faces-data) to process B. Means that in general a
</span><br>
<span class="quotelev2">&gt; &gt; processor will only send/recv that much messages as the number of
</span><br>
<span class="quotelev2">&gt; &gt; processors neighbour to it.  It will send a single bundle/pack of
</span><br>
<span class="quotelev2">&gt; &gt; messages to each neighbouring processor.
</span><br>
<span class="quotelev2">&gt; &gt; Is their &quot;quite a much difference&quot; between these two approaches?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; THANK YOU VERY MUCH.
</span><br>
<span class="quotelev2">&gt; &gt; AMJAD.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11098/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11099.php">Ralph Castain: "Re: [OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<li><strong>Previous message:</strong> <a href="11097.php">Tom Rosmond: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>In reply to:</strong> <a href="11097.php">Tom Rosmond: "Re: [OMPI users] Programming Help needed"</a>
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
