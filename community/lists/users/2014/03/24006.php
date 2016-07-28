<?
$subject_val = "Re: [OMPI users] busy waiting and oversubscriptions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 18:57:35 2014" -->
<!-- isoreceived="20140327225735" -->
<!-- sent="Thu, 27 Mar 2014 22:57:19 +0000" -->
<!-- isosent="20140327225719" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] busy waiting and oversubscriptions" -->
<!-- id="87fvm36yi8.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5334446D.8030306_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] busy waiting and oversubscriptions<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 18:57:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24007.php">Lloyd Brown: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="24005.php">Dave Love: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23986.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24005.php">Dave Love: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus Correa &lt;gus_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; On 03/27/2014 05:05 AM, Andreas Sch&#228;fer wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;Queue systems won't allow resources to be oversubscribed.
</span><br>
<p>[Maybe that meant that resource managers can, and typically do, prevent
<br>
resources being oversubscribed.]
<br>
<p><span class="quotelev2">&gt;&gt; I'm fairly confident that you can configure Slurm to oversubscribe
</span><br>
<span class="quotelev2">&gt;&gt; nodes: just specify more cores for a node than are actually present.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is true.
</span><br>
<span class="quotelev1">&gt; If you lie to the queue system about your resources,
</span><br>
<span class="quotelev1">&gt; it will believe you and oversubscribe.
</span><br>
<p>For what it's worth, oversubscription might be overall or limited.  We
<br>
just had a user running some crazy Java program he refuses to explain
<br>
submitted as a serial job running ~150 threads.  The over-subscription
<br>
was confined to core is used, and the effect on the 127 others was
<br>
mostly due to the small overhead of the node daemon reading the crazy
<br>
/proc smaps file to track the memory usage.  The other cores were
<br>
normally subscribed.
<br>
<p>Ob-OMPI:  the other jobs may have been OMPI ones!
<br>
<p><span class="quotelev1">&gt; Torque has this same feature.
</span><br>
<span class="quotelev1">&gt; I don't know about SGE.
</span><br>
<span class="quotelev1">&gt; You may choose to set some or all nodes with more cores than they
</span><br>
<span class="quotelev1">&gt; actually have, if that is a good choice for the codes you run.
</span><br>
<span class="quotelev1">&gt; However, for our applications oversubscribing is bad, hence my mindset.
</span><br>
<p>Right.  I don't think there's any question that it's a bad idea on a
<br>
general purpose cluster running some OMPI jobs, for instance.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24007.php">Lloyd Brown: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="24005.php">Dave Love: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="23986.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24005.php">Dave Love: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
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
