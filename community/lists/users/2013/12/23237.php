<?
$subject_val = "Re: [OMPI users] What's the status of OpenMPI and thread safety?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 19:49:44 2013" -->
<!-- isoreceived="20131219004944" -->
<!-- sent="Wed, 18 Dec 2013 16:49:33 -0800" -->
<!-- isosent="20131219004933" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What's the status of OpenMPI and thread safety?" -->
<!-- id="7E8FF62E-2F49-406C-992A-9D565F5ED66E_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CB03953_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] What's the status of OpenMPI and thread safety?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 19:49:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23238.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23236.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23233.php">Blosch, Edwin L: "[OMPI users] What's the status of OpenMPI and thread safety?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23252.php">Pablo Barrio: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>Reply:</strong> <a href="23252.php">Pablo Barrio: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>Reply:</strong> <a href="23256.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was, in fact, a primary point of discussion at last week's OMPI developer's conference. Bottom line is that we are only a little further along than we used to be, but are focusing on improving it. You'll find good thread support for some transports (some of the MTLs and at least the TCP BTL), not so good for others (e.g., openib is flat-out not thread safe).
<br>
<p><p>On Dec 18, 2013, at 3:57 PM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I was wondering if the FAQ entry below is considered current opinion or perhaps a little stale.  Is multi-threading still considered to be &#145;lightly tested&#146;?  Are there known open bugs?
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23237/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23238.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23236.php">Ralph Castain: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23233.php">Blosch, Edwin L: "[OMPI users] What's the status of OpenMPI and thread safety?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23252.php">Pablo Barrio: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>Reply:</strong> <a href="23252.php">Pablo Barrio: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>Reply:</strong> <a href="23256.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: What's the status of OpenMPI and thread safety?"</a>
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
