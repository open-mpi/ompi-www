<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 17:02:46 2006" -->
<!-- isoreceived="20060331220246" -->
<!-- sent="Sat, 1 Apr 2006 00:03:00 +0200" -->
<!-- isosent="20060331220300" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="20060331220300.GV16388_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20060331190655.GB1830_at_odin.ac.hmc.edu" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-31 17:03:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0804.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0802.php">Josh Aune: "[OMPI devel] process ordering/processes per node"</a>
<li><strong>In reply to:</strong> <a href="0798.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0804.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0804.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 31, 2006 at 11:06:55AM -0800, Brooks Davis wrote:
<br>
<p><span class="quotelev2">&gt; &gt; One little problem here is that it is possible to disable the
</span><br>
<span class="quotelev2">&gt; &gt; IPv6-mapped IPv4 addresses at least under Linux and some BSD variants.
</span><br>
<span class="quotelev2">&gt; &gt; For Linux, have a look at sys.net.ipv6.bindv6only.  Some authors even
</span><br>
<span class="quotelev1">&gt; More specifically, KAME derived (BSD) stacks disable them by default so
</span><br>
<p>In addition, OpenBSD doesn't provide mapped addresses. Though this
<br>
is a violation of RFC 4291, RFC 4038 &quot;recommends&quot; this approach:
<br>
<p>&nbsp;&nbsp;&nbsp;Note that some systems will disable (by default) support for internal
<br>
&nbsp;&nbsp;&nbsp;IPv4-mapped IPv6 addresses.  The security concerns regarding these
<br>
&nbsp;&nbsp;&nbsp;are legitimate, but disabling them internally breaks one transition
<br>
&nbsp;&nbsp;&nbsp;mechanism for server applications originally written to bind() and
<br>
&nbsp;&nbsp;&nbsp;listen() to a single socket by using a wildcard address.  This forces
<br>
&nbsp;&nbsp;&nbsp;the software developer to rewrite the daemon to create two separate
<br>
&nbsp;&nbsp;&nbsp;sockets, one for IPv4 only and the other for IPv6 only, and then to
<br>
&nbsp;&nbsp;&nbsp;use select().  However, mapping-enabling of IPv4 addresses on any
<br>
&nbsp;&nbsp;&nbsp;particular system is controlled by the OS owner and not necessarily
<br>
&nbsp;&nbsp;&nbsp;by a developer.  This complicates developers' work, as they now have
<br>
&nbsp;&nbsp;&nbsp;to rewrite the daemon network code to handle both environments, even
<br>
&nbsp;&nbsp;&nbsp;for the same OS.
<br>
<p><span class="quotelev1">&gt; it might be best to assume it doesn't work since you'll probably have
</span><br>
<span class="quotelev1">&gt; to support that case anyway.
</span><br>
<p>ACK. But what does this imply? Do we already have select()ed
<br>
binds, in other words, can we simply spawn two listen()-sockets?
<br>
<p>If we conclude not to use mapped addresses, will we end up
<br>
with btl/tcp and btl/tcp6?
<br>
<p>The OS support issue can be handled this way:
<br>
<p>union sockaddr_union {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct sockaddr sa;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct sockaddr_in sin;
<br>
#ifdef HAVE_IPV6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct sockaddr_in6 sin6;
<br>
#endif
<br>
};
<br>
<p>and later:
<br>
<p>/* copy IP to sockaddr */
<br>
static inline void
<br>
sin_set_ip(union sockaddr_union *so, const struct ip_addr *ip)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ip == NULL) {
<br>
#ifdef HAVE_IPV6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;so-&gt;sin6.sin6_family = AF_INET6;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;so-&gt;sin6.sin6_addr = in6addr_any;
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;so-&gt;sin.sin_family = AF_INET;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;so-&gt;sin.sin_addr.s_addr = INADDR_ANY;
<br>
#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>(code shamelessly borrowed from dovecot/src/lib/network.c)
<br>
<p>It might be a little harder to read, but it keeps both
<br>
versions (IPv4-only and IPv6) close together.
<br>
<p><p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Schei&#223;e wird nicht dadurch besser oder sicherer, dass man ein paar
Shareware-Warnl&#228;mpchen dranpappt. (Robin S. Socha &#252;ber &quot;Desktop-Firewalls&quot;)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0804.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0802.php">Josh Aune: "[OMPI devel] process ordering/processes per node"</a>
<li><strong>In reply to:</strong> <a href="0798.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0804.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0804.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
