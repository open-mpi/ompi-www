<?
$subject_val = "[OMPI users] How to know if SM collective is being used?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 17:06:53 2016" -->
<!-- isoreceived="20160629210653" -->
<!-- sent="Wed, 29 Jun 2016 17:06:42 -0400" -->
<!-- isosent="20160629210642" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI users] How to know if SM collective is being used?" -->
<!-- id="CA+ssbKXkajZ4MkqY4VO3Nj9V3yCL-jERzLu0OMhegGWttTQsjQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How to know if SM collective is being used?<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-29 17:06:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29564.php">Saliya Ekanayake: "[OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Previous message:</strong> <a href="29562.php">Aurelien Bouteiller: "Re: [OMPI users] MPI Spawn functionality and core allocation questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I see in *mca_coll_sm_comm_query()* of *ompi/mca/coll/sm/coll_sm_module.c*
<br>
that al allreduce and bcast have shared memory implementations.
<br>
<p>Is there a way to know if this implementation is being used when running my
<br>
program that calls these collectives?
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29563/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29564.php">Saliya Ekanayake: "[OMPI users] The ompi/mca/cool/sm will not be used on multi-nodes?"</a>
<li><strong>Previous message:</strong> <a href="29562.php">Aurelien Bouteiller: "Re: [OMPI users] MPI Spawn functionality and core allocation questions"</a>
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
