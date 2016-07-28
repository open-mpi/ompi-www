<?
$subject_val = "[OMPI devel] iWARP development";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 11 18:35:17 2013" -->
<!-- isoreceived="20131211233517" -->
<!-- sent="Wed, 11 Dec 2013 23:33:18 +0000" -->
<!-- isosent="20131211233318" -->
<!-- name="Prindeville, Philip" -->
<!-- email="philip.prindeville_at_[hidden]" -->
<!-- subject="[OMPI devel] iWARP development" -->
<!-- id="F6DD95AFC46DD740A27EEE7B32F25E601BC238AC_at_G4W3229.americas.hpqcorp.net" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] iWARP development<br>
<strong>From:</strong> Prindeville, Philip (<em>philip.prindeville_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-11 18:33:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13415.php">George Bosilca: "Re: [OMPI devel] iWARP development"</a>
<li><strong>Previous message:</strong> <a href="13413.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13415.php">George Bosilca: "Re: [OMPI devel] iWARP development"</a>
<li><strong>Reply:</strong> <a href="13415.php">George Bosilca: "Re: [OMPI devel] iWARP development"</a>
<li><strong>Reply:</strong> <a href="13416.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] iWARP development"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi.
<br>
<p>I was wondering what the current state of iWARP development is.  There are some features we're interested in, and from what I can tell the iWARP RFCs/Internet Drafts haven't caught up to related developments.  Part of our interest is in using SCTP as the LLP for iWARP, and updating that adaptation to the latest SCTP work.
<br>
<p>For instance:
<br>
<p>RFC 6458 - SCTP authentication
<br>
RFC 6458 - SCTP out-of-order delivery
<br>
RFC 6458 - SCTP association end-point address changes
<br>
RFC 6458 - SCTP Receive Information
<br>
RFC 6458 - SCTP partially reliable delivery
<br>
RFC 6458 - SCTP key management
<br>
RFC 5061 - SCTP Dynamic address reconfiguration (useful for hot NIC swaps in a high availability environment)
<br>
<p>We'd also like to see load-sharing in multipath environments, and sender-side traffic shaping support.
<br>
<p><span class="quotelev1">&gt;From what I can tell, the iWARP SCTP work that's been done predates RFC-6458, and hence I'm assuming it's aligned to RFC-5043.
</span><br>
<p>Other questions I have:
<br>
<p>Has this code been tested extensively on non-x86 platforms?  What about IA64, PPC64, ARM7, or MIPS 7K?
<br>
<p>Is anyone doing any code to port SolarFlare OpenOnload stack to support Open MPI's iWARP?
<br>
<p>And a minor note... Just looking at the 1.7.3 tarball and grepping for SCTP in it, I find only a few matches, such as this:
<br>
<p>evutil_getaddrinfo_infer_protocols(struct evutil_addrinfo *hints)
<br>
{
<br>
...
<br>
#ifdef IPPROTO_SCTP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if (hints-&gt;ai_protocol == IPPROTO_SCTP)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hints-&gt;ai_socktype = SOCK_STREAM;
<br>
#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>And this has me puzzled: SCTP is predominately a SOCK_SEQPACKET, isn't it? (The whole point of using it and not TCP as a transport is it preserves record boundaries, supports out-of-order delivery and message interleaving, etc.)
<br>
<p>At least, that's how it registers itself as a protocol in Linux 3.12 in net/sctp/protocol.c ...
<br>
<p>Apologies if there's a better mailing list for iWARP specific questions. I'm looking at a lot of this stuff for the first time and having to ramp up quickly.
<br>
<p>Thanks,
<br>
<p>-Philip
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13414/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13415.php">George Bosilca: "Re: [OMPI devel] iWARP development"</a>
<li><strong>Previous message:</strong> <a href="13413.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13415.php">George Bosilca: "Re: [OMPI devel] iWARP development"</a>
<li><strong>Reply:</strong> <a href="13415.php">George Bosilca: "Re: [OMPI devel] iWARP development"</a>
<li><strong>Reply:</strong> <a href="13416.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] iWARP development"</a>
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
