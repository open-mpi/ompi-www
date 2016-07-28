<?
$subject_val = "Re: [OMPI devel] shared lib version on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 10:28:55 2014" -->
<!-- isoreceived="20140110152855" -->
<!-- sent="Fri, 10 Jan 2014 16:28:50 +0100" -->
<!-- isosent="20140110152850" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] shared lib version on trunk" -->
<!-- id="52D011B2.7050907_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49620987-0BE9-4935-A0FA-1EE22888786B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] shared lib version on trunk<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 10:28:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13700.php">Ralph Castain: "[OMPI devel] 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="13698.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>In reply to:</strong> <a href="13692.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shared lib version on trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Il 1/10/2014 3:50 PM, Jeff Squyres (jsquyres) ha scritto:
<br>
<span class="quotelev1">&gt; On Jan 10, 2014, at 9:48 AM, marco atzeri &lt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; building openmpi-1.9a1r30128-1, I notice
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # Version information for libmpi.
</span><br>
<span class="quotelev2">&gt;&gt; current=0
</span><br>
<span class="quotelev2">&gt;&gt; age=0
</span><br>
<span class="quotelev2">&gt;&gt; revision=0
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; while on 1.7.3 is
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # Version information for libmpi.
</span><br>
<span class="quotelev2">&gt;&gt; current=3
</span><br>
<span class="quotelev2">&gt;&gt; age=2
</span><br>
<span class="quotelev2">&gt;&gt; revision=0
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this intentional ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.  We keep it 0/0/0 on the trunk (since the trunk is for developers only, we don't really need to care about ABI issues there), and only update the versions on the release branch more-or-less immediately before individual releases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>nice to know, I was wondering if something else went wrong.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13700.php">Ralph Castain: "[OMPI devel] 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="13698.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] hcoll destruction via MPI attribute"</a>
<li><strong>In reply to:</strong> <a href="13692.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] shared lib version on trunk"</a>
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
