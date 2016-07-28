<?
$subject_val = "Re: [hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 10:25:52 2011" -->
<!-- isoreceived="20110804142552" -->
<!-- sent="Thu, 4 Aug 2011 16:25:47 +0200" -->
<!-- isosent="20110804142547" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread core affinity" -->
<!-- id="20110804142547.GE4409_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="57016276.1945493.1312467275157.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-08-04 10:25:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0368.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0366.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0334.php">Gabriele Fatigati: "[hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0368.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0368.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele Fatigati, le Thu 04 Aug 2011 16:14:35 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; &#160; &#160; Socket:
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160; ______________
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;| &#160; &#160; ____ &#160; ____ &#160; &#160; &#160;|
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;| &#160; &#160; |core | &#160;|core&#160;| &#160; &#160;|
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;| &#160; &#160; &#160;____ &#160;____ &#160; &#160; &#160;|
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;| &#160; &#160;&#160;|core&#160;|&#160;|core&#160;| &#160; &#160; |
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;| &#160; &#160; &#160;____ &#160;____ &#160; &#160; &#160;|
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;| &#160; &#160;&#160;|core&#160;|&#160;|core&#160;| &#160; &#160; |
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; &#160;| ______________|
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lstopo how create the numerations?
</span><br>
<p>It does not really matter since there is no topology consideration here
<br>
(no shared cache or such).  In that case hwloc will simply follow the
<br>
order as provided by the OS. If there were shared caches, they would
<br>
come into play when sorting the topology.
<br>
<p><span class="quotelev1">&gt; It consider physical OS index to list and create cores topology? If
</span><br>
<span class="quotelev1">&gt; yes, maybe Core L#0 &#160;and Core L#1 &#160;in a single socket are physically
</span><br>
<span class="quotelev1">&gt; near.
</span><br>
<p>Mmm, maybe the confusion comes from the expression &quot;physically near&quot;.
<br>
What we call physical index have nothing to do with physical proximity.
<br>
It's just what the physical chip says, which often has nothing to do
<br>
with physical proximity.
<br>
<p>There is nothing much fancy in the topology creation really: we simply
<br>
include objects one into the other according to logical inclusion, and
<br>
finally sort by OS (i.e. physical) index after it's all topology-sorted.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0368.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0366.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/07/0334.php">Gabriele Fatigati: "[hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0368.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Reply:</strong> <a href="0368.php">Gabriele Fatigati: "Re: [hwloc-users] Thread core affinity"</a>
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
