<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 09:19:59 2009" -->
<!-- isoreceived="20090527131959" -->
<!-- sent="Wed, 27 May 2009 09:19:50 -0400" -->
<!-- isosent="20090527131950" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287" -->
<!-- id="97D7D7D8-E42C-4586-8443-666C758E47ED_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0905270347r2e392f80ha35786625b9daa2b_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 09:19:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6111.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Previous message:</strong> <a href="6109.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>In reply to:</strong> <a href="6103.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6129.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>Reply:</strong> <a href="6129.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that this is a trunk change; no need or desire to bring it over  
<br>
to the v1.3 branch.  It's intended to be for v1.5.
<br>
<p>FWIW, this type of flag probably should have been --enable to begin  
<br>
with (not --with), because it's a boolean.
<br>
<p>Will this cause significant headaches if the name changes in 1.5?
<br>
<p><p>On May 27, 2009, at 6:47 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Yes it is - so I'll have to change all the platform files, and alert  
</span><br>
<span class="quotelev1">&gt; people here as they will no longer be backwards compatible with the  
</span><br>
<span class="quotelev1">&gt; 1.3 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will cause some bookkeeping headaches, so I do hope the change  
</span><br>
<span class="quotelev1">&gt; was worth something and not just a &quot;tomato&quot; versus &quot;tomahto&quot; issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 26, 2009 at 9:29 PM, Rainer Keller &lt;keller_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear all,
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
<span class="quotelev2">&gt; &gt; -AC_MSG_CHECKING([whether to add padding to the openib control  
</span><br>
<span class="quotelev1">&gt; header])
</span><br>
<span class="quotelev2">&gt; &gt; -AC_ARG_WITH([openib-control-hdr-padding],
</span><br>
<span class="quotelev2">&gt; &gt; -     [AC_HELP_STRING([--with-openib-control-hdr-padding],
</span><br>
<span class="quotelev2">&gt; &gt; -                     [Add padding bytes to the openib control  
</span><br>
<span class="quotelev1">&gt; header])])
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6111.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Previous message:</strong> <a href="6109.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>In reply to:</strong> <a href="6103.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6129.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>Reply:</strong> <a href="6129.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
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
