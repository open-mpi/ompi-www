<?
$subject_val = "Re: [OMPI devel] iWARP development";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 11 19:07:19 2013" -->
<!-- isoreceived="20131212000719" -->
<!-- sent="Thu, 12 Dec 2013 00:07:17 +0000" -->
<!-- isosent="20131212000717" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iWARP development" -->
<!-- id="C7228707-53E5-418C-9E6B-C59968F5A215_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="F6DD95AFC46DD740A27EEE7B32F25E601BC238AC_at_G4W3229.americas.hpqcorp.net" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-11 19:07:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13417.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI developer's meeting today"</a>
<li><strong>Previous message:</strong> <a href="13415.php">George Bosilca: "Re: [OMPI devel] iWARP development"</a>
<li><strong>In reply to:</strong> <a href="13414.php">Prindeville, Philip: "[OMPI devel] iWARP development"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13418.php">Ralph Castain: "Re: [OMPI devel] iWARP development"</a>
<li><strong>Reply:</strong> <a href="13418.php">Ralph Castain: "Re: [OMPI devel] iWARP development"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 11, 2013, at 5:33 PM, &quot;Prindeville, Philip&quot; &lt;philip.prindeville_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I was wondering what the current state of iWARP development is.  
</span><br>
<p>Open MPI's iWARP support is part of the &quot;openib&quot; BTL (so named because OpenFabrics used to be known as OpenIB, before iWARP joined, and we never changed the name of our plugin after OFA became OFA).
<br>
<p><span class="quotelev1">&gt; There are some features we&#146;re interested in, and from what I can tell the iWARP RFCs/Internet Drafts haven&#146;t caught up to related developments.
</span><br>
<p>As George mentioned, we deleted the SCTP plugin from the 1.7 release branch -- but that's a standalone SCTP plugin, which is not what I think you're asking about it.
<br>
<p><span class="quotelev1">&gt; Part of our interest is in using SCTP as the LLP for iWARP, and updating that adaptation to the latest SCTP work.
</span><br>
<p>Gotcha.
<br>
<p><span class="quotelev1">&gt; For instance:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; RFC 6458 &#150; SCTP authentication
</span><br>
<span class="quotelev1">&gt; RFC 6458 &#150; SCTP out-of-order delivery
</span><br>
<span class="quotelev1">&gt; RFC 6458 &#150; SCTP association end-point address changes
</span><br>
<span class="quotelev1">&gt; RFC 6458 &#150; SCTP Receive Information
</span><br>
<span class="quotelev1">&gt; RFC 6458 &#150; SCTP partially reliable delivery
</span><br>
<span class="quotelev1">&gt; RFC 6458 &#150; SCTP key management
</span><br>
<span class="quotelev1">&gt; RFC 5061 &#150; SCTP Dynamic address reconfiguration (useful for hot NIC swaps in a high availability environment)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; We&#146;d also like to see load-sharing in multipath environments, and sender-side traffic shaping support.
</span><br>
<p>Sounds nifty.
<br>
<p><span class="quotelev1">&gt; From what I can tell, the iWARP SCTP work that&#146;s been done predates RFC-6458, and hence I&#146;m assuming it&#146;s aligned to RFC-5043.
</span><br>
<p>Sure...?
<br>
<p><span class="quotelev1">&gt; Other questions I have:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Has this code been tested extensively on non-x86 platforms?  What about IA64, PPC64, ARM7, or MIPS 7K?
</span><br>
<p>Doubtful.  The openib BTL is known to work with IB and iWARP on a variety of x86 platforms.  I have no idea, and would kinda doubt, if it has been tested on any of the other platforms you've specified.
<br>
<p><span class="quotelev1">&gt; Is anyone doing any code to port SolarFlare OpenOnload stack to support Open MPI&#146;s iWARP?
</span><br>
<p>Nope.  SF has told me/others that they're happy just doing their onload TCP through OMPI -- they don't see the need to do their own OO plugin (but don't take my word for it; I certainly cannot speak for them -- feel free to ask them yourself).
<br>
<p><span class="quotelev1">&gt; And a minor note&#133; Just looking at the 1.7.3 tarball and grepping for SCTP in it, I find only a few matches, such as this:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; evutil_getaddrinfo_infer_protocols(struct evutil_addrinfo *hints)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; &#133;
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
<span class="quotelev1">&gt; And this has me puzzled: SCTP is predominately a SOCK_SEQPACKET, isn&#146;t it? (The whole point of using it and not TCP as a transport is it preserves record boundaries, supports out-of-order delivery and message interleaving, etc.)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; At least, that&#146;s how it registers itself as a protocol in Linux 3.12 in net/sctp/protocol.c &#133;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Apologies if there&#146;s a better mailing list for iWARP specific questions. I&#146;m looking at a lot of this stuff for the first time and having to ramp up quickly.
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
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13417.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI developer's meeting today"</a>
<li><strong>Previous message:</strong> <a href="13415.php">George Bosilca: "Re: [OMPI devel] iWARP development"</a>
<li><strong>In reply to:</strong> <a href="13414.php">Prindeville, Philip: "[OMPI devel] iWARP development"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13418.php">Ralph Castain: "Re: [OMPI devel] iWARP development"</a>
<li><strong>Reply:</strong> <a href="13418.php">Ralph Castain: "Re: [OMPI devel] iWARP development"</a>
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
