<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 12 13:07:53 2005" -->
<!-- isoreceived="20051012180753" -->
<!-- sent="Wed, 12 Oct 2005 11:07:51 -0700" -->
<!-- isosent="20051012180751" -->
<!-- name="Brooks Davis" -->
<!-- email="brooks_at_[hidden]" -->
<!-- subject="Re:  porting guide?" -->
<!-- id="20051012180751.GA2573_at_odin.ac.hmc.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="831e8945dbd3b94dee262e81dfdc6105_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-10-12 13:07:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0445.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0443.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0443.php">Jeff Squyres: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0445.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0445.php">Brooks Davis: "Re:  porting guide?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 12, 2005 at 08:58:30AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 12, 2005, at 12:54 AM, Brooks Davis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you elaborate on why you needed that?  If there's a problem with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the stacktrace stuff on BSD, I'd like to make it either disable by
</span><br>
<span class="quotelev3">&gt; &gt;&gt; default or fix whatever is required to work properly on BSD.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There were a bunch of undefined symbols that I didn't track down.
</span><br>
<span class="quotelev2">&gt; &gt; Hopefully there's just a missing header file.  I need to dig into it
</span><br>
<span class="quotelev2">&gt; &gt; more.  I just disabled it because I was hoping that would be the only
</span><br>
<span class="quotelev2">&gt; &gt; issue.  It wasn't but, I had stop working before I could try again
</span><br>
<span class="quotelev2">&gt; &gt; with stack traces enabled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok.  Right now, that section is only protected with #ifdef __GLIBC__, 
</span><br>
<span class="quotelev1">&gt; so let us know what you find.  The sooner, the better.  :-)
</span><br>
<p>After some investigation I've discovered there are two parts to this.
<br>
<p>First, the failure to compile is due to FreeBSD not defining a large
<br>
portion of the si_code values in the decoding table.  Overall the state
<br>
of documentation of the FreeBSD si_code values is rather crappy so I've
<br>
added #ifdef's around the ones that fail, but not attempted to add more
<br>
values except SI_UNDEFINED.  I've attached this bit (with this the
<br>
system compiles with ./configure).
<br>
<p>Second, is actually supporting backtraces.  It turns out there's a
<br>
library to provide the glibc backtrace* API on BSD systems.  I don't
<br>
know which ones it works on or how good it is, but it's probably worth a
<br>
short.  The big change will be switching from __GLIBC__ to probing for
<br>
libexecinfo, and the necessicary symbols.  I'm taking a look at this
<br>
now.
<br>
<p><span class="quotelev2">&gt; &gt; On FreeBSD, eval is using 32-bit signed numbers internally on i386 (it
</span><br>
<span class="quotelev2">&gt; &gt; looks like it uses longs in general, but I haven't tested on a 64-bit
</span><br>
<span class="quotelev2">&gt; &gt; machine yet).  This means that when you compute 2^31 you get INT_MAX + 
</span><br>
<span class="quotelev2">&gt; &gt; 1
</span><br>
<span class="quotelev2">&gt; &gt; which is negative.  Subtracting one gives INT_MAX so you get the right
</span><br>
<span class="quotelev2">&gt; &gt; value despite the sign weirdness.  Assuming I'm correct about longs
</span><br>
<span class="quotelev2">&gt; &gt; being used, we'll also be OK on 64-bit machines even if this code is
</span><br>
<span class="quotelev2">&gt; &gt; used to compute the maximum value of a 64-bit signed integer.  It won't
</span><br>
<span class="quotelev2">&gt; &gt; work for unsigned numbers on either system though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gotcha.  This makes me nervous, though (negative to positive magic); it 
</span><br>
<span class="quotelev1">&gt; seems like it might not work on all platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another developer suggested just using a hex representation and avoid 
</span><br>
<span class="quotelev1">&gt; this -- that seems to be simpler and much more portable (i.e., it 
</span><br>
<span class="quotelev1">&gt; becomes string manipulation at this point, and doesn't depend on how 
</span><br>
<span class="quotelev1">&gt; expr or the shell is implemented).
</span><br>
<p>I'm pretty sure this will work OK, but I agree that string manipulation
<br>
gives a better feel.
<br>
<p><span class="quotelev1">&gt; Thanks -- and keep the bug reports coming!
</span><br>
<p>You're welcome.  I hope to see FreeBSD on at least the unofficaly
<br>
supported list by SC.
<br>
<p><span class="quotelev1">&gt; Aside: rc3 is coming shortly.  We have some pending fixes that we want 
</span><br>
<span class="quotelev1">&gt; to get in before cutting it, but there will likely also be an rc4 after 
</span><br>
<span class="quotelev1">&gt; that because everything probably won't make the rc3 cutoff.
</span><br>
<p>Sounds good.  Hopefully rc3 or rc4 will build out of the box.
<br>
<p>-- Brooks
<br>
<p><p>Index: stacktrace.c
<br>
===================================================================
<br>
--- stacktrace.c	(revision 7718)
<br>
+++ stacktrace.c	(working copy)
<br>
@@ -87,15 +87,21 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case SIGILL:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (info-&gt;si_code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
+#ifdef ILL_ILLOPC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case ILL_ILLOPC: str = &quot;ILL_ILLOPC&quot;; break;
<br>
+#endif
<br>
&nbsp;#ifdef ILL_ILLOPN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case ILL_ILLOPN: str = &quot;ILL_ILLOPN&quot;; break;
<br>
&nbsp;#endif
<br>
&nbsp;#ifdef ILL_ILLADR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case ILL_ILLADR: str = &quot;ILL_ILLADR&quot;; break;
<br>
&nbsp;#endif
<br>
+#ifdef ILL_ILLTRP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case ILL_ILLTRP: str = &quot;ILL_ILLTRP&quot;; break;
<br>
+#endif
<br>
+#ifdef ILL_PRVOPC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case ILL_PRVOPC: str = &quot;ILL_PRVOPC&quot;; break;
<br>
+#endif
<br>
&nbsp;#ifdef ILL_PRVREG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case ILL_PRVREG: str = &quot;ILL_PRVREG&quot;; break;
<br>
&nbsp;#endif
<br>
@@ -129,14 +135,20 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case SIGSEGV:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (info-&gt;si_code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
+#ifdef SEGV_MAPERR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case SEGV_MAPERR: str = &quot;SEGV_MAPERR&quot;; break;
<br>
+#endif
<br>
+#ifdef SEGV_ACCERR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case SEGV_ACCERR: str = &quot;SEGV_ACCERR&quot;; break;
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case SIGBUS:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (info-&gt;si_code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
+#ifdef BUS_ADRALN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case BUS_ADRALN: str = &quot;BUS_ADRALN&quot;; break;
<br>
+#endif
<br>
&nbsp;#ifdef BUSADRERR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case BUS_ADRERR: str = &quot;BUS_ADRERR&quot;; break;
<br>
&nbsp;#endif
<br>
@@ -159,12 +171,24 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case SIGCHLD:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;switch (info-&gt;si_code)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
+#ifdef CLD_EXITED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case CLD_EXITED: str = &quot;CLD_EXITED&quot;; break;
<br>
+#endif
<br>
+#ifdef CLD_KILLED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case CLD_KILLED: str = &quot;CLD_KILLED&quot;; break;
<br>
+#endif
<br>
+#ifdef CLD_DUMPED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case CLD_DUMPED: str = &quot;CLD_DUMPED&quot;; break;
<br>
+#endif
<br>
+#ifdef CLD_WTRAPPED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case CLD_TRAPPED: str = &quot;CLD_TRAPPED&quot;; break;
<br>
+#endif
<br>
+#ifdef CLD_STOPPED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case CLD_STOPPED: str = &quot;CLD_STOPPED&quot;; break;
<br>
+#endif
<br>
+#ifdef CLD_CONTINUED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case CLD_CONTINUED: str = &quot;CLD_CONTINUED&quot;; break;
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;#ifdef SIGPOLL
<br>
@@ -197,6 +221,9 @@
<br>
&nbsp;#ifdef SI_KERNEL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case SI_KERNEL: str = &quot;SI_KERNEL&quot;; break;
<br>
&nbsp;#endif
<br>
+#ifdef SI_UNDEFINED
<br>
+            case SI_UNDEFINED: str = &quot;SI_UNDEFINED&quot;; break;
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
<p><pre>
-- 
Any statement of the form &quot;X is the one, true Y&quot; is FALSE.
PGP fingerprint 655D 519C 26A7 82E7 2529  9BF0 5D8E 8BE9 F238 1AD4

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0444/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0445.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0443.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0443.php">Jeff Squyres: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0445.php">Brooks Davis: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0445.php">Brooks Davis: "Re:  porting guide?"</a>
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
