<?
$subject_val = "Re: [OMPI users] 2 to 1 oversubscription";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 13 13:24:58 2009" -->
<!-- isoreceived="20090713172458" -->
<!-- sent="Mon, 13 Jul 2009 13:24:54 -0400" -->
<!-- isosent="20090713172454" -->
<!-- name="Mark Borgerding" -->
<!-- email="markb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 2 to 1 oversubscription" -->
<!-- id="4A5B6DE6.2010903_at_3db-labs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5F6A59F2-6561-4A6B-9699-4EA0540EE47D_at_uvic.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] 2 to 1 oversubscription<br>
<strong>From:</strong> Mark Borgerding (<em>markb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-13 13:24:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9941.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="9939.php">Evans, Thomas M.: "[OMPI users] Python Binding problem with openmpi-1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9923.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10229.php">Nifty Tom Mitchell: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10229.php">Nifty Tom Mitchell: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's my advice: Don't trust anyones advice.  Benchmark it yourself and 
<br>
see.
<br>
<p>The problems vary so wildly that only you can tell if your problem will 
<br>
benefit from oversubscription. It really depends on too many factors to 
<br>
accurately predict: schedulers, memory usage, network/interconnect 
<br>
hardware, disk seek times, and probably a hundred other things.
<br>
<p>I've even seen mixed results from oversubscribing within a single 
<br>
algorithm.  (Granted this is mostly with the older generation 
<br>
hyperthreading, so I'm not sure how things fare with nehalem).  The most 
<br>
notable effect I've observed is related to cache use. If the problem 
<br>
fits in cache it is much faster.  With cores sharing cache it can even 
<br>
be advantageous to *undersubscribe* the problem.  i.e. schedule 2 
<br>
processes on a quad core so each can have the full cache.
<br>
<p>-- Mark Borgerding
<br>
<p><p><p>Klymak Jody wrote:
<br>
<span class="quotelev1">&gt; Hi Robert,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran some very crude tests and found that things slowed down once you 
</span><br>
<span class="quotelev1">&gt; got over 8 cores at a time.  However, they didn't slow down by 50% if 
</span><br>
<span class="quotelev1">&gt; you went to 16 processes.  Sadly, the tests were so crude, I did not 
</span><br>
<span class="quotelev1">&gt; keep good notes (it appears).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running a gcm, so my benchmarks may not be very useful to most 
</span><br>
<span class="quotelev1">&gt; folks.  If there was an easy-to-compile benhmark that I could run on 
</span><br>
<span class="quotelev1">&gt; my cluster, I'd be curious what the results are too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11-Jul-09, at 2:16 PM, Robert Kubrick wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Open MPI FAQ recommends not to oversubscribe the available cores 
</span><br>
<span class="quotelev2">&gt;&gt; for best performances, but is this still true? The new Nehalem 
</span><br>
<span class="quotelev2">&gt;&gt; processors are built to run 2 threads on each core. On a 8 sockets 
</span><br>
<span class="quotelev2">&gt;&gt; systems, that sums up to 128 threads that Intel claims can be run 
</span><br>
<span class="quotelev2">&gt;&gt; without significant performance degradation. I guess the last word is 
</span><br>
<span class="quotelev2">&gt;&gt; to those who have tried to run some benchmarks and applications on 
</span><br>
<span class="quotelev2">&gt;&gt; the new Intel processors. Any experience to share?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#oversubscribing">http://www.open-mpi.org/faq/?category=running#oversubscribing</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://en.wikipedia.org/wiki/Simultaneous_multithreading">http://en.wikipedia.org/wiki/Simultaneous_multithreading</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://communities.intel.com/community/openportit/server/blog/2009/06/11/nehalem-ex-brings-new-economics-to-scalable-systems">http://communities.intel.com/community/openportit/server/blog/2009/06/11/nehalem-ex-brings-new-economics-to-scalable-systems</a> 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
Mark Borgerding
3dB Labs, Inc
Innovate.  Develop.  Deliver.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9941.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="9939.php">Evans, Thomas M.: "[OMPI users] Python Binding problem with openmpi-1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9923.php">Klymak Jody: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10229.php">Nifty Tom Mitchell: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10229.php">Nifty Tom Mitchell: "Re: [OMPI users] 2 to 1 oversubscription"</a>
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
