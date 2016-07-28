<?
$subject_val = "Re: [hwloc-users] hwloc get cpubind function";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 11 12:15:00 2011" -->
<!-- isoreceived="20110811161500" -->
<!-- sent="Thu, 11 Aug 2011 18:14:56 +0200" -->
<!-- isosent="20110811161456" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc get cpubind function" -->
<!-- id="20110811161456.GR5226_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="40497298.1995145.1313078725632.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc get cpubind function<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-11 12:14:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0394.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Previous message:</strong> <a href="0392.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Maybe in reply to:</strong> <a href="0377.php">Gabriele Fatigati: "[hwloc-users] hwloc get cpubind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0394.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Reply:</strong> <a href="0394.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele Fatigati, le Thu 11 Aug 2011 18:05:25 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; char* bitmap_string=(char*)malloc(256);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap_t set = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_linux_get_tid_cpubind(&amp;topology, tid, set);
</span><br>
<p>Where does &quot;tid&quot; come from? hwloc_linux_get_tid_cpubind() only takes
<br>
Linux tids (as in gettid()), not OpenMP thread IDs.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0394.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Previous message:</strong> <a href="0392.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Maybe in reply to:</strong> <a href="0377.php">Gabriele Fatigati: "[hwloc-users] hwloc get cpubind function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0394.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
<li><strong>Reply:</strong> <a href="0394.php">Gabriele Fatigati: "Re: [hwloc-users] hwloc get cpubind function"</a>
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
