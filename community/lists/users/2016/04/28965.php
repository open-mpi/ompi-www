<?
$subject_val = "Re: [OMPI users] openib failover";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 09:58:24 2016" -->
<!-- isoreceived="20160419135824" -->
<!-- sent="Tue, 19 Apr 2016 13:58:21 +0000" -->
<!-- isosent="20160419135821" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib failover" -->
<!-- id="C97CBEA0-1670-41E0-8A44-32A990048033_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDj78YcpvfCWXzRMw7z0W-Vm+JXp9-smwpwTV83SycvFoQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib failover<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-19 09:58:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28966.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="28964.php">Josh Hursey: "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>In reply to:</strong> <a href="28941.php">dpchoudh .: "[OMPI users] openib failover"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 17, 2016, at 3:24 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I understand, the openib BTL supports NIC failover, but I am confused about the scope of this support. Let me elaborate:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Is the failover support part of MPI specification?
</span><br>
<p>No.  MPI doesn't make many statements about failures.
<br>
<p><span class="quotelev1">&gt; 2. Is it an openMPI-specific addition to MPI implementation?
</span><br>
<p>I believe you're referring to the bfo PML, which could effect failover if a given BTL module fails.  bfo was originally a fork from ob1, but it has not kept up with ob1 for quite a long time -- it may be way out of date.
<br>
<p><span class="quotelev1">&gt; 3. Is it a verb-API specification?
</span><br>
<p>IIRC, it works simply by detecting failures from the verbs API return codes.  If it detects that a verbs device fails, it simply shuts it down and lets bfo use another, non-failed verbs device.
<br>
<p><span class="quotelev1">&gt; Since the openib BTL uses only verbs APIs under the hood, it should work on any NIC (e,g. iWARP or RoCE) that support verbs, isn't it?
</span><br>
<p>Hypothetically.
<br>
<p><span class="quotelev1">&gt; 4. Is it an Infiniband specification? Going through my old mail archive, it seems that openMPI 1.2 release supported this without relying on the IB automatic path migration functionality, so it seems to me that what openMPI provides is independent of IB APM (that plus the openib BTL runs on link types other than Infiniband)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4.1 If it is based on infiniband APM, is this available if I chose to run a MTL (e.g. PSM) instead of the openib BTL?
</span><br>
<p>I don't know if PSM supports the concept of APM.
<br>
<p><span class="quotelev1">&gt; 5. If my understanding is correct on point #4 above (i.e. the openMPI failover is independent of any link specific capability of Infiniband), then why is a similar functionality not provided for other transport type? The only non-verb transport that I currently have access to is TCP, and I don't think the TCP transport provides auto-failover.
</span><br>
<p>I believe that when Rolf implemented bfo, there were some tradeoffs and/or uncertainties about how the presence of failover capability would impact performance.  Hence, he forked ob1 and added his failover support stuff in bfo.
<br>
<p>I think there were some other requirements needed at the BTL layer, too, and I think Rolf only implemented those in the openib BTL.
<br>
<p>Failover has not been a highly-requested feature.  Given that it was developed once and then effectively abandoned, it simply hasn't been kept up.
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
<li><strong>Next message:</strong> <a href="28966.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="28964.php">Josh Hursey: "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>In reply to:</strong> <a href="28941.php">dpchoudh .: "[OMPI users] openib failover"</a>
<!-- nextthread="start" -->
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
