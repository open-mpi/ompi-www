<?
$subject_val = "Re: [hwloc-users] Multiple thread binding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 11:02:09 2011" -->
<!-- isoreceived="20110802150209" -->
<!-- sent="Tue, 2 Aug 2011 17:02:04 +0200" -->
<!-- isosent="20110802150204" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Multiple thread binding" -->
<!-- id="20110802150204.GO4511_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="452836908.1926306.1312294992463.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-08-02 11:02:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0355.php">Gabriele Fatigati: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Previous message:</strong> <a href="0353.php">Gabriele Fatigati: "[hwloc-users] Multiple thread binding"</a>
<li><strong>Maybe in reply to:</strong> <a href="0353.php">Gabriele Fatigati: "[hwloc-users] Multiple thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0355.php">Gabriele Fatigati: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Reply:</strong> <a href="0355.php">Gabriele Fatigati: "Re: [hwloc-users] Multiple thread binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele Fatigati, le Tue 02 Aug 2011 16:23:12 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; hwloc_set_cpubind(*topology, set, &#160;HWLOC_CPUBIND_THREAD | HWLOC_CPUBIND_STRICT
</span><br>
<span class="quotelev1">&gt; | &#160; HWLOC_CPUBIND_NOMEMBIND);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is it possible do multiple call to&#160;hwloc_set_cpubind passing each flag per
</span><br>
<span class="quotelev1">&gt; time?&#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(*topology, set, &#160;HWLOC_CPUBIND_THREAD);
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(*topology, set,&#160;HWLOC_CPUBIND_STRICT);
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(*topology, set,&#160;HWLOC_CPUBIND_NOMEMBIND);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or only the last have effect?
</span><br>
<p>Err, it will simply do the three operations, i.e. first bind the current
<br>
thread and memory, then strictly bind the whole process and memory, and
<br>
eventually bind the process but not memory (but it will still bound
<br>
since it was by the second call).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0355.php">Gabriele Fatigati: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Previous message:</strong> <a href="0353.php">Gabriele Fatigati: "[hwloc-users] Multiple thread binding"</a>
<li><strong>Maybe in reply to:</strong> <a href="0353.php">Gabriele Fatigati: "[hwloc-users] Multiple thread binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0355.php">Gabriele Fatigati: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Reply:</strong> <a href="0355.php">Gabriele Fatigati: "Re: [hwloc-users] Multiple thread binding"</a>
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
