<?
$subject_val = "Re: [OMPI devel] powerpc64le support [1-line patch]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 24 18:16:00 2015" -->
<!-- isoreceived="20150424221600" -->
<!-- sent="Fri, 24 Apr 2015 15:15:38 -0700" -->
<!-- isosent="20150424221538" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] powerpc64le support [1-line patch]" -->
<!-- id="CAAvDA16E0UmAA3CJh7dfmMZvF1LhSpt22utNpJwzVysF8tyVdg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20150424220433.GA27932_at_nl.grid.coop" -->
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
<strong>Subject:</strong> Re: [OMPI devel] powerpc64le support [1-line patch]<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-24 18:15:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17366.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
<li><strong>Previous message:</strong> <a href="17364.php">Troy Benjegerdes: "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>In reply to:</strong> <a href="17364.php">Troy Benjegerdes: "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Troy,
<br>
<p>My POWER8 is actually a QEMU emulator (same goes for my AARCH64).
<br>
<p>However, the real thing (with 2sockets * 10cores * 8threads) exists in the
<br>
GCC compile farm as gcc112.
<br>
It is my understanding that with IBMs hypervisor one can run both LE and BE
<br>
partitions simultaneously.  So, probably no reloading of firmware is
<br>
involved.
<br>
<p>-Paul
<br>
<p>On Fri, Apr 24, 2015 at 3:04 PM, Troy Benjegerdes &lt;hozer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Apr 22, 2015 at 02:19:07PM -0700, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I had an opportunity to try the 1.8.5rc2 tarball on a little-endian
</span><br>
<span class="quotelev1">&gt; POWER8
</span><br>
<span class="quotelev2">&gt; &gt; (aka ppc64el or powerpc64le).
</span><br>
<span class="quotelev2">&gt; &gt; The good news is that things &quot;just worked&quot; as they did when I tried ARMv8
</span><br>
<span class="quotelev2">&gt; &gt; (aka aarch64).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a little off-topic, but where do I buy one of these beasts, and
</span><br>
<span class="quotelev1">&gt; can I at least load new firmware to put it back in proper ppc64 mode? ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ttile leaidnop npreww ,c taht siw sihdlromoc  gni\n?ot
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Troy Benjegerdes                 'da hozer'
</span><br>
<span class="quotelev1">&gt; hozer_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 7 elements      earth::water::air::fire::mind::spirit::soul
</span><br>
<span class="quotelev1">&gt; grid.coop
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Never pick a fight with someone who buys ink by the barrel,
</span><br>
<span class="quotelev1">&gt;          nor try buy a hacker who makes money by the megahash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17364.php">http://www.open-mpi.org/community/lists/devel/2015/04/17364.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17365/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17366.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5....going once...going twice..."</a>
<li><strong>Previous message:</strong> <a href="17364.php">Troy Benjegerdes: "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>In reply to:</strong> <a href="17364.php">Troy Benjegerdes: "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
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
