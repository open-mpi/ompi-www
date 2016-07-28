<?
$subject_val = "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 01:33:23 2013" -->
<!-- isoreceived="20130104063323" -->
<!-- sent="Fri, 04 Jan 2013 07:33:12 +0100" -->
<!-- isosent="20130104063312" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] &amp;quot;-lnuma&amp;quot; missing from pkg-config information?" -->
<!-- id="50E677A8.1020605_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CADKQjjcNbrbYTQFj3N11fb3nOJ9ytSDQs7x=9je5b=iXV0hiWg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-01-04 01:33:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0792.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Previous message:</strong> <a href="0790.php">Erik Schnetter: "[hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>In reply to:</strong> <a href="0790.php">Erik Schnetter: "[hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0792.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Reply:</strong> <a href="0792.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Erik
<br>
I am not a pkgconfig expert but my feeling is that this has buggy for a
<br>
long time. hwloc.pc.in should likely use HWLOC_LIBS instead of LIBS. On
<br>
my machine, it makes Libs.private change from -dl to -lm -lnuma here
<br>
(with -lpci -lxml2 depending on the config). We also need to check
<br>
whether -ldl should be kept because of plugin support too.
<br>
Can you change LIBS instead HWLOC_LIBS in hwloc.pc.in, rerun configure,
<br>
and try again?
<br>
Brice
<br>
<p><p><p>Le 04/01/2013 04:50, Erik Schnetter a &#233;crit :
<br>
<span class="quotelev1">&gt; I just installed hwloc 1.6 on a Linux Red Hat system. libnuma is
</span><br>
<span class="quotelev1">&gt; required for linking -- I receive linker errors if I omit -lnuma, and
</span><br>
<span class="quotelev1">&gt; I see that -lnuma is listed in libhwloc.la &lt;<a href="http://libhwloc.la">http://libhwloc.la</a>&gt; under
</span><br>
<span class="quotelev1">&gt; &quot;dependency_libs&quot;. However, pkgconfig/hwloc.pc does not mention
</span><br>
<span class="quotelev1">&gt; libnuma. It does mention libpci, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this sound like an error when hwloc.pc is generated, or am I
</span><br>
<span class="quotelev1">&gt; misunderstanding how pkg-config works? If you give me a pointer, I'd
</span><br>
<span class="quotelev1">&gt; be happy to try an provide a patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -erik
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0791/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0792.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Previous message:</strong> <a href="0790.php">Erik Schnetter: "[hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>In reply to:</strong> <a href="0790.php">Erik Schnetter: "[hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0792.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Reply:</strong> <a href="0792.php">Erik Schnetter: "Re: [hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
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
