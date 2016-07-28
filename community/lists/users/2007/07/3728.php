<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 17:24:16 2007" -->
<!-- isoreceived="20070719212416" -->
<!-- sent="Thu, 19 Jul 2007 15:24:04 -0600" -->
<!-- isosent="20070719212404" -->
<!-- name="Moreland, Kenneth" -->
<!-- email="kmorel_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_File_set_view rejecting subarray views." -->
<!-- id="7137A9E1D1768C44BE7DF11D30FAB32303FD9F1C_at_ES21SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Moreland, Kenneth (<em>kmorel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-19 17:24:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3729.php">Brian Barrett: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
<li><strong>Previous message:</strong> <a href="3727.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3729.php">Brian Barrett: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
<li><strong>Reply:</strong> <a href="3729.php">Brian Barrett: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've run into a problem with the File I/O with openmpi version 1.2.3.
<br>
It is not possible to call MPI_File_set_view with a datatype created
<br>
from a subarray.  Instead of letting me set a view of this type, it
<br>
gives an invalid datatype error.  I have attached a simple program that
<br>
demonstrates the problem.  In particular, the following sequence of
<br>
function calls should be supported, but they are not.
<br>
<p>&nbsp;&nbsp;MPI_Type_create_subarray(3, sizes, subsizes, starts,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_ORDER_FORTRAN, MPI_BYTE, &amp;view);
<br>
&nbsp;&nbsp;MPI_File_set_view(fd, 20, MPI_BYTE, view, &quot;native&quot;, MPI_INFO_NULL);
<br>
<p>After poking around in the source code a bit, I discovered that the I/O
<br>
implementation actually supports the subarray data type, but there is a
<br>
check that is issuing an error before the underlying I/O layer (ROMIO)
<br>
has a chance to handle the request.
<br>
<p>I found that I can get around this problem by setting the MCA parameter
<br>
mpi_param_check to 0, although I do not know what consequence this will
<br>
have on other function calls.  It's also a problem for deployment as I
<br>
don't think I have a way to set the parameter inside my application, and
<br>
thus have to rely on users setting the MCA parameters themselves.
<br>
<p>-Ken
<br>
<p>&nbsp;&nbsp;&nbsp;****      Kenneth Moreland
<br>
&nbsp;&nbsp;&nbsp;&nbsp;***      Sandia National Laboratories
<br>
***********  
<br>
*** *** ***  email: kmorel_at_[hidden]
<br>
**  ***  **  phone: (505) 844-8919
<br>
&nbsp;&nbsp;&nbsp;&nbsp;***      fax:   (505) 845-0833
<br>
<p><p>
<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3728/subarrayfiles.c">subarrayfiles.c</a>
</ul>
<!-- attachment="subarrayfiles.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3729.php">Brian Barrett: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
<li><strong>Previous message:</strong> <a href="3727.php">Adam C Powell IV: "Re: [OMPI users] orte_pls_base_select fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3729.php">Brian Barrett: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
<li><strong>Reply:</strong> <a href="3729.php">Brian Barrett: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
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
