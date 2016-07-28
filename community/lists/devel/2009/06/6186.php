<?
$subject_val = "Re: [OMPI devel] Multi-rail on openib";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 04:39:02 2009" -->
<!-- isoreceived="20090608083902" -->
<!-- sent="Mon, 8 Jun 2009 10:38:47 +0200 (CEST)" -->
<!-- isosent="20090608083847" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-rail on openib" -->
<!-- id="alpine.DEB.2.00.0906081026470.4598_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090606005007.GA3319_at_tosh2egg.wr.niftyegg.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Multi-rail on openib<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-08 04:38:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6187.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6185.php">Nifty Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6185.php">Nifty Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6190.php">NiftyOMPI Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Reply:</strong> <a href="6190.php">NiftyOMPI Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tom,
<br>
<p>Yes, there is a goal in mind, and definetly not performance : we are 
<br>
working on device failover, i.e when a network adapter or switch fails, 
<br>
use the remaining one. We don't intend to improve performance with 
<br>
multi-rail (which as you said, will not happen unless you have a DDR card 
<br>
with PCI Exp 8x Gen2 and a very nice routing - and money to pay for the 
<br>
doubled network :)).
<br>
<p>The goal here is to use port 1 of each card as a primary way of 
<br>
communication with a fat tree and port 2 as a failover solution with a 
<br>
very light network, just to avoid aborting the MPI app or at least reach a 
<br>
checkpoint.
<br>
<p>Don't worry, another team is working on opensm, so that routing stays 
<br>
optimal.
<br>
<p>Thanks for your warnings however, it's true that a lot of people see these 
<br>
&quot;double port IB cards&quot; as &quot;doubled performance&quot;.
<br>
<p>Sylvain
<br>
<p>On Fri, 5 Jun 2009, Nifty Tom Mitchell wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Jun 05, 2009 at 09:52:39AM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See this FAQ entry for a description:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-port-wireup">http://www.open-mpi.org/faq/?category=openfabrics#ofa-port-wireup</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Right now, there's no way to force a particular connection pattern on
</span><br>
<span class="quotelev2">&gt;&gt; the openib btl at run-time.  The startup sequence has gotten
</span><br>
<span class="quotelev2">&gt;&gt; sufficiently complicated / muddied over the years that it would be quite
</span><br>
<span class="quotelev2">&gt;&gt; difficult to do so.  Pasha is in the middle of revamping parts of the
</span><br>
<span class="quotelev2">&gt;&gt; openib startup (see <a href="http://bitbucket.org/pasha/ompi-ofacm/">http://bitbucket.org/pasha/ompi-ofacm/</a>); it *may* be
</span><br>
<span class="quotelev2">&gt;&gt; desirable to fully clean up the full openib btl startup sequence when
</span><br>
<span class="quotelev2">&gt;&gt; he's all finished.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 5, 2009, at 9:48 AM, Mouhamed Gueye wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am working on  multi-rail IB and I was wondering how connections are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; established between ports.  I have two hosts, each with 2 ports on a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same IB card, connected to the same switch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a goal in mind?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In general multi-rail cards run into bandwidth and congestion issues
</span><br>
<span class="quotelev1">&gt; with the host bus.  If your card's system side interface cannot support
</span><br>
<span class="quotelev1">&gt; the bandwidth of twin IB links then it is possible that bandwidth would
</span><br>
<span class="quotelev1">&gt; be reduced by the interaction.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the host bus and memory system is fast enough then
</span><br>
<span class="quotelev1">&gt; work with the vendor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition to system bandwidth the subnet manager may need to be enhanced
</span><br>
<span class="quotelev1">&gt; to be multi-port card aware.   Since IB fabric routes are static it is possible
</span><br>
<span class="quotelev1">&gt; to route or use pairs of links in an identical enough way that there is
</span><br>
<span class="quotelev1">&gt; little bandwidth gain when multiple switches are involved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your two host case case may be simple enough....to explore
</span><br>
<span class="quotelev1">&gt; and/or generate illuminating or misleading results.
</span><br>
<span class="quotelev1">&gt; It is a good place to start.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start with a look at opensm and the fabric then watch how Open MPI
</span><br>
<span class="quotelev1">&gt; or your applications use the resulting LIDs.  If you are using IB directly
</span><br>
<span class="quotelev1">&gt; and not MPI then the list of protocol choices grows dramatically but still
</span><br>
<span class="quotelev1">&gt; centers on LIDs as assigned by the subnet manager (see opensm).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How man CPU cores (ranks) are you working with?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do be specific about the IB hardware and associated firmware....
</span><br>
<span class="quotelev1">&gt; there are multiple choices out there and the vendor may be able to help.......
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 	T o m  M i t c h e l l
</span><br>
<span class="quotelev1">&gt; 	Found me a new hat, now what?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6187.php">Sylvain Jeaugey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6185.php">Nifty Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6185.php">Nifty Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6190.php">NiftyOMPI Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Reply:</strong> <a href="6190.php">NiftyOMPI Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
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
