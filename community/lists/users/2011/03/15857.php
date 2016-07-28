<?
$subject_val = "Re: [OMPI users] OpenMPI without IPoIB";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 14 16:38:00 2011" -->
<!-- isoreceived="20110314203800" -->
<!-- sent="Mon, 14 Mar 2011 17:37:54 -0300" -->
<!-- isosent="20110314203754" -->
<!-- name="Bernardo F Costa" -->
<!-- email="bfcta_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI without IPoIB" -->
<!-- id="AANLkTikm7Zw0jF-6Ww=YBOjkZun0hb9RZ5xWM6zb_w5D_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] OpenMPI without IPoIB" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI without IPoIB<br>
<strong>From:</strong> Bernardo F Costa (<em>bfcta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-14 16:37:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15858.php">Jack Bryan: "[OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Previous message:</strong> <a href="15856.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11279.php">Vivek Satpute: "[OMPI users] OpenMPI without IPoIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15862.php">Peter Kjellström: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>Reply:</strong> <a href="15862.php">Peter Kjellström: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>Reply:</strong> <a href="15873.php">Jeff Squyres: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>Reply:</strong> <a href="15874.php">Shamis, Pavel: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok. Native ibverbs/openib is preferable although cannot be used by all
<br>
applications (those who do not have a native ip interface). I suppose
<br>
that if I configure my network nodes to use ipoib (by simply probing
<br>
ib_ipoib module) I'd still be able to use native ibverbs interface
<br>
without any delay caused by ipoib on it. And by this way other
<br>
applications which aren't able to use native ibverbs could use the
<br>
infiniband network as well. It should be the reason why some people
<br>
use ipoib I believe, just to offer infiniband to all network
<br>
applications. The main reason I've asked this question is that I have
<br>
seen lots of references in the net on how to configure an infiniband
<br>
network with ipoib, but I was not able to see much references on doing
<br>
the same without ipoib. This made me believe configuring infiniband
<br>
with ipoib could be a popular option.
<br>
I've tried ibdiagnet and other ofed tools. I also tried to debug the
<br>
network environment with simple jobs to measure bandwidth and latency.
<br>
In most cases, I've seen high peaks of measures who come and go
<br>
without any reason I could catch for now. I believe I should check the
<br>
network configuration and make some tests on it. Does anybody here
<br>
know some reference about configuring inifiband without ipoib and/or
<br>
the issues raised when doing this ? If possible, I'd like to see ways
<br>
of testing the configuration, or know about options that could
<br>
increase fault tolerance. I know this is some kind of basic, but I am
<br>
not a well experienced user on infiniband.
<br>
<p>2011/3/14  &lt;users-request_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please see my comment below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Application Performance Tools Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 11, 2011, at 2:47 PM, Bernardo F Costa wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have found this thread form two years ago. I am some kind of lost on
</span><br>
<span class="quotelev2">&gt;&gt; configuring an infiniband cluster for openmpi. What is best: use iboip
</span><br>
<span class="quotelev2">&gt;&gt; or use native infiniband ibverbs interface ? For now I am using native
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Native openib/verbs interface will work much faster &#160;(up X10) then ipoib.
</span><br>
<span class="quotelev1">&gt; Ipoib was designed for application that does not have native ip interface/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; infiniband withou ipoib. But I have lots of problems specially with
</span><br>
<span class="quotelev2">&gt;&gt; latency in the cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you see latency problems over native interface (verbs), then you apparently will
</span><br>
<span class="quotelev1">&gt; face the same problem with any other application over verbs, including ipoib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So using ipoib instead of verbs definitely not a work around for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would suggest you to run IB network debug tools , like ibdiagnet , in order to analyze
</span><br>
<span class="quotelev1">&gt; your network/latency problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15858.php">Jack Bryan: "[OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Previous message:</strong> <a href="15856.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11279.php">Vivek Satpute: "[OMPI users] OpenMPI without IPoIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15862.php">Peter Kjellström: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>Reply:</strong> <a href="15862.php">Peter Kjellström: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>Reply:</strong> <a href="15873.php">Jeff Squyres: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>Reply:</strong> <a href="15874.php">Shamis, Pavel: "Re: [OMPI users] OpenMPI without IPoIB"</a>
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
