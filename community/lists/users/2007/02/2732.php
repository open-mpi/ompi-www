<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 23 11:10:28 2007" -->
<!-- isoreceived="20070223161028" -->
<!-- sent="Fri, 23 Feb 2007 10:10:23 -0600" -->
<!-- isosent="20070223161023" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoall" -->
<!-- id="45DF11EF.90301_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070223130420.14999.qmail_at_webmail24.rediffmail.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-23 11:10:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2733.php">Brian W. Barrett: "Re: [OMPI users] configure tests broken for pthreads in some situations"</a>
<li><strong>Previous message:</strong> <a href="2731.php">George Bosilca: "Re: [OMPI users] MPI reduce ..."</a>
<li><strong>In reply to:</strong> <a href="2730.php">Chandan  Basu: "[OMPI users] MPI_Alltoall"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
your code is actually not correct. If you look at the MPI specification 
<br>
you will see that s should also be an array of length nProcs (in your 
<br>
test), since you send different elements to each process. If you want to 
<br>
send the same s to each process, you have to use MPI_Bcast.
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Chandan Basu wrote:
<br>
<span class="quotelev1">&gt; I am trying to use MPI_Alltoall in the following program. After
</span><br>
<span class="quotelev1">&gt; execution all the nodes should show same value for the array su.
</span><br>
<span class="quotelev1">&gt; However only the root node is showing correct value. other nodes are 
</span><br>
<span class="quotelev1">&gt; giving garbage value. Please help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have used openmpi version &quot;1.1.4&quot;. The mpif90 uses intel fortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cbasu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt; program main
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt; include 'mpif.h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; integer :: status(MPI_Status_size)
</span><br>
<span class="quotelev1">&gt; integer :: ierr, rank, nProcs
</span><br>
<span class="quotelev1">&gt; double precision :: s
</span><br>
<span class="quotelev1">&gt; double precision, pointer :: su(:)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call MPI_Init (ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_Comm_rank(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_Comm_size(MPI_COMM_WORLD, nProcs, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; allocate(su(nProcs))
</span><br>
<span class="quotelev1">&gt; su = 0.0d0
</span><br>
<span class="quotelev1">&gt; s = 1.0d0
</span><br>
<span class="quotelev1">&gt; call MPI_Alltoall(s, 1, MPI_DOUBLE_PRECISION, su, 1, &amp;
</span><br>
<span class="quotelev1">&gt;       &amp; MPI_DOUBLE_PRECISION, MPI_COMM_WORLD, ierr);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ! all nodes should have su(1:nProcs) = 1.0 at this pont
</span><br>
<span class="quotelev1">&gt; print *, rank, su
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; deallocate(su)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call MPI_Finalize(ierr)
</span><br>
<span class="quotelev1">&gt; end program main
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://adworks.rediff.com/cgi-bin/AdWorks/sigclick.cgi/www.rediff.com/signature-home.htm/1507191490&#64;Middle5?PARTNER=3">http://adworks.rediff.com/cgi-bin/AdWorks/sigclick.cgi/www.rediff.com/signature-home.htm/1507191490&#64;Middle5?PARTNER=3</a>&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="2733.php">Brian W. Barrett: "Re: [OMPI users] configure tests broken for pthreads in some situations"</a>
<li><strong>Previous message:</strong> <a href="2731.php">George Bosilca: "Re: [OMPI users] MPI reduce ..."</a>
<li><strong>In reply to:</strong> <a href="2730.php">Chandan  Basu: "[OMPI users] MPI_Alltoall"</a>
<!-- nextthread="start" -->
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
