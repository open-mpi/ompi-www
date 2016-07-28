<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 09:21:34 2008" -->
<!-- isoreceived="20080714132134" -->
<!-- sent="Mon, 14 Jul 2008 16:21:24 +0300" -->
<!-- isosent="20080714132124" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="487B52D4.2060103_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3E701F6F-9A1D-4D3B-88BC-251F37818E0C_at_cisco.com" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-14 09:21:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4342.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4340.php">Terry Dontje: "Re: [OMPI devel] SM latency regression"</a>
<li><strong>In reply to:</strong> <a href="4339.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4342.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4342.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should we not even build support for it?
</span><br>
I think IBCM CPC build should be enabled by default. The IBCM is 
<br>
supplied with OFED so it should not be any problem during install.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PRO: don't even allow the possibility of running with it, because we 
</span><br>
<span class="quotelev1">&gt; know that there are issues with the ibcm userspace library (i.e., 
</span><br>
<span class="quotelev1">&gt; reduce problem reports from users)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PRO: users don't have to have libibcm installed on compute nodes 
</span><br>
<span class="quotelev1">&gt; (we've actually gotten some complaints about this)
</span><br>
We got compliances only for case when ompi was build on platform with 
<br>
IBCM and after it was run on platform without IBCM.  Also we did not 
<br>
have option to disable
<br>
the ibcm during compilation. So actually it was no way to install OMPI 
<br>
on compute node. We added the option and the problem was resolved.
<br>
In most cases the OFED install is the same on all nodes and it should 
<br>
not be any problem to build IBCM support by default.
<br>
<p>Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4342.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4340.php">Terry Dontje: "Re: [OMPI devel] SM latency regression"</a>
<li><strong>In reply to:</strong> <a href="4339.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4342.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4342.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
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
