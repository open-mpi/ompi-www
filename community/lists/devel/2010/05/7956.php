<?
$subject_val = "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 21:20:23 2010" -->
<!-- isoreceived="20100518012023" -->
<!-- sent="Mon, 17 May 2010 21:20:21 -0400" -->
<!-- isosent="20100518012021" -->
<!-- name="Abhishek Kulkarni" -->
<!-- email="adkulkar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk" -->
<!-- id="825678EA-EAB4-4AAD-AEA7-E5F7CF05EBA7_at_osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="191DF551-ABCD-4846-AEA4-122029E68B6C_at_open-mpi.org" -->
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
<strong>From:</strong> Abhishek Kulkarni (<em>adkulkar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 21:20:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7957.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7955.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>In reply to:</strong> <a href="7927.php">Josh Hursey: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7963.php">Josh Hursey: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7963.php">Josh Hursey: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 14, 2010, at 12:24 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 12, 2010, at 1:07 PM, Abhishek Kulkarni wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Updated RFC (w/ discussed changes):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; [RFC 2/2] merge the OPAL SOS development branch into trunk
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Merge the OPAL SOS development branch into the OMPI trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: Bring over some of the work done to enhance error reporting  
</span><br>
<span class="quotelev2">&gt;&gt; capabilities.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: opal/util/ and a few changes in the ORTE notifier.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: May 17, Monday, COB.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; REFERENCE BRANCHES: <a href="http://bitbucket.org/jsquyres/opal-sos-fixed/">http://bitbucket.org/jsquyres/opal-sos-fixed/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BACKGROUND:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The OPAL SOS framework tries to meet the following objectives:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Reduce the cascading error messages and the amount of code needed  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; print an error message.
</span><br>
<span class="quotelev2">&gt;&gt; - Build and aggregate stacks of encountered errors and associate
</span><br>
<span class="quotelev2">&gt;&gt; related individual errors with each other.
</span><br>
<span class="quotelev2">&gt;&gt; - Allow registration of custom callbacks to intercept error events.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The SOS system provides an interface to log events of varying
</span><br>
<span class="quotelev2">&gt;&gt; severities.  These events are associated with an &quot;encoded&quot; error code
</span><br>
<span class="quotelev2">&gt;&gt; which can be used to refer to stacks of SOS events. When logging
</span><br>
<span class="quotelev2">&gt;&gt; events, they can also be transparently relayed to all the activated
</span><br>
<span class="quotelev2">&gt;&gt; notifier components.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The SOS system is described in detail on this wiki page:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/attachment/wiki/ErrorMessages/OPAL_SOS.pdf">https://svn.open-mpi.org/trac/ompi/attachment/wiki/ErrorMessages/OPAL_SOS.pdf</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CHANGES (since the last RFC):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Wrapped all hard-coded error-code checks (OMPI_ERR_* == ret),
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_SOS_GET_ERR_CODE(ret). There were about 30-40 such checks
</span><br>
<span class="quotelev2">&gt;&gt; each in the OMPI and ORTE layer and about 15 in the OPAL layer.
</span><br>
<span class="quotelev2">&gt;&gt; Since OPAL_SUCCESS is preserved by SOS, also changed calls of
</span><br>
<span class="quotelev2">&gt;&gt; the form (OPAL_SUCCESS != ret) to (OPAL_ERROR == ret).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You mean the other way around, right?
</span><br>
<span class="quotelev1">&gt; You changed code that previously looked like (OPAL_ERROR == ret) to  
</span><br>
<span class="quotelev1">&gt; (OPAL_SUCCESS != ret) where appropriate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yes, thanks for the correction! This (and ORTE WDC) is all in trunk  
<br>
now -- I've split the changes into smaller patches (see commits r23155  
<br>
- r23164) so that they are easier to sift through.
<br>
<p>Abhishek
<br>
<p><p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * If the error is an SOS-encoded error, ORTE_ERROR_LOG decodes
</span><br>
<span class="quotelev2">&gt;&gt; the error, prints out the error stack and frees the errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 29, 2010, at 10:58 AM, Abhishek Kulkarni wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [RFC 2/2]
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
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: April 6, Wednesday, COB.
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Feel free to comment and/or provide suggestions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
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
<li><strong>Next message:</strong> <a href="7957.php">Paul H. Hargrove: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7955.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>In reply to:</strong> <a href="7927.php">Josh Hursey: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7963.php">Josh Hursey: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7963.php">Josh Hursey: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
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
