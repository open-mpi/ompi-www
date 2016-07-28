<?
$subject_val = "Re: [OMPI users] openib segfaults with Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 10 10:31:31 2014" -->
<!-- isoreceived="20140610143131" -->
<!-- sent="Tue, 10 Jun 2014 14:31:29 +0000" -->
<!-- isosent="20140610143129" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib segfaults with Torque" -->
<!-- id="5971DCFD-003D-4C41-9391-FA8DDBFF7EF6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140610142539.GC75396_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib segfaults with Torque<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-10 10:31:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24621.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Previous message:</strong> <a href="24619.php">Nathan Hjelm: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>In reply to:</strong> <a href="24619.php">Nathan Hjelm: "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24622.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Reply:</strong> <a href="24622.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greg: 
<br>
<p>Can you run with &quot;--mca btl_base_verbose 100&quot; on your debug build so that we can get some additional output to see why UDCM is failing to setup properly?
<br>
<p><p><p>On Jun 10, 2014, at 10:25 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Jun 10, 2014 at 12:10:28AM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I seem to recall that you have an IB-based cluster, right?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From a *very quick* glance at the code, it looks like this might be a simple incorrect-finalization issue.  That is:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - you run the job on a single server
</span><br>
<span class="quotelev2">&gt;&gt; - openib disqualifies itself because you're running on a single server
</span><br>
<span class="quotelev2">&gt;&gt; - openib then goes to finalize/close itself
</span><br>
<span class="quotelev2">&gt;&gt; - but openib didn't fully initialize itself (because it disqualified itself early in the initialization process), and something in the finalization process didn't take that into account
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Nathan -- is that anywhere close to correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nope. udcm_module_finalize is being called because there was an error
</span><br>
<span class="quotelev1">&gt; setting up the udcm state. See btl_openib_connect_udcm.c:476. The
</span><br>
<span class="quotelev1">&gt; opal_list_t destructor is getting an assert failure. Probably because
</span><br>
<span class="quotelev1">&gt; the constructor wasn't called. I can rearrange the constructors to be
</span><br>
<span class="quotelev1">&gt; called first but there appears to be a deeper issue with the user's
</span><br>
<span class="quotelev1">&gt; system: udcm_module_init should not be failing! It creates a couple of
</span><br>
<span class="quotelev1">&gt; CQs, allocates a small number of registered bufferes and starts
</span><br>
<span class="quotelev1">&gt; monitoring the fd for the completion channel. All these things are also
</span><br>
<span class="quotelev1">&gt; done in the setup of the openib btl itself. Keep in mind that the openib
</span><br>
<span class="quotelev1">&gt; btl will not disqualify itself when running single server. Openib may be
</span><br>
<span class="quotelev1">&gt; used to communicate on node and is needed for the dynamics case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The user might try adding -mca btl_base_verbose 100 to shed some
</span><br>
<span class="quotelev1">&gt; light on what the real issue is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW, I no longer monitor the user mailing list. If something needs my
</span><br>
<span class="quotelev1">&gt; attention forward it to me directly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<li><strong>Next message:</strong> <a href="24621.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Previous message:</strong> <a href="24619.php">Nathan Hjelm: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>In reply to:</strong> <a href="24619.php">Nathan Hjelm: "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24622.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Reply:</strong> <a href="24622.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
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
