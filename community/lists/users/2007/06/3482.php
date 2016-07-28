<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 03:19:23 2007" -->
<!-- isoreceived="20070613071923" -->
<!-- sent="Wed, 13 Jun 2007 09:21:14 +0200" -->
<!-- isosent="20070613072114" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP connection errors" -->
<!-- id="20070613072114.GJ13561_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="645d17210706121237k1a2ca1bfj618ba23c2ac6e51d_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-06-13 03:21:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3483.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3481.php">Julian Cummings: "[OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>In reply to:</strong> <a href="3478.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3483.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Reply:</strong> <a href="3483.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jun 12, 2007 at 08:37:38PM +0100, Jonathan Underwood wrote:
<br>
<p><span class="quotelev3">&gt; &gt; &gt; Presumably switching the two interfaces on the frontend (eth0&lt;-&gt;eth1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; would also solve this problem?
</span><br>
<span class="quotelev2">&gt; &gt; If you have root privileges this seems to be a another good approach.
</span><br>
<span class="quotelev1">&gt; I don't, but will explain the issue to sysadmin. Thanks again.
</span><br>
<p>I suggest to get rid of this senseless naming (eth0, eth1) and use
<br>
self-explanatory names.
<br>
<p>To illustrate it, here are some lines from /etc/mactab. It's a mapping
<br>
between MAC addresses and the desired names. The file can be shared
<br>
between cluster nodes, in other words, just put in all your MAC
<br>
addresses and copy it around:
<br>
<p># ipc654
<br>
ethsvc  00:00:5a:9e:a8:83
<br>
ethmp   00:0e:0c:06:2f:af
<br>
ethfrz  00:0e:0c:06:2c:9b
<br>
<p># heidi
<br>
ethsvc  00:11:d8:37:98:30
<br>
ethmp   00:00:5a:9a:0b:6c
<br>
<p># inge
<br>
ethsvc  00:11:d8:37:94:71 
<br>
ethmp   00:00:5a:9b:36:de 
<br>
<p>where &quot;svc&quot; means &quot;service&quot; and &quot;mp&quot; means &quot;message passing&quot;. By this,
<br>
we can say &quot;btl_tcp_if_include=ethmp&quot;. Obviously, this would solve your
<br>
problem.
<br>
<p>This /etc/mactab stuff requires the tool &quot;nameif&quot; (package net-tools in
<br>
Debian) and needs to be called before the interfaces are pulled up.
<br>
<p>For Debian, we use:
<br>
<p># /etc/network/interfaces -- configuration file for ifup(8), ifdown(8)
<br>
auto lo
<br>
iface lo inet loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pre-up nameif -s
<br>
<p>auto ethsvc
<br>
# the usual stuff
<br>
<p>For Gentoo, we have in /etc/conf.d/net:
<br>
<p># rename interfaces according to /etc/mactab
<br>
preup()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ip link set &quot;${IFACE}&quot; down || true
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nameif -s
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0
<br>
}
<br>
<p><p>If a system has more than one NIC, I would never let the kernel define
<br>
the naming, but always use /etc/mactab instead.
<br>
<p><p>HTH
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3483.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Previous message:</strong> <a href="3481.php">Julian Cummings: "[OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>In reply to:</strong> <a href="3478.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3483.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>Reply:</strong> <a href="3483.php">Jonathan Underwood: "Re: [OMPI users] TCP connection errors"</a>
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
