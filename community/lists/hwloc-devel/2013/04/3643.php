<?
$subject_val = "Re: [hwloc-devel] RPATH issues when building in Fedora 18";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 02:05:10 2013" -->
<!-- isoreceived="20130424060510" -->
<!-- sent="Tue, 23 Apr 2013 23:05:00 -0700" -->
<!-- isosent="20130424060500" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] RPATH issues when building in Fedora 18" -->
<!-- id="CAAvDA145oyJ-WU+g-doCQjwo0Ukw4Pj+=dsuMmsbamZWMg2POA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51776BEE.4050801_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] RPATH issues when building in Fedora 18<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 02:05:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3644.php">Samuel Thibault: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3642.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3642.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3644.php">Samuel Thibault: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3644.php">Samuel Thibault: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3645.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr 23, 2013 at 10:21 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Le 24/04/2013 00:35, Paul Hargrove a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I took a look at libtool.m4 and find that
</span><br>
<span class="quotelev2">&gt; &gt; the sys_lib_dlsearch_path_spec value is HARDCODED as part of  big
</span><br>
<span class="quotelev2">&gt; &gt; &quot;case $host_os in&quot;.  That is why the autoreconf resolves the problem -
</span><br>
<span class="quotelev2">&gt; &gt; the distro maintainers have customized libtool.m4 appropriately.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Other than instructing folks to autoreconf, I don't see a &quot;clean&quot; fix
</span><br>
<span class="quotelev2">&gt; &gt; for this issue.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, thanks. So our configure indeed generates libtool script that
</span><br>
<span class="quotelev1">&gt; depends on where the tarball was generated. That's a bit disturbing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
[snip]
<br>
<p><p>It is not quite as you describe because I was talking about Fedora's
<br>
libtool.m4 doing the hardcoding.
<br>
The libtool.m4 logic that is distributed with hwloc *tries* to perform a
<br>
configure probe to determine the dynamic lib search path.
<br>
Unfortunately, that probe isn't smart enough to get the right answer on all
<br>
Linux distros.
<br>
So, the libtool.m4 from Fedora is the one I see hardcoding the correct
<br>
answer.
<br>
Again: libtool in the official tarball of hwloc-1.7 does NOT do something
<br>
as horrible as hardcode the wrong answer from the distro where one built
<br>
the tarball (but it probably would it you built the tarball on Fedora).
<br>
<p><p>It appears somebody has been bugging the libtool developers about this
<br>
since June 2010:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://lists.gnu.org/archive/html/libtool-patches/2010-06/msg00141.html">http://lists.gnu.org/archive/html/libtool-patches/2010-06/msg00141.html</a>
<br>
If you read to the end you'll see hwloc was the package in question then
<br>
too!
<br>
<p>If you follow one of the links in that thread, there is a
<br>
patch against libtool-1.5:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://article.gmane.org/gmane.comp.gnu.libtool.general/8345">http://article.gmane.org/gmane.comp.gnu.libtool.general/8345</a>
<br>
which I've just now updated for libtool-2.4.x (and corrected) to get the
<br>
desired/correct behavior.
<br>
<p>In my testing on Fedora 17, the patch below applied to hwloc-1.7 produces
<br>
an accurate sys_lib_dlsearch_path_spec
<br>
<p>-Paul
<br>
<p>--- config/libtool.m4~ 2013-04-07 16:29:21.000000000 -0700
<br>
+++ config/libtool.m4  2013-04-23 22:43:52.882000000 -0700
<br>
@@ -2669,10 +2669,10 @@
<br>
&nbsp;&nbsp;&nbsp;# before this can be enabled.
<br>
&nbsp;&nbsp;&nbsp;hardcode_into_libs=yes
<br>
<p>-  # Append ld.so.conf contents to the search path
<br>
-  if test -f /etc/ld.so.conf; then
<br>
-    lt_ld_extra=`awk '/^include / { system(sprintf(&quot;cd /etc; cat %s
<br>
2&gt;/dev/null&quot;, \[$]2)); skip = 1; } { if (!skip) print \[$]0; skip = 0; }' &lt;
<br>
/etc/ld.so.conf | $SED -e 's/#.*//;/^[        ]*hwcap[        ]/d;s/[:,
<br>
]/ /g;s/=[^=]*$//;s/=[^= ]* / /g;s/&quot;//g;/^$/d' | tr '\n' ' '`
<br>
-    sys_lib_dlsearch_path_spec=&quot;/lib /usr/lib $lt_ld_extra&quot;
<br>
+  # Extract search path from ldconfig
<br>
+  ldconfig_search_path=`/sbin/ldconfig -N -X -v 2&gt;/dev/null|$SED
<br>
's,^\(/.*\):\( (.*)\)\?$,\1,p;d'|tr '\012' ' '`
<br>
+  if test -n &quot;$ldconfig_search_path&quot;; then
<br>
+    sys_lib_dlsearch_path_spec=$ldconfig_search_path
<br>
&nbsp;&nbsp;&nbsp;fi
<br>
<p>&nbsp;&nbsp;&nbsp;# We used to test for /lib/ld.so.1 and disable shared libraries on
<br>
<p><p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3643/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3644.php">Samuel Thibault: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3642.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3642.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3644.php">Samuel Thibault: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3644.php">Samuel Thibault: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Reply:</strong> <a href="3645.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
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
