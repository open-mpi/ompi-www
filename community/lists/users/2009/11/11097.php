<?
$subject_val = "Re: [OMPI users] Programming Help needed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 18:16:56 2009" -->
<!-- isoreceived="20091106231656" -->
<!-- sent="Fri, 06 Nov 2009 15:17:16 -0800" -->
<!-- isosent="20091106231716" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Programming Help needed" -->
<!-- id="1257549436.6444.75.camel_at_alder.reachone.com" -->
<!-- inreplyto="428810f20911061444u5349f043x84e42cc59671e3c3_at_mail.gmail.com" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 18:17:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11098.php">amjad ali: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>Previous message:</strong> <a href="11096.php">Jonathan Dursi: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>In reply to:</strong> <a href="11095.php">amjad ali: "[OMPI users] Programming Help needed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11098.php">amjad ali: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>Reply:</strong> <a href="11098.php">amjad ali: "Re: [OMPI users] Programming Help needed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
AMJAD
<br>
<p>On your first question, the answer is probably, if everything else is
<br>
done correctly.  The first test is to not try to do the overlapping
<br>
communication and computation, but do them sequentially and make sure
<br>
the answers are correct. Have you done this test?  Debugging your
<br>
original approach will be challenging, and having a control solution
<br>
will be a big help.
<br>
<p>On your second question, if I  understand it correctly, is that it is
<br>
always better to minimize the number of messages.  In problems like this
<br>
communication costs are dominated by latency, so bundling the data into
<br>
the fewest possible messages will ALWAYS be better.
<br>
<p>T. Rosmond
<br>
<p><p><p>On Fri, 2009-11-06 at 17:44 -0500, amjad ali wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need/request some help from those who have some experience in
</span><br>
<span class="quotelev1">&gt; debugging/profiling/tuning parallel scientific codes, specially for
</span><br>
<span class="quotelev1">&gt; PDEs/CFD.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have parallelized a Fortran CFD code to run on
</span><br>
<span class="quotelev1">&gt; Ethernet-based-Linux-Cluster. Regarding MPI communication what I do is
</span><br>
<span class="quotelev1">&gt; that:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Suppose that the grid/mesh is decomposed for n number of processors,
</span><br>
<span class="quotelev1">&gt; such that each processors has a number of elements that share their
</span><br>
<span class="quotelev1">&gt; side/face with different processors. What I do is that I start non
</span><br>
<span class="quotelev1">&gt; blocking MPI communication at the partition boundary faces (faces
</span><br>
<span class="quotelev1">&gt; shared between any two processors) , and then start computing values
</span><br>
<span class="quotelev1">&gt; on the internal/non-shared faces. When I complete this computation, I
</span><br>
<span class="quotelev1">&gt; put WAITALL to ensure MPI communication completion. Then I do
</span><br>
<span class="quotelev1">&gt; computation on the partition boundary faces (shared-ones). This way I
</span><br>
<span class="quotelev1">&gt; try to hide the communication behind computation. Is it correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMPORTANT: Secondly, if processor A shares 50 faces (on 50 or less
</span><br>
<span class="quotelev1">&gt; elements) with an another processor B then it sends/recvs 50 different
</span><br>
<span class="quotelev1">&gt; messages. So in general if a processors has X number of faces sharing
</span><br>
<span class="quotelev1">&gt; with any number of other processors it sends/recvs that much messages.
</span><br>
<span class="quotelev1">&gt; Is this way has &quot;very much reduced&quot; performance in comparison to the
</span><br>
<span class="quotelev1">&gt; possibility that processor A will send/recv a single-bundle message
</span><br>
<span class="quotelev1">&gt; (containg all 50-faces-data) to process B. Means that in general a
</span><br>
<span class="quotelev1">&gt; processor will only send/recv that much messages as the number of
</span><br>
<span class="quotelev1">&gt; processors neighbour to it.  It will send a single bundle/pack of
</span><br>
<span class="quotelev1">&gt; messages to each neighbouring processor.
</span><br>
<span class="quotelev1">&gt; Is their &quot;quite a much difference&quot; between these two approaches?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; THANK YOU VERY MUCH.
</span><br>
<span class="quotelev1">&gt; AMJAD.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11098.php">amjad ali: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>Previous message:</strong> <a href="11096.php">Jonathan Dursi: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>In reply to:</strong> <a href="11095.php">amjad ali: "[OMPI users] Programming Help needed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11098.php">amjad ali: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>Reply:</strong> <a href="11098.php">amjad ali: "Re: [OMPI users] Programming Help needed"</a>
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
