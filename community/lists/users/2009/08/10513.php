<?
$subject_val = "Re: [OMPI users] Job distribution on many-core NUMA system";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 15:36:44 2009" -->
<!-- isoreceived="20090828193644" -->
<!-- sent="Fri, 28 Aug 2009 15:36:40 -0400" -->
<!-- isosent="20090828193640" -->
<!-- name="A. Austen" -->
<!-- email="metallurgist_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Job distribution on many-core NUMA system" -->
<!-- id="1251488200.2175.1332138363_at_webmail.messagingengine.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A9810D9.1000806_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Job distribution on many-core NUMA system<br>
<strong>From:</strong> A. Austen (<em>metallurgist_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-28 15:36:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10514.php">James Gao: "[OMPI users] Heterogeneous SLURM cluster segfaults on large transfers"</a>
<li><strong>Previous message:</strong> <a href="10512.php">Eugene Loh: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>In reply to:</strong> <a href="10512.php">Eugene Loh: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10537.php">Eugene Loh: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10537.php">Eugene Loh: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 28 Aug 2009 10:16 -0700, &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt;
<br>
wrote:
<br>
<span class="quotelev1">&gt; Big topic and actually the subject of much recent discussion.  Here are 
</span><br>
<span class="quotelev1">&gt; a few comments:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1)  &quot;Optimally&quot; depends on what you're doing.  A big issue is making 
</span><br>
<span class="quotelev1">&gt; sure each MPI process gets as much memory bandwidth (and cache and other 
</span><br>
<span class="quotelev1">&gt; shared resources) as possible.   This would argue that processes 
</span><br>
<span class="quotelev1">&gt; *should* be spread over as many sockets as possible.  And, indeed, some 
</span><br>
<span class="quotelev1">&gt; MPIs default to this behavior.  It depends on lots of things, including 
</span><br>
<span class="quotelev1">&gt; how much of the machine you're using.
</span><br>
<p>Yes, you're right.  In my case, my processes within a single MPI job are
<br>
tightly coupled.  These jobs are communication-intensive, and if I want
<br>
to use as many of the processors as possible, then minimizing the
<br>
cross-processor communication should yield the best overall throughput. 
<br>
However, I see your point completely -- for an embarassingly parallel
<br>
problem, spreading the processes amongst the different sockets/memory
<br>
pools would probably give the best performance.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; 2)  Currently (1.3.2), there is rankfile support.  This is probably a 
</span><br>
<span class="quotelev1">&gt; little bit more gruesome than you hope for.  E.g., if you have multiple 
</span><br>
<span class="quotelev1">&gt; jobs, you need to custom tailor the rankfile for each.
</span><br>
<p>So then it would seem like at least for now, I can get the behavior I
<br>
want by using rankfiles?
<br>
<p>Also, if I use the rankfile to distribute the processes, how about the
<br>
affinity issue?  Can I still use affinity and expect that it will apply
<br>
to the topology specified in the rankfile, or will all the MPI jobs
<br>
always try to bind to the same processors in sequence?
<br>
<p><pre>
-- 
<a href="http://www.fastmail.fm">http://www.fastmail.fm</a> - The professional email service
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10514.php">James Gao: "[OMPI users] Heterogeneous SLURM cluster segfaults on large transfers"</a>
<li><strong>Previous message:</strong> <a href="10512.php">Eugene Loh: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>In reply to:</strong> <a href="10512.php">Eugene Loh: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10537.php">Eugene Loh: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10537.php">Eugene Loh: "Re: [OMPI users] Job distribution on many-core NUMA system"</a>
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
