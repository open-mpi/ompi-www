<?
$subject_val = "[OMPI docs] Possible outdated documentation on MPI_Isend()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 04:17:24 2015" -->
<!-- isoreceived="20150105091724" -->
<!-- sent="Mon, 5 Jan 2015 12:17:11 +0300" -->
<!-- isosent="20150105091711" -->
<!-- name="Alexander Pozdneev" -->
<!-- email="alexander.pozdneev_at_[hidden]" -->
<!-- subject="[OMPI docs] Possible outdated documentation on MPI_Isend()" -->
<!-- id="OF9AE2ED23.8B6862E7-ONC3257DC4.0031A02C-43257DC4.003306C6_at_ru.ibm.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI docs] Possible outdated documentation on MPI_Isend()<br>
<strong>From:</strong> Alexander Pozdneev (<em>alexander.pozdneev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-05 04:17:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0213.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Possible outdated documentation on MPI_Isend()"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2014/10/0211.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0213.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Possible outdated documentation on MPI_Isend()"</a>
<li><strong>Reply:</strong> <a href="0213.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Possible outdated documentation on MPI_Isend()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I believe, I've spotted an outdated statement in the documentation - the 
<br>
word &quot;ACCESS&quot; should be replaced with the word &quot;MODIFY&quot; in the man-page on 
<br>
MPI_Isend().
<br>
<p>Currently, the man-page on MPI_Isend() says: &quot;The sender should not ACCESS 
<br>
any part of the send buffer after a nonblocking send operation is called, 
<br>
until the send completes&quot;.
<br>
<a href="https://www.open-mpi.org/doc/v1.8/man3/MPI_Isend.3.php">https://www.open-mpi.org/doc/v1.8/man3/MPI_Isend.3.php</a> (Accessed Jan 05, 
<br>
2015).
<br>
<p>That was true in MPI-2.1 and prior versions (mpi21-report.pdf, Section 
<br>
3.7.2, page 52).
<br>
<p>Fortunately, MPI-2.2 and further versions do not have this restriction: 
<br>
&quot;The sender should not MODIFY any part of the send buffer after a 
<br>
nonblocking send operation is called, until the send completes.&quot; 
<br>
(mpi22-report.pdf, Section 3.7.2, page 52)  
<br>
As stated in a changelog, &quot;The read access restriction on the send buffer 
<br>
for blocking, non blocking and collective API has been lifted. It is 
<br>
permitted to access for read the send buffer while the operation is in 
<br>
progress.&quot; (mpi22-report.pdf, Section B.1, item 5, page 593)
<br>
<p>Alexander Pozdneev
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0213.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Possible outdated documentation on MPI_Isend()"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/docs/2014/10/0211.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] FAQ: GPUDirect support for MPI_PACK/MPI_UNPACK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0213.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Possible outdated documentation on MPI_Isend()"</a>
<li><strong>Reply:</strong> <a href="0213.php">Jeff Squyres (jsquyres): "Re: [OMPI docs] Possible outdated documentation on MPI_Isend()"</a>
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
