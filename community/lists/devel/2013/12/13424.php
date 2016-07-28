<?
$subject_val = "Re: [OMPI devel] iWARP development";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 12 17:44:20 2013" -->
<!-- isoreceived="20131212224420" -->
<!-- sent="Thu, 12 Dec 2013 16:44:18 -0600" -->
<!-- isosent="20131212224418" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iWARP development" -->
<!-- id="CAMD57od+yqFX9VJACdf-GuJ3WaLju3FUO-kkD5R64Eoute7XNA_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="F6DD95AFC46DD740A27EEE7B32F25E601BC24BCE_at_G4W3229.americas.hpqcorp.net" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-12 17:44:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13425.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] iWARP development"</a>
<li><strong>Previous message:</strong> <a href="13423.php">Prindeville, Philip: "Re: [OMPI devel] iWARP development"</a>
<li><strong>In reply to:</strong> <a href="13423.php">Prindeville, Philip: "Re: [OMPI devel] iWARP development"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13425.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] iWARP development"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We already have conditional compilation there at configure time (see
<br>
ompi/mca/btl/sctp/configure.m4) so it won't built unless requested.
<br>
Likewise, you can use the MCA params to select to use it or not (-mca btl
<br>
sctp,sm,self).
<br>
<p>I'm not aware of any sctp-specific tests. However, there are lots of simple
<br>
MPI tests you could run that would test it as a BTL - anything that would
<br>
exchange data across nodes, for example.
<br>
<p>Nobody has spoken up to &quot;own&quot; the sctp btl at this time, so I think you'd
<br>
have a pretty free hand with it (subject to our usual critique to ensure
<br>
consistency across the BTLs).
<br>
<p><p><p>On Thu, Dec 12, 2013 at 4:31 PM, Prindeville, Philip &lt;
<br>
philip.prindeville_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  I think I understand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ll pull a copy of trunk and dig around in there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a reason that the code can&#146;t be gated by conditional compilation
</span><br>
<span class="quotelev1">&gt; flags or detect the environment at run-time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there anything in the way of a set of verification tests?  And what&#146;s
</span><br>
<span class="quotelev1">&gt; the provenance of the SCTP code that&#146;s in trunk?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Philip
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
<span class="quotelev1">&gt; *From:* devel [mailto:devel-bounces_at_[hidden]] *On Behalf Of *Ralph
</span><br>
<span class="quotelev1">&gt; Castain
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, December 12, 2013 8:41 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI devel] iWARP development
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Be aware that we removed SCTP from the 1.7 release series because of its
</span><br>
<span class="quotelev1">&gt; unknown state of repair - I don't believe anyone has tested it in quite
</span><br>
<span class="quotelev1">&gt; some time, and nobody has been maintaining it so far as we know. Not saying
</span><br>
<span class="quotelev1">&gt; it won't work - just saying that I don't think we know :-/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 11, 2013 at 6:07 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 11, 2013, at 5:33 PM, &quot;Prindeville, Philip&quot; &lt;
</span><br>
<span class="quotelev1">&gt; philip.prindeville_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I was wondering what the current state of iWARP development is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI's iWARP support is part of the &quot;openib&quot; BTL (so named because
</span><br>
<span class="quotelev1">&gt; OpenFabrics used to be known as OpenIB, before iWARP joined, and we never
</span><br>
<span class="quotelev1">&gt; changed the name of our plugin after OFA became OFA).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; There are some features we&#146;re interested in, and from what I can tell
</span><br>
<span class="quotelev1">&gt; the iWARP RFCs/Internet Drafts haven&#146;t caught up to related developments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As George mentioned, we deleted the SCTP plugin from the 1.7 release
</span><br>
<span class="quotelev1">&gt; branch -- but that's a standalone SCTP plugin, which is not what I think
</span><br>
<span class="quotelev1">&gt; you're asking about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Part of our interest is in using SCTP as the LLP for iWARP, and updating
</span><br>
<span class="quotelev1">&gt; that adaptation to the latest SCTP work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gotcha.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; For instance:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; RFC 6458 &#150; SCTP authentication
</span><br>
<span class="quotelev2">&gt; &gt; RFC 6458 &#150; SCTP out-of-order delivery
</span><br>
<span class="quotelev2">&gt; &gt; RFC 6458 &#150; SCTP association end-point address changes
</span><br>
<span class="quotelev2">&gt; &gt; RFC 6458 &#150; SCTP Receive Information
</span><br>
<span class="quotelev2">&gt; &gt; RFC 6458 &#150; SCTP partially reliable delivery
</span><br>
<span class="quotelev2">&gt; &gt; RFC 6458 &#150; SCTP key management
</span><br>
<span class="quotelev2">&gt; &gt; RFC 5061 &#150; SCTP Dynamic address reconfiguration (useful for hot NIC
</span><br>
<span class="quotelev1">&gt; swaps in a high availability environment)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We&#146;d also like to see load-sharing in multipath environments, and
</span><br>
<span class="quotelev1">&gt; sender-side traffic shaping support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds nifty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; From what I can tell, the iWARP SCTP work that&#146;s been done predates
</span><br>
<span class="quotelev1">&gt; RFC-6458, and hence I&#146;m assuming it&#146;s aligned to RFC-5043.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Other questions I have:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Has this code been tested extensively on non-x86 platforms?  What about
</span><br>
<span class="quotelev1">&gt; IA64, PPC64, ARM7, or MIPS 7K?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doubtful.  The openib BTL is known to work with IB and iWARP on a variety
</span><br>
<span class="quotelev1">&gt; of x86 platforms.  I have no idea, and would kinda doubt, if it has been
</span><br>
<span class="quotelev1">&gt; tested on any of the other platforms you've specified.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is anyone doing any code to port SolarFlare OpenOnload stack to support
</span><br>
<span class="quotelev1">&gt; Open MPI&#146;s iWARP?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nope.  SF has told me/others that they're happy just doing their onload
</span><br>
<span class="quotelev1">&gt; TCP through OMPI -- they don't see the need to do their own OO plugin (but
</span><br>
<span class="quotelev1">&gt; don't take my word for it; I certainly cannot speak for them -- feel free
</span><br>
<span class="quotelev1">&gt; to ask them yourself).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; And a minor note&#133; Just looking at the 1.7.3 tarball and grepping for
</span><br>
<span class="quotelev1">&gt; SCTP in it, I find only a few matches, such as this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; evutil_getaddrinfo_infer_protocols(struct evutil_addrinfo *hints)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; &#133;
</span><br>
<span class="quotelev2">&gt; &gt; #ifdef IPPROTO_SCTP
</span><br>
<span class="quotelev2">&gt; &gt;                                 else if (hints-&gt;ai_protocol ==
</span><br>
<span class="quotelev1">&gt; IPPROTO_SCTP)
</span><br>
<span class="quotelev2">&gt; &gt;                                                 hints-&gt;ai_socktype =
</span><br>
<span class="quotelev1">&gt; SOCK_STREAM;
</span><br>
<span class="quotelev2">&gt; &gt; #endif
</span><br>
<span class="quotelev2">&gt; &gt;                 }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And this has me puzzled: SCTP is predominately a SOCK_SEQPACKET, isn&#146;t
</span><br>
<span class="quotelev1">&gt; it? (The whole point of using it and not TCP as a transport is it preserves
</span><br>
<span class="quotelev1">&gt; record boundaries, supports out-of-order delivery and message interleaving,
</span><br>
<span class="quotelev1">&gt; etc.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At least, that&#146;s how it registers itself as a protocol in Linux 3.12 in
</span><br>
<span class="quotelev1">&gt; net/sctp/protocol.c &#133;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Apologies if there&#146;s a better mailing list for iWARP specific questions.
</span><br>
<span class="quotelev1">&gt; I&#146;m looking at a lot of this stuff for the first time and having to ramp up
</span><br>
<span class="quotelev1">&gt; quickly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Philip
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13424/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13425.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] iWARP development"</a>
<li><strong>Previous message:</strong> <a href="13423.php">Prindeville, Philip: "Re: [OMPI devel] iWARP development"</a>
<li><strong>In reply to:</strong> <a href="13423.php">Prindeville, Philip: "Re: [OMPI devel] iWARP development"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13425.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] iWARP development"</a>
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
