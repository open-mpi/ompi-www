<?
$subject_val = "Re: [OMPI devel] Compiling problem in trunk?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 27 05:00:58 2011" -->
<!-- isoreceived="20110627090058" -->
<!-- sent="Mon, 27 Jun 2011 11:01:17 +0200" -->
<!-- isosent="20110627090117" -->
<!-- name="Xin He" -->
<!-- email="xin.i.he_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compiling problem in trunk?" -->
<!-- id="4E0846DD.7090104_at_ericsson.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="544BD717-789D-4CE8-81FE-4C5F02D4CB15_at_cisco.com" -->
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
<strong>Date:</strong> 2011-06-27 05:01:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9424.php">Josh Hursey: "Re: [OMPI devel] Resilience 2011"</a>
<li><strong>Previous message:</strong> <a href="9422.php">Ralf Wildenhues: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>In reply to:</strong> <a href="9403.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9427.php">Josh Hursey: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Reply:</strong> <a href="9427.php">Josh Hursey: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I even tried re-downloading the whole project and did all things. First 
<br>
autogen, then ./configure --disable-mpi-f90 --disable-mpi-f77 
<br>
--disable-mpi-cxx --disable-vt --disable-io-romio --prefix=/usr 
<br>
--enable-heterogeneous. It was during &quot;make&quot; those messages displayed.
<br>
<p>I'm using Ubuntu 64bit.
<br>
<p>/Xin
<br>
<p>On 06/23/2011 05:49 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Xin --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you provide more details on exactly what part of the build is failing?  None of the rest of us are seeing the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you svn up'ed, did you re-run autogen.pl / configure?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 23, 2011, at 9:04 AM, Xin He wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the tips about configuration. Yet the build still failed. Anyway, I managed to roll back to an earlier version and successfully installed :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /Xin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 06/23/2011 01:26 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't believe we have changed anything in the trunk w.r.t. the Fortran 90 stuff (there's stuff off in a branch waiting to come in, but I don't think it has come in).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since you're primarily working on a new BTL, you might want to speed up your configure/build process by disabling Fortran and other optional stuff.  Try:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ./configure --disable-mpi-f90 --disable-mpi-f77 --disable-mpi-cxx --disable-vt --disable-io-romio ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That should speed things up a bit, and also avoid whatever this Fortran problem is.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 23, 2011, at 7:23 AM, Xin He wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as I compiled the sources from &quot;trunk&quot;. I got these error messages when doing make:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [blablabla...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make  all-am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: Entering directory `/home/ehhexxn/git/ompi/ompi/include'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   FC     mpif90-ext.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: compile: unrecognized option `-c'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: compile: Try `libtool --help' for more information.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: *** [mpif90-ext.lo] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: Leaving directory `/home/ehhexxn/git/ompi/ompi/include'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory `/home/ehhexxn/git/ompi/ompi/include'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory `/home/ehhexxn/git/ompi/ompi'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was able to compile an earlier version of trunk.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Xin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="9424.php">Josh Hursey: "Re: [OMPI devel] Resilience 2011"</a>
<li><strong>Previous message:</strong> <a href="9422.php">Ralf Wildenhues: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>In reply to:</strong> <a href="9403.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9427.php">Josh Hursey: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Reply:</strong> <a href="9427.php">Josh Hursey: "Re: [OMPI devel] Compiling problem in trunk?"</a>
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
