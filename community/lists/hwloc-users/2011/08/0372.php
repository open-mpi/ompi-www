<?
$subject_val = "Re: [hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 11:41:10 2011" -->
<!-- isoreceived="20110804154110" -->
<!-- sent="Thu, 4 Aug 2011 17:41:05 +0200" -->
<!-- isosent="20110804154105" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread core affinity" -->
<!-- id="CAJNPZUWc-sR8gkfDn9=2uJtC3EiZJRjKQGyiZGn9XXr2pGhY4w_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20110804150104.GG4409_at_type.bordeaux.inria.fr" -->
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
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 11:41:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0373.php">Gabriele Fatigati: "[hwloc-users] Difference between HWLOC_OBJ_CORE and HWLOC_OBJ_PU"</a>
<li><strong>Previous message:</strong> <a href="0371.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0371.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well,
<br>
<p>now it's more clear.
<br>
<p>Thanks for the informations!
<br>
<p>Regards.
<br>
<p>2011/8/4 Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Gabriele Fatigati, le Thu 04 Aug 2011 16:56:22 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; L#0 and L#1 are physically near because hwloc consider shared caches map
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev2">&gt; &gt; build topology?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes. That's the whole point of sorting objects topologically first, and
</span><br>
<span class="quotelev1">&gt; numbering them afterwards. See the glossary entry for &quot;logical index&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#147;The ordering is based on topology first, and then on OS CPU numbers&#148;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I.e. OS CPU numbers are only used when no topology information (shared
</span><br>
<span class="quotelev1">&gt; cache etc.) provides any better sorting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Because if not, i don't know how hwloc understand the physical
</span><br>
<span class="quotelev2">&gt; &gt; proximity of cores :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Physical proximity of cores does not mean logical proximity. cores can
</span><br>
<span class="quotelev1">&gt; be next one to the other, and still share no cache at all. Forget the
</span><br>
<span class="quotelev1">&gt; expression &quot;physical proximity&quot;, it does not provide any interesting
</span><br>
<span class="quotelev1">&gt; information. What matters is logical proximity. And that's *precisely*
</span><br>
<span class="quotelev1">&gt; what logical indexes express.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0372/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0373.php">Gabriele Fatigati: "[hwloc-users] Difference between HWLOC_OBJ_CORE and HWLOC_OBJ_PU"</a>
<li><strong>Previous message:</strong> <a href="0371.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0371.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
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
