<?
$subject_val = "Re: [OMPI users] Question on handling of memory for communications";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 10:57:39 2013" -->
<!-- isoreceived="20130708145739" -->
<!-- sent="Mon, 8 Jul 2013 14:57:33 +0000" -->
<!-- isosent="20130708145733" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on handling of memory for communications" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6F2A8F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+OO3AWWEifErSfbFACQZNDon0hxxmyH==_x3r_7yav3xmPAMQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on handling of memory for communications<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 10:57:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22276.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Previous message:</strong> <a href="22274.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Trouble with MPI_Recv not filling buffer"</a>
<li><strong>In reply to:</strong> <a href="22268.php">Michael Thomadakis: "[OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22276.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22276.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 6, 2013, at 4:59 PM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; When you stack runs on SandyBridge nodes atached to HCAs ove PCI3 gen 3 do you pay any special attention to the memory buffers according to which socket/memory controller  their physical memory belongs to?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For instance, if the HCA is attached to the PCIgen3 lanes of Socket 1 do you do anything special when the read/write buffers map to physical memory belonging to Socket 2? Or do you7 avoid using buffers mapping ro memory that belongs (is accessible via) the other socket?
</span><br>
<p>It is not *necessary* to do ensure that buffers are NUMA-local to the PCI device that they are writing to, but it certainly results in lower latency to read/write to PCI devices (regardless of flavor) that are attached to an MPI process' local NUMA node.  The Hardware Locality (hwloc) tool &quot;lstopo&quot; can print a pretty picture of your server to show you where your PCI busses are connected.
<br>
<p>For TCP, Open MPI will use all TCP devices that it finds by default (because it is assumed that latency is so high that NUMA locality doesn't matter).  The openib (OpenFabrics) transport will use the &quot;closest&quot; HCA ports that it can find to each MPI process.  
<br>
<p>In our upcoming Cisco ultra low latency BTL, it defaults to using the closest Cisco VIC ports that it can find for short messages (i.e., to minimize latency), but uses all available VICs for long messages (i.e., to maximize bandwidth).
<br>
<p><span class="quotelev1">&gt; Has this situation improved with Ivy-Brige systems or Haswell?
</span><br>
<p>It's the same overall architecture (i.e., NUMA).
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
<li><strong>Next message:</strong> <a href="22276.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Previous message:</strong> <a href="22274.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Trouble with MPI_Recv not filling buffer"</a>
<li><strong>In reply to:</strong> <a href="22268.php">Michael Thomadakis: "[OMPI users] Question on handling of memory for communications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22276.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>Reply:</strong> <a href="22276.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
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
