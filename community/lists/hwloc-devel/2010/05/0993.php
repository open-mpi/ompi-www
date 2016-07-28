<?
$subject_val = "Re: [hwloc-devel] Graceful abort for non-C99 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 13 20:04:30 2010" -->
<!-- isoreceived="20100514000430" -->
<!-- sent="Thu, 13 May 2010 20:04:26 -0400" -->
<!-- isosent="20100514000426" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Graceful abort for non-C99 compilers" -->
<!-- id="AA67F099-F26D-4CE8-A25D-439EC29B298B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BEC936C.4000608_at_mcs.anl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-13 20:04:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0994.php">Pavan Balaji: "[hwloc-devel] hwloc support on windows"</a>
<li><strong>Previous message:</strong> <a href="0992.php">Pavan Balaji: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>In reply to:</strong> <a href="0992.php">Pavan Balaji: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0982.php">Samuel Thibault: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sweet.  :-)
<br>
<p><p>On May 13, 2010, at 8:03 PM, Pavan Balaji wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.0rc6 seems OK. Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Pavan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 05/12/2010 11:52 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Pavan --
</span><br>
<span class="quotelev2">&gt;&gt; I just posted rc6 with the fixes for this.  Can you confirm that it works for you?  It works for Open MPI, but we configure differently than you.
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps this can be the last rc... (gasp!)
</span><br>
<span class="quotelev2">&gt;&gt; (sorry for the delays folks; I was at the MPI Forum last week and that heavily distracted me...)
</span><br>
<span class="quotelev2">&gt;&gt; On May 10, 2010, at 9:59 PM, Pavan Balaji wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Darn. The patch is incorrect. Sorry, too sleepy. It should be checking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for $ac_prog_cc_c99 instead. But you get the idea.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -- Pavan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 05/10/2010 08:56 PM, Pavan Balaji wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I understand that hwloc requires C99 support. However, for compilers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that don't support C99, would you be willing to gracefully abort during
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure instead of failing at make time?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/6634">https://trac.mcs.anl.gov/projects/mpich2/changeset/6634</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I agree that most compilers today probably support C99, but whether to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; drop C89-only support is a policy decision we are yet to make in MPICH2,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and will need the above patch to get hwloc integrated cleanly in all our
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; supported environments.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  -- Pavan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pavan Balaji
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Pavan Balaji
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0994.php">Pavan Balaji: "[hwloc-devel] hwloc support on windows"</a>
<li><strong>Previous message:</strong> <a href="0992.php">Pavan Balaji: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<li><strong>In reply to:</strong> <a href="0992.php">Pavan Balaji: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0982.php">Samuel Thibault: "Re: [hwloc-devel] Graceful abort for non-C99 compilers"</a>
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
