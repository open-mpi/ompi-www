<?
$subject_val = "Re: [hwloc-users] Multiple thread binding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 11:18:00 2011" -->
<!-- isoreceived="20110802151800" -->
<!-- sent="Tue, 2 Aug 2011 17:17:56 +0200" -->
<!-- isosent="20110802151756" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Multiple thread binding" -->
<!-- id="20110802151756.GR4511_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4384926.1927142.1312297995606.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Multiple thread binding<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-02 11:17:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0357.php">Gabriele Fatigati: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Previous message:</strong> <a href="0355.php">Gabriele Fatigati: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Maybe in reply to:</strong> <a href="0353.php">Gabriele Fatigati: "[hwloc-users] Multiple thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0358.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele Fatigati, le Tue 02 Aug 2011 17:13:15 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; $pragma omp parallel num_thread(1)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(*topology, set, &#160;HWLOC_CPUBIND_THREAD | HWLOC_CPUBIND_STRICT&#160;
</span><br>
<span class="quotelev1">&gt; | &#160; HWLOC_CPUBIND_NOMEMBIND);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is equivalent to?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $pragma omp parallel num_thread(1)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(*topology, set, &#160;HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(*topology, set,&#160;HWLOC_CPUBIND_STRICT);
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(*topology, set,&#160;HWLOC_CPUBIND_NOMEMBIND);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>As I said, no. The latter will perform the three operations one after
<br>
the other, piling the effect of each of them, which is different from
<br>
specifying all the flags at the same time. For instance, in the first
<br>
case, only the current thread will be bound, while in the second case,
<br>
the second and third calls will bind the whole process! (since there is
<br>
no THREAD flag).
<br>
<p><span class="quotelev1">&gt; You said&#160;HWLOC_CPUBIND_STRICT bind process and memory.
</span><br>
<p>I should have said &quot;potentially memory too&quot;. And it's not the STRICT
<br>
flag which does this, it's the absence of NOMEMBIND which does this.
<br>
<p><span class="quotelev1">&gt; Why also the memory?
</span><br>
<p>Because some OS do this too.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0357.php">Gabriele Fatigati: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Previous message:</strong> <a href="0355.php">Gabriele Fatigati: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Maybe in reply to:</strong> <a href="0353.php">Gabriele Fatigati: "[hwloc-users] Multiple thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0358.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
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
