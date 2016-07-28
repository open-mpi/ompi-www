<?
$subject_val = "Re: [OMPI devel] v1.8.5 NEWS and README";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 18:28:27 2015" -->
<!-- isoreceived="20150417222827" -->
<!-- sent="Fri, 17 Apr 2015 22:28:25 +0000" -->
<!-- isosent="20150417222825" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8.5 NEWS and README" -->
<!-- id="4586DD0A-0046-4313-AB91-61AB65644BE4_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA167vGTWwp0jxyhB1xzUC7OamXC1dS1rZHeCx1WmNhxn0Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 18:28:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17259.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17257.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>In reply to:</strong> <a href="17250.php">Paul Hargrove: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17259.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Reply:</strong> <a href="17259.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 17, 2015, at 2:19 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   - OS X (10.6, 10.7, 10.8, 10.9), 32 and 64 bit (x86_64), with gcc and
</span><br>
<span class="quotelev1">&gt;     Absoft compilers (*)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since about 10.7 (depending which XCode you installed), cc and c++ have been Clang and Clang++ on Mac OS X.  ...snip
</span><br>
<p>Good point:
<br>
<p>&nbsp;&nbsp;- OS X (10.6, 10.7, 10.8, 10.9), 32 and 64 bit (x86_64), with XCode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;and Absoft compilers (*)
<br>
<p><span class="quotelev1">&gt;   - ARMv4, ARMv5, ARMv6, ARMv7 (when using non-inline assembly; only
</span><br>
<span class="quotelev1">&gt;     ARMv7 is fully supported when -DOMPI_DISABLE_INLINE_ASM is used).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wasn't the inline asm problem fixed?
</span><br>
<span class="quotelev1">&gt; I ran ARMv5, v6 and v7 tests with 1.8.5rc1 and no special flags, and passed &quot;make check&quot; w/o problems.
</span><br>
<p>Will remove it.
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   - Other 64 bit platforms (e.g., Linux on PPC64)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI: I've tested 1.8.5rc1 on Linux on ARMv8 (aka AARCH64) exactly once and it passed (used gcc sync atomics by default).
</span><br>
<span class="quotelev1">&gt; Not to say that this belongs in the list yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   - Oracle Solaris 10 and 11, 32 and 64 bit (SPARC, i386, x86_64),
</span><br>
<span class="quotelev1">&gt;     with Oracle Solaris Studio 12.2 and 12.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe Solaris Studio 12.4 now belongs on that list.
</span><br>
<p>Done.
<br>
<p>Thanks.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17259.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Previous message:</strong> <a href="17257.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>In reply to:</strong> <a href="17250.php">Paul Hargrove: "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17259.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
<li><strong>Reply:</strong> <a href="17259.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8.5 NEWS and README"</a>
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
