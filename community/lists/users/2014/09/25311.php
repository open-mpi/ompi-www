<?
$subject_val = "[OMPI users] Runtime replacement of mpi libraries?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 14:28:17 2014" -->
<!-- isoreceived="20140911182817" -->
<!-- sent="Thu, 11 Sep 2014 12:28:14 -0600" -->
<!-- isosent="20140911182814" -->
<!-- name="JR Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="[OMPI users] Runtime replacement of mpi libraries?" -->
<!-- id="5411E9BE.4000609_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5411DE96.5090008_at_colorado.edu" -->
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
<strong>Subject:</strong> [OMPI users] Runtime replacement of mpi libraries?<br>
<strong>From:</strong> JR Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-11 14:28:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25312.php">Ralph Castain: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Previous message:</strong> <a href="25310.php">Ahmed Salama: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25312.php">Ralph Castain: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Reply:</strong> <a href="25312.php">Ralph Castain: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Reply:</strong> <a href="25313.php">Rob Latham: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Reply:</strong> <a href="25315.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We need to build an application on our machine with one mpi (e.g. openmpi),
<br>
but for performance reasons, upon installation, we would like to runtime
<br>
link to a different, specialized mpi, such as an SGI implementation provided
<br>
for their systems.
<br>
<p>Can one expect this to work?
<br>
<p>I tried this with openmpi and mpich, building the code against shared 
<br>
openmpi
<br>
and then changing the LD_LIBRARY_PATH to point to the shared mpich.  This
<br>
failed due to the sonames being different.
<br>
<p>$ ldd foo  | grep mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_usempi.so.1 =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_mpifh.so.2 =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.1 =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_cxx.so.1 =&gt; not found
<br>
<p>but in the mpich distribution one has different sonames
<br>
<p>libmpi.so.12
<br>
<p>so the runtime loader will not load the mpich libraries instead.
<br>
<p>and the fortran libraries (which may not matter to us) have different
<br>
names,
<br>
<p>$ \ls /contrib/mpich-shared/lib/*.so.12
<br>
/contrib/mpich-shared/lib/libmpicxx.so.12
<br>
/contrib/mpich-shared/lib/libmpifort.so.12
<br>
/contrib/mpich-shared/lib/libmpi.so.12
<br>
<p>Is there a general approach to this?
<br>
<p>Or in practice, must one build on a machine to use that machine's MPI?
<br>
<p>Thx.....John Cary
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25311/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25312.php">Ralph Castain: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Previous message:</strong> <a href="25310.php">Ahmed Salama: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25312.php">Ralph Castain: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Reply:</strong> <a href="25312.php">Ralph Castain: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Reply:</strong> <a href="25313.php">Rob Latham: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Reply:</strong> <a href="25315.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
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
