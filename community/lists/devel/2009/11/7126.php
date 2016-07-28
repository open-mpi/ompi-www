<?
$subject_val = "Re: [OMPI devel] Finalize without Detach???";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 17:47:22 2009" -->
<!-- isoreceived="20091118224722" -->
<!-- sent="Wed, 18 Nov 2009 14:47:10 -0800" -->
<!-- isosent="20091118224710" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Finalize without Detach???" -->
<!-- id="6E7F3C3B-D7F0-4AEE-B4C8-BEFE3908B5CF_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B0456B2.6080203_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Finalize without Detach???<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-18 17:47:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7127.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7125.php">Eugene Loh: "[OMPI devel] Finalize without Detach???"</a>
<li><strong>In reply to:</strong> <a href="7125.php">Eugene Loh: "[OMPI devel] Finalize without Detach???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7128.php">Eugene Loh: "Re: [OMPI devel] Finalize without Detach???"</a>
<li><strong>Reply:</strong> <a href="7128.php">Eugene Loh: "Re: [OMPI devel] Finalize without Detach???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The proper practice based on the MPI Standard will be to call the  
<br>
detach function before finalize. From a pure OMPI perspective, we do  
<br>
the same thing in both cases, i.e. we wait until all pending  
<br>
communications on the buffer are completed to detach it. I think dhe  
<br>
difference in performance came from the fact that in case of  
<br>
MPI_Finalize we call the poll at every iteration in opal_progress.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 18, 2009, at 12:18 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; What's the story about calling MPI_Finalize without first calling  
</span><br>
<span class="quotelev1">&gt; MPI_Buffer_detach?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I do an MPI_Bsend followed by MPI_Finalize, the corresponding  
</span><br>
<span class="quotelev1">&gt; MPI_Recv takes forever.  In contrast, if I insert an  
</span><br>
<span class="quotelev1">&gt; MPI_Buffer_detach, then performance is reasonable.  I can imagine  
</span><br>
<span class="quotelev1">&gt; the explanation.  I suspect that MPI_Bsend leaves the message in a  
</span><br>
<span class="quotelev1">&gt; local buffer, and so you need to progress the sender in order for  
</span><br>
<span class="quotelev1">&gt; the receive to complete.  MPI_Buffer_detach must progress more  
</span><br>
<span class="quotelev1">&gt; aggressively than MPI_Finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Any guidance from MPI gurus regarding what is proper practice?
</span><br>
<span class="quotelev1">&gt; 2) Any guidance from OMPI devels what sort of fix makes sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I attach a test case.  On some platforms, the final delay can be on  
</span><br>
<span class="quotelev1">&gt; order of a minute.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % mpif90          main.F90
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 -mca btl sm,self a.out
</span><br>
<span class="quotelev1">&gt;  1    0.021321
</span><br>
<span class="quotelev1">&gt;  0    0.066568
</span><br>
<span class="quotelev1">&gt;  1    0.020978
</span><br>
<span class="quotelev1">&gt;  0    0.061625
</span><br>
<span class="quotelev1">&gt;  1    0.021969
</span><br>
<span class="quotelev1">&gt;  0    0.062380
</span><br>
<span class="quotelev1">&gt;  1    0.020938
</span><br>
<span class="quotelev1">&gt;  0    0.064401
</span><br>
<span class="quotelev1">&gt;  1    0.020759
</span><br>
<span class="quotelev1">&gt;  0    4.098010          # yipes! last receive takes a long time!
</span><br>
<span class="quotelev1">&gt; % mpif90 -DDETACH main.F90
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 -mca btl sm,self a.out
</span><br>
<span class="quotelev1">&gt;  1    0.020913
</span><br>
<span class="quotelev1">&gt;  0    0.064076
</span><br>
<span class="quotelev1">&gt;  1    0.020746
</span><br>
<span class="quotelev1">&gt;  0    0.061015
</span><br>
<span class="quotelev1">&gt;  1    0.020454
</span><br>
<span class="quotelev1">&gt;  0    0.061780
</span><br>
<span class="quotelev1">&gt;  1    0.020457
</span><br>
<span class="quotelev1">&gt;  0    0.060776
</span><br>
<span class="quotelev1">&gt;  1    0.020619
</span><br>
<span class="quotelev1">&gt;  0    0.062484
</span><br>
<span class="quotelev1">&gt;  include &quot;mpif.h&quot;
</span><br>
<span class="quotelev1">&gt;  integer, parameter :: nbufbytes = 16000000, nsendbytes = 15892480
</span><br>
<span class="quotelev1">&gt;  real(8) buf(nbufbytes/8), x(nsendbytes/8), t
</span><br>
<span class="quotelev1">&gt;  real(8) buf2
</span><br>
<span class="quotelev1">&gt;  integer mbufbytes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  call MPI_Init(ier)
</span><br>
<span class="quotelev1">&gt;  call MPI_Comm_size(MPI_COMM_WORLD,np,ier)
</span><br>
<span class="quotelev1">&gt;  call MPI_Comm_rank(MPI_COMM_WORLD,me,ier)
</span><br>
<span class="quotelev1">&gt;  buf = 0.d0
</span><br>
<span class="quotelev1">&gt;  x   = 0.d0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if ( me == 1 ) call MPI_Buffer_attach(buf, nbufbytes, ier)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  do i = 1, 5
</span><br>
<span class="quotelev1">&gt;    call MPI_Barrier(MPI_COMM_WORLD,ier)
</span><br>
<span class="quotelev1">&gt;    t = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt;    if ( me == 0 ) call MPI_Recv (x,nsendbytes,MPI_BYTE, 
</span><br>
<span class="quotelev1">&gt; 1,343,MPI_COMM_WORLD,MPI_STATUS_IGNORE,ier)
</span><br>
<span class="quotelev1">&gt;    if ( me == 1 ) call MPI_Bsend(x,nsendbytes,MPI_BYTE, 
</span><br>
<span class="quotelev1">&gt; 0,343,MPI_COMM_WORLD,                  ier)
</span><br>
<span class="quotelev1">&gt;    t = MPI_Wtime() - t
</span><br>
<span class="quotelev1">&gt;    write(6,'(i4,f12.6,f8.3)') me, t
</span><br>
<span class="quotelev1">&gt;  end do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef DETACH
</span><br>
<span class="quotelev1">&gt;  if ( me == 1 ) call MPI_Buffer_detach(buf2, mbufbytes, ier)
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  call MPI_Finalize(ier)
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7127.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7125.php">Eugene Loh: "[OMPI devel] Finalize without Detach???"</a>
<li><strong>In reply to:</strong> <a href="7125.php">Eugene Loh: "[OMPI devel] Finalize without Detach???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7128.php">Eugene Loh: "Re: [OMPI devel] Finalize without Detach???"</a>
<li><strong>Reply:</strong> <a href="7128.php">Eugene Loh: "Re: [OMPI devel] Finalize without Detach???"</a>
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
