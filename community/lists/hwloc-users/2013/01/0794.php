<?
$subject_val = "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 17:30:18 2013" -->
<!-- isoreceived="20130104223018" -->
<!-- sent="Fri, 04 Jan 2013 23:30:11 +0100" -->
<!-- isosent="20130104223011" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] &amp;quot;-lnuma&amp;quot; missing from pkg-config information?" -->
<!-- id="50E757F3.8080201_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CADKQjjfj+u4X14vOg37vKDYE5Tquek4dVjqsWgn+nP6CXwdE9A_at_mail.gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-04 17:30:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0795.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Previous message:</strong> <a href="0793.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>In reply to:</strong> <a href="0793.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0795.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Reply:</strong> <a href="0795.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What's your compile line and how do you use package config?
<br>
Are you building with --static without passing --static to pkg-config?
<br>
@HWLOC_LIBS@ should only be needed for static linking so putting it in
<br>
Libs.private should be fine (it's returned by &quot;pkg-config --libs
<br>
--static hwloc&quot;).
<br>
<p>Brice
<br>
<p><p><p>Le 04/01/2013 23:25, Erik Schnetter a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, this did not actually work. I was confused. It seems that
</span><br>
<span class="quotelev1">&gt; Libs.private is ignored.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Instead, I am now applying the following patch:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- hwloc-1.6.orig/hwloc.pc.in &lt;<a href="http://hwloc.pc.in">http://hwloc.pc.in</a>&gt;2012-11-12
</span><br>
<span class="quotelev1">&gt; 06:33:14.000000000 -0500
</span><br>
<span class="quotelev1">&gt; +++ hwloc-1.6/hwloc.pc.in &lt;<a href="http://hwloc.pc.in">http://hwloc.pc.in</a>&gt;2013-01-04
</span><br>
<span class="quotelev1">&gt; 10:09:54.000000000 -0500
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
<span class="quotelev1">&gt; This seems to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 4, 2013 at 10:47 AM, Erik Schnetter &lt;schnetter_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:schnetter_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Yes, this did the trick. Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Fri, Jan 4, 2013 at 1:33 AM, Brice Goglin
</span><br>
<span class="quotelev1">&gt;     &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hello Erik
</span><br>
<span class="quotelev1">&gt;         I am not a pkgconfig expert but my feeling is that this has
</span><br>
<span class="quotelev1">&gt;         buggy for a long time. hwloc.pc.in &lt;<a href="http://hwloc.pc.in">http://hwloc.pc.in</a>&gt; should
</span><br>
<span class="quotelev1">&gt;         likely use HWLOC_LIBS instead of LIBS. On my machine, it makes
</span><br>
<span class="quotelev1">&gt;         Libs.private change from -dl to -lm -lnuma here (with -lpci
</span><br>
<span class="quotelev1">&gt;         -lxml2 depending on the config). We also need to check whether
</span><br>
<span class="quotelev1">&gt;         -ldl should be kept because of plugin support too.
</span><br>
<span class="quotelev1">&gt;         Can you change LIBS instead HWLOC_LIBS in hwloc.pc.in
</span><br>
<span class="quotelev1">&gt;         &lt;<a href="http://hwloc.pc.in">http://hwloc.pc.in</a>&gt;, rerun configure, and try again?
</span><br>
<span class="quotelev1">&gt;         Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Le 04/01/2013 04:50, Erik Schnetter a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;         I just installed hwloc 1.6 on a Linux Red Hat system. libnuma
</span><br>
<span class="quotelev2">&gt;&gt;         is required for linking -- I receive linker errors if I omit
</span><br>
<span class="quotelev2">&gt;&gt;         -lnuma, and I see that -lnuma is listed in libhwloc.la
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;<a href="http://libhwloc.la">http://libhwloc.la</a>&gt; under &quot;dependency_libs&quot;. However,
</span><br>
<span class="quotelev2">&gt;&gt;         pkgconfig/hwloc.pc does not mention libnuma. It does mention
</span><br>
<span class="quotelev2">&gt;&gt;         libpci, though.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Does this sound like an error when hwloc.pc is generated, or
</span><br>
<span class="quotelev2">&gt;&gt;         am I misunderstanding how pkg-config works? If you give me a
</span><br>
<span class="quotelev2">&gt;&gt;         pointer, I'd be happy to try an provide a patch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         -erik
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         -- 
</span><br>
<span class="quotelev2">&gt;&gt;         Erik Schnetter &lt;schnetter_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:schnetter_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Erik Schnetter &lt;schnetter_at_[hidden] &lt;mailto:schnetter_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Erik Schnetter &lt;schnetter_at_[hidden] &lt;mailto:schnetter_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0794/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0795.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Previous message:</strong> <a href="0793.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>In reply to:</strong> <a href="0793.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0795.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Reply:</strong> <a href="0795.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
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
