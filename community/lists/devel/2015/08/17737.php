<?
$subject_val = "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 15:54:18 2015" -->
<!-- isoreceived="20150812195418" -->
<!-- sent="Wed, 12 Aug 2015 12:52:28 -0700" -->
<!-- isosent="20150812195228" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization" -->
<!-- id="CAAvDA17=Q6urMaE7QUdG7K55YpGnDDh3Dq_1QC8GWSjUWH_JLQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="50F09652-9D43-4294-856E-1E78447228BB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-12 15:52:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17738.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Previous message:</strong> <a href="17736.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>In reply to:</strong> <a href="17736.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17738.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Reply:</strong> <a href="17738.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Aug 12, 2015 at 12:40 PM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this case, however, we're unlikely to fix this issue.  The &quot;export
</span><br>
<span class="quotelev1">&gt; CFLAGS&quot; is there for a reason, and this is a low priority to fix.  I.e.,
</span><br>
<span class="quotelev1">&gt; there's no technical *problem* -- it's just that we're now passing -g down
</span><br>
<span class="quotelev1">&gt; to VampirTrace, and the resulting libraries are a little larger.  VT is
</span><br>
<span class="quotelev1">&gt; going away in the Very Near Future, so this issue will solve itself then.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Jeff,
<br>
<p>You seem to be contradicting yourself above.
<br>
<p>You state that
<br>
<p><span class="quotelev1">&gt;      The &quot;export CFLAGS&quot; is there for a reason
</span><br>
<p>and yet the problem Lisandro is reporting began when you *removed* that
<br>
export.
<br>
<p>And you also say
<br>
<p><span class="quotelev1">&gt;    we're now passing -g down to VampirTrace
</span><br>
<p>when the problem is not because of what you *are* passing, but rather what
<br>
you have *ceased* to pass (CFLAGS=&quot;-g -O2&quot; in the report).
<br>
<p>Can you please clarify?
<br>
<p>Also, lets assume that CFLAGS contains something like &quot;-m32&quot;.
<br>
I believe that the current (no-export) case may be broken if Open MPI is
<br>
built 32-bit and VT is built 64-bit (though I've not verified).
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17737/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17738.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Previous message:</strong> <a href="17736.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>In reply to:</strong> <a href="17736.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17738.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Reply:</strong> <a href="17738.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
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
