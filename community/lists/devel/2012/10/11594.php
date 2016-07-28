<?
$subject_val = "[OMPI devel] Question about collective communication optimization for shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 15 00:13:30 2012" -->
<!-- isoreceived="20121015041330" -->
<!-- sent="Sun, 14 Oct 2012 22:13:25 -0600" -->
<!-- isosent="20121015041325" -->
<!-- name="Shigang Li" -->
<!-- email="shigangli.cs_at_[hidden]" -->
<!-- subject="[OMPI devel] Question about collective communication optimization for shared memory" -->
<!-- id="CAMC-aQYxAw0H=+TNYW5WYmG_nX2XfKXkPWZ8p0f6bmXWEv59aQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Question about collective communication optimization for shared memory<br>
<strong>From:</strong> Shigang Li (<em>shigangli.cs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-15 00:13:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11595.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Previous message:</strong> <a href="11593.php">George Bosilca: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Sir or Madam,
<br>
I'm running application on SMP clusters and want to get  good performance
<br>
for collective communications utilizing shared memory feature. I browse
<br>
official website of OpenMPI, and see that OpenMPI can automatically find
<br>
the best network according to the hardware architecture, for example in SMP
<br>
cluster, it choose shared memory to communication intra-node and use socket
<br>
for inter-node communication.
<br>
<p>Now I want to know does the optimization for collective communication is
<br>
built on top of point to point communication? Or it is separate part? Can
<br>
you bring me some details about the optimization for shared memory
<br>
collectives?
<br>
Best Regards,
<br>
Shigang Li.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11594/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11595.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<li><strong>Previous message:</strong> <a href="11593.php">George Bosilca: "Re: [OMPI devel] RFC: Remove deprecated functions from mca_base_param"</a>
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
