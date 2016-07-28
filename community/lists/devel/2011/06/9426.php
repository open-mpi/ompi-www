<?
$subject_val = "Re: [OMPI devel] Resilience 2011";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 27 09:13:46 2011" -->
<!-- isoreceived="20110627131346" -->
<!-- sent="Mon, 27 Jun 2011 07:13:36 -0600" -->
<!-- isosent="20110627131336" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Resilience 2011" -->
<!-- id="861B3789-F75F-4422-A250-8A89E1003D90_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1309179426.27343.10.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Resilience 2011<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-27 09:13:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9427.php">Josh Hursey: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9425.php">Ken Lloyd: "Re: [OMPI devel] Resilience 2011"</a>
<li><strong>In reply to:</strong> <a href="9425.php">Ken Lloyd: "Re: [OMPI devel] Resilience 2011"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 27, 2011, at 6:57 AM, Ken Lloyd wrote:
<br>
<p><span class="quotelev1">&gt; One point I've been trying to put forward in my domain is, currently, high performance computing != high reliability computing. Not by a long shot. Seems that they are orthogonally coupled.
</span><br>
<p>I think that has been true in the past - an emerging community is trying to bring the two back together, but the tradeoffs do pose challenges. In some ways, the RTE part of the equation is more manageable than the MPI side, IMO.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are many pieces to this problem-puzzle. Some of these pieces are inter-related. Some of my work has dealt with adaptive approaches - especially re: cascade, and what Ralph refers to as &quot;rewiring&quot;, or routing issues.
</span><br>
<p>Most of my development is taking place in the embedded world re ORCM (an OMPI-related project based on ORTE). I try to port most of it back to the OMPI trunk, but have fallen woefully behind over the last six months or so. ORCM has recently started getting contributions from a couple of universities, one focused on prediction/migration and another on wireup, that should translate directly to OMPI.
<br>
<p>There is some code already in the trunk re mapping to avoid failure cascades. In my &quot;spare&quot; time, I continue to work on it. Always open to exchanging ideas :-)
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If and when I have anything I believe meaningful to contribute, I will.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 2011-06-27 at 08:32 -0400, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It has been on my to-do list for a while to start a FAQ listing of the various resilience/FT related activities in and around Open MPI. This would provide a starting location for users and new developers could go to for an overview of each of the features, and how to activate/use the feature.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll try to bump that up the priority list and post a message once it is ready. Probably a month or so off since I need to collect some information from various developers.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Jun 26, 2011 at 6:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think we're some ways away from declaring a &quot;resilient ORTE&quot;. Josh and I have been committing pieces of it over the last two years, and Wes just committed another piece the other day that might have been titled &quot;fault tolerant OOB&quot; as it primarily addressed maintaining comm routing during node failures.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Setting aside the obvious MPI issues, there are several branches/organizations working different aspects of the ORTE problem, including:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * fault prediction and proactive migration
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * mapping algorithms to minimize failure cascades
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * simultaneous failure handling
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * alternative wiring methods that eliminate the OOB routing issues
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; etc. We expect most of those developments to arrive over the next 6-12 months. Once that has occurred, we'll probably be close to what we would call a &quot;resilient&quot; system.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Until then, we are improving, but still far from &quot;resilient&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 24, 2011, at 10:24 AM, Ken Lloyd wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh and Wesley,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will you be presenting Resilient ORTE at Resilience 2011 in Bordeaux?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://xcr.cenit.latech.edu/resilience2011/">http://xcr.cenit.latech.edu/resilience2011/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kenneth A. Lloyd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CEO - Director of Systems Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Watt Systems Technologies Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.wattsys.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kenneth.lloyd_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This e-mail is covered by the Electronic Communications Privacy Act, 18 U.S.C. 2510-2521 and is intended only for the addressee named above. It may contain privileged or confidential information. If you are not the addressee you must not copy, distribute, disclose or use any of the information in it. If you have received it in error please delete it and immediately notify the sender.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9426/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9427.php">Josh Hursey: "Re: [OMPI devel] Compiling problem in trunk?"</a>
<li><strong>Previous message:</strong> <a href="9425.php">Ken Lloyd: "Re: [OMPI devel] Resilience 2011"</a>
<li><strong>In reply to:</strong> <a href="9425.php">Ken Lloyd: "Re: [OMPI devel] Resilience 2011"</a>
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
