<?
$subject_val = "Re: [hwloc-users] Multiple thread binding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 11:26:11 2011" -->
<!-- isoreceived="20110802152611" -->
<!-- sent="Tue, 2 Aug 2011 17:26:06 +0200" -->
<!-- isosent="20110802152606" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Multiple thread binding" -->
<!-- id="20110802152606.GS4511_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="642920262.1927293.1312298551266.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-08-02 11:26:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0359.php">Hendryk Bockelmann: "[hwloc-users] hwloc v1.2.1rc1 test on AIX"</a>
<li><strong>Previous message:</strong> <a href="0357.php">Gabriele Fatigati: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Maybe in reply to:</strong> <a href="0353.php">Gabriele Fatigati: "[hwloc-users] Multiple thread binding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele Fatigati, le Tue 02 Aug 2011 17:22:31 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; and in this way are equivalent?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #pragma omp parallel num_threads(1)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; hwloc_obj_t&#160;core = hwloc_get_obj_by_type(*topology, HWLOC_OBJ_PU, 0);
</span><br>
<span class="quotelev1">&gt; hwloc_cpuset_t set = hwloc_bitmap_dup(core-&gt;cpuset);
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(*topology, set, &#160;HWLOC_CPUBIND_THREAD |&#160;
</span><br>
<span class="quotelev1">&gt; HWLOC_CPUBIND_STRICT);
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind(*topology, set, &#160;HWLOC_CPUBIND_THREAD |&#160;
</span><br>
<span class="quotelev1">&gt; HWLOC_CPUBIND_NOMEMBIND);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>Since the first call does not have NOMEMBIND, it might bind the memory
<br>
on some OSes, and since the second call does not have the strict flag,
<br>
the thread will in the end not be strictly bound.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0359.php">Hendryk Bockelmann: "[hwloc-users] hwloc v1.2.1rc1 test on AIX"</a>
<li><strong>Previous message:</strong> <a href="0357.php">Gabriele Fatigati: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Maybe in reply to:</strong> <a href="0353.php">Gabriele Fatigati: "[hwloc-users] Multiple thread binding"</a>
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
