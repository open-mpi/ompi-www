<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2083";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 12:50:01 2010" -->
<!-- isoreceived="20100507165001" -->
<!-- sent="Sat, 08 May 2010 02:49:50 +1000" -->
<!-- isosent="20100507164950" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2083" -->
<!-- id="D45958078CD65C429557B4C5F492B6A60770E4F0_at_IS-EX-BEV3.unimelb.edu.au" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0B7E8AC9-F2EA-4016-A2A7-3C420B285173_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2083<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 12:49:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0979.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2085)"</a>
<li><strong>Previous message:</strong> <a href="0977.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2083"</a>
<li><strong>In reply to:</strong> <a href="0977.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2083"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/05/10 08:29, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; So if hwloc_snprintf() returns 0, how do you know if you
</span><br>
<span class="quotelev1">&gt; got a zero-length string or an error?
</span><br>
<p>The GNU libc manual page for snprintf() et. al says:
<br>
<p>&nbsp;&nbsp;If an output error is encountered, a negative value is returned.
<br>
<p>So I'd have thought that a negative value should be returned
<br>
if we abort due to not being to allocate enough memory.
<br>
<p>cheers,
<br>
Chris
<br>
<pre>
-- 
  Christopher Samuel - Senior Systems Administrator
  VLSCI - Victorian Life Sciences Computational Initiative
  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
          <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0978/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0979.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2085)"</a>
<li><strong>Previous message:</strong> <a href="0977.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2083"</a>
<li><strong>In reply to:</strong> <a href="0977.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2083"</a>
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
