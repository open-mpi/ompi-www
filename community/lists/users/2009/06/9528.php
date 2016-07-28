<?
$subject_val = "Re: [OMPI users] top question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 13:30:26 2009" -->
<!-- isoreceived="20090603173026" -->
<!-- sent="Wed, 3 Jun 2009 13:30:16 -0400" -->
<!-- isosent="20090603173016" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] top question" -->
<!-- id="F19E1EB6-51C7-43F0-8F10-FD6DC7DA83EE_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A269BA0.4090404_at_ntlworld.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] top question<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 13:30:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9529.php">Lars Andersson: "[OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Previous message:</strong> <a href="9527.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>In reply to:</strong> <a href="9522.php">Number Cruncher: "Re: [OMPI users] top question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simon, it is a lot more difficult than it appears. You're right,  
<br>
select/poll can do it for any file descriptor, and shared mutexes/ 
<br>
conditions (despite the performance impact) can do it for shared  
<br>
memory. However, in the case where you have to support both  
<br>
simultaneously, what is the right approach, i.e. the one that doesn't  
<br>
impact the current performance? We're open to smart solutions ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 3, 2009, at 11:49 , Number Cruncher wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We get this question so much that I really need to add it to the  
</span><br>
<span class="quotelev2">&gt;&gt; FAQ.  :-\
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI currently always spins for completion for exactly the  
</span><br>
<span class="quotelev2">&gt;&gt; reason that Scott cites: lower latency.
</span><br>
<span class="quotelev2">&gt;&gt; Arguably, when using TCP, we could probably get a bit better  
</span><br>
<span class="quotelev2">&gt;&gt; performance by blocking and allowing the kernel to make more  
</span><br>
<span class="quotelev2">&gt;&gt; progress than a single quick pass through the sockets progress  
</span><br>
<span class="quotelev2">&gt;&gt; engine, but that involves some other difficulties such as  
</span><br>
<span class="quotelev2">&gt;&gt; simultaneously allowing shared memory progress.  We have ideas how  
</span><br>
<span class="quotelev2">&gt;&gt; to make this work, but it has unfortunately remained at a lower  
</span><br>
<span class="quotelev2">&gt;&gt; priority: the performance difference isn't that great, and we've  
</span><br>
<span class="quotelev2">&gt;&gt; been focusing on the other, lower latency interconnects (shmem, MX,  
</span><br>
<span class="quotelev2">&gt;&gt; verbs, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whilst I understand that you have other priorities, and I grateful  
</span><br>
<span class="quotelev1">&gt; for the leverage I get by using OpenMPI, I would like to offer an  
</span><br>
<span class="quotelev1">&gt; alternative use case, which I believe may become more common.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're developing parallel software which is designed to be used  
</span><br>
<span class="quotelev1">&gt; *interactively* as well as in batch mode. We want the same SIMD code  
</span><br>
<span class="quotelev1">&gt; running on a user's quad-core workstation as on a 1,000-node cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the former case (single workstation), it would be *much* more  
</span><br>
<span class="quotelev1">&gt; user friendly and interactive, for the back-end MPI code not to be  
</span><br>
<span class="quotelev1">&gt; spinning at 100% when it's just waiting for the next front-end  
</span><br>
<span class="quotelev1">&gt; command. The GUI thread doesn't get a look in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't imagine the difficulties involved, but if the POSIX calls  
</span><br>
<span class="quotelev1">&gt; select() and pthread_cond_wait() can do it for TCP and shared-memory  
</span><br>
<span class="quotelev1">&gt; threads respectively, it can't be impossible!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just my .2c,
</span><br>
<span class="quotelev1">&gt; Simon
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
<li><strong>Next message:</strong> <a href="9529.php">Lars Andersson: "[OMPI users] Receiving MPI messages of unknown size"</a>
<li><strong>Previous message:</strong> <a href="9527.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>In reply to:</strong> <a href="9522.php">Number Cruncher: "Re: [OMPI users] top question"</a>
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
