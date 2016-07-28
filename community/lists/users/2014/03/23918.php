<?
$subject_val = "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 10:13:55 2014" -->
<!-- isoreceived="20140321141355" -->
<!-- sent="Fri, 21 Mar 2014 14:13:54 +0000" -->
<!-- isosent="20140321141354" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: problem for multiple clusters using mpirun" -->
<!-- id="350675FE-4923-456D-A0DF-C87F35C18CE9_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAADBNWxH6b6GsBmNOCyLPBLStEgAASY-HyNvqAW0mrnrr+3-4g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: problem for multiple clusters using mpirun<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-21 10:13:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23919.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23917.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>In reply to:</strong> <a href="23916.php">Hamid Saeed: "[OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23919.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Reply:</strong> <a href="23919.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 21, 2014, at 10:09 AM, Hamid Saeed &lt;e.hamidsaeed_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt; &gt; I think i have a tcp connection. As for as i know my cluster is not configured for Infiniband (IB).
</span><br>
<p>Ok.
<br>
<p><span class="quotelev2">&gt; &gt; but even for tcp connections.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -n 2 -host master,node001 --mca btl tcp,sm,self ./helloworldmpi
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -n 2 -host master,node001 ./helloworldmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; These line are not working they output
</span><br>
<span class="quotelev2">&gt; &gt; Error like
</span><br>
<span class="quotelev2">&gt; &gt; [btl_tcp_endpoint.c:655:mca_btl_tcp_endpoint_complete_connect] connect() to xx.xxx.x.xxx failed: Connection refused (111)
</span><br>
<p>What are the IP addresses reported by connect()?  (i.e., the address you X'ed out)
<br>
<p>Send the output from ifconfig on each of your servers.  Note that some Linux distributions do not put ifconfig in the default PATH of normal users; look for it in/sbin/ifconfig or /usr/sbin/ifconfig.
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
<li><strong>Next message:</strong> <a href="23919.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23917.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>In reply to:</strong> <a href="23916.php">Hamid Saeed: "[OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23919.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Reply:</strong> <a href="23919.php">Hamid Saeed: "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
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
