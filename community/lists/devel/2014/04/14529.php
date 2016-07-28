<?
$subject_val = "[OMPI devel] Build failures from r31393: opal atomics";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 10:57:37 2014" -->
<!-- isoreceived="20140415145737" -->
<!-- sent="Tue, 15 Apr 2014 14:57:36 +0000" -->
<!-- isosent="20140415145736" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Build failures from r31393: opal atomics" -->
<!-- id="77A29D09-EE88-449B-ABF7-153850AE41B2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140415131705.71E511609D6_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Build failures from r31393: opal atomics<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-15 10:57:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14530.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Build failures from r31393: opal atomics"</a>
<li><strong>Previous message:</strong> <a href="14528.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14530.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Build failures from r31393: opal atomics"</a>
<li><strong>Reply:</strong> <a href="14530.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Build failures from r31393: opal atomics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ryan --
<br>
<p>I'm getting build failures with this:
<br>
<p>-----
<br>
make[1]: Entering directory `/home/jsquyres/svn/ompi5/openmpi-1.9a1r31394M/_build/opal/asm'
<br>
&nbsp;&nbsp;CC       asm.lo
<br>
In file included from ../../../opal/asm/asm.c:21:
<br>
../../../opal/include/opal/sys/atomic.h:144:7: error: invalid digit &quot;8&quot; in octal constant
<br>
../../../opal/include/opal/sys/atomic.h:146:7: error: invalid digit &quot;8&quot; in octal constant
<br>
-----
<br>
<p>The problem seems to be coming from a new #define you added:
<br>
<p>#define OMPI_NO_BUILTIN     0800
<br>
<p>With the leading 0, it's being interpreted as octal, and therefore 8 is an invalid digit.
<br>
<p><span class="quotelev1">&gt;From looking at the other values in that #define group, it's not clear to me if these are supposed to be bit flags or just unique values...?
</span><br>
<p><p><p>On Apr 15, 2014, at 9:17 AM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: regrant (Ryan Grant)
</span><br>
<span class="quotelev1">&gt; Date: 2014-04-15 09:17:04 EDT (Tue, 15 Apr 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 31393
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31393">https://svn.open-mpi.org/trac/ompi/changeset/31393</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fixing atomics selection issue, to be CMR'd after it passes the nightly tests
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/config/opal_config_asm.m4            |    26 ++++++++++++++++++--------              
</span><br>
<span class="quotelev1">&gt;   trunk/opal/include/opal/sys/architecture.h |     1 +                                       
</span><br>
<span class="quotelev1">&gt;   trunk/opal/include/opal/sys/atomic.h       |    10 +++++-----                              
</span><br>
<span class="quotelev1">&gt;   3 files changed, 24 insertions(+), 13 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/opal_config_asm.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/opal_config_asm.m4	Tue Apr 15 03:23:39 2014	(r31392)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/opal_config_asm.m4	2014-04-15 09:17:04 EDT (Tue, 15 Apr 2014)	(r31393)
</span><br>
<span class="quotelev1">&gt; @@ -766,14 +766,17 @@
</span><br>
<span class="quotelev1">&gt;          [Enable use of OSX builtin atomics (default: disabled)])])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if test &quot;$enable_builtin_atomics&quot; = &quot;yes&quot; ; then
</span><br>
<span class="quotelev1">&gt; -       OPAL_CHECK_SYNC_BUILTINS([ompi_cv_asm_arch=&quot;SYNC_BUILTIN&quot;],
</span><br>
<span class="quotelev1">&gt; +       OPAL_CHECK_SYNC_BUILTINS([ompi_cv_asm_builtin=&quot;SYNC_BUILTIN&quot;],
</span><br>
<span class="quotelev1">&gt;          [AC_MSG_ERROR([__sync builtin atomics requested but not found.])])
</span><br>
<span class="quotelev1">&gt;        AC_DEFINE([OPAL_C_GCC_INLINE_ASSEMBLY], [1],
</span><br>
<span class="quotelev1">&gt;          [Whether C compiler supports GCC style inline assembly])
</span><br>
<span class="quotelev1">&gt;     elif test &quot;$enable_osx_builtin_atomics&quot; = &quot;yes&quot; ; then
</span><br>
<span class="quotelev1">&gt; -	AC_CHECK_HEADER([libkern/OSAtomic.h],[ompi_cv_asm_arch=&quot;OSX_BUILTIN&quot;],
</span><br>
<span class="quotelev1">&gt; +	   AC_CHECK_HEADER([libkern/OSAtomic.h],[ompi_cv_asm_builtin=&quot;OSX_BUILTIN&quot;],
</span><br>
<span class="quotelev1">&gt; 	    [AC_MSG_ERROR([OSX builtin atomics requested but not found.])])
</span><br>
<span class="quotelev1">&gt;     else
</span><br>
<span class="quotelev1">&gt; +       ompi_cv_asm_builtin=&quot;NO_BUILTIN&quot; 
</span><br>
<span class="quotelev1">&gt; +    fi
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;         OMPI_CHECK_ASM_PROC
</span><br>
<span class="quotelev1">&gt;         OMPI_CHECK_ASM_TEXT
</span><br>
<span class="quotelev1">&gt;         OMPI_CHECK_ASM_GLOBAL
</span><br>
<span class="quotelev1">&gt; @@ -898,12 +901,12 @@
</span><br>
<span class="quotelev1">&gt;             ;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         *)
</span><br>
<span class="quotelev1">&gt; -            OPAL_CHECK_SYNC_BUILTINS([ompi_cv_asm_arch=&quot;SYNC_BUILTIN&quot;],
</span><br>
<span class="quotelev1">&gt; +            OPAL_CHECK_SYNC_BUILTINS([ompi_cv_asm_builtin=&quot;SYNC_BUILTIN&quot;],
</span><br>
<span class="quotelev1">&gt;               [AC_MSG_ERROR([No atomic primitives available for $host])])
</span><br>
<span class="quotelev1">&gt;             ;;
</span><br>
<span class="quotelev1">&gt;         esac
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -      if test &quot;$ompi_cv_asm_arch&quot; = &quot;SYNC_BUILTIN&quot; ; then
</span><br>
<span class="quotelev1">&gt; +      if test &quot;$ompi_cv_asm_builtin&quot; = &quot;SYNC_BUILTIN&quot; ; then
</span><br>
<span class="quotelev1">&gt;         AC_DEFINE([OPAL_C_GCC_INLINE_ASSEMBLY], [1],
</span><br>
<span class="quotelev1">&gt;           [Whether C compiler supports GCC style inline assembly])
</span><br>
<span class="quotelev1">&gt;       else
</span><br>
<span class="quotelev1">&gt; @@ -954,17 +957,24 @@
</span><br>
<span class="quotelev1">&gt;         AC_DEFINE_UNQUOTED([OPAL_ASSEMBLY_FORMAT], [&quot;$OPAL_ASSEMBLY_FORMAT&quot;],
</span><br>
<span class="quotelev1">&gt;                            [Format of assembly file])
</span><br>
<span class="quotelev1">&gt;         AC_SUBST([OPAL_ASSEMBLY_FORMAT])
</span><br>
<span class="quotelev1">&gt; -      fi # if ompi_cv_asm_arch = SYNC_BUILTIN
</span><br>
<span class="quotelev1">&gt; -    fi # if cv_c_compiler_vendor = microsoft
</span><br>
<span class="quotelev1">&gt; +      fi # if ompi_cv_asm_builtin = SYNC_BUILTIN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     result=&quot;OMPI_$ompi_cv_asm_arch&quot;
</span><br>
<span class="quotelev1">&gt;     OPAL_ASSEMBLY_ARCH=&quot;$ompi_cv_asm_arch&quot;
</span><br>
<span class="quotelev1">&gt;     AC_MSG_CHECKING([for asssembly architecture])
</span><br>
<span class="quotelev1">&gt;     AC_MSG_RESULT([$ompi_cv_asm_arch])
</span><br>
<span class="quotelev1">&gt;     AC_DEFINE_UNQUOTED([OPAL_ASSEMBLY_ARCH], [$result],
</span><br>
<span class="quotelev1">&gt; -        [Architecture type of assembly to use for atomic operations])
</span><br>
<span class="quotelev1">&gt; +        [Architecture type of assembly to use for atomic operations and CMA])
</span><br>
<span class="quotelev1">&gt;     AC_SUBST([OPAL_ASSEMBLY_ARCH])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    result=&quot;OMPI_$ompi_cv_asm_builtin&quot;
</span><br>
<span class="quotelev1">&gt; +    OPAL_ASSEMBLY_BUILTIN=&quot;$ompi_cv_asm_builtin&quot;
</span><br>
<span class="quotelev1">&gt; +    AC_MSG_CHECKING([for builtin atomics])
</span><br>
<span class="quotelev1">&gt; +    AC_MSG_RESULT([$ompi_cv_asm_builtin])
</span><br>
<span class="quotelev1">&gt; +    AC_DEFINE_UNQUOTED([OPAL_ASSEMBLY_BUILTIN], [$result],
</span><br>
<span class="quotelev1">&gt; +        [Whether to use builtin atomics])
</span><br>
<span class="quotelev1">&gt; +    AC_SUBST([OPAL_ASSEMBLY_BUILTIN])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     OMPI_ASM_FIND_FILE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     unset result asm_format
</span><br>
<span class="quotelev1">&gt; @@ -983,7 +993,7 @@
</span><br>
<span class="quotelev1">&gt;     AC_REQUIRE([AC_PROG_GREP])
</span><br>
<span class="quotelev1">&gt;     AC_REQUIRE([AC_PROG_FGREP])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -if test &quot;$ompi_cv_asm_arch&quot; != &quot;WINDOWS&quot; -a &quot;$ompi_cv_asm_arch&quot; != &quot;SYNC_BUILTIN&quot; -a &quot;$ompi_cv_asm_arch&quot; != &quot;OSX_BUILTIN&quot; ; then
</span><br>
<span class="quotelev1">&gt; +if test &quot;$ompi_cv_asm_arch&quot; != &quot;WINDOWS&quot; -a &quot;$ompi_cv_asm_builtin&quot; != &quot;SYNC_BUILTIN&quot; -a &quot;$ompi_cv_asm_builtin&quot; != &quot;OSX_BUILTIN&quot; ; then
</span><br>
<span class="quotelev1">&gt;     AC_CHECK_PROG([PERL], [perl], [perl])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # see if we have a pre-built one already
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/include/opal/sys/architecture.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/include/opal/sys/architecture.h	Tue Apr 15 03:23:39 2014	(r31392)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/include/opal/sys/architecture.h	2014-04-15 09:17:04 EDT (Tue, 15 Apr 2014)	(r31393)
</span><br>
<span class="quotelev1">&gt; @@ -39,6 +39,7 @@
</span><br>
<span class="quotelev1">&gt; #define OMPI_ARM            0100
</span><br>
<span class="quotelev1">&gt; #define OMPI_SYNC_BUILTIN   0200
</span><br>
<span class="quotelev1">&gt; #define OMPI_OSX_BUILTIN    0400
</span><br>
<span class="quotelev1">&gt; +#define OMPI_NO_BUILTIN     0800
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Formats */
</span><br>
<span class="quotelev1">&gt; #define OMPI_DEFAULT        1000  /* standard for given architecture */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/include/opal/sys/atomic.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/include/opal/sys/atomic.h	Tue Apr 15 03:23:39 2014	(r31392)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/include/opal/sys/atomic.h	2014-04-15 09:17:04 EDT (Tue, 15 Apr 2014)	(r31393)
</span><br>
<span class="quotelev1">&gt; @@ -136,9 +136,13 @@
</span><br>
<span class="quotelev1">&gt;  * Load the appropriate architecture files and set some reasonable
</span><br>
<span class="quotelev1">&gt;  * default values for our support
</span><br>
<span class="quotelev1">&gt;  *
</span><br>
<span class="quotelev1">&gt; - *********************************************************************/
</span><br>
<span class="quotelev1">&gt; + *********************************************************************/ 
</span><br>
<span class="quotelev1">&gt; #if defined(DOXYGEN)
</span><br>
<span class="quotelev1">&gt; /* don't include system-level gorp when generating doxygen files */ 
</span><br>
<span class="quotelev1">&gt; +#elif OPAL_ASSEMBLY_BUILTIN == OMPI_SYNC_BUILTIN
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/sys/sync_builtin/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt; +#elif OPAL_ASSEMBLY_BUILTIN == OMPI_OSX_BUILTIN
</span><br>
<span class="quotelev1">&gt; +#include &quot;opal/sys/osx/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt; #elif OPAL_ASSEMBLY_ARCH == OMPI_ALPHA
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/sys/alpha/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt; #elif OPAL_ASSEMBLY_ARCH == OMPI_AMD64
</span><br>
<span class="quotelev1">&gt; @@ -161,10 +165,6 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/sys/sparcv9/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt; #elif OPAL_ASSEMBLY_ARCH == OMPI_SPARCV9_64
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/sys/sparcv9/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt; -#elif OPAL_ASSEMBLY_ARCH == OMPI_SYNC_BUILTIN
</span><br>
<span class="quotelev1">&gt; -#include &quot;opal/sys/sync_builtin/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt; -#elif OPAL_ASSEMBLY_ARCH == OMPI_OSX_BUILTIN
</span><br>
<span class="quotelev1">&gt; -#include &quot;opal/sys/osx/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifndef DOXYGEN
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="14530.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Build failures from r31393: opal atomics"</a>
<li><strong>Previous message:</strong> <a href="14528.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14530.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Build failures from r31393: opal atomics"</a>
<li><strong>Reply:</strong> <a href="14530.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Build failures from r31393: opal atomics"</a>
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
