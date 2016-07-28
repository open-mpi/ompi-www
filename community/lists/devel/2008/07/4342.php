<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 09:24:18 2008" -->
<!-- isoreceived="20080714132418" -->
<!-- sent="Mon, 14 Jul 2008 09:24:12 -0400" -->
<!-- isosent="20080714132412" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="43A788FD-B708-48AC-B3CE-EB5215F435AC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="487B52D4.2060103_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2008-07-14 09:24:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4343.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4341.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4341.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4344.php">Ralph H. Castain: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4344.php">Ralph H. Castain: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2008, at 9:21 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Should we not even build support for it?
</span><br>
<span class="quotelev1">&gt; I think IBCM CPC build should be enabled by default. The IBCM is  
</span><br>
<span class="quotelev1">&gt; supplied with OFED so it should not be any problem during install.
</span><br>
<p>Ok.  But remember that there are at least some OS's where /dev/ucm* do  
<br>
*not* get created by default for some unknown reason (even though IBCM  
<br>
is installed).
<br>
<p><span class="quotelev2">&gt;&gt; PRO: don't even allow the possibility of running with it, because  
</span><br>
<span class="quotelev2">&gt;&gt; we know that there are issues with the ibcm userspace library  
</span><br>
<span class="quotelev2">&gt;&gt; (i.e., reduce problem reports from users)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PRO: users don't have to have libibcm installed on compute nodes  
</span><br>
<span class="quotelev2">&gt;&gt; (we've actually gotten some complaints about this)
</span><br>
<span class="quotelev1">&gt; We got compliances only for case when ompi was build on platform  
</span><br>
<span class="quotelev1">&gt; with IBCM and after it was run on platform without IBCM.  Also we  
</span><br>
<span class="quotelev1">&gt; did not have option to disable
</span><br>
<span class="quotelev1">&gt; the ibcm during compilation. So actually it was no way to install  
</span><br>
<span class="quotelev1">&gt; OMPI on compute node. We added the option and the problem was  
</span><br>
<span class="quotelev1">&gt; resolved.
</span><br>
<span class="quotelev1">&gt; In most cases the OFED install is the same on all nodes and it  
</span><br>
<span class="quotelev1">&gt; should not be any problem to build IBCM support by default.
</span><br>
<p><p>Ok, sounds good.
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
<li><strong>Next message:</strong> <a href="4343.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4341.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4341.php">Pavel Shamis (Pasha): "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4344.php">Ralph H. Castain: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4344.php">Ralph H. Castain: "Re: [OMPI devel] IBCM error"</a>
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
