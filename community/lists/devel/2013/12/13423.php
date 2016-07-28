<?
$subject_val = "Re: [OMPI devel] iWARP development";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 12 17:32:57 2013" -->
<!-- isoreceived="20131212223257" -->
<!-- sent="Thu, 12 Dec 2013 22:31:31 +0000" -->
<!-- isosent="20131212223131" -->
<!-- name="Prindeville, Philip" -->
<!-- email="philip.prindeville_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iWARP development" -->
<!-- id="F6DD95AFC46DD740A27EEE7B32F25E601BC24BCE_at_G4W3229.americas.hpqcorp.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57ofqewN68DYwAPEnvKm-XYKCg3SRyNJCmq+nHe=62TYM-g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] iWARP development<br>
<strong>From:</strong> Prindeville, Philip (<em>philip.prindeville_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-12 17:31:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13424.php">Ralph Castain: "Re: [OMPI devel] iWARP development"</a>
<li><strong>Previous message:</strong> <a href="13422.php">Ralph Castain: "Re: [OMPI devel] OMPI developer's meeting today"</a>
<li><strong>In reply to:</strong> <a href="13418.php">Ralph Castain: "Re: [OMPI devel] iWARP development"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13424.php">Ralph Castain: "Re: [OMPI devel] iWARP development"</a>
<li><strong>Reply:</strong> <a href="13424.php">Ralph Castain: "Re: [OMPI devel] iWARP development"</a>
<li><strong>Reply:</strong> <a href="13425.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] iWARP development"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I understand.
<br>
<p>I'll pull a copy of trunk and dig around in there.
<br>
<p>Is there a reason that the code can't be gated by conditional compilation flags or detect the environment at run-time?
<br>
<p>Is there anything in the way of a set of verification tests?  And what's the provenance of the SCTP code that's in trunk?
<br>
<p>Thanks,
<br>
<p>-Philip
<br>
<p><p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Thursday, December 12, 2013 8:41 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] iWARP development
<br>
<p>Be aware that we removed SCTP from the 1.7 release series because of its unknown state of repair - I don't believe anyone has tested it in quite some time, and nobody has been maintaining it so far as we know. Not saying it won't work - just saying that I don't think we know :-/
<br>
<p>On Wed, Dec 11, 2013 at 6:07 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
On Dec 11, 2013, at 5:33 PM, &quot;Prindeville, Philip&quot; &lt;philip.prindeville_at_[hidden]&lt;mailto:philip.prindeville_at_[hidden]&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I was wondering what the current state of iWARP development is.
</span><br>
Open MPI's iWARP support is part of the &quot;openib&quot; BTL (so named because OpenFabrics used to be known as OpenIB, before iWARP joined, and we never changed the name of our plugin after OFA became OFA).
<br>
<p><span class="quotelev1">&gt; There are some features we're interested in, and from what I can tell the iWARP RFCs/Internet Drafts haven't caught up to related developments.
</span><br>
As George mentioned, we deleted the SCTP plugin from the 1.7 release branch -- but that's a standalone SCTP plugin, which is not what I think you're asking about it.
<br>
<p><span class="quotelev1">&gt; Part of our interest is in using SCTP as the LLP for iWARP, and updating that adaptation to the latest SCTP work.
</span><br>
Gotcha.
<br>
<p><span class="quotelev1">&gt; For instance:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RFC 6458 - SCTP authentication
</span><br>
<span class="quotelev1">&gt; RFC 6458 - SCTP out-of-order delivery
</span><br>
<span class="quotelev1">&gt; RFC 6458 - SCTP association end-point address changes
</span><br>
<span class="quotelev1">&gt; RFC 6458 - SCTP Receive Information
</span><br>
<span class="quotelev1">&gt; RFC 6458 - SCTP partially reliable delivery
</span><br>
<span class="quotelev1">&gt; RFC 6458 - SCTP key management
</span><br>
<span class="quotelev1">&gt; RFC 5061 - SCTP Dynamic address reconfiguration (useful for hot NIC swaps in a high availability environment)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We'd also like to see load-sharing in multipath environments, and sender-side traffic shaping support.
</span><br>
Sounds nifty.
<br>
<p><span class="quotelev1">&gt; From what I can tell, the iWARP SCTP work that's been done predates RFC-6458, and hence I'm assuming it's aligned to RFC-5043.
</span><br>
Sure...?
<br>
<p><span class="quotelev1">&gt; Other questions I have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has this code been tested extensively on non-x86 platforms?  What about IA64, PPC64, ARM7, or MIPS 7K?
</span><br>
Doubtful.  The openib BTL is known to work with IB and iWARP on a variety of x86 platforms.  I have no idea, and would kinda doubt, if it has been tested on any of the other platforms you've specified.
<br>
<p><span class="quotelev1">&gt; Is anyone doing any code to port SolarFlare OpenOnload stack to support Open MPI's iWARP?
</span><br>
Nope.  SF has told me/others that they're happy just doing their onload TCP through OMPI -- they don't see the need to do their own OO plugin (but don't take my word for it; I certainly cannot speak for them -- feel free to ask them yourself).
<br>
<p><span class="quotelev1">&gt; And a minor note... Just looking at the 1.7.3 tarball and grepping for SCTP in it, I find only a few matches, such as this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; evutil_getaddrinfo_infer_protocols(struct evutil_addrinfo *hints)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; #ifdef IPPROTO_SCTP
</span><br>
<span class="quotelev1">&gt;                                 else if (hints-&gt;ai_protocol == IPPROTO_SCTP)
</span><br>
<span class="quotelev1">&gt;                                                 hints-&gt;ai_socktype = SOCK_STREAM;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And this has me puzzled: SCTP is predominately a SOCK_SEQPACKET, isn't it? (The whole point of using it and not TCP as a transport is it preserves record boundaries, supports out-of-order delivery and message interleaving, etc.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At least, that's how it registers itself as a protocol in Linux 3.12 in net/sctp/protocol.c ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Apologies if there's a better mailing list for iWARP specific questions. I'm looking at a lot of this stuff for the first time and having to ramp up quickly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Philip
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13423/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13424.php">Ralph Castain: "Re: [OMPI devel] iWARP development"</a>
<li><strong>Previous message:</strong> <a href="13422.php">Ralph Castain: "Re: [OMPI devel] OMPI developer's meeting today"</a>
<li><strong>In reply to:</strong> <a href="13418.php">Ralph Castain: "Re: [OMPI devel] iWARP development"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13424.php">Ralph Castain: "Re: [OMPI devel] iWARP development"</a>
<li><strong>Reply:</strong> <a href="13424.php">Ralph Castain: "Re: [OMPI devel] iWARP development"</a>
<li><strong>Reply:</strong> <a href="13425.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] iWARP development"</a>
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
