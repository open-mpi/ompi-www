<?
$subject_val = "Re: [OMPI users] About MPI_TAG_UB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 28 10:50:03 2012" -->
<!-- isoreceived="20120928145003" -->
<!-- sent="Fri, 28 Sep 2012 10:50:00 -0400" -->
<!-- isosent="20120928145000" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About MPI_TAG_UB" -->
<!-- id="4035D295-E40E-4D29-9C02-3BDAB269CC4B_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5065B662.2080506_at_ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] About MPI_TAG_UB<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-28 10:50:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20355.php">SÃ©bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20353.php">S&#233;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20353.php">S&#233;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20356.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20356.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 28, 2012, at 10:38 AM, S&#233;bastien Boisvert wrote:
<br>
<p><span class="quotelev1">&gt; 1.5 us is very good. But I get 1.5 ms with shared queues (see above).
</span><br>
<p>Oh, I mis-read (I blame it on jet-lag...).
<br>
<p>Yes, that seems waaaay too high.
<br>
<p>You didn't do a developer build, did you?  We add a bunch of extra debugging in developer builds that adds a bunch of latency.  And you're not running over-subscribed, right?
<br>
<p><span class="quotelev2">&gt;&gt; OTOH, that's pretty bad.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know, all my Ray processes are doing busy waiting, if MPI was event-driven,
</span><br>
<span class="quotelev1">&gt; I would call my software sleepy Ray when latency is high.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure why it would be so bad -- are you hammering the virtual router with small incoming messages?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are 24 AMD Opteron(tm) Processor 6172 cores for 1 Mellanox Technologies MT26428 on each node. That may be the cause too.
</span><br>
<p>That's a QDR HCA, right?  (i.e., I assume it's very recent)
<br>
<p>Try running some simple point-to-point benchmarks and see if you're getting the same latency (i.e., don't run benchmarks in your app -- get a baseline with some well-known benchmarks first).
<br>
<p><span class="quotelev2">&gt;&gt; You might need to do a little profiling to see where the bottlenecks are.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, with the very valuable information you provided about log_num_mtt and log_mtts_per_seg for the Linux kernel module mlx4_core, I think this may be the root of our problem.
</span><br>
<p>It is definitely a cause, but perhaps not the only cause.
<br>
<p><span class="quotelev1">&gt; We get 20-30 us on 4096 processes on Cray XE6, so it is unlikely that the bottleneck is in our software.
</span><br>
<p>Possibly not.  But every environment is different, and the same software can perform differently in different environments.
<br>
<p><span class="quotelev1">&gt; Yes, I agree on this, non-portable code is not portable and all with unexpected behaviors.
</span><br>
<p>Got it.
<br>
<p><span class="quotelev1">&gt; Ah I see. By removing the checks in my silly patch, I can now dictate things to do to OMPI. Hehe.
</span><br>
<p>:-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20355.php">SÃ©bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20353.php">S&#233;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20353.php">S&#233;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20356.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>Reply:</strong> <a href="20356.php">Sébastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
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
