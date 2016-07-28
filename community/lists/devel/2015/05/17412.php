<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 16 18:00:01 2015" -->
<!-- isoreceived="20150516220001" -->
<!-- sent="Sat, 16 May 2015 14:59:35 -0700" -->
<!-- isosent="20150516215935" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579" -->
<!-- id="CAAvDA178Q5OSbAM=HV5wdtZKx2RXeEwNQq4yybF+JEun=+WEaQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1821892.gbQ3i9ipi7_at_quad" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-16 17:59:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17413.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Previous message:</strong> <a href="17411.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>In reply to:</strong> <a href="17411.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17413.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Reply:</strong> <a href="17413.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
AIX, Solaris and {Free,Open,Net}BSD results are also not consistent with
<br>
regards to units used for reporting:
<br>
<p>AIX$ no -o tcp_keepidle -o tcp_keepintvl
<br>
tcp_keepidle = 14400
<br>
tcp_keepintvl = 150
<br>
<p>{phargrov_at_solaris11-amd64 ~}$ ndd -get /dev/tcp tcp_keepalive_interval
<br>
7200000
<br>
<p>[phargrov_at_freebsd10-amd64 ~]$ sysctl net.inet.tcp.keepidle
<br>
net.inet.tcp.keepintvl
<br>
net.inet.tcp.keepidle: 7200000
<br>
net.inet.tcp.keepintvl: 75000
<br>
<p>[openbsd5-amd64 ~]$ sysctl net.inet.tcp.keepidle net.inet.tcp.keepintvl
<br>
net.inet.tcp.keepidle=14400
<br>
net.inet.tcp.keepintvl=150
<br>
<p>[netbsd6-amd64 ~]$ /sbin/sysctl net.inet.tcp.keepidle net.inet.tcp.keepintvl
<br>
net.inet.tcp.keepidle = 14400
<br>
net.inet.tcp.keepintvl = 150
<br>
<p><p>At least AIX documents these values as having units of HALF SECOND.
<br>
I suspect that that is also true of the OpenBSD and NetBSD values above,
<br>
because then all keepidle values seen so far are the same 2-hours  (except
<br>
Jeff's one RHEL-6.5 system).
<br>
<p><p>I *was* able to find units use for setting these documented on several
<br>
systems:
<br>
<p>On Linux, FreeBSD and NetBSD the respective tcp(4) man pages all document
<br>
TCP_KEEPIDLE and TCP_KEEPINTVL socket options as taking *seconds* for their
<br>
arguments.
<br>
Even AIX-7.1's setsockopt manpage says seconds are used to set these two
<br>
socket options.
<br>
<p>My OS X 10.8 system's tcp(4) has different names (TCP_KEEPALIVE and
<br>
TCP_CONNECTIONTIMEOUT) which are documented as corresponding to the sysctl
<br>
values, but it *does* agree that units of seconds are used to set these
<br>
options.
<br>
<p>I didn't find OpenBSD or Solaris docs (&quot;grep -rl TCP_KEEP /usr/share/man&quot;
<br>
didn't find any matches).
<br>
<p>So in summary:
<br>
<p>+ sysctl (or equiv) reports in non-standardized units (including seconds,
<br>
half-seconds and milliseconds).
<br>
+ setsockopt() uses seconds on all systems I found documented (Linux, OS X,
<br>
FreeBSD, NetBSD and AIX)
<br>
<p>-Paul
<br>
<p>P.S.
<br>
re: AIX - seriously &quot;no&quot; (I am guessing (n)etwork (o)ptions) as the command
<br>
name!
<br>
<p><p>On Sat, May 16, 2015 at 6:25 AM, Chris Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Sat, 16 May 2015 12:49:51 PM Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Linux / RHEL 6.5 / 2.6.32 kernel (this is clearly in seconds):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ sysctl net.ipv4.tcp_keepalive_time
</span><br>
<span class="quotelev2">&gt; &gt; net.ipv4.tcp_keepalive_time = 1800
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect that's a local customisation, all Linux systems I've got access
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; (including RHEL 6.4/6.5/6.6) report:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; net.ipv4.tcp_keepalive_time = 7200
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;  VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt;  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17411.php">http://www.open-mpi.org/community/lists/devel/2015/05/17411.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17412/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17413.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Previous message:</strong> <a href="17411.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>In reply to:</strong> <a href="17411.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17413.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
<li><strong>Reply:</strong> <a href="17413.php">Chris Samuel: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1731-g8e30579"</a>
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
