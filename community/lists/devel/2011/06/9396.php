<?
$subject_val = "Re: [OMPI devel] Compiling problem in trunk?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 07:26:56 2011" -->
<!-- isoreceived="20110623112656" -->
<!-- sent="Thu, 23 Jun 2011 07:26:38 -0400" -->
<!-- isosent="20110623112638" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compiling problem in trunk?" -->
<!-- id="44FFF604-6E1E-41A5-B31E-53C03AC340C5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E032249.2030801_at_ericsson.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Compiling problem in trunk?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-23 07:26:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9397.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9395.php">Xin He: "[OMPI devel] Compiling problem in trunk?"</a>
<li><strong>In reply to:</strong> <a href="9395.php">Xin He: "[OMPI devel] Compiling problem in trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9397.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Reply:</strong> <a href="9397.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't believe we have changed anything in the trunk w.r.t. the Fortran 90 stuff (there's stuff off in a branch waiting to come in, but I don't think it has come in).
<br>
<p>Since you're primarily working on a new BTL, you might want to speed up your configure/build process by disabling Fortran and other optional stuff.  Try:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./configure --disable-mpi-f90 --disable-mpi-f77 --disable-mpi-cxx --disable-vt --disable-io-romio ...
<br>
<p>That should speed things up a bit, and also avoid whatever this Fortran problem is.
<br>
<p><p><p>On Jun 23, 2011, at 7:23 AM, Xin He wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as I compiled the sources from &quot;trunk&quot;. I got these error messages when doing make:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [blablabla...]
</span><br>
<span class="quotelev1">&gt; make  all-am
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/ehhexxn/git/ompi/ompi/include'
</span><br>
<span class="quotelev1">&gt;  FC     mpif90-ext.lo
</span><br>
<span class="quotelev1">&gt; libtool: compile: unrecognized option `-c'
</span><br>
<span class="quotelev1">&gt; libtool: compile: Try `libtool --help' for more information.
</span><br>
<span class="quotelev1">&gt; make[3]: *** [mpif90-ext.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/ehhexxn/git/ompi/ompi/include'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/ehhexxn/git/ompi/ompi/include'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/ehhexxn/git/ompi/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was able to compile an earlier version of trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Xin
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9397.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9395.php">Xin He: "[OMPI devel] Compiling problem in trunk?"</a>
<li><strong>In reply to:</strong> <a href="9395.php">Xin He: "[OMPI devel] Compiling problem in trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9397.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Reply:</strong> <a href="9397.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
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
