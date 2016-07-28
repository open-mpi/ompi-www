<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  3 16:01:14 2013" -->
<!-- isoreceived="20130703200114" -->
<!-- sent="Wed, 3 Jul 2013 22:00:49 +0200" -->
<!-- isosent="20130703200049" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="CAJGE3zXTuh9=9tLFnPDJBUUbGLUmYZpzcEzbJGN1mL+Z_=GThQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F6E94C8_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Riccardo Murri (<em>riccardo.murri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-03 16:00:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22232.php">basma a.azeem: "[OMPI users] checkpoint - restart of version 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="22230.php">Jeff Squyres (jsquyres): "Re: [OMPI users] jemalloc and crash in opal_memory_linux_ptmalloc2_open"</a>
<li><strong>In reply to:</strong> <a href="22229.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22252.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22252.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, Ralph,
<br>
<p>first of all: thanks for your work on this!
<br>
<p>On 3 July 2013 21:09, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 1. The root cause of the issue is that you are assigning a
</span><br>
<span class="quotelev1">&gt; non-existent IP address to a name.  I.e., &lt;foo&gt; maps to 127.0.1.1,
</span><br>
<span class="quotelev1">&gt; but that IP address does not exist anywhere.  Hence, OMPI will never
</span><br>
<span class="quotelev1">&gt; conclude that that &lt;foo&gt; is &quot;local&quot;.  If you had assigned &lt;foo&gt; to
</span><br>
<span class="quotelev1">&gt; the 127.0.0.1 address, things should have worked fine.
</span><br>
<p>Ok, I see.  Would that have worked also if I had added the 127.0.1.1
<br>
address to the &quot;lo&quot; interface (in addition to 127.0.0.1)?
<br>
<p><p><span class="quotelev1">&gt; Just curious: why are you doing this?
</span><br>
<p>It's commonplace in Ubuntu/Debian installations; see, e.g.,
<br>
<a href="http://serverfault.com/questions/363095/what-does-127-0-1-1-represent-in-etc-hosts">http://serverfault.com/questions/363095/what-does-127-0-1-1-represent-in-etc-hosts</a>
<br>
<p>In our case, it was rolled out as a fix for some cron job running on
<br>
Apache servers (apparently Debian's Apache looks up 127.0.1.1 and uses
<br>
that as the ServerName, unless a server name is not explicitly
<br>
configured), which was later extended to all hosts because &quot;what harm
<br>
can it do?&quot;.
<br>
<p>(Needless to say, we have rolled back the change.)
<br>
<p><p><span class="quotelev1">&gt; 2. That being said, OMPI is not currently looking at all the
</span><br>
<span class="quotelev1">&gt; responses from gethostbyname() -- we're only looking at the first
</span><br>
<span class="quotelev1">&gt; one.  In the spirit of how clients are supposed to behave when
</span><br>
<span class="quotelev1">&gt; multiple IP addresses are returned from a single name lookup, OMPI
</span><br>
<span class="quotelev1">&gt; should examine all of those addresses and see if it finds one that
</span><br>
<span class="quotelev1">&gt; it &quot;likes&quot;, and then use that.  So we should extend OMPI to examine
</span><br>
<span class="quotelev1">&gt; all the IP addresses from gethostbyname().
</span><br>
<p>Just for curiosity: would it have worked, had I compiled OMPI with
<br>
IPv6 support?  (As far as I understand IPv6, an application is
<br>
required to examine all the addresses returned for a host name, and
<br>
not just pick the first one.)
<br>
<p><p><span class="quotelev1">&gt; Ralph is going to work on this, but it'll likely take him a little
</span><br>
<span class="quotelev1">&gt; time to get it done.  We'll get it into the trunk and probably ask
</span><br>
<span class="quotelev1">&gt; you to verify that it works for you.  And if so, we'll back-port to
</span><br>
<span class="quotelev1">&gt; the v1.6 and v1.7 series.
</span><br>
<p>I'm glad to help and verify, but I guess we do not need the backport
<br>
or an urgent fix.  The easy workaround for us was to remove the
<br>
127.0.1.1 line from the compute nodes (we keep it only on Apache
<br>
servers where it originated).
<br>
<p>Thanks,
<br>
Riccardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22232.php">basma a.azeem: "[OMPI users] checkpoint - restart of version 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="22230.php">Jeff Squyres (jsquyres): "Re: [OMPI users] jemalloc and crash in opal_memory_linux_ptmalloc2_open"</a>
<li><strong>In reply to:</strong> <a href="22229.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22252.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="22252.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
