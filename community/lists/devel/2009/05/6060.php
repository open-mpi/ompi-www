<?
$subject_val = "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 07:39:44 2009" -->
<!-- isoreceived="20090518113944" -->
<!-- sent="Mon, 18 May 2009 07:39:36 -0400" -->
<!-- isosent="20090518113936" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Warn user about deprecated MPI functionality and &amp;quot;wrong&amp;quot; compiler usage" -->
<!-- id="D6932D20-AFC5-4C44-BB9C-8FE6C87F5096_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200905180134.04045.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 07:39:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6061.php">Jeff Squyres: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionalityand &quot;wrong&quot; compiler usage"</a>
<li><strong>Previous message:</strong> <a href="6059.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>In reply to:</strong> <a href="6058.php">Rainer Keller: "[OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6061.php">Jeff Squyres: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionalityand &quot;wrong&quot; compiler usage"</a>
<li><strong>Reply:</strong> <a href="6061.php">Jeff Squyres: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionalityand &quot;wrong&quot; compiler usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think care must be taken on this front. While I know we don't like  
<br>
to admit it, there is no reason the C compilers have to match, and  
<br>
indeed good reasons they might not. For example, at LANL, we  
<br>
frequently compiled OMPI with GCC, then fixed up the wrapper compilers  
<br>
to use Icc or whatever, to work around optimizer bugs. This is  
<br>
functionality I don't think should be lost just to warn about  
<br>
deprecated functions.
<br>
<p>Brian
<br>
<p><pre>
-- 
Brian Barrett
There is an art . . . to flying. The knack lies in learning how to
throw yourself at the ground and miss.
On May 18, 2009, at 1:34, Rainer Keller &lt;keller_at_[hidden]&gt; wrote:
&gt; What:  Warn user about deprecated MPI functionality and &quot;wrong&quot;  
&gt; compiler usage
&gt;
&gt; Why:   Because deprecated MPI functions, are ... deprecated
&gt;
&gt; Where: On trunk
&gt;
&gt; When:  Apply on trunk before branching for v1.5 (it is user-visible)
&gt;
&gt; Timeout: 1 weeks - May 26, 2009 after the teleconf.
&gt;
&gt; ---------------------------------------------------------------------
&gt;
&gt; I'd like to propose a patch that addresses two issues:
&gt; - Users shoot themselves in the foot compiling with a different  
&gt; compiler
&gt;   than what was used to compile OMPI (think ABI)
&gt; - The MPI-2.1 std. defines several functions to be deprecated.
&gt;
&gt; This will warn Open MPI users, when accessing deprecated functions,  
&gt; even
&gt; giving a proper warning such as:
&gt;     &quot;MPI_TYPE_HVECTOR is superseded by MPI_TYPE_CREATE_HVECTOR&quot;
&gt; Also, now we may _warn_ when using a different compiler (gcc vs.  
&gt; intel vs.
&gt; pgcc)
&gt;
&gt;
&gt; This is achieved using __opal_attribute_deprecated__ and obviously  
&gt; needs to be
&gt; added into mpi.h, therefore being a user-visible change.
&gt;
&gt; This however has a few caveats:
&gt; 1.) Having Open MPI compiled with gcc and having users compiling  
&gt; with another
&gt; compiler, which is not supporting __attribute__((deprecated)) is  
&gt; going to be a
&gt; problem
&gt; 2.) The attribute is most useful, when having a proper description  
&gt; (as above)
&gt; -- which requires support for the optional argument to  
&gt; __deprecate__. This 
&gt; feature is offered only in gcc&gt;4.4 (see <a href="http://gcc.gnu.org/ml/gcc">http://gcc.gnu.org/ml/gcc</a>-
&gt; patches/2009-04/msg00087.html).
&gt;
&gt;
&gt; Therefore, I added a configure-check for the compiler's support of the
&gt; optional argument.
&gt; And we need to store, which compiler is used to compile Open MPI and  
&gt; at (user-
&gt; app) compile-time again check (within mpi.h), which compiler (and  
&gt; version!) is
&gt; being used.
&gt; This is then compared at user-level compile-time.
&gt;
&gt; To prevent users getting swamped with error msg. this can be turned  
&gt; off using
&gt; the configure-option:
&gt;  --enable-mpi-interface-warning
&gt; which turns on OMPI_WANT_MPI_INTERFACE_WARNING (default: DISabled), as
&gt; suggested by Jeff.
&gt;
&gt; The user can however override that with (check mpi2basic_tests):
&gt;    mpicc -DOMPI_WANT_MPI_INTERFACE_WARNING -c lalala.c
&gt; lots of warnings follow
&gt;
&gt; Please take a look into:
&gt; <a href="http://bitbucket.org/jsquyres/ompi-deprecated/">http://bitbucket.org/jsquyres/ompi-deprecated/</a>
&gt;
&gt;
&gt; With best regards,
&gt; Rainer
&gt;
&gt;
&gt; PS:
&gt; Also, we need to disable the warning, when building Open MPI  
&gt; itselve ;-)
&gt;
&gt; PPS:
&gt; Thanks to Paul Hargrove and Dan Bonachea for the GASnet file
&gt; portable_platform.h which offers the CPP magic to figure out  
&gt; compilers and
&gt; esp. compiler-versions.
&gt; -- 
&gt; --- 
&gt; ---------------------------------------------------------------------
&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6061.php">Jeff Squyres: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionalityand &quot;wrong&quot; compiler usage"</a>
<li><strong>Previous message:</strong> <a href="6059.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>In reply to:</strong> <a href="6058.php">Rainer Keller: "[OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6061.php">Jeff Squyres: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionalityand &quot;wrong&quot; compiler usage"</a>
<li><strong>Reply:</strong> <a href="6061.php">Jeff Squyres: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionalityand &quot;wrong&quot; compiler usage"</a>
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
