<?
$subject_val = "[OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 10:57:12 2010" -->
<!-- isoreceived="20100329145712" -->
<!-- sent="Mon, 29 Mar 2010 10:57:10 -0400 (EDT)" -->
<!-- isosent="20100329145710" -->
<!-- name="Abhishek Kulkarni" -->
<!-- email="adkulkar_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC 1/1: improvements to the &amp;quot;notifier&amp;quot; framework and ORTE WDC" -->
<!-- id="alpine.LRH.2.00.1003291055130.14304_at_tank.cs.indiana.edu" -->
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
<strong>Subject:</strong> [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC<br>
<strong>From:</strong> Abhishek Kulkarni (<em>adkulkar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 10:57:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7670.php">Abhishek Kulkarni: "[OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7668.php">Jeff Squyres: "[OMPI devel] Increased AM/AC/LT versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7671.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Reply:</strong> <a href="7671.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
======================================================================
<br>
[RFC 1/2]
<br>
======================================================================
<br>
<p>WHAT: Merge improvements to the &quot;notifier&quot; framework from the OPAL SOS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and the ORTE WDC mercurial branches into the SVN trunk.
<br>
<p>WHY: Some improvements and interface changes were put into the ORTE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;notifier framework during the development of the OPAL SOS[1] and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE WDC[2] branches.
<br>
<p>WHERE: Mostly restricted to ORTE notifier files and files using the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;notifier interface in OMPI.
<br>
<p>TIMEOUT: The weekend of April 2-3.
<br>
<p>REFERENCE MERCURIAL REPOS:
<br>
&nbsp;&nbsp;* SOS development: <a href="http://bitbucket.org/jsquyres/opal-sos-fixed/">http://bitbucket.org/jsquyres/opal-sos-fixed/</a>
<br>
&nbsp;&nbsp;* WDC development: <a href="http://bitbucket.org/derbeyn/orte-wdc-fixed/">http://bitbucket.org/derbeyn/orte-wdc-fixed/</a>
<br>
<p>======================================================================
<br>
<p>BACKGROUND:
<br>
<p>The notifier interface and its components underwent a host of
<br>
improvements and changes during the development of the SOS[1] and the
<br>
WDC[2] branches.  The ORTE WDC (Warning Data Capture) branch enables
<br>
accounting of events through the use of notifier interface, whereas
<br>
OPAL SOS uses the notifier interface by setting up callbacks to relay
<br>
out logged events.
<br>
<p>Some of the improvements include:
<br>
<p>- added more severity levels.
<br>
- &quot;ftb&quot; notifier improvements.
<br>
- &quot;command&quot; notifier improvements.
<br>
- added &quot;file&quot; notifier component
<br>
- changes in the notifier modules selection
<br>
- activate only a subset of the callbacks
<br>
&nbsp;&nbsp;(i.e. any combination of log, help, log_peer)
<br>
- define different output media for any given callback (e.g. log_peer
<br>
&nbsp;&nbsp;can be redirected to the syslog and smtp, while the show_help can be
<br>
&nbsp;&nbsp;sent to the hnp).
<br>
- ORTE_NOTIFIER_LOG_EVENT() (that accounts and warns about unusual
<br>
&nbsp;&nbsp;events)
<br>
<p>Much more information is available on these two wiki pages:
<br>
<p>[1] <a href="http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
<br>
[2] <a href="http://svn.open-mpi.org/trac/ompi/wiki/ORTEWDC">http://svn.open-mpi.org/trac/ompi/wiki/ORTEWDC</a>
<br>
<p>NOTE: This is first of a two-part RFC to bring the SOS and WDC branches
<br>
to the trunk. This only brings in the &quot;notifier&quot; changes from the SOS
<br>
branch, while the rest of the branch will be brought over after the
<br>
timeout of the second RFC.
<br>
<p>======================================================================
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7670.php">Abhishek Kulkarni: "[OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7668.php">Jeff Squyres: "[OMPI devel] Increased AM/AC/LT versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7671.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Reply:</strong> <a href="7671.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
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
