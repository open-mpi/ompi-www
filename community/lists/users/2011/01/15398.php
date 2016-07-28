<?
$subject_val = "Re: [OMPI users] MPI_Comm_Spawn intercommunication";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 22 07:08:50 2011" -->
<!-- isoreceived="20110122120850" -->
<!-- sent="Sat, 22 Jan 2011 07:08:45 -0500" -->
<!-- isosent="20110122120845" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_Spawn intercommunication" -->
<!-- id="1ACC1B2E-648D-4686-9040-B4EC322ADB3C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=QnCHiLxs8rcYp7C+KEV+0oWVetqYFq8ZXi6gy_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_Spawn intercommunication<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-22 07:08:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15399.php">Avinash: "Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<li><strong>Previous message:</strong> <a href="15397.php">David Mathog: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>In reply to:</strong> <a href="15326.php">Pierre Chanial: "[OMPI users] MPI_Comm_Spawn intercommunication"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try using MPI_COMM_REMOTE_SIZE to get the size of the remote group in an intercommunicator.  MPI_COMM_SIZE returns the size of the local group.
<br>
<p><p>On Jan 7, 2011, at 6:22 PM, Pierre Chanial wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run this code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; program testcase
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     use mpi
</span><br>
<span class="quotelev1">&gt;     implicit none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     integer :: rank, lsize, rsize, code
</span><br>
<span class="quotelev1">&gt;     integer :: intercomm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     call MPI_INIT(code)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     call MPI_COMM_GET_PARENT(intercomm, code)
</span><br>
<span class="quotelev1">&gt;     if (intercomm == MPI_COMM_NULL) then
</span><br>
<span class="quotelev1">&gt;         call MPI_COMM_SPAWN (&quot;./testcase&quot;, MPI_ARGV_NULL, 1, MPI_INFO_NULL, &amp;
</span><br>
<span class="quotelev1">&gt;              0, MPI_COMM_WORLD, intercomm, MPI_ERRCODES_IGNORE, code)
</span><br>
<span class="quotelev1">&gt;         call MPI_COMM_RANK(MPI_COMM_WORLD, rank, code)
</span><br>
<span class="quotelev1">&gt;         call MPI_COMM_SIZE(MPI_COMM_WORLD, lsize, code)
</span><br>
<span class="quotelev1">&gt;         call MPI_COMM_SIZE(intercomm, rsize, code)
</span><br>
<span class="quotelev1">&gt;         if (rank == 0) then
</span><br>
<span class="quotelev1">&gt;             print *, 'from parent: local size is ', lsize
</span><br>
<span class="quotelev1">&gt;             print *, 'from parent: remote size is ', rsize
</span><br>
<span class="quotelev1">&gt;         end if
</span><br>
<span class="quotelev1">&gt;     else
</span><br>
<span class="quotelev1">&gt;         call MPI_COMM_SIZE(MPI_COMM_WORLD, lsize, code)
</span><br>
<span class="quotelev1">&gt;         call MPI_COMM_SIZE(intercomm, rsize, code)
</span><br>
<span class="quotelev1">&gt;         print *, 'from child: local size is ', lsize
</span><br>
<span class="quotelev1">&gt;         print *, 'from child: remote size is ', rsize
</span><br>
<span class="quotelev1">&gt;     end if
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     call MPI_FINALIZE (code)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; end program testcase
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following results with openmpi 1.4.1 and two processes:
</span><br>
<span class="quotelev1">&gt;  from parent: local size is            2                                                                                         
</span><br>
<span class="quotelev1">&gt;  from parent: remote size is            2                                                                                        
</span><br>
<span class="quotelev1">&gt;  from child: local size is            1                                                                                          
</span><br>
<span class="quotelev1">&gt;  from child: remote size is            1                                                                                         
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would have expected:
</span><br>
<span class="quotelev1">&gt;  from parent: local size is            2                                                                                          
</span><br>
<span class="quotelev1">&gt;  from parent: remote size is            1                                                                                   
</span><br>
<span class="quotelev1">&gt;  from child: local size is            1                                                                                           
</span><br>
<span class="quotelev1">&gt;  from child: remote size is            2                                                                                       
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could anyone tell me what's going on ? It's not a fortran issue, I can also replicate it using mpi4py.
</span><br>
<span class="quotelev1">&gt; Probably related to the universe size: I haven't found a way to hand it to mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Pierre
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15399.php">Avinash: "Re: [OMPI users] A problem with running a 32-bit program on a 64-bit machine"</a>
<li><strong>Previous message:</strong> <a href="15397.php">David Mathog: "Re: [OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>In reply to:</strong> <a href="15326.php">Pierre Chanial: "[OMPI users] MPI_Comm_Spawn intercommunication"</a>
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
