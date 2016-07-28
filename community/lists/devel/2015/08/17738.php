<?
$subject_val = "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 16:01:33 2015" -->
<!-- isoreceived="20150812200133" -->
<!-- sent="Wed, 12 Aug 2015 20:01:22 +0000" -->
<!-- isosent="20150812200122" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization" -->
<!-- id="6D140F90-43B8-481B-89ED-E568B7595B6D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA17=Q6urMaE7QUdG7K55YpGnDDh3Dq_1QC8GWSjUWH_JLQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-12 16:01:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17739.php">Ralph Castain: "[OMPI devel] v1.10.0 release"</a>
<li><strong>Previous message:</strong> <a href="17737.php">Paul Hargrove: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>In reply to:</strong> <a href="17737.php">Paul Hargrove: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Er... sorry.
<br>
<p>Whatever the reason (too many CFLAGS or too few CFLAGS), the only problem cited was that the libraries are larger -- not that there is an actual technical issue.  My point is that this is, unfortunately, a low priority -- there's too many other high priority issues that need attention, such that this will likely not get solved unless someone submits a patch/PR.
<br>
<p><p><p><span class="quotelev1">&gt; On Aug 12, 2015, at 3:52 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 12, 2015 at 12:40 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; In this case, however, we're unlikely to fix this issue.  The &quot;export CFLAGS&quot; is there for a reason, and this is a low priority to fix.  I.e., there's no technical *problem* -- it's just that we're now passing -g down to VampirTrace, and the resulting libraries are a little larger.  VT is going away in the Very Near Future, so this issue will solve itself then.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You seem to be contradicting yourself above. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You state that
</span><br>
<span class="quotelev1">&gt;      The &quot;export CFLAGS&quot; is there for a reason
</span><br>
<span class="quotelev1">&gt; and yet the problem Lisandro is reporting began when you *removed* that export.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And you also say
</span><br>
<span class="quotelev1">&gt;    we're now passing -g down to VampirTrace
</span><br>
<span class="quotelev1">&gt; when the problem is not because of what you *are* passing, but rather what you have *ceased* to pass (CFLAGS=&quot;-g -O2&quot; in the report).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you please clarify?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, lets assume that CFLAGS contains something like &quot;-m32&quot;.
</span><br>
<span class="quotelev1">&gt; I believe that the current (no-export) case may be broken if Open MPI is built 32-bit and VT is built 64-bit (though I've not verified).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17737.php">http://www.open-mpi.org/community/lists/devel/2015/08/17737.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17739.php">Ralph Castain: "[OMPI devel] v1.10.0 release"</a>
<li><strong>Previous message:</strong> <a href="17737.php">Paul Hargrove: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>In reply to:</strong> <a href="17737.php">Paul Hargrove: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- nextthread="start" -->
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
