<?
$subject_val = "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 17:25:37 2013" -->
<!-- isoreceived="20130104222537" -->
<!-- sent="Fri, 4 Jan 2013 17:25:33 -0500" -->
<!-- isosent="20130104222533" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] &amp;quot;-lnuma&amp;quot; missing from pkg-config information?" -->
<!-- id="CADKQjjfj+u4X14vOg37vKDYE5Tquek4dVjqsWgn+nP6CXwdE9A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CADKQjjfvQepgtaL3zEn5=g=37Qrdh_Oh5-hcTjdNp7xnDmE+mw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-01-04 17:25:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0794.php">Brice Goglin: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Previous message:</strong> <a href="0792.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>In reply to:</strong> <a href="0792.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0794.php">Brice Goglin: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Reply:</strong> <a href="0794.php">Brice Goglin: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice
<br>
<p>No, this did not actually work. I was confused. It seems that Libs.private
<br>
is ignored.
<br>
<p>Instead, I am now applying the following patch:
<br>
<p>--- hwloc-1.6.orig/hwloc.pc.in 2012-11-12 06:33:14.000000000 -0500
<br>
+++ hwloc-1.6/hwloc.pc.in 2013-01-04 10:09:54.000000000 -0500
<br>
@@ -9,4 +9,4 @@
<br>
&nbsp;Requires.private: @HWLOC_REQUIRES@
<br>
&nbsp;Cflags: -I${includedir}
<br>
-Libs: -L${libdir} -lhwloc
<br>
+Libs: -L${libdir} -lhwloc @HWLOC_LIBS@
<br>
&nbsp;Libs.private: @LIBS@
<br>
<p>This seems to work.
<br>
<p>-erik
<br>
<p><p><p>On Fri, Jan 4, 2013 at 10:47 AM, Erik Schnetter &lt;schnetter_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, this did the trick. Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 4, 2013 at 1:33 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hello Erik
</span><br>
<span class="quotelev2">&gt;&gt; I am not a pkgconfig expert but my feeling is that this has buggy for a
</span><br>
<span class="quotelev2">&gt;&gt; long time. hwloc.pc.in should likely use HWLOC_LIBS instead of LIBS. On
</span><br>
<span class="quotelev2">&gt;&gt; my machine, it makes Libs.private change from -dl to -lm -lnuma here (with
</span><br>
<span class="quotelev2">&gt;&gt; -lpci -lxml2 depending on the config). We also need to check whether -ldl
</span><br>
<span class="quotelev2">&gt;&gt; should be kept because of plugin support too.
</span><br>
<span class="quotelev2">&gt;&gt; Can you change LIBS instead HWLOC_LIBS in hwloc.pc.in, rerun configure,
</span><br>
<span class="quotelev2">&gt;&gt; and try again?
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 04/01/2013 04:50, Erik Schnetter a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I just installed hwloc 1.6 on a Linux Red Hat system. libnuma is
</span><br>
<span class="quotelev2">&gt;&gt; required for linking -- I receive linker errors if I omit -lnuma, and I see
</span><br>
<span class="quotelev2">&gt;&gt; that -lnuma is listed in libhwloc.la under &quot;dependency_libs&quot;. However,
</span><br>
<span class="quotelev2">&gt;&gt; pkgconfig/hwloc.pc does not mention libnuma. It does mention libpci, though.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Does this sound like an error when hwloc.pc is generated, or am I
</span><br>
<span class="quotelev2">&gt;&gt; misunderstanding how pkg-config works? If you give me a pointer, I'd be
</span><br>
<span class="quotelev2">&gt;&gt; happy to try an provide a patch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  -erik
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing listhwloc-users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Erik Schnetter &lt;schnetter_at_[hidden]&gt;
<a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0793/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0794.php">Brice Goglin: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Previous message:</strong> <a href="0792.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>In reply to:</strong> <a href="0792.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0794.php">Brice Goglin: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Reply:</strong> <a href="0794.php">Brice Goglin: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
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
