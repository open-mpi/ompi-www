<?
$subject_val = "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 11:30:49 2013" -->
<!-- isoreceived="20130228163049" -->
<!-- sent="Thu, 28 Feb 2013 08:30:41 -0800" -->
<!-- isosent="20130228163041" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine" -->
<!-- id="FA6CF875-0CD5-4B03-AEC1-20915398ABB5_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-28 11:30:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21484.php">Ake Sandgren: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Previous message:</strong> <a href="21482.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>In reply to:</strong> <a href="21481.php">Pradeep Jha: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21484.php">Ake Sandgren: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't see tag being set to any value....
<br>
<p>On Feb 28, 2013, at 8:24 AM, Pradeep Jha &lt;pradeep_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for those mistakes. I addressed all the three problems
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
<span class="quotelev1">&gt; But the code is still hanging in sendrecv. The present form is below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; main.f
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2013/3/1 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 28, 2013, at 9:59 AM, Pradeep Jha &lt;pradeep_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is it possible to call the MPI_send and MPI_recv commands inside a subroutine and not the main program?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have written a minimal program for what I am trying to do. It is compiling fine but it is not working. The program just hangs in the &quot;sendrecv&quot; subroutine. Any ideas how can I do it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You seem to have several errors in the sendrecv subroutine.  I would strongly encourage you to use &quot;implicit none&quot; to avoid many of these errors.  Here's a few errors I see offhand:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - tag is not initialized
</span><br>
<span class="quotelev1">&gt; - what's send_length(1)?
</span><br>
<span class="quotelev1">&gt; - use MPI_INTEGER, not MPI_INT (MPI_INT = C int, MPI_INTEGER = Fortran INTEGER)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; main.f
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   program   main
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   include  'mpif.h'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   integer me, np, ierror
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   call  MPI_init( ierror )
</span><br>
<span class="quotelev2">&gt; &gt;   call  MPI_comm_rank( mpi_comm_world, me, ierror )
</span><br>
<span class="quotelev2">&gt; &gt;   call  MPI_comm_size( mpi_comm_world, np, ierror )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   call sendrecv(me, np)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   call mpi_finalize( ierror )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   stop
</span><br>
<span class="quotelev2">&gt; &gt;   end
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; sendrecv.f
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   subroutine sendrecv(me, np)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   include 'mpif.h'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   integer np, me, sender
</span><br>
<span class="quotelev2">&gt; &gt;   integer, dimension(mpi_status_size) :: status
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   integer, dimension(1) :: recv, send
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if (me.eq.0) then
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      do sender = 1, np-1
</span><br>
<span class="quotelev2">&gt; &gt;         call mpi_recv(recv, 1, mpi_int, sender, tag,
</span><br>
<span class="quotelev2">&gt; &gt;  &amp;           mpi_comm_world, status, ierror)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      end do
</span><br>
<span class="quotelev2">&gt; &gt;   end if
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if ((me.ge.1).and.(
</span><br>
<span class="quotelev2">&gt; &gt; me.lt.np
</span><br>
<span class="quotelev2">&gt; &gt; )) then
</span><br>
<span class="quotelev2">&gt; &gt;      send_length(1) = me*12
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      call mpi_send(send, 1, mpi_int, 0, tag,
</span><br>
<span class="quotelev2">&gt; &gt;  &amp;        mpi_comm_world, ierror)
</span><br>
<span class="quotelev2">&gt; &gt;   end if
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   return
</span><br>
<span class="quotelev2">&gt; &gt;   end
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21483/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21484.php">Ake Sandgren: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Previous message:</strong> <a href="21482.php">Ralph Castain: "Re: [OMPI users] Option -cpus-per-proc 2 not working with given machinefile?"</a>
<li><strong>In reply to:</strong> <a href="21481.php">Pradeep Jha: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21484.php">Ake Sandgren: "Re: [OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
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
