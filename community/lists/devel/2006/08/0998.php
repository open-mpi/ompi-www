<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 19 17:07:31 2006" -->
<!-- isoreceived="20060819210731" -->
<!-- sent="Sat, 19 Aug 2006 23:07:26 +0200" -->
<!-- isosent="20060819210726" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="[OMPI devel] A few notes on IPv6 status" -->
<!-- id="20060819210726.GE2730_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>Date:</strong> 2006-08-19 17:07:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0999.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Previous message:</strong> <a href="0997.php">Adrian Knoth: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1001.php">Adrian Knoth: "Re: [OMPI devel] A few notes on IPv6 status"</a>
<li><strong>Reply:</strong> <a href="1001.php">Adrian Knoth: "Re: [OMPI devel] A few notes on IPv6 status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>as mentioned earlier this year, I'm now working on IPv6 support
<br>
for OpenMPI.
<br>
<p>The main design goals are:
<br>
<p>&nbsp;&nbsp;&nbsp;- do not break existing IPv4 code
<br>
&nbsp;&nbsp;&nbsp;- compile on SUSv2 (without new socket API)
<br>
&nbsp;&nbsp;&nbsp;- do not use mapped addresses
<br>
&nbsp;&nbsp;&nbsp;- test the new code on many systems
<br>
<p>The porting of OPAL is more or less finished (at least on Linux, but
<br>
I'll do some investigations on *BSD and Solaris) and I've halfway
<br>
ported ORTE (perhaps I can manage it within the next two or three
<br>
weeks). I'll still have to write more test code, but that's already
<br>
scheduled for tomorrow.
<br>
<p>Christian Kauhaus proposed to set up a blog containing news about
<br>
progress, early patches and so on. Is there anyone who'd like to
<br>
read it? ;)
<br>
<p>I have a few questions to discuss:
<br>
<p>&nbsp;In opal/util/if.c:
<br>
<p>/*
<br>
&nbsp;*  Attempt to resolve the adddress as either a dotted decimal formated
<br>
&nbsp;*  string or a hostname and lookup corresponding interface.
<br>
&nbsp;*/
<br>
<p>int opal_ifaddrtoname(const char* if_addr, char* if_name, int length)
<br>
<p><p>And somewhere below:
<br>
<p>#define ADDRLEN 100
<br>
bool
<br>
opal_ifislocal(char *hostname)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char addrname[ADDRLEN + 1];
<br>
[..]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ret = opal_ifaddrtoname(hostname, addrname, ADDRLEN);
<br>
<p>Why ADDRLEN? Shouldn't IF_NAMESIZE (defined 32) do the job?
<br>
opal_ifaddrtoname copies the interface name to its second
<br>
parameter (here: addrname), so the largest string can only
<br>
be as long as IF_NAMESIZE.
<br>
<p>ORTE-question:
<br>
<p>According to RFC 3986 (and some others), I've implemented the
<br>
service string as follows:
<br>
<p>#ifdef IPV6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (addr.sin6_family == AF_INET) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ptr += sprintf(ptr, &quot;tcp://%s:%d&quot;, opal_sockaddr2str(&amp;addr),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ntohs(mca_oob_tcp_component.tcp_listen_port));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (addr.sin6_family == AF_INET6) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ptr += sprintf(ptr, &quot;tcp://[%s]:%d&quot;, opal_sockaddr2str(&amp;addr),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ntohs(mca_oob_tcp_component.tcp_listen_port));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ptr += sprintf(ptr, &quot;tcp://%s:%d&quot;, inet_ntoa(addr.sin_addr),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ntohs(mca_oob_tcp_component.tcp_listen_port));
<br>
#endif
<br>
<p><p>Do you agree with a resulting URL like tcp://[2001:6f8::1]:port or
<br>
do you think it should be tcp6://?
<br>
<p>I prefer the first one due to its RFC compliance. Both versions
<br>
won't interfear with existing libraries, because parse_uri would
<br>
return ORTE_ERR_BAD_PARAM in case of IPv6-connect strings on
<br>
ipv6-unaware systems.
<br>
<p>Is it ok to use -DIPV6 or should I rename it? Is there already
<br>
a way to get the operating system we're compiling for? (uname -s)
<br>
<p>IPv6 interface discovery (talking about opal/util/if.c again)
<br>
needs special treatment on some systems. Right now, I have
<br>
-DLINUX_IPV6 and I'd probably need to catch more (at least
<br>
HPUX defines SIOCGLIFADDR which is also present on OpenBSD).
<br>
<p>If I'd have something like -DLINUX, I wouldn't need to
<br>
introduce more defines (like -DLINUX_IPV6 oder -DBSD_IPV6).
<br>
<p>There is probably more to discuss (i.e. the CIDR support I've
<br>
implemented), but let's delay this until the first patch ;)
<br>
<p><p>Best regards.
<br>
<p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Win95 Error 188: User hat sich aufgeh&#228;ngt
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0999.php">Ralf Wildenhues: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<li><strong>Previous message:</strong> <a href="0997.php">Adrian Knoth: "Re: [OMPI devel] OpenMPI not conforming with the C90 spec?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1001.php">Adrian Knoth: "Re: [OMPI devel] A few notes on IPv6 status"</a>
<li><strong>Reply:</strong> <a href="1001.php">Adrian Knoth: "Re: [OMPI devel] A few notes on IPv6 status"</a>
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
