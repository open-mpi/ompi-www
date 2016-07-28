<?
$subject_val = "[OMPI devel] question about Open MPI collectives on shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 17 10:58:00 2012" -->
<!-- isoreceived="20121017145800" -->
<!-- sent="Wed, 17 Oct 2012 08:57:55 -0600" -->
<!-- isosent="20121017145755" -->
<!-- name="Shigang Li" -->
<!-- email="shigangli.cs_at_[hidden]" -->
<!-- subject="[OMPI devel] question about Open MPI collectives on shared memory" -->
<!-- id="CAMC-aQZC8A7LuibbhL-snLD6wvmPr1WmWJdH4e2Q_UawpRP5UQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] question about Open MPI collectives on shared memory<br>
<strong>From:</strong> Shigang Li (<em>shigangli.cs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-17 10:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11602.php">Jeff Squyres: "[OMPI devel] 1.6.3rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="11600.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developers,
<br>
<p>I'm a graduate student and recently test some minibenchmarks using Open MPI
<br>
library on Xeon X5650 cluster. From the website of Open MPI, I know that
<br>
Open MPI can use
<br>
<p>*sm BTL* to transfer data with high bandwidth via shared memory. My
<br>
question is that what about  Open MPI collectives on shared memory? Were
<br>
they implemented and optimized on top of point-to-point communication or
<br>
utilizing shared memory separately?
<br>
<p><p>Best Regards,
<br>
<p>Shigang Li.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11601/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11602.php">Jeff Squyres: "[OMPI devel] 1.6.3rc1 posted"</a>
<li><strong>Previous message:</strong> <a href="11600.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
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
