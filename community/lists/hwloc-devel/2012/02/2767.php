<?
$subject_val = "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 16:22:19 2012" -->
<!-- isoreceived="20120201212219" -->
<!-- sent="Wed, 01 Feb 2012 13:21:59 -0800" -->
<!-- isosent="20120201212159" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10" -->
<!-- id="4F29ACF7.30708_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F29007E.5010707_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 16:21:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2768.php">Paul H. Hargrove: "[hwloc-devel] Status of &quot;Paul's bugs&quot;"</a>
<li><strong>Previous message:</strong> <a href="2766.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<li><strong>In reply to:</strong> <a href="2751.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/1/2012 1:06 AM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 01/02/2012 03:52, Paul H. Hargrove a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...c343//hwloc-1.3.1/doc/doxygen-doc/man/man3/HWLOC_OBJ_PU.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export/home
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /phargrov/O
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343/INST/share/man/man3'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343//hwloc-1.3.1/./config/install-sh:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /export/home/phargrov/O does not exist.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think it would be safe to venture a guess from the truncated name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the &quot;does not exist&quot;, that this command has exceeded the maximum
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command line length.  The subsequent commands to install manpages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suffer the same sort of problem.
</span><br>
<span class="quotelev1">&gt; As explained in the automake doc, I am going to split the man3_MANS line
</span><br>
<span class="quotelev1">&gt; into pieces to split these command lines. Please try again with a new
</span><br>
<span class="quotelev1">&gt; trunk tarball (either the next nightly build, or I can send one in
</span><br>
<span class="quotelev1">&gt; private earlier).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This appears to be fixed in the &quot;1.5a1r4236M&quot; tarball which Jeff 
<br>
provided off-list.
<br>
-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2768.php">Paul H. Hargrove: "[hwloc-devel] Status of &quot;Paul's bugs&quot;"</a>
<li><strong>Previous message:</strong> <a href="2766.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<li><strong>In reply to:</strong> <a href="2751.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
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
