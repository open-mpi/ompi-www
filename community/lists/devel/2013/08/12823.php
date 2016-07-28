<?
$subject_val = "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 29 19:33:42 2013" -->
<!-- isoreceived="20130829233342" -->
<!-- sent="Fri, 30 Aug 2013 09:33:39 +1000" -->
<!-- isosent="20130829233339" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c" -->
<!-- id="521FDA53.9020008_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F8428FD_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-08-29 19:33:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12824.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12822.php">Ralph Castain: "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>In reply to:</strong> <a href="12821.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12824.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12824.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi Jeff, Ralph,
<br>
<p>On 29/08/13 23:30, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Let me try to understand this test:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - you're simulating a 1GB memory limit via ulimit of virtual
</span><br>
<span class="quotelev1">&gt; memory (&quot;ulimit -v $((1*1024*1024))&quot;), or 1,048,576 bytes.
</span><br>
<p>Yeah, basically doing by hand what Torque/Slurm do by default for jobs
<br>
(unless the user asks for more).
<br>
<p>When this happens for Dalton (compiled with the Intel compilers) it
<br>
just sits there spinning its wheels at start up.
<br>
<p><span class="quotelev1">&gt; - you're trying to alloc 1070*10^6 = 1,070,000,000 bytes in an MPI 
</span><br>
<span class="quotelev1">&gt; app
</span><br>
<p>That was the developer trying to simulate the failure in Dalton.
<br>
<p><span class="quotelev1">&gt; - OMPI is barfing in the ptmalloc allocator
</span><br>
<p>Sounds like it.
<br>
<p><span class="quotelev1">&gt; Meaning: you're trying to allocate 1,000x memory than you're
</span><br>
<span class="quotelev1">&gt; allowing in virtual memory -- so I guess part of this test depends
</span><br>
<span class="quotelev1">&gt; on how much physical RAM you have, because you're limiting virtual
</span><br>
<span class="quotelev1">&gt; memory, right?
</span><br>
<p>No, it only depends on the memory limits for the job in Slurm.
<br>
<p>The reason for the test is that he was trying to see whether or not
<br>
those limits were successfully being propagated to MPI ranks or not in
<br>
Slurm (and it appears not).
<br>
<p>However, in the process he found he could also replicate this
<br>
livelock/deadlock in Dalton.
<br>
<p><span class="quotelev1">&gt; It's quite possible that the ptmalloc included in OMPI doesn't
</span><br>
<span class="quotelev1">&gt; guard well against a failed mmap.  FWIW, I've seen all kinds of
</span><br>
<span class="quotelev1">&gt; random badness (not just with OMPI) when malloc/mmap/etc. start
</span><br>
<span class="quotelev1">&gt; failing due to lack of memory.
</span><br>
<p>OK, so I'll try testing again with a larger limit to see if that will
<br>
ameliorate this issue.  I'm also wondering where this is happening in
<br>
OMPI, I've a sneaking suspicion this is at MPI_INIT().
<br>
<p><span class="quotelev1">&gt; Do you get the same behavior if you disable ptmalloc in OMPI?
</span><br>
<span class="quotelev1">&gt; (your IB large message bandwidth will suffer a bit, though)
</span><br>
<p>Not tried that, but I'll take a look at it if it doesn't seem possible
<br>
to fix it with a change to the default memory limits (that'll be the
<br>
least intrusive).
<br>
<p>Thanks!
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
<p>iEYEARECAAYFAlIf2lMACgkQO2KABBYQAh/JrACfRKATdmD3hbSX0mHWtAt2cBP6
<br>
1wYAn31EjuS37inIaD151n1DxuAH4GAM
<br>
=yaYe
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12824.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Previous message:</strong> <a href="12822.php">Ralph Castain: "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>In reply to:</strong> <a href="12821.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12824.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12824.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
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
