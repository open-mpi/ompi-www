<?
$subject_val = "Re: [OMPI users] openmpi over tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 16:30:03 2009" -->
<!-- isoreceived="20090129213003" -->
<!-- sent="Thu, 29 Jan 2009 16:29:57 -0500" -->
<!-- isosent="20090129212957" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi over tcp" -->
<!-- id="3F74A247-0A9D-46BB-B0DE-E6F3BB97B821_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090129201847.GA27890_at_yakko.bartol.udel.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-29 16:29:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7889.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Previous message:</strong> <a href="7887.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>In reply to:</strong> <a href="7883.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7889.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7889.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send the full output described here (including all network  
<br>
setup stuff):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Jan 29, 2009, at 3:18 PM, Daniel De Marco wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Ralph Castain &lt;rhc_at_[hidden]&gt; [01/29/2009 14:27]:
</span><br>
<span class="quotelev2">&gt;&gt; It is quite likely that you have IPoIB on your system. In that  
</span><br>
<span class="quotelev2">&gt;&gt; case, the
</span><br>
<span class="quotelev2">&gt;&gt; TCP BTL will pickup that interface and use it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you have a specific interface you want to use, try -mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_if_include eth0 (or whatever that interface is). This tell  
</span><br>
<span class="quotelev2">&gt;&gt; the TCP
</span><br>
<span class="quotelev2">&gt;&gt; BTL to only use the specified interface, so it will either fail (if  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; interface isn't available or doesn't exist) or use only that one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; no, I don't have IPoIB configured. I tried anyway your suggestion  
</span><br>
<span class="quotelev1">&gt; and I
</span><br>
<span class="quotelev1">&gt; got the same results as before. The weird thing is that even if use
</span><br>
<span class="quotelev1">&gt; 	-mca btl_tcp_if_include eth2
</span><br>
<span class="quotelev1">&gt; where eth2 doesn't exist I get the same results...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, Daniel.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7889.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Previous message:</strong> <a href="7887.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>In reply to:</strong> <a href="7883.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7889.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7889.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
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
