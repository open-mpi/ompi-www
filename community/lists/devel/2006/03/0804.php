<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 17:29:39 2006" -->
<!-- isoreceived="20060331222939" -->
<!-- sent="Fri, 31 Mar 2006 14:29:37 -0800" -->
<!-- isosent="20060331222937" -->
<!-- name="Brooks Davis" -->
<!-- email="brooks_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="20060331222937.GA32433_at_odin.ac.hmc.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20060331220300.GV16388_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Brooks Davis (<em>brooks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-31 17:29:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/04/0805.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0803.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0803.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Apr 01, 2006 at 12:03:00AM +0200, Adrian Knoth wrote:
<br>
<span class="quotelev1">&gt; On Fri, Mar 31, 2006 at 11:06:55AM -0800, Brooks Davis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; One little problem here is that it is possible to disable the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; IPv6-mapped IPv4 addresses at least under Linux and some BSD variants.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For Linux, have a look at sys.net.ipv6.bindv6only.  Some authors even
</span><br>
<span class="quotelev2">&gt; &gt; More specifically, KAME derived (BSD) stacks disable them by default so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addition, OpenBSD doesn't provide mapped addresses. Though this
</span><br>
<span class="quotelev1">&gt; is a violation of RFC 4291, RFC 4038 &quot;recommends&quot; this approach:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Note that some systems will disable (by default) support for internal
</span><br>
<span class="quotelev1">&gt;    IPv4-mapped IPv6 addresses.  The security concerns regarding these
</span><br>
<span class="quotelev1">&gt;    are legitimate, but disabling them internally breaks one transition
</span><br>
<span class="quotelev1">&gt;    mechanism for server applications originally written to bind() and
</span><br>
<span class="quotelev1">&gt;    listen() to a single socket by using a wildcard address.  This forces
</span><br>
<span class="quotelev1">&gt;    the software developer to rewrite the daemon to create two separate
</span><br>
<span class="quotelev1">&gt;    sockets, one for IPv4 only and the other for IPv6 only, and then to
</span><br>
<span class="quotelev1">&gt;    use select().  However, mapping-enabling of IPv4 addresses on any
</span><br>
<span class="quotelev1">&gt;    particular system is controlled by the OS owner and not necessarily
</span><br>
<span class="quotelev1">&gt;    by a developer.  This complicates developers' work, as they now have
</span><br>
<span class="quotelev1">&gt;    to rewrite the daemon network code to handle both environments, even
</span><br>
<span class="quotelev1">&gt;    for the same OS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; it might be best to assume it doesn't work since you'll probably have
</span><br>
<span class="quotelev2">&gt; &gt; to support that case anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ACK. But what does this imply? Do we already have select()ed
</span><br>
<span class="quotelev1">&gt; binds, in other words, can we simply spawn two listen()-sockets?
</span><br>
<p>Looking at the code in btl_tcp_component.c it looks like it mostly is.
<br>
You'd just have to add another socket and register another event for it.
<br>
<p><span class="quotelev1">&gt; If we conclude not to use mapped addresses, will we end up
</span><br>
<span class="quotelev1">&gt; with btl/tcp and btl/tcp6?
</span><br>
<p>I'd certainly hope not.
<br>
<p><span class="quotelev1">&gt; The OS support issue can be handled this way:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; union sockaddr_union {
</span><br>
<span class="quotelev1">&gt;         struct sockaddr sa;
</span><br>
<span class="quotelev1">&gt;         struct sockaddr_in sin;
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_IPV6
</span><br>
<span class="quotelev1">&gt;         struct sockaddr_in6 sin6;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and later:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* copy IP to sockaddr */
</span><br>
<span class="quotelev1">&gt; static inline void
</span><br>
<span class="quotelev1">&gt; sin_set_ip(union sockaddr_union *so, const struct ip_addr *ip)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         if (ip == NULL) {
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_IPV6
</span><br>
<span class="quotelev1">&gt;                 so-&gt;sin6.sin6_family = AF_INET6;
</span><br>
<span class="quotelev1">&gt;                 so-&gt;sin6.sin6_addr = in6addr_any;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;                 so-&gt;sin.sin_family = AF_INET;
</span><br>
<span class="quotelev1">&gt;                 so-&gt;sin.sin_addr.s_addr = INADDR_ANY;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;                 return;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (code shamelessly borrowed from dovecot/src/lib/network.c)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It might be a little harder to read, but it keeps both
</span><br>
<span class="quotelev1">&gt; versions (IPv4-only and IPv6) close together.
</span><br>
<p>Based on experiences at work, I'd say dovecot is NOT a good example to
<br>
copy from.  We're running it on a dual stack network and you have to run
<br>
two copies which is lame.
<br>
<p>-- Brooks
<br>
<p><pre>
-- 
Any statement of the form &quot;X is the one, true Y&quot; is FALSE.
PGP fingerprint 655D 519C 26A7 82E7 2529  9BF0 5D8E 8BE9 F238 1AD4

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-0804/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/04/0805.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0803.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0803.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
