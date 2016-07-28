<?
$subject_val = "Re: [OMPI users] Program deadlocks, on simple send/recv loop";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 12:53:44 2009" -->
<!-- isoreceived="20091203175344" -->
<!-- sent="Thu, 03 Dec 2009 09:55:09 -0800" -->
<!-- isosent="20091203175509" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program deadlocks, on simple send/recv loop" -->
<!-- id="4B17FB7D.1030907_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5839821C-518D-49E4-AE80-8E6F74AE9F1F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program deadlocks, on simple send/recv loop<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-03 12:55:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11404.php">Cupp, Matthew R: "[OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<li><strong>Previous message:</strong> <a href="11402.php">Jed Brown: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
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
Jeff Squyres wrote:
<blockquote cite="mid5839821C-518D-49E4-AE80-8E6F74AE9F1F@cisco.com"
 type="cite">
  <pre wrap="">On Dec 3, 2009, at 10:56 AM, Brock Palen wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">The allocation statement is ok:
allocate(vec(vec_size,vec_per_proc*(size-1)))

This allocates memory vec(32768, 2350)
    </pre>
  </blockquote>
  <pre wrap=""><!---->So this allocates 32768 rows, each with 2350 columns -- all stored contiguously in memory, in column-major order.  Does the language/compiler *guarantee* that the entire matrix is contiguous in memory?  Or does it only guarantee that the *columns* are contiguous in memory -- and there may be gaps between successive columns?
  </pre>
</blockquote>
I think you're getting one big contiguous block of memory and the
portions that are passed are contiguous, nonoverlapping pieces.<br>
<blockquote cite="mid5839821C-518D-49E4-AE80-8E6F74AE9F1F@cisco.com"
 type="cite">
  <pre wrap="">This means that in the first iteration, you're calling:
call MPI_RECV(vec(1, 2301), 32768, ...)

And in the last iteration, you're calling:
call MPI_RECV(vec(1, 2350), 32768, ...)

That doesn't seem right.  If I'm reading this right -- and I very well may not be -- it looks like successive receives will be partially overlaying the previous receive.</pre>
</blockquote>
No.&nbsp; In Fortran, leftmost index varies the fastest.&nbsp; E.g.,<br>
<br>
% cat y.f90<br>
&nbsp; integer a(2,2)<br>
&nbsp; a(1,1) = 11<br>
&nbsp; a(2,1) = 21<br>
&nbsp; a(1,2) = 12<br>
&nbsp; a(2,2) = 22<br>
&nbsp; call sub(a)<br>
end<br>
<br>
subroutine sub(a)<br>
&nbsp; integer a(4)<br>
&nbsp; write(6,*) a<br>
end<br>
% a.out<br>
&nbsp;11 21 12 22<br>
% <br>
<br>
Here is how I think of Brock's code:<br>
<br>
<tt>program sendbuf
<br>
<br>
&nbsp; include 'mpif.h'
<br>
<br>
&nbsp; integer, parameter :: n = 32 * 1024, m = 50
<br>
<br>
&nbsp; complex*16 buf(n)
<br>
<br>
&nbsp; call MPI_INIT(ierr)
<br>
&nbsp; call MPI_COMM_SIZE(MPI_COMM_WORLD, np, ierr)
<br>
&nbsp; call MPI_COMM_RANK(MPI_COMM_WORLD, me, ierr)
<br>
<br>
&nbsp; buf = 0
<br>
<br>
&nbsp; if ( me == 0 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp; do i = 1, np-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; do j = 1, m
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_RECV(buf, n, MPI_DOUBLE_COMPLEX, i, j,
MPI_COMM_WORLD, MPI_STATUS_IGNORE, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp; end do
<br>
&nbsp; else
<br>
&nbsp;&nbsp;&nbsp;&nbsp; do j = 1, m
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; call MPI_SEND( x, n, MPI_DOUBLE_COMPLEX, 0, j, MPI_COMM_WORLD,
ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp; end do
<br>
&nbsp; end if
<br>
<br>
&nbsp; call MPI_FINALIZE(ierr)
<br>
end</tt>
<br>
<br>
This version reuses send and receive buffers, but that's fine since
they're all blocking calls anyhow.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11404.php">Cupp, Matthew R: "[OMPI users] Dynamic Symbol Relocation in Plugin Shared Library"</a>
<li><strong>Previous message:</strong> <a href="11402.php">Jed Brown: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>In reply to:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
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
