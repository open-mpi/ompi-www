<?
$subject_val = "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 11:34:08 2013" -->
<!-- isoreceived="20130228163408" -->
<!-- sent="Thu, 28 Feb 2013 17:34:03 +0100" -->
<!-- isosent="20130228163403" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine" -->
<!-- id="1362069243.17607.17.camel_at_lurvas.hpc2n.umu.se" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAL_eiiRuWGrDtFh1fZdX2kedzdM72kdBo0bkQ2gS=Qb8Af1McQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine<br>
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-28 11:34:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21485.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Previous message:</strong> <a href="21483.php">Ralph Castain: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>In reply to:</strong> <a href="21481.php">Pradeep Jha: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21488.php">Pradeep Jha: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Reply:</strong> <a href="21488.php">Pradeep Jha: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2013-03-01 at 01:24 +0900, Pradeep Jha wrote:
<br>
<span class="quotelev1">&gt; Sorry for those mistakes. I addressed all the three problems
</span><br>
<span class="quotelev1">&gt; - I put &quot;implicit none&quot; at the top of main program
</span><br>
<span class="quotelev1">&gt; - I initialized tag.
</span><br>
<span class="quotelev1">&gt; - changed MPI_INT to MPI_INTEGER
</span><br>
<span class="quotelev1">&gt; - &quot;send_length&quot; should be just &quot;send&quot;, it was a typo.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But the code is still hanging in sendrecv. The present form is below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>&quot;tag&quot; isn't iniitalized to anything so it may very well be totally
<br>
different in all the processes.
<br>
ALWAYS initialize variables before using them.
<br>
<p><span class="quotelev1">&gt; main.f
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   program   main
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   implicit none 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   include  'mpif.h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   integer me, np, ierror
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call  MPI_init( ierror )
</span><br>
<span class="quotelev1">&gt;   call  MPI_comm_rank( mpi_comm_world, me, ierror )
</span><br>
<span class="quotelev1">&gt;   call  MPI_comm_size( mpi_comm_world, np, ierror )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call sendrecv(me, np)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call mpi_finalize( ierror )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   stop
</span><br>
<span class="quotelev1">&gt;   end
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sendrecv.f
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   subroutine sendrecv(me, np)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   include 'mpif.h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   integer np, me, sender, tag
</span><br>
<span class="quotelev1">&gt;   integer, dimension(mpi_status_size) :: status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   integer, dimension(1) :: recv, send
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   if (me.eq.0) then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      do sender = 1, np-1
</span><br>
<span class="quotelev1">&gt;         call mpi_recv(recv, 1, mpi_integer, sender, tag,
</span><br>
<span class="quotelev1">&gt;  &amp;           mpi_comm_world, status, ierror)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      end do
</span><br>
<span class="quotelev1">&gt;   end if
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   if ((me.ge.1).and.(me.lt.np)) then
</span><br>
<span class="quotelev1">&gt;      send(1) = me*12
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      call mpi_send(send, 1, mpi_integer, 0, tag,
</span><br>
<span class="quotelev1">&gt;  &amp;        mpi_comm_world, ierror)
</span><br>
<span class="quotelev1">&gt;   end if
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   return
</span><br>
<span class="quotelev1">&gt;   end
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21485.php">Reuti: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>Previous message:</strong> <a href="21483.php">Ralph Castain: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>In reply to:</strong> <a href="21481.php">Pradeep Jha: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21488.php">Pradeep Jha: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Reply:</strong> <a href="21488.php">Pradeep Jha: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
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
