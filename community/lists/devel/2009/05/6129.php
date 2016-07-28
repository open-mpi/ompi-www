<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 19:53:55 2009" -->
<!-- isoreceived="20090527235355" -->
<!-- sent="Wed, 27 May 2009 17:53:49 -0600" -->
<!-- isosent="20090527235349" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287" -->
<!-- id="71d2d8cc0905271653g451f0d8bhd8c0ff60f1b1dcfd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="97D7D7D8-E42C-4586-8443-666C758E47ED_at_cisco.com" -->
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
<strong>Date:</strong> 2009-05-27 19:53:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6130.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Previous message:</strong> <a href="6128.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6110.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per our chat - we can manage it. My concern went to the &quot;why&quot; more than
<br>
anything else. The rationale for booleans to be --enable is fine, just not
<br>
widely known when I added this option.
<br>
<p><p>On Wed, May 27, 2009 at 7:19 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Note that this is a trunk change; no need or desire to bring it over to the
</span><br>
<span class="quotelev1">&gt; v1.3 branch.  It's intended to be for v1.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, this type of flag probably should have been --enable to begin with
</span><br>
<span class="quotelev1">&gt; (not --with), because it's a boolean.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will this cause significant headaches if the name changes in 1.5?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 27, 2009, at 6:47 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Yes it is - so I'll have to change all the platform files, and alert
</span><br>
<span class="quotelev2">&gt;&gt; people here as they will no longer be backwards compatible with the 1.3
</span><br>
<span class="quotelev2">&gt;&gt; series.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This will cause some bookkeeping headaches, so I do hope the change was
</span><br>
<span class="quotelev2">&gt;&gt; worth something and not just a &quot;tomato&quot; versus &quot;tomahto&quot; issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, May 26, 2009 at 9:29 PM, Rainer Keller &lt;keller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt; please note, that with the separation of configure-flags into
</span><br>
<span class="quotelev2">&gt;&gt; project-related
</span><br>
<span class="quotelev2">&gt;&gt; sections, the one for openib-control-hdr-padding was moved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As Jeff noted, it is however most suitable in ompi_check_openib.m4.
</span><br>
<span class="quotelev2">&gt;&gt; However, I put this as an AC_ARG_ENABLE, instead of an AC_ARG_WITH.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph, this is used by LANL, correct?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Rainer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday 26 May 2009 11:03:19 pm rusraink_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      #
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    # Add padding to OpenIB header
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    #
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +    AC_ARG_ENABLE([openib-control-hdr-padding],
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +        [AC_HELP_STRING([--enable-openib-control-hdr-padding],
</span><br>
<span class="quotelev3">&gt;&gt; &gt; +            [Add padding bytes to the openib control header
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (default:disabled)])])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -#
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -# Add padding to OpenIB header
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -#
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -AC_MSG_CHECKING([whether to add padding to the openib control header])
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -AC_ARG_WITH([openib-control-hdr-padding],
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -     [AC_HELP_STRING([--with-openib-control-hdr-padding],
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                     [Add padding bytes to the openib control
</span><br>
<span class="quotelev2">&gt;&gt; header])])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev2">&gt;&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6129/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6130.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Previous message:</strong> <a href="6128.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6110.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
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
