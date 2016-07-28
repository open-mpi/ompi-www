<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 11 22:21:07 2005" -->
<!-- isoreceived="20051012032107" -->
<!-- sent="Tue, 11 Oct 2005 23:20:57 -0400" -->
<!-- isosent="20051012032057" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  porting guide?" -->
<!-- id="b395a476fd20be1a6304b0eec646a24f_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051012030106.GA5387_at_odin.ac.hmc.edu" -->
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
<strong>Date:</strong> 2005-10-11 22:20:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0442.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0440.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0440.php">Brooks Davis: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0442.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0442.php">Brooks Davis: "Re:  porting guide?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 11, 2005, at 11:01 PM, Brooks Davis wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Of course, the 1.0 nightly for tomorrow morning will not have the fix
</span><br>
<span class="quotelev2">&gt;&gt; just yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.  With the following patchs and passing
</span><br>
<span class="quotelev1">&gt; --disable-pretty-print-stacktrace to configure I was able to get truck
</span><br>
<span class="quotelev1">&gt; at rev 7709 to build.  I haven't done any testing yet, but that's a 
</span><br>
<span class="quotelev1">&gt; good
</span><br>
<span class="quotelev1">&gt; first step.
</span><br>
<p>Can you elaborate on why you needed that?  If there's a problem with 
<br>
the stacktrace stuff on BSD, I'd like to make it either disable by 
<br>
default or fix whatever is required to work properly on BSD.
<br>
<p><span class="quotelev1">&gt; The libutil.h check is to get openpty().  The existing code checked for
</span><br>
<span class="quotelev1">&gt; the libary, but not the header.
</span><br>
<p>Thanks!
<br>
<p><span class="quotelev1">&gt; The f77_get_fortran_handle_max.m4 change is because FreeBSD's eval
</span><br>
<span class="quotelev1">&gt; appears to use ints internally so they overflow to negative numbers and
</span><br>
<span class="quotelev1">&gt; cause problems.  Fortunatly, they roll back over once properly escaped.
</span><br>
<p>I don't quite understand this -- are you saying that $ompi_fint_max 
<br>
becomes a negative number after all the *2's, and then when we escape 
<br>
it and subtract one, it becomes positive?  (ditto for ompi_cint_max)
<br>
<p>Thanks for the patch!
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
<li><strong>Next message:</strong> <a href="0442.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0440.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0440.php">Brooks Davis: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0442.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0442.php">Brooks Davis: "Re:  porting guide?"</a>
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
