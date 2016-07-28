<?
$subject_val = "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 20:28:50 2012" -->
<!-- isoreceived="20120202012850" -->
<!-- sent="Wed, 01 Feb 2012 17:28:31 -0800" -->
<!-- isosent="20120202012831" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.4 &amp;quot;gmake check&amp;quot; failure on Solaris-10/SPARC/gccfss [PATCH]" -->
<!-- id="4F29E6BF.5020906_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F29968E.5020900_at_lbl.gov" -->
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
<strong>Date:</strong> 2012-02-01 20:28:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2780.php">Paul H. Hargrove: "Re: [hwloc-devel] Status of &quot;Paul's bugs&quot;"</a>
<li><strong>Previous message:</strong> <a href="2778.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="2763.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2784.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>Reply:</strong> <a href="2784.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>Maybe reply:</strong> <a href="2789.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/1/2012 11:46 AM, Paul H. Hargrove wrote:
<br>
[snip]
<br>
<span class="quotelev1">&gt; So, in short: when building w/ this compiler, hwloc needs to behave as 
</span><br>
<span class="quotelev1">&gt; if the system lacks ffs().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making that happen is non-trivial because there are no preprocessor 
</span><br>
<span class="quotelev1">&gt; symbols defined by gccfss that would allow compile-time #if checks to 
</span><br>
<span class="quotelev1">&gt; distinguish gccfss from &quot;vanilla&quot; gcc.  The only difference is in the 
</span><br>
<span class="quotelev1">&gt; string value of __VERSION__, which one could check at configure time.
</span><br>
<p>Attached is a patch, relative to the svn trunk, which fixes this problem 
<br>
in my testing.
<br>
As I outlined above, the approach is two-fold:
<br>
1) Add configure-time logic to ID the buggy compiler
<br>
2) Restructure include/private/misc.h to include a HWLOC_HAVE_BROKEN_FFS 
<br>
case.
<br>
<p>Two things I'd like to note about the approach:
<br>
<p>+ The configure-time logic is NOT trying to determine the version 
<br>
number, as I don't have a way (yet?) to pinpoint which version(s) work 
<br>
correctly, and the Oracle Forums thread on the subject doesn't say.  So, 
<br>
it is conservatively assuming all &quot;gccfss&quot; versions are broken.
<br>
<p>+ The misc.h changes are intentionally &quot;generic&quot; so one could add other 
<br>
configure time checks to define HWLOC_HAVE_BROKEN_FFS based on problems 
<br>
we've not yet discovered.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900

</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2779/gccfss_ffs.patch">gccfss_ffs.patch</a>
</ul>
<!-- attachment="gccfss_ffs.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2780.php">Paul H. Hargrove: "Re: [hwloc-devel] Status of &quot;Paul's bugs&quot;"</a>
<li><strong>Previous message:</strong> <a href="2778.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="2763.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2784.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>Reply:</strong> <a href="2784.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>Maybe reply:</strong> <a href="2789.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
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
