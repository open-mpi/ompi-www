<?
$subject_val = "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 21:57:58 2013" -->
<!-- isoreceived="20130105025758" -->
<!-- sent="Fri, 4 Jan 2013 21:57:50 -0500" -->
<!-- isosent="20130105025750" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] &amp;quot;-lnuma&amp;quot; missing from pkg-config information?" -->
<!-- id="CADKQjjfwnr-CMHqZ=kp5FGQmC=0UGGEGLrE3mXHQE6WKHPmRHA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50E757F3.8080201_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?<br>
<strong>From:</strong> Erik Schnetter (<em>schnetter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-04 21:57:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0796.php">Samuel Thibault: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Previous message:</strong> <a href="0794.php">Brice Goglin: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>In reply to:</strong> <a href="0794.php">Brice Goglin: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0796.php">Samuel Thibault: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Reply:</strong> <a href="0796.php">Samuel Thibault: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice
<br>
<p>No, in this case I am not building with --static, and I am not passing
<br>
--static to pkg-config either. However, there may be systems where I don't
<br>
know whether the compiler (behind my back) uses --static, e.g. Cray or Blue
<br>
Gene systems. Is it safe to always use --static with pkg-config?
<br>
<p>I determine include paths, library paths, and libraries with the following
<br>
shell code:
<br>
<p>export
<br>
PKG_CONFIG_PATH=${HWLOC_DIR}/lib/pkgconfig:${PCIUTILS_DIR}/lib/pkgconfig:${PKG_CONFIG_PATH}
<br>
<p>HWLOC_INC_DIRS=&quot;$(echo '' $(pkg-config hwloc --cflags) '' | sed -e 's+
<br>
-I/include + +g;s+ -I/usr/include + +g;s+ -I/usr/local/include + +g' | sed
<br>
-e 's/ -I/ /g')&quot;
<br>
HWLOC_LIB_DIRS=&quot;$(echo '' $(pkg-config hwloc --libs) '' | sed -e 's/ -l[^
<br>
]*/ /g' | sed -e 's+ -L/lib + +g;s+ -L/lib64 + +g;s+ -L/usr/lib + +g;s+
<br>
-L/usr/lib64 + +g;s+ -L/usr/local/lib + +g;s+ -L/usr/local/lib64 + +g' |
<br>
sed -e 's/ -L/ /g')&quot;
<br>
HWLOC_LIBS=&quot;$(echo '' $(pkg-config hwloc --libs) '' | sed -e 's/ -[^l][^
<br>
]*/ /g' | sed -e 's/ -l/ /g')&quot;
<br>
<p>The sed magic remove /usr/include and similar system paths if they are
<br>
present, because having these present can lead to build problems. This does
<br>
not affect whether -lnuma is present and not. The magic also removes the
<br>
-I, -L, and -l prefixes that my build system insists on adding again (for
<br>
historic reasons).
<br>
<p>-erik
<br>
<p><p><p>On Fri, Jan 4, 2013 at 5:30 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  What's your compile line and how do you use package config?
</span><br>
<span class="quotelev1">&gt; Are you building with --static without passing --static to pkg-config?
</span><br>
<span class="quotelev1">&gt; @HWLOC_LIBS@ should only be needed for static linking so putting it in
</span><br>
<span class="quotelev1">&gt; Libs.private should be fine (it's returned by &quot;pkg-config --libs --static
</span><br>
<span class="quotelev1">&gt; hwloc&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 04/01/2013 23:25, Erik Schnetter a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  No, this did not actually work. I was confused. It seems that
</span><br>
<span class="quotelev1">&gt; Libs.private is ignored.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Instead, I am now applying the following patch:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --- hwloc-1.6.orig/hwloc.pc.in 2012-11-12 06:33:14.000000000 -0500
</span><br>
<span class="quotelev1">&gt; +++ hwloc-1.6/hwloc.pc.in 2013-01-04 10:09:54.000000000 -0500
</span><br>
<span class="quotelev1">&gt; @@ -9,4 +9,4 @@
</span><br>
<span class="quotelev1">&gt;  Requires.private: @HWLOC_REQUIRES@
</span><br>
<span class="quotelev1">&gt;  Cflags: -I${includedir}
</span><br>
<span class="quotelev1">&gt; -Libs: -L${libdir} -lhwloc
</span><br>
<span class="quotelev1">&gt; +Libs: -L${libdir} -lhwloc @HWLOC_LIBS@
</span><br>
<span class="quotelev1">&gt;  Libs.private: @LIBS@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This seems to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 4, 2013 at 10:47 AM, Erik Schnetter &lt;schnetter_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Yes, this did the trick. Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  -erik
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 4, 2013 at 1:33 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hello Erik
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not a pkgconfig expert but my feeling is that this has buggy for a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; long time. hwloc.pc.in should likely use HWLOC_LIBS instead of LIBS. On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my machine, it makes Libs.private change from -dl to -lm -lnuma here (with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lpci -lxml2 depending on the config). We also need to check whether -ldl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be kept because of plugin support too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you change LIBS instead HWLOC_LIBS in hwloc.pc.in, rerun configure,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and try again?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 04/01/2013 04:50, Erik Schnetter a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I just installed hwloc 1.6 on a Linux Red Hat system. libnuma is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; required for linking -- I receive linker errors if I omit -lnuma, and I see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that -lnuma is listed in libhwloc.la under &quot;dependency_libs&quot;. However,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pkgconfig/hwloc.pc does not mention libnuma. It does mention libpci, though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Does this sound like an error when hwloc.pc is generated, or am I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; misunderstanding how pkg-config works? If you give me a pointer, I'd be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happy to try an provide a patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -erik
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing listhwloc-users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --
</span><br>
<span class="quotelev2">&gt;&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Erik Schnetter &lt;schnetter_at_[hidden]&gt;
<a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0795/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0796.php">Samuel Thibault: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Previous message:</strong> <a href="0794.php">Brice Goglin: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>In reply to:</strong> <a href="0794.php">Brice Goglin: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0796.php">Samuel Thibault: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Reply:</strong> <a href="0796.php">Samuel Thibault: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
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
