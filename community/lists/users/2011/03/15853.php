<?
$subject_val = "Re: [OMPI users] OpenMPI without IPoIB";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 13 17:52:05 2011" -->
<!-- isoreceived="20110313215205" -->
<!-- sent="Sun, 13 Mar 2011 17:51:59 -0400" -->
<!-- isosent="20110313215159" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI without IPoIB" -->
<!-- id="9FB60395-1244-49FF-8FC7-1BC7DE957CAE_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=WHRGuNETkG_QoHgT1m9DhywMSdMBL9jnGpC25_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-03-13 17:51:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15854.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="15852.php">Jeff Squyres: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>In reply to:</strong> <a href="15849.php">Bernardo F Costa: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15857.php">Bernardo F Costa: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please see my comment below.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Mar 11, 2011, at 2:47 PM, Bernardo F Costa wrote:
&gt; I have found this thread form two years ago. I am some kind of lost on
&gt; configuring an infiniband cluster for openmpi. What is best: use iboip
&gt; or use native infiniband ibverbs interface ? For now I am using native
Native openib/verbs interface will work much faster  (up X10) then ipoib.
Ipoib was designed for application that does not have native ip interface/ 
&gt; infiniband withou ipoib. But I have lots of problems specially with
&gt; latency in the cluster.
If you see latency problems over native interface (verbs), then you apparently will
face the same problem with any other application over verbs, including ipoib.
So using ipoib instead of verbs definitely not a work around for you.
I would suggest you to run IB network debug tools , like ibdiagnet , in order to analyze 
your network/latency problems.
Regards,
Pasha 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15854.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="15852.php">Jeff Squyres: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>In reply to:</strong> <a href="15849.php">Bernardo F Costa: "Re: [OMPI users] OpenMPI without IPoIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15857.php">Bernardo F Costa: "Re: [OMPI users] OpenMPI without IPoIB"</a>
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
