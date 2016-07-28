<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 12 07:58:34 2005" -->
<!-- isoreceived="20051012125834" -->
<!-- sent="Wed, 12 Oct 2005 08:58:30 -0400" -->
<!-- isosent="20051012125830" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  porting guide?" -->
<!-- id="831e8945dbd3b94dee262e81dfdc6105_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051012045447.GA7862_at_odin.ac.hmc.edu" -->
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
<strong>Date:</strong> 2005-10-12 07:58:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0444.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0442.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0442.php">Brooks Davis: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0444.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0444.php">Brooks Davis: "Re:  porting guide?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 12, 2005, at 12:54 AM, Brooks Davis wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Can you elaborate on why you needed that?  If there's a problem with
</span><br>
<span class="quotelev2">&gt;&gt; the stacktrace stuff on BSD, I'd like to make it either disable by
</span><br>
<span class="quotelev2">&gt;&gt; default or fix whatever is required to work properly on BSD.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There were a bunch of undefined symbols that I didn't track down.
</span><br>
<span class="quotelev1">&gt; Hopefully there's just a missing header file.  I need to dig into it
</span><br>
<span class="quotelev1">&gt; more.  I just disabled it because I was hoping that would be the only
</span><br>
<span class="quotelev1">&gt; issue.  It wasn't but, I had stop working before I could try again
</span><br>
<span class="quotelev1">&gt; with stack traces enabled.
</span><br>
<p>Ok.  Right now, that section is only protected with #ifdef __GLIBC__, 
<br>
so let us know what you find.  The sooner, the better.  :-)
<br>
<p><span class="quotelev1">&gt; On FreeBSD, eval is using 32-bit signed numbers internally on i386 (it
</span><br>
<span class="quotelev1">&gt; looks like it uses longs in general, but I haven't tested on a 64-bit
</span><br>
<span class="quotelev1">&gt; machine yet).  This means that when you compute 2^31 you get INT_MAX + 
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; which is negative.  Subtracting one gives INT_MAX so you get the right
</span><br>
<span class="quotelev1">&gt; value despite the sign weirdness.  Assuming I'm correct about longs
</span><br>
<span class="quotelev1">&gt; being used, we'll also be OK on 64-bit machines even if this code is
</span><br>
<span class="quotelev1">&gt; used to compute the maximum value of a 64-bit signed integer.  It won't
</span><br>
<span class="quotelev1">&gt; work for unsigned numbers on either system though.
</span><br>
<p>Gotcha.  This makes me nervous, though (negative to positive magic); it 
<br>
seems like it might not work on all platforms.
<br>
<p>Another developer suggested just using a hex representation and avoid 
<br>
this -- that seems to be simpler and much more portable (i.e., it 
<br>
becomes string manipulation at this point, and doesn't depend on how 
<br>
expr or the shell is implemented).
<br>
<p>Thanks -- and keep the bug reports coming!
<br>
<p>Aside: rc3 is coming shortly.  We have some pending fixes that we want 
<br>
to get in before cutting it, but there will likely also be an rc4 after 
<br>
that because everything probably won't make the rc3 cutoff.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0444.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0442.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0442.php">Brooks Davis: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0444.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0444.php">Brooks Davis: "Re:  porting guide?"</a>
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
