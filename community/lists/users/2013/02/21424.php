<?
$subject_val = "Re: [OMPI users] MPI send recv confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 18 16:00:17 2013" -->
<!-- isoreceived="20130218210017" -->
<!-- sent="Mon, 18 Feb 2013 20:59:55 +0000" -->
<!-- isosent="20130218205955" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI send recv confusion" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F48C8C_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51227AAE.7020504_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-18 15:59:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21425.php">Pradeep Jha: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Previous message:</strong> <a href="21423.php">Gus Correa: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>In reply to:</strong> <a href="21423.php">Gus Correa: "Re: [OMPI users] MPI send recv confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21425.php">Pradeep Jha: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Reply:</strong> <a href="21425.php">Pradeep Jha: "Re: [OMPI users] MPI send recv confusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1.  The problem is that you didn't declare status or ierr.  Since you didn't declare status, you're buffer overflowing, and random Bad Things happen from there.
<br>
<p>You should *always* &quot;implicit none&quot; to catch these kinds of errors.
<br>
<p><p>On Feb 18, 2013, at 2:02 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Pradeep
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For what it is worth, in the MPI Fortran bindings/calls the
</span><br>
<span class="quotelev1">&gt; datatype to use is &quot;MPI_INTEGER&quot;, not &quot;mpi_int&quot; (which you used;
</span><br>
<span class="quotelev1">&gt; MPI_INT is in the MPI C bindings):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://linux.die.net/man/3/mpi_integer">http://linux.die.net/man/3/mpi_integer</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, just to prevent variables to inadvertently come with
</span><br>
<span class="quotelev1">&gt; the wrong type, you could add:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to the top of your code.
</span><br>
<span class="quotelev1">&gt; You already have a non-declared &quot;ierr&quot; in &quot;call mpi_send&quot;.
</span><br>
<span class="quotelev1">&gt; (You declared &quot;ierror&quot; as an integer, but not &quot;ierr&quot;.)
</span><br>
<span class="quotelev1">&gt; Although this one may not cause any harm;
</span><br>
<span class="quotelev1">&gt; names starting with &quot;i&quot; are integers by default, in old Fortran.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 02/18/2013 01:26 PM, jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Pradeep
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure if this is the reason, but usually it is a bad idea to
</span><br>
<span class="quotelev2">&gt;&gt; force an order of receives (such as you do in your receive loop -
</span><br>
<span class="quotelev2">&gt;&gt; first from sender 1 then from sender 2 then from sender 3)
</span><br>
<span class="quotelev2">&gt;&gt; Unless you implement it so, there is no guarantee the sends are
</span><br>
<span class="quotelev2">&gt;&gt; performed in this order. B
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is better if you accept messages from all senders (MPI_ANY_SOURCE)
</span><br>
<span class="quotelev2">&gt;&gt; instead of particular ranks and then check where the
</span><br>
<span class="quotelev2">&gt;&gt; message came from by examining the status fields
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="http://www.mpi-forum.org/docs/mpi22-report/node47.htm">http://www.mpi-forum.org/docs/mpi22-report/node47.htm</a>)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hope this helps
</span><br>
<span class="quotelev2">&gt;&gt;   Jody
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Feb 18, 2013 at 5:06 PM, Pradeep Jha
</span><br>
<span class="quotelev2">&gt;&gt; &lt;pradeep_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have attached a sample of the MPI program I am trying to write. When I run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this program using &quot;mpirun -np 4 a.out&quot;, my output is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Sender:            1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data received from            1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Sender:            2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data received from            1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Sender:            2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And the run hangs there. I dont understand why does the &quot;sender&quot; variable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; change its value after MPI_recv? Any ideas?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pradeep
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  program mpi_test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   include  'mpif.h'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !----------------( Initialize variables )--------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   integer, dimension(3) :: recv, send
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   integer :: sender, np, rank, ierror
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   call  mpi_init( ierror )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   call  mpi_comm_rank( mpi_comm_world, rank, ierror )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   call  mpi_comm_size( mpi_comm_world, np, ierror )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !----------------( Main program )--------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !     receive the data from the other processors
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if (rank.eq.0) then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      do sender = 1, np-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         print *, &quot;Sender: &quot;, sender
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         call mpi_recv(recv, 3, mpi_int, sender, 1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &amp;        mpi_comm_world, status, ierror)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         print *, &quot;Data received from &quot;,sender
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      end do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   end if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !   send the data to the main processor
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   if (rank.ne.0) then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      send(1) = 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      send(2) = 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      send(3) = 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      call mpi_send(send, 3, mpi_int, 0, 1, mpi_comm_world, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   end if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !----------------( clean up )--------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   call mpi_finalize(ierror)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   end program mpi_test`
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="21425.php">Pradeep Jha: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Previous message:</strong> <a href="21423.php">Gus Correa: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>In reply to:</strong> <a href="21423.php">Gus Correa: "Re: [OMPI users] MPI send recv confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21425.php">Pradeep Jha: "Re: [OMPI users] MPI send recv confusion"</a>
<li><strong>Reply:</strong> <a href="21425.php">Pradeep Jha: "Re: [OMPI users] MPI send recv confusion"</a>
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
