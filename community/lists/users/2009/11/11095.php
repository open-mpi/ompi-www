<?
$subject_val = "[OMPI users] Programming Help needed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 17:44:45 2009" -->
<!-- isoreceived="20091106224445" -->
<!-- sent="Fri, 6 Nov 2009 17:44:41 -0500" -->
<!-- isosent="20091106224441" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="[OMPI users] Programming Help needed" -->
<!-- id="428810f20911061444u5349f043x84e42cc59671e3c3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="428810f20911061443r456e04ccu81e80cd8eb51eab4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Programming Help needed<br>
<strong>From:</strong> amjad ali (<em>amjad11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 17:44:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11096.php">Jonathan Dursi: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>Previous message:</strong> <a href="11094.php">qing.pang: "Re: [OMPI users] mpirun example program fail on multiple nodes- unable to launch specified application on client node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11096.php">Jonathan Dursi: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>Reply:</strong> <a href="11096.php">Jonathan Dursi: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>Reply:</strong> <a href="11097.php">Tom Rosmond: "Re: [OMPI users] Programming Help needed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I need/request some help from those who have some experience in
<br>
debugging/profiling/tuning parallel scientific codes, specially for
<br>
PDEs/CFD.
<br>
<p>I have parallelized a Fortran CFD code to run on
<br>
Ethernet-based-Linux-Cluster. Regarding MPI communication what I do is that:
<br>
<p>Suppose that the grid/mesh is decomposed for n number of processors, such
<br>
that each processors has a number of elements that share their side/face
<br>
with different processors. What I do is that I start non blocking MPI
<br>
communication at the partition boundary faces (faces shared between any two
<br>
processors) , and then start computing values on the internal/non-shared
<br>
faces. When I complete this computation, I put WAITALL to ensure MPI
<br>
communication completion. Then I do computation on the partition boundary
<br>
faces (shared-ones). This way I try to hide the communication behind
<br>
computation. Is it correct?
<br>
<p>IMPORTANT: Secondly, if processor A shares 50 faces (on 50 or less elements)
<br>
with an another processor B then it sends/recvs 50 different messages. So in
<br>
general if a processors has X number of faces sharing with any number of
<br>
other processors it sends/recvs that much messages. Is this way has &quot;very
<br>
much reduced&quot; performance in comparison to the possibility that processor A
<br>
will send/recv a single-bundle message (containg all 50-faces-data) to
<br>
process B. Means that in general a processor will only send/recv that much
<br>
messages as the number of processors neighbour to it.  It will send a single
<br>
bundle/pack of messages to each neighbouring processor.
<br>
Is their &quot;quite a much difference&quot; between these two approaches?
<br>
<p>THANK YOU VERY MUCH.
<br>
AMJAD.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11095/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11096.php">Jonathan Dursi: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>Previous message:</strong> <a href="11094.php">qing.pang: "Re: [OMPI users] mpirun example program fail on multiple nodes- unable to launch specified application on client node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11096.php">Jonathan Dursi: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>Reply:</strong> <a href="11096.php">Jonathan Dursi: "Re: [OMPI users] Programming Help needed"</a>
<li><strong>Reply:</strong> <a href="11097.php">Tom Rosmond: "Re: [OMPI users] Programming Help needed"</a>
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
