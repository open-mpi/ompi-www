<?
$subject_val = "[hwloc-users] Zero cache line size on Power7?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 17:11:51 2013" -->
<!-- isoreceived="20130227221151" -->
<!-- sent="Wed, 27 Feb 2013 17:11:46 -0500" -->
<!-- isosent="20130227221146" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="[hwloc-users] Zero cache line size on Power7?" -->
<!-- id="CADKQjjeqbygd6MNQwbN9O9c5rnMNg4sNs=LOuDefaGvdGm4_Ww_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] Zero cache line size on Power7?<br>
<strong>From:</strong> Erik Schnetter (<em>schnetter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-27 17:11:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0878.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
<li><strong>Previous message:</strong> <a href="0876.php">Aulwes, Rob: "Re: [hwloc-users] rebind subarray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0878.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
<li><strong>Reply:</strong> <a href="0878.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running hwloc 1.7a1r5312 on a Power7 architecture. I find there a
<br>
level 2 cache with a cacheline size of 0. Is this to be expected? The
<br>
documentation doesn't say that determining the cacheline size may fail.
<br>
<p>I query the cache parameters from my application with these results:
<br>
<p>Cache (unknown name) has type &quot;data&quot; depth 1
<br>
&nbsp;&nbsp;&nbsp;size 32768 linesize 128 associativity 8 stride 4096
<br>
Cache (unknown name) has type &quot;unified&quot; depth 2
<br>
&nbsp;&nbsp;&nbsp;size 262144 linesize 0 associativity 8 stride 32768
<br>
<p>-erik
<br>
<p><pre>
--
Erik Schnetter &lt;schnetter_at_[hidden]&gt;
<a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0877/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0878.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
<li><strong>Previous message:</strong> <a href="0876.php">Aulwes, Rob: "Re: [hwloc-users] rebind subarray"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0878.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
<li><strong>Reply:</strong> <a href="0878.php">Brice Goglin: "Re: [hwloc-users] Zero cache line size on Power7?"</a>
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
