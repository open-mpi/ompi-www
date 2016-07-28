<?
$subject_val = "Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &quot;wrong&quot; compiler usage";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 15:20:01 2009" -->
<!-- isoreceived="20090518192001" -->
<!-- sent="Mon, 18 May 2009 12:19:48 -0700" -->
<!-- isosent="20090518191948" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &amp;quot;wrong&amp;quot; compiler usage" -->
<!-- id="4A11B4D4.2040901_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="33F94B32-D862-404A-A313-23DC0F892FA1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &quot;wrong&quot; compiler usage<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 15:19:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6067.php">Rainer Keller: "Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &quot;wrong&quot; compiler usage"</a>
<li><strong>Previous message:</strong> <a href="6065.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>In reply to:</strong> <a href="6061.php">Jeff Squyres: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionalityand &quot;wrong&quot; compiler usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6067.php">Rainer Keller: "Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &quot;wrong&quot; compiler usage"</a>
<li><strong>Reply:</strong> <a href="6067.php">Rainer Keller: "Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &quot;wrong&quot; compiler usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IMHO there are two distinct issues being entangled here.
<br>
&nbsp;&nbsp;1) Flagging deprecated functionality
<br>
&nbsp;&nbsp;2) Informing the user about a change of compiler (possibly as an 
<br>
#error or #warning)
<br>
<p>I understand why solving #1 requires detecting the compiler change to 
<br>
avoid a &quot;bad attribute&quot; (see BACKGROUND, below).  However, I don't see 
<br>
why this detection requires that one report it to the user.  In the 
<br>
naive implementation, a change of compiler would just silently loose the 
<br>
ability to warn about deprecated functionality.  No other user-visible 
<br>
change in behavior would be required if the compiler were to change.  
<br>
So, my recommendation is that Rainer and Jeff narrow their RFC to cover 
<br>
just #1, and float an independent RFC for #2 only after #1 has been well 
<br>
tested.
<br>
<p>-Paul
<br>
<p>BACKGROUND:
<br>
<p>As Rainer acknowledged, this is based on some preprocessor code we've 
<br>
been using in GASNet for some time now.  Among other things, we use this 
<br>
code to ensure that attributes that were detected at configure time are 
<br>
still guaranteed valid at compile time.  A simplified example from GASNet:
<br>
<p>&nbsp;&nbsp;&nbsp;/* detect when the compiler in use differs from the one tested by 
<br>
configure,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* indicating some of the configure-detected results may be invalid 
<br>
for this compilation
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;#include &lt;portable_platform.h&gt;
<br>
&nbsp;&nbsp;#if PLATFORM_COMPILER_ID != GASNETI_PLATFORM_COMPILER_ID || \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PLATFORM_COMPILER_VERSION != GASNETI_PLATFORM_COMPILER_VERSION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#define GASNETI_CONFIGURE_MISMATCH 1
<br>
&nbsp;&nbsp;#endif
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;#if GASNETI_CONFIGURE_MISMATCH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#define GASNETI_ATTRIBUTE_FOO /* Not safe since compiler has 
<br>
changed */
<br>
&nbsp;&nbsp;&nbsp;#elif  HAVE_GCC_ATTRIBUTE_FOO
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#define GASNETI_ATTRIBUTE_FOO __attribute__(__foo__)
<br>
&nbsp;&nbsp;&nbsp;#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#define GASNETI_ATTRIBUTE_FOO /* Not detected at configure time */
<br>
&nbsp;&nbsp;&nbsp;#endif
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Agreed.  Being able to handle such scenarios properly is one of the 
</span><br>
<span class="quotelev1">&gt; reasons that Rainer and I are iterating on this in a mercurial branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 18, 2009, at 7:39 AM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think care must be taken on this front. While I know we don't like
</span><br>
<span class="quotelev2">&gt;&gt; to admit it, there is no reason the C compilers have to match, and
</span><br>
<span class="quotelev2">&gt;&gt; indeed good reasons they might not. For example, at LANL, we
</span><br>
<span class="quotelev2">&gt;&gt; frequently compiled OMPI with GCC, then fixed up the wrapper compilers
</span><br>
<span class="quotelev2">&gt;&gt; to use Icc or whatever, to work around optimizer bugs. This is
</span><br>
<span class="quotelev2">&gt;&gt; functionality I don't think should be lost just to warn about
</span><br>
<span class="quotelev2">&gt;&gt; deprecated functions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is an art . . . to flying. The knack lies in learning how to
</span><br>
<span class="quotelev2">&gt;&gt; throw yourself at the ground and miss.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 18, 2009, at 1:34, Rainer Keller &lt;keller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; What:  Warn user about deprecated MPI functionality and &quot;wrong&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; compiler usage
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Why:   Because deprecated MPI functions, are ... deprecated
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Where: On trunk
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; When:  Apply on trunk before branching for v1.5 (it is user-visible)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Timeout: 1 weeks - May 26, 2009 after the teleconf.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'd like to propose a patch that addresses two issues:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; - Users shoot themselves in the foot compiling with a different
</span><br>
<span class="quotelev3">&gt;&gt; &gt; compiler
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   than what was used to compile OMPI (think ABI)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; - The MPI-2.1 std. defines several functions to be deprecated.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This will warn Open MPI users, when accessing deprecated functions,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; even
</span><br>
<span class="quotelev3">&gt;&gt; &gt; giving a proper warning such as:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     &quot;MPI_TYPE_HVECTOR is superseded by MPI_TYPE_CREATE_HVECTOR&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Also, now we may _warn_ when using a different compiler (gcc vs.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; intel vs.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; pgcc)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This is achieved using __opal_attribute_deprecated__ and obviously
</span><br>
<span class="quotelev3">&gt;&gt; &gt; needs to be
</span><br>
<span class="quotelev3">&gt;&gt; &gt; added into mpi.h, therefore being a user-visible change.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This however has a few caveats:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1.) Having Open MPI compiled with gcc and having users compiling
</span><br>
<span class="quotelev3">&gt;&gt; &gt; with another
</span><br>
<span class="quotelev3">&gt;&gt; &gt; compiler, which is not supporting __attribute__((deprecated)) is
</span><br>
<span class="quotelev3">&gt;&gt; &gt; going to be a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; problem
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2.) The attribute is most useful, when having a proper description
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (as above)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -- which requires support for the optional argument to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; __deprecate__. This
</span><br>
<span class="quotelev3">&gt;&gt; &gt; feature is offered only in gcc&gt;4.4 (see <a href="http://gcc.gnu.org/ml/gcc">http://gcc.gnu.org/ml/gcc</a>-
</span><br>
<span class="quotelev3">&gt;&gt; &gt; patches/2009-04/msg00087.html).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Therefore, I added a configure-check for the compiler's support of the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; optional argument.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; And we need to store, which compiler is used to compile Open MPI and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; at (user-
</span><br>
<span class="quotelev3">&gt;&gt; &gt; app) compile-time again check (within mpi.h), which compiler (and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; version!) is
</span><br>
<span class="quotelev3">&gt;&gt; &gt; being used.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This is then compared at user-level compile-time.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; To prevent users getting swamped with error msg. this can be turned
</span><br>
<span class="quotelev3">&gt;&gt; &gt; off using
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the configure-option:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  --enable-mpi-interface-warning
</span><br>
<span class="quotelev3">&gt;&gt; &gt; which turns on OMPI_WANT_MPI_INTERFACE_WARNING (default: DISabled), as
</span><br>
<span class="quotelev3">&gt;&gt; &gt; suggested by Jeff.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The user can however override that with (check mpi2basic_tests):
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    mpicc -DOMPI_WANT_MPI_INTERFACE_WARNING -c lalala.c
</span><br>
<span class="quotelev3">&gt;&gt; &gt; lots of warnings follow
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Please take a look into:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://bitbucket.org/jsquyres/ompi-deprecated/">http://bitbucket.org/jsquyres/ompi-deprecated/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; With best regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Rainer
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; PS:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Also, we need to disable the warning, when building Open MPI
</span><br>
<span class="quotelev3">&gt;&gt; &gt; itselve ;-)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; PPS:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks to Paul Hargrove and Dan Bonachea for the GASnet file
</span><br>
<span class="quotelev3">&gt;&gt; &gt; portable_platform.h which offers the CPP magic to figure out
</span><br>
<span class="quotelev3">&gt;&gt; &gt; compilers and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; esp. compiler-versions.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ---
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev3">&gt;&gt; &gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6067.php">Rainer Keller: "Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &quot;wrong&quot; compiler usage"</a>
<li><strong>Previous message:</strong> <a href="6065.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>In reply to:</strong> <a href="6061.php">Jeff Squyres: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionalityand &quot;wrong&quot; compiler usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6067.php">Rainer Keller: "Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &quot;wrong&quot; compiler usage"</a>
<li><strong>Reply:</strong> <a href="6067.php">Rainer Keller: "Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &quot;wrong&quot; compiler usage"</a>
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
