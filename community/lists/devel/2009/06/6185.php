<?
$subject_val = "Re: [OMPI devel] Multi-rail on openib";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  5 20:50:22 2009" -->
<!-- isoreceived="20090606005022" -->
<!-- sent="Fri, 5 Jun 2009 17:50:07 -0700" -->
<!-- isosent="20090606005007" -->
<!-- name="Nifty Tom Mitchell" -->
<!-- email="niftyompi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-rail on openib" -->
<!-- id="20090606005007.GA3319_at_tosh2egg.wr.niftyegg.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CD38F8F0-FB76-4C32-B232-3974B2973B4F_at_cisco.com" -->
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
<strong>From:</strong> Nifty Tom Mitchell (<em>niftyompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-05 20:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6186.php">Sylvain Jeaugey: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Previous message:</strong> <a href="6184.php">Jeff Squyres: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6184.php">Jeff Squyres: "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6186.php">Sylvain Jeaugey: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Reply:</strong> <a href="6186.php">Sylvain Jeaugey: "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jun 05, 2009 at 09:52:39AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See this FAQ entry for a description:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-port-wireup">http://www.open-mpi.org/faq/?category=openfabrics#ofa-port-wireup</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right now, there's no way to force a particular connection pattern on  
</span><br>
<span class="quotelev1">&gt; the openib btl at run-time.  The startup sequence has gotten  
</span><br>
<span class="quotelev1">&gt; sufficiently complicated / muddied over the years that it would be quite 
</span><br>
<span class="quotelev1">&gt; difficult to do so.  Pasha is in the middle of revamping parts of the 
</span><br>
<span class="quotelev1">&gt; openib startup (see <a href="http://bitbucket.org/pasha/ompi-ofacm/">http://bitbucket.org/pasha/ompi-ofacm/</a>); it *may* be 
</span><br>
<span class="quotelev1">&gt; desirable to fully clean up the full openib btl startup sequence when 
</span><br>
<span class="quotelev1">&gt; he's all finished.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 5, 2009, at 9:48 AM, Mouhamed Gueye wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am working on  multi-rail IB and I was wondering how connections are
</span><br>
<span class="quotelev2">&gt;&gt; established between ports.  I have two hosts, each with 2 ports on a
</span><br>
<span class="quotelev2">&gt;&gt; same IB card, connected to the same switch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p>Is there a goal in mind?
<br>
<p>In general multi-rail cards run into bandwidth and congestion issues
<br>
with the host bus.  If your card's system side interface cannot support
<br>
the bandwidth of twin IB links then it is possible that bandwidth would
<br>
be reduced by the interaction.
<br>
<p>If the host bus and memory system is fast enough then 
<br>
work with the vendor.
<br>
<p>In addition to system bandwidth the subnet manager may need to be enhanced
<br>
to be multi-port card aware.   Since IB fabric routes are static it is possible
<br>
to route or use pairs of links in an identical enough way that there is 
<br>
little bandwidth gain when multiple switches are involved. 
<br>
<p>Your two host case case may be simple enough....to explore
<br>
and/or generate illuminating or misleading results.  
<br>
It is a good place to start.
<br>
<p>Start with a look at opensm and the fabric then watch how Open MPI 
<br>
or your applications use the resulting LIDs.  If you are using IB directly
<br>
and not MPI then the list of protocol choices grows dramatically but still 
<br>
centers on LIDs as assigned by the subnet manager (see opensm).
<br>
<p>How man CPU cores (ranks) are you working with?
<br>
<p>Do be specific about the IB hardware and associated firmware.... 
<br>
there are multiple choices out there and the vendor may be able to help.......
<br>
<p><pre>
-- 
	T o m  M i t c h e l l 
	Found me a new hat, now what?
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6186.php">Sylvain Jeaugey: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Previous message:</strong> <a href="6184.php">Jeff Squyres: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>In reply to:</strong> <a href="6184.php">Jeff Squyres: "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6186.php">Sylvain Jeaugey: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Reply:</strong> <a href="6186.php">Sylvain Jeaugey: "Re: [OMPI devel] Multi-rail on openib"</a>
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
