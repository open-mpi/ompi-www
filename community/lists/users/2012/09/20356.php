<?
$subject_val = "Re: [OMPI users] About MPI_TAG_UB";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 28 11:16:18 2012" -->
<!-- isoreceived="20120928151618" -->
<!-- sent="Fri, 28 Sep 2012 11:16:54 -0400" -->
<!-- isosent="20120928151654" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="sebastien.boisvert.3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] About MPI_TAG_UB" -->
<!-- id="5065BF66.4070002_at_ulaval.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4035D295-E40E-4D29-9C02-3BDAB269CC4B_at_cisco.com" -->
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
<strong>From:</strong> S&#233;bastien Boisvert (<em>sebastien.boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-28 11:16:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20357.php">Mark Dixon: "[OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<li><strong>Previous message:</strong> <a href="20355.php">S&#195;&#169;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20354.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 28/09/12 10:50 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 28, 2012, at 10:38 AM, S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1.5 us is very good. But I get 1.5 ms with shared queues (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oh, I mis-read (I blame it on jet-lag...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, that seems waaaay too high.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You didn't do a developer build, did you?  We add a bunch of extra debugging in developer builds that adds a bunch of latency.  And you're not running over-subscribed, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I installed v1.6.2, not a developer build.
<br>
<p>23 or 24 processes per node, 24 AMD Interlagos cores per node. So not oversubscribed.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; OTOH, that's pretty bad.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know, all my Ray processes are doing busy waiting, if MPI was event-driven,
</span><br>
<span class="quotelev2">&gt;&gt; I would call my software sleepy Ray when latency is high.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure why it would be so bad -- are you hammering the virtual router with small incoming messages?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are 24 AMD Opteron(tm) Processor 6172 cores for 1 Mellanox Technologies MT26428 on each node. That may be the cause too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's a QDR HCA, right?  (i.e., I assume it's very recent)
</span><br>
<p>Yes.
<br>
<p>02:00.0 InfiniBand: Mellanox Technologies MT26428 [ConnectX VPI PCIe 2.0 5GT/s - IB QDR / 10GigE] (rev b0)
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try running some simple point-to-point benchmarks and see if you're getting the same latency (i.e., don't run benchmarks in your app -- get a baseline with some well-known benchmarks first).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You might need to do a little profiling to see where the bottlenecks are.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, with the very valuable information you provided about log_num_mtt and log_mtts_per_seg for the Linux kernel module mlx4_core, I think this may be the root of our problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is definitely a cause, but perhaps not the only cause.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We get 20-30 us on 4096 processes on Cray XE6, so it is unlikely that the bottleneck is in our software.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Possibly not.  But every environment is different, and the same software can perform differently in different environments.
</span><br>
<p>I agree.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I agree on this, non-portable code is not portable and all with unexpected behaviors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Got it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ah I see. By removing the checks in my silly patch, I can now dictate things to do to OMPI. Hehe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20357.php">Mark Dixon: "[OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<li><strong>Previous message:</strong> <a href="20355.php">S&#195;&#169;bastien Boisvert: "Re: [OMPI users] About MPI_TAG_UB"</a>
<li><strong>In reply to:</strong> <a href="20354.php">Jeff Squyres: "Re: [OMPI users] About MPI_TAG_UB"</a>
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
