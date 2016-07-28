<?
$subject_val = "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 30 03:48:30 2010" -->
<!-- isoreceived="20100330074830" -->
<!-- sent="Tue, 30 Mar 2010 09:52:29 +0200 (CEST)" -->
<!-- isosent="20100330075229" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC 1/1: improvements to the &amp;quot;notifier&amp;quot; framework and ORTE WDC" -->
<!-- id="alpine.DEB.2.00.1003300946250.25977_at_jeaugeys.frec.bull.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="alpine.LRH.2.00.1003291953040.29120_at_tank.cs.indiana.edu" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-30 03:52:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7683.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7681.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (8)"</a>
<li><strong>In reply to:</strong> <a href="7678.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7677.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 29 Mar 2010, Abhishek Kulkarni wrote:
<br>
<p><span class="quotelev2">&gt;&gt; #define ORTE_NOTIFIER_DEFINE_EVENT(eventstr, associated_text) {
</span><br>
<span class="quotelev2">&gt;&gt; 	 static int event = -1;
</span><br>
<span class="quotelev2">&gt;&gt; 	 if (OPAL_UNLIKELY(event == -1) {
</span><br>
<span class="quotelev2">&gt;&gt; 	 	event = opal_sos_create_new_event(eventstr, associated_text);
</span><br>
<span class="quotelev2">&gt;&gt; 	 }
</span><br>
<span class="quotelev2">&gt;&gt; 	 ...&lt;increase event counter&gt;...
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; This is a good suggestion, but then I think we end up relying on run-time 
</span><br>
<span class="quotelev1">&gt; generation of the event numbers
</span><br>
Yes.
<br>
<p><span class="quotelev1">&gt; and have to pay the extra cost of looking up the event in a 
</span><br>
<span class="quotelev1">&gt; list/array/hash each time we log the event.
</span><br>
No. Of course not, that's the point of the &quot;static int&quot; here. The 
<br>
&quot;create_new_event&quot; function will be only called once ; the event is then 
<br>
stored and used directly whenever we enter this code again.
<br>
<p>But yes, I'm adding an &quot;if&quot;, which may cost a little more than just the 
<br>
counter increment.
<br>
<p><span class="quotelev2">&gt;&gt; From what I understand, and from the discussions that took place when this 
</span><br>
<span class="quotelev1">&gt; proposal was first put up on the devel list, is that since the event tracing 
</span><br>
<span class="quotelev1">&gt; hooks could lie in the critical path, we want the overhead to be as low as 
</span><br>
<span class="quotelev1">&gt; possible. By manually defining the unique identifiers, we can generate the 
</span><br>
<span class="quotelev1">&gt; event tracing macro at compile-time and have a minimal tracing impact.
</span><br>
Not in the critical path. And from my point on view not on error pathes 
<br>
too. I prefer to talk about some &quot;slow path&quot; : not critical, but slow.
<br>
<p>Sylvain
<br>
<p><span class="quotelev2">&gt;&gt; On Mon, 29 Mar 2010, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hi Abhishek
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I'm confused by the WDC wiki page, specifically the part about the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  new&#160;ORTE_NOTIFIER_DEFINE_EVENT macro. Are you saying
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  that I (as the developer) have to provide this macro with a unique
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  notifier id? So that would mean that ORTE/OMPI would
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  have to maintain a global notifier id counter to ensure it is unique?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  If so, that seems really cumbersome. Could you please clarify?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  On Mar 29, 2010, at 8:57 AM, Abhishek Kulkarni wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        [RFC 1/2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        WHAT: Merge improvements to the &quot;notifier&quot; framework from the OPAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        SOS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &#160;&#160;&#160;&#160;and the ORTE WDC mercurial branches into the SVN trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        WHY: Some improvements and interface changes were put into the ORTE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &#160;&#160;&#160;notifier framework during the development of the OPAL SOS[1] and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &#160;&#160;&#160;ORTE WDC[2] branches.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        WHERE: Mostly restricted to ORTE notifier files and files using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &#160;&#160;&#160;&#160;&#160;notifier interface in OMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        TIMEOUT: The weekend of April 2-3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        REFERENCE MERCURIAL REPOS:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        * SOS development: <a href="http://bitbucket.org/jsquyres/opal-sos-fixed/">http://bitbucket.org/jsquyres/opal-sos-fixed/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        * WDC development: <a href="http://bitbucket.org/derbeyn/orte-wdc-fixed/">http://bitbucket.org/derbeyn/orte-wdc-fixed/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        BACKGROUND:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        The notifier interface and its components underwent a host of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        improvements and changes during the development of the SOS[1] and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        WDC[2] branches. &#160;The ORTE WDC (Warning Data Capture) branch 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enables
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        accounting of events through the use of notifier interface, whereas
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OPAL SOS uses the notifier interface by setting up callbacks to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        relay
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        out logged events.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Some of the improvements include:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        - added more severity levels.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        - &quot;ftb&quot; notifier improvements.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        - &quot;command&quot; notifier improvements.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        - added &quot;file&quot; notifier component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        - changes in the notifier modules selection
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        - activate only a subset of the callbacks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        (i.e. any combination of log, help, log_peer)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        - define different output media for any given callback (e.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        log_peer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        can be redirected to the syslog and smtp, while the show_help can 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        sent to the hnp).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        - ORTE_NOTIFIER_LOG_EVENT() (that accounts and warns about unusual
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        events)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Much more information is available on these two wiki pages:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        [1] <a href="http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        [2] <a href="http://svn.open-mpi.org/trac/ompi/wiki/ORTEWDC">http://svn.open-mpi.org/trac/ompi/wiki/ORTEWDC</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        NOTE: This is first of a two-part RFC to bring the SOS and WDC
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        branches
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        to the trunk. This only brings in the &quot;notifier&quot; changes from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        SOS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        branch, while the rest of the branch will be brought over after the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        timeout of the second RFC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7683.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>Previous message:</strong> <a href="7681.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (8)"</a>
<li><strong>In reply to:</strong> <a href="7678.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7677.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
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
