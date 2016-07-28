<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar  3 10:55:51 2006" -->
<!-- isoreceived="20060303155551" -->
<!-- sent="Fri, 3 Mar 2006 15:55:44 +0000" -->
<!-- isosent="20060303155544" -->
<!-- name="Julian Seward" -->
<!-- email="julian_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Type_get_envelope fails for no obvious reason" -->
<!-- id="200603031555.44949.julian_at_valgrind.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Julian Seward (<em>julian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-03 10:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0773.php">Xiaoning (David) Yang: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<li><strong>Previous message:</strong> <a href="0771.php">Troy Telford: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0860.php">George Bosilca: "Re: [OMPI users] MPI_Type_get_envelope fails for no obvious reason"</a>
<li><strong>Reply:</strong> <a href="0860.php">George Bosilca: "Re: [OMPI users] MPI_Type_get_envelope fails for no obvious reason"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to write a routine which unpicks user defined datatypes
<br>
using MPI_Type_get_{envelope,contents}.  I'm having a problem that
<br>
a derived type returned by a call of MPI_Type_get_contents, when handed
<br>
onwards to MPI_Type_get_envelope, causes the system to bomb:
<br>
<p>[suse10:15004] *** An error occurred in MPI_Type_get_envelope
<br>
[suse10:15004] *** on communicator MPI_COMM_WORLD
<br>
[suse10:15004] *** MPI_ERR_INTERN: internal error
<br>
[suse10:15004] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>Close inspection of the MPI2 specification for MPI_Type_get_envelope
<br>
does not appear to reveal any limitations on the types or 
<br>
committedness-state of types that may be passed to MPI_Type_get_envelope.
<br>
<p>This is with Open MPI 1.0.1 on SuSE 10.0 (x86), built from source.
<br>
This build otherwise appears to work and has run various MPI apps
<br>
successfully over the past month.
<br>
<p>A test case is attached.  What am I doing wrong?
<br>
<p>J
<br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0772/bad2.c">bad2.c</a>
</ul>
<!-- attachment="bad2.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0773.php">Xiaoning (David) Yang: "Re: [OMPI users] Problem running open mpi across nodes."</a>
<li><strong>Previous message:</strong> <a href="0771.php">Troy Telford: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0860.php">George Bosilca: "Re: [OMPI users] MPI_Type_get_envelope fails for no obvious reason"</a>
<li><strong>Reply:</strong> <a href="0860.php">George Bosilca: "Re: [OMPI users] MPI_Type_get_envelope fails for no obvious reason"</a>
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
