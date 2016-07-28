<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  2 09:25:52 2006" -->
<!-- isoreceived="20060602132552" -->
<!-- sent="Fri, 2 Jun 2006 09:25:32 -0400" -->
<!-- isosent="20060602132532" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces" -->
<!-- id="166C90AE-F2BD-4049-96BD-93C72D028D2A_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF94C1FC_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-06-02 09:25:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1360.php">Peter Kjellström: "Re: [OMPI users] Wont run with 1.0.2"</a>
<li><strong>Previous message:</strong> <a href="1358.php">Jan De Laet: "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag, f95Compiler // and Pathscale"</a>
<li><strong>In reply to:</strong> <a href="1343.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 1, 2006, at 12:42 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Blast.  As usual, Michael is right -- we didn't account for  
</span><br>
<span class="quotelev1">&gt; MPI_IN_PLACE
</span><br>
<span class="quotelev1">&gt; in the &quot;large&quot; F90 interface.  We've opened ticket #39 on this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/39">https://svn.open-mpi.org/trac/ompi/ticket/39</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm inclined to simply disable the &quot;large&quot; interfaces in v1.1 so  
</span><br>
<span class="quotelev1">&gt; that we
</span><br>
<span class="quotelev1">&gt; can get it out the door, and work on fixing &quot;large&quot; properly in v1.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any objections?
</span><br>
<p>Given the need for enough testing and if you want to fix all the  
<br>
issues that have been ignored/forgotten regarding f90 interfaces  
<br>
(does anyone really have a list of every MPI call that can take these  
<br>
special arguments and test programs as well) I'm all for this  
<br>
approach, taking into account (1) I'm only using 1.2, (2) I have  
<br>
supplied changes for two scripts for this issue for large in 1.2 --  
<br>
it's clear there is much room for enhancement in large.
<br>
<p>Michael
<br>
<p><span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, May 30, 2006 6:19 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Found serious issue for the f90 interfaces for  --with-mpi-f90-
</span><br>
<span class="quotelev2">&gt;&gt; size=large
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Consider
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      call MPI_REDUCE(MPI_IN_PLACE,sumpfi,sumpfmi,MPI_INTEGER,MPI_SUM,
</span><br>
<span class="quotelev2">&gt;&gt; 0,allmpi,ier)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Error: Generic subroutine 'mpi_reduce' at (1) is not consistent with
</span><br>
<span class="quotelev2">&gt;&gt; a specific subroutine interface
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sumpfi is an integer array, sumpfmi is an integer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that MPI_IN_PLACE is an integer, so you can only
</span><br>
<span class="quotelev2">&gt;&gt; compile with the large interface file when the second argument of
</span><br>
<span class="quotelev2">&gt;&gt; MPI_REDUCE is an integer, not an integer array, or a character, or a
</span><br>
<span class="quotelev2">&gt;&gt; logical, ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So this doubles the number of f90 interfaces needed for MPI_REDUCE
</span><br>
<span class="quotelev2">&gt;&gt; (and anything else that uses MPI_IN_PLACE).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Configuration: OpenMPI 1.2a1r10111 (g95 on OS X 10.4.6), configured
</span><br>
<span class="quotelev2">&gt;&gt; with &quot;./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs
</span><br>
<span class="quotelev2">&gt;&gt; --with-mpi-f90-
</span><br>
<span class="quotelev2">&gt;&gt; size=large --enable-static --with-f90-max-array-dim=3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was using &quot;--with-mpi-f90-size=large&quot; to debug my code instead I'm
</span><br>
<span class="quotelev2">&gt;&gt; into the OpenMPI scripts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My solution to deal with this follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** mpi-f90-interfaces.h.sh ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; output_183() {
</span><br>
<span class="quotelev2">&gt;&gt;      if test &quot;$output&quot; = &quot;0&quot;; then
</span><br>
<span class="quotelev2">&gt;&gt;          return 0
</span><br>
<span class="quotelev2">&gt;&gt;      fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      procedure=$1
</span><br>
<span class="quotelev2">&gt;&gt;      rank=$2
</span><br>
<span class="quotelev2">&gt;&gt;      type=$4
</span><br>
<span class="quotelev2">&gt;&gt;      proc=&quot;$1$2D$3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;      cat &lt;&lt;EOF
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; subroutine ${proc}(sendbuf, recvbuf, count, datatype, op, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;          root, comm, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;    include 'mpif-common.h'
</span><br>
<span class="quotelev2">&gt;&gt;    ${type}, intent(in) :: sendbuf
</span><br>
<span class="quotelev2">&gt;&gt;    ${type}, intent(out) :: recvbuf
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: count
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: datatype
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: op
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev2">&gt;&gt; end subroutine ${proc}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; EOF
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if [ &quot;${type}&quot; != &quot;integer*4&quot; ]; then
</span><br>
<span class="quotelev2">&gt;&gt;      cat &lt;&lt;EOF
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; subroutine ${proc}M(sendbuf, recvbuf, count, datatype, op, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;          root, comm, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;    include 'mpif-common.h'
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: sendbuf
</span><br>
<span class="quotelev2">&gt;&gt;    ${type}, intent(out) :: recvbuf
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: count
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: datatype
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: op
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev2">&gt;&gt; end subroutine ${proc}M
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; EOF
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; *** mpi_reduce_f90.f90.sh ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; output() {
</span><br>
<span class="quotelev2">&gt;&gt;      procedure=$1
</span><br>
<span class="quotelev2">&gt;&gt;      rank=$2
</span><br>
<span class="quotelev2">&gt;&gt;      type=$4
</span><br>
<span class="quotelev2">&gt;&gt;      proc=&quot;$1$2D$3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      cat &lt;&lt;EOF
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; subroutine ${proc}(sendbuf, recvbuf, count, datatype, op, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;          root, comm, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;    include &quot;mpif-common.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    ${type}, intent(in) :: sendbuf
</span><br>
<span class="quotelev2">&gt;&gt;    ${type}, intent(out) :: recvbuf
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: count
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: datatype
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: op
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev2">&gt;&gt;    call ${procedure}(sendbuf, recvbuf, count, datatype, op, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;          root, comm, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; end subroutine ${proc}
</span><br>
<span class="quotelev2">&gt;&gt; EOF
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if [ &quot;${type}&quot; != &quot;integer*4&quot; ] ; then
</span><br>
<span class="quotelev2">&gt;&gt;      cat &lt;&lt;EOF
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; subroutine ${proc}M(sendbuf, recvbuf, count, datatype, op, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;          root, comm, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;    include &quot;mpif-common.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: sendbuf
</span><br>
<span class="quotelev2">&gt;&gt;    ${type}, intent(out) :: recvbuf
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: count
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: datatype
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: op
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: root
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(in) :: comm
</span><br>
<span class="quotelev2">&gt;&gt;    integer, intent(out) :: ierr
</span><br>
<span class="quotelev2">&gt;&gt;    call ${procedure}(sendbuf, recvbuf, count, datatype, op, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;          root, comm, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; end subroutine ${proc}M
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; EOF
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="1360.php">Peter Kjellström: "Re: [OMPI users] Wont run with 1.0.2"</a>
<li><strong>Previous message:</strong> <a href="1358.php">Jan De Laet: "Re: [OMPI users] openmpi-1.1a9r10157 Fails to build with Nag, f95Compiler // and Pathscale"</a>
<li><strong>In reply to:</strong> <a href="1343.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<!-- nextthread="start" -->
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
