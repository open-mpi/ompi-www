<?
$subject_val = "[OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 02:04:06 2016" -->
<!-- isoreceived="20160630060406" -->
<!-- sent="Thu, 30 Jun 2016 02:04:04 -0400" -->
<!-- isosent="20160630060404" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?" -->
<!-- id="CA+ssbKUHZoozqh_eQjvKT5z01ictsC4qtgBUkd=u3HjBBMrQ6A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-30 02:04:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29565.php">Gilles Gouaillardet: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Previous message:</strong> <a href="29563.php">Saliya Ekanayake: "[OMPI users] How to know if SM collective is being used?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29565.php">Gilles Gouaillardet: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Reply:</strong> <a href="29565.php">Gilles Gouaillardet: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Looking at the *ompi/mca/coll/sm/coll_sm_module.c* it seems this module
<br>
will be used only if the calling communicator solely groups processes
<br>
within a node. I've got two questions here.
<br>
<p>1. So is my understanding correct that for something like MPI_COMM_WORLD
<br>
where world is multiple processes within a node across many nodes, this
<br>
module will not be used?
<br>
<p>2. If 1, is correct then are there any shared memory optimizations that
<br>
happen when a collective like bcast  or allreduce is called, so that
<br>
communicating within a node is done efficiently through memory?
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29564/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29565.php">Gilles Gouaillardet: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Previous message:</strong> <a href="29563.php">Saliya Ekanayake: "[OMPI users] How to know if SM collective is being used?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29565.php">Gilles Gouaillardet: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Reply:</strong> <a href="29565.php">Gilles Gouaillardet: "Re: [OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
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
