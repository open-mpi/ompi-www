<?
$subject_val = "[OMPI devel] MPI_Reduce() is losing precision";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 15 02:06:38 2012" -->
<!-- isoreceived="20121015060638" -->
<!-- sent="Mon, 15 Oct 2012 06:06:32 +0000" -->
<!-- isosent="20121015060632" -->
<!-- name="Santhosh Kokala" -->
<!-- email="Santhosh.Kokala_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Reduce() is losing precision" -->
<!-- id="E6D5D6AF68E4194BAC1905E29435983190C54B47_at_365EXCH-MBX-P3.nbttech.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Reduce() is losing precision<br>
<strong>From:</strong> Santhosh Kokala (<em>Santhosh.Kokala_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-15 02:06:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11597.php">Iliev, Hristo: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
<li><strong>Previous message:</strong> <a href="11595.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11597.php">Iliev, Hristo: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
<li><strong>Reply:</strong> <a href="11597.php">Iliev, Hristo: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
I am having a strange problem with the floating precision. I get correct precision when I launch with one process, but when the same code is launched with 2 or more process I am losing precision in MPI_Redcue(..., MPI_FLOAT, MPI_SUM..); call. Output from my code
<br>
<p>(admin)host:~$ mpirun -np 1 string 10 0.1 0.9 10 3
<br>
sum = 1
<br>
sum = 0.999992
<br>
sum = 1.00043
<br>
<p>(admin)host:~$ mpirun -np 2 string 10 0.1 0.9 10 3
<br>
sum = 1
<br>
sum = 1
<br>
sum = 1.00049
<br>
<p>As you can see I am loosing precision. Can someone help me fix this code? Last parameter to my code is the number of iterations. I am attaching source code to this email.
<br>
<p>Santhosh
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11596/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11596/string.cpp">string.cpp</a>
</ul>
<!-- attachment="string.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11597.php">Iliev, Hristo: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
<li><strong>Previous message:</strong> <a href="11595.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] Invalid MPI_Status for null or inactive request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11597.php">Iliev, Hristo: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
<li><strong>Reply:</strong> <a href="11597.php">Iliev, Hristo: "Re: [OMPI devel] MPI_Reduce() is losing precision"</a>
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
