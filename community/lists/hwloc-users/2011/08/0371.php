<?
$subject_val = "Re: [hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 11:01:11 2011" -->
<!-- isoreceived="20110804150111" -->
<!-- sent="Thu, 4 Aug 2011 17:01:04 +0200" -->
<!-- isosent="20110804150104" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread core affinity" -->
<!-- id="20110804150104.GG4409_at_type.bordeaux.inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1946292336.1946136.1312469782445.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-08-04 11:01:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0372.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0370.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0334.php">Gabriele Fatigati: "[hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0372.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0372.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele Fatigati, le Thu 04 Aug 2011 16:56:22 +0200, a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; L#0 and L#1 are physically near because hwloc consider&#194;&#160;shared caches map when
</span><br>
<span class="quotelev1">&gt; build topology?
</span><br>
<p>Yes. That's the whole point of sorting objects topologically first, and
<br>
numbering them afterwards. See the glossary entry for &quot;logical index&quot;:
<br>
<p>&#226;&#128;&#156;The ordering is based on topology first, and then on OS CPU numbers&#226;&#128;&#157;
<br>
<p>I.e. OS CPU numbers are only used when no topology information (shared
<br>
cache etc.) provides any better sorting.
<br>
<p><span class="quotelev1">&gt; Because if not, i don't know how hwloc understand the physical
</span><br>
<span class="quotelev1">&gt; proximity of cores :(
</span><br>
<p>Physical proximity of cores does not mean logical proximity. cores can
<br>
be next one to the other, and still share no cache at all. Forget the
<br>
expression &quot;physical proximity&quot;, it does not provide any interesting
<br>
information. What matters is logical proximity. And that's *precisely*
<br>
what logical indexes express.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0372.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0370.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0334.php">Gabriele Fatigati: "[hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0372.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0372.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
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
