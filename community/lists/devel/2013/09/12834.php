<?
$subject_val = "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  2 02:32:41 2013" -->
<!-- isoreceived="20130902063241" -->
<!-- sent="Mon, 02 Sep 2013 16:32:38 +1000" -->
<!-- isosent="20130902063238" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c" -->
<!-- id="52243106.5060702_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="522424D9.30500_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-02 02:32:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12835.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12833.php">Bibrak Qamar: "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>In reply to:</strong> <a href="12832.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12835.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12835.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 02/09/13 15:40, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; It dies when it does:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; set_head(remainder, remainder_size | PREV_INUSE);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where remainder_size=0.
</span><br>
<p>Ignore that, I've shown it to someone who is actually a programmer and
<br>
we've determined that it's remainder that is wrong, not (necessarily)
<br>
remainder_size.
<br>
<p>(gdb) print remainder
<br>
$1 = (struct malloc_chunk *) 0x2008e5700
<br>
(gdb) print *remainder
<br>
Cannot access memory at address 0x2008e5700
<br>
<p>I cannot duplicate this under valgrind or gdb and given that this
<br>
doesn't happen every time I run it and gdb indicates there are at
<br>
least 2 threads running then we're wondering if this is a race condition.
<br>
<p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel        Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;<a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
<br>
<p>iEYEARECAAYFAlIkMQYACgkQO2KABBYQAh9HMQCfRapLNicP5gBeqPecQA4xpM0+
<br>
fuIAoIUcwwSxsc1Y3QZiX8rNjvyKZFMC
<br>
=NQKd
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12835.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12833.php">Bibrak Qamar: "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>In reply to:</strong> <a href="12832.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12835.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12835.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
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
