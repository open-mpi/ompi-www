<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 30 18:18:55 2006" -->
<!-- isoreceived="20060530221855" -->
<!-- sent="Tue, 30 May 2006 18:18:35 -0400" -->
<!-- isosent="20060530221835" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces" -->
<!-- id="A15A0315-19D5-4AD8-AF0C-1D9E94D7BCFB_at_ieee.org" -->
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
<strong>Date:</strong> 2006-05-30 18:18:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1329.php">Michael Kluskens: "Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<li><strong>Previous message:</strong> <a href="1327.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support (g95) not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1329.php">Michael Kluskens: "Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<li><strong>Reply:</strong> <a href="1329.php">Michael Kluskens: "Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1343.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Found serious issue for the f90 interfaces for  --with-mpi-f90- 
<br>
size=large
<br>
<p>Consider
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_REDUCE(MPI_IN_PLACE,sumpfi,sumpfmi,MPI_INTEGER,MPI_SUM, 
<br>
0,allmpi,ier)
<br>
<p>Error: Generic subroutine 'mpi_reduce' at (1) is not consistent with  
<br>
a specific subroutine interface
<br>
<p>sumpfi is an integer array, sumpfmi is an integer.
<br>
<p>The problem is that MPI_IN_PLACE is an integer, so you can only  
<br>
compile with the large interface file when the second argument of  
<br>
MPI_REDUCE is an integer, not an integer array, or a character, or a  
<br>
logical, ...
<br>
<p>So this doubles the number of f90 interfaces needed for MPI_REDUCE  
<br>
(and anything else that uses MPI_IN_PLACE).
<br>
<p><p>Configuration: OpenMPI 1.2a1r10111 (g95 on OS X 10.4.6), configured  
<br>
with &quot;./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs --with-mpi-f90- 
<br>
size=large --enable-static --with-f90-max-array-dim=3&quot;
<br>
<p>I was using &quot;--with-mpi-f90-size=large&quot; to debug my code instead I'm  
<br>
into the OpenMPI scripts.
<br>
<p>My solution to deal with this follows:
<br>
<p>*** mpi-f90-interfaces.h.sh ***
<br>
<p>output_183() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$output&quot; = &quot;0&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;procedure=$1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank=$2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type=$4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proc=&quot;$1$2D$3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cat &lt;&lt;EOF
<br>
<p>subroutine ${proc}(sendbuf, recvbuf, count, datatype, op, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root, comm, ierr)
<br>
&nbsp;&nbsp;&nbsp;include 'mpif-common.h'
<br>
&nbsp;&nbsp;&nbsp;${type}, intent(in) :: sendbuf
<br>
&nbsp;&nbsp;&nbsp;${type}, intent(out) :: recvbuf
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: count
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: datatype
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: op
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: root
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: comm
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
end subroutine ${proc}
<br>
<p>EOF
<br>
<p>if [ &quot;${type}&quot; != &quot;integer*4&quot; ]; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cat &lt;&lt;EOF
<br>
<p>subroutine ${proc}M(sendbuf, recvbuf, count, datatype, op, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root, comm, ierr)
<br>
&nbsp;&nbsp;&nbsp;include 'mpif-common.h'
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendbuf
<br>
&nbsp;&nbsp;&nbsp;${type}, intent(out) :: recvbuf
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: count
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: datatype
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: op
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: root
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: comm
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
end subroutine ${proc}M
<br>
<p>EOF
<br>
<p>fi
<br>
<p>}
<br>
<p>-----
<br>
*** mpi_reduce_f90.f90.sh ***
<br>
<p>output() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;procedure=$1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank=$2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type=$4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proc=&quot;$1$2D$3&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cat &lt;&lt;EOF
<br>
<p>subroutine ${proc}(sendbuf, recvbuf, count, datatype, op, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root, comm, ierr)
<br>
&nbsp;&nbsp;&nbsp;include &quot;mpif-common.h&quot;
<br>
&nbsp;&nbsp;&nbsp;${type}, intent(in) :: sendbuf
<br>
&nbsp;&nbsp;&nbsp;${type}, intent(out) :: recvbuf
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: count
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: datatype
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: op
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: root
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: comm
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
&nbsp;&nbsp;&nbsp;call ${procedure}(sendbuf, recvbuf, count, datatype, op, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root, comm, ierr)
<br>
end subroutine ${proc}
<br>
EOF
<br>
<p>if [ &quot;${type}&quot; != &quot;integer*4&quot; ] ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cat &lt;&lt;EOF
<br>
<p>subroutine ${proc}M(sendbuf, recvbuf, count, datatype, op, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root, comm, ierr)
<br>
&nbsp;&nbsp;&nbsp;include &quot;mpif-common.h&quot;
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: sendbuf
<br>
&nbsp;&nbsp;&nbsp;${type}, intent(out) :: recvbuf
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: count
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: datatype
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: op
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: root
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: comm
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
&nbsp;&nbsp;&nbsp;call ${procedure}(sendbuf, recvbuf, count, datatype, op, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root, comm, ierr)
<br>
end subroutine ${proc}M
<br>
<p>EOF
<br>
<p>fi
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1329.php">Michael Kluskens: "Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<li><strong>Previous message:</strong> <a href="1327.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support (g95) not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1329.php">Michael Kluskens: "Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<li><strong>Reply:</strong> <a href="1329.php">Michael Kluskens: "Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1343.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
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
