<?
$subject_val = "Re: [OMPI users] QLogic HCA random crash after prolonged use";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 21 01:23:51 2013" -->
<!-- isoreceived="20130421052351" -->
<!-- sent="Sun, 21 Apr 2013 05:23:38 +0000" -->
<!-- isosent="20130421052338" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] QLogic HCA random crash after prolonged use" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB7327DA763_at_ORSMSX154.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1366500984.87299.YahooMailNeo_at_web125104.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] QLogic HCA random crash after prolonged use<br>
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-21 01:23:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21758.php">Eric Chamberland: "[OMPI users] Misuse or bug with nested types?"</a>
<li><strong>Previous message:</strong> <a href="21756.php">Vanja Z: "[OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>In reply to:</strong> <a href="21756.php">Vanja Z: "[OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21784.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Reply:</strong> <a href="21784.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I have seen it recommended to use psm instead of openib for QLogic cards.
</span><br>
[Tom] 
<br>
Yes.  PSM will perform better and be more stable when running OpenMPI than using verbs.  Intel has acquired the InfiniBand assets of QLogic about a year ago.  These SDR HCAs are no longer supported, but should still work.  You can get the driver (ib_qib) and PSM library from OFED 1.5.4.1 or the current release OFED 3.5.
<br>
<p>With the current OFED 3.5 release there are included psm-release notes which start out this way (read down to the OpenMPI build instructions for PSM):
<br>
&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open Fabrics Enterprise Distribution (OFED)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PSM in OFED 3.5 Release Notes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;December 2012
<br>
<p>======================================================================
<br>
1. Overview
<br>
======================================================================
<br>
<p>The Performance Scaled Messaging (PSM) API is Intel's low-level user-level
<br>
communications interface for the Intel True Scale Fabric family of products.
<br>
<p>The PSM libraries are included in the infinipath-psm-3.1-364.1140_open.src.rpm
<br>
source RPM and get built and installed as part of a default OFED
<br>
install process.
<br>
<p>The primary way to use PSM is by compiling applications with an MPI that has
<br>
been built to use the PSM layer as its interface to QLogic HCAs.
<br>
PSM is the high-performance interface to the QLogic TrueScale HCAs.
<br>
<p>Minimal instructions* for building two MPIs tested with OFED 
<br>
with PSM support are as follows:
<br>
<p><p>Open MPI:
<br>
<p>- Download a recent Open MPI tar ball from 
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a> .
<br>
&nbsp;&nbsp;Versions 1.6.1 &amp; 1.6.3 have been tested with PSM from this OFED release.
<br>
- Untar the file and cd to the Open MPI directory.  Then
<br>
&nbsp;&nbsp;./configure --with-psm --prefix=&lt;install directory&gt;
<br>
&nbsp;&nbsp;make
<br>
&nbsp;&nbsp;make install
<br>
&quot;
<br>
<p>-Tom Elken
<br>
<p><span class="quotelev1">&gt; Could this be part of the problem? After a lot of experimentation I am at a
</span><br>
<span class="quotelev1">&gt; complete loss as to how to get psm up and running. If possible, could someone
</span><br>
<span class="quotelev1">&gt; also help me understand which out of this list (ibibverbs, libipathverbs, libmthca,
</span><br>
<span class="quotelev1">&gt; librdmacm, ib_mad, ib_umad, rdma_ucm, ib_uverbs, ib_qib) is the actual driver
</span><br>
<span class="quotelev1">&gt; for my card and is there any way to configure the driver? This blog
</span><br>
<span class="quotelev1">&gt; post<a href="http://swik.net/Debian/Planet+Debian/Julien+Blache%3A+QLogic+QLE73xx">http://swik.net/Debian/Planet+Debian/Julien+Blache%3A+QLogic+QLE73xx</a>
</span><br>
<span class="quotelev1">&gt; +InfiniBand+adapters,+QDR,+ib_qib,+OFED+1.5.2+and+Debian+Squeeze/e56if
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; seems to suggest that I will need to download the complete QLogic OFED stack
</span><br>
<span class="quotelev1">&gt; and configure the driver which I've tried to do and failed on many
</span><br>
<span class="quotelev1">&gt; counts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be very grateful for any advice at this stage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Vanja
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21758.php">Eric Chamberland: "[OMPI users] Misuse or bug with nested types?"</a>
<li><strong>Previous message:</strong> <a href="21756.php">Vanja Z: "[OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>In reply to:</strong> <a href="21756.php">Vanja Z: "[OMPI users] QLogic HCA random crash after prolonged use"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21784.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
<li><strong>Reply:</strong> <a href="21784.php">Dave Love: "Re: [OMPI users] QLogic HCA random crash after prolonged use"</a>
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
