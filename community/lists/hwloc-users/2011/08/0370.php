<?
$subject_val = "Re: [hwloc-users] Thread core affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 10:55:43 2011" -->
<!-- isoreceived="20110804145543" -->
<!-- sent="Thu, 4 Aug 2011 16:55:14 +0200" -->
<!-- isosent="20110804145514" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread core affinity" -->
<!-- id="CAJNPZUW74HK3jO5dVyvK=iP-Y-7ceG51AOsobEMZV=xcs-ZLjw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110804144713.GF4409_at_type.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2011-08-04 10:55:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0371.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0369.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0369.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0371.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
L#0 and L#1 are physically near because hwloc consider shared caches map
<br>
when build topology? Because if not, i don't know how hwloc understand the
<br>
physical proximity of cores :(
<br>
<p>2011/8/4 Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Gabriele Fatigati, le Thu 04 Aug 2011 16:35:36 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; so physical OS index 0 and 1 are not true are physically near on the die.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They quite often aren't. See the updated glossary of the documentation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;The index that the operating system (OS) uses to identify the object.
</span><br>
<span class="quotelev1">&gt; This may be completely arbitrary, non-unique, non-contiguous, not
</span><br>
<span class="quotelev1">&gt; representative of proximity, and may depend on the BIOS configuration.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Considering that, how I can use cache locality and cache sharing by cores
</span><br>
<span class="quotelev1">&gt; if I
</span><br>
<span class="quotelev2">&gt; &gt; don't know where my threads will physically bound?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By using logical indexes, not physical indexes. And almost all hwloc
</span><br>
<span class="quotelev1">&gt; functions use logical indexes, not physical indexes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If L#0 and L#1  where I bind my threads are physically far, may give me
</span><br>
<span class="quotelev1">&gt; bad
</span><br>
<span class="quotelev2">&gt; &gt; performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; L#0 and L#1 are physically near, that's precisely the whole point of
</span><br>
<span class="quotelev1">&gt; hwloc: it provides you with *logical* indexes which express proximity,
</span><br>
<span class="quotelev1">&gt; instead of the P#0 and P#1 physical/OS indexes, which are quite often
</span><br>
<span class="quotelev1">&gt; simply arbitrary.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0370/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0371.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>Previous message:</strong> <a href="0369.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<li><strong>In reply to:</strong> <a href="0369.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0371.php">Samuel Thibault: "Re: [hwloc-users] Thread core affinity"</a>
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
