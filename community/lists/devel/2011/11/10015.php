<?
$subject_val = "Re: [OMPI devel] PGI error invoked when svnversion is unavailable";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 22 09:11:16 2011" -->
<!-- isoreceived="20111122141116" -->
<!-- sent="Tue, 22 Nov 2011 09:11:12 -0500" -->
<!-- isosent="20111122141112" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PGI error invoked when svnversion is unavailable" -->
<!-- id="56C1AA1A-19B0-4F06-936D-C9660E072E0C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BD36066269DB4A4BB18E7D99D297C5F4411446BB75_at_WSUS.simctr.usasmdch" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PGI error invoked when svnversion is unavailable<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-22 09:11:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10016.php">Ralph Castain: "Re: [OMPI devel] Trunk VT breakage"</a>
<li><strong>Previous message:</strong> <a href="10014.php">Jeff Squyres: "Re: [OMPI devel] Trunk VT breakage"</a>
<li><strong>In reply to:</strong> <a href="9973.php">Thomas Rothrock CTR SMDC SimCtr/GaN Corporation: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tom / Larry --
<br>
<p>Thanks for looking into this.
<br>
<p>1. I just replied on <a href="https://svn.open-mpi.org/trac/ompi/ticket/2913">https://svn.open-mpi.org/trac/ompi/ticket/2913</a> about the sed issue; let's iterate there to find the Right solution.
<br>
<p>2. Larry: I'll look at the other issues in your patch more closely after the Thanksgiving break (I'm supposedly on vacation today; I'm going to be in trouble if I don't stop working soon!).
<br>
<p><p><p><p>On Nov 15, 2011, at 8:17 PM, Thomas Rothrock CTR SMDC SimCtr/GaN Corporation wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for the reply and attachments.  I searched the archive before
</span><br>
<span class="quotelev1">&gt; sending my own email and did find a couple of the previous messages, but
</span><br>
<span class="quotelev1">&gt; believe mine is a different situation.  The macro expansion is working (I'm
</span><br>
<span class="quotelev1">&gt; using PGI 11.10) but the macro is set to &quot;&quot; instead of &quot;1.7a1? (no
</span><br>
<span class="quotelev1">&gt; svnversion) MM-DD-YYYY&quot; by an error in the configure script generation.
</span><br>
<span class="quotelev1">&gt; Installing subversion is a cheap workaround that makes the svnversion
</span><br>
<span class="quotelev1">&gt; command available and the macro gets set to &quot;1.7a1r25476M&quot; or whatever repo
</span><br>
<span class="quotelev1">&gt; version you are at.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did not mention it before but this happens when I try to build the trunk
</span><br>
<span class="quotelev1">&gt; or the 1.5 development branch.  The 1.4 branch's configure code doesn't even
</span><br>
<span class="quotelev1">&gt; bother to test for svnversion failing and just ends up setting OMPI_VERSION
</span><br>
<span class="quotelev1">&gt; to &quot;1.4.4rc5r&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is with configure's with_ident_string assignment:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	with_ident_string=&quot;`echo $with_ident_string | sed -e
</span><br>
<span class="quotelev1">&gt; 's/%VERSION%/'$OMPI_VERSION/`&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI_VERSION is set to &quot;1.7a1? (no svnversion) MM-DD-YYYY&quot; but the spaces in
</span><br>
<span class="quotelev1">&gt; OMPI_VERSION break the expression because sed sees the rest of the version
</span><br>
<span class="quotelev1">&gt; string as extra arguments instead of part of the -e script.  It doesn't show
</span><br>
<span class="quotelev1">&gt; up in config.log, but the configure output to the terminal at this point is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	checking if want ident string... sed: -e expression #1, char 18:
</span><br>
<span class="quotelev1">&gt; unterminated `s' command
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The config.status shows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	D[&quot;OPAL_IDENT_STRING&quot;]=&quot; \&quot;\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I patch config/opal_get_version.m4 to remove the spaces:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff -Naurd openmpi-trunk.a/config/opal_get_version.m4
</span><br>
<span class="quotelev1">&gt; openmpi-trunk.b/config/opal_get_version.m4
</span><br>
<span class="quotelev1">&gt; --- openmpi-trunk.a/config/opal_get_version.m4  2011-09-21
</span><br>
<span class="quotelev1">&gt; 23:17:36.000000000 -0500
</span><br>
<span class="quotelev1">&gt; +++ openmpi-trunk.b/config/opal_get_version.m4  2011-11-15
</span><br>
<span class="quotelev1">&gt; 17:36:09.000000000 -0600
</span><br>
<span class="quotelev1">&gt; @@ -81,7 +81,7 @@
</span><br>
<span class="quotelev1">&gt;                     if test $? != 0; then
</span><br>
<span class="quotelev1">&gt;                         # The following is too long for Fortran
</span><br>
<span class="quotelev1">&gt;                         # $2_REPO_REV=&quot;unknown svn version (svnversion not
</span><br>
<span class="quotelev1">&gt; found); $d&quot;
</span><br>
<span class="quotelev1">&gt; -                        $2_REPO_REV=&quot;? (no svnversion); $d&quot;
</span><br>
<span class="quotelev1">&gt; +                        $2_REPO_REV=&quot;?(nosvnversion);$d&quot;
</span><br>
<span class="quotelev1">&gt;                     fi
</span><br>
<span class="quotelev1">&gt;                 elif test -d &quot;$srcdir/.hg&quot; ; then
</span><br>
<span class="quotelev1">&gt;                     # Check to see if we can find the hg command
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it verifies that the spaces were the problem.  OMPI_VERSION gets set to
</span><br>
<span class="quotelev1">&gt; &quot;1.7a1?(nosvnversion);11-15-2011&quot;, configure runs without an sed error, and
</span><br>
<span class="quotelev1">&gt; config.status shows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	D[&quot;OPAL_IDENT_STRING&quot;]=&quot; \&quot;1.7a1?(nosvnversion);11-15-2011\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and opal/runtime/opal_init.c compiles without triggering the misleading PGI
</span><br>
<span class="quotelev1">&gt; error, but doesn't look quite as pretty.  Perhaps a better solution is to
</span><br>
<span class="quotelev1">&gt; modify the with_ident_string assignment to work correclty with spaces in
</span><br>
<span class="quotelev1">&gt; OMPI_VERSION intact:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff -Naurd openmpi-trunk.a/opal/config/opal_configure_options.m4
</span><br>
<span class="quotelev1">&gt; openmpi-trunk.b/opal/config/opal_configure_options.m4
</span><br>
<span class="quotelev1">&gt; --- openmpi-trunk.a/opal/config/opal_configure_options.m4       2011-11-15
</span><br>
<span class="quotelev1">&gt; 17:55:36.000000000 -0600
</span><br>
<span class="quotelev1">&gt; +++ openmpi-trunk.b/opal/config/opal_configure_options.m4       2011-11-15
</span><br>
<span class="quotelev1">&gt; 18:29:43.000000000 -0600
</span><br>
<span class="quotelev1">&gt; @@ -489,7 +489,7 @@
</span><br>
<span class="quotelev1">&gt; if test &quot;$with_ident_string&quot; = &quot;&quot; -o &quot;$with_ident_string&quot; = &quot;no&quot;; then
</span><br>
<span class="quotelev1">&gt;     with_ident_string=&quot;%VERSION%&quot;
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; -with_ident_string=&quot;`echo $with_ident_string | sed -e
</span><br>
<span class="quotelev1">&gt; 's/%VERSION%/'$OMPI_VERSION/`&quot;
</span><br>
<span class="quotelev1">&gt; +with_ident_string=&quot;`echo $with_ident_string | sed -e
</span><br>
<span class="quotelev1">&gt; 's/%VERSION%/'&quot;$OMPI_VERSION&quot;'/'`&quot;
</span><br>
<span class="quotelev1">&gt; AC_DEFINE_UNQUOTED([OPAL_IDENT_STRING], [&quot;$with_ident_string&quot;],
</span><br>
<span class="quotelev1">&gt;      [ident string for Open MPI])
</span><br>
<span class="quotelev1">&gt; AC_MSG_RESULT([$with_ident_string])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case the resulting config.status has:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	D[&quot;OPAL_IDENT_STRING&quot;]=&quot; \&quot;1.7a1? (no svnversion); 11-15-2011\&quot;&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the compile works.  I have attached the second patch for both trunk and
</span><br>
<span class="quotelev1">&gt; 1.5 as it is probably the better solution (don't assume OMPI_VERSION has no
</span><br>
<span class="quotelev1">&gt; spaces) and I have not found other instances of spaces in the version string
</span><br>
<span class="quotelev1">&gt; breaking anything.  As for OpenMPI 1.4's development branch, I'll leave the
</span><br>
<span class="quotelev1">&gt; choice to patch or leave as-is for someone else to discuss.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI, PGI has assigned my support request TPR #18274.  I'm curious what they
</span><br>
<span class="quotelev1">&gt; will come back with.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;            Tom Rothrock          &lt;Thomas.W.Rothrock.CTR_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;            US Army Space &amp; Missile Defense Command Simulation Center
</span><br>
<span class="quotelev1">&gt;            256-955-3382 (DSN 645)                   FAX 256-955-1231
</span><br>
<span class="quotelev1">&gt;            &lt;<a href="http://www.sc.army.mil">http://www.sc.army.mil</a>&gt; Main SimCtr Phone:  256-955-3750
</span><br>
<span class="quotelev1">&gt;           -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;           This email capability is supported by Department of Defense
</span><br>
<span class="quotelev1">&gt;           systems and is subject to monitoring.  Please refrain from
</span><br>
<span class="quotelev1">&gt;           using this address for non-Government purposes.
</span><br>
<span class="quotelev1">&gt;           -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Larry Baker [mailto:baker_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, November 15, 2011 4:08 PM
</span><br>
<span class="quotelev1">&gt; To: Thomas Rothrock CTR SMDC SimCtr/GaN Corporation
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Developers; Eugene Loh
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] PGI error invoked when svnversion is unavailable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tom,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is because the code in OpenMPI presumes macros will be expanded in
</span><br>
<span class="quotelev1">&gt; pragmas, but that is not required by the C standard.  (See my e-mails below
</span><br>
<span class="quotelev1">&gt; from last year with PGI, TPR 17186.)  I fixed OpenMPI 1.4.3 configure in the
</span><br>
<span class="quotelev1">&gt; attached patch.  My patch also disables inline assembly for PGI C++, the
</span><br>
<span class="quotelev1">&gt; same as for PGI C.  (Something similar may also have to be done to solve
</span><br>
<span class="quotelev1">&gt; Eugene's asm statement warnings on Solaris 11.)  It also fixes detection of
</span><br>
<span class="quotelev1">&gt; support for marshaling Fortran REAL16 and COMPLEX32 data types.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;openmpi-1.5-ident_string.patch&gt;&lt;openmpi-trunk-ident_string.patch&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="10016.php">Ralph Castain: "Re: [OMPI devel] Trunk VT breakage"</a>
<li><strong>Previous message:</strong> <a href="10014.php">Jeff Squyres: "Re: [OMPI devel] Trunk VT breakage"</a>
<li><strong>In reply to:</strong> <a href="9973.php">Thomas Rothrock CTR SMDC SimCtr/GaN Corporation: "Re: [OMPI devel] PGI error invoked when svnversion is unavailable"</a>
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
