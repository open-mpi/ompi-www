<?
$subject_val = "Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 10:57:10 2016" -->
<!-- isoreceived="20160509145710" -->
<!-- sent="Mon, 9 May 2016 16:57:08 +0200 (CEST)" -->
<!-- isosent="20160509145708" -->
<!-- name="Hugo Brunie" -->
<!-- email="hugo.brunie_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET" -->
<!-- id="592047914.52038004.1462805828290.JavaMail.zimbra_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1278794576.52004920.1462804342688.JavaMail.zimbra_at_inria.fr" -->
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
<strong>Date:</strong> 2016-05-09 10:57:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1272.php">Mehmet Belgin: "[hwloc-users] Tolopology Error"</a>
<li><strong>Previous message:</strong> <a href="1270.php">Hugo Brunie: "Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET"</a>
<li><strong>In reply to:</strong> <a href="1270.php">Hugo Brunie: "Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So.. I downloaded the last library and it works fine. 
<br>
I am sorry for the useless topic. (I had link with an old version of the lib in 
<br>
my LD_LIBRARY_PATH that's why it didn't work well) 
<br>
<p>Hugo BRUNIE 
<br>
<p>----- Mail original -----
<br>
<p><span class="quotelev1">&gt; De: &quot;Hugo Brunie&quot; &lt;hugo.brunie_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#192;: &quot;Hardware locality user list&quot; &lt;hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Envoy&#233;: Lundi 9 Mai 2016 16:32:22
</span><br>
<span class="quotelev1">&gt; Objet: Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET
</span><br>
<p><span class="quotelev1">&gt; I will make a small example to reproduce my bug. I am
</span><br>
<span class="quotelev1">&gt; not sure I have the right to describe the machine. I ask and I come back to
</span><br>
<span class="quotelev1">&gt; you.
</span><br>
<span class="quotelev1">&gt; Hugo
</span><br>
<p><span class="quotelev1">&gt; ----- Mail original -----
</span><br>
<p><span class="quotelev2">&gt; &gt; De: &quot;Brice Goglin&quot; &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &#192;: hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Envoy&#233;: Lundi 9 Mai 2016 16:24:49
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Objet: Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; Hello Hugo,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; Can you send your code and a description of the machine so that I try to
</span><br>
<span class="quotelev2">&gt; &gt; reproduce ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; By the way, BYNODESET is also available in 1.11.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; Le 09/05/2016 16:18, Hugo Brunie a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; When I try to use hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I obtain NULL as a pointer and the error message is : Invalid Argument.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; I try without, it works. It works also with HWLOC_MEMBIND_STRICMT and/or
</span><br>
<span class="quotelev3">&gt; &gt; &gt; HWLOC_MEMBIND_THREAD.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; My hwloc version is :
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ~/usr/bin/hwloc-bind --version
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hwloc-bind 2.0.0a1-git
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; Hugo BRUNIE
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hwloc-users mailing list hwloc-users_at_[hidden] Subscription:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a> Link to this
</span><br>
<span class="quotelev3">&gt; &gt; &gt; post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/05/1269.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/05/1269.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/05/1270.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/05/1270.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2016/05/1271.php">http://www.open-mpi.org/community/lists/hwloc-users/2016/05/1271.php</a>
</span><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1271/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1272.php">Mehmet Belgin: "[hwloc-users] Tolopology Error"</a>
<li><strong>Previous message:</strong> <a href="1270.php">Hugo Brunie: "Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET"</a>
<li><strong>In reply to:</strong> <a href="1270.php">Hugo Brunie: "Re: [hwloc-users] hwloc_alloc_membind with HWLOC_MEMBIND_BYNODESET"</a>
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
