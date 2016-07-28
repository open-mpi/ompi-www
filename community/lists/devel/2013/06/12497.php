<?
$subject_val = "[OMPI devel] Barrier Implementation Oddity";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 29 06:05:20 2013" -->
<!-- isoreceived="20130629100520" -->
<!-- sent="Sat, 29 Jun 2013 12:05:16 +0200" -->
<!-- isosent="20130629100516" -->
<!-- name="Ronny Brendel" -->
<!-- email="ronnybrendel_at_[hidden]" -->
<!-- subject="[OMPI devel] Barrier Implementation Oddity" -->
<!-- id="CAD_uPkC-beWaTKQ=7FV3FuEqR9xi=wapAGynWmGDQ-4grE1r7A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Barrier Implementation Oddity<br>
<strong>From:</strong> Ronny Brendel (<em>ronnybrendel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-29 06:05:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12498.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Previous message:</strong> <a href="12496.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Cross Memory Attach support in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12501.php">George Bosilca: "Re: [OMPI devel] Barrier Implementation Oddity"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12501.php">George Bosilca: "Re: [OMPI devel] Barrier Implementation Oddity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am digging through openmpi to find out what algorithm the barrier
<br>
actually uses.
<br>
seems to be bruck/dissemination.
<br>
<p>However i stumbled upon something odd.
<br>
in: ompi/mca/coll/tuned/coll_tuned_barrier.c
<br>
function: ompi_coll_tuned_barrier_intra_bruck
<br>
<p>I think you intend (by the comments and the function name) to send to the
<br>
previous node and receive from the next. But actually it looks like you are
<br>
doing the reverse. (which should then be the dissemination algorithm)
<br>
<p>It's no big deal, I'm just a bit confused right now, and wonder if I'm
<br>
missing something. I hope you can help me understand.
<br>
<p>cheers,
<br>
Ronny
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12497/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12498.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Previous message:</strong> <a href="12496.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Cross Memory Attach support in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12501.php">George Bosilca: "Re: [OMPI devel] Barrier Implementation Oddity"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12501.php">George Bosilca: "Re: [OMPI devel] Barrier Implementation Oddity"</a>
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
