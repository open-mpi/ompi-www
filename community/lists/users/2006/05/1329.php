<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 30 18:52:10 2006" -->
<!-- isoreceived="20060530225210" -->
<!-- sent="Tue, 30 May 2006 18:51:51 -0400" -->
<!-- isosent="20060530225151" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces" -->
<!-- id="15A2DD67-4E22-49CF-BE03-CA97D8123E40_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A15A0315-19D5-4AD8-AF0C-1D9E94D7BCFB_at_ieee.org" -->
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
<strong>Date:</strong> 2006-05-30 18:51:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1330.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Previous message:</strong> <a href="1328.php">Michael Kluskens: "[OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<li><strong>In reply to:</strong> <a href="1328.php">Michael Kluskens: "[OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1343.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My mistake:
<br>
<p>MPI_IN_PLACE is a &quot;double complex&quot; so the scripts below need to be  
<br>
fixed to reflect that.
<br>
<p>I don't know if the latest tarball for tonight contains these or  
<br>
other fixes that I have been looking at today.
<br>
<p>Michael
<br>
<p>On May 30, 2006, at 6:18 PM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; Found serious issue for the f90 interfaces for  --with-mpi-f90-
</span><br>
<span class="quotelev1">&gt; size=large
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Consider
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      call MPI_REDUCE(MPI_IN_PLACE,sumpfi,sumpfmi,MPI_INTEGER,MPI_SUM,
</span><br>
<span class="quotelev1">&gt; 0,allmpi,ier)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error: Generic subroutine 'mpi_reduce' at (1) is not consistent with
</span><br>
<span class="quotelev1">&gt; a specific subroutine interface
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sumpfi is an integer array, sumpfmi is an integer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that MPI_IN_PLACE is an integer, so you can only
</span><br>
<span class="quotelev1">&gt; compile with the large interface file when the second argument of
</span><br>
<span class="quotelev1">&gt; MPI_REDUCE is an integer, not an integer array, or a character, or a
</span><br>
<span class="quotelev1">&gt; logical, ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So this doubles the number of f90 interfaces needed for MPI_REDUCE
</span><br>
<span class="quotelev1">&gt; (and anything else that uses MPI_IN_PLACE).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configuration: OpenMPI 1.2a1r10111 (g95 on OS X 10.4.6), configured
</span><br>
<span class="quotelev1">&gt; with &quot;./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs --with-mpi-f90-
</span><br>
<span class="quotelev1">&gt; size=large --enable-static --with-f90-max-array-dim=3&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was using &quot;--with-mpi-f90-size=large&quot; to debug my code instead I'm
</span><br>
<span class="quotelev1">&gt; into the OpenMPI scripts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My solution to deal with this follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** mpi-f90-interfaces.h.sh ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; output_183() {
</span><br>
<span class="quotelev1">&gt;      if test &quot;$output&quot; = &quot;0&quot;; then
</span><br>
<span class="quotelev1">&gt;          return 0
</span><br>
<span class="quotelev1">&gt;      fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      procedure=$1
</span><br>
<span class="quotelev1">&gt;      rank=$2
</span><br>
<span class="quotelev1">&gt;      type=$4
</span><br>
<span class="quotelev1">&gt;      proc=&quot;$1$2D$3&quot;
</span><br>
<span class="quotelev1">&gt;      cat &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; subroutine ${proc}(sendbuf, recvbuf, count, datatype, op, &amp;
</span><br>
<span class="quotelev1">&gt;          root, comm, ierr)
</span><br>
<span class="quotelev1">&gt;    include 'mpif-common.h'
</span><br>
<span class="quotelev1">&gt;    ${type}, intent(in) :: sendbuf
</span><br>
<span class="quotelev1">&gt;    ${type}, intent(out) :: recvbuf
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: count
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: datatype
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: op
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev1">&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; end subroutine ${proc}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if [ &quot;${type}&quot; != &quot;integer*4&quot; ]; then
</span><br>
<span class="quotelev1">&gt;      cat &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; subroutine ${proc}M(sendbuf, recvbuf, count, datatype, op, &amp;
</span><br>
<span class="quotelev1">&gt;          root, comm, ierr)
</span><br>
<span class="quotelev1">&gt;    include 'mpif-common.h'
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: sendbuf
</span><br>
<span class="quotelev1">&gt;    ${type}, intent(out) :: recvbuf
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: count
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: datatype
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: op
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev1">&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; end subroutine ${proc}M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; *** mpi_reduce_f90.f90.sh ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; output() {
</span><br>
<span class="quotelev1">&gt;      procedure=$1
</span><br>
<span class="quotelev1">&gt;      rank=$2
</span><br>
<span class="quotelev1">&gt;      type=$4
</span><br>
<span class="quotelev1">&gt;      proc=&quot;$1$2D$3&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      cat &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; subroutine ${proc}(sendbuf, recvbuf, count, datatype, op, &amp;
</span><br>
<span class="quotelev1">&gt;          root, comm, ierr)
</span><br>
<span class="quotelev1">&gt;    include &quot;mpif-common.h&quot;
</span><br>
<span class="quotelev1">&gt;    ${type}, intent(in) :: sendbuf
</span><br>
<span class="quotelev1">&gt;    ${type}, intent(out) :: recvbuf
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: count
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: datatype
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: op
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev1">&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt;    call ${procedure}(sendbuf, recvbuf, count, datatype, op, &amp;
</span><br>
<span class="quotelev1">&gt;          root, comm, ierr)
</span><br>
<span class="quotelev1">&gt; end subroutine ${proc}
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if [ &quot;${type}&quot; != &quot;integer*4&quot; ] ; then
</span><br>
<span class="quotelev1">&gt;      cat &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; subroutine ${proc}M(sendbuf, recvbuf, count, datatype, op, &amp;
</span><br>
<span class="quotelev1">&gt;          root, comm, ierr)
</span><br>
<span class="quotelev1">&gt;    include &quot;mpif-common.h&quot;
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: sendbuf
</span><br>
<span class="quotelev1">&gt;    ${type}, intent(out) :: recvbuf
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: count
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: datatype
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: op
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev1">&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev1">&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt;    call ${procedure}(sendbuf, recvbuf, count, datatype, op, &amp;
</span><br>
<span class="quotelev1">&gt;          root, comm, ierr)
</span><br>
<span class="quotelev1">&gt; end subroutine ${proc}M
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1330.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.0.2 and np &gt;=64"</a>
<li><strong>Previous message:</strong> <a href="1328.php">Michael Kluskens: "[OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<li><strong>In reply to:</strong> <a href="1328.php">Michael Kluskens: "[OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1343.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
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
