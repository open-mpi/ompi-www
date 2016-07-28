<?
$subject_val = "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework	and ORTE WDC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 30 02:24:56 2010" -->
<!-- isoreceived="20100330062456" -->
<!-- sent="Tue, 30 Mar 2010 08:14:26 +0200" -->
<!-- isosent="20100330061426" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC 1/1: improvements to the &amp;quot;notifier&amp;quot; framework	and ORTE WDC" -->
<!-- id="1269929666.2561.31.camel_at_frecb014522.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework	and ORTE WDC<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-30 02:14:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7681.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (8)"</a>
<li><strong>Previous message:</strong> <a href="7679.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>In reply to:</strong> <a href="7671.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2010-03-29 at 09:37 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Abhishek
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm confused by the WDC wiki page, specifically the part about the new
</span><br>
<span class="quotelev1">&gt; ORTE_NOTIFIER_DEFINE_EVENT macro. Are you saying that I (as the
</span><br>
<span class="quotelev1">&gt; developer) have to provide this macro with a unique notifier id?
</span><br>
<p>Hi Ralph,
<br>
<p>Actually ORTE_NOTIFIER_DEFINE_EVENT(&lt;i&gt;, &lt;string&gt;) expands to a static
<br>
inline routine notifier_log_event_&lt;i&gt;(). So I would say there is a one
<br>
to one relationship between an event id and a log_event routine. So
<br>
there is no need to do a lookup inside an array or a list.
<br>
So yes the event identifier needs to be unique, but only inside a single
<br>
source file: you can perpectly call ORTE_NOTIFIER_DEFINE_EVENT(0,
<br>
&lt;string1&gt;) in a .c file and ORTE_NOTIFIER_DEFINE_EVENT(0, &lt;string2&gt;) in
<br>
another one.
<br>
<p>Now, we could centralize the event ids in a .h file in the notifier
<br>
framework, but the purpose here would only be to have something
<br>
&quot;cleaner&quot;.
<br>
<p><p><span class="quotelev1">&gt;  So that would mean that ORTE/OMPI would have to maintain a global
</span><br>
<span class="quotelev1">&gt; notifier id counter to ensure it is unique?
</span><br>
<p><span class="quotelev1">&gt;From what I said before, we don't need this.
</span><br>
<p>Regards,
<br>
Nadia
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, that seems really cumbersome. Could you please clarify?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 29, 2010, at 8:57 AM, Abhishek Kulkarni wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; [RFC 1/2]
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; WHAT: Merge improvements to the &quot;notifier&quot; framework from the OPAL
</span><br>
<span class="quotelev2">&gt; &gt; SOS
</span><br>
<span class="quotelev2">&gt; &gt;     and the ORTE WDC mercurial branches into the SVN trunk.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; WHY: Some improvements and interface changes were put into the ORTE
</span><br>
<span class="quotelev2">&gt; &gt;    notifier framework during the development of the OPAL SOS[1] and
</span><br>
<span class="quotelev2">&gt; &gt;    ORTE WDC[2] branches.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; WHERE: Mostly restricted to ORTE notifier files and files using the
</span><br>
<span class="quotelev2">&gt; &gt;      notifier interface in OMPI.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; TIMEOUT: The weekend of April 2-3.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; REFERENCE MERCURIAL REPOS:
</span><br>
<span class="quotelev2">&gt; &gt; * SOS development: <a href="http://bitbucket.org/jsquyres/opal-sos-fixed/">http://bitbucket.org/jsquyres/opal-sos-fixed/</a>
</span><br>
<span class="quotelev2">&gt; &gt; * WDC development: <a href="http://bitbucket.org/derbeyn/orte-wdc-fixed/">http://bitbucket.org/derbeyn/orte-wdc-fixed/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; BACKGROUND:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The notifier interface and its components underwent a host of
</span><br>
<span class="quotelev2">&gt; &gt; improvements and changes during the development of the SOS[1] and
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; WDC[2] branches.  The ORTE WDC (Warning Data Capture) branch enables
</span><br>
<span class="quotelev2">&gt; &gt; accounting of events through the use of notifier interface, whereas
</span><br>
<span class="quotelev2">&gt; &gt; OPAL SOS uses the notifier interface by setting up callbacks to
</span><br>
<span class="quotelev2">&gt; &gt; relay
</span><br>
<span class="quotelev2">&gt; &gt; out logged events.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Some of the improvements include:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - added more severity levels.
</span><br>
<span class="quotelev2">&gt; &gt; - &quot;ftb&quot; notifier improvements.
</span><br>
<span class="quotelev2">&gt; &gt; - &quot;command&quot; notifier improvements.
</span><br>
<span class="quotelev2">&gt; &gt; - added &quot;file&quot; notifier component
</span><br>
<span class="quotelev2">&gt; &gt; - changes in the notifier modules selection
</span><br>
<span class="quotelev2">&gt; &gt; - activate only a subset of the callbacks
</span><br>
<span class="quotelev2">&gt; &gt; (i.e. any combination of log, help, log_peer)
</span><br>
<span class="quotelev2">&gt; &gt; - define different output media for any given callback (e.g.
</span><br>
<span class="quotelev2">&gt; &gt; log_peer
</span><br>
<span class="quotelev2">&gt; &gt; can be redirected to the syslog and smtp, while the show_help can be
</span><br>
<span class="quotelev2">&gt; &gt; sent to the hnp).
</span><br>
<span class="quotelev2">&gt; &gt; - ORTE_NOTIFIER_LOG_EVENT() (that accounts and warns about unusual
</span><br>
<span class="quotelev2">&gt; &gt; events)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Much more information is available on these two wiki pages:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [1] <a href="http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages">http://svn.open-mpi.org/trac/ompi/wiki/ErrorMessages</a>
</span><br>
<span class="quotelev2">&gt; &gt; [2] <a href="http://svn.open-mpi.org/trac/ompi/wiki/ORTEWDC">http://svn.open-mpi.org/trac/ompi/wiki/ORTEWDC</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; NOTE: This is first of a two-part RFC to bring the SOS and WDC
</span><br>
<span class="quotelev2">&gt; &gt; branches
</span><br>
<span class="quotelev2">&gt; &gt; to the trunk. This only brings in the &quot;notifier&quot; changes from the
</span><br>
<span class="quotelev2">&gt; &gt; SOS
</span><br>
<span class="quotelev2">&gt; &gt; branch, while the rest of the branch will be brought over after the
</span><br>
<span class="quotelev2">&gt; &gt; timeout of the second RFC.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7681.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (8)"</a>
<li><strong>Previous message:</strong> <a href="7679.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<li><strong>In reply to:</strong> <a href="7671.php">Ralph Castain: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
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
