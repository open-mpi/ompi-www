<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 20 14:25:17 2006" -->
<!-- isoreceived="20060420182517" -->
<!-- sent="Thu, 20 Apr 2006 14:24:53 -0400" -->
<!-- isosent="20060420182453" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users] f90 interface error?: MPI_Comm_get_attr" -->
<!-- id="363ECB22-D6AC-4C76-B4B2-1BC1A146C277_at_ieee.org" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-20 14:24:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1105.php">Michael Kluskens: "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Previous message:</strong> <a href="1103.php">Bogdan Costescu: "Re: [OMPI users] Open-MPI and TCP port range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1105.php">Michael Kluskens: "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Reply:</strong> <a href="1105.php">Michael Kluskens: "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Maybe reply:</strong> <a href="1113.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Maybe reply:</strong> <a href="1135.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Maybe reply:</strong> <a href="1139.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Error in:
<br>
<p>openmpi-1.1a3r9663/ompi/mpi/f90/mpi-f90-interfaces.h
<br>
<p>subroutine MPI_Comm_get_attr(comm, comm_keyval, attribute_val, flag,  
<br>
ierr)
<br>
&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: comm
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: comm_keyval
<br>
&nbsp;&nbsp;&nbsp;integer(kind=MPI_ADDRESS_KIND), intent(out) :: attribute_val
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: flag
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
end subroutine MPI_Comm_get_attr
<br>
<p>flag should be a logical.  Only in C is it an integer.
<br>
<p>Compare with page 294 of MPI--The Complete Reference, Volume 1 and  
<br>
page 176 of Using MPI, 2nd ed.
<br>
<p>In my test case I'm using:
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_Comm_get_attr(MPI_COMM_WORLD, MPI_UNIVERSE_SIZE, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;universe_size, flag, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;integer :: ierr
<br>
&nbsp;&nbsp;&nbsp;integer  (kind=MPI_ADDRESS_KIND) :: universe_size
<br>
&nbsp;&nbsp;&nbsp;logical :: flag
<br>
<p>This compiled and worked as of version 9427.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1105.php">Michael Kluskens: "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Previous message:</strong> <a href="1103.php">Bogdan Costescu: "Re: [OMPI users] Open-MPI and TCP port range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1105.php">Michael Kluskens: "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Reply:</strong> <a href="1105.php">Michael Kluskens: "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Maybe reply:</strong> <a href="1113.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Maybe reply:</strong> <a href="1135.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Maybe reply:</strong> <a href="1139.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
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
