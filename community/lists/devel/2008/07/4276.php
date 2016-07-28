<?
$subject_val = "Re: [OMPI devel] open ib dependency question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  4 11:06:11 2008" -->
<!-- isoreceived="20080704150611" -->
<!-- sent="Fri, 4 Jul 2008 17:06:01 +0200 (CEST)" -->
<!-- isosent="20080704150601" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] open ib dependency question" -->
<!-- id="Pine.LNX.4.64.0807041649110.13639_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="486CD203.3050905_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] open ib dependency question<br>
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-04 11:06:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4277.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4275.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4266.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4277.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4277.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4299.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 3 Jul 2008, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; I had similar issue recently. It will be nice to have option to 
</span><br>
<span class="quotelev1">&gt; disable/enable *CM via config flags.
</span><br>
<p>Not sure if this is related... I am looking at using a nightly 1.3 
<br>
snapshot and I get this type of error messages when running:
<br>
<p>[n020205][[36506,1],0][connect/btl_openib_connect_ibcm.c:723:ibcm_component_query] failed to open IB CM device: /dev/infiniband/ucm0
<br>
<p>which is actually right, as /dev/infiniband on the nodes doesn't 
<br>
contain ucm0. On the same cluster, OpenMPI 1.2.7rc2 works fine; the 
<br>
configure options for building them are the same.
<br>
<p>The output of ldd shows for the binary linked with 1.3a:
<br>
<p>libibcm.so.1 =&gt; /opt/ofed/1.2.5.4/lib64/libibcm.so.1
<br>
<p>while this is missing from the binary linked with 1.2. Even after 
<br>
printing these messages, the binary linked with 1.3a works; it works 
<br>
even when I specify &quot;--mca btl openib,self&quot; so I think that the IB 
<br>
stack is still being used (there is also a TCP/GigE network which 
<br>
could be chosen otherwise).
<br>
<p>I don't know whether this is caused by a somehow inconsistent setup of 
<br>
the system, but I would welcome an option to make 1.3a behave like 
<br>
1.2.
<br>
<p><pre>
-- 
Bogdan Costescu
IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
Phone: +49 6221 54 8869/8240, Fax: +49 6221 54 8868/8850
E-mail: bogdan.costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4277.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4275.php">Don Kerr: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4266.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4277.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4277.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4299.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
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
