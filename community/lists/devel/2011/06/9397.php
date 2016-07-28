<?
$subject_val = "Re: [OMPI devel] Compiling problem in trunk?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 09:03:51 2011" -->
<!-- isoreceived="20110623130351" -->
<!-- sent="Thu, 23 Jun 2011 15:04:07 +0200" -->
<!-- isosent="20110623130407" -->
<!-- name="Xin He" -->
<!-- email="xin.i.he_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compiling problem in trunk?" -->
<!-- id="4E0339C7.3060802_at_ericsson.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44FFF604-6E1E-41A5-B31E-53C03AC340C5_at_cisco.com" -->
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
<strong>From:</strong> Xin He (<em>xin.i.he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-23 09:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9398.php">Ralph Castain: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9396.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>In reply to:</strong> <a href="9396.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9398.php">Ralph Castain: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Reply:</strong> <a href="9398.php">Ralph Castain: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Reply:</strong> <a href="9403.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the tips about configuration. Yet the build still failed. 
<br>
Anyway, I managed to roll back to an earlier version and successfully 
<br>
installed :)
<br>
<p>/Xin
<br>
<p>On 06/23/2011 01:26 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I don't believe we have changed anything in the trunk w.r.t. the Fortran 90 stuff (there's stuff off in a branch waiting to come in, but I don't think it has come in).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since you're primarily working on a new BTL, you might want to speed up your configure/build process by disabling Fortran and other optional stuff.  Try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      ./configure --disable-mpi-f90 --disable-mpi-f77 --disable-mpi-cxx --disable-vt --disable-io-romio ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That should speed things up a bit, and also avoid whatever this Fortran problem is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 23, 2011, at 7:23 AM, Xin He wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; as I compiled the sources from &quot;trunk&quot;. I got these error messages when doing make:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [blablabla...]
</span><br>
<span class="quotelev2">&gt;&gt; make  all-am
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/home/ehhexxn/git/ompi/ompi/include'
</span><br>
<span class="quotelev2">&gt;&gt;   FC     mpif90-ext.lo
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: unrecognized option `-c'
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile: Try `libtool --help' for more information.
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [mpif90-ext.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/home/ehhexxn/git/ompi/ompi/include'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/ehhexxn/git/ompi/ompi/include'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/ehhexxn/git/ompi/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was able to compile an earlier version of trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Xin
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9398.php">Ralph Castain: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9396.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>In reply to:</strong> <a href="9396.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9398.php">Ralph Castain: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Reply:</strong> <a href="9398.php">Ralph Castain: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Reply:</strong> <a href="9403.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
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
