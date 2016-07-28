<?
$subject_val = "[OMPI users] questions about MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 21 21:39:07 2010" -->
<!-- isoreceived="20101222023907" -->
<!-- sent="Tue, 21 Dec 2010 18:38:59 -0800" -->
<!-- isosent="20101222023859" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] questions about MPI-IO" -->
<!-- id="1292985539.4289.19.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> [OMPI users] questions about MPI-IO<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-21 21:38:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15210.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15208.php">Matthieu Brucher: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15286.php">Rob Latham: "Re: [OMPI users] questions about MPI-IO"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15286.php">Rob Latham: "Re: [OMPI users] questions about MPI-IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been experimenting with some simple fortran test programs to
<br>
write files with some of the MPI-IO functions, and have come across a
<br>
troubling issue.  I use the function MPI_FILE_SET_VIEW with the 'native'
<br>
data representation and correctly write a file with MPI_FILE_WRITE_ALL.
<br>
However, if I change to the 'external32' representation, the file is
<br>
truncated, with a length that suggest that either only one process did a
<br>
write, or each process wrote to the same location.  I was assuming that
<br>
changing to the 'external32' representation would only do a byteswap
<br>
similar to what some compilers options can do with conventional fortran
<br>
IO.  Am I mis-interpreting the way to implement this feature?
<br>
<p>I have attached my script/test program.
<br>
<p>T. Rosmond
<br>
<p><p><p>
<br><p>
<p><hr>
<ul>
<li>application/x-csh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15209/write_test">write_test</a>
</ul>
<!-- attachment="write_test" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15210.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15208.php">Matthieu Brucher: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15286.php">Rob Latham: "Re: [OMPI users] questions about MPI-IO"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/01/15286.php">Rob Latham: "Re: [OMPI users] questions about MPI-IO"</a>
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
