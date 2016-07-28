<?
$subject_val = "[OMPI users] MPI_SCAN";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 15 23:27:47 2012" -->
<!-- isoreceived="20120516032747" -->
<!-- sent="Wed, 16 May 2012 11:27:43 +0800" -->
<!-- isosent="20120516032743" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_SCAN" -->
<!-- id="CAFAE9jhzY06F+U2dUJRaJmjfQDyTigLB8v6VtX+RraGnryhDVQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_SCAN<br>
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-15 23:27:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19290.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19288.php">David Turner: "Re: [OMPI users] problems with 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19299.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>Reply:</strong> <a href="19299.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am performing Prefix scan operation on cluster
<br>
<p>I have 3 MPI tasks and master task is responsible for distributing the data
<br>
<p>Now, each task calculates sum of its own part of array using GPUs and
<br>
returns the results to master task.
<br>
<p>Master task also calculates its own part of array using GPU.
<br>
<p>When each task returns its result (which would be array) master task needs
<br>
to combine all the results to get the final result.
<br>
<p>Can I use MPI_SCAN to combine the results?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19289/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19290.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19288.php">David Turner: "Re: [OMPI users] problems with 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19299.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
<li><strong>Reply:</strong> <a href="19299.php">Jeff Squyres: "Re: [OMPI users] MPI_SCAN"</a>
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
