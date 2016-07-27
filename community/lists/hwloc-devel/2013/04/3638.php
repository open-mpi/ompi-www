<?
$subject_val = "Re: [hwloc-devel] RPATH issues when building in Fedora 18";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 23 16:54:57 2013" -->
<!-- isoreceived="20130423205457" -->
<!-- sent="Tue, 23 Apr 2013 22:54:51 +0200" -->
<!-- isosent="20130423205451" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] RPATH issues when building in Fedora 18" -->
<!-- id="20130423205451.GK6807_at_type.youpi.perso.aquilenet.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5176F25F.8080700_at_inria.fr" -->
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
<strong>Date:</strong> 2013-04-23 16:54:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3639.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3637.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3637.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3639.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 23 Apr 2013 22:44:08 +0200, a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Le 23/04/2013 22:26, Samuel Thibault a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If /usr/lib64 is the default path for 64bits libs on Fedora, shouldn't somebody
</span><br>
<span class="quotelev3">&gt; &gt;&gt; take care of removing the corresponding rpath too?
</span><br>
<span class="quotelev2">&gt; &gt; libtool should be already doing that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It doesn't on my Debian. The libtool script says:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Compile-time system search path for libraries.
</span><br>
<span class="quotelev1">&gt; sys_lib_search_path_spec=&quot;/usr/lib/gcc/x86_64-linux-gnu/4.7 /usr/lib/x86_64-linux-gnu /usr/lib /lib/x86_64-linux-gnu /lib &quot;
</span><br>
<p>Yes, these are the search dirs on Debian. /usr/lib64 and /lib64 are not
<br>
among these.
<br>
<p><span class="quotelev1">&gt; while on CentOS 6.3 it says:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sys_lib_search_path_spec=&quot;/usr/lib/gcc/x86_64-redhat-linux/4.4.6 /usr/lib64 /lib64 &quot;
</span><br>
<p>So libtool should be dropping the /usr/lib64 rpath.
<br>
<p><span class="quotelev1">&gt; Not sure that this is the line that matters here,
</span><br>
<p>IIRC that's it.
<br>
<p><span class="quotelev1">&gt; but it shows that distros didn't patch libtool the same :/
</span><br>
<p>Yes, because they configure they toolchain differently. But IIRC it's
<br>
not by patching, but detecting what is actually there. Or is there still
<br>
some hardcoding there?
<br>
<p><span class="quotelev3">&gt; &gt;&gt; This is likely related (but the reversed case) to the comment about Fedora in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://wiki.debian.org/RpathIssue">http://wiki.debian.org/RpathIssue</a>. One link on that page says that rerunning
</span><br>
<span class="quotelev3">&gt; &gt;&gt; libtoolize before configure may help. Can you try that? (maybe compare the new
</span><br>
<span class="quotelev3">&gt; &gt;&gt; libtool script with the one from the hwloc tarball to check that some lib64
</span><br>
<span class="quotelev3">&gt; &gt;&gt; things appeared?)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       &#226;&#150;&#161; If the application uses a local copy of libtool, add the following
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         lines to the spec after %configure:=&gt; it will make tests FAIL (without
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         this change, it runs just fine - all tests are PASSED)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     FAIL: test-hwloc-annotate.sh
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     FAIL: test-hwloc-assembler.sh
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     PASS: test-hwloc-calc.sh
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     PASS: test-hwloc-distances.sh
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     PASS: test-hwloc-distrib.sh
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     FAIL: test-hwloc-info.sh
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am not sure why some fail while the other succeed. You may need to set
</span><br>
<span class="quotelev3">&gt; &gt;&gt; LD_LIBRARY_PATH to fix this?
</span><br>
<span class="quotelev2">&gt; &gt; The libtool script is supposed to automatically add it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; He followed the Fedora wiki advice about patching the libtool script (to
</span><br>
<span class="quotelev1">&gt; disable rpath and remove LD_RUN_PATH).
</span><br>
<p>Err, yes. But that does not matter: by &quot;libtool script&quot;, I mean the one
<br>
created at link time, which represents the built binary, but is actually
<br>
just a wrapper around the .libs/binary
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3639.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>Previous message:</strong> <a href="3637.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<li><strong>In reply to:</strong> <a href="3637.php">Brice Goglin: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3639.php">Paul Hargrove: "Re: [hwloc-devel] RPATH issues when building in Fedora 18"</a>
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
