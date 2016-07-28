<?
$subject_val = "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 09:28:59 2010" -->
<!-- isoreceived="20100322132859" -->
<!-- sent="Mon, 22 Mar 2010 09:28:52 -0400" -->
<!-- isosent="20100322132852" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)" -->
<!-- id="OF2C7586C1.B6556894-ON852576EE.00493629-852576EE.004A0DE5_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="SNT110-W5B601640061196C8133B48B290_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-22 09:28:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12394.php">ananda.mudar_at_[hidden]: "[OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled"</a>
<li><strong>Previous message:</strong> <a href="12392.php">Shiqing Fan: "Re: [OMPI users] compiling C++ programs in windows"</a>
<li><strong>In reply to:</strong> <a href="12384.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12214.php">Prentice Bisbal: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
abc def
<br>
<p>The MPI_Barrier call in the parent must be on the intercomm returned by the
<br>
spawn.   The call in the children must be on MPI_COMM_PARENT.
<br>
<p>The semantic of an MPI_Barrier call on an intercomm is:
<br>
<p>No MPI_Barrier caller in the local group returns until all members of the
<br>
remote group have made the call.  Note that this is symetrical. In the
<br>
parent, the barrier blocks until all children tasks have called and in the
<br>
child, all callers block until the parent tasks have all called.  A task in
<br>
the parent can return before all members of the parent group have called as
<br>
long as all members of the child group have. Same for children - the
<br>
barrier is with respect to the remote group ONLY.
<br>
<p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 03/19/2010 09:44:06 PM:
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, related to the comment about the processes being
</span><br>
<span class="quotelev1">&gt; connected, a test of MPI_BARRIER across the child and parent was
</span><br>
<span class="quotelev1">&gt; unsuccessful: the child and parent did not wait for each other with
</span><br>
<span class="quotelev1">&gt; the following commands:
</span><br>
<span class="quotelev1">&gt; CALL MPI_BARRIER(MPI_COMM_WORLD,ierr) ! in parent
</span><br>
<span class="quotelev1">&gt; CALL MPI_BARRIER(MPI_COMM_WORLD,ierr) ! in child
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12393/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12394.php">ananda.mudar_at_[hidden]: "[OMPI users] mpirun with -am ft-enable-cr option runs slow if hyperthreading is disabled"</a>
<li><strong>Previous message:</strong> <a href="12392.php">Shiqing Fan: "Re: [OMPI users] compiling C++ programs in windows"</a>
<li><strong>In reply to:</strong> <a href="12384.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12214.php">Prentice Bisbal: "Re: [OMPI users] running external program on same	processor	(Fortran)"</a>
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
