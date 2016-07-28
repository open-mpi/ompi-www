<?
$subject_val = "Re: [OMPI devel] Multi-rail on openib";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 17:34:23 2009" -->
<!-- isoreceived="20090608213423" -->
<!-- sent="Mon, 8 Jun 2009 14:34:18 -0700" -->
<!-- isosent="20090608213418" -->
<!-- name="NiftyOMPI Tom Mitchell" -->
<!-- email="niftyompi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-rail on openib" -->
<!-- id="88815dc10906081434k6bbdb597id1f7f783b018308a_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="alpine.DEB.2.00.0906081026470.4598_at_jeaugeys.frec.bull.fr" -->
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
<strong>From:</strong> NiftyOMPI Tom Mitchell (<em>niftyompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-08 17:34:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6191.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6189.php">Sylvain Jeaugey: "[OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>In reply to:</strong> <a href="6186.php">Sylvain Jeaugey: "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6193.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Reply:</strong> <a href="6193.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Reply:</strong> <a href="6194.php">Sylvain Jeaugey: "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/8/09, Sylvain Jeaugey &lt;sylvain.jeaugey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Tom,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, there is a goal in mind, and definetly not performance : we are
</span><br>
<span class="quotelev1">&gt; working on device failover, i.e when a network adapter or switch fails,
</span><br>
<span class="quotelev1">&gt; use the remaining one. We don't intend to improve performance with
</span><br>
<span class="quotelev1">&gt; multi-rail (which as you said, will not happen unless you have a DDR card
</span><br>
<span class="quotelev1">&gt; with PCI Exp 8x Gen2 and a very nice routing - and money to pay for the
</span><br>
<span class="quotelev1">&gt; doubled network :)).
</span><br>
<p>??? dual rail does double the number of switch ports.
<br>
If you want to address switch failure each rail must connect to
<br>
a different switch.   If you do not want to have isolated fabrics
<br>
you must have some additional  ports on all switches to
<br>
connect the two fabrics and enough of them to maintain sufficient
<br>
bandwidth and connectivity when a switch  fails.  Thus, You are doubling
<br>
the fabric unless I am missing something.  Is your second set
<br>
of switches so minimally connected  that  the second tree can
<br>
be installed with a small switch count.
<br>
<p>What are the odds when port 1 fails that port 2 is going to
<br>
be live.  Cable/ connector errors would be the most likely
<br>
case where port 2 would be live.  In general if port 1 fails
<br>
I would expect port 2 to have issues too.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The goal here is to use port 1 of each card as a primary way of
</span><br>
<span class="quotelev1">&gt; communication with a fat tree and port 2 as a failover solution with a
</span><br>
<span class="quotelev1">&gt; very light network, just to avoid aborting the MPI app or at least reach a
</span><br>
<span class="quotelev1">&gt; checkpoint.
</span><br>
<p>Most of the IB protocols used by MPI target a LID.   There is no
<br>
existing notification path I know of that can replace LID-xyz with
<br>
LID-123.  The subnet manager might be able to do this but begs
<br>
security issues.
<br>
<p>Interesting problem.....
<br>
<p><span class="quotelev1">&gt; Don't worry, another team is working on opensm, so that routing stays
</span><br>
<span class="quotelev1">&gt; optimal.
</span><br>
<p>Could be fun.... but I would hope that this not be an incompatible fork.
<br>
<p><p><span class="quotelev1">&gt; Thanks for your warnings however, it's true that a lot of people see these
</span><br>
<span class="quotelev1">&gt; &quot;double port IB cards&quot; as &quot;doubled performance&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, 5 Jun 2009, Nifty Tom Mitchell wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jun 05, 2009 at 09:52:39AM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See this FAQ entry for a description:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-port-wireup">http://www.open-mpi.org/faq/?category=openfabrics#ofa-port-wireup</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Right now, there's no way to force a particular connection pattern on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the openib btl at run-time.  The startup sequence has gotten
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sufficiently complicated / muddied over the years that it would be quite
</span><br>
<span class="quotelev3">&gt;&gt;&gt; difficult to do so.  Pasha is in the middle of revamping parts of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openib startup (see <a href="http://bitbucket.org/pasha/ompi-ofacm/">http://bitbucket.org/pasha/ompi-ofacm/</a>); it *may* be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; desirable to fully clean up the full openib btl startup sequence when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; he's all finished.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 5, 2009, at 9:48 AM, Mouhamed Gueye wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am working on  multi-rail IB and I was wondering how connections are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; established between ports.  I have two hosts, each with 2 ports on a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; same IB card, connected to the same switch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a goal in mind?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In general multi-rail cards run into bandwidth and congestion issues
</span><br>
<span class="quotelev2">&gt;&gt; with the host bus.  If your card's system side interface cannot support
</span><br>
<span class="quotelev2">&gt;&gt; the bandwidth of twin IB links then it is possible that bandwidth would
</span><br>
<span class="quotelev2">&gt;&gt; be reduced by the interaction.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the host bus and memory system is fast enough then
</span><br>
<span class="quotelev2">&gt;&gt; work with the vendor.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In addition to system bandwidth the subnet manager may need to be enhanced
</span><br>
<span class="quotelev2">&gt;&gt; to be multi-port card aware.   Since IB fabric routes are static it is
</span><br>
<span class="quotelev2">&gt;&gt; possible
</span><br>
<span class="quotelev2">&gt;&gt; to route or use pairs of links in an identical enough way that there is
</span><br>
<span class="quotelev2">&gt;&gt; little bandwidth gain when multiple switches are involved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your two host case case may be simple enough....to explore
</span><br>
<span class="quotelev2">&gt;&gt; and/or generate illuminating or misleading results.
</span><br>
<span class="quotelev2">&gt;&gt; It is a good place to start.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Start with a look at opensm and the fabric then watch how Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; or your applications use the resulting LIDs.  If you are using IB directly
</span><br>
<span class="quotelev2">&gt;&gt; and not MPI then the list of protocol choices grows dramatically but still
</span><br>
<span class="quotelev2">&gt;&gt; centers on LIDs as assigned by the subnet manager (see opensm).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How man CPU cores (ranks) are you working with?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do be specific about the IB hardware and associated firmware....
</span><br>
<span class="quotelev2">&gt;&gt; there are multiple choices out there and the vendor may be able to
</span><br>
<span class="quotelev2">&gt;&gt; help.......
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; 	T o m  M i t c h e l l
</span><br>
<span class="quotelev2">&gt;&gt; 	Found me a new hat, now what?
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
<p><p><pre>
-- 
        NiftyOMPI
        T o m   M i t c h e l l
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6191.php">Ralph Castain: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>Previous message:</strong> <a href="6189.php">Sylvain Jeaugey: "[OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>In reply to:</strong> <a href="6186.php">Sylvain Jeaugey: "Re: [OMPI devel] Multi-rail on openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6193.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Reply:</strong> <a href="6193.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Reply:</strong> <a href="6194.php">Sylvain Jeaugey: "Re: [OMPI devel] Multi-rail on openib"</a>
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
