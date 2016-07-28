<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov 11 21:20:12 2005" -->
<!-- isoreceived="20051112022012" -->
<!-- sent="Fri, 11 Nov 2005 19:20:05 -0700" -->
<!-- isosent="20051112022005" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] 1.0rc5 is up" -->
<!-- id="01EE7913-465A-435C-83CF-AB22AD168B0E_at_cs.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="op.sz3pefk4ies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-11 21:20:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0321.php">Timothy S. Woodall: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0319.php">Dries Kimpe: "Re: [O-MPI users] Tests with current version"</a>
<li><strong>In reply to:</strong> <a href="0317.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0321.php">Timothy S. Woodall: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bad:
</span><br>
<span class="quotelev1">&gt; OpenIB frequently crashes with the error:
</span><br>
<span class="quotelev1">&gt; ***************
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_openib_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 135:mca_btl_openib_endpoint_post_send] error posting send request  
</span><br>
<span class="quotelev1">&gt; errno says Operation now in progress[0,1,2d
</span><br>
<span class="quotelev1">&gt; [0,1,3][btl_openib_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 135:mca_btl_openib_endpoint_post_send] error posting send request  
</span><br>
<span class="quotelev1">&gt; errno says Operation now in progress
</span><br>
<span class="quotelev1">&gt; [0,1,3][btl_openib_component.c: 
</span><br>
<span class="quotelev1">&gt; 655:mca_btl_openib_component_progress] error in posting pending send
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_openib_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 135:mca_btl_openib_endpoint_post_send] error posting send request  
</span><br>
<span class="quotelev1">&gt; errno says Operation now in progress
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_openib_component.c: 
</span><br>
<span class="quotelev1">&gt; 655:mca_btl_openib_component_progress] error in posting pending send
</span><br>
<span class="quotelev1">&gt; ***************
</span><br>
<p>Hey Troy,
<br>
<p>I made a very small change in the trunk, here is a patch.
<br>
<p>I was unable to test this so if you could test this and report back  
<br>
the results that would be great, also, instructions on reproducing  
<br>
this would be great.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p><p><p><p><p><p>Index: btl_openib_endpoint.c
<br>
===================================================================
<br>
--- btl_openib_endpoint.c       (revision 8126)
<br>
+++ btl_openib_endpoint.c       (revision 8127)
<br>
@@ -74,6 +74,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct ibv_qp* ib_qp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct ibv_send_wr* bad_wr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;sg_entry.addr = (uintptr_t) frag-&gt;hdr;
<br>
+    frag-&gt;wr_desc.sr_desc.opcode = IBV_WR_SEND;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(frag-&gt;base.des_flags &amp; MCA_BTL_DES_FLAGS_PRIORITY  &amp;&amp; frag- 
<br>
<span class="quotelev1"> &gt;size &lt;= openib_btl-&gt;super.btl_eager_limit){
</span><br>
<p>@@ -116,8 +117,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>-    frag-&gt;wr_desc.sr_desc.opcode = IBV_WR_SEND;
<br>
<p>+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;sg_entry.length =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;frag-&gt;segment.seg_len +
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((unsigned char*) frag-&gt;segment.seg_addr.pval - (unsigned  
<br>
char*) frag-&gt;hdr);
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0321.php">Timothy S. Woodall: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0319.php">Dries Kimpe: "Re: [O-MPI users] Tests with current version"</a>
<li><strong>In reply to:</strong> <a href="0317.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0321.php">Timothy S. Woodall: "Re: [O-MPI users] 1.0rc5 is up"</a>
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
