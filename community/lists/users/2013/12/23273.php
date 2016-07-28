<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 19:03:58 2013" -->
<!-- isoreceived="20131221000358" -->
<!-- sent="Fri, 20 Dec 2013 16:03:33 -0800" -->
<!-- isosent="20131221000333" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?" -->
<!-- id="C840C5C7-B887-4698-A179-F6B9DC804B2E_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CB04AC1_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-20 19:03:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23274.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1	dosen't	work	for our magny cours based 32 core node"</a>
<li><strong>Previous message:</strong> <a href="23272.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
<li><strong>In reply to:</strong> <a href="23256.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ed
<br>
<p>FWIW: Intel MPI has better thread support, though you'll lose some features. I don't know what NICs you have, but have you tried running with the MTL's instead of the openib BTL? Both the psm and mxm MTLs are supposed to be thread safe, and will outperform the openib BTL anyway.
<br>
<p>Not sure if Intel supports mxm or not - should handle psm as Intel now owns Truescale.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Dec 19, 2013, at 7:23 AM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Ralph,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; We are attempting to use 1.6.4 with an application that requires multi-threading, and it is hanging most of the time; it is using openib.  They steered us to try Intel MPI for now.  If you lack drivers/testers for improved thread safety on openib, let me know and I&#146;ll encourage the developers of the application to support you.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, December 18, 2013 6:50 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: EXTERNAL: Re: [OMPI users] What's the status of OpenMPI and thread safety?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This was, in fact, a primary point of discussion at last week's OMPI developer's conference. Bottom line is that we are only a little further along than we used to be, but are focusing on improving it. You'll find good thread support for some transports (some of the MTLs and at least the TCP BTL), not so good for others (e.g., openib is flat-out not thread safe).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Dec 18, 2013, at 3:57 PM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was wondering if the FAQ entry below is considered current opinion or perhaps a little stale.  Is multi-threading still considered to be &#145;lightly tested&#146;?  Are there known open bugs?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 7. Is Open MPI thread safe?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Support for MPI_THREAD_MULTIPLE (i.e., multiple threads executing within the MPI library) and asynchronous message passing progress (i.e., continuing message passing operations even while no user threads are in the MPI library) has been designed into Open MPI from its first planning meetings.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Support for MPI_THREAD_MULTIPLE is included in the first version of Open MPI, but it is only lightly tested and likely still has some bugs. Support for asynchronous progress is included in the TCP point-to-point device, but it, too, has only had light testing and likely still has bugs.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Completing the testing for full support of MPI_THREAD_MULTIPLE and asynchronous progress is planned in the near future.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23273/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23274.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1	dosen't	work	for our magny cours based 32 core node"</a>
<li><strong>Previous message:</strong> <a href="23272.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn and exported variables"</a>
<li><strong>In reply to:</strong> <a href="23256.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?"</a>
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
