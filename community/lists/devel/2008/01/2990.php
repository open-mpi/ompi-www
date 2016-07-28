<?
$subject_val = "Re: [OMPI devel] btl tcp port to xensocket";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 07:43:45 2008" -->
<!-- isoreceived="20080117124345" -->
<!-- sent="Thu, 17 Jan 2008 13:43:24 +0100" -->
<!-- isosent="20080117124324" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl tcp port to xensocket" -->
<!-- id="20080117124324.GD11368_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="657294.70053.qm_at_web52104.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl tcp port to xensocket<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-17 07:43:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2991.php">Don Kerr: "Re: [OMPI devel] Open IB BTL development question"</a>
<li><strong>Previous message:</strong> <a href="2989.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Open IB BTL development question"</a>
<li><strong>In reply to:</strong> <a href="2981.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2993.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jan 15, 2008 at 04:07:02PM -0800, Muhammad Atif wrote:
<br>
<p><span class="quotelev1">&gt; Just for reference, I am trying to port btl/tcp to xensockets. Now if
</span><br>
<span class="quotelev1">&gt; i want to do modex send/recv , to my understanding, mca_btl_tcp_addr_t
</span><br>
<span class="quotelev1">&gt; is used (ref code/function is mca_btl_tcp_component_exchange). For
</span><br>
<span class="quotelev1">&gt; xensockets, I need to send only one additional integer remote_domU_id
</span><br>
<span class="quotelev1">&gt; across to say all the peers (in refined code it would be specific to
</span><br>
<span class="quotelev1">&gt; each domain, but i just want to have clear understanding before i move
</span><br>
<span class="quotelev1">&gt; any further). Now I have changed the struct mca_btl_tcp_addr_t present
</span><br>
<span class="quotelev1">&gt; in btl_tcp_addr.h and have added int r_domu_id. This makes the size of
</span><br>
<span class="quotelev1">&gt; structure 12. Upon receive mca_btl_tcp_proc_create() gives an error
</span><br>
<span class="quotelev1">&gt; after mca_pml_base_modex_recv() and at this statement if(0 != (size %
</span><br>
<span class="quotelev1">&gt; sizeof(mca_btl_tcp_addr_t))) that size do not match. It is still
</span><br>
<span class="quotelev1">&gt; expecting size 8, where as i have made the size 12.  I am unable to
</span><br>
<span class="quotelev1">&gt; pin point the exact location where the size 8 is still embedded. Any
</span><br>
<span class="quotelev1">&gt; ideas?
</span><br>
<p>Just an idea: the mca_base_modex_recv error gives you this error:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_ERROR((&quot;mca_base_modex_recv: invalid size %d: btl-size:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;%d\n&quot;, size, sizeof(mca_btl_tcp_addr_t)));
<br>
<p><p>So what is wrong? Is btl-size shown as 12 or as 8? It should be 12. And
<br>
is size just 8? So this means you forgot to include your new socket in
<br>
your modex_send_request.
<br>
<p>See mca_btl_tcp_component_exchange: We copy the information to be sent
<br>
into the addrs array and increase xfer_size afterwards (telling the
<br>
function how many bytes to be transferred).
<br>
<p>Perhaps you missed something there.
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2991.php">Don Kerr: "Re: [OMPI devel] Open IB BTL development question"</a>
<li><strong>Previous message:</strong> <a href="2989.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Open IB BTL development question"</a>
<li><strong>In reply to:</strong> <a href="2981.php">Muhammad Atif: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2993.php">Jeff Squyres: "Re: [OMPI devel] btl tcp port to xensocket"</a>
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
