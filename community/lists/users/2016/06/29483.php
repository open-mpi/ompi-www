<?
$subject_val = "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 18 11:45:37 2016" -->
<!-- isoreceived="20160618154537" -->
<!-- sent="Sat, 18 Jun 2016 15:45:35 +0000" -->
<!-- isosent="20160618154535" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?" -->
<!-- id="74C45824-8A21-45B8-8BD4-1A29753A8B51_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0B97558E6915A6419306E91FD1DACA0E5AFF8FA05B_at_NRCCENMB1.nrc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-18 11:45:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29484.php">Moody, Adam T.: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Previous message:</strong> <a href="29482.php">Cihan Altinay: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>In reply to:</strong> <a href="29470.php">Audet, Martin: "[OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29490.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Martin.
<br>

<br>
Such approaches have been discussed in the past.  Indeed, I'm pretty sure that I've heard of some non-commodity systems / network stacks that do this kind of thing.
<br>

<br>
Such approaches have not evolved in the commodity Linux space, however.  This kind of support would need better hooks than what exist today; new hooks would be needed for integration between the memory allocator (e.g., all the allocation methods in glibc) and the underlying network stack(s).  E.g.:
<br>

<br>
- hook when memory is attached to the process
<br>
- hook when memory is detached from the process
<br>
- allow multiple hooks to co-exist in the same userspace process simultaneously
<br>

<br>
Ultimately, memory attach/detach is controlled by the kernel.  My $0.02 is that an ultimate solution would need to have some kind of kernel aspect to it.
<br>

<br>
In the past, Linus has been (probably rightfully) resistant to adding such solutions for the general case, because these problems are really fairly specific to OS-bypass network stacks (i.e., the drivers/infiniband area in the kernel).  His prior response when this topic came up back in 2009 was basically &quot;fix your own network stack.&quot;
<br>

<br>
That being said, if someone would like to advance work in this area -- particularly to include a solution in the drivers/infiniband section of the Linux kernel, I think that would be great.
<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; On Jun 16, 2016, at 3:59 PM, Audet, Martin &lt;Martin.Audet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; After reading a little the FAQ on the methods used by Open MPI to deal with memory registration (or pinning) with Infiniband adapter, it seems that we could avoid all the overhead and complexity of memory registration/deregistration, registration cache access and update, memory management (ummunotify) in addition to allowing a better overlap of the communications with the computations (we could let the communication hardware do its job independently without resorting to registration/transfer/deregistration pipelines) by simply having all user process memory registered all the time.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Of course a configuration like that is not appropriate in a general setting (ex: a desktop environment) as it would make swapping almost impossible.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; But in the context of an HPC node where the processes are not supposed to swap and the OS not overcommit memory, not being able to swap doesn&#226;&#128;&#153;t appear to be a problem.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Moreover since the maximal total memory used per process is often predefined at the application start as a resource specified to the queuing system, the OS could easily keep a defined amount of extra memory for its own need instead of swapping out user process memory. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I guess that specialized (non-Linux) compute node OS does this.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; But is it possible and does it make sense with Linux ?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Martin Audet
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29470.php">http://www.open-mpi.org/community/lists/users/2016/06/29470.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29484.php">Moody, Adam T.: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>Previous message:</strong> <a href="29482.php">Cihan Altinay: "Re: [OMPI users] Restart after code hangs"</a>
<li><strong>In reply to:</strong> <a href="29470.php">Audet, Martin: "[OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29490.php">Audet, Martin: "Re: [OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
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
