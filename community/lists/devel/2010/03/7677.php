<?
$subject_val = "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 19:52:51 2010" -->
<!-- isoreceived="20100329235251" -->
<!-- sent="Mon, 29 Mar 2010 19:52:48 -0400 (EDT)" -->
<!-- isosent="20100329235248" -->
<!-- name="Abhishek Kulkarni" -->
<!-- email="adkulkar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC 1/1: improvements to the &amp;quot;notifier&amp;quot; framework and ORTE WDC" -->
<!-- id="alpine.LRH.2.00.1003291951370.29120_at_tank.cs.indiana.edu" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="CFFEF65B-4C96-466F-AF76-3B82066E0CA9_at_open-mpi.org" -->
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
<strong>From:</strong> Abhishek Kulkarni (<em>adkulkar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 19:52:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7678.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7676.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>In reply to:</strong> <a href="7671.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7680.php">Nadia Derbey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework	and ORTE WDC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 29 Mar 2010, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi Abhishek I'm confused by the WDC wiki page, specifically the part 
</span><br>
<span class="quotelev1">&gt; about the new&#160;ORTE_NOTIFIER_DEFINE_EVENT macro. Are you saying that I 
</span><br>
<span class="quotelev1">&gt; (as the developer) have to provide this macro with a unique notifier id? 
</span><br>
<span class="quotelev1">&gt; So that would mean that ORTE/OMPI would have to maintain a global 
</span><br>
<span class="quotelev1">&gt; notifier id counter to ensure it is unique?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I was thinking more like having a list of predefined events in the
<br>
file orte/mca/notifier/notifier_event_types.h or adding to this
<br>
file when you define new events (analogous to defining error codes).
<br>
<p><span class="quotelev1">&gt; If so, that seems really cumbersome. Could you please clarify?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It seems slightly cumbersome to me too. But then it saves on the
<br>
lookup cost. I am copying Nadia on this (since she's really done
<br>
all the WDC work)
<br>
<p>Thanks,
<br>
Abhishek
<br>
<p><span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 29, 2010, at 8:57 AM, Abhishek Kulkarni wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       ======================================================================
</span><br>
<span class="quotelev1">&gt;       [RFC 1/2]
</span><br>
<span class="quotelev1">&gt;       ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       WHAT: Merge improvements to the &quot;notifier&quot; framework from the OPAL SOS
</span><br>
<span class="quotelev1">&gt;       &#160;&#160;&#160;&#160;and the ORTE WDC mercurial branches into the SVN trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       WHY: Some improvements and interface changes were put into the ORTE
</span><br>
<span class="quotelev1">&gt;       &#160;&#160;&#160;notifier framework during the development of the OPAL SOS[1] and
</span><br>
<span class="quotelev1">&gt;       &#160;&#160;&#160;ORTE WDC[2] branches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       WHERE: Mostly restricted to ORTE notifier files and files using the
</span><br>
<span class="quotelev1">&gt;       &#160;&#160;&#160;&#160;&#160;notifier interface in OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       TIMEOUT: The weekend of April 2-3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       REFERENCE MERCURIAL REPOS:
</span><br>
<span class="quotelev1">&gt;       * SOS development: <a href="http://bitbucket.org/jsquyres/opal-sos-fixed/">http://bitbucket.org/jsquyres/opal-sos-fixed/</a>
</span><br>
<span class="quotelev1">&gt;       * WDC development: <a href="http://bitbucket.org/derbeyn/orte-wdc-fixed/">http://bitbucket.org/derbeyn/orte-wdc-fixed/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       BACKGROUND:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       The notifier interface and its components underwent a host of
</span><br>
<span class="quotelev1">&gt;       improvements and changes during the development of the SOS[1] and the
</span><br>
<span class="quotelev1">&gt;       WDC[2] branches. &#160;The ORTE WDC (Warning Data Capture) branch enables
</span><br>
<span class="quotelev1">&gt;       accounting of events through the use of notifier interface, whereas
</span><br>
<span class="quotelev1">&gt;       OPAL SOS uses the notifier interface by setting up callbacks to relay
</span><br>
<span class="quotelev1">&gt;       out logged events.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Some of the improvements include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       - added more severity levels.
</span><br>
<span class="quotelev1">&gt;       - &quot;ftb&quot; notifier improvements.
</span><br>
<span class="quotelev1">&gt;       - &quot;command&quot; notifier improvements.
</span><br>
<span class="quotelev1">&gt;       - added &quot;file&quot; notifier component
</span><br>
<span class="quotelev1">&gt;       - changes in the notifier modules selection
</span><br>
<span class="quotelev1">&gt;       - activate only a subset of the callbacks
</span><br>
<span class="quotelev1">&gt;       (i.e. any combination of log, help, log_peer)
</span><br>
<span class="quotelev1">&gt;       - define different output media for any given callback (e.g. log_peer
</span><br>
<span class="quotelev1">&gt;       can be redirected to the syslog and smtp, while the show_help can be
</span><br>
<span class="quotelev1">&gt;       sent to the hnp).
</span><br>
<span class="quotelev1">&gt;       - ORTE_NOTIFIER_LOG_EVENT() (that accounts and warns about unusual
</span><br>
<span class="quotelev1">&gt;       events)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Much more information is available on these two wiki pages:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       [1] <a href="http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev1">&gt;       [2] <a href="http://svn.open-mpi.org/trac/ompi/wiki/ORTEWDC">http://svn.open-mpi.org/trac/ompi/wiki/ORTEWDC</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       NOTE: This is first of a two-part RFC to bring the SOS and WDC branches
</span><br>
<span class="quotelev1">&gt;       to the trunk. This only brings in the &quot;notifier&quot; changes from the SOS
</span><br>
<span class="quotelev1">&gt;       branch, while the rest of the branch will be brought over after the
</span><br>
<span class="quotelev1">&gt;       timeout of the second RFC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       ======================================================================
</span><br>
<span class="quotelev1">&gt;       _______________________________________________
</span><br>
<span class="quotelev1">&gt;       devel mailing list
</span><br>
<span class="quotelev1">&gt;       devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7678.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7676.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>In reply to:</strong> <a href="7671.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7680.php">Nadia Derbey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework	and ORTE WDC"</a>
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
