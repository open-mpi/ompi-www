<?
$subject_val = "Re: [OMPI users] MPI send recv confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 18 13:27:05 2013" -->
<!-- isoreceived="20130218182705" -->
<!-- sent="Mon, 18 Feb 2013 19:26:58 +0100" -->
<!-- isosent="20130218182658" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI send recv confusion" -->
<!-- id="CAKbzMGcmLvBuAwxSO1wXSk3PrFrA1GCxa7H+LX0yzrYmXSQNgg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAL_eiiSU0imCLrimtwwUoLk4YXj2zFy9_rAbtAaJHgY420bdnQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI send recv confusion<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-18 13:26:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21423.php">Gus Correa: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Previous message:</strong> <a href="21421.php">Pradeep Jha: "[OMPI users] MPI send recv confusion"</a>
<li><strong>In reply to:</strong> <a href="21421.php">Pradeep Jha: "[OMPI users] MPI send recv confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21423.php">Gus Correa: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Reply:</strong> <a href="21423.php">Gus Correa: "Re: [OMPI users] MPI send recv confusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pradeep
<br>
<p>I am not sure if this is the reason, but usually it is a bad idea to
<br>
force an order of receives (such as you do in your receive loop -
<br>
first from sender 1 then from sender 2 then from sender 3)
<br>
Unless you implement it so, there is no guarantee the sends are
<br>
performed in this order. B
<br>
<p>It is better if you accept messages from all senders (MPI_ANY_SOURCE)
<br>
instead of particular ranks and then check where the
<br>
message came from by examining the status fields
<br>
(<a href="http://www.mpi-forum.org/docs/mpi22-report/node47.htm">http://www.mpi-forum.org/docs/mpi22-report/node47.htm</a>)
<br>
<p>Hope this helps
<br>
&nbsp;&nbsp;Jody
<br>
<p><p>On Mon, Feb 18, 2013 at 5:06 PM, Pradeep Jha
<br>
&lt;pradeep_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have attached a sample of the MPI program I am trying to write. When I run
</span><br>
<span class="quotelev1">&gt; this program using &quot;mpirun -np 4 a.out&quot;, my output is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Sender:            1
</span><br>
<span class="quotelev1">&gt;  Data received from            1
</span><br>
<span class="quotelev1">&gt;  Sender:            2
</span><br>
<span class="quotelev1">&gt;  Data received from            1
</span><br>
<span class="quotelev1">&gt;  Sender:            2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the run hangs there. I dont understand why does the &quot;sender&quot; variable
</span><br>
<span class="quotelev1">&gt; change its value after MPI_recv? Any ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pradeep
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  program mpi_test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   include  'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !----------------( Initialize variables )--------------------
</span><br>
<span class="quotelev1">&gt;   integer, dimension(3) :: recv, send
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   integer :: sender, np, rank, ierror
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   call  mpi_init( ierror )
</span><br>
<span class="quotelev1">&gt;   call  mpi_comm_rank( mpi_comm_world, rank, ierror )
</span><br>
<span class="quotelev1">&gt;   call  mpi_comm_size( mpi_comm_world, np, ierror )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !----------------( Main program )--------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !     receive the data from the other processors
</span><br>
<span class="quotelev1">&gt;   if (rank.eq.0) then
</span><br>
<span class="quotelev1">&gt;      do sender = 1, np-1
</span><br>
<span class="quotelev1">&gt;         print *, &quot;Sender: &quot;, sender
</span><br>
<span class="quotelev1">&gt;         call mpi_recv(recv, 3, mpi_int, sender, 1,
</span><br>
<span class="quotelev1">&gt;  &amp;       mpi_comm_world, status, ierror)
</span><br>
<span class="quotelev1">&gt;         print *, &quot;Data received from &quot;,sender
</span><br>
<span class="quotelev1">&gt;      end do
</span><br>
<span class="quotelev1">&gt;   end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !   send the data to the main processor
</span><br>
<span class="quotelev1">&gt;   if (rank.ne.0) then
</span><br>
<span class="quotelev1">&gt;      send(1) = 3
</span><br>
<span class="quotelev1">&gt;      send(2) = 4
</span><br>
<span class="quotelev1">&gt;      send(3) = 4
</span><br>
<span class="quotelev1">&gt;      call mpi_send(send, 3, mpi_int, 0, 1, mpi_comm_world, ierr)
</span><br>
<span class="quotelev1">&gt;   end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !----------------( clean up )--------------------
</span><br>
<span class="quotelev1">&gt;   call mpi_finalize(ierror)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   return
</span><br>
<span class="quotelev1">&gt;   end program mpi_test`
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21423.php">Gus Correa: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Previous message:</strong> <a href="21421.php">Pradeep Jha: "[OMPI users] MPI send recv confusion"</a>
<li><strong>In reply to:</strong> <a href="21421.php">Pradeep Jha: "[OMPI users] MPI send recv confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21423.php">Gus Correa: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Reply:</strong> <a href="21423.php">Gus Correa: "Re: [OMPI users] MPI send recv confusion"</a>
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
