<?
$subject_val = "Re: [hwloc-devel] Graceful abort for non-C99 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 21:59:25 2010" -->
<!-- isoreceived="20100511015925" -->
<!-- sent="Mon, 10 May 2010 20:59:21 -0500" -->
<!-- isosent="20100511015921" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Graceful abort for non-C99 compilers" -->
<!-- id="4BE8B9F9.2080206_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BE8B943.3040402_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Graceful abort for non-C99 compilers<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 21:59:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0982.php">Samuel Thibault: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>Previous message:</strong> <a href="0980.php">Pavan Balaji: "[hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>In reply to:</strong> <a href="0980.php">Pavan Balaji: "[hwloc-devel] Graceful abort for non-C99 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0985.php">Jeff Squyres: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>Reply:</strong> <a href="0985.php">Jeff Squyres: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Darn. The patch is incorrect. Sorry, too sleepy. It should be checking 
<br>
for $ac_prog_cc_c99 instead. But you get the idea.
<br>
<p>&nbsp;&nbsp;-- Pavan
<br>
<p>On 05/10/2010 08:56 PM, Pavan Balaji wrote:
<br>
<span class="quotelev1">&gt; I understand that hwloc requires C99 support. However, for compilers 
</span><br>
<span class="quotelev1">&gt; that don't support C99, would you be willing to gracefully abort during 
</span><br>
<span class="quotelev1">&gt; configure instead of failing at make time?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/6634">https://trac.mcs.anl.gov/projects/mpich2/changeset/6634</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree that most compilers today probably support C99, but whether to 
</span><br>
<span class="quotelev1">&gt; drop C89-only support is a policy decision we are yet to make in MPICH2, 
</span><br>
<span class="quotelev1">&gt; and will need the above patch to get hwloc integrated cleanly in all our 
</span><br>
<span class="quotelev1">&gt; supported environments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   -- Pavan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0982.php">Samuel Thibault: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>Previous message:</strong> <a href="0980.php">Pavan Balaji: "[hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>In reply to:</strong> <a href="0980.php">Pavan Balaji: "[hwloc-devel] Graceful abort for non-C99 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0985.php">Jeff Squyres: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>Reply:</strong> <a href="0985.php">Jeff Squyres: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
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
