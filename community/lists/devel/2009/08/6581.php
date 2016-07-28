<?
$subject_val = "Re: [OMPI devel] trunk borked -- my fault";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 16:37:43 2009" -->
<!-- isoreceived="20090804203743" -->
<!-- sent="Tue, 4 Aug 2009 16:37:35 -0400" -->
<!-- isosent="20090804203735" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk borked -- my fault" -->
<!-- id="2F00D808-AF83-4ADB-82A9-23CB31ADFBF6_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B80DC4FB-C8D0-44CB-90DB-3F7AE607A75F_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-04 16:37:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6582.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Previous message:</strong> <a href="6580.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>In reply to:</strong> <a href="6580.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6582.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Reply:</strong> <a href="6582.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not completely fixed. With the latest version of autoconf (2.64) I get  
<br>
a bunch of warnings.
<br>
<p>configure.ac:449: warning: AC_REQUIRE: `AC_PROG_CXX' was expanded  
<br>
before it was required
<br>
../../lib/autoconf/c.m4:671: AC_LANG_COMPILER(C++) is expanded from...
<br>
../../lib/autoconf/lang.m4:315: AC_LANG_COMPILER_REQUIRE is expanded  
<br>
from...
<br>
../../lib/autoconf/general.m4:2735: AC_RUN_IFELSE is expanded from...
<br>
../../lib/m4sugar/m4sh.m4:620: AS_IF is expanded from...
<br>
../../lib/autoconf/general.m4:2018: AC_CACHE_VAL is expanded from...
<br>
../../lib/autoconf/general.m4:2039: AC_CACHE_CHECK is expanded from...
<br>
config/ompi_check_compiler_works.m4:28: OMPI_CHECK_COMPILER_WORKS is  
<br>
expanded from...
<br>
config/ompi_setup_cxx.m4:48: _OMPI_SETUP_CXX_COMPILER is expanded  
<br>
from...
<br>
config/ompi_setup_cxx.m4:28: OMPI_SETUP_CXX is expanded from...
<br>
configure.ac:449: the top level
<br>
configure.ac:488: warning: AC_REQUIRE: `AC_PROG_F77' was expanded  
<br>
before it was required
<br>
../../lib/autoconf/fortran.m4:272: AC_LANG_COMPILER(Fortran 77) is  
<br>
expanded from...
<br>
config/ompi_setup_f77.m4:35: OMPI_SETUP_F77 is expanded from...
<br>
configure.ac:488: the top level
<br>
configure.ac:603: warning: AC_REQUIRE: `AC_PROG_FC' was expanded  
<br>
before it was required
<br>
../../lib/autoconf/fortran.m4:279: AC_LANG_COMPILER(Fortran) is  
<br>
expanded from...
<br>
config/ompi_setup_f90.m4:37: OMPI_SETUP_F90 is expanded from...
<br>
configure.ac:603: the top level
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Aug 4, 2009, at 14:49 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Should be fixed in <a href="https://svn.open-mpi.org/trac/ompi/changeset/">https://svn.open-mpi.org/trac/ompi/changeset/</a> 
</span><br>
<span class="quotelev1">&gt; 21758.  Sorry for the interruption...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 4, 2009, at 10:24 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doh!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I committed the &quot;we don't need no stinkin' C++ compiler&quot; changes  
</span><br>
<span class="quotelev2">&gt;&gt; this morning after a bunch of testing, but I totally neglected to  
</span><br>
<span class="quotelev2">&gt;&gt; test the case *with* a C++ compiler.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So the trunk is borked at the moment; I'm working on a fix...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6582.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Previous message:</strong> <a href="6580.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>In reply to:</strong> <a href="6580.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6582.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
<li><strong>Reply:</strong> <a href="6582.php">Jeff Squyres: "Re: [OMPI devel] trunk borked -- my fault"</a>
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
