<?
$subject_val = "[OMPI users] Question about tree generation (in parallel)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 17:04:24 2010" -->
<!-- isoreceived="20100602210424" -->
<!-- sent="Wed, 2 Jun 2010 17:03:57 -0400" -->
<!-- isosent="20100602210357" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="[OMPI users] Question about tree generation (in parallel)" -->
<!-- id="AANLkTinPWP1rk_rWHtx0wrzGufNRwx2SxelcKwiWGWx0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Question about tree generation (in parallel)<br>
<strong>From:</strong> Cristobal Navarro (<em>axischire_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 17:03:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13218.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13216.php">Jed Brown: "[OMPI users] Highly variable performance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>i got an algorithm that generates trees, of different sizes, recursively. at
<br>
the moment i have the algorithm in its secuential version.
<br>
<p>here we have 4 identical computers with Xeon 8-core in each node + 4gb ram.
<br>
they have HyperThreading so they count as 16-processors per node.
<br>
so i can launch a total of 64 parallel threads.
<br>
<p>my question is, what could be the best approach when using MPI.???
<br>
<p>assigning -np 64 maybe is not a good idea, because i would not be taking
<br>
advantage of the vecinity of cores which could improve memory tasks speeds,
<br>
i mean it might be better to have 4 mpi processes and each one of these
<br>
spawn 15 threads locally???...(can i mix MPI with local threads right? )
<br>
<p>i dont have much experience in MPI, i only programmed bigger algorithms in
<br>
CUDA which is much easier.
<br>
any suggestions or help is welcome
<br>
Cristobal
<br>
<p><p><p><p><pre>
--
Cristobal &lt;<a href="http://www.youtube.com/neoideo">http://www.youtube.com/neoideo</a>&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13217/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13218.php">guillaume ranquet: "Re: [OMPI users] Segmentation fault in	MPI_Finalize	with	IB	hardware and memory manager."</a>
<li><strong>Previous message:</strong> <a href="13216.php">Jed Brown: "[OMPI users] Highly variable performance"</a>
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
