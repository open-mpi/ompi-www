<?
$subject_val = "[OMPI devel] PGI built Open MPI vs GNU built slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 25 21:03:09 2016" -->
<!-- isoreceived="20160726010309" -->
<!-- sent="Tue, 26 Jul 2016 10:03:06 +0900" -->
<!-- isosent="20160726010306" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] PGI built Open MPI vs GNU built slurm" -->
<!-- id="5cad5dac-5fe1-efe2-20c1-fd76c8d80636_at_rist.or.jp" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] PGI built Open MPI vs GNU built slurm<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-25 21:03:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19279.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>Previous message:</strong> <a href="19277.php">Eric Chamberland: "Re: [OMPI devel] [petsc-users] OpenMPI 2.0 and Petsc 3.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19279.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>Reply:</strong> <a href="19279.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p><p>This is a followup of a thread that initially started at 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2016/07/29635.php">http://www.open-mpi.org/community/lists/users/2016/07/29635.php</a>
<br>
<p><p>The user is trying to build Open MPI with PGI compiler and 
<br>
libslurm.la/libpmi.la support, and slurm was built with gcc compiler.
<br>
<p><p>At first, it fails because the &quot;-pthread&quot; flag is pulled from 
<br>
libslurm.la/libpmi.la, but this flag is not supported by PGI compilers.
<br>
<p>A workaround is to pass the -noswitcherror flag to the PGI compiler (so 
<br>
the -pthread flag is discarded and a warning message is issued, but PGI 
<br>
compiler does not fail). Unfortunatly, that does not work because 
<br>
libtool does does not pass this flag to the PGI compiler.
<br>
<p><p>Of course, one option is to tell the user to rebuild slurm with PGI, so 
<br>
libslurm.la/libpmi.la do not have the &quot;-pthread&quot; flag.
<br>
<p>A nicer though arguable option is to hack libtool to silently drop the 
<br>
&quot;-pthread&quot; flag with PGI compiler is used (i made a proof of concept, 
<br>
and this is a two lines patch).
<br>
<p>An other cleaner option is to hack libtool so it pass -noswitcherror to 
<br>
PGI compiler, but i do not know how to achieve this.
<br>
<p><p>Any thoughts ?
<br>
<p><p>Cheers
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19279.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>Previous message:</strong> <a href="19277.php">Eric Chamberland: "Re: [OMPI devel] [petsc-users] OpenMPI 2.0 and Petsc 3.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19279.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
<li><strong>Reply:</strong> <a href="19279.php">Paul Hargrove: "Re: [OMPI devel] PGI built Open MPI vs GNU built slurm"</a>
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
