<?
$subject_val = "Re: [OMPI users] busy waiting and oversubscriptions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 11:31:58 2014" -->
<!-- isoreceived="20140327153158" -->
<!-- sent="Thu, 27 Mar 2014 11:31:57 -0400" -->
<!-- isosent="20140327153157" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] busy waiting and oversubscriptions" -->
<!-- id="5334446D.8030306_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140327090538.GA22802_at_neuromancer" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 11:31:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23987.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Previous message:</strong> <a href="23985.php">madhurima madhunapanthula: "[OMPI users] Hamster"</a>
<li><strong>In reply to:</strong> <a href="23981.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23988.php">Reuti: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23988.php">Reuti: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="24006.php">Dave Love: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/27/2014 05:05 AM, Andreas Sch&#228;fer wrote:
<br>
<span class="quotelev3">&gt;&gt; &gt;Queue systems won't allow resources to be oversubscribed.
</span><br>
<span class="quotelev1">&gt; I'm fairly confident that you can configure Slurm to oversubscribe
</span><br>
<span class="quotelev1">&gt; nodes: just specify more cores for a node than are actually present.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That is true.
<br>
If you lie to the queue system about your resources,
<br>
it will believe you and oversubscribe.
<br>
Torque has this same feature.
<br>
I don't know about SGE.
<br>
You may choose to set some or all nodes with more cores than they 
<br>
actually have, if that is a good choice for the codes you run.
<br>
However, for our applications oversubscribing is bad, hence my mindset.
<br>
<p>Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23987.php">Saliya Ekanayake: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>Previous message:</strong> <a href="23985.php">madhurima madhunapanthula: "[OMPI users] Hamster"</a>
<li><strong>In reply to:</strong> <a href="23981.php">Andreas Sch&#228;fer: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23988.php">Reuti: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="23988.php">Reuti: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="24006.php">Dave Love: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
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
