<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 18:12:05 2013" -->
<!-- isoreceived="20131220231205" -->
<!-- sent="Fri, 20 Dec 2013 23:12:01 +0000" -->
<!-- isosent="20131220231201" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning" -->
<!-- id="36079CE5-535E-4E3E-8A8B-BADF8A6D61E8_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA170E5TASmsButza85wA9kT=WZ0SWFgNwG0tNpJH2GB4Hw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-20 18:12:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13539.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="13537.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="13535.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13540.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Reply:</strong> <a href="13540.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 20, 2013, at 4:43 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The warning is correct that no such interface exists.
</span><br>
<span class="quotelev1">&gt; However 127.0.0.1/24 DOES exist:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ifconfig lo0 inet
</span><br>
<span class="quotelev1">&gt; lo0: flags=8049&lt;UP,LOOPBACK,RUNNING,MULTICAST&gt; metric 0 mtu 16384
</span><br>
<span class="quotelev1">&gt;        options=600003&lt;RXCSUM,TXCSUM,RXCSUM_IPV6,TXCSUM_IPV6&gt;
</span><br>
<span class="quotelev1">&gt;        inet 127.0.0.1 netmask 0xff000000
</span><br>
<p>Minor quibble, Paul: that looks like 127.0.0.1/8 to me, not /24...
<br>
<p>I have no specific help to offer for this issue though, sorry.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13539.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="13537.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="13535.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13540.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Reply:</strong> <a href="13540.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
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
