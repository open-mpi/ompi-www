<?
$subject_val = "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 30 02:01:15 2013" -->
<!-- isoreceived="20130830060115" -->
<!-- sent="Fri, 30 Aug 2013 16:01:12 +1000" -->
<!-- isosent="20130830060112" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c" -->
<!-- id="52203528.5070700_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F8459B6_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-08-30 02:01:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12826.php">Bert Wesarg: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>Previous message:</strong> <a href="12824.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>In reply to:</strong> <a href="12824.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12832.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12832.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hiya Jeff,
<br>
<p>On 30/08/13 11:13, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, the stack traces you sent are not during MPI_INIT.
</span><br>
<p>I did say it was a suspicion. ;-)
<br>
<p><span class="quotelev1">&gt; What happens with OMPI's memory manager is that it inserts itself
</span><br>
<span class="quotelev1">&gt; to be *the* memory allocator for the entire process before main()
</span><br>
<span class="quotelev1">&gt; even starts.  We have to do this as part of the horribleness of
</span><br>
<span class="quotelev1">&gt; that is OpenFabrics/verbs and how it just doesn't match the MPI
</span><br>
<span class="quotelev1">&gt; programming model at all.  :-(  (I think I wrote some blog entries
</span><br>
<span class="quotelev1">&gt; about this a while ago...  Ah, here's a few:
</span><br>
<p>Thanks!  I'll take a look next week (just got out of a 5.5 hour
<br>
meeting and have to head home now).
<br>
<p><span class="quotelev1">&gt; Therefore, (in C) if you call malloc() before MPI_Init(), it'll be 
</span><br>
<span class="quotelev1">&gt; calling OMPI's ptmalloc.  The stack traces you sent imply that
</span><br>
<span class="quotelev1">&gt; it's just when your app is calling the fortran allocate -- which is
</span><br>
<span class="quotelev1">&gt; after MPI_Init().
</span><br>
<p>OK, that makes sense.
<br>
<p><span class="quotelev1">&gt; FWIW, you can build OMPI with --without-memory-manager, or you can 
</span><br>
<span class="quotelev1">&gt; setenv OMPI_MCA_memory_linux_disable to 1 (note: this is NOT a 
</span><br>
<span class="quotelev1">&gt; regular MCA parameter -- it *must* be set in the environment
</span><br>
<span class="quotelev1">&gt; before the MPI app starts).  If this env variable is set, OMPI will
</span><br>
<span class="quotelev1">&gt; *not* interpose its own memory manager in the pre-main hook.  That
</span><br>
<span class="quotelev1">&gt; should be a quick/easy way to try with and without the memory
</span><br>
<span class="quotelev1">&gt; manager and see what happens.
</span><br>
<p>Well with OMPI_MCA_memory_linux_disable=1 I don't get the crash at all,
<br>
or the spin with the Intel compiler build.  Nice!
<br>
<p>Thanks for this, I'll take a look further next week..
<br>
<p>Very much obliged,
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
<p>iEYEARECAAYFAlIgNSgACgkQO2KABBYQAh9UhwCfXPKDbParUn3XBOOcwBNjionS
<br>
KxAAnRH1HGFsKWNVGqvmh4caE8cN85jn
<br>
=U4yB
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12826.php">Bert Wesarg: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>Previous message:</strong> <a href="12824.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>In reply to:</strong> <a href="12824.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12832.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/09/12832.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
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
