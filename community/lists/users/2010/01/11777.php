<?
$subject_val = "Re: [OMPI users] Rapid I/O support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 15:08:39 2010" -->
<!-- isoreceived="20100114200839" -->
<!-- sent="Thu, 14 Jan 2010 15:08:34 -0500" -->
<!-- isosent="20100114200834" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rapid I/O support" -->
<!-- id="B2031B26-1916-4052-92D1-36F7B0145940_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1479c0911001141059g6084f358hc2f593fd3c263f2d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Rapid I/O support<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-14 15:08:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11778.php">Jeff Squyres: "Re: [OMPI users] More NetBSD fixes"</a>
<li><strong>Previous message:</strong> <a href="11776.php">Roland Schulz: "[OMPI users] Setting MCA parameter from within program"</a>
<li><strong>In reply to:</strong> <a href="11775.php">TONY BASIL: "[OMPI users] Rapid I/O support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11794.php">Scott Atchley: "Re: [OMPI users] Rapid I/O support"</a>
<li><strong>Reply:</strong> <a href="11794.php">Scott Atchley: "Re: [OMPI users] Rapid I/O support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 14, 2010, at 1:59 PM, TONY BASIL wrote:
<br>
<p><span class="quotelev1">&gt; I am doing a project with an HPC set up on multicore Power PC..Nodes will be connected
</span><br>
<span class="quotelev1">&gt; using Rapid I/O instead for Gigabit Ethernet...I would like to know if OpenMPI supports
</span><br>
<span class="quotelev1">&gt; Rapid I/O...
</span><br>
<p>I'm afraid not.  Before your post, I had never heard of Rapid IO.
<br>
<p>That being said, Open MPI is based on plugins, so someone could write a plugin for Radio IO support, if they were so inclined.
<br>
<p><span class="quotelev1">&gt; If not is there any alternative other than Gigabit ethernet...The network traffic will be
</span><br>
<span class="quotelev1">&gt; huge as data comes from a sensor...so a faster alternative is preferred...
</span><br>
<p>Open MPI supports a wide variety of networks:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;- OpenFabrics: InfiniBand and iWARP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Myrinet: GM and MX
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Qlogic PSM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Portals
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Quadrics Elan
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Shared memory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- TCP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- SCTP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- uDAPL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Loopback (send-to-self)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11778.php">Jeff Squyres: "Re: [OMPI users] More NetBSD fixes"</a>
<li><strong>Previous message:</strong> <a href="11776.php">Roland Schulz: "[OMPI users] Setting MCA parameter from within program"</a>
<li><strong>In reply to:</strong> <a href="11775.php">TONY BASIL: "[OMPI users] Rapid I/O support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11794.php">Scott Atchley: "Re: [OMPI users] Rapid I/O support"</a>
<li><strong>Reply:</strong> <a href="11794.php">Scott Atchley: "Re: [OMPI users] Rapid I/O support"</a>
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
