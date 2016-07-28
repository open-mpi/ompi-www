<?
$subject_val = "[OMPI users] Parallel Backtracking in MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 28 23:04:41 2016" -->
<!-- isoreceived="20160629030441" -->
<!-- sent="Tue, 28 Jun 2016 23:04:37 -0400" -->
<!-- isosent="20160629030437" -->
<!-- name="Vega, Joshua" -->
<!-- email="jsv28_at_[hidden]" -->
<!-- subject="[OMPI users] Parallel Backtracking in MPI" -->
<!-- id="CAHpxMQChdHA8b=fVR8zLV4pUuUAsB6tsZzyqu-W+ahtFBjThtA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Parallel Backtracking in MPI<br>
<strong>From:</strong> Vega, Joshua (<em>jsv28_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-28 23:04:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29556.php">Saliya Ekanayake: "[OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Previous message:</strong> <a href="29554.php">Jeff Squyres (jsquyres): "[OMPI users] Open question: do you use Open MPI mirror web sites?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm currently working on a project that utilizes MPI in order to distribute
<br>
the calculating of a game tree across multiple MPI nodes. In order to do
<br>
this, we require the use of a backtracking algorithm. We've yet to find any
<br>
that support the parallelism of MPI and are wondering if there exists any
<br>
before we look towards implementing our own.
<br>
<p>In essence, our code does the following:
<br>
<p>&nbsp;&nbsp;RecursiveCall(GameTreeNode)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Create a set, S, of GameTreeNodes based on GameTreeNode (i.e. expand
<br>
the game tree)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;For each GameTreeNode, N, in S
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Find an idle processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Execute RecursiveCall(N) on the selected processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;End
<br>
&nbsp;&nbsp;&nbsp;&nbsp;If there are no idle processors
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do calculation on current processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;End
<br>
&nbsp;&nbsp;End
<br>
<p>We've reviewed &quot;DIB - A Distributed Implementation of Backtracking&quot;
<br>
by Raphael Finkel &amp; Udi Manber, but that paper uses BSD sockets and we
<br>
couldn't easily see a way to reimplement it within MPI. We are wondering if
<br>
there exists a similar backtracking method that is already MPI-compatible.
<br>
<p>Thanks.
<br>
<p>Cheers,
<br>
<p>Josh Vega
<br>
Computer Science, B.S., 2019
<br>
New Jersey Institute of Technology
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29555/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29556.php">Saliya Ekanayake: "[OMPI users] OpenMP explicit thread affinity with MPI"</a>
<li><strong>Previous message:</strong> <a href="29554.php">Jeff Squyres (jsquyres): "[OMPI users] Open question: do you use Open MPI mirror web sites?"</a>
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
