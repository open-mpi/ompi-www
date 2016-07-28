<?
$subject_val = "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 11:37:50 2010" -->
<!-- isoreceived="20100329153750" -->
<!-- sent="Mon, 29 Mar 2010 09:37:40 -0600" -->
<!-- isosent="20100329153740" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC 1/1: improvements to the &amp;quot;notifier&amp;quot; framework and ORTE WDC" -->
<!-- id="CFFEF65B-4C96-466F-AF76-3B82066E0CA9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.00.1003291055130.14304_at_tank.cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 11:37:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7672.php">Josh Hursey: "Re: [OMPI devel] process migration on openmpi"</a>
<li><strong>Previous message:</strong> <a href="7670.php">Abhishek Kulkarni: "[OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7669.php">Abhishek Kulkarni: "[OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7674.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Reply:</strong> <a href="7674.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Reply:</strong> <a href="7677.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Reply:</strong> <a href="7680.php">Nadia Derbey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework	and ORTE WDC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Abhishek
<br>
<p>I'm confused by the WDC wiki page, specifically the part about the new ORTE_NOTIFIER_DEFINE_EVENT macro. Are you saying that I (as the developer) have to provide this macro with a unique notifier id? So that would mean that ORTE/OMPI would have to maintain a global notifier id counter to ensure it is unique?
<br>
<p>If so, that seems really cumbersome. Could you please clarify?
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Mar 29, 2010, at 8:57 AM, Abhishek Kulkarni wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; [RFC 1/2]
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHAT: Merge improvements to the &quot;notifier&quot; framework from the OPAL SOS
</span><br>
<span class="quotelev1">&gt;     and the ORTE WDC mercurial branches into the SVN trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: Some improvements and interface changes were put into the ORTE
</span><br>
<span class="quotelev1">&gt;    notifier framework during the development of the OPAL SOS[1] and
</span><br>
<span class="quotelev1">&gt;    ORTE WDC[2] branches.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: Mostly restricted to ORTE notifier files and files using the
</span><br>
<span class="quotelev1">&gt;      notifier interface in OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: The weekend of April 2-3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; REFERENCE MERCURIAL REPOS:
</span><br>
<span class="quotelev1">&gt; * SOS development: <a href="http://bitbucket.org/jsquyres/opal-sos-fixed/">http://bitbucket.org/jsquyres/opal-sos-fixed/</a>
</span><br>
<span class="quotelev1">&gt; * WDC development: <a href="http://bitbucket.org/derbeyn/orte-wdc-fixed/">http://bitbucket.org/derbeyn/orte-wdc-fixed/</a>
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
<span class="quotelev1">&gt; The notifier interface and its components underwent a host of
</span><br>
<span class="quotelev1">&gt; improvements and changes during the development of the SOS[1] and the
</span><br>
<span class="quotelev1">&gt; WDC[2] branches.  The ORTE WDC (Warning Data Capture) branch enables
</span><br>
<span class="quotelev1">&gt; accounting of events through the use of notifier interface, whereas
</span><br>
<span class="quotelev1">&gt; OPAL SOS uses the notifier interface by setting up callbacks to relay
</span><br>
<span class="quotelev1">&gt; out logged events.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some of the improvements include:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - added more severity levels.
</span><br>
<span class="quotelev1">&gt; - &quot;ftb&quot; notifier improvements.
</span><br>
<span class="quotelev1">&gt; - &quot;command&quot; notifier improvements.
</span><br>
<span class="quotelev1">&gt; - added &quot;file&quot; notifier component
</span><br>
<span class="quotelev1">&gt; - changes in the notifier modules selection
</span><br>
<span class="quotelev1">&gt; - activate only a subset of the callbacks
</span><br>
<span class="quotelev1">&gt; (i.e. any combination of log, help, log_peer)
</span><br>
<span class="quotelev1">&gt; - define different output media for any given callback (e.g. log_peer
</span><br>
<span class="quotelev1">&gt; can be redirected to the syslog and smtp, while the show_help can be
</span><br>
<span class="quotelev1">&gt; sent to the hnp).
</span><br>
<span class="quotelev1">&gt; - ORTE_NOTIFIER_LOG_EVENT() (that accounts and warns about unusual
</span><br>
<span class="quotelev1">&gt; events)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Much more information is available on these two wiki pages:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev1">&gt; [2] <a href="http://svn.open-mpi.org/trac/ompi/wiki/ORTEWDC">http://svn.open-mpi.org/trac/ompi/wiki/ORTEWDC</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: This is first of a two-part RFC to bring the SOS and WDC branches
</span><br>
<span class="quotelev1">&gt; to the trunk. This only brings in the &quot;notifier&quot; changes from the SOS
</span><br>
<span class="quotelev1">&gt; branch, while the rest of the branch will be brought over after the
</span><br>
<span class="quotelev1">&gt; timeout of the second RFC.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7671/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7672.php">Josh Hursey: "Re: [OMPI devel] process migration on openmpi"</a>
<li><strong>Previous message:</strong> <a href="7670.php">Abhishek Kulkarni: "[OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="7669.php">Abhishek Kulkarni: "[OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7674.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Reply:</strong> <a href="7674.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Reply:</strong> <a href="7677.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Reply:</strong> <a href="7680.php">Nadia Derbey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework	and ORTE WDC"</a>
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
