<?
$subject_val = "Re: [hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 10:47:19 2011" -->
<!-- isoreceived="20110804144719" -->
<!-- sent="Thu, 4 Aug 2011 16:47:13 +0200" -->
<!-- isosent="20110804144713" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread core affinity" -->
<!-- id="20110804144713.GF4409_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1901949784.1945844.1312468536558.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Thread core affinity<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 10:47:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0370.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0368.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0334.php">Gabriele Fatigati: "[hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0370.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0370.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele Fatigati, le Thu 04 Aug 2011 16:35:36 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; so physical OS index 0 and 1 are not true are physically near on the die.
</span><br>
<p>They quite often aren't. See the updated glossary of the documentation:
<br>
<p>&quot;The index that the operating system (OS) uses to identify the object.
<br>
This may be completely arbitrary, non-unique, non-contiguous, not
<br>
representative of proximity, and may depend on the BIOS configuration.&quot;
<br>
<p><span class="quotelev1">&gt; Considering that, how I can use cache locality and cache sharing by cores if I
</span><br>
<span class="quotelev1">&gt; don't know where my threads&#160;will&#160;physically bound?
</span><br>
<p>By using logical indexes, not physical indexes. And almost all hwloc
<br>
functions use logical indexes, not physical indexes.
<br>
<p><span class="quotelev1">&gt; If L#0 and L#1 &#160;where I bind my threads are physically far, may give me bad
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<p>L#0 and L#1 are physically near, that's precisely the whole point of
<br>
hwloc: it provides you with *logical* indexes which express proximity,
<br>
instead of the P#0 and P#1 physical/OS indexes, which are quite often
<br>
simply arbitrary.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0370.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0368.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0334.php">Gabriele Fatigati: "[hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0370.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0370.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
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
