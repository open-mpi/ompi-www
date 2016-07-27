<?
$subject_val = "Re: [hwloc-devel] Graceful abort for non-C99 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 13 20:04:01 2010" -->
<!-- isoreceived="20100514000401" -->
<!-- sent="Thu, 13 May 2010 19:03:56 -0500" -->
<!-- isosent="20100514000356" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Graceful abort for non-C99 compilers" -->
<!-- id="4BEC936C.4000608_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BFEDAA4E-B53D-4875-86BB-E9284A91F253_at_cisco.com" -->
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
<strong>Date:</strong> 2010-05-13 20:03:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0993.php">Jeff Squyres: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>Previous message:</strong> <a href="0991.php">Jeff Squyres: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>In reply to:</strong> <a href="0985.php">Jeff Squyres: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0993.php">Jeff Squyres: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>Reply:</strong> <a href="0993.php">Jeff Squyres: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1.0rc6 seems OK. Thanks!
<br>
<p>&nbsp;&nbsp;-- Pavan
<br>
<p>On 05/12/2010 11:52 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Pavan --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just posted rc6 with the fixes for this.  Can you confirm that it works for you?  It works for Open MPI, but we configure differently than you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps this can be the last rc... (gasp!)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (sorry for the delays folks; I was at the MPI Forum last week and that heavily distracted me...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 10, 2010, at 9:59 PM, Pavan Balaji wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Darn. The patch is incorrect. Sorry, too sleepy. It should be checking
</span><br>
<span class="quotelev2">&gt;&gt; for $ac_prog_cc_c99 instead. But you get the idea.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   -- Pavan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 05/10/2010 08:56 PM, Pavan Balaji wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I understand that hwloc requires C99 support. However, for compilers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that don't support C99, would you be willing to gracefully abort during
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure instead of failing at make time?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/6634">https://trac.mcs.anl.gov/projects/mpich2/changeset/6634</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I agree that most compilers today probably support C99, but whether to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; drop C89-only support is a policy decision we are yet to make in MPICH2,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and will need the above patch to get hwloc integrated cleanly in all our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supported environments.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -- Pavan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Pavan Balaji
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="0993.php">Jeff Squyres: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>Previous message:</strong> <a href="0991.php">Jeff Squyres: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>In reply to:</strong> <a href="0985.php">Jeff Squyres: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0993.php">Jeff Squyres: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>Reply:</strong> <a href="0993.php">Jeff Squyres: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
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
