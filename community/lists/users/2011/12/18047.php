<?
$subject_val = "[OMPI users] Openmpi performance issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 23 08:12:13 2011" -->
<!-- isoreceived="20111223131213" -->
<!-- sent="Fri, 23 Dec 2011 05:12:09 -0800 (PST)" -->
<!-- isosent="20111223131209" -->
<!-- name="Eric Feng" -->
<!-- email="hpc_benchmark_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi performance issue" -->
<!-- id="1324645929.52107.YahooMailNeo_at_web124706.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi performance issue<br>
<strong>From:</strong> Eric Feng (<em>hpc_benchmark_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-23 08:12:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18048.php">Santosh Ansumali: "[OMPI users] over-subscription of cores"</a>
<li><strong>Previous message:</strong> <a href="18046.php">Beat Rubischon: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18057.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Reply:</strong> <a href="18057.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Reply:</strong> <a href="18058.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,&#160;

I am running into performance issue with Open MPI, I wish experts here can provide me some help,

I have one application calls a lot of sendrecv, and isend/irecv, so waitall. When I run Intel MPI, it is around 30% faster than OpenMPI.
However if i test sendrecv using IMB, OpenMPI is even faster than Intel MPI, but when run with real application, Open MPI is much slower than Intel MPI in all MPI functions by looking at profiling results. So this is not some function issue, it has a overall drawback somewhere. Can anyone give me some suggestions of where to tune to make it run faster with real application?



Thanks
Eric

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18047/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18048.php">Santosh Ansumali: "[OMPI users] over-subscription of cores"</a>
<li><strong>Previous message:</strong> <a href="18046.php">Beat Rubischon: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18057.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Reply:</strong> <a href="18057.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Reply:</strong> <a href="18058.php">Eric Feng: "Re: [OMPI users] Openmpi performance issue"</a>
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
