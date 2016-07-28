<?
$subject_val = "Re: [OMPI users] top question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 11:50:02 2009" -->
<!-- isoreceived="20090603155002" -->
<!-- sent="Wed, 03 Jun 2009 16:49:52 +0100" -->
<!-- isosent="20090603154952" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] top question" -->
<!-- id="4A269BA0.4090404_at_ntlworld.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FE29CA5A-D1E6-48F2-95ED-6BB17727B493_at_cisco.com" -->
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
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 11:49:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9523.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Previous message:</strong> <a href="9521.php">Ashley Pittman: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>In reply to:</strong> <a href="9510.php">Jeff Squyres: "Re: [OMPI users] top question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9528.php">George Bosilca: "Re: [OMPI users] top question"</a>
<li><strong>Reply:</strong> <a href="9528.php">George Bosilca: "Re: [OMPI users] top question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; We get this question so much that I really need to add it to the FAQ.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI currently always spins for completion for exactly the reason 
</span><br>
<span class="quotelev1">&gt; that Scott cites: lower latency.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Arguably, when using TCP, we could probably get a bit better performance 
</span><br>
<span class="quotelev1">&gt; by blocking and allowing the kernel to make more progress than a single 
</span><br>
<span class="quotelev1">&gt; quick pass through the sockets progress engine, but that involves some 
</span><br>
<span class="quotelev1">&gt; other difficulties such as simultaneously allowing shared memory 
</span><br>
<span class="quotelev1">&gt; progress.  We have ideas how to make this work, but it has unfortunately 
</span><br>
<span class="quotelev1">&gt; remained at a lower priority: the performance difference isn't that 
</span><br>
<span class="quotelev1">&gt; great, and we've been focusing on the other, lower latency interconnects 
</span><br>
<span class="quotelev1">&gt; (shmem, MX, verbs, etc.).
</span><br>
<p>Whilst I understand that you have other priorities, and I grateful for 
<br>
the leverage I get by using OpenMPI, I would like to offer an 
<br>
alternative use case, which I believe may become more common.
<br>
<p>We're developing parallel software which is designed to be used 
<br>
*interactively* as well as in batch mode. We want the same SIMD code 
<br>
running on a user's quad-core workstation as on a 1,000-node cluster.
<br>
<p>For the former case (single workstation), it would be *much* more user 
<br>
friendly and interactive, for the back-end MPI code not to be spinning 
<br>
at 100% when it's just waiting for the next front-end command. The GUI 
<br>
thread doesn't get a look in.
<br>
<p>I can't imagine the difficulties involved, but if the POSIX calls 
<br>
select() and pthread_cond_wait() can do it for TCP and shared-memory 
<br>
threads respectively, it can't be impossible!
<br>
<p>Just my .2c,
<br>
Simon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9523.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Previous message:</strong> <a href="9521.php">Ashley Pittman: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>In reply to:</strong> <a href="9510.php">Jeff Squyres: "Re: [OMPI users] top question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9528.php">George Bosilca: "Re: [OMPI users] top question"</a>
<li><strong>Reply:</strong> <a href="9528.php">George Bosilca: "Re: [OMPI users] top question"</a>
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
