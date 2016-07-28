<?
$subject_val = "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 14:43:31 2010" -->
<!-- isoreceived="20100329184331" -->
<!-- sent="Mon, 29 Mar 2010 12:43:23 -0600" -->
<!-- isosent="20100329184323" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC 1/1: improvements to the &amp;quot;notifier&amp;quot; framework and ORTE WDC" -->
<!-- id="74B31F39-1831-4130-A88A-C42FC8345BB7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1003291751350.25977_at_jeaugeys.frec.bull.fr" -->
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
<strong>Date:</strong> 2010-03-29 14:43:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7677.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7675.php">Josh Hursey: "Re: [OMPI devel] Changing BTLs at runtime"</a>
<li><strong>In reply to:</strong> <a href="7674.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7678.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sylvain
<br>
<p>I think something like that is really required. Having to manage event identifiers across OMPI layers is going to prove impractical otherwise.
<br>
<p>Abhishek: I would suggest this be done prior to moving the branch into the trunk. Whether you use Sylvain's proposed solution or another is up to you. Frankly, I'm not entirely sure what this identifier really buys us, but if you believe it important, let's make it manageable.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Mar 29, 2010, at 10:04 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For now, I think that yes, this is a unique identifier. However, in my opinion, this could be improved in the future replacing it by a unique string.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something like :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define ORTE_NOTIFIER_DEFINE_EVENT(eventstr, associated_text) {
</span><br>
<span class="quotelev1">&gt; 	static int event = -1;
</span><br>
<span class="quotelev1">&gt; 	if (OPAL_UNLIKELY(event == -1) {
</span><br>
<span class="quotelev1">&gt; 		event = opal_sos_create_new_event(eventstr, associated_text);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	...&lt;increase event counter&gt;...
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This would move the event numbering to the OPAL layer, making it transparent to the developper.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just my 2 cents ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 29 Mar 2010, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Abhishek
</span><br>
<span class="quotelev2">&gt;&gt; I'm confused by the WDC wiki page, specifically the part about the new ORTE_NOTIFIER_DEFINE_EVENT macro. Are you saying
</span><br>
<span class="quotelev2">&gt;&gt; that I (as the developer) have to provide this macro with a unique notifier id? So that would mean that ORTE/OMPI would
</span><br>
<span class="quotelev2">&gt;&gt; have to maintain a global notifier id counter to ensure it is unique?
</span><br>
<span class="quotelev2">&gt;&gt; If so, that seems really cumbersome. Could you please clarify?
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 29, 2010, at 8:57 AM, Abhishek Kulkarni wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;      [RFC 1/2]
</span><br>
<span class="quotelev2">&gt;&gt;      ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      WHAT: Merge improvements to the &quot;notifier&quot; framework from the OPAL SOS
</span><br>
<span class="quotelev2">&gt;&gt;          and the ORTE WDC mercurial branches into the SVN trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      WHY: Some improvements and interface changes were put into the ORTE
</span><br>
<span class="quotelev2">&gt;&gt;         notifier framework during the development of the OPAL SOS[1] and
</span><br>
<span class="quotelev2">&gt;&gt;         ORTE WDC[2] branches.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      WHERE: Mostly restricted to ORTE notifier files and files using the
</span><br>
<span class="quotelev2">&gt;&gt;           notifier interface in OMPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      TIMEOUT: The weekend of April 2-3.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      REFERENCE MERCURIAL REPOS:
</span><br>
<span class="quotelev2">&gt;&gt;      * SOS development: <a href="http://bitbucket.org/jsquyres/opal-sos-fixed/">http://bitbucket.org/jsquyres/opal-sos-fixed/</a>
</span><br>
<span class="quotelev2">&gt;&gt;      * WDC development: <a href="http://bitbucket.org/derbeyn/orte-wdc-fixed/">http://bitbucket.org/derbeyn/orte-wdc-fixed/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      BACKGROUND:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      The notifier interface and its components underwent a host of
</span><br>
<span class="quotelev2">&gt;&gt;      improvements and changes during the development of the SOS[1] and the
</span><br>
<span class="quotelev2">&gt;&gt;      WDC[2] branches.  The ORTE WDC (Warning Data Capture) branch enables
</span><br>
<span class="quotelev2">&gt;&gt;      accounting of events through the use of notifier interface, whereas
</span><br>
<span class="quotelev2">&gt;&gt;      OPAL SOS uses the notifier interface by setting up callbacks to relay
</span><br>
<span class="quotelev2">&gt;&gt;      out logged events.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      Some of the improvements include:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      - added more severity levels.
</span><br>
<span class="quotelev2">&gt;&gt;      - &quot;ftb&quot; notifier improvements.
</span><br>
<span class="quotelev2">&gt;&gt;      - &quot;command&quot; notifier improvements.
</span><br>
<span class="quotelev2">&gt;&gt;      - added &quot;file&quot; notifier component
</span><br>
<span class="quotelev2">&gt;&gt;      - changes in the notifier modules selection
</span><br>
<span class="quotelev2">&gt;&gt;      - activate only a subset of the callbacks
</span><br>
<span class="quotelev2">&gt;&gt;      (i.e. any combination of log, help, log_peer)
</span><br>
<span class="quotelev2">&gt;&gt;      - define different output media for any given callback (e.g. log_peer
</span><br>
<span class="quotelev2">&gt;&gt;      can be redirected to the syslog and smtp, while the show_help can be
</span><br>
<span class="quotelev2">&gt;&gt;      sent to the hnp).
</span><br>
<span class="quotelev2">&gt;&gt;      - ORTE_NOTIFIER_LOG_EVENT() (that accounts and warns about unusual
</span><br>
<span class="quotelev2">&gt;&gt;      events)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      Much more information is available on these two wiki pages:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      [1] <a href="http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev2">&gt;&gt;      [2] <a href="http://svn.open-mpi.org/trac/ompi/wiki/ORTEWDC">http://svn.open-mpi.org/trac/ompi/wiki/ORTEWDC</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      NOTE: This is first of a two-part RFC to bring the SOS and WDC branches
</span><br>
<span class="quotelev2">&gt;&gt;      to the trunk. This only brings in the &quot;notifier&quot; changes from the SOS
</span><br>
<span class="quotelev2">&gt;&gt;      branch, while the rest of the branch will be brought over after the
</span><br>
<span class="quotelev2">&gt;&gt;      timeout of the second RFC.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;      _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;      devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="7677.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7675.php">Josh Hursey: "Re: [OMPI devel] Changing BTLs at runtime"</a>
<li><strong>In reply to:</strong> <a href="7674.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7678.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
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
