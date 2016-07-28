<?
$subject_val = "Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &quot;wrong&quot; compiler usage";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 17:08:01 2009" -->
<!-- isoreceived="20090518210801" -->
<!-- sent="Mon, 18 May 2009 17:07:26 -0400" -->
<!-- isosent="20090518210726" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &amp;quot;wrong&amp;quot; compiler usage" -->
<!-- id="200905181707.26826.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4A11B4D4.2040901_at_lbl.gov" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 17:07:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6068.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Previous message:</strong> <a href="6066.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &quot;wrong&quot; compiler usage"</a>
<li><strong>In reply to:</strong> <a href="6066.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &quot;wrong&quot; compiler usage"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Paul &amp; all,
<br>
On Monday 18 May 2009 03:19:48 pm Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; IMHO there are two distinct issues being entangled here.
</span><br>
<span class="quotelev1">&gt;   1) Flagging deprecated functionality
</span><br>
<span class="quotelev1">&gt;   2) Informing the user about a change of compiler (possibly as an
</span><br>
<span class="quotelev1">&gt; #error or #warning)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand why solving #1 requires detecting the compiler change to
</span><br>
<span class="quotelev1">&gt; avoid a &quot;bad attribute&quot; (see BACKGROUND, below). 
</span><br>
That's good. I wasn't aware of GASnet playing with attribute; ah it's using 
<br>
malloc and pure/const and format.
<br>
<p><span class="quotelev1">&gt; However, I don't see 
</span><br>
<span class="quotelev1">&gt; why this detection requires that one report it to the user.  In the 
</span><br>
<span class="quotelev1">&gt; naive implementation, a change of compiler would just silently loose the 
</span><br>
<span class="quotelev1">&gt; ability to warn about deprecated functionality.  No other user-visible 
</span><br>
<span class="quotelev1">&gt; change in behavior would be required if the compiler were to change.  
</span><br>
<span class="quotelev1">&gt; So, my recommendation is that Rainer and Jeff narrow their RFC to cover 
</span><br>
<span class="quotelev1">&gt; just #1, and float an independent RFC for #2 only after #1 has been well 
</span><br>
<span class="quotelev1">&gt; tested.
</span><br>
That's fine with me.
<br>
The two issues are separate, subsuming them under the same flag warning on/off 
<br>
is not too complicated neither for users nor admins.
<br>
<p>The current way is that users do not get warned (the previous default).
<br>
Admins may configure-time select the warning on, users vice-versa can compile-
<br>
time select it off (-DOMPI_WANT_MPI_INTERFACE_WARNING=0)
<br>
<p>But again I don't have harsh feelings, _not_ to warn in case of #2.
<br>
Yes, there are users who _need_ to use different compilers, all is fine (in 
<br>
case when we're playing regparm tricks, where the specific compiler needs to 
<br>
be used in mpicc, then we're not fine anymore ;-))...
<br>
<p>With best regards,
<br>
Rainer
<br>
<p><p><p><p><p><p><span class="quotelev1">&gt; BACKGROUND:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As Rainer acknowledged, this is based on some preprocessor code we've
</span><br>
<span class="quotelev1">&gt; been using in GASNet for some time now.  Among other things, we use this
</span><br>
<span class="quotelev1">&gt; code to ensure that attributes that were detected at configure time are
</span><br>
<span class="quotelev1">&gt; still guaranteed valid at compile time.  A simplified example from GASNet:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* detect when the compiler in use differs from the one tested by
</span><br>
<span class="quotelev1">&gt; configure,
</span><br>
<span class="quotelev1">&gt;     * indicating some of the configure-detected results may be invalid
</span><br>
<span class="quotelev1">&gt; for this compilation
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;   #include &lt;portable_platform.h&gt;
</span><br>
<span class="quotelev1">&gt;   #if PLATFORM_COMPILER_ID != GASNETI_PLATFORM_COMPILER_ID || \
</span><br>
<span class="quotelev1">&gt;        PLATFORM_COMPILER_VERSION != GASNETI_PLATFORM_COMPILER_VERSION
</span><br>
<span class="quotelev1">&gt;      #define GASNETI_CONFIGURE_MISMATCH 1
</span><br>
<span class="quotelev1">&gt;   #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    #if GASNETI_CONFIGURE_MISMATCH
</span><br>
<span class="quotelev1">&gt;        #define GASNETI_ATTRIBUTE_FOO /* Not safe since compiler has
</span><br>
<span class="quotelev1">&gt; changed */
</span><br>
<span class="quotelev1">&gt;    #elif  HAVE_GCC_ATTRIBUTE_FOO
</span><br>
<span class="quotelev1">&gt;        #define GASNETI_ATTRIBUTE_FOO __attribute__(__foo__)
</span><br>
<span class="quotelev1">&gt;    #else
</span><br>
<span class="quotelev1">&gt;        #define GASNETI_ATTRIBUTE_FOO /* Not detected at configure time */
</span><br>
<span class="quotelev1">&gt;    #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Agreed.  Being able to handle such scenarios properly is one of the
</span><br>
<span class="quotelev2">&gt; &gt; reasons that Rainer and I are iterating on this in a mercurial branch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 18, 2009, at 7:39 AM, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think care must be taken on this front. While I know we don't like
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to admit it, there is no reason the C compilers have to match, and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; indeed good reasons they might not. For example, at LANL, we
</span><br>
<span class="quotelev3">&gt; &gt;&gt; frequently compiled OMPI with GCC, then fixed up the wrapper compilers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to use Icc or whatever, to work around optimizer bugs. This is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; functionality I don't think should be lost just to warn about
</span><br>
<span class="quotelev3">&gt; &gt;&gt; deprecated functions.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brian Barrett
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There is an art . . . to flying. The knack lies in learning how to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; throw yourself at the ground and miss.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 18, 2009, at 1:34, Rainer Keller &lt;keller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; What:  Warn user about deprecated MPI functionality and &quot;wrong&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; compiler usage
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Why:   Because deprecated MPI functions, are ... deprecated
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Where: On trunk
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; When:  Apply on trunk before branching for v1.5 (it is user-visible)
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Timeout: 1 weeks - May 26, 2009 after the teleconf.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I'd like to propose a patch that addresses two issues:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; - Users shoot themselves in the foot compiling with a different
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; compiler
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   than what was used to compile OMPI (think ABI)
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; - The MPI-2.1 std. defines several functions to be deprecated.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; This will warn Open MPI users, when accessing deprecated functions,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; even
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; giving a proper warning such as:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;     &quot;MPI_TYPE_HVECTOR is superseded by MPI_TYPE_CREATE_HVECTOR&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Also, now we may _warn_ when using a different compiler (gcc vs.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; intel vs.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; pgcc)
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; This is achieved using __opal_attribute_deprecated__ and obviously
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; needs to be
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; added into mpi.h, therefore being a user-visible change.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; This however has a few caveats:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 1.) Having Open MPI compiled with gcc and having users compiling
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; with another
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; compiler, which is not supporting __attribute__((deprecated)) is
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; going to be a
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; problem
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 2.) The attribute is most useful, when having a proper description
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; (as above)
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; -- which requires support for the optional argument to
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; __deprecate__. This
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; feature is offered only in gcc&gt;4.4 (see <a href="http://gcc.gnu.org/ml/gcc">http://gcc.gnu.org/ml/gcc</a>-
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; patches/2009-04/msg00087.html).
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Therefore, I added a configure-check for the compiler's support of the
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; optional argument.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; And we need to store, which compiler is used to compile Open MPI and
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; at (user-
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; app) compile-time again check (within mpi.h), which compiler (and
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; version!) is
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; being used.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; This is then compared at user-level compile-time.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; To prevent users getting swamped with error msg. this can be turned
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; off using
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; the configure-option:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;  --enable-mpi-interface-warning
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; which turns on OMPI_WANT_MPI_INTERFACE_WARNING (default: DISabled), as
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; suggested by Jeff.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; The user can however override that with (check mpi2basic_tests):
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;    mpicc -DOMPI_WANT_MPI_INTERFACE_WARNING -c lalala.c
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; lots of warnings follow
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Please take a look into:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://bitbucket.org/jsquyres/ompi-deprecated/">http://bitbucket.org/jsquyres/ompi-deprecated/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; With best regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Rainer
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; PS:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Also, we need to disable the warning, when building Open MPI
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; itselve ;-)
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; PPS:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Thanks to Paul Hargrove and Dan Bonachea for the GASnet file
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; portable_platform.h which offers the CPP magic to figure out
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; compilers and
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; esp. compiler-versions.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ---
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6068.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Previous message:</strong> <a href="6066.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &quot;wrong&quot; compiler usage"</a>
<li><strong>In reply to:</strong> <a href="6066.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &quot;wrong&quot; compiler usage"</a>
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
