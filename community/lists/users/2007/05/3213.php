<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  8 16:01:47 2007" -->
<!-- isoreceived="20070508200147" -->
<!-- sent="Tue, 8 May 2007 15:34:12 -0400" -->
<!-- isosent="20070508193412" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: [ofa-general] Re: openMPI over uDAPL doesn't work" -->
<!-- id="BF658CBB-A50B-45AC-A426-5B3539D26270_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4640CACE.8070201_at_ichips.intel.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-08 15:34:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3214.php">Steven Truong: "[OMPI users] Newbie question. Please help."</a>
<li><strong>Previous message:</strong> <a href="3212.php">Jeff Squyres: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Re-forwarding to OMPI list; because of the OMPI list anti-spam  
<br>
checks, Arlin's post didn't make it through to our list when he  
<br>
originally posted.
<br>
<p><p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Arlin Davis &lt;ardavis_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: May 8, 2007 3:09:02 PM EDT
</span><br>
<span class="quotelev1">&gt; To: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Users &lt;users_at_[hidden]&gt;, OpenFabrics General  
</span><br>
<span class="quotelev1">&gt; &lt;general_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [ofa-general] Re: [OMPI users] openMPI over uDAPL  
</span><br>
<span class="quotelev1">&gt; doesn't work
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm forwarding this to the OpenFabrics general list -- as it just   
</span><br>
<span class="quotelev2">&gt;&gt; came up the other day, we know that Open MPI's UDAPL support works  
</span><br>
<span class="quotelev2">&gt;&gt; on  Solaris, but we have done little/no testing of it on OFED (I   
</span><br>
<span class="quotelev2">&gt;&gt; personally know almost nothing about UDPAL).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can the UDAPL OFED wizards shed any light on the error messages  
</span><br>
<span class="quotelev2">&gt;&gt; that  are listed below?  In particular, these seem to be worrysome:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  setup_listener Permission denied
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  setup_listener Address already in use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These failures are from rdma_cm_bind indicating the port is already  
</span><br>
<span class="quotelev1">&gt; bound to this IA address. How are you creating the service point?
</span><br>
<span class="quotelev1">&gt; dat_psp_create or dat_psp_create_any? If it is psp_create_any then  
</span><br>
<span class="quotelev1">&gt; you will see some failures until it  gets to a free port. That is  
</span><br>
<span class="quotelev1">&gt; normal. Just make sure your create call returns DAT_SUCCESS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  create_qp Address already in use
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; This is a real problem with the bind, port is already in use. Not  
</span><br>
<span class="quotelev1">&gt; sure why this would fail since the current version of OFED uDAPL  
</span><br>
<span class="quotelev1">&gt; uses a wildcard port when binding and uses the address from the  
</span><br>
<span class="quotelev1">&gt; open;  I remember an issue a while back with rdma_cm and wildcard  
</span><br>
<span class="quotelev1">&gt; ports. What version of OFED are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -arlin
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3214.php">Steven Truong: "[OMPI users] Newbie question. Please help."</a>
<li><strong>Previous message:</strong> <a href="3212.php">Jeff Squyres: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
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
