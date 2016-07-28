<?
$subject_val = "Re: [OMPI users] Specific use case - very very new to MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 13:22:42 2014" -->
<!-- isoreceived="20140124182242" -->
<!-- sent="Fri, 24 Jan 2014 12:22:41 -0600" -->
<!-- isosent="20140124182241" -->
<!-- name="Kenneth Adam Miller" -->
<!-- email="kennethadammiller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Specific use case - very very new to MPI" -->
<!-- id="CAK7rcp8j92LVPE9+DpmV3s+O1qUbxsTPTtyw8pgkbs9kiMsU2w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAK7rcp_GvXgyTTEws69d7M6nT_PN5fFzFb41vbMmJTqw2eiauw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Specific use case - very very new to MPI<br>
<strong>From:</strong> Kenneth Adam Miller (<em>kennethadammiller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 13:22:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23451.php">Gus Correa: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23449.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all	system resources"</a>
<li><strong>In reply to:</strong> <a href="23445.php">Kenneth Adam Miller: "[OMPI users] Specific use case - very very new to MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23476.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Specific use case - very very new to MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, please disregard the &quot;Can this be done safely with..&quot; part,
<br>
because I don't want to have to use a condition variable; I want it all to
<br>
happen by inter process communication through OpenMPI
<br>
<p><p>On Fri, Jan 24, 2014 at 11:28 AM, Kenneth Adam Miller &lt;
<br>
kennethadammiller_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a specific use case that I want to describe, and I'm brand new to
</span><br>
<span class="quotelev1">&gt; MPI. It's rather complex, so I want to be careful that I design it so that
</span><br>
<span class="quotelev1">&gt; there are no race conditions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pool A is a buffer (of type 1) handle manager, that feeds buffer handles
</span><br>
<span class="quotelev1">&gt; into thread set 1, and receives old handles from thread set 2. There is
</span><br>
<span class="quotelev1">&gt; only one thread running pool A.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thread set 1 is a set of N threads that fill up buffers of type 1 with
</span><br>
<span class="quotelev1">&gt; regular data. It pushes full buffers to thread set 2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thread set 2 is a set of M threads that compress buffers of type 1 into
</span><br>
<span class="quotelev1">&gt; data buffers of type 2. Once the buffer of type 1 has be used up, it is
</span><br>
<span class="quotelev1">&gt; cleared and sent back to Pool A. It pulls fresh data buffers of type 2 from
</span><br>
<span class="quotelev1">&gt; Pool B, and sends freshly filled compressed buffers to Pool C.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pool C does something with the buffer, clears it and hands it to Pool B.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can this be done safely using an implementation like what I see here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.justsoftwaresolutions.co.uk/threading/implementing-a-thread-safe-queue-using-condition-variables.html">http://www.justsoftwaresolutions.co.uk/threading/implementing-a-thread-safe-queue-using-condition-variables.html</a>
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note 1: -= denotes a 1-to-N connect and =- a N-to-1 connect
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RR = Request reply relationship
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://imgur.com/6tWZglJ">http://imgur.com/6tWZglJ</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Questions: does MPI work with intel PIN tools? If so, then how can I apply
</span><br>
<span class="quotelev1">&gt; it to this? (I need specific modules and some examples, the OpenMPI manual
</span><br>
<span class="quotelev1">&gt; just appears to be a bunch of references with no textual guides...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23450/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23451.php">Gus Correa: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23449.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all	system resources"</a>
<li><strong>In reply to:</strong> <a href="23445.php">Kenneth Adam Miller: "[OMPI users] Specific use case - very very new to MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23476.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Specific use case - very very new to MPI"</a>
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
