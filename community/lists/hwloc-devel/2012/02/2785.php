<?
$subject_val = "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  2 00:57:13 2012" -->
<!-- isoreceived="20120202055713" -->
<!-- sent="Wed, 01 Feb 2012 21:56:53 -0800" -->
<!-- isosent="20120202055653" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.4 &amp;quot;gmake check&amp;quot; failure on Solaris-10/SPARC/gccfss [PATCH]" -->
<!-- id="4F2A25A5.5080706_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F2A2449.6010206_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-02 00:56:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2786.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2784.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="2784.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2789.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1"> &gt;Would that work?
</span><br>
<p>Nope, I tried to address that question in a comment in the patch.
<br>
The link succeeds and the problem only occurs when the executable is RUN.
<br>
So one would need AC_TRY_RUN; and then one has openned the  the 
<br>
cross-compilation can-of-worms.
<br>
<p>-Paul
<br>
<p>On 2/1/2012 9:51 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; We could also AC_TRY_LINK a program that uses ffsfoo (the one that 
</span><br>
<span class="quotelev1">&gt; actually breaks here).
</span><br>
<span class="quotelev1">&gt; If it fails, we AC_TRY_LINK a program that uses ffsfoo with the 
</span><br>
<span class="quotelev1">&gt; __ffssi2() definition.
</span><br>
<span class="quotelev1">&gt; If it fails, we define NEED_FFS_FIX
</span><br>
<span class="quotelev1">&gt; And we just add the fix under #ifdef NEED_FFS_FIX in private/misc.h.
</span><br>
<span class="quotelev1">&gt; Would that work?
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 02/02/2012 02:28, Paul H. Hargrove a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2/1/2012 11:46 AM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; [snip]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, in short: when building w/ this compiler, hwloc needs to behave 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as if the system lacks ffs().
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making that happen is non-trivial because there are no preprocessor 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; symbols defined by gccfss that would allow compile-time #if checks 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to distinguish gccfss from &quot;vanilla&quot; gcc.  The only difference is in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the string value of __VERSION__, which one could check at configure 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attached is a patch, relative to the svn trunk, which fixes this 
</span><br>
<span class="quotelev2">&gt;&gt; problem in my testing.
</span><br>
<span class="quotelev2">&gt;&gt; As I outlined above, the approach is two-fold:
</span><br>
<span class="quotelev2">&gt;&gt; 1) Add configure-time logic to ID the buggy compiler
</span><br>
<span class="quotelev2">&gt;&gt; 2) Restructure include/private/misc.h to include a 
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_HAVE_BROKEN_FFS case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Two things I'd like to note about the approach:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; + The configure-time logic is NOT trying to determine the version 
</span><br>
<span class="quotelev2">&gt;&gt; number, as I don't have a way (yet?) to pinpoint which version(s) 
</span><br>
<span class="quotelev2">&gt;&gt; work correctly, and the Oracle Forums thread on the subject doesn't 
</span><br>
<span class="quotelev2">&gt;&gt; say.  So, it is conservatively assuming all &quot;gccfss&quot; versions are 
</span><br>
<span class="quotelev2">&gt;&gt; broken.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; + The misc.h changes are intentionally &quot;generic&quot; so one could add 
</span><br>
<span class="quotelev2">&gt;&gt; other configure time checks to define HWLOC_HAVE_BROKEN_FFS based on 
</span><br>
<span class="quotelev2">&gt;&gt; problems we've not yet discovered.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2785/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2786.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2784.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="2784.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2789.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
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
