<?
$subject_val = "Re: [OMPI devel] Compiling problem in trunk?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 11:49:28 2011" -->
<!-- isoreceived="20110623154928" -->
<!-- sent="Thu, 23 Jun 2011 11:49:22 -0400" -->
<!-- isosent="20110623154922" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compiling problem in trunk?" -->
<!-- id="544BD717-789D-4CE8-81FE-4C5F02D4CB15_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E0339C7.3060802_at_ericsson.com" -->
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
<strong>Date:</strong> 2011-06-23 11:49:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9404.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9402.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9397.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9423.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Reply:</strong> <a href="9423.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Xin --
<br>
<p>Can you provide more details on exactly what part of the build is failing?  None of the rest of us are seeing the problem.
<br>
<p>When you svn up'ed, did you re-run autogen.pl / configure?
<br>
<p><p><p>On Jun 23, 2011, at 9:04 AM, Xin He wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the tips about configuration. Yet the build still failed. Anyway, I managed to roll back to an earlier version and successfully installed :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /Xin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 06/23/2011 01:26 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I don't believe we have changed anything in the trunk w.r.t. the Fortran 90 stuff (there's stuff off in a branch waiting to come in, but I don't think it has come in).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Since you're primarily working on a new BTL, you might want to speed up your configure/build process by disabling Fortran and other optional stuff.  Try:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     ./configure --disable-mpi-f90 --disable-mpi-f77 --disable-mpi-cxx --disable-vt --disable-io-romio ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That should speed things up a bit, and also avoid whatever this Fortran problem is.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 23, 2011, at 7:23 AM, Xin He wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as I compiled the sources from &quot;trunk&quot;. I got these error messages when doing make:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [blablabla...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make  all-am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Entering directory `/home/ehhexxn/git/ompi/ompi/include'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  FC     mpif90-ext.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: compile: unrecognized option `-c'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: compile: Try `libtool --help' for more information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: *** [mpif90-ext.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Leaving directory `/home/ehhexxn/git/ompi/ompi/include'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/ehhexxn/git/ompi/ompi/include'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/home/ehhexxn/git/ompi/ompi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was able to compile an earlier version of trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Xin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="9404.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9402.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9397.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9423.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Reply:</strong> <a href="9423.php">Xin He: "Re: [OMPI devel] Compiling problem in trunk?"</a>
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
