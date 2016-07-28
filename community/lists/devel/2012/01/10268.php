<?
$subject_val = "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM [SOLVED]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 15:18:51 2012" -->
<!-- isoreceived="20120127201851" -->
<!-- sent="Fri, 27 Jan 2012 12:18:38 -0800" -->
<!-- isosent="20120127201838" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM [SOLVED]" -->
<!-- id="4F23069E.3010806_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="98C4BBB6-1536-4FE4-BF31-4A5F438F7B74_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM [SOLVED]<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 15:18:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10269.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing: Open64 and PathScale"</a>
<li><strong>Previous message:</strong> <a href="10267.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
<li><strong>In reply to:</strong> <a href="10260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10269.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing: Open64 and PathScale"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/27/2012 5:24 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jan 27, 2012, at 12:45 AM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On this cluster, statfs() is returning ENOENT, which is breaking opal_path_nfs().
</span><br>
<span class="quotelev2">&gt;&gt; So, these results are with test/opal/util/opal_path_nfs.c &quot;disabled&quot;.
</span><br>
<span class="quotelev1">&gt; Paul -- can you explain this a little more?  There should be logic in there to effectively handle ENOENT's, meaning that if we get a non-ESTALE error, we try again with the directory name.  This is repeated until we get to &quot;/&quot; -- so there should definitely be at least one case where statfs() is *not* returning ENOENT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that not happening?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I looked a bit deeper and found that the bug is in OMPI, but a simple 
<br>
one to fix.
<br>
I added 2 lines to opal/util/path.c:
<br>
<p>--- openmpi-1.4.5rc2-orig/opal/util/path.c     2011-02-04 
<br>
07:38:16.000000000 -0600
<br>
+++ openmpi-1.4.5rc2/opal/util/path.c     2012-01-27 12:46:30.000000000 
<br>
-0600
<br>
@@ -476,6 +476,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = statvfs (file, &amp;buf);
<br>
&nbsp;&nbsp;#elif defined(linux) || defined (__BSD) || (defined(__APPLE__) &amp;&amp; 
<br>
defined(__MACH__))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = statfs (file, &amp;buf);
<br>
+#else
<br>
+  #error &quot;No statvfs or statfs call&quot;
<br>
&nbsp;&nbsp;#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} while (-1 == rc &amp;&amp; ESTALE == errno &amp;&amp; (0 &lt; --trials));
<br>
<p><p>Can you guess what happens when I &quot;make&quot; now?
<br>
There IS no call to statfs, and the ENOENT I saw must have been &quot;left 
<br>
over&quot; from some earlier libc call.
<br>
<p>The problem is that these compilers have not pre-defined &quot;linux&quot;.
<br>
It does appear that they are defining &quot;__linux&quot; and &quot;__linux__&quot; 
<br>
(double-underscores).
<br>
So, a little change of the preprocessor logic should fix this problem:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$ sed -pi -e 's/defined\(linux\)/defined\(__linux__\)/;' -- 
<br>
opal/util/path.c
<br>
[more compact than the corresponding diffs]
<br>
<p>With that change (and without &quot;disabling&quot; opal_path_nfs.c) all 4 
<br>
compilers are PASSing &quot;make all install check&quot;.
<br>
<p>Source inspection suggests that the 1.5 branch has the same issue.
<br>
I've not inspected the HEAD, but somebody should.
<br>
<p><p>FYI:
<br>
I've done a bit of grepping for linux,__linux,__linux__.
<br>
My search shows only 2 files checking for definition of &quot;linux&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal/util/path.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal/mca/memory/ptmalloc2/malloc.c
<br>
And exactly one looking for &quot;__linux&quot;:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;test/event/event-test.c
<br>
Checks for &quot;__linux__&quot; appear in the following files:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi/mca/io/romio/romio/adio/ad_lustre/ad_lustre.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi/mca/btl/openib/btl_openib_component.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal/util/if.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal/mca/memory/ptmalloc2/arena.c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;test/util/opal_path_nfs.c (IRONY!)
<br>
I suggest standardization to &quot;__linux__&quot; in the 3 files that currently 
<br>
use &quot;linux&quot; or &quot;__linux&quot;.
<br>
<p><p>-Paul
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
<li><strong>Next message:</strong> <a href="10269.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing: Open64 and PathScale"</a>
<li><strong>Previous message:</strong> <a href="10267.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
<li><strong>In reply to:</strong> <a href="10260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10269.php">Paul H. Hargrove: "[OMPI devel] 1.4.5rc2 testing: Open64 and PathScale"</a>
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
