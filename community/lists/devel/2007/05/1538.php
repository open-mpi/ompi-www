<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 11 03:57:54 2007" -->
<!-- isoreceived="20070511075754" -->
<!-- sent="Fri, 11 May 2007 09:59:26 +0200" -->
<!-- isosent="20070511075926" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)" -->
<!-- id="200705110959.31997.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2E505ED5-5BF0-4E32-8326-F8B564003E3B_at_cisco.com" -->
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
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-11 03:59:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1539.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1537.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1527.php">Jeff Squyres: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday 10 May 2007, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 10, 2007, at 8:08 AM, Peter Kjellstrom wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I recently tried ompi on early ConnectX hardware/software.
</span><br>
<span class="quotelev2">&gt; &gt; The good news, it works =)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've seen some really great 1-switch latency using the early access
</span><br>
<span class="quotelev1">&gt; ConnectX hardware.  I have a pair of ConnectX's in my MPI development
</span><br>
<span class="quotelev1">&gt; cluster at Cisco, but am awaiting various software pieces before I
</span><br>
<span class="quotelev1">&gt; can start playing with them.
</span><br>
<p>Yes, I'm impressed too.
<br>
<p><span class="quotelev1">&gt; We're also quite excited to add some of the new features of the
</span><br>
<span class="quotelev1">&gt; ConnectX hardware (Roland Dreier is working on the verbs interface
</span><br>
<span class="quotelev1">&gt; and Mellanox is working on the firmware).
</span><br>
<p>I just switched my testbed from mellanox stack to Rolands mlx4.
<br>
<p><span class="quotelev1">&gt; I don't see Mellanox's 
</span><br>
<span class="quotelev1">&gt; presentation from last week's OpenFabrics Sonoma Workshop on the
</span><br>
<span class="quotelev1">&gt; openfabrics.org web site that describes the features; I'll ping them
</span><br>
<span class="quotelev1">&gt; and ask where it is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, ompi needs a chunk of options set to recognize the
</span><br>
<span class="quotelev2">&gt; &gt; card so I made a small patch (setting it up like old Arbel
</span><br>
<span class="quotelev2">&gt; &gt; style hardware).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good point; I can't believe we forgot to commit that...  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, you copied from the MTU from Sinai, not Arbel -- is that what
</span><br>
<span class="quotelev1">&gt; you meant?
</span><br>
<p>Just me being confused, I did use 2048 (Sinai) but who am I to say what those 
<br>
figures should finally be set to...
<br>
<p>/Peter
<br>
<p><span class="quotelev1">&gt; (FWIW: the internal Mellanox code name for ConnectX is Hermon,
</span><br>
<span class="quotelev1">&gt; another mountain in Israel, just like Sinai, Arbel, ...etc.).
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1538/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1539.php">Steve Wise: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1537.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1527.php">Jeff Squyres: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
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
