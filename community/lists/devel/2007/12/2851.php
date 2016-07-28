<?
$subject_val = "[OMPI devel] IPv4 mapped IPv6 addresses";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 09:48:30 2007" -->
<!-- isoreceived="20071214144830" -->
<!-- sent="Fri, 14 Dec 2007 15:48:15 +0100" -->
<!-- isosent="20071214144815" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="[OMPI devel] IPv4 mapped IPv6 addresses" -->
<!-- id="20071214144815.GB11368_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> [OMPI devel] IPv4 mapped IPv6 addresses<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-14 09:48:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2852.php">Brian W. Barrett: "Re: [OMPI devel] IPv4 mapped IPv6 addresses"</a>
<li><strong>Previous message:</strong> <a href="2850.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2852.php">Brian W. Barrett: "Re: [OMPI devel] IPv4 mapped IPv6 addresses"</a>
<li><strong>Reply:</strong> <a href="2852.php">Brian W. Barrett: "Re: [OMPI devel] IPv4 mapped IPv6 addresses"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>The current BTL/TCP and OOB/TCP code contains separate sockets for IPv4
<br>
and IPv6. Though it has never been a problem for me, this might cause an
<br>
out-of-FDs-error in large clusters. (IIRC, rhc has already pointed out
<br>
this issue)
<br>
<p>A possible way to reduce FD consumption would be the use of IPv4 mapped
<br>
IPv6 addresses. These addresses let one use a single AF_INET6 socket for
<br>
both, IPv4 and IPv6.
<br>
<p>One year ago, I've chosen not to employ these addresses for mainly two
<br>
reasons:
<br>
<p>&nbsp;&nbsp;&nbsp;- Windows XP doesn't support them
<br>
&nbsp;&nbsp;&nbsp;- OpenBSD has disabled them, but the system administrator can enable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;them at runtime
<br>
<p>These limitions are also mentioned here: 
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://en.wikipedia.org/wiki/IPv4_mapped_address#Limitations">http://en.wikipedia.org/wiki/IPv4_mapped_address#Limitations</a>
<br>
<p>Nowadays, Vista (and the Windows Server line) has support for
<br>
IPv4-mapped IPv6 addresses.
<br>
<p>If disabled on OpenBSD systems, the code wouldn't be able to do IPv4,
<br>
but as already mentioned, the admin could easily fix this.
<br>
<p>Should we consider moving towards these mapped addresses? The
<br>
implications:
<br>
<p>&nbsp;&nbsp;&nbsp;- less code, only one socket to handle
<br>
&nbsp;&nbsp;&nbsp;- better FD consumption
<br>
&nbsp;&nbsp;&nbsp;- breaks WinXP support, but not Vista/Longhorn or later
<br>
&nbsp;&nbsp;&nbsp;- requires non-default kernel runtime setting on OpenBSD for IPv4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;connections
<br>
<p>FWIW, FD consumption is the only real issue to consider.
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2852.php">Brian W. Barrett: "Re: [OMPI devel] IPv4 mapped IPv6 addresses"</a>
<li><strong>Previous message:</strong> <a href="2850.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2852.php">Brian W. Barrett: "Re: [OMPI devel] IPv4 mapped IPv6 addresses"</a>
<li><strong>Reply:</strong> <a href="2852.php">Brian W. Barrett: "Re: [OMPI devel] IPv4 mapped IPv6 addresses"</a>
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
