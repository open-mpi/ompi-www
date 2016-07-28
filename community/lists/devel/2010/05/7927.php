<?
$subject_val = "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 14 12:24:42 2010" -->
<!-- isoreceived="20100514162442" -->
<!-- sent="Fri, 14 May 2010 09:24:35 -0700" -->
<!-- isosent="20100514162435" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk" -->
<!-- id="191DF551-ABCD-4846-AEA4-122029E68B6C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="13BFE45B-6805-4443-8150-F101CA74318E_at_osl.iu.edu" -->
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
<strong>Date:</strong> 2010-05-14 12:24:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7928.php">Oskar Enoksson: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7926.php">Christopher Samuel: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="7921.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7956.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7956.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 12, 2010, at 1:07 PM, Abhishek Kulkarni wrote:
<br>
<p><span class="quotelev1">&gt; Updated RFC (w/ discussed changes):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; [RFC 2/2] merge the OPAL SOS development branch into trunk
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHAT: Merge the OPAL SOS development branch into the OMPI trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: Bring over some of the work done to enhance error reporting capabilities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: opal/util/ and a few changes in the ORTE notifier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: May 17, Monday, COB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; REFERENCE BRANCHES: <a href="http://bitbucket.org/jsquyres/opal-sos-fixed/">http://bitbucket.org/jsquyres/opal-sos-fixed/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BACKGROUND:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The OPAL SOS framework tries to meet the following objectives:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Reduce the cascading error messages and the amount of code needed to
</span><br>
<span class="quotelev1">&gt; print an error message.
</span><br>
<span class="quotelev1">&gt; - Build and aggregate stacks of encountered errors and associate
</span><br>
<span class="quotelev1">&gt; related individual errors with each other.
</span><br>
<span class="quotelev1">&gt; - Allow registration of custom callbacks to intercept error events.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The SOS system provides an interface to log events of varying
</span><br>
<span class="quotelev1">&gt; severities.  These events are associated with an &quot;encoded&quot; error code
</span><br>
<span class="quotelev1">&gt; which can be used to refer to stacks of SOS events. When logging
</span><br>
<span class="quotelev1">&gt; events, they can also be transparently relayed to all the activated
</span><br>
<span class="quotelev1">&gt; notifier components.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The SOS system is described in detail on this wiki page:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/attachment/wiki/ErrorMessages/OPAL_SOS.pdf">https://svn.open-mpi.org/trac/ompi/attachment/wiki/ErrorMessages/OPAL_SOS.pdf</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CHANGES (since the last RFC):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Wrapped all hard-coded error-code checks (OMPI_ERR_* == ret),
</span><br>
<span class="quotelev1">&gt;  OPAL_SOS_GET_ERR_CODE(ret). There were about 30-40 such checks
</span><br>
<span class="quotelev1">&gt;  each in the OMPI and ORTE layer and about 15 in the OPAL layer.
</span><br>
<span class="quotelev1">&gt;  Since OPAL_SUCCESS is preserved by SOS, also changed calls of
</span><br>
<span class="quotelev1">&gt;  the form (OPAL_SUCCESS != ret) to (OPAL_ERROR == ret).
</span><br>
<p>You mean the other way around, right?
<br>
You changed code that previously looked like (OPAL_ERROR == ret) to (OPAL_SUCCESS != ret) where appropriate.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * If the error is an SOS-encoded error, ORTE_ERROR_LOG decodes
</span><br>
<span class="quotelev1">&gt;  the error, prints out the error stack and frees the errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 29, 2010, at 10:58 AM, Abhishek Kulkarni wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; [RFC 2/2]
</span><br>
<span class="quotelev2">&gt;&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Merge the OPAL SOS development branch into the OMPI trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY: Bring over some of the work done to enhance error reporting capabilities.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: opal/util/ and a few changes in the ORTE notifier.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: April 6, Wednesday, COB.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; REFERENCE BRANCHES: <a href="http://bitbucket.org/jsquyres/opal-sos-fixed/">http://bitbucket.org/jsquyres/opal-sos-fixed/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ======================================================================
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
<span class="quotelev2">&gt;&gt; - Reduce the cascading error messages and the amount of code needed to
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
<span class="quotelev2">&gt;&gt;  <a href="http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Feel free to comment and/or provide suggestions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ======================================================================
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
<li><strong>Next message:</strong> <a href="7928.php">Oskar Enoksson: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7926.php">Christopher Samuel: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="7921.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7956.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7956.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
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
