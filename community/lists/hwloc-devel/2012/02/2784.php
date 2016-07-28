<?
$subject_val = "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  2 00:51:12 2012" -->
<!-- isoreceived="20120202055112" -->
<!-- sent="Thu, 02 Feb 2012 06:51:05 +0100" -->
<!-- isosent="20120202055105" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.4 &amp;quot;gmake check&amp;quot; failure on Solaris-10/SPARC/gccfss [PATCH]" -->
<!-- id="4F2A2449.6010206_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F29E6BF.5020906_at_lbl.gov" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-02 00:51:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2785.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="2783.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.2rc1r4239)"</a>
<li><strong>In reply to:</strong> <a href="2779.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2785.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>Reply:</strong> <a href="2785.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We could also AC_TRY_LINK a program that uses ffsfoo (the one that
<br>
actually breaks here).
<br>
If it fails, we AC_TRY_LINK a program that uses ffsfoo with the
<br>
__ffssi2() definition.
<br>
If it fails, we define NEED_FFS_FIX
<br>
And we just add the fix under #ifdef NEED_FFS_FIX in private/misc.h.
<br>
Would that work?
<br>
thanks
<br>
Brice
<br>
<p><p><p>Le 02/02/2012 02:28, Paul H. Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/1/2012 11:46 AM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev2">&gt;&gt; So, in short: when building w/ this compiler, hwloc needs to behave
</span><br>
<span class="quotelev2">&gt;&gt; as if the system lacks ffs().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making that happen is non-trivial because there are no preprocessor
</span><br>
<span class="quotelev2">&gt;&gt; symbols defined by gccfss that would allow compile-time #if checks to
</span><br>
<span class="quotelev2">&gt;&gt; distinguish gccfss from &quot;vanilla&quot; gcc.  The only difference is in the
</span><br>
<span class="quotelev2">&gt;&gt; string value of __VERSION__, which one could check at configure time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is a patch, relative to the svn trunk, which fixes this
</span><br>
<span class="quotelev1">&gt; problem in my testing.
</span><br>
<span class="quotelev1">&gt; As I outlined above, the approach is two-fold:
</span><br>
<span class="quotelev1">&gt; 1) Add configure-time logic to ID the buggy compiler
</span><br>
<span class="quotelev1">&gt; 2) Restructure include/private/misc.h to include a
</span><br>
<span class="quotelev1">&gt; HWLOC_HAVE_BROKEN_FFS case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two things I'd like to note about the approach:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + The configure-time logic is NOT trying to determine the version
</span><br>
<span class="quotelev1">&gt; number, as I don't have a way (yet?) to pinpoint which version(s) work
</span><br>
<span class="quotelev1">&gt; correctly, and the Oracle Forums thread on the subject doesn't say. 
</span><br>
<span class="quotelev1">&gt; So, it is conservatively assuming all &quot;gccfss&quot; versions are broken.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + The misc.h changes are intentionally &quot;generic&quot; so one could add
</span><br>
<span class="quotelev1">&gt; other configure time checks to define HWLOC_HAVE_BROKEN_FFS based on
</span><br>
<span class="quotelev1">&gt; problems we've not yet discovered.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2784/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2785.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="2783.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.2rc1r4239)"</a>
<li><strong>In reply to:</strong> <a href="2779.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2785.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>Reply:</strong> <a href="2785.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
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
