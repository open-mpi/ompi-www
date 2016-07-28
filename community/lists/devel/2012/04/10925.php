<?
$subject_val = "[OMPI devel] Fwd: GNU autoconf 2.69 released [stable]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 09:44:06 2012" -->
<!-- isoreceived="20120425134406" -->
<!-- sent="Wed, 25 Apr 2012 09:44:01 -0400" -->
<!-- isosent="20120425134401" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: GNU autoconf 2.69 released [stable]" -->
<!-- id="64FB2335-5AF4-4E0D-A7BD-526C9BD6F2E2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F977050.8070107_at_redhat.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: GNU autoconf 2.69 released [stable]<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 09:44:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10926.php">Jeff Squyres: "[OMPI devel] 1.6rc1 has been released"</a>
<li><strong>Previous message:</strong> <a href="10924.php">George Bosilca: "Re: [OMPI devel] How to debug segv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are a number of new Autoconf macros that would be useful for OMPI's Fortran configury.  Meaning: we have klugearounds in our existing configury, but the new AC 2.69 macros are Better.
<br>
<p>How would people feel about upgrading the autoconf requirement on the trunk to AC 2.69?
<br>
<p>(Terry: please add this to the agenda for next Tuesday; thanks)
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Eric Blake &lt;eblake_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: GNU autoconf 2.69 released [stable]
</span><br>
<span class="quotelev1">&gt; Date: April 24, 2012 11:32:32 PM EDT
</span><br>
<span class="quotelev1">&gt; To: info-gnu_at_[hidden], Autoconf &lt;Autoconf_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: autotools-announce_at_[hidden], &quot;bug-autoconf_at_[hidden]&quot; &lt;bug-autoconf_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Autoconf &lt;Autoconf_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The GNU Autoconf team is pleased to announce the stable release of
</span><br>
<span class="quotelev1">&gt; Autoconf 2.69.  Autoconf is an extensible package of M4 macros that
</span><br>
<span class="quotelev1">&gt; produce shell scripts to automatically configure software source code
</span><br>
<span class="quotelev1">&gt; packages.  These scripts can adapt the packages to many kinds of
</span><br>
<span class="quotelev1">&gt; UNIX-like systems without manual user intervention.  Autoconf creates a
</span><br>
<span class="quotelev1">&gt; configuration script for a package from a template file that lists the
</span><br>
<span class="quotelev1">&gt; operating system features that the package can use, in the form of M4
</span><br>
<span class="quotelev1">&gt; macro calls.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Among other improvements, this release fixes a couple of regressions
</span><br>
<span class="quotelev1">&gt; introduced in previous releases, greatly enhances Fortran support, adds
</span><br>
<span class="quotelev1">&gt; Go support, and updates the documentation license.  It also requires
</span><br>
<span class="quotelev1">&gt; that developer have perl 5.6 or newer when running autoconf (although
</span><br>
<span class="quotelev1">&gt; generated configure scripts remain independent of perl, as always).  See
</span><br>
<span class="quotelev1">&gt; a more complete list below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are the compressed sources:
</span><br>
<span class="quotelev1">&gt;  <a href="http://ftpmirror.gnu.org/autoconf/autoconf-2.69.tar.gz">http://ftpmirror.gnu.org/autoconf/autoconf-2.69.tar.gz</a>   (1.9MB)
</span><br>
<span class="quotelev1">&gt;  <a href="http://ftpmirror.gnu.org/autoconf/autoconf-2.69.tar.xz">http://ftpmirror.gnu.org/autoconf/autoconf-2.69.tar.xz</a>   (1.2MB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are the GPG detached signatures[*]:
</span><br>
<span class="quotelev1">&gt;  <a href="http://ftpmirror.gnu.org/autoconf/autoconf-2.69.tar.gz.sig">http://ftpmirror.gnu.org/autoconf/autoconf-2.69.tar.gz.sig</a>
</span><br>
<span class="quotelev1">&gt;  <a href="http://ftpmirror.gnu.org/autoconf/autoconf-2.69.tar.xz.sig">http://ftpmirror.gnu.org/autoconf/autoconf-2.69.tar.xz.sig</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Use a mirror for higher download bandwidth:
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.gnu.org/order/ftp.html">http://www.gnu.org/order/ftp.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [*] Use a .sig file to verify that the corresponding file (without the
</span><br>
<span class="quotelev1">&gt; .sig suffix) is intact.  First, be sure to download both the .sig file
</span><br>
<span class="quotelev1">&gt; and the corresponding tarball.  Then, run a command like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  gpg --verify autoconf-2.69.tar.gz.sig
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If that command fails because you don't have the required public key,
</span><br>
<span class="quotelev1">&gt; then run this command to import it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  gpg --keyserver keys.gnupg.net --recv-keys A7A16B4A2527436A
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and rerun the 'gpg --verify' command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This release was bootstrapped with the following tools:
</span><br>
<span class="quotelev1">&gt;  Automake 1.11.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NEWS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Noteworthy changes in release 2.69 (2012-04-24) [stable]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ** Autoconf now requires perl 5.6 or better (but generated configure
</span><br>
<span class="quotelev1">&gt;   scripts continue to run without perl).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Noteworthy changes in release 2.68b (2012-03-01) [beta]
</span><br>
<span class="quotelev1">&gt;  Released by Eric Blake, based on git versions 2.68.*.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ** Autoconf-generated configure scripts now unconditionally re-execute
</span><br>
<span class="quotelev1">&gt;   themselves with $CONFIG_SHELL, if that's set in the environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ** The texinfo documentation no longer specifies &quot;front-cover&quot; or
</span><br>
<span class="quotelev1">&gt;   &quot;back-cover&quot; texts, so that it may now be included in Debian's
</span><br>
<span class="quotelev1">&gt;   &quot;main&quot; section.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ** Support for the Go programming language has been added.  The new
</span><br>
<span class="quotelev1">&gt;   macro AC_LANG_GO sets variables GOC and GOFLAGS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ** AS_LITERAL_IF again treats '=' as a literal.  Regression introduced
</span><br>
<span class="quotelev1">&gt;   in 2.66.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ** The macro AS_EXECUTABLE_P, present since 2.50, is now documented.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ** Macros
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - AC_PROG_LN_S and AS_LN_S now fall back on 'cp -pR' (not 'cp -p') if
</span><br>
<span class="quotelev1">&gt;  'ln -s' does not work.  This works better for symlinks to directories.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - New macro AC_HEADER_CHECK_STDBOOL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - New and updated macros for Fortran support:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    AC_FC_CHECK_BOUNDS to enable array bounds checking
</span><br>
<span class="quotelev1">&gt;    AC_F77_IMPLICIT_NONE and AC_FC_IMPLICIT_NONE to disable implicit integer
</span><br>
<span class="quotelev1">&gt;    AC_FC_MODULE_EXTENSION to compute the Fortran 90 module name extension
</span><br>
<span class="quotelev1">&gt;    AC_FC_MODULE_FLAG for the Fortran 90 module search path flag
</span><br>
<span class="quotelev1">&gt;    AC_FC_MODULE_OUTPUT_FLAG for the Fortran 90 module output directory flag
</span><br>
<span class="quotelev1">&gt;    AC_FC_PP_SRCEXT for preprocessed Fortran source files extensions
</span><br>
<span class="quotelev1">&gt;    AC_FC_PP_DEFINE for the Fortran preprocessor define flag
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Eric Blake, on behalf of
</span><br>
<span class="quotelev1">&gt; The GNU Autoconf team
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10926.php">Jeff Squyres: "[OMPI devel] 1.6rc1 has been released"</a>
<li><strong>Previous message:</strong> <a href="10924.php">George Bosilca: "Re: [OMPI devel] How to debug segv"</a>
<!-- nextthread="start" -->
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
