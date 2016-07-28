<?
$subject_val = "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 18 09:20:30 2010" -->
<!-- isoreceived="20100518132030" -->
<!-- sent="Tue, 18 May 2010 09:20:26 -0400" -->
<!-- isosent="20100518132026" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk" -->
<!-- id="8607F5B9-57B1-49E8-81FA-60AE05640A79_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="825678EA-EAB4-4AAD-AEA7-E5F7CF05EBA7_at_osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-18 09:20:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7964.php">Jeff Squyres: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branchinto trunk"</a>
<li><strong>Previous message:</strong> <a href="7962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="7956.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7964.php">Jeff Squyres: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branchinto trunk"</a>
<li><strong>Reply:</strong> <a href="7964.php">Jeff Squyres: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branchinto trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Abhishek and Jeff,
<br>
<p>Awesome! Thanks for all your hard work maintaining and shepherding  
<br>
this branch into the trunk.
<br>
<p>-- Josh
<br>
<p>On May 17, 2010, at 9:20 PM, Abhishek Kulkarni wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 14, 2010, at 12:24 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 12, 2010, at 1:07 PM, Abhishek Kulkarni wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Updated RFC (w/ discussed changes):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [RFC 2/2] merge the OPAL SOS development branch into trunk
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Merge the OPAL SOS development branch into the OMPI trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: Bring over some of the work done to enhance error reporting  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; capabilities.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: opal/util/ and a few changes in the ORTE notifier.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: May 17, Monday, COB.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; REFERENCE BRANCHES: <a href="http://bitbucket.org/jsquyres/opal-sos-fixed/">http://bitbucket.org/jsquyres/opal-sos-fixed/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BACKGROUND:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The OPAL SOS framework tries to meet the following objectives:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Reduce the cascading error messages and the amount of code  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; needed to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; print an error message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Build and aggregate stacks of encountered errors and associate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; related individual errors with each other.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Allow registration of custom callbacks to intercept error events.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The SOS system provides an interface to log events of varying
</span><br>
<span class="quotelev3">&gt;&gt;&gt; severities.  These events are associated with an &quot;encoded&quot; error  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which can be used to refer to stacks of SOS events. When logging
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events, they can also be transparently relayed to all the activated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; notifier components.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The SOS system is described in detail on this wiki page:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/attachment/wiki/ErrorMessages/OPAL_SOS.pdf">https://svn.open-mpi.org/trac/ompi/attachment/wiki/ErrorMessages/OPAL_SOS.pdf</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CHANGES (since the last RFC):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Wrapped all hard-coded error-code checks (OMPI_ERR_* == ret),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_SOS_GET_ERR_CODE(ret). There were about 30-40 such checks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each in the OMPI and ORTE layer and about 15 in the OPAL layer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since OPAL_SUCCESS is preserved by SOS, also changed calls of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the form (OPAL_SUCCESS != ret) to (OPAL_ERROR == ret).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You mean the other way around, right?
</span><br>
<span class="quotelev2">&gt;&gt; You changed code that previously looked like (OPAL_ERROR == ret) to  
</span><br>
<span class="quotelev2">&gt;&gt; (OPAL_SUCCESS != ret) where appropriate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, thanks for the correction! This (and ORTE WDC) is all in trunk  
</span><br>
<span class="quotelev1">&gt; now -- I've split the changes into smaller patches (see commits  
</span><br>
<span class="quotelev1">&gt; r23155 - r23164) so that they are easier to sift through.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Abhishek
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * If the error is an SOS-encoded error, ORTE_ERROR_LOG decodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the error, prints out the error stack and frees the errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 29, 2010, at 10:58 AM, Abhishek Kulkarni wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [RFC 2/2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHAT: Merge the OPAL SOS development branch into the OMPI trunk.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHY: Bring over some of the work done to enhance error reporting  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; capabilities.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHERE: opal/util/ and a few changes in the ORTE notifier.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TIMEOUT: April 6, Wednesday, COB.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; REFERENCE BRANCHES: <a href="http://bitbucket.org/jsquyres/opal-sos-fixed/">http://bitbucket.org/jsquyres/opal-sos-fixed/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BACKGROUND:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The OPAL SOS framework tries to meet the following objectives:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Reduce the cascading error messages and the amount of code  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; needed to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; print an error message.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Build and aggregate stacks of encountered errors and associate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; related individual errors with each other.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Allow registration of custom callbacks to intercept error events.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The SOS system provides an interface to log events of varying
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; severities.  These events are associated with an &quot;encoded&quot; error  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which can be used to refer to stacks of SOS events. When logging
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; events, they can also be transparently relayed to all the activated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; notifier components.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The SOS system is described in detail on this wiki page:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Feel free to comment and/or provide suggestions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7964.php">Jeff Squyres: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branchinto trunk"</a>
<li><strong>Previous message:</strong> <a href="7962.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="7956.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7964.php">Jeff Squyres: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branchinto trunk"</a>
<li><strong>Reply:</strong> <a href="7964.php">Jeff Squyres: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branchinto trunk"</a>
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
