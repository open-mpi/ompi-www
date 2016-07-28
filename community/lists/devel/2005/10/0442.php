<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 11 23:54:49 2005" -->
<!-- isoreceived="20051012045449" -->
<!-- sent="Tue, 11 Oct 2005 21:54:47 -0700" -->
<!-- isosent="20051012045447" -->
<!-- name="Brooks Davis" -->
<!-- email="brooks_at_[hidden]" -->
<!-- subject="Re:  porting guide?" -->
<!-- id="20051012045447.GA7862_at_odin.ac.hmc.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b395a476fd20be1a6304b0eec646a24f_at_open-mpi.org" -->
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
<strong>From:</strong> Brooks Davis (<em>brooks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-11 23:54:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0443.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0441.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0441.php">Jeff Squyres: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0443.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0443.php">Jeff Squyres: "Re:  porting guide?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Oct 11, 2005 at 11:20:57PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 11, 2005, at 11:01 PM, Brooks Davis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Of course, the 1.0 nightly for tomorrow morning will not have the fix
</span><br>
<span class="quotelev3">&gt; &gt;&gt; just yet.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.  With the following patchs and passing
</span><br>
<span class="quotelev2">&gt; &gt; --disable-pretty-print-stacktrace to configure I was able to get truck
</span><br>
<span class="quotelev2">&gt; &gt; at rev 7709 to build.  I haven't done any testing yet, but that's a 
</span><br>
<span class="quotelev2">&gt; &gt; good
</span><br>
<span class="quotelev2">&gt; &gt; first step.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you elaborate on why you needed that?  If there's a problem with 
</span><br>
<span class="quotelev1">&gt; the stacktrace stuff on BSD, I'd like to make it either disable by 
</span><br>
<span class="quotelev1">&gt; default or fix whatever is required to work properly on BSD.
</span><br>
<p>There were a bunch of undefined symbols that I didn't track down.
<br>
Hopefully there's just a missing header file.  I need to dig into it
<br>
more.  I just disabled it because I was hoping that would be the only
<br>
issue.  It wasn't but, I had stop working before I could try again
<br>
with stack traces enabled.
<br>
<p><span class="quotelev2">&gt; &gt; The f77_get_fortran_handle_max.m4 change is because FreeBSD's eval
</span><br>
<span class="quotelev2">&gt; &gt; appears to use ints internally so they overflow to negative numbers and
</span><br>
<span class="quotelev2">&gt; &gt; cause problems.  Fortunatly, they roll back over once properly escaped.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't quite understand this -- are you saying that $ompi_fint_max 
</span><br>
<span class="quotelev1">&gt; becomes a negative number after all the *2's, and then when we escape 
</span><br>
<span class="quotelev1">&gt; it and subtract one, it becomes positive?  (ditto for ompi_cint_max)
</span><br>
<p>On FreeBSD, eval is using 32-bit signed numbers internally on i386 (it
<br>
looks like it uses longs in general, but I haven't tested on a 64-bit
<br>
machine yet).  This means that when you compute 2^31 you get INT_MAX + 1
<br>
which is negative.  Subtracting one gives INT_MAX so you get the right
<br>
value despite the sign weirdness.  Assuming I'm correct about longs
<br>
being used, we'll also be OK on 64-bit machines even if this code is
<br>
used to compute the maximum value of a 64-bit signed integer.  It won't
<br>
work for unsigned numbers on either system though.
<br>
<p>-- Brooks
<br>
<p><pre>
-- 
Any statement of the form &quot;X is the one, true Y&quot; is FALSE.
PGP fingerprint 655D 519C 26A7 82E7 2529  9BF0 5D8E 8BE9 F238 1AD4

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0442/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0443.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0441.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0441.php">Jeff Squyres: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0443.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0443.php">Jeff Squyres: "Re:  porting guide?"</a>
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
