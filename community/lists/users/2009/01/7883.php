<?
$subject_val = "Re: [OMPI users] openmpi over tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 15:18:51 2009" -->
<!-- isoreceived="20090129201851" -->
<!-- sent="Thu, 29 Jan 2009 15:18:47 -0500" -->
<!-- isosent="20090129201847" -->
<!-- name="Daniel De Marco" -->
<!-- email="ddm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi over tcp" -->
<!-- id="20090129201847.GA27890_at_yakko.bartol.udel.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C98133A5-02B9-47AF-89DE-541E276CFCD8_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi over tcp<br>
<strong>From:</strong> Daniel De Marco (<em>ddm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-29 15:18:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7884.php">Brock Palen: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Previous message:</strong> <a href="7882.php">Rolf vandeVaart: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="7879.php">Ralph Castain: "Re: [OMPI users] openmpi over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7884.php">Brock Palen: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7884.php">Brock Palen: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7885.php">Joe Landman: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7888.php">Jeff Squyres: "Re: [OMPI users] openmpi over tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>* Ralph Castain &lt;rhc_at_[hidden]&gt; [01/29/2009 14:27]:
<br>
<span class="quotelev1">&gt; It is quite likely that you have IPoIB on your system. In that case, the 
</span><br>
<span class="quotelev1">&gt; TCP BTL will pickup that interface and use it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have a specific interface you want to use, try -mca 
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include eth0 (or whatever that interface is). This tell the TCP 
</span><br>
<span class="quotelev1">&gt; BTL to only use the specified interface, so it will either fail (if that 
</span><br>
<span class="quotelev1">&gt; interface isn't available or doesn't exist) or use only that one.
</span><br>
<p>no, I don't have IPoIB configured. I tried anyway your suggestion and I
<br>
got the same results as before. The weird thing is that even if use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca btl_tcp_if_include eth2
<br>
where eth2 doesn't exist I get the same results...
<br>
<p>Thanks, Daniel.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7884.php">Brock Palen: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Previous message:</strong> <a href="7882.php">Rolf vandeVaart: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="7879.php">Ralph Castain: "Re: [OMPI users] openmpi over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7884.php">Brock Palen: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7884.php">Brock Palen: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7885.php">Joe Landman: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7888.php">Jeff Squyres: "Re: [OMPI users] openmpi over tcp"</a>
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
