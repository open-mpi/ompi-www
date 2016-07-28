<?
$subject_val = "Re: [OMPI devel] v1.8.5 NEWS and README";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 14:20:00 2015" -->
<!-- isoreceived="20150417182000" -->
<!-- sent="Fri, 17 Apr 2015 11:19:38 -0700" -->
<!-- isosent="20150417181938" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8.5 NEWS and README" -->
<!-- id="CAAvDA167vGTWwp0jxyhB1xzUC7OamXC1dS1rZHeCx1WmNhxn0Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6A2E513F-F491-407E-92B0-1D6752C1815A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.8.5 NEWS and README<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 14:19:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17251.php">Ralph Castain: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17249.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17241.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.8.5 NEWS and README"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17258.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Reply:</strong> <a href="17258.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Apr 17, 2015 at 5:57 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt;   - OS X (10.6, 10.7, 10.8, 10.9), 32 and 64 bit (x86_64), with gcc and
</span><br>
<span class="quotelev1">&gt;     Absoft compilers (*)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Since about 10.7 (depending which XCode you installed), cc and c++ have
<br>
been Clang and Clang++ on Mac OS X.
<br>
The &quot;gcc&quot; is optional, and also since 10.7 has been &quot;llvm-gcc&quot; and thus not
<br>
really the &quot;gcc&quot; we all know (and love?).
<br>
Not sure how you want to spin that, if at all (or perhaps you all use a gcc
<br>
from fink, brew, etc.).
<br>
<p>&nbsp;&nbsp;- ARMv4, ARMv5, ARMv6, ARMv7 (when using non-inline assembly; only
<br>
<span class="quotelev1">&gt;     ARMv7 is fully supported when -DOMPI_DISABLE_INLINE_ASM is used).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Wasn't the inline asm problem fixed?
<br>
I ran ARMv5, v6 and v7 tests with 1.8.5rc1 and no special flags, and passed
<br>
&quot;make check&quot; w/o problems.
<br>
<p><p><span class="quotelev1">&gt;   - Other 64 bit platforms (e.g., Linux on PPC64)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>FYI: I've tested 1.8.5rc1 on Linux on ARMv8 (aka AARCH64) exactly once and
<br>
it passed (used gcc sync atomics by default).
<br>
Not to say that this belongs in the list yet.
<br>
<p><p><p><span class="quotelev1">&gt;   - Oracle Solaris 10 and 11, 32 and 64 bit (SPARC, i386, x86_64),
</span><br>
<span class="quotelev1">&gt;     with Oracle Solaris Studio 12.2 and 12.3
</span><br>
<p><p>I believe Solaris Studio 12.4 now belongs on that list.
<br>
<p><p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17250/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17251.php">Ralph Castain: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17249.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>In reply to:</strong> <a href="17241.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.8.5 NEWS and README"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17258.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Reply:</strong> <a href="17258.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
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
