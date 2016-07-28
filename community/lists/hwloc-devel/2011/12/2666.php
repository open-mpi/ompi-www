<?
$subject_val = "Re: [hwloc-devel] hwloc 0.9.2 autogen issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 27 03:27:09 2011" -->
<!-- isoreceived="20111227082709" -->
<!-- sent="Tue, 27 Dec 2011 02:26:56 -0600" -->
<!-- isosent="20111227082656" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 0.9.2 autogen issue" -->
<!-- id="4EF98150.6040402_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="65B37293-A3C7-4862-8F3A-0D93F84CB89D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc 0.9.2 autogen issue<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-27 03:26:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2667.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r4106)"</a>
<li><strong>Previous message:</strong> <a href="2665.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r4098)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/11/2562.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, it seems to work fine.  Sorry for the delay in responding.
<br>
<p>&nbsp;&nbsp;-- Pavan
<br>
<p>On 11/29/2011 11:14 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Pavan -- does that solution work for you?  (i.e., moving m4/decl.m4 to config/)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 28, 2011, at 5:36 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok.  I'll commit on trunk, v1.3, and just for good measure, v1.2 and v1.2-ompi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 28, 2011, at 5:15 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 28/11/2011 23:07, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think the real question is: why do we have both config/ and m4/ ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There's only a single .m4 file in m4/, but several in config/.  I vote that m4/decl.m4 should move to config/decl.m4, and then this issue goes away.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Specifically: I think the reason we don't specify both directories in Makefile.am is because whatever is specified in ACLOCAL_AMFLAGS must be the same directory that is specified in AC_CONFIG_MACRO_DIR, and it looks like AC_CONFIG_MACRO_DIR can only take 1 directory as an argument.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any objections to removing the decl/ directory?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No idea why this directory exists, likely history only. OK to removing here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2667.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r4106)"</a>
<li><strong>Previous message:</strong> <a href="2665.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r4098)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/11/2562.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
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
