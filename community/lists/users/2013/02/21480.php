<?
$subject_val = "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 11:07:45 2013" -->
<!-- isoreceived="20130228160745" -->
<!-- sent="Thu, 28 Feb 2013 16:07:39 +0000" -->
<!-- isosent="20130228160739" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F637D5_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAL_eiiR8L6cf3cNqfq11HvY=RY1oYCPSPqRRJHmkcAO5LOw9ig_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-28 11:07:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21481.php">Pradeep Jha: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Previous message:</strong> <a href="21479.php">Bokassa: "[OMPI users] High cpu usage"</a>
<li><strong>In reply to:</strong> <a href="21477.php">Pradeep Jha: "[OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21481.php">Pradeep Jha: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Reply:</strong> <a href="21481.php">Pradeep Jha: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2013, at 9:59 AM, Pradeep Jha &lt;pradeep_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is it possible to call the MPI_send and MPI_recv commands inside a subroutine and not the main program?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; I have written a minimal program for what I am trying to do. It is compiling fine but it is not working. The program just hangs in the &quot;sendrecv&quot; subroutine. Any ideas how can I do it?
</span><br>
<p>You seem to have several errors in the sendrecv subroutine.  I would strongly encourage you to use &quot;implicit none&quot; to avoid many of these errors.  Here's a few errors I see offhand:
<br>
<p>- tag is not initialized
<br>
- what's send_length(1)?
<br>
- use MPI_INTEGER, not MPI_INT (MPI_INT = C int, MPI_INTEGER = Fortran INTEGER)
<br>
<p><p><span class="quotelev1">&gt; main.f
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   program   main
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
<span class="quotelev1">&gt;   integer np, me, sender
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
<span class="quotelev1">&gt;         call mpi_recv(recv, 1, mpi_int, sender, tag,
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
<span class="quotelev1">&gt;   if ((me.ge.1).and.(
</span><br>
<span class="quotelev1">&gt; me.lt.np
</span><br>
<span class="quotelev1">&gt; )) then
</span><br>
<span class="quotelev1">&gt;      send_length(1) = me*12
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      call mpi_send(send, 1, mpi_int, 0, tag,
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21481.php">Pradeep Jha: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Previous message:</strong> <a href="21479.php">Bokassa: "[OMPI users] High cpu usage"</a>
<li><strong>In reply to:</strong> <a href="21477.php">Pradeep Jha: "[OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21481.php">Pradeep Jha: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Reply:</strong> <a href="21481.php">Pradeep Jha: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
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
