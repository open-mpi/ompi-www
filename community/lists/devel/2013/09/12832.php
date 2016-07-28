<?
$subject_val = "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  2 01:40:45 2013" -->
<!-- isoreceived="20130902054045" -->
<!-- sent="Mon, 02 Sep 2013 15:40:41 +1000" -->
<!-- isosent="20130902054041" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c" -->
<!-- id="522424D9.30500_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52203528.5070700_at_unimelb.edu.au" -->
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
<strong>Date:</strong> 2013-09-02 01:40:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12833.php">Bibrak Qamar: "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12831.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12825.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12834.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12834.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 30/08/13 16:01, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for this, I'll take a look further next week..
</span><br>
<p>The code where it's SEGV'ing is here:
<br>
<p>&nbsp;&nbsp;/* check that one of the above allocation paths succeeded */
<br>
&nbsp;&nbsp;if ((unsigned long)(size) &gt;= (unsigned long)(nb + MINSIZE)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;remainder_size = size - nb;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;remainder = chunk_at_offset(p, nb);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;av-&gt;top = remainder;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;set_head(p, nb | PREV_INUSE | (av != &amp;main_arena ? NON_MAIN_ARENA : 0));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;set_head(remainder, remainder_size | PREV_INUSE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;check_malloced_chunk(av, p, nb);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return chunk2mem(p);
<br>
&nbsp;&nbsp;}
<br>
<p><p>It dies when it does:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;set_head(remainder, remainder_size | PREV_INUSE);
<br>
<p>where remainder_size=0.
<br>
<p>This implies that size and nb are the same, so I'm wondering
<br>
if the test at the top of that block should not have the equals,
<br>
so instead be this?
<br>
<p>&nbsp;&nbsp;/* check that one of the above allocation paths succeeded */
<br>
&nbsp;&nbsp;if ((unsigned long)(size) &gt; (unsigned long)(nb + MINSIZE)) {
<br>
<p>It would ensure that the set_head() macro would never get called
<br>
with a 0 argument.
<br>
<p>The code would then fall through to the malloc failure part
<br>
(which is what I suspect we want).
<br>
<p>Thoughts?
<br>
<p>All the best,
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
<p>iEYEARECAAYFAlIkJNkACgkQO2KABBYQAh+Y/QCeLwnqEQGK4meKQbETwqHg1RtI
<br>
iikAoIofXBPnpI8qbS+zau9ezX78WizW
<br>
=QCSz
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12833.php">Bibrak Qamar: "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12831.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12825.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12834.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12834.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
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
