<?
$subject_val = "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 12:29:58 2016" -->
<!-- isoreceived="20160202172958" -->
<!-- sent="Tue, 02 Feb 2016 17:29:55 +0000" -->
<!-- isosent="20160202172955" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New libmpi.so dependency on libibverbs.so?" -->
<!-- id="87egcv9g18.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CB8CB8EA-924D-4445-B7E7-134E65AA3D89_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] New libmpi.so dependency on libibverbs.so?<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-02 12:29:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28441.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Previous message:</strong> <a href="28439.php">Number Cruncher: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>In reply to:</strong> <a href="28437.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; This functionality is there to overcome a bug in libibverbs (that
</span><br>
<span class="quotelev1">&gt; prints a dire warning about Cisco usNIC devices not being supported).
</span><br>
<p>It wasn't clear, but I meant there are also other libraries sucked in,
<br>
like hwloc and opensm, and that's not new in 1.10.
<br>
<p>It's a source of confusion I've encountered in debugging, but not a big
<br>
deal.
<br>
<p><span class="quotelev1">&gt; However, I can see how this additional linkage is undesirable.  We can
</span><br>
<span class="quotelev1">&gt; probably flip the default on this component to not build by default --
</span><br>
<span class="quotelev1">&gt; but leave it there as a workaround for users who want to use it (i.e.,
</span><br>
<span class="quotelev1">&gt; all this component does is suppress the warning from libibverbs).
</span><br>
<span class="quotelev1">&gt; Another workaround that Cisco is now shipping is a &quot;dummy&quot; libibverbs
</span><br>
<span class="quotelev1">&gt; plugin for usnic devices that also suppresses this warning (see
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/cisco/libusnic_verbs">https://github.com/cisco/libusnic_verbs</a>, if you care).
</span><br>
<p>I'd guess --as-needed is a good enough workaround for people who don't
<br>
need usNIC, especially if it's messy anyway.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28441.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Previous message:</strong> <a href="28439.php">Number Cruncher: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>In reply to:</strong> <a href="28437.php">Jeff Squyres (jsquyres): "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
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
