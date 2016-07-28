<?
$subject_val = "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 12 16:07:46 2010" -->
<!-- isoreceived="20100512200746" -->
<!-- sent="Wed, 12 May 2010 16:07:44 -0400" -->
<!-- isosent="20100512200744" -->
<!-- name="Abhishek Kulkarni" -->
<!-- email="adkulkar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk" -->
<!-- id="13BFE45B-6805-4443-8150-F101CA74318E_at_osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.LRH.2.00.1003291057170.14304_at_tank.cs.indiana.edu" -->
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
<strong>Date:</strong> 2010-05-12 16:07:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7922.php">Oskar Enoksson: "[OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7920.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/03/7670.php">Abhishek Kulkarni: "[OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7927.php">Josh Hursey: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7927.php">Josh Hursey: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Updated RFC (w/ discussed changes):
<br>
<p>======================================================================
<br>
[RFC 2/2] merge the OPAL SOS development branch into trunk
<br>
======================================================================
<br>
<p>WHAT: Merge the OPAL SOS development branch into the OMPI trunk.
<br>
<p>WHY: Bring over some of the work done to enhance error reporting  
<br>
capabilities.
<br>
<p>WHERE: opal/util/ and a few changes in the ORTE notifier.
<br>
<p>TIMEOUT: May 17, Monday, COB.
<br>
<p>REFERENCE BRANCHES: <a href="http://bitbucket.org/jsquyres/opal-sos-fixed/">http://bitbucket.org/jsquyres/opal-sos-fixed/</a>
<br>
<p>======================================================================
<br>
<p>BACKGROUND:
<br>
<p>The OPAL SOS framework tries to meet the following objectives:
<br>
<p>- Reduce the cascading error messages and the amount of code needed to
<br>
print an error message.
<br>
- Build and aggregate stacks of encountered errors and associate
<br>
related individual errors with each other.
<br>
- Allow registration of custom callbacks to intercept error events.
<br>
<p>The SOS system provides an interface to log events of varying
<br>
severities.  These events are associated with an &quot;encoded&quot; error code
<br>
which can be used to refer to stacks of SOS events. When logging
<br>
events, they can also be transparently relayed to all the activated
<br>
notifier components.
<br>
<p>The SOS system is described in detail on this wiki page:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/attachment/wiki/ErrorMessages/OPAL_SOS.pdf">https://svn.open-mpi.org/trac/ompi/attachment/wiki/ErrorMessages/OPAL_SOS.pdf</a>
<br>
<p>CHANGES (since the last RFC):
<br>
<p>* Wrapped all hard-coded error-code checks (OMPI_ERR_* == ret),
<br>
&nbsp;&nbsp;&nbsp;OPAL_SOS_GET_ERR_CODE(ret). There were about 30-40 such checks
<br>
&nbsp;&nbsp;&nbsp;each in the OMPI and ORTE layer and about 15 in the OPAL layer.
<br>
&nbsp;&nbsp;&nbsp;Since OPAL_SUCCESS is preserved by SOS, also changed calls of
<br>
&nbsp;&nbsp;&nbsp;the form (OPAL_SUCCESS != ret) to (OPAL_ERROR == ret).
<br>
<p>* If the error is an SOS-encoded error, ORTE_ERROR_LOG decodes
<br>
&nbsp;&nbsp;&nbsp;the error, prints out the error stack and frees the errors.
<br>
<p>======================================================================
<br>
<p><p>On Mar 29, 2010, at 10:58 AM, Abhishek Kulkarni wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; [RFC 2/2]
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT: Merge the OPAL SOS development branch into the OMPI trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: Bring over some of the work done to enhance error reporting  
</span><br>
<span class="quotelev1">&gt; capabilities.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: opal/util/ and a few changes in the ORTE notifier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: April 6, Wednesday, COB.
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
<span class="quotelev1">&gt;   <a href="http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Feel free to comment and/or provide suggestions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ======================================================================
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
<li><strong>Next message:</strong> <a href="7922.php">Oskar Enoksson: "[OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7920.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/03/7670.php">Abhishek Kulkarni: "[OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7927.php">Josh Hursey: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<li><strong>Reply:</strong> <a href="7927.php">Josh Hursey: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
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
