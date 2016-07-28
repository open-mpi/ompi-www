<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec  5 13:38:59 2005" -->
<!-- isoreceived="20051205183859" -->
<!-- sent="Mon, 5 Dec 2005 10:38:26 -0800" -->
<!-- isosent="20051205183826" -->
<!-- name="Borenstein, Bernard S" -->
<!-- email="bernard.s.borenstein_at_[hidden]" -->
<!-- subject="[O-MPI users] problem with Nasa Overflow 1.8ab code and open-mpi 1.0.1rc5" -->
<!-- id="52B7AD4481DAB448AA2A477E44A609F20142CAC0_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>From:</strong> Borenstein, Bernard S (<em>bernard.s.borenstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-05 13:38:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0417.php">Pierre Valiron: "[O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Previous message:</strong> <a href="0415.php">Brian Barrett: "Re: [O-MPI users] Make problems with open-mpi.1.0 on mac os x 10.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0418.php">Jeff Squyres: "Re: [O-MPI users] problem with Nasa Overflow 1.8ab code and open-mpi 1.0.1rc5"</a>
<li><strong>Reply:</strong> <a href="0418.php">Jeff Squyres: "Re: [O-MPI users] problem with Nasa Overflow 1.8ab code and open-mpi 1.0.1rc5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I build the Nasa Overflow code with Open-mpi 1.0.1rc5 and now get this
<br>
error message :
<br>
<p>[w052:19034] *** An error occurred in MPI_Cart_get
<br>
[w051:19104] *** An error occurred in MPI_Cart_get
<br>
[w051:19104] *** on communicator MPI_COMM_WORLD
<br>
[w051:19104] *** MPI_ERR_COMM: invalid communicator
<br>
[w051:19104] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[w052:19034] *** on communicator MPI_COMM_WORLD
<br>
[w052:19034] *** MPI_ERR_COMM: invalid communicator
<br>
[w052:19034] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[w053:18500] *** An error occurred in MPI_Cart_get
<br>
[w054:18383] *** An error occurred in MPI_Cart_coords
<br>
[w054:18383] *** on communicator MPI_COMMUNICATOR 6
<br>
[w054:18383] *** MPI_ERR_RANK: invalid rank
<br>
[w054:18383] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[w055:18249] *** An error occurred in MPI_Cart_get
<br>
[w056:18270] *** An error occurred in MPI_Cart_get
<br>
[w057:18412] *** An error occurred in MPI_Cart_get
<br>
[w050:22378] *** An error occurred in MPI_Cart_get
<br>
[w051:19105] *** An error occurred in MPI_Cart_get
<br>
[w053:18501] *** An error occurred in MPI_Cart_coords
<br>
[w053:18501] *** on communicator MPI_COMMUNICATOR 7
<br>
[w053:18501] *** MPI_ERR_RANK: invalid rank
<br>
[w053:18501] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[w054:18384] *** An error occurred in MPI_Cart_get
<br>
[w055:18250] *** An error occurred in MPI_Cart_get
<br>
[w055:18250] *** on communicator MPI_COMM_WORLD
<br>
[w055:18250] *** MPI_ERR_COMM: invalid communicator
<br>
[w055:18250] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[w056:18270] *** on communicator MPI_COMM_WORLD
<br>
[w056:18270] *** MPI_ERR_COMM: invalid communicator
<br>
[w056:18270] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[w057:18412] *** on communicator MPI_COMM_WORLD
<br>
[w057:18412] *** MPI_ERR_COMM: invalid communicator
<br>
<p>The code section where the problem occurs looks like this :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_CART_CREATE( MYCOMM,NPART,PARTDIMS,PARTPERDS,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                      REORDER,PARTCOMM,MPIERR )
<br>
C
<br>
C   Return in PARTCOORDS my Cartesian coordinates in PARTCOMM.
<br>
C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_CART_GET( PARTCOMM,NPART,PARTDIMS,PARTPERDS,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                   PARTCOORDS,MPIERR )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MYNODEJ = PARTCOORDS(1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MYNODEK = PARTCOORDS(2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MYNODEL = PARTCOORDS(3)
<br>
<p>The code did get past this point with Openmpi 1.0, but died later with a
<br>
memory error.
<br>
<p>Thanx,
<br>
<p>Bernie Borenstein
<br>
The Boeing Company
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0416/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0417.php">Pierre Valiron: "[O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Previous message:</strong> <a href="0415.php">Brian Barrett: "Re: [O-MPI users] Make problems with open-mpi.1.0 on mac os x 10.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0418.php">Jeff Squyres: "Re: [O-MPI users] problem with Nasa Overflow 1.8ab code and open-mpi 1.0.1rc5"</a>
<li><strong>Reply:</strong> <a href="0418.php">Jeff Squyres: "Re: [O-MPI users] problem with Nasa Overflow 1.8ab code and open-mpi 1.0.1rc5"</a>
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
