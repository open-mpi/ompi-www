<?
$subject_val = "Re: [hwloc-devel] hwloc to be included in RHEL 6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 12:45:08 2010" -->
<!-- isoreceived="20101122174508" -->
<!-- sent="Mon, 22 Nov 2010 18:44:58 +0100" -->
<!-- isosent="20101122174458" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc to be included in RHEL 6.1" -->
<!-- id="201011221844.58602.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20101122165734.GX10316_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc to be included in RHEL 6.1<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 12:44:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1554.php">Jirka Hladky: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>Previous message:</strong> <a href="1552.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>In reply to:</strong> <a href="1552.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1555.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday, November 22, 2010 05:57:34 pm Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Samuel Thibault, le Mon 22 Nov 2010 17:33:15 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -- using &quot;p&quot; is a good way to indicate &quot;physical&quot;.  But IIRC, we didn't
</span><br>
<span class="quotelev3">&gt; &gt; &gt; like &quot;l&quot; (for &quot;logical&quot;) because it looks too much like 1 (one).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I think we're open to having some kind of indication to denote
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;logical&quot; instead of &quot;physical&quot; -- any suggestions?  Perhaps P and L
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (vs. p and l)?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; P/L can be better than p/l, yes. Just &quot;PU #0&quot; is indeed probably not
</span><br>
<span class="quotelev2">&gt; &gt; precise enough, and &quot;PU L#0&quot; will make people wonder why the L, and then
</span><br>
<span class="quotelev2">&gt; &gt; understand why.  I guess we can try to add this to an rc4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thinking again about it: can't we just switch only lstopo to physical
</span><br>
<span class="quotelev1">&gt; numbering by default, and only for the drawn part?  The textual
</span><br>
<span class="quotelev1">&gt; output (lstopo -) displays both anyway.  We wanted to use logical
</span><br>
<span class="quotelev1">&gt; numbering by default to be coherent with other hwloc tools, but the
</span><br>
<span class="quotelev1">&gt; graphical/semigraphical lstopo one is very particular (I hope nobody is
</span><br>
<span class="quotelev1">&gt; crazy enough to parse its output), and in almost all cases people will
</span><br>
<span class="quotelev1">&gt; want physical numbering by default, other cases can be obtained through
</span><br>
<span class="quotelev1">&gt; -l.  I'd even say 1.0.3 should switch too (v0.9 was only using physical
</span><br>
<span class="quotelev1">&gt; numbering in lstopo).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p>Hi Samuel,
<br>
<p>I do support your last idea to switch only lstopo to the physical numbering.
<br>
<p>I would also like to ask you to consider adding the Title to the graphical 
<br>
output so that users can distinguish easily if the graphics was created with 
<br>
--physical or --logical numbering.
<br>
<p>Adding single line to the top of graphics which says:
<br>
&quot;This graphics is using [physical|logical] numbering. See man hwloc for 
<br>
details.&quot;
<br>
<p>would make it clear.
<br>
<p>Thanks
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1554.php">Jirka Hladky: "Re: [hwloc-devel] ***UNCHECKED*** [WARNING: A/V UNSCANNABLE]Re: hwloc-distrib --among"</a>
<li><strong>Previous message:</strong> <a href="1552.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>In reply to:</strong> <a href="1552.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1555.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
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
