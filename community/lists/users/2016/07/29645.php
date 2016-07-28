<?
$subject_val = "Re: [OMPI users] Need libmpi_f90.a";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 02:22:18 2016" -->
<!-- isoreceived="20160712062218" -->
<!-- sent="Tue, 12 Jul 2016 10:51:57 +0430" -->
<!-- isosent="20160712062157" -->
<!-- name="Mahmood Naderan" -->
<!-- email="mahmood.nt_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need libmpi_f90.a" -->
<!-- id="CADa2P2Vo2cQsCKuJeWUrjytsn54gtmWSsB+P7hrmO4P_h_v4ZQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="672B1E3F-53C0-4AE6-B4BF-61613CC4F4C7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need libmpi_f90.a<br>
<strong>From:</strong> Mahmood Naderan (<em>mahmood.nt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-12 02:21:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29646.php">Gilles Gouaillardet: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>Previous message:</strong> <a href="29644.php">Bennet Fauber: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>In reply to:</strong> <a href="29642.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need libmpi_f90.a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29646.php">Gilles Gouaillardet: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>Reply:</strong> <a href="29646.php">Gilles Gouaillardet: "Re: [OMPI users] Need libmpi_f90.a"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry but I didn't understand the relation between name changes and wrapper
<br>
compilers. I only used --enable-static in the configure process.
<br>
<p><span class="quotelev1">&gt; -rw-r--r-- 1 root root 1029580 Jul 11 23:51 libmpi_mpifh.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- 1 root root   17292 Jul 11 23:51 libmpi_usempi.a
</span><br>
<span class="quotelev1">&gt;These are the two for v1.10.x.
</span><br>
<p>So, for an application that used libmpi_f90.a, I have to specify those two
<br>
files. Is that right?
<br>
<p>MPI_INTERFACE=libmpi_f90.a
<br>
-&gt;
<br>
MPI_INTERFACE=libmpi_mpifh.a libmpi_usempi.a
<br>
<p><p>Regards,
<br>
Mahmood
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29645/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29646.php">Gilles Gouaillardet: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>Previous message:</strong> <a href="29644.php">Bennet Fauber: "Re: [OMPI users] Problem when installing Rmpi package in HPC cluster"</a>
<li><strong>In reply to:</strong> <a href="29642.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need libmpi_f90.a"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29646.php">Gilles Gouaillardet: "Re: [OMPI users] Need libmpi_f90.a"</a>
<li><strong>Reply:</strong> <a href="29646.php">Gilles Gouaillardet: "Re: [OMPI users] Need libmpi_f90.a"</a>
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
