<?
$subject_val = "Re: [OMPI users] Problems with f90 implementation under Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 25 18:36:56 2008" -->
<!-- isoreceived="20080225233656" -->
<!-- sent="Mon, 25 Feb 2008 16:59:54 -0500" -->
<!-- isosent="20080225215954" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with f90 implementation under Leopard" -->
<!-- id="B0C13550-C9CA-4337-98E1-A0765D9BADC6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E2AA6187-AF2A-41CE-AE1E-CD4A22914A3B_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with f90 implementation under Leopard<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-25 16:59:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5076.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Previous message:</strong> <a href="5074.php">Gregory J. Orris: "[OMPI users] Problems with f90 implementation under Leopard"</a>
<li><strong>In reply to:</strong> <a href="5074.php">Gregory J. Orris: "[OMPI users] Problems with f90 implementation under Leopard"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I assume that your ring_f90 program is using the statement &quot;use f90&quot;?   
<br>
(is that the OMPI example ring_f90 program?)   If so, can you verify  
<br>
that the compiler is picking up the OMPI f90 module and not some other  
<br>
module?  That would be my best guess for why it's acting wonky (e.g.,  
<br>
if it gets into MPI_Comm_rank with a bogus communicator value).
<br>
<p><p>On Feb 24, 2008, at 3:37 PM, Gregory J. Orris wrote:
<br>
<p><span class="quotelev1">&gt; Hey,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Been trying to activate mpif90 on a set of machines running Leopard
</span><br>
<span class="quotelev1">&gt; for some colleagues and have gotten stuck.
</span><br>
<span class="quotelev1">&gt; Compiles fine, but will not run any examples and returns
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mymachine me% /usr/local/mpiexec -np 2 ./ring_f90
</span><br>
<span class="quotelev1">&gt; [mymachine.local:23974] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; [mymachine.local:23974] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [mymachine.local:23974] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [mymachine.local:23974] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [mymachine.local:23975] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; [mymachine.local:23975] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [mymachine.local:23975] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [mymachine.local:23975] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seems tied up in how gfortran implements parameters. If MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; is changed in the example code to 0 (its parameter value) all is fine.
</span><br>
<span class="quotelev1">&gt; In the recesses of my mind I seem to remember reading ones that
</span><br>
<span class="quotelev1">&gt; gfortran used for f90 treats parameters differently than integers.
</span><br>
<span class="quotelev1">&gt; Anyone else seen this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW mpif77 works without problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Greg
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5076.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>Previous message:</strong> <a href="5074.php">Gregory J. Orris: "[OMPI users] Problems with f90 implementation under Leopard"</a>
<li><strong>In reply to:</strong> <a href="5074.php">Gregory J. Orris: "[OMPI users] Problems with f90 implementation under Leopard"</a>
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
