<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 23:30:07 2009" -->
<!-- isoreceived="20090527033007" -->
<!-- sent="Tue, 26 May 2009 23:29:59 -0400" -->
<!-- isosent="20090527032959" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287" -->
<!-- id="200905262329.59594.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200905270303.n4R33JtN025062_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 23:29:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6101.php">Ralf Wildenhues: "[OMPI devel] faster autogen.sh"</a>
<li><strong>Previous message:</strong> <a href="6099.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6103.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>Reply:</strong> <a href="6103.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
please note, that with the separation of configure-flags into project-related 
<br>
sections, the one for openib-control-hdr-padding was moved.
<br>
<p>As Jeff noted, it is however most suitable in ompi_check_openib.m4.
<br>
However, I put this as an AC_ARG_ENABLE, instead of an AC_ARG_WITH.
<br>
Ralph, this is used by LANL, correct?
<br>
<p>With best regards,
<br>
Rainer
<br>
<p><p>On Tuesday 26 May 2009 11:03:19 pm rusraink_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;      #
</span><br>
<span class="quotelev1">&gt; +    # Add padding to OpenIB header
</span><br>
<span class="quotelev1">&gt; +    #
</span><br>
<span class="quotelev1">&gt; +    AC_ARG_ENABLE([openib-control-hdr-padding],
</span><br>
<span class="quotelev1">&gt; +        [AC_HELP_STRING([--enable-openib-control-hdr-padding],
</span><br>
<span class="quotelev1">&gt; +            [Add padding bytes to the openib control header
</span><br>
<span class="quotelev1">&gt; (default:disabled)])])
</span><br>
<p><span class="quotelev1">&gt; -#
</span><br>
<span class="quotelev1">&gt; -# Add padding to OpenIB header
</span><br>
<span class="quotelev1">&gt; -#
</span><br>
<span class="quotelev1">&gt; -AC_MSG_CHECKING([whether to add padding to the openib control header])
</span><br>
<span class="quotelev1">&gt; -AC_ARG_WITH([openib-control-hdr-padding],
</span><br>
<span class="quotelev1">&gt; -     [AC_HELP_STRING([--with-openib-control-hdr-padding],
</span><br>
<span class="quotelev1">&gt; -                     [Add padding bytes to the openib control header])])
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="6101.php">Ralf Wildenhues: "[OMPI devel] faster autogen.sh"</a>
<li><strong>Previous message:</strong> <a href="6099.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6103.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>Reply:</strong> <a href="6103.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
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
