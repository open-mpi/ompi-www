<?
$subject_val = "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 11:41:16 2011" -->
<!-- isoreceived="20110906154116" -->
<!-- sent="Tue, 06 Sep 2011 15:41:03 -0000 (UTC)" -->
<!-- isosent="20110906154103" -->
<!-- name="Igor Gali&#196;&#135;" -->
<!-- email="i.galic_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC" -->
<!-- id="9ced3137-d2e0-4104-ac96-754a3e5e0b8a_at_iris" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0BB6C9E9-28C3-4561-B43D-17E18E8B1D3E_at_cisco.com" -->
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
<strong>Date:</strong> 2011-09-06 11:41:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2393.php">Pavan Balaji: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2391.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>In reply to:</strong> <a href="2385.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2397.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2397.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- Original Message -----
<br>
<span class="quotelev1">&gt; On Sep 6, 2011, at 8:49 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ah, it looks like we got around this in OMPI by explicitly checking
</span><br>
<span class="quotelev2">&gt; &gt; to see if the compiler vendor is Sun.  Terrible!  Let me see about
</span><br>
<span class="quotelev2">&gt; &gt; back-porting these changes from OMPI...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did some internal cleanup on that configury test and committed it
</span><br>
<span class="quotelev1">&gt; to the trunk.  Could you try it and see if it works for you?  (I
</span><br>
<span class="quotelev1">&gt; don't have a Sun compiler to test with)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/hwloc/changeset/3773">https://svn.open-mpi.org/trac/hwloc/changeset/3773</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you don't want to build from SVN (which requires fairly modern
</span><br>
<span class="quotelev1">&gt; autotools versions), you can just wait for the nightly tarball
</span><br>
<p>We've got those with OpenCSW, but as I'm packaging the software,
<br>
I'd rather stick to &quot;stable&quot; versions.
<br>
<p>I applied the patch (after removing the fix to the copyright, which
<br>
didn't apply cleanly), ran autoreconf -if, and it still generated
<br>
warnings in regard to -fvisibility.
<br>
<p><p>configure:8229: checking if /opt/SUNWspro/bin/cc supports -fvisibility
<br>
configure:8244: /opt/SUNWspro/bin/cc -o conftest -g -m64 -xarch=sse2 -fvisibility=hidden -I/opt/csw/include -m64 -xarch=sse2 -L/opt/csw/lib/64 conftest.c  &gt;&amp;5
<br>
cc: Warning: illegal option -fvisibility=hidden
<br>
configure:8244: $? = 0
<br>
configure:8263: result: yes
<br>
configure:8275: checking whether to enable symbol visibility
<br>
configure:8277: result: yes (via -fvisibility=hidden)
<br>
configure:8298: WARNING: &quot;-fvisibility=hidden&quot; has been added to the hwloc CFLAGS
<br>
<p>I'll see if I can track this down.
<br>
At least now I know that adding -g to the CFLAGS makes the tests
<br>
pass, which is somehow worrying.
<br>
<p>i
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
<li><strong>Next message:</strong> <a href="2393.php">Pavan Balaji: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2391.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>In reply to:</strong> <a href="2385.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2397.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2397.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
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
