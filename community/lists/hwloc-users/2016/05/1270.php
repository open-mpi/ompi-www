<?
$subject_val = "Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 10:32:24 2016" -->
<!-- isoreceived="20160509143224" -->
<!-- sent="Mon, 9 May 2016 16:32:22 +0200 (CEST)" -->
<!-- isosent="20160509143222" -->
<!-- name="Hugo Brunie" -->
<!-- email="hugo.brunie_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET" -->
<!-- id="1278794576.52004920.1462804342688.JavaMail.zimbra_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="57309DB1.9040607_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET<br>
<strong>From:</strong> Hugo Brunie (<em>hugo.brunie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 10:32:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1271.php">Hugo Brunie: "Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET"</a>
<li><strong>Previous message:</strong> <a href="1269.php">Brice Goglin: "Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET"</a>
<li><strong>In reply to:</strong> <a href="1269.php">Brice Goglin: "Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1271.php">Hugo Brunie: "Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET"</a>
<li><strong>Reply:</strong> <a href="1271.php">Hugo Brunie: "Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will make a small example to reproduce my bug. I am 
<br>
not sure I have the right to describe the machine. I ask and I come back to you. 
<br>
Hugo 
<br>
<p>----- Mail original -----
<br>
<p><span class="quotelev1">&gt; De: &quot;Brice Goglin&quot; &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#192;: hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Envoy&#233;: Lundi 9 Mai 2016 16:24:49
</span><br>
<span class="quotelev1">&gt; Objet: Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET
</span><br>
<p><span class="quotelev1">&gt; Hello Hugo,
</span><br>
<p><span class="quotelev1">&gt; Can you send your code and a description of the machine so that I try to
</span><br>
<span class="quotelev1">&gt; reproduce ?
</span><br>
<p><span class="quotelev1">&gt; By the way, BYNODESET is also available in 1.11.3.
</span><br>
<p><span class="quotelev1">&gt; Brice
</span><br>
<p><span class="quotelev1">&gt; Le 09/05/2016 16:18, Hugo Brunie a &#233;crit :
</span><br>
<p><span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; When I try to use hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I obtain NULL as a pointer and the error message is : Invalid Argument.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; I try without, it works. It works also with HWLOC_MEMBIND_STRICMT and/or
</span><br>
<span class="quotelev2">&gt; &gt; HWLOC_MEMBIND_THREAD.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My hwloc version is :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ~/usr/bin/hwloc-bind --version
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-bind 2.0.0a1-git
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; Hugo BRUNIE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users mailing list hwloc-users_at_[hidden] Subscription:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a> Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/05/1269.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/05/1269.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/05/1270.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/05/1270.php</a>
</span><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1270/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1271.php">Hugo Brunie: "Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET"</a>
<li><strong>Previous message:</strong> <a href="1269.php">Brice Goglin: "Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET"</a>
<li><strong>In reply to:</strong> <a href="1269.php">Brice Goglin: "Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1271.php">Hugo Brunie: "Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET"</a>
<li><strong>Reply:</strong> <a href="1271.php">Hugo Brunie: "Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET"</a>
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
