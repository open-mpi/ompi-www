<?
$subject_val = "Re: [OMPI users] OpenMPI without IPoIB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 15 16:10:56 2011" -->
<!-- isoreceived="20110315201056" -->
<!-- sent="Tue, 15 Mar 2011 16:10:50 -0400" -->
<!-- isosent="20110315201050" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI without IPoIB" -->
<!-- id="CF929079-61DF-45E6-B8BF-F8166B6AE199_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikm7Zw0jF-6Ww=YBOjkZun0hb9RZ5xWM6zb_w5D_at_mail.gmail.com" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-15 16:10:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15875.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Previous message:</strong> <a href="15873.php">Jeff Squyres: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>In reply to:</strong> <a href="15857.php">Bernardo F Costa: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would recommend you to read OFED (or Mellanox OFED) documentation. It will be good start point.
<br>
<p>Regards,
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Mar 14, 2011, at 4:37 PM, Bernardo F Costa wrote:
&gt; Ok. Native ibverbs/openib is preferable although cannot be used by all
&gt; applications (those who do not have a native ip interface). I suppose
&gt; that if I configure my network nodes to use ipoib (by simply probing
&gt; ib_ipoib module) I'd still be able to use native ibverbs interface
&gt; without any delay caused by ipoib on it. And by this way other
&gt; applications which aren't able to use native ibverbs could use the
&gt; infiniband network as well. It should be the reason why some people
&gt; use ipoib I believe, just to offer infiniband to all network
&gt; applications. The main reason I've asked this question is that I have
&gt; seen lots of references in the net on how to configure an infiniband
&gt; network with ipoib, but I was not able to see much references on doing
&gt; the same without ipoib. This made me believe configuring infiniband
&gt; with ipoib could be a popular option.
&gt; I've tried ibdiagnet and other ofed tools. I also tried to debug the
&gt; network environment with simple jobs to measure bandwidth and latency.
&gt; In most cases, I've seen high peaks of measures who come and go
&gt; without any reason I could catch for now. I believe I should check the
&gt; network configuration and make some tests on it. Does anybody here
&gt; know some reference about configuring inifiband without ipoib and/or
&gt; the issues raised when doing this ? If possible, I'd like to see ways
&gt; of testing the configuration, or know about options that could
&gt; increase fault tolerance. I know this is some kind of basic, but I am
&gt; not a well experienced user on infiniband.
&gt; 
&gt; 2011/3/14  &lt;users-request_at_[hidden]&gt;:
&gt;&gt; 
&gt;&gt; Please see my comment below.
&gt;&gt; 
&gt;&gt; Pavel (Pasha) Shamis
&gt;&gt; ---
&gt;&gt; Application Performance Tools Group
&gt;&gt; Computer Science and Math Division
&gt;&gt; Oak Ridge National Laboratory
&gt;&gt; 
&gt;&gt; 
&gt;&gt; On Mar 11, 2011, at 2:47 PM, Bernardo F Costa wrote:
&gt;&gt; 
&gt;&gt;&gt; I have found this thread form two years ago. I am some kind of lost on
&gt;&gt;&gt; configuring an infiniband cluster for openmpi. What is best: use iboip
&gt;&gt;&gt; or use native infiniband ibverbs interface ? For now I am using native
&gt;&gt; 
&gt;&gt; Native openib/verbs interface will work much faster  (up X10) then ipoib.
&gt;&gt; Ipoib was designed for application that does not have native ip interface/
&gt;&gt; 
&gt;&gt;&gt; infiniband withou ipoib. But I have lots of problems specially with
&gt;&gt;&gt; latency in the cluster.
&gt;&gt; 
&gt;&gt; If you see latency problems over native interface (verbs), then you apparently will
&gt;&gt; face the same problem with any other application over verbs, including ipoib.
&gt;&gt; 
&gt;&gt; So using ipoib instead of verbs definitely not a work around for you.
&gt;&gt; 
&gt;&gt; I would suggest you to run IB network debug tools , like ibdiagnet , in order to analyze
&gt;&gt; your network/latency problems.
&gt;&gt; 
&gt;&gt; Regards,
&gt;&gt; Pasha
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15875.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>Previous message:</strong> <a href="15873.php">Jeff Squyres: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<li><strong>In reply to:</strong> <a href="15857.php">Bernardo F Costa: "Re: [OMPI users] OpenMPI without IPoIB"</a>
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
