<?
$subject_val = "[OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 10:58:25 2010" -->
<!-- isoreceived="20100329145825" -->
<!-- sent="Mon, 29 Mar 2010 10:58:24 -0400 (EDT)" -->
<!-- isosent="20100329145824" -->
<!-- name="Abhishek Kulkarni" -->
<!-- email="adkulkar_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk" -->
<!-- id="alpine.LRH.2.00.1003291057170.14304_at_tank.cs.indiana.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk<br>
<strong>From:</strong> Abhishek Kulkarni (<em>adkulkar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 10:58:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7671.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7669.php">Abhishek Kulkarni: "[OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7921.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7921.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
======================================================================
<br>
[RFC 2/2]
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
<p>TIMEOUT: April 6, Wednesday, COB.
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
&nbsp;&nbsp;print an error message.
<br>
- Build and aggregate stacks of encountered errors and associate
<br>
&nbsp;&nbsp;related individual errors with each other.
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
<br>
<p>Feel free to comment and/or provide suggestions.
<br>
<p>======================================================================
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7671.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7669.php">Abhishek Kulkarni: "[OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7921.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7921.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
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
