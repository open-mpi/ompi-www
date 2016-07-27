<?
$subject_val = "[hwloc-devel] Picky compiler options in hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 16:16:49 2011" -->
<!-- isoreceived="20110120211649" -->
<!-- sent="Thu, 20 Jan 2011 15:16:45 -0600" -->
<!-- isosent="20110120211645" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] Picky compiler options in hwloc" -->
<!-- id="4D38A63D.6030805_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] Picky compiler options in hwloc<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 16:16:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1868.php">Brice Goglin: "Re: [hwloc-devel] Picky compiler options in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1866.php">Guy Streeter: "Re: [hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1868.php">Brice Goglin: "Re: [hwloc-devel] Picky compiler options in hwloc"</a>
<li><strong>Reply:</strong> <a href="1868.php">Brice Goglin: "Re: [hwloc-devel] Picky compiler options in hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>One of the patches that we maintain in MPICH2 for hwloc is to disable 
<br>
picking stricter compiler options based on the fact that a &quot;.svn&quot; or 
<br>
&quot;.hg&quot; is available. This is similar to disabling picking verbose mode 
<br>
based on .svn or .hg existing, that I had reported earlier.
<br>
<p><a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/v1.1/config/hwloc_internal.m4?rev=3120#L162">https://svn.open-mpi.org/trac/hwloc/browser/branches/v1.1/config/hwloc_internal.m4?rev=3120#L162</a>
<br>
<p>Is this something that can be fixed in hwloc, or do you guys prefer 
<br>
having it?
<br>
<p>&nbsp;&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1868.php">Brice Goglin: "Re: [hwloc-devel] Picky compiler options in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1866.php">Guy Streeter: "Re: [hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1868.php">Brice Goglin: "Re: [hwloc-devel] Picky compiler options in hwloc"</a>
<li><strong>Reply:</strong> <a href="1868.php">Brice Goglin: "Re: [hwloc-devel] Picky compiler options in hwloc"</a>
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
