<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 08:22:58 2007" -->
<!-- isoreceived="20070510122258" -->
<!-- sent="Thu, 10 May 2007 08:22:41 -0400" -->
<!-- isosent="20070510122241" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)" -->
<!-- id="2E505ED5-5BF0-4E32-8326-F8B564003E3B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200705101408.46416.cap_at_nsc.liu.se" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-10 08:22:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1528.php">Jeff Squyres: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
<li><strong>Previous message:</strong> <a href="1526.php">Peter Kjellstrom: "[OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>In reply to:</strong> <a href="1526.php">Peter Kjellstrom: "[OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1529.php">Gleb Natapov: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>Reply:</strong> <a href="1529.php">Gleb Natapov: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>Reply:</strong> <a href="1538.php">Peter Kjellstrom: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 10, 2007, at 8:08 AM, Peter Kjellstrom wrote:
<br>
<p><span class="quotelev1">&gt; I recently tried ompi on early ConnectX hardware/software.
</span><br>
<span class="quotelev1">&gt; The good news, it works =)
</span><br>
<p>We've seen some really great 1-switch latency using the early access  
<br>
ConnectX hardware.  I have a pair of ConnectX's in my MPI development  
<br>
cluster at Cisco, but am awaiting various software pieces before I  
<br>
can start playing with them.
<br>
<p>We're also quite excited to add some of the new features of the  
<br>
ConnectX hardware (Roland Dreier is working on the verbs interface  
<br>
and Mellanox is working on the firmware).  I don't see Mellanox's  
<br>
presentation from last week's OpenFabrics Sonoma Workshop on the  
<br>
openfabrics.org web site that describes the features; I'll ping them  
<br>
and ask where it is.
<br>
<p><span class="quotelev1">&gt; However, ompi needs a chunk of options set to recognize the
</span><br>
<span class="quotelev1">&gt; card so I made a small patch (setting it up like old Arbel
</span><br>
<span class="quotelev1">&gt; style hardware).
</span><br>
<p>Good point; I can't believe we forgot to commit that...  Thanks!
<br>
<p>BTW, you copied from the MTU from Sinai, not Arbel -- is that what  
<br>
you meant?
<br>
<p>(FWIW: the internal Mellanox code name for ConnectX is Hermon,  
<br>
another mountain in Israel, just like Sinai, Arbel, ...etc.).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1528.php">Jeff Squyres: "Re: [OMPI devel] [ewg] Re: [ofa-general] Re: OMPI over ofed	udapl -	bugs	opened"</a>
<li><strong>Previous message:</strong> <a href="1526.php">Peter Kjellstrom: "[OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>In reply to:</strong> <a href="1526.php">Peter Kjellstrom: "[OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1529.php">Gleb Natapov: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>Reply:</strong> <a href="1529.php">Gleb Natapov: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
<li><strong>Reply:</strong> <a href="1538.php">Peter Kjellstrom: "Re: [OMPI devel] [Patch] make ompi recognize new ib (connectx/mlx4)"</a>
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
