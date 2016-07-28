<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 27 16:18:15 2006" -->
<!-- isoreceived="20060327211815" -->
<!-- sent="Mon, 27 Mar 2006 16:18:06 -0500" -->
<!-- isosent="20060327211806" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ROOT - required where/when?" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF56BD9D_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] MPI_ROOT - required where/when?" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-27 16:18:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0921.php">Eric Brunner-Williams: "Re: [OMPI users] Best MPI implementation"</a>
<li><strong>Previous message:</strong> <a href="0919.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Best MPI implementation"</a>
<li><strong>Maybe in reply to:</strong> <a href="0914.php">Michael Kluskens: "[OMPI users] MPI_ROOT - required where/when?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI-2 chapter 7 is all about the extended collective operations -- for
<br>
each collective, it defines which process is supposed to pass in
<br>
MPI_ROOT, etc.
<br>
<p>Specifically, check out MPI-2 section 7.3.2, &quot;Operations that Move Data&quot;
<br>
(it's a very long section; a sub-section for each MPI collective).
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev1">&gt; Sent: Monday, March 27, 2006 10:49 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_ROOT - required where/when?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Edgar,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.   I was using MPI_ROOT in a MPI_Bcast call from 
</span><br>
<span class="quotelev1">&gt; the parent  
</span><br>
<span class="quotelev1">&gt; process where I spawn subprocesses and it worked fine in OpenMPI but  
</span><br>
<span class="quotelev1">&gt; when it didn't work on another platform and the support engineers  
</span><br>
<span class="quotelev1">&gt; solution was to define it as zero I started looking and 
</span><br>
<span class="quotelev1">&gt; couldn't find  
</span><br>
<span class="quotelev1">&gt; anything close to what you said below in the four books I 
</span><br>
<span class="quotelev1">&gt; have.  Page  
</span><br>
<span class="quotelev1">&gt; 236 of Using MPI-2 shows the correct use of MPI_ROOT but no  
</span><br>
<span class="quotelev1">&gt; explanation of why.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 27, 2006, at 10:21 AM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_ROOT is required for the rooted operations of the inter- 
</span><br>
<span class="quotelev2">&gt; &gt; communicator
</span><br>
<span class="quotelev2">&gt; &gt; collectives in MPI-2, I am not aware of that you need MPI_ROOT in
</span><br>
<span class="quotelev2">&gt; &gt; intra-communicator collectives as defined in MPI-1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Edgar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Michael Kluskens wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The constant MPI_ROOT is not universally defined in all current
</span><br>
<span class="quotelev3">&gt; &gt;&gt; shipping MPI implementations.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is there any MPI function/call that requires MPI_ROOT?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  From the complete reference it appears that MPI_ALLGATHER might be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the one routine.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This all relates to portability, code I write using OpenMPI has to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; work on other systems not using OpenMPI.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Michael
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0921.php">Eric Brunner-Williams: "Re: [OMPI users] Best MPI implementation"</a>
<li><strong>Previous message:</strong> <a href="0919.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Best MPI implementation"</a>
<li><strong>Maybe in reply to:</strong> <a href="0914.php">Michael Kluskens: "[OMPI users] MPI_ROOT - required where/when?"</a>
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
