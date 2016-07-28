<?
$subject_val = "Re: [OMPI users] Technical details of various MPI APIs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  4 08:19:16 2011" -->
<!-- isoreceived="20111104121916" -->
<!-- sent="Fri, 4 Nov 2011 08:19:11 -0400" -->
<!-- isosent="20111104121911" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Technical details of various MPI APIs" -->
<!-- id="9A8006B0-55D6-4418-B876-84CCD55D300C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="loom.20111021T203750-32_at_post.gmane.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Technical details of various MPI APIs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-04 08:19:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17701.php">Jeff Squyres: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="17699.php">Jeff Squyres: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/10/17591.php">ramu: "[OMPI users] Technical details of various MPI APIs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying.
<br>
<p>We don't have any formal documentation written up on this stuff, in part because we keep optimizing and changing the exact makeup of wire protocols, etc.
<br>
<p>If you have any specific questions, we can try to answer them for you.
<br>
<p>On Oct 21, 2011, at 2:45 PM, ramu wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am trying to explore more on technical details of MPI APIs defined in OpenMPI
</span><br>
<span class="quotelev1">&gt; (for e.g., MPI_Init(), MPI_Barrier(), MPI_Send(), MPI_Recv(), MPI_Waitall(),
</span><br>
<span class="quotelev1">&gt; MPI_Finalize() etc) when the MPI Processes are running on Infiniband cluster
</span><br>
<span class="quotelev1">&gt; (OFED).  I mean, what are the messages exchanged between MPI processes over IB,
</span><br>
<span class="quotelev1">&gt; how does processes identify each other and what messages they exchange to
</span><br>
<span class="quotelev1">&gt; identify and what all is needed to trigger data traffic.  Is there any doc/link
</span><br>
<span class="quotelev1">&gt; available which describes these details.  Please suggest me. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev1">&gt; Ramu 
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
<li><strong>Next message:</strong> <a href="17701.php">Jeff Squyres: "Re: [OMPI users] Troubles using MPI_Isend/MPI_Irecv/MPI_Waitany and MPI_Allreduce"</a>
<li><strong>Previous message:</strong> <a href="17699.php">Jeff Squyres: "Re: [OMPI users] Problem-Bug with MPI_Intercomm_create()"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/10/17591.php">ramu: "[OMPI users] Technical details of various MPI APIs"</a>
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
