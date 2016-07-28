<?
$subject_val = "Re: [OMPI devel] trunk borked -- my fault";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 17:38:35 2009" -->
<!-- isoreceived="20090804213835" -->
<!-- sent="Tue, 4 Aug 2009 17:38:29 -0400" -->
<!-- isosent="20090804213829" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk borked -- my fault" -->
<!-- id="FCBC12CB-8208-478F-A838-1A78F8DC49E7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87CE5967-34DC-4E7A-88E1-89D870D3C0C8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk borked -- my fault<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-04 17:38:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6586.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Previous message:</strong> <a href="6584.php">George Bosilca: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>In reply to:</strong> <a href="6583.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6621.php">Ralf Wildenhues: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Reply:</strong> <a href="6621.php">Ralf Wildenhues: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/21759">https://svn.open-mpi.org/trac/ompi/changeset/21759</a> seems to make us  
<br>
play well with AC 2.64.  To be honest, I'm not sure why this change  
<br>
works, but it does.
<br>
<p>I'm going to ping Ralf W. and see if he's got any insight here...
<br>
<p><p>On Aug 4, 2009, at 5:17 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Checking this further, my C++ changes were r21755.  Updating my SVN
</span><br>
<span class="quotelev1">&gt; tree to the commit before that (r21754), I see that AC 2.64 on this
</span><br>
<span class="quotelev1">&gt; tree issues these same warnings, but then configure works and the
</span><br>
<span class="quotelev1">&gt; build seems to proceed as normal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you try AC 2.64 before today?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If not, I'd advise backing off AC 2.64 and moving back down to AC 2.63
</span><br>
<span class="quotelev1">&gt; until we can figure those warnings out.  They *seem* to be harmless,
</span><br>
<span class="quotelev1">&gt; but I'm not entirely sure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like some things changed 2.63-&gt;2.64 with regards to how
</span><br>
<span class="quotelev1">&gt; languages are selected / used within AC 2.64 that break some of the
</span><br>
<span class="quotelev1">&gt; things I did today (perhaps AC 2.64 just got more strict...?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 4, 2009, at 4:43 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Doh.  I tested with 2.63.  I'll check out 2.64 right now...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 4, 2009, at 4:37 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Not completely fixed. With the latest version of autoconf (2.64) I
</span><br>
<span class="quotelev2">&gt; &gt; get
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a bunch of warnings.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure.ac:449: warning: AC_REQUIRE: `AC_PROG_CXX' was expanded
</span><br>
<span class="quotelev3">&gt; &gt; &gt; before it was required
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../lib/autoconf/c.m4:671: AC_LANG_COMPILER(C++) is expanded
</span><br>
<span class="quotelev2">&gt; &gt; from...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../lib/autoconf/lang.m4:315: AC_LANG_COMPILER_REQUIRE is  
</span><br>
<span class="quotelev1">&gt; expanded
</span><br>
<span class="quotelev3">&gt; &gt; &gt; from...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../lib/autoconf/general.m4:2735: AC_RUN_IFELSE is expanded
</span><br>
<span class="quotelev2">&gt; &gt; from...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../lib/m4sugar/m4sh.m4:620: AS_IF is expanded from...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../lib/autoconf/general.m4:2018: AC_CACHE_VAL is expanded  
</span><br>
<span class="quotelev1">&gt; from...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../lib/autoconf/general.m4:2039: AC_CACHE_CHECK is expanded
</span><br>
<span class="quotelev2">&gt; &gt; from...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; config/ompi_check_compiler_works.m4:28:  
</span><br>
<span class="quotelev1">&gt; OMPI_CHECK_COMPILER_WORKS is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; expanded from...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; config/ompi_setup_cxx.m4:48: _OMPI_SETUP_CXX_COMPILER is expanded
</span><br>
<span class="quotelev3">&gt; &gt; &gt; from...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; config/ompi_setup_cxx.m4:28: OMPI_SETUP_CXX is expanded from...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure.ac:449: the top level
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure.ac:488: warning: AC_REQUIRE: `AC_PROG_F77' was expanded
</span><br>
<span class="quotelev3">&gt; &gt; &gt; before it was required
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../lib/autoconf/fortran.m4:272: AC_LANG_COMPILER(Fortran 77) is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; expanded from...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; config/ompi_setup_f77.m4:35: OMPI_SETUP_F77 is expanded from...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure.ac:488: the top level
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure.ac:603: warning: AC_REQUIRE: `AC_PROG_FC' was expanded
</span><br>
<span class="quotelev3">&gt; &gt; &gt; before it was required
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../../lib/autoconf/fortran.m4:279: AC_LANG_COMPILER(Fortran) is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; expanded from...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; config/ompi_setup_f90.m4:37: OMPI_SETUP_F90 is expanded from...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure.ac:603: the top level
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    george.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Aug 4, 2009, at 14:49 , Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Should be fixed in <a href="https://svn.open-mpi.org/trac/ompi/changeset/">https://svn.open-mpi.org/trac/ompi/changeset/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 21758.  Sorry for the interruption...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Aug 4, 2009, at 10:24 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Doh!
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; I committed the &quot;we don't need no stinkin' C++ compiler&quot;  
</span><br>
<span class="quotelev1">&gt; changes
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; this morning after a bunch of testing, but I totally  
</span><br>
<span class="quotelev1">&gt; neglected to
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; test the case *with* a C++ compiler.  :-(
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; So the trunk is borked at the moment; I'm working on a fix...
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6586.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Previous message:</strong> <a href="6584.php">George Bosilca: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>In reply to:</strong> <a href="6583.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6621.php">Ralf Wildenhues: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Reply:</strong> <a href="6621.php">Ralf Wildenhues: "Re: [OMPI devel] trunk borked -- my fault"</a>
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
