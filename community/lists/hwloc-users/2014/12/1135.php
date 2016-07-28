<?
$subject_val = "[hwloc-users] wrong os_index on AIX -&gt; please test";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 09:34:35 2014" -->
<!-- isoreceived="20141217143435" -->
<!-- sent="Wed, 17 Dec 2014 15:34:33 +0100" -->
<!-- isosent="20141217143433" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-users] wrong os_index on AIX -&amp;gt; please test" -->
<!-- id="54919479.1010307_at_inria.fr" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [hwloc-users] wrong os_index on AIX -&gt; please test<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 09:34:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1136.php">Erik Schnetter: "Re: [hwloc-users] wrong os_index on AIX -&gt; please test"</a>
<li><strong>Previous message:</strong> <a href="1134.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1136.php">Erik Schnetter: "Re: [hwloc-users] wrong os_index on AIX -&gt; please test"</a>
<li><strong>Reply:</strong> <a href="1136.php">Erik Schnetter: "Re: [hwloc-users] wrong os_index on AIX -&gt; please test"</a>
<li><strong>Reply:</strong> <a href="1137.php">Hendryk Bockelmann: "Re: [hwloc-users] wrong os_index on AIX -&gt; please test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I am seeing assert failures on AIX 6.1 because our PU os_index is off by
<br>
one. They go from -1 to 62 instead of 0 to 63.
<br>
<p>We have a comment saying
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* It seems logical processors are numbered from 1 here, while the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* bindprocessor functions numbers them from 0... */
<br>
<p>This contradicts the doc of rs_getrad() which says index starts from 0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;index
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Specifies the index of the system RAD that should be returned from among those at the specified sdl. This parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;must belong to the [0, rs_numrads(rset, sdl, flags)- 1] interval.
<br>
<p>If you have AIX, could you please run
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lstopo - | grep &quot;PU L#0&quot;
<br>
and report the output as well as you AIX version?
<br>
If the line is only &quot;PU L#0&quot;, the index is -1 (not displayed), we're
<br>
buggy (what I see on AIX 6.1).
<br>
If the line is &quot;PU L#0 P#0&quot;, the index is OK.
<br>
I hope we won't have different behaviors...
<br>
<p>thanks
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1136.php">Erik Schnetter: "Re: [hwloc-users] wrong os_index on AIX -&gt; please test"</a>
<li><strong>Previous message:</strong> <a href="1134.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1136.php">Erik Schnetter: "Re: [hwloc-users] wrong os_index on AIX -&gt; please test"</a>
<li><strong>Reply:</strong> <a href="1136.php">Erik Schnetter: "Re: [hwloc-users] wrong os_index on AIX -&gt; please test"</a>
<li><strong>Reply:</strong> <a href="1137.php">Hendryk Bockelmann: "Re: [hwloc-users] wrong os_index on AIX -&gt; please test"</a>
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
