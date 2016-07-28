<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 22:02:16 2008" -->
<!-- isoreceived="20080717020216" -->
<!-- sent="Wed, 16 Jul 2008 22:02:10 -0400" -->
<!-- isosent="20080717020210" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="810783A8-A957-4E7D-A772-597B33A678F5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="487E0EB2.7070003_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IBCM error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-16 22:02:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4370.php">Jeff Squyres: "Re: [OMPI devel] PathScale compiler ( ticket #1326 )"</a>
<li><strong>Previous message:</strong> <a href="4368.php">Don Kerr: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4368.php">Don Kerr: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4374.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4374.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 16, 2008, at 11:07 AM, Don Kerr wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Pasha added configure switches for this about a week ago:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    --en|disable-openib-ibcm
</span><br>
<span class="quotelev2">&gt;&gt;    --en|disable-openib-rdmacm
</span><br>
<span class="quotelev1">&gt; I like these flags but I thought there was going to be a run time  
</span><br>
<span class="quotelev1">&gt; check for cases where Open MPI is built on a system that has ibcm  
</span><br>
<span class="quotelev1">&gt; support but is later run on a system without ibcm support.
</span><br>
<p><p>Yes, there are.
<br>
<p>- if the /dev/infiniband/ucm* files aren't there, we silently return  
<br>
&quot;not supported&quot; and skip ibcm
<br>
- if ib_cm_open_device() (the first function call) fails, we assume  
<br>
that IBCM simply isn't supported on this platform and silently return  
<br>
&quot;not supported&quot; and skip ibcm
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4370.php">Jeff Squyres: "Re: [OMPI devel] PathScale compiler ( ticket #1326 )"</a>
<li><strong>Previous message:</strong> <a href="4368.php">Don Kerr: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4368.php">Don Kerr: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4374.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4374.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
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
