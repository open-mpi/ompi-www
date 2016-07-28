<?
$subject_val = "[OMPI devel] Finalize without Detach???";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 15:17:44 2009" -->
<!-- isoreceived="20091118201744" -->
<!-- sent="Wed, 18 Nov 2009 12:18:58 -0800" -->
<!-- isosent="20091118201858" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] Finalize without Detach???" -->
<!-- id="4B0456B2.6080203_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] Finalize without Detach???<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-18 15:18:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7126.php">George Bosilca: "Re: [OMPI devel] Finalize without Detach???"</a>
<li><strong>Previous message:</strong> <a href="7124.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7126.php">George Bosilca: "Re: [OMPI devel] Finalize without Detach???"</a>
<li><strong>Reply:</strong> <a href="7126.php">George Bosilca: "Re: [OMPI devel] Finalize without Detach???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What's the story about calling MPI_Finalize without first calling 
<br>
MPI_Buffer_detach?
<br>
<p>If I do an MPI_Bsend followed by MPI_Finalize, the corresponding 
<br>
MPI_Recv takes forever.  In contrast, if I insert an MPI_Buffer_detach, 
<br>
then performance is reasonable.  I can imagine the explanation.  I 
<br>
suspect that MPI_Bsend leaves the message in a local buffer, and so you 
<br>
need to progress the sender in order for the receive to complete.  
<br>
MPI_Buffer_detach must progress more aggressively than MPI_Finalize.
<br>
<p>1) Any guidance from MPI gurus regarding what is proper practice?
<br>
2) Any guidance from OMPI devels what sort of fix makes sense?
<br>
<p>I attach a test case.  On some platforms, the final delay can be on 
<br>
order of a minute.
<br>
<p>% mpif90          main.F90
<br>
% mpirun -np 2 -mca btl sm,self a.out
<br>
&nbsp;&nbsp;&nbsp;1    0.021321
<br>
&nbsp;&nbsp;&nbsp;0    0.066568
<br>
&nbsp;&nbsp;&nbsp;1    0.020978
<br>
&nbsp;&nbsp;&nbsp;0    0.061625
<br>
&nbsp;&nbsp;&nbsp;1    0.021969
<br>
&nbsp;&nbsp;&nbsp;0    0.062380
<br>
&nbsp;&nbsp;&nbsp;1    0.020938
<br>
&nbsp;&nbsp;&nbsp;0    0.064401
<br>
&nbsp;&nbsp;&nbsp;1    0.020759
<br>
&nbsp;&nbsp;&nbsp;0    4.098010          # yipes! last receive takes a long time!
<br>
% mpif90 -DDETACH main.F90
<br>
% mpirun -np 2 -mca btl sm,self a.out
<br>
&nbsp;&nbsp;&nbsp;1    0.020913
<br>
&nbsp;&nbsp;&nbsp;0    0.064076
<br>
&nbsp;&nbsp;&nbsp;1    0.020746
<br>
&nbsp;&nbsp;&nbsp;0    0.061015
<br>
&nbsp;&nbsp;&nbsp;1    0.020454
<br>
&nbsp;&nbsp;&nbsp;0    0.061780
<br>
&nbsp;&nbsp;&nbsp;1    0.020457
<br>
&nbsp;&nbsp;&nbsp;0    0.060776
<br>
&nbsp;&nbsp;&nbsp;1    0.020619
<br>
&nbsp;&nbsp;&nbsp;0    0.062484
<br>
<p>
<br><p>
&nbsp;&nbsp;include &quot;mpif.h&quot;
<br>
&nbsp;&nbsp;integer, parameter :: nbufbytes = 16000000, nsendbytes = 15892480
<br>
&nbsp;&nbsp;real(8) buf(nbufbytes/8), x(nsendbytes/8), t
<br>
&nbsp;&nbsp;real(8) buf2
<br>
&nbsp;&nbsp;integer mbufbytes
<br>
<p>&nbsp;&nbsp;call MPI_Init(ier)
<br>
&nbsp;&nbsp;call MPI_Comm_size(MPI_COMM_WORLD,np,ier)
<br>
&nbsp;&nbsp;call MPI_Comm_rank(MPI_COMM_WORLD,me,ier)
<br>
&nbsp;&nbsp;buf = 0.d0
<br>
&nbsp;&nbsp;x   = 0.d0
<br>
<p>&nbsp;&nbsp;if ( me == 1 ) call MPI_Buffer_attach(buf, nbufbytes, ier)
<br>
<p>&nbsp;&nbsp;do i = 1, 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Barrier(MPI_COMM_WORLD,ier)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;t = MPI_Wtime()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( me == 0 ) call MPI_Recv (x,nsendbytes,MPI_BYTE,1,343,MPI_COMM_WORLD,MPI_STATUS_IGNORE,ier)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( me == 1 ) call MPI_Bsend(x,nsendbytes,MPI_BYTE,0,343,MPI_COMM_WORLD,                  ier)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;t = MPI_Wtime() - t
<br>
&nbsp;&nbsp;&nbsp;&nbsp;write(6,'(i4,f12.6,f8.3)') me, t
<br>
&nbsp;&nbsp;end do
<br>
<p>#ifdef DETACH
<br>
&nbsp;&nbsp;if ( me == 1 ) call MPI_Buffer_detach(buf2, mbufbytes, ier)
<br>
#endif
<br>
<p>&nbsp;&nbsp;call MPI_Finalize(ier)
<br>
end
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7126.php">George Bosilca: "Re: [OMPI devel] Finalize without Detach???"</a>
<li><strong>Previous message:</strong> <a href="7124.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7126.php">George Bosilca: "Re: [OMPI devel] Finalize without Detach???"</a>
<li><strong>Reply:</strong> <a href="7126.php">George Bosilca: "Re: [OMPI devel] Finalize without Detach???"</a>
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
