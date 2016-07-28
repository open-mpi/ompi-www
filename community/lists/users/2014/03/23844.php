<?
$subject_val = "Re: [OMPI users] Question about '--mca btl tcp,self'";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 14 10:16:49 2014" -->
<!-- isoreceived="20140314141649" -->
<!-- sent="Fri, 14 Mar 2014 14:16:34 +0000" -->
<!-- isosent="20140314141634" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about '--mca btl tcp,self'" -->
<!-- id="8ED8BCBF-EA86-4E3F-8B80-D5619D44FBA4_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="FFA159D4-C2C0-4F42-9B65-1AB74064F7FE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about '--mca btl tcp,self'<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-14 10:16:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23845.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Previous message:</strong> <a href="23843.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>In reply to:</strong> <a href="23843.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23852.php">Jianyu Liu: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 14, 2014, at 10:11 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 1. If specified '--mca btl tcp,self',   which interface application will run on,  use GigE adaper OR use the OpenFabrics interface in IP over IB mode (just like a high performance GigE adapter) ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both - ip over ib looks just like an Ethernet adaptor
</span><br>
<p>To be clear: the TCP BTL will use all TCP interfaces (regardless of underlying physical transport).  Your GigE adapter and your IP adapter both present IP interfaces to the OS, and both support TCP.  So the TCP BTL will use them, because it just sees the TCP/IP interfaces.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23845.php">Ralph Castain: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Previous message:</strong> <a href="23843.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>In reply to:</strong> <a href="23843.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23852.php">Jianyu Liu: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
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
