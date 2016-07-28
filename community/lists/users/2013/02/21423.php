<?
$subject_val = "Re: [OMPI users] MPI send recv confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 18 14:02:10 2013" -->
<!-- isoreceived="20130218190210" -->
<!-- sent="Mon, 18 Feb 2013 14:02:06 -0500" -->
<!-- isosent="20130218190206" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI send recv confusion" -->
<!-- id="51227AAE.7020504_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKbzMGcmLvBuAwxSO1wXSk3PrFrA1GCxa7H+LX0yzrYmXSQNgg_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-18 14:02:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21424.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Previous message:</strong> <a href="21422.php">jody: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>In reply to:</strong> <a href="21422.php">jody: "Re: [OMPI users] MPI send recv confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21424.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Reply:</strong> <a href="21424.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI send recv confusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pradeep
<br>
<p>For what it is worth, in the MPI Fortran bindings/calls the
<br>
datatype to use is &quot;MPI_INTEGER&quot;, not &quot;mpi_int&quot; (which you used;
<br>
MPI_INT is in the MPI C bindings):
<br>
<p><a href="http://linux.die.net/man/3/mpi_integer">http://linux.die.net/man/3/mpi_integer</a>
<br>
<p>Also, just to prevent variables to inadvertently come with
<br>
the wrong type, you could add:
<br>
<p>implicit none
<br>
<p>to the top of your code.
<br>
You already have a non-declared &quot;ierr&quot; in &quot;call mpi_send&quot;.
<br>
(You declared &quot;ierror&quot; as an integer, but not &quot;ierr&quot;.)
<br>
Although this one may not cause any harm;
<br>
names starting with &quot;i&quot; are integers by default, in old Fortran.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p>On 02/18/2013 01:26 PM, jody wrote:
<br>
<span class="quotelev1">&gt; Hi Pradeep
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure if this is the reason, but usually it is a bad idea to
</span><br>
<span class="quotelev1">&gt; force an order of receives (such as you do in your receive loop -
</span><br>
<span class="quotelev1">&gt; first from sender 1 then from sender 2 then from sender 3)
</span><br>
<span class="quotelev1">&gt; Unless you implement it so, there is no guarantee the sends are
</span><br>
<span class="quotelev1">&gt; performed in this order. B
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is better if you accept messages from all senders (MPI_ANY_SOURCE)
</span><br>
<span class="quotelev1">&gt; instead of particular ranks and then check where the
</span><br>
<span class="quotelev1">&gt; message came from by examining the status fields
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.mpi-forum.org/docs/mpi22-report/node47.htm">http://www.mpi-forum.org/docs/mpi22-report/node47.htm</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps
</span><br>
<span class="quotelev1">&gt;    Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 18, 2013 at 5:06 PM, Pradeep Jha
</span><br>
<span class="quotelev1">&gt; &lt;pradeep_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have attached a sample of the MPI program I am trying to write. When I run
</span><br>
<span class="quotelev2">&gt;&gt; this program using &quot;mpirun -np 4 a.out&quot;, my output is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Sender:            1
</span><br>
<span class="quotelev2">&gt;&gt;   Data received from            1
</span><br>
<span class="quotelev2">&gt;&gt;   Sender:            2
</span><br>
<span class="quotelev2">&gt;&gt;   Data received from            1
</span><br>
<span class="quotelev2">&gt;&gt;   Sender:            2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And the run hangs there. I dont understand why does the &quot;sender&quot; variable
</span><br>
<span class="quotelev2">&gt;&gt; change its value after MPI_recv? Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pradeep
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   program mpi_test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    include  'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; !----------------( Initialize variables )--------------------
</span><br>
<span class="quotelev2">&gt;&gt;    integer, dimension(3) :: recv, send
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    integer :: sender, np, rank, ierror
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    call  mpi_init( ierror )
</span><br>
<span class="quotelev2">&gt;&gt;    call  mpi_comm_rank( mpi_comm_world, rank, ierror )
</span><br>
<span class="quotelev2">&gt;&gt;    call  mpi_comm_size( mpi_comm_world, np, ierror )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; !----------------( Main program )--------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; !     receive the data from the other processors
</span><br>
<span class="quotelev2">&gt;&gt;    if (rank.eq.0) then
</span><br>
<span class="quotelev2">&gt;&gt;       do sender = 1, np-1
</span><br>
<span class="quotelev2">&gt;&gt;          print *, &quot;Sender: &quot;, sender
</span><br>
<span class="quotelev2">&gt;&gt;          call mpi_recv(recv, 3, mpi_int, sender, 1,
</span><br>
<span class="quotelev2">&gt;&gt;   &amp;        mpi_comm_world, status, ierror)
</span><br>
<span class="quotelev2">&gt;&gt;          print *, &quot;Data received from &quot;,sender
</span><br>
<span class="quotelev2">&gt;&gt;       end do
</span><br>
<span class="quotelev2">&gt;&gt;    end if
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; !   send the data to the main processor
</span><br>
<span class="quotelev2">&gt;&gt;    if (rank.ne.0) then
</span><br>
<span class="quotelev2">&gt;&gt;       send(1) = 3
</span><br>
<span class="quotelev2">&gt;&gt;       send(2) = 4
</span><br>
<span class="quotelev2">&gt;&gt;       send(3) = 4
</span><br>
<span class="quotelev2">&gt;&gt;       call mpi_send(send, 3, mpi_int, 0, 1, mpi_comm_world, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;    end if
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; !----------------( clean up )--------------------
</span><br>
<span class="quotelev2">&gt;&gt;    call mpi_finalize(ierror)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    return
</span><br>
<span class="quotelev2">&gt;&gt;    end program mpi_test`
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
<li><strong>Next message:</strong> <a href="21424.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Previous message:</strong> <a href="21422.php">jody: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>In reply to:</strong> <a href="21422.php">jody: "Re: [OMPI users] MPI send recv confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21424.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Reply:</strong> <a href="21424.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI send recv confusion"</a>
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
