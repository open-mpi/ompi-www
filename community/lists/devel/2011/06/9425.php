<?
$subject_val = "Re: [OMPI devel] Resilience 2011";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 27 08:57:13 2011" -->
<!-- isoreceived="20110627125713" -->
<!-- sent="Mon, 27 Jun 2011 06:57:06 -0600" -->
<!-- isosent="20110627125706" -->
<!-- name="Ken Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Resilience 2011" -->
<!-- id="1309179426.27343.10.camel_at_localhost.localdomain" -->
<!-- charset="utf-8" -->
<!-- inreplyto="BANLkTimUTtzm55PvP0pL7CCcK=+0z9EVCA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ken Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-27 08:57:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9426.php">Ralph Castain: "Re: [OMPI devel] Resilience 2011"</a>
<li><strong>Previous message:</strong> <a href="9424.php">Josh Hursey: "Re: [OMPI devel] Resilience 2011"</a>
<li><strong>In reply to:</strong> <a href="9424.php">Josh Hursey: "Re: [OMPI devel] Resilience 2011"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9426.php">Ralph Castain: "Re: [OMPI devel] Resilience 2011"</a>
<li><strong>Reply:</strong> <a href="9426.php">Ralph Castain: "Re: [OMPI devel] Resilience 2011"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One point I've been trying to put forward in my domain is, currently,
<br>
high performance computing != high reliability computing. Not by a long
<br>
shot. Seems that they are orthogonally coupled.
<br>
<p>There are many pieces to this problem-puzzle. Some of these pieces are
<br>
inter-related. Some of my work has dealt with adaptive approaches -
<br>
especially re: cascade, and what Ralph refers to as &quot;rewiring&quot;, or
<br>
routing issues.
<br>
<p>If and when I have anything I believe meaningful to contribute, I will.
<br>
<p>On Mon, 2011-06-27 at 08:32 -0400, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; It has been on my to-do list for a while to start a FAQ listing of the
</span><br>
<span class="quotelev1">&gt; various resilience/FT related activities in and around Open MPI. This
</span><br>
<span class="quotelev1">&gt; would provide a starting location for users and new developers could
</span><br>
<span class="quotelev1">&gt; go to for an overview of each of the features, and how to activate/use
</span><br>
<span class="quotelev1">&gt; the feature.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll try to bump that up the priority list and post a message once it
</span><br>
<span class="quotelev1">&gt; is ready. Probably a month or so off since I need to collect some
</span><br>
<span class="quotelev1">&gt; information from various developers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Jun 26, 2011 at 6:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         I think we're some ways away from declaring a &quot;resilient
</span><br>
<span class="quotelev1">&gt;         ORTE&quot;. Josh and I have been committing pieces of it over the
</span><br>
<span class="quotelev1">&gt;         last two years, and Wes just committed another piece the other
</span><br>
<span class="quotelev1">&gt;         day that might have been titled &quot;fault tolerant OOB&quot; as it
</span><br>
<span class="quotelev1">&gt;         primarily addressed maintaining comm routing during node
</span><br>
<span class="quotelev1">&gt;         failures.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Setting aside the obvious MPI issues, there are several
</span><br>
<span class="quotelev1">&gt;         branches/organizations working different aspects of the ORTE
</span><br>
<span class="quotelev1">&gt;         problem, including:
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         * fault prediction and proactive migration
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         * mapping algorithms to minimize failure cascades
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         * simultaneous failure handling
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         * alternative wiring methods that eliminate the OOB routing
</span><br>
<span class="quotelev1">&gt;         issues
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         etc. We expect most of those developments to arrive over the
</span><br>
<span class="quotelev1">&gt;         next 6-12 months. Once that has occurred, we'll probably be
</span><br>
<span class="quotelev1">&gt;         close to what we would call a &quot;resilient&quot; system.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         Until then, we are improving, but still far from &quot;resilient&quot;.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         On Jun 24, 2011, at 10:24 AM, Ken Lloyd wrote:
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev2">&gt;         &gt; 
</span><br>
<span class="quotelev2">&gt;         &gt; Josh and Wesley,
</span><br>
<span class="quotelev2">&gt;         &gt; 
</span><br>
<span class="quotelev2">&gt;         &gt; Will you be presenting Resilient ORTE at Resilience 2011 in
</span><br>
<span class="quotelev2">&gt;         &gt; Bordeaux?
</span><br>
<span class="quotelev2">&gt;         &gt; 
</span><br>
<span class="quotelev2">&gt;         &gt; <a href="http://xcr.cenit.latech.edu/resilience2011/">http://xcr.cenit.latech.edu/resilience2011/</a>
</span><br>
<span class="quotelev2">&gt;         &gt; 
</span><br>
<span class="quotelev2">&gt;         &gt; =====================
</span><br>
<span class="quotelev2">&gt;         &gt; Kenneth A. Lloyd
</span><br>
<span class="quotelev2">&gt;         &gt; CEO - Director of Systems Science
</span><br>
<span class="quotelev2">&gt;         &gt; Watt Systems Technologies Inc.
</span><br>
<span class="quotelev2">&gt;         &gt; www.wattsys.com
</span><br>
<span class="quotelev2">&gt;         &gt; kenneth.lloyd_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;         &gt; 
</span><br>
<span class="quotelev2">&gt;         &gt; This e-mail is covered by the Electronic Communications
</span><br>
<span class="quotelev2">&gt;         &gt; Privacy Act, 18 U.S.C. 2510-2521 and is intended only for
</span><br>
<span class="quotelev2">&gt;         &gt; the addressee named above. It may contain privileged or
</span><br>
<span class="quotelev2">&gt;         &gt; confidential information. If you are not the addressee you
</span><br>
<span class="quotelev2">&gt;         &gt; must not copy, distribute, disclose or use any of the
</span><br>
<span class="quotelev2">&gt;         &gt; information in it. If you have received it in error please
</span><br>
<span class="quotelev2">&gt;         &gt; delete it and immediately notify the sender.
</span><br>
<span class="quotelev2">&gt;         &gt; 
</span><br>
<span class="quotelev2">&gt;         &gt; 
</span><br>
<span class="quotelev2">&gt;         &gt; 
</span><br>
<span class="quotelev2">&gt;         &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;         &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;         &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;         &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<p><p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9425/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9426.php">Ralph Castain: "Re: [OMPI devel] Resilience 2011"</a>
<li><strong>Previous message:</strong> <a href="9424.php">Josh Hursey: "Re: [OMPI devel] Resilience 2011"</a>
<li><strong>In reply to:</strong> <a href="9424.php">Josh Hursey: "Re: [OMPI devel] Resilience 2011"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9426.php">Ralph Castain: "Re: [OMPI devel] Resilience 2011"</a>
<li><strong>Reply:</strong> <a href="9426.php">Ralph Castain: "Re: [OMPI devel] Resilience 2011"</a>
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
