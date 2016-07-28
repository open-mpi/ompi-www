<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 06:47:28 2009" -->
<!-- isoreceived="20090527104728" -->
<!-- sent="Wed, 27 May 2009 04:47:22 -0600" -->
<!-- isosent="20090527104722" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287" -->
<!-- id="71d2d8cc0905270347r2e392f80ha35786625b9daa2b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200905262329.59594.keller_at_ornl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 06:47:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6104.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>Previous message:</strong> <a href="6102.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6100.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6110.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>Reply:</strong> <a href="6110.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes it is - so I'll have to change all the platform files, and alert people
<br>
here as they will no longer be backwards compatible with the 1.3 series.
<br>
<p>This will cause some bookkeeping headaches, so I do hope the change was
<br>
worth something and not just a &quot;tomato&quot; versus &quot;tomahto&quot; issue.
<br>
<p><p>On Tue, May 26, 2009 at 9:29 PM, Rainer Keller &lt;keller_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; please note, that with the separation of configure-flags into
</span><br>
<span class="quotelev1">&gt; project-related
</span><br>
<span class="quotelev1">&gt; sections, the one for openib-control-hdr-padding was moved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As Jeff noted, it is however most suitable in ompi_check_openib.m4.
</span><br>
<span class="quotelev1">&gt; However, I put this as an AC_ARG_ENABLE, instead of an AC_ARG_WITH.
</span><br>
<span class="quotelev1">&gt; Ralph, this is used by LANL, correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday 26 May 2009 11:03:19 pm rusraink_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;      #
</span><br>
<span class="quotelev2">&gt; &gt; +    # Add padding to OpenIB header
</span><br>
<span class="quotelev2">&gt; &gt; +    #
</span><br>
<span class="quotelev2">&gt; &gt; +    AC_ARG_ENABLE([openib-control-hdr-padding],
</span><br>
<span class="quotelev2">&gt; &gt; +        [AC_HELP_STRING([--enable-openib-control-hdr-padding],
</span><br>
<span class="quotelev2">&gt; &gt; +            [Add padding bytes to the openib control header
</span><br>
<span class="quotelev2">&gt; &gt; (default:disabled)])])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -#
</span><br>
<span class="quotelev2">&gt; &gt; -# Add padding to OpenIB header
</span><br>
<span class="quotelev2">&gt; &gt; -#
</span><br>
<span class="quotelev2">&gt; &gt; -AC_MSG_CHECKING([whether to add padding to the openib control header])
</span><br>
<span class="quotelev2">&gt; &gt; -AC_ARG_WITH([openib-control-hdr-padding],
</span><br>
<span class="quotelev2">&gt; &gt; -     [AC_HELP_STRING([--with-openib-control-hdr-padding],
</span><br>
<span class="quotelev2">&gt; &gt; -                     [Add padding bytes to the openib control header])])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev1">&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6103/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6104.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>Previous message:</strong> <a href="6102.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6100.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6110.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>Reply:</strong> <a href="6110.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
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
