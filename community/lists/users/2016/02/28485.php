<?
$subject_val = "[OMPI users] shared memory zero size segment";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 05:56:18 2016" -->
<!-- isoreceived="20160210105618" -->
<!-- sent="Wed, 10 Feb 2016 10:56:06 +0000 (UTC)" -->
<!-- isosent="20160210105606" -->
<!-- name="Peter Wind" -->
<!-- email="peter.wind_at_[hidden]" -->
<!-- subject="[OMPI users] shared memory zero size segment" -->
<!-- id="442924734.161552.1455101766716.JavaMail.zimbra_at_met.no" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1395516216.155445.1455099201578.JavaMail.zimbra_at_met.no" -->
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
<strong>Subject:</strong> [OMPI users] shared memory zero size segment<br>
<strong>From:</strong> Peter Wind (<em>peter.wind_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 05:56:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28486.php">Jeff Squyres (jsquyres): "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28484.php">Delphine Ramalingom: "[OMPI users] error openmpi check hdf5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28486.php">Jeff Squyres (jsquyres): "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28486.php">Jeff Squyres (jsquyres): "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28493.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Under fortran, MPI_Win_allocate_shared is called with a window size of zero for some processes.
<br>
The output pointer is then not valid for these processes (null pointer).
<br>
Did I understood this wrongly? shouldn't the pointers be contiguous, so that for a zero sized window, the pointer should point to the start of the segment of the next rank?
<br>
The documentation explicitly specifies &quot;size = 0 is valid&quot;.
<br>
<p>Attached a small code, where rank=0 allocate a window of size zero. All the other ranks get valid pointers, except rank 0.
<br>
<p>Best regards,
<br>
Peter
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28486.php">Jeff Squyres (jsquyres): "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28484.php">Delphine Ramalingom: "[OMPI users] error openmpi check hdf5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28486.php">Jeff Squyres (jsquyres): "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28486.php">Jeff Squyres (jsquyres): "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28493.php">Gilles Gouaillardet: "Re: [OMPI users] shared memory zero size segment"</a>
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
