<?
$subject_val = "[OMPI devel] Fortran 90 Interface";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 17:25:31 2009" -->
<!-- isoreceived="20090121222531" -->
<!-- sent="Wed, 21 Jan 2009 17:25:23 -0500" -->
<!-- isosent="20090121222523" -->
<!-- name="David Robertson" -->
<!-- email="robertson_at_[hidden]" -->
<!-- subject="[OMPI devel] Fortran 90 Interface" -->
<!-- id="4977A0D3.6030704_at_marine.rutgers.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fortran 90 Interface<br>
<strong>From:</strong> David Robertson (<em>robertson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 17:25:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5264.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5262.php">Paul H. Hargrove: "Re: [OMPI devel] VT problems on Debian"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5264.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5264.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Maybe reply:</strong> <a href="5271.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm having a problem with MPI_COMM_WORLD in Fortran 90. I have tried 
<br>
with OpenMPI versions 1.2.6, 1.2.8 and 1.3. Both versions are compiled 
<br>
with the PGI 8.0-2 suite. I've run the program in a debugger and with 
<br>
&quot;USE mpi&quot; and MPI_COMM_WORLD returns 'Cannot find name 
<br>
&quot;MPI_COMM_WORLD&quot;'. If I use &quot;include mpif.h&quot; results are a little 
<br>
better: MPI_COMM_WORLD returns 0 (the initial value assigned by 
<br>
mpif-common.h). The MPI functions don't seem to be affected by the fact 
<br>
that MPI_COMM_WORLD is unset or equal to 0. For example, the following 
<br>
works just fine:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_init (MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_comm_rank (MPI_COMM_WORLD, MyRank, MyError)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL mpi_comm_size (MPI_COMM_WORLD, Nnodes, MyError)
<br>
<p>even though, in the debugger, MPI_COMM_WORLD is unset or zero every step 
<br>
of the way. However, when I try to us MPI_COMM_WORLD in a non MPI 
<br>
standard function (Netcdf-4 in this case):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status=nf90_create_par(TRIM(ncname),                           &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                         OR(nf90_clobber, nf90_netcdf4), 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                         MPI_COMM_WORLD, info, ncid)
<br>
<p>&nbsp;&nbsp;&nbsp;I get the following error:
<br>
<p>[daggoo:07640] *** An error occurred in MPI_Comm_dup
<br>
[daggoo:07640] *** on communicator MPI_COMM_WORLD
<br>
[daggoo:07640] *** MPI_ERR_COMM: invalid communicator
<br>
[daggoo:07640] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>I have tried the exact same code compiled and run with MPICH2 (also PGI
<br>
8.0-2) and the problem does not occur.
<br>
<p>If I have forgotten any details needed to debug this issue, please let
<br>
me know.
<br>
<p>Thanks,
<br>
David Robertson
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5264.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5262.php">Paul H. Hargrove: "Re: [OMPI devel] VT problems on Debian"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5264.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="5264.php">Jeff Squyres: "Re: [OMPI devel] Fortran 90 Interface"</a>
<li><strong>Maybe reply:</strong> <a href="5271.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
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
