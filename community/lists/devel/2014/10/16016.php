<?
$subject_val = "[OMPI devel] Issue with MPI_Put in version 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  7 07:09:33 2014" -->
<!-- isoreceived="20141007110933" -->
<!-- sent="Tue, 7 Oct 2014 13:09:33 +0200" -->
<!-- isosent="20141007110933" -->
<!-- name="Berk Hess" -->
<!-- email="gmx3_at_[hidden]" -->
<!-- subject="[OMPI devel] Issue with MPI_Put in version 1.8.3" -->
<!-- id="DUB124-W13A1AF0156DE6C9E83A7BC8EA20_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI devel] Issue with MPI_Put in version 1.8.3<br>
<strong>From:</strong> Berk Hess (<em>gmx3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-07 07:09:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Previous message:</strong> <a href="16015.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16024.php">Nathan Hjelm: "Re: [OMPI devel] Issue with MPI_Put in version 1.8.3"</a>
<li><strong>Reply:</strong> <a href="16024.php">Nathan Hjelm: "Re: [OMPI devel] Issue with MPI_Put in version 1.8.3"</a>
<li><strong>Reply:</strong> <a href="16026.php">Nathan Hjelm: "Re: [OMPI devel] Issue with MPI_Put in version 1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am implementing RMA in the Gromacs molecular simulation package and ran into an issue while using a relatively simple setup with MPI_Put with Open MPI version 1.8.3. I made a small test program, see attachment, which reproduces the issue. The issue is that the data passed to MPI_Put arrives incompletely at the receiver end.
<br>
I have been unable to reproduce the issue with version 1.7.2/4 or MPICH 3.1.2.
<br>
Note that I have only ran it on a single processor, i.e. using shared memory.
<br>
<p>Cheers,
<br>
<p>Berk
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16016/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16016/test_mpi_win.c">test_mpi_win.c</a>
</ul>
<!-- attachment="test_mpi_win.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16017.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<li><strong>Previous message:</strong> <a href="16015.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] OMPI@GitHub: (Mostly) Open for business"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16024.php">Nathan Hjelm: "Re: [OMPI devel] Issue with MPI_Put in version 1.8.3"</a>
<li><strong>Reply:</strong> <a href="16024.php">Nathan Hjelm: "Re: [OMPI devel] Issue with MPI_Put in version 1.8.3"</a>
<li><strong>Reply:</strong> <a href="16026.php">Nathan Hjelm: "Re: [OMPI devel] Issue with MPI_Put in version 1.8.3"</a>
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
