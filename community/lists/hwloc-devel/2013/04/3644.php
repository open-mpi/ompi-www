<?
$subject_val = "Re: [hwloc-devel] RPATH issues when building in Fedora 18";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 24 03:13:26 2013" -->
<!-- isoreceived="20130424071326" -->
<!-- sent="Wed, 24 Apr 2013 09:13:05 +0200" -->
<!-- isosent="20130424071305" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] RPATH issues when building in Fedora 18" -->
<!-- id="20130424071305.GA5848_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA145oyJ-WU+g-doCQjwo0Ukw4Pj+=dsuMmsbamZWMg2POA_at_mail.gmail.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-24 03:13:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3645.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3643.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3643.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3645.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul Hargrove, le Wed 24 Apr 2013 08:06:03 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; In my testing on Fedora 17, the patch below applied to hwloc-1.7 produces an
</span><br>
<span class="quotelev1">&gt; accurate&#160;sys_lib_dlsearch_path_spec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- config/libtool.m4~ 2013-04-07 16:29:21.000000000 -0700
</span><br>
<span class="quotelev1">&gt; +++ config/libtool.m4 &#160;2013-04-23 22:43:52.882000000 -0700
</span><br>
<span class="quotelev1">&gt; @@ -2669,10 +2669,10 @@
</span><br>
<span class="quotelev1">&gt; &#160; &#160;# before this can be enabled.
</span><br>
<span class="quotelev1">&gt; &#160; &#160;hardcode_into_libs=yes
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; - &#160;# Append ld.so.conf contents to the search path
</span><br>
<span class="quotelev1">&gt; - &#160;if test -f /etc/ld.so.conf; then
</span><br>
<span class="quotelev1">&gt; - &#160; &#160;lt_ld_extra=`awk '/^include / { system(sprintf(&quot;cd /etc; cat %s 2&gt;/dev/
</span><br>
<span class="quotelev1">&gt; null&quot;, \[$]2)); skip = 1; } { if (!skip) print \[$]0; skip = 0; }' &lt; /etc/
</span><br>
<span class="quotelev1">&gt; ld.so.conf | $SED -e 's/#.*//;/^[ &#160; &#160; &#160; &#160;]*hwcap[ &#160; &#160; &#160; &#160;]/d;s/[:, &#160; ]/ /g;s/=
</span><br>
<span class="quotelev1">&gt; [^=]*$//;s/=[^= ]* / /g;s/&quot;//g;/^$/d' | tr '\n' ' '`
</span><br>
<span class="quotelev1">&gt; - &#160; &#160;sys_lib_dlsearch_path_spec=&quot;/lib /usr/lib $lt_ld_extra&quot;
</span><br>
<span class="quotelev1">&gt; + &#160;# Extract search path from ldconfig
</span><br>
<span class="quotelev1">&gt; + &#160;ldconfig_search_path=`/sbin/ldconfig -N -X -v 2&gt;/dev/null|$SED 's,^\(/.*\):\
</span><br>
<span class="quotelev1">&gt; ( (.*)\)\?$,\1,p;d'|tr '\012' ' '`
</span><br>
<p>It looks better to use ldconfig's output than parsing its configuration
<br>
files indeed (notably at least since configuration files now have
<br>
include statements...)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3645.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3643.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3643.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3645.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
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
