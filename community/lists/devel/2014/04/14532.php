<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Build failures from r31393: opal atomics";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 11:48:52 2014" -->
<!-- isoreceived="20140415154852" -->
<!-- sent="Tue, 15 Apr 2014 15:48:50 +0000" -->
<!-- isosent="20140415154850" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Build failures from r31393: opal atomics" -->
<!-- id="AF58F45B-DE73-46FA-B26E-FB7E71F95B17_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CF72AB1F.AF85%regrant_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Build failures from r31393: opal atomics<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-15 11:48:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14533.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI developer's meeting: June 24-26"</a>
<li><strong>Previous message:</strong> <a href="14531.php">Ralph Castain: "Re: [OMPI devel] RFC: move sensor framework to ORCM"</a>
<li><strong>In reply to:</strong> <a href="14530.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Build failures from r31393: opal atomics"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perfect -- thanks!
<br>
<p>On Apr 15, 2014, at 11:36 AM, &quot;Grant, Ryan Eric (-EXP)&quot; &lt;regrant_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ack, sorry. I've grouped the built-in atomics into a family 020x as
</span><br>
<span class="quotelev1">&gt; discussed. I've also got the built-ins renamed as OMPI_BULTIN_name. Commit
</span><br>
<span class="quotelev1">&gt; is coming up soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Ryan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/15/14 8:57 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ryan --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm getting build failures with this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/jsquyres/svn/ompi5/openmpi-1.9a1r31394M/_build/opal/asm'
</span><br>
<span class="quotelev2">&gt;&gt; CC       asm.lo
</span><br>
<span class="quotelev2">&gt;&gt; In file included from ../../../opal/asm/asm.c:21:
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/include/opal/sys/atomic.h:144:7: error: invalid digit &quot;8&quot;
</span><br>
<span class="quotelev2">&gt;&gt; in octal constant
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/include/opal/sys/atomic.h:146:7: error: invalid digit &quot;8&quot;
</span><br>
<span class="quotelev2">&gt;&gt; in octal constant
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem seems to be coming from a new #define you added:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #define OMPI_NO_BUILTIN     0800
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With the leading 0, it's being interpreted as octal, and therefore 8 is
</span><br>
<span class="quotelev2">&gt;&gt; an invalid digit.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From looking at the other values in that #define group, it's not clear to
</span><br>
<span class="quotelev2">&gt;&gt; me if these are supposed to be bit flags or just unique values...?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 15, 2014, at 9:17 AM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: regrant (Ryan Grant)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2014-04-15 09:17:04 EDT (Tue, 15 Apr 2014)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 31393
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31393">https://svn.open-mpi.org/trac/ompi/changeset/31393</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fixing atomics selection issue, to be CMR'd after it passes the nightly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tests
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/config/opal_config_asm.m4            |    26
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ++++++++++++++++++--------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/opal/include/opal/sys/architecture.h |     1 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/opal/include/opal/sys/atomic.h       |    10 +++++-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  3 files changed, 24 insertions(+), 13 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/config/opal_config_asm.m4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/config/opal_config_asm.m4	Tue Apr 15 03:23:39 2014	(r31392)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/config/opal_config_asm.m4	2014-04-15 09:17:04 EDT (Tue, 15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apr 2014)	(r31393)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -766,14 +766,17 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [Enable use of OSX builtin atomics (default: disabled)])])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if test &quot;$enable_builtin_atomics&quot; = &quot;yes&quot; ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -       OPAL_CHECK_SYNC_BUILTINS([ompi_cv_asm_arch=&quot;SYNC_BUILTIN&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +       OPAL_CHECK_SYNC_BUILTINS([ompi_cv_asm_builtin=&quot;SYNC_BUILTIN&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [AC_MSG_ERROR([__sync builtin atomics requested but not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found.])])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       AC_DEFINE([OPAL_C_GCC_INLINE_ASSEMBLY], [1],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [Whether C compiler supports GCC style inline assembly])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    elif test &quot;$enable_osx_builtin_atomics&quot; = &quot;yes&quot; ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -	AC_CHECK_HEADER([libkern/OSAtomic.h],[ompi_cv_asm_arch=&quot;OSX_BUILTIN&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +	   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_CHECK_HEADER([libkern/OSAtomic.h],[ompi_cv_asm_builtin=&quot;OSX_BUILTIN&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    [AC_MSG_ERROR([OSX builtin atomics requested but not found.])])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +       ompi_cv_asm_builtin=&quot;NO_BUILTIN&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    fi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OMPI_CHECK_ASM_PROC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OMPI_CHECK_ASM_TEXT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OMPI_CHECK_ASM_GLOBAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -898,12 +901,12 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            ;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        *)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -            OPAL_CHECK_SYNC_BUILTINS([ompi_cv_asm_arch=&quot;SYNC_BUILTIN&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +            
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_CHECK_SYNC_BUILTINS([ompi_cv_asm_builtin=&quot;SYNC_BUILTIN&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              [AC_MSG_ERROR([No atomic primitives available for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $host])])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            ;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        esac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -      if test &quot;$ompi_cv_asm_arch&quot; = &quot;SYNC_BUILTIN&quot; ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +      if test &quot;$ompi_cv_asm_builtin&quot; = &quot;SYNC_BUILTIN&quot; ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        AC_DEFINE([OPAL_C_GCC_INLINE_ASSEMBLY], [1],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [Whether C compiler supports GCC style inline assembly])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -954,17 +957,24 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        AC_DEFINE_UNQUOTED([OPAL_ASSEMBLY_FORMAT],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [&quot;$OPAL_ASSEMBLY_FORMAT&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           [Format of assembly file])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        AC_SUBST([OPAL_ASSEMBLY_FORMAT])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -      fi # if ompi_cv_asm_arch = SYNC_BUILTIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    fi # if cv_c_compiler_vendor = microsoft
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +      fi # if ompi_cv_asm_builtin = SYNC_BUILTIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    result=&quot;OMPI_$ompi_cv_asm_arch&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    OPAL_ASSEMBLY_ARCH=&quot;$ompi_cv_asm_arch&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    AC_MSG_CHECKING([for asssembly architecture])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    AC_MSG_RESULT([$ompi_cv_asm_arch])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    AC_DEFINE_UNQUOTED([OPAL_ASSEMBLY_ARCH], [$result],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        [Architecture type of assembly to use for atomic operations])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        [Architecture type of assembly to use for atomic operations
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and CMA])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    AC_SUBST([OPAL_ASSEMBLY_ARCH])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    result=&quot;OMPI_$ompi_cv_asm_builtin&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    OPAL_ASSEMBLY_BUILTIN=&quot;$ompi_cv_asm_builtin&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    AC_MSG_CHECKING([for builtin atomics])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    AC_MSG_RESULT([$ompi_cv_asm_builtin])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    AC_DEFINE_UNQUOTED([OPAL_ASSEMBLY_BUILTIN], [$result],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        [Whether to use builtin atomics])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    AC_SUBST([OPAL_ASSEMBLY_BUILTIN])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    OMPI_ASM_FIND_FILE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    unset result asm_format
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -983,7 +993,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    AC_REQUIRE([AC_PROG_GREP])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    AC_REQUIRE([AC_PROG_FGREP])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -if test &quot;$ompi_cv_asm_arch&quot; != &quot;WINDOWS&quot; -a &quot;$ompi_cv_asm_arch&quot; !=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;SYNC_BUILTIN&quot; -a &quot;$ompi_cv_asm_arch&quot; != &quot;OSX_BUILTIN&quot; ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +if test &quot;$ompi_cv_asm_arch&quot; != &quot;WINDOWS&quot; -a &quot;$ompi_cv_asm_builtin&quot; !=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;SYNC_BUILTIN&quot; -a &quot;$ompi_cv_asm_builtin&quot; != &quot;OSX_BUILTIN&quot; ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    AC_CHECK_PROG([PERL], [perl], [perl])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    # see if we have a pre-built one already
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/include/opal/sys/architecture.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/include/opal/sys/architecture.h	Tue Apr 15 03:23:39
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2014	(r31392)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/include/opal/sys/architecture.h	2014-04-15 09:17:04 EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Tue, 15 Apr 2014)	(r31393)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -39,6 +39,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define OMPI_ARM            0100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define OMPI_SYNC_BUILTIN   0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define OMPI_OSX_BUILTIN    0400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#define OMPI_NO_BUILTIN     0800
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* Formats */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define OMPI_DEFAULT        1000  /* standard for given architecture */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/include/opal/sys/atomic.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/include/opal/sys/atomic.h	Tue Apr 15 03:23:39
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2014	(r31392)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/include/opal/sys/atomic.h	2014-04-15 09:17:04 EDT (Tue,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 15 Apr 2014)	(r31393)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -136,9 +136,13 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Load the appropriate architecture files and set some reasonable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * default values for our support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - *********************************************************************/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *********************************************************************/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #if defined(DOXYGEN)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* don't include system-level gorp when generating doxygen files */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif OPAL_ASSEMBLY_BUILTIN == OMPI_SYNC_BUILTIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#include &quot;opal/sys/sync_builtin/atomic.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#elif OPAL_ASSEMBLY_BUILTIN == OMPI_OSX_BUILTIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#include &quot;opal/sys/osx/atomic.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #elif OPAL_ASSEMBLY_ARCH == OMPI_ALPHA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;opal/sys/alpha/atomic.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #elif OPAL_ASSEMBLY_ARCH == OMPI_AMD64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -161,10 +165,6 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;opal/sys/sparcv9/atomic.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #elif OPAL_ASSEMBLY_ARCH == OMPI_SPARCV9_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;opal/sys/sparcv9/atomic.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif OPAL_ASSEMBLY_ARCH == OMPI_SYNC_BUILTIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#include &quot;opal/sys/sync_builtin/atomic.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#elif OPAL_ASSEMBLY_ARCH == OMPI_OSX_BUILTIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -#include &quot;opal/sys/osx/atomic.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifndef DOXYGEN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14529.php">http://www.open-mpi.org/community/lists/devel/2014/04/14529.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14530.php">http://www.open-mpi.org/community/lists/devel/2014/04/14530.php</a>
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
<li><strong>Next message:</strong> <a href="14533.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI developer's meeting: June 24-26"</a>
<li><strong>Previous message:</strong> <a href="14531.php">Ralph Castain: "Re: [OMPI devel] RFC: move sensor framework to ORCM"</a>
<li><strong>In reply to:</strong> <a href="14530.php">Grant, Ryan Eric (-EXP): "Re: [OMPI devel] [EXTERNAL] Build failures from r31393: opal atomics"</a>
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
