<?
$subject_val = "[OMPI users] Running on crashing nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 23 09:23:59 2010" -->
<!-- isoreceived="20100923132359" -->
<!-- sent="Thu, 23 Sep 2010 15:22:57 +0200" -->
<!-- isosent="20100923132257" -->
<!-- name="Andrei Fokau" -->
<!-- email="andrei.fokau_at_[hidden]" -->
<!-- subject="[OMPI users] Running on crashing nodes" -->
<!-- id="AANLkTin8USh6L75pQ-qx2+czivJwH38xyFeydyX==1fs_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=8d-tSuviPrO8e_6YwNm17O4H+EtSMBOzLU6W0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Running on crashing nodes<br>
<strong>From:</strong> Andrei Fokau (<em>andrei.fokau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-23 09:22:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14290.php">Lewis, Ambrose J.: "[OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Previous message:</strong> <a href="14288.php">Gabriele Fatigati: "[OMPI users] Question about Asynchronous collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14307.php">Ralph Castain: "Re: [OMPI users] Running on crashing nodes"</a>
<li><strong>Reply:</strong> <a href="14307.php">Ralph Castain: "Re: [OMPI users] Running on crashing nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear users,
<br>
<p>Our cluster has a number of nodes which have high probability to crash, so
<br>
it happens quite often that calculations stop due to one node getting down.
<br>
May be you know if it is possible to block the crashed nodes during run-time
<br>
when running with OpenMPI? I am asking about principal possibility to
<br>
program such behavior. Does OpenMPI allow such dynamic checking? The scheme
<br>
I am curious about is the following:
<br>
<p>1. A code starts its tasks via mpirun on several nodes
<br>
2. At some moment one node gets down
<br>
3. The code realizes that the node is down (the results are lost) and
<br>
excludes it from the list of nodes to run its tasks on
<br>
4. At later moment the user restarts the crashed node
<br>
5. The code notices that the node is up again, and puts it back to the list
<br>
of active nodes
<br>
<p><p>Regards,
<br>
Andrei
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14289/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14290.php">Lewis, Ambrose J.: "[OMPI users] &quot;self scheduled&quot; work &amp; mpi receive???"</a>
<li><strong>Previous message:</strong> <a href="14288.php">Gabriele Fatigati: "[OMPI users] Question about Asynchronous collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14307.php">Ralph Castain: "Re: [OMPI users] Running on crashing nodes"</a>
<li><strong>Reply:</strong> <a href="14307.php">Ralph Castain: "Re: [OMPI users] Running on crashing nodes"</a>
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
