<?
$subject_val = "Re: [OMPI devel] How is a MPI process launched ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 27 23:38:31 2010" -->
<!-- isoreceived="20100428033831" -->
<!-- sent="Wed, 28 Apr 2010 09:08:22 +0530 (IST)" -->
<!-- isosent="20100428033822" -->
<!-- name="Leo P." -->
<!-- email="leo_7892003_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How is a MPI process launched ?" -->
<!-- id="223793.86869.qm_at_web8707.mail.in.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="79C2DA9B-34B0-4BFD-A301-ED7693585390_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How is a MPI process launched ?<br>
<strong>From:</strong> Leo P. (<em>leo_7892003_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-27 23:38:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Previous message:</strong> <a href="7828.php">Ralph Castain: "Re: [OMPI devel] 1.4.2rc2"</a>
<li><strong>In reply to:</strong> <a href="7818.php">Jeff Squyres: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Reply:</strong> <a href="7830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, 

Sorry, can't use IPv6 right now but may be in the future. 

When you're talking to someone behind NAT (or any type of firewall), how do you know to whom you're actually talking?

If Machine A can talk to machine C in front of NAT and that machine can relay the data packet to the machine B behind the NAT. From Machine A perspective won't it be just like talking to machine B. May be use IPTABLES to specify the route on the port range. 

There are ways, of course, but it's quite complicated if connection initiation can effectively only flow in one direction. 

Jeff, can you tell me the most simple way. It does not have to be perfect. 

Thanks



________________________________
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
Sent: Tue, 27 April, 2010 9:12:07 PM
Subject: Re: [OMPI devel] How is a MPI process launched ?

On Apr 27, 2010, at 10:06 AM, Leo P. wrote:

&gt; Ralph has talked about the other parts already; so I'll ask about the BTL: what type of network are you looking to route via the BTL?
&gt; 
&gt; I am talking about two different network using a private IP and all the communication being routed through a NAT router 

There's a bunch of issues with this; I know that the U. Tennessee and INRIA folks have dug into at least some of them.

When you're talking to someone behind NAT (or any type of firewall), how do you know to whom you're actually talking?  There are ways, of course, but it's quite complicated if connection initiation can effectively only flow in one direction.

Can you just use IPv6?

-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>


_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>



<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7829/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Previous message:</strong> <a href="7828.php">Ralph Castain: "Re: [OMPI devel] 1.4.2rc2"</a>
<li><strong>In reply to:</strong> <a href="7818.php">Jeff Squyres: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Reply:</strong> <a href="7830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] How is a MPI process launched ?"</a>
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
