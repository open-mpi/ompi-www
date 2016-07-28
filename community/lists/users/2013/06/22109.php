<?
$subject_val = "Re: [OMPI users] jobs are hanging with btl_openib_component error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 17 09:41:32 2013" -->
<!-- isoreceived="20130617134132" -->
<!-- sent="Mon, 17 Jun 2013 13:41:22 +0000" -->
<!-- isosent="20130617134122" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] jobs are hanging with btl_openib_component error" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F68A2D2_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="16946_1371461098_r5H9NJHe029732_87EE25C6C3081A42900798613A105C1201EB49D0_at_BANMLVEM04.e2k.ad.ge.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] jobs are hanging with btl_openib_component error<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-17 09:41:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22110.php">Jeff Squyres (jsquyres): "Re: [OMPI users] lsb_launch failed: 0"</a>
<li><strong>Previous message:</strong> <a href="22108.php">Singh, Bharati (GE Global Research, consultant): "[OMPI users] lsb_launch failed: 0"</a>
<li><strong>In reply to:</strong> <a href="22107.php">Singh, Bharati (GE Global Research, consultant): "[OMPI users] jobs are hanging with btl_openib_component error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22112.php">Shamis, Pavel: "Re: [OMPI users] jobs are hanging with btl_openib_component error"</a>
<li><strong>Reply:</strong> <a href="22112.php">Shamis, Pavel: "Re: [OMPI users] jobs are hanging with btl_openib_component error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That sounds like there's a problem with your InfiniBand fabric.
<br>
<p>You should run a complete level-0 diagnostic on your IB network.
<br>
<p><p>On Jun 17, 2013, at 5:23 AM, &quot;Singh, Bharati (GE Global Research, consultant)&quot; &lt;Bharati.Singh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Team,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Our users jobs are hanging and we notice below errors.  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [[61410,1],65][btl_openib_component.c:3238:handle_wc] from bng1aviationdc22 to: bng1aviationdc26 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 774739584 opcode 1  vendor error 129 qp_idx 0
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; PFA file for more information.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Bharati Singh
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** WARNING:  This email contains an attachment of a very suspicious type.  **
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are absolutely     **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate.  Opening this attachment may cause irreparable   **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files.  If you have any questions      **
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail scanner.   **
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;output.14807.zip&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22110.php">Jeff Squyres (jsquyres): "Re: [OMPI users] lsb_launch failed: 0"</a>
<li><strong>Previous message:</strong> <a href="22108.php">Singh, Bharati (GE Global Research, consultant): "[OMPI users] lsb_launch failed: 0"</a>
<li><strong>In reply to:</strong> <a href="22107.php">Singh, Bharati (GE Global Research, consultant): "[OMPI users] jobs are hanging with btl_openib_component error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22112.php">Shamis, Pavel: "Re: [OMPI users] jobs are hanging with btl_openib_component error"</a>
<li><strong>Reply:</strong> <a href="22112.php">Shamis, Pavel: "Re: [OMPI users] jobs are hanging with btl_openib_component error"</a>
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
