<?
$subject_val = "Re: [OMPI devel] Compiling problem in trunk?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 27 10:04:31 2011" -->
<!-- isoreceived="20110627140431" -->
<!-- sent="Mon, 27 Jun 2011 16:04:55 +0200" -->
<!-- isosent="20110627140455" -->
<!-- name="Xin He" -->
<!-- email="xin.i.he_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Compiling problem in trunk?" -->
<!-- id="23894_1309183471_p5RE4Q4G013810_4E088E07.2090303_at_ericsson.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTikRQDyafgcDJEw6fgbvaA6Ojo8nPg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-06-27 10:04:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9431.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9429.php">Jeff Squyres: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>In reply to:</strong> <a href="9427.php">Josh Hursey: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9431.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Reply:</strong> <a href="9431.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>the appendix is my config.log. Hope it will be helpful.
<br>
<p>Regards,
<br>
Xin
<br>
<p>On 06/27/2011 03:22 PM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; I tried a fresh checkout of the trunk this morning (r24823) and could
</span><br>
<span class="quotelev1">&gt; not reproduce with that configure string on a Linux
</span><br>
<span class="quotelev1">&gt; 2.6.18-238.12.1.el5 x86_64 machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send a zip'ed up copy of your config.log? That may help us
</span><br>
<span class="quotelev1">&gt; highlight any other environment differences.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 27, 2011 at 5:01 AM, Xin He&lt;xin.i.he_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I even tried re-downloading the whole project and did all things. First
</span><br>
<span class="quotelev2">&gt;&gt; autogen, then ./configure --disable-mpi-f90 --disable-mpi-f77
</span><br>
<span class="quotelev2">&gt;&gt; --disable-mpi-cxx --disable-vt --disable-io-romio --prefix=/usr
</span><br>
<span class="quotelev2">&gt;&gt; --enable-heterogeneous. It was during &quot;make&quot; those messages displayed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using Ubuntu 64bit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /Xin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 06/23/2011 05:49 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Xin --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you provide more details on exactly what part of the build is failing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   None of the rest of us are seeing the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When you svn up'ed, did you re-run autogen.pl / configure?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 23, 2011, at 9:04 AM, Xin He wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for the tips about configuration. Yet the build still failed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Anyway, I managed to roll back to an earlier version and successfully
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; installed :)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /Xin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 06/23/2011 01:26 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don't believe we have changed anything in the trunk w.r.t. the Fortran
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 90 stuff (there's stuff off in a branch waiting to come in, but I don't
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; think it has come in).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Since you're primarily working on a new BTL, you might want to speed up
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; your configure/build process by disabling Fortran and other optional stuff.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Try:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      ./configure --disable-mpi-f90 --disable-mpi-f77 --disable-mpi-cxx
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --disable-vt --disable-io-romio ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That should speed things up a bit, and also avoid whatever this Fortran
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problem is.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jun 23, 2011, at 7:23 AM, Xin He wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; as I compiled the sources from &quot;trunk&quot;. I got these error messages when
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; doing make:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [blablabla...]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make  all-am
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[3]: Entering directory `/home/ehhexxn/git/ompi/ompi/include'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   FC     mpif90-ext.lo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libtool: compile: unrecognized option `-c'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libtool: compile: Try `libtool --help' for more information.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[3]: *** [mpif90-ext.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[3]: Leaving directory `/home/ehhexxn/git/ompi/ompi/include'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory `/home/ehhexxn/git/ompi/ompi/include'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory `/home/ehhexxn/git/ompi/ompi'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I was able to compile an earlier version of trunk.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Xin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>*****************************************************************************
<br>
**                                                                         **
<br>
** WARNING:  This email contains an attachment of a very suspicious type.  **
<br>
** You are urged NOT to open this attachment unless you are absolutely     **
<br>
** sure it is legitimate.  Opening this attachment may cause irreparable   **
<br>
** damage to your computer and your files.  If you have any questions      **
<br>
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
<br>
**                                                                         **
<br>
** This warning was added by the IU Computer Science Dept. mail scanner.   **
<br>
*****************************************************************************
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/zip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9430/config.log.zip">config.log.zip</a>
</ul>
<!-- attachment="config.log.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9431.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9429.php">Jeff Squyres: "Re: [OMPI devel] Tarball distribution"</a>
<li><strong>In reply to:</strong> <a href="9427.php">Josh Hursey: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9431.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Reply:</strong> <a href="9431.php">Jeff Squyres: "Re: [OMPI devel] Compiling problem in trunk?"</a>
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
