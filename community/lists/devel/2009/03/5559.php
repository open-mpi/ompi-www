<?
$subject_val = "Re: [OMPI devel] How to configure Open MPI on multi-port IB HCA cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 13:46:45 2009" -->
<!-- isoreceived="20090303184645" -->
<!-- sent="Tue, 3 Mar 2009 13:46:39 -0500" -->
<!-- isosent="20090303184639" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to configure Open MPI on multi-port IB HCA cluster" -->
<!-- id="ABC7ACEF-9017-4A1E-B7F0-CC1D6891E4D6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6044_1236065774_n237a9Tb018468_49ACE0D7.5040003_at_cs.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How to configure Open MPI on multi-port IB HCA cluster<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 13:46:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5560.php">Jeff Squyres: "[OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="5558.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5547.php">Jie Cai: "[OMPI devel] How to configure Open MPI on multi-port IB HCA cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 3, 2009, at 2:48 AM, Jie Cai wrote:
<br>
<p><span class="quotelev1">&gt; We have installed a dual-port ConnectX HCA cluster with PIC-E 2.0  
</span><br>
<span class="quotelev1">&gt; slots,
</span><br>
<span class="quotelev1">&gt; and each port represented as individual interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How to configure the Open MPI and hardware system
</span><br>
<span class="quotelev1">&gt; to correctly use the both ports for communication?
</span><br>
<p>Open MPI should just see and use both ports automatically (assuming  
<br>
that they are ACTIVE).
<br>
<p><span class="quotelev1">&gt; Are we expecting to see wider bandwidth with Open MPI?
</span><br>
<p>It depends on both your server and network setup.
<br>
<p>The transfer rate across PCIe 2.0 cannot send enough data to keep 2  
<br>
DDR HCA ports full.  So it is unlikely that you will see much of a  
<br>
bandwidth improvement.
<br>
<p>Assuming that your 2 HCA ports are plugged into either 2 separate IB  
<br>
subnets or different locations in the same subnet, you'll get a wider  
<br>
dispersion of fragments across your network, potentially avoiding some  
<br>
network congestion.  But this behavior is very much dependent on what  
<br>
else is occurring simultaneously elsewhere in your IB subnet, which is  
<br>
likely to be application- / cluster-specific behavior.
<br>
<p><span class="quotelev1">&gt; In order to see the improvement of bandwidth, do I need to specific
</span><br>
<span class="quotelev1">&gt; configure Open MPI and the hardware?
</span><br>
<p><p>To really get 2 x DDR performance, you likely need two separate busses  
<br>
with two separate HCAs.
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
<li><strong>Next message:</strong> <a href="5560.php">Jeff Squyres: "[OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="5558.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5547.php">Jie Cai: "[OMPI devel] How to configure Open MPI on multi-port IB HCA cluster"</a>
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
