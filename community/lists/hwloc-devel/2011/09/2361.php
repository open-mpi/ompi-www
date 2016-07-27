<?
$subject_val = "[hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  4 12:26:44 2011" -->
<!-- isoreceived="20110904162644" -->
<!-- sent="Sun, 04 Sep 2011 16:26:38 -0000 (UTC)" -->
<!-- isosent="20110904162638" -->
<!-- name="Igor Gali&#196;&#135;" -->
<!-- email="i.galic_at_[hidden]" -->
<!-- subject="[hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC" -->
<!-- id="1b922123-82cb-4f97-991d-3ad3c2971deb_at_iris" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3cb660cc-09b0-41a6-817a-f5247cbd36ec_at_iris" -->
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
<strong>Subject:</strong> [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC<br>
<strong>From:</strong> Igor Gali&#196;&#135; (<em>i.galic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-04 12:26:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2362.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2360.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc2r3750)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2370.php">Brice Goglin: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2370.php">Brice Goglin: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2371.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Maybe reply:</strong> <a href="2384.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Maybe reply:</strong> <a href="2389.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Maybe reply:</strong> <a href="2395.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Maybe reply:</strong> <a href="2406.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>first off: I would've submitted this Bug report via Trac if I could have
<br>
done it anonymously. I *tried* to register, but the captcha was impossible
<br>
to decipher -- And I can see! I strongly suggest you replace this with
<br>
reCaptcha. It has an option to reload the captcha, and an audio option.
<br>
Also: A complete reset of the form after a wrong attempt at the captcha
<br>
makes for terrible user experience.
<br>
<p>These are things that will prevent you from getting bug reports.
<br>
<p>Now, for the &quot;bug&quot;:
<br>
I tried packaging hwloc for OpenCSW, building it with the default compiler
<br>
which is Solaris Studio 12.2.
<br>
I noticed a lot of errors of the kind:
<br>
<p>&nbsp;&nbsp;cc: Warning: illegal option -fvisibility=hidden
<br>
<p>So I canceled the compile and &quot;fixed&quot; that error with a simple
<br>
<p>&nbsp;&nbsp;perl -pi -e &quot;s_at_-fvisibility=hidden_at_-xldscope=hidden_at_g&quot;
<br>
<p>This worked out fine on amd64 and i386, but failed for sparc during
<br>
a linking phase:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;CC     lstopo-lstopo-xml.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CCLD   lstopo
<br>
&nbsp;&nbsp;Undefined                       first referenced
<br>
&nbsp;&nbsp;&nbsp;symbol                             in file
<br>
&nbsp;&nbsp;hwloc_insert_object_by_cpuset       lstopo-lstopo-draw.o
<br>
&nbsp;&nbsp;ld: fatal: Symbol referencing errors. No output written to .libs/lstopo
<br>
<p>I suspected this to be an issue of library ordering in the linking phase,
<br>
something that GCC handles automatically by trying out different
<br>
permutations. Testing it with GCC confirmed my hypothesis.
<br>
<p>Finally, I configured with --disable-visibility: That compiled and linked
<br>
fine with Solaris CC on all platforms.
<br>
<p>So long,
<br>
i
<br>
<p><pre>
-- 
Igor Gali&#196;&#135;
Tel: +43 (0) 664 886 22 883
Mail: i.galic_at_[hidden]
URL: <a href="http://brainsware.org/">http://brainsware.org/</a>
GPG: 571B 8B8A FC97 266D BDA3  EF6F 43AD 80A4 5779 3257
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2362.php">Brice Goglin: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2360.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc2r3750)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2370.php">Brice Goglin: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2370.php">Brice Goglin: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2371.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Maybe reply:</strong> <a href="2384.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Maybe reply:</strong> <a href="2389.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Maybe reply:</strong> <a href="2395.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Maybe reply:</strong> <a href="2406.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
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
