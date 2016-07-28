<?
$subject_val = "Re: [OMPI users] Question about RDMA";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 12:28:54 2008" -->
<!-- isoreceived="20080617162854" -->
<!-- sent="Tue, 17 Jun 2008 12:28:44 -0400" -->
<!-- isosent="20080617162844" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about RDMA" -->
<!-- id="75B334D4-A865-44E7-B376-44D04295991A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0806060303mc1d5a12g3a4a39f04a310b2f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about RDMA<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 12:28:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5916.php">Jeff Squyres: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>Previous message:</strong> <a href="5914.php">SLIM H.A.: "Re: [OMPI users] btl parameter is not set to openib on node with ibcard"</a>
<li><strong>In reply to:</strong> <a href="5836.php">Gabriele Fatigati: "Re: [OMPI users] Question about RDMA"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 6, 2008, at 6:03 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<p>Sorry for the delay in replying -- I was on vacation all last week.
<br>
<p><span class="quotelev1">&gt; thanks for you reply. I did understand previous questions about  
</span><br>
<span class="quotelev1">&gt; RDMA. Ever with SKaMPI, i tried to run with mpi_leave_pinned = 1, as  
</span><br>
<span class="quotelev1">&gt; you have suggested.  But also in this case, execution time is very  
</span><br>
<span class="quotelev1">&gt; similar to previous case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does it means that SKaMPI, reallocates buffer every time ? For  
</span><br>
<span class="quotelev1">&gt; example, with &quot;MPI_Bcast-length&quot; test, over 128 procs,  the  
</span><br>
<span class="quotelev1">&gt; collective is repeated about 28 times, increasing buffer size for  
</span><br>
<span class="quotelev1">&gt; each step by internal formula, and finale buffer size =2097152  K.
</span><br>
<p>It could be that SKaMPI does re-alloc its buffers for every call -- I  
<br>
have not looked at the internals of SKaMPI in quite a long time.
<br>
<p>It could also be that OMPI is not using the mpi_leave_pinned support.   
<br>
Are you building OMPI with the memory manager?  OMPI needs that memory  
<br>
manager (ptmalloc2, in the case of Linux) to be able to properly  
<br>
effect mpi_leave_pinned support.  You should be able to run ompi_info  
<br>
| grep malloc and see something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v1.0, API v1.0, Component  
<br>
v1.3)
<br>
<p>If that line doesn't show, then OMPI was not built with the memory  
<br>
manager support, and mpi_leave_pinned will have no effect.
<br>
<p><span class="quotelev1">&gt; Since there aren't advantages with leave_pinned = 1, it means that  
</span><br>
<span class="quotelev1">&gt; SKaMPI doesn't allocates buffer of 2097152 K initially, but it  
</span><br>
<span class="quotelev1">&gt; allocates small buffer and reallocates buffer every time, with more  
</span><br>
<span class="quotelev1">&gt; large size. Is it possible? If no, which is the cause of similar  
</span><br>
<span class="quotelev1">&gt; performance?
</span><br>
<p>It *could* mean that SKaMPI doesn't re-use the same large buffer for  
<br>
subsequent MPI operations.  An examination of SKaMPI's code should  
<br>
pretty easily be able to tell if this is the case.
<br>
<p>It could also be that OMPI is using internal bufferers for a pipelined  
<br>
broadcast -- I'll have to check with George on that.
<br>
<p><span class="quotelev1">&gt; Another question: RDMA pipeline protocol for long messages, in  
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.2.6 is setting by default?
</span><br>
<p>I can't quite parse that question.  OMPI v1.2.6 uses the pipelined  
<br>
protocol for long messages by default.  It uses a slightly different  
<br>
protocol when mpi_leave_pinned is active.  Both of these should be  
<br>
described on the OMPI FAQ.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5916.php">Jeff Squyres: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>Previous message:</strong> <a href="5914.php">SLIM H.A.: "Re: [OMPI users] btl parameter is not set to openib on node with ibcard"</a>
<li><strong>In reply to:</strong> <a href="5836.php">Gabriele Fatigati: "Re: [OMPI users] Question about RDMA"</a>
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
