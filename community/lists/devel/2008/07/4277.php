<?
$subject_val = "Re: [OMPI devel] open ib dependency question";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  6 12:32:03 2008" -->
<!-- isoreceived="20080706163203" -->
<!-- sent="Sun, 06 Jul 2008 19:31:46 +0300" -->
<!-- isosent="20080706163146" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] open ib dependency question" -->
<!-- id="4870F372.9040405_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0807041649110.13639_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-06 12:31:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4278.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4276.php">Bogdan Costescu: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4276.php">Bogdan Costescu: "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4280.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4280.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see the same issue on my Mellanox OFED 1.3. IBCM module is loaded but 
<br>
is no such device in system.
<br>
Jeff, looks like some bug in IBCM stuff... (not ompi)
<br>
I think we should print the error only if  ibcm  was  explicitly 
<br>
selected by user. But from the cpc level it is no way to know
<br>
about explicit selection....Maybe just hide the print ?
<br>
<p>Bogdan Costescu wrote:
<br>
<span class="quotelev1">&gt; On Thu, 3 Jul 2008, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had similar issue recently. It will be nice to have option to 
</span><br>
<span class="quotelev2">&gt;&gt; disable/enable *CM via config flags.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure if this is related... I am looking at using a nightly 1.3 
</span><br>
<span class="quotelev1">&gt; snapshot and I get this type of error messages when running:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n020205][[36506,1],0][connect/btl_openib_connect_ibcm.c:723:ibcm_component_query] 
</span><br>
<span class="quotelev1">&gt; failed to open IB CM device: /dev/infiniband/ucm0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which is actually right, as /dev/infiniband on the nodes doesn't 
</span><br>
<span class="quotelev1">&gt; contain ucm0. On the same cluster, OpenMPI 1.2.7rc2 works fine; the 
</span><br>
<span class="quotelev1">&gt; configure options for building them are the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output of ldd shows for the binary linked with 1.3a:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libibcm.so.1 =&gt; /opt/ofed/1.2.5.4/lib64/libibcm.so.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while this is missing from the binary linked with 1.2. Even after 
</span><br>
<span class="quotelev1">&gt; printing these messages, the binary linked with 1.3a works; it works 
</span><br>
<span class="quotelev1">&gt; even when I specify &quot;--mca btl openib,self&quot; so I think that the IB 
</span><br>
<span class="quotelev1">&gt; stack is still being used (there is also a TCP/GigE network which 
</span><br>
<span class="quotelev1">&gt; could be chosen otherwise).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know whether this is caused by a somehow inconsistent setup of 
</span><br>
<span class="quotelev1">&gt; the system, but I would welcome an option to make 1.3a behave like 1.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4278.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4276.php">Bogdan Costescu: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4276.php">Bogdan Costescu: "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4280.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4280.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
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
