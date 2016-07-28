<?
$subject_val = "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 29 07:23:26 2012" -->
<!-- isoreceived="20120629112326" -->
<!-- sent="Fri, 29 Jun 2012 07:23:22 -0400" -->
<!-- isosent="20120629112322" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6" -->
<!-- id="040CF1DF-24FB-4D63-8B7B-31BE197F71EF_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CADEJBEUgBU2QXxnnKzLgOoSg7chx_KCQQoBsRygumFJO9e+G6A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-29 07:23:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19704.php">Jeff Squyres: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Previous message:</strong> <a href="19702.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>In reply to:</strong> <a href="19699.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19710.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19710.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 28, 2012, at 8:04 PM, Yong Qin wrote:
<br>
<p><span class="quotelev1">&gt; Thanks to Jeff, we now have a bug registered with the segv issue.
</span><br>
<p>There may be some confusion here with the fact that OMPI supports 2 different MX transports: an MTL and a BTL.  Here's what the README says:
<br>
<p>-----
<br>
- Myrinet MX (and Open-MX) support is shared between the 2 internal
<br>
&nbsp;&nbsp;devices, the MTL and the BTL.  The design of the BTL interface in
<br>
&nbsp;&nbsp;Open MPI assumes that only naive one-sided communication
<br>
&nbsp;&nbsp;capabilities are provided by the low level communication layers.
<br>
&nbsp;&nbsp;However, modern communication layers such as Myrinet MX, InfiniPath
<br>
&nbsp;&nbsp;PSM, or Portals, natively implement highly-optimized two-sided
<br>
&nbsp;&nbsp;communication semantics.  To leverage these capabilities, Open MPI
<br>
&nbsp;&nbsp;provides the &quot;cm&quot; PML and corresponding MTL components to transfer
<br>
&nbsp;&nbsp;messages rather than bytes.  The MTL interface implements a shorter
<br>
&nbsp;&nbsp;code path and lets the low-level network library decide which
<br>
&nbsp;&nbsp;protocol to use (depending on issues such as message length,
<br>
&nbsp;&nbsp;internal resources and other parameters specific to the underlying
<br>
&nbsp;&nbsp;interconnect).  However, Open MPI cannot currently use multiple MTL
<br>
&nbsp;&nbsp;modules at once.  In the case of the MX MTL, process loopback and
<br>
&nbsp;&nbsp;on-node shared memory communications are provided by the MX library.
<br>
&nbsp;&nbsp;Moreover, the current MX MTL does not support message pipelining
<br>
&nbsp;&nbsp;resulting in lower performances in case of non-contiguous
<br>
&nbsp;&nbsp;data-types.
<br>
<p>&nbsp;&nbsp;The &quot;ob1&quot; and &quot;csum&quot; PMLs and BTL components use Open MPI's internal
<br>
&nbsp;&nbsp;on-node shared memory and process loopback devices for high
<br>
&nbsp;&nbsp;performance.  The BTL interface allows multiple devices to be used
<br>
&nbsp;&nbsp;simultaneously.  For the MX BTL it is recommended that the first
<br>
&nbsp;&nbsp;segment (which is as a threshold between the eager and the
<br>
&nbsp;&nbsp;rendezvous protocol) should always be at most 4KB, but there is no
<br>
&nbsp;&nbsp;further restriction on the size of subsequent fragments.
<br>
<p>&nbsp;&nbsp;The MX MTL is recommended in the common case for best performance on
<br>
&nbsp;&nbsp;10G hardware when most of the data transfers cover contiguous memory
<br>
&nbsp;&nbsp;layouts.  The MX BTL is recommended in all other cases, such as when
<br>
&nbsp;&nbsp;using multiple interconnects at the same time (including TCP), or
<br>
&nbsp;&nbsp;transferring non contiguous data-types.
<br>
-----
<br>
<p>If you want to use the MX MTL, it may be simplest to simply remove the MX BTL plugin from your installation directory.  That way, it *should* auto-select the MX MTL when you have machines with MX, and when you're on machines that do not have MX but do have OpenFabrics devices, it should auto-select the openib BTL.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19704.php">Jeff Squyres: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Previous message:</strong> <a href="19702.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>In reply to:</strong> <a href="19699.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19710.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19710.php">Yong Qin: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
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
