<?
$subject_val = "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 15:31:28 2016" -->
<!-- isoreceived="20160510193128" -->
<!-- sent="Tue, 10 May 2016 13:31:21 -0600" -->
<!-- isosent="20160510193121" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled" -->
<!-- id="57323709.5080204_at_cora.nwra.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="001401d1aad0$11f407e0$35dc17a0$_at_soft-forge.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 15:31:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29161.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29159.php">Ralph Castain: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>In reply to:</strong> <a href="29155.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29161.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29161.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/10/2016 09:24 AM, Llolsten Kaonga wrote:
<br>
<span class="quotelev1">&gt; Hello Durga,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I mentioned earlier, up to version 1.8.2, we would just disable SELinux and
</span><br>
<span class="quotelev1">&gt; the IPv4 firewall and things run smoothly. It was only when we installed
</span><br>
<span class="quotelev1">&gt; version 1.10.2 (CentOS 7.2) that we run into these troubles. CentOS 7.2 no
</span><br>
<span class="quotelev1">&gt; longer seems to bother with the IPv4 firewall, so you can&#146;t do:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # service iptables save
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # service iptables stop
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # chkconfig iptables off
</span><br>
<p>I'll just note that you can either embrace the new firewalld config (and use
<br>
firewall-cmd to open your needed ports) or you can remove firewalld and
<br>
install iptables-services and go back to the old iptables method of
<br>
configuring the firewall.  If you don't want a firewall at all, just remove
<br>
firewalld.
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder/CoRA Office             FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29161.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29159.php">Ralph Castain: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>In reply to:</strong> <a href="29155.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29161.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Reply:</strong> <a href="29161.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
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
