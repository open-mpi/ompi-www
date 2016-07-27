<?
$subject_val = "[hwloc-devel] Graceful abort for non-C99 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 21:56:25 2010" -->
<!-- isoreceived="20100511015625" -->
<!-- sent="Mon, 10 May 2010 20:56:19 -0500" -->
<!-- isosent="20100511015619" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] Graceful abort for non-C99 compilers" -->
<!-- id="4BE8B943.3040402_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D45958078CD65C429557B4C5F492B6A60770E4EF_at_IS-EX-BEV3.unimelb.edu.au" -->
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
<strong>Subject:</strong> [hwloc-devel] Graceful abort for non-C99 compilers<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 21:56:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0981.php">Pavan Balaji: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>Previous message:</strong> <a href="0979.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2085)"</a>
<li><strong>In reply to:</strong> <a href="0976.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0981.php">Pavan Balaji: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>Reply:</strong> <a href="0981.php">Pavan Balaji: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>Reply:</strong> <a href="0982.php">Samuel Thibault: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I understand that hwloc requires C99 support. However, for compilers 
<br>
that don't support C99, would you be willing to gracefully abort during 
<br>
configure instead of failing at make time?
<br>
<p><a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/6634">https://trac.mcs.anl.gov/projects/mpich2/changeset/6634</a>
<br>
<p>I agree that most compilers today probably support C99, but whether to 
<br>
drop C89-only support is a policy decision we are yet to make in MPICH2, 
<br>
and will need the above patch to get hwloc integrated cleanly in all our 
<br>
supported environments.
<br>
<p>Thanks,
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
<li><strong>Next message:</strong> <a href="0981.php">Pavan Balaji: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>Previous message:</strong> <a href="0979.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2085)"</a>
<li><strong>In reply to:</strong> <a href="0976.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.0-rc5 cannot recreate hwloc.7 after make distclean"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0981.php">Pavan Balaji: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>Reply:</strong> <a href="0981.php">Pavan Balaji: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>Reply:</strong> <a href="0982.php">Samuel Thibault: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
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
