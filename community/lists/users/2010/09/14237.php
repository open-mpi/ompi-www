<?
$subject_val = "Re: [OMPI users] send and receive buffer the same  on root";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 16 13:06:58 2010" -->
<!-- isoreceived="20100916170658" -->
<!-- sent="Thu, 16 Sep 2010 19:06:51 +0200" -->
<!-- isosent="20100916170651" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send and receive buffer the same  on root" -->
<!-- id="F7922899-7D71-468E-9B78-0966B06EC05C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1284652884.6749.38.camel_at_alder.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] send and receive buffer the same  on root<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-16 13:06:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14238.php">Richard Treumann: "Re: [OMPI users] send and receive buffer the same  on root"</a>
<li><strong>Previous message:</strong> <a href="14236.php">David Zhang: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>In reply to:</strong> <a href="14235.php">Tom Rosmond: "[OMPI users] send and receive buffer the same  on root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14238.php">Richard Treumann: "Re: [OMPI users] send and receive buffer the same  on root"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The description for MPI_GATHERV says (from <a href="http://www.mpi-forum.org/docs/mpi22-report/node95.htm#Node95">http://www.mpi-forum.org/docs/mpi22-report/node95.htm#Node95</a>):
<br>
<p>The specification of counts, types, and displacements should not cause any location on the root to be written more than once. Such a call is erroneous. The ``in place'' option for intracommunicators is specified by passing MPI_IN_PLACE as the value of sendbuf at the root. In such a case, sendcount and sendtype are ignored, and the contribution of the root to the gathered vector is assumed to be already in the correct place in the receive buffer
<br>
<p>So if I understand your situation properly, you should be using MPI_IN_PLACE -- meaning that in general, you're probably getting lucky even if it works with Open MPI.
<br>
<p><p>On Sep 16, 2010, at 6:01 PM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; I am working with a Fortran 90 code with many MPI calls like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call mpi_gatherv(x,nsize(rank+1),
</span><br>
<span class="quotelev1">&gt;     mpi_real,x,nsize,nstep,mpi_real,root,mpi_comm_world,mstat)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 'x' is allocated on root to be large enough to hold the results of the
</span><br>
<span class="quotelev1">&gt; gather, other arrays and parameters are defined correctly, and the code
</span><br>
<span class="quotelev1">&gt; runs as it should.  However, I am concerned that having the same send
</span><br>
<span class="quotelev1">&gt; and receive buffer on root is a violation of the MPI standard.  Am I
</span><br>
<span class="quotelev1">&gt; correct?  I am aware of the MPI_IN_PLACE feature that can be used in
</span><br>
<span class="quotelev1">&gt; this situation, by defining it as the send buffer at root.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The fact that the code as written seems to work on most system we run on
</span><br>
<span class="quotelev1">&gt; (some with OpenMPI, some with proprietary MPI's) indicates that in spite
</span><br>
<span class="quotelev1">&gt; of the standard, implementations allow it.  Is this correct, or are we
</span><br>
<span class="quotelev1">&gt; just lucky.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; T. Rosmond
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="14238.php">Richard Treumann: "Re: [OMPI users] send and receive buffer the same  on root"</a>
<li><strong>Previous message:</strong> <a href="14236.php">David Zhang: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>In reply to:</strong> <a href="14235.php">Tom Rosmond: "[OMPI users] send and receive buffer the same  on root"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14238.php">Richard Treumann: "Re: [OMPI users] send and receive buffer the same  on root"</a>
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
