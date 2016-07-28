<?
$subject_val = "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 19:53:52 2010" -->
<!-- isoreceived="20100329235352" -->
<!-- sent="Mon, 29 Mar 2010 19:53:51 -0400 (EDT)" -->
<!-- isosent="20100329235351" -->
<!-- name="Abhishek Kulkarni" -->
<!-- email="adkulkar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC 1/1: improvements to the &amp;quot;notifier&amp;quot; framework and ORTE WDC" -->
<!-- id="alpine.LRH.2.00.1003291953040.29120_at_tank.cs.indiana.edu" -->
<!-- charset="ISO-8859-15" -->
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
<strong>From:</strong> Abhishek Kulkarni (<em>adkulkar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 19:53:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7679.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7677.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>In reply to:</strong> <a href="7674.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7679.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Reply:</strong> <a href="7679.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Reply:</strong> <a href="7682.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 29 Mar 2010, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For now, I think that yes, this is a unique identifier. However, in my 
</span><br>
<span class="quotelev1">&gt; opinion, this could be improved in the future replacing it by a unique 
</span><br>
<span class="quotelev1">&gt; string.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Something like :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define ORTE_NOTIFIER_DEFINE_EVENT(eventstr, associated_text) {
</span><br>
<span class="quotelev1">&gt; 	 static int event = -1;
</span><br>
<span class="quotelev1">&gt; 	 if (OPAL_UNLIKELY(event == -1) {
</span><br>
<span class="quotelev1">&gt; 	 	event = opal_sos_create_new_event(eventstr, associated_text);
</span><br>
<span class="quotelev1">&gt; 	 }
</span><br>
<span class="quotelev1">&gt; 	 ...&lt;increase event counter&gt;...
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would move the event numbering to the OPAL layer, making it transparent 
</span><br>
<span class="quotelev1">&gt; to the developper.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is a good suggestion, but then I think we end up relying on run-time 
<br>
generation of the event numbers and have to pay the extra cost of looking 
<br>
up the event in a list/array/hash each time we log the event.
<br>
<p><span class="quotelev1">&gt;From what I understand, and from the discussions that took place when this 
</span><br>
proposal was first put up on the devel list, is that since the event 
<br>
tracing hooks could lie in the critical path, we want the overhead to be 
<br>
as low as possible. By manually defining the unique identifiers, we can 
<br>
generate the event tracing macro at compile-time and have a minimal 
<br>
tracing impact.
<br>
<p>My 2&#162; ofcourse.
<br>
<p>Thanks
<br>
Abhishek
<br>
<p><span class="quotelev1">&gt; Just my 2 cents ...
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
<span class="quotelev2">&gt;&gt;  Hi Abhishek
</span><br>
<span class="quotelev2">&gt;&gt;  I'm confused by the WDC wiki page, specifically the part about the
</span><br>
<span class="quotelev2">&gt;&gt;  new&#160;ORTE_NOTIFIER_DEFINE_EVENT macro. Are you saying
</span><br>
<span class="quotelev2">&gt;&gt;  that I (as the developer) have to provide this macro with a unique
</span><br>
<span class="quotelev2">&gt;&gt;  notifier id? So that would mean that ORTE/OMPI would
</span><br>
<span class="quotelev2">&gt;&gt;  have to maintain a global notifier id counter to ensure it is unique?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  If so, that seems really cumbersome. Could you please clarify?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks
</span><br>
<span class="quotelev2">&gt;&gt;  Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On Mar 29, 2010, at 8:57 AM, Abhishek Kulkarni wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;        [RFC 1/2]
</span><br>
<span class="quotelev2">&gt;&gt;        ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        WHAT: Merge improvements to the &quot;notifier&quot; framework from the OPAL
</span><br>
<span class="quotelev2">&gt;&gt;        SOS
</span><br>
<span class="quotelev2">&gt;&gt;        &#160;&#160;&#160;&#160;and the ORTE WDC mercurial branches into the SVN trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        WHY: Some improvements and interface changes were put into the ORTE
</span><br>
<span class="quotelev2">&gt;&gt;        &#160;&#160;&#160;notifier framework during the development of the OPAL SOS[1] and
</span><br>
<span class="quotelev2">&gt;&gt;        &#160;&#160;&#160;ORTE WDC[2] branches.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        WHERE: Mostly restricted to ORTE notifier files and files using the
</span><br>
<span class="quotelev2">&gt;&gt;        &#160;&#160;&#160;&#160;&#160;notifier interface in OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        TIMEOUT: The weekend of April 2-3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        REFERENCE MERCURIAL REPOS:
</span><br>
<span class="quotelev2">&gt;&gt;        * SOS development: <a href="http://bitbucket.org/jsquyres/opal-sos-fixed/">http://bitbucket.org/jsquyres/opal-sos-fixed/</a>
</span><br>
<span class="quotelev2">&gt;&gt;        * WDC development: <a href="http://bitbucket.org/derbeyn/orte-wdc-fixed/">http://bitbucket.org/derbeyn/orte-wdc-fixed/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        BACKGROUND:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        The notifier interface and its components underwent a host of
</span><br>
<span class="quotelev2">&gt;&gt;        improvements and changes during the development of the SOS[1] and
</span><br>
<span class="quotelev2">&gt;&gt;        the
</span><br>
<span class="quotelev2">&gt;&gt;        WDC[2] branches. &#160;The ORTE WDC (Warning Data Capture) branch enables
</span><br>
<span class="quotelev2">&gt;&gt;        accounting of events through the use of notifier interface, whereas
</span><br>
<span class="quotelev2">&gt;&gt;        OPAL SOS uses the notifier interface by setting up callbacks to
</span><br>
<span class="quotelev2">&gt;&gt;        relay
</span><br>
<span class="quotelev2">&gt;&gt;        out logged events.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Some of the improvements include:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        - added more severity levels.
</span><br>
<span class="quotelev2">&gt;&gt;        - &quot;ftb&quot; notifier improvements.
</span><br>
<span class="quotelev2">&gt;&gt;        - &quot;command&quot; notifier improvements.
</span><br>
<span class="quotelev2">&gt;&gt;        - added &quot;file&quot; notifier component
</span><br>
<span class="quotelev2">&gt;&gt;        - changes in the notifier modules selection
</span><br>
<span class="quotelev2">&gt;&gt;        - activate only a subset of the callbacks
</span><br>
<span class="quotelev2">&gt;&gt;        (i.e. any combination of log, help, log_peer)
</span><br>
<span class="quotelev2">&gt;&gt;        - define different output media for any given callback (e.g.
</span><br>
<span class="quotelev2">&gt;&gt;        log_peer
</span><br>
<span class="quotelev2">&gt;&gt;        can be redirected to the syslog and smtp, while the show_help can be
</span><br>
<span class="quotelev2">&gt;&gt;        sent to the hnp).
</span><br>
<span class="quotelev2">&gt;&gt;        - ORTE_NOTIFIER_LOG_EVENT() (that accounts and warns about unusual
</span><br>
<span class="quotelev2">&gt;&gt;        events)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Much more information is available on these two wiki pages:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        [1] <a href="http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev2">&gt;&gt;        [2] <a href="http://svn.open-mpi.org/trac/ompi/wiki/ORTEWDC">http://svn.open-mpi.org/trac/ompi/wiki/ORTEWDC</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        NOTE: This is first of a two-part RFC to bring the SOS and WDC
</span><br>
<span class="quotelev2">&gt;&gt;        branches
</span><br>
<span class="quotelev2">&gt;&gt;        to the trunk. This only brings in the &quot;notifier&quot; changes from the
</span><br>
<span class="quotelev2">&gt;&gt;        SOS
</span><br>
<span class="quotelev2">&gt;&gt;        branch, while the rest of the branch will be brought over after the
</span><br>
<span class="quotelev2">&gt;&gt;        timeout of the second RFC.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;        devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;        devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7679.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7677.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>In reply to:</strong> <a href="7674.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7679.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Reply:</strong> <a href="7679.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Reply:</strong> <a href="7682.php">Sylvain Jeaugey: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
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
