<?
$subject_val = "[OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 01:34:40 2009" -->
<!-- isoreceived="20090518053440" -->
<!-- sent="Mon, 18 May 2009 01:34:03 -0400" -->
<!-- isosent="20090518053403" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Warn user about deprecated MPI functionality and &amp;quot;wrong&amp;quot; compiler usage" -->
<!-- id="200905180134.04045.keller_at_ornl.gov" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 01:34:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6059.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6057.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6060.php">Brian Barrett: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage"</a>
<li><strong>Reply:</strong> <a href="6060.php">Brian Barrett: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What:  Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage
<br>
<p>Why:   Because deprecated MPI functions, are ... deprecated
<br>
<p>Where: On trunk
<br>
<p>When:  Apply on trunk before branching for v1.5 (it is user-visible)
<br>
<p>Timeout: 1 weeks - May 26, 2009 after the teleconf.
<br>
<p>---------------------------------------------------------------------
<br>
<p>I'd like to propose a patch that addresses two issues:
<br>
&nbsp;- Users shoot themselves in the foot compiling with a different compiler
<br>
&nbsp;&nbsp;&nbsp;than what was used to compile OMPI (think ABI)
<br>
&nbsp;- The MPI-2.1 std. defines several functions to be deprecated.
<br>
<p>This will warn Open MPI users, when accessing deprecated functions, even 
<br>
giving a proper warning such as:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;MPI_TYPE_HVECTOR is superseded by MPI_TYPE_CREATE_HVECTOR&quot;
<br>
Also, now we may _warn_ when using a different compiler (gcc vs. intel vs. 
<br>
pgcc)
<br>
<p><p>This is achieved using __opal_attribute_deprecated__ and obviously needs to be 
<br>
added into mpi.h, therefore being a user-visible change.
<br>
<p>This however has a few caveats:
<br>
1.) Having Open MPI compiled with gcc and having users compiling with another 
<br>
compiler, which is not supporting __attribute__((deprecated)) is going to be a 
<br>
problem
<br>
2.) The attribute is most useful, when having a proper description (as above) 
<br>
-- which requires support for the optional argument to __deprecate__. This 
<br>
feature is offered only in gcc&gt;4.4 (see <a href="http://gcc.gnu.org/ml/gcc">http://gcc.gnu.org/ml/gcc</a>-
<br>
patches/2009-04/msg00087.html).
<br>
<p><p>Therefore, I added a configure-check for the compiler's support of the 
<br>
optional argument.
<br>
And we need to store, which compiler is used to compile Open MPI and at (user-
<br>
app) compile-time again check (within mpi.h), which compiler (and version!) is 
<br>
being used.
<br>
This is then compared at user-level compile-time.
<br>
<p>To prevent users getting swamped with error msg. this can be turned off using 
<br>
the configure-option:
<br>
&nbsp;&nbsp;--enable-mpi-interface-warning
<br>
which turns on OMPI_WANT_MPI_INTERFACE_WARNING (default: DISabled), as 
<br>
suggested by Jeff.
<br>
<p>The user can however override that with (check mpi2basic_tests):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpicc -DOMPI_WANT_MPI_INTERFACE_WARNING -c lalala.c
<br>
lots of warnings follow
<br>
<p>Please take a look into:
<br>
<a href="http://bitbucket.org/jsquyres/ompi-deprecated/">http://bitbucket.org/jsquyres/ompi-deprecated/</a>
<br>
<p><p>With best regards,
<br>
Rainer
<br>
<p><p>PS:
<br>
Also, we need to disable the warning, when building Open MPI itselve ;-)
<br>
<p>PPS:
<br>
Thanks to Paul Hargrove and Dan Bonachea for the GASnet file 
<br>
portable_platform.h which offers the CPP magic to figure out compilers and 
<br>
esp. compiler-versions.
<br>
<pre>
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
<li><strong>Next message:</strong> <a href="6059.php">Ashley Pittman: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6057.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6060.php">Brian Barrett: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage"</a>
<li><strong>Reply:</strong> <a href="6060.php">Brian Barrett: "Re: [OMPI devel] RFC: Warn user about deprecated MPI functionality and &quot;wrong&quot; compiler usage"</a>
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
