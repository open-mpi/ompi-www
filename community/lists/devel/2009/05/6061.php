<?
$subject_val = "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionalityand &quot;wrong&quot; compiler usage";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 08:59:23 2009" -->
<!-- isoreceived="20090518125923" -->
<!-- sent="Mon, 18 May 2009 08:59:17 -0400" -->
<!-- isosent="20090518125917" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Warn user about deprecated MPI functionalityand &amp;quot;wrong&amp;quot; compiler usage" -->
<!-- id="33F94B32-D862-404A-A313-23DC0F892FA1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D6932D20-AFC5-4C44-BB9C-8FE6C87F5096_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Warn user about deprecated MPI functionalityand &quot;wrong&quot; compiler usage<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 08:59:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6062.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6060.php">Brian Barrett: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage"</a>
<li><strong>In reply to:</strong> <a href="6060.php">Brian Barrett: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6066.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &quot;wrong&quot; compiler usage"</a>
<li><strong>Reply:</strong> <a href="6066.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &quot;wrong&quot; compiler usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Agreed.  Being able to handle such scenarios properly is one of the  
<br>
reasons that Rainer and I are iterating on this in a mercurial branch.
<br>
<p><p><p>On May 18, 2009, at 7:39 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; I think care must be taken on this front. While I know we don't like
</span><br>
<span class="quotelev1">&gt; to admit it, there is no reason the C compilers have to match, and
</span><br>
<span class="quotelev1">&gt; indeed good reasons they might not. For example, at LANL, we
</span><br>
<span class="quotelev1">&gt; frequently compiled OMPI with GCC, then fixed up the wrapper compilers
</span><br>
<span class="quotelev1">&gt; to use Icc or whatever, to work around optimizer bugs. This is
</span><br>
<span class="quotelev1">&gt; functionality I don't think should be lost just to warn about
</span><br>
<span class="quotelev1">&gt; deprecated functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Brian Barrett
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is an art . . . to flying. The knack lies in learning how to
</span><br>
<span class="quotelev1">&gt; throw yourself at the ground and miss.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 18, 2009, at 1:34, Rainer Keller &lt;keller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; What:  Warn user about deprecated MPI functionality and &quot;wrong&quot;
</span><br>
<span class="quotelev2">&gt; &gt; compiler usage
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Why:   Because deprecated MPI functions, are ... deprecated
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Where: On trunk
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When:  Apply on trunk before branching for v1.5 (it is user-visible)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Timeout: 1 weeks - May 26, 2009 after the teleconf.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'd like to propose a patch that addresses two issues:
</span><br>
<span class="quotelev2">&gt; &gt; - Users shoot themselves in the foot compiling with a different
</span><br>
<span class="quotelev2">&gt; &gt; compiler
</span><br>
<span class="quotelev2">&gt; &gt;   than what was used to compile OMPI (think ABI)
</span><br>
<span class="quotelev2">&gt; &gt; - The MPI-2.1 std. defines several functions to be deprecated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This will warn Open MPI users, when accessing deprecated functions,
</span><br>
<span class="quotelev2">&gt; &gt; even
</span><br>
<span class="quotelev2">&gt; &gt; giving a proper warning such as:
</span><br>
<span class="quotelev2">&gt; &gt;     &quot;MPI_TYPE_HVECTOR is superseded by MPI_TYPE_CREATE_HVECTOR&quot;
</span><br>
<span class="quotelev2">&gt; &gt; Also, now we may _warn_ when using a different compiler (gcc vs.
</span><br>
<span class="quotelev2">&gt; &gt; intel vs.
</span><br>
<span class="quotelev2">&gt; &gt; pgcc)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is achieved using __opal_attribute_deprecated__ and obviously
</span><br>
<span class="quotelev2">&gt; &gt; needs to be
</span><br>
<span class="quotelev2">&gt; &gt; added into mpi.h, therefore being a user-visible change.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This however has a few caveats:
</span><br>
<span class="quotelev2">&gt; &gt; 1.) Having Open MPI compiled with gcc and having users compiling
</span><br>
<span class="quotelev2">&gt; &gt; with another
</span><br>
<span class="quotelev2">&gt; &gt; compiler, which is not supporting __attribute__((deprecated)) is
</span><br>
<span class="quotelev2">&gt; &gt; going to be a
</span><br>
<span class="quotelev2">&gt; &gt; problem
</span><br>
<span class="quotelev2">&gt; &gt; 2.) The attribute is most useful, when having a proper description
</span><br>
<span class="quotelev2">&gt; &gt; (as above)
</span><br>
<span class="quotelev2">&gt; &gt; -- which requires support for the optional argument to
</span><br>
<span class="quotelev2">&gt; &gt; __deprecate__. This
</span><br>
<span class="quotelev2">&gt; &gt; feature is offered only in gcc&gt;4.4 (see <a href="http://gcc.gnu.org/ml/gcc">http://gcc.gnu.org/ml/gcc</a>-
</span><br>
<span class="quotelev2">&gt; &gt; patches/2009-04/msg00087.html).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Therefore, I added a configure-check for the compiler's support of  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; optional argument.
</span><br>
<span class="quotelev2">&gt; &gt; And we need to store, which compiler is used to compile Open MPI and
</span><br>
<span class="quotelev2">&gt; &gt; at (user-
</span><br>
<span class="quotelev2">&gt; &gt; app) compile-time again check (within mpi.h), which compiler (and
</span><br>
<span class="quotelev2">&gt; &gt; version!) is
</span><br>
<span class="quotelev2">&gt; &gt; being used.
</span><br>
<span class="quotelev2">&gt; &gt; This is then compared at user-level compile-time.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To prevent users getting swamped with error msg. this can be turned
</span><br>
<span class="quotelev2">&gt; &gt; off using
</span><br>
<span class="quotelev2">&gt; &gt; the configure-option:
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-mpi-interface-warning
</span><br>
<span class="quotelev2">&gt; &gt; which turns on OMPI_WANT_MPI_INTERFACE_WARNING (default:  
</span><br>
<span class="quotelev1">&gt; DISabled), as
</span><br>
<span class="quotelev2">&gt; &gt; suggested by Jeff.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The user can however override that with (check mpi2basic_tests):
</span><br>
<span class="quotelev2">&gt; &gt;    mpicc -DOMPI_WANT_MPI_INTERFACE_WARNING -c lalala.c
</span><br>
<span class="quotelev2">&gt; &gt; lots of warnings follow
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please take a look into:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://bitbucket.org/jsquyres/ompi-deprecated/">http://bitbucket.org/jsquyres/ompi-deprecated/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Rainer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PS:
</span><br>
<span class="quotelev2">&gt; &gt; Also, we need to disable the warning, when building Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; itselve ;-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PPS:
</span><br>
<span class="quotelev2">&gt; &gt; Thanks to Paul Hargrove and Dan Bonachea for the GASnet file
</span><br>
<span class="quotelev2">&gt; &gt; portable_platform.h which offers the CPP magic to figure out
</span><br>
<span class="quotelev2">&gt; &gt; compilers and
</span><br>
<span class="quotelev2">&gt; &gt; esp. compiler-versions.
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev2">&gt; &gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev2">&gt; &gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6062.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6060.php">Brian Barrett: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage"</a>
<li><strong>In reply to:</strong> <a href="6060.php">Brian Barrett: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6066.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &quot;wrong&quot; compiler usage"</a>
<li><strong>Reply:</strong> <a href="6066.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: Warn user about deprecated MPI	functionalityand &quot;wrong&quot; compiler usage"</a>
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
