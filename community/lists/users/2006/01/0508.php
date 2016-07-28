<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 18 00:18:17 2006" -->
<!-- isoreceived="20060118051817" -->
<!-- sent="Tue, 17 Jan 2006 21:18:06 -0800" -->
<!-- isosent="20060118051806" -->
<!-- name="Glenn Morris" -->
<!-- email="gmorris_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Trouble combining OpenMPI and OpenMP" -->
<!-- id="4ppsmqjer5.fsf_at_iris03.slac.stanford.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="rz3bjobtvk.fsf_at_iris01.slac.stanford.edu" -->
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
<strong>From:</strong> Glenn Morris (<em>gmorris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-18 00:18:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0509.php">Jean-Christophe Hugly: "[O-MPI users] does btl_openib work ?"</a>
<li><strong>Previous message:</strong> <a href="0507.php">Yves Reymen: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>In reply to:</strong> <a href="0504.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0521.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Reply:</strong> <a href="0521.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't know if this will be of help, but on further investigation the
<br>
problem seems to be some code that essentially does the following:
<br>
<p><p>!$OMP PARALLEL DO
<br>
do i=1,n
<br>
&nbsp;&nbsp;do j=1,m
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call sub(arg1,...)
<br>
&nbsp;&nbsp;end do
<br>
end do
<br>
!$OMP END PARALLEL DO
<br>
<p><p>where subroutine sub allocates a temporary array:
<br>
<p><p>subroutine sub(arg1,...)
<br>
&nbsp;&nbsp;&nbsp;real, intent(in)  :: arg1
<br>
&nbsp;&nbsp;&nbsp;real, dimension(:), allocatable :: u
<br>
<p>&nbsp;&nbsp;&nbsp;allocate(u(1:arg1))
<br>
<p>&nbsp;&nbsp;&nbsp;...
<br>
<p>&nbsp;&nbsp;&nbsp;deallocate(u)
<br>
<p>end subroutine
<br>
<p><p>The only backtrace I can get is:
<br>
<p>Thread received signal SEGV
<br>
__cfree () in /lib/tls/libc-2.3.2.so
<br>
(idb) bt
<br>
#0  0x008a91f6 in __cfree () in /lib/tls/libc-2.3.2.so
<br>
#1  0x081bdf46 in opal_mem_free_free_hook () in &lt;executable&gt;
<br>
<p><p>If I change the subroutine to make u have a fixed size larger than the
<br>
largest possible required value, it runs OK past that point (but then
<br>
tends to crash further on in the code with a similar sounding problem
<br>
in __cfree or somesuch).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0509.php">Jean-Christophe Hugly: "[O-MPI users] does btl_openib work ?"</a>
<li><strong>Previous message:</strong> <a href="0507.php">Yves Reymen: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>In reply to:</strong> <a href="0504.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0521.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Reply:</strong> <a href="0521.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
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
