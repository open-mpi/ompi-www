<?
$subject_val = "Re: [OMPI users] Fortran MPI Struct with Allocatable Array";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  2 14:56:08 2010" -->
<!-- isoreceived="20100802185608" -->
<!-- sent="Mon, 02 Aug 2010 11:54:44 -0700" -->
<!-- isosent="20100802185444" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran MPI Struct with Allocatable Array" -->
<!-- id="4C571474.9040403_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinUa9+ANmKGBbsWpbT+f52w5uFXcHKKFkx-7AuD_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran MPI Struct with Allocatable Array<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-02 14:54:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13897.php">Terry Frankcombe: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Previous message:</strong> <a href="13895.php">Allen Barnett: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13882.php">Jeremy Roberts: "[OMPI users] Fortran MPI Struct with Allocatable Array"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
I can't give you a complete answer, but I think this is less an MPI
question and more of a Fortran question.&nbsp; The question is if you have a
Fortran derived type, one of whose components is a POINTER, what does
the data structure look like in linear memory?&nbsp; I could imagine the
answer is implementation dependent.&nbsp; Anyhow, here is a sample, non-MPI,
Fortran program that illustrates the question:<br>
<br>
% cat b.f90<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; type :: small<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; integer, pointer :: array(:)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; end type small<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; type(small) :: lala<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; integer, pointer :: array(:)<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; n = 20<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; allocate( lala%array(n) )<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; allocate(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; array(n) )<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lala%array = (/ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
15, 16, 17, 18, 19, 20 /)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; array = (/ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
15, 16, 17, 18, 19, 20 /)<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call sub(lala)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call sub(lala%array)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call sub(&nbsp;&nbsp;&nbsp;&nbsp; array)<br>
end<br>
<br>
subroutine sub(x)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; integer x(20)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; write(6,*) x<br>
end<br>
% f90 b.f90<br>
% a.out<br>
&nbsp;599376 20 4 599372 1 20 -4197508 1 2561 0 33 0 0 0 0 0 0 0 0 0<br>
&nbsp;1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20<br>
&nbsp;1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20<br>
% <br>
<br>
So, your model of 20 consecutive words does not work if you pass the
derived type.&nbsp; It does work if you pass the POINTER component.&nbsp; This is
with Oracle (Sun) Studio Fortran.&nbsp; Again, I can imagine the behavior
depends on the Fortran compiler.<br>
<br>
I suspect what's going on is that a POINTER is a complicated data
structure that has all sorts of metadata in it, but if you pass a
POINTER the compiler knows to pass the thing you're pointing to rather
than the metadata itself.<br>
<br>
Jeremy Roberts wrote:
<blockquote
 cite="midAANLkTinUa9+ANmKGBbsWpbT+f52w5uFXcHKKFkx-7AuD@mail.gmail.com"
 type="cite"><font><font size="2">I'm trying to parallelize a Fortran
code with rather complicated derived types full of pointer arrays.&nbsp;
When I build the MPI type for sending, all the static components are
sent, but the pointer arrays are not (and retain initial values).&nbsp; I
imagine this has to do with memory addresses when creating the MPI
struct, but I have no idea how to fix it.<br>
  <br>
I've included a simple code illustrating my issue below.&nbsp; Any
suggestions?<br>
  <br>
program mpi_struct_example<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; use mpi<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; implicit none<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ! declarations<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; type :: small<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; real, pointer :: array(:)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; end type small<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; type(small) :: lala<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; integer :: stat, counts(1), types(1), ierr, iam, n=0, MPI_SMALL<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; integer (kind=MPI_ADDRESS_KIND) :: displs(1)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ! initialize MPI and get my rank<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_INIT( ierr )<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_COMM_RANK( MPI_COMM_WORLD, iam, ierr )<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; n = 20<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; allocate( lala%array(n) )<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lala%array = 2.0<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ! build block counts, displacements, and oldtypes<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; counts&nbsp;&nbsp;&nbsp;&nbsp; = (/n/)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; displs&nbsp;&nbsp;&nbsp;&nbsp; = (/0/)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; types&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; = (/MPI_REAL/)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ! make and commit new type<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_TYPE_CREATE_STRUCT( 1, counts, displs, types, MPI_SMALL,
ierr )<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_TYPE_COMMIT( MPI_SMALL, ierr )<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if (iam .eq. 0) then<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ! reset the value of the array<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lala%array&nbsp; = 1.0 <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_SEND( lala, 1, MPI_SMALL, 1, 1, MPI_COMM_WORLD,
ierr)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ! this doesn't work<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; !call MPI_SEND( lala%array, n, MPI_REAL, 1, 1,
MPI_COMM_WORLD, ierr) ! this does work<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; write (*,*) "iam ",iam," and lala%array(1)&nbsp; = ",
lala%array(1)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; else<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_RECV( lala, 1, MPI_SMALL, 0, 1, MPI_COMM_WORLD,
stat, ierr )&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ! this doesn't work<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; !call MPI_RECV( lala%array, n, MPI_REAL, 0, 1,
MPI_COMM_WORLD, stat, ierr ) ! this does work<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; write (*,*) "iam ",iam," and lala%array(1)&nbsp; = ",
lala%array(1), " ( should be 1.0)"<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; end if<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_FINALIZE(ierr)<br>
end program mpi_struct_example</font></font></blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13897.php">Terry Frankcombe: "Re: [OMPI users] Accessing to the send buffer"</a>
<li><strong>Previous message:</strong> <a href="13895.php">Allen Barnett: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13882.php">Jeremy Roberts: "[OMPI users] Fortran MPI Struct with Allocatable Array"</a>
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
