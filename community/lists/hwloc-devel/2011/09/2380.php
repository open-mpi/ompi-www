<?
$subject_val = "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 08:40:45 2011" -->
<!-- isoreceived="20110906124045" -->
<!-- sent="Tue, 06 Sep 2011 12:40:35 -0000 (UTC)" -->
<!-- isosent="20110906124035" -->
<!-- name="Igor Gali&#196;&#135;" -->
<!-- email="i.galic_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC" -->
<!-- id="b3a8a403-c65d-45b4-883d-a48b3f8b7b82_at_iris" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1073B2CD-7BFE-4388-934C-4D1B2B605761_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC<br>
<strong>From:</strong> Igor Gali&#196;&#135; (<em>i.galic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-06 08:40:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2381.php">Igor Galić: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2379.php">Samuel Thibault: "Re: [hwloc-devel] trunk make check on eddie"</a>
<li><strong>In reply to:</strong> <a href="2378.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2381.php">Igor Galić: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2381.php">Igor Galić: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2382.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- Original Message -----
<br>
<span class="quotelev1">&gt; On Sep 5, 2011, at 7:39 PM, Igor Gali&#196;&#135; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So I think the real issue is why configure might be getting your
</span><br>
<span class="quotelev3">&gt; &gt;&gt; visibility tests wrong...?  Please send your configure
</span><br>
<span class="quotelev3">&gt; &gt;&gt; stdout/stderr
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and config.log - we can have a look.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Will do an report back.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Excellent; many thanks.
</span><br>
<p><span class="quotelev1">&gt;From the config.log:
</span><br>
<p>configure:8175: checking if /opt/SUNWspro/bin/cc supports -fvisibility
<br>
configure:8193: /opt/SUNWspro/bin/cc -o conftest -xO3 -m32 -xarch=v8 -fvisibility=hidden -I/opt/csw/include -m32 -xarch=v8 -L/opt/csw/lib conftest.c  &gt;&amp;5
<br>
cc: Warning: illegal option -fvisibility=hidden
<br>
configure:8193: $? = 0
<br>
configure:8211: result: yes
<br>
configure:8217: checking whether to enable visibility
<br>
configure:8219: result: yes (via -fvisibility=hidden)
<br>
configure:8243: WARNING: &quot; -fvisibility=hidden&quot; has been added to the hwloc CFLAGS
<br>
configure:8250: checking for inline compatibility keyword
<br>
configure:8263: /opt/SUNWspro/bin/cc -c -xO3 -m32 -xarch=v8 -I/opt/csw/include conftest.c &gt;&amp;5
<br>
configure:8263: $? = 0
<br>
configure:8287: result: __inline__
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Another thing: Even with visibility disabled, I'm getting test
</span><br>
<span class="quotelev2">&gt; &gt; failures
</span><br>
<span class="quotelev2">&gt; &gt; on, I believe only i386 (so that should mean sparc and sparcv9 are
</span><br>
<span class="quotelev2">&gt; &gt; passing)
</span><br>
<span class="quotelev2">&gt; &gt; Can't confirm for amd64 yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok.  Send along all the data and we'll have a look to see what's
</span><br>
<span class="quotelev1">&gt; going wrong.
</span><br>
<p>The failing test (i386):
<br>
<p>PASS: hwloc_get_next_obj_covering_cpuset
<br>
Assertion failed: !obj, file hwloc_get_obj_inside_cpuset.c, line 40
<br>
/bin/bash: line 5: 20986 Abort                   (core dumped) ${dir}$tst
<br>
FAIL: hwloc_get_obj_inside_cpuset
<br>
PASS: hwloc_get_shared_cache_covering_obj
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
<li><strong>Next message:</strong> <a href="2381.php">Igor Galić: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2379.php">Samuel Thibault: "Re: [hwloc-devel] trunk make check on eddie"</a>
<li><strong>In reply to:</strong> <a href="2378.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2381.php">Igor Galić: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2381.php">Igor Galić: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2382.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
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
